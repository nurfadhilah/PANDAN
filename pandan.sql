-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2016 at 04:12 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `pandan`
--

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `id_guru` int(50) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `ic` varchar(20) NOT NULL,
  `umur` int(10) NOT NULL,
  `email` varchar(30) NOT NULL,
  `notelefon` varchar(20) NOT NULL,
  `tarikhlahir` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  PRIMARY KEY (`id_guru`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`id_guru`, `Name`, `ic`, `umur`, `email`, `notelefon`, `tarikhlahir`, `alamat`) VALUES
(1, 'NURFADHILAH ', '930426065196', 24, 'ellah.fadhilah93@gmail.com', '0179028731', '26041993', 'n');

-- --------------------------------------------------------

--
-- Table structure for table `kuota`
--

CREATE TABLE IF NOT EXISTS `kuota` (
  `id_kuota` int(10) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(10) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `kuota` int(10) NOT NULL,
  PRIMARY KEY (`id_kuota`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id_kuota`, `kelas`, `guru`, `kuota`) VALUES
(1, '5 Tahun', 'Zakiah', 25),
(2, '6 Tahun', 'Maslina', 25);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
