<?php

use App\Http\Controllers\Animales;
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

Route::get('/',[Animales::class, 'index']) ->name('animales.index');
Route::get('/agregar',[Animales::class,'create'])->name('animales.create');
Route::post('/store',[Animales::class,'store'])->name('animales.store');
Route::get('/edit/{id}',[Animales::class,'edit'])->name('animales.edit');
Route::put('/update/{id}',[Animales::class,'update'])->name('animales.update');
Route::delete('/destrory/{id}',[Animales::class,'destroy'])->name('animales.destroy');
