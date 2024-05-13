<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function index()
    {
        return view('index',[
            "title" => "index"
        ]);
    }
    public function AdminDashboard()
    {
        return view('AdminDashboard',[
            "title" => "Admin"
        ]);
    }
    public function status()
    {
        return view('status',[
            "title" => "Status"
        ]);
    }
    public function Notifikasi()
    {
        return view('Notifikasi',[
            "title" => "Notifikasi"
        ]);
    }
    public function Keranjang()
    {
        return view('Keranjang',[
            "title" => "Keranjang"
        ]);
    }
    public function Profile()
    {
        return view('Profile',[
            "title" => "Profile"
        ]);
    }
    public function Role()
    {
        return view('Role',[
            "title" => "Role"
        ]);
    }
    public function DetailBarang()
    {
        return view('DetailBarang',[
            "title" => "DetailBarang"
        ]);
    }

    public function notif()
    {
        return view('notif',[
            "title" => "notif"
        ]);
    }
}