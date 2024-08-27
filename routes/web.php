<?php

use App\Http\Controllers\DishController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\OrderEntryController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupplierController;

Route::get('/', function () {
    return view('start');
})->name('start');

Route::prefix('lieferanten')->group(function () {
    Route::get('/', [SupplierController::class, 'index'])->name('lieferanten');
    Route::get('/create', [SupplierController::class, 'create'])->name('lieferanten.create');
    Route::post('/store', [SupplierController::class, 'store'])->name('lieferanten.store');
    Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('lieferanten.edit');
    Route::post('/update/{id}', [SupplierController::class, 'update'])->name('lieferanten.update');
    Route::get('/delete/{id}', [SupplierController::class, 'delete'])->name('lieferanten.delete');
});

Route::prefix('gerichte')->group(function () {
    Route::get('/', [DishController::class, 'index'])->name('gerichte');
    Route::get('/create', [DishController::class, 'create'])->name('gerichte.create');
    Route::post('/store', [DishController::class, 'store'])->name('gerichte.store');
    Route::get('/edit/{id}', [DishController::class, 'edit'])->name('gerichte.edit');
    Route::post('/update/{id}', [DishController::class, 'update'])->name('gerichte.update');
    Route::get('/delete/{id}', [DishController::class, 'delete'])->name('gerichte.delete');
});

Route::prefix('bestellungen')->group(function () {
    Route::get('/mitbestellen', [OrderEntryController::class, 'create'])->name('mitbestellen');
    Route::post('/mitbestellen', [OrderEntryController::class, 'store'])->name('mitbestellen.store');

    Route::get('/', [OrderController::class, 'index'])->name('bestellungen');
});
