<?php

use App\Http\Controllers\DosenController;
use App\Http\Controllers\MahasiswaController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\WriterController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ArticleController;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutUsController;
use App\Http\Controllers\PopularController;



Route::get('/course', [CourseController::class, 'index'])->name('course.index');
Route::get('/course/{id}', [CourseController::class, 'show'])->name('course.show');

Route::get('/article/{judul}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/writers', [WriterController::class, 'index'])->name('writers.index');
Route::get('/writer/{id}', [WriterController::class, 'show'])->name('writers.show');

    Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::get('/aboutUs', [AboutUsController::class, 'aboutUs'])->name('aboutUs');
Route::get('/popular', [PopularController::class, 'index'])->name('popular.index');