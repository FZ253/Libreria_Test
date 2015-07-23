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

Route::get('Contact', 'PagesController@contact');

Route::get('ListBooks', 'BooksController@listBooks');

Route::post('ListBooks/{isbn}', 'BooksController@updateQuantity');

Route::post('ListBooks', 'BooksController@storeBook');

Route::get('NewBook', 'BooksController@newBooks');

Route::get('ListBooks/{isbn}', 'BooksController@specificBook');

Route::get('AddBooksToInventory', 'BooksController@addBooks');

Route::get('AddBooksToInventory/{isbn}', 'BooksController@addSpecificBook');

Route::get('ListBuyingBooks', 'BuyingController@listbooks');

Route::get('ListBuyingBooks/{isbn}', 'BuyingController@detailBook');

Route::put('ShoppingCart', 'BuyingController@shoppingCartPut');

Route::delete('ShoppingCart', 'BuyingController@shoppingCartDelete');

Route::post('ShoppingCart', 'BuyingController@shoppingCartPost');

Route::get('ShoppingCart', 'BuyingController@shoppingCartGet');



