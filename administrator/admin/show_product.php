<?php
session_start();
include_once "../config.php";
if(!isset($_SESSION['adminn'])) {
    header('location: ../login.php');
}
$query=select_product();
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
<?php include_once "../partials/_menu.php"; ?>

<section class="container">
    <section class="row pt-8">
        <section class="col-10 offset-1">
            <table class="table table-dark table-hover">
                <tr>
                    <td>title</td>
                    <td>description</td>
                    <td>image</td>
                    <td>delete</td>
                    <td>update</td>
                </tr>
                <?php foreach($query as $item): ?>
                    <tr>
                        <td><?php echo $item['title'] ?></td>
                        <td><?php echo $item['description'] ?></td>
                        <!-- <td> echo strlen($item['explanation']); </td> --><!-- همراه با تگ پی اچ پی -->
                        <!-- <td> echo substr($item['explanation'],0,100)."..."; </td> --><!-- همراه با تگ پی اچ پی -->
                        <td><img src="../admin/images/product/<?php echo $item['image'] ?>" alt="fail" width="50px" height="50px"></td>
                        <td>
                            <form action="product/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                        </td>
                        <td>
                            <form action="edit_product.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <input type="submit" value="update" class="btn btn-info">
                            </form>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </table>
            </br>
            <a href="create_product.php"><button type="button" class="btn btn-warning">return back</button></a>
        </section>
    </section>
</section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
