<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{AdminController};
use App\Http\Controllers\admin\{DashboardController};

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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/login', function () {
//     return view('welcome');
// });
Route::get('/admin', [AdminController::class, 'index']);
Route::post('login_check', [AdminController::class, 'index'])->name('login_check');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('adminAuth');
Route::get('/logout', [DashboardController::class, 'logout'])->name('logout');