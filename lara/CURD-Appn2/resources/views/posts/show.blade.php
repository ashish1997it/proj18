@extends('layouts.app')
@section('content')

<div class="container"> 
<div class="row">
        <div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
        </div>

    <div class="col-lg-12 margin-tb">
        <div style="text-align: center;">
            <h2>Show Post</h2>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Title : </strong>
            {{ $post->title}}
        </div>
    </div>
    <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Content : </strong>
            {{ $post->body}}
        </div>
    </div>
</div>
</div>
@endsection
