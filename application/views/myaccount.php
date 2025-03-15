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
                            <a class="nav-link active" href="<?= base_url() ?>My-Account"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url() ?>Sessions"><i class="fas fa-graduation-cap"></i> Sessions</a>
                        </li>

                        <li class="nav-item">
                            <a class="nav-link " href="<?= base_url() ?>Edit-Account"><i class="fas fa-user"></i> Account Details</a>

                        </li>
                        <li class="nav-item" role="presentation">
                            

                            <a class="nav-link " href="<?= base_url() ?>myaccount/logout">
                                <i class="fas fa-sign-out-alt"></i>&nbsp; Logout</a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <h4 class="mb-25 mt-25">Dashboard</h4>
                Hello,<?php echo $this->session->userdata('username'); ?> <?php echo $this->session->userdata('lastname'); ?> (If Not <?php echo $this->session->userdata('username'); ?> <?php echo $this->session->userdata('lastname'); ?> ! <a href="<?= base_url() ?>myaccount/logout" class="text-danger">Logout</a> )

                From your account dashboard. you can easily check & view your recent orders, manage your shipping and billing addresses and edit your password and account details.


            </div>
        </div>
    </div>
</div>

<?php include('include/footer.php') ?>