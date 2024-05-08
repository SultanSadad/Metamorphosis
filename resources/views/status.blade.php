<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Status Pesanan</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('layout/header1')
    </header>
    <div class="container px-7 mx-auto mt-9">
    <h1 class="text-2xl font-bold mb-5"><center>Status</center></h1>
        <table class="table table-zebra w-full">
            <thead>
                <tr>
                   <th>Barang</th>
                    <th class="text-left">Nama</th>
                    <th class="text-right">Total Harga</th>
                    <th class="text-left">Metode</th>
                    <th class="text-left">Status</th>
                    <th class="text-left">Action</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="px-4 py-2">
                        <img src="image/item/vansk8.png" alt="Product Image" class="w-40 h-40">
                    </td>
                    <td class="">
                        <div><span>Nike Dunk X OP</span></div>
                        <div><span>2024INV10-7 April 2024</span></div>
                    </td>
                    <td class="px-4 py-2 text-right">Rp 500.000</td>
                    <td class="px-4 py-2">Rekening</td>
                    <td class="px-4 py-2 text-error">Ditolak</td>
                    <td class="px-4 py-2">
                        <a href="#" class="btn btn-sm btn-outline btn-error">Nota</a>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="px-4 py-2">
                        <img src="image/item/vanslowblue.png" alt="Product Image" class="w-40 h-40">
                    </td>
                    <td class="">
                        <div><span>Vans Oldskul Blue</span></div>
                        <div><span>2024INV11-7 April 2024</span></div>
                    </td>
                    <td class="px-4 py-2 text-right">Rp 500.000</td>
                    <td class="px-4 py-2">COD</td>
                    <td class="px-4 py-2 text-success">Disetujui</td>
                    <td class="px-4 py-2">  
                    <a href="#" class="btn btn-sm btn-outline btn-success">Nota</a>
                    </td>
                </tr>
            </tbody>
            <tbody>
                <tr>
                    <td class="px-4 py-2">
                        <img src="image/item/nikedunkop.png" alt="Product Image" class="w-40 h-40">
                    </td>
                    <td class="">
                        <div><span>Nike Dunk X OP</span></div>
                        <div><span>2024INV12-7 April 2024</span></div>
                    </td>
                    <td class="px-4 py-2 text-right">Rp 450.000</td>
                    <td class="px-4 py-2">Rekening</td>
                    <td class="px-4 py-2">Menunggu Persetujuan</td>
                    <td class="px-4 py-2">
                        <a href="#" class="btn btn-sm btn-outline">Nota</a>
                    </td>
                </tr>
            </tbody>    
        </table>
    </div>
</body>
</html>
