<?php
session_start();
include("db-conn.php");

if (isset($_POST['submit'])) {
  $username = $_POST['username'];
  $password = $_POST['password'];
  
  
  $check_user = mysqli_query($conn,"SELECT * FROM user WHERE username = '$username', password= '$password'");
  $check_login = mysqli_num_rows($check_user);

  $sql = "SELECT id FROM user WHERE username = '$username', password ='$password'";
  $result = mysqli_query($conn, $sql);

  if ($check_login > 0) {
  } else {
    echo "<script>alert('Data Invalid');document.location='/portal-berita';</script>";
  }
  if (mysqli_num_rows($result) > 0) {
    $last_id = mysqli_insert_id($conn);
    $noAntri = $last_id;
    error_reporting(0);
    $row = mysqli_fetch_assoc($result);
    $noAntri = $row["id"];
    header("location: /portal-berita/admin/index.php");
  } 

  $_SESSION["username"] = $username;
  $_SESSION["password"] = $password;
}
