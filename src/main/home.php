<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <title>Home</title>
    <style>
     
    </style>
</head>
<body>
        <?php
            require_once("loader.html"); 
            session_start();
        ?>
        <main id="main">
       
       <?php
        include("navigation.html");
       ?>


  <div class="container-fluid">
    <div class="row">
      <div class="col-lg-6">
      <p class="fs-1">Welcome <?php echo($_SESSION["user_email"]); ?></p>
      </div>
      <div class="col-lg-6">
      <img src="../img/s (2).png" alt="Welcome_Img" class="img-fluid" style="margin-top:-20px;">

      </div>
    </div>
  </div>
    
</main>
</body>
</html>