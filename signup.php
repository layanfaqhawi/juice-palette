<?php
$fname = $_POST["fname"];
$lname= $_POST["lname"];
$email = $_POST["email"];
$password = $_POST["password"];


$conn = new mysqli("localhost", "root", "", "juicepalette");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


$sql = "SELECT email FROM users WHERE email = '$email'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    echo "This email has been used, try to <a href='login.php'>log in</a>";
} else {
    $sql = "INSERT INTO users (email, password, first_name, last_name) VALUES ('$email', '$password','$fname', '$lname')";
    if ($conn->query($sql) === TRUE) {
       
        header("Location: login.php");
        exit();
    } else {
        echo "Error registering user: " . $conn->error;
    }
}

$conn->close();
?>
