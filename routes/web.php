<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SampleController;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\UserController;

Route::get('/', [PageController::class, 'index']);

//Grouped Routes
Route::group(['prefix' => 'user'], function () {
    // Tables
    Route::get('/all', [UserController::class, 'getAllUsers']);
    Route::get('/{id}', [UserController::class, 'getUserByID']);

    Route::get('/', [PageController::class, 'user'])->name('USER');
    //Route::get('/{id}/{name}', [PageController::class, 'userNameID']);
});

//Sample Basic Routes
Route::get('/edit/{id}', [PageController::class, 'editUser'])->name("editUser");
Route::get('/home/{id}', [PageController::class, 'home'])->name("home");
Route::get('/employee', [PageController::class, 'employee']);
Route::fallback([PageController::class, 'fallback']);


//Routes with Bootstrap UI
Route::get('/dashboard', [PageController::class, 'dashboard'])->name("dashboard");
Route::get('responsive', [PageController::class, 'responsive']);
Route::get('student', [PageController::class, 'student'])->name('student');
Route::get('pricing', [PageController::class, 'pricing'])->name('pricing');


//Form
Route::get('/student', [StudentController::class, 'index'])->name('student.index');
Route::post('/student', [StudentController::class, 'store'])->name('student.store');

//Resource Route
Route::resource('news', SampleController::class);

// BLOG ROUTES -------/

// Route for displaying all blog posts
Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');

// Route for viewing a single post
Route::get('/blog/{id}', [BlogController::class, 'show'])->name('blog.show');

// Route for filtering posts by category
Route::get('/blog/category/{category}', [BlogController::class, 'filterByCategory'])->name('blog.category');

// Route for the About page
Route::get('/about', [BlogController::class, 'about'])->name('about');

Route::get('/shows', [PageController::class, 'shows'])->name('shows');
