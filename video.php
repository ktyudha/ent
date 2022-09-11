<?php
include "db/db-conn.php";

$user = "SELECT * FROM users";
$sql = "SELECT * FROM portalweb";

$category = "";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM portalweb WHERE category ='$category'";
}

$query = mysqli_query($conn, $user);
$queri = mysqli_query($conn, $sql);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/logopens-biru.png" style="width: 50px;" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <title>PENS</title>
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">

    <div class="nav-menu fixed-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-light navbar-expand-lg">
                        <a class="navbar-brand" href="index.php"><img src="img/logopens-biru.png" style="width: 50px;" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ms-auto">
                                <li class="nav-item"> <a class="nav-link" href="index.php">Beranda</a> </li>
                                <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artikel</a>
                                    <ul class="dropdown-menu dropdown-menu-light">
                                        <li><a class="dropdown-item" name="lifestyle" href="?category=lifestyle">Lifestyle</a></li>
                                        <li><a class="dropdown-item" name="hiburan" href="?category=hiburan">Hiburan</a></li>
                                        <li><a class="dropdown-item" name="teknologi" href="?category=teknologi">Teknologi</a></li>
                                        <li><a class="dropdown-item" name="explore" href="?category=explore">Explore</a></li>
                                    </ul>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="video.php">Video</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="foto.php">Foto</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#informasi">Informasi</a> </li>
                                <li class="nav-item mx-2">
                                    <a href="/portalberita/signup">
                                        <input type="button" class="btn btn-primary" value="Daftar">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/portalberita/signin">
                                        <input type="button" class="btn btn-outline-primary" value="Masuk">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <header class="beranda" id="beranda">
        <h4 class="text-primary fw-bold">VIDEO</h4>
    </header>


    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="py-2 my-auto text-start">
                    <h2 class="fw-bold text-uppercase my-auto">Latest video on youtube</h2>
                </div>
            </div>
            <div class="col-md-6">
                <div class="ratio ratio-16x9 flex justify-center items-center">
                    <iframe src="https://www.youtube.com/embed/Pp-t1MvJwD4" title="Museum Surabaya: Saksi Bisu Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ratio ratio-16x9"></iframe>
                </div>
            </div>
        </div>
        <div class="title">
            <h2 class="fw-bold text-center mt-5">Our Video</h2>
        </div>
        <div class="row mt-4">
            <div class="col-md-4">
                <div class="ratio ratio-16x9 flex justify-center items-center">
                    <iframe src="https://www.youtube.com/embed/Pp-t1MvJwD4" title="Museum Surabaya: Saksi Bisu Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ratio ratio-16x9"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ratio ratio-16x9 flex justify-center items-center">
                    <iframe src="https://www.youtube.com/embed/Pp-t1MvJwD4" title="Museum Surabaya: Saksi Bisu Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ratio ratio-16x9"></iframe>
                </div>
            </div>
            <div class="col-md-4">
                <div class="ratio ratio-16x9 flex justify-center items-center">
                    <iframe src="https://www.youtube.com/embed/Pp-t1MvJwD4" title="Museum Surabaya: Saksi Bisu Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ratio ratio-16x9"></iframe>
                </div>
            </div>
        </div>
    </div>


    <footer class="text-center text-primary">
        <a class="text-primary" href="https://instagram.com/eventsuroboyo"><span class="ti-instagram"></span> @eventsuroboyo</a><br>
        <small class="text-primary">
            <a href="#beranda" class="text-primary m-2">Beranda</a>
            <a href="#Artikel" class="text-primary m-2">Artikel</a>
            <a href="#video" class="text-primary m-2">Video</a>
            <a href="/ent" class="text-primary m-2">Suroboyo Bus</a>
            <a href="#informasi" class="text-primary m-2">Informasi</a>
        </small>
        <p class="mb-2"><small>© 2022. Kurniawan Try Yudha</small> </p>
    </footer>
    <script src="bootstrap/js/jquery-3.2.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src="bootstrap/js/script.js"></script>

</body>

</html>