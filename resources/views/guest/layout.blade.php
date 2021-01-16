<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="keywords" content="Digital marketing agency, Digital marketing company, Digital marketing services">
    <meta name="author" content="creativegigs">
    <meta name="description"
        content="rogan creative multipurpose is a beautiful website template designed for SEO & Digital Agency websites.">
    <meta name='og:image' content='images/home/ogg.png'>
    <!-- For IE -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- For Resposive Device -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- For Window Tab Color -->
    <!-- Chrome, Firefox OS and Opera -->
    <meta name="theme-color" content="#fff">
    <!-- Windows Phone -->
    <meta name="msapplication-navbutton-color" content="#fff">
    <!-- iOS Safari -->
    <meta name="apple-mobile-web-app-status-bar-style" content="#fff">
    <title>@yield('title')</title>


    <link rel="stylesheet" type="text/css" href="{{asset('Rogan/rogan-b/html/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Rogan/rogan-b/html/css/responsive.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Rogan/rogan-c/html/css/style.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('Rogan/rogan-c/html/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('Agile/assets/css/i-con.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('Agile/assets/css/theme.css')}}" type="text/css" />
    <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/global.css')}}">
    <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/mainmenu.css')}}">
    <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('Rogan/style-outer/css/responsive.css')}}">
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

    <style>
        .custom-card {
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.1);
            transition: 0.3s;
            width: 100%;
            margin-bottom: 12px;
            border-radius: 5px;
        }
    </style>


    @yield('css')
</head>

<body>
    <div class="main-page-wrapper">

        <!-- ===================================================
				Loading Transition
			==================================================== -->
        <!-- Preloader -->

        @yield('preloader')

        <div class="modal fade" id="userNotif" data-backdrop="true" aria-hidden="true">
            <div class="modal-dialog modal-right w-xl bg-white b-l">
                <div class="d-flex flex-column h-100" id="chat-list">
                    <div class="navbar white lt box-shadow d-flex">
                        <span class="text-md text-ellipsis">
                            Notifikasi
                        </span>
                        <a data-dismiss="modal" class="ml-auto">
                            <span class="text-md l-h-1x">×</span>
                        </a>
                    </div>
                    <div class="scrollable hover flex">
                        <div class="p-3">
                            <div class="chat-list">
                                @php
                                $notification = App\Notification::where('isDraft', 0)
                                ->orderBy('created_at','desc')
                                ->get();
                                @endphp
                                @foreach ($notification as $item)
                                <div class="custom-card">
                                    <div class="card-body">
                                        <div class="text-muted" style="font-size: 12px">
                                            {{$item->created_at->diffForHumans()}}
                                        </div>
                                        <h4>{{$item->title}}</h4>
                                        <div class="text-muted" style="font-size: 12px">
                                            {!! $item->content !!}
                                        </div>
                                    </div>
                                </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="user" data-backdrop="true" aria-hidden="true">
            <div class="modal-dialog modal-right w-xl bg-white b-l">
                <div class="d-flex flex-column" id="chat-list" data-plugin="chat">
                    <div class="navbar white lt box-shadow d-flex">
                        <span class="text-md text-ellipsis col-md-10">
                            <!-- Chat -->
                        </span>
                        <a data-dismiss="modal" class="col-md-2 float-right">
                            <span class="text-md l-h-1x">&times;</span>
                        </a>
                    </div>
                    <ul class="navbar-nav mr-auto ul-custom">
                        <li class="nav-item"><a href="{{url('/')}}" class="nav-link-custom" href="#home">Home</a></li>
                        <li class="nav-item"><a href="{{url('about-us')}}" class="nav-link-custom" href="#home">About
                                Us</a></li>
                        <li class="nav-item"><a href="service1.html" class="nav-link-custom" href="#home">Services</a>
                        </li>
                        <li class="nav-item"><a class="nav-link-custom" href="{{url('/news')}}">News</a></li>
                        <li class="nav-item"><a class="nav-link-custom" href="{{url('/contact-us')}}">Contact Us</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- ASIDE -->
        <!-- ASIDE -->
        <!-- ASIDE -->
        <!-- ASIDE -->
        <div class="theme-main-menu theme-menu-one d-align-item">
            <div class="logo">
                <a href="{{url('/')}}">
                    <img src="{{asset('rsz_duda.png')}}" alt="" style="height: 50px;margin-top: 10px">
                </a>
            </div>
            <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script> -->
            <script>
                $(document).ready(function(){
				  $("#tester").click(function(){
				    $(".custom-dropdown").slideToggle("slow");
				  });
				});
            </script>
            <script>
                $(document).ready(function(){
				  $("#notif-responsive").click(function(){
				    $(".custom-dropdown-responsive").slideToggle("slow");
				  });
				});
            </script>
            <nav id="mega-menu-holder" class="navbar navbar-expand-lg">
                <div class="ml-auto nav-container">
                    <button style="margin-right: 10px;" class="navbar-toggler navbar-toggler-right custom-padding-nav"
                        type="button" data-toggle="modal" data-target="#user" data-toggle-class="modal-open-aside"
                        data-target="body">
                        <i class="flaticon-setup"></i>
                    </button>
                    <a style="margin-right: 15px;" class="navbar-toggler navbar-toggler-right custom-padding-nav"
                        onclick="openNotif()">
                        <i class="i-con i-con-bell"><i></i></i>
                    </a>
                    <script type="text/javascript">
                        function openNotif() {
								 var x = document.getElementById("resp-a");
								 if (x.style.display === "none") {
								    x.style.display = "block";
								  } else {
								    x.style.display = "none";
								  }
							}
                    </script>
                    <div class="dropdown-menu-right custom-dropdown-responsive" id="resp-a" style="display: none;">
                        <div class="scrollable hover" style="max-height: 250px">
                            <div class="list list-row animates animates-fadeInUp">
                                @include('guest.partials.notif')
                            </div>
                        </div>
                        <div class="d-flex px-3 py-2 b-t">
                            <div class="flex">
                                <span>6 Notifications</span>
                            </div>
                            <a href="setting.html">See all <i class="fa fa-angle-right text-muted"></i></a>
                        </div>
                    </div>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="{{url('/')}}" class="nav-link">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('about-us')}}">About us</a>
                            </li>
                            <li class="nav-item dropdown">
                                <a href="" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                                <ul class="dropdown-menu mega-container">
                                    <li>
                                        <div class="clearfix">
                                            <div class="row">
                                                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 mt-lg-3 mb-lg-3">
                                                    <a href="{{url('service-one')}}" class="img-box">
                                                        <span class="img"><img
                                                                src="{{asset('Rogan/rogan-c/html/images/menu-img/home-1.jpg')}}"
                                                                alt=""></span>
                                                        <span class="text">Business Agency</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 mt-lg-3 mb-lg-3">
                                                    <a href="{{url('service-two')}}" class="img-box">
                                                        <span class="img"><img
                                                                src="{{asset('Rogan/rogan-c/html/images/menu-img/home-2.jpg')}}"
                                                                alt=""></span>
                                                        <span class="text">Creative Agency 3</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 mt-lg-3 mb-lg-3">
                                                    <a href="{{url('/service-three')}}" class="img-box">
                                                        <span class="img"><img
                                                                src="{{asset('Rogan/rogan-c/html/images/menu-img/home-5.jpg')}}"
                                                                alt=""></span>
                                                        <span class="text">Business Agency 2</span>
                                                    </a>
                                                </div>
                                                <div class="col-lg-3 col-md-4 col-sm-6 mt-3 mb-3 mt-lg-3 mb-lg-3">
                                                    <a href="service-v3.html" class="img-box">
                                                        <span class="img"><img
                                                                src="{{asset('Rogan/rogan-c/html/images/menu-img/home-8.jpg')}}"
                                                                alt=""></span>
                                                        <span class="text">Coming Soon</span>
                                                    </a>
                                                </div>

                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/news')}}">News</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{url('/contact-us')}}">Contact Us</a>
                            </li>


                            <!-- <i class="flaticon-play-button"></i> -->
                            <li class="nav-item">
                                <a class="px-2 i-con-h-a mr-lg-2" data-toggle="modal" data-target="#userNotif"
                                    data-toggle-class="modal-open-aside" data-target="body">
                                    <i class="i-con i-con-bell"><i></i></i>
                                    <!-- <span class="badge badge-pill badge-up bg-primary text-white">9</span> -->
                                </a>

                                <!-- resps -->

                                <!-- dropdown -->
                                <div class="dropdown-menu-right custom-dropdown" style="none">
                                    <div class="scrollable hover" style="max-height: 250px">
                                        <div class="list list-row animates animates-fadeInUp">
                                            @include('guest.partials.notif')
                                        </div>
                                    </div>
                                    <div class="d-flex px-3 py-2 b-t">
                                        <div class="flex">
                                            <span>6 Notifications</span>
                                        </div>
                                        <a href="setting.html">See all <i class="fa fa-angle-right text-muted"></i></a>
                                    </div>
                                </div>
                                <!-- / dropdown -->
                            </li>
                            <li class="login-button"><a href="{{url('/pesan-sekarang')}}">Pesan Sekarang</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
        </div>
        @yield('content')
        <footer class="theme-footer-one p0">
            <div class="shape-one" data-aos="zoom-in-right"></div>
            <img src="{{asset('Rogan/rogan-c/images/shape/shape-67.svg')}}" alt="" class="shape-two">
            <div class="top-footer">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-3 col-sm-6 col-12 about-widget" data-aos="fade-up">
                            <a href="index.html" class="logo"><img src="images/logo/logo2.svg" alt=""></a>
                            <a href="#" class="email">boga.inc@company.com</a>
                            <a href="#" class="phone">720.661.2231</a>

                        </div> <!-- /.about-widget -->
                        <div class="col-lg-3 col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
                            <h5 class="title">Services</h5>
                            <ul>
                                <li><a href="#">Web Design</a></li>
                                <li><a href="#">Development</a></li>
                                <li><a href="#">Wordpress</a></li>
                                <li><a href="#">Online Marketing</a></li>
                                <li><a href="#">Content</a></li>
                            </ul>
                        </div> <!-- /.footer-recent-post -->
                        <div class="col-lg-3 col-sm-6 col-12 footer-list" data-aos="fade-up">
                            <h5 class="title">About us</h5>
                            <ul>
                                <li><a href="about-us-standard.html">About us</a></li>
                                <li><a href="project-standard.html">Work Portfolio</a></li>
                                <li><a href="team-standard.html">Team</a></li>
                                <li><a href="#">Plan & Pricing</a></li>
                                <li><a href="blog-default.html">News</a></li>
                            </ul>
                        </div> <!-- /.footer-list -->
                        <div class="col-lg-3 col-lg-2 col-sm-6 col-12 footer-information" data-aos="fade-up">
                            <h5 class="title">Our Address</h5>
                            <p>00 Orville Road Apt. 728 <br>California, USA</p>
                            <ul>
                                <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                                <li><a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            </ul>
                        </div>
                    </div> <!-- /.row -->
                </div> <!-- /.container -->
            </div> <!-- /.top-footer -->

            <div class="container">
                <div class="bottom-footer">
                    <div class="clearfix">
                        <p>&copy; 2019 copyright all right reserved</p>
                        <ul>
                            <li><a href="#">Privace & Policy.</a></li>
                            <li><a href="faq.html">Faq.</a></li>
                            <li><a href="#">Terms.</a></li>
                        </ul>
                    </div>
                </div> <!-- /.bottom-footer -->
            </div>
        </footer> <!-- /.theme-footer-one -->




        <!-- Scroll Top Button -->
        <button class="scroll-top tran3s">
            <i class="fa fa-angle-up" aria-hidden="true"></i>
        </button>



        <!-- Optional JavaScript _____________________________  -->

        <!-- <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.2.2.3.min.js')}}"></script> -->
        @yield('script')
        <script src="{{asset('Rogan/rogan-c/html/vendor/popper.js/popper.min.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/bootstrap/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/mega-menu/assets/js/custom.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/aos-next/dist/aos.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/WOW-master/dist/wow.min.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/owl-carousel/owl.carousel.min.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.appear.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/jquery.countTo.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/fancybox/dist/jquery.fancybox.min.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/vendor/tabs/tabs.js')}}"></script>
        <script src="https://translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
        <script src="{{asset('Rogan/rogan-c/html/js/lang.js')}}"></script>
        <script src="{{asset('Rogan/rogan-c/html/js/theme.js')}}"></script>
    </div>

    <!-- /.main-page-wrapper -->
</body>

</html>
