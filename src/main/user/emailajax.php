<?php
require "../connection/connect.php";
if(!empty($_POST['event_name'])
            &&
    !empty($_POST['event_Descr'])
            &&
    !empty($_POST['num_of_students'])
            &&
    !empty($_POST['Venue_name'])
            &&
    !empty($_POST['event_date'])
            &&
    !empty($_POST['event_start_time'])
            &&
    !empty($_POST['event_end_time'])
            &&
    !empty($_POST['Institute_OrgName'])
            &&
    !empty($_POST['Institute_OrgName_email'])
            &&
    !empty($_POST['Institute_OrgName_phone_no'])
            &&
    !empty($_POST['Institute_OrgName_transaction_id'])
            
)
{

    ?>
     <div id="emailContent" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
  <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><style type="text/css">body, html { margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-size-adjust: none; width: 100% !important; }table td, table { }#outlook a { padding: 0px; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }.ExternalClass { width: 100%; }@media only screen and (max-width: 480px) {
   table tr td table.edsocialfollowcontainer {width: auto !important;} table, table tr td, table td { width: 100% !important; }
  img { width: inherit; }
  .layer_2 { max-width: 100% !important; }
  .edsocialfollowcontainer table { max-width: 25% !important; }
  .edsocialfollowcontainer table td { padding: 10px !important; }
  .edsocialfollowcontainer table { max-width: 25% !important; }
  .edsocialfollowcontainer table td { padding: 10px !important; }
}</style><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i &subset=cyrillic,latin-ext" data-name="open_sans" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"></head><body style="padding:0; margin: 0;background: #f5f6f8" data-new-gr-c-s-check-loaded="14.1091.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1091.0"><table style="height: 100%; width: 100%; background-color: #f5f6f8;" align="center"><tbody><tr><td valign="top" id="dbody" data-version="2.31" style="width: 100%; height: 100%; padding-top: 15px; padding-bottom: 15px; background-color: #f5f6f8;"><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:640px" width="640" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><table class="layer_1" align="center" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; box-sizing: border-box; width: 100%; margin: 0px auto;"><tbody><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse; width: 100%; background-color: #f5f6f8;"><tbody><tr><td valign="top" class="edimg" style="padding: 5px; box-sizing: border-box; text-align: center;"><img src="https://api.smtprelay.co/userfile/fc9c45b8-8787-40a3-a935-23c33031daaa/logo11.jpeg" alt="Image" width="108" style="border-width: 0px; border-style: none; max-width: 108px; width: 100%;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 5px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><h2 class="text-center" style="text-align: center;"><strong></strong><strong>V.G. Vaze College of Arts, Science and Commerce (Autonomous)</strong></h2>
<p style="margin: 0px; padding: 0px;">
<b class="llfsGb KJY1Gc" jsname="gKZrRe" jsmodel="W2oOzd" jscontroller="PEXgde" data-clid="local-photo-browser" jsaction="rcuQ6b:npT2md;click:uMoMHf;" jsdata="QVhOy;_;AljjjE" data-ved="2ahUKEwjoiaKQkq__AhXU-zgGHQgdAO4Qy5oKKAB6BAgFEAQ">
</b></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 16px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">Dear&nbsp;<strong>Prof. (Dr.) Preeta Nilesh</strong>,</p><p style="margin: 0px; padding: 0px;"><br></p>There is an event request, and the details are as follows:<p style="margin: 0px; padding: 0px;"><strong>Name:&nbsp;</strong><span><?php echo($_POST['Institute_OrgName']); ?> </span></p><p style="margin: 0px; padding: 0px;"><strong>Email: </strong><span><?php echo($_POST['Institute_OrgName_email']); ?></span></p><p style="margin: 0px; padding: 0px;"><strong>Phone Number: </strong><span><?php echo($_POST['Institute_OrgName_phone_no']); ?></span></p><p style="margin: 0px; padding: 0px;"><strong>Transaction ID: </strong><span><?php echo($_POST['Institute_OrgName_transaction_id']); ?></span></p><p style="margin: 0px; padding: 0px;"><strong>Event Name</strong>: <span><?php echo($_POST['event_name']); ?></span></p><p style="margin: 0px; padding: 0px;"><strong>Venue Name</strong>: <span><?php echo($_POST['Venue_name']); ?></span></p><p style="margin: 0px; padding: 0px;"><strong>Date</strong>: <span><?php echo(date("d F Y",strtotime($_POST['event_date']))); ?></span></p><p style="margin: 0px; padding: 0px;"><strong>Time</strong>: <span> <?php echo(date("g:i A",strtotime($_POST['event_start_time']))); ?> to <?php echo(date("g:i A",strtotime($_POST['event_end_time']))); ?> </span><br><strong>Number of Attendees</strong>: <span><?php echo($_POST['num_of_students']); ?></span><br><strong>Event Description</strong>: <span><?php echo($_POST['event_Descr']); ?></span> </p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="display: inline-block; vertical-align: top; width: 100%; max-width: 600px;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 4px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="text-align: center; margin: 0px; padding: 0px;">click the below button to accept or reject the event</p><p style="text-align: center; font-size: 10px; margin: 0px; padding: 0px;"><br></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="display: inline-block; vertical-align: top; width: 100%; max-width: 600px;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edbutton" style="padding: 0px;"><table cellspacing="0" cellpadding="0" style="text-align: center;margin:0 auto;" align="center"><tbody><tr><td align="center" style="border-radius: 4px; padding: 12px; background: #4b62a3;"><a href="http://localhost/Book_A_Slot/Book_A_Slot/src/main/user/status.php" target="_blank" style="color: #ffffff; font-size: 16px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; font-weight: normal; text-decoration: none; display: inline-block;"><span style="word-break: break-word; color: #ffffff;">Awesome button</span></a></td></tr></tbody></table></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">-GACbooker</p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 20px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p class="text-center" style="line-height: 1.75em; text-align: center; margin: 0px; padding: 0px;"><span style="font-size: 11px;">If you no longer wish to receive mail from us, you can <a href="{unsubscribe}" style="background-color: initial; color: #5457ff; text-decoration: none;">unsubscribe</a></span><br><span style="font-size: 11px;">{accountaddress}</span></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></body></html>
  </div>
  <script> 
  function send()
  { 
    Email.send({ 
        SecureToken: '81b5fc89-513e-421c-ab1a-f690f117c594',
        To: '<?php echo($_POST['Institute_OrgName_email']) ?>',
        From: 'audibooking55@gmail.com',
        Subject: 'Request for Venue',
        Body: document.getElementById('emailContent').innerHTML,
        }).then(message => console.log(message));
    } 
    send()
        </script>

    <?php


}

if(!empty($_POST['email']) && !empty($_POST['otp']))
{
        $email = $_POST['email'];
        $otp = $_POST['otp'];
        $get_user_name = "SELECT * FROM `USER` WHERE `user_name` = '$email' ";
        $execute_query = mysqli_query($con,$get_user_name);
        if(mysqli_num_rows($execute_query)>0)
        {
                while($row = mysqli_fetch_assoc($execute_query))
                {
                        $name = $row['user_full_name'];
                }
        }

        ?>
        <div id="emailContent" style="max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ccc; background-color: #f9f9f9;">
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd"><html xmlns="http://www.w3.org/1999/xhtml"><head><title></title><meta http-equiv="Content-Type" content="text/html; charset=utf-8"><meta name="viewport" content="width=device-width"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><style type="text/css">body, html { margin: 0px; padding: 0px; -webkit-font-smoothing: antialiased; text-size-adjust: none; width: 100% !important; }table td, table { }#outlook a { padding: 0px; }.ExternalClass, .ExternalClass p, .ExternalClass span, .ExternalClass font, .ExternalClass td, .ExternalClass div { line-height: 100%; }.ExternalClass { width: 100%; }@media only screen and (max-width: 480px) {
        table tr td table.edsocialfollowcontainer {width: auto !important;} table, table tr td, table td { width: 100% !important; }
       img { width: inherit; }
       .layer_2 { max-width: 100% !important; }
       .edsocialfollowcontainer table { max-width: 25% !important; }
       .edsocialfollowcontainer table td { padding: 10px !important; }
       .edsocialfollowcontainer table { max-width: 25% !important; }
       .edsocialfollowcontainer table td { padding: 10px !important; }
     }</style><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link href="https://fonts.googleapis.com/css?family=Open+Sans:400,400i,600,600i,700,700i &subset=cyrillic,latin-ext" data-name="open_sans" rel="stylesheet" type="text/css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous"><link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/spectrum/1.8.0/spectrum.min.css"></head><body style="padding:0; margin: 0;background: #f5f6f8" data-new-gr-c-s-check-loaded="14.1091.0" data-gr-ext-installed="" data-new-gr-c-s-loaded="14.1091.0"><table style="height: 100%; width: 100%; background-color: #f5f6f8;" align="center"><tbody><tr><td valign="top" id="dbody" data-version="2.31" style="width: 100%; height: 100%; padding-top: 0px; padding-bottom: 0px; background-color: #f5f6f8;"><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:640px" width="640" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><!--[if (gte mso 9)|(IE)]><table align="center" style="max-width:600px" width="600" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><table class="layer_1" align="center" border="0" cellpadding="0" cellspacing="0" style="max-width: 600px; box-sizing: border-box; width: 100%; margin: 0px auto;"><tbody><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse; width: 100%; background-color: #f5f6f8;"><tbody><tr><td valign="top" class="edimg" style="padding: 5px; box-sizing: border-box; text-align: center;"><img src="https://api.smtprelay.co/userfile/fc9c45b8-8787-40a3-a935-23c33031daaa/logo11.jpeg" alt="Image" width="108" style="border-width: 0px; border-style: none; max-width: 108px; width: 100%;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 5px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><h2 class="text-center" style="text-align: center;"><strong></strong><strong>V.G. Vaze College of Arts, Science and Commerce (Autonomous)</strong></h2>
     <p style="margin: 0px; padding: 0px;">
     <b class="llfsGb KJY1Gc" jsname="gKZrRe" jsmodel="W2oOzd" jscontroller="PEXgde" data-clid="local-photo-browser" jsaction="rcuQ6b:npT2md;click:uMoMHf;" jsdata="QVhOy;_;AljjjE" data-ved="2ahUKEwjoiaKQkq__AhXU-zgGHQgdAO4Qy5oKKAB6BAgFEAQ">
     </b></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 16px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><span>​</span><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;">Hello <strong><?php echo($name) ?></strong>,</p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"><br></p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;">You have requested to reset the password of your GACbooker account</p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"><br></p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;"><br></p><p class="text-center" style="text-align: center; margin: 0px; padding: 0px;">Please find the security code to change your password: <strong><?php echo($otp); ?></strong></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #ffffff; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 32px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p style="margin: 0px; padding: 0px;">-GACbooker</p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f9fafb; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" cellpadding="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="emptycell" style="padding: 20px;"></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr><tr><td class="drow" valign="top" align="center" style="background-color: #f5f6f8; box-sizing: border-box; font-size: 0px; text-align: center;"><!--[if (gte mso 9)|(IE)]><table width="100%" align="center" cellpadding="0" cellspacing="0" border="0"><tr><td valign="top"><![endif]--><div class="layer_2" style="max-width: 600px; display: inline-block; vertical-align: top; width: 100%;"><table border="0" cellspacing="0" class="edcontent" style="border-collapse: collapse;width:100%"><tbody><tr><td valign="top" class="edtext" style="padding: 20px; text-align: left; color: #5f5f5f; font-size: 15px; font-family: &quot;Open Sans&quot;, &quot;Helvetica Neue&quot;, Helvetica, Arial, sans-serif; word-break: break-word; direction: ltr; box-sizing: border-box;"><p class="text-center" style="line-height: 1.75em; text-align: center; margin: 0px; padding: 0px;"><span style="font-size: 11px;">If you no longer wish to receive mail from us, you can <a href="{unsubscribe}" style="background-color: initial; color: #5457ff; text-decoration: none;">unsubscribe</a></span><br><span style="font-size: 11px;">{accountaddress}</span></p></td></tr></tbody></table></div><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--><!--[if (gte mso 9)|(IE)]></td></tr></table><![endif]--></td></tr></tbody></table></body></html>
  </div>
  <script>
    function sendEmail() {
      Email.send({
        SecureToken: "81b5fc89-513e-421c-ab1a-f690f117c594",
        To: '<?php echo($email); ?>',
        From: "audibooking55@gmail.com",
        Subject: "Reset password for GACbooker account",
        Body: document.getElementById('emailContent').innerHTML,
      }).then(message => alert(message));
    }
    sendEmail()
  </script>
  <?php
}
?>