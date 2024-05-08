<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Barang</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('layout/header1')
    </header>
    <h1 class="text-2xl font-bold mb-5 mt-5"><center>Detail Barang</center></h1>
    <div class="container mx-auto mb-4 px-10">
    <div class="grid grid-cols-1 md:grid-cols-2 gap-8 border border-gray-200 p-8 rounded-lg">
        <div class="flex justify-center items-center">
            <img src="image/item/vansk8.png" class="w-full" alt="Vans Sk8 Low">
        </div>
        <div class="col-span-1">
    <div class="bg-white p-10 px-20 shadow rounded">
        <h2 class="text-2xl mb-1">Vans Sk8 Low</h2>
        <h2 class="text-2xl font-bold mb-4">Rp500.000</h2>
        <div class="flex justify-between items-center mt-2">
            <div class="w-2/3">
                <ul>
                    <li class="mt-1">Ukuran</li>
                    <li class="mt-1">Kondisi</li>
                    <li class="mt-1">Warna</li>
                    <li class="mt-1">Merk</li>
                </ul>
            </div>
            <div class="w-1/3">
                <ul class="ms-4">
                    <li class="mb-2">41</li>
                    <li class="mt-1">Like New</li>
                    <li class="mt-1">Black & White</li>
                    <li class="mt-1">Vans</li>
                </ul>
            </div>
        </div>
        <div>
        <button class="btn btn-active bg-blue-950 w-full mt-7" onclick="window.location.href = ''; "><span class="text-sm text-white">Masukkan Keranjang</span></button>

        </div>
    </div>
</div>

    </div>
</div>

</body>
</html>