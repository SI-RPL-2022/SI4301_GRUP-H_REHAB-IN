<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use App\Models\Dokter;

class DokterController extends Controller
{
    public function index()
    {
        return view('dokter.home');
    }

    public function jadwal()
    {
        return view('dokter.jadwal');
    }
    public function login()
    {
        return view('dokter.login');
    }
    public function authdok(Request $request)
    {
        // dd($request);
        $cred = $request->validate([
            'username' => 'required|exists:users',
            'password' => 'required|min:6',
            // 'role' => 'required'
        ]);

        // dd("after validate");
        if (Auth::attempt($cred)) {
            if (Auth::user()->role == 2) {
                $request->session()->regenerate();
                return redirect()->intended('/dokter');
            } else {
                return back()->with('loginError', 'Login failed!');
            }
        }
        return back()->with('loginError', 'Login failed!');
    }

    public function register()
    {
        return view('dokter.regisdok');
    }

    public function registerdokter(Request $request)
    {

        if ($request->password == $request->confpw) {
            // dd($request);
            $validated = $request->validate([
                'name' => 'required|max:255',
                'username' => 'required|min:6|unique:users',
                'email' => 'required|email:dns',
                'password' => 'required|min:6|max:255',
                'nohp' => 'required|min:10|max:13',
                'address' => 'required|min:10',
                'tanggallahir' => 'required',
                'role' => 'required'
            ]);

            $validated['password'] = Hash::make($validated['password']);
            User::create($validated);
            return redirect('/login-dokter')->with('success', 'Registrasi Berhasil, plase login!');
        } else {
            return redirect('/regisdok')->with('Failure', 'Password Tidak Sama');
        }
    }

    public function forgetpw()
    {
        return view('');
    }

    public function profile($id)
    {
        $user = User::where('role', 2)->find($id);
        $dokter = Dokter::where('id_dokter', $user->id)->first();
        // dd($user->id);
        return view('dokter.profile', compact('user', 'dokter'));
    }

    public function editprofile($id)
    {
        $user = User::find($id);
        $dokter = Dokter::where('id_dokter', $user->id)->first();
        return view('dokter.edit', compact('user', 'dokter'));
    }
    public function updateprofile(Request $request)
    {
        //validate form
        $this->validate($request, [
            'pic'     => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'name' => 'max:255',
            'tanggallahir' => 'required'
        ]);

        $id = $request->id;

        //upload image
        if ($request->pic != null) {
            $Name = $request->pic->getClientOriginalName() . '-' . time()
                . '.' . $request->pic->extension();
            $request->pic->move(public_path('dokterProfile'), $Name);
            //create post with pict
            User::find($id)->update([
                'pic'     => $Name,
                'name'     => $request->name,
                'nohp'     => $request->nohp,
                'address'     => $request->address,
                'tanggallahir'   => $request->tanggallahir
            ]);
        } else {

            //create post with pict
            User::find($id)->update([
                'name'     => $request->name,
                'nohp'     => $request->nohp,
                'address'     => $request->address,
                'tanggallahir'   => $request->tanggallahir
            ]);
        }

        // $isDOkter = 
        if (Dokter::where('id_dokter', $id)->first() == null) {
            // data dokter belum ada jadi di insert
            $dokter = new Dokter();
            $dokter->id_dokter = $id;
            $dokter->spesialis = $request->spesialis;
            $dokter->deskripsi = $request->deskripsi;
            $dokter->jadwal_time = $request->jadwal_time;

            $dokter->save();
        } else {
            // data dokter ada jadi di update
            Dokter::where('id_dokter', $id)->update([
                'spesialis' => $request->spesialis,
                'deskripsi' => $request->deskripsi,
                'jadwal_time' => $request->jadwal_time
            ]);
        }


        $user = User::find($id);
        $dokter = Dokter::where('id_dokter', $user->id)->first();
        return view('dokter.profile', compact('user', 'dokter'));
    }
}
