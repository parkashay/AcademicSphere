<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CoursesPageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningMaterialsController;
use App\Http\Controllers\PostsPageController;
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
Route::get('/courses/single/{id}', [CoursesPageController::class, 'singleCourse']);

Route::get('/events', [EventPageController::class, 'index']);
Route::get('/events/single/{id}', [EventPageController::class, 'singleEvent']);

Route::get('/posts', [PostsPageController::class, 'getPosts']);
Route::get('/posts/single/{id}', [PostsPageController::class, 'singlePost']);

Route::get('/programs', [ProgramsPageController::class, 'index']);
Route::get('/programs/single/{id}', [ProgramsPageController::class, 'singleProgram']);


Route::get('/learning-materials', [LearningMaterialsController::class, 'index'])
    ->name('learning.materials');
Route::get('/verify-code', [LearningMaterialsController::class, 'verificationForm'])
    ->name('verify.code');
Route::post('/verify-code', [LearningMaterialsController::class, 'verify']);
Route::get('/learning-materials/single/{id}', [LearningMaterialsController::class, 'learn'])
    ->name('learn')
    ->middleware('verify.code');

// Search

Route::get('/search', [PostsPageController::class, 'getQuery'])->name('posts.search');
