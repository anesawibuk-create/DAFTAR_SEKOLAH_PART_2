<?php
include "../Models/m_guru.php";

$guru = new m_guru();

// TAMBAH DATA
if (isset($_GET['aksi']) && $_GET['aksi'] == "tambah") {

    $nama   = $_POST['nama_guru'];
    $nip    = $_POST['nip'];
    $mapel  = $_POST['mapel'];
    $jk     = $_POST['jenis_kelamin'];
    $no_hp  = $_POST['no_hp'];
    $alamat = $_POST['alamat'];

    if ($guru->tambah($nama, $nip, $mapel, $jk, $no_hp, $alamat)) {
        echo "<script>
                alert('Data berhasil ditambahkan!');
                window.location='../Views/dataguru.php';
              </script>";
    } else {
        echo "<script>
                alert('Data gagal ditambahkan!');
                window.location='../Views/dataguru.php';
              </script>";
    }
    exit;
}


// EDIT DATA
if (isset($_GET['aksi']) && $_GET['aksi'] == "edit") {

    $id_guru    = $_POST['id_guru'];
    $nama       = $_POST['nama_guru'];
    $nip        = $_POST['nip'];
    $mapel      = $_POST['mapel'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $no_hp      = $_POST['no_hp'];
    $alamat     = $_POST['alamat'];

    if ($guru->edit($id_guru, $nama, $nip, $mapel, $jenis_kelamin, $no_hp, $alamat)) {
        echo "<script>
                alert('Data guru berhasil diubah!');
                window.location='../Views/dataguru.php';
              </script>";
    } else {
        echo "<script>
                alert('Data guru gagal diubah!');
                window.location='../Views/dataguru.php';
              </script>";
    }
    exit;
}

// HAPUS DATA
if (isset($_GET['aksi']) && $_GET['aksi'] == "hapus") {

    $id_guru = $_GET['id'];

    if ($guru->hapus($id_guru)) {
        echo "<script>
                alert('Data guru berhasil dihapus!');
                window.location='../Views/dataguru.php';
              </script>";
    } else {
        echo "<script>
                alert('Data guru gagal dihapus!');
                window.location='../Views/dataguru.php';
              </script>";
    }
    exit;
}
?>
