@extends('layouts.web')
@section('css')
 
@endsection
@section('content')
<script src="https://unpkg.com/imask"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

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
    $alert = false;
?>


    <section class="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Service Provider</h2>
                </div>
            </div>
        </div>
    </section>
    <div class="container">

        <h2>Want to become Service Provider</h2>
       <p>Fill out the form to become service provider</p>
        @if (\Session::has('success'))
        <?php $alert  =  true ?>
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
            <li><a  href="{{ route('fsp-register') }}"><center>(FSP)</center> 
                    <br><span class="label label-info">Means individual or self employed technician.</span></a>
                </li>
                <li><a   href="{{ route('mmt-register') }}"> <center>(MMT)</center>
                    <br><span class="label label-info">Means individual or self employed technician.</span></a>
                </li>

        </ul>

        <div class="tab-content">
            <div id="esp" class="tab-pane fade in active">
                <form class="espform booking_form" action="{{url('add_esp')}}" id="espform" method="post" enctype="multipart/form-data">
@csrf

                    <fieldset >

                        <div class="col-md-12 col-sm-12 piripiri">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Basic Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Name: <span class="required">*</span></label>
                                            <span class="bg-danger validation_error error_name"></span>
                                            <input type="text" name="name" class="form-control" />
                                            
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">

                                            <label for="name">Phone number: <span class="required">*</span></label>
                                            <span class="bg-danger validation_error error_phone_no"></span>
                                            <input  value="+88" type="text" name="phone_no" id='phone_no' class="form-control  phonecon"   />
                                        
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">Alternate phone number: </label>
                                            <span class="bg-danger validation_error error_alt_ph"></span>
                                            <input  placeholder="+88" id="aphn" type="text" name="alt_ph" class="form-control"   />

                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">Email(if available): </label>
                                            <span class="bg-danger validation_error error_email"></span>
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
                                            <span class="bg-danger validation_error error_smart_card"></span>
                                            <input type="number" name="smart_card" class="form-control " />
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">NID(Front ): <span class="required">*</span></label>
                                        <input type="file" name="nic_front" class="form-control " />
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">NID( Back): <span class="required">*</span></label>
                                        <input type="file" name="nic_back" class="form-control " />
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">

                                        <label for="name">Photographs: <span class="required">*</span></label>
                                        <input type="file" name="passport" class="form-control " />
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">TIN certificate or trade license: <span class="required">*</span></label>
<input type="file" name="tin_cer" class="form-control " />
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
                                <div class="panel-body ragun">
                                    <div class="">
                                    <div class="form-group stima">
                                        <div class="col-sm-4 col-md-4  hasib">
                                            <label for="name">Service Category : <span class="required">*</span></label>
                                            <span class="bg-danger validation_error error_cat"></span>
                                            <select class="form-control  cat1 select2 " id="select2_cat"style="height:41px !important;" name="cat" onchange="calculateservice()" >
                                                <option value="">--select--</option>
                                                <option value="20">Starter (commission 20%)</option>
                                                <option value="15">Expert (commission 15%)</option>
                                                <option value="10">Professional (commission 10%)</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-md-4">

                                            <label for="name">Service Type : <span class="required">*</span></label>
                                            <span class="bg-danger validation_error error_cats"></span>
                                            <select class="form-control select2 cats" 
                                            id="select2_cat" name="cats[]" multiple="multiple>
                                                <option value="#">--select--</option>
                                                <option value="1">Electrical Service</option>
                                                <option value="2">CCTV Service</option>
                                                <option value="3">Plumbing Service</option>
                                                <option value="5">IT Service</option>
                                                <option value="4">Generator Service</option>
                                                <option value="6">Air Conditoner Service</option>
                                            </select>
                                        </div>
                                        <div class="col-sm-4 col-md-4  ">

                                            <label for="name">Division : <span class="required">*</span></label>
                                            <span class="bg-danger validation_error error_division"></span>
                                            <select class="form-control  select2" name="division[]" multiple="multiple">
                                                <option value="#">--select--</option>
                                                <option value="3" selected>Dhaka Division</option>
                                            </select>
                                        </div>



                                    </div>

                                       <div class="form-group gethii">
                                        <div class="col-md-12">
                                        <label for="name">Zone / Thana :  <span class="required">*</span></label>
                                        <span class="bg-danger validation_error error_cluster"></span>
                                        <select class="form-control select2 cluster" name="cluster[]"  id="" multiple="multiple">
                                            <option value="#">--select--</option>

                                               @foreach($clusters as $c)
                                                   <option value="{{ $c->id }}">{{ $c->id }} -{{ $c->name }}</option>
                                               @endforeach
                                        </select>

                                       </div>
                                        
                                          <div class="form-group gethii">
                                              <div class="col-md-12">
                                        <label for="name">Cluster : <span class="required">*</span></label>
                                        <span class="bg-danger validation_error error_zone"></span>
                                        <select class="form-control thanazone select2 " name="zone[]" multiple="multiple">
                                            <option value="#">--select--</option>


                                        </select>
                                        </div>
                                          </div>


                                    <div class="form-group service_days gethii">
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
                            </div>
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Payment Information</h4>
                                </div>
                                <div class="panel-body">
                                    <div class="form-group">
                                        <div class="col-sm-6 col-md-6  ">
                                            <span class="bg-danger validation_error error_mobile_banking"></span>
                                            <label for="name">Mobile Banking : <span class="required">*</span></label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(1)' type="radio" name="mobile_banking" id="mobile_banking" value="Rocket" />Rocket
                                            </label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(2)' type="radio" name="mobile_banking" id="mobile_banking" value="Share Cash"/>Sure Cash
                                            </label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(3)' type="radio" name="mobile_banking" id="mobile_banking" value="Bkash"/>Bkash
                                            </label>
                                            <label class="radio-inline">
                                                <input onclick='paymentGetway(4)' type="radio" name="mobile_banking" id="mobile_banking" value="Other"/>Other
                                            </label>
                                    </div>
                                        <div class="col-sm-6 col-md-6  ">
                                        <label for="name">MFS account number : <span class="required">*</span></label>
                                        <span class="bg-danger validation_error error_mfs_account"></span>
                                        <input type="text" value="+88" name="mfs_account" id='mfs_account' class="form-control  phonecon" onblur="checkpattern()" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-12 col-sm-12 nyonyo">
                            <div class="panel panel-info">
                                <div class="panel-heading">

                                    <h4 style="font-weight:700;">Comrade Information
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
                                                    <span class="bg-danger validation_error error_c_name_0"></span>
                                                    <input type="text" name="c_name[]" class="form-control " />

                                                </div>
                                                <div class="col-sm-6 col-md-6  ">
                                                    <label>Phone number<span style="color:red">*</span></label>
                                                    <span class="bg-danger validation_error error_c_phone_no_0"></span>
                                                    <input  type="text" name="c_phone_no[]" class="form-control  phonecon" id="c_phone_no" value="+88"   />

                                                </div>
                                            </div>
                                            <div class="form-group">
                                                
                                                <div class="col-sm-6 col-md-6  ">

                                                <label >Alternate phone number</label>
                                                <span class="bg-danger validation_error error_c_alt_phone_no_0"></span>
                                                <input placeholder="+88" type="text" name="c_alt_phone_no[]" class="form-control"   /></div>
                                            <div class="form-group">
                                                <div class="col-sm-6 col-md-6  ">

                                                    <label >1 copy photograph of each comrades.<span style="color:red">*</span></label>
                                                    <input type="file" name="c_passport[]" class="form-control "/></div>
                                                
                                            </div>
                                            <div class="col-sm-6 col-md-6  ">

                                            <label for="name">NID(Front ): <span class="required">*</span></label>
                                            <input type="file" name="c_nic_front[]" class="form-control " />
                                        </div>
                                        <div class="col-sm-6 col-md-6  ">
                                            <label for="name">NID( Back): <span class="required">*</span></label>
                                            <input type="file" name="c_nic_back[]" class="form-control " />
                                        </div>
                                       
                                    </div>
              
                
             
                <div class="form-group">
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Email: <span class="required">*</span></label>
                        <span class="bg-danger validation_error error_c_email_0"></span>
                        <input type="email" name="c_email[]" class="form-control " />

                    </div>
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Password: <span class="required">*</span></label>
                        <span class="bg-danger validation_error error_c_pwd_0"></span>
                        <input   type="password"   name="c_pwd[]" class="form-control  "   />
                    </div>
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Confirm Password: <span class="required">*</span></label>
                        
                        <input  type="password" name="c_pwd[]" class="form-control  "   />
                    </div>
                </div>

 
        </div>
                                </div>

                            </div>
                                </div>
                            </div></div>
                        <div class="col-md-12 col-sm-12">
        
    </div>


    <div class="col-md-12 col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">

                <h4 style="font-weight:700;"></h4>
            </div>
            <div class="panel-body subservice-category">
                 
                    


            </div>
        </div>
    </div>





                             


    <div class="col-md-12 col-sm-12">
        <div class="panel panel-info">
            <div class="panel-heading">

                <h4 style="font-weight:700;">Login Information</h4>
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Email: <span class="required">*</span></label>
                        <span class="bg-danger validation_error error_l_email"></span>
                        <input type="email" name="l_email" class="form-control " />

                    </div>
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Password: <span class="required">*</span></label>
                        <span class="bg-danger validation_error error_pwd"></span>
                        <input   type="password" id="pwd" name="pwd" class="form-control  "   />
                    </div>
                    <div class="col-sm-4 col-md-4  ">

                        <label for="name">Confirm Password: <span class="required">*</span></label>
                        <span class="bg-danger validation_error error_c_pwd"></span>
                        <input  type="password" name="c_pwd" class="form-control  "   />
                    </div>
                </div>


            </div>
        </div>
    </div>
   <center><button type="Submit"  class="btn btn-primary submitForm" style="background-color:#E0E0E0">Submit</button></center> 
</fieldset>


                    <div class="clear"></div>
                </form>
            </div>
           

        </div>
    </div>



    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.12.0/jquery.validate.min.js"></script>


    <script type="text/javascript" src="{{'assets/simpleform.min.js'}}"></script>

    <script type="text/javascript">
        
         
 

        

       var value =document.getElementsByClassName("cat1").value;
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
             $.ajax({
                 type: "GET",
                 url: '{{ url('searchsubcat') }}',
                 data:{id:$(this).val()},
                 success:function(data){
                     $('.subservice-category').html(data);
                      
                     $('.sub_category_check').click(function () {
                        if (this.checked == false) {
                            $(this).parents('tr').find('.s_price').attr('readonly', true);
                        }else{
                            $(this).parents('tr').find('.s_price').attr('readonly', false); 
                        }
                    });

                     $(".sub_category_price").on('keyup',function(){
                        var serviceCategory = $('#select2_cat').val();
                        if(isNaN(serviceCategory)){
                              alert('select category')
                            return false;
                        }else{
                              inputPrice = $(this).val();
                                //console.log(inputPrice)
                                if(isNaN(serviceCategory) || isNaN(inputPrice)){
                                    perc=" ";
                                }else{
                                    perc = ((serviceCategory*inputPrice) / 100).toFixed(2);
                                    $(this).parents('tr').find('.s_comm').val(perc);

                                    commission = (((100-serviceCategory)*inputPrice) / 100).toFixed(2);
                                    $(this).parents('tr').find('.s_desp').val(commission);
                                }
                                //console.log(perc);
                        }

                         
                     })
                     $(".remove_sub_category").click(function () {
                        $(this).parents('tr').remove();

                     })
                 }
             });
         });

         
     });

        
        $("#generatecomrade").click(function(){
            $('.comradehtml:first').clone().appendTo(".endpend");
            $('.delete_commrade').show(); 
            $('.comradehtml:first').children('.delete_commrade').hide();
        });
        
        function deleteCommrade(_this){
            $(_this).parent().remove();
        }
    // s_price

    

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
     $(document).on('keyup', '.phonecon',function(){
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
  
        $(".remove").on('click', function () {
            var trIndex = $(this).closest("tr").index();
            if(trIndex>0) {
                $(this).closest("tr").remove();
            } else {
                alert("Sorry!! Can't remove first row!");
            }
        });
        $( document ).ready(function() {
            var phoneMask = new IMask(
              document.getElementById('phone_no'), {
                mask: '+{88}00000000000'
              });
              var phoneMask = new IMask(
              document.getElementById('c_phone_no'), {
                mask: '+{88}00000000000'
              });

              var r = new IMask(
              document.getElementById('aphn'), {
                mask: '+{88}000000000000'
              });


            window.payment = new IMask(
              document.getElementById('mfs_account'), {
                mask: '+{88}000000000000'
              });
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

<script>
            
               $('.submitForm').on('click', function (e) {
                    e.preventDefault();
                    $(".validation_error").html("");
                    Validation();





                });

            
    function Validation() {
        $.ajax({
            url: "{{ route('spf-validation') }}",
            data: $(".booking_form").serialize(),
            type: "POST",
            async: false,
        }).done(function (response) {

            if (response.response == 0) {
                $.each(response.errors, function (key, value) {
                    key = key.replace(".", "_");
                    $(".error_" + key).html(value);
                });
            } else {
                var form = $(this).parents('form');
                var form = $(".booking_form");
                form.submit();
            }
        });
    }
    


</script>
    <?php if($alert){ ?>
<script>
    swal ( "success" ,  "Your registration is on process. Please visit Mistri Mama premises to activate your account or you can contact at 09610 222 111!" ,  "success" )
</script>
<?php  }  ?>  
            
    </section>
@endsection
