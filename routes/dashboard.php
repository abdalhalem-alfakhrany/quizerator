<?php

use App\Http\Controllers\DashBoard\ExamController;
use Illuminate\Support\Facades\Route;

Route::resource('exam', ExamController::class);
