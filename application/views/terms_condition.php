<?php include('include/header.php') ?>
<!--====================  breadcrumb area ====================-->

<main>
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="banner-content">
                <h3>Terms-Conditions</h3>
            </div>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() ?>" title="Home">Home</a></li>
                <li class="active">Terms-Conditions</li>
            </ol>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- About Section -->
    <div class="about-section container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <!-- Section Header -->
            <div class="section-header">
                <h3>Terms-Condition</h3>
                <img src="<?= base_url() ?>assets/images/section-seprator.png" alt="section-seprator" />
            </div><!-- Section Header /- -->
           
            <div class="col-md-12 col-sm-6 col-xs-6">
                <div class="about-content">
                   
                    <p><?= $pages->Description ?></p>



                    <img src="<?= UP . $pages->Image ?>" class="w-100" alt="">

                    
                    



                </div>
            </div>
           



        </div><!-- Container /- -->
    </div><!-- About Section /- -->

  
</main>

<?php include('include/footer.php') ?>