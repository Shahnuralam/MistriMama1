@extends('layouts.web')
@section('css')

@endsection
@section('content')

    <div class="row service-detail_content" >
        <div class="container" >
            <div class="panel panel-default" style=" box-shadow: 0px 0px 10px 2px #888888;">
                <div class="panel-heading" >
                    <center>
                        <h3>Generator Services</h3></center>


                </div>
                    <div class="panel-body" style="margin-top: -30px;" >
                                <div class="panel-group accordion-rn" id="accordion-faq"  style="height:400px !important;  overflow: scroll; overflow-x:hidden;" role="tablist" aria-multiselectable="true">

                                    <div class="panel " >
                                        <div class="panel-heading"  role="tab" id="faq-headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem" data-toggle="modal" data-target="#showmodel">Add</button></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                            <div class="panel-body"  >
                                                <div style="margin-top: -30px; margin-bottom: -30px;">
                                                    Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                    <br>
                                                    <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                    <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                    <!-- Modal -->
                                                    <div id="viewdetails" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="faqs" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">FAQ's</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel " >
                                        <div class="panel-heading"  role="tab" id="faq-headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                            <div class="panel-body"  >
                                                <div style="margin-top: -30px; margin-bottom: -30px;">
                                                    Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                    <br>
                                                    <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                    <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                    <!-- Modal -->
                                                    <div id="viewdetails" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="faqs" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">FAQ's</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel " >
                                        <div class="panel-heading"  role="tab" id="faq-headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                            <div class="panel-body"  >
                                                <div style="margin-top: -30px; margin-bottom: -30px;">
                                                    Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                    <br>
                                                    <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                    <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                    <!-- Modal -->
                                                    <div id="viewdetails" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="faqs" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">FAQ's</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel " >
                                        <div class="panel-heading"  role="tab" id="faq-headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                            <div class="panel-body"  >
                                                <div style="margin-top: -30px; margin-bottom: -30px;">
                                                    Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                    <br>
                                                    <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                    <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                    <!-- Modal -->
                                                    <div id="viewdetails" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="faqs" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">FAQ's</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel " >
                                        <div class="panel-heading"  role="tab" id="faq-headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                            <div class="panel-body"  >
                                                <div style="margin-top: -30px; margin-bottom: -30px;">
                                                    Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                    <br>
                                                    <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                    <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                    <!-- Modal -->
                                                    <div id="viewdetails" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="faqs" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">FAQ's</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="panel " >
                                        <div class="panel-heading"  role="tab" id="faq-headingOne">
                                            <h4 class="panel-title">
                                                <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                            <div class="panel-body"  >
                                                <div style="margin-top: -30px; margin-bottom: -30px;">
                                                    Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                    <br>
                                                    <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                    <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                    <!-- Modal -->
                                                    <div id="viewdetails" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">Details</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div id="faqs" class="modal fade" role="dialog">
                                                        <div class="modal-dialog">

                                                            <!-- Modal content-->
                                                            <div class="modal-content">
                                                                <div class="modal-header">
                                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                    <h4 class="modal-title">FAQ's</h4>
                                                                </div>
                                                                <div class="modal-body">
                                                                    <p>Some text in the modal.</p>
                                                                </div>
                                                                <div class="modal-footer">
                                                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>


                                </div>

                    </div>

            </div>
        </div>
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
    <div id="showmodel" class="modal fade" role="dialog" data-keyboard="false" data-backdrop="static">
        <div class="modal-dialog modal-lg">

            <!-- Modal content-->
            <div class="modal-content">

                    <div class="row service-detail_content" >
                        <div class="container" >
                            <div class="panel panel-default" style=" box-shadow: 0px 0px 10px 2px #888888;">
                                <div class="panel-heading" >
                                    <center>
                                        <h3>Generator Services</h3></center>
                                    <button type="button" style="margin-top: -20px;" class="close" data-dismiss="modal"><span class="fa fa-times fa-2x"></span></button>

                                    <ul class="nav nav-tabs ">
                                        <li class="active"><a href="#tab1" class="" data-toggle="tab">Service</a></li>
                                        <li><a href="#tab2" class="" data-toggle="tab">Providers</a></li>
                                        <li><a href="#tab3" class="" data-toggle="tab">Schedule</a></li>
                                        <li><a href="#tab4" class="" data-toggle="tab">Finish</a></li>
                                    </ul>

                                </div>
                                <div class="panel-body" >
                                    <div class="tab-content">
                                        <div class="alert alert-info" >

                                            Selected Items : <span class="label selecteditems" style="  border: 5px solid black;color:black; font-size: 18px;">-</span>
                                            Approx Price :   <span class="label approxprice" style="  border: 5px solid black;color:black; font-size: 18px;">-</span>
                                            Service Selected :   <span class="label serviceselected" style="  border: 5px solid black;color:black; font-size: 18px;">-</span>
                                            Date Selected :   <span class="label dateselected" style="  border: 5px solid black;color:black; font-size: 18px;">-</span>
                                            Time Selected :   <span class="label timeselected" style="  border: 5px solid black;color:black; font-size: 18px;">-</span>

                                        </div>
                                        <div class="tab-pane active" id="tab1" style="margin-top: -20px;">

                                            <div class="panel-group accordion-rn" id="accordion-faq"  style="height:400px !important;  overflow: scroll; overflow-x:hidden;" role="tablist" aria-multiselectable="true">

                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne1" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem" data-toggle="modal" data-target="#showmodel">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne1" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div style="margin-top: -30px; margin-bottom: -30px;">
                                                                Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                                <br>
                                                                <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                                <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                                <!-- Modal -->
                                                                <div id="viewdetails" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Details</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="faqs" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">FAQ's</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div style="margin-top: -30px; margin-bottom: -30px;">
                                                                Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                                <br>
                                                                <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                                <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                                <!-- Modal -->
                                                                <div id="viewdetails" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Details</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="faqs" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">FAQ's</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div style="margin-top: -30px; margin-bottom: -30px;">
                                                                Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                                <br>
                                                                <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                                <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                                <!-- Modal -->
                                                                <div id="viewdetails" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Details</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="faqs" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">FAQ's</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div style="margin-top: -30px; margin-bottom: -30px;">
                                                                Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                                <br>
                                                                <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                                <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                                <!-- Modal -->
                                                                <div id="viewdetails" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Details</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="faqs" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">FAQ's</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div style="margin-top: -30px; margin-bottom: -30px;">
                                                                Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                                <br>
                                                                <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                                <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                                <!-- Modal -->
                                                                <div id="viewdetails" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Details</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="faqs" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">FAQ's</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOne">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOne">
                                   <button class=" " style="border-radius: 15px;" >
                                    What are your work timings?

                                   </button>
                                   <span class="label label-info">Starting Price: - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right additem">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div style="margin-top: -30px; margin-bottom: -30px;">
                                                                Mistri Mama services are available from 8am to 10pm. Mistri Mama also provide services in any Emergency.
                                                                <br>
                                                                <button type="button" class="btn"  style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#viewdetails">View Details</button>
                                                                <button type="button" class="btn" style="background:black; border-radius: 15px; color:white;font-size: 10px;" data-toggle="modal" data-target="#faqs">FAQ's</button>

                                                                <!-- Modal -->
                                                                <div id="viewdetails" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">Details</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                                <div id="faqs" class="modal fade" role="dialog">
                                                                    <div class="modal-dialog">

                                                                        <!-- Modal content-->
                                                                        <div class="modal-content">
                                                                            <div class="modal-header">
                                                                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                                <h4 class="modal-title">FAQ's</h4>
                                                                            </div>
                                                                            <div class="modal-body">
                                                                                <p>Some text in the modal.</p>
                                                                            </div>
                                                                            <div class="modal-footer">
                                                                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                                                            </div>
                                                                        </div>

                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>


                                            </div>
                                            <hr>
                                            <a class="btn btn-primary btnNext pull-right " >Next <span class="fa fa-arrow-circle-right fa-lg"></span></a>
                                        </div>
                                        <div class="tab-pane" id="tab2" style="margin-top: -20px;">
                                            <div class="panel-group accordion-rn" id="accordion-faq"  style="height:400px !important; overflow: scroll;" role="tablist" aria-multiselectable="true">

                                                <div class="panel " >
                                                    <div class="panel-heading"  role="tab" id="faq-headingOnea">
                                                        <h4 class="panel-title">
                                                            <a role="button" data-toggle="collapse" data-parent="#accordion-faq" href="#collapseOnea" aria-expanded="true" aria-controls="collapseOne">
                               <span href="#collapseOnea">
                                   <button class="btn " style="border-radius: 15px;" >
                                    What are your work timings?
                                   </button>
                                   <span class="label label-danger">Price: - 0 </span>
                                   <span class="label label-info">Rating: - 0 <span class="fa fa-star"></span></span>
                                   <span class="label label-warning">Orders Completed: - 0 </span>
                                   <span class="label label-success">Badge : - 0 </span>
                                   <button style="border-radius: 15px;background: black;color:white;" class=" pull-right addservice" value="">Add</button></span>
                                                            </a>
                                                        </h4>
                                                    </div>
                                                    <div id="collapseOnea" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="faq-headingOne">
                                                        <div class="panel-body"  >
                                                            <div  style="margin-top: -30px; margin-bottom: -30px;">
                                                                <div class="alert alert-default col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2">
                                                                    <div class="alert alert-info col-md-3 col-lg-3 ">
                                                                        <center>3</center>
                                                                        <center>5 Star Orders</center>
                                                                    </div>
                                                                    <div class="alert alert-info col-md-3 col-lg-3 ">
                                                                        <center>3</center>

                                                                        <center>Complements</center>
                                                                    </div>
                                                                    <div class="alert alert-info col-md-3 col-lg-3 ">
                                                                        <center>3</center>
                                                                        <center>Working Days</center>
                                                                    </div>
                                                                    <div class="alert alert-info col-md-3 col-lg-3 ">
                                                                        <center>3</center>
                                                                        <center>Experts</center>
                                                                    </div>
                                                                </div>
                                                                <div>
                                                                    <table class="table table-hover">
                                                                        <thead>
                                                                        <tr><th>Service Name</th>
                                                                            <th>Amount</th></tr>
                                                                        </thead>
                                                                        <tbody>
                                                                        <tr>
                                                                            <td>Service 1</td>
                                                                            <td>Price</td>
                                                                        </tr>
                                                                        </tbody>

                                                                    </table>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                </div>




                                            </div>
                                            <hr>

                                            <a class="btn btn-primary btnNext pull-right" >Next</a>
                                            <a class="btn btn-primary btnPrevious pull-left" >Previous</a>
                                        </div>
                                        <div class="tab-pane" id="tab3">
                                            <div class="col-md-12 col-lg-12 ">

                                                <div class="col-md-8 col-lg-8 col-lg-offset-2 col-md-offset-2">
                                                    <div class="col-sm-12" >
                                                        <center><h2>Select Time</h2></center>
                                                    </div>
                                                    <div class="col-sm-12" >
                                                        <center>
                                                            <select name="time" class="time" id="">
                                                                <option value="">12am-2pm</option>
                                                                <option value="">2pm-4pm</option>
                                                                <option value="">4pm-6pm</option>
                                                                <option value="">6pm-8pm</option>
                                                                <option value="">8pm-10pm</option>

                                                            </select>
                                                        </center>
                                                    </div>
                                                </div>

                                                <hr>
                                            </div>

                                            <a class="btn btn-primary btnPrevious pull-left" > <span class="fa fa-arrow-circle-left fa-lg"></span>Previous</a>
                                            <a class="btn btn-primary btnPrevious pull-right" >Next</a>
                                        </div>
                                        <div class="tab-pane" id="tab4">
                                            <div class="col-md-12 col-lg-12 ">

                                                <div class="col-md-6 col-lg-6 ">
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading" style="background: black; color:yellow;"><h2>Login</h2></div>
                                                        <div class="panel-body">
                                                            <form action="#">
                                                                <div class="row">
                                                                    <div class="col-sm-6" >
                                                                        <a href="" class="btn "> <span class="fa fa-facebook-square"></span>Login Via Facebook</a>
                                                                    </div>
                                                                    <div class="col-sm-6" >

                                                                        <a href="" class="btn "><span class="fa fa-google-plus-square"></span>Login Via Google</a>
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                    </div> <div class="col-sm-12" >
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                        <center><div class="call-us_icon">

                                                                                OR
                                                                            </div>
                                                                        </center>
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                    </div> <div class="col-sm-12" >
                                                                    </div> <div class="col-sm-12" >
                                                                    </div>
                                                                    <div class="col-sm-12" >

                                                                        <input type="text" name="email" required="required" placeholder="E-mail*">
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                        <input type="text" name="cpwd" value="" size="40" aria-invalid="false" placeholder="Confirm Password*">
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input type="submit" value="Login" class="btn">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-6 col-lg-6 ">
                                                    <div class="panel panel-danger">
                                                        <div class="panel-heading" style="background: black; color:yellow;"><h2>Register</h2></div>
                                                        <div class="panel-body">
                                                            <form action="#">
                                                                <div class="row">

                                                                    <div class="col-sm-6" >
                                                                        <a href="" class="btn "> <span class="fa fa-facebook-square"></span>Login Via Facebook</a>
                                                                    </div>
                                                                    <div class="col-sm-6" >

                                                                        <a href="" class="btn "><span class="fa fa-google-plus-square"></span>Login Via Google</a>
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                    </div> <div class="col-sm-12" >
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                        <center><div class="call-us_icon">

                                                                                OR
                                                                            </div>
                                                                        </center>
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                    </div> <div class="col-sm-12" >
                                                                    </div> <div class="col-sm-12" >
                                                                    </div>
                                                                    <div class="col-sm-12" >

                                                                        <input type="text" name="name" required="required" placeholder="Name*">
                                                                    </div>
                                                                    <div class="col-sm-12" >

                                                                        <input type="text" name="email" required="required" placeholder="E-mail*">
                                                                    </div>
                                                                    <div class="col-sm-12" >
                                                                        <input type="text" name="cpwd" value="" size="40" aria-invalid="false" placeholder="Confirm Password*">
                                                                    </div>
                                                                    <div class="col-sm-12">
                                                                        <input type="submit" value="Register" class="btn">
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>
                                                    </div>
                                                </div>

                                                <hr>
                                            </div>

                                            <a class="btn btn-primary btnPrevious pull-left" > <span class="fa fa-arrow-circle-left fa-lg"></span>Schedule</a>
                                            <a class="btn btn-primary btnPrevious pull-right" >Submit</a>
                                        </div>
                                    </div>  <!-- /.testimonial -->

                                </div>
                            </div>


                        </div>
                    </div>


            </div>

        </div>
    </div>

@endsection
@section('js')
<script>
var selecteditems=0;
    $('.btnNext').click(function(){
        $('.nav-tabs > .active').next('li').find('a').trigger('click');
    });
$('.additem').click(function(){

    if($(this).html()=='Add')
    {
        $(this).html('Remove');

        selecteditems++;
        $('.selecteditems').html(selecteditems);

    }
    else
    {
        $(this).html('Add');

        selecteditems--;
        $('.selecteditems').html(selecteditems);


    }

});
$('.addservice').click(function(){

    if($(this).html()=='Add')
    {
        $(this).html('Remove');
        $(this).css('background', 'white');
        $(this).css('color', 'black');
        $('.serviceselected').html('Service Added');

    }
    else
    {
        $(this).html('Add');
        $(this).css('background', 'white');
        $(this).css('color', 'black');
        $('.serviceselected').html('None Selected');


    }

});

$('.time').change(function(){
  //  alert($(this).find(':selected').html());
    $('.timeselected').html($(this).find(':selected').html());
});
    $('.btnPrevious').click(function(){
        $('.nav-tabs > .active').prev('li').find('a').trigger('click');
    });
</script>
@endsection