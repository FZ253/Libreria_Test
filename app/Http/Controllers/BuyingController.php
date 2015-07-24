<?php

namespace App\Http\Controllers;

use Session;
use Cart;
use DB;
use Request;
use App\Books;
use App\Carts;
use App\Order;
use App\OrderDetails;
use App\CardPay;
use App\CashPay;
use Carbon\Carbon;
use App\Http\Requests\BuyBooksRequest;
use App\Http\Requests\PaymentRequest;
use App\Http\Requests\PayRequest;
use App\Http\Requests\CashPayRequest;
use App\Http\Requests\CardPayRequest;

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
        $price = Cart::total();

        Session::put('price', $price);
        
        return view('payment');
    }

    public function payment(PaymentRequest $request){
        Session::put('request', $request->all());

        $tipoPagoRequest = $request->get('tipo_pago');

        return redirect()->route('close', [$tipoPagoRequest]);
    }

    public function cashPay(CashPayRequest $cashRequest) {
        $price = Session::get('price');
        $request = Session::get('request');
        $user = "guest"; //Hacer dinámico tras implementar sistema de usuarios

        $cartQuery = array('username' => $user, 'bought_at' => Carbon::now(), 'price' => Session::get('price'));

        $cart = Carts::create($cartQuery);

        //Creando orden de compra:
            $currentCart = Cart::content();

        foreach ($currentCart as $element){
            Order::create(['id_cart' => $cart->id, 'isbn' => $element->id, 'cantidad' => $element->qty, 'subtotal' => $element->subtotal]);
        }

        $cartID = $cart->id;

        CashPay::create(['id_cart' => $cartID, 'payer_DNI' =>$cashRequest->get('payer_DNI'), 'payer_name' => $cashRequest->get('payer_name'), 'payer_last_name' => $cashRequest->get('payer_last_name')]);
        OrderDetails::create(['id_cart'=>$cartID,'nombres'=>$request['nombres'],'apellidos'=>$request['apellidos'],'dni'=>$request['dni'],'telefono'=>$request['telefono'],'fecha_nacimiento'=>$request['fecha_nacimiento'],'direccion'=>$request['direccion'],'tipo_pago'=>$request['tipo_pago']]);

        Cart::destroy();
        return view('about');
    }

    public function cardPay(CardPayRequest $cardRequest){
        $pass = DB::table('cardData')->where('cardNo', $cardRequest->get('cardNo'))->get()[0]->security_password;
        if ($pass == $cardRequest->security_password){
            $price = Session::get('price');
            $request = Session::get('request');
            $user = "guest"; //Hacer dinámico tras implementar sistema de usuarios

            $cartQuery = array('username' => $user, 'bought_at' => Carbon::now(), 'price' => $price);

            $cart = Carts::create($cartQuery);

            //Creando orden de compra:
                $currentCart = Cart::content();

            foreach ($currentCart as $element){
                Order::create(['id_cart' => $cart->id, 'isbn' => $element->id, 'cantidad' => $element->qty, 'subtotal' => $element->subtotal]);
            }

            $cardNo = $cardRequest->get('cardNo');
            //dd($cardNo);

            CardPay::create(['id_cart' => $cart->id, 'cardNo' => $cardNo]);
        OrderDetails::create(['id_cart'=>$cart->id,'nombres'=>$request['nombres'],'apellidos'=>$request['apellidos'],'dni'=>$request['dni'],'telefono'=>$request['telefono'],'fecha_nacimiento'=>$request['fecha_nacimiento'],'direccion'=>$request['direccion'],'tipo_pago'=>$request['tipo_pago']]);
        Cart::destroy();
        }else{
            Session::flash('flash_message', 'Check your Card Numer and Password.');
        } 

        return view('about');
    }

}
