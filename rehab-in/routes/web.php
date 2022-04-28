<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;

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

// //pasien
Route::get('/pasien',[UserController::class,'index'])->name('landinguser'); //Londing page user after login
Route::get('/login',[UserController::class,'login'])->name('login'); //Login for user
Route::get('/register',[UserController::class,'register'])->name('register'); //Register for user
Route::get('/forgetpw',[UserController::class,'forgetpw'])->name('forgetpw'); // Forget password for user
Route::get('/pasien/history',[UserController::class,'riwayat'])->name('user-history'); //
Route::get('/pasien/profile',[UserController::class,'profile'])->name('user-profile'); // Profile manage for user
Route::get('/pasien/notes',[UserController::class,'notes'])->name('user-healthnotes'); // Profile manage for user
Route::get('/pasien/profile/edit',[UserController::class,'editprofile'])->name('user-profile-edit'); // Profile manage for user
Route::get('/pasien/service',[UserController::class,'services'])->name('user-services'); // Chat manage for user
Route::get('/pasien/service/hospital',[UserController::class,'hospital'])->name('hospital'); // Tampilan hospital untuk pasien

Route::get('/pasien/service/dokter',[UserController::class,'dokter'])->name('dokter'); // List dokter untuk pasien
Route::get('/pasien/service/dokter/jadwal',[UserController::class,'jadwal'])->name('jadwal'); // Input dokter untuk pasien
Route::get('/pasien/service/dokter/invoice',[UserController::class,'invoicedoc'])->name('invoice'); // invoice untuk pasien
Route::get('/pasien/service/dokter/konsultasi',[UserController::class,'konsultasi'])->name('konsultasi'); // invoice untuk pasien

Route::get('/pasien/service/reservasi',[UserController::class,'reservasi'])->name('reservasi'); // Template reservasi pasien
Route::get('/pasien/service/reservasi/ruangan',[UserController::class,'ruangan'])->name('ruangan'); // Template jadwal ruangan pasien
Route::get('/pasien/service/reservasi/invoice',[UserController::class,'total'])->name('harga'); // Template jadwal ruangan pasien

Route::get('/pasien/service/edukasi',[UserController::class,'edukasi'])->name('edukasi'); // Edukasi untuk pasien

// //Dokter
// Route::get('/dokter',[DokterController::class, 'index'])->name('landingdokter'); //Landing page for Dokter
// Route::get('',[DokterController::class,'login'])->name('login'); //Login for
// Route::get('',[DokterController::class,'register'])->name('register'); //Register for
// Route::get('',[DokterController::class,'forgetpw'])->name('forgetpw'); // Forget password for










//Admin
Route::get('/admin',[AdminController::class, 'index'])->name('landingadmin'); //Landing page for admin
Route::get('/admin/login',[AdminController::class, 'loginadm'])->name('loginadm'); //Landing page for admin

// User Management
Route::get('/admin/dbpasien',[AdminController::class,'dbpasien'])->name('dbpasien'); //Login for
Route::get('/admin/dbdokter',[AdminController::class,'dbdokter'])->name('dbdokter'); //Login for


Route::get('/admin/dbadmin',[AdminController::class,'dbadmin'])->name('dbadmin'); //Login for
Route::post('/admin/dbadmin/add',[AdminController::class,'addadmin'])->name('addadmin'); //Login for

// Page Management - KAMAR
Route::get('/admin/kamar',[AdminController::class,'kamar'])->name('kamaradm'); //tampilan kamar
Route::get('/admin/kamar/{id}',[AdminController::class,'kamarid'])->name('adminkamarid'); //comot id
Route::post('/admin/kamar/add',[AdminController::class,'addKamar']); //tambah kamar (admin)
Route::put('/admin/kamar/update/',[AdminController::class,'updateKamar']); //update kamar (admin)
Route::get('/admin/kamar/delete/{id}',[AdminController::class,'deleteKamar']); //delete kamar (admin)

//Page Management - ARTIKEL
Route::get('/admin/artikel',[AdminController::class,'artikel'])->name('artikeladm'); //view for article at admin area
Route::get('/admin/artikel/{id}',[AdminController::class,'artikelid'])->name('adminartikelid'); //pick data by id
Route::post('/admin/artikel/add',[AdminController::class,'addArtikel']); //add article by admin
Route::put('/admin/artikel/update/',[AdminController::class,'updateArtikel']); //update article by admin
Route::get('/admin/artikel/delete/{id}',[AdminController::class,'deleteArtikel']); //del article by admin

//Page Management - TIPS
Route::get('/admin/tips',[AdminController::class,'tipskes'])->name('tipskesadm'); //tips view at admin area
Route::get('/admin/tips/{id}',[AdminController::class,'tipsid'])->name('admintipsid'); //Login for
Route::post('/admin/tips/add',[AdminController::class,'addTips']); //add tips by admin
Route::put('/admin/tips/update/',[AdminController::class,'updateTips']); //update tips by admin
Route::get('/admin/tips/delete/{id}',[AdminController::class,'deleteTips']); //del tips by admin


Route::get('/admin/jadwalkons',[AdminController::class,'jadwalkonsul'])->name('jadwalkons'); // Forget password for
Route::get('/admin/notes',[AdminController::class,'notes'])->name('catkes'); //catkes pasiens
// Route::get('/admin/service',[AdminController::class,'service'])->name('servicers'); //catkes pasiens
Route::get('/admin/reservasi',[AdminController::class,'reservasi'])->name('servreserv'); //catkes pasiens
Route::get('/admin/listdokter',[AdminController::class,'listdokter'])->name('listdokter'); //catkes pasiens
// Route::get('/admin/edukasi',[AdminController::class,'edukasi'])->name('eduadm'); //catkes pasiens
