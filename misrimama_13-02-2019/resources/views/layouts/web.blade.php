<!doctype html>
<html lang="" class="page-home01">

<!-- Mirrored from renovation.themesun.com/ by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 16 Jan 2019 05:47:08 GMT -->
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mistri Mama || Door step service provider</title>
    <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}" />

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
     

    <!-- Icon font 7 Stroke -->
    <link rel="stylesheet" href="{{ asset('fonts/icon-7/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('fonts/icon-7/css/helper.css') }}">

    <!-- Icon font Renovation -->
    <link rel="stylesheet" href="{{ asset('fonts/renovation/icon-font-renovation.css') }}">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />

    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- Menu Mobile: mmenu -->
    <link type="text/css" rel="stylesheet" href="{{ asset('components/mmenu/jquery.mmenu.all.css') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('components/font-awesome/css/font-awesome.css') }}" />
    <link type="text/css" rel="stylesheet" href="{{ asset('css/style.css') }}" />
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('components/owl.carousel/assets/owl.carousel.css') }}" />

    <!-- Light Gallery -->
    <link rel="stylesheet" href="{{ asset('components/lightgallery/css/lightgallery.css') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('components/bootstrap/css/bootstrap.css') }}" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('components/slider/slider.css') }}">

    <!-- THEME STYLE -->
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    <style>
    .header_building{
        margin-top:10px;
    }
        @media screen and (max-width: 1200px) {

            .respon {

                display: none;

            }
        }
        .service-category-hasib ul li {
            width: 50%;
            float: left;
        }
    </style>

    @yield('css')

</head>
<body>
<div class="site">

    <div class="site-top style-01">
        <div class="container">
            <div class="row row-sm-center">

                <div class="col-sm-5 col-md-6">
                    <div style="color:rgba(255,255,255,.6);" class="site-top-left text-xs-center text-sm-left">
                    </div>
                </div>

                <div class="col-sm-7 col-md-6">
                    <div class="site-top-right text-xs-center text-sm-right">
                        <nav id="top-right-menu">
                            <ul class="menu">
                                <li class="menu-item"><a href="{{ url('serviceprovider') }}">Become a service partner</a></li>
                                <li class="menu-item"><a href="#get-earn">Earn Money</a></li>
                                <li class="menu-item"><a href="#" data-toggle="modal" data-target="#loginModel">Login</a></li>
                                <li class="menu-item"><a onclick="bn()" href="#">বাংলা</a>
                                    <div style="display:none;" id="google_translate_element"></div>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- /.site-top .style-01 -->

    <header class="site-header style-01">
        <div class="container">
            <div class="row row-xs-center">

                <div class="col-xs-10 col-lg-2 site-branding" style="padding:5px;">
                    <a href="{{ url('/') }}">

                        <img src="{{ asset('images/a.png') }}" width="140"   alt="MISTRI MAMA">

                    </a>
                </div>

                <div class="col-xs-2 hidden-lg-up text-right">
                    <a id="menu-button" href="#primary-menu-mobile"><i id="open-left" class="fa fa-bars"></i></a>
                    <nav id="primary-menu-mobile">
                        <ul>
                            <li>
                                <a href="{{url('/')}}">Home</a>
                            </li>
                            <li>
                                <a href="#about-us">About us </a>
                            </li>
                            <li>
                                <a href="#our-service">Our Service </a>
                            </li>
                            <li><a href="#"> Book Now </a>
                                <ul>
                                    <li class="menu-item menu-item-has-children"><a href="#">Book Now</a>
                                        <ul  class="sub-menu">
                                            <li class="menu-item"><a href="{{url('/electrical')}}" >Electrical Service</a></li>
                                            <li class="menu-item"><a href="{{url('/cctv')}}" >CCTV Service</a></li>

                                            <li class="menu-item"><a href="{{url('/plumbing')}}" >Plumbing Services</a></li>
                                            <li class="menu-item"><a href="{{url('/ict')}}" >IT Service</a></li>
                                            <li class="menu-item"><a href="{{url('/generator')}}" >Generator Service</a></li>

                                            <li class="menu-item"><a href="{{url('/air-conditional')}}" >Air Conditioner</a></li>

                                        </ul>
                                    </li>
                                    </li>
                                    <li><a href="#">Book For Corporate</a></li>
                                </ul>
                            </li>

                            <li><a href="{{url('/contact')}}">Contact</a>

                            </li>
                        </ul>
                    </nav>
                </div>
                <!-- / Menu Mobile -->




                <div class="col-xs-12 col-sm-9 col-lg-10 extra-info">
                    <div class="row">
                        <div class="col-sm-5 col-md-5">
                            <i class="fa fa-phone" style="font-size: 60px;"></i>
                            <div class="phone">
                                <h6 style="color:white;">Call for Service</h6>

                                <h3 style=" margin-right: -40px;  margin-top: -10px;">
                                    <a style="color:#fff;font-size: 28px; " href="tel:{{ getConfigValue('contact_phone') }}"><strong>{{ getConfigValue('contact_phone') }}</strong></a></h3>
                                <h6>     <a style="color:#fff " href="mailto:{{ getConfigValue('contact_email') }}">  {{ getConfigValue('contact_email') }}</a>
                                </h6>

                            </div>
                        </div>

                        <div class="col-sm-7 col-md-7 pull-right" style=" margin-right: -150px;  margin-left: 10px;">
                            <i ><img src="{{asset('/assets/build.png')}}" style="margin-top: -25px" width="60" alt=""></i>
                            <div class="address header_building">
                                <h5 style="color:white;"><?= getConfigValue('contact_address') ?></h5>
                                 
                            </div>
                        </div>
                    </div>
                </div>

            <!--
      <div class="col-xs-12 col-sm-9 col-lg-8 extra-info">
        <div class="row">
          <div class="col-sm-5">
            <i class="fa fa-phone"></i>
            <div class="phone">
              <label>09610-222-111</label>
              <span>info@mistrimama.com</span>
            </div>
          </div>
          <div class="col-sm-7 col-md-6">
            <i class="fa fa-home"></i>
            <div class="address">
          <address>Sky view ocean tower,<br>
          38 SegunBagicha (1st floor),<br>
          <center> Dhaka, Bangladesh</center>
          </address>
            </div>
          </div>
        </div>
      </div>
      <!-- /.extra-info -->



                <!-- /.social-menu -->
                <div style="margin-top:65px;" class="social-menu social-menu_right-arrow hidden-md-down row">
                    <ul  class="menu">
                        <li class="menu-item"><a href="{{ getConfigValue('fb_link') }}">facebook</a></li>
                        <li class="menu-item"><a href="{{ getConfigValue('linkedin_link') }}">linkedin</a></li>
                        <li class="menu-item"><a href="{{ getConfigValue('instagram_link') }}">instagram</a></li>
                        <li class="menu-item"><a href="{{ getConfigValue('twitter_link') }}">twitter</a></li>
                    
                        
                        <li class="menu-item"><a href="{{ getConfigValue('youtube_link') }}">youtube</a></li>
                    </ul>
                </div>
            </div>


    </header>
    <!-- /.site-header .style-01 -->

    <nav id="primary-menu" class="primary-menu_style-01 hidden-md-  respon" z-index="1" style="margin-top:-15px; height:60px;">
        <div class="container" id="dis" >
            <div class="row" >
                <div class="col-md-12">
                    <ul style="height:50x;" class="menu">
                        <li class="menu-item">
                            <a href="{{ url('/') }}">Home</a>
                        </li>
                        <li class="menu-item ">
                            <a href="#about-us">About us</a>

                        </li>

                        <li class="menu-item">
                            <a href="#our-service">Our Service</a>
                        </li>


                        </li>
                        <li class="menu-item">
                            <a href="#">Book Now</a>
                            <ul class="sub-menu">
                                <li class="menu-item menu-item-has-children"><a href="#">Book Now</a>
                                    <ul  class="sub-menu">
                                        <li class="menu-item"><a href="{{url('/electrical')}}" >Electrical</a></li>
                                        <li class="menu-item"><a href="{{url('/plumbing')}}" >Plumbing Services</a></li>
                                        <li class="menu-item"><a href="{{url('/generator')}}" >Generator</a></li>
                                        <li class="menu-item"><a href="{{url('/ict')}}" >ICT</a></li>
                                        <li class="menu-item"><a href="{{url('/cctv')}}" >CCTV</a></li>
                                        <li class="menu-item"><a href="{{url('/air-conditional')}}" >Air Conditional</a></li>

                                    </ul>
                                </li>
                                <li class="menu-item"><a href="#">Book For Coporate</a></li>
                            </ul>
                        </li>
                        <!--<li class="menu-item">-->
                        <!--    <a href="#"> Latest News </a>-->
                        <!--</li>-->
                        <li class="menu-item">
                            <a href="{{url('/contact')}}">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    @yield('content')

    <footer class="footer" >
        <div class="container" style="margin-top: -40px; margin-bottom: -50px;">
            <div class="row">
                <div class="col-md-4">
                    <div class="footer-about">
                      {{--  <p><a href="#"><img src="a.png" width="140"   alt="MISTRI MAMA"></a></p>
--}}
                        <div class="footer-info">
                            <h3 class="widget-tittle">Mistri Mama Office</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i> <?= getConfigValue('contact_address') ?></li>

                                <li><i class="fa fa-phone"></i>{{ getConfigValue('contact_phone') }}</li>
                                <li><i class="fa fa-envelope"></i>{{ getConfigValue('contact_email') }}</li>
                                <li><i class="fa fa-clock-o"></i>{{ getConfigValue('working_hour') }}</li>
                            </ul>
                        </div>
                    </div>
                </div>


                <div class="col-md-2">
                    <div >
                        <h3 class="widget-tittle">Services</h3>
                        <ul class="menu-infomation">
                            <li><a href="{{url('/electrical')}}" ><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Electrical</a></li>
                            <li><a href="{{url('/cctv')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCTV</a></li>

                            <li><a href="{{url('/plumbing')}}" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Plumbing Services</a></li>
                            <li><a href="{{url('/ict')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT Services</a></li>

                            <li><a href="{{url('/generator')}}" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Generator Servicing</a></li>
                            <li><a href="{{url('/air-conditional')}}" class="ng-binding" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Air Conditioner</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="">
                        <h3 class="widget-tittle">Company</h3>
                        <ul class="menu-infomation">
                            <li><a href="{{url('/about')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
                            <li><a href="{{url('/career')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Career</a></li>

                            <!--<li><a href="/terms" class="ng-binding">Terms &amp; Conditions</a></li>
                            <li><a href="/contact" class="ng-binding">Contact Us</a></li>
                            <li><a href="/privacy" class="ng-binding">Privacy Policy</a></li>-->

                            <li><a href="{{url('/terms')}}"  class="ng-binding" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms &amp;
                                    Conditions</a></li>
                            <li><a href="{{url('/contact')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a></li>
                            <li><a href="{{url('/privacy')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</a></li>
                            <li><a href="{{url('/community-guidelines')}}" style="margin-right:-70px;" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Community
                                    Guidelines</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div >
                        <h3 class="widget-tittle">Discover</h3>
                        <ul class="menu-infomation">
                            <li><a href="{{url('/how-it-works')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How it Works</a></li>
                            <!--<li><a href="/shohokari-for-business" class="ng-binding">Shohokari for business</a></li> -->
                            <li><a href="{{url('/earn-money')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earn Money</a></li>
                            <li><a href="{{url('/faq')}}" target="_blank" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQ</a></li>
                            <li><a href="{{url('/shohokari')}}" style="margin-right:-70px;" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Book for
                                    Corporate</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md-2">
                    <div class="footer-about">
                        <!--<p><a href="#"><img src="qrcode.png" alt="Google play"></a></p>-->


                    </div>
                </div>
            </div>
        </div>
        <div class="social-menu social-menu_right-arrow">
            <ul class="menu">
                
    
                 <li class="menu-item"><a href="{{ getConfigValue('twitter_link') }}">twitter</a></li>
                <li class="menu-item"><a href="{{ getConfigValue('linkedin_link') }}">linkedin</a></li>
                <li class="menu-item"><a href="{{ getConfigValue('fb_link') }}">facebook</a></li>
                <li class="menu-item"><a href="{{ getConfigValue('instagram_link') }}">instagram</a></li>
                <li class="menu-item"><a href="{{ getConfigValue('youtube_link') }}">youtube</a></li>
                
            </ul>
        </div>
    </footer>
    <!-- /.footer -->

    <div class="copyright" style="margin-top:0px; margin-bottom:-55px; ">
        <div class="container" style="margin-top:-30px; ">
            <p  class="shohokari_company_details"><?php echo date('Y'); ?>© All rights are reserved by mistrimama.com</p>
        </div>
    </div>
    <!-- /.copyright -->


</div>
<!-- Map-About us -->
<div id="loginModel" class="modal fade" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">

            <div class="modal-body">
                <div class="signin-form">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <h2>Sign in</h2>
                        <p class="hint-text">Sign in with your social media account</p>
                        <div class="social-btn text-center">
                            <a href="#" class="btn btn-primary btn-lg" title="Facebook"><center><i class="fa fa-facebook" style="margin-left:-3px;"></i></center></a>
                            <a href="#" class="btn btn-info btn-lg" title="Twitter"><center><i class="fa fa-twitter" style="margin-left:-1px;"></i></center></a>
                            <a href="#" class="btn btn-danger btn-lg" title="Google"><center><i class="fa fa-google" style="margin-left:-1px;"></i></center></a>
                        </div>
                        <div class="or-seperator"><b>or</b></div>
                        <div class="form-group">
                            <input id="email" type="email" class="input-lg form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" placeholder="Enter Email Address" value="{{ old('email') }}" required autofocus>

                            @if ($errors->has('email'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                        <div class="form-group">
                            <input id="password" type="password" class="input-lg form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" placeholder="Enter Password" name="password" required>

                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-success btn-lg btn-block signup-btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                        <div class="text-center small"><a href="#">Forgot Your password?</a></div>
                    </form>
                </div>  </div>

        </div>

    </div>
</div><script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>







<script src="{{ asset('components/jquery/jquery.js') }}"></script>
<script src="{{ asset('components/bootstrap/js/bootstrap.js') }}"></script>
<script src="{{ asset('components/owl.carousel/owl.carousel.js') }}"></script>
<script src="{{ asset('components/parallax.js/parallax.js') }}"></script>
<script src="{{ asset('components/scrollup/jquery.scrollUp.js') }}"></script>
<script src="{{ asset('components/lightgallery/js/lightgallery.js') }}"></script>

<!-- Mobile Menu -->
<script src="{{ asset('components/mmenu/jquery.mmenu.min.all.js') }}"></script>

<!-- REVOLUTION JS FILES -->
<script src="{{ asset('components/slider/jquery.themepunch.tools.min.js') }}"></script>
<script src="{{ asset('components/slider/jquery.themepunch.revolution.min.js') }}"></script>

<!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
<script src="{{ asset('components/slider/extensions/revolution.extension.actions.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.carousel.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.kenburn.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.layeranimation.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.migration.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.navigation.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.parallax.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.slideanims.min.js') }}"></script>
<script src="{{ asset('components/slider/extensions/revolution.extension.video.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>

<!-- ISOTOPE -->
<script src="{{ asset('components/isotope.pkgd.min.js') }}"></script>

<!-- HOVER ISOTOPE -->
<script src="{{ asset('components/jquery.directional-hover.min.js') }}"></script>

<!-- Image loaded ISOTOPE -->
<script src="{{ asset('components/imagesloaded.pkgd.min.js') }}"></script>

<script src="{{ asset('js/main.js') }}"></script>
<script>
    $(document).ready(function() {
        $('.select2').select2();
    });
</script>
@yield('js')
  <style type="text/css">
    body {
        color: #434343;
        background: #dfe7e9;
        font-family: 'Varela Round', sans-serif;
    }
    .form-control {
        font-size: 16px;
        transition: all 0.4s;
        box-shadow: none;
    }
    .form-control:focus {
        border-color: #5cb85c;
    }
    .form-control, .btn {
        border-radius: 50px;
        outline: none !important;
    }
    .signin-form {
        width: 500px;
        margin: 0 auto;
        padding: 30px 0;
    }
    .signin-form form {
        border-radius: 5px;
        margin-bottom: 20px;
        background: #fff;
        box-shadow: 0px 2px 2px rgba(0, 0, 0, 0.3);
        padding: 40px;
    }
    .signin-form a {
        color: #5cb85c;
    }
    .signin-form h2 {
        text-align: center;
        font-size: 34px;
        margin: 10px 0 15px;
    }
    .signin-form .hint-text {
        color: #999;
        text-align: center;
        margin-bottom: 20px;
    }
    .signin-form .form-group {
        margin-bottom: 20px;
    }
    .signin-form .btn {
        font-size: 18px;
        line-height: 26px;
        font-weight: bold;
        text-align: center;
    }
    .signin-form .small {
        font-size: 13px;
    }
    .signup-btn {
        text-align: center;
        border-color: #5cb85c;
        transition: all 0.4s;
    }
    .signup-btn:hover {
        background: #5cb85c;
        opacity: 0.8;
    }
    .or-seperator {
        margin: 50px 0 15px;
        text-align: center;
        border-top: 1px solid #e0e0e0;
    }
    .or-seperator b {
        padding: 0 10px;
        width: 40px;
        height: 40px;
        font-size: 16px;
        text-align: center;
        line-height: 40px;
        background: #fff;
        display: inline-block;
        border: 1px solid #e0e0e0;
        border-radius: 50%;
        position: relative;
        top: -22px;
        z-index: 1;
    }
    .social-btn .btn {
        color: #fff;
        margin: 10px 0 0 30px;
        font-size: 15px;
        width: 55px;
        height: 55px;
        line-height: 38px;
        border-radius: 50%;
        font-weight: normal;
        text-align: center;
        border: none;
        transition: all 0.4s;
    }
    .social-btn .btn:first-child {
        margin-left: 0;
    }
    .social-btn .btn:hover {
        opacity: 0.8;
    }
    .social-btn .btn-primary {
        background: #507cc0;
    }
    .social-btn .btn-info {
        background: #64ccf1;
    }
    .social-btn .btn-danger {
        background: #df4930;
    }
    .social-btn .btn i {
        font-size: 20px;
    }
    
    .social-menu.social-menu_right-arrow {
        /*z-index:9999;   */
    }
    
    .primary-menu_style-01 .menu > li:hover, .primary-menu_style-01 .menu > li.active {
      border-color: #FBD232;
    padding: 10px 20px;
    
}
    
    @media  screen and (max-width: 1200px) {

        .respon {

            display: none;

        }
        .mobresp {
margin-left:70px;
            width: 50%;

        }
    }
     .header_building{
        margin-top:10px;
    }
</style>
</body>

</html>
