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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Cart</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <div class="mb-4">
            <h1 class="text-center">Cart</h1>
        </div>
        <div class="mb-10 ">
            <table class="table table-bordered d-lg-table table-responsive text-center cart_summary first-table w-100" cellspacing="0">
                <thead>
                    <tr>
                        <th class="product-name bg-black text-white fw-bold text-center py-3 px-5">Action</th>
                        <th class="product-Description bg-black text-white fw-bold text-center py-3 px-5">Product</th>
                        <th class="product-price bg-black text-white fw-bold text-center py-3 px-5">Description</th>
                        <th class="product-Quantity bg-black text-white fw-bold text-center py-3 px-5">Price</th>
                        <th class="product-action bg-black text-white fw-bold text-center py-3 px-5 w-15">Quantity</th>
                        <th class="product-subtotal bg-black text-white fw-bold text-center py-3 px-5">Subtotal</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($this->cart->contents() as $items) : ?>



                        <tr class="">
                            <td class="text-center py-3 px-5">

                                <input type="text" class="rowid" value="<?= $items['rowid']; ?>" hidden>


                                <button onclick="deletefromcart(<?= $items['id']; ?>)" class="text-gray-32 font-size-26 bg-white border-0 ">×</button>
                            </td>
                            <td class="d-none d-md-table-cell py-3 px-5">
                                <a href="#">


                                    <img class="img-fluid max-width-100 p-1 border border-color-1" src="<?= UP ?><?= $items['img']; ?>" alt="Image Description">


                                </a>
                            </td>

                            <td data-title="Product py-3 px-5 d-flex align-items-center">
                                <div>
                                    <a href="#" class="text-gray-90"><?php echo $items['name']; ?></a>

                                </div>
                            </td>

                            <td data-title="Price py-3 px-5">
                                <span class="">LKR <?php echo $items['price']; ?>.00</span>
                            </td>

                            <td data-title="Quantity py-3 px-5">
                                <span class="sr-only">Quantity</span>
                                <!-- Quantity -->
                                <div class="border rounded-pill py-1 width-122 w-xl-80 px-3 border-color-1">
                                    <div class="js-quantity row align-items-center">
                                        <div class="col">
                                            <input class="js-result form-control h-auto border-0 rounded p-0 shadow-none" type="text" value="<?php echo $items['qty']; ?>">
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
                            </td>

                            <td data-title="Total" class="text-right py-3 ">
                                <span class="">LKR <?php echo $items['subtotal']; ?>.00</span>
                            </td>
                        </tr>
                        <?php $i++; ?>

                    <?php endforeach; ?>
                    <tr>
                        <td colspan="3" class="border-total">
                        </td>
                        <td colspan="2" class="text-right font-weight-bold">
                            <span class="">Total</span>
                        </td>
                        <td colspan="1" class="text-right font-weight-bold">
                            <span class="">LKR <?php echo $items['subtotal']; ?>.00</span>
                        </td>
                    </tr>

                </tbody>
            </table>
            <div class="row">
                <div class="col-md-8">
                    <div class="mb-3 mb-md-0 w-xl-40">
                        <!-- Apply coupon Form -->

                        <label class="sr-only" for="subscribeSrEmailExample1">Coupon code</label>
                        <div class="input-group">
                            <input type="text" class="form-control" name="text" id="subscribeSrEmailExample1" placeholder="Coupon code" aria-label="Coupon code" aria-describedby="subscribeButtonExample2" required="">
                            <div class="input-group-append">
                                <button class="btn btn-block btn-dark px-4" type="button" id="subscribeButtonExample2"><i class="fas fa-tags d-md-none"></i><span class="d-none d-md-inline">Apply coupon</span></button>
                            </div>
                        </div>

                        <!-- End Apply coupon Form -->
                    </div>
                </div>
                <div class="col-md-4 text-right">
                    <a href="<?= base_url() ?>Checkout" class="btn btn-primary-dark-w ml-md-2 px-5 px-md-4 px-lg-5 w-100 w-md-auto d-none d-md-inline-block text-white">Proceed to checkout</a>
                </div>
            </div>



        </div>

    </div>

</main>
<!-- ========== END MAIN CONTENT ========== -->

<!-- <script src="<?= base_url() ?>assets/js/components/hs.quantity-counter.js"></script> -->

<script>

</script>

<?php include('include/footer.php') ?>