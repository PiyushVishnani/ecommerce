<?php require('top.php') ?>
<div class="body__overlay"></div>

<div class="slider__container slider--one bg__cat--3">
    <div class="slide__container slider__activation__wrap owl-carousel">
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>New Arrivals 2022</h2>
                                <h1>New Launched Devices</h1>
                                <!-- <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/0.webp" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single__slide animation__style01 slider__fixed--height">
            <div class="container">
                <div class="row align-items__center">
                    <div class="col-md-7 col-sm-7 col-xs-12 col-lg-6">
                        <div class="slide">
                            <div class="slider__inner">
                                <h2>Sale Sale Sale</h2>
                                <h1>Black Friday Sale 2022</h1>
                                <!-- <div class="cr__btn">
                                    <a href="cart.php">Shop Now</a>
                                </div> -->
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-sm-5 col-xs-12 col-md-5">
                        <div class="slide__thumb">
                            <img src="images/slider/fornt-img/3.jpg" alt="slider images">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="htc__category__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">New Arrivals</h2>
                    <p>These are recently added products.</p>
                </div>
            </div>
        </div>
        <div class="htc__product__container">
            <div class="row">
                <div class="product__list clearfix mt--30">
                    <?php
                    $get_product = get_product($con, 4);
                    foreach ($get_product as $list) {
                    ?>

                    <div class="col-md-4 col-lg-3 col-sm-4 col-xs-12">
                        <div class="category">
                            <div class="ht__cat__thumb">
                                <a href="product.php?id=<?php echo $list['id'] ?>">
                                    <img src="<?php echo PRODUCT_IMAGE_SITE_PATH . $list['image'] ?>"
                                        alt="product images">
                                </a>
                            </div>

                            <div class="fr__product__inner">
                                <h4><a href="product.php?id=<?php echo $list['id'] ?>">
                                        <?php echo $list['name'] ?>
                                    </a></h4>
                                <ul class="fr__pro__prize">
                                    <li class="old__prize">
                                        <?php echo $list['mrp'] ?>
                                    </li>
                                    <li>
                                        <?php echo $list['price'] ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <?php } ?>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- <section class="ftr__product__area ptb--100">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section__title--2 text-center">
                    <h2 class="title__line">Best Seller</h2>
                    <p>Sorry We regrest to show you best sellers right now</p>
                </div>
            </div>
        </div>
    </div>
</section> -->
<?php require('footer.php') ?>