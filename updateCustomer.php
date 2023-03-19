<?php
if (isset($_REQUEST['Update'])) {

    include "connection.php";

    $CustomerVehicleID=$_REQUEST['CustomerVehicleID'];
    $CustomerFirstname=$_REQUEST['CustomerFirstname'];
    $CustomerLastname=$_REQUEST['CustomerLastname'];
    $CustomerPhone=$_REQUEST['CustomerPhone'];
    $CustomerAddress=$_REQUEST['CustomerAddress'];
    $CustomerEmail=$_REQUEST['CustomerEmail'];
    $CustomerNotify=$_REQUEST['CustomerNotify'];
    $CustomerManufacturer=$_REQUEST['CustomerManufacturer'];
    $CustomerModel=$_REQUEST['CustomerModel'];
    $CustomerYear=$_REQUEST['CustomerYear'];
    $CustomerFuel=$_REQUEST['CustomerFuel'];
    $CustomerEngine=$_REQUEST['CustomerEngine'];
    $CustomerMileage=$_REQUEST['CustomerMileage'];
    $CustomerChassis=$_REQUEST['CustomerChassis'];
    $CustomerNote=$_REQUEST['CustomerNote'];

    $NotifyBool=1;

    if($CustomerNotify==1)
    {
        $NotifyBool=1;
    }
    else if($CustomerNotify==0)
    {
        $NotifyBool=0;
    }

    $CustomerID=$CustomerVehicleID;
    $VehicleID=$CustomerVehicleID;

    $updateCustomer="UPDATE `customers` SET `FirstName` = '".$CustomerFirstname."', `LastName` = '".$CustomerLastname."', `Phone` = '".$CustomerPhone."', `Address` = '".$CustomerAddress."', `Email` = '".$CustomerEmail."', `Notify` = '".$NotifyBool."' WHERE `customers`.`CustomerID` = '".$CustomerID."';";
    $updateResult=$connection->query($updateCustomer);

    if($updateResult!=true)
    {
        die("Update customer failed!");
    }
    else
    {
        $updateVehicle="UPDATE `vehicle` SET `Manufacturer` = '".$CustomerManufacturer."', `Model` = '".$CustomerModel."', `Year` = '".$CustomerYear."', `Fuel` = '".$CustomerFuel."', `EnginePower` = '".$CustomerEngine."', `Mileage` = '".$CustomerMileage."', `ChassisNumber` = '".$CustomerChassis."', `Description` = '".$CustomerNote."', `DateAndTime` = DEFAULT, `Status` = 'New' WHERE `vehicle`.`VehicleID` = '".$CustomerVehicleID."'";
        $result=$connection->query($updateVehicle);
        if($result!=true)
        {
            die("Update vehicle failed!");
        }
        else
        {
            setcookie("notification","Update successful",time()+60*60*24,"/");
            header("Location: clerk.php");
        }
    }

}