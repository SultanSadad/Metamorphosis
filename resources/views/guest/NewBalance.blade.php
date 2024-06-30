@extends('layout.main')

@section('main')
<div class="container mx-auto p-6 mt-14">
    <input id="search-input" class="w-full max-w-md bg-white focus:outline-none focus:shadow-outline border border-gray-300 rounded-lg py-2 px-4 block appearance-none leading-normal" type="text" placeholder="Cari barang..." onkeyup="search()">

    <div class="grid grid-cols-1 md:grid-cols-3 lg:grid-cols-4 gap-6 mt-6" id="product-grid">
        @foreach ($barang as $b)
        @if ($b->merek == 'NewBalance')
        <div id="item-{{ $b->id }}" class="product-card">
            <a href="{{ route('DetailBarang', $b->id) }}">
                <div class="bg-white rounded-lg shadow-md p-12 transform transition-transform duration-200 ease-in-out hover:scale-105">
                    <span class="text-xs bg-purple-200 text-purple-800 py-1 px-2 rounded-full">NEW</span>
                    <img class="h-40 w-full object-cover mt-2" src="{{ asset('image/fotobarang/' . $b->foto) }}" alt="Product Image">
                    <h2 class="text-lg font-semibold mt-2">{{ $b->nama }}</h2>
                    <p class="mt-1 text-gray-600">Rp.{{ $b->harga }}</p>
                    <div class="flex gap-2">
                        <button class="mt-4 bg-neutral text-white py-2 px-3 rounded w-full">Detail Barang</button>
                    </div>
                </div>
            </a>
        </div>
        @endif
        @endforeach
    </div>
</div>

<div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-6 gap-4 mt-4">
    <a href="/guest/Adidas">
        <div class="border border-rounded text-white p-4 rounded">
            <img src="{{ asset('image/adida.png') }}" alt="">
        </div>
    </a>
    <a href="/guest/Nike">
        <div class="border border-rounded text-white p-4 rounded">
            <img src="{{ asset('image/nikee.png') }}" alt="">
        </div>
    </a>
    <a href="/guest/Converse">
        <div class="border border-rounded text-white p-4 rounded">
            <img src="{{ asset('image/conversee.png') }}" alt="">
        </div>
    </a>
    <a href="/guest/NewBalance">
        <div class="border border-rounded text-white p-4 rounded">
            <img src="{{ asset('image/NBNB.png') }}" alt="">
        </div>
    </a>
    <a href="/guest/OnitsukaTiger">
        <div class="border border-rounded text-white p-4 rounded">
            <img src="{{ asset('image/onir.png') }}" alt="">
        </div>
    </a>
    <a href="/guest/Vans">
        <div class="border border-rounded text-white p-4 rounded">
            <img src="{{ asset('image/vanss.png') }}" alt="">
        </div>
    </a>
</div>

@endsection

<script>
    function search() {
        var input = document.getElementById('search-input').value.toUpperCase();
        var cards = document.getElementsByClassName('product-card');

        for (var i = 0; i < cards.length; i++) {
            var nama = cards[i].getElementsByTagName('h2')[0].innerText.toUpperCase();

            if (nama.indexOf(input) > -1) {
                cards[i].style.display = "";
            } else {
                cards[i].style.display = "none";
            }
        }
    }
</script>
