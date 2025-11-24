<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard Sekolah</title>
    <!-- Memuat Tailwind CSS -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Menggunakan font Inter */
        @import url('https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap');
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f3f4f6; /* Latar belakang abu-abu muda */
        }
        /* Style kustom untuk fokus sidebar */
        .sidebar-link.active {
            background-color: #4f46e5; /* indigo-600 */
            color: white;
            font-weight: 600;
        }
        .sidebar-link:not(.active):hover {
            background-color: #eef2ff; /* indigo-50 */
        }
    </style>
</head>
<body class="flex min-h-screen">

    <!-- Sidebar / Navigasi Samping -->
    <aside id="sidebar" class="w-64 bg-white shadow-xl flex flex-col fixed inset-y-0 z-30 transition-transform duration-300 transform -translate-x-full lg:translate-x-0">
        
        <!-- Logo Sekolah -->
        <div class="p-6 flex items-center justify-center border-b border-indigo-100 bg-indigo-600 text-white">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                <path d="M12 14l9-5-9-5-9 5 9 5zm0 0l-9 5 9 5 9-5-9-5zm0 0v-5m-9 5h18" />
            </svg>
            <span class="text-xl font-bold tracking-wide">E-SekolahKu</span>
        </div>

        <!-- Menu Navigasi -->
        <nav class="flex-1 p-4 space-y-2 overflow-y-auto">
            <a href="dashboard.php" class="sidebar-link active flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" /></svg>
                Dashboard
            </a>
            <a href="datasiswa.php" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20h-2m2 0h-2M15 10a6 6 0 11-12 0 6 6 0 0112 0zM12 10a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                Data Siswa
            </a>
            <a href="dataguru.php" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253" /></svg>
                Data Guru
            </a>
            <a href="matapelajaran.php" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m10 6a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                Mata Pelajaran
            </a>
            <a href="#" class="sidebar-link flex items-center p-3 text-gray-700 rounded-lg transition duration-150">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-3" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.28 2.572-1.065z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                Pengaturan
            </a>
        </nav>

        <!-- Logout/Info User -->
        <div class="p-4 border-t border-indigo-100">
            <div class="flex items-center space-x-3">
                <img class="h-10 w-10 rounded-full object-cover" src="https://placehold.co/40x40/4f46e5/ffffff?text=AD" alt="Avatar">
                <div>
                    <p class="text-sm font-medium text-gray-900">Admin Sekolah</p>
                    <p class="text-xs text-gray-500">administrator@email.com</p>
                </div>
            </div>
        </div>
    </aside>

    <!-- Overlay untuk mobile -->
    <div id="sidebar-overlay" class="fixed inset-0 bg-black opacity-0 lg:hidden z-20 transition-opacity duration-300 pointer-events-none"></div>

    <!-- Konten Utama Dashboard -->
    <div class="flex-1 lg:ml-64 transition-all duration-300 p-4 sm:p-6">
        
        <!-- Header Utama / Navbar -->
        <header class="bg-white shadow-md rounded-xl p-4 mb-6 sticky top-0 z-10 flex justify-between items-center">
            <h1 class="text-2xl font-semibold text-gray-800">Dashboard Utama</h1>
            
            <!-- Tombol Toggle Sidebar (Hanya Mobile) -->
            <button id="sidebar-toggle" class="lg:hidden p-2 rounded-full text-gray-600 hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-indigo-500">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h16M4 18h16" /></svg>
            </button>
        </header>

        <!-- Bagian Ringkasan (Summary Cards) -->
        <section class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
            
            <!-- Card Total Siswa -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-between transition hover:shadow-xl transform hover:scale-[1.01]">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Siswa</p>
                    <p class="text-4xl font-bold text-indigo-600 mt-1">1,250</p>
                </div>
                <div class="p-3 bg-indigo-100 rounded-full text-indigo-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20h-2m2 0h-2M15 10a6 6 0 11-12 0 6 6 0 0112 0zM12 10a3 3 0 11-6 0 3 3 0 016 0z" /></svg>
                </div>
            </div>

            <!-- Card Total Guru -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-between transition hover:shadow-xl transform hover:scale-[1.01]">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Total Guru</p>
                    <p class="text-4xl font-bold text-emerald-600 mt-1">75</p>
                </div>
                <div class="p-3 bg-emerald-100 rounded-full text-emerald-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6.253v13m0-13C10.832 5.477 9.246 5 7.5 5S4.168 5.477 3 6.253v13C4.168 18.477 5.754 18 7.5 18s3.332.477 4.5 1.253m0-13C13.168 5.477 14.754 5 16.5 5s3.332.477 4.5 1.253v13C19.832 18.477 18.246 18 16.5 18s-3.332.477-4.5 1.253" /></svg>
                </div>
            </div>

            <!-- Card Total Mapel -->
            <div class="bg-white rounded-xl shadow-lg p-6 flex items-center justify-between transition hover:shadow-xl transform hover:scale-[1.01]">
                <div>
                    <p class="text-sm font-medium text-gray-500 uppercase tracking-wider">Mata Pelajaran</p>
                    <p class="text-4xl font-bold text-yellow-600 mt-1">32</p>
                </div>
                <div class="p-3 bg-yellow-100 rounded-full text-yellow-600">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m10 6a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" /></svg>
                </div>
            </div>
        </section>

        <!-- Bagian Daftar Terbaru (Recent Lists) -->
        <section class="grid grid-cols-1 lg:grid-cols-2 gap-6">

            <!-- Card 1: Siswa Terbaru -->
            <div class="bg-white rounded-xl shadow-lg p-6">
                <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-indigo-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z" /></svg>
                    5 Siswa Baru Terdaftar
                </h2>
                <div class="overflow-x-auto">
                    <table class="min-w-full divide-y divide-gray-200">
                        <thead class="bg-gray-50">
                            <tr>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Nama</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Kelas</th>
                                <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Tanggal Daftar</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white divide-y divide-gray-200">
                            <!-- Data Siswa Mockup -->
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Budi Setiawan</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">X-IPA 1</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">2 Nov 2025</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Citra Dewi</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VII-A</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">1 Nov 2025</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Ahmad Faisal</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">XII-IPS 3</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">30 Okt 2025</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Diana Putri</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">IX-C</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">29 Okt 2025</td>
                            </tr>
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Eka Wijaya</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">VIII-B</td>
                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">28 Okt 2025</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

            <!-- Card 2: Guru Terbaru & Mapel Populer -->
            <div class="space-y-6">
                <!-- Guru Terbaru -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-emerald-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" /></svg>
                        Guru Terbaru
                    </h2>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-3 flex justify-between items-center text-sm">
                            <span class="font-medium text-gray-900">Dr. Andi Wijaya</span>
                            <span class="text-gray-500">Fisika</span>
                        </li>
                        <li class="py-3 flex justify-between items-center text-sm">
                            <span class="font-medium text-gray-900">Siti Rahayu, S.Pd</span>
                            <span class="text-gray-500">Bahasa Inggris</span>
                        </li>
                        <li class="py-3 flex justify-between items-center text-sm">
                            <span class="font-medium text-gray-900">Bambang Susilo</span>
                            <span class="text-gray-500">Seni Budaya</span>
                        </li>
                    </ul>
                </div>
                
                <!-- Mata Pelajaran Populer -->
                <div class="bg-white rounded-xl shadow-lg p-6">
                    <h2 class="text-xl font-semibold text-gray-800 mb-4 flex items-center">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 mr-2 text-yellow-500" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2"><path stroke-linecap="round" stroke-linejoin="round" d="M7 7h.01M7 3h.01M7 11h.01M7 15h.01M7 19h.01M17 7h.01M17 3h.01M17 11h.01M17 15h.01M17 19h.01M12 3h.01M12 7h.01M12 11h.01M12 15h.01M12 19h.01" /></svg>
                        Mata Pelajaran Populer
                    </h2>
                    <ul class="divide-y divide-gray-200">
                        <li class="py-3 flex justify-between items-center text-sm">
                            <span class="font-medium text-gray-900">Matematika</span>
                            <span class="text-gray-500">25 Kelas</span>
                        </li>
                        <li class="py-3 flex justify-between items-center text-sm">
                            <span class="font-medium text-gray-900">Informatika</span>
                            <span class="text-gray-500">22 Kelas</span>
                        </li>
                        <li class="py-3 flex justify-between items-center text-sm">
                            <span class="font-medium text-gray-900">Bahasa Indonesia</span>
                            <span class="text-gray-500">20 Kelas</span>
                        </li>
                    </ul>
                </div>
            </div>
        </section>

    </div>

    <script>
        const sidebar = document.getElementById('sidebar');
        const sidebarToggle = document.getElementById('sidebar-toggle');
        const sidebarOverlay = document.getElementById('sidebar-overlay');
        const mainContent = document.querySelector('.flex-1');

        // Fungsi untuk mengaktifkan/menonaktifkan sidebar pada mode mobile
        function toggleSidebar() {
            const isHidden = sidebar.classList.contains('-translate-x-full');
            
            if (isHidden) {
                // Tampilkan sidebar
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.remove('opacity-0', 'pointer-events-none');
                sidebarOverlay.classList.add('opacity-50');
            } else {
                // Sembunyikan sidebar
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
                sidebarOverlay.classList.remove('opacity-50');
            }
        }

        // Event listener untuk tombol toggle
        sidebarToggle.addEventListener('click', toggleSidebar);

        // Event listener untuk overlay (klik di luar sidebar)
        sidebarOverlay.addEventListener('click', toggleSidebar);

        // Menutup sidebar jika ukuran layar berubah menjadi desktop (opsional, tapi bagus untuk UX)
        window.addEventListener('resize', () => {
            if (window.innerWidth >= 1024) { // Ukuran lg:
                sidebar.classList.remove('-translate-x-full');
                sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
                sidebarOverlay.classList.remove('opacity-50');
            } else {
                 // Pastikan sidebar tersembunyi jika di mobile
                sidebar.classList.add('-translate-x-full');
                sidebarOverlay.classList.add('opacity-0', 'pointer-events-none');
                sidebarOverlay.classList.remove('opacity-50');
            }
        });
    </script>

</body>
</html>