<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "connection.php";

if(isset($_REQUEST['Discharge_request']))
{
    $VehicleID=$_REQUEST['dischargedRequestSelect'];
    $Comment=$_REQUEST['clerkComment'];
    $Price=$_REQUEST['price'];


    $query="UPDATE `vehicle` SET `Status` = 'Discharged', Price = '".$Price."', `DateAndTimeDischarged` = CURRENT_TIMESTAMP, `ClerkComment` = '".$Comment."' WHERE `vehicle`.`VehicleID` = ".$VehicleID;
    $result=$connection->query($query);
    if($result!=true)
    {
        die("Failed!");
    }
    else
    {
        setcookie("notification","Discharge successful",time()+60*60*24,"/");
        header("Location: clerk.php");
    }
}
?>
</body>
</html>
