<?php

use App\Http\Controllers\customerController;
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
Route::get('/',[customerController::class,'index'])->name('index');
Route::post('/login',[customerController::class,'login'])->name('login');

Route::get('/create',[customerController::class,'create']);
Route::post('/store',[customerController::class,'store'])->name('store');

Route::group(['middleware'=>'firstOne'],function(){
    Route::get('/dashborad',function(){
    return view('dashborad');
    });
});

