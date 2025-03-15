<?php $this->view('include/header.php'); ?>
<?php $this->view('include/top_bar.php'); ?>
<?php $this->view('include/side_bar.php'); ?>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Dashboard > Pantry Documents
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
                                    <?= $obj->PantryTitle ?>
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php $this->view('include/alert.php'); ?>
                            <div class="row">
                                <!--<div class="col-md-4">-->
                                <!--    <img style="width: 100%; border-radius: 10px;" class="mb-5" src="<?= UP . $obj->Image ?>">-->
                                <!--</div>-->
                                <div class="col-md-12">
                                    <?php foreach ($documents as $k => $row) : ?>
                                        <div class="row mb-3 ">
                                            <div class="col-md-1">
                                                <?= $k + 1 ?>
                                            </div>
                                            <div class="col-md-4">
                                                <input type="text" value="<?= $row->DocTitle ?>" class="form-control" readonly>
                                            </div>
                                            <div class="col-md-3 text-center">
                                                <img class="w-50" src="<?= DOC . $row->Image ?>">
                                            </div>
                                            <div class="col-md-2">
                                                <a href="<?= DOC . $row->Document ?>" class="btn btn-dark btn-block" download>Download</a>
                                            </div>
                                            <div class="col-md-2">
                                                <a onclick="edit_row(<?= $row->DocId ?>)" class="edit-button-<?= $row->DocId ?> btn btn-primary btn-sm"><i class="fas fa-edit"></i></a>
                                                <button type="button" onclick="delete_modal('<?= base_url() ?>Delete-Pantry-Document/<?= $obj->PantryId ?>/<?= $row->DocId ?>');" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></button>
                                            </div>
                                        </div>
                                        <div class="append-<?= $row->DocId ?> mb-5"></div>
                                    <?php endforeach; ?>
                                    <form action="<?= base_url() ?>admin/Pantry/docform/<?= $obj->PantryId ?>" method="post" enctype="multipart/form-data">
                                        <div class="row">
                                            <div class="col-md-5 mt-8">
                                                <input type="text" placeholder="Doc Title" class="form-control" name="form[DocTitle]" required>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Document</label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="doc" accept=".pdf" required>
                                                    <label class="custom-file-label" for="customFile">Choose Document</label>
                                                </div>
                                            </div>
                                            <div class="col-md-3">
                                                <label>Image <small>360px * 260px</small></label>
                                                <div class="custom-file">
                                                    <input type="file" class="custom-file-input" name="img" accept="image/x-png, image/gif, image/jpeg" required>
                                                    <label class="custom-file-label" for="customFile">Choose Image</label>
                                                </div>
                                            </div>
                                            <div class="col-md-1">
                                                <button type="submit" class="btn btn-dark btn-sm"><i class="fas fa-upload"></i></button>
                                            </div>
                                        </div>
                                    </form>
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
<script>
    function edit_row(DocId) {
        var app_div = "append-" + DocId;
        var app_btn = "edit-button-" + DocId;
        var solution_id = <?= $obj->PantryId ?>;
        $("."+app_btn).hide();
        $.ajax({
            type: 'ajax',
            method: 'POST',
            url: "<?= base_url(); ?>admin/Pantry/get_document",
            data: {
                DocId: DocId,
            },
            dataType: 'json',
            success: function(data) {
                var html = "";
                $("."+app_div).empty();
                html += "<form action=\"<?= base_url() ?>admin/Pantry/editdoc\/" + data['details'].DocId +"/" + solution_id + "\"  method=\"post\" enctype=\"multipart/form-data\">";
                html +="<div class=\"row\">";
                html +="<div class=\"col-md-1\"></div>";
                html +="<div class=\"col-md-4\">";                              
                html +="<input type=\"text\" placeholder=\"Doc Title\" class=\"form-control\" name=\"form[DocTitle]\" value=" + data['details'].DocTitle +" required>";                                 
                html +="</div>";                             
                html +="<div class=\"col-md-3\">";                             
                html +="<div class=\"custom-file\">";                                 
                html +="<input type=\"file\" class=\"custom-file-input\" name=\"doc\" accept=\".pdf\" value=" + data['details'].Document +">";
                html +="<input type=\"hidden\" name=\"form[Document]\" value=" + data['details'].Document +">"; 
                html +="<label class=\"custom-file-label\" for=\"customFile\">Choose Document</label>";
                html +="</div>";                                 
                html +="</div>";                             
                html +="<div class=\"col-md-3\">";                             
                html +="<div class=\"custom-file\">";                                 
                html +="<input type=\"file\" class=\"custom-file-input\" name=\"img\" accept=\"image/x-png, image/gif, image/jpeg\" value=" + data['details'].Image +">";
                html +="<input type=\"hidden\" name=\"form[Image]\" value=" + data['details'].Image +">"; 
                html +="<label class=\"custom-file-label\" for=\"customFile\">Choose Image</label>";                                     
                html +="</div>";                                 
                html +="</div>";                             
                html +="<div class=\"col-md-1\">";
                html +="<button type=\"submit\" class=\"btn btn-dark btn-sm\"><i class=\"fas fa-upload\"></i></button>";                                 
                html +="</div>";                             
                html +="</div>";                         
                html += "</form>";                    
                $("."+app_div).append(html);
            }
        });
    }
</script>