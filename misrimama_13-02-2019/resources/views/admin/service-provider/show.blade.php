@extends('admin.faq.template')

@section('body')
<h1 class="page-title">Service Providers
    <small></small>
<!--    <a class="btn green float-right" href="{{ route('service-provider.edit',$model->id) }}">Edit</a>-->
</h1>

<div class="row">


    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Basic Information
                </div>
            </div>
            <div class="portlet-body flip-scroll">

                <table class="table table-bordered table-striped table-condensed flip-content">
                    <tbody>
                        <tr>
                            <th>Name</th>
                            <td><?= $model->name ?>
                                <?php
                               // pr($model->toArray());
                                ?>
                            </td>
                        </tr>
                        <tr>
                            <th>Phone number</th>
                            <td>{{ $model->phone_no }}</td>
                        </tr>
                        <tr>
                            <th>Alternate phone number</th>
                            <td>{{ $model->alt_ph }}</td>
                        </tr>
                        <tr>
                            <th>Email</th>
                            <td>{{ $model->email }}</td>
                        </tr>
                        <tr>
                            <th>Mailing Address</th>
                            <td><?= $model->mailing_add ?></td>
                        </tr>

                        <tr>
                            <th>NID/Smart Card Number</th>
                            <td><?= $model->smart_card ?></td>
                        </tr>

                        <tr>
                            <th>NID(Front )</th>
                            <td class="logoWrap">
                                <img src="{{ asset('uploads/SP/'.$model->nic_front) }}" class="logoImg" alt="" title="">
                            </td>
                        </tr>
                        <tr>
                            <th>NID( Back)</th>
                            <td class="logoWrap"><img src="{{ asset('uploads/SP/'.$model->nic_back) }}" class="logoImg" alt="" title=""></td>
                        </tr>
                        <tr>
                            <th>Photographs</th>
                            <td class="logoWrap"><img src="{{ asset('uploads/SP/'.$model->passport) }}" class="logoImg" alt="" title=""></td>
                        </tr>
                        <tr>
                            <th>TIN certificate or trade license: *</th>
                            <td class="logoWrap"><img src="{{ asset('uploads/SP/'.$model->tin_cer) }}" class="logoImg" alt="" title=""></td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Business Information
                </div>
            </div>
            <div class="portlet-body flip-scroll">                
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <thead>
                        <th>Service Name	</th>
                        <th>Service Price	</th>
                        <th>SP Amount		</th>
                        <th>Mistri Mama Commission</th>
                    </thead>
                    
                    <tbody>
                        
                         
                                <?php 
                                
                               // pr($model->services)
                                   
                                    foreach ($model->services as $services){
                                        
                                            
                                ?>
                                <tr>
                                    <td>{{ @$services->scategory->name }}</td>
                                    <td>{{ $services->s_price }}	</td>
                                    <td>{{ $services->s_comm }}</td>
                                    <td>{{ $services->s_desp }}</td>
                                </tr>
                                <?php 
                                            
                                        
                                    }
                                ?>
                                        
                            
                      
                         

                    </tbody>
                </table>
            </div>
        </div>
    </div>





    <div class="col-md-12">
        <!-- BEGIN SAMPLE TABLE PORTLET-->
        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Payment Information

                </div>
            </div>
            <div class="portlet-body flip-scroll">                
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <tbody>
                        <tr>
                            <th>Mobile Banking</th>
                            <td><?= $model->mobile_banking ?></td>
                        </tr>


                        <tr>
                            <th>MFS Account Number </th>
                            <td>{{ $model->mfs_account }}</td>
                        </tr>



                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <?php if($model->type != 4){ ?>

    <?php if ($model->comrads) { ?> 
        <div class="col-md-12">
            <!-- BEGIN SAMPLE TABLE PORTLET-->
            <div class="portlet box green">
                <div class="portlet-title">
                    <div class="caption">
                        <i class="fa fa-cogs"></i>Comrade Information
                    </div>
                </div>
                <div class="portlet-body flip-scroll">
                    <?php foreach ($model->comrads as $comrads) { ?> 
                        <table class="table table-bordered table-striped table-condensed flip-content">
                            <tbody>
                                <tr>
                                    <th>Name</th>
                                    <td><?= $comrads->c_name ?></td>
                                </tr>

                                <tr>
                                    <th>Phone No</th>
                                    <td><?= $comrads->c_phone_no ?></td>
                                </tr>

                                <tr>
                                    <th>Alt Phone No</th>
                                    <td><?= $comrads->c_alt_phone_no ?></td>
                                </tr>


                                
                                <tr>
                                    <th>Nic Front</th>
                                    <td>
                                        <img src="{{ asset('uploads/SP/'.$comrads->c_nic_front) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Nic Back</th>
                                    <td>
                                        <img class="logoImg" src="{{ asset('uploads/SP/'.$comrads->c_nic_back) }}">
                                    </td>
                                </tr>
                                <tr>
                                    <th>Passport</th>

                                    <td>
                                        <img class="logoImg" src="{{ asset('uploads/SP/'.$comrads->c_passport) }}">
                                    </td>
                                </tr>

                            </tbody>
                        </table>
                    <?php } ?>
                </div>
            </div>
        </div>
    <?php } ?>
    <?php } ?>
</div>

<style>
    .logoImg{
        width: 100px
    }
</style>
@endsection
