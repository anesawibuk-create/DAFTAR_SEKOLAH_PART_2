<?php 
include "../Models/m_siswa.php";

$siswa = new m_siswa();

// ambil id dari URL
$nis = $_GET['id'];

// ambil data siswa berdasarkan NIS
$data = $siswa->tampil_data_by_id($nis);
$d = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Siswa</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-indigo-700">Edit Data Siswa</h1>
<form action="../Controllers/c_siswa.php?aksi=edit" method="POST">


    <input type="hidden" name="nis" value="<?= $d['nis']; ?>">

    <label class="block mb-2 font-medium">Nama Siswa</label>
    <input 
        type="text" 
        name="nama_siswa"
        value="<?= $d['nama_siswa']; ?>" 
        class="w-full p-2 border rounded-lg mb-4"
        required>

    <label class="block mb-2 font-medium">Kelas</label>
    <input 
        type="text" 
        name="kelas" 
        value="<?= $d['kelas']; ?>" 
        class="w-full p-2 border rounded-lg mb-4"
        required>

    <label class="block mb-2 font-medium">Jenis Kelamin</label>
    <select name="jenis_kelamin" class="w-full p-2 border rounded-lg mb-4" required>
        <option value="laki-laki" <?= $d['jenis_kelamin']=="laki-laki" ? "selected" : "" ?>>Laki-laki</option>
        <option value="perempuan" <?= $d['jenis_kelamin']=="perempuan" ? "selected" : "" ?>>Perempuan</option>
    </select>

    <label class="block mb-2 font-medium">Umur</label>
    <input 
        type="number" 
        name="umur" 
        value="<?= $d['umur']; ?>" 
        class="w-full p-2 border rounded-lg mb-4"
        required>

    <label class="block mb-2 font-medium">Alamat</label>
    <textarea 
        name="alamat" 
        class="w-full p-2 border rounded-lg mb-4"
        required><?= $d['alamat']; ?></textarea>

    <button 
        type="submit" 
        class="w-full bg-indigo-600 text-white px-4 py-2 rounded-lg hover:bg-indigo-700 transition">
        Simpan Perubahan
    </button>

</form>



    </div>

</body>
</html>
