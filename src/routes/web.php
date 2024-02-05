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

Route::get('/', [\App\Http\Controllers\Shared\Home\HomeController::class, 'index'])->name('home');
Route::get('/tasks', [\App\Http\Controllers\Shared\Task\TaskController::class, 'index'])->name('tasks');
Route::get('/volunteers', [\App\Http\Controllers\Shared\Volunteer\VolunteerController::class, 'index'])->name('volunteers');

Route::group(['prefix' => 'account'], function () {
    Route::get('/', [\App\Http\Controllers\Account\Profile\ProfileController::class, 'index'])->name('account');
    Route::get('/settings', [\App\Http\Controllers\Account\Profile\ProfileController::class, 'settings'])->name('settings');
    Route::resource('/tasks', \App\Http\Controllers\Account\Task\TaskController::class);
});
