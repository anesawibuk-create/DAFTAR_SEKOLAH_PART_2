<?php 
include "../Models/m_mapel.php";

$mapel = new m_mapel();

// ambil id_mapel dari URL
$id = $_GET['id'];

// ambil data mapel berdasarkan id
$data = $mapel->tampil_data_by_id($id);
$d = $data->fetch_assoc();
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Data Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-lg">
            <div class="card-body p-4">
                <h4 class="mb-3 text-primary">Edit Data Mata Pelajaran</h4>

                <form action="../Controllers/c_mapel.php?aksi=edit" method="POST">

                    <input type="hidden" name="id_mapel" value="<?= $d['id_mapel']; ?>">

                    <div class="mb-3">
                        <label class="form-label">Kode Mapel</label>
                        <input type="text" name="kode_mapel" value="<?= $d['kode_mapel']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" name="nama_mapel" value="<?= $d['nama_mapel']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" value="<?= $d['kelas']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Guru Pengampu</label>
                        <input type="text" name="guru_pengampungan" value="<?= $d['guru_pengampungan']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jam Pelajaran</label>
                        <input type="text" name="jam_pelajaran" value="<?= $d['jam_pelajaran']; ?>" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hari</label>
                        <input type="text" name="hari" value="<?= $d['hari']; ?>" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Simpan Perubahan</button>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
