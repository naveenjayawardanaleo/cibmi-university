<?php include('include/header.php') ?>
<!--====================  breadcrumb area ====================-->

<main>
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="banner-content">
                <h3>Apparel</h3>
            </div>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() ?>" title="Home">Home</a></li>
                <li class="active">Apparel</li>
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
                    <h3>Apparel
                    </h3>
                    <img src="<?= base_url() ?>assets/images/section-seprator.png" alt="section-seprator">
                </div><!-- Section Header /- -->
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <img src="<?= base_url() ?>assets/images/apparel.jpg" style="border-radius: 5px;" alt="about">
                </div>
                <div class="col-md-6 col-sm-6 col-xs-6">
                    <div class="about-content">

                        <h5>Apparel</h5>
                        <p>Ceylon Apparel industry is popular for quality garments and exports. Apparel is the main export product
                            in Ceylon, which above the half of total export value (USD) in Ceylon. However, from the global market,
                            Ceylon Apparel share is very small. RAY Expo gives helping hand to apparel SMEs to grab the
                            international market. RAY Expo product portfolio lies as Kids Wear, Sports Wear, Knitwear, Fashion
                            Wear and Accessories. Clients can purchase retail apparel items as well as bulk purchases.

                        </p>

                        <p>Retail
                            purchases can be done through Online Retail store and Bulk purchases can be done through inquiring for
                            bulk purchase from online web portal.</p>

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