<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DonationController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('checkout', [DonationController::class, 'donation_checkout']);
Route::get('checkout_success', [DonationController::class, 'donation_checkout_success'])->name('checkout.success');
