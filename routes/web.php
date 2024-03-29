<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
// use App\Http\Controllers\WorkoutController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/dashboard', function () {
//     return view('dashboard');
// });
// Route::get('/', function () {
//     return view('login');
// });
// Route::resource('/workout','WorkoutController');
Route::get('/dashboard', [AuthController::class, 'dashboard']); 
Route::get('', [AuthController::class, 'index'])->name('login');
// Route::get('/', [WorkoutController::class, 'index'])->name('login');
// Route::get('/', [WorkoutController::class, 'index'])->name('login');

// Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
// Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');
