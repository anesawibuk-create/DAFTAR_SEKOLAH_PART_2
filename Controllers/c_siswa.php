<?php
include "../Models/m_siswa.php";

$user = new m_siswa();

// TAMBAH DATA
if (isset($_GET['aksi']) && $_GET['aksi'] == "tambah") {

    $nis    = $_POST['nis'];
    $nama   = $_POST['nama_siswa'];
    $kelas  = $_POST['kelas'];
    $jk     = $_POST['jenis_kelamin'];
    $umur   = $_POST['umur'];
    $alamat = $_POST['alamat'];

    if ($user->tambah($nis, $nama, $kelas, $jk, $umur, $alamat)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location='../Views/datasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                window.location='../Views/datasiswa.php';
              </script>";
    }
    exit;
}

// EDIT DATA
if (isset($_GET['aksi']) && $_GET['aksi'] == "edit") {

    $nis    = $_POST['nis'];
    $nama   = $_POST['nama_siswa'];
    $kelas  = $_POST['kelas'];
    $jk     = $_POST['jenis_kelamin'];
    $umur   = $_POST['umur'];
    $alamat = $_POST['alamat'];

    if ($user->edit($nis, $nama, $kelas, $jk, $umur, $alamat)) {
        echo "<script>
                alert('Data berhasil diubah!');
                window.location='../Views/datasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal diubah!');
                window.location='../Views/datasiswa.php';
              </script>";
    }
    exit;
}

// HAPUS DATA
if (isset($_GET['aksi']) && $_GET['aksi'] == "hapus") {
    
    $nis = $_GET['id'];

    if ($user->hapus($nis)) {
        echo "<script>
                alert('Data berhasil dihapus!');
                window.location='../Views/datasiswa.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal dihapus!');
                window.location='../Views/datasiswa.php';
              </script>";
    }
    exit;
}
?>
