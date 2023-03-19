<div class="DivCompleteRequest" id="DivCompleteRequest">
<form action="completeRequestForm.php" method="post" onsubmit="return CompleteValidation()">
        <?php
        include "connection.php";

        $query="SELECT * FROM vehicle JOIN users ON vehicle.MechanicID = users.ID JOIN customers ON FK_CustomerID = customers.CustomerID WHERE STATUS='In progress' AND MechanicID= ".$_SESSION['user']['ID'];
        $result =$connection->query($query);
        ?>
            <select name="DataToMechanicCR" id="DataToMechanicCR">
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
            <textarea cols="500"  rows="50" name="inputComment" id="inputComment" placeholder="Input comment"></textarea>
        <div class="DivCompleteRequestButton">
        <input class="complete-request" type="submit" name="Complete_request" value="Complete request">
        </div>
</form>
</div>