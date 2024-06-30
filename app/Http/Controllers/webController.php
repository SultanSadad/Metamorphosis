<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Barang; // Import model Barang
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\Pesan;
use App\Models\Keranjang;
use App\Models\Pembayaran;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\File;
use Barryvdh\DomPDF\Facade as PDF;
use \Mpdf\Mpdf;

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
    public function Welcome()
    {
        $barang = Barang::all();
        return view('/', [
            "title" => "Welcome",
            "barang" => $barang,
        ]);
    }
    public function Privacy()
    {
        $barang = Barang::all();
        return view('/guest/Privacy', [
            "title" => "Privacy",
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
        // Mengambil user yang sedang terautentikasi
        $user = Auth::user();
    
        // Mengambil data pembayaran yang terkait dengan user tersebut
        $pembayaran = Pembayaran::where('id_user', $user->id)
            ->with(['barang']) // Memuat relasi barang
            ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan tanggal pembuatan terbaru
            ->get();
    
        // Mengirimkan data ke view 'guest.Notifikasi'
        return view('guest.Notifikasi', [
            "title" => "Notifikasi",
            "pembayaran" => $pembayaran // Mengirimkan data pembayaran ke view
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
        $pembayaran = Pembayaran::all();
        $barang = Barang::all();
        return view('guest.indexguest', [
            "title" => "index",
            "barang" => $barang,
            "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
        ]);
    }

    public function downloadPDF($id_pembayaran)
{
    $user = Auth::user();
    
        // Mengambil data pembayaran yang terkait dengan user tersebut
        $pembayaran = Pembayaran::where('id_user', $user->id)
            ->with(['barang']) // Memuat relasi barang
            ->orderBy('created_at', 'desc') // Mengurutkan berdasarkan tanggal pembuatan terbaru
            ->get();

    $pdf = PDF::loadView('.pdf', compact('pembayaran'));
    return $pdf->download('detail-pesanan-' . $id_pembayaran . '.pdf');
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
            return redirect('/admin/Dashboard');
        } elseif (auth::user()->role == 'pembeli') {
            return redirect('/guest/indexguest');
        }
    } else {
        return redirect()->route('login')->with([
            'error' => 'Username dan password yang dimasukkan salah',
            'showModal' => true
        ])->withInput();
    }
}
public function logout()
{
    Auth::logout();
    return redirect('/guest/login');
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
public function addToKeranjang(Request $request)
{
    // Validasi request
    $request->validate([
        'id_barang' => 'required|exists:barang,id',
    ]);

    // Dapatkan user yang sedang login
    $user = Auth::user();

    // Buat data keranjang baru
    $keranjang = new Keranjang();
    $keranjang->id_barang = $request->id_barang;
    $keranjang->id_user = $user->id;
    $keranjang->total_harga = $request->total_harga; // Misalnya ada harga total di request

    // Simpan ke database
    $keranjang->save();

    // Redirect ke halaman sebelumnya dengan pesan sukses
    return redirect()->back()->with('success', 'Barang berhasil ditambahkan ke keranjang.');
}


    public function showKeranjang()
    {
        $user = Auth::user();
        $keranjang = Keranjang::where('id_user', $user->id)->with('barang')->get();
        $totalHarga = $keranjang->sum(function ($item) {
            return $item->barang->harga;
        });

        $title = "Keranjang Belanja";
        return view('guest.Keranjang', compact('keranjang', 'totalHarga', 'title'));
    }

    // Fungsi untuk menghapus item dari keranjang
    public function hapusKeranjang(Request $request)
    {
        $request->validate([
            'id' => 'required|exists:keranjang,id',
        ]);

        Keranjang::where('id', $request->id)->delete();
        return redirect()->back()->with('success', 'Barang berhasil dihapus dari keranjang.');
    }

    // Fungsi untuk menyimpan pembayaran
    public function Pembayaran(Request $request)
    {
        DB::beginTransaction();

        try {
            // Validasi data request
            $validatedData = $request->validate([
                'nama_penerima' => 'required|string|max:255',
                'nohp_penerima' => 'required|string|max:15',
                'email_penerima' => 'required|email|max:255',
                'alamat_penerima' => 'required|string',
                'metode' => 'required|in:COD,Transfer',
                'bukti_pembayaran' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048'
            ]);

            if ($request->hasFile('bukti_pembayaran')) {
                $imageName = time().'.'.$request->bukti_pembayaran->extension();  
                $request->bukti_pembayaran->move(public_path('image/bukti'), $imageName);
                $validatedData['bukti_pembayaran'] = $imageName;
            }

            $user = Auth::user();
            $keranjang = Keranjang::where('id_user', $user->id)->get();

            if ($keranjang->isEmpty()) {
                return redirect()->back()->withErrors('Keranjang belanja Anda kosong.');
            }

            foreach ($keranjang as $item) {
                $dataPembayaran = [
                    'id_barang' => $item->id_barang,
                    'id_user' => $user->id,
                    'id_keranjang' => $item->id,
                    'total_harga' => $item->barang->harga,
                    'tanggal' => now(),
                    'status' => 'Pending',
                    'metode' => $request->metode,
                    'nama_penerima' => $request->nama_penerima,
                    'nohp_penerima' => $request->nohp_penerima,
                    'email_penerima' => $request->email_penerima,
                    'alamat_penerima' => $request->alamat_penerima,
                    'bukti_pembayaran' => $validatedData['bukti_pembayaran'] ?? null,
                ];

                Log::info('Data Pembayaran:', $dataPembayaran);

                Pembayaran::create($dataPembayaran);
            }

            Keranjang::where('id_user', $user->id)->delete();

            DB::commit();

            return redirect()->route('keranjang.show')->with('success', 'Pembayaran berhasil dibuat.');
        } catch (\Exception $e) {
            DB::rollBack();
            Log::error('Error saat menyimpan pembayaran: '.$e->getMessage());
            return redirect()->back()->withErrors('Terjadi kesalahan saat menyimpan pembayaran. Silakan coba lagi.');
        }
    }
    public function acceptOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->status = 'accepted';
        $order->save();

        $order->user->notify(new OrderStatusNotification($order, 'accepted'));

        return redirect()->back()->with('success', 'Order accepted.');
    }

    public function rejectOrder($orderId)
    {
        $order = Order::find($orderId);
        $order->status = 'rejected';
        $order->save();

        $order->user->notify(new OrderStatusNotification($order, 'rejected'));

        return redirect()->back()->with('error', 'Order rejected.');
    }
    public function reviewForm($orderId)
{
    $order = Order::find($orderId);
    return view('review', compact('order'));
}

public function submitReview(Request $request, $orderId)
{
    $order = Order::find($orderId);
    // Validate and save review
    return redirect()->route('notifikasi')->with('success', 'Review submitted.');
}
public function view_pdf(){
    $mpdf = new \Mpdf\Mpdf();
    $mpdf->WriteHTML('<h1>Hello world!</h1>');
    $mpdf->Output();
}
public function Adidas()
{
    $pembayaran = Pembayaran::all();
    $barang = Barang::all();
    return view('guest.Adidas', [
        "title" => "Adidas",
        "barang" => $barang,
        "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
    ]);
}
public function Nike()
{
    $pembayaran = Pembayaran::all();
    $barang = Barang::all();
    return view('guest.Nike', [
        "title" => "Nike",
        "barang" => $barang,
        "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
    ]);
}
public function Converse()
{
    $pembayaran = Pembayaran::all();
    $barang = Barang::all();
    return view('guest.Converse', [
        "title" => "Converse",
        "barang" => $barang,
        "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
    ]);
}
public function NewBalance()
{
    $pembayaran = Pembayaran::all();
    $barang = Barang::all();
    return view('guest.NewBalance', [
        "title" => "NewBalance",
        "barang" => $barang,
        "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
    ]);
}
public function OnitsukaTiger()
{
    $pembayaran = Pembayaran::all();
    $barang = Barang::all();
    return view('guest.OnitsukaTiger', [
        "title" => "OnitsukaTiger",
        "barang" => $barang,
        "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
    ]);
}
public function Vans()
{
    $pembayaran = Pembayaran::all();
    $barang = Barang::all();
    return view('guest.Vans', [
        "title" => "index",
        "barang" => $barang,
        "pembayaran" => $pembayaran // Pastikan pembayaran juga dikirim ke view
    ]);
}
}


