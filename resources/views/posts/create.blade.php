@extends('layout.main')
@section('title', '| Create New Post')
@section('content')

	<div class="content">
	  <div class="title m-b-md">
        New Post
      </div>

	</div>
	<div class="container"><hr></div>
	<div class="row">
		<div class="col-sm-3"></div>
		<div class="col-sm-6">
		{!! Form::open(['route' => 'posts.store']) !!}
			{{ Form::label('title', 'Title:') }}
			{{ Form::text('title', null, array('class'=> 'form-control','required' => '')) }}
		    
		    {{ Form::label('body', 'Body:') }}
			{{ Form::textarea('body', null, array('class'=> 'form-control','required' => '')) }}

			{{ Form::label('author', 'Author:') }}
			{{ Form::text('author', null, array('class'=> 'form-control','required' => '')) }}
		    
		    {{ Form::submit('Submit!', array('class' => 'btn btn-success  btn-block', 'style'=>'margin-top:20px;')) }}
		    
		{!! Form::close() !!}
		</div>	
	</div>


@endsection