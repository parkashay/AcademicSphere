<?php

use App\Http\Controllers\AboutPageController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\CallendarController;
use App\Http\Controllers\CoursesPageController;
use App\Http\Controllers\EventPageController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LearningMaterialsController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\PostsPageController;
use App\Http\Controllers\ProgramsPageController;
use App\Http\Controllers\StaffController;

use App\Http\Controllers\StudentClubController;
use Illuminate\Support\Facades\Route;



Route::get('/', [HomeController::class, 'index'])->name('home');

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
Route::middleware('auth')->group(function () {
    Route::get('/learning-materials', [LearningMaterialsController::class, 'index'])
        ->name('learning.materials');
    Route::get('/learning/search', [LearningMaterialsController::class, 'getQuery'])->name('learning.search');
    Route::get('/learning-materials/{slug}',[LearningMaterialsController::class, 'subjectMaterials'])->middleware('learn')->name('learn');
    Route::get('/learning-materials/single/{id}', [LearningMaterialsController::class, 'singleMaterial']);
    Route::post('/validate-code', [LearningMaterialsController::class, 'verify']);
});

// Programs
Route::get('/program/masters', function(){
    return view('pages.masters-programs');
});

// Admission
Route::get('/admission/undergraduate', function(){
    return view('pages.admission-undergraduate');
});
Route::get('/admission/graduate', function(){
    return view('pages.admission-graduate');
});

// Search

Route::get('/search', [PostsPageController::class, 'getQuery'])->name('posts.search');


// Gallery

Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Calendar
Route::get('/calendar', [CallendarController::class, 'index'])->name('calendar');


// Contact
Route::get('/contact', [MessageController::class, 'index']);
Route::post('/contact', [MessageController::class, 'submitMessage']);

// About
Route::get('/about/organizational-structure', function(){
    return view('pages.organizational-structure');
});

// Staff and Faculty
Route::get('/staff', [StaffController::class, 'index'])->name('staff');
Route::get('/faculty', [StaffController::class, 'faculty'])->name('faculty');
Route::get('/staffdetails/{id}', [StaffController::class, 'singleStaff'])->name('staff.single');
Route::get('/message/director', [StaffController::class,'director'])->name('message.director');
Route::get('/message/dean',[StaffController::class,'dean'])->name('message.dean');

//Authentication
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'verifyLogin']);
Route::get('register', [AuthController::class, 'register'])->name('register');
Route::post('/register', [AuthController::class, 'verifyRegister']);
Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Student clubs
Route::get('/student-clubs', [StudentClubController::class,'index']);