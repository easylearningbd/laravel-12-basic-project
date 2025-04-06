<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Backend\ReviewController;
use App\Http\Controllers\Backend\SliderController;
use App\Http\Controllers\Backend\HomeController;

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
    Route::get('/edit/review/{id}', 'EditReview')->name('edit.review');
    Route::post('/update/review', 'UpdateReview')->name('update.review');
    Route::get('/delete/review/{id}', 'DeleteReview')->name('delete.review');

});

Route::controller(SliderController::class)->group(function(){
    Route::get('/get/slider', 'GetSlider')->name('get.slider'); 
    Route::post('/update/slider', 'UpdateSlider')->name('update.slider'); 
    Route::post('/edit-slider/{id}', 'EditSlider'); 
    Route::post('/edit-features/{id}', 'EditFeatures');
    Route::post('/edit-reviews/{id}', 'EditReview');
    Route::post('/edit-answers/{id}', 'EditAnswers');

});

Route::controller(HomeController::class)->group(function(){
    Route::get('/all/feature', 'AllFeature')->name('all.feature');
    Route::get('/add/feature', 'AddFeature')->name('add.feature');
    Route::post('/store/feature', 'StoreFeature')->name('store.feature');
    Route::get('/edit/feature/{id}', 'EditFeature')->name('edit.feature');
    Route::post('/update/feature', 'UpdateFeature')->name('update.feature');
    Route::get('/delete/feature/{id}', 'DeleteFeature')->name('delete.feature');

});

Route::controller(HomeController::class)->group(function(){
    Route::get('/get/clarifies', 'GetClarifies')->name('get.clarifies'); 
    Route::post('/update/clarifies', 'UpdateClarifies')->name('update.clarifi'); 

});

Route::controller(HomeController::class)->group(function(){
    Route::get('/get/usability', 'GetUsability')->name('get.usability'); 
    Route::post('/update/usability', 'UpdateUsability')->name('update.usability'); 

});

Route::controller(HomeController::class)->group(function(){
    Route::get('/all/connect', 'AllConnect')->name('all.connect');
    Route::get('/add/connect', 'AddConnect')->name('add.connect'); 
    Route::post('/store/connect', 'StoreConnect')->name('store.connect');
    Route::post('/update-connect/{id}', 'UpdateConnect'); 
});

Route::controller(HomeController::class)->group(function(){
    Route::get('/all/faqs', 'AllFaqs')->name('all.faqs');
    Route::get('/add/faqs', 'AddFaqs')->name('add.faqs');
    Route::post('/store/faqs', 'StoreFaqs')->name('store.faqs');
    Route::get('/edit/faqs/{id}', 'EditFaqs')->name('edit.faqs');
    Route::post('/update/faqs', 'UpdateFaqs')->name('update.faqs');
    Route::get('/delete/faqs/{id}', 'DelectFaqs')->name('delete.faqs');
    
});



});

