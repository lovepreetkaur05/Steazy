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
    <title>Steazy|login</title>
</head>
<body>
    <div class="main">
        <div class="left">
            <div class="logo">
                <a href="index.php">Steazy</a>
            </div>
            <div class="left-c">
                <div class="left-cin">
                <h1>JOIN US!</h1>
                <p>
                    To join our E-Learning Community <br>
Sign up will your personal details.
                </p>
                <a href="signuppage.php">SIGN UP</a>
                </div>
            </div>
        </div>
        <div class="right"><div class="s">
            <div>
                <h1>Login</h1>
            </div>
            <div>
                <form action="login.php"  method="post">

                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                    <?php } ?>

                    <div class="form-input">
                        <input type="text" name="uname" placeholder="Username" />
                    </div>
                    <div class="form-input">
                        <input type="password" name="password" placeholder="Password" />
                    </div>
                    <a href="#">Forgot password?</a>
                    <div>
                        <input type="submit" class="sub" value="SIGN IN">
                    </div>
                </form>
            </div>
            </div>
        </div>
    </div>
</body>
</html>