<?php
session_start();
$conn = new mysqli("localhost", "root", "", "juicepalette");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST["email"];
$password = $_POST["password"];

$sql = "SELECT id, email, first_name, last_name FROM users WHERE email = '$email' AND password = '$password'";

$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['fname'] = $user['first_name'];
    $_SESSION['lname'] = $user['last_name'];
    header("Location: home.php");                  
} else {
    echo "Incorrect email or password";
    echo "<p>Don't have an account? <a href='signup.html'>Sign up</a></p>";
}



$conn->close();
?>
