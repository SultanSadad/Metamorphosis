@extends('layout.main')
@section('main')

<div class="container mx-auto p-6 mt-14">
  <div class="carousel w-full rounded-lg">
    <div id="item1" class="carousel-item w-full">
      <img
        src="image/ww.png "
        class="w-full" />
    </div>
    <div id="item2" class="carousel-item w-full">
      <img
        src="image/ww2.png "
        class="w-full" />
    </div>
    <div id="item3" class="carousel-item w-full">
      <img
        src="image/ww3.png "
        class="w-full" />
    </div>
  </div>
    
  </div>

<div class="container px-7 mx-auto mt-9">
  <div class="mt-10 grid grid-cols-5 gap-12 place-items-start ...">

    <!-- item 1 -->
    @foreach ($barang->take(5) as $b)
    <div id="item-{{ $loop->index }}" class="cursor-pointer transition-transform duration-400 transform hover:scale-105">
      <img src="{{ asset('image/fotobarang/' . $b->foto) }}" class="mb-5" alt="">
      <span class="font-bold text-1xl">{{ $b->harga }}</span>
      <div>{{ $b->ukuran }}</div>
      <div>{{ $b->nama }}</div>
    </div>
    <script>
      document.getElementById("item-{{ $loop->index }}").addEventListener("click", function() {
        this.classList.add("scale-105");
        setTimeout(() => {
          window.location.href = "halaman-tujuan.html";
        }, 300);
      });
    </script>
    @endforeach

  </div>
</div>

<div class="container mx-auto mt-10 ms-20 flex flex-wrap justify-start">
  <h1 class="font-bold">Search Brand</h1>
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
