@extends('layout.main')
@section('main')
<div class="flex">
    <div class="relative w-full">
        <img src="/image/team1.jpeg" class="w-full" style="filter: brightness(0.4) saturate(150%);" alt="A group of People" />
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center space-y-4">
            <h1 class="text-4xl font-bold text-gray-300 font-sans">Metamorphosis</h1>
            <span class="text-center text-gray-300 font-light">"Metamorphosis" adalah kelompok yang terdiri dari individu-individu kreatif dan bersemangat yang memiliki visi untuk mengubah persepsi tentang sepatu bekas. Dengan fokus pada merek-merek terkemuka seperti Nike, Adidas, Puma, dan lainnya, tim ini bertekad untuk menciptakan pengalaman daring yang unik dan menarik bagi para penggemar sepatu. Mereka tidak hanya ingin menjual produk, tetapi juga ingin menginspirasi dan membawa kesadaran akan keberlanjutan dan gaya hidup yang bertanggung jawab kepada pelanggan mereka.</span>
            <div class="flex">
                <button class="btn btn-gray-900 btn-outline font-sans text-gray-300">Belanja Sekarang</button>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="flex mt-24 mb-32 mx-auto container flex-col">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h1 class="text-4xl font-sans">Stalking feed artis tapi budget ga nyampe? Preloved branded solutionnya, sis!</h1>
            </div>
            <div>
                <span class="font-sarif">Lorem ipsum dolor sit amet consectetur adipisicing elit. Saepe, explicabo quos nobis earum autem nesciunt inventore reiciendis facere officia quisquam enim. Culpa eaque ab optio obcaecati ut quam id quas.</span>
            </div>
        </div>
    </div>
        <div class="grid mt-11">
            <div class="py-16 bg-gray-200">
            <div class="flex mx-auto container flex-col ">
                <h1 class="text-3xl  text-gray-900  text-center font-sans">Sumber Barang</h1>
                <div class="mt-3 text-center"><span class="font-light text-lg">Dibatam, mencari sepatu bekas menjadi petualangan yang menyenangkan bagi kami. Kami sering menjelajahi pasar tradisional seperti Pasar Jodoh dan Pasar Victoria, tempat kami menemukan beragam sepatu bekas dengan harga terjangkau dan cerita unik di setiap sudutnya. Selain itu, kami juga senang menjelajahi toko-toko preloved langsung, di mana kami bisa menemukan merek-merek terkenal dengan harga yang lebih terjangkau daripada membeli barang baru. Terkadang, kami menemukan sepatu bekas yang masih dalam kondisi bagus, menambah kepuasan dalam mencari barang preloved. Bergabung dengan komunitas penggemar sepatu di Batam juga memberikan kami akses ke informasi terbaru tentang koleksi sepatu bekas, serta kesempatan untuk berbagi cerita dan pengalaman dengan sesama penggemar sepatu. Pengalaman mencari sepatu bekas di Batam menjadi semakin menarik dan berwarna dengan adanya komunitas ini.</span>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="flex mt-11 mx-auto container flex-col ">
    <div class="grid grid-cols-4 gap-6">

        <div class="flex">
            <img src="/image/samba.jpg" class="w-96 h-92" alt="">
        </div>
        <div class="flex">
            <img src="/image/nb.jpeg" class="w-96 h-92" alt="">
        </div>
        <div class="flex">
            <img src="/image/onit.jpg" class="w-96 h-92" alt="">
        </div>
        <div class="flex">
            <img src="/image/B.jpg" class="w-96 h-92" alt="">
        </div>
    </div>
</div>
<hr class="mt-6 ">
<div class="flex items-center justify-center  bg-white py-4">
    <div class="flex flex-col">
        <!-- Notes -->

        <div class="flex flex-col">
            <div class="container max-w-7xl px-4">
                <div class="flex flex-wrap justify-center text-center mb-8">
                    <div class="w-full lg:w-6/12 px-4">
                        <!-- Header -->

                        <!-- Description -->
                        <p class="text-gray-700 text-lg font-light">
                            Metamorphosis Team
                        </p>
                    </div>
                </div>

                <!-- Team Members -->
                <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5 gap-4">
                    <!-- Member #1 -->
                    <div class="w-full mb-6">
                        <div class="flex flex-col items-center">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="/image/sultan.jpeg">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Sultan Sadad
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Ketua
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center space-x-4 opacity-50 hover:opacity-100 transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="p-2 rounded-full hover:bg-indigo-50">
                                        <i class="mdi mdi-linkedin text-indigo-500"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="p-2 rounded-full hover:bg-blue-50">
                                        <i class="mdi mdi-twitter text-blue-300"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="p-2 rounded-full hover:bg-orange-50">
                                        <i class="mdi mdi-instagram text-orange-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <div class="flex flex-col items-center">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Aditya Januarizki
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Anggota
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center space-x-4 opacity-50 hover:opacity-100 transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="p-2 rounded-full hover:bg-indigo-50">
                                        <i class="mdi mdi-linkedin text-indigo-500"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="p-2 rounded-full hover:bg-blue-50">
                                        <i class="mdi mdi-twitter text-blue-300"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="p-2 rounded-full hover:bg-orange-50">
                                        <i class="mdi mdi-instagram text-orange-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <div class="flex flex-col items-center">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Cici Yulita
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Anggota
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center space-x-4 opacity-50 hover:opacity-100 transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="p-2 rounded-full hover:bg-indigo-50">
                                        <i class="mdi mdi-linkedin text-indigo-500"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="p-2 rounded-full hover:bg-blue-50">
                                        <i class="mdi mdi-twitter text-blue-300"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="p-2 rounded-full hover:bg-orange-50">
                                        <i class="mdi mdi-instagram text-orange-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <div class="flex flex-col items-center">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Asyri Dwi
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Anggota
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center space-x-4 opacity-50 hover:opacity-100 transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="p-2 rounded-full hover:bg-indigo-50">
                                        <i class="mdi mdi-linkedin text-indigo-500"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="p-2 rounded-full hover:bg-blue-50">
                                        <i class="mdi mdi-twitter text-blue-300"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="p-2 rounded-full hover:bg-orange-50">
                                        <i class="mdi mdi-instagram text-orange-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="w-full mb-6">
                        <div class="flex flex-col items-center">
                            <!-- Avatar -->
                            <a href="#" class="mx-auto">
                                <img class="rounded-2xl drop-shadow-md hover:drop-shadow-xl transition-all duration-200 delay-100" src="https://images.unsplash.com/photo-1634926878768-2a5b3c42f139?fit=clamp&w=400&h=400&q=80">
                            </a>

                            <!-- Details -->
                            <div class="text-center mt-6">
                                <!-- Name -->
                                <h1 class="text-gray-900 text-xl font-bold mb-1">
                                    Mayaindah Novita
                                </h1>

                                <!-- Title -->
                                <div class="text-gray-700 font-light mb-2">
                                    Anggota
                                </div>

                                <!-- Social Icons -->
                                <div class="flex items-center justify-center space-x-4 opacity-50 hover:opacity-100 transition-opacity duration-300">
                                    <!-- Linkedin -->
                                    <a href="#" class="p-2 rounded-full hover:bg-indigo-50">
                                        <i class="mdi mdi-linkedin text-indigo-500"></i>
                                    </a>

                                    <!-- Twitter -->
                                    <a href="#" class="p-2 rounded-full hover:bg-blue-50">
                                        <i class="mdi mdi-twitter text-blue-300"></i>
                                    </a>

                                    <!-- Instagram -->
                                    <a href="#" class="p-2 rounded-full hover:bg-orange-50">
                                        <i class="mdi mdi-instagram text-orange-400"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Repeat this block for each member -->
                </div>
            </div>
        </div>
    </div>
</div>
</div>

@endsection