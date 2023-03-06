<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\DashbordController;
use App\Http\Controllers\ProfileUpdatecontroller;

use App\Http\Controllers\forgotpasswordcontroller;

use App\Http\Controllers\passwordchangecontroller;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userdatashoecontroller;
use App\Http\Controllers\userdatamanagecontroller;
use App\Http\Controllers\addusercontroller;


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
    Route::get('/', 'index');
    Route::post('/login-check', 'login')->name('check.login');
    Route::get('/logout', 'logout')->name('logout.perform');
});
// -----------------------------Registration----------------------------------------//
Route::controller(RegisterController::class)->group(function () {
    Route::get('/register', 'register');
    Route::post('/register-data', 'Register_user')->name('register.data');
});
// -----------------------------Dashboard----------------------------------------//
route::get('/dashbord' , [DashbordController::class,'dashbord'])->name('dashbord');
// -----------------------------Profile update----------------------------------------//
Route::controller(ProfileUpdateController::class)->group(function () {
    Route::get('/profile-show', 'profile_update_show')->name('show.profile');
    Route::post('/update-profile', 'profile_Update')->name('update.profile');
});



route::get('/passwordupdate' , [passwordchangecontroller::class,'passwordupadteshow']);
Route::POST('update-password', [passwordchangecontroller::class,'passwordUpdate'])->name('update-password');

Route::POST('password/forgot', [forgotpasswordcontroller::class,'sendResetLink'])->name('forgot.password.link');
Route::GET('password/forgot/{token}', [forgotpasswordcontroller::class,'ShowResetform'])->name('reset.password.form');
Route::POST('password/reset', [forgotpasswordcontroller::class,'resetpassword'])->name('reset.password');

Route::get('/userdata', [userdatashoecontroller::class, 'index'])->name('users.index');

Route::delete('/delete/{id}', [userdatamanagecontroller::class,"destroy"])->name('users.delete');

// -------------------------- user management ----------------------//
Route::get('/update/{id}', [userdatamanagecontroller::class,"edit"])->name('users.edit');
Route::post('/update', [userdatamanagecontroller::class,"usetredit"])->name('update.user');

Route::get('/adduser', [addusercontroller::class,"index"]);



route::POST('user-add' , [addusercontroller::class,'adduser'])->name('user.add');

// Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

