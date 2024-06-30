@extends('layout.mainAdmin')

@section('main-admin')
<div class="flex ms-8 mt-5">
    <button type="button" class="h-12 btn btn-success btn-sm text-gray-200 rounded-lg font-light" onclick="my_modal_3.showModal()">+ Tambah Barang</button>
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
                <input type="file" name="foto" class="form-control" />
                </label>

                <div class="flex justify-end">
                    <button type="button" id="btn-batal" class="btn btn-sm btn-error text-white w-xs right-2 top-2" onclick="my_modal_3.close()">Batal</button>
                    <button type="submit" name="submit" class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Tambahkan</button>
                </div>
            </div>
        </dialog>
    </form>

    <!-- Input pencarian barang -->
    <input id="search-input" class="h-12 ms-4 pl-10 pr-4 text-base placeholder-gray-500 border w-3/4 rounded-full focus:shadow-outline" type="search" placeholder="Cari Barang" onkeyup="searchTable()" />
    <script>
    function searchTable() {
        // Mendapatkan nilai input pencarian
        var input = document.getElementById('search-input').value.toUpperCase();
        // Mendapatkan tabel dan baris-barisnya
        var table = document.getElementsByTagName('table')[0];
        var tr = table.getElementsByTagName('tr');

        // Loop melalui semua baris tabel, dan sembunyikan yang tidak cocok dengan pencarian
        for (var i = 0; i < tr.length; i++) {
            var td = tr[i].getElementsByTagName('td')[1]; // Kolom kedua berisi nama barang

            if (td) {
                var txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(input) > -1) {
                    tr[i].style.display = '';
                } else {
                    tr[i].style.display = 'none';
                }
            }
        }
    }
</script>

</div>

<!-- Konten dialog modal -->
<div class="overflow-x-auto ms-8 mt-5 border rounded">
    <table  id="barang-table" class="table">
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
                                <img src="{{ asset('image/fotobarang/' . $b->foto) }}" alt="Foto Barang" />
                            </div>
                        </div>
                    </div>
                </td>
                <td>
                    <span class="font-semibold">{{ $b->nama }}</span>
                    <br/>
                </td>
                <td class="font-semibold">Rp.{{ $b->harga }}</td>
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
                    <dialog id="my_modal_5_{{$b->id}}" class="modal">
                        <form action="/admin/{{$b->id}}" method="POST" enctype="multipart/form-data">
                            @method('put')
                            @csrf
                            <div class="modal-box"  style="width: 500px;">
                                <p class="mt-2 font-bold">Nama Barang</p>
                                <input type="text" name="nama" class="input mt-1 input-bordered w-full max-w-full" value="{{$b->nama}}" />
                                <p class="mt-2 font-light">Status</p>
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
                </th>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
