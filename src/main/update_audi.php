<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
    <?php
    include './connection/connect.php';
    //  $department_name;
if(isset($_GET['update_id'])){
//  global $department_name;
$ar_name=$_GET['update_id'];
$get_ar="select * from `AUDI_ROOM` where ar_name='$ar_name'";
$result=mysqli_query($con,$get_ar);
$row=mysqli_fetch_assoc($result);
$ar_name=$row['ar_name'];
$floor=$row['floor'];
$capacity=$row['capacity'];
}
if(isset($_POST['update_ar'])){
    $ar_name=$_POST['ar_name_original'];
    $floor=$_POST['floor_original'];
    $capacity=$_POST['capacity_original'];
    $new_ar_name=$_POST['ar_name_new'];
    $new_floor=$_POST['floor_new'];
    $new_capacity=$_POST['capacity_new'];
    $sql="UPDATE `AUDI_ROOM` set ar_name='$new_ar_name',floor='$new_floor',capacity='$new_capacity' where ar_name='$ar_name' ";
      $result=mysqli_query($con,$sql);

// }
      if($result){
        //echo "<p class='text-aign'>Data updated Successfully ";
        header("location:./admin_home.php?update_ar");
      }
      else{
        echo "<p class='text-aign'>Data Is Not updated Successfully ";
      
      }
}
?>
<div class='container-fluid mt-5'>
            <form action='update_audi.php' method='POST'>
            <h3 class="text-center my-3 text-primary">Old Auditorium or Room Details</h3>
            <div class='form-outline w-50 m-auto'>
                    <label for='ar_name' class='form-label fw-bold'> AR Name</label>
                    <input type='text' id='ar_name_original' name='ar_name_original'  readonly class='form-control' value='<?php echo $ar_name?>'>
                </div>
                <div class='form-outline w-50 m-auto'>
                    <label for='floor' class='form-label fw-bold'> Floor</label>
                    <input type='text' id='floor_original' name='floor_original' readonly class='form-control' value='<?php echo $floor?>'>
                </div>
                <div class='form-outline w-50 m-auto'>
                    <label for='capacity' class='form-label fw-bold'> Capacity</label>
                    <input type='text' id='capacity_original' name='capacity_original' readonly class='form-control' value='<?php echo $capacity?>'>
                </div>
                <h3 class="text-center my-3 text-primary">Enter New Auditorium or Room Details</h3>
                <div class='form-outline w-50 m-auto'>
                    <label for='ar_name' class='form-label fw-bold'> Ar Name</label>
                    <input type='text' id='ar_name_new' name='ar_name_new'  class='form-control' placeholder="Enter AR name">
                </div>
                <div class='form-outline w-50 m-auto'>
                    <label for='floor' class='form-label fw-bold'> Floor</label>
                    <input type='text' id='floor_new' name='floor_new'  class='form-control' placeholder="Enter floor ">
                </div>
                <div class='form-outline w-50 m-auto'>
                    <label for='capacity' class='form-label fw-bold'> Capacity</label>
                    <input type='text' id='capacity_new' name='capacity_new'  class='form-control' placeholder="Enter capacity" >
                </div>
                <div class='text-center mt-3'>
                    <input type='submit' id='update_ar' name='update_ar' value='Update' class='btn btn-info px-3 mb-3'>
                    
                </div>
            </form>
        
</div> 
<?php
// editing department
// if(isset($_GET['update_id'])){
//     $department_name=$_GET['update_id'];
//     }

?>
</body>
</html>