<?php include('include/header.php') ?>

<div class="cta-area--two cta-bg cta-bg--two my-breadcrum">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1">
                <!--=======  cta content wrapper  =======-->

                <div class="cta-content-wrapper--two">
                    <div class="cta-content--two">
                        <h1 class="title"> <span>Who we are</span> </h1>

                    </div>
                </div>

                <!--=======  End of cta content wrapper  =======-->
            </div>
        </div>
    </div>
</div>
<!--=======  team member area  =======-->

<div class="team-member-area section-space mt-3">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title-area text-center">
                    <h2 class="section-title">MEET OUR TEAM</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <!--=======  team members wrapper  =======-->

                <div class="team-member-wrapper">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="testimonial-wrapper theme-slick-slider" data-slick-setting='{

"slidesToShow": 4,

"slidesToScroll": 1,

"arrows": true,

"dots": true,

"autoplay": false,

"autoplaySpeed": 5000,

"speed": 500,

"prevArrow": {"buttonClass": "slick-prev", "iconClass": "fa fa-angle-left" },

"nextArrow": {"buttonClass": "slick-next", "iconClass": "fa fa-angle-right" }

}' data-slick-responsive='[

{"breakpoint":1501, "settings": {"slidesToShow": 1, "arrows": true} },

{"breakpoint":1199, "settings": {"slidesToShow": 1, "arrows": true} },

{"breakpoint":991, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },

{"breakpoint":767, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },

{"breakpoint":575, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} },

{"breakpoint":479, "settings": {"slidesToShow": 1, "arrows": false, "slidesToScroll": 1} }

]'>

                                <!--=======  single testimonial  =======-->


                                <?php foreach ($records as $k => $roo) : ?>

                                    <!--=======  single team member  =======-->
                                    <div class="col-md-12">
                                        <div class="single-team-member">
                                            <div class="single-team-member__image">
                                                <img src="<?php base_url() ?>media/image/<?= $roo->Image ?>" class="img-fluid" alt="">
                                            </div>
                                            <div class="single-team-member__content">
                                                <h3 class="name"><?= $roo->Name ?></h3>
                                                <h4 class="designation"><?= $roo->Designation ?></h4>
                                                <p class="short-desc text-justify "><?= $roo->Description ?> </p>

                                                
                                            </div>
                                        </div>
                                    </div>



                                    <!--=======  End of single team member  =======-->

                                <?php endforeach ?>

                                <!--=======  End of single testimonial  =======-->

                            </div>
                        </div>


                    </div>
                </div>

                <!--=======  End of team members wrapper  =======-->
            </div>
        </div>
    </div>
</div>

<!--=======  End of team member area  =======-->

<?php include('include/footer.php') ?>