@extends('layout.main')
@section('title', '| Edit')
@section('content')
	<br><br>
	<div class="container">
		<div class="card text-center ">
		  <div class="card-header ">
		    <ul class="nav nav-pills card-header-pills">
		      <li class="nav-item">
		        {!! Html::linkRoute('posts.show', 'View',array($post->id), array('class'=>'btn btn-primary btn-block')) !!}
		      </li>
		      <p>. .</p>
		      <li class="nav-item">
		        {!! Html::linkRoute('posts.edit', 'Edit',array($post->id), array('class'=>'btn btn-primary btn-block', 'style' => '')) !!}
		      </li>
		      <p>. .</p>
		      <li class="nav-item">
		        {!! Form::open(['route' => ['posts.destroy', $post->id], 'method' => 'DELETE']) !!}
		        {!! Form::submit('Delete', array('class'=>'btn btn-danger btn-block')) !!}
		        {!! Form::close() !!}
		      </li>
		      <li class="nav-item">
		        <a class="btn btn-light nav-btn-2 " href="" role="button">Updated at {{ date('M j,  h:ia', strtotime($post->updated_at)) }}</a>	
		      </li>
		    </ul>
		  </div>
 	<div class="card-body">
 		{!! Form::model($post, ['route' =>['posts.update', $post->id], 'method' =>'PUT']) !!}
	    <h1 class="card-title">
	    	{{ Form::label('title', 'Title:') }}
	    	{{ Form::text('title', null, ["class" => 'form-control']) }}
	    </h1>
	    <p class="card-text">
	    	{{ Form::label('body', 'Body:') }}
	    	{{ Form::textarea('body', null, ["class" => 'form-control']) }}
	    </p>
        {{ Form::submit('Save Changes',["class" => 'btn btn-primary btn-block'] ) }}
        {!! Form::close() !!}
    </div>
    <div class="card-footer ">
    	<p> Created by {{ $post->author }} at {{ date('M j,Y', strtotime($post->created_at)) }} </p>
    </div>
</div>
	</div>

@endsection
