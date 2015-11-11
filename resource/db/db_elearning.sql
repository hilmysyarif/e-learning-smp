-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 11, 2015 at 03:09 
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
  `nama` varchar(50) NOT NULL,
  `foto` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `nama`, `foto`) VALUES
('admin@gmail.com', '52e2f479879b2daadadc868abc996ba0', 'Arief Bruce', 'default-user.png');

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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `data_nilai`
--

CREATE TABLE IF NOT EXISTS `data_nilai` (
  `id_data_nilai` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(150) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detail_jadwal`
--

CREATE TABLE IF NOT EXISTS `detail_jadwal` (
  `id_detail_jadwal` int(11) NOT NULL,
  `id_jam` int(11) DEFAULT NULL,
  `id_pelajaran` int(11) DEFAULT NULL,
  `id_ruang` int(11) DEFAULT NULL,
  `nik` varchar(30) DEFAULT NULL,
  `id_jadwal` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `halaman_statis`
--

CREATE TABLE IF NOT EXISTS `halaman_statis` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halaman_statis`
--

INSERT INTO `halaman_statis` (`id`, `isi`, `tgl_upload`) VALUES
(1, '<p>asdfkja;lsdkf</p>\n\n<p>&nbsp;</p>\n', '2015-11-05 09:28:06'),
(2, '<p><strong>SMP NEGERI 15 MUKOMUKO</strong></p>\n\n<p>Jl. Cut Muthia - Kec. Penarik - Kab. Mukomuko - Bengkulu.</p>\n\n<p>Kode Pos: 38368</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Sosial Medi</strong></p>\n\n<ul>\n	<li>facebook : http://facebook.com/smpn15mukomuko</li>\n	<li>twitter : http://twitter.com/</li>\n	<li>googleplus : hhtp://google.com/</li>\n</ul>\n\n<p>&nbsp;</p>\n\n<p><strong>Kontak</strong></p>\n\n<ul>\n	<li>email : smpn15mukomuko@gmail.com</li>\n	<li>telp : 031xxxx</li>\n	<li>hp : 085xxxxx</li>\n</ul>\n', '2015-11-06 09:15:17'),
(3, '<p><strong>SMP Negeri 15 Mukomuko</strong> adalah salah satu instansi pendidikan yang ada di kabupaten mukomuko provinsi Bengkulu. Sekolah Menengah Pertama (SMP) Negeri 15 Mukomuko pada awalnya merupakan kelas jauh (filial) dari SMP Negeri 01 Teras terunjam. Pada saat pembukaan tahun 2000, SMP Negeri 15 merupakan SMP 6 kelas jauh yang dikepalai oleh Bapak Sofyan Dirin, S.Pd.</p>\n\n<p>&nbsp;</p>\n\n<p>Berdasarkan surat keputusan dinas pendidikan kabupaten Mukomuko tepatnya&nbsp; pada bulan maret tahun 2002, SMP 6 (kelas jauh) yang terletak di Jln. Cut Muthia Kecamatan Penarik Kabupaten Mukomuko Provinsi Bengkulu secara resmi diganti namanya menjadi SMP Negeri 4 Teras Terunjam, dan sebagai pejabat Kepala Sekolah yang pertama adalah Bapak Abdullah Somad, S.Pd.</p>\n\n<p>&nbsp;</p>\n\n<p>Pada tahun 2004 Kepala Sekolah digantikan oleh Bapak Yusharudin, S.Pd (2004-2007) dan tahun 2007 Kepala Sekolah digantikan oleh Bapak Supadi, S.Pd (2007-2011). Pertengahan tahun 2008 terjadi lagi perubahan nama sekolah, yakni dari SMP Negeri 4 Teras Terunjam menjadi SMP Negeri 15 Mukomuko. Pada awal tahun 2011 terjadi lagi pergantian kepala sekolah SMP Negeri 15 Mukomuko, dari Bapak Supadi, S.Pd digantikan oleh Ibu Erni Sumanti, S.Pd yang menjabat hingga saat sekarang ini.</p>\n', '2015-11-05 06:16:38'),
(4, '<p><strong>Visi SMP Negeri 15 Mukomuko</strong></p>\n\n<p>&ldquo;Terwujudnya Sekolah Yang Religius, Berbudi Pekerti Luhur, Cerdas Dan Kreatif, Berprestasi Dalam Kemandirian.&rdquo;</p>\n\n<p>&nbsp;</p>\n\n<p><strong>Misi SMP Negeri 15 Mukomuko</strong></p>\n\n<ol>\n	<li>Melaksanakan pembelajaran secara efektif yang memungkinkan siswa dapat mengembangkan potensi potensi yang dimiliki</li>\n	<li>Meningkatkan potensi dan profesionalisme guru dan staf.</li>\n	<li>Menumbuh kembangkan semangat kebersamaan dalam mengembangkan sekolah.</li>\n	<li>Melaksanakan pengembangan metode belajar.</li>\n	<li>Melaksanakan pengembangan sarana dan prasarana sekolah.</li>\n	<li>Melaksanakan kegiatan olahraga, kesenian dan pramuka.</li>\n	<li>Melaksanakan kegiatan keagamaan.</li>\n</ol>\n', '2015-11-05 06:19:22');

-- --------------------------------------------------------

--
-- Table structure for table `hari`
--

CREATE TABLE IF NOT EXISTS `hari` (
  `id_hari` int(11) NOT NULL,
  `hari` varchar(30) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hari`
--

INSERT INTO `hari` (`id_hari`, `hari`, `tgl_upload`) VALUES
(1, 'Senin', '2015-11-06 12:21:34'),
(2, 'Selasa', '2015-11-06 12:21:42'),
(3, 'Rabu', '2015-11-06 12:21:49'),
(4, 'Kamis', '2015-11-06 12:21:56'),
(5, 'Jum''at', '2015-11-06 12:22:12'),
(6, 'Sabtu', '2015-11-06 12:38:02');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE IF NOT EXISTS `jadwal` (
  `id_jadwal` int(11) NOT NULL,
  `id_kelas` int(11) DEFAULT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_hari` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jadwal`
--

INSERT INTO `jadwal` (`id_jadwal`, `id_kelas`, `id_semester`, `id_tahun_ajaran`, `id_hari`) VALUES
(5, 3989, 1, 3, 1),
(6, 3989, 1, 3, 3);

-- --------------------------------------------------------

--
-- Table structure for table `jam`
--

CREATE TABLE IF NOT EXISTS `jam` (
  `id_jam` int(11) NOT NULL,
  `jam` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jam`
--

INSERT INTO `jam` (`id_jam`, `jam`) VALUES
(1, '07.30 - 08.10'),
(2, '08.10 - 09.00'),
(3, '09.00 - 09.30'),
(4, '09.45 - 10.25'),
(5, '10.25 - 11.05'),
(6, '11.20 - 12.00'),
(7, '12.00 - 12.40');

-- --------------------------------------------------------

--
-- Table structure for table `kelas`
--

CREATE TABLE IF NOT EXISTS `kelas` (
  `id_kelas` int(11) NOT NULL,
  `kelas` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=3990 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kelas`
--

INSERT INTO `kelas` (`id_kelas`, `kelas`) VALUES
(3987, 'VII A'),
(3988, 'VIII B'),
(3989, 'IX C');

-- --------------------------------------------------------

--
-- Table structure for table `materi_pelajaran`
--

CREATE TABLE IF NOT EXISTS `materi_pelajaran` (
  `id_materi_pelajaran` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(150) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `materi_umum`
--

CREATE TABLE IF NOT EXISTS `materi_umum` (
  `id_materi_umum` int(11) NOT NULL,
  `judul` varchar(300) NOT NULL,
  `file` varchar(150) NOT NULL,
  `nik` varchar(30) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nilai`
--

CREATE TABLE IF NOT EXISTS `nilai` (
  `id_nilai` int(11) NOT NULL,
  `nilai` int(11) NOT NULL,
  `nis` varchar(30) NOT NULL,
  `id_pelajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `id_tahun_ajaran` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `pelajaran`
--

CREATE TABLE IF NOT EXISTS `pelajaran` (
  `id_pelajaran` int(11) NOT NULL,
  `pelajaran` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelajaran`
--

INSERT INTO `pelajaran` (`id_pelajaran`, `pelajaran`) VALUES
(1, 'Pendidikan Agama'),
(2, 'Pendidikan Kewarganegaraan'),
(3, 'Bahasa Indonesia'),
(4, 'Bahasa Inggris'),
(5, 'Matematika'),
(6, 'IPA'),
(7, 'IPS'),
(8, 'Seni Budaya'),
(9, 'PENJASKES'),
(10, 'TIK'),
(11, 'MULOK'),
(12, 'Upacara Bendera');

-- --------------------------------------------------------

--
-- Table structure for table `pengumuman`
--

CREATE TABLE IF NOT EXISTS `pengumuman` (
  `id` int(11) NOT NULL,
  `isi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE IF NOT EXISTS `ruang` (
  `id_ruang` int(11) NOT NULL,
  `ruang` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `ruang`) VALUES
(1, 'Kelas VII'),
(2, 'Kelas VIII'),
(3, 'Lapangan Upacara');

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `id_semester` int(11) NOT NULL,
  `semester` varchar(30) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`id_semester`, `semester`) VALUES
(1, 'Ganjil'),
(2, 'Genap'),
(3, 'ss');

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
  `id_tahun_ajaran` int(11) NOT NULL,
  `id_kelas` int(11) NOT NULL,
  `id_semester` int(11) NOT NULL,
  `tgl_upload` datetime NOT NULL,
  `tgl_edit` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE IF NOT EXISTS `slides` (
  `id` int(11) NOT NULL,
  `gambar` varchar(300) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `gambar`) VALUES
(1, 'slides-1.png'),
(2, 'slides-2.png'),
(3, 'slides-3.png'),
(4, 'slides-4.png'),
(5, 'slides-5.png');

-- --------------------------------------------------------

--
-- Table structure for table `tahun_ajaran`
--

CREATE TABLE IF NOT EXISTS `tahun_ajaran` (
  `id_tahun_ajaran` int(11) NOT NULL,
  `tahun_ajaran` varchar(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tahun_ajaran`
--

INSERT INTO `tahun_ajaran` (`id_tahun_ajaran`, `tahun_ajaran`) VALUES
(3, '2014/2015');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_nilai`
--
ALTER TABLE `data_nilai`
  MODIFY `id_data_nilai` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  MODIFY `id_detail_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `halaman_statis`
--
ALTER TABLE `halaman_statis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `hari`
--
ALTER TABLE `hari`
  MODIFY `id_hari` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `informasi`
--
ALTER TABLE `informasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `id_jadwal` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `jam`
--
ALTER TABLE `jam`
  MODIFY `id_jam` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `kelas`
--
ALTER TABLE `kelas`
  MODIFY `id_kelas` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3990;
--
-- AUTO_INCREMENT for table `materi_pelajaran`
--
ALTER TABLE `materi_pelajaran`
  MODIFY `id_materi_pelajaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `materi_umum`
--
ALTER TABLE `materi_umum`
  MODIFY `id_materi_umum` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `nilai`
--
ALTER TABLE `nilai`
  MODIFY `id_nilai` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pelajaran`
--
ALTER TABLE `pelajaran`
  MODIFY `id_pelajaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `pengumuman`
--
ALTER TABLE `pengumuman`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `semester`
--
ALTER TABLE `semester`
  MODIFY `id_semester` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tahun_ajaran`
--
ALTER TABLE `tahun_ajaran`
  MODIFY `id_tahun_ajaran` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `data_nilai`
--
ALTER TABLE `data_nilai`
  ADD CONSTRAINT `data_nilai_ibfk_1` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_nilai_ibfk_3` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `data_nilai_ibfk_4` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `detail_jadwal`
--
ALTER TABLE `detail_jadwal`
  ADD CONSTRAINT `detail_jadwal_ibfk_11` FOREIGN KEY (`id_jadwal`) REFERENCES `jadwal` (`id_jadwal`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_12` FOREIGN KEY (`id_jam`) REFERENCES `jam` (`id_jam`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_13` FOREIGN KEY (`id_ruang`) REFERENCES `ruang` (`id_ruang`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_14` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `detail_jadwal_ibfk_7` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD CONSTRAINT `jadwal_ibfk_14` FOREIGN KEY (`id_hari`) REFERENCES `hari` (`id_hari`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_15` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_16` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `jadwal_ibfk_17` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `materi_pelajaran`
--
ALTER TABLE `materi_pelajaran`
  ADD CONSTRAINT `materi_pelajaran_ibfk_3` FOREIGN KEY (`nik`) REFERENCES `guru` (`nik`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_6` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_7` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_8` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `materi_pelajaran_ibfk_9` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

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
  ADD CONSTRAINT `nilai_ibfk_6` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_7` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_8` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `nilai_ibfk_9` FOREIGN KEY (`id_pelajaran`) REFERENCES `pelajaran` (`id_pelajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `siswa`
--
ALTER TABLE `siswa`
  ADD CONSTRAINT `siswa_ibfk_5` FOREIGN KEY (`no_ktp`) REFERENCES `wali` (`no_ktp`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_6` FOREIGN KEY (`id_kelas`) REFERENCES `kelas` (`id_kelas`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_7` FOREIGN KEY (`id_semester`) REFERENCES `semester` (`id_semester`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `siswa_ibfk_8` FOREIGN KEY (`id_tahun_ajaran`) REFERENCES `tahun_ajaran` (`id_tahun_ajaran`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
