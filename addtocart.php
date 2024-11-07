<?php
session_start();

if (!isset($_SESSION['user_id'])) {
    header("Location: login.html");
    exit();
}

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juicepalette";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
} 

$item_id = $_POST['id'];
$id = $_SESSION['user_id'];


$sql = "SELECT item_id FROM cart WHERE user_id = '$id' AND item_id = '$item_id'";
$result = $conn->query($sql);

if ($result->num_rows > 0)
{
    $sql = "SELECT quantity FROM cart WHERE item_id = '$item_id'";
    $result = $conn->query($sql);

    $row = $result->fetch_assoc();
    $quantity = $row['quantity'] + 1;

    $sql = "UPDATE cart SET quantity = '$quantity' WHERE user_id = '$id' AND item_id = '$item_id'";
}
else $sql = "INSERT INTO cart (user_id, item_id, quantity) VALUES ($id, '$item_id', '1')";


$result = $conn->query($sql);


$conn->close();
?>