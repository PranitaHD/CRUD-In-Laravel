<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::get('product', function () {
    return view('form');
});

Route::post('create',[ProductController::class, 'create']);

Route::get('product/show',[ProductController::class, 'show'])->name('product.show');

Route::get('edit/{id}',[ProductController::class, 'edit'])->name('product.edit');

Route::post('update/{id}',[ProductController::class, 'update']);

Route::get('delete/{id}',[ProductController::class, 'delete']);