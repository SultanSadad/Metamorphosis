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
        <!-- row 1 -->
        <tr>
          <td class="px-6 py-4 whitespace-nowrap">
            <div class="flex items-center space-x-3">
              <div class="avatar">
                <div class="mask mask-circle w-12 h-12">
                  <img src="/image/profile1.png" alt="Avatar Tailwind CSS Component" />
                </div>
              </div>
              <div>
                <div class="font-bold">2024INV11</div>
                <div class="text-sm opacity-50">Sultan Sadad</div>
              </div>
            </div>
          </td>
          <td class="px-6 py-4 whitespace-nowrap">Vans SK8 Low <br /><span class="badge badge-ghost badge-sm">Rp500.000</span></td>
          <td class="px-6 py-4 whitespace-nowrap">Rekening</td>
          <td>
            <div class="badge badge-outline">Belum Dikonfirmasi</div>
          </td>
          <td class="p-2 whitespace-nowrap">
            <div class="flex justify-center">
              <!-- You can open the modal using ID.showModal() method -->
              <button class="btn btn-ghost btn-xs me-8 text-xl font-bold" onclick="my_modal_3.showModal()">
                <div><i class="fas fa-ellipsis-h fa-rotate-90"></i></div>
              </button>
              <dialog id="my_modal_3" class="modal">
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
                          <td>3312301102</td>
                        </tr>
                        <tr>
                          <th>Nama Barang</th>
                          <td>Converse All Star</td>
                        </tr>
                        <tr>
                          <th>Harga Barang</th>
                          <td>Rp 500,000</td>
                        </tr>
                        <tr>
                          <th>Ukuran</th>
                          <td>40</td>
                        </tr>
                        <tr>
                          <th>Gambar</th>
                          <td><button class="btn btn-xs btn-outline">image</button></td>
                        </tr>
                        <tr>
                          <th>Metode Pembayaran</th>
                          <td>Rekening</td>
                        </tr>
                        <tr>
                          <th>Alamat</th>
                          <td>Batam Centre</td>
                        </tr>
                        <tr>
                          <th>Bukti Pembayaran</th>
                          <td><button class="btn btn-xs btn-outline">image</button></td>
                        </tr>
                        
                      </tbody>
                    </table>
                  </div>
                  <div class="flex justify-end mt-3">
                          <div class="gap">
                          <button class=" btn btn-sm btn-error text-white w-xs right-2 top-2">Tolak</button>
                          <button class=" btn btn-sm btn-success text-white w-xs right-2 top-2">Konfirmasi</button>
                          </div>
                        </div>
                </div>
              </dialog>
            </div>
          </td>
        </tr>

      </tbody>
    </table>
  </div>
</div>
@endsection