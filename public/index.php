<?php
include_once 'header.php';
include_once '../src/model/DatabaseContext.php';
if(!isset($db))
{
    $db = new dbContext();
}

?>


<!DOCTYPE html>

<style>
    #Eat h5{
        float: right;
    }
    #Drinks h5{
        float: right;
    }
</style>


<!-- Add a background color and large text to the whole page -->
<div class="w3-sand w3-grayscale w3-large">



    <!-- Menu Container -->
    <div class="w3-container" id="menu">
        <div class="w3-content" style="max-width:700px">

            <h5 class="w3-center w3-padding-48"><span class="w3-tag w3-wide">THE MENU</span></h5>

            <div class="w3-row w3-center w3-card w3-padding">
                <a href="javascript:void(0)" onclick="openMenu(event, 'Eat');" id="myLink">
                    <div class="w3-col s6 tablink">Eat</div>
                </a>
                <a href="javascript:void(0)" onclick="openMenu(event, 'Drinks');">
                    <div class="w3-col s6 tablink">Drink</div>
                </a>
            </div>



            <div id="Eat" class="w3-container menu w3-padding-48 w3-card">
                <?php
                $optionString = "";
                $foods = $db->getItemTypes("Food");
                $className = 1;

                if($foods)
                {
                    foreach($foods as $food)
                    {
                        $listFood.="<div class=item".$className.">".
                            "<h5 id=price>"."£".$food->getItemPrice()."</h5>".
                            "<h1 class='font-weight-bold'>".$food->getProductName()."</h1>".
                            "<h4 id='description'>"."<i>".$food->getProductDesc()."</i>"."</h4>"."</div>";
                        $className += 1;
                    }
                }
                echo $listFood;
                ?>

            </div>

            <div id="Drinks" class="w3-container menu w3-padding-48 w3-card">
                <?php
                $optionString = "";
                $drinks = $db->getItemTypes("Drink");
                $classDrink = 1;

                if($drinks)
                {
                    foreach($drinks as $drink)
                    {
                        $listDrink.="<div class=item".$className.">"."<h5 id=price>"."£".$drink->getItemPrice()."</h5>"."<h1 class='font-weight-bold'>".$drink->getProductName()."</h1>".
                            "<h4 id='description'>"."<i>".$drink->getProductDesc()."</i>"."</h4>"."</div>";
                        $classDrink += 1;
                    }
                }
                echo $listDrink;
                ?>
            </div>
        </div>
    </div>

    <!-- About Container -->
    <div class="w3-container" id="about">
        <div class="w3-content" style="max-width:700px">
            <h5 class="w3-center w3-padding-64"><span class="w3-tag w3-wide">ABOUT THE PLYMOUTH ARMS</span></h5>
            <p>The Plymouth arms is a modern take on an english pub, we aim to serve the same qualities of a traditional pub on a larger scale, brought up to the 21st century. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc dapibus ligula sit amet justo accumsan iaculis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <div class="w3-panel w3-leftbar w3-light-grey">
                <p><i>"Great service, nice atmosphere"</i></p>
                <p>Visitor : Jo Bloggs</p>
            </div>
        </div>
    </div>
    <!-- End page content -->
</div>

<!-- Footer -->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
    <p>Powered by <a href="https://www.w3schools.com/w3css/default.asp" title="W3.CSS" target="_blank" class="w3-hover-text-green">w3.css</a></p>
</footer>

<script>
    // Tabbed Menu
    function openMenu(evt, menuName) {
        var i, x, tablinks;
        x = document.getElementsByClassName("menu");
        for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablink");
        for (i = 0; i < x.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" w3-dark-grey", "");
        }
        document.getElementById(menuName).style.display = "block";
        evt.currentTarget.firstElementChild.className += " w3-dark-grey";
    }
    document.getElementById("myLink").click();
</script>

</body>
</html>