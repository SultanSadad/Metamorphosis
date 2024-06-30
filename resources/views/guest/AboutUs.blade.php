@extends('layout.main')
@section('main')
<div class="flex">
    <div class="relative w-full">
        <img src="/image/team1.jpeg" class="w-full" style="filter: brightness(0.4) saturate(150%);" alt="A group of People" />
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 flex flex-col items-center space-y-4">
            <h1 class="text-4xl font-bold text-gray-300 font-sans">Metamorphosis</h1>
            <span class="text-center text-gray-300 font-light">"Metamorphosis" adalah kelompok yang terdiri dari individu-individu kreatif dan bersemangat yang memiliki visi untuk mengubah persepsi tentang sepatu bekas. Dengan fokus pada merek-merek terkemuka seperti Nike, Adidas, Puma, dan lainnya, tim ini bertekad untuk menciptakan pengalaman daring yang unik dan menarik bagi para penggemar sepatu. Mereka tidak hanya ingin menjual produk, tetapi juga ingin menginspirasi dan membawa kesadaran akan keberlanjutan dan gaya hidup yang bertanggung jawab kepada pelanggan mereka.</span>
            <div class="flex">
            <button onclick="window.location.href='/guest/indexguest'" class="btn btn-gray-900 btn-outline font-sans text-gray-300">Belanja Sekarang</button>
            </div>
        </div>
    </div>
</div>
<div>
    <div class="flex mt-12 mb-12 mx-auto container flex-col">
        <div class="grid grid-cols-2 gap-4">
            <div>
                <h1 class="text-4xl mt-10 font-sans">Stalking feed artis tapi budget ga nyampe? Sokin lah Metamorphosis!</h1>
                <p class="font-sans text-justify mt-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Magnam corrupti quis quod cupiditate quibusdam, ullam laborum laboriosam reiciendis, delectus dignissimos soluta voluptates officia modi quisquam pariatur deleniti animi nemo nostrum. Lorem ipsum dolor sit amet consectetur adipisicing elit. Repellendus earum eligendi consectetur dolorum non necessitatibus? Ex magni vero repudiandae, reprehenderit minus nemo pariatur unde, sint non temporibus quasi molestias quam!</p>
            </div>
            <div class="ms-40">
                <img src="/image/ft.jpeg" class="h-80 rounded" alt="">
            </div>
        </div>
    </div>
    <div class="grid mt-3">
        <div class="py-24 bg-gray-200">
            <div class="flex mx-auto container flex-col ">
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <h1 class="text-5xl ms-40 font-sans mt-16 font-bold">Misi Kami</h1>
                    </div>
                    <div class="">
                        <p class="font-sans text-justify">Menjadi pusat inspirasi bagi para pencinta sepatu dengan menghidupkan kembali keindahan masa lalu melalui koleksi sepatu bekas yang unik dan berharga."

                            Dengan visi ini, "Metamorphosis" menekankan peran mereka sebagai tidak hanya tempat untuk membeli sepatu, tetapi juga sebagai sumber inspirasi bagi para pencinta sepatu. Ini menekankan keunikan dan nilai koleksi sepatu bekas yang ditawarkan oleh toko, dan bagaimana setiap pasangan sepatu memiliki potensi untuk menginspirasi dan menghidupkan kembali kenangan dan gaya masa lalu.</p>
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="grid">
        <div class="py-24 bg-sky-500">
            <div class="flex mx-auto container flex-col ">
                <div class="grid grid-cols-2 gap-4 text-white">
                    <div>
                        <p class="font-sans text-justify">Misi kami di Metamorphosis adalah untuk menyediakan pengalaman belanja yang memuaskan bagi setiap pelanggan dengan menyajikan koleksi sepatu bekas berkualitas tinggi yang dipilih secara cermat. Kami berkomitmen untuk tidak hanya memberikan akses kepada sepatu berkualitas, tetapi juga untuk mengedepankan nilai-nilai keberlanjutan dengan memperpanjang siklus hidup produk dan mengurangi dampak lingkungan. Melalui layanan pelanggan yang ramah, transparan, dan profesional, kami berusaha untuk menginspirasi dan memberdayakan pelanggan kami untuk mengekspresikan gaya pribadi mereka dengan percaya diri dan tanpa kompromi.</p>
                    </div>
                    <div class="">
                        <h1 class="text-5xl ms-60 font-sans mt-16 font-bold">Visi Kami</h1>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="flex items-center justify-center  bg-white py-4">
    <div class="flex flex-col">
        <!-- Notes -->

        <div class="flex flex-col">
            <div class="container max-w-7xl px-4">
                <div class="flex flex-wrap justify-center text-center mb-8">
                    <div class="w-full lg:w-6/12 px-4">
                        <!-- Header -->

                        <!-- Description -->
                        <h3 class="font-bold text-3xl mt-6">Metamorphosis Team</h3>
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