<?php

use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Mail\ConfirmationCode;
use Illuminate\Support\Facades\Mail;
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

Route::get('/login', function () {
    return view('auth.login');
});
Route::get('/register-step1', [RegisteredUserController::class, 'showStep1'])->name('register.step1');
Route::post('/register-step1', [RegisteredUserController::class, 'handleStep1'])->name('register.step1.post');

Route::get('/register-otp', [RegisteredUserController::class, 'ShowotpControll'])->name('register.otp');
Route::post('/register-otp', [RegisteredUserController::class, 'HandleOtpControll'])->name('register.otp.post');

Route::get('/register-step2', [RegisteredUserController::class, 'showStep2'])->name('register.step2');
Route::post('/register-step2', [RegisteredUserController::class, 'handleStep2'])->name('register.step2.post');

// Route::get('/test-email', function () {
//     $code = rand(100000, 999999);
//     Mail::to('private_a.a.c@icloud.com')->send(new ConfirmationCode($code));
//     return 'Test email sent!';
// });


Route::get('/home', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/search', function () {
    return view('admin.search');
})->middleware(['auth', 'verified'])->name('search');
Route::get('/reels', function () {
    return view('admin.reels');
})->middleware(['auth', 'verified'])->name('reels');
Route::get('/add-post', function () {
    return view('admin.addPost');
})->middleware(['auth', 'verified'])->name('addPost');
Route::get('/user', function () {
    return view('admin.user');
})->middleware(['auth', 'verified'])->name('user');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
