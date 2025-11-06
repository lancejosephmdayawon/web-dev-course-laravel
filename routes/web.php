<?php

use App\Http\Controllers\StudentController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\SampleController;
use Illuminate\Contracts\Pagination\Paginator;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'index']);

//Grouped Routes
Route::group(['prefix' => 'user'], function () {
    Route::get('/', [PageController::class, 'user'])->name('USER');
    Route::get('/{id}', [PageController::class, 'userID']);
    Route::get('/{id}/{name}', [PageController::class, 'userNameID']);
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
