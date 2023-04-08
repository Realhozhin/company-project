<?php
session_start();
if(!isset($_SESSION['adminn'])){
    header('location: ../login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<nav class="navbar navbar-dark bg-dark" aria-label="First navbar example">
    <div class="container-fluid">
        <a class="navbar-brand" href="#" style="color: #20c997">admin page</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarsExample01" aria-controls="navbarsExample01" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample01">
            <ul class="navbar-nav me-auto mb-2">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="#">Home setting</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">show website</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="create_product.php">add product</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="social/create_social.php">manage social media</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled">profile</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="show_cantact.php">show contact</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown" aria-expanded="false">ect.</a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="../admin/create_pac.php">add pac</a></li>
                        <li><a class="dropdown-item" href="../create_slider.php">make new slider</a></li>
                        <li><a class="dropdown-item" href="#">FAQs</a></li>
                    </ul>
                </li>
            </ul>
            <form role="search">
                <input class="form-control" type="search" placeholder="Search" aria-label="Search">
            </form>
        </div>
    </div>
</nav>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
</br></br>
<section class="container">
    <section class="row">
        <section class="col-8 offset-2">
            <form action="seo/insert.php" method="post" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" id="title" placeholder="title" class="form-control" style="border: 2px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="author">author</label>
                    <input type="text" name="author" id="author" placeholder="author name" class="form-control" style="border: 2px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="keywords">keywords</label>
                    <input type="text" name="keywords" id="keywords" placeholder="keywords" class="form-control" style="border: 2px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" name="description" id="description" placeholder="description" class="form-control" style="border: 2px inset lightgray;resize: none;height: 150px"></textarea>
                </section>
                <section class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" class="form-control" style="border: 2px inset lightgray">
                </section>

                <section class="form-group pt-3">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">
                </section>
            </br>
            </form>
            <a href="show_seo.php"><button type="button" class="btn btn-success">show details</button></a>
        </section>
    </section>
</section>
