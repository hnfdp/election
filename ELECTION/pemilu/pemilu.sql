-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jan 09, 2017 at 01:22 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pemilu`
--
CREATE DATABASE IF NOT EXISTS `pemilu` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `pemilu`;

-- --------------------------------------------------------

--
-- Table structure for table `fakultas`
--

CREATE TABLE IF NOT EXISTS `fakultas` (
  `id_fakultas` int(10) NOT NULL AUTO_INCREMENT,
  `nama_fakultas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_fakultas`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `fakultas`
--

INSERT INTO `fakultas` (`id_fakultas`, `nama_fakultas`) VALUES
(1, 'Teknik'),
(2, 'Kedokteran');

-- --------------------------------------------------------

--
-- Table structure for table `kandidat`
--

CREATE TABLE IF NOT EXISTS `kandidat` (
  `id_kandidat` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kandidat` varchar(11) NOT NULL,
  PRIMARY KEY (`id_kandidat`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kandidat`
--

INSERT INTO `kandidat` (`id_kandidat`, `nama_kandidat`) VALUES
(1, 'Bimo'),
(2, 'Fajar');

-- --------------------------------------------------------

--
-- Table structure for table `pemilih`
--

CREATE TABLE IF NOT EXISTS `pemilih` (
  `id_pemilih` varchar(100) NOT NULL,
  `password` int(10) NOT NULL,
  `nama_fakultas` varchar(100) NOT NULL,
  `status_pilih` int(11) NOT NULL,
  PRIMARY KEY (`id_pemilih`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pemilih`
--

INSERT INTO `pemilih` (`id_pemilih`, `password`, `nama_fakultas`, `status_pilih`) VALUES
('5235134442', 12345, '1', 1),
('5235141153', 3145, '2', 0),
('5235141154', 2233, '1', 0),
('5235141930', 6789, '2', 1),
('5235141931', 4545, '2', 0),
('523514411', 7654, '2', 0),
('5235144250', 3344, '2', 0),
('5235144252', 3267, '1', 0);

-- --------------------------------------------------------

--
-- Table structure for table `pilihan`
--

CREATE TABLE IF NOT EXISTS `pilihan` (
  `id_pilihan` int(10) NOT NULL AUTO_INCREMENT,
  `nama_kandidat` varchar(100) NOT NULL,
  `noreg_pemilih` varchar(100) NOT NULL,
  `fakultas` varchar(100) NOT NULL,
  PRIMARY KEY (`id_pilihan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `pilihan`
--

INSERT INTO `pilihan` (`id_pilihan`, `nama_kandidat`, `noreg_pemilih`, `fakultas`) VALUES
(15, '1', '5235134442', '1'),
(16, '1', '5235141930', '2');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
