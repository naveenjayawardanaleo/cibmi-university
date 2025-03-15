<?php include('include/header.php') ?>

<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
<style>
    .gallery-nav ul {

        display: flex;
        list-style: none;
        border-top: 2px solid #555555;
        border-bottom: 2px solid #555555;
        background-color: #101010;
        justify-content: center;
        color: white;
        margin: 0px;
    }

    .col-md-25 {
        width: 20%;
    }

    .gallery-nav ul li {

        padding: 20px 20px;

    }



    .gallery-nav ul li:hover {

        background-color: white;

        color: black;

        cursor: pointer;

    }



    .gallery-active {

        background-color: white;

        color: black;

        cursor: pointer;

    }

    .hide {

        display: none;

    }

    .item-gallery a {
        width: 100%;
    }
    .item-gallery{
        padding: 10px 0px ;
    }
</style>
<main>
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="banner-content">
                <h3>Gallery</h3>
            </div>
            <ol class="breadcrumb">
                <li><a href="<?= base_url() ?>" title="Home">Home</a></li>
                <li class="active">Gallery</li>
            </ol>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->
    <div class="container">
        <div class="section-header">
            <h3>Ray Expo Gallery</h3>
            <img src="<?= base_url() ?>assets/images/section-seprator.png" alt="section-seprator" />
        </div><!-- Section Header /- -->

    </div>
    <div class="breadcrumb-area section-space--breadcrumb">

        <div class="contact-icon-text-area section-space">
            <div class="container-fluid" style="background-color: #101010;">



                <div class="row">
                    <div class="col-lg-12">


                        <div class="gallery-nav">

                            <ul>

                                <li class="all" onclick="gallery('all')" value="all">All</li>

                                <?php foreach ($records as $k => $roo) : ?>

                                    <li class="all" onclick="gallery(<?= $roo->GalleryId ?>)" value="all"><?= $roo->GalleryTitle ?></li>

                                <?php endforeach ?>





                            </ul>

                        </div>

                    </div>

                </div>
            </div>
            <div class="container-fluid" style="background-color: #;">




                <div id="allall" class="row All roooooo gallery_new ">

                    <?php $tot = 0; ?>

                    <?php foreach ($records as $k => $row) : ?>

                        <!-- <div class="col-md-25 pr-0 pl-0">

                        <div class="item-gallery">

                            <a data-fancybox="gallery" href="<?= base_url() ?>assets/html/img/g1.png">

                                <img src="<?= base_url() ?>assets/html/img/g1.png" class="gallery">

                            </a>

                        </div>

                    </div> -->



                        <?php $MoreImage = (array)json_decode($row->MoreImage); ?>

                        <?php $ttt = 1 ?>

                        <?php foreach ($MoreImage as $no => $ooo) : ?>

                            <?php if ($tot < 16) : ?>



                                <div class="col-md-2 ">

                                    <div class="item-gallery">

                                        <a data-fancybox="gallery" href="<?= UP ?><?= $ooo ?>">

                                            <img src="<?= UP ?><?= $ooo ?>" class="gallery w-100">

                                        </a>

                                    </div>

                                </div>

                            <?php endif ?>



                            <?php $ttt = $ttt + 1; ?>

                        <?php endforeach ?>

                        <?php $tot = $tot + $ttt ?>

                    <?php endforeach ?>









                </div>

                <?php foreach ($records as $k => $row) : ?>

                    <?php $MoreImage = (array)json_decode($row->MoreImage); ?>



                    <div style="display: none;" id="all<?= $row->GalleryId ?>" class="row roooooo Gampaha gallery_new ">

                        <?php foreach ($MoreImage as $no => $ooo) : ?>

                            <div class="col-md-2  ">

                                <div class="item-gallery">

                                    <a data-fancybox="gallery" href="<?= UP ?><?= $ooo ?>">

                                        <img src="<?= UP ?><?= $ooo ?>" class="gallery  w-100">

                                    </a>

                                </div>

                            </div>

                        <?php endforeach ?>

                    </div>



                <?php endforeach ?>

                <!-- <div class="row srilanka gallery_new hide">

                    <div class="col-md-25 pr-0 pl-0">

                        <div class="item-gallery">

                            <a data-fancybox="gallery" href="<?= base_url() ?>assets/html/img/g1.png">

                                <img src="<?= base_url() ?>assets/html/img/g1.png" class="gallery">

                            </a>

                        </div>

                    </div>

                    

                </div>

                <div class="row India gallery_new hide">

                    <div class="col-md-25 pr-0 pl-0">

                        <div class="item-gallery">

                            <a data-fancybox="gallery" href="<?= base_url() ?>assets/html/img/g1.png">

                                <img src="<?= base_url() ?>assets/html/img/g1.png" class="gallery">

                            </a>

                        </div>

                    </div>

                    

                </div> -->

            </div>



            </section>

        </div>

        <!-- /boldthemes_content -->



    </div>

    <!-- /contentHolder -->

    </div>

    <?php include('include/footer.php') ?>
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>
    <script>
        function gallery(id) {

            $('.roooooo').css('display', 'none');

            $('#all' + id).css('display', 'block');

        }
    </script>

    <script>
        $('.test-popup-link').magnificPopup({
            items: {
                src: 'images/certificate/certificate-1.jpg'
            },
            type: 'image'
            // other options
        });
    </script>