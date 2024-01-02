<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('reminders', \App\Http\Livewire\Reminders::class)->name('reminders');
Route::get('add-reminder', \App\Http\Livewire\AddReminder::class)->name('add-reminder');
