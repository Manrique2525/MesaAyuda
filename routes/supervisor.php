

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SupervisorController;

Route::resource('supervisores', SupervisorController::class);

Route::get('/supervisores/{supervisor}', [SupervisorController::class, 'show'])->name('supervisores.show');



