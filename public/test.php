<?php
include_once 'header.php';
include_once '../src/model/DatabaseContext.php';
if(!isset($db))
{
    $db = new dbContext();
}

?>


<html>
<body>

<div>
    <p>test</p>
<?php
$optionString = "";
$foods = $db->getItemTypes("Food");
$className = 1;

if($foods)
{
    foreach($foods as $food)
    {
        $listFood.="<div class=item".$className.">"."<h5 id=price>"."£".$food->getItemPrice()."</h5>"."<h1 class='font-weight-bold'>".$food->getProductName()."</h1>".
            "<h4 id='description'>"."<i>".$food->getProductDesc()."</i>"."</h4>"."</div>";
        $className += 1;
    }
}
echo $listFood;
?>
</div>
</body>
</html>