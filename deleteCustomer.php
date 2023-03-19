<?php
if (isset($_REQUEST['Delete'])) {

include "connection.php";
    $mysqli=new mysqli("localhost","root","","carservice");
    $ID=$_REQUEST['CustomerVehicleID'];
    $query1="DELETE FROM customers WHERE customers.CustomerID = ".$ID;
    $query2 = "DELETE FROM `vehicle` WHERE `vehicle`.`VehicleID` = ".$ID;
    if($mysqli->query($query1))
    {
        if($mysqli->query($query2)) {
            setcookie("notification","Delete successful",time()+60*60*24,"/");
        }
    }
    else
    {
        die("Record failed");
    }
    header("Location: clerk.php");
}

?>