@extends('master')
@section('title', 'Payment Form')

@section('content')
<!-- Content Start -->
	<h1>Payment Form:</h1>
	<hr/>
	{!! Form::open(['url' => 'payment/close']) !!}

		<div class="large-6 columns">
			{!! Form::label('nombres', 'Nombres: ') !!}
			{!! Form::text('nombres') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('apellidos', 'Apellidos: ') !!}
			{!! Form::text('apellidos') !!}
		</div>

		<div class="large-3 columns">
			{!! Form::label('dni', 'DNI: ') !!}
			{!! Form::text('dni') !!}
		</div>

		<div class="large-3 columns">
			{!! Form::label('telefono', 'Teléfono: ') !!}
			{!! Form::text('telefono') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('fecha_nacimiento', 'Fecha de Nacimiento: ') !!}
			{!! Form::input('date', 'fecha_nacimiento', date('Y-m-d')) !!}
		</div>

		<div class="large-12 columns">
			{!! Form::label('direccion', 'Dirección: ') !!}
			{!! Form::text('direccion') !!}
		</div>

		<div class="large-4 columns">
			{!! Form::label('tipo_pago', 'Tipo de Pago: ') !!}
			{!! Form::select('tipo_pago', array('cash' => 'Efectivo', 'card' => 'Tarjeta'), 'cash') !!}
		</div>
		<hr/>

		<center><div>
			{!! Form::submit('Enviar', ['class' => 'button success']) !!}
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