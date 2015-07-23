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
                    <th>Eliminar</th>
                    <th>Modificar Cantidad</th>
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
                            <center>
                            {!! Form::open(['url' => 'ShoppingCart', 'method' => 'DELETE']) !!}

                            {!! Form::hidden('rowid', $book->rowid) !!}

                            {!! Form::submit('Delete', ['class' => 'button alert']) !!}

                            {!! Form::close() !!}
                            </center>
                        </td>
                        <td>
                            <center>
                            {!! Form::open(['url' => 'ShoppingCart', 'method' => 'PUT']) !!}

                            {!! Form::label('cantidad', 'New Quantity: ') !!}
                            {!! Form::text('cantidad') !!}

                            {!! Form::hidden('rowid', $book->rowid) !!}
                            
                            {!! Form::submit('Modify', ['class' => 'button round info']) !!}

                            {!! Form::close() !!}

                            @if ($errors->any())
                                <ul style="color:red">
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            @endif
                            </center>
                        </td>
                    </tr>
                @endforeach
                <tr>

                </tr>
            </tbody>
        </table>

<!-- Content End -->
@endsection