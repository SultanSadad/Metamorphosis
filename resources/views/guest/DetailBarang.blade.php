@extends('layout.main')
@section('main')
<h1 class="text-center mt-28 font-semibold text-4xl">Detail Barang</h1>
<div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
        <!-- Column 1: Image -->
        <div class="flex justify-center">
            <img src="{{ asset('image/fotobarang/' . $barang->foto) }}" alt="{{ $barang->nama }}" class="rounded-lg shadow-md w-full">
        </div>
        <!-- Column 2: Product Details -->
        <div>
            <h1 class="text-2xl font-bold mb-2">{{ $barang->nama }}</h1>
            <p class="text-xl text-gray-700 font-semibold mb-4">Rp {{ number_format($barang->harga, 0, ',', '.') }}</p>
            <div class="mb-4">
                <button onclick="my_modal_1.showModal()" class="bg-black text-white px-6 py-2 rounded-lg shadow-md hover:bg-base-300 transition duration-300 mb-2">Beli sekarang</button>
                <!-- Open the modal using ID.showModal() method -->
                <dialog id="my_modal_1" class="modal">
                    <div class="modal-box">
                        <h3 class="font-bold text-lg">Hello!</h3>
                        <p class="py-4">Press ESC key or click outside to close</p>
                    </div>
                    <form method="dialog" class="modal-backdrop">
                        <button>close</button>
                    </form>
                </dialog>
                <form action="{{ route('keranjang.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_barang" value="{{ $barang->id }}">
                    <input type="hidden" name="total_harga" value="{{ $barang->harga }}">
                    <button type="submit" class="bg-gray-200 text-black px-6 py-2 rounded-lg shadow-md ml-2 hover:bg-gray-300 transition duration-300">+ Keranjang</button>
                </form>
            </div>
            <div class="grid grid-cols-2 gap-4 text-gray-600">
                <div>
                    <p class="py-2 border-b"><strong>Ukuran:</strong></p>
                    <p class="py-2 border-b"><strong>Merek:</strong></p>
                    <p class="py-2 border-b"><strong>Kondisi:</strong></p>
                </div>
                <div>
                    <p class="py-2 border-b">{{ $barang->ukuran }}</p>
                    <p class="py-2 border-b font-semibold">{{ $barang->merek }}</p>
                    <p class="py-2 border-b">{{ $barang->kondisi }}</p>
                </div>
            </div>
            <div class="mt-4 p-4 bg-gray-100 rounded-lg">
                <p class="text-gray-600"><strong>Description:</strong>{{ $barang->deskripsi }}</p>
                <p class="text-gray-600 mt-14 underline ">Silakan cek ukuran terlebih dahulu, Pembelian tidak bisa di cancel/refund.</p>
            </div>
        </div>
    </div>
</div>
@endsection
