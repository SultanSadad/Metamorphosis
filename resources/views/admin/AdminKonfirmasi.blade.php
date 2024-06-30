@extends('layout.mainAdmin')
@section('main-admin')
<div class="container px-7 mx-auto mt-9">
  <h1 class="text-2xl font-bold mb-6">Konfirmasi Pembayaran</h1>
  <div class="overflow-x-auto border rounded">
    <table class="min-w-full divide-y divide-gray-200">
      <thead class="bg-gray-50">
        <tr>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Id/Name</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama Barang/Harga</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Metode Pembayaran</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Status</th>
          <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Action</th>
        </tr>
      </thead>
      <tbody class=" divide-y divide-gray-200">
        @foreach ($pembayaran as $pembayaranItem)
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-circle w-12 h-12">
                  <img src="/image/profile1.png" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">{{ $pembayaranItem->user->id }}</div>
                <div class="text-sm opacity-50">{{ $pembayaranItem->user->name }}</div>
              </div>
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap">
            @if ($pembayaranItem->barang)
              {{ $pembayaranItem->barang->nama }} <br />
              <span class="badge badge-ghost badge-sm">Rp{{ number_format($pembayaranItem->barang->harga, 0, ',', '.') }}</span>
            @else
              Barang tidak ditemukan
            @endif
          </td>
          <td class="px-6 py-4 whitespace-nowrap">{{ $pembayaranItem->metode }}</td>
          <td>
            <div class="badge badge-outline">{{ $pembayaranItem->status }}</div>
          </td>
          <td class="p-2 whitespace-nowrap">
            <div class="flex justify-center">
              <button class="btn btn-ghost btn-xs me-8 text-xl font-bold" onclick="document.getElementById('modal_{{ $pembayaranItem->id_pembayaran }}').showModal()">
                <div><i class="fas fa-ellipsis-h fa-rotate-90"></i></div>
              </button>
              <dialog id="modal_{{ $pembayaranItem->id_pembayaran }}" class="modal">
                <div class="modal-box w-11/12 max-w-3xl">
                  <form method="dialog">
                    <button class="btn btn-sm btn-circle btn-ghost absolute right-2 top-2 text-xl">✕</button>
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
                          <td>{{ $pembayaranItem->barang ? $pembayaranItem->barang->nama : 'Barang tidak ditemukan' }}</td>
                        </tr>
                        <tr>
                          <th>Harga Barang</th>
                          <td>Rp{{ number_format($pembayaranItem->barang ? $pembayaranItem->barang->harga : 0, 0, ',', '.') }}</td>
                        </tr>
                        <tr>
                          <th>Ukuran</th>
                          <td>{{ $pembayaranItem->barang ? $pembayaranItem->barang->ukuran : 'N/A' }}</td>
                        </tr>
                        <tr>
                          <th>Gambar</th>
                          <td><img src="{{ $pembayaranItem->barang ? asset('image/fotobarang/' . $pembayaranItem->barang->foto) : '' }}" alt="Product Image" class="w-24 h-24 object-cover"></td>
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
                          <td><img src="{{ asset('image/bukti/' . $pembayaranItem->bukti_pembayaran) }}" alt="Bukti Pembayaran" class="w-24 h-24 object-cover"></td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <div class="flex justify-end mt-3 gap-2">
                    <form action="{{ route('admin.konfirmasiPembayaran') }}" method="POST">
                      @csrf
                      <input type="hidden" name="id_pembayaran" value="{{ $pembayaranItem->id_pembayaran }}">
                      <button class="btn btn-success">Konfirmasi</button>
                    </form>
                    <form action="{{ route('admin.tolakPembayaran') }}" method="POST">
                      @csrf
                      <input type="hidden" name="id_pembayaran" value="{{ $pembayaranItem->id_pembayaran }}">
                      <button class="btn btn-danger">Tolak</button>
                    </form>
                  </div>
                </div>
              </dialog>
            </div>
          </td>
        </tr>
        @endforeach
      </tbody>
    </table>
  </div>
</div>
@endsection
