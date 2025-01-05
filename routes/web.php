<?php

use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\NewsletterController;
use App\Http\Controllers\ReservationController;


Route::get('/',[HotelController::class,'reservationPage'])->name('reservation');
Route::get('home', [HotelController::class,'home'])->name('home');
Route::get('contact', [HotelController::class,'contact'])->name('contact');
Route::get('about', [HotelController::class,'about'])->name('about');
Route::get('blog', [HotelController::class,'blog'])->name('blog');
Route::get('rooms', [HotelController::class,'rooms'])->name('rooms');
Route::post('store', [HotelController::class, 'store'])->name('store');

Route::post('newsletter', [NewsletterController::class, 'register'])->name('news.register');
Route::post('contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('mail', [HotelController::class, 'mail']);
Route::post('/reservation', [ReservationController::class, 'sendConfirmation'])->name('reservation.send');