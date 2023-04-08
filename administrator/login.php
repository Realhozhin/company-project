<?php session_start(); ?>
<?php include_once "config.php"?>
<?php include_once "partials/_header.php"; ?>
<?php
$conn=conncet_to_db();
$query=select_admin();
if(empty(mysqli_fetch_assoc($query))){
    $username="erfan";
    $password="12345";
    $securitypasswords=sha1($password);
    insert_admin($username,$securitypasswords,1);
}
if (isset($_SESSION['adminn'])) {
    header('Location: admin/admin.php');
}
?>
<!-- login form -->
</br></br></br></br>
<?php if(isset($_SESSION['wrongggg'])): ?>
<section class="col-6 offset-3">
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
            <h5 class="text-center">HI DEAR,<?php echo $_SESSION['wrongggg']; ?></h5>
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
</section>
<?php endif; ?>
</br>
<section class="col-6 offset-3 pt-3 pb-3" style="background-color: #badce3">
    <h2 class="text-center">login form</h2>
</section>
</br>
<section class="row ml-0 mr-0">
    <section class="col-6 offset-3 pt-5" style="background-color: #badce3">
        <form action="check.php" method="post">
            <section class="form-group" style="text-align: center">
                <label for="username"><strong>username</strong></label>
                <input type="text" name="username" id="username" placeholder="username" class="form-control" style="border: 2px inset lightgray">
            </section>
            <section class="form-group" style="text-align: center">
                <label for="password"><strong>password</strong></label>
                <input type="password" name="password" id="password" placeholder="password" class="form-control" style="border: 2px inset lightgray">
            </section>
            </br>
            <section class="form-group">
                <input type="submit" value="submit" class="btn btn-success btn-block">
            </section>
        </br></br>
        </form>
    </section>
</section>
<!-- end login form -->

<!-- footer -->
<?php include_once "partials/_footer.php"; ?>
