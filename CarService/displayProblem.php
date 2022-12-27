<div class="DivDisplayProblem" id="DivDisplayProblem">
    <form action="MechanicTakeRequest.php" method="post">
    <?php
    include "connection.php";
    if(isset($_REQUEST['DataToMechanic'])) {
        $numberOfRow = $_REQUEST['DataToMechanic'];
        if ($numberOfRow > 0) {
            $query = "SELECT * FROM vehicle WHERE vehicle.VehicleID = ".$numberOfRow;
            $result = $connection->query($query);

            if ($result->num_rows > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                    <textarea cols="100"  rows="10" name="displayProblem" id="displayProblem" readonly><?= $row['Description']?></textarea>
                    <input type="text" style="display: none" name="CustomerVehicleID" id="CustomerVehicleID" value="<?= $numberOfRow ?>">
                    <?php
                }
            }
            ?>
                <br>
            <div class="DivTake-request-button">
    <input class="take-request-button" type="submit" name="Take_request" value="Take request">
</div>
<?php
    }
    }
    ?>
</div>
</form>