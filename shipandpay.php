<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "juicepalette";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error)
{
    die("Connection failed: " . $conn->connect_error);
}

if (isset($_SESSION['user_id']))
$id = $_SESSION['user_id'];

$country = $_POST['country'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$num = $_POST['phone'];
$add1 = $_POST['address1'];
$add2 = $_POST['address2'];
$city = $_POST['city'];

$cardHolder = $_POST['cardHolder'];
$card = $_POST['cardNumber'];
$cvv = $_POST['cvv'];
$exp = $_POST['expiration'];

$sql = "INSERT INTO addresses (first_name, last_name, phone_number, country, address_1, address_2, city, user_id) VALUES ('$fname', '$lname', '$num', '$country', '$add1', '$add2', '$city', $id)";
$conn->query($sql);

$addID = $conn->insert_id;

$sql = "INSERT INTO payments (card_number, cardholder_name, expiration_date, security_code, user_id) VALUES ('$card', '$cardHolder', '$exp', '$cvv', $id)";
$conn->query($sql);

$payID = $conn->insert_id;

$sql = "INSERT INTO orders (user_id, address_id, payment_id, order_date, delivered) VALUES ($id, $addID, $payID, NOW(), 0)";
$conn->query($sql);

$ordID = $conn->insert_id;

$sql = "SELECT item_id, quantity FROM cart WHERE user_id = $id";
$result = $conn->query($sql);

if ($result->num_rows>0)
{
    while ($items = $result->fetch_assoc())
    {
        $item_id = $items['item_id'];
        $quantity = $items['quantity'];

        $sql = "INSERT INTO order_info (order_id, item_id, quantity) VALUES ($ordID, $item_id, $quantity)";
        $conn->query($sql);
    }
}

$sql = "DELETE FROM cart";
$conn->query($sql);

header("Location: orderconfirm.php");

$conn->close();

?>