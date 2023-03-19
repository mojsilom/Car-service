<?php
session_start();

if(!isset($_SESSION['user']))
    header("Location: login.php");
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Mechanic Page</title>
    <link rel="stylesheet" href="styleTable.css">
    <link rel="stylesheet" href="navBar.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "notification.php";
?>
<div class="navBar"
<ul>
    <li class="myCustomers"><a href="#contentMyCustomers">My customers</a></li>
    <li class="takeRequest"><a href="#contentTakeRequest">Take request</a></li>
    <li class="CompleteRequest"><a href="#contentCompleteRequest">Complete request</a></li>
    <li class="historyOfVehicle"><a href="#contentHistoryOfVehicle">History of Vehicle</a></li>
    <li><a href="logout.php">Logout</a></li>
</ul>
</div>
<div class="navigationForm">
    <div id="contentMyCustomers"><?php include "MyCustomersTable.php" ?></div>
    <div id="contentTakeRequest"> <?php include "takeRequest.php" ?> </div>
    <div id="contentCompleteRequest"> <?php include "completeRequest.php" ?> </div>
    <div id="contentHistoryOfVehicle"> <?php include "historyOfVehicle.php" ?> </div>
</div>
</body>
</html>

