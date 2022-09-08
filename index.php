<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="style.css">
    <title>Announcement</title>
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
                           <a class="nav-link mx-3 text-danger" href="login/index.html">
                              <input type="button" class="btn btn-outline-danger" value="Log In">
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
                    </blockquote>
                 </div>
            </div>
        <?php     
        }
        ?>            
         
        </div>
    </div>
   </div>

    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <script src=".js"></script>

</body>
</html>