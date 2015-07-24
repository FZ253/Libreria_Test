<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;
use DB;
use App\Books;
use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\AddBooksRequest;
use App\Http\Requests\Request;
use App\Http\Controllers\Controller;

class BooksController extends Controller
{
    public function listBooks(){
    	$books = Books::orderBy('genero', 'asc')->get();
    	return view('list')->with('books', $books);
    }

    public function specificBook($isbn){
    	$book = Books::where('isbn', '=', $isbn)->firstOrFail();

    	return view('details')->with('book',$book);
    }

    public function addBooks(){
    	$books = Books::orderBy('genero', 'asc')->get();
        return view('add')->with('books', $books);
    }

    public function newBooks(){
    	return view('create');
    }

    public function storeBook(CreateBookRequest $request){

        Books::create($request->all());

        return redirect('book/list');
    }

    public function addSpecificBook($isbn){
        $book = Books::where('isbn', '=', $isbn)->firstOrFail();

        return view('addbooks')->with('book',$book);
    }

    public function updateQuantity(AddBooksRequest $request){
        $isbn = $request->get('isbn');
        $cantidad = $request->get('cantidad');

        $cantidad2 = DB::table('books')->where('isbn', $isbn)->value('cantidad');

        $book = Books::where('isbn', $isbn)->firstOrFail();

        $book->update(['cantidad' => ($cantidad2 + $cantidad)]);

        DB::commit();

        return redirect('book/list')->with('book',$book);
    }
}
