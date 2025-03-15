<?php include('include/header.php') ?>
<div class="hero-arera course-item-height">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="hero-course-1-text">
                    <h2>My Account</h2>
                </div>
                <div class="course-title-breadcrumb">
                    <nav>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?= base_url() ?>">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">My Account</li>
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
                            <a class="nav-link " href="<?= base_url() ?>Sessions"><i class="fas fa-graduation-cap"></i> Sessions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link active" href="<?= base_url() ?>Edit-Account"><i class="fas fa-user"></i> Account Details</a>

                        </li>
                        <li class="nav-item" role="presentation">


                            <a class="nav-link " href="<?= base_url() ?>myaccount/logout">
                                <i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <h4 class="mb-25 mt-25">Edit Account</h4>
                <?= $hello ?>
                <form action="<?= base_url() ?>myaccount/update_account" method="post">
                    <div class="row">

                       
                        <input type="text" class="input form-control" id="FirstName" name="ClientsId" value="<?php echo $user['ClientsId']  ?>" hidden>
                        <input type="email" class="input form-control" id="Email" placeholder="E-mail Address" name="Email" value="<?php echo $user['Email']  ?> " hidden>
                        
                        
                        
                        <div class="col-md-6">
                            <div class="contact-from-input mb-20">
                                <label for="review">Password</label>
                                <input type="password" class="input form-control" id="Password" placeholder="New Password" name="Password" value="">
                            </div>
                            <div id="strength_human"></div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-from-input mb-20">
                                <label for="review">Confirm Password</label>
                                <input type="password" class="input form-control" id="MatchPassword" placeholder="Confirm Password" name="">
                            </div>
                        </div>
                     




                        <div class="col-md-12">
                            <button type="submit" class="cont-btn btn_save">Update
                                Profile</button>

                        </div>
                        <p class="mt-3 mb-1 text-danger font-weight-bold form-error"><?= $this->session->flashdata('error'); ?></p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

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



