<?php
include "connection.php";

$query="SELECT * FROM `vehicle` JOIN users ON MechanicID=users.ID WHERE `MechanicID` = ".$_SESSION['user']['ID']." AND Status!='New'";
$result=$connection->query($query);

?>
<div class="DivCustomerTable">
    <table class="CustomersTable">
        <tr>
            <td class="head">Status</td>
            <td class="head">Manufacturer</td>
            <td class="head">Model</td>
            <td class="head">Year</td>
            <td class="head">EnginePower</td>
            <td class="head">Mileage</td>
            <td class="head">ChassisNumber</td>
            <td class="head">Description</td>
        </tr>
        <?php
        if($result->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <tr>
                    <td class="data"><?=$row['Status']?></td>
                    <td class="data"><?=$row['Manufacturer']?></td>
                    <td class="data"><?=$row['Model']?></td>
                    <td class="data"><?=$row['Year']?></td>
                    <td class="data"><?=$row['EnginePower']?></td>
                    <td class="data"><?=$row['Mileage']?></td>
                    <td class="data"><?=$row['ChassisNumber']?></td>
                    <td class="data"><?=$row['Description']?></td>
                </tr>
                <?php
            }

        }
        ?>
    </table>
</div>