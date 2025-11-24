<?php 
include "../Models/m_mapel.php";

$mapel = new m_mapel();
$data = $mapel->tampil_data();
?>

<!doctype html>
<html lang="id">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Mata Pelajaran - E-SekolahKu</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body { background:#f4f5f7; font-family: Inter, system-ui, Arial; }
    .sidebar { width:240px; background:#5b4bd9; min-height:100vh; color:#fff; position:fixed; }
    .sidebar .nav-link.active { background:rgba(255,255,255,0.08); border-radius:8px; }
    .content { margin-left:260px; padding:28px; }
    .badge-class { background:#e6fff4; color:#18a87b; font-weight:600; border-radius:999px; padding:.25rem .5rem; }
    .action-edit { color:#4b4bd9; text-decoration:none; margin-right:8px; }
    .action-delete { color:#e45050; text-decoration:none; }
  </style>
</head>
<body>

  <!-- Sidebar -->
  <div class="sidebar">
      <div class="brand p-3 fw-bold">E-SekolahKu</div>
      <nav class="nav flex-column px-2">
        <a class="nav-link" href="dashboard.php">Dashboard</a>
        <a class="nav-link active" href="matapelajaran.php">Data Mata Pelajaran</a>
        <a class="nav-link" href="dataguru.php">Data Guru</a>
        <a class="nav-link" href="datasiswa.php">Data Siswa</a>
      </nav>
  </div>

  <!-- Content -->
  <div class="content">
    <h4>Data Mata Pelajaran</h4>

    <div class="card mt-3 table-card">
      <div class="card-body">
        <div class="card-head">
          <h6>Daftar Seluruh Mata Pelajaran</h6>
          <a class="btn btn-sm btn-outline-primary" href="tambahmapel.php">Tambah Mata Pelajaran</a>
        </div>

        <div class="table-responsive">
          <table class="table align-middle">
            <thead class="bg-light">
              <tr>
                <th>No</th>
                <th>Kode</th>
                <th>Nama Mata Pelajaran</th>
                <th>Kelas</th>
                <th>Guru Pengampu</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody>

              <?php 
              $no = 1;
              while ($d = $data->fetch_assoc()) {
              ?>
              <tr>
                <td><?= $no++ ?></td>
               <td> <?= $d['kode_mapel']; ?> </td>
                <td><?= $d['nama_mapel'] ?></td>
                <td><span class="badge-class"><?= $d['kelas'] ?></span></td>
                <td><?= $d['guru_pengampungan'] ?></td>
                <td>
                  <a class="action-edit" href="editmapel.php?id=<?= $d['id_mapel'] ?>">Edit</a>
                  <a class="action-delete" href="../Controllers/c_mapel.php?aksi=hapus&id=<?= $d['id_mapel'] ?>" onclick="return confirm('Hapus data?')">Hapus</a>
                </td>
              </tr>
              <?php } ?>

            </tbody>
          </table>
        </div>

      </div>
    </div>
  </div>

</body>
</html>
