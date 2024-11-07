<?php session_start(); ?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="juicepalette.css" type="text/css" rel="stylesheet">
    <link href="home.css" type="text/css" rel="stylesheet">
    <link href="icon.png" rel="icon">
    <title>Juice Palette</title>
</head>
<body>
    <div class="page-container">
        <div class="headbar" id="top">
            <br>
            <a href="home.php">
                <img id="logo" src="juicepaletteLogo.png" width="25%">
            </a>
            <div class="navigation">
                <p>
                    <a class="nav" href="home.php">Home</a><a class="nav" href="products.php">Products</a><a class="nav" href="login.php">Login/Register</a><a class="nav" href="cart.php">Cart</a><a class="nav" href="profile.php">Profile</a>
                </p>
            </div>
        </div>

        <div id="wbody" class="page-content">
            <div class="flex-container">
                <div class="flex-item one" id="orange">
                    <img src="orange.png" alt="Juice Image">
                </div>
                <div class="flex-item two" id="apple">
                    <img src="greenapple.png" alt="Juice Image">
                </div>
                <div class="flex-item three" id="strawberry">
                    <img src="strawberry.png" alt="Juice Image">
                </div>
            </div>
            <br><br>
            <div class="txt">
                <h1>Expand your palette with our refreshing juices!</h1>
            </div>
            <div class="btn">
            <button onclick="window.location.href = 'products.php';">Shop now!</button>
            </div>
        </div>

        <div class="footer">
            <a href="#top" class="jumptotop">
                <div class="footer1">
                    <h4>Back to top</h4>
                </div>
            </a>
            <div class="footer2"></div>
            <div class="footer3"></div>
        </div>
    </div>
</body>
</html>
