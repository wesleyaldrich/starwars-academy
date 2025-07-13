<?php

use App\Http\Controllers\CourseController;
use Illuminate\Support\Facades\Route;

// Route::get('/', [CourseController::class, 'index'])->name('course');
Route::resource('course', CourseController::class);

Route::get('/', function(){
    return redirect()->route('course.index');
});