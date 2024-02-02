<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Auth::routes();

Route::get('/', [\App\Http\Controllers\Home\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [\App\Http\Controllers\Task\TaskController::class, 'index'])->name('tasks');
Route::get('/volunteers', [\App\Http\Controllers\Volunteer\VolunteerController::class, 'index'])->name('volunteers');
Route::get('/dashboard', [\App\Http\Controllers\Profile\ProfileController::class, 'index'])->name('dashboard');
