<?php
include "connection.php";

$query="SELECT * FROM `vehicle` RIGHT JOIN customers ON vehicle.FK_CustomerID=customers.CustomerID WHERE vehicle.Status='New'";
$result =$connection->query($query);
?>
<div class="DivFirstnameLastnameChassis">
    <select name="FirstnameLastnameChassis" id="FirstnameLastnameChassis" onchange="selectedUpdateOrDelete(this)">
        <option value="0"> --- Customer Data  ---</option>
        <?php
        if($result->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <option value="<?=$row['VehicleID']?>"> <?=$row['FirstName']?> - <?= $row['LastName'] ?> - <?=$row['ChassisNumber']?></option>
                <?php
            }
        }

        ?>
    </select>
</div>