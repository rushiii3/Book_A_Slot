<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Department</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
<div class="container-fluid mt-5 ">
            <form action="add_audi.php" method="POST">
                <div class="form-outline w-50 m-auto">
                    <label for="ar_name " class="form-label fw-bold">Auditorium Or Room  Name</label>
                    <input type="text" id="ar_name" name="ar_name" class="form-control" >
                </div>
                <div class="form-outline w-50 m-auto">
                    <label for="floor" class="form-label fw-bold">Floor </label>
                    <input type="text" id="floor" name="floor" class="form-control" >
                </div>
                <div class="form-outline w-50 m-auto">
                    <label for="capacity" class="form-label fw-bold">Capacity</label>
                    <input type="text" id="capacity" name="capacity" class="form-control" >
                </div>
                <div class="text-center mt-3">
                    <input type="submit" name="add_ar" value="ADD" class="btn btn-info px-3 mb-3">    
                </div>
            </form>      
</div>    
<?php
    include('./connection/connect.php');
if(isset($_POST['add_ar'])){
    $ar_name=$_POST['ar_name'];
    $floor=$_POST['floor'];
    $capacity=$_POST['capacity'];
    if($ar_name=='' or $capacity=='' or $floor==''){
        echo "<script>alert('Please fill the field first')</script>";
    }
    else{
    $add_ar="Insert into `AUDI_ROOM`(ar_name,floor,capacity) value('$ar_name','$floor',$capacity)";
    $result=mysqli_query($con,$add_ar);
    if($result){
        header('location:./admin_home.php?add_ar');
    }
    else{
        die(mysqli_error($con));
    }
}
}
?>
</body>
</html>