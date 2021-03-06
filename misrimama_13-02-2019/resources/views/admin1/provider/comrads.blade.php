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
                            <h3 class="box-title">Service Provider Commrads Table</h3>

                            <a href="add_comrads" class="btn btn-info fa fa-plus pull-right" >Add Commrads</a>

                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                <tr>
                                    <th>Sr</th>
                                    <th>Name</th>
                                    <th>Phone No</th>
                                    <th>Alternate Ph</th>
                                    <th>Smart Card</th>

                                </tr>
                                </thead>
                                <tbody>
                                @foreach($p->comrads as $c)
                                    <tr>
                                        <td>{{$loop->iteration}}</td>
                                        <td>{{$c->c_name}}</td>
                                        <td>{{$c->c_phone_no}}</td>
                                        <td>{{$c->c_alt_phone_no}}</td>
                                        <td>{{$c->c_card}}</td>

                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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