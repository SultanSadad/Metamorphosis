<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang; // Import model Barang
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Pesan;

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
    public function Bantuan()
    {
        $barang = Barang::all();
        return view('guest/Bantuan', [
            "title" => "index",
        ]);
    }

    // Menampilkan halaman dashboard admin
    public function AdminDashboard()
    {
        return view('AdminDashboard', [
            "title" => "Admin"
        ]);
    }
    public function AboutUs()
    {
        return view('guest/AboutUs', [
            "title" => "Tentang Kami"
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
        $barang = Barang::all();
        return view('guest/Keranjang', [
            "title" => "Keranjang",
            "barang" => $barang,
        ]);
    }

    // Menampilkan halaman profil untuk guest

public function Profile()
{
    $user = Auth::user();
    return view('guest/Profile', [
        "title" => "Profile",
        "user" => $user
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
    public function DetailBarang($id)
{
    $barang = Barang::find($id);
    return view('guest/DetailBarang', [
        "title" => "DetailBarang",
        "barang" => $barang
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
    // Menyimpan input sementara ke dalam sesi
    Session::flash('name', $request->name);
    Session::flash('email', $request->email);

    // Validasi input
    $request->validate([
        'name' => 'required',
        'email' => 'required|email|unique:users',
        'password' => 'required|min:6',
        'alamat' => 'required',
        'NoHP' => 'required|min:8',
        'gender' => 'nullable|string|max:10', // Tambahkan validasi untuk gender
        'birthdate' => 'nullable|date',       // Tambahkan validasi untuk birthdate
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

    // Menyimpan data ke dalam array
    $data = [
        'name' => $request->name,
        'email' => $request->email,
        'password' => Hash::make($request->password),
        'alamat' => $request->alamat,
        'NoHP' => $request->NoHP,
        'gender' => $request->gender,    // Tambahkan gender ke array data
        'birthdate' => $request->birthdate, // Tambahkan birthdate ke array data
    ];

    // Membuat user baru
    User::create($data);

    // Redirect ke halaman login dengan pesan sukses
    return redirect()->route('login')->with('success', 'Register berhasil, silahkan login.');
}
public function pesan(Request $request)
{
    // Validasi input
    $validatedData = $request->validate([
        'nama' => 'required|string|max:255',
        'email' => 'required|string|email|max:255',
        'HP' => 'required|string|max:20',
        'pesan_saran' => 'required|string',
    ]);

    // Simpan data ke database
    Pesan::create([
        'nama' => $validatedData['nama'],
        'email' => $validatedData['email'],
        'HP' => $validatedData['HP'],
        'pesan_saran' => $validatedData['pesan_saran'],
    ]);

    // Redirect atau kirim respon sukses
    return redirect()->back()->with('success', 'Pesan Anda telah dikirim!');
}
}


