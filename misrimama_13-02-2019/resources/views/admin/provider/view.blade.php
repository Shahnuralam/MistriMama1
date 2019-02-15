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
            <small>Control panel</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active">Service Provider</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                 <!-- /.box -->

                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Service Provider Table</h3>
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
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                            <tr>
                                <th>Sr</th>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Type</th>
                                <th>Phone Number</th>
                                <th>Email</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($providers as $p)
                                <tr>
                                    <td>{{$loop->iteration}}</td>
                                    <td>{{$p->id}}</td>
                                    <td>{{$p->name}}</td>
                                    <td>@if($p->type==0) ESP @else FSP @endif</td>
                                    <td>{{$p->phone_no}}</td>
                                    <td>{{$p->email}}</td>
                                    <td>
                                        @if($p->user->status==2)
                                            <a href="{{url('activate/provider/'.$p->user->id)}}" data-toggle="tooltip" data-title="Click To Activate" class="btn btn-success">Activate </a>
                                        @else
                                            <a href="{{url('deactivate/provider/'.$p->user->id)}}" data-toggle="tooltip" data-title="Click To De-Activate" class="btn btn-danger">De-Activate </a>
                                        @endif
                                    </td>
                                    <td><a href="{{url('panel/provider/'.$p->id)}}" class="btn btn-info">Profile</a></td>

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