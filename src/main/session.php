<?php
session_start();
if(isset($_SESSION["user_email"]) && isset($_SESSION["user_full_name"]))
{
    $user_email = $_SESSION["user_email"];
    $user_name = $_SESSION["user_full_name"];
}
else{
    header("Location : sign_in.php");
}
?>