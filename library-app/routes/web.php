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

Route::get('Book', [\App\Http\Controllers\Book\showController::class, 'show'])->name('book');
Route::get('Manager', [\App\Http\Controllers\Manager\showController::class, 'show'])->name('manager');
Route::get('Staff', [\App\Http\Controllers\Staff\showController::class, 'show'])->name('staff');

