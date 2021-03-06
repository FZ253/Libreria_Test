@extends('master')
@section('title', 'Buying books')

@section('content')
<!-- Content Start -->
	<h1>Buying books:</h1>
		<hr/>
	<div class ="container" style="width:99%;">
		<table id="table_id" class="display">
		    <thead>
		        <tr>
		            <th>Título</th>
		            <th>Género</th>
		            <th>Precio</th>
		            <th>Moneda</th>
		            <th>Disponibles</th>
		        </tr>
		    </thead>
		    <tfoot>
		        <tr>
		            <th>Título</th>
		            <th>Género</th>
		            <th>Precio</th>
		            <th>Moneda</th>
		            <th>Disponibles</th>
		        </tr>
		    </tfoot>
		    <tbody>
		    	@foreach($books as $book)
		    		<tr>
		    		    <td>
		    		    	<a href="{{ url('book/buy/list', $book->isbn) }}"><b>{{ $book -> titulo }}</b></a>
		    		    </td>
		    		    <td>
		    		    	{{ $book -> genero }}
		    		    </td>
		    		    <td>
		    		    	{{ $book -> precio }}
		    		    </td>
		    		    <td>
		    		    	Nuevos Soles<!--{{ $book -> moneda }}-->
		    		    </td>
		    		    <td>
		    		    	<center>{{ $book -> cantidad }}</center>
		    		    </td>
		    		</tr>
		    	@endforeach
		        
		    </tbody>
		</table>
	</div>
<!-- Content End -->
@endsection