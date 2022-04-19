-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2021 at 04:26 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tugasakhir`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(50) DEFAULT NULL,
  `password` char(40) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('irfan', '6bf2706dc9be226f8d64b97e467ed90c5e98104d');

-- --------------------------------------------------------

--
-- Table structure for table `projek`
--

CREATE TABLE `projek` (
  `id_penyewa` int(11) NOT NULL,
  `nama_penyewa` varchar(100) DEFAULT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `tgl_sewa` varchar(50) DEFAULT NULL,
  `tgl_kembali` varchar(50) DEFAULT NULL,
  `jumlah_bayar` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projek`
--

INSERT INTO `projek` (`id_penyewa`, `nama_penyewa`, `nama_barang`, `tgl_sewa`, `tgl_kembali`, `jumlah_bayar`) VALUES
(1, 'indah ayu lestari', 'canon EOS 1D X', '16 juni', '18 juni', 60000),
(5, 'ari cahyo', 'canon EOS 1D X', '11 juni', '15 juni', 120000),
(8, 'dimas pamuji', 'canon EOS 9D', '24 juni', '25 juni', 50000),
(10, 'andi wibowo', 'canon EOS 6D pro', '28 juni', '29 juni', 60000),
(11, 'raditya andika', 'canon EOS 1D X', '1 juli', '3 juli', 60000),
(15, 'shinta dewi utami', 'canonEOS 6D', '2 juli', '3 juli', 90000),
(16, 'dina ermawati', 'canon EOS 9D', '2 juli', '4juli', 100000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `projek`
--
ALTER TABLE `projek`
  ADD PRIMARY KEY (`id_penyewa`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `projek`
--
ALTER TABLE `projek`
  MODIFY `id_penyewa` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
