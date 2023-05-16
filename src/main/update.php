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
$department_name=$_GET['update_id'];
// $get_dept="select * from `DEPARTMENT` where department_name='$department_name'";
// $result=mysqli_query($con,$get_dept);
// $row=mysqli_fetch_assoc($result);
// $department_name=$row['department_name'];
// echo $department_name;
}
if(isset($_POST['update_dept'])){
//    $department_name= $_GET['update_id'];
  $department_name=$_POST['department_name_original'];
    $dept=$_POST['department_name_new'];
    $sql="UPDATE `DEPARTMENT` set department_name='$dept' where department_name='$department_name' ";
      $result=mysqli_query($con,$sql);

// }
      if($result){
        //echo "<p class='text-aign'>Data updated Successfully ";
        header("location:./admin_home.php?update_dept");
      }
      else{
        echo "<p class='text-aign'>Data Is Not updated Successfully ";
      
      }
}
?>
<div class='container-fluid mt-5'>
            <form action='update.php' method='POST'>
            <div class='form-outline w-50 m-auto'>
                    <label for='department_name' class='form-label fw-bold'>Cuurent Department Name</label>
                    <input type='text' id='department_name_original' name='department_name_original' readonly class='form-control' value='<?php echo $department_name?>'>
                </div>
                <div class='form-outline w-50 m-auto'>
                    <label for='department_name' class='form-label fw-bold'>New Department Name </label>
                    <input type='text' id='department_name_new' name='department_name_new' class='form-control' placeholder='Enter Deartment name'>
                </div>
                <div class='text-center mt-3'>
                    <input type='submit' id='update_dept' name='update_dept' value='Update' class='btn btn-info px-3 mb-3'>
                    
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