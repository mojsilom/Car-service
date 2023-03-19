<?php
include "connection.php";

$arrayCustomerID=array();

$queryAllNames="SELECT * FROM customers WHERE CustomerID IN ( SELECT MIN(CustomerID) FROM customers GROUP BY FirstName )";
$resultCustomer=$connection->query($queryAllNames);

if($resultCustomer->num_rows>0)
{
    while($row=mysqli_fetch_assoc($resultCustomer))
    {
        array_push($arrayCustomerID,$row['CustomerID']);
    }
}

$query="SELECT DISTINCT FirstName FROM customers";
$result =$connection->query($query);
?>

<select name="firstname" id="firstname" class="width-form" onchange="selectedNameChanged(this)">
    <option value="0"> --- Firstname ---</option>
    <?php
    $id=-1;
    if($result->num_rows>0)
    {
        while($row=mysqli_fetch_assoc($result))
        {
            $id++;
            ?>
    <option value="<?=$arrayCustomerID[$id]?>"> <?=$row['FirstName']?></option>
    <?php
        }
    }

    ?>

</select>
