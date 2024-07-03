<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/about-me', [AboutMeController::class, 'aboutme']);
Route::get('/skills', [SkillsController::class, 'skills']);
Route::get('/hobbies', [HobbiesController::class, 'hobbies']);