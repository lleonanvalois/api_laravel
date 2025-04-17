<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CoordController;

Route::post('/coordenadas', [CoordController::class, 'store']);
Route::get('/coordenadas', [CoordController::class, 'index']);

