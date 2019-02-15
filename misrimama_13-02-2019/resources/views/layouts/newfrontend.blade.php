<!doctype html>
<html lang="en" class="page-home01">
<head>
    <meta charset="utf-8">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content=""</meta>
    <title>Mistri Mama || Door step service provider</title>
    

    <link rel="apple-touch-icon" href="apple-touch-icon.png">
       <link rel="shortcut icon" href="{{ asset("images/favicon.png") }}" />

    <!-- Icon font 7 Stroke  -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/fonts/icon-7/css/pe-icon-7-stroke.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/mistri/fonts/icon-7/css/helper.css') }}">  

    <!-- Icon font Renovation -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/fonts/renovation/icon-font-renovation.css') }}">

    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,400italic,700,700italic' rel='stylesheet' type='text/css'>

    <!-- ico for font -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/icofont/icofont.min.css') }}">
    <!-- Menu Mobile: mmenu -->
    <link type="text/css" rel="stylesheet" href="{{ asset('assets/mistri/components/mmenu/jquery.mmenu.all.css') }}" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/components/font-awesome/css/font-awesome.css') }}" />

    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/components/owl.carousel/assets/owl.carousel.css') }}" />

    <!-- Light Gallery -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/components/lightgallery/css/lightgallery.css') }}" />

    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/components/bootstrap/css/bootstrap.css') }}" />

    <!-- REVOLUTION STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/mistri/components/slider/slider.css') }}">

    <!-- THEME STYLE -->
    <link rel="stylesheet" href="{{ asset('assets/mistri/css/main.css') }}">
    <link rel="shortcut icon" href="favicon.png" />
    <style type="text/css">
      .oki{
         background: #202332 url(assets/mistri/images/page-home/home02-slide02.jpg)no-repeat center fixed;
         padding-right: 22px;
      }
      .hidden{
        display: none;
      }
      .panel-danger > .panel-heading {

    background-color: #607D8B;
    border-color: #607D8B;
}

.jconfirm{
    background-color: #607d8b;
    background-image: url(mbac.png);
}
.jconfirm-title{
    width: 100%;
    height: 50px;
}
 .modal-header {
      background-color: #7c807c;
      color:white !important;
      font-size: 14px;
      height: auto;
      min-height: 50px;
  }

  .modal-footer {
      background-color: #f9f9f9;
  }
  #button1{

  }
  #button2{
   background:#4CB1CF;
  }
  #button3{
   background:#F0433D;
  }
  #button4{
   background:#f0ad4e;
  }
  .rounded-ghost-btn:hover{
    background-color: #4a90e2;
    background-color: #FBD232;
    border-color:#FBD232;
    color: white;
  }
  .rounded-ghost-btn {
        font-family: Poppins,sans-serif;
    font-weight: 500;
    font-size: 14px;
    background-color: transparent;
    padding: 10px 32px;
    text-transform: uppercase;
    border: 1px solid #212540;
    border-radius: 24px;
    max-width: 100px;

    max-width: 100px;
    width: 95px;
    height: 32px;
    line-height: 20px;
    font-size: 14px;
    font-weight: 400;
    border: 1px solid #4a90e2;
    padding: 0!important;
    color: #4a90e2;
}


    </style>

    <style>
        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
        }

        .top-container {
            background-color: #f1f1f1;
            padding: 30px;
            text-align: center;
        }

       /* .header {
            padding: 10px 16px;
            background: #555;
            color: #f1f1f1;
        }*/

        .content {
            padding: 16px;
        }

        .sticky {
            position: fixed;
            top: 0;
            width: 100%;
            background-color: white;
        }

        .sticky + .content {
            padding-top: 102px;
        }
    </style>
  <!--style css-->
  <link rel="stylesheet" href="{{ asset('assets/mistri/assets/css/fucker.css') }}">
  
  <!--responsive css-->
  <link rel="stylesheet" href="{{ asset('assets/mistri/assets/css/responsive.css')}}">

  
  
  </head>
  <body style="background-color: white;">
<div class="site">
  @include('layouts.header')

  @include('newhome.index')



  @include('layouts.footer')
</div>
<!-- Modal request-->
<div id="book_A" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
       
      </div>
      <div class="modal-body">
        
         <form>
            <div id="first">
              
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" style="color: #555;">
                    <i class="glyphicon glyphicon-map-marker"></i>
                  </span>
                  <select class="form-control" style="color: #555;">
                    <option class="disabled" style="padding-right: 22px;" value=" "> SELECT YOUR AREA </option>
                    
                                        <option value="XMLID_1655_">Azimpur</option>
                                        <option value="XMLID_1652_" >Badda</option>
                                        <option value="XMLID_1870_">Baridhara</option>
                                        <option value="XMLID_1752_">Dhanmondi</option>
                                        <option value="XMLID_1791_">Gulshan</option>
                                        <option value="XMLID_1646_">Khilkhet</option>
                                        <option value="XMLID_1665_">Khilgaon</option>
                                        <option value="XMLID_1746_">Mirpur</option>
                                        <option value="XMLID_1738_">Mohammadpur</option>
                                        <option value="XMLID_1658_">Motijheel</option>
                                        <option value="XMLID_1765_">New Market</option>
                                        <option value="XMLID_1749_">Old Dhaka</option>
                                        <option value="XMLID_1768_">Ramna</option>
                                        <option value="XMLID_1839_">Tejgaon</option>
                                        <option value="XMLID_1661_">Uttara</option>
                  </select>
                </div>   
              </div>
              <div class="form-group">
                <div class="input-group">
                  <span class="input-group-addon" style="background: inherit;">
                    <i class="glyphicon glyphicon-wrench"></i>
                  </span>
                  <select class="form-control" style="background: inherit;">
                    <option class="disabled"  style="padding-right: 22px;"  value=" "> SELECT YOUR SERVICE </option>
                    <option value="1">Electrical service</option>
                    <option value="2">Plumbing Services</option>
                    <option value="3">Air Conditioner Services</option>
                     <option value="4">Generator Services</option>
                    <option value="5">IT Services</option>
                    <option value="6">CCTV Services</option>

                  </select>
                </div>   
              </div>
              <a href="book.php"  class="btn btn-info">Next</a>
              <!-- <button type="submit"  class="btn btn-info">Book</button> -->
            </div>
           

         </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>


    <!-- Map-About us -->

    <script src="{{ asset('assets/mistri/components/jquery/jquery.js') }}"></script>
    <script src="{{ asset('assets/mistri/components/bootstrap/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/mistri/components/owl.carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('assets/mistri/components/parallax.js/parallax.js') }}"></script>
    <script src="{{ asset('assets/mistri/components/scrollup/jquery.scrollUp.js') }}"></script>
    <script src="{{ asset('assets/mistri/components/lightgallery/js/lightgallery.js') }}"></script>

    <!-- Mobile Menu -->
    <script src="{{ asset('assets/mistri/components/mmenu/jquery.mmenu.min.all.js') }}"></script>

    <!-- REVOLUTION JS FILES -->
    <script src="{{ asset('assets/mistri/components/slider/jquery.themepunch.tools.min.js') }}"></script>
    <script src="{{ asset('assets/mistri/components/slider/jquery.themepunch.revolution.min.js') }}"></script>

    <!-- SLIDER REVOLUTION 5.0 EXTENSIONS -->
    
    
   
    
    

   
    

    <!-- ISOTOPE -->
    <script src="{{ asset('assets/mistri/components/isotope.pkgd.min.js') }}"></script>

    <!-- HOVER ISOTOPE -->
    <script src="{{ asset('assets/mistri/components/jquery.directional-hover.min.js') }}"></script>

    <!-- Image loaded ISOTOPE -->
    <script src="{{ asset('assets/mistri/components/imagesloaded.pkgd.min.js') }}"></script>

    <script src="{{ asset('assets/mistri/js/main.js') }}"></script>
    <script type="text/javascript">
      $(document).ready(function(){
        $("#myModal").modal("show");
        $("#next").click(function(event){
          event.preventDefault();
          $('#first').addClass('hidden');
          $('#second').removeClass('hidden');
        });
         $("#back").click(function(event){
          event.preventDefault();
          $('#first').removeClass('hidden');
          $('#second').addClass('hidden');
        });
      });
    </script>

    <style type="text/css">
        #top-right-menu a{
            color: white;
        }
        #fucker1{
            background-color:transparent;
        }
        #fucker2{
            background-color:transparent;
        }
        #fucker1:hover{
            background-color:#fff;
        }
        #fucker2:hover{
            background-color:#fff;
        }
        .btn-home-search {
    border: 2px solid #35C36F;
    background-color: #35C36F;
    padding: 16.95px 26px 17.05px;
    color: #fff;
    border-radius: 0 5px 5px 0;
    margin-left: 1px;
}
.defaultimg{
  filter: blur(8px);
  -webkit-filter: blur(8px);
}

    </style>

    
  </body>
 
<script src="{{ asset('assets/mistri/jquery.rwdImageMaps.min.js') }}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/maphilight/1.4.0/jquery.maphilight.min.js"></script>
<script src="{{ asset('assets/mistri/smooth-scroll.polyfills.min.js') }}"></script>

 <script src="{{ asset('assets/newfront/js/jquery.sticky.js') }}"></script>
{{-- <script>
$(document).ready(function(){
   $("#dis").sticky({
        topSpacing: 0,
       className:'is-sticky',
       zIndex:-1
    });

});
</script>--}}
<script>
    window.onscroll = function() {myFunction()};

    var header = document.getElementById("dis");
    var sticky = header.offsetTop;

    function myFunction() {
        if (window.pageYOffset > sticky) {
            header.classList.add("sticky");
        } else {
            header.classList.remove("sticky");
        }
    }
</script>
<script>
console.log("hello");

var xmap='';
    $(document).ready(function(e) {
    $('img[usemap]').rwdImageMaps();
    $('.map').maphilight({
       fillColor: 'FBD132',
       fillOpacity:0.4,
       stroke:false,
       neverOn:true
    });

    $('area').click(function(){    
    // Reset all areas with class 'selected'
    $('.punto').data('maphilight', {alwaysOn: false}).trigger('alwaysOn.maphilight');
    // Remove class selected
    $('area').removeClass('punto');
    // select and highlight this area
    $(this).addClass('punto');
    $(this).data('maphilight', {alwaysOn: true}).trigger('alwaysOn.maphilight');
});



    });

var allStates = $("svg.us > path");
var allStates2 = $("text");

allStates.on("click", function() {
  
  allStates.css('fill','transparent');
  $('text').css('stroke','#febf13');

  $(this).css('fill','#febf13');
  $('#T'+this.id).css('stroke','black');
   map=$('#T'+this.id).text();
  $('#sa').val(this.id);
  
  
});

allStates2.on("click", function() {
  var id=this.id.substring(1);  
  allStates.css('fill','transparent');
  $('text').css('stroke','#febf13');

  $('#'+id).css('fill','#febf13');
  $(this).css('stroke','black');
   map=$(this).text();
   $('#sa').val(id);
  
  
  
});

function combomap(id){
if(id!=='0'){
  allStates.css('fill','transparent');
  $('text').css('stroke','#febf13');

  $('#'+id).css('fill','#febf13');
  $('#T'+id).css('stroke','black');
   map=$('#T'+id).text();

  
}
}

function comboservice(val){
if(val!='0'){
    var t=$('#ss option[value='+val+']').text();
    var b=parseInt(val)+6; 
    setservice(t,val,b);

}
}

var scroll = new SmoothScroll('a[href*="#"]', {
 
    // Selectors
    ignore: '[data-scroll-ignore]', // Selector for links to ignore (must be a valid CSS selector)
    header: null, // Selector for fixed headers (must be a valid CSS selector)
    topOnEmptyHash: true, // Scroll to the top of the page for links with href="#"
 
    // Speed & Easing
    speed: 1800, // Integer. How fast to complete the scroll in milliseconds
    
 
});

var imgflag=1;
     var n=3;

        setInterval(function(){
            if(imgflag>=n){
           imgflag=1;
        }
        
         $('#fslider').css('background','url(assets/tempslider/slide'+imgflag+'.jpg)');
         $('#fslider').fadeIn('slow');
         imgflag++;
           
        }, 9000);




        var map="";
       var service="";



    

    
    var ximg='';

    

    function setservice(x,a,b){

        
        if(ximg!=''){
       // $('#img'+ximg).attr('src','assets/tempslider/slide'+ximg+'.jpg');
    }
        service=x;
        
       // $('#img'+a).attr('src','assets/tempslider/slide'+b+'.jpg');

        ximg=a;
        $('#ss').val(a);
        
    }
</script>
<script type="text/javascript" src="{{ asset('assets/mistri/assets/js/modal.js') }}"></script>

<link rel="stylesheet" href="{{ asset('assets/mistri/jquery-confirm.min.css') }}">
<script src="{{ asset('assets/mistri/jquery-confirm.min.js') }}"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script>
 $(document).ready(function () {
  $('.preview2').on("click", function (e) {
    e.preventDefault();
      callBookingForm();
  }); // on
}); // ready
 


function callBookingForm(){
     $.fancybox.open({
        //maxWidth  : '',
        /*fitToView : true,*/
       // width     : '100%',
        /*height    : '400',
        autoSize  : false,*/
        type        : "ajax",
        src         : "{{ route('service-booking-popup') }}",
        ajax: { 
           settings: { data : $('#booking-popup-form').serialize(), type : 'GET' }
        }
      });
}
</script>
<style>
.about-description p {
  padding: 15px;
}
  .bookin-submit{
        width: 100% !important;
        height: 34px !important;
        padding-top: 7px !important;
        border-radius: 0px !important;
        text-transform: uppercase !important;
        font-family: Montserrat !important;
        font-size: 13px !important;
        font-weight: 700 !important;
        color: #111 !important;
        background: #FBD232 !important;
        padding: 11px 17px !important;
        display: inline-block !important;
        border-radius: 0 !important;


 

     text-transform: uppercase;
    font-family: Montserrat;
    font-size: 13px;
    font-weight: 700;
    color: #111;
    background: #FBD232;
    padding: 11px 17px;
    display: inline-block;
    border-radius: 0;
    display: inline-block;
    padding: 6px 12px;
    margin-bottom: 0;
    font-size: 14px;
    font-weight: normal;
    line-height: 1.42857143;
    text-align: center;
    white-space: nowrap;
    vertical-align: middle;
    -ms-touch-action: manipulation;
    touch-action: manipulation;
    cursor: pointer;
    -webkit-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
    background-image: none;
    border: 1px solid transparent;
    border-radius: 4px;
    }
</style>
</html>