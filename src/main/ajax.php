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
                echo("1");
            }
            else
            {
                echo("2");
                echo("Error description: " . mysqli_error($con));
            }
}

if(
        !empty($_POST['email_login']) 
                && 
        !empty($_POST['password_login']) 
)
{

        $email = mysqli_real_escape_string($con, $_POST["email_login"]);
        $password = mysqli_real_escape_string($con, $_POST["password_login"]);
        $user_info_query = "SELECT * FROM USER WHERE user_name = '$email' AND  pwd = '$password' ";
        $result_of_user_info = mysqli_query($con,$user_info_query);
        if(mysqli_num_rows($result_of_user_info)==1)
        { 
                while($row = mysqli_fetch_assoc($result_of_user_info))
                {
                        $user_email = $row["user_name"];
                        $user_full_name = $row["user_full_name"];
                        $user_type = $row["user_type"];
                        if($user_type=="o")
                        {
                                echo("1");
                        }else{
                                echo("2");
                        }
                        session_start();
                        $_SESSION["user_email"] = $email;
                        $_SESSION["user_full_name"] = $user_full_name;
                }
                
                
        }
        else
        { 
                echo("no");
        }
}
if(
        !empty($_POST["user_email"])
                &&
        !empty($_POST["eventname"]) 
                && 
        !empty($_POST["event_desc"]) 
                &&
        !empty($_POST["no_of_students"]) 
                && 
        !empty($_POST["event_date"]) 
                &&
        !empty($_POST["event_start_time"]) 
                && 
        !empty($_POST["event_end_time"]) 
                &&
        !empty($_POST["Institute_OrgName"]) 
                && 
        !empty($_POST["Venue_name"]) 
                &&
        !empty($_POST["rp_name"]) 
                && 
        !empty($_POST["companyName"]) 
                &&
        !empty($_POST["designation"]) 
                && 
        !empty($_POST["experience"]) 
){
    $FourDigitRandomNumber = mt_rand(1111,9999);
    $user_email = mysqli_real_escape_string($con, $_POST["user_email"]);
    $event_name = mysqli_real_escape_string($con, $_POST["eventname"]);
    $event_Descr = mysqli_real_escape_string($con, $_POST["event_desc"]);
    $num_of_students = mysqli_real_escape_string($con, $_POST["no_of_students"]);
    $event_date = date('Y-m-d',strtotime($_POST["event_date"]));
    $event_start_time = $_POST["event_start_time"] ;
    $event_end_time = $_POST["event_end_time"];
    $Institute_OrgName = mysqli_real_escape_string($con, $_POST["Institute_OrgName"]);
    $Venue_name = mysqli_real_escape_string($con, $_POST["Venue_name"]);
    $rp_name = mysqli_real_escape_string($con, $_POST["rp_name"]);
    $companyName = mysqli_real_escape_string($con, $_POST["companyName"]);
    $designation = mysqli_real_escape_string($con, $_POST["designation"]);
    $experience = mysqli_real_escape_string($con, $_POST["experience"]);
    date_default_timezone_set("Asia/Calcutta");
    $timestamp = date("Y-m-d H:i:s");
    $event_info_query = " INSERT INTO `EVENT` (`event_id`,`event_name`,`event_date`,`event_start_time`,`event_end_time`,`event_description`,`students_total_number`,`organization_institute`,`request_date_time`,`user_name`,`ar_name`,`status_value`) VALUES ('$FourDigitRandomNumber','$event_name','$event_date','$event_start_time','$event_end_time','$event_Descr','$num_of_students','$Institute_OrgName','$timestamp','$user_email','$Venue_name','Pending') ";
    if(mysqli_query($con,$event_info_query)){
       $resource_person_info = "INSERT INTO `RESOURCE_PERSON` (`full_name`,`company_name`,`designation`,`experience`,`event_id`) VALUES ('$rp_name','$companyName','$designation','$experience','$FourDigitRandomNumber')";
       if(mysqli_query($con,$resource_person_info)){
        echo("1");
       }else{
        echo("2");
       }
    }else{
        echo("2");
    }
}



if(!empty($_POST['datee']) ){
        $datee = date('Y-m-d',strtotime($_POST["datee"]));
        $get_time_info = "SELECT * FROM `EVENT` WHERE `event_date` = '$datee'";
        $result_of_time = mysqli_query($con,$get_time_info);
        if(mysqli_num_rows($result_of_time)>0){
                ?>
                        <script>
                        $start_time = $('.start-time');
                        $end_time = $('.end-time');
                <?php
                while($row_of_result = mysqli_fetch_assoc($result_of_time))
                {
                        ?>
                                var i,x = $('.start-time');
                                for(i=0;i<x.length;i++)
                                {
                                
                                        if(<?php echo(date('H:i', strtotime($row_of_result['event_start_time'])));?>==$start_time[i].attributes[1].value)
                                        { 
                                        do{
                                                $start_time.eq(i).prop('disabled', true);
                                                $end_time.eq(i).prop('disabled', true);
                                                console.log(i);
                                                i=i+1;
                                                console.log(i);
                                        }while(<?php echo(date('H:i', strtotime($row_of_result['event_end_time'])));?>>=$start_time[i].attributes[1].value);
                                        }
                                }
    <?php
                        
                }
                ?>

                </script>
                <?php
        }
}
?>