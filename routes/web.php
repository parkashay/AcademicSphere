<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CoursesPageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsPageController;
use App\Models\Course;
use App\Models\Staff;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', [HomeController::class, 'index']);
Route::get('/about', [AboutPageController::class, 'index']);
Route::get('/courses', [CoursesPageController::class, 'index']);
Route::get('/events', [EventPageController::class, 'index']);
Route::get('/posts', [PostsPageController::class, 'index']);
Route::get('/posts/single/{id}', [PostsPageController::class, 'singlePost']);