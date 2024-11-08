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
    <link href="juicepalette.css" type="text/css" rel="stylesheet">
    <link href="profile.css" type="text/css" rel="stylesheet">
    <link href="icon.png" rel="icon">
    <title>Profile</title>
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

    <h1>Welcome to your profile!</h1>

    <?php
    echo "<h3>" . $_SESSION['fname'] . " " . $_SESSION['lname'] . "</h3>";
    ?>

    <div class="prof">
    <button id="btn" onclick="window.location.href = 'logout.php';">Logout</button><br>
    <button id="btn" onclick="window.location.href = 'cart.php';">Cart</button><br>
    <button id="btn" onclick="deleteAccount()">Delete Account</button>
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

<script>
    function deleteAccount()
    {
        var con = window.confirm("Are you sure you want to delete your account?");
        if (con)
        window.location.href = 'delete.php';
    }
</script>
</body>
</html>