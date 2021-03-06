-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 04, 2016 at 05:32 AM
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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kelas` varchar(10) NOT NULL,
  `guru` varchar(30) NOT NULL,
  `kuota` int(10) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `kuota`
--

INSERT INTO `kuota` (`id`, `kelas`, `guru`, `kuota`) VALUES
(1, '5 Tahun', 'Zakiah', 25),
(2, '6 Tahun', 'Maslina', 25);

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `tarikh` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `tajuk` varchar(100) NOT NULL,
  `pengumuman` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `tarikh`, `tajuk`, `pengumuman`) VALUES
(4, '0000-00-00 00:00:00', 'SUKANEKA', 'IBU BAPA DIJEMPUT HADIR KE TADIKA KEMAS PANDAN 1\r\nTARIKH : 26.04.2017\r\nMASA   :RABU\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE IF NOT EXISTS `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'Admin'),
(2, 'Guru'),
(3, 'Ibu Bapa'),
(4, 'Murid');

-- --------------------------------------------------------

--
-- Table structure for table `toddlers`
--

CREATE TABLE IF NOT EXISTS `toddlers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `standard` int(11) DEFAULT NULL,
  `dob` varchar(255) DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `birth_no` varchar(255) DEFAULT NULL,
  `mykid` varchar(255) DEFAULT NULL,
  `sibling_count` int(11) DEFAULT NULL,
  `sibling_index` int(11) DEFAULT NULL,
  `address` text,
  `parent_id` int(11) DEFAULT NULL,
  `sibling_id` int(11) DEFAULT NULL,
  `fav_game` varchar(255) DEFAULT NULL,
  `fav_homework` varchar(255) DEFAULT NULL,
  `fav_food` varchar(255) DEFAULT NULL,
  `food_allergy` varchar(255) DEFAULT NULL,
  `special_problem` varchar(255) DEFAULT NULL,
  `disability` varchar(255) DEFAULT NULL,
  `special_exp` varchar(255) DEFAULT NULL,
  `emergency_contact_name` varchar(255) DEFAULT NULL,
  `emergency_contact_address` text,
  `emergency_contact_phone` varchar(255) DEFAULT NULL,
  `transporter_name` varchar(255) DEFAULT NULL,
  `transporter_address` varchar(255) DEFAULT NULL,
  `transporter_phone` varchar(255) DEFAULT NULL,
  `transporter_transport_type_no` varchar(255) DEFAULT NULL,
  `parent_declaration_1` int(11) DEFAULT NULL,
  `parent_declaration_2` int(11) DEFAULT NULL,
  `parent_declaration_3` int(11) DEFAULT NULL,
  `parent_declaration_4` int(11) DEFAULT NULL,
  `doc_standard_1` int(11) DEFAULT NULL,
  `doc_standard_2` int(11) DEFAULT NULL,
  `doc_standard_3` int(11) DEFAULT NULL,
  `doc_standard_4` int(11) DEFAULT NULL,
  `doc_standard_5` int(11) DEFAULT NULL,
  `doc_standard_6` int(11) DEFAULT NULL,
  `doc_standard_7` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `modified_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `toddlers`
--

INSERT INTO `toddlers` (`id`, `name`, `standard`, `dob`, `birth_place`, `birth_no`, `mykid`, `sibling_count`, `sibling_index`, `address`, `parent_id`, `sibling_id`, `fav_game`, `fav_homework`, `fav_food`, `food_allergy`, `special_problem`, `disability`, `special_exp`, `emergency_contact_name`, `emergency_contact_address`, `emergency_contact_phone`, `transporter_name`, `transporter_address`, `transporter_phone`, `transporter_transport_type_no`, `parent_declaration_1`, `parent_declaration_2`, `parent_declaration_3`, `parent_declaration_4`, `doc_standard_1`, `doc_standard_2`, `doc_standard_3`, `doc_standard_4`, `doc_standard_5`, `doc_standard_6`, `doc_standard_7`, `status_id`, `created_at`, `modified_at`) VALUES
(1, 'mizan', 1, '25/10/92', 'Melaka', 'J39234', '921025045563', 5, 3, 'No.21 JLN', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(2, 'Diana', 1, '12/12/12', 'Penang', 'J123234', '0023124034', 5, 1, 'No.23 Las', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(3, 'NUR', 1, '12.05.2016', 'L', '123', '234', 1, 4, 'JFALJF', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL),
(4, 'Lala', 1, '20/12/12', 'Penang', 'J9343', '912340203', 4, 2, 'No.21 Jln', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 2, NULL, NULL),
(5, 'SITI ', 1, '22.04.1993', 'parit ', 'j455', 'sdf', 2, 2, 'jalan', 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` text,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  `address_1` text,
  `father_name` varchar(255) DEFAULT NULL,
  `father_ic` varchar(255) DEFAULT NULL,
  `father_age` int(11) DEFAULT NULL,
  `father_dob` varchar(255) DEFAULT NULL,
  `father_birth_place` varchar(255) DEFAULT NULL,
  `father_work` varchar(255) DEFAULT NULL,
  `father_income` varchar(255) DEFAULT NULL,
  `father_study_level` varchar(255) DEFAULT NULL,
  `father_phone` varchar(255) DEFAULT NULL,
  `mother_name` varchar(255) DEFAULT NULL,
  `mother_ic` varchar(255) DEFAULT NULL,
  `mother_age` int(11) DEFAULT NULL,
  `mother_dob` varchar(255) DEFAULT NULL,
  `mother_birth_place` varchar(255) DEFAULT NULL,
  `mother_work` varchar(255) DEFAULT NULL,
  `mother_income` varchar(255) DEFAULT NULL,
  `mother_study_level` varchar(255) DEFAULT NULL,
  `mother_phone` varchar(255) DEFAULT NULL,
  `address_2` text,
  `role_id` int(11) DEFAULT NULL,
  `status_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`, `first_name`, `last_name`, `fullname`, `address_1`, `father_name`, `father_ic`, `father_age`, `father_dob`, `father_birth_place`, `father_work`, `father_income`, `father_study_level`, `father_phone`, `mother_name`, `mother_ic`, `mother_age`, `mother_dob`, `mother_birth_place`, `mother_work`, `mother_income`, `mother_study_level`, `mother_phone`, `address_2`, `role_id`, `status_id`) VALUES
(1, 'mexists', 'mexists@yahoo.com', '5f4dcc3b5aa765d61d8327deb882cf99', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(2, 'NURFADHILAH', 'ellah.fadhilah93@gmail.com', '2bf31436e3ebd85c9a515896f6f2be32', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users_status`
--

CREATE TABLE IF NOT EXISTS `users_status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users_status`
--

INSERT INTO `users_status` (`id`, `name`) VALUES
(1, 'Aktif'),
(2, 'Tidak Aktif'),
(3, 'Mendaftar');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
