@extends('layout.main')
@section('main')

<div class="container mx-auto py-8">
    <h1 class="text-2xl font-bold ms-4">Keranjang</h1>

    <div class="grid grid-cols-3 gap-6">
        <!-- Kolom 1 -->
        <div class="col-span-2 lg:col-span-2">
            <div class="p-4 rounded">
                <ul>
                    <li class="mb-2">
                        <div class="flex justify-between items-center mt-2">
                            <div class="w-1/3">
                                <img src="image/item/vansk8.png" alt="Vans Old Skool Low" class="w-32 h-32 object-cover">
                            </div>
                            <div class="w-2/3 mb-16">
                                <p class="font-bold">Vans Sk8 Low</p>
                                <p class="font-bold mt-1">Rp500.000</p>
                                <p class="mt-1">41</p>
                            </div>
                            <div class="w-1/3 mb-28">
                                <p class="text-sm underline">Hapus</p>
                            </div>
                        </div>
                    </li>
                    <hr class="w-96 mt-6">
                </ul>
                <ul>
                    <li class="mt-8">
                        <div class="flex justify-between items-center mt-2">
                            <div class="w-1/3">
                                <img src="image/item/vanslowblue.png" alt="Vans Old Skool Low" class="w-32 h-32 object-cover">
                            </div>
                            <div class="w-2/3 mb-16">
                                <p class="font-bold">Vans Low Blue</p>
                                <p class="font-bold mt-1">Rp500.000</p>
                                <p class="mt-1">43</p>
                            </div>
                            <div class="w-1/3 mb-28">
                                <p class="text-sm underline">Hapus</p>
                            </div>
                        </div>
                    </li>
                    <hr class="w-96 mt-6">
                </ul>
                <ul>
                    <li class="mt-8">
                        <div class="flex justify-between items-center mt-2">
                            <div class="w-1/3">
                                <img src="image/item/nikedunkop.png" alt="Vans Old Skool Low" class="w-32 h-32 object-cover">
                            </div>
                            <div class="w-2/3 mb-16">
                                <p class="font-bold mt-1">Nike Dunk X OP</p>
                                <p class="font-bold mt-1">Rp450.000</p>
                                <p class="mt-1">41</p>
                            </div>
                            <div class="w-1/3 mb-28">
                                <p class="text-sm underline">Hapus</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>

        <!-- Kolom 2 -->
        <div class="col-span-1">
            <div class="bg-white p-4 shadow rounded">
                <h2 class="text-2xl font-bold mb-4">Ringkasan</h2>
                <div class="flex justify-between items-center mt-2">
                    <div class="w-2/3">
                        <ul>
                            <li class="mt-1">Total Keranjang</li>
                            <li class="">Ongkos Kirim</li>
                            <li class="mt-6 font-bold">Total</li>
                        </ul>
                    </div>
                    <div class="w-1/3">
                        <ul class="ms-4">
                            <li class="mb-2">Rp1.450.000</li>
                            <li class="mt-1">Rp30.000</li>
                            <li class="mt-5 font-bold">Rp1.480.000</li>
                        </ul>
                    </div>
                </div>
                <div>
                    <button class="btn btn-active btn-neutral w-full mt-2" onclick="window.location.href = ''; ">Bayar</button>
                </div>
            </div>
        </div>


    </div>
</div>

@endsection