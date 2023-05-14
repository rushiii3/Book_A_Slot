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
    <script src="../js/booking.js"></script>
    <link rel="stylesheet" href="../css/booking.css">
    <title>Book</title>
</head>

<body>
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
                    <img src="https://img.freepik.com/free-vector/businessman-planning-events-deadlines-agenda_74855-6274.jpg?w=1480&t=st=1684041803~exp=1684042403~hmac=ed746e43d35dd7c21d653f6b86403202e32866bbc2d08c9f470fbf4daa84f1d6" alt="" class="img-fluid">
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
                                            <label for="exampleFormControlInput1" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Event Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Time</label>
                                            <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">No of students attending event</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
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
                                            <label for="exampleFormControlInput1" class="form-label">Institute/Organisation Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
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
                                            <label for="exampleFormControlInput1" class="form-label">Event Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-12 mb-3">
                                                <label for="exampleFormControlTextarea1" class="form-label">Event Description</label>
                                                <textarea class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Date</label>
                                            <input type="date" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
                                        </div>
                                        <div class="col-6 mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Time</label>
                                            <input type="time" class="form-control" id="exampleFormControlInput1" placeholder="e.g. ....... ">
                                        </div>
                        </div>
<!-- new row ending -->
                                    <div class="row">
                                        <div class="col-12 mb-5 mt-5">
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
</body>
</html>
