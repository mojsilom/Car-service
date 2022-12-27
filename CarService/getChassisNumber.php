<?php
include "connection.php";

$query="SELECT * FROM vehicle GROUP BY ChassisNumber ORDER BY VehicleID ASC";
$result =$connection->query($query);
?>

<select name="chassis" id="chassis" class="width-form">
    <option value="0"> --- Chassis Number ---</option>
    <?php
    $id=0;
    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id++;
            ?>
            <option value="<?=$row['VehicleID']?>"> <?=$row['ChassisNumber']?></option>
            <?php
        }
    }

    ?>

</select>
