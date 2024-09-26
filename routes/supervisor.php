<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupervisorController;

// Aquí defines las rutas del recurso 'supervisores'
Route::resource('supervisores', SupervisorController::class)->parameters([
    'supervisores' => 'supervisor',
]);
