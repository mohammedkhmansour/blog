<!doctype html>
<html class="no-js" lang="zxx">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>{{config('app.name')}}</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- Place favicon.ico in the root directory -->

		<!-- CSS here -->
        <link rel="stylesheet" href="{{asset('front/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/animate.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/magnific-popup.css')}}">
        <link rel="stylesheet" href="{{asset('front/fontawesome/css/all.min.css')}}">
        <link rel="stylesheet" href="{{asset('front/font-flaticon/flaticon.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/dripicons.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/slick.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/meanmenu.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/default.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/style.css')}}">
        <link rel="stylesheet" href="{{asset('front/css/responsive.css')}}">
    </head>
    <body>

     <!-- header -->
        <header class="header-area header-area2">
			<div class="header-top second-header d-none d-lg-block">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6 col-md-6 d-none  d-md-block">
                            <div class="header-cta">

                                <div class="row">
                                    <div class="col-lg-3"><a href="#" class="h-btn"><span class="icon"><img src="{{asset('front/img/icon/top-trending-icon.png')}}" alt="courses-img1"></span> Trending</a></div>
                                    <div class="col-lg-9">
                                        <div class="trending-slider-active">
                                            @foreach ($posts as $post)

                                             <span> {{$post->name}}</span>

                                             @endforeach

                                         </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                         <div class="col-lg-3 col-md-3 d-none d-lg-block text-right">
                            <i class="fal fa-cloud-sun"></i> 190 C Mumbai
                        </div>
                         <div class="col-lg-3 col-md-3 d-none d-lg-block">
                             <a href="#" class="top-btn"><i class="fal fa-calendar-alt"></i> Monday, 07 March, 2021</a>
                        </div>

                    </div>
                </div>
            </div>
            <div id="header-sticky" class="menu-area">
                <div class="container">
                    <div class="second-menu">
                        <div class="row align-items-center">
                            <div class="col-xl-2 col-lg-2">
                                <div class="logo">
                                    <a href="index.html"><img src="{{asset('front/img/logo/logo.png')}}" alt="logo"></a>
                                </div>
                            </div>
                            <div class="col-xl-8 col-lg-7">

                                <div class="main-menu text-right text-xl-right">
                                    <nav id="mobile-menu">
                                         <ul>
                                            <li class="sub">
												<a href="{{url('/')}}">الرئيسية</a>

											</li>
                                            <li><a href="#">مثال صفحة</a></li>

                                            <li class="sub">
                                              <a href="#">مثال صفحة</a>

                                            </li>
                                            <li class="sub"><a href="#">صفحات</a>
												<ul>
                                                    <li><a href="#">مثال صفحة</a></li>
													<li><a href="#">مثال  صفحة</a></li>

												</ul>
											</li>

                                            <li><a href="{{route('contact')}}">تواصل معنا</a></li>
                                        </ul>
                                    </nav>
                                </div>

                            </div>

                            <div class="col-xl-2 col-lg-3 d-none d-lg-block mt-20 mb-20">
                                 <div class="header-social text-right">
                            <span>

                                <a href="{{config('app.fac')}}" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                <a href="{{config('app.twit')}}" title="Twitter"><i class="fab fa-twitter"></i></a>
                                <a href="#" class="menu-tigger"><i class="fas fa-search"></i></a>


                               </span>
                               <!--  /social media icon redux -->
                        </div>

                            </div>

                                <div class="col-12">
                                    <div class="mobile-menu"></div>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- header-end -->
        <!-- offcanvas-area -->
                <div class="offcanvas-menu">
                <span class="menu-close"><i class="fas fa-times"></i></span>
              <form role="search" method="get" id="searchform"   class="searchform" action="http://wordpress.zcube.in/xconsulta/">
                                <input type="text" name="s" id="search" value="" placeholder="Search"  />
                                <button><i class="fa fa-search"></i></button>
                            </form>


                    <div id="cssmenu2" class="menu-one-page-menu-container">
                        <ul id="menu-one-page-menu-1" class="menu">
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#home"><span>+8 12 3456897</span></a></li>
                            <li class="menu-item menu-item-type-custom menu-item-object-custom"><a href="#howitwork"><span>info@example.com</span></a></li>
                        </ul>
                    </div>
            </div>
            <div class="offcanvas-overly"></div>
                 <!-- offcanvas-end -->

        <!-- main-area -->
        {{$slot}}
        <!-- main-area-end -->
       <!-- footer -->
        <footer class="footer-bg footer-p fix" >

            <div class="footer-center  pt-90 pb-60" >
                <div class="container">
                    <div class="row justify-content-between">

                        <div class="col-xl-3 col-lg-3 col-sm-6">

                            <div class="footer-widget mb-30">
                                  <div class="f-widget-title">
                                    <img src="{{asset('front/img/logo/logo.png')}}" alt="img">
                                </div>
                                <div class="f-contact">
                                    <p> هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى</p>
                                    <ul>

                                   <li><i class="icon fal fa-envelope"></i>
                                        <span>
                                            <a href="{{config('app.email')}}">{{config('app.email')}}</a>
                                       <br>
                                       </span>
                                    </li>


                                </ul>

                                    </div>
                            </div>
                        </div>

                          <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                     <h2>Quick Links</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="{{url('/')}}">Home</a></li>
                                        <li><a href="#"> Featured Posts</a></li>
                                        <li><a href="#"> Top Stories </a></li>
                                        <li><a href="#">Featured Videos</a></li>
                                        <li><a href="#">Top News</a></li>
                                        <li><a href="#">Editor Choice </a></li>
                                        <li><a href="faq.html">FAQ </a></li>
                                        <li><a href="#">Support </a></li>
                                        <li><a href="#">Help </a></li>
                                        <li><a href="{{route('contact')}}">Contact Us </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">

                                     <h2>Popular Posts</h2>
                                </div>
                                <div class="footer-link">
                                    <ul>
                                        <li><a href="#">Celebrity News</a></li>
                                        <li><a href="#"> Movies</a></li>
                                        <li><a href="#"> Travling</a></li>

                                        <li><a href="#">Food</a></li>
                                        <li><a href="#">History</a></li>
                                        <li><a href="#">Music News </a></li>
                                        <li><a href="#">Education </a></li>
                                        <li><a href="#">Gaming </a></li>
                                        <li><a href="#">Life style </a></li>
                                        <li><a href="#">Fashion </a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>


                           {{-- <div class="col-xl-3 col-lg-3 col-sm-6">
                            <div class="footer-widget mb-30">
                                <div class="f-widget-title">
                                    <h2>Our Gallery</h2>
                                </div>
                                <div class="f-insta">
                                    <ul>
                                        <li><a href="{{asset('front/img/instagram/f-galler-01.png')}}" class=" popup-image"><img src="{{asset('front/img/instagram/f-galler-01.png')}}" alt="img"></a></li>
                                       <li><a href="{{asset('front/img/instagram/f-galler-02.png')}}" class=" popup-image"><img src="{{asset('front/img/instagram/f-galler-02.png')}}" alt="img"></a></li>
                                        <li><a href="{{asset('front/img/instagram/f-galler-03.png')}}" class=" popup-image"><img src="{{asset('front/img/instagram/f-galler-03.png')}}" alt="img"></a></li>
                                        <li><a href="{{asset('front/img/instagram/f-galler-04.png')}}" class=" popup-image"><img src="{{asset('front/img/instagram/f-galler-04.png')}}" alt="img"></a></li>

                                    </ul>
                                </div>
                            </div>
                        </div> --}}

                    </div>
                </div>
            </div>
            <div class="copyright-wrap">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-6">
                               Copyright  &copy; {{Carbon\Carbon::now()->format('d.m.Y')}} Newpress. All rights reserved.
                        </div>
                        <div class="col-lg-6 text-right text-xl-right">
                            <div class="footer-widget footer-social text-right text-xl-right">
                                    <a href="{{config('app.fac')}}"><i class="fab fa-facebook-f"></i></a>
                                    <a href="{{config('app.insta')}}"><i class="fab fa-instagram"></i></a>
                                     <a href="{{config('app.twit')}}"><i class="fab fa-twitter"></i></a>

                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </footer>
        <!-- footer-end -->

		<!-- JS here -->
        <script src="{{asset('front/js/vendor/modernizr-3.5.0.min.js')}}"></script>
        <script src="{{asset('front/js/vendor/jquery-3.6.0.min.js')}}"></script>
        <script src="{{asset('front/js/popper.min.js')}}"></script>
        <script src="{{asset('front/js/bootstrap.min.js')}}"></script>
        <script src="{{asset('front/js/one-page-nav-min.js')}}"></script>
        <script src="{{asset('front/js/slick.min.js')}}"></script>
        <script src="{{asset('front/js/ajax-form.js')}}"></script>
        <script src="{{asset('front/js/paroller.js')}}"></script>
        <script src="{{asset('front/js/wow.min.js')}}"></script>
        <script src="{{asset('front/js/js_isotope.pkgd.min.js')}}"></script>
        <script src="{{asset('front/js/imagesloaded.min.js')}}"></script>
        <script src="{{asset('front/js/parallax.min.js')}}"></script>

        <script src="{{asset('front/js/jquery.counterup.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.scrollUp.min.js')}}"></script>
        <script src="{{asset('front/js/jquery.meanmenu.min.js')}}"></script>
        <script src="{{asset('front/js/parallax-scroll.js')}}"></script>
        <script src="{{asset('front/js/jquery.magnific-popup.min.js')}}"></script>
        <script src="{{asset('front/js/element-in-view.js')}}"></script>
        <script src="{{asset('front/js/main.js')}}"></script>
    </body>
</html>
