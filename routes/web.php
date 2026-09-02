<?php

use App\Http\Controllers\BookingController;
use App\Http\Controllers\ConsultationRequestController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/industries', [PageController::class, 'industries'])->name('industries');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');

// Hidden from navigation for now, still reachable directly.
Route::get('/knowledge-centre', [PageController::class, 'knowledgeCentre'])->name('knowledge-centre');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');

Route::get('/privacy-policy', [PageController::class, 'privacyPolicy'])->name('privacy-policy');
Route::get('/terms-of-service', [PageController::class, 'termsOfService'])->name('terms-of-service');
Route::get('/cookie-policy', [PageController::class, 'cookiePolicy'])->name('cookie-policy');

Route::get('/booking', [BookingController::class, 'create'])->name('booking');
Route::post('/booking', [BookingController::class, 'store'])->name('booking.store');

Route::post('/consultation-request', [ConsultationRequestController::class, 'store'])->name('consultation-request.store');
