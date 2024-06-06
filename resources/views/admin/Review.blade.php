@extends('layout.mainAdmin')
@section('main-admin')
<!--Background-->
<h1 class="text-2xl font-semibold text-base-900 text-center mt-8 mb-7">Pesan dan Saran</h1>
<div class="flex justify-center">
  <div class="max-w-6xl">
    <div class="grid grid-cols-1 md:grid-cols-3 gap-4">
      @foreach ($pesan as $p)
      <div class="m-4 block rounded-lg bg-white p-6 shadow-lg dark:bg-neutral-800 dark:shadow-black/20">
        <!--Testimonial-->
        <div class="flex flex-col items-center">
          <img src="/image/profile1.png" class="rounded-full shadow-md dark:shadow-black/30 w-28 h-28 object-cover mb-4" alt="profile avatar" />
          <p class="mb-2 text-xl font-semibold text-neutral-800 dark:text-neutral-200">
            {{ $p->nama }}
          </p>
          <p class="mb-2 text-sm font-semibold text-success dark:text-neutral-200">
            {{ $p->email }}
          </p>
          <p class="mb-6 font-light text-neutral-500 dark:text-neutral-300">
            {{ $p->pesan_saran }}
          </p>
        </div>
      </div>
      @endforeach
    </div>
  </div>
</div>
@endsection 