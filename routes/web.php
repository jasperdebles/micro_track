<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NutritionController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\ExerciseController;

// Route::view('/', 'welcome')->name('home'); 
Route::redirect('/', '/dashboard')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('weather', [WeatherController::class, 'index'])->name('weather');
    Route::get(uri: 'tasks', action: [TaskController::class, 'tasks'])->name('tasks.index');
    Route::get(uri: 'nutrition', action: [NutritionController::class, 'nutrition'])->name('nutrition');
    Route::get(uri: 'exercise', action: [ExerciseController::class, 'exercise'])->name('exercise');
});

require __DIR__.'/settings.php';