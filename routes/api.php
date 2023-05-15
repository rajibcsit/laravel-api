<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CourseController;


Route::middleware(['auth:sanctum'])->group(function () {
});

Route::resource('course', CourseController::class)->except(['create', 'edit']);
