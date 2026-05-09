<?php

use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/', [EquipmentController::class, 'index'])->name('index');
Route::get('/create', [EquipmentController::class, 'create']);
Route::post('/', [EquipmentController::class, 'store']);
Route::delete('/{id}', [EquipmentController::class, 'destroy'])->name('destroy');
Route::get('/{id}/edit', [EquipmentController::class, 'edit'])->name('edit');
Route::put('/{id}', [EquipmentController::class, 'update'])->name('update');
