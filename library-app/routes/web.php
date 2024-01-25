<?php


use App\Http\Controllers\Book;
use App\Http\Controllers\Book\ShowController as BookShowController;
use App\Http\Controllers\Staff\ShowController as StaffShowController;
use App\Http\Controllers\Manager\ShowController as ManagerShowController;

use App\Http\Controllers\ProfileController;
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



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route::get('Manager', [showController::class,'show']);
Route::get('/', [BookShowController::class, 'show']);
Route::get('book', [BookShowController::class,'show'])->name('book');
Route::get('staff', [StaffShowController::class,'show'])->name('staff');
Route::get('manager', [ManagerShowController::class,'show'])->name('manager');

// Route::get('manager', [\App\Http\Controllers\Manager\showController::class,'show'])->name('manager');


require __DIR__.'/auth.php';
