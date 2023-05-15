<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
    <link rel="stylesheet" href="../css/booking.css">
    <title>Book</title>
</head>

<body>
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>
    <?php
         include("session.php");
         require "connection/connect.php";
         require_once("loader.html"); 
     ?>
    <main id="main">

        <?php
     include("navigation.html");
    ?>
        <div class="container mt-5 mb-5 shadow p-3 mb-5 bg-body" id="main_body" style="border-radius: 20px">
            <!-- Container starting -->
            <div class="row">
                <!-- row staring -->
                <!-- Image for div -->
                <div class="p-4 col-lg-6">
                    <!-- new col for image -->
                    <img src="https://img.freepik.com/free-vector/appointment-booking-with-woman-calendar_23-2148559014.jpg?w=1060&t=st=1684132939~exp=1684133539~hmac=d2101dc2baf34866ceb2d3eabe252bb481424284e4e6adc90f6765677ba3ae4e" alt="" class="img-fluid">
                </div>
                <div class="p-4 col-lg-6">
                    <!-- new col for booking -->
                    <p class="fs-3 text-center fw-bold">
                        Book your slot
                    </p>
                    <div class="pro">
                    <div class="stepper-wrapper">
                        <div class="stepper-item ">
                            <div class="step-counter">1</div>
                            <div class="step-name text-center">Event <br> Details</div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">2</div>
                            <div class="step-name text-center">Venue <br> Selection</div>
                        </div>
                        <div class="stepper-item ">
                            <div class="step-counter">3</div>
                            <div class="step-name text-center">Resourse <br> Person info</div>
                        </div>
                        </div>
                    </div>

                    <div class="container-fluid">
                        <!-- new container -->
                        <div class="row tab">
                            <!-- new row -->
                                        <div class="col-12 mb-3">
                                            <label for="eventName" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="eventName" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="eventDescription" class="form-label">Event Description</label>
                                                <textarea class="form-control" id="eventDescription" rows="2"></textarea>
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="no_of_stu_attending" class="form-label">No of students attending event</label>
                                            <input type="text" class="form-control" id="no_of_stu_attending" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3 input-group">
                                            <label for="selectDate" class="form-label w-100">Date</label><br>
                                            <input type="text" class="form-control rounded-start border-end-0" id="myDatePicker" placeholder="e.g. ....... ">
                                            <span class="input-group-text bg-white" id="basic-addon1"><i class="bi bi-calendar-event"></i></span>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="startTime" class="form-label">Start Time</label>
                                            <select class="form-select" aria-label="select_start_time">
                                                <option selected>Select the start time</option>
                                                <option value="07:00">07.00 AM</option>
                                                <option value="07:30">07.30 AM</option>
                                                <option value="08:00">08.00 AM</option>
                                                <option value="08:30">08.30 AM</option>
                                                <option value="09:00">09.00 AM</option>
                                                <option value="09:30">09.30 AM</option>
                                                <option value="10:00">10.00 AM</option>
                                                <option value="10:30">10.30 AM</option>
                                                <option value="11:00">11.00 AM</option>
                                                <option value="11:30">11.30 AM</option>
                                                <option value="12:00">12.00 PM</option>
                                                <option value="12:30">12.30 PM</option>
                                                <option value="13:00">01.00 PM</option>
                                                <option value="13:30">01.30 PM</option>
                                                <option value="14:00">02.00 PM</option>
                                                <option value="14:30">02.30 PM</option>
                                                <option value="15:00">03.00 PM</option>
                                                <option value="15:30">03.30 PM</option>
                                                <option value="16:00">04.00 PM</option>
                                                <option value="16:30">04.30 PM</option>
                                                <option value="17:00">05.00 PM</option>
                                                <option value="17:30">05.30 PM</option>
                                                <option value="18:00">06.00 PM</option>
                                                <option value="18:30">06.30 PM</option>
                                                <option value="19:00">07.00 PM</option>
                                                <option value="19:30">07.30 PM</option>
                                                <option value="20:00">08.00 PM</option>
                                                <option value="20:30">08.30 PM</option>
                                                <option value="21:00">09.00 PM</option>
                                                <option value="21:30">09.30 PM</option>
                                                <option value="22:00">10.00 PM</option>
                                                <option value="22:30">10.30 PM</option>
                                                <option value="23:00">11.00 PM</option>
                                                <option value="23:30">11.30 PM</option>
                                            </select>
                                            
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="endTime" class="form-label">End Time</label>
                                            <select class="form-select" aria-label="select_start_time">
                                                <option selected>Select End time</option>
                                                <option value="07:00">07.00 AM</option>
                                                <option value="07:30">07.30 AM</option>
                                                <option value="08:00">08.00 AM</option>
                                                <option value="08:30">08.30 AM</option>
                                                <option value="09:00">09.00 AM</option>
                                                <option value="09:30">09.30 AM</option>
                                                <option value="10:00">10.00 AM</option>
                                                <option value="10:30">10.30 AM</option>
                                                <option value="11:00">11.00 AM</option>
                                                <option value="11:30">11.30 AM</option>
                                                <option value="12:00">12.00 PM</option>
                                                <option value="12:30">12.30 PM</option>
                                                <option value="13:00">01.00 PM</option>
                                                <option value="13:30">01.30 PM</option>
                                                <option value="14:00">02.00 PM</option>
                                                <option value="14:30">02.30 PM</option>
                                                <option value="15:00">03.00 PM</option>
                                                <option value="15:30">03.30 PM</option>
                                                <option value="16:00">04.00 PM</option>
                                                <option value="16:30">04.30 PM</option>
                                                <option value="17:00">05.00 PM</option>
                                                <option value="17:30">05.30 PM</option>
                                                <option value="18:00">06.00 PM</option>
                                                <option value="18:30">06.30 PM</option>
                                                <option value="19:00">07.00 PM</option>
                                                <option value="19:30">07.30 PM</option>
                                                <option value="20:00">08.00 PM</option>
                                                <option value="20:30">08.30 PM</option>
                                                <option value="21:00">09.00 PM</option>
                                                <option value="21:30">09.30 PM</option>
                                                <option value="22:00">10.00 PM</option>
                                                <option value="22:30">10.30 PM</option>
                                                <option value="23:00">11.00 PM</option>
                                                <option value="23:30">11.30 PM</option>
                                            </select>
                                        </div>
                                        
                        </div>
                        <!-- new row ending -->


                        <div class="row tab">
                            <!-- new row -->
                            <div class="col-12 mb-3">
                                        <label for="department_namee" class="form-label">Select Department</label>
                                        <select
                                            name="department_namee"
                                            class="form-select"
                                            id="department_namee"
                                            required
                                        >
                                            <option selected>Select Department</option>
                                            <?php
                                                $get_department_name_query = "SELECT * FROM DEPARTMENT";
                                                $result_of_department_query = mysqli_query($con,$get_department_name_query);
                                                if(mysqli_num_rows($result_of_department_query)>0) 
                                                {
                                                    while($row_of_department_name =
                                                    mysqli_fetch_assoc($result_of_department_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_department_name['department_name']); ?>"
                                                    >
                                                        <?php echo($row_of_department_name['department_name']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                                    </div>

                                    <div class="col-12 mb-3" id="org_institue_name">
                                            <label for="Institute/Org_Name" class="form-label">Institute/Organisation Name</label>
                                            <input type="text" class="form-control" id="Institute/Org_Name" placeholder="e.g. ....... ">
                                        </div>
                                    
                                    <div class="col-12 mb-3">
                                        <label for="Venue_name" class="form-label">Select Venue</label>
                                        <select
                                            name="Venue_name"
                                            class="form-select"
                                            id="Venue_name"
                                            required
                                        >
                                            <option selected>Select Venue</option>
                                            <?php
                                                $get_audi_room_query = "SELECT * FROM AUDI_ROOM";
                                                $result_of_audi_room_query = mysqli_query($con,$get_audi_room_query);
                                                if(mysqli_num_rows($result_of_audi_room_query)>0) 
                                                {
                                                    while($row_of_audi_room_query =
                                                    mysqli_fetch_assoc($result_of_audi_room_query))
                                                    { ?>
                                                    <option
                                                        value="<?php echo($row_of_audi_room_query['ar_name']); ?>"
                                                    >
                                                        <?php echo($row_of_audi_room_query['ar_name']); ?>
                                                    </option>
                                                    <?php
                                                }
                                                }
                                                    ?>
                                        </select>
                                    </div>
                                
                        </div>
                        <!-- new row ending -->

                        <div class="row tab">
                            <!-- new row -->
                                        <div class="col-12 mb-3">
                                            <label for="rp_name" class="form-label">Resourse Person Full Name</label>
                                            <input type="text" class="form-control" id="rp_name" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="companyName" class="form-label">Company Name</label>
                                                <input type="text" class="form-control" id="companyName" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="designation" class="form-label">Designation</label>
                                            <input type="text" class="form-control" id="designation" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="experience" class="form-label">Experience</label>
                                                <input type="number" class="form-control" id="experience" placeholder="e.g. ....... ">
                                        </div>
                        </div>
<!-- new row ending -->
                                    <div class="row">
                                        <div class="col-12 mb-1 mt-5">
                                            <button type="button " class="btn btn-secondary px-4 ms-3" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                                            <button type="button " class="btn btn-primary px-4 ms-3" id="nextBtn" onclick="nextPrev(1)">Next</button>
                                        </div>
                                    </div>
                                    
                    </div>
                    <!-- new container ending -->



                </div>
            <!-- row ending -->
            </div>
        <!-- container ending -->
        </div>  
    </main>
    <script src="../js/booking.js"></script>
    <script src="../js/bookingDate.js"></script>
</body>
</html>
<script>
    document.addEventListener('DOMContentLoaded', function() {
    flatpickr("#myDatePicker", {
      dateFormat: 'Y-m-d',
      minDate: new Date().fp_incr(3),
      disable: [
        '2023-05-20',
        '2023-05-25'
      ]
    });
  });
</script>