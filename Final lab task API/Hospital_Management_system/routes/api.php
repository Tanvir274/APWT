<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PatienController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



//Route::get('/',[PatienController::class,'Login'])->name('login');
Route::post('/check',[PatienController::class,'LoginCheck'])->name('login.check');

//Route::get('/registration',[PatienController::class,'Registration'])->name('registration');
Route::post('/registration/submit',[PatienController::class,'RegistrationSubmit']);


Route::get('/home',[PatienController::class,'HomePage'])->middleware('control');
Route::post('/profile',[PatienController::class,'profile'])->middleware('control');
//Route::get('/edit/{id}',[PatienController::class,'EditProfile'])->middleware('control')->name('edit');
Route::post('/resubmit',[PatienController::class,'UpdateProfile'])->middleware('control');


//Route::get('/recovery',[PatienController::class,'Recovery'])->middleware('control')->name('recovery');
Route::post('/recovery/submit',[PatienController::class,'RecoverySubmit']);//->middleware('control')->name('recovery.submit');


Route::get('/logout',[PatienController::class,'Logout'])->middleware('control');



//Route::get('/comment',[PatienController::class,'Comment'])->middleware('control')->name('comment');
Route::post('/comment/submit',[PatienController::class,'CommentSubmit'])->middleware('control');


//Route::get('/admin',[PatienController::class,'Admin']);//->middleware('control')->name('admin');



//pataint process:

//Doctor
//Route::get('/appointment/{id}',[PatienController::class,'Appointment'])->middleware('control')->name('appointment');
Route::post('/appointment/submit',[PatienController::class,'AppointmentSubmit'])->middleware('control');

//Test
//Route::get('/test/{id}',[PatienController::class,'Test'])->middleware('control')->name('test');
Route::post('/test/submit',[PatienController::class,'TestSubmit'])->middleware('control');

//cabin
//Route::get('/cabin/{id}',[PatienController::class,'Cabin'])->middleware('control')->name('cabin');
Route::post('/cabin/submit',[PatienController::class,'CabinSubmit'])->middleware('control');


//Histry
Route::post('/details',[PatienController::class,'Details'])->middleware('control');

// Review
Route::post('/doctor_review',[PatienController::class,'doctor_review'])->middleware('control');
Route::post('/labtest_review',[PatienController::class,'labtest_review'])->middleware('control');
Route::post('/cabin_review',[PatienController::class,'cabin_review'])->middleware('control');


Route::get('/review',[PatienController::class,'allReview'])->middleware('control');




