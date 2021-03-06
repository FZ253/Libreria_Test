<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    public function home(){
        return view('home');
    }

    public function about(){
        return view('about');
    }

    public function buy(){
        return view('buy');
    }

    public function contact(){
        return view('contact');
    }

    public function cashPay(){
        return view('cashPay');
    }

    public function cardPay(){
        return view('cardPay');
    }
}
