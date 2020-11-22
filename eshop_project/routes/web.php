<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/product', function () {
    return view('contents.product');
});

//Route::get('/login', 'LoginController@create');
//Route::post('/login', 'LoginController@store');
Route::get('/login', 'LoginController@show');
Route::get('/registration', 'RegistrationController@show');
Route::post('/registration', 'RegistrationController@store');
Route::get('/checkout', 'CheckoutController@show');
Route::get('/checkout2', 'Checkout2Controller@show');
Route::get('/list', 'ProductListController@show');
Route::get('/cart', 'CartController@show');

 Route::resource('/', 'ItemController');
 //Route::get('/product',  'App\Http\Controllers\ItemController')
