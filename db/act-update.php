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
    $tagline    = $data ['tagline'];
    $regarding  = $data ['regarding'];
    $content    = $data ['content'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/portalberita/img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="/portalberita/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/portalberita/style.css">
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
                            <td><label for="regarding" class="form-label">Regarding</label></td>
                            <td><input type="text" class="form-control" id="regarding" name="regarding" value="<?php echo $data['regarding'];?>" required></td>
                        </tr>
                        <tr>
                            <td><label for="content" class="form-label">Content</label></td>
                            <td><textarea type="text" class="form-control" name="content" id="content" cols="25" rows="5" value="<?php echo $data['content'];?>"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td style="text-align: left;">
                        <button type="submit" class="btn text-white" style="background-color: #41436a;" name="update" id="update">Save</button>
                        <a href="/portalberita/admin.php"><input type="button" class="btn text-white" style="background-color: #fe9677;" name="back" id="back" value="Back"></a>
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
    $content = $_POST['content'];
    $regarding = $_POST['regarding'];

    $sql = "UPDATE portalweb SET tagline='$tagline', content='$content', regarding='$regarding' WHERE id='$id'";
    $result = mysqli_query($conn,$sql);

    if($result){
     echo "<script>alert('Has been update');document.location='/portalberita/admin.php';</script>";
    } else {
     echo "<script>alert('Has been update');document.location='/portalberita/admin.php';</script>";
    }
}
?>