<?php

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

Route::get('/', 'DashboardController@index')->name('dashboard');

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');

Route::get('products/{id}/gallery', 'ProductController@gallery')
    ->name('products.gallery');
Route::resource('products', 'ProductController');

Route::resource('product-galleries', 'ProductGalleryController');

Route::get('transactions/{id}/set-status', 'TransactionController@setStatus')
    ->name('transactions.status');
Route::resource('transactions', 'TransactionController');

Auth::routes();

Route::get('/register', function() {
    return redirect('/login');
});

Route::post('/register', function() {
    return redirect('/login');
});
Route::get('/home', 'HomeController@index')->name('home');
