<?php
$servername = "localhost";
$username = "your_username";
$password = "your_password";
$dbname = "advertising_info";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$name = $_POST["name"];
$email = $_POST["email"];
$company = $_POST["company"];
$message = $_POST["message"];

$sql = "INSERT INTO users (name, email, company, message) VALUES ('$name', '$email', '$company', '$message')";

if ($conn->query($sql) === TRUE) {
    echo "success";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
