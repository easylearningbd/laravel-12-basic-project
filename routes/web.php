<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ReviewController;

Route::get('/', function () {
    return view('home.index');
});

Route::get('/dashboard', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/admin/logout', [AdminController::class, 'AdminLogout'])->name('admin.logout');
Route::post('/admin/login', [AdminController::class, 'AdminLogin'])->name('admin.login');

Route::get('/verify', [AdminController::class, 'ShowVerification'])->name('custom.verification.form');

Route::post('/verify', [AdminController::class, 'VerificationVerify'])->name('custom.verification.verify');


Route::middleware('auth')->group(function () {

Route::get('/profile', [AdminController::class, 'AdminProfile'])->name('admin.profile');
Route::post('/profile/store', [AdminController::class, 'ProfileStore'])->name('profile.store');
Route::post('/admin/password/update', [AdminController::class, 'PasswordUpdate'])->name('admin.password.update');

});


Route::middleware('auth')->group(function () {

Route::controller(ReviewController::class)->group(function(){
    Route::get('/all/review', 'AllReview')->name('all.review');
    Route::get('/add/review', 'AddReview')->name('add.review');
    Route::post('/store/review', 'StoreReview')->name('store.review');

});



});

