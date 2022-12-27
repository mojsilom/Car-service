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

//slanje mejla sam omogucio modifikovanjem php_ini fajla

ini_set('sendmail_from','markomojsilovic77@gmail.com');
if(isset($_REQUEST['Complete_request']))
{
    $VehicleID=$_REQUEST['DataToMechanicCR'];
    $Comment=$_REQUEST['inputComment'];
    $headers = 'From: markomojsilovic77@gmail.com' . "\r\n" .
        'MIME-Version: 1.0' . "\r\n" .
        'Content-Type: text/html; charset=utf-8';



    $query="UPDATE `vehicle` SET `Status` = 'Completed', `DateAndTimeCompleted` = CURRENT_TIMESTAMP, `MechanicComment` = '".$Comment."' WHERE `vehicle`.`VehicleID` = ".$VehicleID;
    $result=$connection->query($query);
    if($result!=true)
    {
        die("Failed!");
    }
    else
    {
        $queryMail="SELECT * FROM vehicle JOIN customers ON FK_CustomerID = customers.CustomerID WHERE VehicleID =".$VehicleID;
        $resultMail=$connection->query($queryMail);
        if($resultMail->num_rows>0)
        {
            $row=mysqli_fetch_assoc($resultMail);
            $to=$row['Email'];
            $name=$row['FirstName'];
            $subject="Vehicle repair";
            $notify=$row['Notify'];
            $name=$row['FirstName'];
            if($notify==1)
            {
                $test=mail($to,$subject,nl2br("Postovani $name,\n$Comment\nMozete preuzeti Vase vozilo"),$headers);
                if($test) {
                    setcookie("notification","Request completed. Email sent successfully.",time()+60*60*24,"/");
                }
                else
                {
                    die("Failed");
                }
            }
            else
            {
                setcookie("notification","Request completed successfully.",time()+60*60*24,"/");
            }
        }
        else
        {
            die("Failed!");
        }
        header("Location: mechanic.php");
    }
}
?>
</body>
</html>
