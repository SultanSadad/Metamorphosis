@extends('layout.main')
@section('main')

<div class="container mx-auto mt-9 rounded">
  <div class="carousel relative rounded border">
    <div id="slide1" class="carousel-item w-full">
      <img src="image/banner.png" class="w-full" />
      <div class="absolute left-0 top-1/2 transform -translate-y-1/2">
        <a href="#slide4" class="btn btn-circle absolute left-0">&#x25C1;</a>
        <a href="#slide2" class="btn btn-circle absolute right-0">&#x25B7;</a>
      </div>
    </div>
    <div id="slide2" class="carousel-item w-full">
      <img src="image/Banner3.png" class="w-full" />
      <div class="absolute left-0 top-1/2 transform -translate-y-1/2">
        <a href="#slide1" class="btn btn-circle absolute left-0">&#x25C1;</a>
        <a href="#slide3" class="btn btn-circle absolute right-0">&#x25B7;</a>
      </div>
    </div>
    <div id="slide1" class="carousel-item w-full">
      <img src="image/banner.png" class="w-full" />
      <div class="absolute left-0 top-1/2 transform -translate-y-1/2">
        <a href="#slide4" class="btn btn-circle absolute left-0">&#x25C1;</a>
        <a href="#slide2" class="btn btn-circle absolute right-0">&#x25B7;</a>
      </div>
    </div>
    <div id="slide2" class="carousel-item w-full">
      <img src="image/Banner3.png" class="w-full" />
      <div class="absolute left-0 top-1/2 transform -translate-y-1/2">
        <a href="#slide1" class="btn btn-circle absolute left-0">&#x25C1;</a>
        <a href="#slide3" class="btn btn-circle absolute right-0">&#x25B7;</a>
      </div>
    </div>
  </div>
</div>

<div class="container px-7 mx-auto mt-9">
  <div class="mt-10 grid grid-cols-5 gap-12 place-items-start ...">

    <!-- item 1 -->
    @foreach ($barang as $b)
    <div id="1" class="cursor-pointer transition-transform duration-400 transform hover:scale-105">
      <img src="{{ asset('image/fotobarang/' . $b->foto) }}" class="mb-5" alt="">
      <span class="font-bold text-1xl">{{ $b->harga }}</span>
      <div>{{ $b->ukuran }}</div>
      <div>{{ $b->nama }}</div>
    </div>
    <script>
      document.getElementById("1").addEventListener("click", function() {
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
<div class="container mx-auto mt-10 ms-20 flex flex-wrap justify-start">
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
  <div class="w-40 h-40 m-2 border flex items-center justify-center"><img src="/image/profile1.png" class="w-24 h-24" alt="">
  </div>
</div>

@endsection