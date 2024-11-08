<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
    <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="juicepalette.css" type="text/css" rel="stylesheet">
        <link href="products.css" type="text/css" rel="stylesheet">
        <link href="icon.png" rel="icon">
        <title>Products</title>
    </head>
    <body>
        <div class="page-container">
        <div id="top" class="headbar">
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

        <div class="page-content">
            <div class="big-flex">
                <div class="flex-container">
                    <div class="flex-item one" id="lemon">
                    <a href="lemon.html">
                    <img src="lemon.png" width="40%">
                    </a>
                    <div class="item">Lemon</div>
                    <div class="price">3 JD</div>
                    <button class="juicebtn" onclick="addCart(1)">Add to cart</button>
                    </div>
                    <div class="flex-item two" id="greenapple">
                    <a href="greenapple.html">
                    <img src="greenapple.png" width="40%">
                    </a>
                    <div class="item">Green Apple</div>
                    <div class="price">3 JD</div>
                    <button class="juicebtn" onclick="addCart(2)">Add to cart</button>
                    </div>
                    <div class="flex-item three" id="orange">
                    <a href="orange.html">
                    <img src="orange.png" width="40%">
                    </a>
                    <div class="item">Orange</div>
                    <div class="price">3 JD</div>
                    <button class="juicebtn" onclick="addCart(3)">Add to cart</button>
                    </div>
                    <div class="flex-item four" id="strawberry">
                    <a href="strawberry.html">
                    <img src="strawberry.png" width="40%">
                    </a>
                    <div class="item">Strawberry</div>
                    <div class="price">4 JD</div>
                    <button class="juicebtn" onclick="addCart(4)">Add to cart</button>
                    </div>
                    <div class="flex-item five" id="mango">
                    <a href="mango.html">
                    <img src="mango.png" width="40%">
                    </a>
                    <div class="item">Mango</div>
                    <div class="price">4 JD</div>
                    <button class="juicebtn" onclick="addCart(5)">Add to cart</button>
                    </div>
                    <div class="flex-item six" id="blueraspberry">
                    <a href="blueraspberry.html">
                    <img src="blueraspberry.png" width="40%">
                    </a>
                    <div class="item">Blue Raspberry</div>
                    <div class="price">4 JD</div>
                    <button class="juicebtn" onclick="addCart(6)">Add to cart</button>
                    </div>
                    <div class="flex-item seven" id="watermelon">
                    <a href="watermelon.html">
                    <img src="watermelon.png" width="40%">
                    </a>
                    <div class="item">Watermelon</div>
                    <div class="price">5 JD</div>
                    <button class="juicebtn" onclick="addCart(7)">Add to cart</button>
                    </div>
                    <div class="flex-item eight" id="grape">
                    <a href="grape.html">
                    <img src="grape.png" width="40%">
                    </a>
                    <div class="item">Grape</div>
                    <div class="price">5 JD</div>
                    <button class="juicebtn" onclick="addCart(8)">Add to cart</button>  
                    </div>
            </div>
        </div>
    </div>

    <div class="footer">
        <a href="#top" class="jumptotop">
        <div class="footer1">
            <h4>Back to top</h4>
        </div>
        </a>

        <div class="footer2">

        </div>
        <div class="footer3">

        </div>
    </div>
</div>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="addtocart.js"></script>
    </body>
</html>