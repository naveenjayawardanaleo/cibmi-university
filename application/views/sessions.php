<?php include('include/header.php') ?>
<style>
    @media only screen and (max-width: 600px) {
        .table-responssive {
            width: 100%;
            overflow-x: auto
        }

        #kt_datatable_wrapper .col-sm-12{
            width: 100%;
            overflow-x: auto
        }


    }
</style>
<div class="hero-arera course-item-height">

    <div class="container">

        <div class="row">

            <div class="col-xl-12">

                <div class="hero-course-1-text">

                    <h2>Sessions</h2>

                </div>

                <div class="course-title-breadcrumb">

                    <nav>

                        <ol class="breadcrumb">

                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>

                            <li class="breadcrumb-item active" aria-current="page">Sessions</li>

                        </ol>

                    </nav>

                </div>

            </div>

        </div>

    </div>

</div>

<div class="course-details-area pt-120 pb-100">

    <div class="container">

        <div class="row">

            <div class="col-xl-3 col-lg-4">

                <div class="student-profile-sidebar mb-30">

                    <ul class="nav nav-tabs">

                        <li class="nav-item">

                            <a class="nav-link " href="<?= base_url() ?>My-Account"><i class="fas fa-tachometer-alt"></i> Dashboard</a>

                        </li>

                        <li class="nav-item ">

                            <a class="nav-link active" href="<?= base_url() ?>Sessions"><i class="fas fa-graduation-cap"></i> Sessions</a>

                        </li>

                        <li class="nav-item">

                            <a class="nav-link " href="<?= base_url() ?>Edit-Account"><i class="fas fa-user"></i> Account Details</a>

                        </li>

                        <li class="nav-item" role="presentation">

                            <a class="nav-link " href="<?= base_url() ?>myaccount/logout">

                                <i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a>

                        </li>

                    </ul>

                </div>

            </div>

            <div class="col-xl-9 col-lg-8">

                <?php

                if ($user['active'] === '1') {

                    echo '

                    <h4 class="mb-25 mt-25">Sessions</h4>

                    ';
                } else {

                    echo '<div class="alert alert-danger" role="alert">

                            <b>Attention! </b> Please Make a Payment for Access All the Sessions.

                        </div>';
                }

                ?>

                <table id="kt_datatable" class="table table-hover ">

                    <thead>

                        <tr>

                            <th>#</th>

                            <th>Title</th>

                            <th>Zoom Link</th>

                            <th>Zoom Password</th>

                            <th>Presentation File</th>

                        </tr>

                    </thead>

                    <tbody>

                        <?php

                        if ($user['active'] === '1')

                            foreach ($partners as $k => $row) : ?>

                            <tr>

                                <td><?= $k + 1 ?></td>

                                <td><?= $row->PartnerTitle ?></td>

                                <td>

                                    <a class="edu-btn" href="<?= $row->zoomlink ?>" target="_blank">Zoom Link</a>

                                </td>

                                <td><?= $row->password ?></td>

                                <td>

                                    <a href="<?php base_url() ?>media/doc/<?= $row->Document ?>" download><?= $row->Document ?></a>

                                    <!-- <div>

                                        <img style="height: 50px;" src="<?= UP . $row->Document ?>">

                                    </div> -->

                                </td>

                            </tr>

                        <?php endforeach; ?>

                        <? ?>

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</div>

<?php include('include/footer.php') ?>

<!--begin::Page Vendors(used by this page)-->

<script src="<?= base_url() ?>assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/gmaps/gmaps.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/datatables/datatables.bundle.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/js/pages/crud/forms/widgets/select2.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.js?v=7.0.6"></script>

<!--end::Page Vendors-->

<!--begin::Page Scripts(used by this page)-->

<script src="<?= base_url() ?>assets/admin/js/pages/widgets.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/js/pages/custom/chat/chat.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/sweetalert2/dist/sweetalert2.all.min.js"></script>

<!-- <script src="<?= base_url() ?>assets/admin/js/pages/crud/forms/widgets/bootstrap-datetimepicker.js?v=7.0.6"></script> -->

<script src="<?= base_url() ?>assets/admin/js/pages/crud/forms/widgets/bootstrap-datepicker.js?v=7.0.6"></script>

<script src="<?= base_url() ?>assets/admin/js/pages/crud/forms/widgets/bootstrap-timepicker.js?v=7.0.6"></script>

<!--end::Page Scripts-->

<!--begin::File Upload Scripts-->

<script src="<?= base_url() ?>assets/admin/plugins/global/jquery-ui/jquery.ui.widget.min.js"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/jQuery-File-Upload/js/jquery.fileupload.js"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/jQuery-File-Upload/js/jquery.iframe-transport.js"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/jQuery-File-Upload/js/extras/load-image.min.js"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/jQuery-File-Upload/js/jquery.fileupload-process.js"></script>

<script src="<?= base_url() ?>assets/admin/plugins/custom/jQuery-File-Upload/js/jquery.fileupload-image.js"></script>

<!--end::File Upload Scripts-->

<!--begin::Multi Select Scripts-->

<script type="text/javascript" src="<?= base_url() ?>assets/admin/plugins/custom/multi-select/js/jquery.multi-select.js"></script>

<script type="text/javascript" src="<?= base_url() ?>assets/admin/plugins/custom/jquery-quicksearch/jquery.quicksearch.js"></script>

<!--begin::Page Scripts(used by this page)-->
<script src="<?= base_url() ?>assets/js/pages/crud/datatables/extensions/responsive.js?v=7.2.9"></script>
<script>
    var KTPlugins = function() {

        var initTable = function() {

            var table = $('#kt_datatable');

            table.DataTable();



        };

        var initNote = function() {

            $('#kt_summernote_1').summernote({

                height: 350,

                maximumImageFileSize: 200 * 1024,

            });

        }

        return {

            init: function() {

                initTable();

                initNote();

            },

        };

    }();

    jQuery(document).ready(function() {

        KTPlugins.init();

    });
</script>