<?php
include("db-conn.php");

/* Create */

if (isset($_POST['save'])) {
    $tagline    = $_POST['tagline'];
    $category   = $_POST['category'];
    $content    = $_POST['content'];
    $resume     = $_POST['resume'];
    $date       = strtotime(date('Y-m-d H:i:s'));
    
    /*Upload Image */
    $target_dir ="uploads/";
    if (isset($_FILES['image'])){
        $image = $_FILES['image'];

        $target_file = $target_dir . basename($image['name']);

        $check_tagline = mysqli_query($conn,"SELECT * FROM portalweb WHERE tagline ='$tagline'");
        $check_news = mysqli_num_rows($check_tagline);
        
        if ($check_news > 0) {
            echo "<script>alert('Tagline is Already');document.location='../admin';</script>";
        } else {
            /*Check File size*/
            if ($image['size'] > 500000){
                echo "<script>alert('Sorry, your file is too large');document.location='../admin/';</script>";
            }
    
            if (move_uploaded_file($image['tmp_name'], "../" . $target_file)){
                $sql = "INSERT INTO portalweb (tagline, category, content, resume, date, image_url) VALUES ('$tagline', '$category', '$content', '$resume', '$date', '$target_file')";
    
                if (mysqli_query($conn, $sql)) {
                    echo "<script>alert('Has been save');document.location='../admin';</script>";
                } else {
                    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
                }
            }
        }
    }
}
