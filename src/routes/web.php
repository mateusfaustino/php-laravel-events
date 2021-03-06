<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EventController;

Route::get('/',[EventController::class,'index']);
Route::get('/event/{id}',[EventController::class,'show']);
Route::post('/events',[EventController::class,'store']);
Route::get('events/create',[EventController::class,'create']);

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
