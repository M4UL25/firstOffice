<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\CityController;
use App\Http\Controllers\Api\OfficeSpaceController;
use App\Http\Controllers\Api\BookingTransactionController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');


// Rute endpoint
// CityController
Route::get('/city/{city:slug}', [CityController::class, 'show']);
Route::apiResource('/cities', CityController::class);

//OfficeSpaceController
Route::get('/office/{officeSpace:slug}', [OfficeSpaceController::class, 'show']);
Route::apiResource('/offices', OfficeSpaceController::class);

//BookingTransactionController
Route::post('/booking-transaction', [BookingTransactionController::class, 'store']); // untuk penyimpanan data
Route::post('/check-booking', [BookingTransactionController::class, 'booking_details']); // untuk memeriksa data oleh customer
