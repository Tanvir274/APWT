<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

/*Route::get('/contact', function () {
    return view('contact');
});
*/

Route::get('/first',function(){return "Hello ,Hou are you??";}); 

//Route::get('/contact','PageController@contact');//easy way but don't work 8 version
Route::get('/contact',[PageController::class,'contact']);

Route::get('/service',[PageController::class,'service']);



