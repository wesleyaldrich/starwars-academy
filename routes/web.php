<?php

use App\Http\Controllers\ChangeLanguageController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\HeroExistMiddleware;
use App\Http\Middleware\SetLanguageMiddleware;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Symfony\Component\HttpKernel\Profiler\Profile;

Auth::routes();

Route::middleware([SetLanguageMiddleware::class, 'auth'])->group(function(){
    Route::get('/', [CourseController::class, 'index'])->name('indexCourse');
    Route::get('/course/{id}', [CourseController::class, 'show'])->name('showCourse');
    Route::get('/create', [CourseController::class, 'create'])->name('createCourse');
    Route::post('/create', [CourseController::class, 'store'])->name('storeCourse');
    Route::get('/course/edit/{id}', [CourseController::class, 'edit'])->name('editCourse');
    Route::post('/course/edit/{id}', [CourseController::class, 'update'])->name('updateCourse');
    Route::delete('/course/delete/{id}', [CourseController::class, 'destroy'])->name('deleteCourse');
    Route::post('/lang', ChangeLanguageController::class)->name('changeLanguage');
    Route::get('/create-hero', [ProfileController::class, 'createHero'])->name('hero.create');
    Route::post('/create-hero', [ProfileController::class, 'storeHero'])->name('hero.store');

    Route::get('/profile', [ProfileController::class, 'show'])->name('profile')->middleware(HeroExistMiddleware::class);
});
