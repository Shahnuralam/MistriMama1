<footer class="footer" >
    <div class="container">
        <div class="row"  style="margin-top: 30px;margin-right: -22%;">
            <div class="col-md-4">
                <div class="footer-about">
                    {{--  <p><a href="#"><img src="a.png" width="140"   alt="MISTRI MAMA"></a></p>
--}}
                    <div class="footer-info">
                        <h3 class="widget-tittle">Mistri Mama Office</h3>
                        <ul>
                            <li><i class="fa fa-map-marker"></i>Skyview Ocean Tower (1st floor)
                                <br> &nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;38 Segunbagicha, Dhaka, Bangladesh</li>
                            
                            <li><i class="fa fa-phone"></i>09610-222-111</li>
                            <li><i class="fa fa-envelope"></i>info@mistrimama.com</li>
                            <li><i class="fa fa-clock-o"></i>Sat - Thur: 09:00 am - 6:00 pm</li>
                        </ul>
                    </div>
                </div>
            </div>


            <div class="col-md-2">
                <div >
                    <h3 class="widget-tittle">Services</h3>
                    <ul class="menu-infomation">
                        <li><a href="{{url('/electrical')}}" ><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Electrical&nbsp;Services</a></li>
                        <li><a href="{{url('/plumbing')}}" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Plumbing&nbsp;Services</a></li>
                        <li><a href="{{url('/generator')}}" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;Generator&nbsp;Services</a></li>
                        <li><a href="{{url('/air-conditional')}}" class="ng-binding" style="margin-right:-60px;"><i class="fa fa-arrow-right"></i>&nbsp;     &nbsp; AC Services</a></li>
                        <li><a href="{{url('/ict')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IT Services</a></li>
                        <li><a href="{{url('/cctv')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;CCTV Services</a></li>

                        
                        
                    </ul>
                </div>
            </div><hr>
            <div class="col-md-2">
                <div class="">
                    <h3 class="widget-tittle">Company</h3>
                    <ul class="menu-infomation">
                        <li><a href="{{url('/about')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;About Us</a></li>
                        <li><a href="{{url('/career')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Career</a></li>

                        <!--<li><a href="/terms" class="ng-binding">Terms &amp; Conditions</a></li>
                        <li><a href="/contact" class="ng-binding">Contact Us</a></li>
                        <li><a href="/privacy" class="ng-binding">Privacy Policy</a></li>-->

                        <li><a href="{{url('/terms')}}"  class="ng-binding" style="margin-right:-70px;"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Terms&nbsp;Conditions</a></li>
                        <li><a href="{{url('/contact')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Contact Us</a></li>
                        <li><a href="{{url('/privacy')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Privacy Policy</a></li>
                        <li><a href="{{url('/community-guidelines')}}" style="margin-right:-70px;" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Community&nbsp;Guidelines</a></li>

                    </ul>
                </div>
            </div><hr>
            <div class="col-md-2">
                <div >
                    <h3 class="widget-tittle">Discover</h3>
                    <ul class="menu-infomation">
                        <li><a href="{{url('/how-it-works')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;How it Works</a></li>
                        <!--<li><a href="/shohokari-for-business" class="ng-binding">Shohokari for business</a></li> -->
                        <li><a href="{{url('/earn-money')}}" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Earn Money</a></li>
                        <li><a href="{{url('/faq')}}" target="_blank" class="ng-binding"><i class="fa fa-arrow-right"></i>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;FAQ</a></li>
                        <li><a href="{{ asset('assets/Grow_with_us_(B2B).pdf') }}"  style="margin-right:-70px;" class="ng-binding" target="_blank" ><i class="fa fa-arrow-right"  ></i>&nbsp;&nbsp;&nbsp;&nbsp;Book for &nbsp;Corporate</a></li>

                    </ul>
                </div>
            </div><hr>
            <div class="col-md-2">
                <div class="footer-about">
                    <!--<p><a href="#"><img src="qrcode.png" class="mobresp" alt="Google play"></a></p>-->

                </div>
            </div>
        </div>
    </div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <div class="social-menu social-menu_right-arrow" style="margin-top: -25px; ">
        <ul class="menu">
            
             <li class="menu-item"><a href="{{ getConfigValue('youtube_link') }}">youtube</a></li>
             <li class="menu-item"><a href="{{ getConfigValue('twitter_link') }}" target="_blank"  >twitter</a></li>
               <li class="menu-item"><a href="{{ getConfigValue('instagram_link') }}">instagram</a></li>
             <li class="menu-item"><a href="{{ getConfigValue('linkedin_link') }}">linkedin</a></li>
            <li class="menu-item"><a href="{{ getConfigValue('fb_link') }}">facebook</a></li>
        </ul>
    </div>
</footer>



<div class="copyright" style="margin-top:-5px; margin-bottom:-40px; ">
    <div class="container" >
        <p  class="shohokari_company_details"><?php echo date('Y'); ?> © All rights are reserved by mistrimama.com</p>
    </div>
</div>
