<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\GlanceController;
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

Route::get('/clear-cache', function () {
    Artisan::call('cache:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('view:clear');
    Artisan::call('optimize:clear');

    // (Optional) Recreate the cache
    Artisan::call('config:cache');
    Artisan::call('route:cache');
    Artisan::call('view:cache');

    return "✅ All cache cleared manually!";
});


Route::prefix('cms')->group(function () {
    Route::get('view', [DashboardController::class, 'viewCMS'])->name('cms.viewCMS');
    Route::get('add', [DashboardController::class, 'addCMS'])->name('cms.addCMS');
});
Route::prefix('email-template')->group(function () {
    Route::get('list', [DashboardController::class, 'email_template_list'])->name('email_template.list');
    Route::get('add', [DashboardController::class, 'add_email_template'])->name('email_template.add');
});

Route::prefix('users')->group(function () {
    Route::get('list', [UserController::class, 'manage_users'])->name('users.index');
    Route::get('add', [UserController::class, 'add_user'])->name('users.add');
});

Route::prefix('admin')->group(function () {
    Route::get('role', [UserController::class, 'manageRole'])->name('role.index');
    Route::get('role-form/{id?}', [UserController::class, 'roleForm'])->name('role.form');
    Route::post('role-save/{id?}', [UserController::class, 'saveRole'])->name('role.save');
    Route::delete('delete/{id}', [UserController::class, 'deleteRole'])->name('role.delete');


});

Route::prefix('providers')->group(function () {
    Route::get('list', [UserController::class, 'manage_providers'])->name('providers.list');
    Route::get('add', [UserController::class, 'add_provider'])->name('providers.add');
    Route::post('insert', [UserController::class, 'insert_provider'])->name('providers.insert');
});

Route::prefix('services')->group(function () {
    Route::get('list', [ServiceController::class, 'manage_services'])->name('services.list');
    Route::get('categories', [ServiceController::class, 'manage_categories'])->name('services.categories');
});

Route::match(['get', 'post'], '/login', [AuthController::class, 'login'])->name('login');
Route::get('countries', [DashboardController::class, 'viewCountries'])->name('dashboard.viewCountries');
Route::get('states', [DashboardController::class, 'viewStates'])->name('dashboard.viewStates');
Route::get('cities', [DashboardController::class, 'viewCities'])->name('dashboard.viewCities');
   
Route::middleware(['auth'])->prefix('admin')->group(function () {    
    
    Route::get('dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
    // Route::get('manage-roles', [DashboardController::class, 'manageRoles'])->name('role.index');
    // Route::post('add-roles', [DashboardController::class, 'addRoles'])->name('role.add');
    // Route::put('edit-roles/{id}', [DashboardController::class, 'editRoles'])->name('role.edit');

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
