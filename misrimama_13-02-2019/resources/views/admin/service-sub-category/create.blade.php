@extends('admin.home.template')
@section('body')

<h1 class="page-title"> Service Sub Category 
    <small></small>
</h1>
<div class="row">    
    <div class="col-md-12 ">
        <div class="portlet box green ">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-gift"></i> Create 
                </div>
            </div>
            <div class="portlet-body form">
                {!! Form::open(array('route' => 'service-sub-category.store' ,'method'=>'POST','files' => true ,'class'=>'form-horizontal')) !!}
                <div class="form-body">
                    
                    <div class="form-group">        
<!--                        <label class="col-md-3 control-label">Banner Section</label>-->
                        <div class="col-md-12">

                            
                            <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Category</label>
                                        <div class="col-md-9">
                                            {!! Form::select('c_id', $model,null, array('class' => 'form-control')) !!}
                                            <span class="bg-danger"><?= $errors->first('c_id'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Name</label>
                                        <div class="col-md-9">
                                            {!! Form::text('name', null, array('placeholder' => 'Slug','class' => 'form-control')) !!}
                                            <span class="bg-danger"><?= $errors->first('name'); ?></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label class="col-md-3 control-label">Description</label>
                                        <div class="col-md-9">
                                            {!! Form::textArea('Description', null, array('placeholder' => 'description','class' => 'form-control')) !!}
                                            <span class="bg-danger"><?= $errors->first('description'); ?></span>
                                        </div>
                                    </div>
                                </div>
                            
                        </div>
                    </div>
                    
                    
               
                    
                    
                    
                    
                </div>


                <div class="form-actions right1">
                    <button type="submit" class="btn green">Submit</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
    <!-- END SAMPLE TABLE PORTLET-->
</div>

<script>
$(document).ready(function() {
    $('.js-example-basic-multiple').select2();
});
</script>


@endsection
