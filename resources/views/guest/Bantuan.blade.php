@extends('layout/main')
@section('main')
      <h1 class="font-light text-center items-center mt-32 text-5xl font-bold">Hubungin Kami</h1>
      <h4 class="font-medium mt-2 text-center text-2xl mb-10 text-base-700">Ada pesan atau komentar? Cukup tulis pesan kepada kami.</h4>
<div class="flex justify-center">
    <div class="bg-white shadow-md rounded-lg flex overflow-hidden max-w-4xl w-full">
        <!-- Contact Information -->
        <div class="bg-gray-300 p-8 w-1/2">
            <h2 class="text-2xl font-semibold mb-4 text-center">Informasi Kontak</h2>
            <p class="mb-4 text-justify font-light text-xl">
                Jika Anda mempunyai pertanyaan atau kekhawatiran, Anda dapat menghubungi kami dengan mengisi formulir kontak, menelepon kami, datang ke kantor kami, menemukan kami di jejaring sosial lain disini.
        </div>
        <!-- Contact Form -->
        <div class="p-8 w-1/2">
            <form action="/guest/pesan" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Name</label>
                    <input type="text" name="nama" class="input input-bordered w-full" />
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700 mb-1">Email</label>
                    <input type="text" name="email" class="input input-bordered w-full" />
                </div>
                <div>
                    <label for="phone" class="block text-sm font-medium text-gray-700 mb-1">Nomor Handphone</label>
                    <input type="text" name="HP" class="input input-bordered w-full" />
                </div>
                <div>
                    <label for="message" class="block text-sm font-medium text-gray-700 mb-1">Pesan dan Saran</label>
                    <input type="text" name="pesan_saran" class="input input-bordered py-14 w-full" />
                </div>
                <div>
                   <button class="btn w-full bg-base-300">KIRIM</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
