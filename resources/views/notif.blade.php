<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Notifikasi</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <header>
        @include('layout/header')
    </header>
    <div class="container px-7 mx-auto mt-9">
        <h1 class="text-2xl font-bold"><center>Notifikasi</center></h1>
        <div class="border rounded overflow-hidden mt-6">
    <table class="min-w-full divide-y divide-gray-200">
        <thead>
            <tr>
                <th scope="col" class="px-6 py-3 bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider text-left">No</th>
                <th scope="col" class="px-6 py-3 bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider text-left">Tanggal</th>
                <th scope="col" class="px-6 py-3 bg-gray-50 text-xs font-medium text-gray-500 uppercase tracking-wider text-left">Pesan</th>
            </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">1</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV10 <span class="text-green-500">Diterima</span> oleh admin. Berikan <a href="Review" class="text-blue-700 underline">Review</a> Disini</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">2</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV11 <span class="text-red-500">Ditolak</span> oleh admin</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">3</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV13 menunggu persetujuan oleh admin</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">4</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV13 menunggu persetujuan oleh admin</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">5</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV10 <span class="text-green-500">Diterima</span> oleh admin. Berikan <a href="Review" class="text-blue-700 underline">Review</a> Disini</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">6</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV11 <span class="text-red-500">Ditolak</span> oleh admin</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">7</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV13 menunggu persetujuan oleh admin</td>
            </tr>
            <tr>
                <td class="px-6 py-4 whitespace-nowrap">8</td>
                <td class="px-6 py-4 whitespace-nowrap">
                    <div><span class="text-sm">2024-04-20</span></div>
                    <div><span class="text-sm">12:06:59</span></div>
                </td>
                <td class="px-6 py-4 whitespace-nowrap">Orderanmu dengan id 2024INV13 menunggu persetujuan oleh admin</td>
            </tr>
        </tbody>
    </table>
</div>

    </div>
    @include('layout/footer')
</body>
</html>