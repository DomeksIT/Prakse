<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TourController;

Route::get('/admin/bookings',[TourController::class, 'bookings']);
Route::get('/admin/bookings/{id}/done',[TourController::class, 'done']);
Route::get('/tours', [TourController::class, 'index']);
Route::get('/tours/{id}', [TourController::class, 'show']);
Route::post('/tours/{id}/apply',[TourController::class, 'apply']);

