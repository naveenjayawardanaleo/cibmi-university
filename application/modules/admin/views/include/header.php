<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <meta charset="utf-8" />
    <title><?= title ?> - Admin</title>
    <meta name="description" content="Header dark theme example" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <!--begin::Fonts-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
    <!--end::Fonts-->

    <!--begin::Global Theme Styles(used by all pages)-->
    <link href="<?= base_url() ?>assets/admin/plugins/global/plugins.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/plugins/custom/prismjs/prismjs.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/css/style.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Global Theme Styles-->

    <!--begin::Layout Themes(used by all pages)-->
    <link href="<?= base_url() ?>assets/admin/css/themes/layout/header/base/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/css/themes/layout/header/menu/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/css/themes/layout/brand/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/css/themes/layout/aside/dark.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Layout Themes-->

    <!--begin::Page Vendors Styles(used by this page)-->
    <link href="<?= base_url() ?>assets/admin/plugins/custom/fullcalendar/fullcalendar.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <!--end::Page Vendors Styles-->
    <link href="<?= base_url() ?>assets/admin/plugins/custom/datatables/datatables.bundle.css?v=7.0.6" rel="stylesheet" type="text/css" />
    <link href="<?= base_url() ?>assets/admin/css/custom.css" rel="stylesheet" type="text/css" />

    <!--begin::Global Theme Bundle(used by all pages)-->
    <script src="<?= base_url() ?>assets/admin/plugins/global/plugins.bundle.js?v=7.0.6"></script>
    <script src="<?= base_url() ?>assets/admin/plugins/custom/prismjs/prismjs.bundle.js?v=7.0.6"></script>
    <script src="<?= base_url() ?>assets/admin/js/scripts.bundle.js?v=7.0.6"></script>
    <!--end::Global Theme Bundle-->

    <!--begin::Multi Select Styles-->
    <link href="<?= base_url() ?>assets/admin/plugins/custom/multi-select/css/multi-select.css" rel="stylesheet" type="text/css" />
    <!--end::Multi Select Styles-->

    <!-- Favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="<?= base_url() ?>assets/favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favi/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/favi/site.webmanifest">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/favi/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= base_url() ?>assets/favi/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
</head>
<script type="text/javascript">
    var BaseUrl = "<?= base_url() ?>";
    var Api = "<?= base_url() ?>api/";
</script>

<script type="text/javascript">
    var URL = {
            base: "<?= base_url() ?>admin/",
            api: "<?= base_url() ?>api/",
            current: "<?= current_url() ?>"
        },
        CONTROLLER = '<?= $this->controller ?>'
</script>
<!--end::Head-->