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
                <small>Business Information</small>
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
                            <h3 class="box-title">Service Provider Business Information</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <div class="panel panel-info">
                                <div class="panel-body" style="background:#e4eef3">
                                    <div class="row">

                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Service Category : </strong> @foreach($p->cate as $c)
                                                    <span class="label label-info"> {{$c->category->name}}</span>
                                                @endforeach
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Commission : </strong>
                                                <span class="label label-info"> {{$p->cat}}</span>
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Days : </strong>
                                                @foreach($p->days as $c)
                                                    <span class="label label-info"> {{$c->days}}</span>
                                                @endforeach                                             </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Time : </strong>
                                                @foreach($p->time as $c)
                                                    <span class="label label-info"> {{$c->time}}</span>
                                                @endforeach                                              </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Division : </strong>
                                                @foreach($p->division as $c)
                                                    <span class="label label-info"> {{$c->division}}</span>
                                                @endforeach
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Zone / Thana : </strong>
                                                @foreach($p->zone as $c)
                                                    <span class="label label-info"> {{$c->zone}}</span>
                                                @endforeach
                                            </h4>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-sm-1">
                                        </div>
                                        <div class="col-sm-10">
                                            <h4><strong>Cluster : </strong>
                                                @foreach($p->cluster as $c)
                                                    <span class="label label-info"> {{$c->cluster}}</span>
                                                @endforeach
                                            </h4>
                                        </div>
                                    </div>
                                </div></div>









                        </div>
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
    </script>
@endsection