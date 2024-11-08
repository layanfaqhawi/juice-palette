<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link href="juicepalette.css" type="text/css" rel="stylesheet">
        <link href="cart.css" type="text/css" rel="stylesheet">
        <link href="icon.png" rel="icon">
        <title>Cart</title>
    </head>
    <body>
    <div class="page-container">
        <div class="headbar"id="top">
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
           <div class="cart">
           <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $dbname = "juicepalette";

                if (isset($_SESSION['user_id']))
                $id = $_SESSION['user_id'];

                $conn = new mysqli($servername, $username, $password, $dbname);
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }
                $totalPrice = 0;
                $totalQuantity = 0;
    
                // Fetch cart items

                if (isset($_SESSION['user_id']))
                {
                    $sqlCart = "SELECT item_id, quantity FROM cart WHERE user_id = $id";
                    $resultCart = $conn->query($sqlCart);
                }


                if (isset($_SESSION['user_id']) && $resultCart->num_rows > 0) {
                    echo '<h3>Shopping Cart</h3><hr>';

                    while ($cart = $resultCart->fetch_assoc()) {
                        // Fetch item details for each cart item
                        $itemID = $cart['item_id'];
                        $sqlItem = "SELECT name, price FROM items WHERE id = ".$cart['item_id'];
                        $resultItem = $conn->query($sqlItem);
                        if ($resultItem->num_rows > 0) {
                            itemcol($itemID);
                            dispImage($itemID);
                            echo "<div class='product-details'>";
                            $item = $resultItem->fetch_assoc();

                            echo "<h2 class='product-title'>" . $item['name'] . "</h2";
                            echo "<br><p class='product-price'>" . $item['price'] . " JD</p>";
                            echo "<p class='product-quantity'>Quantity: " . $cart['quantity'] . "</p>";
                            echo "<button class='removeitem' onclick=\"removeitem(" .$itemID. ")\">Remove</button>";
                            $totalPrice +=  $item['price']*$cart['quantity'];
                            $totalQuantity += $cart['quantity'];
                           
                            echo '</div>';
                            echo '</div>';
                        }
                    }
                        echo "<br>";
                        echo "<button class='clr' onclick=\"window.location.href='clearcart.php'\">Clear cart</button>";
                        echo "<br>";
                        echo "<div class='btn'>";
                        echo "<h3>Subtotal (" . $totalQuantity . " items): " . $totalPrice . " JD</h3>";
                        echo "<button onclick=\"window.location.href='checkout.php'\">Proceed to checkout</button>";
                        echo "</div>";
                } 
                else {
                    echo '<h3>Your Shopping Cart is empty</h3>';
                }
                $_SESSION['quantity']=$totalQuantity;
                $_SESSION['initial_price']=$totalPrice;
                function itemcol($id)
                {
                   switch ($id)
                   {
                        case 1:
                            echo "<div class='lemon'>";
                            break;
                        case 2:
                            echo "<div class='greenapple'>";
                            break;
                        case 3:
                            echo "<div class='orange'>";
                            break;
                        case 4:
                            echo "<div class='strawberry'>";
                            break;
                        case 5:
                            echo "<div class='mango'>";
                            break;
                        case 6:
                            echo "<div class='blueraspberry'>";
                            break;
                        case 7:
                            echo "<div class='watermelon'>";
                            break;
                        case 8:
                            echo "<div class='grape'>";
                            break;
                   }
                }

                function dispImage($id)
                {
                   switch ($id)
                   {
                        case 1:
                            echo "<img src='lemon.png' alt='Lemon Juice' class='product-image'>";
                            break;
                        case 2:
                            echo "<img src='greenapple.png' alt='Green Apple Juice' class='product-image'>";
                            break;
                        case 3:
                            echo "<img src='orange.png' alt='Orange Juice' class='product-image'>";
                            break;
                        case 4:
                            echo "<img src='strawberry.png' alt='Strawberry Juice' class='product-image'>";
                            break;
                        case 5:
                            echo "<img src='mango.png' alt='Mango Juice' class='product-image'>";
                            break;
                        case 6:
                            echo "<img src='blueraspberry.png' alt='Blueraspberry Juice' class='product-image'>";
                            break;
                        case 7:
                            echo "<img src='watermelon.png' alt='Watermelon Juice' class='product-image'>";
                            break;
                        case 8:
                            echo "<img src='grape.png' alt='Grape Juice' class='product-image'>";
                            break;
                   }
                }
                $conn->close();
                ?>
            </div>
        </div>



        <div class="footer">
            <br><br><br><br>
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
    <script src="showcart.js"></script>
    <script>
        function removeitem(n)
        {
            var iteminfo = {id : n};

            $.ajax(
                {
                    type: "POST",
                    url: "removeitem.php",
                    data: iteminfo,
                    success: function(response) {window.location.href = 'cart.php';},
                    error: function() {alert("Could not remove item from cart.");}
                }
            );
        }
    </script>
    </body>
</html>