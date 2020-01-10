<?php
?>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
    }

    .bgimg {
    background-position: center;
        background-size: cover;
        background-image: url("background.jpg");
        min-height: 75%;
    }

    .menu {
    display: none;
}
</style>
<body>

<!-- Links (sit on top) -->
<div class="w3-top" id="Top">
    <div class="w3-row w3-padding w3-black">
        <div class="w3-col s3">
            <a href="index.php" class="w3-button w3-block w3-black">HOME</a>
        </div>
        <div class="w3-col s3">
            <a href="index.php#menu" class="w3-button w3-block w3-black">MENU</a>
        </div>
        <div class="w3-col s3">
            <a href="placeOrder.php" class="w3-button w3-block w3-black">PLACE ORDER</a>
        </div>
        <div class="w3-col s3">
            <a href="ViewOrder.php" class ="w3-button w3-block w3-black">VIEW ORDER</a>
        </div>
    </div>
</div>

<!-- Header with image -->
<header class="bgimg w3-display-container w3-grayscale-min" id="home">
    <div class="w3-display-bottomleft w3-center w3-padding-large w3-hide-small">
        <span class="w3-tag">Open from 11am to 12pm</span>
    </div>
    <div class="w3-display-middle w3-center">
        <span class="w3-text-white" style="font-size:90px">The<br>Plymouth Arms</span>
    </div>
    <div class="w3-display-bottomright w3-center w3-padding-large">
        <span class="w3-text-white">45 Union Street, Plymouth</span>
    </div>
</header>
</body>
</html>