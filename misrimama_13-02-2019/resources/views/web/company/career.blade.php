@extends('layouts.web')
@section('content')
    <section class="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>About us</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">
        <div class="row about-slogan text-center">
            <div class="col-xs-12">
                <?= $model->description ?>
            </div>
        </div>
        <!-- /.about-slogan -->

        <div class="row home-maintenance">
            <div class="col-md-6">
            <?= $model->pageAttribute->career_descriptiom ?>
            </div>
            <div class="col-md-6">
                <img src="<?= $model->pageAttribute->career_descriptiom_image ?>" alt="">
            </div>
        </div>
        <!-- /.home-maintenance -->
    </div>

    <section class="feature-style-2" data-parallax="scroll" data-image-src="images/page-home/feature_style2_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-sm-4">
                    <div class="feature-item">
                        <div class="feature-item_icon">
                            <i class="pe-7s-tools"></i>
                        </div>
                        <h3 class="feature-item_title">
                            Professional HandyMan
                        </h3>
                        <p class="feature-item_description">
                            From exhaust fan assessment to reviewing attic space and cleaning refrigerator coils to give you a safe life.
                        </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="feature-item feature-item_clock">
                        <div class="feature-item_icon">
                            <i class="pe-7s-clock"></i>
                        </div>
                        <h3 class="feature-item_title">
                            24/7 Services
                        </h3>
                        <p class="feature-item_description">
                            If you are in emergency situation, please do not worry. We provide 24/7 service. Whenever you call, we service you.
                        </p>
                    </div>
                </div>

                <div class="col-sm-4">
                    <div class="feature-item feature-item_price">
                        <div class="feature-item_icon">
                            <i class="pe-7s-cash"></i>
                        </div>
                        <h3 class="feature-item_title">
                            Affordable Price
                        </h3>
                        <p class="feature-item_description">
                            We do more than a handyman service- we check for glitches that need attention to keep you safe and save your money.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="piece-of-us">
        <div class="container">
            <div class="row row-xs-center">
                <div class="col-md-1">
                    <div class="piece-of-us_icon">
                        <i class="fa fa-users"></i>
                    </div>
                </div>
                <div class="col-md-8">

                    <h2>Want to be a piece of us?</h2>
                    <p>We give a chance for people to work in the professional environment with challenges and values. Come with us!</p>
                </div>
                <div class="col-md-3">
                    <a href="#" class="btn">purchase this theme</a>
                </div>
            </div>
        </div>
    </section>
@endsection