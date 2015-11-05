-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 01, 2015 at 11:01 
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `nama`) VALUES
('arifmatika@gmail.com', 'rahasi4', 'Arief Bruce');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE IF NOT EXISTS `berita` (
  `id` int(11) NOT NULL,
  `gambar` varchar(150) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `tgl_upload`, `tgl_edit`) VALUES
(2, 'animal_0007.jpg', 'asdfasdf', 'asdfasdf', '2015-09-16 09:18:36', '2015-09-16 09:18:36'),
(3, 'animal_0009.jpg', 'lkaj;sdlkjf;alksdjf;lk', ';alksjdf;lakjsdf ;lkajsd f;lkasdj f', '2015-09-17 07:39:34', '2015-09-17 07:39:34'),
(4, 'animal_0013.jpg', 'IIIIIIIIIIIOooooo', 'l;kajsd; lkfja; slkdjf ;alksdjf; laksdf ', '2015-09-17 07:39:47', '2015-09-17 07:39:47'),
(5, 'animal_0012.jpg', 'Oppaodjs;f lkadjs flk', 'laksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as dlaksjdf ;lkadsjf ;lkasdjf .z,mxnc.,mmn c,l.as d', '2015-09-17 07:39:59', '2015-09-17 07:39:59'),
(6, 'animal_0004.jpg', 'al;kjd ;flka sd;fl asd f', ';laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ;laksdf ;alksd f'';alsd f''asdf ', '2015-09-22 10:15:07', '2015-09-22 10:15:07'),
(7, 'animal_0014.jpg', 'kl; k ;kl ;lk ;lk ;lk ', 'paodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdfpaodsfp[a psdfl;aksdf ;lkads f;lak dsf; asdf', '2015-09-22 10:15:22', '2015-09-22 10:15:22'),
(8, 'animal_0009.jpg', 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem ', '<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum v</p>\n', '2015-09-22 10:20:22', '2015-09-25 08:32:13');

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE IF NOT EXISTS `data_nilai` (
  `id_data_nilai` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(150) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_semester` varchar(30) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_nilai`
--

INSERT INTO `data_nilai` (`id_data_nilai`, `judul`, `file`, `nik`, `id_semester`, `id_tahun_ajaran`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'Nilai IPA', '100_0337.JPG', '888.7755.23232', '8884', '9585', '2015-09-16 07:20:12', '0000-00-00 00:00:00'),
(2, 'NILAI BIOLOGI', '100_0340.JPG', '991.233.1111', '8884', '9585', '2015-09-16 08:42:04', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_jadwal`
--

CREATE TABLE IF NOT EXISTS `detail_jadwal` (
  `id_detail_jadwal` int(11) NOT NULL,
  `id_jam` varchar(30) DEFAULT NULL,
  `id_pelajaran` varchar(30) DEFAULT NULL,
  `id_ruang` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `id_jadwal` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `guru`
--

CREATE TABLE IF NOT EXISTS `guru` (
  `nik` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tlp` varchar(30) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `pengumuman` text NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nik`, `password`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `tlp`, `hp`, `foto`, `pengumuman`, `tgl_upload`, `tgl_edit`) VALUES
('888.7755.23232', '888.7755.23232', 'Parman Suparman', 'Laki-laki', 'Jember', '0000-00-00', 'Jl. Elang No.80', 'parma@gmai.com', '08788888', '80000', 'animal_0003.jpg', 'Besok Ujian', '2015-09-14 06:34:53', '0000-00-00 00:00:00'),
('991.233.1111', '991.233.1111', 'Mr Lobo', 'Laki-laki', 'Surabaya', '0000-00-00', 'Jl. Merak No.90', 'lobo@gmail.com', '09999', '89999', 'animal_0001.jpg', 'Kucing Hitam', '2015-09-14 06:33:21', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `halaman_statis`
--

CREATE TABLE IF NOT EXISTS `halaman_statis` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_statis`
--

INSERT INTO `halaman_statis` (`id`, `isi`, `tgl_upload`) VALUES
(1, 'Ini tentang kami bukan kamu\ningat itu oke', '2015-09-16 12:04:41'),
(2, '<p>kontak</p>\n\n<p>bisa terjasi</p>\n\n<p>\\aasdf;a</p>\n\n<p>sdf&#39;adsfasdf</p>\n', '2015-09-17 08:25:05');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
  `id_hari` varchar(30) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `hari`, `tgl_upload`) VALUES
('0437', 'solusi', '0000-00-00 00:00:00'),
('0595', 'sdfsf', '2015-09-26 08:58:35'),
('0s79', 'Sabtu', '0000-00-00 00:00:00'),
('2753', 'Selasa', '0000-00-00 00:00:00'),
('3426', 'susu', '2015-09-26 08:59:33'),
('6756', 'solusi2', '0000-00-00 00:00:00'),
('677', 'Rabu', '0000-00-00 00:00:00'),
('8358', 'Minggu', '0000-00-00 00:00:00'),
('8508', 'Kamis', '0000-00-00 00:00:00'),
('8529', 'Senin', '0000-00-00 00:00:00'),
('9186', 'Jumat', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `informasi`
--

CREATE TABLE IF NOT EXISTS `informasi` (
  `id` int(11) NOT NULL,
  `judul` varchar(150) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `tgl_upload`, `tgl_edit`) VALUES
(4, 'lkajs;dlkf a;lsdf  ;alksdf ;alkds f;alsdf ;asd f;alsd f;alsd f;lads f;la ds'';flam '';sdlfk '';aldsf '';asd f', '<p>;alsdkf&#39;; asdlf &#39;a;lsdf<br />\na</p>\n\n<p>dsf a&#39;sd;lfk</p>\n\n<p>as;dlf</p>\n\n<p>ads f</p>\n\n<p>afds</p>\n', '2015-09-22 10:09:08', '0000-00-00 00:00:00'),
(5, 'Informasi penting untuk siswa kelas VII A', '<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem Ipsum</p>\n\n<p>Lorem Ipsum</p>\n\n<p>Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum</p>\n', '2015-09-22 10:15:32', '2015-09-26 12:35:07'),
(6, 'Pesan yang disampaikan semua kata', '<p>kjhlkjhlkjhlkj lkj lkl;</p>\n\n<p>&nbsp;</p>\n', '2015-09-22 10:15:39', '2015-09-25 08:37:16'),
(7, 'Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum ', '<p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>\n', '2015-09-22 10:16:01', '2015-09-26 12:32:38');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` varchar(30) DEFAULT NULL,
  `id_semester` varchar(30) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `id_hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
  `id_jam` varchar(30) NOT NULL,
  `jam` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
('2192', '09.00 s/d 10.00 WIB'),
('3999', '10.00 s/d 11.00 WIB'),
('56s8', '07.00 s/d 08.00 WIB'),
('8103', '11.00 s/d 12.00 WIB'),
('9868', '08.00 s/d 09.00 WIB');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` varchar(30) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
('0355', 'VII C'),
('3210', 'VII A'),
('3508', 'VII B'),
('7355', 'VII D');

-- --------------------------------------------------------

--
-- Table structure for table `materi_pelajaran`
--

CREATE TABLE IF NOT EXISTS `materi_pelajaran` (
  `id_materi_pelajaran` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(150) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_pelajaran` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `id_semester` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_pelajaran`
--

INSERT INTO `materi_pelajaran` (`id_materi_pelajaran`, `judul`, `file`, `nik`, `id_pelajaran`, `id_kelas`, `id_tahun_ajaran`, `id_semester`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'Materi BI', 'animal_0004.jpg', '888.7755.23232', '9387', '3210', '9585', '8884', '2015-09-15 03:03:26', '0000-00-00 00:00:00'),
(3, 'NILAI BIOLOGI', '317_Hi-tech.jpg', '991.233.1111', '5721', '3210', '9585', '8884', '2015-09-17 08:58:22', '0000-00-00 00:00:00'),
(4, 'Tugas Bahasa Indonesia', '315_Hi-tech.jpg', '991.233.1111', '9387', '3210', '9585', '8884', '2015-09-17 11:36:31', '0000-00-00 00:00:00'),
(5, 'Tugas Bahasa Indonesia', '314_Hi-tech.jpg', '888.7755.23232', '9387', '3210', '9585', '8884', '2015-09-17 11:37:35', '0000-00-00 00:00:00'),
(6, 'IPA', '317_Hi-tech.jpg', '888.7755.23232', '5721', '3210', '9585', '8884', '2015-09-17 11:37:55', '0000-00-00 00:00:00'),
(7, 'asd l;kj;l ; ; l k k k k k ', '20121120_MODUL3_SBD_SQL_SERVER_S1_TI.pdf', '888.7755.23232', '9387', '3210', '9585', '8884', '2015-09-22 07:18:02', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `materi_umum`
--

CREATE TABLE IF NOT EXISTS `materi_umum` (
  `id_materi_umum` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(150) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_pelajaran` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `materi_umum`
--

INSERT INTO `materi_umum` (`id_materi_umum`, `judul`, `file`, `nik`, `id_pelajaran`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'Bahasa Indonesia 1', 'animal_0008.jpg', '888.7755.23232', '9387', '2015-09-17 08:27:45', '0000-00-00 00:00:00'),
(2, 'Bahasa Indonesia 2', 'animal_0009.jpg', '888.7755.23232', '9387', '2015-09-17 08:28:01', '0000-00-00 00:00:00'),
(3, 'Bahasa Indonesia 3', 'animal_0016.jpg', '888.7755.23232', '9387', '2015-09-17 08:28:15', '0000-00-00 00:00:00'),
(4, 'Bahasa Indonesia 4', 'animal_0015.jpg', '888.7755.23232', '9387', '2015-09-17 08:28:28', '0000-00-00 00:00:00'),
(5, 'Matematika 1', 'animal_0010.jpg', '991.233.1111', '3036', '2015-09-17 08:28:58', '0000-00-00 00:00:00'),
(6, 'Matematika 2', 'animal_0007.jpg', '991.233.1111', '3036', '2015-09-17 08:29:11', '0000-00-00 00:00:00'),
(7, 'Matematika 3', 'animal_0033.jpg', '991.233.1111', '3036', '2015-09-17 08:29:28', '0000-00-00 00:00:00'),
(8, 'IPS Kelas SATU', 'debian-handbook.pdf', '888.7755.23232', '5721', '2015-09-29 09:45:47', '0000-00-00 00:00:00'),
(9, 'Word', 'bist.zip', '888.7755.23232', '9387', '2015-09-29 09:48:05', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `id_pelajaran` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `id_semester` varchar(30) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai`, `nis`, `id_pelajaran`, `id_kelas`, `id_semester`, `id_tahun_ajaran`, `tgl_upload`) VALUES
(2, 80, '15.09.1406.3118', '888', '3508', '8884', '9585', '2015-09-17 11:08:00'),
(10, 90, '15.09.1406.3004', '9387', '3210', '8884', '9585', '2015-09-26 08:44:24'),
(11, 80, '15.09.1702.0321', '9387', '3210', '8884', '9585', '2015-09-26 08:44:24'),
(12, 22, '15.09.1406.3004', '888', '3210', '8884', '9585', '2015-09-26 08:48:40'),
(13, 33, '15.09.1702.0321', '888', '3210', '8884', '9585', '2015-09-26 08:48:40');

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `id_pelajaran` varchar(30) NOT NULL,
  `pelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `pelajaran`) VALUES
('3036', 'Matematika'),
('5721', 'IPA'),
('888', 'Bahasa Inggris'),
('9387', 'Bahasa Indonesia');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pengumuman`
--

INSERT INTO `pengumuman` (`id`, `isi`) VALUES
(1, 'asdfasdfasdf'),
(2, '');

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `id_ruang` varchar(30) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `ruang`) VALUES
('3320', 'Gedung 1 No.1 D'),
('4284', 'Gedung 1 No.1 E'),
('6819', 'Gedung 1 No.1 B'),
('8905', 'Gedung 1 No.1 C'),
('8s32', 'Gedung 1 No.1 A');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id_semester` varchar(30) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
('8884', 'Ganjil'),
('9968', 'Genap');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nis` varchar(30) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `jenis_kelamin` enum('Laki-laki','Perempuan') NOT NULL,
  `tempat_lahir` varchar(30) NOT NULL,
  `tgl_lahir` varchar(30) NOT NULL,
  `alamat` varchar(300) NOT NULL,
  `tahun_masuk` varchar(30) NOT NULL,
  `foto` varchar(300) NOT NULL,
  `no_ktp` varchar(50) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `id_semester` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `password`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `tahun_masuk`, `foto`, `no_ktp`, `id_tahun_ajaran`, `id_kelas`, `id_semester`, `tgl_upload`, `tgl_edit`) VALUES
('15.09.1406.3004', '15.09.1406.3004', 'Paijo Wibowo', 'Laki-laki', 'Solo', '23-12-1992', 'Jl. Turi 3 No.10', '2019 / 2020', 'animal_0113.jpg', '22993421', '9585', '3210', '8884', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15.09.1406.3118', '15.09.1406.3118', 'Andi', 'Laki-laki', 'Yogyakarta', 'Yogyakarta', 'Jl. Merpati Putih No.11', '2019 / 2020', 'animal_0028.jpg', '987689000', '9585', '3508', '8884', '0000-00-00 00:00:00', '2015-09-26 12:20:40'),
('15.09.1702.0321', '15.09.1702.0321', 'Arif Billah', 'Laki-laki', 'Situbondo Jatim', '23121992', 'Jl. Terang yang kau pilih.', '2019 / 2020', 'animal_0126.jpg', '0987898', '9585', '3210', '8884', '0000-00-00 00:00:00', '2015-09-17 06:00:47');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `gambar`) VALUES
(1, 'Untitled-11.png'),
(7, 'abstract_nko_06.jpg'),
(8, 'abstract_nko_05.jpg'),
(9, 'abstract_nko_19.jpg'),
(10, 'abstract_nko_03.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
('0423', '2020 / 2021'),
('0536', '2017 / 2018'),
('0981', '2016 / 2017'),
('2528', ''),
('2780', '2018 / 2019'),
('8071', ''),
('8095', '2014 / 2015'),
('8309', '2015 / 2016'),
('9585', '2019 / 2020');

-- --------------------------------------------------------

--
-- Table structure for table `wali`
--

CREATE TABLE IF NOT EXISTS `wali` (
  `no_ktp` varchar(50) NOT NULL,
  `password` varchar(150) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `pekerjaan` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `tlp` varchar(30) NOT NULL,
  `hp` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`no_ktp`, `password`, `nama`, `pekerjaan`, `email`, `tlp`, `hp`, `tgl_upload`) VALUES
('', '@Bn0WK', '', '', '', '', '', '2015-08-25 03:49:23'),
('0987898', '0987898', 'Aldi Frodo Bin Ahmad Bus', 'Wiraswasta s', 'admin@youngs.co.com', '2222222', '4444444', '2015-09-17 06:00:47'),
('22993421', 'Ml!7ef', 'Aryo Wibowo ', 'Wiraswasta', 'wibowo@gmail.com', '089788888', '098888', '2015-09-14 06:30:04'),
('23', 'n38273', 'asdfadsf', '', '', '', '', '2015-08-25 02:54:59'),
('232', '79KC6M', 'asdfasdf', 'asdfasdf', 'asdfadsf', 'asdfaf', 'asdfasdfasdfasdf', '2015-08-25 03:01:46'),
('23232', 'd78as0', '', '', '', '', '', '2015-09-04 10:06:11'),
('233', '0d2R4k', 'aasdfasdf', 'asdfasdfadsf', 'asdfadsf', 'asdfasdf', 'erfaerfasdf', '2015-08-25 03:47:45'),
('23434', '0B20e%', '', '', '', '', '', '2015-08-25 03:50:36'),
('987689000', 'kO35f^', 'Anto', 'Wiraswasta', 'anto@gmai.com', '08789999', '098888', '2015-09-14 06:31:18'),
('989', 'KlW939', 'laskjdlasd', 'pjapsdf', 'aa', '9989', '9999', '2015-08-25 03:46:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD PRIMARY KEY (`id_data_nilai`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD PRIMARY KEY (`id_detail_jadwal`),
  ADD KEY `id_jam` (`id_jam`,`id_pelajaran`,`id_ruang`,`nik`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_ruang` (`id_ruang`),
  ADD KEY `id_pelajaran` (`id_pelajaran`),
  ADD KEY `id_jadwal` (`id_jadwal`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
  ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
  ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `informasi`
--
ALTER TABLE `informasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`id_jadwal`),
  ADD KEY `id_jam` (`id_hari`,`id_kelas`,`id_semester`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_tahun_ajaran_2` (`id_tahun_ajaran`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_kelas` (`id_kelas`);

--
-- Indexes for table `jam`
--
ALTER TABLE `jam`
  ADD PRIMARY KEY (`id_jam`);

--
-- Indexes for table `kelas`
--
ALTER TABLE `kelas`
  ADD PRIMARY KEY (`id_kelas`);

--
-- Indexes for table `materi_pelajaran`
--
ALTER TABLE `materi_pelajaran`
  ADD PRIMARY KEY (`id_materi_pelajaran`),
  ADD KEY `nik` (`nik`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `materi_umum`
--
ALTER TABLE `materi_umum`
  ADD PRIMARY KEY (`id_materi_umum`),
  ADD KEY `id_pelajaran` (`id_pelajaran`),
  ADD KEY `nik` (`nik`);

--
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
  ADD PRIMARY KEY (`id_nilai`),
  ADD KEY `nis` (`nis`),
  ADD KEY `id_pelajaran` (`id_pelajaran`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `nis_2` (`nis`),
  ADD KEY `id_pelajaran_2` (`id_pelajaran`),
  ADD KEY `id_kelas_2` (`id_kelas`),
  ADD KEY `id_semester_2` (`id_semester`),
  ADD KEY `id_tahun_ajaran_2` (`id_tahun_ajaran`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
  ADD PRIMARY KEY (`id_pelajaran`);

--
-- Indexes for table `pengumuman`
--
ALTER TABLE `pengumuman`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- Indexes for table `semester`
--
ALTER TABLE `semester`
  ADD PRIMARY KEY (`id_semester`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nis`),
  ADD KEY `id_kelas` (`id_kelas`),
  ADD KEY `id_kelas_2` (`id_kelas`),
  ADD KEY `no_ktp` (`no_ktp`),
  ADD KEY `no_ktp_2` (`no_ktp`),
  ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`),
  ADD KEY `id_kelas_3` (`id_kelas`),
  ADD KEY `id_tahun_ajaran_2` (`id_tahun_ajaran`),
  ADD KEY `id_tahun_ajaran_3` (`id_tahun_ajaran`),
  ADD KEY `id_kelas_4` (`id_kelas`),
  ADD KEY `id_tahun_ajaran_4` (`id_tahun_ajaran`),
  ADD KEY `id_kelas_5` (`id_kelas`),
  ADD KEY `id_semester` (`id_semester`),
  ADD KEY `id_semester_2` (`id_semester`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  ADD PRIMARY KEY (`id_tahun_ajaran`);

--
-- Indexes for table `wali`
--
ALTER TABLE `wali`
  ADD PRIMARY KEY (`no_ktp`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `berita`
--
ALTER TABLE `berita`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id_data_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `materi_pelajaran`
--
ALTER TABLE `materi_pelajaran`
  MODIFY `id_materi_pelajaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `materi_umum`
--
ALTER TABLE `materi_umum`
  MODIFY `id_materi_umum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=11;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD CONSTRAINT `data_nilai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_nilai_ibfk_2` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_nilai_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD CONSTRAINT `detail_jadwal_ibfk_10` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_11` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_7` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_8` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_9` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_10` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_11` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_12` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_13` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi_pelajaran`
--
ALTER TABLE `materi_pelajaran`
  ADD CONSTRAINT `materi_pelajaran_ibfk_1` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_2` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_5` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi_umum`
--
ALTER TABLE `materi_umum`
  ADD CONSTRAINT `materi_umum_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_umum_ibfk_2` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
  ADD CONSTRAINT `nilai_ibfk_1` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_2` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_3` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_4` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_5` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_2` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_3` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_4` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`no_ktp`) REFERENCES `wali` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
