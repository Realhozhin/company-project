<?php
include_once "administrator/config.php";
include_once "_header.php";
$search=$_GET['search'];
$query=search($search);
?>
<section class="container">
    <section class="row mt-5">
        <section class="col-8 offset-2">
            <?php foreach($query as $item): ?>
            <section class="row">
                <section class="col-5">
                    <h1><?php echo $item['title'] ?></h1>
                </section>
                <section>
                    <img src="administrator/admin/images/product/<?php echo $item['image'] ?>" alt="fail" width="400px" height="400px">
                    <p><?php echo $item['description'] ?></p>
                </section>
            </section>
            <?php endforeach; ?>
        </section>
    </section>
</section>
<?php
include_once "_footer.php";
?>
