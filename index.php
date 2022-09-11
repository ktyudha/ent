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
                                <li class="nav-item"> <a class="nav-link" href="#video">Video</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="/ent">Suroboyo Bus</a> </li>
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

    <header class="" id="beranda">
        <div class="container text-dark mt-5 ">
            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner rounded-3">
                    <div class="carousel-item active">
                        <img src="img/newsflash.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/newsflash.png" class="d-block w-100" alt="...">
                    </div>
                    <div class="carousel-item">
                        <img src="img/newsflash.png" class="d-block w-100" alt="...">
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
            <h3 class="mt-5"><?php echo strtoupper($category); ?>
                <hr class="border opacity-50">
            </h3>
        </div>
    </header>

    <div class="container">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="py-2 border-b-4">
                        <h4 class="fw-bold text-uppercase">Artikel</h4>
                    </div>
                    <?php
                    while ($data = mysqli_fetch_array($queri)) {
                    ?>
                        <a href="artikel1.php" style="text-decoration:none;">
                            <table class="table table-borderless">
                                <tbody>
                                    <tr>
                                        <td style="width: 12rem;" class="text-start"><img src="<?php echo $data['image_url']; ?>" style="height:12rem; width: 12rem;"></td>
                                        <td class="my-auto">

                                            <h5 class="fw-bold text-capitalize"><?php echo $data['tagline']; ?></h5>
                                            <p class="text-dark"><?php echo $data['resume']; ?></p>
                                            <span><small class="fw-bold text-capitalize"><?php echo $data['category']; ?></small> - <small class="text-muted"><?php echo date("F j, Y", $data['date']) ?></small></span>

                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </a>
                    <?php
                    }
                    ?>
                </div>
                <div class="col-md-4">
                    <section>
                        <div class="py-2">
                            <h4 class="fw-bold text-uppercase">Latest video on youtube</h4>
                        </div>
                        <div class="ratio ratio-16x9 flex justify-center items-center">
                            <iframe src="https://www.youtube.com/embed/Pp-t1MvJwD4" title="Museum Surabaya: Saksi Bisu Sejarah" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen class="ratio ratio-16x9"></iframe>
                        </div>
                    </section>
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