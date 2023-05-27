<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 329887f (report home)
=======
>>>>>>> 7602cd1 (month report)
=======
>>>>>>> d2b6aad (month report)
=======
>>>>>>> 9278f26 (month report)
<?php
include './connection/connect.php';
?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Admin Panel</title>
    <link rel='stylesheet' type='text/css' href='css/style.css'>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </head>
  <body class="bg-light">
  <?php
          require("session.php");  
        ?>
    <div class="container-fluid mt-2">
        <div class="row">
            <div class="col-md-10 col-11 mx-auto">
                <?php
                include './navigation.html';
                ?>
                <div class='bg-primary'>
                    <p></p>
                    <p></p>
                </div>
                <div class="row mt-3" >
                    <!-- left side navbar -->
                    <div class="col-lg-3 col-md-4 d-md-block bg-primary me-auto text-center my-5" >
                        <div class='card bg-common card-left'>
                            <div class="class-body mt-2 bg-light">
                            <ul class="nav flex-column">
                                <!-- <li class="nav-item">
                                <a class="nav-link  my-2 " aria-current="page" href="#">BOOK</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2" href="#">CHECK STATUS </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2" href="#">VIEW </a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2 " href="#" tabindex="-1" aria-disabled="true">CANCEL</a>
                                </li> -->
                                <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                <a class="nav-link  my-2 " href="admin_home.php" tabindex="-1" aria-disabled="true">VIEW REQUESTS</a>
                                </li> 
                                <li class="nav-item">
=======
>>>>>>> 7602cd1 (month report)
=======
>>>>>>> d2b6aad (month report)
=======
>>>>>>> 9278f26 (month report)
=======
                                <a class="nav-link  my-2 " href="admin_home.php" tabindex="-1" aria-disabled="true">VIEW REQUESTS</a>
                                </li> 
                                <li class="nav-item">
>>>>>>> 9123d1a (month report)
                                <a class="nav-link  my-2 " href="admin_home.php?add_ar" tabindex="-1" aria-disabled="true">ADD ROOM/AUDI</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2 " href="admin_home.php?update_ar" tabindex="-1" aria-disabled="true">UPDATE ROOM/AUDI</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2 " href="admin_home.php?delete_ar" tabindex="-1" aria-disabled="true">DELETE ROOM/AUDI</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2 " href="admin_home.php?add_dept" tabindex="-1" aria-disabled="true"> ADD DEPARTMENT</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2 " href="admin_home.php?update_dept" tabindex="-1" aria-disabled="true"> UPDATE DEPARTMENT</a>
                                </li>
                                <li class="nav-item">
                                <a class="nav-link  my-2 " href="admin_home.php?delete_dept" tabindex="-1" aria-disabled="true"> DELETE DEPARTMENT</a>
                                </li>
                                <li class="nav-item">
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
                                <a class="nav-link  my-2 " href="report_home.php" tabindex="-1" aria-disabled="true">REPORTS</a>
=======
                                <a class="nav-link  my-2 " href="#" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 329887f (report home)
=======
                                <a class="nav-link  my-2 " href="#" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 7602cd1 (month report)
=======
                                <a class="nav-link  my-2 " href="report_home.php" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> fd21e08 (report home)
=======
                                <a class="nav-link  my-2 " href="#" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> d2b6aad (month report)
=======
                                <a class="nav-link  my-2 " href="report_home.php" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 93c1324 (report home)
=======
                                <a class="nav-link  my-2 " href="#" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 9278f26 (month report)
=======
                                <a class="nav-link  my-2 " href="report_home.php" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 38e8eee (report home)
=======
                                <a class="nav-link  my-2 " href="report_home.php" tabindex="-1" aria-disabled="true">REPORTS</a>
=======
                                <a class="nav-link  my-2 " href="#" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 7f010e3 (admin)
>>>>>>> f511b14 (admin)
=======
                                <a class="nav-link  my-2 " href="report_home.php" tabindex="-1" aria-disabled="true">REPORTS</a>
>>>>>>> 677e8c8 (all reports)
                                </li>
                                
                            </ul>
                            </div>
                        </div>
                    </div>
                    <!-- right side division -->
                    <div class="col-lg-9 col-md-9">
                        <div class="card">
                            <div class="card-header border-bottom mb-3 justify-content-center align-items-center">
                                <?php
                                if(isset($_GET['update_dept'])){
                                    include('./update_dept.php');
                                }
                                else if(isset($_GET['add_dept'])){
                                    include('./add_dept.php');
                                }
                                else if(isset($_GET['delete_dept'])){
                                    include('./delete_dept.php');
                                }
                                else if(isset($_GET['add_ar'])){
                                    include('./add_ar.php');
                                }
                                else if(isset($_GET['delete_ar'])){
                                    include('./delete_ar.php');
                                }
                                else if(isset($_GET['update_ar'])){
                                    include('./update_ar.php');
                                }
                                else{
                            include './connection/connect.php';
                            $get_event="select * from `EVENT` where status_value='pending'";
                            $result=mysqli_query($con,$get_event);
                            $count=0;
                            while($row=mysqli_fetch_assoc($result)){
                            $count++;
                            }
                            echo "<h3 class='text-center text-primary'><strong class='text-secondary'>$count</strong> events request is pending </h3>";
                            if($count>0){ echo "<form class='form-control' method='post'>
                                <div class='text-center my-4'>
                                    <input type='submit'  value='VIEW REQUESTS' name='view_request' class='btn btn-primary'>
                                </div>
                                </form>";}}
                                ?>
                                
                                <?php
                                if(isset($_POST['view_request'])){
                                include('./event_details.php');
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <!-- other pages actual data -->
                    <div class="cart-body border-0">

                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD
<<<<<<< HEAD

=======
>>>>>>> 329887f (report home)
=======
he file main folder madye banavli right?hash
ha tula pn atta sagre file hejatch banava javascript asel tr js madye css asel tr css  theek? hash
atta he file me commit karto
jhala 
>>>>>>> bfa2598 (admin)
=======
>>>>>>> 7602cd1 (month report)
=======
>>>>>>> 0305517 (admin)
=======
>>>>>>> d2b6aad (month report)
=======
>>>>>>> b5e0f9b (admin)
=======
>>>>>>> 9278f26 (month report)
