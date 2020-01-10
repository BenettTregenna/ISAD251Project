<?php
include_once 'header.php';
include_once '../Src/Model/DatabaseContext.php';

    // Database connection code
    if(!isset($db)) {
        $db = new dbContext();
    }

    if (isset($_POST['submitButton'])) {

        $orderId = $db->getNextOrderId();
        $customerId = $db->getNextCustomerId();
        $date = "".date("h:i")."";

        $submitOrderDetails = new orderDetails($orderId, $customerId, $_POST['tableNum'],$date);
        $submitCustomer = new customer($customerId,$_POST['name'], $_POST['email']);

        $success = $db->enterCustomerRequest($submitCustomer);
        $success = $db->enterOrderRequest($submitOrderDetails);

        $submitFoodItem1 = new itemDetails($orderId."1", $orderId,$_POST['foodTable'], $_POST['foodQuantity']);
        $db->enterItemRequest($submitFoodItem1);
        $submitDrinkItem1 = new itemDetails($orderId."2",$orderId,$_POST['drinkTable'], $_POST['drinkQuantity']);
        $db->enterItemRequest($submitDrinkItem1);

        $message = "Thank you for submitting your order, your ID is: ". $submitOrderDetails->getOrderId();
        echo "<script type='text/javascript'>alert('$message');</script>";
    }



?>
<html>

<style>
    .box{
    }
    #newYear{
        height: 100px;
        float:right;
    }
</style>
<body>
<div class="w3-container" id="menu">

    <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">ORDER FOOD</span></h5>
    <p>Join us this new years and enjoy our range of snacks and drinks!, Make sure you pre order now.</p>


    <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">

        <div class="inputs"><img id="newYear" src="newyear.jpg">
        <label for="name">Name:</label>
        <input class="box" type="text" name="name">
        <br><br>

        <label for="email">Email:</label>
        <input class="box" type="text" name="email">
        <br><br>
        <label for="tableNum">Table Number:</label>
        <input class="box" type="text" name="tableNum">
        </div>
        <br>

    <label for="food">Food</label>
    <select id="foodTable" class="form-control" name="foodTable">
        <option>--Select Food--</option>
        <?php
        $optionString = "";
        $foods = $db->getItemTypes("Food");

        if ($foods) {
            foreach ($foods as $food)
            {
                $listFood.= "<option value=".$food->getProductId().">".$food->getProductName()." - £". $food->getItemPrice()."</option>";
            }
        }
        echo $listFood;


        ?>
    </select>
    <input type="text" name="foodQuantity">
     <label for="drink">Drinks</label>

    <select id="drinkTable" class="form-control" name="drinkTable">
        <option>--Select Drink--</option>
        <?php
        $optionString = "";
        $drinks = $db->getItemTypes("Drink");

        if ($drinks) {
            foreach ($drinks as $drink)
            {
                $listDrink.= "<option value=".$drink->getProductId().">".$drink->getProductName()." - £". $drink->getItemPrice()."</option>";
            }
        }
        echo $listDrink;


        ?>
    </select>
        <input type="text" name="drinkQuantity">

        <input type="submit" name="submitButton" value="Place Order">


</form>
</div>
</body>
</html>