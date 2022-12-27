<?php
session_start();
include "connection.php";

if(isset($_REQUEST['username']) && isset($_REQUEST['password']))
{
    $username=$_REQUEST['username'];
    $password=$_REQUEST['password'];


    $upit="SELECT * FROM `users` WHERE `username`='".$username."' AND `passwordhash`='".md5($password)."'";
    $res = $connection->query($upit);

    if($res->num_rows>0)
    {
        $user=mysqli_fetch_assoc($res);
        $_SESSION['user']=$user;
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
    else
    {
        setcookie("notification","Login failed. Wrong username or password.",time()+60*60*24,"/");
        header("Location: login.php");
    }
}
else
{
    header("Location: login.php");
}
?>

