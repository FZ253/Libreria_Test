@extends('master')
@section('title', 'Add a New Book')

@section('content')
<!-- Content Start -->
	<h1>Add a new book:</h1>
	<hr/>
	{!! Form::open(['url' => 'book/list']) !!}

		<div class="large-12 columns">
			{!! Form::label('isbn', 'ISBN: ') !!}
			{!! Form::text('isbn') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('titulo', 'Title: ') !!}
			{!! Form::text('titulo') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('autor', 'Author: ') !!}
			{!! Form::text('autor') !!}
		</div>

		<div class="large-3 columns">
			{!! Form::label('cantidad', 'Quantity: ') !!}
			{!! Form::text('cantidad') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('proveedor', 'Provider: ') !!}
			{!! Form::text('proveedor') !!}
		</div>

		<div class="large-3 columns">
			{!! Form::label('edicion', 'Edition: ') !!}
			{!! Form::text('edicion') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('editorial', 'Editorial: ') !!}
			{!! Form::text('editorial') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('genero', 'Genre: ') !!}
			{!! Form::text('genero') !!}
		</div>

		<div class="large-4 columns">
			{!! Form::label('pais', 'Country: ') !!}
			{!! Form::text('pais') !!}
		</div>

		<div class="large-4 columns">
			{!! Form::label('moneda', 'Coin: ') !!}
			{!! Form::text('moneda') !!}
		</div>

		<div class="large-4 columns">
			{!! Form::label('precio', 'Price: ') !!}
			{!! Form::text('precio') !!}
		</div>

		<center><div>
			{!! Form::submit('Add', ['class' => 'button success']) !!}
		</div></center>
	{!! Form::close() !!}

	@if ($errors->any())
		<ul style="color:red">
			@foreach ($errors->all() as $error)
				<li>{{ $error }}</li>
			@endforeach
		</ul>
	@endif

<!-- Content End -->
@endsection