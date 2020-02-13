-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2020 at 05:51 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_latihan`
--

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE `buku` (
  `kode_buku` int(5) NOT NULL,
  `judul` varchar(30) DEFAULT NULL,
  `tahun_terbit` char(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`kode_buku`, `judul`, `tahun_terbit`) VALUES
(12786, 'Belajar JavaScript', '2004'),
(13331, 'HTML5 Dasar', '2000'),
(14356, 'PHP5 - Konsep PBO', '1998'),
(15729, 'Mahir MySQL 1 malam', '2001'),
(16284, 'CSS3 Forever', '2004'),
(17695, 'Kumpulan Perintah Git', '2005'),
(19264, 'Step-by-Step Laravel', '2003'),
(19354, 'Algoritma dan Pemrograman', '1999');

-- --------------------------------------------------------

--
-- Table structure for table `pengarang`
--

CREATE TABLE `pengarang` (
  `kode_pengarang` int(4) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengarang`
--

INSERT INTO `pengarang` (`kode_pengarang`, `nama`) VALUES
(1006, 'Budi Purwanto'),
(1007, 'Lidya Anggraeni'),
(1008, 'Budi Mulya'),
(1009, 'Andi Purwa'),
(1010, 'Seno Agus'),
(1011, 'Rizki Sari'),
(1012, 'Alan Sari'),
(1013, 'Mila Kartika'),
(1014, 'Andi Kusuma');

-- --------------------------------------------------------

--
-- Table structure for table `penulis_buku`
--

CREATE TABLE `penulis_buku` (
  `kode_pengarang` int(4) NOT NULL,
  `kode_buku` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `penulis_buku`
--

INSERT INTO `penulis_buku` (`kode_pengarang`, `kode_buku`) VALUES
(1006, 14356),
(1008, 15729),
(1009, 12786),
(1010, 17695),
(1011, 15729),
(1012, 19264),
(1012, 19354),
(1014, 16284);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(20) NOT NULL,
  `password` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('ben', 'ben123'),
('admin', 'admin'),
('superadmin', 'su');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buku`
--
ALTER TABLE `buku`
  ADD PRIMARY KEY (`kode_buku`);

--
-- Indexes for table `pengarang`
--
ALTER TABLE `pengarang`
  ADD PRIMARY KEY (`kode_pengarang`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
