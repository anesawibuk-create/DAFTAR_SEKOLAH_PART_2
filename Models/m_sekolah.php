<?php
class SiswaModel {
    private $conn;

    public function __construct() {
        $this->conn = mysqli_connect("localhost", "root", "", "jadwal_sekolah");
        if (!$this->conn) {
            die("Koneksi gagal: " . mysqli_connect_error());
        }
    }

    public function getAll() {
        return mysqli_query($this->conn, "SELECT * FROM class_siswa");
    }

    public function getById($id) {
        return mysqli_fetch_assoc(mysqli_query($this->conn, "SELECT * FROM class_siswa WHERE id_siswa=$id"));
    }

    public function create($nama, $nis, $jk, $alamat, $umur, $kelas, $email, $password) {
        $pass = password_hash($password, PASSWORD_DEFAULT);
        return mysqli_query($this->conn,
            "INSERT INTO class_siswa (nama_siswa, nis, jenis_kelamin, alamat, umur, kelas, email, password)
             VALUES ('$nama','$nis','$jk','$alamat','$umur','$kelas','$email','$pass')");
    }

    public function update($id, $nama, $nis, $jk, $alamat, $umur, $kelas, $email) {
        return mysqli_query($this->conn,
            "UPDATE class_siswa SET nama_siswa='$nama', nis='$nis', jenis_kelamin='$jk',
            alamat='$alamat', umur='$umur', kelas='$kelas', email='$email' WHERE id_siswa=$id");
    }

    public function delete($id) {
        return mysqli_query($this->conn, "DELETE FROM class_siswa WHERE id_siswa=$id");
    }
}
?>