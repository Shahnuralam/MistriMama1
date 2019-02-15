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
                <small>Commrads Information</small>
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
                            <h3 class="box-title">Service Provider Add Commrads Form</h3>
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
                            <form class="form-horizontal" action="store_commrads" method="post" enctype="multipart/form-data">
                                @csrf
                                <div class="box-body">

                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>

                                        <div class="col-sm-4">
                                            <input type="text" class="form-control" name="c_name" id="inputEmail3" placeholder="Please Enter Name">
                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 control-label">Phone Number</label>

                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="c_phone_no" id="inputEmail3" placeholder="Please Enter Phone No">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">NID/Smart card number</label>

                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="c_card" id="inputEmail3" >
                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 control-label">Alternate phone number</label>

                                        <div class="col-sm-4">
                                            <input type="number" class="form-control" name="c_alt_phone_no" id="inputEmail3" >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="inputEmail3" class="col-sm-2 control-label">1 passport size photograph.</label>

                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" name="c_passport" id="inputEmail3">
                                        </div>
                                        <label for="inputEmail3" class="col-sm-2 control-label">NID or smart card photocopy .</label>

                                        <div class="col-sm-4">
                                            <input type="file" class="form-control" name="c_nid" id="inputEmail3" >
                                        </div>
                                    </div>



                                </div>
                                <!-- /.box-body -->
                                <div class="box-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                                    <button type="submit" class="btn btn-info pull-right">Save</button>
                                </div>
                                <!-- /.box-footer -->
                            </form>
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