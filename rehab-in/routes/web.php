<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;

use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// LANDING PAGE
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tips', [HomeController::class, 'tips'])->name('tips');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/about', [AboutController::class, 'index'])->name('about');

// //User
Route::get('/user',[UserController::class,'index'])->name('landinguser'); //Londing page user after login
Route::get('/login',[UserController::class,'login'])->name('login'); //Login for user
Route::get('/register',[UserController::class,'register'])->name('register'); //Register for user
Route::get('/forgetpw',[UserController::class,'forgetpw'])->name('forgetpw'); // Forget password for user
Route::get('/user/history',[UserController::class,'riwayat'])->name('user-history'); //
Route::get('/user/profile',[UserController::class,'profile'])->name('user-profile'); // Profile manage for user
Route::get('/user/notes',[UserController::class,'notes'])->name('user-healthnotes'); // Profile manage for user
Route::get('/user/profile/edit',[UserController::class,'editprofile'])->name('user-profile-edit'); // Profile manage for user
Route::get('/user/consult',[UserController::class,'consult'])->name('user-consult'); // Chat manage for user
Route::get('/user/service',[UserController::class,'services'])->name('user-services'); // Chat manage for user
Route::get('/user/service/hospital',[UserController::class,'hospital'])->name('hospital'); // Tampilan hospital untuk pasien
Route::get('/user/service/dokter',[UserController::class,'dokter'])->name('dokter'); // List dokter untuk pasien
Route::get('/user/service/edukasi',[UserController::class,'edukasi'])->name('edukasi'); // Edukasi untuk pasien
Route::get('/user/service/reservasi',[UserController::class,'reservasi'])->name('reservasi'); // Template reservasi pasien
Route::get('/user/service/reservasi/ruangan',[UserController::class,'ruangan'])->name('ruangan'); // Template jadwal ruangan pasien
Route::get('/user/service/reservasi/invoice',[UserController::class,'total'])->name('harga'); // Template jadwal ruangan pasien



// //Admin
// Route::get('/admin',[AdminController::class, 'index'])->name('landingadmin'); //Landing page for admin
// Route::get('',[AdminController::class,'login'])->name('login'); //Login for
// Route::get('',[AdminController::class,'register'])->name('register'); //Register for
// Route::get('',[AdminController::class,'forgetpw'])->name('forgetpw'); // Forget password for

// //Dokter
// Route::get('/dokter',[DokterController::class, 'index'])->name('landingdokter'); //Landing page for Dokter
// Route::get('',[DokterController::class,'login'])->name('login'); //Login for
// Route::get('',[DokterController::class,'register'])->name('register'); //Register for
// Route::get('',[DokterController::class,'forgetpw'])->name('forgetpw'); // Forget password for
