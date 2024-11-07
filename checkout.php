<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
    <title>Checkout</title>
    <link href="juicepalette.css" type="text/css" rel="stylesheet">
    <link href="checkout.css" type="text/css" rel="stylesheet">
    <!-- <link href="Forms.css" type="text/css" rel="stylesheet"> -->
    <link href="icon.png" rel="icon">
</head>
<body>
    <div class="page-container">
        <div class="headbar" id="top">
            <a href="home.php">
                <img id="logo" class="check" src="juicepaletteLogo.png" width="25%">
            </a>
            <div class="navigation">
                <p>
                    <a class="nav" href="home.php">Home</a><a class="nav" href="products.php">Products</a><a class="nav" href="login.php">Login/Register</a><a class="nav" href="cart.php">Cart</a><a class="nav" href="profile.php">Profile</a>
                </p>
            </div>
        </div>
        <div class="page-content">
            <div class="fullform">
                <form action="shipandpay.php" method="post">
                    <h2>1 Shipping address</h2>
                    <fieldset class="address" style="background-color: #fff0d9;">
                        <label for="shippingAddress">Country</label> <br>
                        <select name="country" id="country">s
                            <option>Bahrain</option>
                            <option selected>Jordan</option>
                            <option>Lebanon</option>
                            <option>Palestine</option>
                            <option>United Arab Emirates</option>
                        </select><br>
                        <label class="fname" for="fname">First Name</label> <label class="lname" for="lname">Last Name</label><br>   
                        <input type="text" name="fname" id="fname" required><input type="text" name="lname" id="lname" required>
                        <br>
                        <label for="phone">Phone number</label> <br>
                        <input type="tel" id="phone" name="phone"><br>
                        
                        <label class="add1" for="address">Address 1</label> <label for="address">Address 2</label><br>
                        <input type="text" name="address1" id="address1"><input type="text" name="address2" id="address2"> 
                        <br>
                        <label for="address">City</label> <br>
                        <input type="text" name="city" id="city">
                        <br>
                    </fieldset>
                   
                    <h2>2 Payment method</h2>
                    <fieldset class="address" style="background-color: #fff0d9">
                        <label for="cardHolder">Card Holder Name</label><br>
                        <input type="text" size="30" id="cardHolder" name="cardHolder" class="required" required> <br>
                        <label for="cardNumber">Credit card number</label><br>
                        <input type="text" maxlength="16" id="cardNumber" name="cardNumber" class="required" required onblur="validateCardNo()"> <br>
                        <label for="cvv">CVV</label><br>
                        <input type="text" placeholder="The three digits on the back of the card" maxlength="3" id="cvv" name="cvv" class="required" required onblur="validateCVV()"> <br>
                        <label for="expiration">Expires</label> <br>
                        <input type="date" placeholder="Expires" id="expiration" name="expiration" class="required" required>
                    </fieldset>
                    <div class="btn">
                        <button type="submit" class="submitButtons">Place your order</button>
                    </div>
                </form>
            </div>
            <br><br>
            <div class="summary" id="sum">
              
                <br>
                <h3 style="margin-left: 15px;">Order Summary</h3> <br>
                <p style="margin-left: 15px;">Items: <?php echo $_SESSION['quantity']?> items</p>
                <p style="margin-left: 15px;">Shipping fee: 7 JOD</p>
                <p style="margin-left: 15px;">Total before tax:  <?php echo  $_SESSION['initial_price']." JOD"?></p>
                <p style="margin-left: 15px;">Tax: <?php echo $_SESSION['initial_price']*0.13." JOD"?></p>
                <h3 style="margin-left: 15px;">Order Total:  <?php echo $_SESSION['initial_price']*0.13 + 7+ $_SESSION['initial_price']." JD" ?></h3>
        
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

    <script> function validateCardNo(){
	var cardno = document.getElementById('cardNumber');
	if(cardno.value.search(/^\d{16}$/) == -1)
	{
       cardno.value="";
		cardno.style.borderColor = "red";
		cardno.placeholder="Should be 16 digits";
	}}
    function validateCVV(){
	var cvv = document.getElementById('cvv');
	if(cvv.value.search(/^\d{3}$/) == -1)
	{   cvv.value="";
		cvv.style.borderColor = "red";
		cvv.placeholder="Should be 3 digits";
	}
}</script>
   
</body>
</html>
