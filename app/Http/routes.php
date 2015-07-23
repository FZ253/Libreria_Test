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

Route::post('about', 'BuyingController@checkout');

