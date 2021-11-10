<?php

use App\Http\Controllers\hola1;
use App\Http\Controllers\hola2;
use Illuminate\Support\Facades\Route;

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

Route::get('/hola1/{a}',[hola1::class,'hola1']);
Route::get('/h1/{a}',[hola1::class,'h1']);


Route::get('/hola2/{a}',[hola2::class,'hola2']);
Route::get('/h2/{a}',[hola2::class,'h2']);
