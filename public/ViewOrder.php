<?php

include_once "header.php";
include_once '../Src/Model/DatabaseContext.php';

function getCustomerOrder()
{
    $customerOrder = $_POST['orderIdEnter'];

    return $customerOrder;
}

if(!isset($db)) {
$db = new dbContext();
}

if (isset($_POST['submitOrderId'])) {
    getCustomerOrder();
}


?>




<html>

<style>
    h5{
        float: right;
    }

</style>


<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

    <div>
        Please enter your Order ID: <input type="text" name="orderIdEnter">
        <input name="submitOrderId" id="submitOrderId" type="submit" value="Check Order">
    </div>

</form>


<?php

if ($_POST['submitOrderId']!=""){

$selectedOrder = $db->getViewData();
$className = 1;

if($selectedOrder)
{
    foreach($selectedOrder as $order)
    {
        $listOrder.="<div class=item".$className.">".
            "<h5 id=price>"."£".$order->getItemPrice()."</h5>".
            "<h1 class='font-weight-bold'>".$order->getProduct_Name()." x ".$order->getItemQuantity()."</h1>".
            "</h4>"."</div>";
        $className += 1;
    }
}
}
echo $listOrder;
?>

</html>

