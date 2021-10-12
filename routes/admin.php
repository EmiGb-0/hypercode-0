<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\Admin\CourseController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\LevelController;
use App\Http\Controllers\Admin\PriceController;

Route::get('', [HomeController::class, 'index'])->middleware('can:Ver dashboard')->name('home');

Route::resource('roles', RoleController::class)->names('roles');

Route::resource('users', UserController::class)->only('index', 'edit', 'update')->names('users');

Route::resource('categories', CategoryController::class)->middleware('can:Opciones de curso')->names('categories');

Route::resource('levels', LevelController::class)->middleware('can:Opciones de curso')->names('levels');

Route::resource('prices', PriceController::class)->middleware('can:Opciones de curso')->names('prices');

Route::get('courses', [CourseController::class, 'index'])->middleware('can:Opciones de curso')->name('courses.index');

Route::get('courses/{course}', [CourseController::class, 'show'])->middleware('can:Opciones de curso')->name('courses.show');

Route::post('courses/{course}/approved', [CourseController::class, 'approved'])->middleware('can:Opciones de curso')->name('courses.approved');

Route::get('courses/{course}/observation', [CourseController::class, 'observation'])->middleware('can:Opciones de curso')->name('courses.observation');

Route::post('courses/{course}/reject', [CourseController::class, 'reject'])->middleware('can:Opciones de curso')->name('courses.reject');

