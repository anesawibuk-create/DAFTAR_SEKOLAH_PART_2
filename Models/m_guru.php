<?php
include "m_koneksi.php";

class m_guru {

    private $koneksi;

    public function __construct() {
        $db = new m_koneksi();
        $this->koneksi = $db->getKoneksi();
    }

    // Tampilkan semua guru
    public function tampil_data() {
        $query = "SELECT * FROM class_guru";
        return $this->koneksi->query($query);
    }

    // Tampilkan guru berdasarkan ID
    public function tampil_data_by_id($id_guru) {
        $query = "SELECT * FROM class_guru WHERE id_guru = '$id_guru'";
        return $this->koneksi->query($query);
    }

    // Tambah guru baru
  public function tambah($nama, $nip, $mapel, $jk, $no_hp, $alamat) {
    $query = "INSERT INTO class_guru (nama_guru, nip, mapel, jenis_kelamin, no_hp, alamat)
              VALUES ('$nama', '$nip', '$mapel', '$jk', '$no_hp', '$alamat')";
    return $this->koneksi->query($query);
}


    // Update data guru
    public function edit($id_guru, $nama, $nip, $mapel, $jenis_kelamin, $no_hp, $alamat) {
        $query = "UPDATE class_guru SET
                    nama_guru = '$nama',
                    nip = '$nip',
                    mapel = '$mapel',
                    jenis_kelamin = '$jenis_kelamin',
                    no_hp = '$no_hp',
                    alamat = '$alamat'
                  WHERE id_guru = '$id_guru'";
        return $this->koneksi->query($query);
    }

    // Hapus guru
    public function hapus($id_guru) {
        $query = "DELETE FROM class_guru WHERE id_guru = '$id_guru'";
        return $this->koneksi->query($query);
    }
}
?>
