<?php

use App\Http\Controllers\AddPhotoController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserProfileController;
use App\Mail\ConfirmationCode;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Route;




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

// home controller
Route::get('/home', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// search controller
Route::get('/search', function () {
    return view('admin.search');
})->middleware(['auth', 'verified'])->name('search');

// reels controller
Route::get('/reels', function () {
    return view('admin.reels');
})->middleware(['auth', 'verified'])->name('reels');

// add Post controller
Route::get('/add-post', function () {
    return view('admin.addPost');
})->middleware(['auth', 'verified'])->name('addPost');

// -->

// dasboard controller
Route::get('/user', function () {
    return view('admin.user');
})->middleware(['auth', 'verified'])->name('user');



Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    Route::post('/add-post', [AddPhotoController::class, 'store'])->name('addPost.store');

    Route::get('/index-user', [UserProfileController::class, 'index'])->name('index.user');

});

require __DIR__.'/auth.php';
