<?php
include "../Models/m_mapel.php";

$mapel = new m_mapel();

// TAMBAH
if (isset($_GET['aksi']) && $_GET['aksi'] == "tambah") {

    $kode  = $_POST['kode_mapel'];
    $nama  = $_POST['nama_mapel'];
    $kelas = $_POST['kelas'];
    $guru  = $_POST['guru_pengampungan'];

    if ($mapel->tambah($kode, $nama, $kelas, $guru)) {
        echo "<script>alert('Data berhasil ditambahkan!'); window.location='../Views/matapelajaran.php';</script>";
    }
    exit;
}

// EDIT
if (isset($_GET['aksi']) && $_GET['aksi'] == "edit") {

    $id    = $_POST['id_mapel'];
    $kode  = $_POST['kode_mapel'];
    $nama  = $_POST['nama_mapel'];
    $kelas = $_POST['kelas'];
    $guru  = $_POST['guru_pengampungan'];

    if ($mapel->edit($id, $kode, $nama, $kelas, $guru)) {
        echo "<script>alert('Data berhasil update!'); window.location='../Views/matapelajaran.php';</script>";
    }
    exit;
}

// HAPUS
if (isset($_GET['aksi']) && $_GET['aksi'] == "hapus") {
    $id = $_GET['id'];

    if ($mapel->hapus($id)) {
        echo "<script>alert('Data berhasil dihapus!'); window.location='../Views/matapelajaran.php';</script>";
    }
    exit;
}
?>
