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
                        <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page">My Account</li>
                    </ol>
                </nav>
            </div>
            <!-- End breadcrumb -->
        </div>
    </div>
    <!-- End breadcrumb -->
    <div class="container">
        <!-- End Accordion -->
        <form class="js-validate" novalidate="novalidate">
            <div class="row mb-8">

                <div class="col-md-4">
                    <div class="list-group text-uppercase" id="list-tab" role="tablist">
                        <a class="list-group-item list-group-item-action  py-3" href="<?= base_url() ?>My-Account">
                            <i class="fas fa-tachometer-alt"></i>&nbsp; Dashboard</a>

                        <a class="list-group-item list-group-item-action py-3 active" href="<?= base_url() ?>My-Orders">
                            <i class="fa fa-cart-arrow-down"></i>&nbsp; Orders</a>


                        <a class="list-group-item list-group-item-action  py-3" href="<?= base_url() ?>Edit-Account">
                            <i class="fa fa-user"></i>&nbsp; Account details</a>

                        <a class="list-group-item list-group-item-action list-group-item-logout py-3" href="<?= base_url() ?>myaccount/logout">
                            <i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a>
                    </div>
                </div>
                <div class="col-md-8">
                    <h3 class="page-heading">
                        <span class="">Orders</span>
                    </h3>
                    <table class="table table-bordered table-wishlist">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Order No</th>
                                <th>Price</th>
                                <th>Details</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $k => $bra) : ?>

                                <tr>
                                    <td>
                                        1 </td>
                                    <td>
                                        <a href="#">
                                            #1616149002 </a>
                                    </td>
                                    <td>
                                        <?= $bra->price ?> </td>
                                    <td>
                                        Order Date:2021-03-19 15:46:42 </td>
                                    <td>
                                        Cancelled
                                    </td>
                                </tr>
                            <?php endforeach ?>

                        </tbody>
                    </table>
                </div>
            </div>
        </form>
    </div>

</main>
<!-- ========== END MAIN CONTENT ========== -->

<?php include('include/footer.php') ?>