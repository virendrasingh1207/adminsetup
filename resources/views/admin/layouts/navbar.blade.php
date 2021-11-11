<div class="container-fluid no-gutters">
        <div class="row">
            <div class="col-lg-12 p-0 ">
                <div class="header_iner d-flex justify-content-between align-items-center">
                    <div class="sidebar_icon d-lg-none">
                        <i class="ti-menu"></i>
                    </div>
                    <div class="serach_field-area d-flex align-items-center">
                            {{--<div class="search_inner">
                                <form action="#">
                                    <div class="search_field">
                                        <input type="text" placeholder="Search here..." >
                                    </div>
                                    <button type="submit"> <img src="{{asset('Backend/img/icon/icon_search.svg')}}" alt=""> </button>
                                </form>
                            </div>--}}
                            <span class="f_s_14 f_w_400 ml_25 white_text text_white" >Apps</span>
                        </div>
                    <div class="header_right d-flex justify-content-between align-items-center">
                        {{--<div class="header_notification_warp d-flex align-items-center">
                            <li>
                                <a class="bell_notification_clicker nav-link-notify" href="#"> <img src="{{asset('Backend/img/icon/bell.svg')}}" alt="">
                                    
                                </a>
                                <!-- Menu_NOtification_Wrap  -->
                            <div class="Menu_NOtification_Wrap">
                                <div class="notification_Header">
                                    <h4>Notifications</h4>
                                </div>
                                <div class="Notification_body">
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="{{asset('Backend/img/staf/2.png')}}" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="{{asset('Backend/img/staf/4.png')}}" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="{{asset('Backend/img/staf/3.png')}}" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="{{asset('Backend/img/staf/2.png')}}" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Cool Marketing </h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="{{asset('Backend/img/staf/4.png')}}" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>Awesome packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                    <!-- single_notify  -->
                                    <div class="single_notify d-flex align-items-center">
                                        <div class="notify_thumb">
                                            <a href="#"><img src="{{asset('Backend/img/staf/3.png')}}" alt=""></a>
                                        </div>
                                        <div class="notify_content">
                                            <a href="#"><h5>what a packages</h5></a>
                                            <p>Lorem ipsum dolor sit amet</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="nofity_footer">
                                    <div class="submit_button text-center pt_20">
                                        <a href="#" class="btn_1">See More</a>
                                    </div>
                                </div>
                            </div>
                            <!--/ Menu_NOtification_Wrap  -->
                            </li>
                            <li>
                                <a class="CHATBOX_open nav-link-notify" href="#"> <img src="{{asset('Backend/img/icon/msg.svg')}}" alt="">   </a>
                            </li>
                        </div>--}}
                        <div class="profile_info">
                            <img src="{{auth()->guard('admin')->user()->profile ?  asset('Backend/profile/'.auth()->guard('admin')->user()->profile) : asset('Backend/img/client_img.png') }}" alt="#">
                            <div class="profile_info_iner">
                                <div class="profile_author_name">
                                    <p>{{auth()->guard('admin')->user()->name}} </p>
                                    <h6>{{auth()->guard('admin')->user()->email}}</h6>
                                </div>
                                <div class="profile_info_details">
                                    <a href="{{route('my-profiles')}}">My Profile </a>
                                    <a href="{{route('admin.change-password')}}">Change Password</a>
                                    <a class="dropdown-item" href="#"
                                       onclick="if(confirm('Are you sure ?')){event.preventDefault();document.querySelector('#logout-form').submit()}">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('adminLogout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>