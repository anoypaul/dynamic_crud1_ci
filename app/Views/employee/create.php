<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Data</title>

    <style>
        /* .action{
            background-color:gray;
            text-align:center;
            width: 400px ;
            margin: auto;
            margin-top: 20px;
            padding: 20px;
            border-radius: 5px;
        }
        input[type=text], select {
            width: 100% auto;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        input[type=submit] {
            width: 100% auto;
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            display: inline-block;
        }
       */

      .update{
            text-align: center;
            background: grey;
            border-radius: 5px;
            width:100px;
            padding:2px;
            margin: 0 auto;
            cursor: pointer;
           
        }
        .update h4 a{
            text-decoration: none;
            color: white;
        }


       h4{
          text-align: center;
          margin: 0px;
          padding: 5px;
      }

        input[type=text], select {
        width: 100%;
        padding: 8px 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        input[type=file], select {
        width: 100%;
        padding: 8px 10px;
        margin: 8px 0;
        display: inline-block;
        border: 1px solid #ccc;
        border-radius: 4px;
        box-sizing: border-box;
        }

        button {
        width: 100%;
        background-color: #4CAF50;
        color: white;
        padding: 8px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        }

        input[type=submit]:hover {
        background-color: #45a049;
        }

        div {
        border-radius: 5px;
        background-color: #f2f2f2;
        padding: 20px;
        width: 500px;
        margin: 0 auto;
        }
    </style>

</head>
<body>
<div>
    
<div class="update">
        <h4>
            <a href="<?= base_url('employee') ?>" >BACK</a>
        </h4>
    </div>



    <form action="<?= base_url('employee-store') ?>" method="POST" enctype="multipart/form-data">
        <h4>Update data</h4>

        <label for="image">Image</label>
        <input type="file" id="image" name="image" placeholder="Your image..">

        <label for="fname">First Name</label>
        <input type="text" id="fname" name="first_name" placeholder="Your name..">

        <label for="lname">Last Name</label>
        <input type="text" id="lname" name="last_name" placeholder="Your last name..">

        <label for="lname">Phone</label>
        <input type="text" id="phone" name="phone" placeholder="Your phone number..">

        <label for="lname">Email</label>
        <input type="text" id="email" name="email" placeholder="Your email address..">

        <label for="lname">Designation</label>
        <input type="text" id="designation" name="designation" placeholder="Your designation..">

        <button type="submit">save Employee</button>
        <!-- <input type="submit" value="Update"> -->
    </form>


</div>

</body>
</html>