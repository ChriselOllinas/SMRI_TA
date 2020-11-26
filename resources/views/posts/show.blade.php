@extends('layouts.app')
@section('content')
<!-- <div class="row">
    <div class="col-m-8">
        <div class="pull-left">
            <h2> Show Post</h2>
        </div>
        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>
    </div>
</div> -->
<center>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title : </strong>
            {{ $post->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Body : </strong>
            {{ $post->body}}
        </div>
    </div>
</div>
</center>
@endsection