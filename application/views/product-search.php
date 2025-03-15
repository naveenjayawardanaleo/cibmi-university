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
                  <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1"><a href="<?= base_url() ?>">Home -search</a></li>
                  <li class="breadcrumb-item flex-shrink-0 flex-xl-shrink-1 active" aria-current="page"><?= $cate_details->CategoryTitle ?></li>
               </ol>
            </nav>
         </div>
         <!-- End breadcrumb -->
      </div>
   </div>
   <!-- End breadcrumb -->

   <div class="container">
      <div class="row mb-8">
         <div class="d-none d-xl-block col-xl-3 col-wd-2gdot5">
            <div class="mb-6 border border-width-2 border-color-3 borders-radius-6">
               <!-- List -->
               <ul id="sidebarNav" class="list-unstyled mb-0 sidebar-navbar view-all">
                  <li>
                     <div class="dropdown-title">Browse Categories</div>
                  </li>
                  <?php
                  $x = 1;
                  foreach ($maincat as $k => $row) : ?>



                     <li>
                        <a class="dropdown-toggle dropdown-toggle-collapse" href="javascript:;" role="button" data-toggle="collapse" aria-expanded="false" aria-controls="sidebarNav<?php echo $x ?>Collapse" data-target="#sidebarNav<?php echo $x ?>Collapse">
                           <?= $row->MainCategoryTitle ?>
                        </a>

                        <div id="sidebarNav<?php echo $x ?>Collapse" class="collapse" data-parent="#sidebarNav">
                           <ul id="sidebarNav1" class="list-unstyled dropdown-list">
                              <?php foreach ($cat as $ks => $rows) : ?>

                                 <?php if ($row->MainCategoryId == $rows->MainCategoryId) { ?>
                                    <li><a class="dropdown-item" href="<?= base_url() ?>Products/<?= url_title($rows->CategoryTitle) ?>/<?= $rows->CategoryId ?>"><?= $rows->CategoryTitle ?></a></li>
                                 <?php } ?>
                              <?php endforeach; ?>
                           </ul>
                        </div>
                     </li>
                  <?php
                     $x++;
                  endforeach; ?>

               </ul>
               <!-- End List -->
            </div>


         </div>
         <div class="col-xl-9 col-wd-9gdot5">

            <!-- Shop-control-bar Title -->
            <div class="flex-center-between mb-3">
               <h3 class="font-size-25 mb-0"><?= $cate_details->CategoryTitle ?></h3>
            </div>
            <!-- End shop-control-bar Title -->
            <!-- Shop-control-bar -->
            <div class="bg-gray-1 flex-center-between borders-radius-9 py-3">
               <div class="d-xl-none">
                  <!-- Account Sidebar Toggle Button -->
                  <a id="sidebarNavToggler1" class="btn btn-sm py-1 font-weight-normal" href="javascript:;" role="button" aria-controls="sidebarContent1" aria-haspopup="true" aria-expanded="false" data-unfold-event="click" data-unfold-hide-on-scroll="false" data-unfold-target="#sidebarContent1" data-unfold-type="css-animation" data-unfold-animation-in="fadeInLeft" data-unfold-animation-out="fadeOutLeft" data-unfold-duration="500">
                     <i class="fas fa-sliders-h"></i> <span class="ml-1">Filters</span>
                  </a>
                  <!-- End Account Sidebar Toggle Button -->
               </div>
               <div class="px-3 d-none d-xl-block">
                  <ul class="nav nav-tab-shop" id="pills-tab" role="tablist">
                     <li class="nav-item">
                        <a class="nav-link active" id="pills-one-example1-tab" data-toggle="pill" href="#pills-one-example1" role="tab" aria-controls="pills-one-example1" aria-selected="false">
                           <div class="d-md-flex justify-content-md-center align-items-md-center">
                              <i class="fa fa-th"></i>
                           </div>
                        </a>
                     </li>

                     <li class="nav-item">
                        <a class="nav-link" id="pills-three-example1-tab" data-toggle="pill" href="#pills-three-example1" role="tab" aria-controls="pills-three-example1" aria-selected="true">
                           <div class="d-md-flex justify-content-md-center align-items-md-center">
                              <i class="fa fa-list"></i>
                           </div>
                        </a>
                     </li>

                  </ul>
               </div>
               <div class="d-flex">

               </div>
               <nav class="px-3 flex-horizontal-center text-gray-20 d-none d-xl-flex">
                  <p class="font-size-14 text-gray-90 mb-0">Showing 1–25 of 56 results</p>
               </nav>
            </div>
            <!-- End Shop-control-bar -->
            <!-- Shop Body -->
            <!-- Tab Content -->
            <div class="tab-content" id="pills-tabContent">
               <div class="tab-pane fade pt-2 show active" id="pills-one-example1" role="tabpanel" aria-labelledby="pills-one-example1-tab" data-target-group="groups">
                  <ul class="row list-unstyled products-group no-gutters">

                     <?php foreach ($product as $key => $row) : ?>

                        <li class="col-6 col-md-3 col-wd-2gdot4 product-item">
                           <div class="product-item__outer h-100">
                              <div class="product-item__inner px-xl-4 p-3">
                                 <div class="product-item__body pb-xl-2">

                                    <h5 class="mb-1 product-item__title"><a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="text-blue font-weight-bold"><?= $row->ProductTitle ?></a></h5>
                                    <div class="mb-2">
                                       <a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="d-block text-center"><img class="img-fluid" src="<?= base_url() ?>media/image/<?= $row->Image ?>" alt="Image Description"></a>
                                    </div>
                                    <div class="flex-center-between mb-1">
                                       <div class="prodcut-price">
                                          <div class="text-gray-100">LKR <?= $row->price ?>.00</div>
                                       </div>
                                       <div class="d-none d-xl-block prodcut-add-cart">
                                          <a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="btn-add-cart btn-primary transition-3d-hover"><i class="ec ec-add-to-cart"></i></a>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="product-item__footer">
                                    <div class="border-top pt-2 flex-center-between flex-wrap">
                                       <a href="#" class="text-gray-6 font-size-13"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                       <a href="#" class="text-gray-6 font-size-13"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     <?php endforeach; ?>

                  </ul>
               </div>

               <div class="tab-pane fade pt-2" id="pills-three-example1" role="tabpanel" aria-labelledby="pills-three-example1-tab" data-target-group="groups">
                  <ul class="d-block list-unstyled products-group prodcut-list-view">

                     <?php foreach ($product as $key => $row) : ?>

                        <li class="product-item remove-divider">
                           <div class="product-item__outer w-100">
                              <div class="product-item__inner remove-prodcut-hover py-4 row">
                                 <div class="product-item__header col-6 col-md-4">
                                    <div class="mb-2">
                                       <a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="d-block text-center"><img class="img-fluid" src="<?= base_url() ?>media/image/<?= $row->Image ?>" alt="Image Description"></a>
                                    </div>
                                 </div>
                                 <div class="product-item__body col-6 col-md-5">
                                    <div class="pr-lg-10">
                                       <div class="mb-2"><a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="font-size-12 text-gray-5">Speakerssssssss</a></div>
                                       <h5 class="mb-2 product-item__title"><a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="text-blue font-weight-bold"><?= $row->ProductTitle ?></a></h5>
                                       <div class="prodcut-price mb-2 d-md-none">
                                          <div class="text-gray-100">LKR <?= $row->price ?>.00</div>
                                       </div>

                                       <p><?= $row->ShortDescription ?></p>
                                    </div>
                                 </div>
                                 <div class="product-item__footer col-md-3 d-md-block">
                                    <div class="mb-3">
                                       <div class="prodcut-price mb-2">
                                          <div class="text-gray-100">LKR <?= $row->price ?>.00</div>
                                       </div>
                                       <div class="prodcut-add-cart">
                                          <a href="<?= base_url() ?>Products-Details/<?= url_title($row->ProductTitle) ?>/<?= $row->ProductId ?>" class="btn btn-sm btn-block btn-primary-dark btn-wide transition-3d-hover">Add to cart</a>
                                       </div>
                                    </div>
                                    <div class="flex-horizontal-center justify-content-between justify-content-wd-center flex-wrap">
                                       <a href="#" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-compare mr-1 font-size-15"></i> Compare</a>
                                       <a href="#" class="text-gray-6 font-size-13 mx-wd-3"><i class="ec ec-favorites mr-1 font-size-15"></i> Wishlist</a>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </li>
                     <?php endforeach; ?>


                  </ul>
               </div>

            </div>
            <!-- End Tab Content -->
            <!-- End Shop Body -->
            <!-- Shop Pagination -->
            <nav class="d-md-flex justify-content-between align-items-center border-top pt-3" aria-label="Page navigation example">
               <div class="text-center text-md-left mb-3 mb-md-0">Showing 1–25 of 56 results</div>
               <ul class="pagination mb-0 pagination-shop justify-content-center justify-content-md-start">
                  <li class="page-item"><a class="page-link current" href="#">1</a></li>
                  <li class="page-item"><a class="page-link" href="#">2</a></li>
                  <li class="page-item"><a class="page-link" href="#">3</a></li>
               </ul>
            </nav>
            <!-- End Shop Pagination -->
         </div>
      </div>

   </div>
</main>
<!-- ========== END MAIN CONTENT ========== -->



<?php include('include/footer.php') ?>