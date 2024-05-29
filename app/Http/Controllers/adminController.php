<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
use App\Models\User;
use App\Models\Pesan;

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
        $pesan = Pesan::all(); // Mengambil semua pesan dari database
        return view('admin/Review', [
            "title" => "Review",
            "pesan" => $pesan // Mengirim data pesan ke view
        ]);
    }

    public function store(Request $request)
{
    // Validate the request
    $request->validate([
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // add other validation rules as needed
    ]);

    // Create the Barang record
    $data = Barang::create($request->except(['_token', 'submit', 'foto']));

    if ($request->hasFile('foto')) {
        // Get the original file name
        $originalName = $request->file('foto')->getClientOriginalName();

        // Define the storage path
        $destinationPath = public_path('image/fotobarang');

        // Ensure the directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // Move the file
        $request->file('foto')->move($destinationPath, $originalName);

        // Check if the file was moved successfully
        if (file_exists($destinationPath . '/' . $originalName)) {
            // Save the file name in the database
            $data->foto = $originalName;
            $data->save();
        } else {
            return redirect()->back()->with('error', 'File upload failed');
        }
    }

    return redirect('/admin/Barang')->with('success', 'Data berhasil ditambahkan');
}

    public function edit($id)
    {
        $barang = Barang::find($id);
        return view('admin/editBarang', compact('barang'));
    }

    public function update(Request $request, $id)
{
    // Validate the request
    $request->validate([
        'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        // add other validation rules as needed
    ]);

    // Find the Barang record
    $barang = Barang::find($id);

    // Update the attributes except for the file and some others
    $barang->update($request->except(['_token', 'submit', 'foto']));

    if ($request->hasFile('foto')) {
        // Delete the old photo if it exists
        if ($barang->foto && file_exists(public_path('image/fotobarang/' . $barang->foto))) {
            unlink(public_path('image/fotobarang/' . $barang->foto));
        }

        // Get the original file name
        $originalName = $request->file('foto')->getClientOriginalName();

        // Define the storage path
        $destinationPath = public_path('image/fotobarang');

        // Ensure the directory exists
        if (!file_exists($destinationPath)) {
            mkdir($destinationPath, 0777, true);
        }

        // Move the file
        $request->file('foto')->move($destinationPath, $originalName);

        // Check if the file was moved successfully
        if (file_exists($destinationPath . '/' . $originalName)) {
            // Save the file name in the database
            $barang->foto = $originalName;
        } else {
            return redirect()->back()->with('error', 'File upload failed');
        }
    }

    // Save the updated record
    $barang->save();

    return redirect('/admin/Barang')->with('success', 'Data berhasil diperbarui');
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
