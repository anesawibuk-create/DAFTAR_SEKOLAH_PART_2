<?php
include "../Models/m_guru.php";

$guru = new m_guru();
$daftarGuru = $guru->tampil_data();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Data Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body { font-family: 'Inter', sans-serif; background-color: #f0f4f8; }
        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-thumb { background-color: #4c8bf5; border-radius: 10px; }
        @media (max-width: 768px) {
            .responsive-table th, .responsive-table td { padding-left: 0.5rem; padding-right: 0.5rem; font-size: 0.875rem; }
        }
    </style>
    <script>
        tailwind.config = {
            theme: {
                extend: { colors: { 'primary-blue': '#1c7ed6', 'primary-teal': '#20c997', 'soft-bg': '#e9ecef', } }
            }
        }
    </script>
</head>
<body class="min-h-screen p-4 md:p-8">

<header class="bg-primary-blue shadow-lg rounded-xl mb-8 text-white">
    <div class="p-4 md:p-6 flex justify-between items-center">
        <h1 class="text-2xl md:text-3xl font-bold tracking-tight">Sistem Informasi Sekolah</h1>
        <div class="text-sm font-light hidden sm:block">Dashboard</div>
    </div>
    <nav class="flex border-t border-blue-600 bg-blue-700 rounded-b-xl overflow-x-auto">
        <a href="dashboard.php" class="py-2 px-6 text-sm font-semibold border-b-4 border-white text-white whitespace-nowrap">Dashboard</a>
        <a href="dataguru.php" class="py-2 px-6 text-sm font-semibold border-b-4 border-white text-white whitespace-nowrap">Data Guru</a>
        <a href="datasiswa.php" class="py-2 px-6 text-sm font-medium text-blue-200 hover:bg-blue-600 hover:text-white transition duration-150 whitespace-nowrap">Data Siswa</a>
        <a href="matapelajaran.php" class="py-2 px-6 text-sm font-medium text-blue-200 hover:bg-blue-600 hover:text-white transition duration-150 whitespace-nowrap">Jadwal Pelajaran</a> 
    </nav>
</header>

<main class="max-w-7xl mx-auto">
    <h2 class="text-2xl font-bold mb-4 text-gray-800">Manajemen Data Guru</h2>

    <div class="mb-6 flex justify-end">
        <button id="openModalBtn" class="bg-primary-teal hover:bg-emerald-600 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-200 flex items-center">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="mr-2">
                <line x1="12" y1="5" x2="12" y2="19"></line>
                <line x1="5" y1="12" x2="19" y2="12"></line>
            </svg>
            Tambah Guru Baru
        </button>
    </div>

    <div class="bg-white rounded-xl shadow-xl overflow-hidden">
        <div class="p-6 bg-gray-50 border-b border-gray-200">
            <h3 class="text-xl font-semibold text-gray-700">Daftar Tenaga Pengajar</h3>
        </div>
        <div class="overflow-x-auto">
            <table class="min-w-full divide-y divide-gray-200 responsive-table">
                <thead class="bg-soft-bg">
                    <tr>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-1/12">ID</th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-3/12">Nama Guru</th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/12">NIP</th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-2/12">Mata Pelajaran</th>
                        <th scope="col" class="px-3 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider w-3/12">Aksi</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-100">
                    <?php while($row = $daftarGuru->fetch_assoc()): ?>
                        <tr class="hover:bg-gray-50 transition duration-150">
                            <td class="px-3 py-4"><?= $row['id_guru'] ?></td>
                            <td class="px-3 py-4"><?= ucwords($row['nama_guru']) ?></td>
                            <td class="px-3 py-4"><?= $row['nip'] ?></td>
                            <td class="px-3 py-4"><?= $row['mapel'] ?></td>
                            <td class="px-3 py-4 whitespace-nowrap text-sm font-medium">
                                <a href="editguru.php?id=<?= $row['id_guru'] ?>" class="text-primary-blue hover:text-blue-700 mr-3">Edit</a>
                                <a href="../Controllers/c_guru.php?aksi=hapus&id=<?= $row['id_guru'] ?>" class="text-red-600 hover:text-red-800" onclick="return confirm('Yakin ingin menghapus guru <?= $row['nama_guru'] ?>?')">Hapus</a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</main>

<!-- Modal Tambah Guru tetap sama seperti sebelumnya -->
<div id="teacherModal" class="fixed inset-0 bg-gray-900 bg-opacity-50 z-50 hidden flex items-center justify-center p-4 transition-opacity duration-300">
    <div class="bg-white rounded-xl shadow-2xl w-full max-w-lg p-6 transform transition-transform duration-300 scale-95 md:scale-100">
        <h3 class="text-2xl font-bold mb-6 text-gray-800 border-b pb-2">Formulir Tambah Guru</h3>
        <form id="teacherForm" method="POST" action="../Controllers/c_guru.php?aksi=tambah">
            <div class="mb-4">
                <label for="namaGuru" class="block text-sm font-medium text-gray-700 mb-1">Nama Guru</label>
                <input type="text" name="nama_guru" id="namaGuru" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition duration-150">
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="nip" class="block text-sm font-medium text-gray-700 mb-1">NIP</label>
                    <input type="text" name="nip" id="nip" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition duration-150">
                </div>
                <div class="mb-4">
                    <label for="mapel" class="block text-sm font-medium text-gray-700 mb-1">Mata Pelajaran</label>
                    <select name="mapel" id="mapel" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition duration-150 bg-white">
                        <option value="">Pilih Mata Pelajaran</option>
                        <option value="Matematika">Matematika</option>
                        <option value="IPA">Ilmu Pengetahuan Alam</option>
                        <option value="IPS">Ilmu Pengetahuan Sosial</option>
                        <option value="Bahasa Indonesia">Bahasa Indonesia</option>
                        <option value="Bahasa Inggris">Bahasa Inggris</option>
                        <option value="TIK">TIK</option>
                    </select>
                </div>
            </div>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                <div class="mb-4">
                    <label for="gender" class="block text-sm font-medium text-gray-700 mb-1">Jenis Kelamin</label>
                    <select name="jenis_kelamin" id="gender" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition duration-150 bg-white">
                        <option value="">Pilih Jenis Kelamin</option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="noHp" class="block text-sm font-medium text-gray-700 mb-1">Nomor HP</label>
                    <input type="text" name="no_hp" id="noHp" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition duration-150">
                </div>
            </div>
            <div class="mb-6">
                <label for="alamat" class="block text-sm font-medium text-gray-700 mb-1">Alamat</label>
                <input type="text" name="alamat" id="alamat" required class="w-full px-4 py-2 border border-gray-300 rounded-lg focus:ring-primary-blue focus:border-primary-blue transition duration-150">
            </div>
            <div class="flex justify-end space-x-3">
                <button type="button" id="closeModalBtn" class="bg-gray-300 text-gray-800 hover:bg-gray-400 font-semibold py-2 px-4 rounded-lg transition duration-200">Batal</button>
                <button type="submit" class="bg-primary-blue hover:bg-blue-700 text-white font-semibold py-2 px-4 rounded-lg shadow-md transition duration-200">Simpan Data</button>
            </div>
        </form>
    </div>
</div>

<script>
    const modal = document.getElementById('teacherModal');
    const openModalBtn = document.getElementById('openModalBtn');
    const closeModalBtn = document.getElementById('closeModalBtn');

    openModalBtn.addEventListener('click', () => {
        modal.classList.remove('hidden');
        setTimeout(() => modal.style.opacity = '1', 10);
        modal.querySelector('div').classList.remove('scale-95');
    });

    closeModalBtn.addEventListener('click', () => {
        modal.style.opacity = '0';
        modal.querySelector('div').classList.add('scale-95');
        setTimeout(() => modal.classList.add('hidden'), 300);
    });
</script>
</body>
</html>
