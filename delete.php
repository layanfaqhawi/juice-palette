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

$sql = "DELETE FROM users WHERE id = $id";
$result = $conn->query($sql);

$sql = "DELETE FROM cart WHERE user_id = $id";
$result = $conn->query($sql);

$sql = "DELETE FROM orders WHERE user_id = $id";
$result = $conn->query($sql);

$sql = "DELETE FROM addresses WHERE user_id = $id";
$result = $conn->query($sql);

$sql = "DELETE FROM payments WHERE user_id = $id";
$result = $conn->query($sql);


header("Location: logout.php");
exit();

$conn->close();
?>