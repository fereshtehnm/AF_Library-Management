<?php


use App\Http\Controllers\AuthController;
use App\Http\Controllers\Book;
use App\Http\Controllers\Book\ShowController as BookShowController;
use App\Http\Controllers\Book\CreateController as BookCreateController;
use App\Http\Controllers\Book\editController as BookEditController;
use App\Http\Controllers\Book\DeleteController as BookDeleteController;

use App\Http\Controllers\Staff\ShowController as StaffShowController;
use App\Http\Controllers\Staff\CreateController as StaffCreateController;
use App\Http\Controllers\Staff\editController as StaffEditController;
use App\Http\Controllers\Staff\UpdateController as StaffUpdateController;

use App\Http\Controllers\Staff\DeleteController as StaffDeleteController;

use App\Http\Controllers\Manager\ShowController as ManagerShowController;

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
Route::get('manager', [ManagerShowController::class, 'show'])->name('manager');

Route::get('staff', [StaffShowController::class, 'show'])->name('staff');
Route::prefix('staff')->group(function () {
    Route::get('/create', [StaffCreateController::class, 'create'])->name('staff.create');
    Route::post('/store', [StaffCreateController::class, 'store'])->name('staff.store');
    Route::get('/index', [StaffCreateController::class, 'index'])->name('staff.index');
    Route::get('/edit/{id}', [StaffEditController::class, 'edit'])->name('staff.edit');
    Route::put('/update/{id}', [StaffUpdateController::class, 'update'])->name('staff.update');
    Route::delete('/delete/{staff}', [StaffDeleteController::class, 'delete'])->name('staff.delete');
    //staff auth
    Route::get('/register', [AuthController::class, 'showStaffRegistrationForm'])->name('staff.register');
    Route::post('/register', [AuthController::class, 'registerStaff']);
    Route::get('/login', [AuthController::class, 'showStaffLoginForm'])->name('staff.login');
    Route::post('/login', [AuthController::class, 'loginStaff']);
});

Route::get('book', [BookShowController::class, 'show'])->name('book');
Route::prefix('book')->group(function () {
    Route::get('/create', [BookCreateController::class, 'create'])->name('book.create');
    Route::post('/store', [BookCreateController::class, 'store'])->name('book.store');
    Route::get('/index', [BookCreateController::class, 'index'])->name('book.index');
    Route::get('/edit/{id}', [BookEditController::class, 'edit'])->name('book.edit');
    Route::put('/update/{id}', [BookEditController::class, 'update'])->name('book.update');
    Route::delete('/delete/{book}', [BookDeleteController::class, 'delete'])->name('book.delete');
});


Route::get('/register', [AuthController::class, 'showUserRegistrationForm'])->name('user.register');
Route::post('/register', [AuthController::class, 'registerUser']);

Route::get('/login', [AuthController::class, 'showUserLoginForm'])->name('user.login');
Route::post('/login', [AuthController::class, 'loginUser']);


require __DIR__ . '/auth.php';
