<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DELETE</title>
</head>
<body>
  <?php
  include './connection/connect.php';
  if(isset($_GET['delete_id'])){
    $department_name=$_GET['delete_id'];
    $delete_dept="delete from `DEPARTMENT` where department_name='$department_name'";
    $result=mysqli_query($con,$delete_dept);
    if($result){
        header('location:./admin_home.php?delete_dept');
    }
    else{
        die(mysqli_error($con));
    }
  }
  ?> 
</body>
</html>