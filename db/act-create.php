<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/portalberita/img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="/portalberita/bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="/portalberita/style.css">
    <title>Event Suroboyo</title>
</head>
<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <form action="action.php" method="post" enctype="multipart/form-data">
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
                            <td><label for="category" class="form-label">Category</label></td>
                            <td>
                                <select class="form-group form-control" name="category" id="category" required>
                                    <option value="-" id="-" name="-">-</option>
                                    <option value="lifestyle" id="lifestyle" name="lifestyle">Lifestyle</option>
                                    <option value="hiburan" id="hiburan" name="hiburan">Hiburan</option>
                                    <option value="teknologi" id="teknologi" name="teknologi">Teknologi</option>
                                    <option value="Explore" id="Explore" name="Explore">Explore</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td><label for="type" class="form-label">Content</label></td> 
                            <td><textarea type="text" class="form-control" id="type" name="content" id="content" cols="25" rows="5" required></textarea></td>
                        </tr>
                        <tr>
                            <td><label for="type" class="form-label">Upload Image</label></td>
                            <td><input class="form-control form-control-sm" type="file" name="image" id="image" required></td>
                        </tr>
                        <tr>
                            <td></td>
                        <td style="text-align: left;">
                        <button type="submit" class="btn text-white" style="background-color: #41436a;" name="save" id="save">Save</button>
                        <a href="act-create.php"><input type="button" class="btn text-white" style="background-color: #f64668;" name="reset" id="Reset" value="Reset"></a>
                        <a href="/portalberita/admin.php"><input type="button" class="btn text-white" style="background-color: #fe9677;" name="back" id="back" value="Back"></a>
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