<?php 
include "../models/m_siswa.php";
$siswa = new m_siswa();
$data = $siswa->tampil_data();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Siswa | E-SekolahKu</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Menggunakan font Inter */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6;
        }
        .sidebar-link.active {
            background-color: #4f46e5;
            color: white;
            font-weight: 600;
        }
        .sidebar-link:not(.active):hover {
            background-color: #eef2ff;
        }
        .table-header-cell {
            padding: 0.75rem 1.5rem;
            text-align: left;
            font-size: 0.75rem;
            font-weight: 500;
            color: #6b7280;
            text-transform: uppercase;
            letter-spacing: 0.05em;
        }
        .table-row-data {
            padding: 1rem 1.5rem;
            white-space: nowrap;
            font-size: 0.875rem;
            color: #111827;
        }
    </style>
</head>
<body class="flex min-h-screen">

    <!-- Sidebar -->
    <aside id="sidebar" class="w-64 bg-white shadow-xl flex flex-col fixed inset-y-0 z-30 transition-transform duration-300 transform -translate-x-full lg:translate-x-0">
        
        <div class="p-6 flex items-center justify-center border-b border-indigo-100 bg-indigo-600 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M12 14l9-5-9-5-9 5 9 5zm0 0l-9 5 9 5 9-5-9-5zm0 0v-5m-9 5h18" />
            </svg>
            <span class="text-xl font-bold tracking-wide">E-SekolahKu</span>
        </div>

        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="dashboard.php" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                Dashboard
            </a>
            <a href="datasiswa.php" class="sidebar-link active flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                Data Siswa
            </a>
            <a href="dataguru.php" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                Data Guru
            </a>
            <a href="matapelajaran.php" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                Mata Pelajaran
            </a>
        </nav>

        <div class="p-4 border-t border-indigo-100">
            <div class="flex items-center space-x-3">
                <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/40x40/4f46e5/ffffff?text=AD">
                <div>
                    <p class="text-sm font-medium text-gray-900">Admin Sekolah</p>
                    <p class="text-xs text-gray-500">administrator@email.com</p>
                </div>
            </div>
        </div>
    </aside>

    <div id="sidebar-overlay" class="fixed inset-0 bg-black opacity-0 lg:hidden z-20 transition-opacity duration-300 pointer-events-none"></div>

    <!-- Konten -->
    <div class="flex-1 lg:ml-64 transition-all duration-300 p-4 sm:p-6">

        <header class="bg-white shadow-md rounded-xl p-4 mb-6 sticky top-0 z-10 flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-800">Data Siswa</h1>

            <button id="sidebar-toggle" class="lg:hidden p-2 rounded-full text-gray-600 hover:bg-gray-100">
                ☰
            </button>
        </header>

        <section class="bg-white rounded-xl shadow-lg p-4 sm:p-6">

            <div class="flex flex-col md:flex-row justify-between items-start md:items-center mb-6">
                <h2 class="text-xl font-semibold text-gray-800">Daftar Seluruh Siswa</h2>

                    <a href="tambah_siswa.php"
        class="mt-3 md:mt-0 px-4 py-2 bg-indigo-600 text-white rounded-lg shadow hover:bg-indigo-700 transition">
        + Tambah Data Siswa
    </a>
            </div>

            <div class="overflow-x-auto rounded-xl border border-gray-200 shadow-sm">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead class="bg-indigo-50">
                        <tr>
                            <th class="table-header-cell">NIS</th>
                            <th class="table-header-cell">Nama Siswa</th>
                            <th class="table-header-cell">Kelas</th>
                            <th class="table-header-cell hidden sm:table-cell">Jenis Kelamin</th>
                            <th class="table-header-cell hidden md:table-cell">Umur</th>
                            <th class="table-header-cell hidden lg:table-cell">Alamat</th>
                            <th class="table-header-cell">Aksi</th>
                        </tr>
                    </thead>

                    <tbody class="bg-white divide-y divide-gray-100">
                        
                        <?php foreach ($data as $d) { ?>
                        <tr class="hover:bg-gray-50 transition duration-100">
                            <td class="table-row-data font-semibold text-indigo-700"><?= $d['nis']; ?></td>
                            <td class="table-row-data"><?= $d['nama_siswa']; ?></td>
                            <td class="table-row-data">
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full bg-emerald-100 text-emerald-800">
                                    <?= $d['kelas']; ?>
                                </span>
                            </td>
                            <td class="table-row-data hidden sm:table-cell"><?= $d['jenis_kelamin']; ?></td>
                            <td class="table-row-data hidden md:table-cell"><?= $d['umur']; ?></td>
                            <td class="table-row-data hidden lg:table-cell truncate max-w-xs"><?= $d['alamat']; ?></td>
                            <td class="table-row-data">
                                <a href="edit_siswa.php?id=<?= $d['nis']; ?>" class="text-indigo-600 hover:text-indigo-900 mr-2 text-sm font-medium">Edit</a>
                               <a href="../Controllers/c_siswa.php?aksi=hapus&id=<?= $d['nis']; ?>" 
                                onclick="return confirm('Apakah anda yakin mau menghapus data ini?')"
                                 class="bg-red-500 text-white px-3 py-1 rounded">
                                 Hapus</a>
                        </tr>
                        <?php } ?>

                    </tbody>
                </table>
            </div>

        </section>

    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebarOverlay = document.getElementById('sidebar-overlay');

        function toggleSidebar() {
            const hidden = sidebar.classList.contains('-translate-x-full');
            if (hidden) {
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.remove('opacity-0', 'pointer-events-none');
                sidebarOverlay.classList.add('opacity-50');
            } else {
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
                sidebarOverlay.classList.remove('opacity-50');
            }
        }

        sidebarToggle.addEventListener('click', toggleSidebar);
        sidebarOverlay.addEventListener('click', toggleSidebar);
    </script>

</body>
</html>
