<?php
include "db-conn.php";

if(isset($_GET['deleteid'])){
    $id=$_GET['deleteid'];

    $sql = "DELETE FROM portalweb WHERE id = '$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
        echo "<script>alert('Has been deleted.');window.location='/portal-berita/admin.php'</script>";
    } else {
        die(mysqli_error($conn));
    } 
} else {
    echo "<script>alert('ID not change');window.location='/portal-berita/admin.php'</script>";
}
?>