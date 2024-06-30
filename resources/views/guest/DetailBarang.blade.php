@extends('layout.main')
@section('main')
<h1 class="text-center mt-28 font-semibold text-4xl">Detail Barang</h1>
<div class="max-w-7xl mx-auto bg-white p-6 rounded-lg shadow-md mt-6">
    <!-- Tampilkan pesan sukses jika ada -->
    @if(session('success'))
        <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded relative" role="alert">
            <strong class="font-bold">Success!</strong>
            <span class="block sm:inline">{{ session('success') }}</span>
            <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                <svg class="fill-current h-6 w-6 text-green-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                    <title>Close</title>
                    <path d="M14.348 5.652a1 1 0 00-1.415 0L10 8.586 7.066 5.652a1 1 0 10-1.415 1.415L8.586 10l-2.935 2.935a1 1 0 101.415 1.415L10 11.414l2.935 2.935a1 1 0 001.415-1.415L11.414 10l2.935-2.935a1 1 0 000-1.415z"/>
                </svg>
            </span>
        </div>
    @endif

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
                <!-- Beli sekarang button with form submission -->
                <form id="beli-sekarang-form" action="{{ route('keranjang.add') }}" method="POST">
                    @csrf
                    <input type="hidden" name="id_barang" value="{{ $barang->id }}">
                    <input type="hidden" name="total_harga" value="{{ $barang->harga }}">
                    <button type="button" onclick="beliSekarang()" class="bg-black text-white px-6 py-2 rounded-lg shadow-md hover:bg-base-300 transition duration-300 mb-2">Beli sekarang</button>
                </form>
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
                    <p class="py-2 border-b"><strong>Status:</strong></p>
                </div>
                <div>
                    <p class="py-2 border-b">{{ $barang->ukuran }}</p>
                    <p class="py-2 border-b font-semibold">{{ $barang->merek }}</p>
                    <p class="py-2 border-b">{{ $barang->kondisi }}</p>
                    <p class="py-2 border-b">{{ $barang->status }}</p>
                </div>
            </div>
            <div class="mt-4 p-4 bg-gray-100 rounded-lg">
                <p class="text-gray-600"><strong>Description:</strong>{{ $barang->deskripsi }}</p>
                <p class="text-gray-600 mt-14 underline ">Silakan cek ukuran terlebih dahulu, Pembelian tidak bisa di cancel/refund.</p>
            </div>
        </div>
    </div>
</div>

<script>
    function beliSekarang() {
        const form = document.getElementById('beli-sekarang-form');
        
        // Create a FormData object from the form element
        const formData = new FormData(form);

        // Perform a fetch request to submit the form data
        fetch(form.action, {
            method: 'POST',
            body: formData,
            headers: {
                'X-CSRF-TOKEN': '{{ csrf_token() }}'
            }
        })
        .then(response => {
            if (response.ok) {
                // Redirect to the cart page after successful submission
                window.location.href = "{{ route('keranjang.show') }}";
            } else {
                // Handle errors if needed
                console.error('Form submission failed.');
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    }
</script>
@endsection
