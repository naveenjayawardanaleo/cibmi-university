<?php include('include/header.php') ?>
<!--====================  breadcrumb area ====================-->

<main>
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="banner-content">
                <h3>Our Products</h3>
            </div>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() ?>" title="Home">Home</a></li>
                <li class="active">Our Products</li>
            </ol>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->
    <main>

        <!-- About Section -->
        <div class="about-section container-fluid no-padding">
            <!-- Container -->
            <div class="container">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>RAY EXPO PRODUCTS
                    </h3>
                    <img src="<?= base_url() ?>assets/images/section-seprator.png" alt="section-seprator">
                </div><!-- Section Header /- -->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="<?= base_url() ?>assets/images/our-products.jpg" style="border-radius: 5px;" alt="about">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="about-content">
                        <h5>“Global brand of Exporting”</h5>
                        <p>RAY expo product range diversified into Apparel, Brass, Spices and Tea with some other fancy items.
                            Apparel products further subdivide into Kids Wear, Sports Wear, Knitwear, Fashion Wear and
                            Accessories. Apparel is the forefront product in the range. All the products are manufactured in Ceylon.
                            Apparel, Brass, Spices and Tea are known as quality products under Ceylon brand name. RAY Expo only
                            delivers quality products on time.</p>

                        <p>Ceylon product manufacturers get chance to capture international
                            market, while global clients will get quality products on time with attractive price which no one can
                            match. RAY Expo is game changer for the SMEs in Ceylon. The business always fixes issues of other
                            businesses and put solid platform to upgrade SMEs to next level by promoting products to local and
                            global market segments. </p>

                    </div>
                </div>
            </div><!-- Container /- -->
        </div><!-- About Section /- -->

        <!-- Collection Section -->
        <div id="collection" class="collection-section ">
            <div class="container">
                <div class="row">

                    <div class="category-carousel-my owl-carousel   owl-theme">

                        <?php foreach ($cate as $k => $row) : ?>

                            <div class="item">
                                <div class="img-box Myimg-box">
                                    <img src="<?php base_url() ?>media/image/<?= $row->Image ?>" alt="collection" />
                                </div>
                                <div class="collection-content">
                                    <h5><?= $row->CategoryTitle ?> </h5>
                                    <p><?= $row->ShortDescription ?> </p>
                                    <a href="<?= base_url() ?>Products/<?= url_title($row->CategoryTitle) ?>/<?= $row->CategoryId ?>" title="Shop Now">shop Now</a>
                                </div>


                            </div>



                        <?php endforeach; ?>
                    </div>


                </div>
            </div>

        </div><!-- Collection Section /- -->

    </main>
    <?php include('include/footer.php') ?>