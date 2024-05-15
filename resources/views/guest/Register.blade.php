<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form Registrasi</title>
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
  <div class="flex mt-20 justify-center"></div>
  <div class="col-span-1 flex items-center justify-center">
    <div class="bg-white rounded p-8 w-full max-w-md shadow-md">
      <h1 class="text-center text-2xl font-bold mb-6">Registrasi</h1>
      <form id="form-registrasi" action="/guest/create" method="post" class="w-full">
        @csrf
        <div class="mb-2">
          <label for="name" class="text-black">Nama</label>
          <input type="text" id="name" name="name" value="{{ Session::get('name') }}" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="alamat" class="text-black">Alamat</label>
          <input type="text" id="alamat" name="alamat" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="email" class="text-black">Email</label>
          <input type="email" id="email" name="email" value="{{ Session::get('email') }}" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="email-error" class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="NoHP" class="text-black">No Handphone</label>
          <input type="text" id="NoHP" name="NoHP" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="password" class="text-black">Password</label>
          <input type="password" id="password" name="password" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="password-error" class="text-red-500 text-sm"></div>
        </div>
        <div class="mb-2">
          <label for="confirm-password" class="text-black">Konfirmasi Password</label>
          <input type="password" id="confirm-password" name="confirm-password" class="border border-gray-300 rounded-md w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" required>
          <div id="confirm-password-error" class="text-red-500 text-sm"></div>
        </div>
        <div class="flex justify-center items-center mb-8 mt-5">
          <button type="submit" name="submit" class="bg-blue-900 hover:bg-blue-800 text-white font-bold py-2 px-44 rounded focus:outline-none focus:shadow-outline">Registrasi</button>
        </div>
      </form>
      <p class="text-center">Sudah punya akun? <a href="/guest/Login" class="text-blue-900 font-bold">Masuk</a></p>
    </div>
  </div>

  <!-- JavaScript untuk validasi password -->
  <script>
    document.getElementById('form-registrasi').addEventListener('submit', function(event) {
      const password = document.getElementById('password').value;
      const confirmPassword = document.getElementById('confirm-password').value;

      if (password !== confirmPassword) {
        event.preventDefault();
        document.getElementById('confirm-password-error').textContent = 'Password dan Konfirmasi Password harus sama.';
      } else {
        document.getElementById('confirm-password-error').textContent = '';
      }
    });
  </script>
</body>
</html>
