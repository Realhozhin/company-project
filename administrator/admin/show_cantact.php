<?php
session_start();
include_once "../config.php";
if(!isset($_SESSION['adminn'])) {
    header('location: ../login.php');
}
$query=select_contact();
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
                    <td>id</td>
                    <td>fullName</td>
                    <td>email</td>
                    <td>comment</td>
                    <td>delete</td>
                    <td>show comment</td>
                </tr>
                <?php foreach($query as $item): ?>
                    <tr>
                        <td><?php echo $item['id'] ?></td>
                        <td><?php echo $item['fullName'] ?></td>
                        <td><?php echo $item['email'] ?></td>
                        <td><?php echo substr($item['comment'],0,50) ?></td>
                        <td>
                            <form action="contact/delete.php" method="post">
                                <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                                <input type="submit" value="delete" class="btn btn-danger">
                            </form>
                        </td>
                        <td><a href="" data-bs-toggle="modal" data-bs-target="#exampleModal-<?php echo $item['id'] ?>">show</a></td>
                        <div class="modal fade" id="exampleModal-<?php echo $item['id'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <?php echo $item['comment']; ?>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </tr>
                <?php endforeach; ?>
            </table>
            </br>
            <a href="admin.php"><button type="button" class="btn btn-warning">return back</button></a>
        </section>
    </section>
</section>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>
