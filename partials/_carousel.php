<?php
    $slider=latest_slider();
?>
<section class="col-10 offset-1 ">
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">

            <div class="carousel-item active" style="height: 600px">
                <img src="administrator/admin/images/slider/<?php echo $slider['image'] ?>" class="d-block w-100" alt="" height="600px">
                <div class="carousel-caption d-none d-md-block">
                    <h4><?php echo $slider['title'] ?></h4>
                    <h5><?php echo $slider['explanation'] ?></h5>
                    <p><a class="btn btn-lg btn-primary" href="<?php echo $slider['link'] ?>">Learn more</a></p>
                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
                <img src="administrator/admin/images/slider/1680164223a-for-programmers-wallpaper.png" class="d-block w-100" alt="" height="600px">
                <div class="carousel-caption d-none d-md-block">
                    <h4>my slider</h4>
                    <h5>Some representative placeholder content for the second slide.</h5>
                    <p><a class="btn btn-lg btn-primary" href="#">sign up now</a></p>

                </div>
            </div>
            <div class="carousel-item" style="height: 600px">
                <img src="administrator/admin/images/slider/1680164266i-love-coding-xl.jpg" class="d-block w-100" alt="" height="600px">
                <div class="carousel-caption d-none d-md-block">
                    <h4>my slider</h4>
                    <h5>Some representative placeholder content for the third slide.</h5>
                    <p><a class="btn btn-lg btn-primary" href="#">start now</a></p>

                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</section>
