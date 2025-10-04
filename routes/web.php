<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
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
// Route::get('', [AuthController::class, 'index'])->name('loginss');
Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::middleware(['auth'])->prefix('admin')->group(function () {

    
    Route::get('countries', [DashboardController::class, 'viewCountries'])->name('dashboard.viewCountries');
    Route::get('states', [DashboardController::class, 'viewStates'])->name('dashboard.viewStates');
    Route::get('cities', [DashboardController::class, 'viewCities'])->name('dashboard.viewCities');
    Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
    
    Route::get('manage-roles', [DashboardController::class, 'manageRoles'])->name('dashboard.manageRole');
    Route::get('manage-users', [DashboardController::class, 'manageUsers'])->name('dashboard.manageUsers');
    Route::get('add-user', [DashboardController::class, 'addUser'])->name('dashboard.addUser');
    
    Route::get('my-profile', [DashboardController::class, 'myProfile'])->name('dashboard.myProfile');
    Route::get('change-password', [DashboardController::class, 'changePassword'])->name('dashboard.changePassword');
    Route::get('logout', [AuthController::class, 'logout'])->name('admin.logout');
});

// Route::get('/', [WorkoutController::class, 'index'])->name('login');
// Route::get('/', [WorkoutController::class, 'index'])->name('login');

// Route::post('/custom-login', [AuthController::class, 'customLogin'])->name('login.custom'); 
// Route::get('/registration', [AuthController::class, 'registration'])->name('register-user');
// Route::post('/custom-registration', [AuthController::class, 'customRegistration'])->name('register.custom'); 
// Route::get('/signout', [AuthController::class, 'signOut'])->name('signout');
