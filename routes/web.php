<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('products',[UserController::class,'index'])->name('product.index');
Route::get('products/create',[UserController::class,'create'])->name('product.create');
Route::post('products/store',[UserController::class,'store'])->name('product.store');
Route::get('products/delete/{id}',[UserController::class,'delete'])->name('product.delete');

Route::get('products/edit/{id}',[UserController::class,'edit'])->name('product.edit');
Route::post('products/update/{id}',[UserController::class,'update'])->name('product.update');





