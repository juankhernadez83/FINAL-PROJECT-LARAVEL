<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\InputController;
use App\Http\Controllers\MeasureController;
use App\Http\Controllers\OutputController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RolController;
use App\Http\Controllers\StockCotroller;
use App\Http\Controllers\SupplierController;
use App\Models\Supplier;

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
Route::get('/formProduct', [ProductController::class, 'viewForm'])->name('formProducts');
Route::post('/saveProduct', [ProductController::class, 'storeProduct'])->name('saveProduct');


Route::get('/supplier', [SupplierController::class, 'index'])->name('getSuppliers');
Route::get('/formSupplier', [SupplierController::class, 'viewForm'])->name('formSuppliers');
Route::post('/saveSupplier', [SupplierController::class, 'storeSupplier'])->name('saveSuppliers');

Route::get('/input', [InputController::class, 'index'])->name('getInput');
Route::get('/formInput', [InputController::class, 'viewForm'])->name('formInput');
Route::post('/saveInput', [InputController::class, 'storeInput'])->name('saveInput');

Route::get('/output', [OutputController::class, 'index'])->name('getOutput');
Route::get('/formOutput', [OutputController::class, 'viewForm'])->name('formOutput');
Route::post('/saveOutput', [OutputController::class, 'storeOutput'])->name('saveOutput');

Route::get('/measure', [MeasureController::class, 'index'])->name('getMeasure');
Route::get('/formMeasure', [MeasureController::class, 'viewForm'])->name('formMeasure');
Route::post('/saveMeasure', [MeasureController::class, 'storeMeasure'])->name('saveMeasure');

Route::get('/stock', [StockCotroller::class, 'index'])->name('getStock');
Route::get('/formStock', [StockCotroller::class, 'viewForm'])->name('formStock');
Route::post('/saveStock', [StockCotroller::class, 'storeStock'])->name('saveStock');

Route::get('/admin', [AdminController::class, 'index'])->name('getAdmin');
Route::get('/formAdmin', [AdminController::class, 'viewForm'])->name('formAdmin');
Route::post('/saveAdmin', [AdminController::class, 'storeAdmin'])->name('saveAdmin');

Route::get('/rol', [RolController::class, 'index'])->name('getRol');
Route::get('/formRol', [RolController::class, 'viewForm'])->name('formRol');
Route::post('/saveRol', [RolController::class, 'storeRol'])->name('saveRol');