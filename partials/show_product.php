<?php
    $id=$_GET['id'];
    $product=select_by_idproduct($id);
?>
<section class="portfolio">
    <section class="row ml-0 mr-0">
        <section class="col-8 offset-2">
            <h3 class="text-center font-weight-bold" style="color: #343a40"><strong>this session</strong> (<?php echo $product['title'] ?>)</h3>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>
            <section class="border"></section>

            </br>
            <section class="row ml-0 mr-0">
                <section class="col-10 offset-1">
                    <section class="row ml-0 mr-0 mt-5">
                            <img src="administrator/admin/images/product/<?php echo $product['image']; ?>" class="image-fluid">
                            <h3 class="text-center mt-2 mb-3"><?php echo $product['title']; ?></h3>
                            <p><?php echo $product['description']; ?></p>
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
