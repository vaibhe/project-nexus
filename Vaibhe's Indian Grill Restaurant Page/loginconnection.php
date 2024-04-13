<?php
// To check whether user login is valid or not

$conn = new mysqli("localhost", "root", "", "registration");


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_POST['loginemail'];
$password = $_POST['loginpass'];




$sql = "SELECT * FROM user_details WHERE email = '$email'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $stored_password = $row['password'];


    if ($password == $stored_password) {
        echo '<script>alert("Login Sucessful")</script>'; 
        include('home.php');  
    }

     else {
        echo '<script>alert("User not found")</script>'; 
        include('index.php');
    }
}

// Close the database connection
$conn->close();
?>