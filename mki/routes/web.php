<?php

use App\Http\Controllers\FrontController;
use Illuminate\Support\Facades\Route;

Route::get('/', [FrontController::class, 'index'])->name('front.index');

Route::get('/transactions', [FrontController::class, 'transactions'])->name('front.transactions');

Route::post('/transactions/details', [FrontController::class, 'transactions_details'])->name('front.transactions_details');

Route::get('/details/{product:slug}', [FrontController::class, 'details'])->name('front.details');

Route::get('/booking/{product:slug}', [FrontController::class, 'booking'])->name('front.booking');

Route::post('/booking/{product:slug}/save', [FrontController::class, 'booking_save'])->name('front.booking_save');

Route::get('/success-booking/{transaction}', [FrontController::class, 'success_booking'])->name('front.success_booking');

Route::post('/checkout/finish', [FrontController::class, 'checkout_store'])->name('front.checkout_store');

Route::get('/checkout/{product:slug}/payment', [FrontController::class, 'checkout'])->name('front.checkout');

Route::get('/category/{category:slug}', [FrontController::class, 'category'])->name('front.category');

Route::get('/brand/{brand:slug}/products', [FrontController::class, 'brand'])->name('front.brand');

// Route::get('/booking/check', [FrontController::class, 'my_booking'])->name('front.my_booking');