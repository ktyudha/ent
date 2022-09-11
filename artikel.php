<?php


include "db/db-conn.php";
$id = $_GET['id'];
$sql = "SELECT * FROM portalweb where id='$id'";
$category = "";

if (isset($_GET['category'])) {
    $category = $_GET['category'];
    $sql = "SELECT * FROM portalweb WHERE category ='$category'";
}
$queri = mysqli_query($conn, $sql);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
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
                        <a class="navbar-brand" href="index.php"><img src="img/rsz_2logo2.png" alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
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
                                <li class="nav-item"> <a class="nav-link" href="#video">Video</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="/ent">Suroboyo Bus</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="#informasi">Informasi</a> </li>
                                <li class="nav-item mx-2">
                                    <a href="/portalberita/signup">
                                        <input type="button" class="btn btn-success" value="Daftar">
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="/portalberita/signin">
                                        <input type="button" class="btn btn-outline-success" value="Masuk">
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    <header class="bg-light" id="beranda">
        <div class="container text-dark mt-5">
            <h1 class="text-success"><b>ARTIKEL</b></h1>
            <h3><?php echo strtoupper($category); ?>
                <hr class="border opacity-50">
            </h3>
        </div>
    </header>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-6 justify-content-center">
                <?php
                while ($data = mysqli_fetch_array($queri)) {
                ?>
                    <div class="section" id="<?php echo $data['category']; ?>">
                        <div class="card my-2" style="width: 30rem;">
                            <img src="<?php echo $data['image_url']; ?>" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h4 class="fw-bold"><?php echo $data['tagline']; ?></h4>
                                <span><?php echo $data['content']; ?></span>
                            </div>
                            <div class="card-footer">
                            <span ><small class="fw-bold"><?php echo $data['category']; ?> </small> - <small class="card-text"><i><?php echo date("F j, Y, g:i a", $data['date']) ?></i></small></span>
                            </div>
                        </div>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
        <script src="/portalberita/bootstrap/js/bootstrap.bundle.js"></script>
        <footer class="my-5 text-center text-success" style="text-decoration: none;">
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