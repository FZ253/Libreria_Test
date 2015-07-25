<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', 'PagesController@home');

Route::get('about', 'PagesController@about');

Route::get('contact', 'PagesController@contact');

Route::get('book/list', 'BooksController@listBooks');

Route::post('book/list/{isbn}', 'BooksController@updateQuantity');

Route::post('book/list', 'BooksController@storeBook');

Route::get('book/new', 'BooksController@newBooks');

Route::get('book/list/{isbn}', 'BooksController@specificBook');

Route::get('book/add', 'BooksController@addBooks');

Route::get('book/add/{isbn}', 'BooksController@addSpecificBook');

Route::get('book/buy/list', 'BuyingController@listbooks');

Route::get('book/buy/list/{isbn}', 'BuyingController@detailBook');

Route::put('cart', 'BuyingController@shoppingCartPut');

Route::delete('cart', 'BuyingController@shoppingCartDelete');

Route::post('cart', 'BuyingController@shoppingCartPost');

Route::get('cart', 'BuyingController@shoppingCartGet');

Route::get('payment/form', 'BuyingController@checkout');

Route::post('payment/close', 'BuyingController@payment');

Route::post('payment/close/cash', 'BuyingController@cashPay');

Route::post('payment/close/card', 'BuyingController@cardPay');

Route::post('payment/close/{id}', ['as' => 'close', 'uses' => 'BuyingController@payment']);

Route::get('payment/close/cash', ['as' => 'closeCash', 'uses' => 'PagesController@cashPay']);

Route::get('payment/close/card', ['as' => 'closeCard', 'uses' => 'PagesController@cardPay']);

Route::post('finish/card', 'BuyingController@cardPay');

Route::post('finish/cash', 'BuyingController@cashPay');

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');