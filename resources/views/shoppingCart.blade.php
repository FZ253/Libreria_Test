@extends('master')
@section('title', 'Shopping Cart')

@section('content')
<!-- Content Start -->
    <h1>Shopping Cart:</h1>
        <hr/>

    <table id="table_cart" class="display">
            <thead>
                <tr>
                    <th>Título</th>
                    <th>Precio Unitario</th>
                    <th>Moneda</th>
                    <th>Cantidad</th>
                    <th>Precio Total</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>
                            <a href="{{ url('/ListBuyingBooks', $book[0][0]->isbn) }}"><b>{{ $book[0][0] -> titulo }}</b></a>
                        </td>
                        <td>
                            {{ $book[0][0] -> precio }}
                        </td>
                        <td>
                            {{ $book[0][0] -> moneda }}
                        </td>
                        <td>
                            {{ $book[0][1] }}
                        </td>
                        <td>
                            <center> {{ $book[0][1] * ($book[0][0] -> precio) }} </center>
                        </td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>

<!-- Content End -->
@endsection