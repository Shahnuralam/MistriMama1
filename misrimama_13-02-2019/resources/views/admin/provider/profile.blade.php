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
                            <h3 class="box-title">Service Provider Profile Information</h3>
                            @if(Auth::user()->hasRole('admin'))
                            <a href="{{$p->id}}/edit_profile" class="btn btn-info fa fa-plus pull-right" > Edit Profile</a>
@else
                                <a href="edit_profile" class="btn btn-info fa fa-plus pull-right" > Edit Profile</a>

                            @endif
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">

                            <div class="panel panel-info">
                                <div class="panel-body" style="background:#e4eef3">
                            <div class="row">

                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-5">
                                    <h4><strong>Name : </strong> {{$p->name}}</h4>
                                </div>

                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-5">
                                    <h4><strong>Phone Number : </strong> {{$p->phone_no}}</h4>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-5">
                                    <h4><strong>Alternate Phone Number : </strong> {{$p->alt_ph}}</h4>
                                </div>


                                <div class="col-sm-1">

                                </div>
                                <div class="col-sm-5">
                                    <h4><strong>Email : </strong> {{$p->email}}</h4>
                                </div>
                            </div>
                                    <div class="row">

                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-5">
                                            <h4><strong>Mailing Address : </strong> {{$p->mailing_add}}</h4>
                                        </div>
                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-5">
                                            <h4><strong>NID/Smart card number : </strong> {{$p->mailing_add}}</h4>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-5">
                                            <h4><strong>NIC Front : </strong> {{$p->mailing_add}}</h4>
                                        </div>
                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-5">
                                            <h4><strong>NIC Back : </strong> {{$p->mailing_add}}</h4>
                                        </div>
                                    </div>
                                    <div class="row">

                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-5">
                                            <h4><strong>Passport : </strong> {{$p->mailing_add}}</h4>
                                        </div>
                                        <div class="col-sm-1">

                                        </div>
                                        <div class="col-sm-5">
                                            <h4><strong>TIN Certificate or Trade Licence : </strong> {{$p->mailing_add}}</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>



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