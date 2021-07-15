<?php require 'header.php'; ?>

<?php  

$products = $db->Select("Select * from products ");

$productsCount = count($products);

?>


<!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <?php foreach($products as $product) { ?>
                    <div class="col-lg-3">        
                        <div class="categories__item set-bg" data-setbg="assets/img/categories/cat-1.jpg">
                            <h5><a href=""><?= $product["title"] ?></a></h5>
                        </div>
                    </div>
                    <?php } ?>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Featured Section Begin -->
    <section class="featured spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Featured Product</h2>
                    </div>
                  
            </div>
            <div class="row featured__filter">
                <?php foreach($products as $product) { ?>
                <div class="col-lg-3 col-md-4 col-sm-6 mix oranges fresh-meat">
                    <div class="featured__item">
                        <div class="featured__item__pic set-bg" data-setbg="assets/img/featured/feature-1.jpg">
                            <ul class="featured__item__pic__hover">
                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                <li><a href="#"><i class="fa fa-retweet"></i></a></li>
                                <li><a href="index.php?url=shopcart"><i class="fa fa-shopping-cart"></i></a></li>
                            </ul>
                        </div>
                        <div class="featured__item__text">
                            <h6><a href="#"><?= $product["title"] ?></a></h6>
                            <h5><?= $product["price"] ?> TL</h5>
                        </div>
                    </div>
                </div>
                <?php } ?>
 
            </div>
        </div>
    </section>
    <!-- Featured Section End -->

<?php require "footer.php"; ?>  