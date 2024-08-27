<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LieferantenController;

Route::get('/', function () {
    return view('start  ');
})->name('start');

Route::prefix('lieferanten')->group(function () {
    Route::get('/', [LieferantenController::class, 'index'])->name('lieferanten');
    Route::get('/create', [LieferantenController::class, 'create'])->name('lieferanten.create');
    Route::post('/store', [LieferantenController::class, 'store'])->name('lieferanten.store');
    Route::get('/edit/{id}', [LieferantenController::class, 'edit'])->name('lieferanten.edit');
    Route::post('/update/{id}', [LieferantenController::class, 'update'])->name('lieferanten.update');
    Route::get('/delete/{id}', [LieferantenController::class, 'delete'])->name('lieferanten.delete');
});

Route::prefix('gerichte')->group(function () {
    Route::get('/', [GerichteController::class, 'index'])->name('gerichte');
    Route::get('/create', [GerichteController::class, 'create'])->name('gerichte.create');
    Route::post('/store', [GerichteController::class, 'store'])->name('gerichte.store');
    Route::get('/edit/{id}', [GerichteController::class, 'edit'])->name('gerichte.edit');
    Route::post('/update/{id}', [GerichteController::class, 'update'])->name('gerichte.update');
    Route::get('/delete/{id}', [GerichteController::class, 'delete'])->name('gerichte.delete');
});

Route::prefix('bestellungen')->group(function () {
    Route::get('/mitbestellen', [BestellungenController::class, 'index'])->name('mitbestellen');
    Route::post('/mitbestellen', [BestellungenController::class, 'store'])->name('mitbestellen.store');

    Route::get('/', [BestellungenController::class, 'index'])->name('bestellungen');
});
