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
include_once('db.php');
if(isset($_REQUEST['pwdrst']))
{

    $email = $_REQUEST['email'];
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    $cpassword = mysqli_real_escape_string($conn, $_POST['cpassword']);

    $hashed_cpassword = password_hash($cpassword, PASSWORD_DEFAULT);

    

    

    

    if(strlen($password) < 6) {

        $password_error = '<div class="alert alert-danger">Password must be minimum of 6 characters.</div>';

    }       

    if($password != $cpassword) {

        $confirmpassword_error = '<div class="alert alert-danger">Password and Confirm Password does not match</div>';

    }

   

    else {

   

        $query1 ="update tblregistration set password='$hashed_password', cpassword = '$hashed_cpassword' where email='$email'";

    $result= mysqli_query($conn, $query1);

   

    if($result){

        $msg= '<div class="alert alert-success">Your password has been updated! <a href="login.php">Click here</a> to login </div>';

      


        

    }

}
}

if($_GET['secret'])
{
  $email = base64_decode($_GET['secret']);
  $check_details = mysqli_query($conn,"select email from tblregistration where email='$email'");
  $res = mysqli_num_rows($check_details);
  if($res>0)
    { ?>
<body>

<div class="container">

    <div class="left-div">
        <div class="left-image">
            <img src="..\images\recover.png" alt="">
        </div>
        <div class="left-text">
        <p style="font-size: 12px;">To reset your password, enter the registered e-mail adddress and we will send you password reset instructions on your e-mail!</p>
        </div>
    </div>
  
         <!-- right div start  -->

         <div class="right-div">
            <h4>Reset Password</h4>
     <form id="validate_form" method="post" class="right-form forgotPass-form">  
      <ul>
            <li><h3>Recover Your Password</h3></li>
            <li><input type="hidden" name="email" value="<?php echo $email; ?>"/></li>
          <li>  <input type="password" name="password" id="password" placeholder="Enter Password" required 
       data-parsley-type="password" data-parsley-trigg
       er="keyup" class="form-control"/></li>
     <li> <input type="password" name="cpassword" id="cpassword" placeholder="Enter Confirm Password" required data-parsley-type="cpassword" data-parsley-trigg
       er="keyup" class="form-control"/></li>
  <li><input type="submit" id="login" name="pwdrst" value="Reset Password" class="btn btn-success" />  </li>
  </ul>
       
       <p class="error"><?php if(!empty($msg)){ echo $msg; } ?></p>
     </form>
     </div>
   </div>  

<?php } } ?>
</body>
</html>