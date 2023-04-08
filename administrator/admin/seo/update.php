<?php
session_start();
include_once "../../config.php";
$id=$_POST['id'];
$item=select_by_idseo($id);
if(!isset($_SESSION['adminn'])){
    header('location: ../login.php');
}
include_once "../../partials/_header.php";
?>
</br></br></br>
<section class="container">
    <section class="row">
        <section class="col-8 offset-2">
            <form action="_update.php" method="post" enctype="multipart/form-data">
                <section class="form-group">
                    <label for="title">title</label>
                    <input type="text" name="title" id="title" value="<?php echo $item['title']; ?>" class="form-control" style="border: 3px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="author">author</label>
                    <input type="text" name="author" id="author" value="<?php echo $item['author']; ?>" class="form-control" style="border: 3px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="keywords">keywords</label>
                    <input type="text" name="keywords" id="keywords" value="<?php echo $item['keywords']; ?>" class="form-control" style="border: 2px inset lightgray">
                </section>
                </br>
                <section class="form-group">
                    <label for="description">description</label>
                    <textarea type="text" name="description" id="description" class="form-control" style="border: 3px inset lightgray;resize: none;height: 150px"><?php echo $item['description']; ?></textarea>
                </section>
                <section class="form-group">
                    <label for="image">image</label>
                    <input type="file" name="image" id="image" class="form-control" style="border: 3px inset lightgray">
                </br>
                    <img src="../images/seo/<?php echo $item['image']; ?>" width="50px" height="50px">
                    <input type="hidden" name="id" value="<?php echo $item['id']; ?>">
                </section>

                <section class="form-group pt-3">
                    <input type="submit" name="submit" id="submit" class="btn btn-primary" value="submit">
                </section>
            </br>
            </form>
            <a href="../show_seo.php"><button type="button" class="btn btn-warning">return back</button></a>
        </section>
    </section>
</section>
</br></br>

<?php include_once "../../partials/_footer.php"; ?>