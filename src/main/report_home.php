<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' href='../css/images.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    img{
    display: block;
    width: 500px;
    height: 500px;
    margin: 0 auto;
    transition: 0.3s;
}
.btn_style{
  display: flex;
  justify-content: center;
  align-items: center;
   /* Adjust the height according to your needs */
}
</style>
    <title>Reports</title>
</head>
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 4dd1ec8 (month report)
=======

>>>>>>> 9d56e23 (report home)
<body>
    <div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <?php
                include './navigation.html';
                ?>
                <button class="btn btn-primary w-50 m-auto d-flex justify-content-center fw-bolder" style="align-items: center;">REPORTS PANEL</button>
                <div class="row mt-5">
                    <div class="col-md-5 col-lg-5 m-auto">
<<<<<<< HEAD
<<<<<<< HEAD
=======
                            <!-- <h2>Room Occupacy Reports</h2> -->
>>>>>>> 4dd1ec8 (month report)
=======
>>>>>>> 9d56e23 (report home)
                        <img src="" alt="" id="image" >
                        
                        <button class="btn btn-primary mt-3 m-auto d-flex justify-content-center" data-bs-toggle="modal" data-bs-target="#exampleModal" >Get Month Wise Report</button>
                        
                    </div>
                    <div class="col-md-5 col-lg-5 m-auto">
                        <img src="" alt="" id="room">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                        <a href="./reports/room_occupacy.php" class="text-decoration:none" ><button class="btn btn-primary mt-3 m-auto d-flex justify-content-center" >Room Occupacy Report</button>

=======
>>>>>>> 4dd1ec8 (month report)
=======
                        <a href="./reports/room_occupacy.php" class="text-decoration:none" ><button class="btn btn-primary mt-3 m-auto d-flex justify-content-center" >Room Occupacy Report</button>

>>>>>>> 9d56e23 (report home)
=======
>>>>>>> 4dd1ec8 (month report)
=======
                        <a href="./reports/room_occupacy.php" class="text-decoration:none" ><button class="btn btn-primary mt-3 m-auto d-flex justify-content-center" >Room Occupacy Report</button>

>>>>>>> 9d56e23 (report home)
                    
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-md-5 col-lg-5 m-auto">
                            <!-- <h2>Room Occupacy Reports</h2> -->
                        <img src="" alt="" id="event" >
                        
                    </div>
                    <div class="col-md-5 col-lg-5 m-auto">
                        <img src="" alt="" id="room">
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="../js/report_img.js"></script>   
</body>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
    <form action="./reports/month_report.php" method='post'>
      <div class="modal-body">
      <h1 class="modal-title fs-5" id="exampleModalLabel"> Month Wise Report</h1>
            <div class="form-outline w-100 m-auto mt-3">
                <label for="month" class="form-label fw-bold">Select Month:</label>
                <select name="month" id="month">
                <option value="1">January</option>
                <option value="2">February</option>
                <option value="3">March</option>
                <option value="4">April</option>
                <option value="5">May</option>
                <option value="6">June</option>
                <option value="7">July</option>
                <option value="8">August</option>
                <option value="9">September</option>
                <option value="10">October</option>
                <option value="11">November</option>
                <option value="12">December</option>
                </select>
            </div>
                <div class="form-outline w-100 m-auto  mt-3">
                    <label for="year" class="form-label fw-bold">Enter a year </label>
                    <input type="number" id="year" name="year" class="form-control" placeholder="eg.2023">
                </div>
      
      <div class="modal-footer">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
        <button type="submit" class="btn btn-secondary"  name="close">Close</button>
=======
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
>>>>>>> 4dd1ec8 (month report)
=======
        <button type="submit" class="btn btn-secondary"  name="close">Close</button>
>>>>>>> 9d56e23 (report home)
=======
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
>>>>>>> 4dd1ec8 (month report)
=======
        <button type="submit" class="btn btn-secondary"  name="close">Close</button>
>>>>>>> 9d56e23 (report home)
        <button type="submit" class="btn btn-primary" name="month_report">OK</button>
      </div>
      </div>
    </form>
    </div>
  </div>
</div>
</html>
