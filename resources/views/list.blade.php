@extends('master')
@section('title', 'List of Books')

@section('content')
<!-- Content Start -->
	<h1>List of Books:</h1>
		<hr/>
	<div class ="container" style="width:99%;">
			<table id="table_id" class="display">
		    <thead>
		        <tr>
		            <th>Título</th>
		            <th>Género</th>
		        </tr>
		    </thead>
		    <tfoot>	
		        <tr>
		            <th>Título</th>
		            <th>Género</th>
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
		    		</tr>
		    	@endforeach
		        
		    </tbody>
		</table>
	</div>
		
<!-- Content End -->
@endsection