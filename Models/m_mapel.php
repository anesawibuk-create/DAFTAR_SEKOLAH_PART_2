<?php
include "m_koneksi.php";

class m_mapel {

    private $koneksi;

    public function __construct() {
        $db = new m_koneksi();
        $this->koneksi = $db->getKoneksi();
    }

    public function tampil_data() {
        $query = "SELECT * FROM class_mapel";
        return $this->koneksi->query($query);
    }

    public function tampil_data_by_id($id_mapel)
{
    $query = "SELECT * FROM class_mapel WHERE id_mapel = '$id_mapel'";
    return $this->koneksi->query($query);
}


    public function tambah($kode, $nama, $kelas, $guru) {
        $query = "INSERT INTO class_mapel (kode_mapel, nama_mapel, kelas, guru_pengampungan)
                  VALUES ('$kode', '$nama', '$kelas', '$guru')";
        return $this->koneksi->query($query);
    }

    public function edit($id, $kode, $nama, $kelas, $guru) {
        $query = "UPDATE class_mapel SET 
                    kode_mapel = '$kode',
                    nama_mapel = '$nama',
                    kelas = '$kelas',
                    guru_pengampungan = '$guru'
                  WHERE id_mapel = '$id'";
        return $this->koneksi->query($query);
    }

    public function hapus($id) {
        $query = "DELETE FROM class_mapel WHERE id_mapel = '$id'";
        return $this->koneksi->query($query);
    }
}
?>
