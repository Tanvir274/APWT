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
    return view('pages.welcome');
});

//Route::get('/first',function(){return "Hello ,Hou are you??";});

Route::get('/product',[ProductController::class,'Product'])->name('product');
Route::get('/home',[ProductController::class,'Home'])->name('home');
Route::post('/product/submit',[ProductController::class,'ProductSubmit'])->name('product.submit');
Route::get('/list',[ProductController::class,'ProductList'])->name('list');
Route::get('/edit/{id}',[ProductController::class,'ProductEdit'])->name('edit');

