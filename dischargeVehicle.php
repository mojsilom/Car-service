<div class="DivDischargeRequest" id="DivDischargeRequest">
    <form action="dischargeRequestForm.php" method="post" onsubmit="return DischargeValidation()">
        <?php
        include "connection.php";

        $query="SELECT * FROM `vehicle` JOIN customers ON FK_CustomerID=customers.CustomerID WHERE Status='Completed'";
        $result =$connection->query($query);
        ?>
        <select name="dischargedRequestSelect" id="dischargedRequestSelect">
            <option value="0"> --- Customer Data  ---</option>
            <?php
            if($result->num_rows>0)
            {
                while($row=mysqli_fetch_assoc($result))
                {
                    ?>
                    <option value="<?=$row['VehicleID']?>"> <?= $row['FirstName'] ?> - <?= $row['LastName'] ?> - <?= $row['Phone'] ?> - <?= $row['Manufacturer']?></option>
                    <?php
                }
            }

            ?>
        </select>
        <textarea cols="500"  rows="50" name="clerkComment" id="clerkComment" placeholder="Input comment"></textarea>
        <input type="text" name="price" id="price" placeholder="Price">
        <div class="DivDischargeRequestButton">
            <input class="discharge-request" type="submit" name="Discharge_request" value="Discharge request">
        </div>
    </form>
</div>