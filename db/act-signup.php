<?php
require 'db-conn.php';
/* Sign Up */

if (isset($_POST['signup'])) {
    $username   = $_POST['username'];
    $email    = $_POST['email'];
    $password  = $_POST['password'];
  
    $passwordmd5 = md5($password);
    $check_user = mysqli_query($conn,"SELECT * FROM users WHERE email ='$email'");
    $check_login = mysqli_num_rows($check_user);
  
    $sql = "SELECT id FROM users WHERE email ='$email'";
    $result = mysqli_query($conn, $sql);
  
    if ($check_login > 0) {
      echo "<script>alert('username is already registered');document.location='../signin';</script>";
    } else {
      if(mysqli_query($conn, "INSERT INTO users VALUES('0', '$username', '$email', '$passwordmd5')")){
        echo "<script>
        alert('Data berhasil dikirim');window.location='../signin';
        </script>";
        error_reporting(0);
      } else {
        echo "Error: " . "<br>" . mysqli_error($conn);
      }
    }
  }
?>