<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        .navbar {
            padding: 20px;
        }

        .profile-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

        .profile-info {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            width: 100%;
            max-width: 800px;
        }

        .profile-image {
            width: 250px;
            height: 350px;
            overflow: hidden;
            margin-right: 20px;
            background-color: #fff;
            border: 1px solid #ddd;
            box-shadow: 0 0 2px rgba(1, 1, 1, 1);
            position: relative; /* Untuk posisi tombol unggah */
        }

        .profile-image img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .profile-image input[type="file"] {
            position: absolute;
            bottom: 0;
            left: 0;
            width: 100%;
            height: 40px;
            opacity: 0;
            cursor: pointer;
        }

        .biodata {
            flex: 10;
            margin-right: 20px;
        }

        .biodata-row {
            display: flex;
            align-items: flex-start;
            margin-bottom: 10px;
        }

        .biodata-row label {
            flex-basis: 150px; /* Lebar label */
            font-weight: bold;
            min-width: 140px; /* Minimal lebar label */
        }

        input[type="text"],
        input[type="email"],
        input[type="tel"],
        input[type="date"],
        select,
        button {
            width: 100%; /* Memanjangkan input dan button */
            padding: 8px;
            border: 1px solid #ccc;
            margin-bottom: 10px;
        }

        button {
            background-color: #007bff;
            color: white;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    @include('layout/header')
    <!-- Penutup Navbar -->

    <!-- Profile -->
    <div class="max-w-4xl mx-auto mt-10 bg-white rounded-lg shadow-md overflow-hidden">
        <div class="text-center py-4">
            <p class="text-2xl font-bold">Profile</p> <!-- Perubahan disini -->
        </div>
        <div class="flex justify-center"> <!-- Penambahan class justify-center -->
            <div class="profile-container">
                <div class="profile-info">
                    <div class="profile-image me-20">
                        <img src="image/profile1.png" class="rounded" alt="">
                        <input type="file" id="file" accept="image/*">
                    </div>

                    <div class="biodata">
                        <form action="#">
                            <div class="biodata-row">
                                <label for="nama">Nama Lengkap:</label>
                                <input type="text" id="nama" name="nama" value="Sutan Sadad" class="w-full"> <!-- Penambahan class w-full -->
                            </div>

                            <div class="biodata-row">
                                <label for="email">Email:</label>
                                <input type="email" id="email" name="email" value="sultansadad252@gmail.com" class="w-full"> <!-- Penambahan class w-full -->
                            </div>

                            <div class="biodata-row">
                                <label for="no_handphone">No. Handphone:</label>
                                <input type="tel" id="no_handphone" name="no_handphone" value="081275680949" class="w-full"> <!-- Penambahan class w-full -->
                            </div>

                            <div class="biodata-row">
                                <label for="alamat">Alamat:</label>
                                <input type="text" id="alamat" name="alamat" value="Batam Centre" class="w-full"> <!-- Penambahan class w-full -->
                            </div>

                            <div class="biodata-row">
                                <label for="tanggal_lahir">Tanggal Lahir:</label>
                                <input type="date" id="tanggal_lahir" name="tanggal_lahir" class="w-full"> <!-- Penambahan class w-full -->
                            </div>

                            <div class="biodata-row">
                                <label for="jenis_kelamin">Jenis Kelamin:</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="w-full"> <!-- Penambahan class w-full -->
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option value="Laki-laki">Laki-laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>

                            
                            <button type="submit" class="btn btn-primary bg-blue-900 mb-20 mt-7 hover:bg-blue-600 px-6">Edit Profile</button> <!-- Penambahan class w-full -->
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Penutup Profile -->
</body>
</html>