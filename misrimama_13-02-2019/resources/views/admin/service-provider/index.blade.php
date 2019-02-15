@extends('admin.home.template')

@section('body')

<h1 class="page-title">Service Provider
    <small></small>

</h1>
<div class="row">
    <div class="col-md-12">



        <div class="portlet box green">
            <div class="portlet-title">
                <div class="caption">
                    <i class="fa fa-cogs"></i>Service Provider </div>

            </div>


            <div class="portlet-body flip-scroll">






                <table  class="table table-bordered table-striped table-condensed flip-content">
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
                        @foreach($models as $p)
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
                            <td><a href="{{route('service-provider.show',$p->id)}}" class="btn btn-info">Profile</a></td>

                        </tr>
                        @endforeach

                    </tbody>
                </table>

















                {!! $models->appends(Input::except('page'))->render() !!}
            </div>
        </div>
    </div>
</div>


<style>
    .portlet-body table .logoWrap{
        width: 80px;
        height: 80px;
        vertical-align: middle;
    }
    .portlet-body table .logoWrap img{
        width: 100%;
    }


    #sortable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
    #sortable li { margin: 0 3px 3px 3px; padding: 0.4em; padding-left: 1.5em; font-size: 1.4em; height: 18px; }
    #sortable li span { position: absolute; margin-left: -1.3em; }
</style>

@endsection
