<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\CallendarController;
use App\Http\Controllers\CoursesPageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningMaterialsController;
use App\Http\Controllers\PostsPageController;
use App\Http\Controllers\ProgramsPageController;
use App\Http\Controllers\StaffController;
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
Route::get('/courses/single/{id}', [CoursesPageController::class, 'singleMaterial']);

Route::get('/events', [EventPageController::class, 'index']);
Route::get('/events/single/{id}', [EventPageController::class, 'singleEvent']);

Route::get('/posts', [PostsPageController::class, 'getPosts']);
Route::get('/posts/single/{id}', [PostsPageController::class, 'singlePost']);

Route::get('/programs', [ProgramsPageController::class, 'index']);
Route::get('/programs/{id}', [ProgramsPageController::class, 'singleProgram']);

// LEARNING MATERIALS
Route::get('/learning-materials', [LearningMaterialsController::class, 'index'])
    ->name('learning.materials');


// Route::get('/verify-code', [LearningMaterialsController::class, 'verificationForm'])
//     ->name('verify.code');


// Route::post('/verify-code', [LearningMaterialsController::class, 'verify']);


Route::get('/learning-materials/single/{id}', [LearningMaterialsController::class, 'singleMaterial'])
    ->name('learn');

// Search

Route::get('/search', [PostsPageController::class, 'getQuery'])->name('posts.search');


// Gallery

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Calendar
Route::get('/calendar', [CallendarController::class, 'index'])->name('calendar');

//  Course search

Route::get('/learning/search', [LearningMaterialsController::class, 'getQuery'])->name('learning.search');

// Staff
Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::get('/staffdetails/{id}', [StaffController::class, 'singleStaff'])->name('staff.single');
