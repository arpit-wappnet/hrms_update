<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\logincontroller;
use App\Http\Controllers\registercontroller;
use App\Http\Controllers\dashbordcontroller;
use App\http\Controllers\profileupdatecontroller;
use App\Http\Controllers\passwordchangecontroller;
use App\Http\Controllers\forgotpasswordcontroller;

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


route::get('/' , [logincontroller::class,'index']);

route::get('/register' , [registercontroller::class,'register']);
route::POST('register-data' , [registercontroller::class,'postRegistration'])->name('register.data');

route::POST('login-data' , [logincontroller::class,'checkLogin'])->name('check.login');

Route::GET('/logout', [logincontroller::class,'logout'])->name('logout.perform');

route::get('/dashbord' , [dashbordcontroller::class,'dashbord'])->name('dashbord');

route::get('/profileupdate' , [profileupdatecontroller::class,'profile_update'])->name('show.profile');
Route::POST('update-profile', [profileupdatecontroller::class,'profileUpdate'])->name('update.profile');

route::get('/passwordupdate' , [passwordchangecontroller::class,'passwordupadteshow']);
Route::POST('update-password', [passwordchangecontroller::class,'passwordUpdate'])->name('update-password');

Route::POST('password/forgot', [forgotpasswordcontroller::class,'sendResetLink'])->name('forgot.password.link');
Route::GET('password/forgot/{token}', [forgotpasswordcontroller::class,'ShowResetform'])->name('reset.password.form');
Route::POST('password/reset', [forgotpasswordcontroller::class,'resetpassword'])->name('reset.password');
