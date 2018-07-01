@extends('layouts.app')

@section('content')
	<h1>{{$title}}</h1>
    <h1>hello Laravel</h1>
    <p>Laravel Content</p>

    <div class="jumbotron text-center">
    	<h1>Welcome to laravel !</h1>
    	<p>laravel appn</p>
    	<p>
    		<a class="btn btn-primary btn-lg" href="/login" role="button">Login</a>
    		<a class="btn btn-success btn-lg" href="/register" role="button">Register</a>
   		</p>
   	</div>
@endsection
