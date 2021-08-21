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
    Route::get('/{id}/update', ["App\Http\Controllers\CourseController", 'update'])->name('course.update');
    Route::post('/{id}/delete', ["App\Http\Controllers\CourseController", 'delete'])->name('course.delete');
    Route::post('/save', ["App\Http\Controllers\CourseController", 'store'])->name('course.store');
    Route::get('/index', ["App\Http\Controllers\CourseController", 'index'])->name('course.index');
});

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
