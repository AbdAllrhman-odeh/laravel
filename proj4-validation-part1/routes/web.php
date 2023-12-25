<?php

use App\Http\Controllers\userController;
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

Route::get('/',[userController::class,'index']);
Route::post('/login',[userController::class,'login'])->name('login');

Route::get('/register',[userController::class,'registerPage']);
Route::post('/store',[userController::class,'store'])->name('store');

// Route::get('/dashbored',function(){
//     return ('welcome back');
// })->middleware('firstOne');

Route::group(['middleware'=>'firstOne'],function(){
    Route::get('/dashbored',function(){
        return ('welcome back');
    });
});
