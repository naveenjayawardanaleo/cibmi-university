<?php include('include/header.php'); ?>
<?php include('include/top_bar.php'); ?>
<?php include('include/side_bar.php'); ?>
<!--begin::Content-->
<div class="content  d-flex flex-column flex-column-fluid" id="kt_content">
    <!--begin::Subheader-->
    <div class="subheader py-2 py-lg-4  subheader-solid " id="kt_subheader">
        <div class=" container-fluid  d-flex align-items-center justify-content-between flex-wrap flex-sm-nowrap">
            <!--begin::Info-->
            <div class="d-flex align-items-center flex-wrap mr-2">
                <!--begin::Page Title-->
                <h5 class="text-dark font-weight-bold mt-2 mb-2 mr-5">
                    Dashboard
                </h5>
                <!--end::Page Title-->
            </div>
            <!--end::Info-->
        </div>
    </div>
    <!--end::Subheader-->

    <!--begin::Entry-->
    <div class="d-flex flex-column-fluid">
        <!--begin::Container-->
        <div class=" container ">
            <!--begin::Dashboard-->
            <!--begin::Row-->
            <div class="row">
                <div class="col-md-4">
                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                        <!--begin::Body-->
                        <div class="card-body text-center">
                            <!--begin::Food img-->
                            <img src="https://observatory.tec.mx/wp-content/uploads/2019/08/bigstock-Spanish-Male-Student-With-Grou-2862461532-1.jpg" class="rounded-3 mb-4 w-100" alt="">
                            <!--end::Food img-->

                            <!--begin::Info-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <div class="text-center">
                                    <h3 class="card-title text-Capitalize">
                                        Student Manager
                                    </h3>
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1"></span>


                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->

                            <a class="btn btn-primary fs-1 w-100 py-4" href="<?php base_url()?>admin/Manage-Project">Manage Student</a>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                        <!--begin::Body-->
                        <div class="card-body text-center">
                            <!--begin::Food img-->
                            <img src="https://entrepreneurhandbook.co.uk/wp-content/uploads/2021/03/Online-training-session-in-action-1.jpg.webp" class="rounded-3 mb-4 w-100" alt="">
                            <!--end::Food img-->

                            <!--begin::Info-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <div class="text-center">
                                    <h3 class="card-title text-Capitalize">
                                        Sessions Manager
                                    </h3>
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1"></span>


                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->

                            <a class="btn btn-primary fs-1 w-100 py-4" href="<?php base_url()?>admin/Manage-Partners">Manage Sessions</a>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-flush flex-row-fluid p-6 pb-5 mw-100">
                        <!--begin::Body-->
                        <div class="card-body text-center">
                            <!--begin::Food img-->
                            <img src="https://newschool.imgix.net/Media/Resources/Content/Admissions/051516_Street_Seats_015.jpg" class="rounded-3 mb-4 w-100" alt="">
                            <!--end::Food img-->

                            <!--begin::Info-->
                            <div class="mb-2">
                                <!--begin::Title-->
                                <div class="text-center">
                                    <h3 class="card-title text-Capitalize">
                                        News and Media Manager
                                    </h3>
                                    <span class="fw-bold text-gray-800 cursor-pointer text-hover-primary fs-3 fs-xl-1"></span>


                                </div>
                                <!--end::Title-->
                            </div>
                            <!--end::Info-->

                            <a class="btn btn-primary fs-1 w-100 py-4" href="<?php base_url()?>Manage-Hardware">Manage News and Media</a>
                        </div>
                        <!--end::Body-->
                    </div>
                </div>


            </div>
            <!--end::Row-->


            <!--end::Dashboard-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Entry-->
</div>
<!--end::Content-->

<!--begin::Footer-->

<!--end::Footer-->
</div>
<!--end::Wrapper-->
</div>
<!--end::Page-->
</div>
<!--end::Main-->


<!--begin::Scrolltop-->
<div id="kt_scrolltop" class="scrolltop">
    <span class="svg-icon">
        <!--begin::Svg Icon | path:assets/media/svg/icons/Navigation/Up-2.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                <polygon points="0 0 24 0 24 24 0 24" />
                <rect fill="#000000" opacity="0.3" x="11" y="10" width="2" height="10" rx="1" />
                <path d="M6.70710678,12.7071068 C6.31658249,13.0976311 5.68341751,13.0976311 5.29289322,12.7071068 C4.90236893,12.3165825 4.90236893,11.6834175 5.29289322,11.2928932 L11.2928932,5.29289322 C11.6714722,4.91431428 12.2810586,4.90106866 12.6757246,5.26284586 L18.6757246,10.7628459 C19.0828436,11.1360383 19.1103465,11.7686056 18.7371541,12.1757246 C18.3639617,12.5828436 17.7313944,12.6103465 17.3242754,12.2371541 L12.0300757,7.38413782 L6.70710678,12.7071068 Z" fill="#000000" fill-rule="nonzero" />
            </g>
        </svg>
        <!--end::Svg Icon-->
    </span>
</div>
<!--end::Scrolltop-->
<?php include('include/page_footer.php'); ?>
<?php include('include/footer.php'); ?>