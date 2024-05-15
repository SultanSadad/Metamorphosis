<!-- resources/views/admin/barang.blade.php -->

@extends('layout.mainAdmin')

@section('main-admin')
<div class="flex ms-8 mt-5">
    <button type="button" class="btn btn-success text-gray-200 py-3" onclick="my_modal_3.showModal()">+ Tambah Barang</button>
    <form action="/admin/store" method="post" enctype="multipart/form-data">
        @csrf
    <!-- Dialog modal untuk tambah barang -->
    <dialog id="my_modal_3" class="modal">
        <div class="modal-box">
            <p class="mt-2 font-bold">Nama Barang</p>
            <input type="text" name="nama" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-2 font-bold">Status</p>
            <input type="text" name="status" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Harga</p>
            <input type="text" name="harga" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Merek</p>
            <input type="text" name="merek" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Ukuran</p>
            <input type="text" name="ukuran" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Kondisi</p>
            <input type="text" name="kondisi" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Deskripsi</p>
            <input type="text" name="deskripsi" class="input mt-1 input-bordered w-full max-w-full" />
            <p class="mt-1 font-bold">Foto Barang</p>
            <label for="file-upload" class="flex items-center justify-center w-full mt-1 mb-5 px-1  py-1 bg-white text-black rounded-lg border border-gray-300 cursor-pointer hover:bg-blue-500 hover:text-white">
            <span>Upload Foto</span>
            <input id="file-upload" type="file" name="foto" class="hidden" />
            </label>

            <div class="flex justify-end">
                <form method="dialog" action="/admin/Barang">
                    <button type="button" id="btn-batal" class="btn btn-sm btn-error text-white w-xs right-2 top-2" onclick="my_modal_3.close()">Batal</button>

                </form>
                <button type="submit" name="submit" class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Tambahkan</button>
            </div>
        </form>
        </div>
    </dialog>

    <!-- Input pencarian barang -->
    <input class="h-12 ms-4 pl-10 pr-4 text-base placeholder-gray-500 border rounded-full focus:shadow-outline" type="search" placeholder="Cari Barang">
</div>

<!-- Konten dialog modal -->
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table class="table">
        <!-- head -->
        <thead>
            <tr>
                <th>Foto</th>
                <th>Name/Brand</th>
                <th>Harga</th>
                <th>Status</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            <!-- row 1 -->
            @foreach ($barang as $b)
            <tr>
                <td>
                    <div class="flex gap-3">
                        <div class="avatar">
                            <div class="w-24 h-24">
                                <img src="{{ $b->foto }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="font-bold">{{ $b->nama }}</span>
                    <br/>
                </td>
                <td class="font-bold">{{ $b->harga }}</td>
                <td class="text-success">{{ $b->status }}</td>
                <th>
                    <!-- You can open the modal using ID.showModal() method -->
                    <button class="btn btn-error btn-xs rounded-sm text-white" onclick="document.getElementById('my_modal_4_{{$b->id}}').showModal()">Hapus</button>
<dialog id="my_modal_4_{{$b->id}}" class="modal">
    <div class="modal-box" style="display: flex; flex-direction: column; align-items: center;">
        <h3 class="font-bold text-lg">
            <center>Anda yakin ingin menghapus?</center>
        </h3>
        <div style="margin-top: 10px;">
            <form action="/admin/{{$b->id}}" method="POST">
                @csrf
                @method('DELETE')
                <button type="button" class="btn rounded-sm btn-info text-white btn-sm" onclick="document.getElementById('my_modal_4_{{$b->id}}').close()">Batal</button>
                <button type="submit" class="btn rounded-sm btn-error text-white btn-sm">Hapus</button>
            </form>
        </div>
    </div>
</dialog>

                    <button class="btn btn-info rounded-none btn-xs text-gray-200" onclick="document.getElementById('my_modal_5_{{$b->id}}').showModal()">Edit</button>
<dialog id="my_modal_5_{{$b->id}}" class="modal" >
    <form action="/admin/{{$b->id}}" method="POST" enctype="multipart/form-data">
        @method('put')
        @csrf
        <div class="modal-box"  style="width: 500px;">
            <p class="mt-2 font-bold">Nama Barang</p>
            <input type="text" name="nama" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->nama}}" />
            <p class="mt-2 font-bold">Status</p>
            <input type="text" name="status" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->status}}" />
            <p class="mt-1 font-bold">Harga</p>
            <input type="text" name="harga" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->harga}}" />
            <p class="mt-1 font-bold">Merek</p>
            <input type="text" name="merek" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->merek}}" />
            <p class="mt-1 font-bold">Ukuran</p>
            <input type="text" name="ukuran" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->ukuran}}" />
            <p class="mt-1 font-bold">Kondisi</p>
            <input type="text" name="kondisi" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->kondisi}}" />
            <p class="mt-1 font-bold">Deskripsi</p>
            <input type="text" name="deskripsi" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->deskripsi}}" />
            <p class="mt-1 font-bold">Foto Barang</p>
            <label for="file-upload" class="flex items-center justify-center w-full mt-1 mb-5 px-1  py-1 bg-white text-black rounded-lg border border-gray-300 cursor-pointer hover:bg-blue-500 hover:text-white">
                <span>Upload Foto</span>
                <input id="file-upload" type="file" name="foto" class="hidden" />
            </label>
            <div class="flex justify-end">
                <button type="button" class="btn btn-sm btn-error text-white w-xs right-2 top-2" onclick="document.getElementById('my_modal_5_{{$b->id}}').close()">Batal</button>
                <button type="submit" name="submit" class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Simpan</button>
            </div>
        </div>
    </form>
</dialog>


            </tr>
                    <!-- Tambahkan kode untuk aksi -->
                    
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
