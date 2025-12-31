<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MemberController;

// Default route shows splashscreen
Route::get('/', function () {
    return view('splashscreen');
})->name('splash');

// Welcome page after splash
Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

// Transport page 
Route::get('/transport', function () {
    return view('transport');
})->name('transport');

// Contact us page
Route::get('/contactus', function () {
    return view('contactus');
})->name('contact');

// Complaint page
Route::get('/complaint', function () {
    return view('complaint');
})->name('complaint');

// Complaints page (new)
Route::get('/complaints', function () {
    return view('complaints');
})->name('complaints');

// Executive members page
Route::get('/executives', function () {
    return view('executives');
})->name('executives');

// Gallery page
Route::get('/gallery', function () {
    return view('gallery');
})->name('gallery');

// Developer page
Route::get('/developer', function () {
    return view('developer');
})->name('developer');

// Members routes
Route::get('/members', [MemberController::class, 'index'])->name('members.index');
Route::post('/membership/store', [MemberController::class, 'store'])->name('membership.store');