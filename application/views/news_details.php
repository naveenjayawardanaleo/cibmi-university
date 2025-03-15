<?php include('include/header.php') ?>
<main>
    <!-- hero-area-start -->
    <div class="hero-arera course-item-height">
        <div class="container">
            <div class="row">
                <div class="col-xl-12">
                    <div class="hero-course-1-text">
                        <h2 class="fs-2"><?= $record->HardwareTitle ?></h2>
                    </div>
                    <div class="course-title-breadcrumb">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                                <li class="breadcrumb-item"><span><?= $record->HardwareTitle ?></span></li>
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

                <div class="col-xl-8 col-lg-12">
                    <div class="blog-main-wrapper mb-0">
                        <div class="row">
                            <div class="col-xl-12 col-lg-12 col-md-12">
                                <div class="blog-wrapper position-relative blog-details-wrapper mb-30">
                                    <div class="blog-thumb ">
                                        <img src="<?= base_url() ?>media/image/<?= $record->Image ?>" alt="blog-img">
                                    </div>

                                    <div class="blog-content-wrapper">

                                        <div class="blog-content">

                                            <h4 class="mb-20"><?= $record->HardwareTitle ?></h4>
                                            <?= $record->Description ?>

                                        </div>
                                        <div class="row">
                                            <?php $MoreImage = (array)json_decode($record->MoreImage); ?>

                                            <?php foreach ($MoreImage as $a => $ime) : ?>

                                                <div class="col-md-6">
                                                    <img class="img-fluid  mb-20" src="<?= UP ?><?= $ime ?>" alt="Image Description">
                                                </div>
                                            <?php endforeach ?>



                                        </div>
                                    </div>


                                </div>

                            </div>
                        </div>

                    </div>

                </div>
                <div class="col-xl-4 col-lg-8 col-md-8">
                    <div class="sidebar-widget-wrapper">

                        <div class="sidebar__widget mb-30">
                            <div class="sidebar__widget-head mb-35">
                                <h4 class="sidebar__widget-title">Recent posts</h4>
                            </div>
                            <div class="sidebar__widget-content">
                                <div class="rc__post-wrapper">

                                    <?php
                                    foreach ($recent as $hard) : ?>
                                        <div class="rc__post d-flex align-items-center">
                                            <div class="rc__thumb mr-20">
                                                <a href="<?= base_url() ?>News-Details/<?= url_title($hard->HardwareTitle) ?>/<?= $hard->HardwareId ?>"><img src="<?= base_url() ?>media/image/<?= $hard->Image ?>" alt=""></a>
                                            </div>
                                            <div class="rc__content">
                                              
                                                <h6 class="rc__title"><a href="<?= base_url() ?>News-Details/<?= url_title($hard->HardwareTitle) ?>/<?= $hard->HardwareId ?>"><?= $hard->HardwareTitle ?></a></h6>
                                            </div>
                                        </div>
                                    <?php
                                    endforeach; ?>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

</main>


<?php include('include/footer.php') ?>