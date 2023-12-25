<?php

use App\Http\Controllers\studentController;
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

Route::get('/',[studentController::class,'index']);

Route::get('/store',[studentController::class,'store'])->name('store');

Route::get('/destroy/{id}',[studentController::class,'destroy']);

Route::get('/edit/{id}',[studentController::class,'edit']);
Route::post('/update/{id}',[studentController::class,'update'])->name('update');