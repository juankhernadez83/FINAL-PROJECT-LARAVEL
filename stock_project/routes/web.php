<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

//referenciando al index, retornando la vista template.blade.php
Route::get('/', function () {
    return view('template');
});


Route::get('/product', [ProductController::class, 'index'])->name('getProducts');
