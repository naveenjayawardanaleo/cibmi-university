<?php include('include/header.php') ?>


<main>
    <!-- Page Banner -->
    <div class="page-banner container-fluid no-padding">
        <!-- Container -->
        <div class="container">
            <div class="banner-content">
                <h3>Conatct Us</h3>
            </div>
            <ol class="breadcrumb">
                <li><a href="index.html" title="Home">Home</a></li>
                <li class="active">Conatct Us</li>
            </ol>
        </div><!-- Container /- -->
    </div><!-- Page Banner /- -->

    <!-- Contact Us -->
    <div class="contact-us container-fluid no-padding">
        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
            <div class="contact-detail">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Get In Touch</h3>
                    <p>Also Connect With Social Media To Anytime</p>
                </div><!-- Section Header /- -->
                <div class="contact-info">
                    <i class="icon icon-Pointer"></i>
                    <p>
                        <b>RAY Expo (Pvt) Ltd</b> <br>

                        3rd Floor, No. 555/2, Gohagoda road, <br>Polwatta, Katugastota (20800), <br> Sri Lanka.
                    </p>
                </div>
                <div class="contact-info">
                    <i class="icon icon-Phone2"></i>


                    <a href="tel:+940716677787" class="phone">+94 071 667 7787</a>

                    <a href="tel:+940743222712" class="phone">+94 074 322 2712</a>
                </div>
                <div class="contact-info">
                    <i class="icon icon-Phone2"></i>
                    <a href="mailto:info@maxshop.com" title="info@maxshop.com">info@rayexpo.com</a>
                </div>
                <ul class="social">
                    <li><a href="https://www.facebook.com/rayexpo/" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://twitter.com/ray_expo" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://www.linkedin.com/in/ray-expo-220a7a249/" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="https://www.instagram.com/expo.ray/" target="_blank" title="instagram"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.pinterest.com/exportexporay/" target="_blank" title="pinterest"><i class="fa fa-pinterest"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCo3tesJSj7lmm2izJKmcDqg" target="_blank" title="youtube"><i class="fa fa-youtube"></i></a></li>



                </ul>
            </div>
        </div>
        <div class="col-md-6 col-sm-6 col-xs-12 no-padding">
            <div class="form-detail">
                <!-- Section Header -->
                <div class="section-header">
                    <h3>Send a Message</h3>
                    <p>Feel Free To Say Everything And Ask Questions</p>
                </div><!-- Section Header /- -->

                <form id="contact-form" action="" name="contact" method="post">
                    <div class="row">
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <input type="text" class="form-control" placeholder="Full Name *" name="form[Full-Name]" id="" required>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <input type="text" class="form-control" placeholder="Email *" name="form[Email]" id="" required>
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <input type="text" class="form-control" placeholder="Telephone" name="form[Telephone]" id="">
                        </div>
                        <div class="col-md-6 col-sm-6 col-xs-12 form-group">
                            <input type="text" class="form-control" placeholder="Subject" name="form[Subject]" id="">
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <textarea cols="30" class="form-control" rows="10" placeholder="Message *" name="form[Message]" id="" required></textarea>
                        </div>
                        <div class="form-group col-md-12 col-sm-12 col-xs-12">
                            <button title="Submit" type="submit" id="btn_submit" name="post">Send Message</button>
                        </div>
                    </div>
                </form>
                <p id="alert-msg" class="alert-msg"></p>

                <?php
                $notification =  $this->session->flashdata('notification');
                if (isset($notification)) { ?>
                    <p id="alert-msg" class="alert-msg"><?= $notification['text'] ?></p>
                <?php } ?>

            </div>
        </div>
        <!-- Map Section -->

    </div><!-- Contact Us /- -->

</main>
<!--====================  page content wrapper ====================-->

<?php include('include/footer.php') ?>