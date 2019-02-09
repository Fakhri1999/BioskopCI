-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2019 at 07:09 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bioskopci`
--

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_film` int(11) DEFAULT NULL,
  `jam` varchar(8) NOT NULL,
  `harga` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_film`, `jam`, `harga`) VALUES
(1, 1, '08:00 PM', 35000),
(2, 1, '05:30 PM', 35000),
(3, 1, '02:00 PM', 35000),
(4, 2, '01:00 PM', 35000),
(5, 2, '04:30 PM', 35000),
(6, 2, '07:00 PM', 35000),
(7, 3, '08:00 PM', 35000),
(8, 3, '05:30 PM', 35000),
(9, 3, '02:00 PM', 35000),
(10, 4, '01:00 PM', 35000),
(11, 4, '04:30 PM', 35000),
(12, 4, '07:00 PM', 35000),
(13, 5, '08:00 PM', 35000),
(14, 5, '05:30 PM', 35000),
(15, 5, '02:00 PM', 35000),
(16, 6, '01:00 PM', 35000),
(17, 6, '04:30 PM', 35000),
(18, 6, '07:00 PM', 35000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_film` (`id_film`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_1` FOREIGN KEY (`id_film`) REFERENCES `film` (`ID_Film`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
