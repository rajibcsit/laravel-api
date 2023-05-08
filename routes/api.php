<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


Route::middleware(['auth:sanctum'])->group(function () {
});

Route::resource('course', CourseController::class)->except(['create', 'edit']);

// Route::get('/course', [CourseController::class, 'index']);
// Route::post('/course', [CourseController::class, 'store']);
// Route::get('/course/{id}', [CourseController::class, 'show']);
// Route::post('course/{id}', [CourseController::class, 'update']);
// Route::delete('/course/{id}', [CourseController::class, 'destroy']);
