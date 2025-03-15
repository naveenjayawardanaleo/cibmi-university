<?php include('include/header.php') ?>


<!-- ========== MAIN CONTENT ========== -->
<main id="content" role="main" class="cart-page">
    <!-- breadcrumb -->
    <div class="bg-gray-13 bg-md-transparent">
        <div class="container">
            <!-- breadcrumb -->
            <div class="my-md-3">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb mb-3 flex-nowrap flex-xl-wrap overflow-auto overflow-xl-visble">
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url() ?>">Home</a></li>
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">Get A Quotation</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->

    <div class="container">
        <div class="my-6">
            <h1 class="text-center">Get A Quotation</h1>
        </div>
        <div class="mb-16 wishlist-table">
            <form class="mb-4" action="#" method="post">
                <div class="table-responsive">
                    <table class="table" cellspacing="0">
                        <thead>
                            <tr>
                                <th class="product-remove">&nbsp;</th>
                                <th class="product-thumbnail font-size-15 font-weight-bold fw-bold text-black">Product</th>
                                <th class="product-name font-size-15 font-weight-bold fw-bold  text-black">Description</th>
                                <th class="product-subtotal min-width-200-md-lg font-size-15 font-weight-bold fw-bold  text-black">Price</th>
                            </tr>
                        </thead>
                        <tbody id="quotation_table_body">

                            <?php
                            $sum = 0;
                            foreach ($products as $pro) : ?>

                                <?php $quotationId = $pro->QuoId; ?>
                                <tr>
                                    <td class="text-center">
                                        <button onclick="removefromquotation(<?= $quotationId ?>)" type="button" class="bg-white border-0 text-gray-32 font-size-26">×</button>
                                    </td>


                                    <td class="d-none d-md-table-cell">
                                        <a href="#"><img class="img-fluid max-width-100 p-1 border border-color-1" src="<?= base_url() ?>media/image/<?= $pro->Image ?>" alt="Image Description"></a>
                                    </td>

                                    <td data-title="Product">
                                        <a href="#" class="text-gray-90"><?= $pro->ProductTitle ?></a>
                                        <p>SKU : <?= $pro->sku ?></p>

                                    </td>


                                    <td class="text-right">
                                        <span class="text-nowrap">LKR <?= $pro->price ?>.00</span>
                                    </td>

                                </tr>
                            <?php

                                $sum += $pro->price;
                            endforeach; ?>
                            <tr>
                                <td class="text-center text-nowrap">
                                    <span><b>Total Cost :</b> </span>
                                </td>
                                <td class="d-none d-md-table-cell">

                                </td>

                                <td data-title="Product">

                                </td>
                                <td class="text-right">
                                    <span class="">LKR <?= $sum; ?>.00 </span>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
            <div class="row">
                <div class="col-md-12 text-center">
                    <button class="btn btn-primary text-white" onclick="window.print();"><i class="ec ec-printer"></i> Download Quotation</button>
                </div>
            </div>
        </div>
    </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->
<script>
    function removefromquotation(x) {

        Swal.fire({
            title: 'Are you sure?',
            // text: "Do you need to delete Item  from Quotation.",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, remove it!'
        }).then((result) => {
            if (result.isConfirmed) {
                
                var QuoId = x;
                $.ajax({
                    type: "POST",
                    url: "<?= base_url('myaccount/remove_data_quotation_list'); ?>",

                    data: {
                        QuoId: QuoId,
                    },
                    dataType: "json",
                    success: function(result) {
                        alert('Item Add to Get A Quotation');

                    },
                    error: function(result) {
                        window.location.reload();
                    }
                });
            }
        })



        // var QuoId = x;
        // $.ajax({
        //     type: "POST",
        //     url: "< ?= base_url('myaccount/remove_data_quotation_list'); ?>",

        //     data: {
        //         QuoId: QuoId,
        //     },
        //     dataType: "json",
        //     success: function(result) {
        //         alert('Item Add to Get A Quotation');

        //     },
        //     error: function(result) {

        //         // Swal.fire({
        //         //     position: 'top-end',
        //         //     icon: 'success',
        //         //     title: 'Your work has been saved',
        //         //     showConfirmButton: false,
        //         //     timer: 1500
        //         // })
        //         window.location.reload();

        //     }
        // });
    }
</script>

<?php include('include/footer.php') ?>