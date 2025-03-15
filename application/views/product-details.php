<?php include('include/header.php') ?>


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url() ?>Products/<?= url_title($obj->CategoryTitle) ?>/<?= $obj->CategoryId ?>"><?= $obj->CategoryTitle ?></a></li>

                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><?= $obj->ProductTitle ?></li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <!-- Single Product Body -->
        <div class="mb-xl-14 mb-6">
            <div class="row">
                <div class="col-md-5 mb-4 mb-md-0">
                    <div id="sliderSyncingNav" class="js-slick-carousel u-slick mb-2" data-infinite="true" data-arrows-classes="d-none d-lg-inline-block u-slick__arrow-classic u-slick__arrow-centered--y rounded-circle" data-arrow-left-classes="fas fa-arrow-left u-slick__arrow-classic-inner u-slick__arrow-classic-inner--left ml-lg-2 ml-xl-4" data-arrow-right-classes="fas fa-arrow-right u-slick__arrow-classic-inner u-slick__arrow-classic-inner--right mr-lg-2 mr-xl-4" data-nav-for="#sliderSyncingThumb">


                        <div class="js-slide">
                            <img class="img-fluid img" src="<?= UP ?><?= $obj->Image ?>" alt="Image Description">
                        </div>

                        <?php $MoreImage = (array)json_decode($obj->MoreImage); ?>

                        <?php foreach ($MoreImage as $a => $ime) : ?>
                            <div class="js-slide">
                                <img class="img-fluid" src="<?= UP ?><?= $ime ?>" alt="Image Description">
                            </div>

                        <?php endforeach ?>


                    </div>

                    <div id="sliderSyncingThumb" class="js-slick-carousel u-slick u-slick--slider-syncing u-slick--slider-syncing-size u-slick--gutters-1 u-slick--transform-off" data-infinite="true" data-slides-show="5" data-is-thumbs="true" data-nav-for="#sliderSyncingNav">
                        <div class="js-slide">
                            <img class="img-fluid" src="<?= UP ?><?= $obj->Image ?>" alt="Image Description">
                        </div>

                        <?php $MoreImage = (array)json_decode($obj->MoreImage); ?>

                        <?php foreach ($MoreImage as $a => $ime) : ?>


                            <div class="js-slide" style="cursor: pointer;">
                                <img class="img-fluid" src="<?= UP ?><?= $ime ?>" alt="Image Description">
                            </div>

                        <?php endforeach ?>

                    </div>
                </div>
                <div class="col-md-7 mb-md-6 mb-lg-0">
                    <div class="mb-2">
                        <div class="border-bottom mb-3 pb-md-1 pb-3">
                            <a href="#" class="font-size-12 text-gray-5 mb-2 d-inline-block"><?= $obj->CategoryTitle ?></a>
                            <h2 class="font-size-25 text-lh-1dot2"><?= $obj->ProductTitle ?></h2>

                            <div class="d-md-flex align-items-center">
                                <!-- <a href="#" class="max-width-150 ml-n2 mb-2 mb-md-0 d-block"><img class="img-fluid" src="../../assets/img/200X60/img1.png" alt="Image Description"></a> -->
                                <div class=" text-gray-9 font-size-14">Availability:

                                    <?php

                                    if ($obj->stock > 0) : ?>
                                        <span class="text-green font-weight-bold"><?= $obj->stock ?> Available in Stock</span>
                                </div>


                            <?php else : ?>

                                <span class="text-red font-weight-bold">Out of Stock</span>
                            </div>


                        <?php endif; ?>

                        </div>
                    </div>
                    <div class="flex-horizontal-center flex-wrap mb-4">
                        <input type="text" class="clientId-take" value="<?php echo $this->session->userdata('clientId'); ?>" hidden>
                        <input type="text" class="ProName" value="<?= $obj->ProductTitle ?>" hidden>
                        <input type="text" class="ProPrice" value="<?= $obj->price ?>" hidden>
                        <input type="text" class="img_src" value="<?= $obj->Image ?>" hidden>






                        <p class="font-size-13 mb-0 text-gray-6 cursor-pointer-on" onclick="addtowishlist(<?= $obj->ProductId ?>)">
                            <i class="ec ec-printer mr-1 font-size-15"></i> Add to Quotation
                        </p>



                    </div>
                    <div class="mb-2">
                        <p><?= $obj->ShortDescription ?></p>
                    </div>

                    <p><strong>SKU</strong>: <?= $obj->sku ?></p>
                    <div class="mb-4">
                        <div class="d-flex align-items-baseline">
                            <ins class="font-size-36 text-decoration-none">LKR <?= $obj->price ?>.00</ins>
                            <?php

                            if (0 < $obj->oldprice) {
                            ?>

                                <del class="font-size-20 ml-2 text-gray-6">LKR
                                    <?php

                                    echo $obj->oldprice; ?>
                                    .00</del> <?php
                                            }

                                                ?>
                        </div>
                    </div>

                    <?php

                    if ($obj->stock > 0) : ?>

                        <form action="#" method="post">


                            <div class="border-top border-bottom py-3 mb-4">
                                <div class="d-flex align-items-center">
                                    <h6 class="font-size-14 mb-0">Color</h6>
                                    <!-- Select -->
                                    <select class="js-select selectpicker dropdown-select ml-3" data-style="btn-sm bg-white font-weight-normal py-2 border">
                                        <option value="one" selected>White with Gold</option>
                                        <option value="two">Red</option>
                                        <option value="three">Green</option>
                                        <option value="four">Blue</option>
                                    </select>
                                    <!-- End Select -->
                                </div>
                            </div>
                            <div class="d-md-flex align-items-end mb-3">
                                <div class="max-width-150 mb-4 mb-md-0">
                                    <h6 class="font-size-14">Quantity</h6>
                                    <!-- Quantity -->
                                    <div class="border rounded-pill py-2 px-3 border-color-1">
                                        <div class="js-quantity row align-items-center">
                                            <div class="col">
                                                <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none qty" type="text" value="1">
                                            </div>
                                            <div class="col-auto pr-1">
                                                <a class="js-minus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-minus btn-icon__inner"></small>
                                                </a>
                                                <a class="js-plus btn btn-icon btn-xs btn-outline-secondary rounded-circle border-0" href="javascript:;">
                                                    <small class="fas fa-plus btn-icon__inner"></small>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Quantity -->
                                </div>



                                <div class="ml-md-3">
                                    <form action="" method="post">
                                        <input type="number" class="CartProductId" value="46681323132" hidden>
                                        <button onclick="addtocart(<?= $obj->ProductId ?>);" type="button" class="btn px-5 btn-primary-dark transition-3d-hover"><i class="ec ec-add-to-cart mr-2 font-size-20"></i> Add to Cart</button>

                                    </form>
                                </div>
                            <?php endif; ?>
                            </div>
                        </form>
                </div>
            </div>
        </div>


        <!-- Single Product Tab -->
        <div class="mb-8">
            <div class="position-relative position-md-static px-md-6">
                <ul class="nav nav-classic nav-tab nav-tab-lg justify-content-xl-center flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble border-0 pb-1 pb-xl-0 mb-n1 mb-xl-0" id="pills-tab-8" role="tablist">

                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link active" id="Jpills-two-example1-tab" data-toggle="pill" href="#Jpills-two-example1" role="tab" aria-controls="Jpills-two-example1" aria-selected="true">Description</a>
                    </li>
                    <li class="nav-item flex-shrink-0 flex-xl-shrink-1 z-index-2">
                        <a class="nav-link" id="Jpills-three-example1-tab" data-toggle="pill" href="#Jpills-three-example1" role="tab" aria-controls="Jpills-three-example1" aria-selected="false">Specification</a>
                    </li>

                </ul>
            </div>
            <!-- Tab Content -->
            <div class="borders-radius-17 border p-4 mt-4 mt-md-0 px-lg-10 py-lg-9">
                <div class="tab-content" id="Jpills-tabContent">

                    <div class="tab-pane fade  active show" id="Jpills-two-example1" role="tabpanel" aria-labelledby="Jpills-two-example1-tab">
                        <div><?= $obj->Description ?></div>
                    </div>
                    <div class="tab-pane fade" id="Jpills-three-example1" role="tabpanel" aria-labelledby="Jpills-three-example1-tab">
                        <div class="mx-md-5 pt-1">
                            <div><?= $obj->Specification ?></div>

                        </div>
                    </div>

                </div>
            </div>
            <!-- End Tab Content -->
        </div>
        <!-- End Single Product Tab -->
        <!-- Related products -->
        <div class="mb-6">
            <div class="d-flex justify-content-between align-items-center border-bottom border-color-1 flex-lg-nowrap flex-wrap mb-4">
                <h3 class="section-title mb-0 pb-2 font-size-22">Related products</h3>
            </div>
            <ul class="row list-unstyled products-group no-gutters">

                <?php foreach ($related as $k => $roow) : ?>

                    <li class="col-6 col-md-3 col-xl-2gdot4-only col-wd-2 product-item">
                        <div class="product-item__outer h-100">
                            <div class="product-item__inner px-xl-4 p-3">
                                <div class="product-item__body pb-xl-2">
                                    <div class="mb-2"><a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" class="font-size-12 text-gray-5">Speakers</a></div>
                                    <h5 class="mb-1 product-item__title"><a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" class="text-blue font-weight-bold"><?= $obj->ProductTitle ?></a></h5>
                                    <div class="mb-2">
                                        <a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" class="d-block text-center"><img class="img-fluid" src="<?= UP ?><?= $roow->Image ?>" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                        <div class="prodcut-price">
                                            <div class="text-gray-100">LKR <?= $obj->price ?>.00</div>
                                        </div>
                                        <div class="d-none d-xl-block prodcut-add-cart">
                                            <a href="<?= base_url() ?>Products-Details/<?= url_title($roow->ProductTitle) ?>/<?= $roow->ProductId ?>" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </li>
                <?php endforeach ?>

            </ul>
        </div>
        <!-- End Related products -->
    </div>
    <!-- End Single Product Body -->
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->

<script>
    function addtocart(x) {

        var ProName = $('.ProName').val();
        var ProPrice = $('.ProPrice').val();
        var img = $('.img_src').val();
        var qty = $('.qty').val();
        var CartProductId = x;
        // var color = $('.clientId-take').val();
        // var CartProductId = x;
        // Let's edit the description!


        $.ajax({
            type: "POST",
            url: "<?= base_url('myaccount/gotocart'); ?>", // the method we are calling
            //    contentType: "application/json; charset=utf-8",
            data: {
                ProName: ProName,
                ProPrice: ProPrice,
                qty: qty,
                img: img,
                CartProductId: CartProductId,

            },
            dataType: "json",
            success: function(result) {

                Swal.fire({
                    position: 'top-end',
                    icon: 'success',
                    title: 'Item  has been Add to Quotation',
                    showConfirmButton: false,
                    timer: 1500
                })
                window.location.reload();


            },
            error: function(result) {
                window.location.reload();

            }
        });





    }
</script>





<?php include('include/footer.php') ?>