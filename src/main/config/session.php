<?php
session_start();
if(!isset($_SESSION["user_email"]) && !isset($_SESSION["user_type"]))
{
  echo("<script>window.location='../user/sign_in.php';</script>");
}
else{
  $user_email = $_SESSION["user_email"];
  $user_name = $_SESSION["user_full_name"];
  $user_type = $_SESSION["user_type"];
  /*
  if($user_type!=="p")
  {
    echo("<script>window.location='../user/sign_in.php';</script>");
  }*/
}
?>