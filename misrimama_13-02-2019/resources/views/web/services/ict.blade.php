@extends('layouts.web')
@section('content')
    <section class="big-title">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <h2>Services</h2>
                </div>
            </div>
        </div>
    </section>
    <!-- /.big-title -->


    <div class="container">
        <div class="row service-detail_heading">
            <div class="col-xs-12 text-center">
                <h2 class="heading-title"> <?= $model->name ?> </h2>
                <?= $model->description ?>
            </div>
        </div>
        <div class="row service-detail_content">
            <div class="container">
                <div class="row">

                    <div class="col-sm-4">
                        <h2 class="service-categories_title">Unique Benefits</h2>
                        <div class="service-list_item-categories">
                            <?= $model->unique_benefits ?>
                            
                        </div>
                    </div>

                    <div class="col-sm-8">
                        <h2 class="service-categories_title">Service Category</h2>
                        <div class="col-sm-12 service-list_item-categories">
                             
                                 <?= $model->service_category ?>
                               

                         
                        </div>
                         
                    </div>

                </div>
            </div>
        </div>
    </div>
    
@endsection