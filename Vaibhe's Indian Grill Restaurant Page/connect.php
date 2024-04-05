<?php
//Code for connecting to database registeration (user_datails) table and inserting records 
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['number'];
$email = $_POST['email'];
$password = $_POST['password'];


$conn = new mysqli("localhost", "root", "", "registration");



if ($conn) {
    $sql = "INSERT INTO user_details (first_name, last_name,contact,email,password) VALUES ('$firstname','$lastname','$contact','$email','$password')";
    mysqli_query($conn, $sql);
    echo '<script>alert("Registered Sucessful")</script>'; 
    include "home.php";

    exit();
} else {
    echo "ERROR";
}





?>