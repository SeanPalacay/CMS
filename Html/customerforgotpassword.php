<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recover Password</title>
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\Css\style.css">
</head>
<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require './PHPMailer/src/Exception.php';
require './PHPMailer/src/PHPMailer.php';
require './PHPMailer/src/SMTP.php';


   require_once "db.php";

if(isset($_REQUEST['pwdrst']))
{
  $email = $_REQUEST['email'];
  $check_email = mysqli_query($conn,"select email from tblregistration where email='$email'");
  $res = mysqli_num_rows($check_email);


  if($res>0)
  {
    $message = '<div>
     <p><b>Hello!</b></p>
     <p>You are recieving this email because we recieved a password reset request for your account.</p>
     <br>
     <p><button class="btn btn-primary"><a href="http://localhost/main/html/customerchangepassword.php?secret='.base64_encode($email).'">Reset Password</a></button></p>
     <br>
     <p>If you did not request a password reset, no further action is required.</p>
    </div>';


$email = $email; 

$mail = new PHPMailer;

        $mail->isSMTP();  
$mail->SMTPAuth = true;                 
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;   
$mail->Host = 'smtp.gmail.com';
$mail->Port = 587; 
    $mail->Username = 'palacaysean@gmail.com';
    $mail->Password = 'aywhkbdwzpcnmrkx';
$mail->FromName = "Butag Cemtery";
$mail->AddAddress($email);
$mail->Subject = "Reset Password";
$mail->isHTML( TRUE );
$mail->Body =$message;
if($mail->send())
{
  $msg = "We have e-mailed your password reset link!";
}
}
else
{
  $msg = "We can't find a user with that email address";
}
}

?>
<body>

<div class="container">

    <div class="left-div">
        <div class="left-image">
            <img src="..\images\Forgot Pass.png" alt="">
        </div>
        <div class="left-text">
        <p style="font-size: 12px;">To reset your password, enter the registered e-mail adddress and we will send you password reset instructions on your e-mail!</p>
        </div>
    </div>
        <!-- right div start  -->

        <div class="right-div">
            <h4>Welcome Back</h4>
            <form action="" class="right-form forgotPass-form">
            <ul>
                    <li><h3>Recover Your Password</h3></li>
                    <li><input type="text" name="email" id="email" placeholder="Enter Email" required 
       data-parsley-type="email" data-parsley-trigg
       er="keyup" class="form-control"></li>
                    <li><input type="submit" id="login" name="pwdrst" value="Get Link" class="btn btn-success"></li>
                </ul>
       
       <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
     </form>
     <div class="footer">
                <ul>
                    <li><a href="login.php">Back</a></li>
                </ul>
            </div>
            <div class="vr-line"></div>
     </div>

     </div>

</body>
</html>