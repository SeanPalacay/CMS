<?php

     session_start();

    require_once "db.php";


if(isset($_SESSION['use']))   // Checking whether the session is already there or not if 

                              // true then header redirect it to the home page directly 
 {

    header("Location: customerdashboard.php");

 }

 ?>

<?php

 if (isset($_POST['Login'])) {

    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);

    if(!filter_var($username,FILTER_VALIDATE_EMAIL)) {

        $username_error = '<div class="alert alert-danger">Incorrect username or password.</div>';

    }

    $result = mysqli_query($conn, "SELECT * FROM tblregistration WHERE username = '" . $username. "'");

 if(mysqli_num_rows($result) > 0)  

 {  

      while($row = mysqli_fetch_array($result))  

      {  

           if(password_verify($password, $row["password"]))  

           {  
                //return true;  
                $_SESSION["use"] = $username;  

                header("location:customerdashboard.php");  

           }  
    else {

         $msg= '<div class="alert alert-danger">Error.</div>';

    }



}



 }



}



?>





<?php include 'db.php'; 

$query="SELECT * from tblcontent";

$result= mysqli_query($conn,$query);

while($row = mysqli_fetch_assoc($result))

{

    $title = $row['title'];
    $navtitle = $row['navtitle'];

    }



?>


<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://use.fontawesome.com/releases/v5.0.6/css/all.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="..\Css\style.css">

    <title><?php echo $title; ?></title>


</head>



<script>
$(document).ready(function() {

    // show the alert

    setTimeout(function() {

        $(".alert").alert('close');

    }, 6000);

});
</script>


<body>


    <div class="container">

        <div class="left-div">
            <div class="left-image">
                <img src="..\images\sd.png" alt="">
            </div>
            <div class="left-text">
                <p>Where we provide a peaceful and respectful final resting place for your loved ones.</p>
            </div>
        </div>

        <!-- right div start  -->

        <div class="right-div">
            <h4>Welcome Back</h4>


            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" class="right-form" method="post"
                autocomplete="off">

                <?php if(isset($username_error)){

                             echo $username_error;

                                        }

?>
                <ul>
                    <li>
                        <h3>Login Your Account</h3>
                    </li>
                    <li><i class="fas fa-user"></i><input type="text" id="username" class="form-control"
                            placeholder="Username" name="username" required autofocus></li>
                    <li> <i class="fas fa-lock"></i><input type="password" id="password" class="form-control"
                            name="password" placeholder="Password" required> <span onclick="myFunction()"><i
                                class="fas fa-eye"></i></span>
                    </li> 
                     <li><input type="submit" name="Login" value="Login" id="login"></li>

                </ul>

            </form>
            <script>
            function myFunction() {
                var pw_ele = document.getElementById("password");
                if (pw_ele.type === "password") {
                    pw_ele.type = "text";
                } else {
                    pw_ele.type = "password";
                }
            }
            </script>

<div class="footer">
<ul>
<li><a href="registration.php" class="form-control btn btn-link" data-toggle="modal" data-target="#my-popup"> Don't have account? Register here.</a></li>
<li><a href="customerforgotpassword.php" class="form-control btn btn-link"> Forgot
                    Password? </a></li>
                    </ul>
                    </div> 
                <div class="vr-line"></div>
        </div>
    </div>
    
            <div class="modal fade" tabindex="-1" role="dialog" id="my-popup">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4 class="modal-title">DATA PROTECTION CONSENT</h4>
                        </div>
                        <div class="modal-body">
                            <p style="text-align: justify;">By consenting to this enhanced
                                experience you will see content that is more relevant to you .
                                Depending on your privacy settings, our partners and tools may
                                collect and process device identifiers, personal data such as
                                personal information, location and other demographic and interest
                                data about you to provide you a personalized experience.</p>
                            <p style="text-align: justify;">By agreeing, you agree to process your
                                personal data.</p>
                        </div>
                        <div class="modal-footer justify-content-start"> <button type="button"
                                onclick="javascript:window.location.href='registration.php';"
                                class="btn btn-success btn-sm mr-auto" data-dismiss="modal">YES, I
                                AGREE</button> <button type="button"
                                onclick="javascript:window.location.href='login.php';" class="btn btn-danger btn-sm"
                                data-dismiss="modal">NO, THANK
                                YOU</button> </div>
                    </div><!-- /.modal-content -->
                </div><!-- /.modal-dialog -->
            </div><!-- /.modal -->
        </div>
        </form>
    </div>
    </div>
    </div>
    </div>
    </div>
    </main>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous">
    </script>
</body>

</html>