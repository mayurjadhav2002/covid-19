<!DOCTYPE html>
<?php require_once("../config.php");
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
 ?>

<html>
<head>
<title>Document</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
  <?php
    include("head.php");
    ?>
</head>
<body>
<div style="display:none;"><?php require_once("../geo_plugin.php")?></div>
<img src="../images/mainlogo.png" alt="covidbreak" style=" width: 30%; margin-left: 35%;" class="logo img-fluid"> <br><br><br><br>
<?php 
 if(isset($_POST['signup'])){
  extract($_POST);
  if(strlen($fname)<3){ // Minimum 
      $error[] = 'Please enter First Name using 3 charaters atleast.';
        }
if(strlen($fname)>20){  // Max 
      $error[] = 'First Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $fname)){
            $error[] = 'Invalid Entry First Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
        }    
if(strlen($lname)<3){ // Minimum 
      $error[] = 'Please enter Last Name using 3 charaters atleast.';
        }
if(strlen($lname)>20){  // Max 
      $error[] = 'Last Name: Max length 20 Characters Not allowed';
        }
if(!preg_match("/^[A-Za-z _]*[A-Za-z ]+[A-Za-z _]*$/", $lname)){
            $error[] = 'Invalid Entry Last Name. Please Enter letters without any Digit or special symbols like ( 1,2,3#,$,%,&,*,!,~,`,^,-,)';
              }    

if(strlen($email)>50){  // Max 
            $error[] = 'Email: Max length 50 Characters Not allowed';
        }
   if($passwordConfirm ==''){
            $error[] = 'Please confirm the password.';
        }
        if($password != $passwordConfirm){
            $error[] = 'Passwords do not match.';
        }
          if(strlen($password)<5){ // min 
            $error[] = 'The password is 6 characters long.';
        }
        
         if(strlen($password)>20){ // Max 
            $error[] = 'Password: Max length 20 Characters Not allowed';
        }
          $sql="select * from member where (username='$username' or email='$email');";
      $res=mysqli_query($dbc,$sql);
   if (mysqli_num_rows($res) > 0) {
$row = mysqli_fetch_assoc($res);


       if($email==$row['email'])
       {
            $error[] ='Email alredy Exists.';
          } 
      }
         if(!isset($error)){ 
              $date=date('Y-m-d');
            $options = array("cost"=>4);
    $password = password_hash($password,PASSWORD_BCRYPT,$options);
            
           $result = mysqli_query($dbc,"INSERT into member(username, lastname, email, password, city, state, country,vp, ip) 
           values('$fname','$lname','$email','$password','$city', '$state', '$country', '50' ,'$ip' )");

           if($result)
           
    {
     $done=2; 





//Load Composer's autoloader
require 'PHPMailer/vendor/autoload.php';

//Instantiation and passing `true` enables exceptions
$mail = new PHPMailer(true);


        //Server settings
                     //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'mail.themedaid.in';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'home@themedaid.in';                     //SMTP username
    $mail->Password   = 'hello';                               //SMTP password
      //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
    $mail->Port       = 587;                                    //TCP port to connect to, use 465 for `PHPMailer::ENCRYPTION_SMTPS` above

    //Recipients
        $mail->setFrom('home@themedaid.in', 'Covidbreak');
        $mail->addAddress("$email");     //Add a recipient


        //Attachments
        //Add attachments
        //Optional name

        //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'We Consider, Signing as a volunteer is the trailer of your Kindness!';
        $mail->Body    = '<!DOCTYPE HTML PUBLIC "-//W3C//DTD XHTML 1.0 Transitional //EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
        <html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
        
        <head>
            <!--[if gte mso 9]>
        <xml>
          <o:OfficeDocumentSettings>
            <o:AllowPNG/>
            <o:PixelsPerInch>96</o:PixelsPerInch>
          </o:OfficeDocumentSettings>
        </xml>
        <![endif]-->
            <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
            <meta name="viewport" content="width=device-width, initial-scale=1.0">
            <meta name="x-apple-disable-message-reformatting">
            <!--[if !mso]><!-->
            <meta http-equiv="X-UA-Compatible" content="IE=edge">
            <!--<![endif]-->
            <title></title>
        
            <style type="text/css">
                table,
                td {
                    color: #000000;
                }
                
                a {
                    color: #0000ee;
                    text-decoration: underline;
                }
                
                @media (max-width: 480px) {
                    #u_content_image_1 .v-container-padding-padding {
                        padding: 10px 10px 15px !important;
                    }
                    #u_content_image_1 .v-src-width {
                        width: 1910px !important;
                    }
                    #u_content_image_1 .v-src-max-width {
                        max-width: 36% !important;
                    }
                    #u_content_heading_1 .v-container-padding-padding {
                        padding: 15px 10px 10px !important;
                    }
                    #u_content_heading_1 .v-font-size {
                        font-size: 35px !important;
                    }
                }
                
                @media only screen and (min-width: 570px) {
                    .u-row {
                        width: 550px !important;
                    }
                    .u-row .u-col {
                        vertical-align: top;
                    }
                    .u-row .u-col-100 {
                        width: 550px !important;
                    }
                }
                
                @media (max-width: 570px) {
                    .u-row-container {
                        max-width: 100% !important;
                        padding-left: 0px !important;
                        padding-right: 0px !important;
                    }
                    .u-row .u-col {
                        min-width: 320px !important;
                        max-width: 100% !important;
                        display: block !important;
                    }
                    .u-row {
                        width: calc(100% - 40px) !important;
                    }
                    .u-col {
                        width: 100% !important;
                    }
                    .u-col>div {
                        margin: 0 auto;
                    }
                }
                
                body {
                    margin: 0;
                    padding: 0;
                }
                
                table,
                tr,
                td {
                    vertical-align: top;
                    border-collapse: collapse;
                }
                
                p {
                    margin: 0;
                }
                
                .ie-container table,
                .mso-container table {
                    table-layout: fixed;
                }
                
                * {
                    line-height: inherit;
                }
                
                a[x-apple-data-detectors="true"] {
                    color: inherit !important;
                    text-decoration: none !important;
                }
            </style>
        
        
        
            <!--[if !mso]><!-->
            <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700&display=swap" rel="stylesheet" type="text/css">
            <!--<![endif]-->
        
        </head>
        
        <body class="clean-body" style="margin: 0;padding: 0;-webkit-text-size-adjust: 100%;background-color: #e7e7e7;color: #000000">
            <!--[if IE]><div class="ie-container"><![endif]-->
            <!--[if mso]><div class="mso-container"><![endif]-->
            <table style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;min-width: 320px;Margin: 0 auto;background-color: #e7e7e7;width:100%" cellpadding="0" cellspacing="0">
                <tbody>
                    <tr style="vertical-align: top">
                        <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                            <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td align="center" style="background-color: #e7e7e7;"><![endif]-->
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <span>&#160;</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td style="padding-right: 0px;padding-left: 0px;" align="center">
        
                                                                                <img align="center" border="0" src="images/image-6.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 550px;"
                                                                                    width="550" class="v-src-width v-src-max-width" />
        
                                                                            </td>
                                                                        </tr>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table id="u_content_image_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px 10px 15px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td style="padding-right: 0px;padding-left: 0px;" align="center">
        
                                                                                <img align="center" border="0" src="images/image-1.png" alt="Logo" title="Logo" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 54%;max-width: 286.2px;"
                                                                                    width="286.2" class="v-src-width v-src-max-width" />
        
                                                                            </td>
                                                                        </tr>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 1px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <span>&#160;</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table id="u_content_heading_1" style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <h1 class="v-font-size" style="margin: 0px; color: #5d49d6; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: comic sans ms,sans-serif; font-size: 35px;">
                                                                        <strong>Thanks For Signing Up,
              '.$username.'
              <br /><br /></strong>
                                                                    </h1>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td style="padding-right: 0px;padding-left: 0px;" align="center">
        
                                                                                <img align="center" border="0" src="images/image-5.jpeg" alt="Phone Authentication" title="Phone Authentication" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 550px;"
                                                                                    width="550" class="v-src-width v-src-max-width" />
        
                                                                            </td>
                                                                        </tr>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div style="line-height: 150%; text-align: center; word-wrap: break-word;">
                                                                        <p style="font-size: 14px; line-height: 150%;"><span style="font-family: " arial black ", "avant garde ", arial; font-size: 14px; line-height: 21px;"><strong>We are glad You"re here, to help peoples during covid Pandemic! Take the Following steps to earn your Certificate. </strong></span></p>
                                                                        <p style="font-size: 14px; line-height: 150%;">&nbsp;</p>
                                                                        <p style="font-size: 14px; line-height: 150%;"><span style="font-size: 20px; line-height: 30px; color: #5d49d6;"><strong><span style="font-family: Montserrat, sans-serif; line-height: 30px; font-size: 20px;">Thanks Again!</span></strong>
                                                                            </span>
                                                                        </p>
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:30px 10px 40px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div align="center">
                                                                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:arial,helvetica,sans-serif;"><tr><td style="font-family:arial,helvetica,sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:36px; v-text-anchor:middle; width:295px;" arcsize="11%" strokecolor="#5d49d6" strokeweight="2px" fillcolor="#ffffff"><w:anchorlock/><center style="color:#5d49d6;font-family:arial,helvetica,sans-serif;"><![endif]-->
                                                                        <a href="" target="_blank" style="box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #5d49d6; background-color: #ffffff; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;border-top-color: #5d49d6; border-top-style: solid; border-top-width: 2px; border-left-color: #5d49d6; border-left-style: solid; border-left-width: 2px; border-right-color: #5d49d6; border-right-style: solid; border-right-width: 2px; border-bottom-color: #5d49d6; border-bottom-style: solid; border-bottom-width: 2px;">
                                                                            <span style="display:block;padding:10px 50px;line-height:120%;"><strong><span style="font-size: 14px; line-height: 16.8px;">GO TO THE COVIDBREAK &gt;&gt;</span></strong>
                                                                            </span>
                                                                        </a>
                                                                        <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #000000;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #000000;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="background-color: #9399ef;width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="background-color: #9399ef;width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:40px 10px 0px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <h1 class="v-font-size" style="margin: 0px; color: #ffffff; line-height: 140%; text-align: center; word-wrap: break-word; font-weight: normal; font-family: " Montserrat ",sans-serif; font-size: 22px;">
                                                                        Things you can do on covidbreak😄
                                                                    </h1>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="25%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 9px dotted #ffffff;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <span>&#160;</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 0px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div style="color: #ffffff; line-height: 180%; text-align: left; word-wrap: break-word;">
                                                                        <ul style="list-style-type: square;">
                                                                            <li style="font-size: 14px; line-height: 25.2px;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 25.2px;">Write a Article That can help other readers during COVID Outbreak <span style="font-size: 12px; line-height: 21.6px;">(On Subjects like, e.g. How to face Covid, how to maintain health and exercise during lockdown, how to study effectively during lockdown etc.)&nbsp; &nbsp;|&nbsp; <span style="font-size: 14px; line-height: 25.2px;">100 Points</span></span>
                                                                                </span>
                                                                            </li>
                                                                            <li style="font-size: 14px; line-height: 25.2px;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 25.2px;">Write about if you can provide MEDICAL HELP to covid patients (e.g. oxygen cylinders, medicines etc)&nbsp; |&nbsp; 100 Points</span></li>
                                                                            <li style="font-size: 14px; line-height: 25.2px;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 25.2px;">Share the Article/Quotes on covidbreak website on social media platforms |&nbsp; 50 Points</span></li>
                                                                            <li style="font-size: 14px; line-height: 25.2px;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 25.2px;">Verify the Article, report bad Articles etc... </span></li>
                                                                            <li style="font-size: 14px; line-height: 25.2px;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 25.2px;">Don"t forget to write feedback on twitter, facebook, instagram (COVIDBREAK social media profiles are linked below...)</span></li>
                                                                        </ul>
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 30px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div style="line-height: 140%; text-align: center; word-wrap: break-word;">
                                                                        <p style="font-size: 14px; line-height: 140%;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 19.6px; color: #ffffff;"><strong>I am Excited&gt;&gt;</strong></span></p>
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px 10px 40px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div align="center">
                                                                        <!--[if mso]><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-spacing: 0; border-collapse: collapse; mso-table-lspace:0pt; mso-table-rspace:0pt;font-family:arial,helvetica,sans-serif;"><tr><td style="font-family:arial,helvetica,sans-serif;" align="center"><v:roundrect xmlns:v="urn:schemas-microsoft-com:vml" xmlns:w="urn:schemas-microsoft-com:office:word" href="" style="height:36px; v-text-anchor:middle; width:338px;" arcsize="11%" strokecolor="#ffffff" strokeweight="2px" fillcolor="#9399ef"><w:anchorlock/><center style="color:#FFFFFF;font-family:arial,helvetica,sans-serif;"><![endif]-->
                                                                        <a href="www.covidbreak.org" target="_blank" style="box-sizing: border-box;display: inline-block;font-family:arial,helvetica,sans-serif;text-decoration: none;-webkit-text-size-adjust: none;text-align: center;color: #FFFFFF; background-color: #9399ef; border-radius: 4px; -webkit-border-radius: 4px; -moz-border-radius: 4px; width:auto; max-width:100%; overflow-wrap: break-word; word-break: break-word; word-wrap:break-word; mso-border-alt: none;border-top-color: #ffffff; border-top-style: solid; border-top-width: 2px; border-left-color: #ffffff; border-left-style: solid; border-left-width: 2px; border-right-color: #ffffff; border-right-style: solid; border-right-width: 2px; border-bottom-color: #ffffff; border-bottom-style: solid; border-bottom-width: 2px;">
                                                                            <span style="display:block;padding:10px 50px;line-height:120%;"><strong> Write a Feedback on CovidBreak &gt;&gt;</strong></span>
                                                                        </a>
                                                                        <!--[if mso]></center></v:roundrect></td></tr></table><![endif]-->
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: #ffffff;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: #ffffff;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:40px 10px 10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div align="center">
                                                                        <div style="display: table; max-width:207px;">
                                                                            <!--[if (mso)|(IE)]><table width="207" cellpadding="0" cellspacing="0" border="0"><tr><td style="border-collapse:collapse;" align="center"><table width="100%" cellpadding="0" cellspacing="0" border="0" style="border-collapse:collapse; mso-table-lspace: 0pt;mso-table-rspace: 0pt; width:207px;"><tr><![endif]-->
        
        
                                                                            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 20px;" valign="top"><![endif]-->
                                                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 20px">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                            <a href="https://instagram.com/" title="Instagram" target="_blank">
                                                                                                <img src="images/image-2.png" alt="Instagram" title="Instagram" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!--[if (mso)|(IE)]></td><![endif]-->
        
                                                                            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 20px;" valign="top"><![endif]-->
                                                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 20px">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                            <a href="https://linkedin.com/" title="LinkedIn" target="_blank">
                                                                                                <img src="images/image-4.png" alt="LinkedIn" title="LinkedIn" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!--[if (mso)|(IE)]></td><![endif]-->
        
                                                                            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 20px;" valign="top"><![endif]-->
                                                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 20px">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                            <a href="https://twitter.com/" title="Twitter" target="_blank">
                                                                                                <img src="images/image-3.png" alt="Twitter" title="Twitter" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!--[if (mso)|(IE)]></td><![endif]-->
        
                                                                            <!--[if (mso)|(IE)]><td width="32" style="width:32px; padding-right: 0px;" valign="top"><![endif]-->
                                                                            <table align="left" border="0" cellspacing="0" cellpadding="0" width="32" height="32" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;margin-right: 0px">
                                                                                <tbody>
                                                                                    <tr style="vertical-align: top">
                                                                                        <td align="left" valign="middle" style="word-break: break-word;border-collapse: collapse !important;vertical-align: top">
                                                                                            <a href="https://youtube.com/" title="YouTube" target="_blank">
                                                                                                <img src="images/image-7.png" alt="YouTube" title="YouTube" width="32" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: block !important;border: none;height: auto;float: none;max-width: 32px !important">
                                                                                            </a>
                                                                                        </td>
                                                                                    </tr>
                                                                                </tbody>
                                                                            </table>
                                                                            <!--[if (mso)|(IE)]></td><![endif]-->
        
        
                                                                            <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                                                        </div>
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div style="line-height: 140%; text-align: center; word-wrap: break-word;">
                                                                        <p style="font-size: 14px; line-height: 140%;"><span style="font-size: 18px; line-height: 25.2px; font-family: Montserrat, sans-serif;">www.yourcompany.com</span></p>
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <div style="color: #888888; line-height: 180%; text-align: center; word-wrap: break-word;">
                                                                        <p style="font-size: 14px; line-height: 180%;"><span style="font-family: Montserrat, sans-serif; font-size: 14px; line-height: 25.2px;">Want to change how you receive these emails? You can update your preferences or <span style="text-decoration: underline; font-size: 14px; line-height: 25.2px;">unsubscribe</span>                                                                    from this list.</span>
                                                                        </p>
                                                                        <p style="font-size: 14px; line-height: 180%;">&nbsp;</p>
                                                                        <p style="font-size: 14px; line-height: 180%;"><span style="font-family: Montserrat, sans-serif; font-size: 12px; line-height: 21.6px;">&copy; 2021 covidbreak. covid help platform</span></p>
                                                                    </div>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:0px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table width="100%" cellpadding="0" cellspacing="0" border="0">
                                                                        <tr>
                                                                            <td style="padding-right: 0px;padding-left: 0px;" align="center">
        
                                                                                <img align="center" border="0" src="images/image-8.png" alt="Image" title="Image" style="outline: none;text-decoration: none;-ms-interpolation-mode: bicubic;clear: both;display: inline-block !important;border: none;height: auto;float: none;width: 100%;max-width: 550px;"
                                                                                    width="550" class="v-src-width v-src-max-width" />
        
                                                                            </td>
                                                                        </tr>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
        
                            <div class="u-row-container" style="padding: 0px;background-color: transparent">
                                <div class="u-row" style="Margin: 0 auto;min-width: 320px;max-width: 550px;overflow-wrap: break-word;word-wrap: break-word;word-break: break-word;background-color: transparent;">
                                    <div style="border-collapse: collapse;display: table;width: 100%;background-color: transparent;">
                                        <!--[if (mso)|(IE)]><table width="100%" cellpadding="0" cellspacing="0" border="0"><tr><td style="padding: 0px;background-color: transparent;" align="center"><table cellpadding="0" cellspacing="0" border="0" style="width:550px;"><tr style="background-color: transparent;"><![endif]-->
        
                                        <!--[if (mso)|(IE)]><td align="center" width="550" style="width: 550px;padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;" valign="top"><![endif]-->
                                        <div class="u-col u-col-100" style="max-width: 320px;min-width: 550px;display: table-cell;vertical-align: top;">
                                            <div style="width: 100% !important;">
                                                <!--[if (!mso)&(!IE)]><!-->
                                                <div style="padding: 0px;border-top: 0px solid transparent;border-left: 0px solid transparent;border-right: 0px solid transparent;border-bottom: 0px solid transparent;">
                                                    <!--<![endif]-->
        
                                                    <table style="font-family:arial,helvetica,sans-serif;" role="presentation" cellpadding="0" cellspacing="0" width="100%" border="0">
                                                        <tbody>
                                                            <tr>
                                                                <td class="v-container-padding-padding" style="overflow-wrap:break-word;word-break:break-word;padding:10px;font-family:arial,helvetica,sans-serif;" align="left">
        
                                                                    <table height="0px" align="center" border="0" cellpadding="0" cellspacing="0" width="100%" style="border-collapse: collapse;table-layout: fixed;border-spacing: 0;mso-table-lspace: 0pt;mso-table-rspace: 0pt;vertical-align: top;border-top: 0px solid #BBBBBB;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                        <tbody>
                                                                            <tr style="vertical-align: top">
                                                                                <td style="word-break: break-word;border-collapse: collapse !important;vertical-align: top;font-size: 0px;line-height: 0px;mso-line-height-rule: exactly;-ms-text-size-adjust: 100%;-webkit-text-size-adjust: 100%">
                                                                                    <span>&#160;</span>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
        
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
        
                                                    <!--[if (!mso)&(!IE)]><!-->
                                                </div>
                                                <!--<![endif]-->
                                            </div>
                                        </div>
                                        <!--[if (mso)|(IE)]></td><![endif]-->
                                        <!--[if (mso)|(IE)]></tr></table></td></tr></table><![endif]-->
                                    </div>
                                </div>
                            </div>
        
        
                            <!--[if (mso)|(IE)]></td></tr></table><![endif]-->
                        </td>
                    </tr>
                </tbody>
            </table>
            <!--[if mso]></div><![endif]-->
            <!--[if IE]></div><![endif]-->
        </body>
        
        </html>';
        $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();



    }
    else{
      $error[] ='Failed : Something went wrong';
    }
 }
 } ?>

	
     
 <?php 
  if(isset($error)){ 
foreach($error as $error){ 
  echo '<p class="errmsg">&#x26A0;'.$error.' </p>'; 
}
}
?>

      <?php if(isset($done)) 
      { ?>
    <div class="successmsg"><span style="font-size:100px;">&#9989;</span> <br> You have registered successfully . 
    
     <a href="authlogin.php" style="color:black;">Login here... </a> </div>
      <?php } else { ?>
        <form action="" method="post" class="uk-grid-small" uk-grid style="width: 80%; margin-left: 10%;">
    <input type="hidden" name="country" value="<?php echo $country?>">
    <input type="hidden" name="city" value="<?php echo $city?>">
    <input type="hidden" name="state" value="<?php echo $state?>">
    <input type="hidden" name="ip" value="<?php echo $ip?>">
    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">FirstName</span>*
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="FirstName" name="fname" value="<?php if(isset($error)){ echo $_POST['fname'];}?>" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
  <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
  <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
</svg>
    </span>
  </p>
</div>
    </div>






    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">LastName</span>*
  <p class="control has-icons-left">
    <input class="input" type="text" placeholder="LastName" name="lname" value="<?php if(isset($error)){ echo $_POST['lname'];}?>" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-person-check" viewBox="0 0 16 16">
  <path d="M6 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H1s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C9.516 10.68 8.289 10 6 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
  <path fill-rule="evenodd" d="M15.854 5.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 0 1 .708-.708L12.5 7.793l2.646-2.647a.5.5 0 0 1 .708 0z"/>
</svg>
    </span>
  </p>
</div>
    </div>



    <div class="form-group" style="display: none;">
    <label class="label_txt">Username </label>
    <input type="text" class="form-control" name="username" value="<?php if(isset($error)){ echo $_POST['username'];}?>">
  </div>

    <div class="uk-width-1-1@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">Email</span>*
  <p class="control has-icons-left">
    <input class="input" type="email" placeholder="Email" name="email" class="form-control" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-at" viewBox="0 0 16 16">
  <path d="M13.106 7.222c0-2.967-2.249-5.032-5.482-5.032-3.35 0-5.646 2.318-5.646 5.702 0 3.493 2.235 5.708 5.762 5.708.862 0 1.689-.123 2.304-.335v-.862c-.43.199-1.354.328-2.29.328-2.926 0-4.813-1.88-4.813-4.798 0-2.844 1.921-4.881 4.594-4.881 2.735 0 4.608 1.688 4.608 4.156 0 1.682-.554 2.769-1.416 2.769-.492 0-.772-.28-.772-.76V5.206H8.923v.834h-.11c-.266-.595-.881-.964-1.6-.964-1.4 0-2.378 1.162-2.378 2.823 0 1.737.957 2.906 2.379 2.906.8 0 1.415-.39 1.709-1.087h.11c.081.67.703 1.148 1.503 1.148 1.572 0 2.57-1.415 2.57-3.643zm-7.177.704c0-1.197.54-1.907 1.456-1.907.93 0 1.524.738 1.524 1.907S8.308 9.84 7.371 9.84c-.895 0-1.442-.725-1.442-1.914z"/>
</svg>
    </span>
  </p>
</div>
    </div>

   

    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">Password</span>*
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Password" name="password"  id="myInput" class="form-control" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2zM5 8h6a1 1 0 0 1 1 1v5a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V9a1 1 0 0 1 1-1z"/>
</svg>
    </span>
  </p>
</div>
    </div>

   
    <div class="uk-width-1-2@s">
    <div class="field">
    <span class="uk-label" style="text-decoration: normal;">Confirm Password</span>*
  <p class="control has-icons-left">
    <input class="input" type="password" placeholder="Confirm Password" id="cmyInput" name="passwordConfirm" class="form-control" required>
    <span class="icon is-small is-left">
    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-lock-fill" viewBox="0 0 16 16">
  <path d="M8 1a2 2 0 0 1 2 2v4H6V3a2 2 0 0 1 2-2zm3 6V3a3 3 0 0 0-6 0v4a2 2 0 0 0-2 2v5a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V9a2 2 0 0 0-2-2z"/>
</svg>
    </span>
  </p>
</div>
    </div>

    <div class="uk-width-1-2@s">
    <input type="checkbox" onclick="myFunction()" name="" id=""> Show Password
</div>
    <script>
	function myFunction() {
  var x = document.getElementById("myInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }


  var x = document.getElementById("cmyInput");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}</script>
    <label class="checkbox">
  <input type="checkbox">
  I agree to the <a href="#">terms and conditions</a>
</label>
    </div>
    
    <div class="uk-width-1-1@s">

<button type="submit" name="signup" class="button is-primary is-light is-outlined is-medium is-fullwidth">Register</button>


    </div>

    


    </form>
<?php } ?> 

</body>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
</html>