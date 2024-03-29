<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\blogControl;
use App\Models\User;
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

Route::get('/blog/{blog}/edit',[blogControl::class,'edit'])->middleware('auth');
Route::post('add',[blogControl::class,'store']);
Route::post('/add',[blogControl::class,'store'])->name('add');
Route::get('/shop',[PagesController::class,'shop']);
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        
       
        
        return view('dashboard',['blogs'=>auth()->user()->blog]);
    })->name('dashboard');
});
Route::get('/blog/create',[blogControl::class,'create'])->middleware('auth');