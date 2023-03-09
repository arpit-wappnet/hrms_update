<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProfileUpdatecontroller;
use App\Http\Controllers\UserController;
use App\Http\Controllers\HolidayController;


use Illuminate\Support\Facades\Route;

use Illuminate\Auth\Events\Login;
use SebastianBergmann\CodeUnit\FunctionUnit;

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

// -----------------------------login----------------------------------------//
Route::controller(AuthController::class)->group(function () {
    Route::get('/', 'index')->name('login');
    Route::post('/login-check', 'login')->name('check.login');
    Route::get('/logout', 'logout')->name('logout.perform');
    Route::post('/password/forgot', 'sendResetLink')->name('forgot.password.link');
    Route::get('/password/forgot/{token}', 'ShowResetform')->name('reset.password.form');
    Route::post('/password/reset', 'resetpassword')->name('reset.password');
});
// -----------------------------Registration----------------------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register');
    Route::post('/register-data', 'Register_user')->name('register.data');
});
// -----------------------------Dashboard----------------------------------------//
Route::controller(DashbordController::class)->group(function () {
    Route::get('admin/dashbord' ,'admin_dashbord')->name('dashbord');
    Route::get('user/dashbord' ,'user_dashbord')->name('user.dashbord');
});
// -----------------------------Profile update----------------------------------------//
Route::controller(ProfileUpdateController::class)->group(function () {
    Route::get('/profile-show', 'profile_update_show')->name('show.profile');
    Route::post('/update-profile', 'profile_Update')->name('update.profile');
    Route::get('/passwordupdate', 'password_upadte_show');
    Route::post('/update-password','passwordUpdate')->name('update-password');
});
// --------------------------Get Admin User List And management---------------------------//
Route::prefix('admin')->middleware('auth','isAdmin')->group( Function(){
    Route::controller(UserController::class)->middleware('auth')->group(function () {
        Route::get('admin/userdata', 'User_data_show')->name('admin.index');
    });
});
Route::controller(UserController::class)->middleware('auth','isAdmin')->group(function () {
        Route::post('/add-user','add_user')->name('user.add');  // New User add
        Route::get('/adduser', 'add_user_show');
        Route::get('/update/{id}', 'edit')->name('users.edit'); // edit User page show
        Route::post('/update', 'user_edit')->name('update.user'); // edit user
        Route::delete('/delete/{id}', 'destroy')->name('users.delete'); // delete user
});
// -----------------------------Get User List Show----------------------------------------//
Route::prefix('user')->middleware('auth')->group( Function(){
        Route::controller(UserController::class)->group(function () {
        Route::get('/userdata', 'User_show')->name('users.index');
    });
});
// -----------------------------HoliDay----------------------------------------//
Route::prefix('admin')->middleware('auth','isAdmin')->group( Function(){
    Route::controller(HolidayController::class)->middleware('auth')->group(function () {
        Route::get('admin/holiday', 'holiday_show')->name('admin.holiday');
    });
});
Route::controller(HolidayController::class)->middleware('auth','isAdmin')->group(function () {
    Route::get('/addholiday', 'add_holiday_form');
    Route::post('/add-holidays', 'add_holiday')->name('add.holiday');
    Route::get('/holiday-data', 'holiday_show')->name('show.holiday');
});





