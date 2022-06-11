-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2022 at 05:12 PM
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
  `stbiodata` int(5) NOT NULL,
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

INSERT INTO `alumni` (`idmhs`, `nama`, `nim`, `ttl`, `jk`, `alamat`, `tahunmasuk`, `tahunlulus`, `prodi`, `nohp`, `email`, `ipk`, `judul`, `stbiodata`, `idks1`, `stks1`, `idks2`, `stks2`, `idks3`, `stks3`, `idks4`, `stks4`) VALUES
(1, 'Muh Noval', '5520117110', 'Palu, 03 oktober 1998', 1, 'Jl. Padanjakaya', 2017, '2022', 'Teknik Informatika', '082271069166', 'muhammadnoval1998@gmail.com', 4, 'Augmented Reality', 1, 1, 1, 1, 1, 1, 1, 1, 1),
(2, 'Muh Noval', '5520117110', 'Palu, 03 oktober 1998', 1, 'Jl. Padanjakaya', 2017, '2022', 'Teknik Informatika', '082271069166', 'muhammadnoval1998@gmail.com', 4, 'Augmented Reality', 1, 1, 0, 0, 0, 0, 0, 0, 0),
(3, 'Fitra', '5720118014', '', 0, '', 0, '', '', '', '', 0, '', 0, 0, 0, 0, 0, 0, 0, 0, 0);

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
(1, 'PT Pamapersada Nusantara', 'Tambang', 'Kontraktor', 'Merencanakan, mengatur dan mengkoordinir kegiatan produksi pertambangan. Untuk informasi lebih lanjut bisa langsung mendaftar di situs PT Pamapersada Nusantara. https://recruitment.pamapersada.com/', '2022-06-17', '2022-06-10 15:09:59', 'PAMA-LOGO.jpg'),
(2, 'PT Badak LNG', 'Liquefied Natural Gas', 'Cooperative Education Program Batch XXXIII', 'Syarat Pencaker :\r\n\r\n1. Laki-Laki / Perempuan\r\n2. Memiliki KTP Kota Bontang\r\n3. Sedang menempuh pendidikan S1 di Perguruan Tinggi\r\n4. Minimal Semester 6 atau belum Wisuda\r\n5. IPK sementara minimal 2,75\r\n6. Surat Bebas Narkoba, berbadan sehat & tidak buta warna (Setelah lolos TPA)\r\n7. Belum pernah mengikuti program COOP di Badak LNG', '2022-06-24', '2022-06-10 15:11:15', 'Badak_NGL.png');

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

--
-- Dumping data for table `tbk1`
--

INSERT INTO `tbk1` (`idks1`, `idmhs`, `k1a`, `k1b`, `k1c`, `k1d`, `k1e`, `k1f`, `k1g`, `k1h`) VALUES
(1, 1, '2 bulan', 'Beasiswa ADIK', 'sbsbs', 'Erat', 'Tingkat Yang Sama', 'sdnskas', 'saassa', 'asaa');

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

--
-- Dumping data for table `tbk2`
--

INSERT INTO `tbk2` (`idks2`, `idmhs`, `k2a`, `k2b`, `k2c`, `k2d`, `k2e`, `k2f`, `k2g`) VALUES
(1, 1, 'Cukup Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Sangat Besar', 'Kurang', 'Sangat Besar');

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

--
-- Dumping data for table `tbk3`
--

INSERT INTO `tbk3` (`idks3`, `idmhs`, `k3a`, `k3b`, `k3c`, `k3d`, `k3e`, `k3f`, `k3g`, `k3h`, `k3i`, `k3j`, `k3k`) VALUES
(1, 1, 'asdaksjd', 'asdsad', 'Melalui iklan di koran / majalah / brosur,Melamar ke Perusahaan tanpa mengetahui lowongan yang ada,Pergi ke Bursa / Pameran kerj', 'dadas', 'asdas', 'sadas', 'Saya masih belajar / melanjutkan kuliah profesi atau pascasarjana,Saya Menikah,Saya sibuk dengan keluarga dan anak-anak,', 'Ya, saya akan mulai bekerja dalam 2 minggu ke depan', 'Organisasi Non-Profit/ Lembaga Swadaya Masyarakat', 'Melalui iklan di koran / majalah / brosur,Melamar ke Perusahaan tanpa mengetahui lowongan yang ada,Pergi ke Bursa / Pameran kerj', '');

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

--
-- Dumping data for table `tbk4`
--

INSERT INTO `tbk4` (`idks4`, `idmhs`, `k4a`, `k4b`, `k4c`, `k4d`, `k4e`, `k4f`, `k4g`, `k4h`, `k4i`, `k4j`, `k4k`, `k4l`, `k4m`, `k4n`, `k4o`, `k4p`, `k4q`, `k4r`, `k4s`, `k4t`, `k4u`, `k4v`, `k4w`, `k4x`, `k4y`, `k4z`, `k4aa`, `k4bb`, `k4cc`) VALUES
(1, 1, 'Rendah', 'Sangat Rendah', 'Rendah', 'Sangat Tinggi', 'Rendah', 'Sangat Rendah', 'Sangat Rendah', 'Rendah', 'Cukup', 'Tinggi', 'Sangat Rendah', 'Rendah', 'Rendah', 'Sangat Rendah', 'Rendah', 'Sangat Rendah', 'Tinggi', 'Sangat Rendah', 'Sangat Rendah', 'Rendah', 'Cukup', 'Sangat Rendah', 'Rendah', 'Sangat Tinggi', 'Cukup', 'Cukup', 'Sangat Rendah', 'Rendah', 'Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `iduser` int(5) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(250) NOT NULL,
  `pass` varchar(250) NOT NULL,
  `idmhs` int(5) NOT NULL,
  `role` int(1) NOT NULL,
  `active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`iduser`, `nama`, `username`, `pass`, `idmhs`, `role`, `active`) VALUES
(1, 'Agrhi', 'admin', 'admin', 0, 1, 1),
(2, 'Muh Noval', 'noval', '12345', 1, 0, 1),
(3, 'Fitra', 'fitra', 'fitra', 3, 0, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alumni`
--
ALTER TABLE `alumni`
  ADD PRIMARY KEY (`idmhs`);

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
-- AUTO_INCREMENT for table `alumni`
--
ALTER TABLE `alumni`
  MODIFY `idmhs` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `loker`
--
ALTER TABLE `loker`
  MODIFY `id_loker` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbk1`
--
ALTER TABLE `tbk1`
  MODIFY `idks1` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbk2`
--
ALTER TABLE `tbk2`
  MODIFY `idks2` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbk3`
--
ALTER TABLE `tbk3`
  MODIFY `idks3` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbk4`
--
ALTER TABLE `tbk4`
  MODIFY `idks4` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `iduser` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
