<div class="DivChassisTable">
    <table id="ChassisTable" class="ChassisTable">
        <tr>
            <td class="ChassisHead">Manufacturer</td>
            <td class="ChassisHead">Model</td>
            <td class="ChassisHead">Year</td>
            <td class="ChassisHead">Fuel</td>
            <td class="ChassisHead">EnginePower</td>
            <td class="ChassisHead">Mileage</td>
            <td class="ChassisHead">Description</td>
            <td class="ChassisHead">Status</td>
            <td class="ChassisHead">Owner</td>
            <td class="ChassisHead">Time of arrival</td>
            <td class="ChassisHead">Discharged Time</td>
        </tr>
<?php
include "connection.php";

if(isset($_REQUEST['chassisHistory']))
{
    $number=$_REQUEST['chassisHistory'];
    $ChassisFull="";

    $query="SELECT * FROM `vehicle` JOIN customers on FK_CustomerID=customers.CustomerID WHERE VehicleID=".$number;
    $result = $connection->query($query);

    if($result->num_rows>0) {
        ?>
        <?php
        while($row = mysqli_fetch_assoc($result))
        {
            $ChassisFull=$row['ChassisNumber'];
        }


        $queryGetDataFromChassis="SELECT * FROM vehicle JOIN customers on FK_CustomerID=customers.CustomerID WHERE ChassisNumber = "."'$ChassisFull'"." ORDER BY DateAndTime ASC";
        $resultChassisData=$connection->query($queryGetDataFromChassis);

        if($resultChassisData->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($resultChassisData))
            {
                ?>
                <tr>
                    <td class="ChassisData"><?=$row['Manufacturer']?></td>
                    <td class="ChassisData"><?=$row['Model']?></td>
                    <td class="ChassisData"><?=$row['Year']?></td>
                    <td class="ChassisData"><?=$row['Fuel']?></td>
                    <td class="ChassisData"><?=$row['EnginePower']?></td>
                    <td class="ChassisData"><?=$row['Mileage']?></td>
                    <td class="ChassisData"><?=$row['Description']?></td>
                    <td class="ChassisData"><?=$row['Status']?></td>
                    <td class="ChassisData"><?=$row['FirstName']?> <?=$row['LastName']?></td>
                    <td class="ChassisData"><?=$row['DateAndTime']?></td>
                    <td class="ChassisData"><?=$row['DateAndTimeDischarged']?></td>
                </tr>
                <?php
            }
        }
        }
}

    ?>
            </table>
