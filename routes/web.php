<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WhoController;


Route::get('/', function () {
    return view('land');
});

Route::get('who');
Route::get('/who', [WhoController::class, 'view'])->name('whoweare');
