@extends('master')
@section('title', 'Add Books to Inventory')

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

    {!! Form::open(['url' => 'ListBooks/' . $book->isbn]) !!}

        <div class="large-2 columns">
            {!! Form::label('cantidad', 'Quantity: ') !!}
            {!! Form::text('cantidad') !!}
        </div>

        {!! Form::hidden('isbn', $book->isbn) !!}

        <center><div>
            {!! Form::submit('Add Books', ['class' => 'button success']) !!}
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