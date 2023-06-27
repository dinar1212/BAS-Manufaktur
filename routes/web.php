<?php

use App\Http\Controllers\BenangController;
use App\Http\Controllers\SupplierController;
use App\Http\Controllers\PurchaseOrderController;
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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::middleware(['auth', 'web'])->group(function () {

    // route Master data
    Route::resource('benang', BenangController::class);
    Route::resource('supplier', SupplierController::class);
    // route Pemebelian
    Route::resource('purchaseorder', PurchaseOrderController::class);

});