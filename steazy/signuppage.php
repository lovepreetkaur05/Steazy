<?php 
session_start(); 
include "db.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Steazy|Signup</title>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="logo">
                <a href="index.php">Steazy</a>
            </div>
            <div class="left-c">
                <div class="left-cin">
                <h1>Welcome Back!</h1>
                <p>
                    To keep connected with us please<br>
login with your personal info.
                </p>
                <a href="loginpage.php">SIGN IN</a>
                </div>
            </div>
        </div>
        <div class="right"><div class="s">
            <div>
                <h1>Create Account</h1>
            </div>
            <div>
                <form method="post">
                    <div class="form-input">
                        <input type="text" name="uname" placeholder="Username" />
                    </div>
                    <div class="form-input">
                        <input type="email" name="email" placeholder="Email address" />
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <div class="form-input">
                        <input type="password" placeholder="Confirm password" />
                    </div>
                    <div>
                        <input type="submit" name="register" class="sub" value="SIGN UP">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
    <?php
  
  if(isset($_POST['register']))
  {
	$uname =$_POST['uname'];
    $email =$_POST['email'];
	$password =$_POST['password'];
	$encpass = md5($password);

	$ins_query="INSERT INTO registration_master (user_name,email,password,display_password) VALUES('$uname','$email','$encpass','$password')";
	mysqli_query($con,$ins_query);
	echo "<script>alert('Data Inserted Successfully.');</script>";
  }

?>
</body>
</html>