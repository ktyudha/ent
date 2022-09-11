<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/rsz_2logo2.png" type="image/x-icon">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <link rel="stylesheet" href="../style.css">
    <title>Event Suroboyo</title>
</head>

<body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <form action="action.php" method="post" enctype="multipart/form-data">
                    <table class="table table-borderless" style="margin:auto; margin-top:65px; text-align: right;">
                        <tbody>
                            <tr>
                                <td></td>
                                <td>
                                    <h6 style="text-align: left; margin-bottom: -3px;"><strong>INPUT ANNOUNCEMENT</strong></h6>
                                </td>
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
                                <td><label for="type" class="form-label">Thumbnails</label></td>
                                <td><input class="form-control form-control-sm" type="file" name="image" id="image" required></td>
                            </tr>
                            <tr>
                                <td><label for="type" class="form-label">Resume</label></td>
                                <td><textarea class="form-control form-control-sm" type="text" name="resume" id="resume" rows=5 required></textarea>
                            </tr>
                            <tr>
                                <td><label for="type" class="form-label">Content</label></td>
                                <td><textarea class="form-control" name="content" id="content"required></textarea></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td style="text-align: left;">
                                    <button type="submit" class="btn btn-dark text-white" name="save" id="save">Save</button>
                                    <a href="act-create.php"><input type="button" class="btn btn-warning" name="reset" id="Reset" value="Reset"></a>
                                    <a href="/portalberita/admin"><input type="button" class="btn btn-outline-danger" name="back" id="back" value="Back"></a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>
            </div>
        </div>
    </div>
</body>
<!-- panggil jquery -->
<script type="text/javascript" src="../bootstrap/js/jquery-3.2.1.min.js"></script>
<!-- panggil ckeditor.js -->
<script type="text/javascript" src="../ckeditor/ckeditor.js"></script>
<!-- panggil adapter jquery ckeditor -->
<script type="text/javascript" src="../ckeditor/adapters/jquery.js"></script>
<!-- setup selector -->
<script type="text/javascript">
        CKEDITOR.replace('content', {});
    </script>
</html>