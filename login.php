<?php 
session_start(); 
include "db.php";
if (isset($_POST['uname']) && isset($_POST['password'])) {
    function validate($data)
    {
       $data = trim($data);
       $data = stripslashes($data);
       $data = htmlspecialchars($data);
       return $data;
    }
    $uname = validate($_POST['uname']);
    $password = validate($_POST['password']);
    $pass=md5($password);

    if (empty($uname)) 
    {
        header("Location: loginpage.php?error=User Name is required");
        exit();
    }
    else if(empty($pass))
    {
        header("Location: loginpage.php?error=Password is required");
        exit();
    }
    else
    {
        $sql = "SELECT * FROM registration_master WHERE user_name='$uname' AND password='$pass'";
        $result = mysqli_query($con, $sql);
        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['user_name'] === $uname && $row['password'] === $pass) 
            {
                echo "Logged in!";
                $_SESSION['user_name'] = $row['user_name'];
                $_SESSION['name'] = $row['name'];
                $_SESSION['id'] = $row['id'];
                header("Location: homepage.php");
                exit();
            }
            else
            {
                header("Location: loginpage.php?error=Incorect User name or password");
                exit();
            }
        }
        else
        {
            header("Location: loginpage.php?error=Incorect User name or password");
            exit();
        }

    }

}
else
{
    header("Location: loginpage.php");
    exit();
}