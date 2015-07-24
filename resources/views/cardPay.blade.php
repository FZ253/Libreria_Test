@extends('master')
@section('title', 'Payment information')

@section('content')
<!-- Content Start -->
	<h1>Payment Form:</h1>
	<hr/>

	@if (Session::has('flash_message'))
	<div class="alert alert-success">
		{{ Session::get('flash_message') }}
	</div>
	@endif

	{!! Form::open(['url' => 'finish/card']) !!}

		<div class="large-6 columns">
			{!! Form::label('cardNo', 'Card Number: ') !!}
			{!! Form::text('cardNo') !!}
		</div>

		<div class="large-6 columns">
			{!! Form::label('security_password', 'Password: ') !!}
			{!! Form::text('security_password') !!}
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