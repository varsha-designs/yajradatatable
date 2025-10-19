<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/customer',[CustomerController::class,'index'])->name('customer.index');
Route::get('/customer/export',[CustomerController::class,'export'])->name('customer.export');
Route::get('/customer/create',[CustomerController::class,'create'])->name('customer.create');
Route::get('/customer/{id}/edit',[CustomerController::class,'edit'])->name('customer.edit');
Route::post('/customer/store',[CustomerController::class,'store'])->name('customer.store');
Route::post('/customer/import',[CustomerController::class,'import'])->name('customer.import');
Route::post('/customer/update',[CustomerController::class, 'update'])->name('customer.update');
