<?php
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
    echo $user['id'];
    $_SESSION['user_id'] = $user['id'];
    echo $_SESSION['user_id'];
    header("Location: home.php");                  
} else {
    echo "Incorrect email or password";
    echo "<p>Don't have an account? <a href='Sign_Up_page.html'>Sign up</a></p>";
}

$conn->close();
?>