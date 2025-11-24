<?php 
include "../Models/m_guru.php";

$guru = new m_guru();

// ambil id dari URL
$id_guru = $_GET['id'];

// ambil data guru berdasarkan id_guru
$data = $guru->tampil_data_by_id($id_guru);
$d = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Guru</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100">

    <div class="max-w-xl mx-auto mt-10 bg-white p-6 rounded-xl shadow-lg">
        <h1 class="text-2xl font-bold mb-4 text-green-600">Edit Data Guru</h1>

        <form action="../Controllers/c_guru.php?aksi=edit" method="POST">

            <input type="hidden" name="id_guru" value="<?= $d['id_guru']; ?>">

            <label class="block mb-2 font-medium">Nama Guru</label>
            <input 
                type="text" 
                name="nama_guru"
                value="<?= $d['nama_guru']; ?>" 
                class="w-full p-2 border rounded-lg mb-4"
                required>

            <label class="block mb-2 font-medium">NIP</label>
            <input 
                type="text" 
                name="nip"
                value="<?= $d['nip']; ?>" 
                class="w-full p-2 border rounded-lg mb-4"
                required>

            <label class="block mb-2 font-medium">Mata Pelajaran</label>
            <select name="mapel" class="w-full p-2 border rounded-lg mb-4" required>
                <?php
                $mapel_list = ['Matematika','IPA','IPS','Bhs. Indonesia','Bhs. Inggris','TIK'];
                foreach ($mapel_list as $mapel) {
                    $selected = $d['mapel'] == $mapel ? "selected" : "";
                    echo "<option value='$mapel' $selected>$mapel</option>";
                }
                ?>
            </select>

            <label class="block mb-2 font-medium">Jenis Kelamin</label>
            <select name="jenis_kelamin" class="w-full p-2 border rounded-lg mb-4" required>
                <option value="laki-laki" <?= $d['jenis_kelamin']=="laki-laki" ? "selected" : "" ?>>Laki-laki</option>
                <option value="perempuan" <?= $d['jenis_kelamin']=="perempuan" ? "selected" : "" ?>>Perempuan</option>
            </select>

            <label class="block mb-2 font-medium">Nomor HP</label>
            <input 
                type="text" 
                name="no_hp"
                value="<?= $d['no_hp']; ?>" 
                class="w-full p-2 border rounded-lg mb-4"
                required>

            <label class="block mb-2 font-medium">Alamat</label>
            <textarea 
                name="alamat" 
                class="w-full p-2 border rounded-lg mb-4"
                required><?= $d['alamat']; ?></textarea>

            <button 
                type="submit" 
                class="w-full bg-green-600 text-white px-4 py-2 rounded-lg hover:bg-green-700 transition">
                Simpan Perubahan
            </button>

        </form>

    </div>

</body>
</html>
