<div class="form-content">
    <form action="validateNewCustomer.php" method="post" onsubmit="return NewValidationForm()">
        <table class="tableForm">
            <br>
            <tr>
                <td class="right-label">
                    <label for="Firstname">Firstname:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="Firstname" id="Firstname">
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="Lastname">Lastname:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="Lastname" id="Lastname">
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="Phone">Phone number:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="Phone" id="Phone">
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="Address">Address:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="Address" id="Address">
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="Email">Email:</label>
                </td>
                <td colspan="2" class="input-width">
                    <input type="text" class="width-form" name="Email" id="Email" >
                </td>
            </tr>
            <tr>
                <td class="right-label">
                    <label for="notify">Notify:</label>
                </td>
                <td colspan="2">
                    <div class="radioClass">
                        <label for="NotifyYes" class="right-label">
                            <input type="radio" class="width-form" value="1" name="Notify" id="NotifyYes">Yes</label>
                        <label for="NotifyNo" class="right-label">
                            <input type="radio" class="width-form" value="0" name="Notify" id="NotifyNo">
                            No</label>
                    </div>
                </td>
            </tr>
            <div class="vehicleForm">
                <tr>
                    <td class="right-label">
                        <label for="Manufacturer">Manufacturer:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="Manufacturer" id="Manufacturer">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="Model">Model:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="Model" id="Model">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="Year">Year of production:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="Year" id="Year">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="Fuel">Type of fuel:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" id="Fuel" name="Fuel">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="Engine">Engine power(kW):</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" id="Engine" name="Engine">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="Mileage">Mileage:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" id="Mileage" name="Mileage">
                    </td>
                </tr>
                <tr>
                    <td class="right-label">
                        <label for="Chassis">Chassis number:</label>
                    </td>
                    <td colspan="2" class="input-width">
                        <input type="text" class="width-form" name="Chassis" id="Chassis">
                    </td>
                </tr>
                <tr>
                    <td class="right-label-note">
                        <label for="Note">Description:</label>
                    </td>
                    <td class="input-width" colspan="2">
                        <textarea cols="50"  rows="5" class="width-form" name="Note" id="Note"></textarea>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td>
                        <input class="submit-button" type="submit" value="Submit">
                    </td>
                    <td>
                        <input class="reset-button" onclick="NewResetForm()" type="button" value="Reset">
                    </td>
                </tr>
            </div>
        </table>
    </form>
</div>