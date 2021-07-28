<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::prefix('/course')->group(function () {
    Route::get('/create', ["App\Http\Controllers\CourseController", 'create'])->name('course.create');
    Route::post('/create', ["App\Http\Controllers\CourseController", 'store'])->name('course.store');
    Route::get('/index', ["App\Http\Controllers\CourseController", 'index'])->name('course.index');
});

require __DIR__.'/auth.php';
