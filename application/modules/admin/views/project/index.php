<?php $this->view('include/header.php'); ?>
<?php $this->view('include/top_bar.php'); ?>
<?php $this->view('include/side_bar.php'); ?>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Dashboard > Student List
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
                                    Student List
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
                                                <th>Student Id</th>

                                                <th>Student Name</th>
                                                <th>Membership</th>
                                                <th>Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php foreach ($records as $k => $row) : ?>
                                                <tr>
                                                    <td><?= $k + 1 ?></td>
                                                    <td>#00<?= $row->ClientsId ?> </td>
                                                    <td><?= $row->FirstName ?> <?= $row->LastName ?> </td>
                                                    <td>
                                                        <?php

                                                        if ($row->active == 1) {
                                                            echo "<h5><span class='badge badge-success'>Premium</span></h5>";
                                                        } else {
                                                            echo "<h5><span class='badge badge-warning'>Non Paid</span></h5>";
                                                        }
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <a type="button" href="<?= base_url() ?>Edit-Project/<?= $row->ClientsId ?>" class="btn btn-warning btn-sm mr-2">
                                                            Edit
                                                        </a>

                                                        <button type="button" onclick="delete_modal('<?= base_url() ?>Delete-Project/<?= $row->ClientsId ?>');" class="btn btn-danger btn-sm mr-2"><i class="fas fa-ban"></i>Delete</button>

                                                        <a type="button" href="https://wa.me/<?=  $row->MobileNumber ?>?text=Hello%20<?= $row->FirstName ?> <?= $row->LastName ?> " class="btn btn-success btn-sm mr-2" target="_blank"> 
                                                            Whatsapp
                                                        </a>
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>
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