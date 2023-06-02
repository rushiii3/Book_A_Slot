<?php
include '../connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Summary Report</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.js" integrity="sha512-5SUkiwmm+0AiJEaCiS5nu/ZKPodeuInbQ7CiSrSnUHe11dJpQ8o4J1DU/rw4gxk/O+WBpGYAZbb8e17CDEoESw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<style>
    img{
        height: 250px;
        width: 250px;
        margin:10px;
    }
</style>
</head>

<body>
<div class="container-fluid mt-3">
        <div class="row">
            <div class="col-md-10 col-lg-10 m-auto">
            <?php
<<<<<<< HEAD
<<<<<<< HEAD
                include '../admin/admin_navbar.html';
=======
                include '../navigation.html';
>>>>>>> 677e8c8 (all reports)
=======
                include '../user/navigation.html';
>>>>>>> 20ec2bd (seperate folders)
                ?>
                <button class="btn btn-primary w-50 m-auto d-flex justify-content-center fw-bolder" style="align-items: center;">OVERALL SUMMARY</button>

                <div class="row mt-5">
                    <!-- row1 -->
                    <div class="col-md-5 col-lg-5 m-auto">
                        <!-- left side -->
                        <div style="background-color: #9999ff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                            <img src="https://img.freepik.com/free-photo/large-audience-watching-crowded-city-nightlife-celebration-generated-by-ai_188544-27408.jpg?size=626&ext=jpg&ga=GA1.1.304178890.1681303369&semt=sph">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                $most_occupied_ar="select max(ar_name) from `EVENT` where status_value='approved' ";
                                $result=mysqli_query($con,$most_occupied_ar);
                                $row=mysqli_fetch_assoc($result);
                                $ar_name= $row['max(ar_name)'];
                                echo "<h2>Maximum time events occured in <strong class='fw-bolder'> $ar_name </strong> </h2>"
                                ?>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-5 col-lg-5 m-auto">
                         <!-- right side -->
                    <div style="background-color: #cc99ff">
                    <div class="row">
                            <div class="col-md-6 col-lg-6">
                            <img src="https://images.pexels.com/photos/1963622/pexels-photo-1963622.jpeg?auto=compress&cs=tinysrgb&w=600">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
<<<<<<< HEAD
                                $organizer="SELECT count(organization_institute) as max_organizer,organization_institute from `event` where status_value='approved' GROUP by organization_institute order by max_organizer desc limit 1";
                                $result=mysqli_query($con,$organizer);
                                $row=mysqli_fetch_assoc($result);
                                $organization_institute= $row['organization_institute'];
                                $count=$row['max_organizer'];
=======
                                $organizer="select max(organization_institute) from `EVENT` where status_value='approved' ";
                                $result=mysqli_query($con,$organizer);
                                $row=mysqli_fetch_assoc($result);
                                $organization_institute= $row['max(organization_institute)'];
>>>>>>> 677e8c8 (all reports)
                                echo "<h2>Most of the events organized by <strong class='fw-bolder'> $organization_institute </strong> </h2>"
                                ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 
                <div class="row mt-5">
                    <!-- row2 -->
                    <div class="col-md-5 col-lg-5 m-auto">
                        <!-- left side -->
                        <div style="background-color: #ffb3ff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://img.freepik.com/free-photo/corporate-businessman-giving-presentation-large-audience_53876-101865.jpg?size=626&ext=jpg&ga=GA1.2.304178890.1681303369&semt=sph" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                // $max_resource_person="SELECT max(organization_institute) FROM `EVENT` WHERE event_id in (SELECT event_id FROM `RESOURCE_PERSON`) and status_value='approved'";
                                $max_resource_person="SELECT count(event.organization_institute) as total,event.organization_institute,resource_person.full_name FROM `event` JOIN (SELECT event_id,full_name from `resource_person` GROUP BY event_id)`resource_person` on event.event_id=resource_person.event_id GROUP by organization_institute ORDER By total DESC LIMIT 1";
                                $result=mysqli_query($con,$max_resource_person);
                                $row=mysqli_fetch_assoc($result);
                                $resource_person_organized=$row['organization_institute'];
                                echo "<h2><strong>$resource_person_organized</strong> Invite  resource persons maximum time</h2>";
                                ?>
                            </div>
                        </div>
                        </div>
                    
                    </div>
                    
                    <div class="col-md-5 col-lg-5 m-auto">
                         <!-- right side -->
                    <div style="background-color: #ccccff">
                        <div class="row">
                            <div class="col-md-6 col-lg-6">
                                <img src="https://tse2.mm.bing.net/th?id=OIP.QfwG0oQMcw3nZF5fPO1ykAHaE8&pid=Api&P=0&h=180" alt="">
                            </div>
                            <div class="col-md-6 col-lg-6 my-5">
                                <?php
                                $max_events="SELECT event_date, COUNT(event_date) AS occurrences FROM `EVENT` where status_value='approved' GROUP BY event_date ORDER BY occurrences DESC LIMIT 1";
                                $result=mysqli_query($con,$max_events);
                                $row=mysqli_fetch_assoc($result);
                                $date=$row['event_date'];
                                $count=$row['occurrences'];
                                echo "<h2>On <strong>$date</strong> maximum events occured</h2>";
                                ?>
                            </div>
                        </div>
                        </div>
                    </div>
                </div> 

            </div>
        </div>
</div>           
</body>
</html>
