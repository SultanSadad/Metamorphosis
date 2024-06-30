@extends('layout.mainAdmin')
@section('main-admin')

            <div class="container mx-auto p-4">
                <h1 class="text-3xl font-bold mb-1">Hi, Admin</h1>
                <p class="font-light mb-4">Selamat datang di pusat kendali aplikasi kami! Kami sangat senang Anda bergabung dengan tim kami. Di sini, Anda dapat dengan mudah mengelola konten, memantau kinerja, dan memastikan semuanya berjalan lancar.</p>
                
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <img src="/image/PEMBELI (1).png" alt="Manage Buyers" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Mengatur Data Pembeli</h2>
                            <p class="mb-2">Pelajari cara mengelola data pembeli, menambahkan informasi kontak, dan memantau riwayat pembelian mereka. <a href="/admin/DataCustomer" class="text-blue-500">[Klik Disini]</a></p>
                            
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <img src="/image/BARANG (1).png" alt="Manage Products" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Mengatur Barang</h2>
                            <p>Pelajari cara menambahkan, mengedit, dan menghapus produk sepatu bekas di katalog Anda. <a href="/admin/Barang" class="text-blue-500">[Klik Disini]</a></p>
                            
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <img src="/image/PAYMENT (1).png" alt="Manage Payments" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Mengelola Pembayaran</h2>
                            <p>Pelajari cara memantau dan mengelola pembayaran yang masuk, serta memastikan transaksi berjalan lancar. <a href="/admin/AdminKonfirmasi" class="text-blue-500">[Klik Disini]</a></p>
                           
                        </div>
                    </div>
                    <div class="bg-white shadow-lg rounded-lg p-4">
                        <img src="/image/DUKUNGAN (1).png" alt="Customer Support" class="w-full h-40 object-cover rounded-t-lg">
                        <div class="p-4">
                            <h2 class="text-xl font-semibold mb-2">Dukungan Pelanggan</h2>
                            <p>Pelajari cara memberikan dukungan terbaik kepada pelanggan Anda dan menangani keluhan dengan efektif. <a href="/admin/Review" class="text-blue-500">[Klik Disini]</a></p>
                          
                        </div>
                    </div>
                </div>
            </div>
        
        </div>
@endsection