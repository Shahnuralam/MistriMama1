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
        z-index:9999;   
    }
    
    .primary-menu_style-01 .menu > li:hover, .primary-menu_style-01 .menu > li.active {
      border-color: #FBD232;
    padding: 10px 20px;
    
}
    
    @media screen and (max-width: 1200px) {

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
                            <li class="menu-item"><a href="#serviceprovider ">Become a service partner</a></li>
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
                    <img src="{{ getConfigValue('home_logo') }}"  width="140"   alt="MISTRI MAMA">
                     
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
                                <li><a href="#">Book Now</a>
                                    <ul>
                                        <li><a href="{{url('/electrical')}}" >Electrical</a></li>
                                        <li><a href="{{url('/plumbing')}}" >Plumbing Services</a></li>
                                        <li><a href="{{url('/generator')}}" >Generator</a></li>
                                        <li><a href="{{url('/ict')}}" >ICT</a></li>
                                        <li><a href="{{url('/cctv')}}" >CCTV</a></li>
                                        <li><a href="{{url('/air-conditional')}}" >Air Conditionar</a></li>

                                    </ul>
                                </li>     <li><a  href="{{ asset('assets/Grow_with_us_(B2B).pdf') }}" target="_blank">Book For Corporate</a></li>
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
            <div style="margin-top:65px;" class="social-menu social-menu_right-arrow hidden-md-down">
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

<nav id="primary-menu" class="primary-menu_style-01 hidden-md- respon navbar-fixed-top sticky-top" z-index="1" style="margin-top:-15px; height:60px;">
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
                                    <li class="menu-item"><a href="{{url('/electrical')}}" >Electrical Service</a></li>
                                    <li class="menu-item"><a href="{{url('/cctv')}}" >CCTV Service</a></li>

                                    <li class="menu-item"><a href="{{url('/plumbing')}}" >Plumbing Services</a></li>
                                    <li class="menu-item"><a href="{{url('/ict')}}" >IT Service</a></li>
                                    <li class="menu-item"><a href="{{url('/generator')}}" >Generator Service</a></li>

                                    <li class="menu-item"><a href="{{url('/air-conditional')}}" >Air Conditioner</a></li>

                                </ul>
                            </li>
                            <li><a href="{{ asset('assets/Grow_with_us_(B2B).pdf') }}" target="_blank">Book For Corporate</a></li>
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


<!-- /.primary-menu -->
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
</div>