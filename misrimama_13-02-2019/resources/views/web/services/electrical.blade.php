@extends('layouts.web')
@section('css')

    <style>

        label.error,
        .required {
            font-size: 12px;
            color: red;
        }
        .intro {
            margin: 0 0 10px;
            text-align: center;
        }
        #wrapper {
            width: 500px;
            margin: 0 auto;
            position: relative;
        }

        form {
            border-radius: 10px;
            border: 3px solid #ccc;
            box-shadow: 0px 2px 5px 0px #444;
            background: #fff;
            position: relative;
            padding: 10px;
            overflow: hidden;
        }
        label {
            margin-bottom: 5px;
        }
        fieldset {
            border: none;
            padding: 0;
            margin: 0 0 10px;
            width: 100%;
        }
        input, textarea, label, select {
            display: block;
            outline: none;
        }
        input, textarea, select {
            margin-bottom: 10px;
        }
        input, textarea {
            background: -moz-linear-gradient(center top , #F2F2F2, #FFFFFF) repeat scroll 0 0 transparent;
            border: 1px solid #DEDEDE;
            border-radius: 5px 5px 5px 5px;
            color: #403D3A;
            font-size: 16px;
            padding: 1px 6px;
            -webkit-input-placeholder
        }
        textarea {
            width: 100%;
            height: 140px;
            resize: none;
            box-sizing: border-box;
            -webkit-box-sizing:border-box;
            -moz-box-sizing: border-box;
            -ms-box-sizing: border-box;

        }
        input {
            width: 200px;
            height: 26px;
        }
        ::-webkit-input-placeholder {
            color: #ccc;
        }
        :-moz-placeholder {
            color: #ccc;
        }


        .simple-form-button {
            -moz-border-bottom-colors: none;
            -moz-border-image: none;
            -moz-border-left-colors: none;
            -moz-border-right-colors: none;
            -moz-border-top-colors: none;
            background: -moz-linear-gradient(center top , #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
            background: -webkit-linear-gradient(center top , #FFFFFF, #EEEEEE) repeat scroll 0 0 transparent;
            border-color: #E2E2E2 #DDDDDD #CCCCCC;
            border-left: 1px solid #DDDDDD;
            border-radius: 5px 5px 5px 5px;
            border-right: 1px solid #DDDDDD;
            border-style: solid;
            border-width: 1px 1px 2px;
            color: #000000;
            cursor: pointer;
            font-size: 9pt;
            margin: 0;
            padding: 8px 18px;
            width: auto;
            height: auto;
        }
        .submit-button {
            background: -moz-linear-gradient(center top , #FFFFFF, #2a8db4) repeat scroll 0 0 transparent;
            float: right;
            display: none;
        }

        .form-controls {
            clear: both;
        }

        .previous-fieldset {
            display: none;
            float: left;
        }
        .next-fieldset {
            float: right;
            visibility: hidden;
        },
        a.next-fieldset,
        a.previous-fieldset {
            color: #ccc;
        }

        .clear {
            clear: both;
        }
        .progress {
            border-bottom: 1px solid #EEECE9;
            border-top: 1px solid #FFFFFF;
            height: 20px;
        }

        .progress-bar {
            height: 25px;  /* Can be anything */
            width: 100%;
            position: relative;
            background: #e2e2e2;
            -moz-border-radius: 25px;
            -webkit-border-radius: 25px;
            border-radius: 25px;
            padding: 5px;
            -webkit-box-shadow: inset 0 -1px 1px rgba(255,255,255,0.3);
            -moz-box-shadow   : inset 0 -1px 1px rgba(255,255,255,0.3);
            box-shadow        : inset 0 -1px 1px rgba(255,255,255,0.3);
            margin: 10px 0;
            overflow: hidden;
        }

        .progress-bar .progress-bg{
            display: block;
            height: 100%;
            -webkit-border-top-right-radius:    20px;
            -webkit-border-bottom-right-radius: 20px;
            -moz-border-radius-topright:        20px;
            -moz-border-radius-bottomright:     20px;
            border-top-right-radius:            20px;
            border-bottom-right-radius:         20px;
            -webkit-border-top-left-radius:     20px;
            -webkit-border-bottom-left-radius:  20px;
            -moz-border-radius-topleft:         20px;
            -moz-border-radius-bottomleft:      20px;
            border-top-left-radius:             20px;
            border-bottom-left-radius:          20px;
            background-color: rgb(43,194,83);
            background-image: -webkit-gradient(
                    linear,
                    left bottom,
                    left top,
                    color-stop(0, rgb(43,194,83)),
                    color-stop(1, rgb(84,240,84))
            );
            background-image: -webkit-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            background-image: -moz-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            background-image: -ms-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            background-image: -o-linear-gradient(
                    center bottom,
                    rgb(43,194,83) 37%,
                    rgb(84,240,84) 69%
            );
            -webkit-box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
            -moz-box-shadow:
                    inset 0 2px 9px  rgba(255,255,255,0.3),
                    inset 0 -2px 6px rgba(0,0,0,0.4);
            overflow: hidden;
            width: 0%;
        }

        .progress-bar .progress-text {
            position: absolute;
            left: 50%;
            top: 2px;
            z-index: 10;
        }
        
        
        .hasib .select2-container .select2-selection--single {
           
            height: 46px;
          
        }
        
         .hasib .select2-container--default .select2-selection--single .select2-selection__rendered {
   
                line-height: 41px;
             
         }
         
         .hasib .select2-container--default .select2-selection--single .select2-selection__arrow {
            height: 45px;
             
        }
        .delete_commrade{
            display:none;
            color: #F00;
            font-size: 25px;
            position: absolute;
            right: 6px;
        }
        .service_days .select2-container .select2-selection--single{
            height:45px;
        }
        .service_days .select2-container--default .select2-selection--single .select2-selection__rendered{
            line-height:45px;
        }
        .service_days .select2-container--default .select2-selection--single .select2-selection__arrow{
            height:45px;
        }
    </style>

@endsection
@section('content')
<script src="https://unpkg.com/imask"></script>

<?php

$schiduleTime = array(
        1=>"1 AM",
        2=>"2 AM",
        3=>"3 AM",
        4=>"4 AM",
        5=>"5 AM",
        6=>"6 AM",
        7=>"7 AM",
        8=>"8 AM",
        9=>"9 AM",
        10=>"10 AM",
        11=>"11 AM",
        12=>"12 PM",
        13=>"1 pM",
        14=>"2 PM",
        15=>"3 PM",
        16=>"4 PM",
        17=>"5 PM",
        18=>"6 PM",
        19=>"7 PM",
        20=>"8 PM",
        21=>"9 PM",
        22=>"10 PM",
        23=>"11 PM",
        24=>"12 AM",
    );

?>


    <section class="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Service Porvider</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <h2>Want to become Service Provider</h2>
       <p>Fill out the form to become servie provider</p>
        @if (\Session::has('success'))
            <div class="alert alert-danger">
                <ul>
                    <li>{!! \Session::get('success') !!}</li>
                </ul>
            </div>
        @endif
        
        <?php  if (Session::has('error')): ?>
            <div class="alert alert-danger alert-dismissible fade in mt10">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php  echo Session::get('error'); ?>
            </div>
        <?php endif; ?>
        <?php  if ($errors->has('l_email')): ?>
            <div class="alert alert-danger alert-dismissible fade in mt10">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button>
                <?php  echo $errors->first('l_email'); ?>
            </div>
        <?php endif; ?>
        <?php  echo $errors->first('l_email'); ?>
        
       
        <ul class="nav nav-tabs">
            <li class="active"><a data-toggle="tab" href="#esp"><center> (ESP)</center>
                    <br><span class="label label-info">Represents a service providing organization.</span></a>
            </li>
            <li><a data-toggle="tab" href="#fsp"><center>(FSP)</center> 
                    <br><span class="label label-info">Means individual or self employed technician.</span></a>
                </li>
                <li><a data-toggle="tab" href="#mmt"> <center>(MMT)</center>
                    <br><span class="label label-info">Means individual or self employed technician.</span></a>
                </li>

        </ul>

        <div class="tab-content">
            <div id="esp" class="tab-pane fade in active">
                <form class="espform" action="{{url('add_esp')}}" id="espform" method="post" enctype="multipart/form-data">
@csrf

                    <fieldset >

                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Basic Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">Name: <span class="required">*</span></label>
                                        <input type="text" name="name" class="form-control required-entry456" />

                                    </div>
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">Phone number: <span class="required">*</span></label>
                                        <input  value="+88" type="text" name="phone_no" id='phone_no' class="form-control required-entry456 phonecon"   />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">Alternate phone number: </label>
                                        <input  id="aphn" type="number" name="alt_ph" class="form-control" pattern="^(?:\+88|01)?(?:\d{11}|\d{13})$"  />

                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">Email(if available): </label>
<input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">Mailing address: </label>
<input type="text" name="mailing_add" class="form-control" />
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">NID/Smart card number: <span class="required">*</span></label>
                                        <input type="number" name="smart_card" class="form-control required-entry456" />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">NID(Front ): <span class="required">*</span></label>
                                        <input type="file" name="nic_front" class="form-control required-entry456" />
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">NID( Back): <span class="required">*</span></label>
                                        <input type="file" name="nic_back" class="form-control required-entry456" />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">Photographs: <span class="required">*</span></label>
<input type="file" name="passport" class="form-control required-entry456" />
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">TIN certificate or trade license: <span class="required">*</span></label>
<input type="file" name="tin_cer" class="form-control required-entry456" />
                                    </div>
                                    </div>







                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Business Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-md-4  hasib">
                                            <label for="name">Service Category : <span class="required">*</span></label>
                                            <select class="form-control  cat1 select2 " style="height:41px !important;" name="cat">
                                                <option value="#">--select--</option>
                                                <option value="20">Starter (commission 20%)</option>
                                                <option value="15">Expert (commission 15%)</option>
                                                <option value="10">Professional (commission 10%)</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Service Type : <span class="required">*</span></label>
                                            <select class="form-control  select2 cats" name="cats[]" multiple="multiple" >
                                                <option value="#">--select--</option>
                                                <option value="1">Electrical Service</option>
                                                <option value="2">CCTV Service</option>
                                                <option value="3">Plumbng Service</option>
                                                <option value="5">Generator Service</option>
                                                <option value="4">IT Service</option>
                                                <option value="6">Air Conditoner Service</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Division : <span class="required">*</span></label>
                                            <select class="form-control required-entry456 select2" name="division[]" multiple="multiple">
                                                <option value="#">--select--</option>
                                                <option value="3" selected>Dhaka Division</option>
                                            </select>
                                        </div>



                                    </div>

                                       <div class="form-group">
                                        <div class="col-md-12">
                                        <label for="name">Zone / Thana :  <span class="required">*</span></label>
                                        <select class="form-control select2 cluster" name="cluster[]"  id="" multiple="multiple">
                                            <option value="#">--select--</option>

                                               @foreach($clusters as $c)
                                                   <option value="{{ $c->id }}">{{ $c->id }} -{{ $c->name }}</option>
                                               @endforeach
                                        </select>

                                       </div>

                                          <div class="form-group">
                                              <div class="col-md-12">
                                        <label for="name">Cluster : <span class="required">*</span></label>
                                        <select class="form-control thanazone select2 " name="zone[]" multiple="multiple">
                                            <option value="#">--select--</option>


                                        </select>
                                        </div>
                                          </div>


                                    <div class="form-group service_days	">
                                        <div class="col-md-12" style='margin-top: 20px;'>
                                        <table class="table table-bordered" style="border-radius: 25px;">
                                            <thead><tr>
                                                <th width="30%">Service Days</th>
                                                <th width="35%">Start Time</th>
                                                <th width="35%">End Time</th>
                                            </tr></thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="friday" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Friday</label>
                                                    </div>
                                                </td>
                                                <td>  
                                                
                                                <select class="form-control select2" name="friday_stime"  id="">
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as $key=> $time){ ?>
                                                         <option {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>
                                                       
                                                        

                                                    </select>
                                                </td>
                                                <td>  <select class="form-control select2" name="friday_etime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                                
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="sat" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Saturday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" name="saturday_stime"  id="">
                                                         
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                                <td>  <select class="form-control select2" name="saturday_etime"  id="">
                                                         
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="sunday" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Sunday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" name="sunday_stime"  id=""  >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                                <td>  <select class="form-control select2" name="sunday_etime"  id=""  >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="mon" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Monday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" name="monday_stime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                                <td>  <select class="form-control select2" name="monday_etime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="tues" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Tuesday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" name="tuseday_stime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                                <td>  <select class="form-control select2" name="tuseday_etime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="wed" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Wednesday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" name="wednesday_stime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                                <td>  <select class="form-control select2" name="wednesday_etime"  id="" >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="thur" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Thursday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" name="thursday_stime"  id=""  >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==24 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                                 <td>  <select class="form-control select2" name="thursday_etime"  id=""  >
                                                        <option value="#">--select--</option>
                                                        <?php foreach($schiduleTime as$key=> $time){ ?>
                                                         <option  {{ $key==12 ? "selected" : "" }} value="{{ $key }}">{{ $time }}</option>
                                                        <?php } ?>

                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>
                                        </div>    
                                    </div>



                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Payment Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Mobile Banking : <span class="required">*</span></label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(1)' type="radio" name="mobile_banking" value="Rocket" />Rocket
                                            </label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(2)' type="radio" name="mobile_banking" value="Share Cash"/>Sure Cash
                                            </label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(3)' type="radio" name="mobile_banking" value="Bkash"/>Bkash
                                            </label>
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">MFS account number : <span class="required">*</span></label>
                                        <input type="text" value="+88" name="mfs_account" id='mfs_account' class="form-control required-entry456 phonecon" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Commrade Information
                                        <span ><button style="margin-top:-7px;" type="button" id="generatecomrade" class="btn btn-success pull-right">
                                                <i class="fa fa-plus"></i> Add Comrade</button></span>                                    </h4>
                                </div>
                                <div class="panel-body endpend">
                                    <div class="col-sm-12 col-md-12  comradehtml" style="border:solid black 2px; margin-bottom:10px; border-radius: 10px;">
                                        <span class='delete_commrade' onclick='deleteCommrade(this)'>
                                            <i class="fa fa-trash" aria-hidden="true"></i>

                                        </span>
                                        <div class="panel-body">
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-6  ">
                                                    <label > Name<span style="color:red">*</span></label>

                                                    <input type="text" name="c_name[]" class="form-control required-entry456" />

                                                </div>
                                                <div class="col-sm-6 col-md-6  ">
                                                    <label>Phone number<span style="color:red">*</span></label>
                                                    <input  type="text" name="c_phone_no[]" id='c_phone_no' class="form-control required-entry456" pattern="^(?:\+88|01)?(?:\d{11}|\d{13})$"  />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-6  ">

                                            <label for="name">NID(Front ): <span class="required">*</span></label>
                                            <input type="file" name="nic_front" class="form-control required-entry456" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">NID( Back): <span class="required">*</span></label>
                                            <input type="file" name="nic_back" class="form-control required-entry456" />
                                        </div>
                                                <div class="col-sm-6 col-md-6  ">

                                                <label >Alternate phone number</label>
                                                <input type="text" name="c_alt_phone_no[]" class="form-control" pattern="^(?:\+88|01)?(?:\d{11}|\d{13})$"  /></div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-6  ">

                                                    <label >1 copy photograph of each comrades.<span style="color:red">*</span></label>
                                                    <input type="file" name="c_passport[]" class="form-control required-entry456"/></div>
                                                <div class="col-sm-6 col-md-6  ">
                                                    <label>NID or smart card photocopy .<span style="color:red">*</span></label>

                                            <input type="file" name="c_nid[]" class="form-control required-entry456"/>
                                            </div>
                                            </div>
                                        <br>
                                    </div>

                                </div>

                            </div>
                                </div>
                            </div></div>

                            <select id="participants" class="hide input-mini required-entry">
                                <option value="1">1</option>
                                <option value="2">2</option>
                                <option value="3">3</option>
                                <option value="4">4</option>
                                <option value="5">5</option>
                                <option value="6">6</option>
                                <option value="7">7</option>
                                <option value="8">8</option>
                                <option value="9">9</option>
                                <option value="10">10</option>
                                <option value="11">11</option>
                                <option value="12">12</option>
                                <option value="13">13</option>
                                <option value="14">14</option>
                                <option value="15">15</option>
                            </select></label>

                        <table class="table table-hover" id="participantTable">
                            <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Service Price</th>
                                <th>SP Amount</th>
                                <th>DESP Commission</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tr class="participantRow">
                                <td>
                                    <select class="form-control sc_id " name="sc_id[]" >
                                        {{--@foreach($cat as $c)
                                            <optgroup label="{{$c->name}}">
                                                @foreach($c->subcat as $sc)
                                                    <option value="{{$sc->id}}">{{$sc->name}}</option>
                                                        @endforeach
                                            @endforeach--}}

                                    </select>
                                </td>    <td><input name="s_price[]" id="" type="number" placeholder="price" class="required-entry s_price">
                                <td><input name="s_comm[]" id="" type="number" placeholder="price" class="required-entry s_comm">
                                <td><input name="s_desp[]" id="" type="number" placeholder="price" class="required-entry s_desp">
                                </td>

                                <td><button class="btn btn-danger remove " type="button">Remove</button></td>
                            </tr>
                            <tr id="addButtonRow">
                                <td colspan="5"><center><button class="btn btn-large btn-success add" type="button">Add</button></center></td>
                            </tr>
                        </table>


    <div class="col-md-12 col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">

                <h4 style="font-weight:700;">Login Information</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Email: <span class="required">*</span></label>
                        <input type="email" name="l_email" class="form-control required-entry456" />

                    </div>
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Passowrd: <span class="required">*</span></label>
                        <input   type="password" id="pwd" name="pwd" class="form-control required-entry456 "   />
                    </div>
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Confirm Passowrd: <span class="required">*</span></label>
                        <input  type="password" name="c_pwd" class="form-control required-entry456 "   />
                    </div>
                </div>


            </div>
        </div>
    </div>
   <center><button type="Submit"  class="btn btn-primary" style="background-color:#E0E0E0">Submit</button></center> 
</fieldset>


                    <div class="clear"></div>
                </form>
            </div>
            <div id="fsp" class="tab-pane fade">
                <form class="fspform" action="{{url('add_fsp')}}" id="fspform" method="post" enctype="multipart/form-data">
@csrf
                    <fieldset >

                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Basic Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Name: <span class="required">*</span></label>
                                            <input type="text" name="name" class="form-control required-entry456" />

                                        </div>
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Phone number: <span class="required">*</span></label>
                                            <input  value="+88" type="text" name="phone_no" class="form-control required-entry456 phonecon"   />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Alternate phone number: </label>
                                            <input  id="aphn" type="number" name="alt_ph" class="form-control" pattern="^(?:\+88|01)?(?:\d{11}|\d{13})$"  />

                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">Email(if available): </label>
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Mailing address: </label>
                                            <input type="text" name="mailing_add" class="form-control" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">NID/Smart card number: <span class="required">*</span></label>
                                            <input type="number" name="smart_card" class="form-control required-entry456" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">NID(Front ): <span class="required">*</span></label>
                                            <input type="file" name="nic_front" class="form-control required-entry456" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">NID( Back): <span class="required">*</span></label>
                                            <input type="file" name="nic_back" class="form-control required-entry456" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Photographs: <span class="required">*</span></label>
                                            <input type="file" name="passport" class="form-control required-entry456" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">TIN certificate or trade license: <span class="required">*</span></label>
                                            <input type="file" name="tin_cer" class="form-control required-entry456" />
                                        </div>
                                    </div>







                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Business Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Service Type : <span class="required">*</span></label>
                                            <select class="form-control  select2 cats" name="cats[]" style="width:100%" multiple="multiple" >
                                                <option value="#">--select--</option>
                                                <option value="1">Electrical Service</option>
                                                <option value="2">CCTV Service</option>
                                                <option value="3">Plumbng Service</option>
                                                <option value="5">Generator Service</option>
                                                <option value="4">IT Service</option>
                                                <option value="6">Air Conditoner Service</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Division : <span class="required">*</span></label>
                                            <select class="form-control required-entry456 select2" style="width:100%" name="division[]" multiple="multiple">
                                                <option value="#">--select--</option>
                                                <option value="3" selected>Dhaka Division</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="form-group">

                                        <label for="name">Zone / Thana :  <span class="required">*</span></label>
                                        <select class="form-control select2 cluster" style="width:100%" name="cluster[]"  id="" multiple="multiple">
                                            <option value="#">--select--</option>

                                            @foreach($clusters as $c)
                                                <option value="{{ $c->id }}">{{ $c->id }} -{{ $c->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="name">Cluster : <span class="required">*</span></label>
                                        <select class="form-control thanazone select2 " style="width:100%" name="zone[]" multiple="multiple">
                                            <option value="#">--select--</option>


                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <table class="table table-bordered" style="border-radius: 25px;">
                                            <thead><tr>
                                                <th width="25%">Service Days</th>
                                                <th width="75%">Service Time</th>
                                            </tr></thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="friday" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Friday</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-control select2" style="width:100%" name="ftime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="sat" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Saturday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="stime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="sunday" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Sunday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="sutime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="mon" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Monday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="mtime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="tues" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Tuesday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="ttime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="wed" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Wednesday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="wtime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="thur" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Thursday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="thutime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>



                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Payment Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Mobile Banking : <span class="required">*</span></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="mobile_banking" value="Rocket" />Rocket
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="mobile_banking" value="Share Cash"/>Sure Cash
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="mobile_banking" value="Bkash"/>Bkash
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">MFS account number : <span class="required">*</span></label>
                                            <input type="text" value="+88" name="mfs_account" id='mfs_account' class="form-control required-entry456 phonecon" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <select id="participants" class="hide input-mini required-entry">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select></label>

                        <table class="table table-hover" id="fspparticipantTable">
                            <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Service Price</th>
                                <th>SP Amount</th>
                                <th>DESP Commission</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tr class="fspparticipantRow">
                                <td>
                                    <select class="form-control sc_id " name="sc_id[]" >


                                    </select>
                                </td>    <td><input name="s_price[]" id="" type="number" placeholder="price" class="required-entry fs_price">
                                <td><input name="s_comm[]" id="" type="number" placeholder="price" class="required-entry fs_comm">
                                <td><input name="s_desp[]" id="" type="number" placeholder="price" class="required-entry fs_desp">
                                </td>

                                <td><button class="btn btn-danger remove " type="button">Remove</button></td>
                            </tr>
                            <tr id="addfspButtonRow">
                                <td colspan="5"><center><button class="btn btn-large btn-success addfsp" type="button">Add</button></center></td>
                            </tr>
                        </table>


                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Login Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Email: <span class="required">*</span></label>
                                            <input type="email" name="l_email" class="form-control required-entry456" />

                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Passowrd: <span class="required">*</span></label>
                                            <input   type="password" id="fpwd" name="pwd" class="form-control required-entry456 "   />
                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Confirm Passowrd: <span class="required">*</span></label>
                                            <input  type="password" name="c_pwd" class="form-control required-entry456 "   />
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>
                    
                    </fieldset>

                    <center><button type="Submit"  class="btn btn-primary" style="background-color:#E0E0E0">Submit</button></center> 

                    <div class="clear"></div>
                </form>
            </div>
            <div id="mmt" class="tab-pane fade">
                <!--action="{{url('add_fsp')}}"-->
                <form class="mmtform"  id="mmtform" method="post" enctype="multipart/form-data">-->
                <form>
@csrf
                    <fieldset >

                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Basic Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Name: <span class="required">*</span></label>
                                            <input type="text" name="name" class="form-control required-entry456" />

                                        </div>
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Phone number: <span class="required">*</span></label>
                                            <input  value="+88" type="text" name="phone_no" class="form-control required-entry456 phonecon"   />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Alternate phone number: </label>
                                            <input  id="aphn" type="number" name="alt_ph" class="form-control" pattern="^(?:\+88|01)?(?:\d{11}|\d{13})$"  />

                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">Email(if available): </label>
                                            <input type="email" name="email" class="form-control" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Mailing address: </label>
                                            <input type="text" name="mailing_add" class="form-control" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">NID/Smart card number: <span class="required">*</span></label>
                                            <input type="number" name="smart_card" class="form-control required-entry456" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">NID(Front ): <span class="required">*</span></label>
                                            <input type="file" name="nic_front" class="form-control required-entry456" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">NID( Back): <span class="required">*</span></label>
                                            <input type="file" name="nic_back" class="form-control required-entry456" />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Photographs: <span class="required">*</span></label>
                                            <input type="file" name="passport" class="form-control required-entry456" />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">TIN certificate or trade license: <span class="required">*</span></label>
                                            <input type="file" name="tin_cer" class="form-control required-entry456" />
                                        </div>
                                    </div>







                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Business Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Service Type : <span class="required">*</span></label>
                                            <select class="form-control  select2 cats" name="cats[]" style="width:100%" multiple="multiple" >
                                                <option value="#">--select--</option>
                                                <option value="1">Electrical Service</option>
                                                <option value="2">CCTV Service</option>
                                                <option value="3">Plumbng Service</option>
                                                <option value="5">Generator Service</option>
                                                <option value="4">IT Service</option>
                                                <option value="6">Air Conditoner Service</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Division : <span class="required">*</span></label>
                                            <select class="form-control required-entry456 select2" style="width:100%" name="division[]" multiple="multiple">
                                                <option value="#">--select--</option>
                                                <option value="3" selected>Dhaka Division</option>
                                            </select>
                                        </div>



                                    </div>

                                    <div class="form-group">

                                        <label for="name">Zone / Thana :  <span class="required">*</span></label>
                                        <select class="form-control select2 cluster" style="width:100%" name="cluster[]"  id="" multiple="multiple">
                                            <option value="#">--select--</option>

                                            @foreach($clusters as $c)
                                                <option value="{{ $c->id }}">{{ $c->id }} -{{ $c->name }}</option>
                                            @endforeach
                                        </select>

                                    </div>

                                    <div class="form-group">
                                        <label for="name">Cluster : <span class="required">*</span></label>
                                        <select class="form-control thanazone select2 " style="width:100%" name="zone[]" multiple="multiple">
                                            <option value="#">--select--</option>


                                        </select>
                                    </div>


                                    <div class="form-group">
                                        <table class="table table-bordered" style="border-radius: 25px;">
                                            <thead><tr>
                                                <th width="25%">Service Days</th>
                                                <th width="75%">Service Time</th>
                                            </tr></thead>
                                            <tbody>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="friday" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Friday</label>
                                                    </div>
                                                </td>
                                                <td>
                                                    <select class="form-control select2" style="width:100%" name="ftime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="sat" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Saturday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="stime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="sunday" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Sunday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="sutime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="mon" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Monday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="mtime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="tues" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Tuesday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="ttime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="wed" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Wednesday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="wtime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <div class="col-sm-3 col-md-3  ">
                                                        <input type="checkbox" id="one" name="thur" value="1" />
                                                    </div>
                                                    <div class="col-sm-9 col-md-9  ">

                                                        <label for="one">Thursday</label>
                                                    </div>
                                                </td>
                                                <td>  <select class="form-control select2" style="width:100%" name="thutime[]"  id="" multiple="multiple">
                                                        <option value="#">--select--</option>
                                                        <option value="">1am - 2am</option>
                                                        <option value="">2am - 3am</option>
                                                        <option value="">3am - 4am</option>
                                                        <option value="">4am - 5am</option>
                                                        <option value="">5am - 6am</option>
                                                        <option value="">6am - 7am</option>
                                                        <option value="">7am - 8am</option>
                                                        <option value="">8am - 9am</option>
                                                        <option value="">9am - 10am</option>
                                                        <option value="">10am - 11am</option>
                                                        <option value="">11am - 12pm</option>
                                                        <option value="">12pm - 1pm</option>
                                                        <option value="">1pm - 2pm</option>
                                                        <option value="">2pm - 3pm</option>
                                                        <option value="">3pm - 4pm</option>
                                                        <option value="">4pm - 5pm</option>
                                                        <option value="">5pm - 6pm</option>
                                                        <option value="">6pm - 7pm</option>
                                                        <option value="">7pm - 8pm</option>
                                                        <option value="">8pm - 9pm</option>
                                                        <option value="">9pm - 10pm</option>
                                                        <option value="">10pm - 11pm</option>
                                                        <option value="">11pm - 12am</option>
                                                        <option value="">12am - 1am</option>

                                                    </select>
                                                </td>
                                            </tr>
                                            </tbody>
                                        </table>

                                    </div>



                                </div>
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Payment Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Mobile Banking : <span class="required">*</span></label>
                                            <label class="radio-inline">
                                                <input type="radio" name="mobile_banking" value="Rocket" />Rocket
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="mobile_banking" value="Share Cash"/>Sure Cash
                                            </label>
                                            <label class="radio-inline">
                                                <input type="radio" name="mobile_banking" value="Bkash"/>Bkash
                                            </label>
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">MFS account number : <span class="required">*</span></label>
                                            <input type="text" value="+88" name="mfs_account" id='mfs_account' class="form-control required-entry456 phonecon" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>



                        <select id="participants" class="hide input-mini required-entry">
                            <option value="1">1</option>
                            <option value="2">2</option>
                            <option value="3">3</option>
                            <option value="4">4</option>
                            <option value="5">5</option>
                            <option value="6">6</option>
                            <option value="7">7</option>
                            <option value="8">8</option>
                            <option value="9">9</option>
                            <option value="10">10</option>
                            <option value="11">11</option>
                            <option value="12">12</option>
                            <option value="13">13</option>
                            <option value="14">14</option>
                            <option value="15">15</option>
                        </select></label>

                        <table class="table table-hover" id="fspparticipantTable">
                            <thead>
                            <tr>
                                <th>Service Name</th>
                                <th>Service Price</th>
                                <th>SP Amount</th>
                                <th>DESP Commission</th>
                                <th>Action</th>
                            </tr>
                            </thead>
                            <tr class="fspparticipantRow">
                                <td>
                                    <select class="form-control sc_id " name="sc_id[]" >


                                    </select>
                                </td>    <td><input name="s_price[]" id="" type="number" placeholder="price" class="required-entry fs_price">
                                <td><input name="s_comm[]" id="" type="number" placeholder="price" class="required-entry fs_comm">
                                <td><input name="s_desp[]" id="" type="number" placeholder="price" class="required-entry fs_desp">
                                </td>

                                <td><button class="btn btn-danger remove " type="button">Remove</button></td>
                            </tr>
                            <tr id="addfspButtonRow">
                                <td colspan="5"><center><button class="btn btn-large btn-success addfsp" type="button">Add</button></center></td>
                            </tr>
                        </table>


                        <div class="col-md-12 col-sm-12">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Login Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Email: <span class="required">*</span></label>
                                            <input type="email" name="l_email" class="form-control required-entry456" />

                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Passowrd: <span class="required">*</span></label>
                                            <input   type="password" id="fpwd" name="pwd" class="form-control required-entry456 "   />
                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Confirm Passowrd: <span class="required">*</span></label>
                                            <input  type="password" name="c_pwd" class="form-control required-entry456 "   />
                                        </div>
                                    </div>


                                </div>
                            </div>
                        </div>

                    </fieldset>

                    <center><button type="Submit"  class="btn btn-primary" style="background-color:#E0E0E0">Submit</button></center> 

                    <div class="clear"></div>
                </form>
            </div>


        </div>
    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>


    <script type="text/javascript" src="{{'assets/simpleform.min.js'}}"></script>

    <script type="text/javascript">
     /*   $(function(){
            $('#addMore').on('click', function() {
                var data = $("#tb tr:eq(1)").clone(true).appendTo("#tb");
                data.find("input").val('');
            });
            $(document).on('click', '.remove', function() {
                var trIndex = $(this).closest("tr").index();
                if(trIndex>1) {
                    $(this).closest("tr").remove();
                } else {
                    alert("Sorry!! Can't remove first row!");
                }
            });
        });*/
        var visa = {};
     $(document).ready(function(){
         $('.cluster').on('change', function() {
             //  alert($(this).val());
             $.ajax({
                 type: "GET",
                 url: '{{ url('searchthana') }}',
                 data:{id:$(this).val()},
                 success:function(data){

                     //       alert(data);
                     $('.thanazone').html(data);
                     //$('.thanazone').html(data);

                 }
             });
         });
         $('.cats').on('change', function() {
            //   alert($(this).val());
             $.ajax({
                 type: "GET",
                 url: '{{ url('searchsubcat') }}',
                 data:{id:$(this).val()},
                 success:function(data){

                     //       alert(data);
                     $('.sc_id').html(data);
                     //$('.thanazone').html(data);

                 }
             });
         });
     });

        $(".espform").simpleform({
            speed : 500,
            transition : 'fade',
            progressBar : true,
            showProgressText : true,
            validate: true
        });
        $(".fspform").simpleform({
            speed : 500,
            transition : 'fade',
            progressBar : true,
            showProgressText : true,
            validate: true
        });
         $(".mmtform").simpleform({
            speed : 500,
            transition : 'fade',
            progressBar : true,
            showProgressText : true,
            validate: true
        });
      /*  $('a[data-action="remove_this_row"]').on('click', function(event) {
            alert(1);
            event.preventDefault();
            $(this).closest('tr').remove();

        });
        $('a[data-action="add_new_row"]').on('click', function(event) {

            event.preventDefault();
            var source = $(this).closest('tr').prev('tr');
            var clone = source.clone(true);
            source.after( clone );

            clone.find('a.disabled').removeClass('disabled');
        });
     */   function validateForm(formID, Obj){

            switch(formID){
                case 'espform' :
                    Obj.validate({
                        rules: {
                            l_email: "required",
                            pwd: "required",
                            c_pwd: {
                                equalTo: "#pwd"
                            },
                            name: {
                                required: true,
                            },
                            phone_no: {
                                required: true,
                                minlength:14,
                                maxlength:14
                            },

                            mobile_banking: {
                                required: true
                            },
                            mfs_account: {
                                required: true
                            },
                            smart_card: {
                                required: true
                            },
                            nic_front: {
                                required: true
                            },
                            nic_back: {
                                required: true
                            },
                            passport: {
                                required: true
                            },
                            tin_cer: {
                                required: true
                            },
                            "zone[]": {
                                required: true
                            },

                            "cat": {
                                required: true
                            },
                            "sc_id[]": {
                                required: true
                            },
                            "cluster[]": {
                                required: true
                            },

                            "division[]": {
                                required: true
                            }

                        },
                        messages: {
                            l_email: {
                                required: "Please Enter Email"
                            },
                            pwd: {
                                required: "Please Enter Password"
                            },
                            c_pwd: {
                                equalTo: "Password should be same"
                            },
                            name: {
                                required: "Please Enter Name"
                            },
                            phone_no: {
                                required: "Please Enter Phone Number",
                                minlength:"Number should be Exactly 11 digits",
                                maxlength:"Number should be Exactly 11 digits"
                            },
                            mobile_banking: {
                                required: "Please Select Mobile Banking"
                            },
                            mfs_account: {
                                required: "Please Enter Account Number"
                            },

                            smart_card: {
                                required: "Please Enter Smart Card NO"
                            },
                            nic_front: {
                                required: "Please Select NID Front"
                            },
                            nic_back: {
                                required: "Please Select NID Back"
                            },
                            passport: {
                                required: "Please Select Passport"
                            },
                            tin_cer: {
                                required: "Please Select Certificate"
                            },
                            "zone[]": {
                                required: "Please Select Cluster"
                            },

                            "cat": {
                                required: "Please Select Category"
                            },
                            "sc_id[]": {
                                required: "Please Select Service"
                            },
                            "cluster[]": {
                                required: "Please Select Zone"
                            },

                            "division[]": {
                                required: "Please Select Division"
                            }


                        }
                    });
                    return Obj.valid();
                    break;
                case 'fspform' :
                    Obj.validate({
                        rules: {
                            l_email: "required",
                            pwd: "required",
                            c_pwd: {
                                equalTo: "#fpwd"
                            },
                            name: {
                                required: true
                            },
                            phone_no: {
                                required: true,
                                minlength:14,
                                maxlength:14
                            },

                            mobile_banking: {
                                required: true
                            },
                            mfs_account: {
                                required: true
                            },
                            smart_card: {
                                required: true
                            },
                            nic_front: {
                                required: true
                            },
                            nic_back: {
                                required: true
                            },
                            passport: {
                                required: true
                            },
                            tin_cer: {
                                required: true
                            },
                            "zone[]": {
                                required: true
                            },
                            "days[]": {
                                required: true
                            },
                            "time[]": {
                                required: true
                            },

                            "cluster[]": {
                                required: true
                            },

                            "division[]": {
                                required: true
                            },
                            "sc_id[]": {
                                required: true
                            }

                        },
                        messages: {

                            l_email: {
                                required: "Please Enter Email"
                            },
                            pwd: {
                                required: "Please Enter Password"
                            },
                            c_pwd: {
                                equalTo: "Password should be same"
                            },
                            name: {
                                required: "Please Enter Name"
                            },
                            phone_no: {
                                required: "Please Enter Phone Number",
                                minlength:"Number should be Exactly 11 digits",
                                maxlength:"Number should be Exactly 11 digits"
                            },
                            mobile_banking: {
                                required: "Please Select Mobile Banking"
                            },
                            mfs_account: {
                                required: "Please Enter Account Number"
                            },

                            email: {
                                email: true
                            },
                           
                           
                       
                            smart_card: {
                                required: "Please Enter Smart Card NO"
                            },
                            nic_front: {
                                required: "Please Select NID Front"
                            },
                            nic_back: {
                                required: "Please Select NID Back"
                            },
                            passport: {
                                required: "Please Select Photographs"
                            },
                            tin_cer: {
                                required: "Please Select Certificate"
                            },
                            "zone[]": {
                                required: "Please Select Zone"
                            },
                            "days[]": {
                                required: "Please Select Days"
                            },
                            "time[]": {
                                required: "Please Select Time"
                            },

                            "cluster[]": {
                                required: "Please Select Cluster"
                            },

                            "division[]": {
                                required: "Please Select Division"
                            },
                            "sc_id[]": {
                                required: "Please Select Service"
                            }

                        }
                    });
                    return Obj.valid();
                    break;

            }
        }
        $("#generatecomrade").click(function(){

            $('.comradehtml:first').clone().appendTo(".endpend");
            $('.delete_commrade').show(); 
            $('.comradehtml:first').children('.delete_commrade').hide();


        });
        
        function deleteCommrade(_this){
            $(_this).parent().remove();
        }
    // s_price
 /*    $(".cat1").change(function(){
         alert($('.cat1').val());
     });*/

     $('.fs_price').keyup(function(){

         var parent = $(this).closest('tr');
         var per=100 - 20;
         var spa=($(this).val() * per)/100;
         var despc=($(this).val() * 20)/100;
         $('.fs_comm',parent).val(spa);
         $('.fs_desp',parent).val(despc);

     });

     $('.s_price').keyup(function(){

         var parent = $(this).closest('tr');
         var per=100 - $('.cat1').val();
         var spa=($(this).val() * per)/100;
         var despc=($(this).val() * $('.cat1').val())/100;
         $('.s_comm',parent).val(spa);
         $('.s_desp',parent).val(despc);
         /* var val = 0;
          $('input[name="msp_price[]"]').each(function() {
          val += Number($(this).val());
          });
          alert(val);*/
     });
     /* Variables */
     var row = $(".participantRow");
     var rowfsp = $(".fspparticipantRow");

        /* Functions */


     function addRow() {
         row.clone(true, true).appendTo("#participantTable");
     }
     function addfspRow() {
         rowfsp.clone(true, true).appendTo("#fspparticipantTable");
     }

        function removeRow(button) {
            button.closest("tr").remove();
        }
        /* Doc ready */
     $('.phonecon').on('keyup ',function(){
         var input = $(this);

         if(input.val().length<4)
         {
             input.val('+88')
         }


         //   alert(input.val().length);
     });
     $(".add").on('click', function () {
         //  $('.select2').select2('destroy');

         if($("#participantTable tr").length < 17) {
             addRow();


         }
         $(this).closest("tr").appendTo("#participantTable");
         if ($("#participantTable tr").length === 3) {
             $(".remove").hide();
         } else {
             $(".remove").show();
         }
         //   $('.select2').select2();

     });
     $(".addfsp").on('click', function () {
         //  $('.select2').select2('destroy');

         if($("#fspparticipantTable tr").length < 17) {
             addfspRow();


         }
         $(this).closest("tr").appendTo("#fspparticipantTable");
         if ($("#fspparticipantTable tr").length === 3) {
             $(".remove").hide();
         } else {
             $(".remove").show();
         }
         //   $('.select2').select2();

     });
 /*    $(document).on('click', '.remove', function() {
         var trIndex = $(this).closest("tr").index();
         if(trIndex>1) {
             $(this).closest("tr").remove();
         } else {
             alert("Sorry!! Can't remove first row!");
         }
     });*/
        $(".remove").on('click', function () {
            var trIndex = $(this).closest("tr").index();
            if(trIndex>0) {
                $(this).closest("tr").remove();
            } else {
                alert("Sorry!! Can't remove first row!");
            }
        });

    var phoneMask = new IMask(
      document.getElementById('phone_no'), {
        mask: '+{88}00000000000'
      });
      var phoneMask = new IMask(
      document.getElementById('c_phone_no'), {
        mask: '+{88}00000000000'
      });
      window.payment = new IMask(
      document.getElementById('mfs_account'), {
        mask: '+{88}000000000000'
      });
     function paymentGetway(type){
         window.payment.destroy();


         if(type == 1){
             window.payment = new IMask(
                  document.getElementById('mfs_account'), {
                    mask: '+{88}000000000000'
                  });
         }else{
             window.payment = new IMask(
              document.getElementById('mfs_account'), {
                mask: '+{88}00000000000'
              });
         }
         
     }
    </script>


    </section>
@endsection