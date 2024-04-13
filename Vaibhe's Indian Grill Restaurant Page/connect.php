<?php


// Retrieve form data
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];

// Establish connection to the database
$conn = new mysqli("localhost", "root", "", "registration");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare SQL statement to check if email exists
$sql_check_email = "SELECT email FROM user_details WHERE email = ?";
$stmt_check_email = $conn->prepare($sql_check_email);
$stmt_check_email->bind_param("s", $email);
$stmt_check_email->execute();
$stmt_check_email->store_result();

// Check if the email already exists
if ($stmt_check_email->num_rows > 0) {
    echo '<script>alert("Email address already exists!")</script>';
    // Handle the situation when the email already exists, you may redirect user to another page or show a message
    // For now, let's exit
    include('index.php');
    exit();
}

// Prepare SQL statement with placeholders
$sql = "INSERT INTO user_details (first_name, last_name, contact, email, password) VALUES (?, ?, ?, ?, ?)";

// Prepare and bind parameters
$stmt = $conn->prepare($sql);
$stmt->bind_param("sssss", $firstname, $lastname, $contact, $email, $password);

// Hash the password
// $password = password_hash($password, PASSWORD_DEFAULT);

// Execute the statement
if ($stmt->execute()) {
    // Registration successful
    echo '<script>alert("Registered Successfully")</script>';
    include "home.php";
    exit();
} else {
    // Handle errors
    echo "Error: " . $sql . "<br>" . $conn->error;
}

// Close statements
$stmt_check_email->close();
$stmt->close();

// Close connection
$conn->close();




?>