<?php
include 'db-conn.php';

$id = $_GET['updateid'];

if (isset($_GET['updateid'])) {
    $id = $_GET['updateid'];
} else {
    echo "<script>alert('Choosing announcement for update is required!');document.location='admin.php';</script>";
}

$sql = "SELECT * FROM portalweb WHERE id='$id'";
$result = mysqli_query($conn, $sql);
$data = mysqli_fetch_array($result);

$id         = $data['id'];
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
            <div class="col-md-12">
                <form action="" method="post" enctype="multipart/form-data">
                    <table class="table table-borderless" style="margin:auto; margin-top:65px; text-align: right;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <h6 style="text-align: left; margin-bottom: -3px;"><strong>UPDATE ANNOUNCEMENT</strong></h6>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="id" class="form-label">ID</label></td>
                                <td><input type="text" class="form-control" id="id" name="id" value="<?php echo $data['id']; ?>" readonly></td>
                            </tr>
                            <tr>
                                <td><label for="tagline" class="form-label">Tagline</label></td>
                                <td><input type="text" class="form-control" id="tagline" name="tagline" value="<?php echo $data['tagline']; ?>" required></td>
                            </tr>
                            <tr>
                                <td><label for="category" class="form-label">Category</label></td>
                                <td>
                                    <select class="form-group form-control" name="category" id="category" required>
                                        <option value="lifestyle" id="lifestyle" name="lifestyle">Lifestyle</option>
                                        <option value="hiburan" id="hiburan" name="hiburan">Hiburan</option>
                                        <option value="teknologi" id="teknologi" name="teknologi">Teknologi</option>
                                        <option value="Explore" id="Explore" name="Explore">Explore</option>
                                    </select>
                                </td>
                            </tr>
                            <tr>
                                <td><label for="type" class="form-label">Thumbnails</label></td>
                                <td><input class="form-control form-control-sm" type="file" name="image" id="image" value="<?php echo $data['image_url']; ?>"></td>
                            </tr>
                            <tr>
                                <td><label for="type" class="form-label">Resume</label></td>
                                <td><textarea class="form-control form-control-sm" type="text" name="resume" id="resume" rows=5 maxlength="210" required><?php echo $data['resume']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td><label for="content" class="form-label">Content</label></td>
                                <td><textarea class="form-control" name="content" id="content"><?php echo $data['content']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="text-align: left;">
                                    <button type="submit" class="btn btn-dark text-white" name="update" id="update">Save</button>
                                    <a href="../admin"><input type="button" class="btn btn-outline-danger" name="back" id="back" value="Back"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>

    <!-- panggil jquery -->
    <script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
    <!-- panggil ckeditor.js -->
    <script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
    <!-- panggil adapter jquery ckeditor -->
    <script type="text/javascript" src="../ckeditor/adapters/jquery.js"></script>
    <script type="text/javascript">
        CKEDITOR.replace('content', {});
    </script>
</body>

</html>
<?php
if (isset($_POST['update'])) {

    $tagline = $_POST['tagline'];
    $category   = $_POST['category'];
    $content    = $_POST['content'];
    $resume     = $_POST['resume'];
    $date       = strtotime(date('Y-m-d H:i:s'));

    $target_dir = "uploads/";
    if (isset($_FILES['image'])) {
        $image = $_FILES['image'];

        $target_file = $target_dir . basename($image['name']);

        /*Check File size*/
        if ($image['size'] > 500000) {
            echo "<script>alert('Sorry, your file is too large');document.location='/portalberita/act-update.php';</script>";
        }

        if (move_uploaded_file($image['tmp_name'], "../" . $target_file)) {
            $sql_img = "INSERT INTO portalweb (tagline, category, content, resume, date, image_url) VALUES ('$tagline', '$category', '$content', '$resume', '$date', '$target_file')";

            if (mysqli_query($conn, $sql_img)) {
                echo "<script>alert('Has been save');document.location='/portalberita/admin.php';</script>";
            } else {
                echo "Error: " . $sql_img . "<br>" . mysqli_error($conn);
            }
        }

        $sql = "UPDATE portalweb SET tagline='$tagline', category ='$category', content='$content', resume='$resume', date='$date' WHERE id='$id'";
        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "<script>alert('Has been update');document.location='../admin';</script>";
        } else {
            echo "<script>alert('Can't update');document.location='../admin';</script>";
        }
    }
}
?>