<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang; // Import model Barang
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class webController extends Controller
{
    // Menampilkan halaman index untuk guest
    public function index()
    {
        $barang = Barang::all();
        return view('guest/index', [
            "title" => "index",
            "barang" => $barang,
        ]);
    }

    // Menampilkan halaman dashboard admin
    public function AdminDashboard()
    {
        return view('AdminDashboard', [
            "title" => "Admin"
        ]);
    }

    // Menampilkan halaman status
    public function status()
    {
        return view('status', [
            "title" => "Status"
        ]);
    }

    // Menampilkan halaman notifikasi
    public function Notifikasi()
    {
        return view('Notifikasi', [
            "title" => "Notifikasi"
        ]);
    }

    // Menampilkan halaman keranjang
    public function Keranjang()
    {
        return view('Keranjang', [
            "title" => "Keranjang"
        ]);
    }

    // Menampilkan halaman profil untuk guest
    public function Profile()
    {
        return view('guest/Profile', [
            "title" => "Profile"
        ]);
    }

    // Menampilkan halaman role
    public function Role()
    {
        return view('Role', [
            "title" => "Role"
        ]);
    }

    // Menampilkan halaman detail barang untuk guest
    public function DetailBarang()
    {
        return view('guest/DetailBarang', [
            "title" => "DetailBarang"
        ]);
    }

    // Menampilkan halaman login
    public function Login()
    {
        return view('guest/Login', [
            "title" => "Login"
        ]);
    }

    // Menampilkan halaman register
    public function Register()
    {
        return view('guest/Register', [
            "title" => "Register"
        ]);
    }

    // Menampilkan halaman index untuk guest
    public function indexguest()
    {
        $barang = Barang::all();
        return view('guest/indexguest', [
            "title" => "indexguest",
            "barang" => $barang,
        ]);
    }

    // Fungsi untuk autentikasi
    public function Autentikasi(Request $request)
    {
        $request->validate([
            'email' => 'required',
            'password' => 'required',
        ], [
            'email.required' => 'Email tidak boleh kosong',
            'password.required' => 'Password tidak boleh kosong',
        ]);

        $infologin = [
            'email' => $request->email,
            'password' => $request->password,
        ];

        if (Auth::attempt($infologin)) {
            if (auth::user()->role == 'admin') {
                return redirect('/admin/Barang');
            } elseif (auth::user()->role == 'pembeli') {
                return redirect('/guest/indexguest');
            }
        } else {
            return redirect()->route('login')->withErrors('Username dan password yang dimasukkan salah')->withInput();
        }
    }
    public function create(Request $request)
    {
        Session::flash('name', $request->name);
        Session::flash('email', $request->email);
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
            'alamat' => 'required',
            'NoHP' => 'required|min:8',
        ], [
            'name.required' => 'Nama wajib diisi',
            'email.required' => 'Email tidak boleh kosong',
            'email.email' => 'Silahkan masukkan email yang valid',
            'email.unique' => 'Email sudah terdaftar',
            'password.required' => 'Password tidak boleh kosong',
            'password.min' => 'Jumlah password minimal 6 huruf',
            'alamat.required' => 'Alamat wajib diisi',
            'NoHP.required' => 'No HP wajib diisi',
        ]);

        $data = [
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'alamat' => $request->alamat,
            'NoHP' => $request->NoHP,
        ];
        User::create($data);

        return redirect()->route('login')->with('success', 'Register berhasil, silahkan login.');
    }
}

