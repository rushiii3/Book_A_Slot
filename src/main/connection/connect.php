<?php
$con=mysqli_connect('localhost','root','','book_a_slot');
if($con){
    //echo "connection Successful";
}
else{
    die(mysqli_error($con));
}
?>