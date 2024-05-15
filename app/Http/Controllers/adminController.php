<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;

class AdminController extends Controller
{
    public function mainAdmin()
    {
        return view('layout/mainAdmin', [
            "title" => "admin"
        ]);
    }

    public function AdminKonfirmasi()
    {
        return view('admin/AdminKonfirmasi', [
            "title" => "Konfirmasi"
        ]);
    }

    public function Barang()
    {
        $barang = Barang::all(); // Mengambil semua data dari model Barang
        return view('admin/Barang', [
            "title" => "Barang",
            "barang" => $barang, // Menginisialisasi variabel barang dengan data dari model
        ]);
    }

    public function DataCustomer()
    {
        // Mengambil pengguna yang memiliki role 'admin'
        $users = User::where('role', 'pembeli')->get();

        return view('admin/DataCustomer', [
            'users' => $users,
            'title' => 'Data Customer'
        ]);
    }

    public function DataBarang()
    {
        return view('admin/DataBarang', [
            "title" => "Daftar Barang"
        ]);
    }

    public function daftarAdmin()
    {
        // Mengambil pengguna yang memiliki role 'admin'
        $users = User::where('role', 'admin')->get();

        return view('admin/DaftarAdmin', [
            'users' => $users,
            'title' => 'Daftar Admin'
        ]);
    }

    public function Review()
    {
        return view('admin/Review', [
            "title" => "Review"
        ]);
    }

    public function store(Request $request)
    {
        // Validasi file yang di-upload
        $request->validate([
            'foto' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menangani upload file
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads', $filename);

            // Menyimpan data Barang beserta path foto
            Barang::create(array_merge(
                $request->except(['_token', 'submit']),
                ['foto' => $path]
            ));

            return redirect('/admin/Barang')->with('success', 'Barang berhasil ditambahkan.');
        }

        return back()->withErrors('Upload file gagal.');
    }

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('admin/editBarang', compact('barang'));
    }

    public function update(Request $request, $id)
    {
        $barang = Barang::find($id);

        // Validasi file yang di-upload
        $request->validate([
            'foto' => 'image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Menangani upload file jika ada file baru
        if ($request->hasFile('foto')) {
            $file = $request->file('foto');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/uploads', $filename);

            // Update data Barang beserta path foto baru
            $barang->update(array_merge(
                $request->except(['_token', 'submit']),
                ['foto' => $path]
            ));
        } else {
            // Update data Barang tanpa mengganti foto
            $barang->update($request->except(['_token', 'submit']));
        }

        return redirect('/admin/Barang')->with('success', 'Barang berhasil diupdate.');
    }

    public function destroy($id)
    {
        $barang = Barang::find($id);
        if ($barang) {
            // Hapus file foto terkait jika diperlukan
            \Storage::delete($barang->foto);
            $barang->delete();
        }

        return redirect('/admin/Barang')->with('success', 'Barang berhasil dihapus.');
    }
}
