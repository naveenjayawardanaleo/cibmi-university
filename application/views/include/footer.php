<!-- footer-area-start -->
<footer>
   <div class="footer-area pt-100">
      <div class="container">
         <div class="footer-main mb-60">
            <div class="row">
               <div class="col-md-3">
                  <div class="footer-widget f-w1 mb-40">
                     <div class="footer-img">
                        <img src="<?= base_url() ?>assets/campusofnewcastle.png" class="logo-black w-100" alt="Logo">
                        <p>The qualification offered at CIBM are developed to help you gain skills required to succeed and make a difference in the work place.</p>
                     </div>
                     <div class="footer-icon">
                        <a href="https://facebook.com/campusofnewcastle.lk" target="_blank"><i class="fab fa-facebook-f"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                        <a href="#"> <i class="fab fa-linkedin-in"></i></a>
                     </div>
                  </div>
               </div>
               <div class="col-md-3">
                  <div class="footer-widget f-w2 mb-40">
                     <h3>Main Menu</h3>
                     <ul>
                        <li><a href="<?= base_url() ?>">Home</a></li>
                        <li><a href="<?= base_url() ?>About-Us">About Us</a></li>
                        <li><a href="<?= base_url() ?>Our-Message">Our Message</a></li>

                        <li><a href="<?= base_url() ?>Mission-Vision">Our Mission & Vision</a></li>


                        <li><a href="<?= base_url() ?>Courses">Courses</a></li>

                        <li><a href="<?= base_url() ?>News-and-Media">News and Media</a></li>
                        <li><a href="<?= base_url() ?>Contact-Us">Contact Us</a></li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-4">
                  <div class="footer-widget f-w4 mb-40">
                     <h3>Study Programs </h3>
                     <ul>

                        <li><a href="">Digital Marketing</a></li>
                        <li><a href="">Entrepreneurship Management</a></li>

                        <li><a href="">Certified English Diploma</a></li>

                        <li><a href="">Business Management</a></li>
                        <li><a href="">Hospitality & Tourism Management</a></li>
                        <li><a href="">Human Resources Management</a></li>


                     </ul>
                  </div>
               </div>
               <div class=" col-md-2 ">
                  <div class="footer-widget mb-40">
                     <h3>My Account</h3>
                     <ul>
                        <li><a href="#">Dashboard</a></li>
                        <li><?php

                              if (isset($_SESSION['username'])) {

                                 $first = $this->session->userdata('username');
                                 $last = $this->session->userdata('lastname');
                                 echo '
                                        <a  href="My-Account">My Account</a>

                                    ';
                              } else {
                                 echo '
                                        <a  href="Login">Student Login</a>

                                    ';
                              }

                              ?>

                        </li>
                        <li>
                           <?php

                           if (isset($_SESSION['username'])) {

                              $first = $this->session->userdata('username');
                              $last = $this->session->userdata('lastname');
                              echo '
                                       <a  href="Sessions">Sessions</a>

                                    ';
                           } else {
                              echo '
                                       <a  href="Register">Student Register</a>

                                    ';
                           }

                           ?>
                        </li>
                        <li><a href="<?= base_url() ?>How-to-Enroll">How to Enroll</a></li>

                        <li>
                           <?php

                           if (isset($_SESSION['username'])) {

                              $first = $this->session->userdata('username');
                              $last = $this->session->userdata('lastname');
                              echo '
                                    <a  href="myaccount/logout">Logout</a>

                                 ';
                           } else {
                              echo '


                                 ';
                           }

                           ?>
                        </li>
                     </ul>
                  </div>
               </div>

            </div>
         </div>
         <div class="copyright-area">
            <div class="container">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                     <div class="copyright-text border-line">
                        <p>©  CIBM. All rights reserved. Designed
                           by <a href="https://wdsl.lk"><span>WDSL</span></a> </p>
                     </div>
                  </div>
                  <div class="col-xl-4 col-lg-4 col-sm-6">
                     <div class="copy-right-support border-line-2">
                        <div class="copy-right-svg">
                           <svg xmlns="http://www.w3.org/2000/svg" width="43.945" height="50" viewBox="0 0 43.945 50">
                              <g id="headphones" transform="translate(-31)">
                                 <g id="Group_2171" data-name="Group 2171" transform="translate(36.859 20.508)">
                                    <g id="Group_2170" data-name="Group 2170">
                                       <path id="Path_2983" data-name="Path 2983" d="M95.395,210A4.4,4.4,0,0,0,91,214.395v11.914a4.395,4.395,0,1,0,8.789,0V214.395A4.4,4.4,0,0,0,95.395,210Z" transform="translate(-91 -210)" fill="#2467ec" />
                                    </g>
                                 </g>
                                 <g id="Group_2173" data-name="Group 2173" transform="translate(31 23.669)">
                                    <g id="Group_2172" data-name="Group 2172">
                                       <path id="Path_2984" data-name="Path 2984" d="M33.93,243.6a7.268,7.268,0,0,1,.125-1.234A4.386,4.386,0,0,0,31,246.529v6.055a4.386,4.386,0,0,0,3.054,4.163,7.268,7.268,0,0,1-.125-1.234Z" transform="translate(-31 -242.366)" fill="#2467ec" />
                                    </g>
                                 </g>
                                 <g id="Group_2175" data-name="Group 2175" transform="translate(48.578 20.508)">
                                    <g id="Group_2174" data-name="Group 2174">
                                       <path id="Path_2985" data-name="Path 2985" d="M227.113,210a4.4,4.4,0,0,0-4.395,4.395v11.914a4.4,4.4,0,0,0,4.395,4.395,4.335,4.335,0,0,0,1.259-.206,4.386,4.386,0,0,1-4.189,3.136h-4.664a4.395,4.395,0,1,0,0,2.93h4.664a7.333,7.333,0,0,0,7.324-7.324V214.395A4.4,4.4,0,0,0,227.113,210Z" transform="translate(-211 -210)" fill="#2467ec" />
                                    </g>
                                 </g>
                                 <g id="Group_2177" data-name="Group 2177" transform="translate(71.891 23.669)">
                                    <g id="Group_2176" data-name="Group 2176">
                                       <path id="Path_2986" data-name="Path 2986" d="M449.722,242.366a7.266,7.266,0,0,1,.125,1.234v11.914a7.266,7.266,0,0,1-.125,1.234,4.386,4.386,0,0,0,3.055-4.163v-6.055A4.386,4.386,0,0,0,449.722,242.366Z" transform="translate(-449.722 -242.366)" fill="#2467ec" />
                                    </g>
                                 </g>
                                 <g id="Group_2179" data-name="Group 2179" transform="translate(31)">
                                    <g id="Group_2178" data-name="Group 2178">
                                       <path id="Path_2987" data-name="Path 2987" d="M52.973,0A22,22,0,0,0,31,21.973v.037a7.253,7.253,0,0,1,3-1.361,19.02,19.02,0,0,1,37.952,0,7.256,7.256,0,0,1,3,1.361v-.037A22,22,0,0,0,52.973,0Z" transform="translate(-31)" fill="#2467ec" />
                                    </g>
                                 </g>
                              </g>
                           </svg>
                        </div>
                        <div class="copyright-svg-content">
                           <p>Have a question? Call us 24/7</p>
                           <h5><a href="tel:+94772842054">+94 76 241 0876</a></h5>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-5 col-lg-5 col-md-12">
                     <div class="copyright-subcribe">
                        <form action="#" class="widget__subscribe">
                           <div class="field">
                              <input type="email" placeholder="Enter Email">
                           </div>
                           <button type="submit">Subscribe<i class="fas fa-paper-plane"></i></button>
                        </form>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</footer>
<!-- footer-area-end -->
<div class="fixed-btn-mobile">
   <a class="fixed-btn-mobile__whatsapp" href="https://api.whatsapp.com/send?phone=94762410876" target="_blank">
      <svg xmlns="http://www.w3.org/2000/svg" version="1.1" id="whatsapp" x="0px" y="0px" width="30.667px" height="30.667px" viewBox="0 0 30.667 30.667" style="enable-background:new 0 0 30.667 30.667;" xml:space="preserve" fill="#ffffff">
         <path d="M30.667,14.939c0,8.25-6.74,14.938-15.056,14.938c-2.639,0-5.118-0.675-7.276-1.857L0,30.667l2.717-8.017 c-1.37-2.25-2.159-4.892-2.159-7.712C0.559,6.688,7.297,0,15.613,0C23.928,0.002,30.667,6.689,30.667,14.939z M15.61,2.382 c-6.979,0-12.656,5.634-12.656,12.56c0,2.748,0.896,5.292,2.411,7.362l-1.58,4.663l4.862-1.545c2,1.312,4.393,2.076,6.963,2.076 c6.979,0,12.658-5.633,12.658-12.559C28.27,8.016,22.59,2.382,15.61,2.382z M23.214,18.38c-0.094-0.151-0.34-0.243-0.708-0.427 c-0.367-0.184-2.184-1.069-2.521-1.189c-0.34-0.123-0.586-0.185-0.832,0.182c-0.243,0.367-0.951,1.191-1.168,1.437 c-0.215,0.245-0.43,0.276-0.799,0.095c-0.369-0.186-1.559-0.57-2.969-1.817c-1.097-0.972-1.838-2.169-2.052-2.536 c-0.217-0.366-0.022-0.564,0.161-0.746c0.165-0.165,0.369-0.428,0.554-0.643c0.185-0.213,0.246-0.364,0.369-0.609 c0.121-0.245,0.06-0.458-0.031-0.643c-0.092-0.184-0.829-1.984-1.138-2.717c-0.307-0.732-0.614-0.611-0.83-0.611 c-0.215,0-0.461-0.03-0.707-0.03S9.897,8.215,9.56,8.582s-1.291,1.252-1.291,3.054c0,1.804,1.321,3.543,1.506,3.787 c0.186,0.243,2.554,4.062,6.305,5.528c3.753,1.465,3.753,0.976,4.429,0.914c0.678-0.062,2.184-0.885,2.49-1.739 C23.307,19.268,23.307,18.533,23.214,18.38z">
         </path>
      </svg>
   </a>
   <a class="fixed-btn-mobile__phone" href="tel:+94762410876" target="_blank">
      <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
         <path d="M19.2217 15.2682L16.6817 14.9782C16.0717 14.9082 15.4717 15.1182 15.0417 15.5482L13.2017 17.3882C10.3717 15.9482 8.05174 13.6382 6.61174 10.7982L8.46174 8.94816C8.89174 8.51816 9.10174 7.91816 9.03174 7.30816L8.74174 4.78816C8.62174 3.77816 7.77174 3.01816 6.75174 3.01816H5.02174C3.89174 3.01816 2.95174 3.95816 3.02174 5.08816C3.55174 13.6282 10.3817 20.4482 18.9117 20.9782C20.0417 21.0482 20.9817 20.1082 20.9817 18.9782V17.2482C20.9917 16.2382 20.2317 15.3882 19.2217 15.2682Z" fill="white"></path>
      </svg>
   </a>
</div>
<!-- back to top start -->
<!-- <div class="progress-wrap">
   <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
      <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
   </svg>
</div> -->
<!-- back to top end -->

<style>
   .job-assurance {
      position: fixed;
      bottom: 15px;
      left: 15px;
      z-index: 9999999999;
   }
   .job-assurance img{
      width: 150px;
   }
</style>

<div class="job-assurance">
   <img src="<?= base_url() ?>assets/img/job-assurance.png" alt="">
</div>

<!-- JS here -->
<script src="<?= base_url() ?>assets/js/vendor/jquery-3.6.0.min.js"></script>
<script src="<?= base_url() ?>assets/js/vendor/waypoints.min.js"></script>
<script src="<?= base_url() ?>assets/js/bootstrap.bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/meanmenu.js"></script>
<script src="<?= base_url() ?>assets/js/swiper-bundle.min.js"></script>
<script src="<?= base_url() ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url() ?>assets/js/magnific-popup.min.js"></script>
<script src="<?= base_url() ?>assets/js/huicalendar.js"></script>
<script src="<?= base_url() ?>assets/js/parallax.min.js"></script>
<script src="<?= base_url() ?>assets/js/backToTop.js"></script>
<script src="<?= base_url() ?>assets/js/nice-select.min.js"></script>
<script src="<?= base_url() ?>assets/js/counterup.min.js"></script>
<script src="<?= base_url() ?>assets/js/ajax-form.js"></script>
<script src="<?= base_url() ?>assets/js/wow.min.js"></script>
<script src="<?= base_url() ?>assets/js/isotope.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/js/imagesloaded.pkgd.min.js"></script>
<script src="<?= base_url() ?>assets/js/main.js"></script>
</body>

</html>