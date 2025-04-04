<?php include('include/header.php') ?>

<main>

    <section>
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                <?php

                $x = 1;
                foreach ($brands as $bra) : ?>
                    <div class="carousel-item  <?php
                                                if ($x === 1) {
                                                    echo 'active';
                                                }
                                                ?>">
                        <div class="hero-area-3 hero-height-3" data-background="<?= base_url() ?>media/image/<?= $bra->Image ?>">
                            <div class="container">
                                <div class="row justify-content-center">
                                    <div class="col-xl-8 text-center">
                                        <div class="hero-university-text">
                                            <span><?= $bra->BrandTitle ?></span>
                                            <h3 class="fs-1 text-white pb-3"><?= $bra->BrandTitle2 ?></h3>
                                        </div>
                                        <div class="university-btn">
                                            <a class="edu-five-btn" href="<?= base_url() ?>About-Us">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php
                    $x++;

                endforeach; ?>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </section>
    <!-- hero-area-start -->

    <!-- hero-area-end -->
    <!-- university-card-area-start -->
    <div class="university-card">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12">
                    <div class="university-main-wraper d-flex align-items-center">
                        <div class="university-course-box">
                            <div class="university-card-text">
                                <p>Discover yourself</p>
                                <h3>Find your Skill and Earn
                                    <span>Certificates</span>
                                </h3>
                                <a class="edu-six-btn" href="<?= base_url() ?>Courses">View courses</a>
                            </div>
                        </div>
                        <div class="university-card-wrapper">
                            <div class="university-card-icon">

                                <svg id="Page-1" xmlns="http://www.w3.org/2000/svg" width="31.154" height="31.157" viewBox="0 0 31.154 31.157">
                                    <g id="_001---Degree" data-name="001---Degree" transform="translate(0 0)">
                                        <path id="Shape" d="M45.965,36.371c0,2.965-.483,5.371-1.074,5.371A82.894,82.894,0,0,0,34,40.733L32.666,40.1A3.214,3.214,0,0,0,32,36.119c-.016-1.783.816-3.309.478-4.066A86.359,86.359,0,0,0,44.891,31C45.482,31,45.965,33.406,45.965,36.371Z" transform="translate(-14.811 -14.349)" fill="#f8e8ab" />
                                        <path id="Shape-2" data-name="Shape" d="M8.062,9.164l-7.7-2.75a.537.537,0,0,1,0-1.01L15.394.032a.565.565,0,0,1,.376,0L30.8,5.4a.537.537,0,0,1,0,1.01l-3.438,1.23-1.488.532L23.1,9.164Z" transform="translate(-0.005 0)" fill="#393f4b" />
                                        <g id="Group_2930" data-name="Group 2930" transform="translate(1.074 16.651)">
                                            <path id="Shape-3" data-name="Shape" d="M2.075,50.97,2,50.986A.171.171,0,0,0,2.075,50.97Z" transform="translate(-2 -40.243)" fill="#f8e8ab" />
                                            <path id="Shape-4" data-name="Shape" d="M2.064,31.011A.608.608,0,0,1,2,31,.268.268,0,0,1,2.064,31.011Z" transform="translate(-2 -31)" fill="#f8e8ab" />
                                            <path id="Shape-5" data-name="Shape" d="M2.13,31.02a85.412,85.412,0,0,0,11.683,1.026c.355.784,1.676,2.433,1.676,4.335,0,.129,0,.252-.005.376a3.223,3.223,0,0,0-.118,3.352l-1.327.6a87.272,87.272,0,0,0-11.9,1.026Z" transform="translate(-2.06 -31.009)" fill="#f8e8ab" />
                                        </g>
                                        <path id="Shape-6" data-name="Shape" d="M24.476,37.641c.005-.124.005-.247.005-.376a12.333,12.333,0,0,0-.6-4.335c.881.027,1.8.038,2.75.038.714,0,1.413-.005,2.089-.021a11.78,11.78,0,0,1,.591,4.066Z" transform="translate(-11.053 -15.242)" fill="#ba3a23" />
                                        <path id="Shape-7" data-name="Shape" d="M26.153,49.584l-1.429,3.422a.537.537,0,0,1-.994.016l-.392-.9-.9.387a.533.533,0,0,1-.709-.688l1.364-3.277.252-.6Z" transform="translate(-10.039 -22.19)" fill="#ba3a23" />
                                        <path id="Shape-8" data-name="Shape" d="M32.809,47.94l.263.634,1.354,3.244a.533.533,0,0,1-.709.688l-.9-.387-.392.9a.537.537,0,0,1-.994-.016L30,49.584Z" transform="translate(-13.886 -22.19)" fill="#ba3a23" />
                                        <path id="Shape-9" data-name="Shape" d="M15,17.52V11.611C15,10.72,18.368,10,22.52,10s7.52.72,7.52,1.611V17.52Z" transform="translate(-6.943 -4.629)" fill="#464f5e" />
                                        <path id="Shape-10" data-name="Shape" d="M49.537,11.038A.537.537,0,0,1,49,10.5V6.977a.537.537,0,1,1,1.074,0V10.5A.537.537,0,0,1,49.537,11.038Z" transform="translate(-22.68 -2.981)" fill="#edc100" />
                                        <path id="Shape-11" data-name="Shape" d="M48,15.074v1.611a.537.537,0,0,0,.537.537h1.074a.537.537,0,0,0,.537-.537V15.074a1.074,1.074,0,0,0-2.149,0Z" transform="translate(-22.217 -6.48)" fill="#f1d24b" />
                                        <ellipse id="Oval" cx="7.52" cy="1.611" rx="7.52" ry="1.611" transform="translate(8.057 11.28)" fill="#393f4b" />
                                        <path id="Shape-12" data-name="Shape" d="M2.149,36.371c0,2.836-.44,5.162-1,5.355a.171.171,0,0,1-.075.016C.483,41.743,0,39.336,0,36.371S.483,31,1.074,31a.02.02,0,0,1,.016.005c.011,0,.027.005.048.005h.005C1.7,31.2,2.149,33.524,2.149,36.371Z" transform="translate(0 -14.349)" fill="#e2be50" />
                                        <path id="Shape-13" data-name="Shape" d="M30.446,42.223A3.223,3.223,0,1,1,27.223,39a3.157,3.157,0,0,1,2.143.822A3.2,3.2,0,0,1,30.446,42.223Z" transform="translate(-11.109 -18.052)" fill="#e04c34" />
                                    </g>
                                </svg>
                            </div>
                            <div class="university-card-content">
                                <h3>Certificates

                                </h3>
                                <p>Earn Certificates
                                    and Degrees</p>
                            </div>
                        </div>
                        <div class="university-card-wrapper">
                            <div class="university-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="27.226" height="31.157" viewBox="0 0 27.226 31.157">
                                    <g id="graduation" transform="translate(-14.464 -7.667)">
                                        <path id="Path_7625" data-name="Path 7625" d="M56.083,71.641s0,0,0-.007a10.235,10.235,0,0,1-1.452,1.333,4.43,4.43,0,0,1-2.642,1.053h-.174a4.418,4.418,0,0,1-2.63-1.053,10.222,10.222,0,0,1-1.444-1.323s0,0,0,.007l-.4,2.3a.23.23,0,0,0,.1.235l3.029,2.072a.318.318,0,0,0,.18.055h2.547a.32.32,0,0,0,.181-.055l3.029-2.071a.23.23,0,0,0,.1-.235Z" transform="translate(-23.827 -46.381)" fill="#ffd0ca" />
                                        <path id="Path_7626" data-name="Path 7626" d="M15.775,89.338a.279.279,0,0,1-.275-.286l.192-4.772c.073-1.8,1.588-2.74,2.722-3.294.429-.209.867-.4,1.29-.59a9.986,9.986,0,0,0,4-2.584.28.28,0,0,1,.366-.055l3.788,2.508h1.943l3.809-2.486a.278.278,0,0,1,.362.055A10.307,10.307,0,0,0,37.984,80.4c.422.188.852.38,1.269.583,1.134.554,2.65,1.5,2.722,3.294l.192,4.772a.278.278,0,0,1-.275.286Z" transform="translate(-0.751 -50.789)" fill="#cdcdcf" />
                                        <path id="Path_7627" data-name="Path 7627" d="M52.862,105.74l1.454-5.407h3.217l1.453,5.407Z" transform="translate(-27.842 -67.191)" fill="#ffb013" />
                                        <path id="Path_7628" data-name="Path 7628" d="M21.438,30.685h1.1v3.737h-1.1Z" transform="translate(-5.057 -16.69)" fill="#ff7833" />
                                        <path id="Path_7629" data-name="Path 7629" d="M18.652,46.259a.275.275,0,0,1-.275-.275V44.668a1.392,1.392,0,1,1,2.783,0v1.316a.275.275,0,0,1-.275.275Z" transform="translate(-2.837 -25.819)" fill="#ff5702" />
                                        <path id="Path_7630" data-name="Path 7630" d="M20.463,43.966a1.382,1.382,0,0,1,.371.938V46.22a.275.275,0,0,1-.275.275H18.385a.275.275,0,0,0,.273.263h2.233a.275.275,0,0,0,.275-.275V45.168A1.387,1.387,0,0,0,20.463,43.966Z" transform="translate(-2.843 -26.32)" fill="#eb5002" />
                                        <path id="Path_7631" data-name="Path 7631" d="M22.688,16.517a.273.273,0,0,1-.069-.009l-6.95-1.832a.275.275,0,0,1-.036-.519L28.7,8.688a.272.272,0,0,1,.106-.021.277.277,0,0,1,.106.021l13.059,5.469a.275.275,0,0,1-.036.519l-6.949,1.831a.268.268,0,0,1-.07.009.277.277,0,0,1-.108-.022,15.333,15.333,0,0,0-12.014,0,.272.272,0,0,1-.106.022Z" transform="translate(-0.724 -0.725)" fill="#fff" />
                                        <path id="Path_7632" data-name="Path 7632" d="M55.5,91.215l-.813-2.8L56.015,87h2.465l1.328,1.413-.813,2.8Z" transform="translate(-29.165 -57.523)" fill="#ffb013" />
                                        <path id="Path_7633" data-name="Path 7633" d="M50.444,30a16.444,16.444,0,0,0-12.878,0l-1.134.658,1.389.366A.27.27,0,0,0,38,31.009a15.333,15.333,0,0,1,12.014,0,.277.277,0,0,0,.108.022.268.268,0,0,0,.07-.009l1.48-.39Z" transform="translate(-15.928 -15.24)" fill="#483434" />
                                        <path id="Path_7634" data-name="Path 7634" d="M67.621,84.026a1.1,1.1,0,0,0,1.679-.048l3.244-4.069a7.966,7.966,0,0,1-2.8-2.012.277.277,0,0,0-.362-.055l-3.809,2.486h-.7a.818.818,0,0,0,.165.826Z" transform="translate(-36.52 -50.851)" fill="#c0c0c2" />
                                        <path id="Path_7635" data-name="Path 7635" d="M65.043,87.826l1.732,1.928.389-1.341L65.835,87h-.956a.818.818,0,0,0,.165.826Z" transform="translate(-36.52 -57.523)" fill="#fff" />
                                        <path id="Path_7636" data-name="Path 7636" d="M40.741,34.934V32.025l.167-.071a15.893,15.893,0,0,1,12.445,0l.167.071v2.909Z" transform="translate(-19.053 -16.69)" fill="#403134" />
                                        <path id="Path_7637" data-name="Path 7637" d="M35.208,79.927l3.182,3.988a1.1,1.1,0,0,0,1.677.05l2.58-2.875a.819.819,0,0,0,.162-.825h-.694l-3.788-2.509a.28.28,0,0,0-.366.055,7.8,7.8,0,0,1-2.8,2.037Z" transform="translate(-15.005 -50.788)" fill="#c0c0c2" />
                                        <path id="Path_7638" data-name="Path 7638" d="M54.687,88.413l.388,1.341,1.732-1.93A.819.819,0,0,0,56.97,87h-.955Z" transform="translate(-29.165 -57.523)" fill="#fff" />
                                        <path id="Path_7639" data-name="Path 7639" d="M43.53,80.727,40.951,83.6a.55.55,0,0,1-.838-.025l-3.167-3.97L36.94,79.6l.283-.159a7.458,7.458,0,0,0,1.77-1.328c.089-.1.18-.192.261-.294a.278.278,0,0,1,.366-.055l3.788,2.507.069.047a.273.273,0,0,1,.052.412Z" transform="translate(-16.297 -50.791)" fill="#ebf4ff" />
                                        <path id="Path_7640" data-name="Path 7640" d="M73.492,79.651,70.32,83.629a.55.55,0,0,1-.838.025L66.9,80.781a.273.273,0,0,1,.052-.412l.071-.047,3.808-2.485a.266.266,0,0,1,.151-.047.275.275,0,0,1,.212.1,6.033,6.033,0,0,0,1.066.992,8.934,8.934,0,0,0,.947.608c.094.053.191.1.283.159Z" transform="translate(-37.97 -50.845)" fill="#ebf4ff" />
                                        <path id="Path_7641" data-name="Path 7641" d="M86.867,48.765a1.267,1.267,0,0,0-.9-.357h-.991V50.12a5.333,5.333,0,0,1-.471,2.089c.069.112.912.018,1.026.018a1.677,1.677,0,0,0,1.62-1.6l.082-.843a1.375,1.375,0,0,0-.369-1.019Z" transform="translate(-50.788 -29.54)" fill="#ffdad1" />
                                        <path id="Path_7642" data-name="Path 7642" d="M87.175,51.644l-.075.768a1.677,1.677,0,0,1-1.62,1.6c-.078,0-.495.044-.774.036q-.086.255-.194.507c.069.112.912.018,1.026.018a1.677,1.677,0,0,0,1.62-1.6l.082-.843A1.706,1.706,0,0,0,87.175,51.644Z" transform="translate(-50.79 -31.887)" fill="#ffd3d1" />
                                        <path id="Path_7643" data-name="Path 7643" d="M35.809,50.113V48.4h-.981a1.267,1.267,0,0,0-.9.359,1.4,1.4,0,0,0-.368,1.045l.08.809a1.682,1.682,0,0,0,1.622,1.608c.183,0,1.015-.018,1.017-.014a5.333,5.333,0,0,1-.474-2.093Z" transform="translate(-13.846 -29.535)" fill="#ffdad1" />
                                        <path id="Path_7644" data-name="Path 7644" d="M47.04,54.349a4.488,4.488,0,0,1-2.687-1.065c-1.74-1.293-3.613-3.745-3.613-6.071V44.4H53.519v2.813c0,2.326-1.873,4.778-3.613,6.072a4.5,4.5,0,0,1-2.7,1.064Z" transform="translate(-19.052 -26.634)" fill="#ffdad1" />
                                        <path id="Path_7645" data-name="Path 7645" d="M85.088,34.691c-.192-.082-.385-.157-.58-.231v3.212h.746V34.762Z" transform="translate(-50.788 -19.427)" fill="#3d312f" />
                                        <path id="Path_7646" data-name="Path 7646" d="M57.11,71.641s0,0,0-.007a10.235,10.235,0,0,1-1.452,1.333,4.43,4.43,0,0,1-2.642,1.053h-.174a4.418,4.418,0,0,1-2.63-1.053,10.222,10.222,0,0,1-1.444-1.323s0,0,0,.007l-.02.11a10.322,10.322,0,0,0,1.917,1.888,4.488,4.488,0,0,0,2.687,1.065h.168a4.5,4.5,0,0,0,2.7-1.064A9.739,9.739,0,0,0,57.3,72.7Z" transform="translate(-24.854 -46.381)" fill="#ffc4ca" />
                                        <path id="Path_7647" data-name="Path 7647" d="M62.432,44.4v2.309c0,2.326-1.873,4.778-3.613,6.072a4.5,4.5,0,0,1-2.7,1.064h-.167a3.775,3.775,0,0,1-1.854-.518,4.416,4.416,0,0,0,2.628,1.022h.167a4.5,4.5,0,0,0,2.7-1.064c1.739-1.294,3.612-3.746,3.612-6.072V44.4Z" transform="translate(-28.739 -26.634)" fill="#ffd3d1" />
                                        <path id="Path_7648" data-name="Path 7648" d="M15.774,95.745a.275.275,0,0,1-.275-.286l.192-4.772c.073-1.8,1.588-2.74,2.722-3.294.426-.208.859-.4,1.278-.589l.568-.256,6.4,9.2Z" transform="translate(-0.75 -57.196)" fill="#fff" />
                                        <path id="Path_7649" data-name="Path 7649" d="M71.919,95.745l6.4-9.2.566.255c.423.189.857.383,1.281.59,1.134.554,2.65,1.5,2.722,3.294l.192,4.772a.275.275,0,0,1-.275.286Z" transform="translate(-41.659 -57.196)" fill="#fff" />
                                        <path id="Path_7650" data-name="Path 7650" d="M53.1,116.833l-.234.871h6.124l-.234-.871Z" transform="translate(-27.842 -79.154)" fill="#eb5002" />
                                        <path id="Path_7651" data-name="Path 7651" d="M15.523,116.833l-.024.585a.275.275,0,0,0,.275.286H26.656l-.6-.871Z" transform="translate(-0.75 -79.154)" fill="#483434" />
                                        <path id="Path_7652" data-name="Path 7652" d="M72.524,116.833l-.605.871H82.8a.275.275,0,0,0,.275-.286l-.024-.584Z" transform="translate(-41.659 -79.154)" fill="#483434" />
                                        <path id="Path_7653" data-name="Path 7653" d="M41.5,33.48c-.078-1.943-1.679-2.945-2.876-3.53-.422-.206-.856-.4-1.276-.587a10.116,10.116,0,0,1-3.908-2.493.55.55,0,0,0-.635-.158l-.234-1.2a9.857,9.857,0,0,0,1.616-2.465h.561A1.954,1.954,0,0,0,36.64,21.2l.081-.817,0-.052a1.644,1.644,0,0,0-.449-1.213,1.545,1.545,0,0,0-1.091-.44h-.442V15.94l6.539-1.723a.55.55,0,0,0,.072-1.039L28.295,7.71a.55.55,0,0,0-.424,0L14.8,13.178a.55.55,0,0,0,.072,1.039l1.508.4v2.663a1.668,1.668,0,0,0-1.117,1.571v1.316a.55.55,0,0,0,.55.55h2.233a.55.55,0,0,0,.55-.55V18.848a1.668,1.668,0,0,0-1.117-1.571V14.9l3.931,1.036v2.743h-.432a1.545,1.545,0,0,0-1.091.44,1.644,1.644,0,0,0-.449,1.213l.082.854a1.958,1.958,0,0,0,1.895,1.863h.552a9.854,9.854,0,0,0,1.613,2.464l-.223,1.166a.548.548,0,0,0-.616.168,9.792,9.792,0,0,1-3.9,2.505c-.428.189-.87.385-1.3.594-1.2.584-2.8,1.586-2.876,3.53l-.192,4.772a.555.555,0,0,0,.55.572H41.14a.559.559,0,0,0,.55-.572Zm-24-13.866H16.365v-.766a.567.567,0,1,1,1.134,0Zm7.639,7.348a4.738,4.738,0,0,0,2.851,1.119h.089a4.757,4.757,0,0,0,2.942-1.118c.2-.152.41-.321.615-.5l.175.892L28.973,29.2H27.194l-2.837-1.879.165-.863C24.727,26.641,24.933,26.81,25.137,26.962Zm.545,5.113.4,1.454-.93,3.458-4.91-7.06c.228-.106.454-.216.678-.332L23.8,33.21a.55.55,0,0,0,.414.207h.016a.55.55,0,0,0,.409-.183Zm1.36.791L26.554,31.1l.721-.8h1.617l.721.8-.489,1.763Zm3.038.663.4-1.454,1.039,1.158a.55.55,0,0,0,.409.183h.016a.55.55,0,0,0,.414-.207l2.887-3.62q.335.174.677.333l-4.914,7.065Zm4.2-4.493-2.375,2.979-1.933-2.155,2.946-1.923a7.568,7.568,0,0,0,1.362,1.1Zm.9-9.255a.457.457,0,0,1,.312.116.577.577,0,0,1,.128.409l-.079.8a.868.868,0,0,1-.8.842H34.57a5.212,5.212,0,0,0,.171-1.283v-.887Zm-7.1-10.969,11.352,4.754-5.2,1.371a16.171,16.171,0,0,0-12.31,0l-5.2-1.37Zm-5.57,7.077a15.062,15.062,0,0,1,11.129,0v1.693H22.513Zm-1.094,6.064a.874.874,0,0,1-.8-.857l-.078-.789a.577.577,0,0,1,.128-.409.457.457,0,0,1,.312-.116h.432v.888a5.213,5.213,0,0,0,.171,1.283Zm1.094-3.272H33.642v1.987c0,1.722-1.38,4-3.28,5.41a3.575,3.575,0,0,1-2.269.9h-.031a3.563,3.563,0,0,1-2.269-.9c-1.9-1.413-3.28-3.687-3.28-5.408Zm.754,9.237,2.927,1.94-1.935,2.158-2.369-2.972a7.469,7.469,0,0,0,1.378-1.124Zm-7.5,5.606c.042-1.046.739-1.844,2.259-2.586.391-.191.8-.373,1.2-.55l5.1,7.335H15.6Zm10.33,4.2,1.01-3.757h1.952l1.01,3.757Zm5.742,0,5.1-7.337c.4.178.808.361,1.2.551,1.521.742,2.217,1.54,2.26,2.586l.169,4.2Z" transform="translate(0)" fill="#032770" />
                                    </g>
                                </svg>
                            </div>
                            <div class="university-card-content">
                                <h3>Grow up</h3>
                                <p>Increase your Higher
                                    Education Level with us.</p>
                            </div>
                        </div>
                        <div class="university-card-wrapper">
                            <div class="university-card-icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32.11" height="31.157" viewBox="0 0 32.11 31.157">
                                    <g id="_x31_9_Know_How" transform="translate(0 -0.9)">
                                        <g id="Group_2915" data-name="Group 2915" transform="translate(0 0.9)">
                                            <g id="Group_2910" data-name="Group 2910" transform="translate(0.502 0.502)">
                                                <path id="Path_7654" data-name="Path 7654" d="M12.9,1.9H30.711V26.233H12.9Z" transform="translate(-6.93 -1.9)" fill="#fff" />
                                                <g id="Group_2909" data-name="Group 2909">
                                                    <path id="Path_7655" data-name="Path 7655" d="M6.97,1.9H3.96A2.923,2.923,0,0,0,1,4.81V29.143a2.966,2.966,0,0,1,2.96-2.96H6.97Z" transform="translate(-1 -1.9)" fill="#4de2c9" />
                                                </g>
                                                <path id="Path_7656" data-name="Path 7656" d="M24.782,56.27a5.617,5.617,0,0,1,0-5.87H3.96A2.934,2.934,0,0,0,1,53.36a2.966,2.966,0,0,0,2.96,2.96Z" transform="translate(-1 -26.067)" fill="#fff" />
                                            </g>
                                            <g id="Group_2911" data-name="Group 2911" transform="translate(22.161 20.872)">
                                                <path id="Path_7657" data-name="Path 7657" d="M48.4,50.227a2.114,2.114,0,1,1-4.214-.251l.8-7.476h2.659C48.4,50.277,48.4,50.026,48.4,50.227Z" transform="translate(-44.17 -42.5)" fill="#ffcd7e" />
                                            </g>
                                            <path id="Path_7658" data-name="Path 7658" d="M48.416,37.7v1.4a1.006,1.006,0,0,1-1,1H44.7a1.006,1.006,0,0,1-1-1V37.7a7.128,7.128,0,0,0,4.716,0Z" transform="translate(-21.775 -19.237)" fill="#fff" />
                                            <g id="Group_2912" data-name="Group 2912" transform="translate(16.958 4.214)">
                                                <path id="Path_7659" data-name="Path 7659" d="M48.45,16.625A7.325,7.325,0,1,1,41.125,9.3,7.3,7.3,0,0,1,48.45,16.625Z" transform="translate(-33.8 -9.3)" fill="#ff787d" />
                                            </g>
                                            <g id="Group_2914" data-name="Group 2914">
                                                <path id="Path_7660" data-name="Path 7660" d="M48.436,18.668A5.268,5.268,0,1,1,43.168,13.4,5.267,5.267,0,0,1,48.436,18.668Z" transform="translate(-18.885 -7.128)" fill="#fff" />
                                                <g id="Group_2913" data-name="Group 2913">
                                                    <path id="Path_7661" data-name="Path 7661" d="M22.7,9.3h7.476a.5.5,0,0,0,0-1H22.7a.5.5,0,0,0,0,1Z" transform="translate(-11.062 -4.587)" fill="#33226e" />
                                                    <path id="Path_7662" data-name="Path 7662" d="M32.11,12.44a7.848,7.848,0,0,0-7.325-7.827V1.4a.474.474,0,0,0-.5-.5H3.462A3.459,3.459,0,0,0,0,4.312V28.645a3.415,3.415,0,0,0,3.412,3.412H24.233a2.591,2.591,0,0,0,2.609-2.609c0-.2,0,0-.753-7.325a1.529,1.529,0,0,0,1-1.4v-1.1A7.565,7.565,0,0,0,32.11,12.44ZM23.782,4.613a7.946,7.946,0,0,0-5.268,2.509H9.884a.5.5,0,0,0,0,1h7.877a15.118,15.118,0,0,0-.8,1.555H9.884a.5.5,0,1,0,0,1h6.773a7.756,7.756,0,0,0-.2,1.555H11.64a.5.5,0,1,0,0,1h4.867a7.833,7.833,0,0,0,4.917,6.472v1.1a1.461,1.461,0,0,0,1,1.4l-.351,3.01H6.974V1.9H23.782ZM25.638,21.27H22.929a.5.5,0,0,1-.5-.5v-.753a7.745,7.745,0,0,0,3.713,0v.753A.5.5,0,0,1,25.638,21.27ZM1,4.312A2.452,2.452,0,0,1,3.412,1.853H5.92v23.33H3.412a3.412,3.412,0,0,0-2.408,1ZM1,28.7a2.409,2.409,0,0,1,2.408-2.408H21.925l-.2,1.907H6.422a.5.5,0,0,0-.5.5.474.474,0,0,0,.5.5h15.2a2.546,2.546,0,0,0,.552,1.957H3.462A2.53,2.53,0,0,1,1,28.7ZM24.283,31.1a1.6,1.6,0,0,1-1.2-.552,1.652,1.652,0,0,1-.4-1.254l.753-7.024h1.756c.552,5.569.753,7.124.753,7.225A1.66,1.66,0,0,1,24.283,31.1Zm0-11.841a6.823,6.823,0,1,1,6.823-6.823,6.831,6.831,0,0,1-6.823,6.823Z" transform="translate(0 -0.9)" fill="#33226e" />
                                                    <path id="Path_7663" data-name="Path 7663" d="M42.67,12.4a5.77,5.77,0,1,0,5.77,5.77,5.8,5.8,0,0,0-5.77-5.77Zm0,10.536a4.766,4.766,0,1,1,4.766-4.766A4.8,4.8,0,0,1,42.67,22.936Z" transform="translate(-18.386 -6.63)" fill="#33226e" />
                                                </g>
                                            </g>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                            <div class="university-card-content">
                                <h3>Easy</h3>
                                <p>Learn From Anywhere, Any Time.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- university-card-area-end -->






    <!-- <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">

            <?php

            $x = 1;
            foreach ($brands as $bra) : ?>
                <div class="carousel-item
                <?php
                if ($x === 1) {
                    echo 'active';
                }
                ?>
                ">
                    <img src="<?= base_url() ?>media/image/<?= $bra->Image ?>" class="d-block w-100" alt="<?= $bra->Image ?>">
                </div>
            <?php
                $x++;

            endforeach; ?>



        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div> -->

    <!-- hero-area end-->
    <section class="about-area p-relative pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="about-img">

                        <img src="<?= base_url() ?>assets/the-new-castle-about-us.jpg" class="w-100" alt="">

                    </div>
                </div>
                <div class="col-md-6 d-flex align-items-center">
                    <div class="about-content ">
                        <div class="section-title mb-10">

                            <h5>Welcome to</h5>
                            <h2 class="text-uppercase">Certified Institute of Business Management


                            </h2>
                        </div>
                        <div class="student-choose-list mb-0 text-justify">
                            <p>The qualifications offered by The CIBM
 are developed to help you gain skills required to succeed and make a difference in the work place.</p>
                            <p>
                            <p>Improve your career prospects</p>

                            <p>CIBM qualifications are respected and recognized the world over. The qualifications you earn are well researched and are designed as per today's workplace requirements. Therefore the qualifications of CIBM are recognized and respected by the employers of esteemed companies across the world. The qualification gives you the right skills, competencies and experience you need to succeed in your chosen career and it facilitate you to work as a dynamic cooperate player in the industry.
                            </p>
                            <ul>

                                <li><i class="far fa-check"></i> Our programs are Cost Effective.</li>
                                <li><i class="far fa-check"></i> You can study Anytime - Anywhere.</li>
                                <li><i class="far fa-check"></i> Suited After A/L Students.</li>
                                <li><i class="far fa-check"></i> 100% Online with Live Tutor Support.</li>

                            </ul>



                            <a href="<?= base_url() ?>About-Us" class="edu-thard-btn fw-bold text-black"> Read More
                                <!-- <i class="fa fa-arrow-right fs-6 ml-10  text-white"></i> -->
                            </a>


                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>



    <div class="edu-webinar-area pt-60 pb-60  section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center mb-55">

                        <h2 class="">
                            Study Programs
                        </h2>
                    </div>
                </div>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="owl-carousel owl-theme owl-carousel-degree ">
                        <div class="item">
                            <div class="academic-box mb-30">
                                <div class="academic-thumb">
                                    <img src="<?= base_url() ?>assets/img/Business-Management-Degree.jpg" alt="CIBM">
                                </div>
                                <div class="academic-content">
                                    <div class="academic-content-header">

                                        <h3 class="fs-5 text-nowrap">Business Management</h3>

                                    </div>
                                    <div class="academic-body mb-0">

                                        <p class="text-justify">A Business Management degree is an undergraduate or graduate-level academic program that prepares students for leadership roles in the business world.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="academic-box mb-30">
                                <div class="academic-thumb">
                                    <img src="<?= base_url() ?>assets/img/Hospitality-&-Tourism-Management.jpg" alt="CIBM">
                                </div>
                                <div class="academic-content">
                                    <div class="academic-content-header">

                                        <h3 class="fs-5 text-nowrap">Hospitality & Tourism Management</h3>

                                    </div>
                                    <div class="academic-body mb-0">

                                        <p class="text-justify">A Hospitality & Tourism Management degree program is an academic program that prepares students for a career in the hospitality and tourism industry.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="academic-box mb-30">
                                <div class="academic-thumb">
                                    <img src="<?= base_url() ?>assets/img/Digital-Marketing.jpg" alt="CIBM">
                                </div>
                                <div class="academic-content">
                                    <div class="academic-content-header">

                                        <h3 class="fs-5 text-nowrap">Digital Marketing</h3>

                                    </div>
                                    <div class="academic-body mb-0">

                                        <p class="text-justify">A Digital Marketing degree program is an academic program that prepares students for a career in the digital marketing industry.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="academic-box mb-30">
                                <div class="academic-thumb">
                                    <img src="<?= base_url() ?>assets/img/Entrepreneurship-Management.jpg" alt="CIBM">
                                </div>
                                <div class="academic-content">
                                    <div class="academic-content-header">

                                        <h3 class="fs-5 text-nowrap">Entrepreneurship Management</h3>

                                    </div>
                                    <div class="academic-body mb-0">

                                        <p class="text-justify">An Entrepreneurship Management degree program is an academic program that prepares students to start and manage their own businesses.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="academic-box mb-30">
                                <div class="academic-thumb">
                                    <img src="<?= base_url() ?>assets/img/Certified-English-Diploma.jpg" alt="CIBM">
                                </div>
                                <div class="academic-content">
                                    <div class="academic-content-header">

                                        <h3 class="fs-5 text-nowrap">Certified English Diploma</h3>

                                    </div>
                                    <div class="academic-body mb-0">

                                        <p class="text-justify">A Certified English Diploma (CED) is a credential awarded to individuals who demonstrate proficiency in the English language.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div class="academic-box mb-30">
                                <div class="academic-thumb">
                                    <img src="<?= base_url() ?>assets/img/Human-Resources-Management.jpg" alt="CIBM">
                                </div>
                                <div class="academic-content">
                                    <div class="academic-content-header">

                                        <h3 class="fs-5 text-nowrap">Human Resources Management</h3>

                                    </div>
                                    <div class="academic-body mb-0">

                                        <p class="text-justify">Human Resources Management (HRM) is an essential function of any organization. It is concerned with managing the organization's workforce and ensuring that they are aligned with the company's goals and objectives.
                                        </p>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </div>

    <!-- testimonial-area-start -->
    <div class="testimonial-area pt-60 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 offset-lg-3">
                    <div class="section-title text-center mb-55">
                        <h5>Testimonials
                        </h5>
                        <h2 class="">
                            Student's Feedback
                        </h2>
                    </div>
                </div>
            </div>
            <!-- Slider main container -->
            <div class="swiper-container testimonial-active">
                <!-- Additional required wrapper -->
                <div class="swiper-wrapper">

                    <?php
                    foreach ($records as $testi) : ?>


                        <!-- Slides -->
                        <div class="swiper-slide">
                            <div class="testimonial-items position-relative">
                                <div class="testimonial-header">
                                    <div class="testimonial-img">

                                        <!-- default.jpg -->

                                        <?php

                                        if (empty($testi->Image)) {



                                            echo '
                                            <img src="assets/default.png" class="testi-img" alt="">
                                                ';
                                        } else {
                                            echo '

                                                 <img src="media/image/' . $testi->Image . '" class="testi-img" alt="">

                                                ';
                                        }

                                        ?>




                                    </div>
                                    <div class="testimonial-title">
                                        <h4><?= $testi->Name ?></h4>
                                        <span><?= $testi->Designation ?></span>
                                    </div>
                                </div>
                                <div class="testimoni-quotes">
                                    <img src="<?= base_url() ?>assets/img/testimonial/quotes.png" alt="CIBM">

                                </div>
                                <div class="testimonial-body">

                                    <p class="text-justify"><?= $testi->Description ?></p>
                                </div>
                                <div class="testimonial-icon">
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                    <i class="fas fa-star"></i>
                                </div>
                            </div>
                        </div>

                    <?php
                    endforeach; ?>


                </div>
                <!-- If we need pagination -->
                <div class="testimonial-pagination text-center"></div>
            </div>
        </div>
    </div>
    <!-- testimonial-area-end -->

    <div class="know-us-better-area pb-90  section-bg">
        <div class="container">
            <div class="know-us-border pt-110">
                <div class="row justify-content-center">
                    <div class="col-xl-10 col-lg-12">
                        <div class="row">
                            <div class="col-xl-6 col-lg-6">
                                <div class="section-title mb-55">
                                    <h2>Know us <span class="down-mark-line-2">Better</span> Than<br>
                                        Other Education Platform </h2>
                                </div>
                            </div>
                            <div class="col-xl-6 col-lg-6 justify-content-end">
                                <div class="know-us-tittle mb-55">
                                    <p>The qualification offered at CIBM are developed to help you gain skills required to succeed and make a difference in the work place.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="know-us-wrapper mb-30">
                            <div class="know-us-better-thumb">
                                <a href="<?= base_url() ?>Mission-Vision"><img src="assets/img/gallery/gallary-06.jpg" alt="know-us-img"></a>
                            </div>
                            <div class="know-us-text text-center">
                                <a href="<?= base_url() ?>About-Us">
                                    <h3>Our mission & vision</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="know-us-wrapper mb-30">
                            <div class="know-us-better-thumb">
                                <a href="<?= base_url() ?>About-Us"><img src="assets/img/gallery/gallary-07.jpg" alt="know-us-img"></a>
                            </div>
                            <div class="know-us-text text-center">
                                <a href="<?= base_url() ?>About-Us">
                                    <h3>Our Lecturers</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="know-us-wrapper mb-30">
                            <div class="know-us-better-thumb">
                                <a href="<?= base_url() ?>About-Us"><img src="assets/img/gallery/gallary-08.jpg" alt="know-us-img"></a>
                            </div>
                            <div class="know-us-text text-center">
                                <a href="<?= base_url() ?>About-Us">
                                    <h3>Why we're trusted</h3>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <style>
        .owl-carousel-brand img {
            padding: 0px 20px;
        }
    </style>

    <div class="blog-area pt-110 pb-90">
        <div class="container">
            <div class="row">
                <div class="col-xl-12 text-center">
                    <div class="section-title mb-50">
                        <h2>Read Our <br> <span class="down-mark-line-2">Latest</span> News & Media</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <?php
                foreach ($hardware as $hard) : ?>

                    <div class="col-xl-4 col-lg-4 col-md-6">
                        <div class="blog-wrapper position-relative mb-30">
                            <div class="blog-thumb ">
                                <a href="<?= base_url() ?>News-Details/<?= url_title($hard->HardwareTitle) ?>/<?= $hard->HardwareId ?>"><img src="<?= base_url() ?>media/image/<?= $hard->Image ?>" alt="img"></a>
                            </div>

                            <div class="blog-content-wrapper">



                                <h3><?= $hard->HardwareTitle ?></h3>
                                <p class="text-justify"><?= $hard->ShortDescription ?></p>
                                <a class="blog-btn" href="<?= base_url() ?>News-Details/<?= url_title($hard->HardwareTitle) ?>/<?= $hard->HardwareId ?>">Read more</a>

                            </div>
                        </div>
                    </div>
                <?php
                endforeach; ?>

            </div>
        </div>
    </div>
    <!--counter-area-start -->
    <div class="counter-area pt-75 pb-30" data-background="assets/img/bg/university-counter.png">
        <div class="container">
            <div class="row">
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="49.484" height="56.553" viewBox="0 0 49.484 56.553">
                                <g id="layer2" transform="translate(-1.058)">
                                    <path id="path2610" d="M25.807,0a.883.883,0,0,0-.437.11L1.51,13.427A.884.884,0,0,0,1.569,15l5.674,2.655v2.669h-.88a.884.884,0,0,0-.887.88v7.954a.886.886,0,0,0,.887.887H9.9a.884.884,0,0,0,.88-.887V21.2a.881.881,0,0,0-.88-.88H9.012v-1.84l6.6,3.086a6.425,6.425,0,0,0,1.16,1.87v.245a3.489,3.489,0,0,0,.326,6.934c.076,0,.133,0,.209-.01A9.1,9.1,0,0,0,20.5,34.832v1.92l-.26-.261a.875.875,0,0,0-1.246,0l-2.449,2.446a13.167,13.167,0,0,0-10.889,8.21A13.928,13.928,0,0,0,4.6,52.541v3.124a.884.884,0,0,0,.88.887H46.125a.884.884,0,0,0,.88-.887V52.541a13.94,13.94,0,0,0-1.1-5.479,13.211,13.211,0,0,0-10.846-8.129L32.61,36.491a.883.883,0,0,0-1.253,0l-.254.254V34.83A9.089,9.089,0,0,0,34.3,30.608c.076.007.136.01.212.01a3.487,3.487,0,0,0,.326-6.931l0-.263a6.374,6.374,0,0,0,1.153-1.852L50.032,15a.884.884,0,0,0,.059-1.573L26.232.111A.882.882,0,0,0,25.807,0ZM25.8,1.9,47.723,14.126,36.481,19.391a6.262,6.262,0,0,0-.074-1.536V12.715a1.576,1.576,0,0,0-.425-1.031,2.863,2.863,0,0,0-.8-.606,9.167,9.167,0,0,0-2.3-.791A33.157,33.157,0,0,0,25.8,9.617a33.156,33.156,0,0,0-7.077.671,9.165,9.165,0,0,0-2.3.791,2.863,2.863,0,0,0-.8.606,1.576,1.576,0,0,0-.423,1.031l0,5.125a6.565,6.565,0,0,0-.069,1.55L9.013,16.53V11.262Zm6.679,10.112a8.016,8.016,0,0,1,1.86.62,1.308,1.308,0,0,1,.3.209V16a10.326,10.326,0,0,0-1.762-.542A33.157,33.157,0,0,0,25.8,14.79a33.156,33.156,0,0,0-7.077.672,10.839,10.839,0,0,0-1.76.535V12.84a1.316,1.316,0,0,1,.3-.209,7.919,7.919,0,0,1,1.852-.62,31.8,31.8,0,0,1,6.686-.627,31.728,31.728,0,0,1,6.679.627Zm-25.236.238V15.7L3.878,14.126Zm25.236,4.935a7.962,7.962,0,0,1,1.86.627,1.919,1.919,0,0,1,.3.2.618.618,0,0,0,.023.121,5.16,5.16,0,0,1-1.1,4.065h-4.8A4.358,4.358,0,0,1,24.478,18.5a.882.882,0,0,0-1.755.124A3.6,3.6,0,0,1,19.13,22.2h-1.1a5.214,5.214,0,0,1-1.084-4.169,1.4,1.4,0,0,1,.314-.216,7.764,7.764,0,0,1,1.838-.62,31.886,31.886,0,0,1,6.7-.634,31.726,31.726,0,0,1,6.678.627Zm-8.736,4.131a6.047,6.047,0,0,0,5.018,2.648h4.306v3.549a7.266,7.266,0,0,1-14.533,0V23.963h.594a5.35,5.35,0,0,0,4.615-2.648Zm-16.5.775H9.012v6.185H7.244Zm9.524,3.389v2.033a9.307,9.307,0,0,0,.092,1.317,1.75,1.75,0,0,1-.091-3.351Zm18.067,0a1.673,1.673,0,0,1,1.2,1.662,1.651,1.651,0,0,1-1.294,1.685,9.015,9.015,0,0,0,.095-1.314ZM22.266,35.819a9.162,9.162,0,0,0,7.07,0v2.689L25.8,42.049l-3.534-3.534ZM19.61,38.363,24.555,43.3l-1.4,1.4-4.937-4.94Zm12.374,0,1.4,1.4L28.456,44.7,27.047,43.3ZM34.945,40.7a11.4,11.4,0,0,1,9.084,6.48,12.326,12.326,0,0,1,1.208,5.358v2.244H39.054v-2.65a.884.884,0,1,0-1.767,0v2.65H14.316v-2.65a.884.884,0,1,0-1.769,0v2.65H6.363V52.541A12.293,12.293,0,0,1,7.256,47.9a11.437,11.437,0,0,1,9.4-7.2l5.869,5.864a.883.883,0,0,0,1.246,0L25.8,44.547l2.03,2.023a.883.883,0,0,0,1.246,0Z" transform="translate(0 0)" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                        <div class="university-couner-text">
                            <span class="counter">1200</span>
                            <p>Students Enrolled</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="51.551" height="56.553" viewBox="0 0 51.551 56.553">
                                <g id="online-course_1_" data-name="online-course (1)" transform="translate(-35.286 -13.876)">
                                    <path id="Path_7694" data-name="Path 7694" d="M82.967,18.756H71.254l-9.375-4.688a1.837,1.837,0,0,0-1.635,0l-9.375,4.688H39.156a3.874,3.874,0,0,0-3.87,3.87V55.6a3.874,3.874,0,0,0,3.87,3.87H54.567v8.628H50.409a1.168,1.168,0,1,0,0,2.336H71.714a1.168,1.168,0,1,0,0-2.336H67.556V59.465H82.968a3.874,3.874,0,0,0,3.87-3.87V22.625A3.874,3.874,0,0,0,82.967,18.756ZM84.5,55.6a1.536,1.536,0,0,1-1.534,1.534H39.156A1.536,1.536,0,0,1,37.622,55.6V53.983H84.5ZM65.22,68.093H56.9V59.465H65.22Zm-26.064-47H46.2l-1,.5a1.829,1.829,0,0,0,0,3.271l3.954,1.977v7.655a2.828,2.828,0,0,0,2.238,2.759,47.31,47.31,0,0,0,9.667,1,47.318,47.318,0,0,0,9.667-1,2.827,2.827,0,0,0,2.238-2.759V26.837l1.138-.569v7.519a1.168,1.168,0,0,0,2.336,0V25.1l.481-.24a1.829,1.829,0,0,0,0-3.271l-1-.5h7.042A1.536,1.536,0,0,1,84.5,22.625V51.647H37.622V22.625a1.536,1.536,0,0,1,1.534-1.534Zm35.814,2.133L61.062,30.178,47.154,23.224,61.062,16.27ZM51.492,28l8.752,4.376a1.837,1.837,0,0,0,1.635,0L70.631,28v6.488a.482.482,0,0,1-.379.473,44.778,44.778,0,0,1-18.382,0,.482.482,0,0,1-.379-.473V28Z" transform="translate(0)" fill="#fff" />
                                    <path id="Path_7695" data-name="Path 7695" d="M177.721,248.258H189.4a1.168,1.168,0,1,0,0-2.336H177.721a1.168,1.168,0,1,0,0,2.336Z" transform="translate(-124.769 -204.947)" fill="#fff" />
                                    <path id="Path_7696" data-name="Path 7696" d="M112.709,248.258h2.336a1.168,1.168,0,1,0,0-2.336h-2.336a1.168,1.168,0,1,0,0,2.336Z" transform="translate(-67.35 -204.947)" fill="#fff" />
                                    <path id="Path_7697" data-name="Path 7697" d="M177.721,296.388h23.813a1.168,1.168,0,0,0,0-2.336H177.721a1.168,1.168,0,1,0,0,2.336Z" transform="translate(-124.769 -247.456)" fill="#fff" />
                                    <path id="Path_7698" data-name="Path 7698" d="M112.709,296.388h2.336a1.168,1.168,0,1,0,0-2.336h-2.336a1.168,1.168,0,1,0,0,2.336Z" transform="translate(-67.35 -247.456)" fill="#fff" />
                                </g>
                            </svg>
                        </div>
                        <div class="university-couner-text">
                            <span class="counter">100</span>
                            <p>Sessions Completed</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="56.553" height="56.553" viewBox="0 0 56.553 56.553">
                                <g id="Outline" transform="translate(-16 -16)">
                                    <path id="Path_7699" data-name="Path 7699" d="M217.414,136a1.414,1.414,0,1,0,1.414,1.414A1.414,1.414,0,0,0,217.414,136Z" transform="translate(-176.436 -105.862)" fill="#fff" />
                                    <path id="Path_7700" data-name="Path 7700" d="M289.414,136a1.414,1.414,0,1,0,1.414,1.414A1.414,1.414,0,0,0,289.414,136Z" transform="translate(-239.953 -105.862)" fill="#fff" />
                                    <path id="Path_7701" data-name="Path 7701" d="M242.828,176.943a.944.944,0,0,1-.943-.943H240a2.828,2.828,0,1,0,5.655,0H243.77a.944.944,0,0,1-.943.943Z" transform="translate(-197.609 -141.149)" fill="#fff" />
                                    <path id="Path_7702" data-name="Path 7702" d="M72.22,50.156a.944.944,0,0,0-.764-.211l-8.521,1.42a4.289,4.289,0,0,0-1.579.6l-.65-1.64a6.278,6.278,0,0,0-1.082-1.806l.246-2.229a16.326,16.326,0,0,0,.1-1.71,15.383,15.383,0,0,0-1.254-6.073,13.614,13.614,0,0,1-1.075-6.021l.16-3.263c.01-.206.02-.418.02-.629a12.6,12.6,0,1,0-25.183.63l.16,3.252c.009.243.018.472.018.7a13.437,13.437,0,0,1-1.093,5.331,15.4,15.4,0,0,0-1.155,7.79l.245,2.2a6.4,6.4,0,0,0-.746,1.079L28.78,46.356a2.776,2.776,0,1,0-5.061,2.273l.181.361H22.048a4.736,4.736,0,0,1-2.108-.5L19,48.022a2.074,2.074,0,0,0-3,1.855v2.66a2.812,2.812,0,0,0,1.563,2.529l1.534.767a6.631,6.631,0,0,0,2.951.7h.55v2.791l-.677,8.8a4.115,4.115,0,0,0,4.1,4.43q.1,0,.208-.005c.06,0,.12.005.18.005a3.794,3.794,0,0,0,3.564-2.493l4.3-8a8.244,8.244,0,0,0,1.516,3.281v7.211h1.885v-7.54a.943.943,0,0,0-.218-.6,6.426,6.426,0,0,1,.822-9.041L37.075,53.92a8.308,8.308,0,0,0-1.171,1.2.97.97,0,0,0-.1.118h0l-.017.029-.012.021a8.253,8.253,0,0,0-1.225,2.291l-4.413,8.205V54.327l1.339-3.335a4.518,4.518,0,0,1,.992-1.521,4.77,4.77,0,0,1,3.381-1.424H39l5.387,9.877a.943.943,0,0,0,1.655,0l2-3.667V66.9a.943.943,0,0,0,.758.924l3.955.791v3.94h1.885V68.99l3.606.72c.024,0,.133.015.164.015H60.2l.181.337a3.818,3.818,0,0,0,3.578,2.49,3.547,3.547,0,0,0,.621-.051,3.82,3.82,0,0,0,2.95-2.461l2.507-.418h0a1.877,1.877,0,0,0,1.571-1.763l.189-.038a.943.943,0,0,0,.758-.924V50.874A.943.943,0,0,0,72.22,50.156Zm-31.175-2.3a2.264,2.264,0,0,0,1.347-2.067V42.9a9.43,9.43,0,0,0,5.655,0v2.885a2.264,2.264,0,0,0,1.346,2.067l-1.134,2.081H42.179Zm4.174-6.4a7.549,7.549,0,0,1-7.54-7.54v-4.22a13.769,13.769,0,0,0,4.079-4.67,24.415,24.415,0,0,0,11,4.981v3.909a7.549,7.549,0,0,1-7.54,7.54Zm12.738,8.038.017.018a4.368,4.368,0,0,1,.978,1.509l.4,1.022a4.287,4.287,0,0,0-1.692-.672l-7.372-1.229,1.14-2.09h3.145A4.67,4.67,0,0,1,57.957,49.487Zm.551,5.158-4.289-.858-4.289-.858v-.943l7.424,1.237a2.387,2.387,0,0,1,1.811,1.421Zm4.736-1.42,7.424-1.237v.943l-4.433.887-4.143.828h-.658a2.387,2.387,0,0,1,1.81-1.42Zm-43.3.923-1.534-.767a.938.938,0,0,1-.521-.843v-2.66a.188.188,0,0,1,.273-.169l.939.47a6.631,6.631,0,0,0,2.951.7h3.378a.943.943,0,0,0,.843-1.364l-.863-1.726a.891.891,0,0,1,.581-1.263h0a.894.894,0,0,1,1.043.533l1.223,3.058v4.531H22.048a4.736,4.736,0,0,1-2.108-.5Zm8.313,2.383v1.885h-3.77V56.53ZM23.8,68.267l.613-7.967h3.84v8.138a2.231,2.231,0,0,1-2.068,2.222.963.963,0,0,0-.106.005l-.055,0a2.229,2.229,0,0,1-2.223-2.4ZM35.808,55.235a.942.942,0,0,1,.06-.073l-.057.074Zm-3.259-8.183-.108-.969a13.514,13.514,0,0,1,1.013-6.836A15.311,15.311,0,0,0,34.7,33.173c0-.263-.01-.522-.02-.781l-.16-3.262a10.715,10.715,0,1,1,21.416-.538c0,.166-.009.347-.018.538l-.16,3.259a15.506,15.506,0,0,0,1.224,6.856,13.509,13.509,0,0,1,1.1,5.332A14.441,14.441,0,0,1,58,46.086l-.107.971a6.592,6.592,0,0,0-3.311-.9h-4.27a.382.382,0,0,1-.377-.377V42.066a9.429,9.429,0,0,0,4.713-8.157V29.2a.943.943,0,0,0-.809-.933,22.535,22.535,0,0,1-11.248-5l-.535-.446a.943.943,0,0,0-1.446.3l-.365.73a11.874,11.874,0,0,1-4.027,4.562.943.943,0,0,0-.42.784v4.713a9.429,9.429,0,0,0,4.713,8.157v3.719a.382.382,0,0,1-.377.377H35.85a6.64,6.64,0,0,0-3.3.89ZM45.219,55.5l-2.011-3.687H47.23Zm4.713-.652,7.54,1.508V67.633l-7.54-1.508Zm9.425,1.678h1.885V67.84H59.357Zm4.9,14.115a1.685,1.685,0,0,1-.3.024,1.931,1.931,0,0,1-1.661-.95l.053-.008.021,0h.008l1.938-.388a1.86,1.86,0,0,0,.949.826A1.965,1.965,0,0,1,64.255,70.644Zm5.471-2.881h0l-3.77.628v-3.5a.284.284,0,0,1,.238-.281l3.2-.534a.309.309,0,0,1,.048,0,.285.285,0,0,1,.283.285v3.408Zm-.641-5.548-3.2.533a2.163,2.163,0,0,0-1.813,2.14v2.557l-.943.189V56.36l7.54-1.508v7.715a2.163,2.163,0,0,0-1.584-.352Z" fill="#fff" />
                                </g>
                            </svg>

                        </div>
                        <div class="university-couner-text">
                            <span class="counter">10</span><span>+</span>
                            <p>Skilled Instructors</p>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                    <div class="university-counter-wrapper text-center mb-40">
                        <div class="counter-img">
                            <svg xmlns="http://www.w3.org/2000/svg" width="59.118" height="56.553" viewBox="0 0 59.118 56.553">
                                <g id="reading" transform="translate(-17.25 -19.635)">
                                    <path id="Path_7710" data-name="Path 7710" d="M57.458,19.635a11.251,11.251,0,0,0-10.1,16.208,1.1,1.1,0,0,0,.658.565l9.1,2.89a1.1,1.1,0,0,0,.669,0l9.1-2.89a1.1,1.1,0,0,0,.658-.565,11.251,11.251,0,0,0-10.1-16.208Zm8.3,14.815-8.3,2.632-8.3-2.635a9.035,9.035,0,1,1,16.61,0Z" transform="translate(-10.649)" fill="#fff" />
                                    <path id="Path_7711" data-name="Path 7711" d="M49.361,42.825,24.721,35.01a1.107,1.107,0,0,0-1.441,1.055V50.506a1.106,1.106,0,0,0,1.106,1.106h.936a1.767,1.767,0,0,1,1.764,1.764v3.282a1.767,1.767,0,0,1-1.764,1.764h-.936a1.107,1.107,0,0,0-1.106,1.106V72.9a1.106,1.106,0,0,0,.771,1.053l24.64,7.815a1.106,1.106,0,0,0,1.441-1.055V43.878A1.107,1.107,0,0,0,49.361,42.825ZM47.92,79.2,25.493,72.089V60.63A3.983,3.983,0,0,0,29.3,56.656V53.375A3.983,3.983,0,0,0,25.493,49.4V37.577L47.92,44.69Z" transform="translate(-2.217 -5.635)" fill="#fff" />
                                    <path id="Path_7712" data-name="Path 7712" d="M88.648,35.169a1.1,1.1,0,0,0-.988-.162L63.022,42.824a1.107,1.107,0,0,0-.772,1.055V80.715a1.106,1.106,0,0,0,1.441,1.055l24.64-7.815A1.106,1.106,0,0,0,89.1,72.9V59.525A1.107,1.107,0,0,0,88,58.419h-.936A1.767,1.767,0,0,1,85.3,56.655V53.373a1.767,1.767,0,0,1,1.764-1.764H88A1.106,1.106,0,0,0,89.1,50.5V36.061a1.105,1.105,0,0,0-.455-.893ZM86.89,49.4a3.983,3.983,0,0,0-3.806,3.973v3.282a3.983,3.983,0,0,0,3.806,3.974v11.46L64.463,79.2V44.686L86.89,37.576Z" transform="translate(-16.547 -5.633)" fill="#fff" />
                                    <path id="Path_7713" data-name="Path 7713" d="M23.1,57.8H21.227a3.983,3.983,0,0,0-3.977,3.977v3.282a3.983,3.983,0,0,0,3.977,3.977H23.1a3.983,3.983,0,0,0,3.977-3.977V61.777A3.983,3.983,0,0,0,23.1,57.8Zm1.764,7.259A1.767,1.767,0,0,1,23.1,66.823H21.227a1.766,1.766,0,0,1-1.764-1.764V61.777a1.766,1.766,0,0,1,1.764-1.764H23.1a1.767,1.767,0,0,1,1.764,1.764Z" transform="translate(0 -14.034)" fill="#fff" />
                                    <path id="Path_7714" data-name="Path 7714" d="M101.055,57.8H99.177A3.983,3.983,0,0,0,95.2,61.777v3.282a3.983,3.983,0,0,0,3.977,3.977h1.878a3.983,3.983,0,0,0,3.977-3.977V61.777A3.983,3.983,0,0,0,101.055,57.8Zm1.764,7.259a1.766,1.766,0,0,1-1.764,1.764H99.177a1.767,1.767,0,0,1-1.764-1.764V61.777a1.767,1.767,0,0,1,1.764-1.764h1.878a1.766,1.766,0,0,1,1.764,1.764Z" transform="translate(-28.664 -14.034)" fill="#fff" />
                                    <g id="Group_2954" data-name="Group 2954" transform="translate(26.125 38.943)">
                                        <path id="Path_7715" data-name="Path 7715" d="M85.544,50.224l-14.514,4.6a1.106,1.106,0,1,0,.668,2.109l14.514-4.6a1.106,1.106,0,1,0-.668-2.109Z" transform="translate(-45.617 -50.172)" fill="#fff" />
                                        <path id="Path_7716" data-name="Path 7716" d="M81.228,62.395l-10.2,3.235a1.107,1.107,0,1,0,.67,2.109L81.9,64.5a1.107,1.107,0,1,0-.67-2.109Z" transform="translate(-45.617 -54.647)" fill="#fff" />
                                        <path id="Path_7717" data-name="Path 7717" d="M82.424,73.184,71.03,76.8a1.106,1.106,0,0,0,.334,2.161,1.12,1.12,0,0,0,.334-.052l11.394-3.613a1.106,1.106,0,1,0-.668-2.11Z" transform="translate(-45.618 -58.614)" fill="#fff" />
                                        <path id="Path_7718" data-name="Path 7718" d="M85.544,83.49l-14.514,4.6a1.106,1.106,0,0,0,.334,2.161A1.121,1.121,0,0,0,71.7,90.2l14.514-4.6a1.106,1.106,0,0,0-.668-2.109Z" transform="translate(-45.618 -62.404)" fill="#fff" />
                                        <path id="Path_7719" data-name="Path 7719" d="M47.242,54.827l-14.514-4.6a1.106,1.106,0,1,0-.668,2.109l14.514,4.6a1.106,1.106,0,1,0,.668-2.109Z" transform="translate(-31.287 -50.172)" fill="#fff" />
                                        <path id="Path_7720" data-name="Path 7720" d="M49.752,65.629l-10.2-3.235a1.106,1.106,0,1,0-.67,2.109l10.2,3.235a1.107,1.107,0,1,0,.67-2.109Z" transform="translate(-33.797 -54.647)" fill="#fff" />
                                        <path id="Path_7721" data-name="Path 7721" d="M49.056,76.8,37.662,73.184a1.106,1.106,0,1,0-.669,2.109l11.394,3.613a1.12,1.12,0,0,0,.334.052,1.106,1.106,0,0,0,.334-2.161Z" transform="translate(-33.101 -58.614)" fill="#fff" />
                                        <path id="Path_7722" data-name="Path 7722" d="M47.242,88.093l-14.514-4.6A1.106,1.106,0,1,0,32.06,85.6l14.514,4.6a1.12,1.12,0,0,0,.334.052,1.106,1.106,0,0,0,.334-2.161Z" transform="translate(-31.287 -62.404)" fill="#fff" />
                                    </g>
                                </g>
                            </svg>
                        </div>
                        <div class="university-couner-text">
                            <span class="counter">6</span>
                            <p>Study Programs</p>
                        </div>
                    </div>
                </div>


            </div>
        </div>
    </div>
    <!--counter-area-end -->
    <!-- brand-area-start -->
    <div class="brand-area theme-bg pt-60 pb-60">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-title text-center mb-55">
                        <h5>Our Global</h5>
                        <h2>Academic Directions</h2>
                    </div>
                </div>
                <div class="col-xl-12">
                    <div class="owl-carousel owl-theme owl-carousel-brand">
                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/birkbeck-university.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">birkbeck university</h4>
                        </div>
                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/brunel-university-of-london.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">brunel university of london</h4>
                        </div>

                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/university-of-central-lancas.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">university of central lancas</h4>
                        </div>
                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/international-career-institute.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">international career institute</h4>
                        </div>



                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/university-of-glas-gow.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">university of glas gow</h4>
                        </div>
                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/university-of-sheffield.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">university of sheffield</h4>
                        </div>
                        <div class="item">
                            <img src="<?= base_url() ?>assets/img/directions/lspm.jpg" alt="CIBM">

                            <h4 class="text-capitalize text-center">LSPM</h4>
                        </div>
                    </div>



                </div>
            </div>
        </div>
    </div>
    <!-- brand-area-end -->







</main>

<?php include('include/footer.php') ?>

<script>
    $(document).ready(function() {
        $('.owl-carousel-brand').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,

            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 5
                }
            }
        })
    });

    $(document).ready(function() {
        $('.owl-carousel-degree').owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000,

            margin: 30,
            nav: false,
            responsive: {
                0: {
                    items: 1
                },
                600: {
                    items: 3
                },
                1000: {
                    items: 3
                }
            }
        })
    });
</script>