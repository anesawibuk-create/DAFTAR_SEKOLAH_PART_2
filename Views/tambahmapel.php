<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Mata Pelajaran</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light">

<div class="container mt-5">
    <div class="col-md-6 mx-auto">
        <div class="card shadow-lg">
            <div class="card-body p-4">
                <h4 class="mb-3 text-primary">Tambah Mata Pelajaran</h4>

                <form action="../Controllers/c_mapel.php?aksi=tambah" method="POST">

                    <div class="mb-3">
                        <label class="form-label">Kode Mapel</label>
                        <input type="text" name="kode_mapel" class="form-control" placeholder="Contoh: MTK" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Nama Mata Pelajaran</label>
                        <input type="text" name="nama_mapel" class="form-control" placeholder="Contoh: Matematika" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Kelas</label>
                        <input type="text" name="kelas" class="form-control" placeholder="Contoh: 10" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Guru Pengampu</label>
                        <input type="text" name="guru_pengampungan" class="form-control" placeholder="Contoh: Budi Santoso" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Jam Pelajaran</label>
                        <input type="text" name="jam_pelajaran" class="form-control" placeholder="07.00 - 08.30" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hari</label>
                        <input type="text" name="hari" class="form-control" placeholder="Senin" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100 mt-3">Simpan Mata Pelajaran</button>

                </form>

            </div>
        </div>
    </div>
</div>

</body>
</html>
