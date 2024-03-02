<?php
// Database connection
$conn = new mysqli("localhost", "root", "", "javierportfoliodb");
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Escape user inputs for security
$username = $conn->real_escape_string($_POST['username']);
$email = $conn->real_escape_string($_POST['email']);
$password = $conn->real_escape_string($_POST['password']);
$bdate = $conn->real_escape_string($_POST['bdate']);
$age = $conn->real_escape_string($_POST['age']);

// Upload photo
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["photo"]["name"]);
move_uploaded_file($_FILES["photo"]["tmp_name"], $target_file);

// Query to insert user
$sql = "INSERT INTO users (username, email, password, photo, bdate, age) VALUES ('$username', '$email', '$password', '$target_file', '$bdate', '$age')";
if ($conn->query($sql) === TRUE) {
    // Registration successful, redirect to login page
    header("Location: login.php");
    exit; // Make sure to exit after redirection
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
?>
