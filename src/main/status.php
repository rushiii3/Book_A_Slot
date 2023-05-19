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
      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Check Status</title>
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

    <div class="container-fluid">
        <div class="row">

        <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 mt-3">
			<div class="card">
				<div class="card-header px-4 pt-4">
					<h5 class="card-title mb-0">Landing page redesign</h5>
					<div class="badge bg-success my-2">Pending</div>
				</div>
				<div class="card-body px-4 pt-2">
					<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
						sed ipsum.</p>
				</div>
			</div>
		</div>

        <div class="col-md-6 col-lg-3 col-sm-6 col-xs-6 mt-3">
			<div class="card">
				<div class="card-header px-4 pt-4">
					<h5 class="card-title mb-0">Landing page redesign</h5>
					<div class="badge bg-success my-2">Approved</div>
				</div>
				<div class="card-body px-4 pt-2">
					<p>Etiam rhoncus. Maecenas tempus, tellus eget condimentum rhoncus, sem quam semper libero, sit amet adipiscing sem neque
						sed ipsum.</p>
				</div>
			</div>
		</div>


        </div>
    </div>



</main>

</body>
</html>