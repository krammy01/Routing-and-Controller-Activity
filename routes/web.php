<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutMeController;
use App\Http\Controllers\SkillsController;
use App\Http\Controllers\HobbiesController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('about-me', function () {
    return view('about-me');
});

Route::get('skills', function () {
    return view('skills');
});

Route::get('/hobbies', function () {
    return view('hobbies');
});

Route::get('/about-me', [AboutMeController::class, 'index'])->name('about-me');
Route::get('/skills', [SkillsController::class, 'index'])->name('skills');
Route::get('/hobbies', [HobbiesController::class, 'index'])->name('hobbies');