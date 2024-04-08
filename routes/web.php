<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MasterController;


Route::get('/', function () {
    return view('land');
});

Route::get('who');
//Route::get('/who', [MasterController::class, 'WhoWeAre'])->name('whoweare');
Route::view('who', 'who-we-are')->name('whoweare');

Route::view('/projects', 'all-projects')->name('projects');
Route::view('/contact', 'contact');
