<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="juicepalette.css" type="text/css" rel="stylesheet">
    <link href="orderconfirm.css" type="text/css" rel="stylesheet">
    <link href="icon.png" rel="icon">
    <title>Order Confirmation</title>
    
</head>
<body>
    <div class="page-container">
    <div class="headbar"id="top">
        <br>
        <a href="home.php">
        <div ><img id="logo" src="juicepaletteLogo.png" width="25%"></div>
        </a>
        <div class="navigation">
                <p>
                    <a class="nav" href="home.php">Home</a><a class="nav" href="products.php">Products</a><a class="nav" href="login.php">Login/Register</a><a class="nav" href="cart.php">Cart</a><a class="nav" href="profile.php">Profile</a>
                </p>
            </div>
    </div>
    <div class="page-content">
    <div class="container">
        <h1>Order Confirmation</h1> <br>
        <img src="check.png" alt="check sign"> <br><br>
        <div class="confirmation">Order Confirmed!</div>
        <p><strong>Estimated Delivery Time:</strong> <?php echo date('Y-m-d', strtotime("+5 days")); ?></p>
        <p>Your order has been successfully placed. We'll process it shortly and notify you once it's on its way. Should you have any questions or concerns, feel free to reach out to our customer support team.</p>
        <p>Thank you for choosing Juice Palette!</p>
        <form action="home.php"><button class="btn">Continue Shopping</button></form>  
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
</body>
</html>
