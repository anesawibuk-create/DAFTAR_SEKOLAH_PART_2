<?php
include "m_koneksi.php";

class m_siswa {

    private $koneksi;

    public function __construct() {
        $db = new m_koneksi();
        $this->koneksi = $db->getKoneksi();
    }

    public function tampil_data() {
        $query = "SELECT * FROM class_siswa";
        return $this->koneksi->query($query);
    }

    public function tampil_data_by_id($nis) {
    $query = "SELECT * FROM class_siswa WHERE nis = '$nis'";
    return $this->koneksi->query($query);
    }


    public function tambah($nis, $nama, $kelas, $jk, $umur, $alamat) {
        $query = "INSERT INTO class_siswa (nis, nama_siswa, kelas, jenis_kelamin, umur, alamat)
                  VALUES ('$nis', '$nama', '$kelas', '$jk', '$umur', '$alamat')";
        return $this->koneksi->query($query);
    }

    // Update data
    public function edit($nis, $nama, $kelas, $jk, $umur, $alamat) {
        $query = "UPDATE class_siswa SET
                    nama_siswa = '$nama',
                    kelas = '$kelas',
                    jenis_kelamin = '$jk',
                    umur = '$umur',
                    alamat = '$alamat'
                  WHERE nis = '$nis'";
        return $this->koneksi->query($query);
    }

    // Delete data
    public function hapus($nis) {
        $query = "DELETE FROM class_siswa WHERE nis = '$nis'";
        return $this->koneksi->query($query);
    }
}
?>
