<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
     
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
    
    <style>
        .update{
            text-align: center;
            background: grey;
            border-radius: 5px;
            width:110px;
            padding:2px;
            margin: 0 auto;
            cursor: pointer;
           
        }
        .update h4 a{
            text-decoration: none;
            color: white;
        }
        .content-table{
            border-collapse:collapse;
            margin: 25px auto;
            font-size: 20px;
            min-width: 400px;
        }
        .content-table thead tr{
            background-color: #009879;
            color: #ffffff;
            text-align: left;
            font-weight: bold;
        }
        .content-table th,
        .content-table td{
            padding: 12px 15px;
        }
        /* .content-table tbody{
            display: block;
        } */
        .content-table tbody tr{
            border-bottom: 1px solid #dddddd;
        }
        .content-table tbody tr:nth-of-type(even){
            background-color: #f3f3f3;
        }
        .content-table tbody tr:last-of-type{
            border-bottom: 2px solid #009879;
        }
    </style>

</head>
<body>
    <?php 
        if(session()->getFlashdata('status')){
            echo "<h4>".session()->getFlashdata('status')."</h4>";
        }
    ?>
    <div class="update">
        <h4>
            <a href="<?= base_url('employee-add') ?>" >Add Employee</a>
        </h4>
    </div>
    <table id="tbl" class="content-table">
        <thead>
            <tr>
                <th>card</th>
                <th>sl.</th>
                <th>image</th>
                <th>first_name</th>
                <th>last_name</th>
                <th>phone</th>
                <th>email</th>
                <th>desgination</th>
                <th>created_at</th>
                <th>action</th>
            </tr>
        </thead>
        <tbody>
        <?php
            $serial = 0;
            // echo '<pre>';print_r($employee);exit;
          foreach($employee as $row) { ?>
            <tr>
               <td>
               <!--<a href="</?= base_url('employee/edit/'.$row['id']) ?>" class="btn1 ">Detells</a>-->
               <a href="<?= base_url('employee/detail/'.$row['id']) ?>" class="btn1 ">show</a>

               </td>
                <td><?= ++$serial  ?></td>
                <td>
                    <img src="<?= base_url()?>/uploads/<?= $row['image']; ?>" height="50px" width="50px" alt="Image">
                </td>
                <td><?= $row['first_name'] ?></td>
                <td><?= $row['last_name'] ?></td>
                <td><?= $row['phone'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['designation'] ?></td>
                <td><?= $row['created_at'] ?></td>
                
                <td>

                    <a href="<?= base_url('employee/edit/'.$row['id']) ?>" class="btn1 ">Edit</a>
                    
                    <form action="<?= base_url('employee/delete/'.$row['id'])?>" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn2">DELETE</button>
                    </form>
                    <!--<a href="</?= base_url('employee/delete/'.$row['id']) ?>" class="btn1 ">delete</a>-->
                </td>
               
            </tr>
            <?php } ?>
          
        </tbody>

        <script>
            $(document).ready(function(){
                $('#tbl').DataTable();
            });
        </script>
    </table>
</body>
</html>

    


