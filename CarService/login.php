<?php
session_start();

if(isset($_SESSION['user']))
{
    $tip=$_SESSION['user']['Type'];
    if($tip=='Mechanic')
    {
        header("Location: mechanic.php");
    }
    else if($tip=='Clerk')
    {
        header("Location: clerk.php");
    }
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login Page</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php include "notification.php";
?>
<div class="intro">
    <form class="formLogin" method="post" action="./checkUser.php">
            <div class="content">
                <img src="images/logo.jpg" alt="Mechanic picture logo" class="mechanicLogo">
                <input class="username" name="username" type="text" placeholder="Username">
                <input class="password" name="password" type="password" placeholder="Password">
                <button class="submit" type="submit">Log in</button>
            </div>
    </form>
</div>
</body>
</html>