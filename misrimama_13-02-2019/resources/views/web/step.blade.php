@extends('layouts.web')
@section('css')
    <link rel="stylesheet" href="{{ asset('core/public/step/demo/css/jquery.steps.css') }}">
    <style>


        .button1 {
            background-color: white !important;
            color: black !important;
            border: 2px solid #4CAF50 !important;
        }

        .button1:hover {
            background-color: #4CAF50;
            color: white;
        }




    </style>
@endsection
@section('content')
    <div class="container">
        <div class="row service-detail_heading">
            <div class="col-xs-12 text-center">
                <h2 class="heading-title"><span> CCTV </span>Servicing</h2>
                <p>Protect the place you are in. No Place to hide under CCTV. Call Mistri Mama for Design/Supply/installation/Commissioning Package (both Digital and Analog video recorder). Mistri Mama, has recruited the best technicians for all branded and types of CCTV installation, repairing and maintenance services around Bangladesh. By using modern technologies and equipment in a comparison to many global companies, Mistri Mama ensures a satisfactory service accomplishment for the citizens. We value our customers as we realize the defects of CCTV make you suffer a lot. </p>

            </div>
        </div>
        <form id="example-advanced-form" action="#">

          <span class="button button1" style=" background-color: white !important;
            color: black !important;
            border: 2px solid #4CAF50 !important;">Account</span>
            <fieldset>
                <legend>Account Information</legend>

                <label for="userName-2">User name *</label>
                <input id="userName-2" name="userName" type="text" class="required">
                <label for="password-2">Password *</label>
                <input id="password-2" name="password" type="text" class="required">
                <label for="confirm-2">Confirm Password *</label>
                <input id="confirm-2" name="confirm" type="text" class="required">
                <p>(*) Mandatory</p>
            </fieldset>

            <span class="button button1">as</span>
            <fieldset>
                <legend>Profile Information</legend>

                <label for="name-2">First name *</label>
                <input id="name-2" name="name" type="text" class="required">
                <label for="surname-2">Last name *</label>
                <input id="surname-2" name="surname" type="text" class="required">
                <label for="email-2">Email *</label>
                <input id="email-2" name="email" type="text" class="required email">
                <label for="address-2">Address</label>
                <input id="address-2" name="address" type="text">
                <label for="age-2">Age (The warning step will show up if age is less than 18) *</label>
                <input id="age-2" name="age" type="text" class="required number">
                <p>(*) Mandatory</p>
            </fieldset>

            <span class="button button1">Account</span>
            <fieldset>
                <legend>You are to young</legend>

                <p>Please go away ;-)</p>
            </fieldset>

            <span class="button button1">Account</span>
            <fieldset>
                <legend>Terms and Conditions</legend>

                <input id="acceptTerms-2" name="acceptTerms" type="checkbox" class="required"> <label for="acceptTerms-2">I agree with the Terms and Conditions.</label>
            </fieldset>
        </form>
    </div>
    <div class="container">
        <div class="row service-detail_heading">
            <div class="col-xs-12 text-center">
                <h2 class="heading-title">Generator Servicing Service</h2>
                <p>Don’t endanger your life, just for saving a little amount of money.</h3>
                    Get enlighten, Remove all darkness due to failure of the power supply.Call Mistri Mama for installation/Design/repair both of the residential and commercial generators.
                    Mistri Mama, has recruited the best technicians for all branded and types of Generator repairing and maintenance services around Bangladesh. Experts will check and find the problems of your Generator and give a better solution as per the requirement.
                    You never need to carry your Generator to the mechanics. As our experts will fix it in your home and they will carry it to the service center if it is needed. Soon after getting the call or order from the online app or web platform, respective persons will be sent to your home as soon as possible.</p>
            </div>
        </div>
        <div class="row service-detail_content">
            <div class="container">
                <div class="row">
                    <div class="col-sm-8">
                        <h2 style=" text-decoration: underline  ;text-align: center;">Service Category</h2>
                        <div class="col-sm-6">
                            <ul class="service-list_item-categories">
                                <li><a href="#">Servicing Package(Starter)-Fuel line check/Battery check/ Radiator check</a></li>
                                <li><a href="#">Filter problem</a></li>
                                <li><a href="#">Servicing Package(Master)-All filter element replace/Battery</a></li>
                                <li><a href="#">Water refill/Radiator coolant Refill/Lube oil refill) Service only</a></li>
                                <li><a href="#">Controller problem</a></li>
                                <li><a href="#">Controlling circuit problem</a></li>
                                <li><a href="#">Self-starter problem</a></li>
                                <li><a href="#">Diode problem</a></li>
                                <li><a href="#">MM Projector Repair</a></li>
                                <li><a href="#">Computer Networking</a></li>
                                <li><a href="#">Diode problem</a></li>
                                <li><a href="#">Battery Problem</a></li>
                                <li><a href="#">Fuel Pump Problem</a></li>


                            </ul>
                        </div>
                        <div class="col-sm-6">
                            <ul class="service-list_item-categories">
                                <li><a href="#">Magnetic pickup malfunction</a></li>
                                <li><a href="#">Thermostat problem</a></li>
                                <li><a href="#">Emergency push Button/On Off button problem</a></li>
                                <li><a href="#">Silencer/Exhaust/Problem</a></li>
                                <li><a href="#">Battery charger problem</a></li>
                                <li><a href="#">Radiator Water Pump problem</a></li>
                                <li><a href="#">Injector problem</a></li>
                                <li><a href="#">AC pump/Oil Pump replace/Repair/servicing</a></li>
                                <li><a href="#">AVR (Automatic voltage regulator) replace</a></li>
                                <li><a href="#">Actuator repair/Replace</a></li>
                                <li><a href="#">Armature coil damage repair</a></li>
                                <li><a href="#">Rotor Coil burning repair</a></li>
                                <li><a href="#">Charging Alternator/Dynamo problem</a></li>
                                <li><a href="#">Radiator servicing (Complete dismantle/Reinstall and cleaning
                                        radiator by cleaning agent)</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-sm-4">

                        <h2 style=" text-decoration: underline  ;">Unique Benefits</h2>
                        <ul class="service-list_item-categories">

                            <li><a href="#">Provide service at specific time.</a></li>
                            <li><a href="#">Completely safe and reliable.</a></li>
                            <li><a href="#">Seven day’s service warranty.</a></li>
                            <li><a href="#">Providing service by experienced technicians.</a></li>

                        </ul>
                    </div>


                </div>
            </div>
        </div>
    </div>

@endsection
@section('js')

    <script src="{{ asset('core/public/step/build/jquery.steps.js') }}"></script>
    <script>

        var form = $("#example-advanced-form").show();

        form.steps({
            headerTag: "span",
            bodyTag: "fieldset",
            transitionEffect: "slideLeft",
            onStepChanging: function (event, currentIndex, newIndex)
            {
                // Allways allow previous action even if the current form is not valid!
                if (currentIndex > newIndex)
                {
                    return true;
                }
                // Forbid next action on "Warning" step if the user is to young
                /* if (newIndex === 3 && Number($("#age-2").val()) < 18)
                 {
                 return false;
                 }*/
                // Needed in some cases if the user went back (clean up)
                if (currentIndex < newIndex)
                {
                    // To remove error styles
                    form.find(".body:eq(" + newIndex + ") label.error").remove();
                    form.find(".body:eq(" + newIndex + ") .error").removeClass("error");
                }
                // form.validate().settings.ignore = ":disabled,:hidden";
                return true;
            },
            /*   onStepChanged: function (event, currentIndex, priorIndex)
             {
             // Used to skip the "Warning" step if the user is old enough.
             if (currentIndex === 2 && Number($("#age-2").val()) >= 18)
             {
             form.steps("next");
             }
             // Used to skip the "Warning" step if the user is old enough and wants to the previous step.
             if (currentIndex === 2 && priorIndex === 3)
             {
             form.steps("previous");
             }
             },*/
            onFinishing: function (event, currentIndex)
            {
                //   form.validate().settings.ignore = ":disabled";
                return true;
            },
            onFinished: function (event, currentIndex)
            {
                alert("Submitted!");
            }
        });

    </script>
@endsection