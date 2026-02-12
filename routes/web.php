<?php
use App\Http\Controllers\TourController;
use Illuminate\Support\Facades\Route;
Route::get('/tours', [TourController::class, 'index']);
Route::get('/tours/{id}', [TourController::class, 'show']);
Route::post('/tours/{id}/apply',[TourController::class, 'show']);

