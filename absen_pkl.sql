-- phpMyAdmin SQL Dump
-- version 3.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2020 at 01:42 PM
-- Server version: 5.5.25a
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `absen_pkl`
--

-- --------------------------------------------------------

--
-- Table structure for table `absen`
--

CREATE TABLE IF NOT EXISTS `absen` (
  `id_absen` int(11) NOT NULL AUTO_INCREMENT,
  `biodata_user_id` int(11) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `jam_masuk` varchar(12) NOT NULL,
  `konfirmasi_jam_masuk` varchar(255) NOT NULL,
  `jam_keluar` time DEFAULT NULL,
  `konfirmasi_jam_keluar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id_absen`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `absen`
--

INSERT INTO `absen` (`id_absen`, `biodata_user_id`, `tanggal`, `jam_masuk`, `konfirmasi_jam_masuk`, `jam_keluar`, `konfirmasi_jam_keluar`) VALUES
(2, 9, '08-09-2020', '21:03:43', 'belum dikonfirmasi', '21:10:51', 'belum dikonfirmasi');

-- --------------------------------------------------------

--
-- Table structure for table `biodata_users`
--

CREATE TABLE IF NOT EXISTS `biodata_users` (
  `id_biodata_user` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `nim` int(12) NOT NULL,
  `name` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `gender` varchar(20) NOT NULL,
  PRIMARY KEY (`id_biodata_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `biodata_users`
--

INSERT INTO `biodata_users` (`id_biodata_user`, `user_id`, `nim`, `name`, `university`, `gender`) VALUES
(7, 9, 123456789, 'Sutrisno123', 'polsri', 'laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `usertype` varchar(50) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `usertype`) VALUES
(1, 'admin', 'admin', 'admin'),
(9, 'user', 'user', 'user');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
