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
    $ar_name=$_GET['delete_id'];
    $delete_ar="delete from `AUDI_ROOM` where ar_name='$ar_name'";
    $result=mysqli_query($con,$delete_ar);
    if($result){
        header('location:./admin_home.php?delete_ar');
    }
    else{
        die(mysqli_error($con));
    }
  }
  ?> 
</body>
</html>