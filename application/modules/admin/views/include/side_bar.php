<style>
    .brand {
    background-color: #3c3c5b;
    -webkit-box-shadow: none;
    box-shadow: none;
}
.aside-menu {
    background-color: #0e0e1c;
}



</style>

<!--begin::Aside Menu-->
<div class="aside-menu-wrapper flex-column-fluid" id="kt_aside_menu_wrapper">

    <!--begin::Menu Container-->

    <div id="kt_aside_menu" class="aside-menu" data-menu-vertical="1" data-menu-scroll="1" data-menu-dropdown-timeout="500">

        <!--begin::Menu Nav-->

        <ul class="menu-nav p-0">
            <li class="menu-item" aria-haspopup="true"><a href="<?= base_url() ?>admin" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                            </g>
                        </svg>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Dashboard</span>
                </a>
            </li>

            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">

                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>

                        </span>

                    </span>
                    <span class="menu-text">Sliders</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Create-Brand" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Manage-Brand" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>

                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Rearrange-Brand" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re-Arrange</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>
            <!-- <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">

                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>

                        </span>

                    </span>
                    <span class="menu-text">Home Page</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Create-Banners" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Special Product Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Manage-Banners" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Top Products</span>
                            </a>
                        </li>
                       

                    </ul>
                </div>
            </li> -->
            <!-- <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">

                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>

                        </span>

                    </span>
                    <span class="menu-text">Home Page</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Manage-Banner" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Banner Manage</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li> -->
            <!-- <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                           
                        </span>
                        
                    </span>
                    <span class="menu-text">Main Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Create-Main-Category" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Manage-Main-Category" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        
                    </ul>
                </div>
            </li>
            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
             
                        </span>
                       
                    </span>
                    <span class="menu-text">Category</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Create-Category" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Manage-Category" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Category-Re-Arrange" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re-Arrange</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                             <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                           
                        </span>
                       
                    </span>
                    <span class="menu-text">Products</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Create-Products" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Manage-Products" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->

            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                        </span>
                    </span>
                    <span class="menu-text">Testemonial</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Create-Testemonial" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Manage-Testemonial" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Testemonial/Re-Arrange" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re Arrange</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                        </span>
                    </span>
                    <span class="menu-text">Student</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Create-Project" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Manage-Project" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        <!-- <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Project/Re-Arrange" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re Arrange</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </li>



            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                        </span>
                    </span>
                    <span class="menu-text">Sessions </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Create-Partner" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Manage-Partners" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        <!-- <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Partners/Re-Arrange" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re Arrange</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </li>

            <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                        </span>
                    </span>
                    <span class="menu-text">News and Media </span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Create-Hardware" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>Manage-Hardware" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        <!-- <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Partners/Re-Arrange" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re Arrange</span>
                            </a>
                        </li> -->
                    </ul>
                </div>
            </li>





            <!-- <li class="menu-item  menu-item-submenu" aria-haspopup="true" data-menu-toggle="hover">
                <a href="javascript:;" class="menu-link menu-toggle">
                    <span class="svg-icon menu-icon">
                       <span class="svg-icon svg-icon-primary svg-icon-2x">
                               <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M4.5,3 L19.5,3 C20.3284271,3 21,3.67157288 21,4.5 L21,19.5 C21,20.3284271 20.3284271,21 19.5,21 L4.5,21 C3.67157288,21 3,20.3284271 3,19.5 L3,4.5 C3,3.67157288 3.67157288,3 4.5,3 Z M8,5 C7.44771525,5 7,5.44771525 7,6 C7,6.55228475 7.44771525,7 8,7 L16,7 C16.5522847,7 17,6.55228475 17,6 C17,5.44771525 16.5522847,5 16,5 L8,5 Z" fill="#000000" />
                                </g>
                            </svg>
                          
                        </span>
                    </span>
                    <span class="menu-text">Gallery</span>
                    <i class="menu-arrow"></i>
                </a>
                <div class="menu-submenu "><i class="menu-arrow"></i>
                    <ul class="menu-subnav">
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Create-Gallery" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Create</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Manage-Gallery" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Manage</span>
                            </a>
                        </li>
                        <li class="menu-item " aria-haspopup="true">
                            <a href="<?= base_url() ?>admin/Gallery/Re-Arrange" class="menu-link ">
                                <i class="menu-bullet menu-bullet-line"><span></span></i>
                                <span class="menu-text">Re Arrange</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </li> -->
            <!-- <li class="menu-item" aria-haspopup="true"><a href="<?=base_url()?>admin/Page-Manage" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                           <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                <polygon points="0 0 24 0 24 24 0 24" />
                                <path d="M12.9336061,16.072447 L19.36,10.9564761 L19.5181585,10.8312381 C20.1676248,10.3169571 20.2772143,9.3735535 19.7629333,8.72408713 C19.6917232,8.63415859 19.6104327,8.55269514 19.5206557,8.48129411 L12.9336854,3.24257445 C12.3871201,2.80788259 11.6128799,2.80788259 11.0663146,3.24257445 L4.47482784,8.48488609 C3.82645598,9.00054628 3.71887192,9.94418071 4.23453211,10.5925526 C4.30500305,10.6811601 4.38527899,10.7615046 4.47382636,10.8320511 L4.63,10.9564761 L11.0659024,16.0730648 C11.6126744,16.5077525 12.3871218,16.5074963 12.9336061,16.072447 Z" fill="#000000" fill-rule="nonzero" />
                                <path d="M11.0563554,18.6706981 L5.33593024,14.122919 C4.94553994,13.8125559 4.37746707,13.8774308 4.06710397,14.2678211 C4.06471678,14.2708238 4.06234874,14.2738418 4.06,14.2768747 L4.06,14.2768747 C3.75257288,14.6738539 3.82516916,15.244888 4.22214834,15.5523151 C4.22358765,15.5534297 4.2250303,15.55454 4.22647627,15.555646 L11.0872776,20.8031356 C11.6250734,21.2144692 12.371757,21.2145375 12.909628,20.8033023 L19.7677785,15.559828 C20.1693192,15.2528257 20.2459576,14.6784381 19.9389553,14.2768974 C19.9376429,14.2751809 19.9363245,14.2734691 19.935,14.2717619 L19.935,14.2717619 C19.6266937,13.8743807 19.0546209,13.8021712 18.6572397,14.1104775 C18.654352,14.112718 18.6514778,14.1149757 18.6486172,14.1172508 L12.9235044,18.6705218 C12.377022,19.1051477 11.6029199,19.1052208 11.0563554,18.6706981 Z" fill="#000000" opacity="0.3" />
                            </g>
                            </svg>
                        
                        </span>
                        
                    </span>
                    <span class="menu-text">Page Manage</span>
                </a>
            </li> -->
            <li class="menu-item" aria-haspopup="true"><a href="<?= base_url() ?>admin/login/sign_out" class="menu-link ">
                    <span class="svg-icon menu-icon">
                        <!--begin::Svg Icon | path:assets/media/svg/icons/Design/Layers.svg-->
                        <span class="svg-icon svg-icon-primary svg-icon-2x">
                            <!--begin::Svg Icon | path:/var/www/preview.keenthemes.com/metronic/releases/2020-10-29-133027/theme/html/demo12/dist/../src/media/svg/icons/Navigation/Sign-out.svg--><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                    <rect x="0" y="0" width="24" height="24" />
                                    <path d="M14.0069431,7.00607258 C13.4546584,7.00607258 13.0069431,6.55855153 13.0069431,6.00650634 C13.0069431,5.45446114 13.4546584,5.00694009 14.0069431,5.00694009 L15.0069431,5.00694009 C17.2160821,5.00694009 19.0069431,6.7970243 19.0069431,9.00520507 L19.0069431,15.001735 C19.0069431,17.2099158 17.2160821,19 15.0069431,19 L3.00694311,19 C0.797804106,19 -0.993056895,17.2099158 -0.993056895,15.001735 L-0.993056895,8.99826498 C-0.993056895,6.7900842 0.797804106,5 3.00694311,5 L4.00694793,5 C4.55923268,5 5.00694793,5.44752105 5.00694793,5.99956624 C5.00694793,6.55161144 4.55923268,6.99913249 4.00694793,6.99913249 L3.00694311,6.99913249 C1.90237361,6.99913249 1.00694311,7.89417459 1.00694311,8.99826498 L1.00694311,15.001735 C1.00694311,16.1058254 1.90237361,17.0008675 3.00694311,17.0008675 L15.0069431,17.0008675 C16.1115126,17.0008675 17.0069431,16.1058254 17.0069431,15.001735 L17.0069431,9.00520507 C17.0069431,7.90111468 16.1115126,7.00607258 15.0069431,7.00607258 L14.0069431,7.00607258 Z" fill="#000000" fill-rule="nonzero" opacity="0.3" transform="translate(9.006943, 12.000000) scale(-1, 1) rotate(-90.000000) translate(-9.006943, -12.000000) " />
                                    <rect fill="#000000" opacity="0.3" transform="translate(14.000000, 12.000000) rotate(-270.000000) translate(-14.000000, -12.000000) " x="13" y="6" width="2" height="12" rx="1" />
                                    <path d="M21.7928932,9.79289322 C22.1834175,9.40236893 22.8165825,9.40236893 23.2071068,9.79289322 C23.5976311,10.1834175 23.5976311,10.8165825 23.2071068,11.2071068 L20.2071068,14.2071068 C19.8165825,14.5976311 19.1834175,14.5976311 18.7928932,14.2071068 L15.7928932,11.2071068 C15.4023689,10.8165825 15.4023689,10.1834175 15.7928932,9.79289322 C16.1834175,9.40236893 16.8165825,9.40236893 17.2071068,9.79289322 L19.5,12.0857864 L21.7928932,9.79289322 Z" fill="#000000" fill-rule="nonzero" transform="translate(19.500000, 12.000000) rotate(-90.000000) translate(-19.500000, -12.000000) " />
                                </g>
                            </svg>
                            <!--end::Svg Icon-->
                        </span>
                        <!--end::Svg Icon-->
                    </span>
                    <span class="menu-text">Logout</span>
                </a>
            </li>



            <li class="menu-section "></li>

        </ul>

        <!--end::Menu Nav-->

    </div>

    <!--end::Menu Container-->

</div>

<!--end::Aside Menu-->

</div>

<!--end::Aside-->





<!--begin::Wrapper-->

<div class="d-flex flex-column flex-row-fluid wrapper" id="kt_wrapper">

    <!--begin::Header-->

    <div id="kt_header" class="header  header-fixed ">

        <!--begin::Container-->

        <div class=" container-fluid  d-flex align-items-stretch justify-content-between">

            <!--begin::Header Menu Wrapper-->

            <div class="header-menu-wrapper header-menu-wrapper-left" id="kt_header_menu_wrapper">

                <!-- Display None -->

            </div>

            <!--end::Header Menu Wrapper-->

            <!--begin::Topbar-->

            <div class="topbar">

                <!--begin::Notification-->

                <div class="topbar-item">

                    <div style="display: none;" onclick="load_notification();" class="btn btn-icon btn-clean btn-lg mr-1" id="kt_quick_panel_toggle">

                        <span class="svg-icon svg-icon-primary svg-icon-2x">

                            <!--begin::Svg Icon | path:C:\wamp64\www\keenthemes\themes\metronic\theme\html\demo1\dist/../src/media/svg/icons\General\Notifications1.svg-->

                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">

                                <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">

                                    <path d="M17,12 L18.5,12 C19.3284271,12 20,12.6715729 20,13.5 C20,14.3284271 19.3284271,15 18.5,15 L5.5,15 C4.67157288,15 4,14.3284271 4,13.5 C4,12.6715729 4.67157288,12 5.5,12 L7,12 L7.5582739,6.97553494 C7.80974924,4.71225688 9.72279394,3 12,3 C14.2772061,3 16.1902508,4.71225688 16.4417261,6.97553494 L17,12 Z" fill="#000000" />

                                    <rect fill="#000000" opacity="0.3" x="10" y="16" width="4" height="4" rx="2" />

                                </g>

                                <!-- <text id="text_count" class="notification-circle" x="18" y="7" font-family="Arial, Helvetica, sans-serif" font-weight="bold" font-size="0.7em" text-anchor="middle" fill="#F64E60"></text> -->

                                <!-- <circle cx="5" cy="5" r="5" stroke="green" stroke-width="0" fill="yellow" /> -->

                                <svg xmlns="http://www.w3.org/2000/svg" width="50" height="50" version="1.1">

                                    <circle cx="18" cy="6" r="6" fill="red" />

                                    <text id="text_count" x="13" y="9" font-family="sans-serif" font-size="0.7em" fill="white"></text>

                                </svg>

                            </svg>

                            <!--end::Svg Icon-->

                        </span>

                        <!-- <span class="label label-sm label-white ml-2">5</span> -->

                    </div>

                </div>

                <!--end::Notification-->

                <!--begin::User-->

                <div class="topbar-item">

                    <div class="btn btn-icon btn-icon-mobile w-auto btn-clean d-flex align-items-center btn-lg px-2" id="kt_quick_user_toggle">

                        <span class="text-muted font-weight-bold font-size-base d-none d-md-inline mr-1">Hi,</span>

                        <span class="text-dark-50 font-weight-bolder font-size-base d-none d-md-inline mr-3">Admin</span>

                        <!-- <span class="symbol symbol-lg-35 symbol-25 symbol-light-success">

                            <span style="background-image:url('<?= base_url() ?>media/img/<?= $user_img->ProfilePic ?>')" class="symbol-label font-size-h5 font-weight-bold"> </span>

                        </span> -->

                    </div>

                </div>

                <!--end::User-->

            </div>

            <!--end::Topbar-->

        </div>

        <!--end::Container-->

        <input type="hidden" id="not_cout" name="">

        <input type="hidden" id="live" name="">

    </div>

    <!--end::Header00