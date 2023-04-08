<?php
session_start();
include_once "../../config.php";
$id=$_POST['id'];
$item=select_ttpacs_by_id($id);
if(!isset($_SESSION['adminn'])){
    header('location: ../login.php');
}
?>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>make slider</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

</br></br>
<section class="container">
    <section class="row">
        <section class="col-8 offset-2">
            <form action="edit_pacs.php" method="post" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" name="description" id="description" class="form-control" style="border: 2px inset lightgray;resize: none;height: 150px""><?php echo $item['description']; ?></textarea>
                </section>
                </br>
                <section class="form-group">
                    <label for="address">address</label>
                    <input type="url" name="address" id="address" value="<?php echo $item['address']; ?>" class="form-control" style="border: 3px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" class="form-control" style="border: 2px inset lightgray">
                    </br>
                    <img src="../images/ttpacs/<?php echo $item['image']?>" alt="" width="50px" height="50px">
                    </br>
                </section>
                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                <section class="form-group pt-3">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">
                </section>
                </br>
            </form>
            <a href="show_pac.php"><button type="button" class="btn btn-success">show details</button></a>
        </section>
    </section>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
