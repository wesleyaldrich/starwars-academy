<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', [CourseController::class, 'index']);
Route::get('/create', [CourseController::class, 'create'])->name('createCourse');
Route::post('/create', [CourseController::class, 'store'])->name('storeCourse');
