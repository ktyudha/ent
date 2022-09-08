

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/portal-berita/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/portal-berita/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
</head>
<body data-spy="scroll" data-target="#navbar" data-offset="30">

<div class="nav-menu fixed-top">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <nav class="navbar navbar-light navbar-expand-lg">
                    <a class="navbar-brand" href="index.html">Announcement</a> <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
                    <div class="collapse navbar-collapse" id="navbar">
                        <div class="navbar-nav ms-auto ">
                           <a class="nav-link text-danger" href="/portal-berita">
                              <input type="button" class="btn btn-primary" value="Log Out">
                            </a>
                           <a class="nav-link text-danger" href="insert.php">
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
            <h1><b>ANNOUNCEMENT</b></h1>
        </div>
</header>

   <div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-6">
        <?php 
            include "db-conn.php";
                $sql = "SELECT * FROM portalweb";
                $queri = mysqli_query($conn, $sql);
            while($data = mysqli_fetch_array($queri)){
        ?>
            <div class="card my-5">
                <div class="card-header">
                    <h5><?php echo $data['tagline'];?></h5>
                    <p class="blockquote-header text-mute">Admin - <?php echo $data['regarding'];?></p>
                </div>
                <div class="card-body">
                    <blockquote class="blockquote fs-6 mb-0">
                        <p><?php echo $data['content'];?></p>
                        <a href="update.php?updateid=<?php echo $data['id'];?>"><button type="submit" class="btn btn-success text-white" name="update" id="update"><i class="fas fa-edit"></i></button></a>
                        <a href="delete.php?deleteid=<?php echo $data['id'];?>"><button type="submit" class="btn btn-danger text-white" name="delete" id="delete"><i class="fas fa-trash"></i></button></a>
                    </blockquote>
                 </div>
            </div>
        <?php     
        }
        ?>   
    </div>
   </div>

    <script src="/portal-berita/bootstrap/js/bootstrap.bundle.js"></script>
    <script src="session.js"></script>

</body>
</html>