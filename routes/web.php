<?php

use App\Http\Controllers\BirthdayController;
use App\Http\Controllers\CakesController;
use App\Http\Controllers\Premade_cakesController;
use App\Http\Controllers\CustomizeController;
use App\Http\Controllers\CartController;

//use App\Http\Controllers\CheckoutController;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');

Route::get('/about', function () {
    return view('about');
});

Route::get('/occassional', function () {
    return view('occassional');
});

// Route::get('/birthday', function () {
//     return view('birthday');
// })->name('birthday');

Route::get('/customize', function () {
    return view('customize');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/cake', function () {
    return view('cake');
});

Route::get('/checkout', function () {
    return view('checkout');
});

Route::get('/success', function () {
    return view('success');
});

Route::get('birthday', [BirthdayController::class, 'index']);
// Route::get('birthday',[Premade_cakesController::class, 'index']);
Route::get('christmas', [BirthdayController::class, 'getChristmas']);
Route::get('graduation', [BirthdayController::class, 'getGraduation']);
Route::get('wedding', [BirthdayController::class, 'getWedding']);
Route::get('valentine', [BirthdayController::class, 'getValentine']);
// Route::post('insert-data', 'customizeController@insert');

Route::post('/customize', 'CustomizeController@addToCart')->name('customize');

Route::get('cart', [CartController::class, 'ViewCart']);
Route::post('/add_cart/{cake_id}', [BirthdayController::class, 'add_cart']);
// Route::post('/add_cart/{cake_id}', [BirthdayController::class,'add_cart']);

// Route::get('/updateCartTotal/{id}', [CartController::class,'updateCartTotal']);
