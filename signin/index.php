<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/rsz_2logo2.png" type="image/x-icon">
    <link href="../bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Event Suroboyo</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-center my-auto ">
            <div class="col-md-6 col-md-4 my-auto">
                <div class="text-center mt-10">
                    <img src="../img/logo2.png"style="height:350px; width:auto; margin-top:10%; margin-bottom:10%;" >
                </div>
            </div>
            <div class="col-md-4 my-auto" >
                <div class="container-fluid" style="padding: 0; border-radius: 5px; box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);">
                    <div class="container p-3">
                        <div class="text-center mb-4">
                            <h4>Sign In</h4>
                            <p>Don't Have Account? <a class="text-success" href="../signup" style="text-decoration:none;">Sign Up</a></p>
                        </div>
                        <form action="../db/act-signin.php" method="POST">
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-4">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        <button class="btn" style="background-color:buttonface; color:var(--N400,#6C727C); width:100%;" type="submit" name="signin" id="signin"><b>Sign In</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="../bootstrap/js/bootstrap.min.js"></script>
</body>
</html>