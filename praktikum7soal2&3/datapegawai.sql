-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2022 at 03:54 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `datapegawai`
--

CREATE TABLE `datapegawai` (
  `idpg` varchar(4) NOT NULL,
  `namapg` varchar(30) NOT NULL,
  `nopg` char(15) NOT NULL,
  `emailpg` varchar(30) NOT NULL,
  `jkpg` varchar(15) NOT NULL,
  `alamatpg` varchar(50) NOT NULL,
  `jabatan` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datapegawai`
--

INSERT INTO `datapegawai` (`idpg`, `namapg`, `nopg`, `emailpg`, `jkpg`, `alamatpg`, `jabatan`) VALUES
('P001', 'Raditya Khansa Adifa', '082233697711', 'radityakhansaadifa@gmail.com', 'Laki-Laki', 'Surabaya', 'Direktur Utama'),
('P002', 'Ayusmonza', '08123234923', 'ayusmonza1609@gmail.com', 'Laki-Laki', 'Surabaya', 'Sekretaris Direktur'),
('P003', 'Pidiyarto Yurtan', '081242267700', 'pidiyarto@gmail.com', 'Laki-Laki', 'Surabaya', 'Direktur Keuangan'),
('P004', 'Samuel Djodi', '081231439997', 'samueldjodi17@gmail.com', 'Laki-Laki', 'Surabaya', 'Manajer Pemasaran'),
('P005', 'Revaldo Carlos', '081123567854', 'revaldocarlos@gmail.com', 'Laki-Laki', 'Surabaya', 'Manajer Personalia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datapegawai`
--
ALTER TABLE `datapegawai`
  ADD PRIMARY KEY (`idpg`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
