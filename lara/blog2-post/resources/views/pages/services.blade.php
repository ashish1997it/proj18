@extends('layouts.app')

@section('content')
    <h1>services Laravel</h1>
    <p>Laravel Content</p>

    <h2>{{ $title }}</h2>
    @if(count($services) > 0)
    <ul class="list-group">
    	@foreach($services as $service)
    		<li class="list-group-item">{{ $service }}</li>
    	@endforeach
    </ul>
    @endif
@endsection
