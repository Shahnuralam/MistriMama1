@extends('layouts.admin')
@section('css')
    <link rel="stylesheet" href="{{ asset('adminlte/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css') }}">

@endsection
@section('content')
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <h1>
                Service Provider
                <small>Services Information</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li class="active">Service Provider</li>
            </ol>
        </section>

        <!-- Main content -->
        <section class="content">
            <div class="row">
                <div class="col-md-3">
                    @include('layouts.provider_sidebar')
                </div>

                <div class="col-md-9">
                    <!-- /.box -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Service Provider Add Services Form</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            @if (\Session::has('success'))
                                <div class="alert alert-danger">
                                    <ul>
                                        <li>{!! \Session::get('success') !!}</li>
                                    </ul>
                                </div>
                            @endif
                            <form class="form-horizontal" action="store_service" method="post">
                                @csrf
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Service</label>

                                        <div class="col-sm-4">
                                            <select class="form-control  " name="sc_id" >
                                                @foreach($cat as $c)
                                                    <optgroup label="{{$c->name}}">
                                                        @foreach($c->subcat as $sc)
                                                            <option value="{{$sc->id}}">{{$sc->name}}</option>
                                                @endforeach
                                                @endforeach

                                            </select>                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 control-label">Price</label>

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control s_price" name="s_price" id="inputEmail3" placeholder="Please Enter Price">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Commission</label>

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control s_comm" name="s_comm" id="inputEmail3" >
                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 control-label">DESP Commission</label>

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control s_desp" name="s_desp" id="inputEmail3" >
                                        </div>
                                    </div>




                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-info pull-right">Save</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>  </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>
                <!-- /.col -->
            </div>

        </section>
        <!-- /.content -->
    </div>
@endsection
@section('js')

    <script src="{{ asset('adminlte/bower_components/datatables.net/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('adminlte/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js') }}"></script>
    <script>
        $(function () {
            $('#example1').DataTable()
            $('#example2').DataTable({
                'paging'      : true,
                'lengthChange': false,
                'searching'   : false,
                'ordering'    : true,
                'info'        : true,
                'autoWidth'   : false
            })
        })
        $('.s_price').keyup(function(){

            var per=100 - {{$p->cat}};
            var spa=($(this).val() * per)/100;
            var despc=($(this).val() * {{$p->cat}})/100;
            $('.s_comm').val(spa);
            $('.s_desp').val(despc);
            /* var val = 0;
             $('input[name="msp_price[]"]').each(function() {
             val += Number($(this).val());
             });
             alert(val);*/
        });
    </script>
@endsection