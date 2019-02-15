@extends('layouts.web')
@section('content')
<section class="big-title">
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <h2>{{ $model->title }}</h2>
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <?= $model->description ?>
        </div>
    </div>
</div>

@endsection



