@extends('layouts.web')
@section('content')
    <section class="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>contact</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /.big-title -->


    <div id="map-canvas" class="thememove-gmaps" data-address="40.7590615,-73.969231" data-height="480" data-width="100%" data-zoom_enable="" data-zoom="16" data-map_type="roadmap" data-map_style="style1"></div>

    <div class="container">
        <div class="row">
            <div class="col-md-7 col-lg-7 message">
                <h2 class="heading-title">Send Us A Message</h2>
                <form action="#">
                    <div class="row">
                        <div class="col-sm-6" style="padding-right: 5px">
                            <input type="text" name="name" required="required" placeholder="Name*">
                        </div>
                        <div class="col-sm-6" style="padding-left: 5px">
                            <input type="text" name="your-phone" value="" size="40" aria-invalid="false" placeholder="Phone">
                        </div>
                        <div class="col-sm-12">
                            <input type="email" name="email" required="required" placeholder="Email*">
                        </div>
                        <div class="col-sm-12">
                            <textarea name="your-message" cols="40" rows="10" aria-invalid="false" placeholder="Your message*" style="height: 110px;"></textarea>
                        </div>
                        <div class="col-sm-12">
                            <input type="submit" value="Send Message" class="btn">
                        </div>
                    </div>
                </form>
            </div>
            <!-- .message -->

            <div class="col-sm-8 col-md-5 col-lg-4 col-lg-offset-1">
                <div class="call-us">
                    <h3>Call us today for some special offers!</h3>
                    <div class="call-us_phone row">
                        <div class="col-xs-2 col-sm-2">
                            <div class="call-us_icon">
                                <i class="fa fa-phone"></i>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-10">
                            <div class="phone">
                                <h4>09610-222-111</h4>
                                <p>info@mistrimama.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="call-us_address row">
                        <div class="col-xs-2 col-sm-2">
                            <div class="call-us_icon">
                                <i class="fa fa-home"></i>
                            </div>
                        </div>
                        <div class="col-xs-10 col-sm-10">
                            <div class="address">
                                <h4>1st floor, Sky View Ocean Tower</h4>
                                <p>38 Segun Bagicha, Dhaka, Bangladesh.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- .call-us -->
        </div>
    </div>

@endsection