<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gopro;
use App\Http\Controllers\goproo;

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function (){
    Route::get('/home', [App\Http\Controllers\DashboardController::class, 'index']);
});

Route::get('/show',[gopro::class,'index']);
Route::post('insertData',[gopro::class,'store']);
Route::get('delete/{id}',[gopro::class,'destroy']);
Route::any('edit/{id}',[gopro::class,'edit']);
Route::post('update/{id}',[goproo::class,'update']);
Route::get('/show',[gopro::class,'index']);
Route::view('/insert','show');
Route::view('/user','user');
Route::get('/stushow',[goproo::class,'index']);
Route::view('/stushow','student');
Route::get('/stushow',[goproo::class,'index']);
//Route::get('edit/{id}', [goproo::class, 'edit']);
//Route::put('update/{id}', [goproo::class, 'update']);