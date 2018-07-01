<div class="row">

	<div class="pull-right">
            <br/>
            <a class="btn btn-primary" href="{{ route('posts.index') }}"> <i class="glyphicon glyphicon-arrow-left"></i></a>
    </div>
        <br><br><br><br><br>



	<div class="col-sm-2">
		{!! form::label('title', 'Title') !!}
	</div>


	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('title') ? 'has-error' : ""}}">
			{{ Form::text('title',NULL, ['class'=>'form-control','id' => 'title', 'required', 'placeholder' => 'Title Post... ']) }}
			<!--{{ $errors->first('title', '<p class="help-block">:message</p>') }}-->
		</div>
	</div>
</div>


<div class="row">
	<div class="col-sm-2">
		{!! form::label('bosy', 'Content') !!}
	</div>
	<div class="col-sm-10">
		<div class="form-group {{ $errors->has('body') ? 'has-error' : ""}}">
			{{ 	Form::text('body',NULL, ['class'=>'form-control','id' => 'body', 'required', 'placeholder' => 'Content Post... ']) }}
			<!--{{ $errors->first('body', '<p class="help-block">:message</p>') }}-->
		</div>
	</div>
</div>

<div class="form-group">
  {{ Form::button(isset($model)? 'Update' : 'save' , ['class'=>'btn btn-success', 'type'=>'submit']) }}
</div>


@if(count($errors))
<div class="form-group">
<div class="alert alert-danger">
<ul>
@foreach ($errors->all() as $errors)
<li>{{ $errors }}</li>
@endforeach
</ul>
</div>
</div>
@endif