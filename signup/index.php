<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="/portalberita/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Event Suroboyo</title>
</head>
<body>
    <div class="container">
        <div class="row align-items-center" style="margin-top: 50px;">
            <div class="col-md-6 col-md-4">
                <div class="text-center mt-10">
                    <img src="/portalberita/img/logo2.png"style="height:350px; width:auto; margin-top:10%; margin-bottom:10%;" >
                </div>
            </div>
            <div class="col-md-4 p-3" >
                <div class="container-fluid" style="padding: 0; border-radius: 5px; box-shadow: 0 0 10px 0 rgb(0 0 0 / 10%);">
                    <div class="container p-3">
                        <div class="text-center mb-4">
                            <h4>Sign up now !</h4>
                            <p>Already registered? <a class="text-success" href="/portalberita/signin" style="text-decoration:none;">Sign In</a></p>
                        </div>
                        <form action="/portalberita/db/act-signup.php" method="POST">
                        <div class="mb-1">
                            <label for="username" class="form-label">Username</label>
                            <input type="text" class="form-control" id="username" name="username" required>
                        </div>
                        <div class="mb-1">
                            <label for="email" class="form-label">Email</label>
                            <input type="text" class="form-control" id="email" name="email" required>
                        </div>
                        <div class="mb-1">
                            <label for="password" class="form-label">Password</label>
                            <input type="password" class="form-control" id="password" name="password" required>
                        </div>
                        
                        <div class="form-check mb-3 mt-3 was-validated">
                            <input class="form-check-input" type="checkbox" id="myCheck" name="remember" required>
                            <label class="form-check-label" for="myCheck" style="font-family:helvetica; font-size:13px;">I Agree to the Privacy Policy</label>
                        </div>
                        <button class="btn" style="background-color:buttonface; color:var(--N400,#6C727C); width:100%;" type="submit" name="signup" id="signup" value="signup"><b>Sign up</b></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="/portalberita/bootstrap/js/bootstrap.min.js"></script>
</body>
</html>