<?php 
session_start(); 
include "db.php";
?>
<!DOCTYPE html>
<html lang="en" data-textdirection="ltr" class="loading">
  <head>
  <title>Login</title>
  </head>
  <body>
    <form  method="post" >
      <h2>LOGIN</h2>
          <label>User Name</label>
          <input type="text" name="uname" placeholder="User Name"><br>
          <label>Email</label>
          <input type="email" name="email" placeholder="email"><br> 
          <label>Password</label>
          <input type="password" name="password" placeholder="Password"><br>
          <label>Confirm  Password</label>
          <input type="password" name="cpassword" placeholder="Password"><br>  
          <button type="submit" name="register">Save</button>

    </form>
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
