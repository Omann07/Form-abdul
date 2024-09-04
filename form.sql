-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2024 at 05:12 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `form`
--

-- --------------------------------------------------------

--
-- Table structure for table `isi_form`
--

CREATE TABLE `isi_form` (
  `Id` int(20) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `nim` varchar(20) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `saran` varchar(20) NOT NULL,
  `jenis_kelamin` enum('laki-laki','perempuan') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `isi_form`
--

INSERT INTO `isi_form` (`Id`, `nama`, `nim`, `kelas`, `saran`, `jenis_kelamin`) VALUES
(6, 'abdul', '233140701111023', 't3e', 'tidak ada', 'laki-laki'),
(7, 'abdul', '233140701111023', 't3e', 'tidak ada', 'laki-laki'),
(8, 'oman', '233140701111023', 't3e', 'tidak ada', 'laki-laki'),
(9, 'dimas', '2331', 't3e', 'ngga ada', 'laki-laki');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `isi_form`
--
ALTER TABLE `isi_form`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `isi_form`
--
ALTER TABLE `isi_form`
  MODIFY `Id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
