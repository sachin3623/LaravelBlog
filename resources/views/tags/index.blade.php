@extends('layout.main')
@section('title', '| Tags')
@section('content')
	
	<div class="row">
		<div class="col-md-8" style="margin-left: 30px;">
			<h1 class="display-3">
				Tags
			</h1>
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($tags as $tag)
					<tr>
						<th>{{ $tag->id }}</th>
						<td>{{ $tag->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' =>'tags.store', 'method' =>'POST']) !!}
				<h3>New tag</h3>
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::Submit('Create', ['class' => 'btn-primary btn-block btn-lg ']) }}

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection