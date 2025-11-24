-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 23, 2025 at 12:45 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jadwal_sekolah`
--

-- --------------------------------------------------------

--
-- Table structure for table `class_guru`
--

CREATE TABLE `class_guru` (
  `id_guru` int(11) NOT NULL,
  `nama_guru` varchar(10) NOT NULL,
  `nip` varchar(30) NOT NULL,
  `mapel` varchar(50) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `id_siswa` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_guru`
--

INSERT INTO `class_guru` (`id_guru`, `nama_guru`, `nip`, `mapel`, `jenis_kelamin`, `no_hp`, `alamat`, `id_siswa`) VALUES
(13, 'pa budi', '748147812', 'indonesia', 'laki-laki', '34534534', 'dsadsacxzc', 1),
(14, 'pa acep', '89789754398', 'inggris', 'laki-laki', '7657567', 'saedawdsa', 2),
(15, 'pa ase[', '64563455345', 'sejarah', 'laki-laki', '654645645', 'awesedsadawsa', 3),
(16, 'bu  sri', '589437598347', 'matematika', 'perempuan', '9678567465', 'dasdwadsadasd', 4),
(17, 'pa rudi', '068657567457', 'agama', 'laki-laki', '89678678', 'fsdfsdfzxcadrasd', 5),
(18, 'bu indah', '858567567', 'seni budaya', 'perempuan', '967856754456', 'azfzxcvazas', 6),
(19, 'pa cecep', '765745645', 'pkn', 'laki-laki', '856956756', 'dsacxzewsad', 7),
(20, 'pa danang', '48657856756', 'olahraga', 'laki-laki', '785467456', 'esadwadsadwasa', 8),
(21, 'pa gugun', '0998765', 'KK RPL', 'laki-laki', '0987654321', 'FDALKSCHUIHVIXOC', 9),
(22, 'bu suci', '878707', 'KK RPL 2', 'perempuan', '09878575', 'DAWDSCZXAWDSA', 10);

-- --------------------------------------------------------

--
-- Table structure for table `class_mapel`
--

CREATE TABLE `class_mapel` (
  `id_mapel` int(11) NOT NULL,
  `nama_mapel` varchar(50) NOT NULL,
  `kode_mapel` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `guru_pengampungan` varchar(50) NOT NULL,
  `jam_pelajaran` varchar(20) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `id_siswa` int(11) NOT NULL,
  `id_guru` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_mapel`
--

INSERT INTO `class_mapel` (`id_mapel`, `nama_mapel`, `kode_mapel`, `kelas`, `guru_pengampungan`, `jam_pelajaran`, `hari`, `id_siswa`, `id_guru`) VALUES
(1, 'indonesiaaa', '0010', '11', 'WOWOOW', '2', 'senin', 1, 5),
(2, 'agama', '004', '12', 'WOEWOW', '1', 'selasa', 4, 10),
(3, 'ipa', '321', '11', 'NMONOM', '4', 'senin', 5, 6),
(4, 'pjok', '005', '11', 'DSADSAD', '6', 'kamis', 3, 6),
(5, 'ips', '004', '12', 'DWADSAWD', '4', 'jumat', 0, 4),
(6, 'ipa', '112', '11', 'ASDASDAS', '2', 'senin', 4, 3),
(7, 'indonesia', '007', '11', 'ASDASD', '7', 'rabu', 6, 2),
(8, 'pjok', '003', '11', 'ZXC', '5', 'kamis', 2, 1),
(9, 'indonesia', '007', '11', 'CVB', '4', 'senin', 6, 0),
(10, 'ipa', '006', '12', 'BNM', '8', 'selasa', 1, 1),
(11, 'rpl', '0012', '10', 'pagugun', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `class_siswa`
--

CREATE TABLE `class_siswa` (
  `id_siswa` int(11) NOT NULL,
  `nama_siswa` varchar(10) NOT NULL,
  `nis` varchar(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan','','') NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `umur` int(11) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_siswa`
--

INSERT INTO `class_siswa` (`id_siswa`, `nama_siswa`, `nis`, `jenis_kelamin`, `alamat`, `umur`, `kelas`, `email`, `password`) VALUES
(1, 'virgi', '32776723542', 'laki-laki', 'bandung', 18, '12', 'ghaedf@gmail.com', '6543'),
(2, 'ega', '327765478976', 'laki-laki', 'kota bandung', 17, '11', 'rdtgfd@gmail.com', '1234'),
(3, 'maman', '32778747974', 'laki-laki', 'bekasi', 18, '12', 'kkkkk@gmail.com', '4321'),
(4, 'egi', '327754567753', 'laki-laki', 'jambi', 17, '11', 'rtdtrd@gmail.com', '554433'),
(5, 'rizki', '327762532765', 'laki-laki', 'cimahi', 17, '11', 'ytafs@gmail.com', '4321'),
(6, 'bobon', '3277865357', 'laki-laki', 'semarang', 17, '11', 'shdgf@gmail.com', '43212'),
(7, 'rere', '327735434556', 'perempuan', 'cimahi', 17, '11', 'grsdtr@gmail.com', '6543'),
(8, 'kiki', '32775445652', 'laki-laki', 'bandung', 18, '12', 'fdf@gmail.com', '7654'),
(9, 'kia', '3277432345', 'perempuan', 'cimahi', 17, '11', ' gdedf@gmail.com', '6655'),
(10, 'nana', '32778765434', 'perempuan', 'cimahi', 17, '11', 'gdfg@gmail.com', '9876'),
(11, 'saktii', '327745654', 'laki-laki', 'cimahi', 17, '12', 'sgfy@gmail.com', '7654'),
(13, 'ewaeaww', '432423423', 'laki-laki', 'cimahi', 16, 'XII IPA', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `class_guru`
--
ALTER TABLE `class_guru`
  ADD PRIMARY KEY (`id_guru`),
  ADD KEY `id_siswa` (`id_siswa`);

--
-- Indexes for table `class_mapel`
--
ALTER TABLE `class_mapel`
  ADD PRIMARY KEY (`id_mapel`),
  ADD KEY `id_siswa` (`id_siswa`),
  ADD KEY `id_guru` (`id_guru`);

--
-- Indexes for table `class_siswa`
--
ALTER TABLE `class_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `class_guru`
--
ALTER TABLE `class_guru`
  MODIFY `id_guru` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `class_mapel`
--
ALTER TABLE `class_mapel`
  MODIFY `id_mapel` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `class_siswa`
--
ALTER TABLE `class_siswa`
  MODIFY `id_siswa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `class_guru`
--
ALTER TABLE `class_guru`
  ADD CONSTRAINT `class_guru_ibfk_1` FOREIGN KEY (`id_siswa`) REFERENCES `class_siswa` (`id_siswa`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
