<!doctype html>
<html class="no-js" lang="zxx">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>CIBM </title>
    <meta name="description" content="Discover the vibrant campus life at Campus of Newcastle, a leading educational institution in Sri Lanka. Explore our state-of-the-art facilities, diverse range of academic programs, and supportive community. Join us today and unlock your full potential!">
    <meta name="keywords" content="Online learning, E-learning, Distance education, Digital courses, Virtual classrooms, Skill development, Online certification, Web-based training, Self-paced learning, Online tutors, Sri Lanka education">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="apple-touch-icon" sizes="76x76" href="<?= base_url() ?>assets/favi/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= base_url() ?>assets/favi/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= base_url() ?>assets/favi/favicon-16x16.png">
    <link rel="manifest" href="<?= base_url() ?>assets/favi/site.webmanifest">
    <link rel="shortcut icon" href="<?= base_url() ?>assets/favi/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?= base_url() ?>assets/favi/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/preloader.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/meanmenu.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/animate.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/swiper-bundle.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/backToTop.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/magnific-popup.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/huicalendar.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/nice-select.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/fontAwesome5Pro.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/flaticon.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/default.css">
    <link rel="stylesheet" href="<?= base_url() ?>assets/css/style.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/datatable.css">

    <link rel="stylesheet" href="<?= base_url() ?>assets/css/custom.css">
</head>

<body>

    <!-- pre loader area start -->
    <div id="loading">
        <div id="loading-center">
            <div id="loading-center-absolute">
                <div class="loading-icon text-center d-flex flex-column align-items-center justify-content-center">
                    <img src="<?= base_url() ?>assets/campusofnewcastle.png" alt="logo-img" style="width: 50px;">
                    <img class="loading-logo" src="<?= base_url() ?>assets/img/logo/preloader.svg" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- pre loader area end -->

    <div class="body-overlay"></div>
    <!-- cart mini area end -->

    <!-- side toggle start -->
    <div class="fix">
        <div class="side-info">
            <div class="side-info-content">
                <div class="offset-widget offset-logo mb-40">
                    <div class="row align-items-center">
                        <div class="col-9">
                            <a href="<?= base_url() ?>">
                                <img src="<?= base_url() ?>assets/img/campusofnewcastle-black.png" class="main-logo w-100" alt="Logo">
                            </a>
                        </div>
                        <div class="col-3 text-end"><button class="side-info-close"><i class="fal fa-times"></i></button>
                        </div>
                    </div>
                </div>
                <div class="mobile-menu d-xl-none fix"></div>

                <div class="offset-widget offset_menu-top mb-20">
                    <div class="header-menu-top-icon mb-20">
                        <a href="tel:+94772842054"><i class="fas fa-phone fa-rotate-90"></i>+94  76 241 0876</a>

                        <a href="mailto:info@cibmi.lk"><i class="fas fa-envelope"></i>info@cibmi.lk</a>

                    </div>
                </div>
                <div class="header-social mb-20">
                    <a href="https://facebook.com/campusofnewcastle.lk" target="_blank"><i class="fab fa-facebook-f"></i></a>
                    <a href="#"><i class="fab fa-twitter"></i></a>
                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                    <a href="#"><i class="fab fa-linkedin"></i></a>
                </div>
                <div class="offset-widget button mb-20">
                    <?php

                    if (isset($_SESSION['username'])) {

                        $first = $this->session->userdata('username');
                        $last = $this->session->userdata('lastname');
                        echo '
                                <a class="edu-four-btn  text-uppercase px-3" href="My-Account">My Account</a>

                            ';
                    } else {
                        echo '
                                <a class="edu-four-btn  text-uppercase px-3" href="Login">Student Login</a>

                            ';
                    }

                    ?>
                </div>
            </div>
        </div>
    </div>
    <div class="offcanvas-overlay"></div>
    <div class="offcanvas-overlay-white"></div>
    <!-- side toggle end -->
    <!-- header-area-start -->
    <header>
        <div class="university-header-wrapper">
            <!--header-top-area start -->
            <div class="header-university-top-area d-none d-lg-block">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-8">
                            <div class="header-left">
                                <a href="tel:+94762410876"><i class="fas fa-phone fa-rotate-90"></i>+94  76 241 0876</a>
                                <a href="mailto:info@cibmi.lk"><i class="fal fa-envelope"></i>info@cibmi.lk</a>
                                <span> <?php

                                        if (isset($_SESSION['username'])) {

                                            $first = $this->session->userdata('username');
                                            $last = $this->session->userdata('lastname');
                                            echo '

                                    <a href="My-Account" ><i class="fas fa-user"></i><span> ' . $first . ' ' . $last . '</span> </a>
                                        ';
                                        } else {
                                            echo '
                                            <a href="Login" ><i class="fas fa-user"></i> Student Login </a>
                                        </li>

                                    ';
                                        }

                                        ?></span>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-4">
                            <div class="header-right f-right">
                                <div class="header-right-icon">
                                    <a href="https://facebook.com/campusofnewcastle.lk" target="_blank"><i class="fab fa-facebook-f"></i></a>
                                    <a href="#"><i class="fab fa-twitter"></i></a>
                                    <a href="#"><i class="fab fa-vimeo-v"></i></a>
                                    <a href="#"><i class="fab fa-linkedin"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header-top-area end -->
            <div class="header-main3 transpaerent-header sticky-header">
                <div class="container">
                    <div class="header-main-wrapper">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2 col-md-3 col-sm-3 col-7">
                                <div class="header-logo">
                                    <a href="<?= base_url() ?>">

                                        <img src="<?= base_url() ?>assets/campusofnewcastle.png" class="logo-white w-100" alt="Logo">

                                    </a>

                                    <a href="<?= base_url() ?>"><img class="logo-black w-100" src="<?= base_url() ?>assets/img/campusofnewcastle-black.png" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-10 col-lg-10 col-md-9 col-sm-9 col-5">
                                <div class="header-main-right d-flex justify-content-end">
                                    <div class="main-menu mr-30">
                                        <nav id="mobile-menu">
                                            <ul>
                                                <li><a href="<?= base_url() ?>">Home</a></li>


                                                <li class="menu-item-has-children">

                                                    <a href="<?= base_url() ?>About-Us">About us</a>
                                                    <ul class="sub-menu">
                                                        <li><a href="<?= base_url() ?>About-Us">About us</a>
                                                        </li>
                                                        <li><a href="<?= base_url() ?>Our-Message">Our Message</a></li>
                                                        <li><a href="<?= base_url() ?>Mission-Vision">Our Mission & Vision</a></li>

                                                    </ul>
                                                </li>
                                                <li><a href="<?= base_url() ?>Courses">Courses</a></li>



                                                <li><a href="<?= base_url() ?>News-and-Media">News and Media</a></li>
                                                <li><a href="<?= base_url() ?>Contact-Us">Contact us</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-btn">

                                        <a class="edu-thard-btn d-none d-lg-block" href="<?= base_url() ?>How-to-Enroll">Enroll now</a>
                                        <div class="menu-bar ml-20">
                                            <a class="side-toggle header-3" href="javascript:void(0)">
                                                <div class="bar-icon header-3">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header-aea-end -->
    <!-- <header>
        <div class="container bg-info text-white fw-bold d-md-none">
            <div class="row">
                <div class="col-md-12 text-center">

                    <?php

                    if (isset($_SESSION['username'])) {

                        $first = $this->session->userdata('username');
                        $last = $this->session->userdata('lastname');
                        echo '

                        <a href="My-Account" ><i class="fas fa-user"></i><span> ' . $first . ' ' . $last . '</span> </a>
                    ';
                    } else {
                        echo '
                        <a href="Login" ><i class="fas fa-user"></i> Login </a>
                    </li>

                    ';
                    }

                    ?>

                </div>
            </div>
        </div>

        <div class="black-bg main-header">
            <div class="container">
                <div class="header-top-inner">
                    <div class="row align-items-center">
                        <div class="col-lg-2 col-10">

                            <a href="<?= base_url() ?>"><img src="<?= base_url() ?>assets/campusofnewcastle.png" class="main-logo" alt="img"></a>

                        </div>

                        <div class="col-lg-10  col-2">
                            <div class="row  d-none d-lg-block">
                                <div class="header-top-icon  f-right d-flex justify-content-end">
                                    <a href="tel:+94772842054" class="text-white"><i class="fas fa-phone fa-rotate-90 text-white"></i>+94 77 284 2054</a>

                                    <a href="mailto:info@cibm.lk" class="text-white"><i class="fas fa-envelope text-white"></i>info@cibm.lk</a>

                                    <?php

                                    if (isset($_SESSION['username'])) {

                                        $first = $this->session->userdata('username');
                                        $last = $this->session->userdata('lastname');
                                        echo '

                                        <i class="fas fa-user"  class="text-white"></i><span> ' . $first . ' ' . $last . '</span>
                                    ';
                                    } else {
                                        echo '
                                        <a href="Login"  class="text-white"><i class="fas fa-user text-white"></i> Login </a>
                                    </li>

                                    ';
                                    }

                                    ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="header-main-right  d-flex justify-content-end">
                                    <div class="main-menu mr-30">
                                        <nav id="mobile-menu">
                                            <ul>

                                                <li><a href="<?= base_url() ?>">Home</a></li>

                                                <li><a href="<?= base_url() ?>About-Us">About Us</a></li>
                                                <li><a href="<?= base_url() ?>How-to-Enroll">How to Enroll</a></li>
                                                <li><a href="<?= base_url() ?>Contact-Us">Contact Us</a></li>

                                            </ul>
                                        </nav>
                                    </div>
                                    <div class="header-btn">
                                        <?php

                                        if (isset($_SESSION['username'])) {

                                            $first = $this->session->userdata('username');
                                            $last = $this->session->userdata('lastname');
                                            echo '
                                        <a class="edu-four-btn d-none d-lg-block text-uppercase px-3 newstylebtn" href="My-Account">My Account</a>

                                    ';
                                        } else {
                                            echo '
                                        <a class="edu-four-btn d-none d-lg-block text-uppercase px-3 newstylebtn" href="Login">Student Login</a>

                                    ';
                                        }

                                        ?>

                                        <div class="menu-bar ml-20">
                                            <a class="side-toggle header-2" href="javascript:void(0)">
                                                <div class="bar-icon">
                                                    <span></span>
                                                    <span></span>
                                                    <span></span>
                                                </div>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header> -->