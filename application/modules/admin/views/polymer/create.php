<?php $this->view('include/header.php'); ?>
<?php $this->view('include/top_bar.php'); ?>
<?php $this->view('include/side_bar.php'); ?>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <div class="d-flex align-items-center flex-wrap mr-2">
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Dashboard > Create Polymer
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
                                    Polymer Details
                                </h3>
                            </div>
                        </div>
                        <div class="card-body">
                            <?php $this->view('include/alert.php'); ?>
                            <form method="post" action="<?= base_url() ?>admin/Polymer/form/<?= $obj->PolymerId ?>">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="PolymerTitle">Polymer Title</label>
                                            <input type="text" value="<?= $obj->PolymerTitle ?>" name="form[PolymerTitle]" class="form-control" id="PolymerTitle" required>
                                        </div>
                                        <div class="form-group">
                                            <label for="ShortDescription">Short Description</label>
                                            <textarea name="form[ShortDescription]" class="form-control" id="ShortDescription" required><?= $obj->ShortDescription ?></textarea>
                                        </div>
                                    </div>

                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Default Image <small>(700px X 700px)</small></label><br>
                                            <div class="fileinput-button btn btn-primary btn-upload-primary sepH_b">
                                                <span> Upload </span>
                                                <input class="image_upload" data-for="#default_img_grid_upload" data-name="Image" type="file" name="userfile">
                                            </div>
                                            <input type="hidden" name="form[Image]" value="">
                                            <ul class="img-grid2 img-grid  clearfix" id="default_img_grid_upload">
                                                <?php if ($obj->Image) : ?>
                                                    <li>
                                                        <div class="upload_img_single thumbnail">
                                                            <img src="<?= UP . $obj->Image ?>" class="thumbnail img-responsive" alt="" />
                                                            <div class="upload_img_actions">
                                                                <span class="far fa-trash-alt pull-right btn btn-danger" onclick="image_upload.remove($(this))"> </span>
                                                                <a href="<?= UP . $obj->Image ?>" target="_blank" class="flaticon2-expand pull-right btn btn-secondary">
                                                                </a>
                                                                <input type="hidden" name="form[Image]" value="<?= $obj->Image ?>">
                                                            </div>
                                                        </div>
                                                    </li>
                                                <?php endif; ?>
                                            </ul>
                                        </div>

                                        <!-- <div class="form-group">
                                            <label>Document <small>size less than 2MB [.PDF only]</small></label><br>
                                            <div class="fileinput-button btn btn-primary btn-upload-primary sepH_b">
                                                <span> Add file </span>
                                                <input class="doc_upload" id="doc_upload" data-name="Document" type="file" name="userfiledoc">
                                            </div>
                                            <input type="hidden" name="form[Document]" id="document_file" value="<?= $obj->Document ?>">

                                            <div class="inner text-center">
                                                <?php if ($obj->Document) : ?>
                                                    <li style="list-style: none;">
                                                        <a href="<?= DOC . $obj->Document ?>" target="_blank">
                                                            <img id="img_file1" src="https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-02-48.png" alt="document, download, file, files, pdf icon" width="48" height="48">
                                                        </a>
                                                        <span class="far fa-trash-alt pull-right btn btn-danger" onclick="image_upload.removedoc($(this))"> </span>
                                                    </li>
                                                <?php endif; ?>
                                            </div>
                                        </div> -->
                                    </div>

                                    <div class="col-md-12">
                                        <div class="form-group">
                                            <label for="usr">Description</label>
                                            <textarea required="" class="summernote" name="form[Description]" id="kt_summernote_1"><?= $obj->Description ?></textarea>
                                        </div>
                                    </div>


                                    <div class="col-md-12">
                                        <div>
                                            <label>More Images <small>(700px X 700px)</small></label>
                                            <div class="row ">
                                                <div class="fileinput-button btn btn-primary  btn-upload-primary sepH_b">
                                                    <span>Upload</span>
                                                    <input id="image_upload" type="file" name="userfile" multiple>
                                                </div>
                                                <ul class="img-grid clearfix">
                                                    <?php $MoreImage = (array)json_decode($obj->MoreImage); ?>
                                                    <?php foreach ($MoreImage as $img) : ?>
                                                        <li class="upload_img_single">
                                                            <div class=" thumbnail">
                                                                <img src="<?= UP . $img ?>" class="thumbnail img-responsive" alt="" />
                                                                <div class="upload_img_actions">
                                                                    <span class="far fa-trash-alt pull-right btn btn-danger" onclick="image_upload.remove($(this))"></span>
                                                                    <a href="<?= UP . $img ?>" target="_blank" class="flaticon2-expand pull-right btn btn-secondary"></a>
                                                                    <input type="hidden" name="image[]" value="<?= $img ?>">
                                                                </div>
                                                            </div>
                                                        </li>
                                                    <?php endforeach; ?>
                                                </ul>
                                                <ul class="img-grid clearfix" id="img_grid_upload"></ul>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-md-12 mt-10">
                                        <button type="submit" name="btn-save" class="btn btn-success btn-right">Save</button>
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


<!--end::Content-->
<?php $this->view('include/page_footer.php'); ?>
<?php $this->view('include/footer.php'); ?>

<script>
    $(function() {
        image_upload.init();
        image_upload.default_image();
        image_upload.default_doc();
        $('#kt_select2_3').on('select2:select', function(e) {
            $("#category-support").val(1);
        });
    });

    image_upload = {
        init: function() {
            if ($("#image_upload").length) {
                var e = $("<a/>").addClass("flaticon-upload pull-right btn btn-primary upload-btn").prop("disabled", !0).text("Processing...").on("click", function(e) {
                    var a = $(this),
                        i = a.data();
                    a.off("click").text("Abort").on("click", function() {
                        a.remove(), i.abort()
                    }), i.submit().always(function() {
                        a.remove()
                    }), e.preventDefault()
                });
                $("#image_upload").fileupload({
                    url: URL.base + CONTROLLER + "/do_upload/",
                    dataType: "json",
                    autoUpload: !1,
                    acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                    maxFileSize: 5e6,
                    disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                    previewMaxWidth: 220,
                    previewMaxHeight: 220,
                    previewCrop: !0
                }).on("fileuploadsubmit", function(e, a) {
                    var i = $("#image_upload");
                    return a.formData = {
                        files: i.data(a)
                    }, a.formData.files ? void 0 : (i.focus(), !1)
                }).on("fileuploadadd", function(a, i) {
                    i.context = $("<li/>").appendTo("#img_grid_upload"), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(i.files, function(a, o) {
                        var t = $('<div class="upload_img_actions">').wrapInner('<span class="far fa-trash-alt pull-right btn btn-danger" onclick="image_upload.remove($(this))" ></span>'),
                            n = $('<div class="upload_img_single thumbnail" />').append(t);
                        a || t.append(e.clone(!0).data(i)), n.appendTo(i.context)
                    })
                }).on("fileuploadprocessalways", function(e, a) {
                    var i = a.index,
                        o = a.files[i],
                        t = $(a.context.children()[i]);
                    o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("a.upload-btn").text("").prop("disabled", !!a.files.error)
                }).on("fileuploadprogressall", function(e, a) {
                    $("#upload_progress").addClass("show_progress");
                    var i = parseInt(a.loaded / a.total * 100, 10);
                    $("#upload_progress div").width(i + "%").html(i + "%");
                    100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
                }).on("fileuploaddone", function(e, a) {
                    $.each(a.result.files, function(e, i) {
                        i.url ? $(a.context.children()[e]).find(".upload_img_actions").append('<span class="flaticon2-check-mark pull-right btn btn-success"><input type="hidden" name="image[]" value="' + i.name + '" > </span>') : i.error && $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(i.error))
                    })
                }).on("fileuploadfail", function(e, a) {
                    $("#upload_progress").addClass("show_progress"), $.each(a.files, function(e, i) {
                        $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
                    }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
                }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
            }
        },
        remove: function(e) {
            confirm("Do you want to remove this file ") && e.closest("li").remove()
        },
        default_image: function() {
            var e = $("<a/>").addClass("flaticon-upload pull-right btn btn-primary upload-btn").prop("disabled", !0).text("Processing...").on("click", function(e) {
                    var a = $(this),
                        i = a.data();
                    a.off("click").text("Abort").on("click", function() {
                        a.remove(), i.abort()
                    }), i.submit().always(function() {
                        a.remove()
                    }), e.preventDefault()
                }),
                a = null;
            $(".image_upload").click(function() {
                a = $(this)
            }).fileupload({
                url: URL.base + CONTROLLER + "/do_upload/",
                dataType: "json",
                autoUpload: !1,
                acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
                maxFileSize: 5e6,
                disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                previewMaxWidth: 220,
                previewMaxHeight: 220,
                previewCrop: !0
            }).on("fileuploadsubmit", function(e, a) {
                var i = $(".image_upload");
                return a.formData = {
                    files: i.data(a)
                }, a.formData.files ? void 0 : (i.focus(), !1)
            }).on("fileuploadadd", function(i, o) {
                $(a.data("for")).html(" "), o.context = $("<li/>").appendTo(a.data("for")), $("#upload_progress").length || $("body").append('<div id="upload_progress"><i class="fa fa-spinner fa-spin"></i></div>'), $.each(o.files, function(a, i) {
                    var t = $('<div class="upload_img_actions">').wrapInner('<span class=" far fa-trash-alt pull-right btn btn-danger" onclick="image_upload.remove($(this))" > </span> '),
                        n = $('<div class="upload_img_single thumbnail" />').append(t);
                    a || t.append(e.clone(!0).data(o)), n.appendTo(o.context)
                })
            }).on("fileuploadprocessalways", function(e, a) {
                var i = a.index,
                    o = a.files[i],
                    t = $(a.context.children()[i]);
                o.preview && t.prepend(o.preview), o.error && t.find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error)), i + 1 === a.files.length && a.context.find("a.upload-btn").text("").prop("disabled", !!a.files.error)
            }).on("fileuploadprogressall", function(e, a) {
                $("#upload_progress").addClass("show_progress");
                var i = parseInt(a.loaded / a.total * 100, 10);
                $("#upload_progress div").width(i + "%").html(i + "%");
                100 == i && setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
            }).on("fileuploaddone", function(e, i) {
                $.each(i.result.files, function(e, o) {
                    o.url ? $(i.context.children()[e]).find(".upload_img_actions").append('<span class="flaticon2-check-mark pull-right btn btn-success"><input type="hidden" name="form[' + a.data("name") + ']" value="' + o.name + '" > </span>') : o.error && $(i.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text(o.error))
                })
            }).on("fileuploadfail", function(e, a) {
                $("#upload_progress").addClass("show_progress"), $.each(a.files, function(e, i) {
                    $(a.context.children()[e]).find(".upload_img_actions").append($('<div class="alert alert-danger"/>').text("File upload failed."))
                }), setTimeout("$('#upload_progress').removeClass('show_progress')", 500)
            }).prop("disabled", !$.support.fileInput).parent().addClass($.support.fileInput ? void 0 : "disabled")
        },
        default_doc: function() {
            $('#doc_upload').fileupload({
                url: URL.base + CONTROLLER + "/do_doc_upload/",
                dataType: "json",
                autoUpload: 1,
                acceptFileTypes: /(\.|\/)(pdf)$/i,
                maxFileSize: 5e6,
                disableImageResize: /Android(?!.*Chrome)|Opera/.test(window.navigator.userAgent),
                previewCrop: !0
            }).on("fileuploadsubmit", function(e, a) {

            }).on("fileuploadadd", function(i, o) {

            }).on("fileuploadprocessalways", function(e, a) {

            }).on("fileuploadprogressall", function(e, a) {

            }).on("fileuploaddone", function(e, i) {
                $("#document_file").val(i.result);
                $(".inner").html("<a href='<?= DOC ?>" + i.result + "' target='_black'><img id='img_file' src='https://cdn3.iconfinder.com/data/icons/line-icons-set/128/1-02-48.png' /></a><span class='far fa-trash-alt pull-right btn btn-danger' onclick='image_upload.removedoc($(this))'> </span>");
            }).on("fileuploadfail", function(e, a) {
                $("#document_file").val(i.result);
                console.log(i.result);
                $('.inner').html("<b style='color: red'>Invalid File Type or File Upload Fail</b>");
            });
        },
        removedoc: function(e) {
            confirm("Do you want to remove this file ") && $('.inner').html(''), $("#document_file").val(""), $("#img_file").hide();
        }
    }
</script>