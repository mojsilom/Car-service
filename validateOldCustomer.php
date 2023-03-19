<?php

include "connection.php";

$firstname=$_REQUEST['firstname'];
$lastname=$_REQUEST['lastname'];
$phone=$_REQUEST['phone'];
$address=$_REQUEST['address'];
$email=$_REQUEST['email'];
$notify=$_REQUEST['notify'];
$manufacturer=$_REQUEST['manufacturer'];
$model=$_REQUEST['model'];
$year=$_REQUEST['year'];
$fuel=$_REQUEST['fuel'];
$engine=$_REQUEST['engine'];
$mileage=$_REQUEST['mileage'];
$chassis=$_REQUEST['chassis'];
$note=$_REQUEST['note'];


$firstnameValue="";
$lastnameValue="";
$chassisValue="";
$notifyBool=1;
$lastNameArray=array();


if($notify==1)
{
    $notifyBool=1;
}
else if($notify==0)
{
    $notifyBool=0;
}



$numberOfRow=$firstname;
$query = "SELECT * FROM customers WHERE customers.CustomerID = ".$numberOfRow;
$result = $connection->query($query);

if($result->num_rows>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
       $firstnameValue=$row['FirstName'];
    }
}

$queryLastName="SELECT * FROM customers WHERE customers.FirstName = "."'$firstnameValue'";
$resultLastName=$connection->query($queryLastName);

if($resultLastName->num_rows>0)
{
    while($row=mysqli_fetch_assoc($resultLastName))
    {
        array_push($lastNameArray,$row['LastName']);
    }
    $lastnameValue=$lastNameArray[$lastname];
}


$queryVehicle="SELECT * FROM vehicle WHERE vehicle.VehicleID = ".$chassis;
$resultVehicle=$connection->query($queryVehicle);

if($resultVehicle->num_rows>0)
{
    while($row=mysqli_fetch_assoc($resultVehicle))
    {
        $chassisValue=$row['ChassisNumber'];
    }
}

$insertQuery="INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Phone`, `Address`, `Email`, `Notify`)
 VALUES (NULL, '".$firstnameValue."', '".$lastnameValue."', '".$phone."', '".$address."', '".$email."', '".$notifyBool."');";
$insertResult=$connection->query($insertQuery);


if($insertResult!=true)
{
    die("Record failed!");
}
else{
    header("Location: clerk.php");
}

$id=0;
$query = "SELECT * FROM customers ORDER BY customers.CustomerID DESC;";
$result = $connection->query($query);

if($result->num_rows>0)
{
    $row=mysqli_fetch_assoc($result);
    $id=$row['CustomerID'];

    $insertVehicle="INSERT INTO `vehicle` (`VehicleID`, `Manufacturer`, `Model`, `Year`, `Fuel`, `EnginePower`, `Mileage`, `ChassisNumber`, `Description`, `FK_CustomerID`, `DateAndTime`) 
VALUES (NULL, '".$manufacturer."', '".$model."', '".$year."', '".$fuel."', '".$engine."', '".$mileage."', '".$chassisValue."', '".$note."', '".$id."',DEFAULT)";
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