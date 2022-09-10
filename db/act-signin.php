<?php
session_start();
include("db-conn.php");

if (isset($_POST['signin'])) {
  $username = $_POST['username'];
  $email    = $_POST['email'];
  $password = md5($_POST['password']);
  
  $check_user = mysqli_query($conn,"SELECT * FROM user WHERE username ='$username', email='$email', password= '$password'");
  $check_login = mysqli_num_rows($check_user);

  $sql = "SELECT id FROM users WHERE email = '$email' and password= '$password'";
  $result = mysqli_query($conn, $sql);

  if ($check_login > 0) {
  } else {
    echo "<script>alert('Data Invalid. U must Sign Up');document.location='/portalberita/signin';</script>";
  }
  if (mysqli_num_rows($result) > 0) {
    $last_id = mysqli_insert_id($conn);
    error_reporting(0);
    $row = mysqli_fetch_assoc($result);
    header("location: /portalberita/admin.php");
  } 

  $_SESSION["email"] = $email;
  $_SESSION["password"] = $password;
}
