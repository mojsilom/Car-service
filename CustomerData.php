<div class="DivCustomerData">
    <form action="deleteCustomer.php" method="post" onsubmit="return UpdateValidationForm()">
        <table id="tableCustomerData" name="tableCustomerData">
            <br>
<?php
include "connection.php";
if(isset($_REQUEST['FirstnameLastnameChassis']))
{
    $numberOfRow=$_REQUEST['FirstnameLastnameChassis'];
    if($numberOfRow>0)
    {
        $query="SELECT * FROM `vehicle` RIGHT JOIN customers ON vehicle.FK_CustomerID=customers.CustomerID WHERE vehicle.VehicleID = ".$numberOfRow;
        $result = $connection->query($query);

        if($result->num_rows>0)
        {
            while($row = mysqli_fetch_assoc($result))
            {
                $notifyValue=$row['Notify'];
                ?>
                <tr style="display: none">
                    <td class="right-label">
                        <label for="VehicleID">VehicleID:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="CustomerVehicleID" id="CustomerVehicleID" value="<?=$numberOfRow?>">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="CustomerFirstname">Firstname:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="CustomerFirstname" id="CustomerFirstname" value="<?=$row['FirstName']?>">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="CustomerLastname">Lastname:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="CustomerLastname" id="CustomerLastname" value="<?=$row['LastName']?>">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="CustomerPhone">Phone number:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="CustomerPhone" id="CustomerPhone" value="<?=$row['Phone']?>">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="CustomerAddress">Address:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="CustomerAddress" id="CustomerAddress" value="<?=$row['Address']?>">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="CustomerEmail">Email:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="CustomerEmail" id="CustomerEmail" value="<?=$row['Email']?>">
                    </td>
                </tr>

                <tr>
                    <td class="right-label">
                        <label for="Customernotify">Notify:</label>
                    </td>
                    <td colspan="2">
                        <div class="radioClass">
                            <label for="CustomerNotifyYes" class="right-label">
                                <input type="radio"  class="width-form" value="1" name="CustomerNotify" id="CustomerNotifyYes"
                                       <?php if($notifyValue==1)
            {
                                           ?> checked
                                           <?php
            }         ?>>Yes</label>
                            <label for="CustomerNotifyNo" class="right-label">
                                <input type="radio" class="width-form" value="0" name="CustomerNotify" id="CustomerNotifyNo"
                                    <?php if($notifyValue==0)
            {
                                           ?> checked
                                           <?php
                            }  ?>>No</label>
                        </div>
                    </td>
                </tr>
                <div class="vehicleForm">
                    <tr>
                        <td class="right-label">
                            <label for="CustomerManufacturer">Manufacturer:</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" name="CustomerManufacturer" id="CustomerManufacturer" value="<?=$row['Manufacturer']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label">
                            <label for="CustomerModel">Model:</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" name="CustomerModel" id="CustomerModel" value="<?=$row['Model']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label">
                            <label for="CustomerYear">Year of production:</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" name="CustomerYear" id="CustomerYear" value="<?=$row['Year']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label">
                            <label for="CustomerFuel">Type of fuel:</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" id="CustomerFuel" name="CustomerFuel" value="<?=$row['Fuel']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label">
                            <label for="CustomerEngine">Engine power(kW):</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" id="CustomerEngine" name="CustomerEngine" value="<?=$row['EnginePower']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label">
                            <label for="CustomerMileage">Mileage:</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" id="CustomerMileage" name="CustomerMileage" value="<?=$row['Mileage']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label">
                            <label for="CustomerChassis">Chassis number:</label>
                        </td>
                        <td colspan="2" class="input-width">
                            <input type="text" class="width-form" name="CustomerChassis" id="CustomerChassis" value="<?=$row['ChassisNumber']?>">
                        </td>
                    </tr>
                    <tr>
                        <td class="right-label-note">
                            <label for="CustomerNote">Description:</label>
                        </td>
                        <td class="input-width" colspan="2">
                            <textarea cols="50"  rows="5" class="width-form" name="CustomerNote" id="CustomerNote"><?=$row['Description']?></textarea>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td>
                            <input class="update-button" type="submit" name="Update" value="Update" formaction="updateCustomer.php">
                        </td>
                        <td>
                            <input class="delete-button" type="submit" name="Delete" value="Delete">
                        </td>
                    </tr>
                </div>
                <?php
            }
        }

    }
}
?>
        </table>
    </form>
</div>
