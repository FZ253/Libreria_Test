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
        Price: {{ $book -> precio }} Nuevos Soles<br>
        <br>
    </div>
    <div class="container">
    
    {!! Form::open(['url' => 'ShoppingCart']) !!}

    <!--
    {!! Form::open(array('method' => 'POST','url' => 'ShoppingCart')) !!}
    -->
        <div class="large-3 columns">
        {!! Form::label('cantidad', 'Quantity: ') !!}
        {!! Form::text('cantidad') !!}
        </div>
        

        {!! Form::hidden('isbn', $book->isbn) !!}
        {!! Form::hidden('titulo', $book->titulo) !!}
        {!! Form::hidden('precio', $book->precio) !!}

        <center><div>
            {!! Form::submit('Add to the cart', ['class' => 'button success']) !!}
        </div></center>
    {!! Form::close() !!}

    @if ($errors->any())
        <ul style="color:red">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif
    
    </div>

<!-- Content End -->
@endsection