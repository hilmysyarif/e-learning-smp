-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2015 at 03:00 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_elearning`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_jadwal`
--

CREATE TABLE IF NOT EXISTS `detail_jadwal` (
`id_detail_jadwal` int(11) NOT NULL,
  `id_jam` varchar(30) DEFAULT NULL,
  `id_pelajaran` varchar(30) DEFAULT NULL,
  `id_ruang` varchar(30) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL
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
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guru`
--

INSERT INTO `guru` (`nik`, `password`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `email`, `tlp`, `hp`, `foto`) VALUES
('9899', '52e2f479879b2daadadc868abc996ba0', 'ppp', 'Laki-laki', '', '0000-00-00', '', '', '', '', ''),
('9900', '', 'lkjlkjlk', 'Laki-laki', '', '2015-08-05', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
  `id_hari` varchar(30) NOT NULL,
  `hari` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `hari`) VALUES
('0s79', 'Sabtu'),
('2753', 'Selasa'),
('677', 'Rabu'),
('8358', 'Minggu'),
('8508', 'Kamis'),
('8529', 'Senin'),
('9186', 'Jumat');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
`id_jadwal` int(11) NOT NULL,
  `id_kelas` varchar(30) DEFAULT NULL,
  `id_semester` varchar(30) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL,
  `id_hari` varchar(30) NOT NULL,
  `id_detail_jadwal` int(11) NOT NULL
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
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` varchar(30) NOT NULL,
  `nilai` int(3) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `id_pelajaran` varchar(30) NOT NULL,
  `id_kelas` varchar(30) NOT NULL,
  `id_semester` varchar(30) NOT NULL,
  `id_tahun_ajaran` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
('0536', '2017 / 2018'),
('0981', '2016 / 2017'),
('2780', '2018 / 2019'),
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
('11', '30AKnR', 'Ovi TA', '', '', '', '', '2015-08-21 01:04:10'),
('33', '005Gg8', '', '', '', '', '', '2015-08-21 02:03:54'),
('34343', 'KQ&786', 'asdf', '', '', '', '', '2015-08-21 02:04:52'),
('8888', '0B2TaH', 'SUSI', '', '', '', '', '2015-08-21 01:04:31');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
 ADD PRIMARY KEY (`id_detail_jadwal`), ADD KEY `id_jam` (`id_jam`,`id_pelajaran`,`id_ruang`,`nik`), ADD KEY `nik` (`nik`), ADD KEY `id_ruang` (`id_ruang`), ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `guru`
--
ALTER TABLE `guru`
 ADD PRIMARY KEY (`nik`);

--
-- Indexes for table `hari`
--
ALTER TABLE `hari`
 ADD PRIMARY KEY (`id_hari`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
 ADD PRIMARY KEY (`id_jadwal`), ADD KEY `id_jam` (`id_hari`,`id_kelas`,`id_semester`), ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`), ADD KEY `id_tahun_ajaran_2` (`id_tahun_ajaran`), ADD KEY `id_semester` (`id_semester`), ADD KEY `id_kelas` (`id_kelas`), ADD KEY `id_detail_jadwal` (`id_detail_jadwal`);

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
-- Indexes for table `nilai`
--
ALTER TABLE `nilai`
 ADD PRIMARY KEY (`id_nilai`), ADD KEY `id_kelas` (`id_kelas`), ADD KEY `id_semester` (`id_semester`,`id_tahun_ajaran`), ADD KEY `nis` (`nis`), ADD KEY `id_kelas_2` (`id_kelas`), ADD KEY `id_semester_2` (`id_semester`), ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`), ADD KEY `id_pelajaran` (`id_pelajaran`);

--
-- Indexes for table `pelajaran`
--
ALTER TABLE `pelajaran`
 ADD PRIMARY KEY (`id_pelajaran`);

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
 ADD PRIMARY KEY (`nis`), ADD KEY `id_kelas` (`id_kelas`), ADD KEY `id_kelas_2` (`id_kelas`), ADD KEY `no_ktp` (`no_ktp`), ADD KEY `no_ktp_2` (`no_ktp`), ADD KEY `id_tahun_ajaran` (`id_tahun_ajaran`), ADD KEY `id_kelas_3` (`id_kelas`), ADD KEY `id_tahun_ajaran_2` (`id_tahun_ajaran`), ADD KEY `id_tahun_ajaran_3` (`id_tahun_ajaran`), ADD KEY `id_kelas_4` (`id_kelas`), ADD KEY `id_tahun_ajaran_4` (`id_tahun_ajaran`), ADD KEY `id_kelas_5` (`id_kelas`), ADD KEY `id_semester` (`id_semester`), ADD KEY `id_semester_2` (`id_semester`);

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
-- AUTO_INCREMENT for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
ADD CONSTRAINT `detail_jadwal_ibfk_10` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE,
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
ADD CONSTRAINT `jadwal_ibfk_13` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `jadwal_ibfk_14` FOREIGN KEY (`id_detail_jadwal`) REFERENCES `detail_jadwal` (`id_detail_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `nilai`
--
ALTER TABLE `nilai`
ADD CONSTRAINT `nilai_ibfk_10` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ibfk_11` FOREIGN KEY (`nis`) REFERENCES `siswa` (`nis`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ibfk_7` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ibfk_8` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
ADD CONSTRAINT `nilai_ibfk_9` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE;

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
