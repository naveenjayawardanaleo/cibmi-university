        <script type="text/javascript">
            function delete_modal(link) {
                // alert(link);
                Swal.fire({
                    title: 'Are you sure?',
                    text: "You won't be able to revert this!",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#3085d6',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Yes, delete it!'
                }).then((result) => {
                    if (result.value) {
                        window.location.replace(link);
                    }
                })
            }
        </script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>
            var KTAppSettings = {
                "breakpoints": {
                    "sm": 576,
                    "md": 768,
                    "lg": 992,
                    "xl": 1200,
                    "xxl": 1400
                },
                "colors": {
                    "theme": {
                        "base": {
                            "white": "#ffffff",
                            "primary": "#3699FF",
                            "secondary": "#E5EAEE",
                            "success": "#1BC5BD",
                            "info": "#8950FC",
                            "warning": "#FFA800",
                            "danger": "#F64E60",
                            "light": "#E4E6EF",
                            "dark": "#181C32"
                        },
                        "light": {
                            "white": "#ffffff",
                            "primary": "#E1F0FF",
                            "secondary": "#EBEDF3",
                            "success": "#C9F7F5",
                            "info": "#EEE5FF",
                            "warning": "#FFF4DE",
                            "danger": "#FFE2E5",
                            "light": "#F3F6F9",
                            "dark": "#D6D6E0"
                        },
                        "inverse": {
                            "white": "#ffffff",
                            "primary": "#ffffff",
                            "secondary": "#3F4254",
                            "success": "#ffffff",
                            "info": "#ffffff",
                            "warning": "#ffffff",
                            "danger": "#ffffff",
                            "light": "#464E5F",
                            "dark": "#ffffff"
                        }
                    },
                    "gray": {
                        "gray-100": "#F3F6F9",
                        "gray-200": "#EBEDF3",
                        "gray-300": "#E4E6EF",
                        "gray-400": "#D1D3E0",
                        "gray-500": "#B5B5C3",
                        "gray-600": "#7E8299",
                        "gray-700": "#5E6278",
                        "gray-800": "#3F4254",
                        "gray-900": "#181C32"
                    }
                },
                "font-family": "Poppins"
            };
        </script>
        <!--end::Global Config-->

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
        <!--end::Multi Select Scripts-->

        <!--begin::Sweet Alert-->
        <!-- <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script> -->
        <!--end::Sweet Alert-->

        <script>
            $(document).ready(function() {
                //advance multiselect start
                $('#my_multi_select').multiSelect({
                    keepOrder: true,
                    selectableHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    selectionHeader: "<input type='text' class='form-control search-input' autocomplete='off' placeholder='search...'>",
                    afterInit: function(ms) {
                        var that = this,
                            $selectableSearch = that.$selectableUl.prev(),
                            $selectionSearch = that.$selectionUl.prev(),
                            selectableSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selectable:not(.ms-selected)',
                            selectionSearchString = '#' + that.$container.attr('id') + ' .ms-elem-selection.ms-selected';

                        that.qs1 = $selectableSearch.quicksearch(selectableSearchString)
                            .on('keydown', function(e) {
                                if (e.which === 40) {
                                    that.$selectableUl.focus();
                                    return false;
                                }
                            });

                        that.qs2 = $selectionSearch.quicksearch(selectionSearchString)
                            .on('keydown', function(e) {
                                if (e.which == 40) {
                                    that.$selectionUl.focus();
                                    return false;
                                }
                            });
                    },
                    afterSelect: function() {
                        this.qs1.cache();
                        this.qs2.cache();
                    },
                    afterDeselect: function() {
                        this.qs1.cache();
                        this.qs2.cache();
                    }
                });
            });
        </script>

        <!--begin::Page Scripts(used by this page)-->
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
        <script>
            $(function() {
                $('#kt_aside_menu ul li a').each(function() {
                    var $this = $(this);
                    if (window.location.href == $this.attr('href')) {
                        $(this).parent().addClass('menu-item-active');
                        $(this).parent().parent().closest('li').addClass('menu-item-open menu-item-here');
                        $(this).parent().parent().closest('li').parent().closest('li').addClass('menu-item-open menu-item-here');
                        $(this).parent().parent().closest('li').parent().closest('li').parent().closest('li').addClass('menu-item-open menu-item-here');
                    }
                })
            });
        </script>

        <!--end::Page Scripts-->
        </body>
        <!--end::Body-->

        </html>