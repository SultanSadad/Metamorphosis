@extends('layout.main')
@section('main')
<div class="flex mt-10 justify-center">
    <div class="p-8 rounded-lg shadow-lg bg-gray-100">
        <h1 class="text-3xl text-center font-medium">Profile</h1>
        <div class="grid grid-cols-3 gap-4 mt-10">
            <div class="text-center">
                <img src="/image/profile1.png" alt="Gambar Profil" class="mx-auto w-56 h-56 rounded-full mb-4">
                <button class="btn btn-outline">Tambahkan Foto</button>
            </div>
            <div class="ms-20">
                <div class="flex-none w-64">
                    <h2 class="text-2xl font-semibold">Nama</h2>
                </div>
                <div class="flex-auto w-64 mt-1">
                    <h2 class="text-2xl font-sans">{{ $user->name }}</h2>
                </div>
                <div class="flex-none w-64 mt-5">
                    <h2 class="text-2xl font-semibold">Email</h2>
                </div>
                <div class="flex-auto w-64 mt-1">
                    <h2 class="text-2xl font-sans">{{ $user->email }}</h2>
                </div>
                <div class="flex-none w-64 mt-5">
                    <h2 class="text-2xl font-semibold">Tanggal Lahir</h2>
                </div>
                <div class="flex-auto w-64 mt-1">
                    <h2 class="text-2xl font-sans">{{ $user->birthdate }}</h2>
                </div>
            </div>
            <div class="ms-20 mb-40">
                <div class="flex-none w-64">
                    <h2 class="text-2xl font-semibold">No Handphone</h2>
                </div>
                <div class="flex-auto w-32 mt-1">
                    <h2 class="text-2xl font-sans">{{ $user->NoHP }}</h2>
                </div>
                <div class="flex-none w-32 mt-5">
                    <h2 class="text-2xl font-semibold">Alamat</h2>
                </div>
                <div class="flex-auto w-64 mt-1">
                    <h2 class="text-2xl font-sans">{{ $user->alamat }}</h2>
                </div>
                <div class="flex-none w-64 mt-5">
                    <h2 class="text-2xl font-semibold">Jenis Kelamin</h2>
                </div>
                <div class="flex-auto w-32 mt-1">
                    <h2 class="text-2xl font-sans">{{ $user->gender }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div></div>
@endsection
