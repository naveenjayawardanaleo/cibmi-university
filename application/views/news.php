<?php include('include/header.php') ?>


<main>
    <!-- hero-area-start -->
    <div class="hero-arera course-item-height" data-background="assets/img/slider/course-slider.jpg" style="background-image: url(&quot;assets/img/slider/course-slider.jpg&quot;);">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-course-1-text">
                        <h2>News And Media</h2>
                    </div>
                    <div class="course-title-breadcrumb">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><span>News And Media</span></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- hero-area-end -->

    <div class="blog-area pt-120 pb-90">
        <div class="container">
          

             
                    <div class="row">
                        <?php
                        foreach ($hardware as $hard) : ?>

                            <div class="col-xl-4">
                                <div class="blog-wrapper position-relative mb-30">
                                    <div class="blog-thumb ">
                                        <a href="blog-details.html"><img src="<?= base_url() ?>media/image/<?= $hard->Image ?>" alt="img"></a>
                                    </div>

                                    <div class="blog-content-wrapper">

                                        <div class="blog-content">

                                            <h3><?= $hard->HardwareTitle ?></h3>
                                            <p class="text-justify"><?= $hard->ShortDescription ?></p>
                                            <a class="blog-btn" href="<?= base_url() ?>News-Details/<?= url_title($hard->HardwareTitle) ?>/<?= $hard->HardwareId ?>">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php
                        endforeach; ?>
                    </div>

               
                
          
        </div>
    </div>

</main>
<?php include('include/footer.php') ?>