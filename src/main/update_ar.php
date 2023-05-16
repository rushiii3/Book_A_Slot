<?php
include './connection/connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <style>
        /* .center-table {
        margin-left: auto;
        margin-right: auto;
        text-align: center;
    }
    .con {
        display: flex;
        justify-content: center;
        align-items: center;
    } */
    .con1{
        display: grid;
        place-items: center;
    }
        </style>
</head>
<body class=' text-center w-50 m-auto'>
    <div class="con1 mt-3 ">
    <h1 class='text-center text-primary'>Update Auditorium or Room</h1>
    <table  class='table table-bordered my-4' style="align-items:center">
    <thread class="bg-info">
        <tr >
        <th class="text-center">AR Name</th>
           <th class="text-center"> Floor No.</th>
           <th class='text-center '>Capacity</th>
        </tr>
        </thread> 
    <tbody class="bg-primary">
        <?php
        $get_ar="select * from `AUDI_ROOM` ";
        $result=mysqli_query($con,$get_ar);
        while($row=mysqli_fetch_assoc($result)){
            $ar_name=$row['ar_name'];
            $floor=$row['floor'];
            $capacity=$row['capacity'];
            echo"
            <tr class='text-center text-light'><td><a class='text-light' style='text-decoration:none' href='update_audi.php?update_id=$ar_name'>
             $ar_name</td>
            <td><a class='text-light' style='text-decoration:none' href='update_audi.php?update_id=$ar_name'> $floor</td>
            <td><a class='text-light' style='text-decoration:none' href='update_audi.php?update_id=$ar_name'> $capacity</td></tr>";

            }
            ?>
        </tbody>    
    </table>
    </div>
</body>
</html>