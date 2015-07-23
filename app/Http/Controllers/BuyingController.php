<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use DB;
use Request;
use App\Books;
use App\Carts;
use App\Order;
use Carbon\Carbon;
use App\Http\Requests\BuyBooksRequest;

use App\Http\Requests;
use App\Http\Controllers\Controller;
use Illuminate\Database\Eloquent\ModelNotFoundException;            

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

    public function shoppingCartPost(BuyBooksRequest $request){
        $isbn = $request->get('isbn');

        $titulo = $request->get('titulo');

        $precio = $request->get('precio');

        $cantidad = $request->get('cantidad');

        Cart::add($isbn, $titulo, $cantidad, $precio);

        return redirect()->action('BuyingController@shoppingCartGet');
    }

    public function shoppingCartGet(){
        $contenido = Cart::content();
        $precio = Cart::total();

        $carro = array($contenido, $precio);
        return view('shoppingCart2')->with('carro' ,$carro);
    }
    
    public function shoppingCartDelete(){
    //public function shoppingCartDelete(BuyBooksRequest $request){
        $rowid = Request::get('rowid');

        Cart::remove($rowid);

        return redirect()->action('BuyingController@shoppingCartGet');
    }

    public function shoppingCartPut(BuyBooksRequest $request){
        $rowid = $request->get('rowid');
        $cant = $request->get('cantidad');

        Cart::update($rowid, $cant);

        return redirect()->action('BuyingController@shoppingCartGet');
    }

    public function checkout(){
        $user = "guest"; //Hacer dinámico tras implementar sistema de usuarios
        $price = Request::get('price');

        $cart=Carts::create(['username' => $user, 'bought_at' => Carbon::now(), 'price' => $price]);

        //Creando orden de compra:
        $currentCart = Cart::content();

        //dd($currentCart);

        foreach ($currentCart as $element){
            Order::create(['id_cart' => $cart->id, 'isbn' => $element->id, 'cantidad' => $element->qty, 'subtotal' => $element->subtotal]);
        }

        Cart::destroy();
        
        return view('about');
    }

/*
    public function shoppingCartPost(BuyBooksRequest $request){
        $isbn = $request->input('isbn');

        //$book = Books::where('isbn', $isbn)->firstOrFail(); 

        $quantity = $request->get('cantidad');   

        //Arreglo para almacenar elementos a guardar:
        $book = Books::where('isbn', $isbn)->firstOrFail();
        $arreglo = array($book ,$quantity);
        
        //Uso de Variable de Sesión para carro de compra:
        
        if (count(Session::all()) === 3){
            $contador = 0;
        }else{
            $contador = count(Session::all()) - 3;
        }


        Session::push($contador, $arreglo);

        $booksSession = Session::all(); // Índice de isbn con keys incrementales regulares

        //dd($booksSession);


        $books = array();

        for ($i = 0; $i < (count($booksSession) - 3); $i++){
            array_push($books, ($booksSession[$i]));
        }

        dd($books);

    	return view('shoppingCart')->with('books',$books);
    }
*/



}
