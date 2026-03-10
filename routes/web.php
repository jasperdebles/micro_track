<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\WeatherController;

// Route::view('/', 'welcome')->name('home'); 
Route::redirect('/', '/dashboard')->name('home');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::view('dashboard', 'dashboard')->name('dashboard');
    Route::get('weather', [WeatherController::class, 'index'])->name('weather');
    Route::get(uri: 'tasks', action: [TaskController::class, 'tasks'])->name('tasks');
    Route::get(uri: 'nutrition', action: [NutritionController::class, 'nutrition'])->name('nutrition');
});

// Route::resource('weather', WeatherController::class);

require __DIR__.'/settings.php';