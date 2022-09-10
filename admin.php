<?php

session_start();
if ($_SESSION["email"] === null) {
    header("location: /portalberita/");
}
?>
<?php
include "db/db-conn.php";
$sql = "SELECT * FROM portalweb";
$user = "SELECT * FROM users";
$queri = mysqli_query($conn, $sql);
$query = mysqli_query($conn, $user);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Event Suroboyo</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-light navbar-expand-lg">
                        <a class="navbar-brand" href="index.html"><img src="img/rsz_2logo2.png" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <div class="navbar-nav ml-auto ">
                            <p class="nav-link">
                                <?php 
                                if ($admin = mysqli_fetch_array($query)){
                                    echo $admin['username'];?></p>
                                <?php
                                }
                                ?>
                                <a class="nav-link text-danger" href="/portalberita/db/act-signout.php">
                                    <input type="button" class="btn btn-success" value="Sign Out">
                                </a>
                                <a class="nav-link text-danger" href="/portalberita/db/act-create.php">
                                    <input type="button" class="btn btn-outline-success" value="Add">
                                </a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <header class="bg-light" id="beranda">
        <div class="container text-dark mt-5">
            <h1 class="text-success"><b>ADMIN EVENT SUROBOYO</b></h1>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6 mx-auto">
                <?php
                while ($data = mysqli_fetch_array($queri)) {
                ?>
                    <div class="section" id="<?php echo $data['category']; ?>">
                        <div class="card my-2" style="width: 30rem;">
                            <img src="<?php echo $data['image_url']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5><?php echo $data['tagline']; ?></h5>
                                <p class="text-mute">Admin - <?php echo $data['category']; ?> </p>
                                <p class="card-text"><?php echo $data['content']; ?></p>
                                <p><i><?php echo date("F j, Y, g:i a", $data['date']) ?></i></p>
                                <a href="/portalberita/db/act-update.php?updateid=<?php echo $data['id']; ?>"><button type="submit" class="btn btn-success text-white" name="update" id="update"><i class="fas fa-edit"> Edit</i></button></a>
                                <a href="/portalberita/db/act-delete.php?deleteid=<?php echo $data['id']; ?>" onclick="return confirm('are you sure to delete?')"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete"><i class="fas fa-trash"> Delete</i></button></a>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
        <script src="/portalberita/bootstrap/js/bootstrap.bundle.js"></script>
        <footer class="my-5 text-center text-success">
            <a class="text-success" href="https://instagram.com/eventsuroboyo"><span class="ti-instagram"></span> @eventsuroboyo</a><br>
            <small class="text-success">
                <a href="#beranda" class="text-success m-2">Beranda</a>
                <a href="#Artikel" class="text-success m-2">Artikel</a>
                <a href="#video" class="text-success m-2">Video</a>
                <a href="/ent" class="text-success m-2">Suroboyo Bus</a>
                <a href="#informasi" class="text-success m-2">Informasi</a>
            </small>
            <p class="mb-2"><small>© 2022. Kurniawan Try Yudha</small> </p>
        </footer>
        <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
        <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
        <script src="bootstrap/js/bootstrap.bundle.js"></script>
        <script src="bootstrap/js/script.js"></script>

</body>

</html>