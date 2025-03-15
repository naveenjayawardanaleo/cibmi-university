<?php $this->view('include/header.php'); ?>
<?php $this->view('include/top_bar.php'); ?>
<?php $this->view('include/side_bar.php'); ?>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Dashboard > Pages
                </h5>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">
        <div class=" container ">
            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-title text-Capitalize">
                                    Page List
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php $this->view('include/alert.php'); ?>
                            <div class="row">
                                <div class="col-md-12">
                                    <table id="kt_datatable" class="table table-hover">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Category Title</th>
                                                <!-- <th>Image</th> -->
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>

                                            <tr>
                                                <td>1</td>
                                                <td>Home Page</td>
                                                <!-- <td>
                                                        <div>
                                                            <img style="height: 50px;" src="<?= UP . $row->Image ?>">
                                                        </div>
                                                    </td> -->
                                                <td>
                                                    <!-- <a type="button" href="<?= base_url() ?>admin/Edit-page/1" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a> -->

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>2</td>
                                                <td>About</td>
                                                <!-- <td>
                                                        <div>
                                                            <img style="height: 50px;" src="<?= UP . $row->Image ?>">
                                                        </div>
                                                    </td> -->
                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/2" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>3</td>
                                                <td>About 2</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/3" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>4</td>
                                                <td>Delivery Information </td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/4" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>5</td>
                                                <td>Privacy Policy</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/5" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>

                                            <tr>
                                                <td>6</td>
                                                <td>Terms & Condition</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/6" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <!-- <tr>
                                                <td>7</td>
                                                <td>Our Vision</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/7" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>8</td>
                                                <td>Our Mission</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/10" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr> -->
                                            <tr>
                                                <td>9</td>
                                                <td>Our Story</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/11" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>10</td>
                                                <td>Home Page Advertistment 1</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/12" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                            <tr>
                                                <td>11</td>
                                                <td>OHome Page Advertistment 2</td>

                                                <td>
                                                    <a type="button" href="<?= base_url() ?>admin/Edit-page/13" class="btn btn-warning btn-sm mr-2">
                                                        Edit
                                                    </a>

                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--end::Content-->
<?php $this->view('include/page_footer.php'); ?>
<?php $this->view('include/footer.php'); ?>