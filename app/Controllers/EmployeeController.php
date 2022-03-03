<?php namespace App\Controllers;

use App\Models\Employee;

class EmployeeController extends BaseController{
    public function index(){
        $employee = new Employee();
        $data['employee'] = $employee->findAll();
        return view('employee/index', $data);
    }

    public function create(){
        return view('employee/create');
    }

    public function store(){
        $employee = new Employee();
        $file = $this->request->getFile('image');
        if ($file->isValid() && !$file->hasMoved()) {
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);
        }


        $data = [
            'image' => $imageName,
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'), 
            'designation' => $this->request->getPost('designation'),

        ];

        // echo "<pre>";
        // print_r($data);
        // exit;
        $employee->save($data);
        return redirect()->to(base_url('/'))->with('status','Employee Added Successfully');
    }





    public function detail($id){
        $employee = new Employee();
        $data['employee'] = $employee->find($id);
        return view('employee/detail', $data);
    }

    public function edit($id){
        $employee = new Employee();
        $data['employee'] = $employee->find($id);
        return view('employee/edit', $data);
        // return view('employee/edit');
    }

    public function update($id){
        $employee = new Employee();
        $employee_item = $employee->find($id);
        $old_img_name = $employee_item['image'];

        $file = $this->request->getFile('image');
        if($file->isValid() && !$file->hasMoved()){
            if(file_exists("uploads/".$old_img_name)){
                unlink("uploads/".$old_img_name);
            }
            
            $imageName = $file->getRandomName();
            $file->move('uploads/', $imageName);

        }
        else{
             $imageName = $old_img_name;   
        }
        // $employee->find($id);
        $data = [
            'image' => $imageName,
            // 'image' => $this->request->getPost('image'),
            'first_name' => $this->request->getPost('first_name'),
            'last_name' => $this->request->getPost('last_name'),
            'phone' => $this->request->getPost('phone'),
            'email' => $this->request->getPost('email'), 
            'designation' => $this->request->getPost('designation'),

        ];
        $employee->update($id, $data);
        return redirect()->to(base_url('/'))->with('status','Employee Updated Successfully');
        
    }

    public function delete($id){
        $employee = new Employee();
        $employee->delete($id);
        return redirect()->to(base_url('/'))->with('status','Employee Delete Successfully');
    }

    // public function update(){
    //     // $employee = new Employee();
    //     // $data['employee'] = $employee->findAll();
    //     // return view('employee/index', $data);
    //     return view('employee/update');
    // }
}

?>