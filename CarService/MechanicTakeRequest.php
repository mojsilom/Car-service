<?php
include "connection.php";
session_start();
if(isset($_REQUEST['Take_request'])) {
    $numberOfRow=$_REQUEST['CustomerVehicleID'];
    $query = "UPDATE `vehicle` SET `Status` = 'In progress', `MechanicID` =".$_SESSION['user']['ID']." WHERE `vehicle`.`VehicleID` = ".$numberOfRow;

    $result = $connection->query($query);
    if ($result) {
        setcookie("notification", "You took request successfully", time() + 60 * 60 * 24, "/");
        header("Location: mechanic.php");
    } else {
        var_dump($result);
        die("Record failed");
    }
}