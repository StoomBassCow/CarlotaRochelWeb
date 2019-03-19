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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/logout', 'HomeController@logout');





Route::resource('inventory','inventoryController');



//Rutas de catálogos


Route::get('products', function () {
    return view('products');
});
Route::get('clients', function () {
    return view('clients');
});
Route::get('kindOfProducts', function () {
    return view('kindOfProducts');
});
Route::get('origin', function () {
    return view('origin');
});
Route::get('providers', function () {
    return view('providers');
});
Route::get('users', function () {		
    return view('users');
});
Route::get('userRoles', function () {
    return view('userRoles');
});


//rutas de procesos administrativos

Route::get('salesDetail', function () {
    return view('salesDetail');
});
Route::get('productsMovements', function () {
    return view('productsMovements');
});
Route::get('cashMovements', function () {
    return view('cashMovements');
});
Route::get('boxCut', function () {
    return view('boxCut');
});
Route::get('inventoryReport', function () {
    return view('inventoryReport');
});