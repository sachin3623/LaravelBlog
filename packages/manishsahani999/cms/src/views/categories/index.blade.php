@extends('layout.main')
@section('title', '| Categories')
@section('content')
	
	<div class="row">
		<div class="col-md-8" style="margin-left: 30px;">
			<h1 class="display-3">
				categories
			</h1>
			<table>
				<thead>
					<tr>
						<th>#</th>
						<th>name</th>
					</tr>
				</thead>
				<tbody>
					@foreach ($categories as $category)
					<tr>
						<th>{{ $category->id }}</th>
						<td>{{ $category->name }}</td>
					</tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="col-md-3">
			<div class="well">
				{!! Form::open(['route' =>'categories.store', 'method' =>'POST']) !!}
				<h3>New Category</h3>
				{{ Form::label('name', 'Name') }}
				{{ Form::text('name', null, ['class' => 'form-control']) }}

				{{ Form::Submit('Create', ['class' => 'btn-primary btn-block btn-lg ']) }}

				{!! Form::close() !!}
			</div>
		</div>
	</div>

@endsection