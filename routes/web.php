<?php

use App\Http\Controllers\AuthController;
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

Route::prefix('login')->group(function () {
    Route::post('/', [AuthController::class, 'login'])->name('login');
    Route::view('/', 'auth.login')->name('login');
});

Route::prefix('register')->group(function () {
    Route::post('/', [AuthController::class, 'register'])->name('register');
    Route::view('/', 'auth.register')->name('register');
});

Route::get('logout/', [AuthController::class, 'logout'])->name('logout');


Route::view('website', 'website.index')->name('website.index');
Route::view('admin', 'dash-board.index')->name('admin.index');

Route::get('/', function () {
    return redirect(route('website.index'));
});
