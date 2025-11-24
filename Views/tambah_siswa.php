<?php 
include "../models/m_siswa.php";
$siswa = new m_siswa();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data Siswa | E-SekolahKu</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #f3f4f6; }
    </style>
</head>

<body class="flex min-h-screen">


<div class="flex-1 lg:ml-64 p-4 sm:p-6">

    <header class="bg-white shadow-md rounded-xl p-4 mb-6 sticky top-0 z-10 flex justify-between items-center">
        <h1 class="text-2xl font-semibold text-gray-800">Tambah Data Siswa</h1>

        <button id="sidebar-toggle" class="lg:hidden p-2 rounded-full text-gray-600 hover:bg-gray-100">
            ☰
        </button>
    </header>

    <section class="bg-white rounded-xl shadow-lg p-6 max-w-3xl mx-auto">

        <h2 class="text-xl font-semibold text-gray-800 mb-6">Form Tambah Siswa</h2>

        <form action="../controllers/c_siswa.php?aksi=tambah" method="POST" class="space-y-4">

            <!-- NIS -->
            <div>
                <label class="text-sm font-medium text-gray-700">NIS</label>
                <input type="number" name="nis" required 
                    class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Nama -->
            <div>
                <label class="text-sm font-medium text-gray-700">Nama Siswa</label>
                <input type="text" name="nama_siswa" required
                    class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Kelas -->
            <div>
                <label class="text-sm font-medium text-gray-700">Kelas</label>
                <select name="kelas" required
                    class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Pilih Kelas --</option>
                    <option>VII</option>
                    <option>VIII</option>
                    <option>IX</option>
                    <option>X IPA</option>
                    <option>XI IPA</option>
                    <option>XII IPA</option>
                    <option>X IPS</option>
                    <option>XI IPS</option>
                    <option>XII IPS</option>
                </select>
            </div>

            <!-- Jenis Kelamin -->
            <div>
                <label class="text-sm font-medium text-gray-700">Jenis Kelamin</label>
                <select name="jenis_kelamin" required
                    class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
                    <option value="">-- Pilih Jenis Kelamin --</option>
                    <option>Laki-laki</option>
                    <option>Perempuan</option>
                </select>
            </div>

            <!-- Umur -->
            <div>
                <label class="text-sm font-medium text-gray-700">Umur</label>
                <input type="number" name="umur" required
                    class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500">
            </div>

            <!-- Alamat -->
            <div>
                <label class="text-sm font-medium text-gray-700">Alamat</label>
                <textarea name="alamat" rows="3" required
                    class="mt-1 w-full border-gray-300 rounded-lg shadow-sm focus:ring-indigo-500 focus:border-indigo-500"></textarea>
            </div>

            <div class="flex justify-end space-x-3 pt-4">
                <a href="datasiswa.php" 
                    class="px-4 py-2 bg-gray-300 rounded-lg hover:bg-gray-400 transition">
                    Batal
                </a>

                <button type="submit" 
                    class="px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
                    Simpan Data
                </button>
            </div>

        </form>
    </section>
</div>

<script>
    const sidebar = document.getElementById('sidebar');
    const sidebarToggle = document.getElementById('sidebar-toggle');
    const overlay = document.getElementById('sidebar-overlay');

    sidebarToggle.addEventListener('click', () => {
        sidebar.classList.toggle('-translate-x-full');
        overlay.classList.toggle('hidden');
    });
</script>

</body>
</html>
