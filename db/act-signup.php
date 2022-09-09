<?php
require 'db-conn.php';
/* Sign Up */

if (isset($_POST['signup'])) {
    $username   = $_POST['username'];
    $email    = $_POST['email'];
    $password  = $_POST['password'];
    
$sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Has been save');document.location='/portalberita/signin';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>