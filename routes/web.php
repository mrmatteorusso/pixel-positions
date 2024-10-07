<?php

use App\Http\Controllers\JobController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('jobs.index');
// });

// Route::get('/', [JobController::class], 'index');
Route::get('/', [JobController::class, 'index']);
