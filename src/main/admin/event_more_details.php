<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</head>
<style>
  .con1{
        display: grid;
        place-items: center;
    }
</style>
<body>

  <!-- to fetch data -->
    <?php
    include '../connection/connect.php';
    if(isset($_GET['event_id'])){
        $event_id=$_GET['event_id'];
        $get_event="select * from `EVENT` where event_id=$event_id ";
        $result=mysqli_query($con,$get_event);
        $row=mysqli_fetch_assoc($result);
        $event_id=$row['event_id'];
        $event_name=$row['event_name'];
        $event_start_time=$row['event_start_time'];
        $event_end_time=$row['event_end_time'];
        $students_total_number=$row['students_total_number'];
        $ar_name=$row['ar_name'];
        $organization_institute	=$row['organization_institute'];
        $request_date_time=$row['request_date_time'];
        $event_description=$row['event_description'];
    }
    ?>
    <!-- to approve event  -->
    <?php
if(isset($_POST['approve_event_id'])){
    $event_id=$_POST['event_id'];
    $update_event_status="update `EVENT` set status_value='approved' where event_id=$event_id";
    $result=mysqli_query($con,$update_event_status);
    if($result){
       header("location:./admin_home.php");
    }
    else{
        die(mysqli_error($con));
    }
}
?>
<!-- event not approved -->
<?php
include '../connection/connect.php';
if(isset($_POST["reason"])){
  $status_reason=$_POST['status_reason'];
  // if( isset($_GET['event_not_approved_id'])){
  $event_id=$_POST['event_id'];
  $update_event_reason="update `EVENT` set status_reason='$status_reason',status_value='not approved' where event_id=$event_id ";
  $result=mysqli_query($con,$update_event_reason);
      if($result){
         header("location:./admin_home.php");
      }
      else{
          die(mysqli_error($con));
      }
}

?>
<div class='container-fluid mt-5'>
  <div class="row">
    <div class="col-md-10 col-lg-10 m-auto">
    <?php
                include '../user/navigation.html';
                ?>
    <div class="row">
        <div class="col-md-6 col-lg-7">
          <div class="con1 my-5">
            <table class='table table-bordered ' >
              <thread class="bg-info">
                <tr>
                  <th class="text-center">Title</th>
                  <th class="text-center">Description</th>
                </tr>
              </thread>
              <tbody class="bg-primary text-light text-center">
                <tr>
                  <td>Event id </td>
                  <td><?php echo $event_id?></td>
                </tr>
                <tr>
                  <td>Event Name</td>
                  <td><?php echo $event_name?></td>
                </tr>
                <tr>
                  <td>Event Description</td>
                  <td><?php echo $event_description?></td>
                </tr>
                <tr>
                  <td>Event Start Time</td>
                  <td><?php echo $event_start_time?></td>
                </tr>
                <tr>
                  <td>Event End Time</td>
                  <td><?php echo $event_end_time?></td>
                </tr>
                <tr>
                  <td>Number Of Students Paricipating Event</td>
                  <td class="mt-2"><?php echo $students_total_number?></td>
                </tr>
                <tr>
                  <td>Event Place</td>
                  <td class="mt-2"><?php echo $ar_name?></td>
                </tr>
                <tr>
                  <td>Event Organizer</td>
                  <td class="mt-2"><?php echo $organization_institute?></td>
                </tr>
              </tbody>
            </table>
            </div>
            <form name="approvalForm" action='event_more_details.php' method='POST' >
                <div class='form-outline w-50 m-auto my-2'>
                    <input type='hidden' name='event_id' readonly class='form-control bg-primary text-light ' value='<?php echo $event_id?>'>
                </div>
                <div class='text-center mt-3'>
                    <input type='submit' id='approve_event_id' name='approve_event_id' value='Approve' class='btn btn-success px-3 mb-3'>
                    <a  style='text-decoration:none'  type='button' class='text-light' data-toggle='modal' data-target='#exampleModalCenter'> 
                    <input type='submit' id='not_approve_event_id' name='not_approve_event_id' value='Not Approve' class='btn btn-danger px-3 mb-3'></a>
                </div>
            </form>
        </div>
        <div class="col-md-4 col-lg-5">
            <img src="https://tse2.mm.bing.net/th?id=OIP.Gde1iAYuuGbikzWG-R6OzgHaE7&pid=Api&P=0"
             alt="image" style="height:100%;width:90%">
        </div>
    </div> 
    </div>
  </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
    <form method='POST' action='event_more_details.php'>
      <div class="modal-body">
      <input type='hidden' name='event_id' readonly class='form-control bg-primary text-light ' value='<?php echo $event_id?>'>
      <label for="ar_name " class="form-label fw-bold">Reason For Not Approving Event Request</label>
      <input type="text" class="w-100" name='status_reason' autocomplete="off" placeholder='eg......' required>
      <div class="modal-footer">
        <button type="submit" class="btn btn-primary" name="reason">
        OK</button>
        <!-- <a  style='text-decoration:none' href='event_more_details.php?event_not_approved_id=<?php echo $event_id?>' class='text-light text-decoration-none' > <a>-->
       
      </div>
      
      </div>
    </div>
    </form>
  </div>
</div> 
</body>
</html>

