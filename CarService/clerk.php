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
    <title>Clerk</title>
    <link rel="stylesheet" href="styleTable.css">
    <link rel="stylesheet" href="navBar.css">
    <script src="script.js"></script>
</head>
<body>
<?php include "notification.php";
?>
<div class="navBar"
    <ul>
        <li class="allCustomers"><a href="#contentAllCustomers">All customers</a></li>
        <li class="newCustomer"><a href="#contentNewForm">New Customer</a></li>
        <li class="oldCustomer"><a href="#contentOldForm">Old Customer</a></li>
        <li class="updateOrDelete"><a href="#contentUpdateOrDelete">Update or Delete</a></li>
        <li class="dischargeVehicle"><a href="#contentDischargeVehicle">Discharge vehicle</a></li>
        <li class="historyOfVehicle"><a href="#contentHistoryOfVehicle">History of Vehicle</a></li>
        <li><a href="logout.php">Logout</a></li>
    </ul>
</div>
<div class="navigationForm">
    <div id="contentAllCustomers"><?php include "AllCustomersTable.php" ?></div>
    <div id="contentNewForm"> <?php include "newCustomerForm.php" ?> </div>
    <div id="contentOldForm"> <?php include "oldCustomerForm.php" ?> </div>
    <div id="contentUpdateOrDelete"> <?php include "updateOrDelete.php" ?> </div>
    <div id="contentDischargeVehicle"> <?php include "dischargeVehicle.php" ?> </div>
    <div id="contentHistoryOfVehicle"> <?php include "historyOfVehicle.php" ?> </div>
</div>
</body>
</html>