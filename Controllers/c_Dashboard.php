<?php
require_once "../models/m_siswa.php";
require_once "../models/m_guru.php";
require_once "../models/m_mapel.php";

class DashboardController {

    public function index() {
        $siswa = new m_siswa();
        $guru  = new m_guru();
        $mapel = new m_mapel();

        $data = [
            "total_siswa"   => $siswa->totalSiswa(),
            "total_guru"    => $guru->totalGuru(),
            "total_mapel"   => $mapel->totalMapel(),
            "siswa_baru"    => $siswa->siswaBaru(),
            "guru_baru"     => $guru->guruBaru(),
            "mapel_populer" => $mapel->mapelPopuler(),
        ];

        include "../views/dashboard.php";
    }
}
