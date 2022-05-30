<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| Web Routes\
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
Route::get('/ourmenu', function () {
    return view('ourmenu');
});

Route::get('/home', function () {

    return view('home');
});
Route::get('/table', function () {
    return view('table');
});


Route::get('/menu', function () {
    return view('menu');
});
Route::get('/where', function () {
    return view('where');
});
Route::get('/about', function () {
    return view('about');
});
Route::get('/form', function () {
    return view('form');
});

Route::post('store',[ProductController::class,'store'])->name('store');
Route::get('table',[ProductController::class,'table'])->name('table');
route::get('edit/{id}',[ProductController::class,'edit'])->name('edit');
route::post('update/{id}',[ProductController::class,'update'])->name('update');
route::get('delete/{id}',[ProductController::class,'delete'])->name('delete');
