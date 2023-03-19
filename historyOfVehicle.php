<?php
include "connection.php";


$query="SELECT * FROM vehicle WHERE VehicleID IN ( SELECT MIN(VehicleID) FROM vehicle GROUP BY ChassisNumber )";
$result =$connection->query($query);
?>

<div class="chassisDiv">
    <select name="chassisHistory" id="chassisHistory" onchange="selectedChassisNumber(this)">
        <option value="0"> --- Chassis Number ---</option>
        <?php
        if($result->num_rows>0)
        {
            while($row=mysqli_fetch_assoc($result))
            {
                ?>
                <option value="<?=$row['VehicleID']?>"> <?=$row['ChassisNumber']?></option>
                <?php
            }
        }

        ?>
    </select>
</div>

<div id="AllDataFromChassis">
<?php include "getAllRepairsFromVehicle.php";?>
</div>
