<?php

$server = 'localhost';
$username = 'root';
$pass = ''; // Pastikan ini benar, biasanya kosong jika menggunakan XAMPP/WAMP default
$database = 'jadwal_sekolah';

// Membuat koneksi
$conn = mysqli_connect($server, $username, $pass, $database);

// Memeriksa koneksi
if (mysqli_connect_errno()) {
  // Matikan skrip jika koneksi gagal dan tampilkan pesan error
  die("Koneksi database gagal: " . mysqli_connect_error());
} 
// Jika koneksi berhasil, variabel $conn akan berisi objek koneksi yang siap digunakan.
// Tidak perlu 'return $conn' atau 'echo "koneksi berhasil"' di sini.
// Lanjutkan eksekusi skrip lain yang meng-include file ini.

?>