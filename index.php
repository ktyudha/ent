<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="bootstrap/css/style.css">
    <title>Event Suroboyo</title>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">

<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <a class="navbar-brand" href="index.html"><img src="img/rsz_2logo2.png"  alt="logo"></a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item"> <a class="nav-link" href="#beranda">Beranda</a> </li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">Artikel</a>
                                <ul class="dropdown-menu dropdown-menu-dark">
                                    <li><a class="dropdown-item" href="#">Lifestyle</a></li>
                                    <li><a class="dropdown-item" href="#">Hiburan</a></li>
                                    <li><a class="dropdown-item" href="#">Teknologi</a></li>
                                    <li><a class="dropdown-item" href="#">Explore</a></li>
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

<header class="" id="beranda">
        <div class="container text-dark mt-5">
            <h1 class="text-success"><b>EVENT SUROBOYO</b></h1>
        </div>
</header>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 mx-auto">
        <?php 
            include "db/db-conn.php";
                $sql = "SELECT * FROM portalweb";
                $queri = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($queri)){
        ?>
            <div class="card my-5" style="width: 30rem;">
                <img src="<?php echo $data['image_url'];?>" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5><?php echo $data['tagline'];?></h5>
                    <p class="text-mute">Admin - <?php echo $data['category'];?> </p>
                    <p class="card-text"><?php echo $data['content'];?></p>
                    <p><i><?php echo date("F j, Y, g:i a", $data['date']) ?></i></p>
                </div>
            </div>
        <?php     
        }
        ?>            
         
        </div>
    </div>
   </div>
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