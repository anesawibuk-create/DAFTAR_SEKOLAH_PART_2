<?php
class m_koneksi {

    private $host = "localhost";
    private $user = "root";
    private $pass = "";
    private $db   = "jadwal_sekolah";

    protected $koneksi;

    public function __construct() {

        if (!function_exists("mysqli_connect")) {
            die("ERROR: Ekstensi mysqli tidak aktif di server!");
        }

        // Buka koneksi
        $this->koneksi = mysqli_connect($this->host, $this->user, $this->pass, $this->db);

        // Cek koneksi
        if (!$this->koneksi) {
            die("Koneksi database gagal: " . mysqli_connect_error());
        }
    }

    public function getKoneksi() {
        return $this->koneksi;
    }
}
?>
