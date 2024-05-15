@extends('layout.mainAdmin')
@section('main-admin')
<section class="container px-4 mx-auto">
  <div class="container px-7 mx-auto mt-9">
    <h1 class="text-2xl font-bold mb-6">Daftar Admin</h1>
  </div>
  <div class="flex flex-col mt-5">
    <div class="-mx-4 -my-2 x-auto sm:-mx-6 lg:-mx-8">
      <div class="inline-block min-w-full py-2 align-middle md:px-6 lg:px-8">
        <div class="overflow-hidden border border-gray-200 dark:border-gray-700 md:rounded-lg">
          <table class="min-w-full divide-y divide-gray-200 dark:divide-gray-700">
            <thead class="bg-gray-50 dark:bg-gray-800">
              <tr>
                <th scope="col" class="py-3.5 px-4 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  <div class="flex items-center gap-x-3">
                    <button class="flex items-center gap-x-2">
                      <span>Id</span>
                    </button>
                  </div>
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  Nama
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  Email
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  No Handphone
                </th>

                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  Alamat
                </th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  Tanggal Lahir
                </th>
                <th scope="col" class="px-4 py-3.5 text-sm font-normal text-left rtl:text-right text-gray-500 dark:text-gray-400">
                  Jenis Kelamin
                </th>
              </tr>
            </thead>
            <tbody class="bg-white divide-y divide-gray-200 dark:divide-gray-700 dark:bg-gray-900">
            @foreach ($users as $u)
              <tr>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 dark:text-gray-200 whitespace-nowrap">
                  <div class="inline-flex items-center gap-x-3">
                    <span>#{{ $u->id }}</span>
                  </div>
          
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{ $u->name }}</td>
                <td class="px-4 py-4 text-sm font-medium text-gray-700 whitespace-nowrap">
                  <div class="inline-flex items-center px-3 py-1 rounded-full gap-x-2 text-emerald-500 bg-emerald-100/60 dark:bg-gray-800">
                    <h2 class="text-sml">{{ $u->email }}</h2>
                  </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">
                  <div>
                    <h2 class="text-sm font-medium text-gray-800 dark:text-white ">{{ $u->NoHP }}</h2>
                  </div>
                </td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">{{ $u->alamat }}</td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">23 November 2004</td>
                <td class="px-4 py-4 text-sm text-gray-500 dark:text-gray-300 whitespace-nowrap">Laki-Laki</td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>

</section>
@endsection