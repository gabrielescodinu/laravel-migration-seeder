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

Route::get('/', 'PageController@home')->name('home');

Route::get('/uscite', function () {
    $prodotti = '[
        {
            "name": "Prodotto n.1",
            "description": "Lorem Ipsum",
            "price": "60",
        },
    ]';
    return view('uscite', compact('prodotti'));
});

Route::resource('products', 'ProductController');

Route::resource('students', 'StudentController');