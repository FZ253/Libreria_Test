@extends('master')
@section('title', 'Shopping Cart')

@section('content')
<!-- Content Start -->
    <h1>Shopping Cart:</h1>
        <hr/>

    <table id="table_id" class="display">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Género</th>
                    <th>Precio</th>
                    <th>Moneda</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>
                            <a href="{{ url('/ListBuyingBooks', $book->isbn) }}"><b>{{ $book -> titulo }}</b></a>
                        </td>
                        <td>
                            {{ $book -> genero }}
                        </td>
                        <td>
                            {{ $book -> precio }}
                        </td>
                        <td>
                            {{ $book -> moneda }}
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

<!-- Content End -->
@endsection