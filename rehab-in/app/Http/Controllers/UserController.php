<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\models\User;
use App\models\Kamar;
use App\models\OrderK;
use App\models\OrderD;
use App\models\Dokter;
use App\models\histori;
use App\models\Notesehat;
use App\models\Artikel;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Str;

class UserController extends Controller
{
    public function login()
    {
        return view('user.awal.login');
    }

    public function loginpasien(Request $request)
    {
        $credentials = $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required|min:6',
            'role' => 'required'
        ]);
        // dd($credentials['role']);

        if (Auth::attempt($credentials)) {
            if (Auth::user()->role == 0) {
                $request->session()->regenerate();
                return redirect()->intended('/pasien');
            } else {
                return back()->with('loginError', 'Login failed!');
            }
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }

    public function register()
    {
        return view('user.awal.register');
    }

    public function registerpasien(Request $request)
    {

        if ($request->password == $request->confpw) {
            // dd($request);
            $validated = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:5|unique:users',
                'email' => 'required|email:dns',
                'password' => 'required|min:6|max:255',
                'nohp' => 'required|min:10|max:13',
                'address' => 'required|min:10',
                'tanggallahir' => 'required',
                'role' => 'required'
            ]);

            $validated['password'] = Hash::make($validated['password']);
            User::create($validated);
            return redirect('/login')->with('success', 'Registrasi Berhasil, please login!');
        } else {
            return redirect('/register')->with('Failure', 'Password Tidak Sama');
        }
    }

    // Forget Password For USER
    public function ForgetPassword()
    {
        return view('user.awal.forgetpw');
    }

    public function ForgetPasswordStore(Request $request)
    {
        //Valid the value of form email
        $request->validate([
            'email' => 'required|email:dns|exists:users',
        ]);

        $email = $request->email;
        $token = Str::random(64);
        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);

        Mail::send('user.awal.forget-password-email', ['email' => $email, 'token' => $token], function ($message) use ($request) {
            $message->to($request->email);
            $message->from(env('MAIL_FROM_ADDRESS'), env('APP_NAME'));
            $message->subject('Reset Password');
        });

        return back()->with('message', 'We have emailed your password reset link!');
    }

    public function ResetPassword($token, $email)
    {
        $email = DB::table('password_resets')->where('email', $email)->first();
        $token = DB::table('password_resets')->where('token', $token)->first();
        return view('user.awal.forget-password-link', ['email' => $email, 'token' => $token]);
    }

    public function ResetPasswordStore(Request $request)
    {
        if ($request->password == $request->password_confirmation) {
            $validated = $request->validate([
                'password' => 'required|min:6|confirmed',
                'password_confirmation' => 'required'
            ]);

            $password = $request->password;

            $Data = DB::table('password_resets')->where('token', $request->token)->first();
            if (!$Data) {
                return redirect()->route('login')->with('error', 'Invalid token!');
            } else {
                $user = User::where('email', $Data->email)->first();
                if (!$user) return redirect()->back()->withErrors(['email' => 'Email not found']);
                $user->password = Hash::make($password);
                $user->save();
                DB::table('password_resets')->where('email', $user->email)
                    ->delete();
                return redirect()->route('login')->with('message', 'Your password has been successfully changed!');
            }
        } else {
            return back()->with('Failure', 'Password Tidak Sama!');
        }
        // return redirect()->route('login')->with('message', 'Your password has been successfully changed!');
    }

    public function riwayat()
    {
        return view('user.riwayat');
    }

    public function notes($id)
    {
        $note = Notesehat::where('patient', $id)->first();
        return view('user.notes', compact('note'));
    }

    public function profile($id)
    {
        $countreservasi = OrderK::where('patient_id', $id)->get();
        $countconsult = OrderD::where('patientid', $id)->get();
        $user = Auth::User();
        return view('user.profile', compact('user', 'countreservasi', 'countconsult'));
    }

    public function show($id)
    {
        $user = User::find($id);
        return view('user.profile-edit', compact('user'));
    }

    public function updateprofile(Request $request)
    {
        //validate form
        $this->validate($request, [
            'pic'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:10000',
            'name' => 'max:255',
            'tanggallahir' => 'required'
        ]);

        //upload image

        $Name = $request->pic->getClientOriginalName() . '-' . time()
            . '.' . $request->pic->extension();
        $request->pic->move(public_path('userProfile'), $Name);

        $id = $request->id;
        //create post
        User::find($id)->update([
            'pic'     => $Name,
            'name'     => $request->name,
            'nohp'     => $request->nohp,
            'address'     => $request->address,
            'tanggallahir'   => $request->tanggallahir
        ]);

        //redirect to index
        return redirect()->route('landinguser')->with(['success' => 'Profile Berhasil terganti!']);
    }

    public function services()
    {
        return view('user.service');
    }
    public function dokter()
    {
        // $dokter = DB::table('users')->where('role','2')
        $dokter = User::where('role', 2)->get();
        $jumlahdokter = User::where('role', 2)->count();
        return view('user.dokter', compact('dokter', 'jumlahdokter'));
    }

    public function orderoff(Request $request)
    {
        $inv  = random_int(1000, 9999);
        $order = random_int(10000, 99999);
        $orderd = new OrderD();
        $orderd->id = $order;
        $orderd->noInv = $inv;
        $orderd->jenis = $request->jenis;
        $orderd->waktu = $request->waktu;
        $orderd->jenislayanan = $request->layanan;
        $orderd->status = $request->status;
        $orderd->patientid = $request->userid;
        $orderd->price = $request->price;
        $orderd->save();
        return redirect('/pasien/order')->with('Done', 'Your order waiting for payment');
    }

    public function orderd(Request $request)
    {
        $inv  = random_int(1000, 9999);
        $order = random_int(10000, 99999);
        $orderd = new OrderD();
        $orderd->id = $order;
        $orderd->noInv = $inv;
        $orderd->jenis = $request->jenis;
        $orderd->keluhan = $request->keluhan;
        $orderd->detailkel = $request->detailkel;
        $orderd->waktu = $request->waktu;
        $orderd->durasi = $request->durasi;
        $orderd->jenislayanan = $request->layanan;
        $orderd->status = $request->status;
        $orderd->patientid = $request->userid;
        $orderd->dokterid = $request->dokterid;
        $orderd->price = $request->price;
        $orderd->save();
        return redirect('/pasien/order')->with('Done', 'Your order waiting for payment');
    }

    public function invoicedoc($id)
    {
        $inv = OrderD::find($id);
        return view('user.invoicedoc', compact('inv'));
    }

    public function pembayaran(Request $request)
    {
        $this->validate($request, [
            'pic' => 'image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $Name = $request->pic->getClientOriginalName() . '-' . time()
            . '.' . $request->pic->extension();
        $request->pic->move(public_path('images/bukti'), $Name);

        // $idkamar = $request->kamar_id;
        // Kamar::find($idkamar)->update([
        //     'status' => $request->updatestatus
        // ]);

        $idorder = $request->orderid;
        OrderD::find($idorder)->update([
            'status' => $request->status
        ]);

        $histori = new histori();
        $histori->noinv = $request->noinv;
        $histori->orderdokter_id = $idorder;
        $histori->jenis_layanan = $request->layanan;
        $histori->bukti_pembayaran = $Name;
        $histori->save();
        return redirect()->route('history')->with('Done', 'Upload bukti pembayaran berhasil.');
    }

    public function jadwal($id)
    {
        $data = Dokter::where('id_dokter', $id)->first();
        $doc = User::find($id);
        return view('user.jadwal', compact('doc', 'data'));
    }

    public function kamar()
    {
        $kamar = Kamar::all();
        $check = DB::table('kamars')->where('status', 'Tersedia')->count();
        return view('user.reservasi', compact('kamar', 'check'));
    }

    public function ruangan($id)
    {
        $kamar = Kamar::find($id);
        $user = Auth::User();
        return view('user.ruangan', ['kamar' => $kamar, 'user' => $user]);
    }

    public function pesan(Request $request)
    {
        $inv  = random_int(1000, 9999);
        $order = random_int(10000, 99999);
        $kamar = new OrderK();
        $kamar->id = $order;
        $kamar->noInv = $inv;
        $kamar->jenis  = $request->jenis;
        $kamar->waktu = $request->date;
        $kamar->status = $request->status;
        $kamar->patient_id = $request->id_user;
        $kamar->kamar_id = $request->id_kamar;
        $kamar->save();
        return redirect('/pasien/order')->with('Done', 'Your order waiting for payment');
    }
    public function konsultasi()
    {
        return view('user.konsultasi');
    }
    public function history()
    {
        $jeniskamar = histori::where('jenis_layanan', 'Reservasi Layanan Kamar')->latest()->get();
        $countkamar = histori::where('jenis_layanan', 'Reservasi Layanan Kamar')->count();
        $jeniskonsultasi = histori::where('jenis_layanan', 'Reservasi Konsultasi')->latest()->get();
        $countkonsultasi = histori::where('jenis_layanan', 'Reservasi Konsultasi')->count();
        return view('user.historypayment', compact('jeniskamar', 'jeniskonsultasi', 'countkamar', 'countkonsultasi'));
    }

    public function order()
    {
        $checkkamar = OrderK::where('status', 'Belum membayar')->count();
        $checkdokter = OrderD::where('status', 'Belum membayar')->count();
        $orderd = OrderD::where('status', 'Belum membayar')->get();
        $order = OrderK::where('status', 'Belum membayar')->get();
        return view('user.order', compact('order', 'checkkamar', 'checkdokter', 'orderd'));
    }
    public function invoicek($id)
    {
        $i = 0;
        $order = OrderK::find($id);
        return view('user.invoice', compact('order', 'i'));
    }

    public function bukti_pembayaran(Request $request)
    {
        $this->validate($request, [
            'pic' => 'image|mimes:jpeg,png,jpg|max:5000'
        ]);

        $Name = $request->pic->getClientOriginalName() . '-' . time()
            . '.' . $request->pic->extension();
        $request->pic->move(public_path('images/bukti'), $Name);

        $idkamar = $request->kamar_id;
        Kamar::find($idkamar)->update([
            'status' => $request->updatestatus
        ]);

        $idorder = $request->order_id;
        OrderK::find($idorder)->update([
            'status' => $request->status
        ]);

        $histori = new histori();
        $histori->noinv = $request->inv;
        $histori->orderkamar_id = $idorder;
        $histori->jenis_layanan = $request->jenis_layanan;
        $histori->bukti_pembayaran = $Name;
        $histori->save();
        return redirect()->route('history')->with('Done', 'Upload bukti pembayaran berhasil.');
    }
    public function artikel($id)
    {
        $article = Artikel::find($id);
        return view('user.content.artikel', compact('article'));
    }
}
