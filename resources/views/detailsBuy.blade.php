@extends('master')
@section('title', 'Details of a Book')

@section('content')
<!-- Content Start -->
    <h1>Management books system | Details:</h1>
        <hr/>

    <h2>{{ $book -> titulo }}</h2>
    <div class="container">
        ISBN: {{ $book -> isbn }} <br>
        Autor: {{ $book -> autor }} <br>
        Quantity: {{ $book -> cantidad }} <br>
        Edition: {{ $book -> edicion }} <br>
        Genre: {{ $book -> genero }} <br>
        Country: {{ $book -> pais }} <br>
        <br>
    </div>
    <div class="container">
        {!! Form::open(['url' => 'ShoppingCart']) !!}

        <div class="large-3 columns">
        {!! Form::label('cantidad', 'Quantity: ') !!}
        {!! Form::text('cantidad') !!}
        </div>
        

        {!! Form::hidden('isbn', $book->isbn) !!}

        <center><div>
            {!! Form::submit('Add to the cart', ['class' => 'button success']) !!}
        </div></center>
    {!! Form::close() !!}
    </div>

<!-- Content End -->
@endsection