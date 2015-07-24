@extends('master')
@section('title', 'Payment information')

@section('content')
<!-- Content Start -->
	<h1>Payment Form:</h1>
	<h2>(Ingrese información de persona que realizará el pago)</h2>
	<hr/>
	{!! Form::open(['url' => 'finish/cash']) !!}

		<div class="large-6 columns">
			{!! Form::label('payer_DNI', 'DNI: ') !!}
			{!! Form::text('payer_DNI') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('payer_name', 'Nombres: ') !!}
			{!! Form::text('payer_name') !!}
		</div>

		<div class="large-3 columns">
			{!! Form::label('payer_last_name', 'Apellidos: ') !!}
			{!! Form::text('payer_last_name') !!}
		</div>

		<hr/>

		<center><div>
			{!! Form::submit('Realizar Compra', ['class' => 'button success']) !!}
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