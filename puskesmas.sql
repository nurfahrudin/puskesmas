-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 23, 2024 at 11:42 PM
-- Server version: 10.4.28-MariaDB-log
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `puskesmas`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_admin`
--

CREATE TABLE `t_admin` (
  `id_admin` int(5) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_admin`
--

INSERT INTO `t_admin` (`id_admin`, `username`, `password`) VALUES
(0, 'user', '$2y$10$wIPv1Yoq4oLvG5ftXLS1XetPLMPYP7iOj9NptK.MNSURHWw8fhFhi'),
(0, 'admin', '$2y$10$IVPJyN29m.vAPmfDhxwXruu6viN1uWWcuMZ3aHfuZRj4N2Bd0r7Ei');

-- --------------------------------------------------------

--
-- Table structure for table `t_antrian`
--

CREATE TABLE `t_antrian` (
  `id_antrian` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nik` varchar(16) NOT NULL,
  `tlp` varchar(13) NOT NULL,
  `jkel` enum('Laki-Laki','Perempuan') NOT NULL,
  `bpjs` varchar(20) NOT NULL,
  `poli` enum('Umum','Gigi dan Mulut','KIA','Laboratorium','Imunisasi') NOT NULL,
  `keluhan` text NOT NULL,
  `nomor` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_antrian`
--

INSERT INTO `t_antrian` (`id_antrian`, `nama`, `nik`, `tlp`, `jkel`, `bpjs`, `poli`, `keluhan`, `nomor`) VALUES
(9, 'nur fahrudin', '1231389', '082141094506', 'Perempuan', '0123', 'Umum', 'pusing', 2),
(11, 'Eduardus Leda Bejo', '1231389', '13', 'Laki-Laki', '0', 'Laboratorium', 'saya ingin tes kolesterol', 4),
(12, 'Eduardus Leda Bejo', '1231389', '13', 'Laki-Laki', '0', 'Imunisasi', 'imunisasi anak pertama', 5),
(13, 'Eduardus Leda', '1231389', '13', 'Laki-Laki', '012313', 'Imunisasi', 'anak', 6),
(14, 'Elsy Nuraini', '530908181290001', '082141094506', 'Perempuan', '060702', 'KIA', 'periksa kandungan', 7),
(15, 'Anto', '091111', '0812333', 'Laki-Laki', '0', 'Umum', 'Demam tinggi dan pusing', 6),
(16, 'Anto', '091111', '0812333', 'Laki-Laki', '0', 'Gigi dan Mulut', 'Cabut gigi', 7),
(17, 'Nur Fahrudin', '2442133', '082141094506', 'Laki-Laki', '9123', 'Umum', 'sakit perut', 8);

-- --------------------------------------------------------

--
-- Table structure for table `t_informasi`
--

CREATE TABLE `t_informasi` (
  `id_informasi` int(5) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `konten` text NOT NULL,
  `tanggal` date NOT NULL,
  `file_gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_informasi`
--

INSERT INTO `t_informasi` (`id_informasi`, `judul`, `konten`, `tanggal`, `file_gambar`) VALUES
(11, 'Penyuluhan', 'Kegiatan Penyuluhan Tablet Tambah Darah beserta Pemeriksaan Anemia Pada Remaja Putri SMPN 3 Kedungwaru.', '2024-12-09', '675b5c478a8ef.jpg'),
(12, 'Kaji Banding', 'Kegiatan kaji banding di Puskesmas Kauman, semoga kegiatan kali ini membawa manfaat untuk seluruh masyarakat.', '2024-12-10', '675b5c609c60f.jpg'),
(13, 'Imunisasi', 'UPT Puskesmas Kedungwaru melaksanakan kegiatan BIAS (Bulan Imunisasi Anak Sekolah) di sekolah dasar wilayah kerja puskesmas.', '2024-12-08', '675b5c7c6c011.jpg'),
(14, 'Posyandu', 'Kegiatan evaluasi Balita, hasil kolaborasi antara petugas promkes & gizi UPT Puskesmas Kedungwaru di posyandu.', '2024-12-11', '675b5c9a7b966.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `t_jadwal`
--

CREATE TABLE `t_jadwal` (
  `id_jadwal` int(5) NOT NULL,
  `dokter` varchar(25) NOT NULL,
  `poli` enum('Umum','Gigi dan Mulut','KIA','Laboratorium','Imunisasi') NOT NULL,
  `hari` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `t_jadwal`
--

INSERT INTO `t_jadwal` (`id_jadwal`, `dokter`, `poli`, `hari`) VALUES
(1, 'Dr. Setyo Budi', 'Umum', 'Kamis'),
(2, 'Dr. Sri Hartini', 'KIA', 'Senin dan Rabu'),
(3, 'Dr. Kuncoro Adi', 'Gigi dan Mulut', 'Kamis'),
(4, 'Dr. Ayu Sari', 'Umum', 'Jum\'at');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_antrian`
--
ALTER TABLE `t_antrian`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indexes for table `t_informasi`
--
ALTER TABLE `t_informasi`
  ADD PRIMARY KEY (`id_informasi`);

--
-- Indexes for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_antrian`
--
ALTER TABLE `t_antrian`
  MODIFY `id_antrian` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `t_informasi`
--
ALTER TABLE `t_informasi`
  MODIFY `id_informasi` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `t_jadwal`
--
ALTER TABLE `t_jadwal`
  MODIFY `id_jadwal` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
