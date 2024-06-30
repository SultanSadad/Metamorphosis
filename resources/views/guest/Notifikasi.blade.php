@extends('layout.main')

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
    </header>
    <div class="container px-7 mx-auto mt-9">
        <h1 class="text-2xl font-bold text-center">Notifikasi</h1>
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
                    @foreach ($pembayaran as $index => $pembayaranItem)
                    <tr>
                        <td class="px-6 py-4 whitespace-nowrap">{{ $index + 1 }}</td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            <div><span class="text-sm">{{ $pembayaranItem->created_at->toDateString() }}</span></div>
                            <div><span class="text-sm">{{ $pembayaranItem->created_at->toTimeString() }}</span></div>
                        </td>
                        <td class="px-6 py-4 whitespace-nowrap">
                            Orderanmu dengan id {{ $pembayaranItem->id_pembayaran }}
                            <span class="text-green-500">{{ $pembayaranItem->status }}</span> oleh admin.
                            @if ($pembayaranItem->status == 'Disetujui')
                                Berikan <a href="/guest/Bantuan" class="text-blue-700 underline">Review</a> Disini
                            @endif
                            <button class="btn btn-ghost btn-xs me-2 text-sm font-semibold text-blue-700 hover:text-blue-900"
                                onclick="document.getElementById('modal_{{ $pembayaranItem->id_pembayaran }}').showModal()">
                                <svg xmlns="http://www.w3.org/2000/svg" class="h-4 w-4 inline-block align-text-bottom mr-1.5 -mt-1"
                                    viewBox="0 0 20 20" fill="currentColor">
                                    <path fill-rule="evenodd"
                                        d="M2 10a8 8 0 1116 0 8 8 0 01-16 0zm7-5a1 1 0 00-2 0v4a1 1 0 001 1h4a1 1 0 000-2h-3V5z"
                                        clip-rule="evenodd" />
                                </svg>
                                Detail Pesanan
                            </button>

                            <dialog id="modal_{{ $pembayaranItem->id_pembayaran }}" class="modal">
                                <div class="modal-box w-11/12 max-w-3xl">
                                    <form method="dialog">
                                        <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-xl">X</button>
                                    </form>
                                    <h3 class="font-bold text-lg text-center mb-4">Detail Pesanan</h3>
                                    <div class="overflow-x-auto">
                                        <table class="table">
                                            <tbody>
                                                <tr>
                                                    <th>Id</th>
                                                    <td>{{ $pembayaranItem->id_pembayaran }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Nama Barang</th>
                                                    <td>{{ $pembayaranItem->barang->nama }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Harga Barang</th>
                                                    <td>Rp{{ number_format($pembayaranItem->barang->harga, 0, ',', '.') }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Ukuran</th>
                                                    <td>{{ $pembayaranItem->barang->ukuran }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Gambar</th>
                                                    <td><img src="{{ asset('image/fotobarang/' . $pembayaranItem->barang->foto) }}"
                                                            alt="Product Image" class="w-24 h-24 object-cover"></td>
                                                </tr>
                                                <tr>
                                                    <th>Status</th>
                                                    <td>
                                                        @if ($pembayaranItem->status == 'Disetujui')
                                                            <span class="text-green-500">{{ $pembayaranItem->status }}</span>
                                                        @elseif ($pembayaranItem->status == 'Ditolak')
                                                            <span class="text-red-500">{{ $pembayaranItem->status }}</span>
                                                        @else
                                                            <span>{{ $pembayaranItem->status }}</span>
                                                        @endif
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <th>Metode Pembayaran</th>
                                                    <td>{{ $pembayaranItem->metode }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Alamat</th>
                                                    <td>{{ $pembayaranItem->alamat_penerima }}</td>
                                                </tr>
                                                <tr>
                                                    <th>Bukti Pembayaran</th>
                                                    <td><img src="{{ asset('image/bukti/' . $pembayaranItem->bukti_pembayaran) }}"
                                                            alt="Bukti Pembayaran"
                                                            class="w-24 h-24 object-cover"></td>
                                                </tr>
                                                <tr>
                                                    <td colspan="2" class="text-center">
                                                    <a href="{{ route('guest.download-pdf', ['id_pembayaran' => $pembayaranItem->id_pembayaran]) }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded inline-flex items-center">Unduh Detail Pesanan</a>

                                                       
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </dialog>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>
