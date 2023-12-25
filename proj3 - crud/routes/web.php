<?php

use App\Http\Controllers\homeController;
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

Route::get('/index',[homeController::class,'indexPage']);

Route::post('/addColumn',[homeController::class,'addColumn'])->name('addColumn');

Route::get('/delete/{theatreModel}',[homeController::class,'deleteFunction'])->name('delete');

Route::get('/edit/{id}',[homeController::class,'editPage']);
Route::post('/editFunction/{id}',[homeController::class,'editFunction'])->name('editFunction');