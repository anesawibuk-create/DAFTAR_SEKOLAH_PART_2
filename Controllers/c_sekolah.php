<?php
// Kelas untuk mengelola koneksi database dan menjalankan query dasar

class Database {
    private $host = "127.0.0.1"; // Sesuaikan dengan host Anda
    private $user = "root";      // Sesuaikan dengan user database Anda
    private $password = "";      // Sesuaikan dengan password database Anda
    private $dbName = "jadwal_sekolah"; // Nama database dari file SQL Anda
    private $conn;

    // Konstruktor untuk membuat koneksi
    public function __construct() {
        try {
            $this->conn = new mysqli($this->host, $this->user, $this->password, $this->dbName);
            if ($this->conn->connect_error) {
                die("Koneksi gagal: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            die("Terjadi kesalahan koneksi: " . $e->getMessage());
        }
    }

    // Fungsi untuk menjalankan SELECT query
    public function select($sql) {
        $result = $this->conn->query($sql);
        $data = [];
        if ($result && $result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
        }
        return $data;
    }

    // Fungsi untuk menjalankan INSERT, UPDATE, DELETE query
    public function execute($sql) {
        if ($this->conn->query($sql) === TRUE) {
            return true;
        } else {
            // Tampilkan error jika gagal
            error_log("Error: " . $sql . "\n" . $this->conn->error);
            return false;
        }
    }

    // Fungsi untuk membersihkan string input (menghindari SQL Injection)
    public function sanitize($data) {
        return $this->conn->real_escape_string($data);
    }
    
    // Fungsi untuk mendapatkan ID terakhir yang di-insert
    public function getLastInsertId() {
        return $this->conn->insert_id;
    }

    // Penutup koneksi (dipanggil otomatis di akhir script, tapi bagus untuk ada)
    public function __destruct() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}

?>