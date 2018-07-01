@extends('layouts.app')
@section('content')

<div class="container">
	<div class="row">
		<div class="col-sm-12">
			<div class="full-right">

				<h2>CURD Resource</h2>

			</div>
		</div>
	</div>

	  @if ($message = Session::get('success'))
      <div class="alert alert-success">
          <p>{{ $message }}</p>
      </div>
 	  @endif

	<table class="table table-bordered">
		<tr>
			<th with="80px">No</th>
			<th>Title</th>
			<th>Content</th>
			<th with="140px" class="text-center">
				<a href="{{ route('posts.create') }}" class="btn btn-success btn-sm">
					<i class="glyphicon glyphicon-plus"></i>
				</a>
			</th>
		</tr>

		<?php $no=1; ?>
		@foreach ($post as $key => $value)
		<tr>
			<td>{{ $value->id }}</td>
			<td>{{ $value->title }}</td>
			<td>{{ $value->body }}</td>

			<td>

				<a class="btn btn-info btn-sm" href="{{ route('posts.show',$value->id) }}">
					<i class="glyphicon glyphicon-th-large"></i></a>

				<a class="btn btn-primary btn-sm" href="{{ route('posts.edit',$value->id) }}">
					<i class="glyphicon glyphicon-pencil"></i></a>
	

				<button style="display: inline;" onclick="myFunction()" class="btn btn-danger btn-sm"> 
					<i class="glyphicon glyphicon-trash"></i></button>

<p id="demo">
	{!! Form::open( ['method' => 'DELETE', 'route' => ['posts.destroy', $value->id], 'style'=>'display:inline', 'class'=>'dele']) !!} 

	{!! Form::close() !!}
</p>

<script>
function myFunction() 
{
    var txt;
    if (confirm("You Want to Delete Data ?")) {
        txt = "Data Deleted..";
	$(".dele").submit();
		document.getElementById("demo").innerHTML = txt;
    } else {
        txt = "You pressed Cancel!";
    }
}
</script>

	    	
				
			</td>
		</tr>

		@endforeach

	</table>

	<div class="text-center">
		{!! $post->links(); !!}
	</div>

</div>
@endsection