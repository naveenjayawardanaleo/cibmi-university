<?php $this->view('include/header.php'); ?>
<?php $this->view('include/top_bar.php'); ?>
<?php $this->view('include/side_bar.php'); ?>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Dashboard > Rearrange Polymer
                </h5>
            </div>
        </div>
    </div>

    <div class="d-flex flex-column-fluid">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 order-2 order-xxl-1">
                    <div class="card card-custom">
                        <div class="card-header">
                            <div class="card-title">
                                <h3 class="card-title text-Capitalize">
                                    Polymer Rearrange
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php $this->view('include/alert.php'); ?>

                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="card-box">
                                        <p id="status"></p>

                                        <input type="hidden" id="view" value="polymer" />
                                        <input type="hidden" id="id" value="PolymerId" />
                                        <input type="hidden" id="action" value="<?= base_url('admin/reorder/do_update') ?>" />

                                        <div class="row" id="sortable">
                                            <?php if (is_array($records)) :
                                                foreach ($records as $k => $row) : ?>
                                                    <div class="col-lg-6 col-sm-6 col-xs-6 col-md-6 col-xl-3" role="alert" style="cursor: move" id="conid_<?= $row->PolymerId ?>">
                                                        <div class="card card-custom">
                                                            <img src="<?= UP . $row->Image ?>" alt="<?= $row->Image ?>">
                                                        </div>
                                                        <div class="text-dark-75 font-weight-bolder font-size-h6 text-center"><?= $row->Order ?> <?= $row->PolymerTitle ?></div>
                                                    </div>
                                            <?php endforeach;
                                            endif; ?>
                                        </div>
                                    </div>
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
<script src="<?= base_url() ?>assets/admin/plugins/global/jquery/jquery.min.js"></script>
<script src="<?= base_url() ?>assets/admin/plugins/global/jquery-ui/jquery-ui.min.js"></script>
<script>
    $(function() {
        $("#sortable").sortable({
            opacity: 0.6,
            cursor: 'move',
            update: function() {
                var self = $(this);
                var result = confirm("Are you sure to re-arrange the record order ?");
                if (result == true) {
                    var table = $("#view").val();
                    var id = $("#id").val();
                    var path = $("#action").val();
                    var order = self.sortable("serialize") + '&table=' + table + '&id=' + id;
                    $.post(path, order, function(theResponse) {
                        $("#status").html("<div class='animated fadeIn text-center alert alert-success'>Re-arrange Success </div>");
                        location.reload()
                    });
                }
            }
        });
    });
</script>