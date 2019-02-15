<!doctype html>
<html lang="en" class="page-home01">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mistri Mama || customer login</title>

    <link rel="apple-touch-icon" href="apple-touch-icon.png">

    <!-- Icon font 7 Stroke -->
    <link rel="stylesheet" href="fonts/icon-7/css/pe-icon-7-stroke.css">
    <link rel="stylesheet" href="fonts/icon-7/css/helper.css">

    <!-- Icon font Renovation -->
    <link rel="stylesheet" href="fonts/renovation/icon-font-renovation.css">

    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- ico for font -->
    <link rel="stylesheet" href="icofont/icofont.min.css">
    <!-- Menu Mobile: mmenu -->
    <link type="text/css" rel="stylesheet" href="components/mmenu/jquery.mmenu.all.css" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="components/font-awesome/css/font-awesome.css" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="components/owl.carousel/assets/owl.carousel.css" />

    <!-- Light Gallery -->
    <link rel="stylesheet" href="components/lightgallery/css/lightgallery.css" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="components/bootstrap/css/bootstrap.css" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="components/slider/slider.css">

    <!-- THEME STYLE -->
    <link rel="stylesheet" href="css/main.css">
    <link rel="shortcut icon" href="favicon.png" />
    <style type="text/css">
      .oki{
         background: #202332 url(images/page-home/home02-slide02.jpg)no-repeat center fixed;
         padding-right: 22px;
      }
      .fb{
            border: 1px solid #eae4e4;
            padding-top: 10px;
            padding-bottom: 10px;
            color: #eae4e4;
      }
      .fb > a {
        color: ##a9a3a3;
      }
      .fb-form{
        border: 1px solid #eae4e4;
        padding-top: 10px;
        padding-bottom: 10px;
        color: #eae4e4;
        height: 45px;
        border-radius: 0px;
      }
      .hidden{
        display: hidden;
      }
    </style>
  </head>
  <body>
  <div class="site">
<?php include("head.php"); ?>



<section class="features-style-1">
  <div class="container">
    <div class="row">
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>  
      <div class="col-lg-8 col-md-8 col-sm-8 col-sm-12">
        <h2 class="heading-title text-center">
            <a href="#" id="login1" class="btn btn1">Login </a> 
            <a href="#" id="signup" class="btn btn1"> Sign up</a> 
        </h2>
                <div id="login">
                    <div class="text-center fb">
                        <a href="#" class="text-center"><img src="images/fb.png" alt="Facebook" title="login with facebook" /> login with Facebook</a>
                    </div>
                    <div class="text-center fb">
                        <a href="#" class="text-center"><img src="images/google.jpg" alt="Google" title="login with google" /> login with Google++</a>
                    </div>
                    <p style="height: 10px;"></p>
                    <hr>
                    <span class="lead">OR</span>
                    <h5 class="text-center">Use email</h5>
                    <form role="form">
                          <div class="form-group">
                            <input type="text" placeholder="user id" class="form-control fb-form" id="email">
                          </div>
                          <div class="form-group">
                            <input type="password" placeholder="password" class="form-control fb-form" id="pwd">
                          </div>
                          <button type="submit" class="btn btn-default">Login
                          </button>
                          <a href="#" class="btn-link"> Forgot password?</a>
                    </form>
                </div>
                <div id="register" class="hidden">
                    <div class="text-center fb">
                        <a href="#" class="text-center"><img src="images/fb.png" alt="Facebook" title="login with facebook" /> Signup with Facebook</a>
                    </div>
                    <div class="text-center fb">
                        <a href="#" class="text-center"><img src="images/google.jpg" alt="Google" title="login with google" /> signup with Google++</a>
                    </div>
                    <p style="height: 10px;"></p>
                    <hr>
                    <span class="lead">OR</span>
                    <h5 class="text-center">Use email</h5>
                    <form role="form">
                          <div class="form-group">
                             <input type="text" placeholder="user id" class="form-control fb-form" id="user id">
                          </div>
                          <div class="form-group">
                            <input type="text" placeholder="First name " class="form-control fb-form" id="fn">
                          </div>
                          <div class="form-group">
                            <input type="text" placeholder="Last name " class="form-control fb-form" id="ln">
                          </div>
                          <div class="form-group">
                            <input type="tel" placeholder="Moblie number" class="form-control fb-form" id="tel">
                          </div>
                          <div class="form-group">
                            <input type="tel" placeholder="Email" class="form-control fb-form" id="email">
                          </div>
                          <div class="form-group">
                            <input type="password" placeholder="password" class="form-control fb-form" id="pwd">
                          </div>
                          <button type="submit" class="btn btn-default">Login
                          </button>
                          <a href="#" class="btn-link"> Forgot password?</a>
                    </form>
                </div>
      </div>
      <div class="col-lg-2 col-md-2 col-sm-2 col-xs-12"></div>
    </div>
  </div>
</section>
<!-- /.features-style-1 -->

<?php include('footer.php'); ?>
<!-- /.footer -->

<!-- Modal request-->
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <h3>WElcome to Mistri mama!!!</h3>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
        </div>
        <div class="modal-body">
         <p>A welcome note and a welcome picture goes here :</p>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-info  pull-right" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
        </div>
      </div>
    </div>
  </div> 
</div>

	<!-- Map-About us -->
	<script src="https://maps.google.com/maps/api/js?sensor=false&amp;language=en"></script>

    <script src="components/jquery/jquery.js"></script>
    <script src="components/bootstrap/js/bootstrap.js"></script>
    <script src="components/owl.carousel/owl.carousel.js"></script>
    <script src="components/parallax.js/parallax.js"></script>
  	<script src="components/scrollup/jquery.scrollUp.js"></script>
  	<script src="components/lightgallery/js/lightgallery.js"></script>

    <!-- Mobile Menu -->
    <script src="components/mmenu/jquery.mmenu.min.all.js"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="components/slider/jquery.themepunch.tools.min.js"></script>
    <script src="components/slider/jquery.themepunch.revolution.min.js"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    <script src="components/slider/extensions/revolution.extension.actions.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.carousel.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.kenburn.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.layeranimation.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.migration.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.navigation.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.parallax.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.slideanims.min.js"></script>
    <script src="components/slider/extensions/revolution.extension.video.min.js"></script>

    <!-- ISOTOPE -->
    <script src="components/isotope.pkgd.min.js"></script>

    <!-- HOVER ISOTOPE -->
    <script src="components/jquery.directional-hover.min.js"></script>

    <!-- Image loaded ISOTOPE -->
    <script src="components/imagesloaded.pkgd.min.js"></script>

    <script src="js/main.js"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#myModal").modal("show");
       
       $("#signup").click(function(e){
        e.preventDefault();
         $("#register").removeClass("hidden");
         $("#login").addClass("hidden");
       });

       $("#login1").click(function(e){
          e.preventDefault();
          $("#register").addClass("hidden");
          $("#login").removeClass("hidden");
       });
        // $("#signup").click(function(e){
        //     e.preventDefault();
            
        //    
        //     
        // });

      });
    </script>
  </body>

</html>
