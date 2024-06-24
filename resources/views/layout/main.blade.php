<!DOCTYPE html>
<html lang="en">

<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>{{ $title }}</title>
      <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
      <script src="https://cdn.tailwindcss.com"></script>
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" rel="stylesheet">
      <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">
      <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">
      <link rel="stylesheet" href="https://cdn.materialdesignicons.com/6.5.95/css/materialdesignicons.min.css">
  </head>

<!-- Header -->

<body>
<div class="navbar bg-base-300 h-9 fixed top-0 w-full z-50">
        <div class="container mx-auto">
          <div class="navbar-start">
            <button class="btn btn-ghost ms-4 font-arial">
              <img src="/image/logo1.png" class="h-6 w-6" alt="" />Metamorphosis
            </button>
    
            <div class="dropdown">
              <div tabindex="0" role="button" class="btn btn-ghost lg:hidden p-1">
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  class="h-5 w-5"
                  fill="none"
                  viewBox="0 0 24 24"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 6h16M4 12h8m-8 6h16"
                  />
                </svg>
              </div>
            </div>
          </div>
    
          <div class="navbar-center hidden lg:flex gap-14">
            <a href="/guest/indexguest" class="text-xs mt-1 font-arial">Belanja</a>
            <a href="AboutUs" class="text-xs mt-1 font-arial">Tentang Kami</a>
            <a href="Privacy" class="text-xs mt-1 font-arial">Kebijakan Privasi</a>
            <a href="Bantuan" class="text-xs mt-1 font-arial">Bantuan</a>
            <a href="/guest/Notifikasi" class="text-xs mt-1 font-arial">Notifikasi</a>
            <button class="" onclick="my_modal_2.showModal()">
              <i class="fas fa-search search-icon"></i>
            </button>
            <dialog id="my_modal_2" class="modal">
              <div class="modal-box">
                <input type="text" placeholder="Cari barang disini" class="ms-14 input input-bordered border-full w-full max-w-xs"/>
              </div>
              <form method="dialog" class="modal-backdrop">
                <button >close</button>
              </form>
            </dialog>
          </div>
    
          <div class="navbar-end flex items-center gap-4 text-lg">
          <div class="flex gap-4">
        <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle">
            <div class="indicator">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
              <span class="badge badge-sm indicator-item">8</span>
            </div>
          </div>
          <div tabindex="0" class="mt-3 z-[1] card card-compact dropdown-content w-52 bg-base-100 shadow">
            <div class="card-body">
              <span class="font-bold text-lg">8 Items</span>
              <span class="text-info">Subtotal: $999</span>
              <div class="card-actions">
              <a href="/guest/Keranjang" class="btn btn-primary btn-block">View cart</a>
              </div>
            </div>
          </div>
        </div>
        <div class="dropdown dropdown-end">
          <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
            <div class="w-10 rounded-full">
              <img alt="Tailwind CSS Navbar component" src="/image/profilez.jpeg" />
            </div>
          </div>
          <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-base-100 rounded-box w-52">
            <li>
              <a href="/guest/Profile" class="justify-between">
                Profile
                <span class="badge">New</span>
              </a>
            </li>
            <li><a>Settings</a></li>
            <li><a href="/Login">Logout</a></li>
          </ul>
        </div>
      </div>
          </div>
        </div>
      </div>

    <hr>
    <div>
        @yield('main')
    </div>

    <!-- Footer -->
    <div class="mt-20">
        <footer class="footer p-10 bg-base-200 text-base-content mx-auto">

            <nav class="ms-14">
                <h1 class="text-xl footer-title">Politeknik Negeri Batam</h1>
                <a class="link link-hover">Jl. Ahmad Yani, Tlk. Tering, Kec. Batam Kota,
                    Kota Batam, Kepulauan Riau 29461.</a>
                <a class="link link-hover">081275680949</a>
                <a class="link link-hover">metamorphosis@gmail.com</a>

            </nav>
            <nav>
                <h1 class="footer-title">Menu</h6>
                    <a class="link link-hover" href="AboutUs">About us</a>
                    <a class="link link-hover" href="">Review</a>
                    <a class="link link-hover">Contact</a>
            </nav>
            <nav>
                <h6 class="footer-title">Legal</h6>
                <a class="link link-hover">Terms of use</a>
                <a class="link link-hover">Privacy policy</a>
                <a class="link link-hover">Cookie policy</a>
            </nav>
        </footer>
        <footer class="footer px-10 py-4 border-t bg-base-200 text-base-content border-base-300 mx-auto">
            <aside class="items-center grid-flow-col">
                <p class="ms-14">@Metamorphosis <br>Since 2024</p>
            </aside>
            <nav class="md:place-self-center md:justify-self">
                <div class="flex gap-4 items-center">
                    <a href="https://twitter.com/SULTANINHO23" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z"></path>
                        </svg></a>
                    <a href="https://www.youtube.com/channel/UC4Jn2TviLB-ydOkVJ1J3mYA" class="flex items-center"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" class="fill-current">
                            <path d="M19.615 3.184c-3.604-.246-11.631-.245-15.23 0-3.897.266-4.356 2.62-4.385 8.816.029 6.185.484 8.549 4.385 8.816 3.6.245 11.626.246 15.23 0 3.897-.266 4.356-2.62 4.385-8.816-.029-6.185-.484-8.549-4.385-8.816zm-10.615 12.816v-8l8 3.993-8 4.007z"></path>
                        </svg></a>
                    <a href="https://www.instagram.com/sultansadad___/"><svg class="h-8 w-8" width="24" height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor" fill="none" stroke-linecap="round" stroke-linejoin="round">
                            <path stroke="none" d="M0 0h24v24H0z" />
                            <rect x="4" y="4" width="16" height="16" rx="4" />
                            <circle cx="12" cy="12" r="3" />
                            <line x1="16.5" y1="7.5" x2="16.5" y2="7.501" />
                        </svg>
                    </a>
                    <path d="M16.838 1.525C16.734 1.088 16.56 0.741 16.313 0.5 15.626 0.259 14.932 0 14.24 0s-3.877 0.259-4.613 0.5c-0.747 0.241-1.044 0.59-1.044 1.07v1.79c0 0.476 .3 0.828 .74 1.07l4.801 4.8c0.195 0.195 0.45 0.3 0.704 0.3s0.509-0.105 0.704-0.3l2.4-2.4c0.195-0.195 0.3-0.45 0.3-0.704s-0.105-0.509-0.3-0.704z" />
                </div>

            </nav>
        </footer>


    </div>
</body>

</html>