<?php

if(isset($_REQUEST['firstname']))
{
    $numberOfRow=$_REQUEST['firstname'];
    $idLastName=0;
    $FirstNameOfUser="";
    $arrayLastName=array();
    include "connection.php";


    $query = "SELECT * FROM customers WHERE customers.CustomerID = ".$numberOfRow;

    $result = $connection->query($query);


    if($result->num_rows>0) {
        ?>
        <option value="0" > --- LastName --- </option>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $FirstNameOfUser=$row['FirstName'];
        }

    $queryLastName="SELECT DISTINCT LastName FROM customers WHERE FirstName = "."'$FirstNameOfUser'";

    $resultLastName = $connection->query($queryLastName);

    if($resultLastName->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($resultLastName))
        {
            array_push($arrayLastName,$row['LastName']);
        }
    }
    else {
        ?>
        <option value="0"> --- LastName ---> </option>
        <?php
    }
    //$unique=array_unique($arrayLastName);
    $size=sizeof($arrayLastName);
    do{
        $size--;
        ?>
        <option value="<?=$idLastName?>"> <?= $arrayLastName[$idLastName]?> </option>
        <?php
        $idLastName++;
    }
    while($size>0);
    }

    else {
        ?>
        <option value="0"> --- LastName --- </option>
        <?php
    }

}
?>