<?php

use App\Http\Controllers\Admin\Subject\SubjectController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Admin\subject\CourseController;
use App\Http\Controllers\Admin\DailySchedule\DailyScheduleController;
use App\Http\Controllers\Admin\Teacher\TeacherController;
use App\Http\Controllers\Admin\User\UserController;
use App\Http\Controllers\Teacher\Student\StudentController;
use App\Http\Controllers\Teacher\Student\TeacherController as StudentTeacherController;
use App\Http\Controllers\User\AuthController;
use App\Http\Controllers\User\UserController as UserUserController;
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


Route::resource('teachers', TeacherController::class)->names('teachers');
Route::resource('subjects', SubjectController::class)->names('subjects');
Route::resource('dailySchedules', DailyScheduleController::class)->names('dailySchedules');




 Route::middleware(['auth' , 'is_admin'])->group(function () {
    Route::prefix('admin')->group(function () {
        Route::resource('users', UserController::class)->names('users');
      
    });
    });
  

