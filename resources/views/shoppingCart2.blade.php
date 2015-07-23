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
                    <th>Precio Unitario</th>
                    <th>Cantidad</th>
                    <th>Subtotal</th>
                    
                </tr>
            </thead>
            <tbody>
                @foreach($contenido as $book)
                    <tr>
                        <td>
                            <center>{{ $book -> name }}</center>
                        </td>
                        <td>
                            <center>{{ $book -> price }}</center>
                        </td>
                        <td>
                            <center>{{ $book -> qty }}</center>
                        </td>
                        <td>
                            <center>{{ $book -> subtotal }}</center>
                        </td>
                        <td>
                            <center>{{ $book -> subtotal }}</center>
                        </td>
                    </tr>
                @endforeach
                <tr>

                </tr>
            </tbody>
        </table>

<!-- Content End -->
@endsection