-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Dec 20, 2015 at 02:57 PM
-- Server version: 10.0.20-MariaDB
-- PHP Version: 5.6.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id` int(10) NOT NULL,
  `level` int(1) NOT NULL,
  `username` varchar(25) DEFAULT NULL,
  `pass` varchar(25) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `level`, `username`, `pass`, `nama`) VALUES
(1, 1, 'yasmin', 'adminyasmin', 'Muhammad Yasmin'),
(2, 1, 'ine', 'adminine', 'Refine A'),
(3, 1, 'yuli', 'adminyuli', 'Muhammad Yuli A'),
(4, 1, 'farid', 'adminfarid', 'Miftakh Farid'),
(5, 1, 'virman', 'adminvirman', 'Virman Teguh');

-- --------------------------------------------------------

--
-- Table structure for table `dt_ayah`
--

CREATE TABLE IF NOT EXISTS `dt_ayah` (
  `id_ayah` int(5) NOT NULL,
  `nama_ayah` varchar(50) DEFAULT NULL,
  `pekerjaan_ayah` varchar(25) DEFAULT NULL,
  `no_telp_ayah` varchar(20) DEFAULT NULL,
  `agama_ayah` varchar(15) DEFAULT NULL,
  `tempat_lhr_ayah` varchar(15) DEFAULT NULL,
  `tgl_lhr_ayah` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_ayah`
--

INSERT INTO `dt_ayah` (`id_ayah`, `nama_ayah`, `pekerjaan_ayah`, `no_telp_ayah`, `agama_ayah`, `tempat_lhr_ayah`, `tgl_lhr_ayah`) VALUES
(1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `dt_ibu`
--

CREATE TABLE IF NOT EXISTS `dt_ibu` (
  `id_ibu` int(5) NOT NULL,
  `nama_ibu` varchar(50) DEFAULT NULL,
  `pekerjaan_ibu` varchar(25) DEFAULT NULL,
  `no_telp_ibu` varchar(20) DEFAULT NULL,
  `agama_ibu` varchar(15) DEFAULT NULL,
  `tempat_lhr_ibu` varchar(15) DEFAULT NULL,
  `tgl_lhr_ibu` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dt_ibu`
--

INSERT INTO `dt_ibu` (`id_ibu`, `nama_ibu`, `pekerjaan_ibu`, `no_telp_ibu`, `agama_ibu`, `tempat_lhr_ibu`, `tgl_lhr_ibu`) VALUES
(1, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE IF NOT EXISTS `email` (
  `id_email` int(5) NOT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`id_email`, `email`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` int(5) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jurusan`
--

INSERT INTO `jurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(5) NOT NULL,
  `nama_kelas` varchar(15) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `nama_kelas`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE IF NOT EXISTS `kesehatan` (
  `id_kesehatan` int(5) NOT NULL,
  `penyakit` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kesehatan`
--

INSERT INTO `kesehatan` (`id_kesehatan`, `penyakit`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Table structure for table `pendidikan`
--

CREATE TABLE IF NOT EXISTS `pendidikan` (
  `id_pendidikan` int(5) NOT NULL,
  `nama_pendidikan` varchar(25) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pendidikan`
--

INSERT INTO `pendidikan` (`id_pendidikan`, `nama_pendidikan`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, ''),
(11, ''),
(12, '');

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` int(5) NOT NULL,
  `nama_prestasi` varchar(255) DEFAULT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `prestasi`
--

INSERT INTO `prestasi` (`id_prestasi`, `nama_prestasi`) VALUES
(1, ''),
(2, ''),
(3, ''),
(4, ''),
(5, ''),
(6, ''),
(7, ''),
(8, ''),
(9, ''),
(10, '');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `pass` varchar(50) DEFAULT NULL,
  `qr` varchar(255) DEFAULT NULL,
  `foto` varchar(255) DEFAULT NULL,
  `tempat_lhr` varchar(25) DEFAULT NULL,
  `tgl_lhr` varchar(25) DEFAULT NULL,
  `agama` varchar(15) DEFAULT NULL,
  `alamat` varchar(255) DEFAULT NULL,
  `level` int(1) DEFAULT NULL,
  `id_kelas` int(5) DEFAULT NULL,
  `id_prestasi` int(5) DEFAULT NULL,
  `id_pendidikan` int(5) DEFAULT NULL,
  `id_ayah` int(5) DEFAULT NULL,
  `id_ibu` int(5) DEFAULT NULL,
  `id_kesehatan` int(5) DEFAULT NULL,
  `id_jurusan` int(5) DEFAULT NULL,
  `id_email` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `pass`, `qr`, `foto`, `tempat_lhr`, `tgl_lhr`, `agama`, `alamat`, `level`, `id_kelas`, `id_prestasi`, `id_pendidikan`, `id_ayah`, `id_ibu`, `id_kesehatan`, `id_jurusan`, `id_email`) VALUES
('7004/754.063', 'Muhammad Yasmin', 'bXVoYW1tYWQ=', '<img src=https://chart.googleapis.com/chart?cht=qr&chs=300x300&chl=Yasmin&choe=UTF-8&chld=L|4>', '../images/siswa/12042757_1704779129751298_3156691688663935071_n(1).jpg', 'Malang', '2015-12-04', 'Islam', 'JL. Laksda Adi Sucipto Gg 7A/17', 2, 1, 1, 1, 1, 1, 1, 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dt_ayah`
--
ALTER TABLE `dt_ayah`
  ADD PRIMARY KEY (`id_ayah`);

--
-- Indexes for table `dt_ibu`
--
ALTER TABLE `dt_ibu`
  ADD PRIMARY KEY (`id_ibu`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`id_email`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);

--
-- Indexes for table `pendidikan`
--
ALTER TABLE `pendidikan`
  ADD PRIMARY KEY (`id_pendidikan`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `dt_ayah`
--
ALTER TABLE `dt_ayah`
  MODIFY `id_ayah` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `dt_ibu`
--
ALTER TABLE `dt_ibu`
  MODIFY `id_ibu` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `id_email` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `jurusan`
--
ALTER TABLE `jurusan`
  MODIFY `id_jurusan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `kesehatan`
--
ALTER TABLE `kesehatan`
  MODIFY `id_kesehatan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pendidikan`
--
ALTER TABLE `pendidikan`
  MODIFY `id_pendidikan` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id_prestasi` int(5) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
