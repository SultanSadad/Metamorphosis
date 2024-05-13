@extends('layout.main')
@section('main')
<div class="flex container mx-auto px-4">
    <!-- Column 1: Gambar dan Deskripsi Barang -->
    <div class="w-3/4 p-4">
        <div class="grid grid-cols-1">
            <div class="grid gap-4">
                <div class="flex gap-4 grid-cols-3 mt-7">
                    <div>
                        <img class="w-72 h-72  rounded-lg" src="image/tes/2.jpeg" alt="">
                    </div>
                    <div>
                        <img class="w-72 h-72  rounded-lg" src="image/tes/1.jpeg" alt="">
                    </div>
                </div>
                <div class="flex gap-4 grid-cols-3 ">
                    <div>
                        <img class="w-72 h-72 rounded-lg" src="image/tes/3.jpeg" alt="">
                    </div>
                    <div>
                        <img class="w-72 h-72  rounded-lg" src="image/tes/4.jpeg" alt="">
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-7">
        <h2 class="text-2xl font-semibold mt-4 mb-4" i>Detail Barang</h2>
        <div class="overflow-x-auto">
            <table class="table-auto w-full">
                <tbody>
                    <tr>
                        <td class="pr-4 font-medium">Barang</td>
                        <td></td>
                        <td class="text-lg">Vans Old Skol</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-medium">Harga</td>
                        <td></td>
                        <td class="f text-lg">Rp500.000</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-medium">Merk</td>
                        <td></td>
                        <td class=" text-lg">Vans</td>
                    </tr>
                    <tr>
                        <td class="pr-4 font-medium">Kondisi</td>
                        <td></td>
                        <td class="text-lg">9/10</td>
                    </tr>
                    <tr>
                        <td class="pr-16 font-medium">Deskripsi</td>
                        <td></td>
                        <td class="text-lg text-justify font-sans">Lorem ipsum dolor sit amet consectetur adipisicing elit. Cupiditate quia aut laborum quas sit, a, culpa provident reiciendis nam, autem placeat deserunt eligendi? Placeat fugit molestiae, eum quod possimus atque</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <!-- Column 2: Pembayaran -->
    <div class="w-1/2 mt-12 ms-20">
        <div class="p-6 border rounded-lg">
            <h3 class="text-2xl font-medium mb-5 text-center mx-auto">Ringkasan Pembayaran</h3>
            <table class="table-auto w-full">
                <!-- head -->
                <tr>
                    <td class="px-4 py-2">Harga</td>
                    <th class="px-4 py-2 text-right">Rp500.000</th>
                </tr>
                <tr>
                    <td class="px-4 py-2">Ongkos Kirim</td>
                    <th class="px-4 py-2 text-right">Rp30.000</th>
                </tr>
                <tr>
                    <td class="px-4 py-2 ">Total</td>
                    <th class="px-4 py-2 text-right">Rp530.000</th>
                </tr>
            </table>

            <!-- Open the modal using ID.showModal() method -->
            <button class="btn bg-black text-white w-full mt-4 mx-auto mb-4" onclick="my_modal_1.showModal()"> Bayar</button>
            <dialog id="my_modal_1" class="modal">
                <div class="modal-box">
                    <h3 class="font-bold text-xl text-center mb-5">Bayar</h3>
                    <h2 class=" mb-1">Nama Penerima</h2>
                    <input type="text"  class="input input-bordered w-full rounded-lg" />
                    <h2 class="font-medium mb-1 mt-3">Alamat</h2>
                    <input type="text"  class="input input-bordered w-full rounded-lg" />
                    <h2 class=" mb-1 mt-3">No Handphone</h2>
                    <input type="text" class="input input-bordered w-full rounded-lg" />
                    <h2 class=" mb-1 mt-3">Metode</h2>
                    <select class="select select-bordered rounded-sm w-full">
                        <option disabled selected>Pilih Metode</option>
                        <option>Transfer</option>
                        <option>COD</option>
                    </select>
                    <h2 class="font-medium mt-3 mb-1">Upload Bukti Transfer</h2>
                    <input type="file" class="file-input file-input-bordered w-full rounded-sm" />
                    <div class="flex justify-end mt-5">
                        <form method="dialog">
                            <button class=" btn btn-sm btn-error text-white w-xs right-2 top-2">Batal</button>
                        </form>
                        <button class="ms-2 btn btn-sm btn-success text-white w-xs right-2 top-2">Bayar</button>
                    </div>
                </div>
        </div>
        </dialog>
    </div>
</div>



@endsection