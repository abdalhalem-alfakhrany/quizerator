<?php

use App\Http\Controllers\DashBoard\ExamController;
use App\Http\Controllers\DashBoard\StudentController;
use Illuminate\Support\Facades\Route;

Route::resource('exam', ExamController::class);
Route::resource('student', StudentController::class);
