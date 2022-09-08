<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/portal-berita/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/portal-berita/style.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="action.php" method="post">
                    <table class="table table-borderless" style="margin:auto; margin-top:65px; text-align: right; color: #375ca6;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td><h6 style="text-align: left; margin-bottom: -3px;"><strong>INPUT ANNOUNCEMENT</strong></h6></td>
                            </tr>
                        <tr>
                            <td><label for="tagline" class="form-label">Tagline</label></td>
                            <td><input type="text" class="form-control" id="tagline" name="tagline" required></td>
                        </tr>
                        <tr>
                            <td><label for="regarding" class="form-label">Regarding</label></td>
                            <td><input type="text" class="form-control" id="regarding" name="regarding" required></td>
                        </tr>
                        <tr>
                            <td><label for="type" class="form-label">Content</label></td>
                            
                            <td><textarea type="text" class="form-control" id="type" name="content" id="content" cols="25" rows="5"></textarea></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td style="text-align: left;">
                        <button type="submit" class="btn text-white" style="background-color: #41436a;" name="save" id="save">Save</button>
                        <a href="insert.php"><input type="button" class="btn text-white" style="background-color: #f64668;" name="reset" id="Reset" value="Reset"></a>
                        <a href="index.php"><input type="button" class="btn text-white" style="background-color: #fe9677;" name="back" id="back" value="Back"></a>
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