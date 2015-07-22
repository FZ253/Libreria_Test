<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Books;
use App\Http\Requests\BuyBooksRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class BuyingController extends Controller
{
    public function listBooks(){
    	$books = Books::orderBy('genero', 'asc')->get();
    	return view('listBuy')->with('books', $books);
    }

    public function detailBook($isbn){
    	$book = Books::where('isbn', $isbn)->firstOrFail();

    	return view('detailsBuy')->with('book',$book);
    }

    public function shoppingCart(BuyBooksRequest $request){
   // public function shoppingCart(){
        //$cantidad = $request->get('cantidad');
        $isbn= $request->input('isbn');
        $book = Books::where('isbn', $isbn)->firstOrFail();
        $booksArray = array();
        array_push($booksArray, $book);

    	return view('shoppingCart');
    }

}
