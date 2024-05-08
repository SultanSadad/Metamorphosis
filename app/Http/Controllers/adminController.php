<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
        return view('admin/Barang', [
            "title" => "Barang"
        ]);
    }

    public function DataCustomer()
    {
        return view('admin/DataCustomer', [
            "title" => "Data Customer"
        ]);
    }

    public function DataBarang()
    {
        return view('admin/DataBarang', [
            "title" => "Daftar Barang"
        ]);
    }

    public function DaftarAdmin()
    {
        return view('admin/DaftarAdmin', [
            "title" => "Data Admin"
        ]);
    }
    public function Review()
    {
        return view('admin/Review',[
            "title" => "Review"
        ]);
    }
}
