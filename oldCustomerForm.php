<div class="form-content">
    <form action="validateOldCustomer.php" method="post" onsubmit="return validationForm()">
        <table class="tableForm">
            <br>
            <tr>
                <td class="right-label">
                    <label for="firstname">Firstname:</label>
                </td>
                <td colspan="2" class="input-width">
                    <?php include "getName.php"; ?>
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="lastname">Lastname:</label>
                </td>
                <td colspan="2" class="input-width">
                    <select class="width-form" name="lastname" id="lastname">
                        <?php
                            include "getLastName.php";
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="phone">Phone number:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="phone" id="phone">
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="address">Address:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="address" id="address">
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="email">Email:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="email" id="email" >
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="notify">Notify:</label>
                </td>
                <td colspan="2">
                    <div class="radioClass">
                        <label for="notifyYes" class="right-label">
                            <input type="radio" class="width-form" value="1" name="notify" id="notifyYes">Yes</label>
                        <label for="notifyNo" class="right-label">
                            <input type="radio" class="width-form" value="0" name="notify" id="notifyNo">
                            No</label>
                    </div>
                </td>
            </tr>
            <div class="vehicleForm">
                <tr>
                    <td class="right-label">
                        <label for="manufacturer">Manufacturer:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="manufacturer" id="manufacturer">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="model">Model:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="model" id="model">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="year">Year of production:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="year" id="year">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="fuel">Type of fuel:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" id="fuel" name="fuel">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="engine">Engine power(kW):</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" id="engine" name="engine">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="mileage">Mileage:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" id="mileage" name="mileage">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="chassis">Chassis number:</label>
                    </td>
                    <td colspan="2" class="input-width">
                       <?php include "getChassisNumber.php"; ?>
                    </td>
                </tr>
                <tr>
                    <td class="right-label-note">
                        <label for="note">Description:</label>
                    </td>
                    <td class="input-width" colspan="2">
                        <textarea cols="50"  rows="5" class="width-form" name="note" id="note"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="submit-button" type="submit" value="Submit">
                    </td>
                    <td>
                        <input class="reset-button" onclick="resetForm()" type="button" value="Reset">
                    </td>
                </tr>
            </div>
        </table>
    </form>
</div>