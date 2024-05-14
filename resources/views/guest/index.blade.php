@extends('layout.main')
@section('main')
<div class="container mx-auto">
  <div class="carousel w-full">
    <div id="slide1" class="carousel-item relative w-full">
      <img src="https://img.daisyui.com/images/stock/photo-1625726411847-8cbb60cc71e6.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide4" class="btn btn-circle">❮</a>
        <a href="#slide2" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide2" class="carousel-item relative w-full">
      <img src="https://img.daisyui.com/images/stock/photo-1609621838510-5ad474b7d25d.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1" class="btn btn-circle">❮</a>
        <a href="#slide3" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide3" class="carousel-item relative w-full">
      <img src="https://img.daisyui.com/images/stock/photo-1414694762283-acccc27bca85.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2" class="btn btn-circle">❮</a>
        <a href="#slide4" class="btn btn-circle">❯</a>
      </div>
    </div>
    <div id="slide4" class="carousel-item relative w-full">
      <img src="https://img.daisyui.com/images/stock/photo-1665553365602-b2fb8e5d1707.jpg" class="w-full" />
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide3" class="btn btn-circle">❮</a>
        <a href="#slide1" class="btn btn-circle">❯</a>
      </div>
    </div>
  </div>
</div>
<hr class="mt-5">
<div class="container mx-auto mt-9">
  <div class="mt-10 grid grid-cols-5 gap-12 place-items-start ...">

    <!-- item 1 -->
    <div id="1" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/nikedunkop.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp650.000</span>
      <div>43</div>
      <div>Nike Dunk X OP</div>
    </div>

    <script>
      document.getElementById("1").addEventListener("click", function() {
        this.classList.add("scale-105");
        setTimeout(() => {
          window.location.href = "halaman-tujuan.html";
        }, 300);
      });
    </script>
    <!-- item 2 -->
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/vansk8.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp500.000</span>
      <div>41</div>
      <div>Vans SK8 Low</div>
    </div>

    <script>
      document.getElementById("2").addEventListener("click", function() {
        this.classList.add("scale-105");
        setTimeout(() => {
          window.location.href = "DetailBarang";
        }, 300); // Delay untuk memberi waktu animasi selesai sebelum pengalihan halaman
      });
    </script>
    <!-- item 3 -->
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/vanslowblue.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp500.000</span>
      <div>41</div>
      <div>Vans Oldskol Blue </div>
    </div>
    <!-- item 4 -->
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/samba.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp800.000</span>
      <div>43</div>
      <div>Adidas Samba </div>
    </div>
    <!-- item 5 -->
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/converse.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp250.000</span>
      <div><span class="font-inter">39</span></div>
      <div>Converse Low</div>
    </div>
  </div>
  <div class="mt-10 grid grid-cols-5 gap-12 place-items-start ...">
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/ctlow.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp500.000</span>
      <div>41</div>
      <div>Converse Chuck Low</div>
    </div>
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/onit.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp800.000</span>
      <div>41</div>
      <div>Onitsuka</div>
    </div>
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/sk8.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp250.000</span>
      <div>43</div>
      <div>Vans sK8 High</div>
    </div>
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/dunk.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp600.000</span>
      <div>42</div>
      <div>Nike Dunk Army Low</div>
    </div>
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/assics.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp800.000</span>
      <div>39</div>
      <div>Assics</div>
    </div>
  </div>
  <div class="mt-10 grid grid-cols-5 gap-12 place-items-start ...">
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/onestar.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp500.000</span>
      <div>42</div>
      <div>Converse One Star</div>
    </div>
    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/spezial.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">R950.000</span>
      <div>40</div>
      <div>Adidas Spezial</div>
    </div>

    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/onit1.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp900.000</span>
      <div>41</div>
      <div>Onitsuka Tiger</div>
    </div>

    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/newbalance.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp800.000</span>
      <div>43</div>
      <div>New Balance</div>
    </div>

    <div id="2" class="cursor-pointer transition-transform duration-400 transform hover:scale-105 border border-gray-300 rounded p-4">
      <img src="/image/item/ultra.png" class="mb-5" alt="">
      <span class="font-bold text-1xl">Rp800.000</span>
      <div>41</div>
      <div>Adidas Ultraboost</div>
    </div>
  </div>
</div>
<div class="container mt-10 mx-auto flex flex-wrap justify-center ">
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/vans.png" class="w-24 h-24" alt="">
    </div>
  </a>
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/adidas.png" class="w-24 h-24" alt="">
    </div>
  </a>
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/nike.png" class="w-24 h-24" alt="">
    </div>
  </a>
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/nb.png" class="w-24 h-24" alt="">
    </div>
  </a>
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/converse.png" class="w-24 h-24" alt="">
    </div>
  </a>
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/puma.png" class="w-24 h-24" alt="">
    </div>
  </a>
  <a href="vans">
    <div class="w-40 h-40 m-2 border flex items-center justify-center rounded hover:shadow-lg">
      <img src="/image/brand/onitsuka.png" class="w-24 h-24" alt="">
    </div>
  </a>
</div>




@endsection