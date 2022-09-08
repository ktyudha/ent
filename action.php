<?php
include("db-conn.php");

if (isset($_POST['save'])) {
    $tagline    = $_POST['tagline'];
    $regarding  = $_POST['regarding'];
    $content    = $_POST['content'];
    
$sql = "INSERT INTO portalweb (tagline, content, regarding) VALUES ('$tagline', '$content', '$regarding')";

if (mysqli_query($conn, $sql)) {
    echo "<script>alert('Has been save');document.location='/portal-berita/admin.php';</script>";
    } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

?>