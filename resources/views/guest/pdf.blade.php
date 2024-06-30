<!DOCTYPE html>
<html>
<head>
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .table {
            width: 100%;
            border-collapse: collapse;
        }
        .table th, .table td {
            border: 1px solid #000;
            padding: 8px;
            text-align: left;
        }
    </style>
</head>
<body>
    <h1>Order Details</h1>
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
                <td><img src="{{ public_path('image/fotobarang/' . $pembayaranItem->barang->foto) }}" alt="Product Image" style="width:100px;height:100px;"></td>
            </tr>
            <tr>
                <th>Status</th>
                <td>
                    @if ($pembayaranItem->status == 'Disetujui')
                        <span style="color: green;">{{ $pembayaranItem->status }}</span>
                    @elseif ($pembayaranItem->status == 'Ditolak')
                        <span style="color: red;">{{ $pembayaranItem->status }}</span>
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
                <td><img src="{{ public_path('image/bukti/' . $pembayaranItem->bukti_pembayaran) }}" alt="Bukti Pembayaran" style="width:100px;height:100px;"></td>
            </tr>
        </tbody>
    </table>
</body>
</html>
