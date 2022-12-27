<?php
include "connection.php";

$query="SELECT customers.CustomerID, FirstName,LastName,Phone,vehicle.Manufacturer,vehicle.Model,vehicle.Year,vehicle.ChassisNumber,vehicle.Description,vehicle.Status FROM `customers` RIGHT JOIN vehicle ON customers.CustomerID=vehicle.FK_CustomerID";
$result=$connection->query($query);

?>
<div class="DivCustomerTable">
<table class="CustomersTable">
<tr>
    <td class="head">FirstName</td>
    <td class="head">LastName</td>
    <td class="head">Phone</td>
    <td class="head">Manufacturer</td>
    <td class="head">Model</td>
    <td class="head">Year</td>
    <td class="head">ChassisNumber</td>
    <td class="head">Description</td>
    <td class="head">Status</td>
</tr>
<?php
if($result->num_rows>0)
{
    while($row=mysqli_fetch_assoc($result))
    {
?>
    <tr>
        <td class="data"><?=$row['FirstName']?></td>
        <td class="data"><?=$row['LastName']?></td>
        <td class="data"><?=$row['Phone']?></td>
        <td class="data"><?=$row['Manufacturer']?></td>
        <td class="data"><?=$row['Model']?></td>
        <td class="data"><?=$row['Year']?></td>
        <td class="data"><?=$row['ChassisNumber']?></td>
        <td class="data"><?=$row['Description']?></td>
        <td class="data"><?=$row['Status']?></td>
    </tr>
    <?php
    }

}
?>
</table>
</div>