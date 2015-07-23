@extends('master')
@section('title', 'Add Books')

@section('content')
<!-- Content Start -->
	<h1>List of Books | Add Books to existance:</h1>
		<hr/>

		<table id="table_id" class="display">
		    <thead>
		        <tr>
		            <th>Título</th>
		            <th>Género</th>
		        </tr>
		    </thead>
		    <tbody>
		    	@foreach($books as $book)
		    		<tr>
		    		    <td>
		    		    	<a href="{{ url('book/add', $book->isbn) }}"><b>{{ $book -> titulo }}</b></a>
		    		    </td>
		    		    <td>
		    		    	{{ $book -> genero }}
		    		    </td>
		    		</tr>
		    	@endforeach
		        
		    </tbody>
		</table>
<!-- Content End -->
@endsection