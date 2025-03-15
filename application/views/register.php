<?php include('include/header.php') ?>
<div class="hero-arera course-item-height">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>Register</h2>
                </div>
                <div class="course-title-breadcrumb">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item"><span>Register</span></li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="signup-page-area pt-120 pb-120">
    <div class="signup-page-area-wrapper">
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-md-6">
                    <div class="signup-box text-center">
                        <div class="signup-text">
                        </div>
                        <div class="signup-message">
                            <img src="assets/img/sing-up/sign-up-message.png" alt="image not found">
                        </div>
                        <div class="signup-thumb">
                            <img src="assets/img/sing-up/sign-up.png" alt="image not found">
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="signup-form-wrapper py-0">
                        <h3 class="text-uppercase">Register</h3>

                        <form action="<?= base_url() ?>myaccount/register_client" method="post" autocomplete="on">

                            <div class="signup-input-wrapper">
                                <input type="text" class="form-control" name="FirstName" id="FirstName" placeholder="First Name" required>

                                <input type="text" class="form-control" name="LastName" id="LastName" placeholder="Last Name" required>

                            </div>
                            <div class="signup-input-wrapper">

                                <input type="email" class="form-control" name="Email" id="Email" placeholder="Email Address" required>
                                <input type="text" class="form-control" name="Nic" autocomplete="true" id="" placeholder="NIC" required>

                            </div>
                            <div class="signup-input-wrapper">
                                <input type="text" class="form-control" name="Address" id="Address" placeholder="Address" required>


                            </div>
                            <div class="signup-input-wrapper">

                                <input type="tel" class="form-control" name="MobileNumber" id="MobileNumber" placeholder="Phone Number"  required>
                                <input type="tel" class="form-control" name="SecondNumber" id="SecondNumber" placeholder="Second Phone Number"  required>






                            </div>


                            <div class="signup-input-wrapper">
                                <input type="password" class="form-control" name="Password" id="Password" placeholder="Password" required>
                                <input type="password" class="form-control" name="MatchPassword" id="MatchPassword" placeholder="Confirm Password" required>

                            </div>
                            <div class="sing-buttom mb-20">
                                <button class="sing-btn" name="btn_save" type="submit">Register Now</button>
                            </div>
                            <div class="acount-login text-center">
                                <span>Already have an account? <a href="<?= base_url() ?>Login">Log in</a></span>
                            </div>
                        </form>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- ========== END MAIN CONTENT ========== -->

<?php include('include/footer.php') ?>

<script type="text/javascript">
    $(function() {

        $(".btn_save").click(function() {

            var password = $("#Password").val();

            var confirmPassword = $("#MatchPassword").val();

            if (password != confirmPassword) {

                $(".form-error ").text("Password not Matched.");

                return false;

            }

            return true;

        });

    });
</script>