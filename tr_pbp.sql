-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 04:07 AM
-- Server version: 10.4.16-MariaDB
-- PHP Version: 7.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tr_pbp`
--

-- --------------------------------------------------------

--
-- Table structure for table `login_mhs`
--

CREATE TABLE `login_mhs` (
  `NIM` int(9) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_mhs`
--

INSERT INTO `login_mhs` (`NIM`, `Password`) VALUES
(672018053, 'admin123'),
(672018303, 'amanda123'),
(672020001, 'rahasia'),
(672020002, 'susahditebak'),
(672020003, 'lupadeh123');

-- --------------------------------------------------------

--
-- Table structure for table `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `NIM` int(9) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `IPK` float NOT NULL,
  `Asal` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mahasiswa`
--

INSERT INTO `mahasiswa` (`NIM`, `Nama`, `IPK`, `Asal`) VALUES
(672018053, 'Samuel Nugraha', 3.9, 'Pangandaran'),
(672018303, 'Amanda Calvina Izumi', 3.63, 'Salatiga'),
(672020001, 'Ayu Lestari', 3.77, 'Tegal'),
(672020002, 'Eka Saputro', 3.96, 'Semarang'),
(672020003, 'Indra Jaya', 3.58, 'Pekalongan');

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id` int(11) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `nama_matkul` varchar(30) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `jam` varchar(10) NOT NULL,
  `ruang` varchar(10) NOT NULL,
  `dosen` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id`, `kode`, `nama_matkul`, `hari`, `jam`, `ruang`, `dosen`) VALUES
(1, 'IN314A', 'RSNA 1', 'SELASA', '08-11', 'FTI431', 'INDASTRANTI RATNA WIDIASARI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_data`
--

CREATE TABLE `tbl_data` (
  `no` int(50) NOT NULL,
  ` Dosen` int(100) NOT NULL,
  `Nama` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_data`
--

INSERT INTO `tbl_data` (`no`, ` Dosen`, `Nama`) VALUES
(2, 68982, 'Yeremia Alfa Susetyo'),
(1, 67578, 'Yeremia');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_dosen`
--

CREATE TABLE `tbl_dosen` (
  `no` int(50) NOT NULL,
  `Kode` int(50) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `Prodi` varchar(100) NOT NULL,
  `Fakultas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_dosen`
--

INSERT INTO `tbl_dosen` (`no`, `Kode`, `Nama`, `Prodi`, `Fakultas`) VALUES
(1, 68982, 'RAYNALDO S.COM', 'TEKNIK INFORMATIKA', 'TEKNOLOGI INFORMASI'),
(2, 67578, 'GABRIELA MILITIA MOMOLE', 'TEKNIK INFORMATIKA', 'TEKNOLOGI INFORMASI');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jadwal`
--

CREATE TABLE `tbl_jadwal` (
  `no` int(50) NOT NULL,
  `Kode` int(15) NOT NULL,
  `Matakuliah` varchar(100) NOT NULL,
  `Jam` varchar(11) NOT NULL,
  `Hari` varchar(100) NOT NULL,
  `kodeM` varchar(10) NOT NULL,
  `Ruang` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jadwal`
--

INSERT INTO `tbl_jadwal` (`no`, `Kode`, `Matakuliah`, `Jam`, `Hari`, `kodeM`, `Ruang`) VALUES
(1, 67578, 'PEMODELAN DAN SIMULASI C', '14_17', 'RABU', 'IN311C', 'FTI308'),
(2, 68982, 'PEMOGRAMAN BERORIENTASI PLATFROM D', '10_13', 'SENIN', 'IN315D', 'FTI455'),
(3, 67578, 'PEMODELAN DAN SIMULASI D', '10_12', 'SENIN', 'IN311D', 'FTI400');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id` int(50) NOT NULL,
  `kodeM` varchar(50) NOT NULL,
  `Nim` int(15) NOT NULL,
  `Nama` varchar(100) NOT NULL,
  `kode` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id`, `kodeM`, `Nim`, `Nama`, `kode`) VALUES
(1, 'IN311C', 672018265, 'GABRIELA MILITIA MOMOLE', 67578),
(2, 'IN311D', 672018314, 'HANUSIA MANUEL OKTIVANIA ZAMILI', 67578),
(3, 'IN311D', 672018256, 'GABRIELA MILITIA MOMOLE', 67578);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nilai`
--

CREATE TABLE `tbl_nilai` (
  `id` int(10) NOT NULL,
  `kode` varchar(50) NOT NULL,
  `Nim` int(15) NOT NULL,
  `Nilai` varchar(20) DEFAULT NULL,
  `Nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_nilai`
--

INSERT INTO `tbl_nilai` (`id`, `kode`, `Nim`, `Nilai`, `Nama`) VALUES
(1, 'IN311C', 672018256, 'A', 'GABRIELA MILITIA MOMOLE');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `No` int(50) NOT NULL,
  `Dosen` int(100) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`No`, `Dosen`, `Password`) VALUES
(1, 67578, '123');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `username`, `password`, `level`) VALUES
(1, 'samuel nugraha', 'admin', 'admin', 'admin'),
(2, 'gabriela militia momole', '67578', '123', 'dosen'),
(5, 'amanda', '672018303', 'amanda123', 'mahasiswa'),
(6, 'sesillia', '672018316', 'sesil123', 'mahasiswa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_mhs`
--
ALTER TABLE `login_mhs`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`NIM`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_dosen`
--
ALTER TABLE `tbl_dosen`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_jadwal`
--
ALTER TABLE `tbl_jadwal`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_nilai`
--
ALTER TABLE `tbl_nilai`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`No`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_mhs`
--
ALTER TABLE `login_mhs`
  MODIFY `NIM` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672020004;

--
-- AUTO_INCREMENT for table `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `NIM` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=672020004;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
