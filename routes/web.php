<?php

use App\Http\Controllers\EquipmentController;
use Illuminate\Support\Facades\Route;

Route::get('/inventory', [EquipmentController::class, 'index']);
