<?php 
include 'db-conn.php';

$id = $_GET['updateid'];

if(isset($_GET['updateid'])){
    $id = $_GET['updateid'];
} else {
    echo "<script>alert('Choosing announcement for update is required!');document.location='admin.php';</script>";
}

    $sql = "SELECT * FROM portalweb WHERE id='$id'";
    $result = mysqli_query($conn, $sql);
    $data = mysqli_fetch_array($result);

    $id         = $data ['id'];
    $tagline    = $data['tagline'];
    $category   = $data['category'];
    $content    = $data['content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <title>Event Suroboyo</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="" method="post">
                    <table class="table table-borderless" style="margin:auto; margin-top:65px; text-align: right; color: #375ca6;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><h6 style="text-align: left; margin-bottom: -3px;"><strong>UPDATE ANNOUNCEMENT</strong></h6></td>
                            </tr>
                        <tr>
                            <td><label for="id" class="form-label">ID</label></td>
                            <td><input type="text" class="form-control" id="id" name="id" value="<?php echo $data['id'];?>" readonly></td>
                        </tr>
                        <tr>
                            <td><label for="tagline" class="form-label">Tagline</label></td>
                            <td><input type="text" class="form-control" id="tagline" name="tagline" value="<?php echo $data['tagline'];?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="category" class="form-label">Category</label></td>
                            <td>
                                <select class="form-group form-control" name="category" id="category" required>
                                    <option value="-" id="-" name="-">-</option>
                                    <option value="lifestyle" id="lifestyle" name="lifestyle">Lifestyle</option>
                                    <option value="hiburan" id="hiburan" name="hiburan">Hiburan</option>
                                    <option value="teknologi" id="teknologi" name="teknologi">Teknologi</option>
                                    <option value="Explore" id="Explore" name="Explore">Explore</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="content" class="form-label">Content</label></td>
                            <td><textarea type="text" class="form-control" name="content" id="content" cols="25" rows="5" value="<?php echo $data['content'];?>" required></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td style="text-align: left;">
                        <button type="submit" class="btn text-white" style="background-color: #41436a;" name="update" id="update">Save</button>
                        <a href="../admin.php"><input type="button" class="btn text-white" style="background-color: #fe9677;" name="back" id="back" value="Back"></a>
                        </td>
                        </tr>    
                    </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<?php
if (isset($_POST['update'])) {

    $tagline = $_POST['tagline'];
    $category   = $_POST['category'];
    $content    = $_POST['content'];
    $date       = strtotime(date('Y-m-d H:i:s'));

    $sql = "UPDATE portalweb SET tagline='$tagline', category ='$category', content='$content', date='$date' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
     echo "<script>alert('Has been update');document.location='../admin.php';</script>";
    } else {
     echo "<script>alert('Has been update');document.location='../admin.php';</script>";
    }
}
?>