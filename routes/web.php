<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\blogControl;
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


Route::get('/',[PagesController::class,'index']);
Route::get('/about',[PagesController::class,'about']);
Route::get('/services',[PagesController::class,'services']);
Route::resource('blog',blogControl::class);
Route::post('add',[blogControl::class,'store']);
Route::post('/add',[blogControl::class,'store']);
Route::get('/shop',[PagesController::class,'shop']);