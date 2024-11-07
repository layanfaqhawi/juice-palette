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

$item_id = $_POST['id'];

$sql = "SELECT quantity FROM cart WHERE user_id = $id AND item_id = $item_id";
$result = $conn->query($sql);

if ($result->num_rows>0)
{
    $row = $result->fetch_assoc();
    $quantity = $row['quantity'];

    if ($quantity > 1)
    {
        $quantity--;
        $sql = "UPDATE cart SET quantity = $quantity WHERE user_id = $id AND item_id = $item_id";
        $conn->query($sql);
    }
    else 
    {
        $sql = "DELETE FROM cart WHERE user_id = $id AND item_id = $item_id";
        $conn->query($sql);
    }
}



$conn->close();

?>