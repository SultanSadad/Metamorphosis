<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class webController extends Controller
{
    public function Login()
    {
        return view('guest/Login',[
            "title" => "Login"
        ]);
    }
    public function Register()
    {
        return view('guest/Register',[
            "title" => "Register"
        ]);
    }
    public function Profile()
    {
        return view('guest/Profile',[
            "title" => "Profile"
        ]);
    }
    public function AboutUs()
    {
        return view('guest/AboutUs',[
            "title" => "About Us"
        ]);
    }
    public function index()
    {
        return view('guest/index',[
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
 
    public function Role()
    {
        return view('Role',[
            "title" => "Role"
        ]);
    }
    public function DetailBarang()
    {
        return view('guest/DetailBarang',[
            "title" => "DetailBarang"
        ]);
    }
   
}

