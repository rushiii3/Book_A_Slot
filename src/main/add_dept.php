<?php
include './connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
       
    .con1{
        display: grid;
        place-items: center;
    }
        </style>
</head>
<body class='text-center w-50 m-auto'>
    <!-- <div class="container-fluid text-center m-auto">
        <div class="row">
            <div class="col-md-8 col-lg-6 mb-4 "> -->
    <div class="con1 mt-3 ">
    <h1 class='text-center text-primary'>Add New Department</h1>
    <table  class='table table-bordered my-4' style="align-items:center">
    <thread class="bg-info">
        <tr >
        <th class="text-center"> Sr. No</th>
           <th class="text-center"> DEPARTMENT NAMES</th>
        </tr>
        </thread> 
    <tbody class="bg-primary">
        <?php
        $get_dept="select * from `DEPARTMENT` ";
        $result=mysqli_query($con,$get_dept);
        $number=0;
        while($row=mysqli_fetch_assoc($result)){
            $department_name=$row['department_name'];
            $number++;
            echo"
            <tr class='text-center text-light'><td> $number</td>
            <td> $department_name</td></tr>";
            }
            ?>
        </tbody>    
    </table>
    <div class="mt-2">
     <a href='./add.php'><input type="submit" name="add_dept" value="ADD" class="btn btn-primary px-3 mb-3"></a>
     </div>          
    </div>
   
</body>
</html>