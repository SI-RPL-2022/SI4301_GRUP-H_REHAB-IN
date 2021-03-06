<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ArtikelController;
use App\Http\Middleware\isDokterMiddleware;
use App\models\User;
use App\models\Artikel;
use App\models\Notesehat;

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
// Route::get('/{id}', [HomeController::class, 'artikelid'])->name('artikel_guest');
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/tips', [HomeController::class, 'tips'])->name('tips');
Route::get('/tips/{id}', [HomeController::class, 'tipsid'])->name('tips_guest');

Route::get('/article', [HomeController::class, 'articles'])->name('articles');

Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::post('/about/add', [AboutController::class, 'addmessage']); //tambah kamar (admin)


//Login for user
Route::get('/login', [UserController::class, 'login'])->name('login');
Route::post('/login', [UserController::class, 'loginpasien'])->name('masuk');

//Logout for User
Route::get('/logout', [UserController::class, 'logout'])->name('logout');

//Register for user
Route::get('/register', [UserController::class, 'register'])->middleware('guest')->name('register');
Route::post('/register', [UserController::class, 'registerpasien'])->middleware('guest')->name('registpasien');

// Forget password
Route::get('forget', [UserController::class, 'ForgetPassword'])->middleware('guest')->name('ForgetPasswordGet');
Route::post('forget-password', [UserController::class, 'ForgetPasswordStore'])->middleware('guest')->name('ForgetPasswordPost');
Route::get('reset-password/{token}/{email}', [UserController::class, 'ResetPassword'])->middleware('guest')->name('ResetPasswordGet');
Route::post('/reset-password', [UserController::class, 'ResetPasswordStore'])->middleware('guest')->name('ResetPasswordPost');


Route::group(['middleware' => ['isPasien']], function () {
    // Dashboard Pasien
    Route::get('/pasien', function () {
        $artikel = Artikel::all();
        $countartikel = Artikel::all()->count();
        $note = Notesehat::where('patient', auth()->user()->id)->first();
        $count = Notesehat::where('patient', auth()->user()->id)->count();
        return view('user.home', compact('artikel', 'countartikel', 'note', 'count'));
    })->name('landinguser')->middleware('auth'); //Londing page user after login

    // Profile Pasien

    Route::get('/pasien/profile/{id}', [UserController::class, 'profile'])->name('user-profile')->middleware('auth'); // Profile manage for user
    Route::get('/pasien/profile/{id}/edit/', [UserController::class, 'show'])->name('editprofile')->middleware('auth'); // Profile manage for user
    Route::post('/pasien/profile', [UserController::class, 'updateprofile'])->name('updateprofileuser')->middleware('auth'); //FORM POST UPDATE FOR USER

    Route::get('/pasien/notes/{id}', [UserController::class, 'notes'])->name('user-healthnotes')->middleware('auth'); // Notes for user
    Route::get('/pasien/service', [UserController::class, 'services'])->name('user-services')->middleware('auth'); // Chat manage for user
    Route::get('/pasien/service/hospital', [UserController::class, 'hospital'])->name('hospital')->middleware('auth'); // Tampilan hospital untuk pasien
    Route::get('/pasien/service/kamar', [UserController::class, 'kamar'])->name('reservasi')->middleware('auth'); // Template reservasi pasien
    Route::get('/pasien/service/kamar/detail/{id}', [UserController::class, 'ruangan'])->name('ruangan')->middleware('auth'); // Template jadwal ruangan pasien

    //History
    Route::get('/pasien/history/', [UserController::class, 'history'])->name('history')->middleware('auth'); // Tampilan untuk history payment

    //Route for Order Dokter
    Route::get('/pasien/service/dokter', [UserController::class, 'dokter'])->name('dokter')->middleware('auth'); // List dokter untuk pasien
    Route::get('/pasien/service/dokter/jadwal/{id}', [UserController::class, 'jadwal'])->name('jadwal')->middleware('auth'); // Input dokter untuk pasien
    Route::post('/pasien/service/dokter/online', [UserController::class, 'orderd'])->name('orderd')->middleware('auth'); // Post request
    Route::post('/pasien/service/dokter/offline', [UserController::class, 'orderoff'])->name('orderoff')->middleware('auth'); // Post request
    Route::get('/pasien/{id}/orderd/', [UserController::class, 'invoicedoc'])->name('invdk')->middleware('auth'); // invoice untuk pasien
    Route::post('/pasien/orderd/', [UserController::class, 'pembayaran'])->name('inputd')->middleware('auth'); // Post request Bukti pembayaran

    Route::get('/pasien/service/dokter/konsultasi', [UserController::class, 'konsultasi'])->name('konsultasi')->middleware('auth'); // invoice untuk pasien

    //Route for Order Kamar
    Route::get('/pasien/order/', [UserController::class, 'order'])->name('order')->middleware('auth');
    Route::post('/pasien/orderk/', [UserController::class, 'pesan'])->name('inv')->middleware('auth');
    Route::get('/pasien/{id}/orderk/', [UserController::class, 'invoicek'])->name('harga')->middleware('auth'); // Template jadwal ruangan pasien
    Route::post('/pasien/order/', [UserController::class, 'bukti_pembayaran'])->name('input')->middleware('auth'); // Template jadwal ruangan pasien


    Route::get('/pasien/artikel/{id}', [UserController::class, 'artikel'])->name('artikel')->middleware('auth'); // Artikel in pasien
    Route::get('/article/{id}', [HomeController::class, 'articleid'])->name('articles_kfp')->middleware('auth'); //need login before
});


// DOKTER 
Route::get('/login-dokter', [DokterController::class, 'login'])->name('logindokter'); //Login for
Route::post('/login-dokter', [DokterController::class, 'authdok'])->name('authdok');



//REGISTER FOR DOKTER
Route::get('/regisdok', [DokterController::class, 'register'])->middleware('guest')->name('regisdok');
Route::post('/regisdok', [DokterController::class, 'registerdokter'])->middleware('guest')->name('registerdok');


Route::group(['prefix' => 'dokter', 'middleware' => ['isDokter']], function () {
    Route::get('/', function () {
        $artikel = Artikel::all();
        $countartikel = Artikel::all()->count();
        return view('dokter.home', compact('artikel', 'countartikel'));
    })->name('landingdokter'); //Landing page for Dokter
    Route::get('/profile/{id}', [DokterController::class, 'profile'])->name('dokter.profile');
    Route::get('/profile/edit/{id}', [DokterController::class, 'editprofile'])->name('edit.profile.dokter');
    Route::post('/profile', [DokterController::class, 'updateprofile'])->name('update.profile.dokter'); //FORM POST UPDATE FOR DOKTER

    Route::post('/profile', [DokterController::class, 'updateprofile'])->name('update.profile.dokter'); //FORM POST UPDATE FOR DOKTER

    Route::get('/jadwal', [DokterController::class, 'jadwal'])->name('jadwaldokter');
    Route::get('jadwal/delete/{id}', [DokterController::class, 'confirmjadwal']);

    Route::get('/orderkons', [DokterController::class, 'orderkons'])->name('orderkons');
    Route::get('catkes', [DokterController::class, 'catkes'])->name('catpasien');
    Route::get('catkes/{id}', [DokterController::class, 'inputcatkes'])->name('inputcat');
    Route::post('cates', [DokterController::class, 'kirimcatkes'])->name('inputcatkes');
    Route::get('catkes/edit/{id}', [DokterController::class, 'editcatkes'])->name('editcatkes');
});
// Route::get('',[DokterController::class,'register'])->name('register'); //Register for
// Route::get('',[DokterController::class,'forgetpw'])->name('forgetpw'); // Forget password for










//ADMIN
//LOGIN FOR ADMIN 
Route::get('/admin/login', [AdminController::class, 'loginadm'])->name('loginadm'); //Login page for admin
Route::post('/admin/login', [AdminController::class, 'authadm'])->name('authadm'); //Login page for admin

// REGISTER FOR ADMIN
Route::get('/register/admin', [AdminController::class, 'registeradm'])->middleware('guest')->name('registeradm');
Route::post('/register/admin', [AdminController::class, 'regisadmin'])->middleware('guest')->name('registadm');

//LOGOUT FOR ADMIN
Route::get('/logoutadm', [AdminController::class, 'logoutadm'])->name('logoutadm');

Route::group(['prefix' => 'admin', 'middleware' => ['isAdmin']], function () {

    Route::get('/', [AdminController::class, 'index'])->name('landingadmin'); //Landing page for admin

    // USER MANAGEMENT
    Route::get('dbpasien', [AdminController::class, 'dbpasien'])->name('dbpasien'); //Login for
    Route::get('/regis/pasien', [AdminController::class, 'regpasien'])->name('regpasfromadm');
    Route::post('/regis/pasien', [AdminController::class, 'registpasien'])->name('regispasfromadm');
    Route::get('dbpasien/updatepasien/{id}', [AdminController::class, 'editpasien'])->name('editpasien');
    Route::put('dbpasien/updatepasien/', [AdminController::class, 'updatepasien'])->name('updatepasien');

    Route::get('dbdokter', [AdminController::class, 'dbdokter'])->name('dbdokter'); //Login for
    Route::get('/regis/dokter', [AdminController::class, 'registdokter'])->name('regdokfromadm');
    Route::post('/regis/dokter', [AdminController::class, 'adddokter'])->name('regisdokfromadm');
    Route::get('dbdokter/updatedokter/{id}', [AdminController::class, 'editdokter'])->name('editdokter');
    Route::put('dbdokter/updatedokter/', [AdminController::class, 'updatedokter'])->name('updatedokter');

    Route::get('dbadmin', [AdminController::class, 'dbadmin'])->name('dbadmin'); //Login for
    Route::get('/regis/admin', [AdminController::class, 'regisadmfromadm'])->name('regadm');
    Route::post('/regis/admin', [AdminController::class, 'registeradmfromadm'])->name('regsadm');
    Route::get('dbadmin/updateadmin/{id}', [AdminController::class, 'editadmin'])->name('editadmin');
    Route::put('dbadmin/updateadmin/', [AdminController::class, 'updateadmin'])->name('updateadmin');
    Route::get('dbadmin/delete/{id}', [AdminController::class, 'deladmin'])->name('deladmin');

    // Page Management - KAMAR
    Route::get('kamar', [AdminController::class, 'kamar'])->name('kamaradm'); //tampilan kamar
    Route::get('kamar/{id}', [AdminController::class, 'kamarid'])->name('adminkamarid'); //comot id
    Route::post('kamar/add', [AdminController::class, 'addKamar']); //tambah kamar (admin)
    Route::put('kamar/update/', [AdminController::class, 'updateKamar']); //update kamar (admin)
    Route::get('kamar/delete/{id}', [AdminController::class, 'deleteKamar']); //delete kamar (admin)

    //Page Management - ARTIKEL
    Route::get('artikel', [AdminController::class, 'artikel'])->name('artikeladm'); //view for article at admin area
    Route::get('artikel/{id}', [AdminController::class, 'artikelid'])->name('adminartikelid'); //pick data by id
    Route::post('artikel/add', [AdminController::class, 'addArtikel']); //add article by admin
    Route::put('artikel/update/', [AdminController::class, 'updateArtikel']); //update article by admin
    Route::get('artikel/delete/{id}', [AdminController::class, 'deleteArtikel'])->name('del-artikel'); //del article by admin

    //Page Management - TIPS
    Route::get('tips', [AdminController::class, 'tipskes'])->name('tipskesadm'); //tips view at admin area
    Route::get('tips/{id}', [AdminController::class, 'tipsid'])->name('admintipsid'); //Login for
    Route::post('tips/add', [AdminController::class, 'addTips']); //add tips by admin
    Route::put('tips/update/', [AdminController::class, 'updateTips']); //update tips by admin
    Route::get('tips/delete/{id}', [AdminController::class, 'deleteTips']); //del tips by admin

    //Page Management - JADWAL KONSUL
    Route::get('jadwalkons', [AdminController::class, 'jadwalkonsul'])->name('jadwalkons'); // Forget password for
    Route::get('jadwalkons/input', [AdminController::class, 'inputjadwal'])->name('inputjadwal');
    Route::post('jadwalkons/add', [AdminController::class, 'saveJadwal'])->name('savejadwal');
    Route::get('jadwalkons/{id}', [AdminController::class, 'editJadwal'])->name('editjadwal');
    Route::put('jadwalkons/update', [AdminController::class, 'updatejadwal'])->name('updatejadwal');
    Route::get('jadwalkons/delete/{id}', [AdminController::class, 'deletejadwal']);

    //Page Management - KONTAK KAMI
    Route::get('contactusadm', [AdminController::class, 'contactusadm'])->name('contactusadm'); // Forget password for
    Route::get('contactusadm/delete/{id}', [AdminController::class, 'deleteMsg']);

    //Page Management - RIWAYAT PELAYANAN
    Route::get('riwayatadm', [AdminController::class, 'riwayatadm'])->name('riwayatadm'); // Forget password for
    Route::get('riwayatadm/delete/{id}', [AdminController::class, 'deleteriwayat']);

    //Page Management - ORDER
    Route::get('order', [AdminController::class, 'order'])->name('orderadm'); // Forget password for
    Route::get('orderk', [AdminController::class, 'orderk'])->name('orderadmk');
    Route::get('/invmailkamar', function () {
        $details = [
            'title' => 'Konfirmasi Pembayaran'
        ];
        Mail::to('wahdanurul.nw@gmail.com')->send(new \App\Mail\InvKamar($details));
    })->name('invmailkamar');

    Route::get('/invmail', function () {
        $details = [
            'title' => 'Konfirmasi Pembayaran'
        ];
        Mail::to('wahdanurul.nw@gmail.com')->send(new \App\Mail\MyTestMail($details));
    })->name('invkons');

    Route::get('/linkmail/{id}', function ($id) {
        // {{dd($id);}}
        $details = $id;
        Mail::to('wahdanurul.nw@gmail.com')->send(new \App\Mail\LinkMail($details));
    })->name('linkkons');


    Route::get('riwayatadm/delete/{id}', [AdminController::class, 'deleteriwayat']);


    //Page Management - CATATAN KESEHATAN
    Route::get('notes', [AdminController::class, 'notes'])->name('catkes'); //catkes pasiens
    Route::get('notes/{id}', [AdminController::class, 'notesid'])->name('adminotesid'); //Login for



    Route::get('reservasi', [AdminController::class, 'reservasi'])->name('servreserv'); //catkes pasiens
    Route::get('listdokter', [AdminController::class, 'listdokter'])->name('listdokter'); //catkes pasiens
    // Route::get('/admin/edukasi',[AdminController::class,'edukasi'])->name('eduadm'); //catkes pasiens
});
