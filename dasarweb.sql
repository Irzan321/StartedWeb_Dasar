-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 02:29 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dasarweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `id_jadwal` int(20) NOT NULL,
  `id_mahasiswa` int(20) NOT NULL,
  `kode_kelas` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL,
  `mata_pelajaran` varchar(100) NOT NULL,
  `jadwal` varchar(50) NOT NULL,
  `ruangan` varchar(10) NOT NULL,
  `lokasi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mahasiswa` int(20) NOT NULL,
  `nama_mahasiswa` varchar(100) NOT NULL,
  `agama` varchar(30) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `domisili` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(20) NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `tempat_lahir` varchar(100) NOT NULL,
  `jenis_dokumen` varchar(50) NOT NULL,
  `nomor_dokumen` varchar(100) NOT NULL,
  `golongan_darah` varchar(5) NOT NULL,
  `negara` varchar(50) NOT NULL,
  `status_pernikahan` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `kode_pos` varchar(10) NOT NULL,
  `alamat` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `jurusan` varchar(100) NOT NULL,
  `nilai_ujian` varchar(10) NOT NULL,
  `tahun_lulus` varchar(10) NOT NULL,
  `alamat_sekolah` text NOT NULL,
  `user_input` varchar(50) NOT NULL,
  `tanggal_input` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mahasiswa`, `nama_mahasiswa`, `agama`, `no_hp`, `domisili`, `jenis_kelamin`, `tanggal_lahir`, `tempat_lahir`, `jenis_dokumen`, `nomor_dokumen`, `golongan_darah`, `negara`, `status_pernikahan`, `email`, `kode_pos`, `alamat`, `username`, `password`, `nama_sekolah`, `jurusan`, `nilai_ujian`, `tahun_lulus`, `alamat_sekolah`, `user_input`, `tanggal_input`) VALUES
(1, 'Irfan Nurdiansyah', 'Islam', '123456789', 'Jawa', 'Laki-Laki', '2023-10-17', 'Jakarta', 'SIM', '123456789', 'AB', 'Indonesia', 'Lajang', 'irfan@gmail.com', '1234', 'test', 'irfan', '81dc9bdb52d04dc20036dbd8313ed055', 'Universitas Dian Nusantara', 'Teknik Informatika', '3,80', '2018', 'Tanjung Duren', 'SYSTEM', '2023-10-17'),
(2, 'Irfan Nurdiansyah', 'Islam', '1234', 'Jawa', 'Laki-Laki', '2023-10-28', 'Jakarta', 'KTP', '1234', 'O', 'Indonesia', 'Lajang', 'irfan@gmail.com', '1234', 'test', 'irfannurdiansyah', '81dc9bdb52d04dc20036dbd8313ed055', 'Univesitas Dian Nusantara', 'Teknik Informatika', '3,50', '2018', 'test', 'SYSTEM', '2023-10-28'),
(3, 'irfan', 'Islam', '085', 'Jawa', 'Laki-Laki', '2023-10-28', 'JAKARTA', 'KTP', '1234', 'O', 'Indonesia', 'Lajang', 'irfan@gmail.com', '1234', 'test', 'vicky', '81dc9bdb52d04dc20036dbd8313ed055', 'ubl', 'informatika', '3,50', '2018', 'test', 'SYSTEM', '2023-10-28');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mahasiswa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  MODIFY `id_jadwal` int(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mahasiswa` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
