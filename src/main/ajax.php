<?php
require "connection/connect.php";
if(  
        !empty($_POST['fullname']) 
                && 
        !empty($_POST['email']) 
                &&
        !empty($_POST['department_namee']) 
                &&
        !empty($_POST['password']) 
    )
{
    $user_name = mysqli_real_escape_string($con, $_POST['fullname']);
            $email = mysqli_real_escape_string($con, $_POST['email']);
            $department_namee = mysqli_real_escape_string($con, $_POST['department_namee']);
            $password = mysqli_real_escape_string($con, $_POST['password']);
            $insert_user_info = "INSERT INTO `USER` (`user_name`, `user_full_name`, `pwd`, `department_name`, `user_type`) VALUES ('$email', '$user_name', '$password', '$department_namee', 'o')";

            if(mysqli_query($con,$insert_user_info))
            {
                    echo("yes");
            }else{
                echo("no");
                
            }
}


?>