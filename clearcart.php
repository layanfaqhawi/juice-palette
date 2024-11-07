<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juicepalette";


$conn = new mysqli($servername, $username, $password, $dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id']))
$id = $_SESSION['user_id'];

$sql = "DELETE FROM cart WHERE user_id = $id";
if ($conn->query($sql) === TRUE) {
    echo "Cart cleared successfully";
} else {
    echo "Error clearing cart: " . $conn->error;
}

$conn->close();


header("Location: cart.php");
exit;
?>
