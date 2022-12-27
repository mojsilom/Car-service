<?php
include "connection.php";

$query="SELECT * FROM `vehicle` RIGHT JOIN customers ON vehicle.FK_CustomerID=customers.CustomerID WHERE vehicle.Status='New'";
$result =$connection->query($query);
?>
<div class="DivDataToMechanic">
    <select name="DataToMechanic" id="DataToMechanic" onchange="showNote(this)">
        <option value="0"> --- Customer Data  ---</option>
        <?php
        if($result->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <option value="<?=$row['VehicleID']?>"> <?= $row['Manufacturer'] ?> - <?= $row['Model'] ?> - <?= $row['Year'] ?> - <?= $row['Fuel'] ?></option>
                <?php
            }
        }

        ?>
    </select>
</div>
    <?php include "displayProblem.php";?>
