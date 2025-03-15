<?php include('include/header.php') ?>
<style>
    .sign-button .sign-btn,
    .sing-buttom a {
        height: 55px;
        background: #2467EC;
        text-align: center;
        line-height: 55px;
        color: #ffffff;
        border-radius: 4px;
        font-size: 16px;
        font-weight: 600;
        transition: 0.3s;
        display: block;
        width: 100%;
    }
</style>
<div class="hero-arera course-item-height" data-background="assets/img/slider/course-slider.jpg" style="background-image: url(&quot;assets/img/slider/course-slider.jpg&quot;);">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Sign in</h2>
                </div>
                <div class="course-title-breadcrumb">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><span>Sign in</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>



<div class="signin-page-area pt-120 pb-120">
    <div class="signin-page-area-wrapper">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-10 col-lg-10">
                    <form action="<?= base_url() ?>myaccount/login_check" method="post">
                        <div class="row">
                            <div class="col-md-5">
                                <div class="signup-box text-center">
                                   
                                    <div class="signup-thumb">
                                        <img src="<?= base_url() ?>assets/img/sing-up/sign-up.png" alt="image not found">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-7">
                                <div class="signup-form-wrapper py-0">
                                   
                                        <h3 class="text-uppercase mb-20">Login</h3>
                                   
                                    <div class="signup-wrapper">
                                        <input type="email" class="form-control" name="Email" id="" placeholder="Email address">

                                    </div>
                                    <div class="signup-wrapper">
                                        <input type="password" class="form-control" name="Password" id="" placeholder="Password">
                                    </div>
                                    <div class="signup-action">
                                        <div class="course-sidebar-list">
                                            <input class="signup-checkbo" type="checkbox" id="sing-in">
                                            <label class="sign-check" for="sing-in"><span>Remember
                                                    me</span></label>
                                        </div>
                                    </div>
                                    <div class="sing-buttom mb-20">
                                        <button type="submit" class="sing-btn" >Login Now</button>
                                    </div>

                                    <div class="registered wrapper">
                                        <div class="not-register">
                                            <span>Not registered?</span><span><a href="<?= base_url() ?>Register">Register</a></span>
                                        </div>

                                    </div>


                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>


<?php include('include/footer.php') ?>