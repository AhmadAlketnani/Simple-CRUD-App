<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return redirect(route('product.index'));
});
Route::get('product', 'productController@index')->name('product.index');
Route::get('product/create', 'productController@create')->name('product.create');
Route::post('product/create', 'productController@save')->name('product.create');
Route::get('product/{product}/edit', 'productController@edit')->name('product.edit');
Route::put('product/{product}/edit', 'productController@update')->name('product.edit');
Route::delete('product/{product}/delete', 'productController@delete')->name('product.delete');


