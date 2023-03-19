<?php

include "connection.php";

$Firstname=$_REQUEST['Firstname'];
$Lastname=$_REQUEST['Lastname'];
$Phone=$_REQUEST['Phone'];
$Address=$_REQUEST['Address'];
$Email=$_REQUEST['Email'];
$Notify=$_REQUEST['Notify'];
$Manufacturer=$_REQUEST['Manufacturer'];
$Model=$_REQUEST['Model'];
$Year=$_REQUEST['Year'];
$Fuel=$_REQUEST['Fuel'];
$Engine=$_REQUEST['Engine'];
$Mileage=$_REQUEST['Mileage'];
$Chassis=$_REQUEST['Chassis'];
$Note=$_REQUEST['Note'];


$NotifyBool=1;

if($Notify==1)
{
    $NotifyBool=1;
}
else if($Notify==0)
{
    $NotifyBool=0;
}



$insertQuery="INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Phone`, `Address`, `Email`, `Notify`)
 VALUES (NULL, '".$Firstname."', '".$Lastname."', '".$Phone."', '".$Address."', '".$Email."', '".$NotifyBool."');";
$insertResult=$connection->query($insertQuery);


if($insertResult!=true)
{
    var_dump($Email);
    die("Record failed!");
}

$id=0;
$query = "SELECT * FROM customers ORDER BY customers.CustomerID DESC;";
$result = $connection->query($query);

if($result->num_rows>0)
{
    $row=mysqli_fetch_assoc($result);
    $id=$row['CustomerID'];

    $insertVehicle="INSERT INTO `vehicle` (`VehicleID`, `Manufacturer`, `Model`, `Year`, `Fuel`, `EnginePower`, `Mileage`, `ChassisNumber`, `Description`, `FK_CustomerID`, `DateAndTime`) 
VALUES (NULL, '".$Manufacturer."', '".$Model."', '".$Year."', '".$Fuel."', '".$Engine."', '".$Mileage."', '".$Chassis."', '".$Note."', '".$id."',DEFAULT)";
    $insertRes=$connection->query($insertVehicle);

    if($insertRes!=true)
    {
        die("Query failed");
    }
    else
    {
        header("Location: clerk.php");
    }

}
?>