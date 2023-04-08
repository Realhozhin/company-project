<?php
    $product=select_product();

?>
<section class="portfolio">
    <section class="row ml-0 mr-0">
        <section class="col-4 offset-4">
            <h3 class="text-center font-weight-bold" style="color: #343a40"><strong>our product</strong></h3>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>

            </br>
            <section class="row ml-0 mr-0">
                <section class="col-10 offset-1">
                    <section class="row ml-0 mr-0 mt-5">
                        <?php foreach($product as $item): ?>
                        <img src="administrator/admin/images/product/<?php echo $item['image']; ?>" class="image-fluid">
                        <h3 class="text-center mt-2 mb-1"><?php echo $item['title']; ?></h3>
                        <p><?php echo $item['description']; ?></p>
                        <a href="product.php?id=<?php echo $item['id']; ?>" class="btn btn-info btn-block mb-5">read more</a>
                        <?php endforeach; ?>
                        <!--<img src="administrator/admin/images/product/" class="image-fluid">
                        <h3 class="text-center mt-2 mb-1"></h3>
                        <p></p>
                        <a href="" class="btn btn-info btn-block mb-5">read more</a>-->
                    </section>
                </section>
            </section>
        </section>
    </section>
</section>