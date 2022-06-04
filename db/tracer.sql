-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2022 at 01:04 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tracer`
--

-- --------------------------------------------------------

--
-- Table structure for table `alumni`
--

CREATE TABLE `alumni` (
  `idmhs` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `ttl` varchar(50) NOT NULL,
  `jk` int(1) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `tahunmasuk` int(11) NOT NULL,
  `tahunlulus` varchar(10) NOT NULL,
  `prodi` varchar(50) NOT NULL,
  `nohp` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `ipk` int(11) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `idks1` int(5) NOT NULL,
  `stks1` int(5) NOT NULL,
  `idks2` int(5) NOT NULL,
  `stks2` int(5) NOT NULL,
  `idks3` int(5) NOT NULL,
  `stks3` int(5) NOT NULL,
  `idks4` int(5) NOT NULL,
  `stks4` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `alumni`
--

INSERT INTO `alumni` (`idmhs`, `nama`, `nim`, `ttl`, `jk`, `alamat`, `tahunmasuk`, `tahunlulus`, `prodi`, `nohp`, `email`, `ipk`, `judul`, `idks1`, `stks1`, `idks2`, `stks2`, `idks3`, `stks3`, `idks4`, `stks4`) VALUES
(1, 'Agriady', 'F55116066', 'Palopo, 1998', 1, 'Tondo', 2016, '2020', 'Teknik Informatika', '080808', 'agriadhy@gmail.com', 4, 'Klasifikasi Citra Daging Ayam Berformalin menggunakan Algoritma SVM', 0, 0, 0, 0, 0, 0, 0, 0),
(2, 'Noval', 'F55117001', 'Palu, 1998', 1, 'Pengawu', 2017, '2021', 'Teknik Informatika', '080808', 'muhnoval@gmail.com', 4, 'Sistem Informasi Management Keuangan BI', 0, 0, 0, 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `loker`
--

CREATE TABLE `loker` (
  `id_loker` int(11) NOT NULL,
  `nama_perusahaan` varchar(50) NOT NULL,
  `bidang_usaha` varchar(50) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `deskripsi` mediumtext DEFAULT NULL,
  `tgl_berakhir` date DEFAULT NULL,
  `tgl_upload` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `gambar` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `loker`
--

INSERT INTO `loker` (`id_loker`, `nama_perusahaan`, `bidang_usaha`, `job_title`, `deskripsi`, `tgl_berakhir`, `tgl_upload`, `gambar`) VALUES
(7, 'Perusahaan b', 'Tambang A', 'Helper', 'asdasd', '2022-06-11', '2022-06-04 10:55:54', 'tes11.png'),
(8, 'Perusahaan 2', 'Tambang A', 'Helper', 'asd', '2022-06-23', '2022-06-04 10:55:54', 'tes12.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbk1`
--

CREATE TABLE `tbk1` (
  `idks1` int(11) NOT NULL,
  `idmhs` int(11) NOT NULL,
  `k1a` varchar(128) NOT NULL,
  `k1b` varchar(128) NOT NULL,
  `k1c` varchar(128) NOT NULL,
  `k1d` varchar(128) NOT NULL,
  `k1e` varchar(128) NOT NULL,
  `k1f` varchar(128) NOT NULL,
  `k1g` varchar(128) NOT NULL,
  `k1h` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbk2`
--

CREATE TABLE `tbk2` (
  `idks2` int(11) NOT NULL,
  `idmhs` int(11) NOT NULL,
  `k2a` varchar(128) NOT NULL,
  `k2b` varchar(128) NOT NULL,
  `k2c` varchar(128) NOT NULL,
  `k2d` varchar(128) NOT NULL,
  `k2e` varchar(128) NOT NULL,
  `k2f` varchar(128) NOT NULL,
  `k2g` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbk3`
--

CREATE TABLE `tbk3` (
  `idks3` int(11) NOT NULL,
  `idmhs` int(11) NOT NULL,
  `k3a` varchar(128) NOT NULL,
  `k3b` varchar(128) NOT NULL,
  `k3c` varchar(128) NOT NULL,
  `k3d` varchar(128) NOT NULL,
  `k3e` varchar(128) NOT NULL,
  `k3f` varchar(128) NOT NULL,
  `k3g` varchar(128) NOT NULL,
  `k3h` varchar(128) NOT NULL,
  `k3i` varchar(128) NOT NULL,
  `k3j` varchar(128) NOT NULL,
  `k3k` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `tbk4`
--

CREATE TABLE `tbk4` (
  `idks4` int(11) NOT NULL,
  `idmhs` int(11) NOT NULL,
  `k4a` varchar(128) NOT NULL,
  `k4b` varchar(128) NOT NULL,
  `k4c` varchar(128) NOT NULL,
  `k4d` varchar(128) NOT NULL,
  `k4e` varchar(128) NOT NULL,
  `k4f` varchar(128) NOT NULL,
  `k4g` varchar(128) NOT NULL,
  `k4h` varchar(128) NOT NULL,
  `k4i` varchar(128) NOT NULL,
  `k4j` varchar(128) NOT NULL,
  `k4k` varchar(128) NOT NULL,
  `k4l` varchar(128) NOT NULL,
  `k4m` varchar(128) NOT NULL,
  `k4n` varchar(128) NOT NULL,
  `k4o` varchar(128) NOT NULL,
  `k4p` varchar(128) NOT NULL,
  `k4q` varchar(128) NOT NULL,
  `k4r` varchar(128) NOT NULL,
  `k4s` varchar(128) NOT NULL,
  `k4t` varchar(128) NOT NULL,
  `k4u` varchar(128) NOT NULL,
  `k4v` varchar(128) NOT NULL,
  `k4w` varchar(128) NOT NULL,
  `k4x` varchar(128) NOT NULL,
  `k4y` varchar(128) NOT NULL,
  `k4z` varchar(128) NOT NULL,
  `k4aa` varchar(128) NOT NULL,
  `k4bb` varchar(128) NOT NULL,
  `k4cc` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `idmhs` int(5) NOT NULL,
  `role` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `username`, `pass`, `idmhs`, `role`, `active`) VALUES
(1, 'agri', 'admin', 1, 1, 1),
(2, 'Noval', 'admin', 2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `loker`
--
ALTER TABLE `loker`
  ADD PRIMARY KEY (`id_loker`);

--
-- Indexes for table `tbk1`
--
ALTER TABLE `tbk1`
  ADD PRIMARY KEY (`idks1`);

--
-- Indexes for table `tbk2`
--
ALTER TABLE `tbk2`
  ADD PRIMARY KEY (`idks2`);

--
-- Indexes for table `tbk3`
--
ALTER TABLE `tbk3`
  ADD PRIMARY KEY (`idks3`);

--
-- Indexes for table `tbk4`
--
ALTER TABLE `tbk4`
  ADD PRIMARY KEY (`idks4`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`iduser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tbk1`
--
ALTER TABLE `tbk1`
  MODIFY `idks1` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbk2`
--
ALTER TABLE `tbk2`
  MODIFY `idks2` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbk3`
--
ALTER TABLE `tbk3`
  MODIFY `idks3` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbk4`
--
ALTER TABLE `tbk4`
  MODIFY `idks4` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
