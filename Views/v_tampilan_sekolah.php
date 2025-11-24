<?php include "../controller/c_sekolah.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }
        h2 {
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
        }
        /* Style untuk tombol Aksi */
        .btn {
            padding: 5px 10px;
            text-decoration: none;
            border-radius: 4px;
            color: white;
            font-size: 14px;
        }
        .btn-update {
            background-color: #ffc107; /* Warna kuning */
            border: 1px solid #ffc107;
        }
        .btn-delete {
            background-color: #dc3545; /* Warna merah */
            border: 1px solid #dc3545;
        }
        .btn:hover {
            opacity: 0.8;
        }
        /* Mengatur perataan teks (text-align) untuk header dan sel tabel Aksi */
        th.aksi, td.aksi {
            text-align: right;
            padding-right: 15px; /* Memberi sedikit ruang di sisi kanan */
        }
    </style>
</head>
<body>

    <h2>Data User</h2>

    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat, Tanggal Lahir</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
               $no = 1;
               foreach($users as $data):
                ?>

                <tr>
                    <td><?= $no++ ?></td>
                    <td><?= $data->nama_siswa ?></td>
                    <td><?= $data->email ?></td>
               </tr>
            
               <?php endforeach; ?>
    </tbody>
            
    </table>
</body>
</html>