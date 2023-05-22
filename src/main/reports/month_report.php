<?php
include '../connection/connect.php';
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
=======
>>>>>>> 9d56e23 (report home)

if(isset($_POST['close'])){
    header('location:../report_home.php');
}

<<<<<<< HEAD
=======
>>>>>>> 4dd1ec8 (month report)
=======
>>>>>>> 9d56e23 (report home)
=======
>>>>>>> 4dd1ec8 (month report)
if(isset($_POST['month_report'])){
    $month=$_POST['month'];
    $year=$_POST['year'];
    if($year==''){
        echo "<script>alert('Please Enter a year')</script>";
        echo("<script>window.location='../report_home.php';</script>");
    }
    // else{
        
    //     $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
    //     $result=mysqli_query($con,$get_event);
    //     if($result){
    //         while($row=mysqli_fetch_assoc($result)){
    //             $event_name=$row['event_name'];
    //             echo $event_name;
    //         }
    //     }
    //     else{
    //         die(mysqli_error($con));
    //     }
    // }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Month wise Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <?php
                include '../navigation.html';
                ?>
           <?php
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
           $get_event="Select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved'";
=======
           $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
>>>>>>> 4dd1ec8 (month report)
=======
           $get_event="Select * from `EVENT` where MONTH(event_date)='$month' and YEAR(event_date)='$year' and status_value='approved'";
>>>>>>> 9d56e23 (report home)
=======
           $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
>>>>>>> 4dd1ec8 (month report)
           $result=mysqli_query($con,$get_event);
           $count=0;
           while($row=mysqli_fetch_assoc($result)){
            $count++;
           }
           ?>
           <?php
           if($count>0){
            echo"
            <table  class='table table-bordered my-4 ' style='align-items:center'>
            <thead >
            <tr >
                <th class='text-center'>Event Name</th>
                <th class='text-center'>Event Date</th>
                <th class='text-center'> Event Description</th>
                <th class='text-center'>Event Start Time</th>
                <th class='text-center'>Event End Time</th>
                <th class='text-center'>Organization Institute</th>
                <th class='text-center'>Number of participants</th>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <th class='text-center'>Event Place</th>
=======
>>>>>>> 4dd1ec8 (month report)
=======
                <th class='text-center'>Event Place</th>
>>>>>>> 9d56e23 (report home)
=======
>>>>>>> 4dd1ec8 (month report)
            </tr>
            </thead>
            <tbody class='bg-primary'>";
            
            $get_event="Select * from `EVENT` where MONTH(event_date)=$month and YEAR(event_date)=$year and status_value='approved'";
            $result=mysqli_query($con,$get_event);
            
            while($row=mysqli_fetch_assoc($result)){
                $event_name=$row['event_name'];
                $event_date=$row['event_date'];
                $event_description=$row['event_description'];
                $event_start_time=$row['event_start_time'];
                $event_end_time=$row['event_end_time'];
                $organization_institute=$row['organization_institute'];
                $students_total_number=$row['students_total_number'];
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                $ar_name=$row['ar_name'];
=======
               
>>>>>>> 4dd1ec8 (month report)
=======
                $ar_name=$row['ar_name'];
>>>>>>> 9d56e23 (report home)
=======
               
>>>>>>> 4dd1ec8 (month report)
                echo"<tr class='text-center text-light'><td> $event_name</td>
                <td> $event_date</td>
                <td> $event_description</td>
                <td> $event_start_time</td>
                <td> $event_end_time</td>
                <td>$organization_institute</td>
                <td>$students_total_number</td>
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                <td>$ar_name</td>
=======
>>>>>>> 4dd1ec8 (month report)
=======
                <td>$ar_name</td>
>>>>>>> 9d56e23 (report home)
=======
>>>>>>> 4dd1ec8 (month report)
                </tr>
                ";
            }
        }
            else{
                echo "<h1 class='text-center'>No Event occur in this month of $year</h1>";
            }
            ?>
            </tbody>
            
            </table>
            <!-- to download excel file -->
            <?php
<<<<<<< HEAD
<<<<<<< HEAD
            if($count>=1){
            echo"
            <form action='download.php' method='get'>
            <input type='hidden' name='month' value='$month'>
            <input type='hidden' name='year' value='$year'>
=======
            if($count>1){
            echo"
            <form action='download.php' method='get'>
            <input type='hidden' name='month' value='<?php echo $month;?>'>
            <input type='hidden' name='year' value='<?php echo $year;?>'>
>>>>>>> 4dd1ec8 (month report)
=======
            if($count>=1){
            echo"
            <form action='download.php' method='get'>
            <input type='hidden' name='month' value='$month'>
            <input type='hidden' name='year' value='$year'>
>>>>>>> a8eddd9 (month report done)
            <a href='download.php'><button type='submit' class='btn btn-success' name='month_report'>click here to download excel</button>
            </form>";}
            ?>
            </div>
        </div>    
</div>    
</body>
</html>
