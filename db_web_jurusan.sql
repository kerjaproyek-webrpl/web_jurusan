-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 11:41 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_web_jurusan`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `username` varchar(20) NOT NULL,
  `pass` varchar(10) NOT NULL,
  `level` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_guru`
--

CREATE TABLE IF NOT EXISTS `foto_guru` (
  `id_guru` int(10) NOT NULL,
  `url_foto` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `foto_siswa`
--

CREATE TABLE IF NOT EXISTS `foto_siswa` (
  `nis` int(10) NOT NULL,
  `url` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `foto_siswa`
--

INSERT INTO `foto_siswa` (`nis`, `url`) VALUES
(5555, '../../images/logo.png');

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nip` int(25) NOT NULL,
  `namagelar` varchar(100) DEFAULT NULL,
  `id_jurusan` int(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jurusan`
--

CREATE TABLE IF NOT EXISTS `jurusan` (
  `id_jurusan` varchar(15) NOT NULL,
  `nama` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kesehatan`
--

CREATE TABLE IF NOT EXISTS `kesehatan` (
  `id_kesehatan` varchar(15) NOT NULL,
  `tinggi` int(5) DEFAULT NULL,
  `berat` int(5) DEFAULT NULL,
  `gol_darah` char(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `nis` varchar(15) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pass` varchar(10) DEFAULT NULL,
  `level` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`nis`, `username`, `pass`, `level`) VALUES
('4444', 'user', 'muhammad', 1),
('5555', 'user', '123', 1),
('7004', 'user', '1234', 1);

-- --------------------------------------------------------

--
-- Table structure for table `prestasi`
--

CREATE TABLE IF NOT EXISTS `prestasi` (
  `id_prestasi` varchar(15) NOT NULL,
  `tingkat` varchar(50) DEFAULT NULL,
  `juara` varchar(50) DEFAULT NULL,
  `lomba` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qr_guru`
--

CREATE TABLE IF NOT EXISTS `qr_guru` (
  `id_guru` int(10) NOT NULL,
  `url_qr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `qr_siswa`
--

CREATE TABLE IF NOT EXISTS `qr_siswa` (
  `id_siswa` int(10) NOT NULL,
  `url_qr` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(15) NOT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `password` varchar(10) DEFAULT NULL,
  `id_kelas` varchar(15) DEFAULT NULL,
  `id_prestasi` varchar(15) DEFAULT NULL,
  `id_pendidikan` varchar(15) DEFAULT NULL,
  `id_keluarga` varchar(15) DEFAULT NULL,
  `id_kesehatan` varchar(15) DEFAULT NULL,
  `id_jurusan` varchar(50) DEFAULT NULL,
  `ttl` date DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `nama`, `password`, `id_kelas`, `id_prestasi`, `id_pendidikan`, `id_keluarga`, `id_kesehatan`, `id_jurusan`, `ttl`, `email`, `alamat`) VALUES
('4444', 'Yasmin', 'muhammad', '', '', '', '', '', '', '0000-00-00', 'yas@yas.com', ''),
('5555', 'yas', '123', '', '', '', '', '', '', '0000-00-00', 'yas@yas.com', ''),
('7004', 'Yasmin', '1234', '', '', '', '', '', '', '0000-00-00', 'yasmin@mail.com', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`,`pass`);

--
-- Indexes for table `foto_guru`
--
ALTER TABLE `foto_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `foto_siswa`
--
ALTER TABLE `foto_siswa`
  ADD PRIMARY KEY (`nis`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nip`);

--
-- Indexes for table `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- Indexes for table `kesehatan`
--
ALTER TABLE `kesehatan`
  ADD PRIMARY KEY (`id_kesehatan`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`nis`,`username`);

--
-- Indexes for table `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id_prestasi`);

--
-- Indexes for table `qr_guru`
--
ALTER TABLE `qr_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `qr_siswa`
--
ALTER TABLE `qr_siswa`
  ADD PRIMARY KEY (`id_siswa`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
