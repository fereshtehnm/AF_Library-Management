<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\Book;
use App\Http\Controllers\Book\ShowController as BookShowController;
use App\Http\Controllers\Staff\DeleteController;
use App\Http\Controllers\Staff\ShowController as StaffShowController;
use App\Http\Controllers\Manager\ShowController as ManagerShowController;
use App\Http\Controllers\Staff\CreateController as StaffCreateController;
use App\Http\Controllers\Book\CreateController as BookCreateController;

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [BookShowController::class, 'show'])->name('home');
Route::get('book', [BookShowController::class,'show'])->name('book');
Route::get('staff', [StaffShowController::class,'show'])->name('staff');
Route::get('manager', [ManagerShowController::class,'show'])->name('manager');

Route::prefix('staff')->group(function () {
    Route::get('/create', [StaffCreateController::class, 'create'])->name('staff.create');
    Route::post('/store', [StaffCreateController::class, 'store'])->name('staff.store');
    Route::get('/index', [StaffCreateController::class, 'index'])->name('staff.index');
    Route::delete('/delete/{staff}', [DeleteController::class, 'delete'])->name('staff.delete');
    Route::get('/register', [AuthController::class, 'showStaffRegistrationForm'])->name('staff.register');
    Route::post('/register', [AuthController::class, 'registerStaff']);

    Route::get('/login', [AuthController::class, 'showStaffLoginForm'])->name('staff.login');
    Route::post('/login', [AuthController::class, 'loginStaff']);
});

Route::prefix('book')->group(function () {
    Route::get('/create', [BookCreateController::class, 'create'])->name('book.create');
    Route::post('/store', [BookCreateController::class, 'store'])->name('book.store');
    Route::get('/index', [BookCreateController::class, 'index'])->name('book.index');
    Route::get('/edit/{id}', [BookCreateController::class, 'edit'])->name('book.edit');
    Route::put('/update/{id}', [BookCreateController::class, 'update'])->name('book.update');


});


Route::get('/register', [AuthController::class, 'showUserRegistrationForm'])->name('user.register');
Route::post('/register', [AuthController::class, 'registerUser']);

Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'loginUser']);


require __DIR__.'/auth.php';
