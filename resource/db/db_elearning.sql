-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 07, 2015 at 03:27 
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
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`id`, `gambar`, `judul`, `isi`, `tgl_upload`, `tgl_edit`) VALUES
(1, '2D5D3B8600000578-3269467-image-a-45_1444725210599.jpg', 'Teknik Pembelajaran Aneh', '<p><strong>Debby Heerkens</strong>, seorang guru biologi di sekolah <em><strong>Groene Hart Rijnwoude</strong></em> di Belanda , mengajar dengan cara yang benar-benar mengesankan . Dia berdiri di mejanya dan menanggalkan pakaiannya untuk memperlihatkan pakaian dalamnya yang terbuat dari bhahan spandex dengan lukisan atau gambar otot yang akurat dan organ-organ tubuh lainhnya . Hal ini dilakukannya dengan alasan agar peserta didiknya lebih tertarik untuk mempelajari bagian atau anatomi tubhuh manusia, dimana dia membuat gambar pada bahan spandek tersebut dengan lukisan yang sangat mendetail mengenai otot yang terdapat pada tubuh manusia.</p>\n\n<p>Selain itu ia juga membuat beberapa penjelasan mengenai tulang serta letak tulang pada manusia dengan mempergunakan alat bantu yang sama yaitu pakain ketat berbahan spandek yang sama. Ide ini ia peroleh setelah ia <em>surfing</em> dan <em>googling</em>&nbsp; mengenai metode belajar yang baik serta alat bantu pembelajaran yang baik agar dapat meningkatkan motivasi serta perhatian peserta didik dalam hal ini siswa dan siswi pada sebuah sekolah dasar di Belanda.</p>\n\n<p>Rekan guru tidak usah heran ataupun pusing mengenai hal aneh yang dilakukan oleh guru yang satu ini, karena untuk melakukan kegiatan pembelajaran yang tidak lazim ini tentunnya sudah mendapatkan izin terlebih dahulu dari kepala sekolah dimana ia mengajar. Berikut gambar kegiatan belajar yang dilaksanakannya.</p>\n', '2015-11-06 08:35:07', '2015-11-06 09:05:46'),
(2, 'abstract_0015.jpg', 'Jadwal Ujian Nasional Unas SMP SMA 2015', '<p>Ujian Nasional UN tingkat SMA/SMK 13 April-15 April 2015 dan tingkat SMP sederajat tanggal tanggal 4 - 7 Mei 2015 telah ditetapkan oleh pemerintah dan Kementrian Pendidikan Dan Kebudayaan pada periode tahun ajaran dan kalender pendidikan 2014-2015 ini.<br />\n<br />\nJadwal pelaksanaan unas tingkat SMP SMA sederajat tahun 2015 ini telah tercantum dan juga tertuang dalam prosedur operasional standar (POS) yang dikeluarkan oleh Badan Standar Nasional Pendidikan (BSNP) seperti pemberitaan yang dimuat di jpnn.com dengan judul pemberitaan Unas SMA/SMK 13 April 2015.<br />\n<br />\nBerikut informasi update terbaru terkait dengan kriteria kelulusan ujian nasional SMP dan jadwal serta pengumuman hasil UN SMP tahun 2015 yang diumumkan oleh kementrian pendidikan dan kebudayaan baca di informasi ini : <a href="http://tinoberita.blogspot.com/2015/01/jadwal-dan-pengumuman-kelulusan-un-smp.html" target="_blank"><strong>Jadwal Ujian Nasional Dan Pengumuman Kelulusan UN SMP 2015</strong></a>.<br />\n<br />\nSeluruh peserta didik tingkat terakhir yakni kelas 9 SMP/MTs maupun tingkat 12 SMA/MA/SMKyang pada tahun 2015 akan melaksanakan ujian terakhir tingkat nasional yakni Unas (Ujian Nasional).<br />\n&nbsp;</p>\n', '2015-11-06 09:11:46', '2015-11-06 08:54:33'),
(3, 'abstract_0015.jpg', 'Ujian Nasional Tahun 2015', '<p>Nizam selaku Kepala Pusat Penilaian Pendidikan (Puspendik) Kementerian Pendidikan dan Kebudayaan (Kemendikbud) bahwa <em>materi kisi-kisi-kisi soal ujian nasional 2015 Untuk jenjang SMA</em>bahwa mata pelajaran (unas) yang di-unas-kan tetap enam mapel di masing-masing jurusan.<br />\n<br />\nUnas tetap seperti tahun lalu, berlangsung selama tiga hari (sampai 15 April). Sementara untuk jenjang SMP sederajat, unas rencananya diselenggarakan 27-30 April.<br />\n<br />\nTerkait dengan gonjang-ganjing <a href="http://tinoberita.blogspot.com/2014/12/Alasan-Kurikulum-2013-Dihentikan-Diganti-Kurikulum-KTSP.html" target="_blank">Kurikulum 2013 (K-13) dan Kurikulum 2006 KTSP</a>, Nizam menjelaskan, masyarakat tidak perlu risau. Sebab semua siswa SD, SMP, SMA, dan SMK peserta unas, tidak ada satupun yang menjadi sasaran implementasi K-13.<br />\n<br />\nSehingga muatan <em>materi ujian nasional 2015</em> adalah masih sama dengan unas 2014 atau periode sebelumnya.<br />\n<br />\nSelain urusan tanggal penyelenggaraan unas, Nizam juga menjelaskan ada skema baru tender logistik ujian. Lelang logistik unas yang rencananya mulai 15 Januari ini dilaksanakan di tingkat provinsi. Tim panitia pengadaan bahan logistik unas juga sudah dibentuk. Isinya adalah perwakilan dari provinsi-provinsi.<br />\n<br />\n&quot;Jadi Provinsi dapat melakukan pelelangan bahan unas secara sendiri-sendiri. Atau juga gabungan dari beberapa provinsi,&quot; katanya. Kemudian perusahaan percetakan yang berminat ikut lelang, boleh melamar di lebih dari satu provinsi. Asalkan disesuaikan dengan kapasitas produksinya.<br />\n<br />\nMeskipun lelang dilaksanakan di tingkat provinsi, pengumuman pendaftaran lelang dibuka secara serentak. Nizam menyebutkan, masa lelang ini diperkirakan berjalan selama satu bulan.<br />\n<br />\nDan mengenai hal terkait dengan <strong>kriteria kelulusan unas 2015</strong>, Nizam mengatakan harus menunggu peraturan resmi dari Mendikbud Anies Baswedan. Rencananya <em>peraturan Mendikbud terkait pelaksanaan unas 2015</em> keluar Januari ini juga.<br />\n<br />\nSebagaimana diberitakan bahwa <a href="http://hamizann.blogspot.com/2014/11/Anies-Baswedan-Memuliakan-Guru.html" target="_blank">Anies Baswedan</a> menegaskan bahwasannya Unas 2015 berbeda dengan unas-unas sebelumnya. Diantaranya adalah bahwa <em>unas 2015 hanya dipakai untuk pemetaan</em>.<br />\n<br />\nYakni pemetaan kompetensi siswa, sekolah, hingga pemerintah daerah. Dengan demikian, dominasi peran unas sebagai penentu kelulusan siswa rencananya mulai dikurangi.</p>\n', '2015-11-06 09:12:37', '2015-11-06 09:12:37'),
(4, 'abstract_0015.jpg', 'Kisi-Kisi Soal Materi Ujian Nasional UN SMP/MTS SMA/MA 2015', '<p>Seperti informasi yang dikutip dari website bsnp-indonesia.org/id bahwa di dalam rangka penyelenggaraan Ujian Nasional (UN) tahun pelajaran 2014/2015 bahwa Badan Standar Nasional Pendidikan (BSNP) Indonesia menetapkan Kisi-Kisi Soal Ujian Nasional Untuk Satuan Pendidikan Dasar dan Menengah tahun 2015.<br />\n<br />\nKisi-Kisi Ujian Nasional tahun pelajaran 2014/2015 disusun berdasarkan Standar Kompetensi dan Kompetensi Dasar (SK/KD) Satuan Pendidikan Dasar dan Menengah yang terdiri atas <em>Kisi-Kisi Ujian Nasional SMP/MTs, SMPLB - A, D, dan E</em> (Tunanetra, Tuna Daksa Ringan, dan Tuna Laras).<br />\n<br />\nDan juga <em>Kisi-Kisi Ujian Nasional SMPLB - B Tunarungu, SMA/MA - A, D, dan E</em> (Tunanetra, Tuna Daksa Ringan, dan Tuna Laras) dan SMALB - B Tunarungu, serta Program Paket B, Paket C, dan Program C Kejuruan tahun 2014-2015 ini.<br />\n<br />\nKisi-kisi soal Ujian Nasional 2015 ini adalah berdasarkan pada <em>Peraturan Badan Standar Nasional Pendidikan (BSNP) No. 0027/P/BSNP/IX/2014</em> tentang Kisi-Kisi Ujian Nasional untuk Satuan Pendidikan Dasar dan Menengah Tahun Pelajaran 2014-2015.<br />\n<br />\nKisi-kisi UN 2015 disiapkan oleh pemerintah dan pembuat soal yang melibatkan pendidik dengan mekanisme yang ditetapkan oleh pemerintah. Sehubungan dengan telah di tetapkannya SK BSNP tentang <strong>Kisi-Kisi Ujian Nasional Tahun Pelajaran 2014-2015</strong>.<br />\n<br />\nUntuk <em>download mengunduh Kisi-kisi UN tingkat SMA/MA 2015</em> Tahun Pelajaran 2014/2015 bisa langsung melalui link berikut ini : <a href="https://sites.google.com/site/pengumumanun/un-2015/Kisi-Kisi-UN-SMA-Tahun-Pelajaran-2014-2015.pdf?attredirects=0&amp;d=1" target="_blank"><strong>Klik Di Sini</strong></a>.<br />\n<br />\nKisi-kisi soal ujian nasional tahun 2014/2015 ini digunakan sebagai acuan dalam penyusunan soal UN 2015 jenjang Dikdas dan Dikmen untuk diujikan bagi peserta didik kelas 9 SMP (sederajat) dan kelas 12 SMA (sederajat) di tahun 2015 nantinya.<br />\n<br />\nKisi-kisi soal UN tahun pelajaran 2014/2015 disusun berdasarkan Standar Kompetensi dan Kompetensi Dasar (SK-KD) pada Permendiknas No. 22 Tahun 2006 tentang Standar Isi untuk Satuan Pendidikan Dasar dan Menengah.<br />\n<br />\n<em>Download Kisi-kisi soal UN Tahun Pelajaran 2014/2015</em> selengkapnya di link website bsnp-indonesia.org/id berikut ini : <a href="http://bsnp-indonesia.org/id/wp-content/uploads/2014/10/SK-Kisi-Kisi-UN-Tahun-Pelajaran-2014-2015.pdf" target="_blank"><strong>Kisi Kisi UN Tahun Pelajaran 2014-2015</strong></a>.</p>\n', '2015-11-06 09:12:58', '2015-11-06 09:13:37'),
(5, 'abstract_0015.jpg', 'Ujian Nasional Perbaikan: Pendaftaran Daring Hingga 23 Oktober 2015', '<p><strong>Jakarta, Kemendikbud </strong>--- Pendaftaran Ujian Nasional Perbaikan (UNP) telah dibuka dari tanggal 28 September hingga 23 Oktober 2015. UNP diperuntukkan bagi siswa SMA/MA/SMAK/SMTK, SMK/MAK, dan Program Paket C yang nilainya kurang atau sama dengan 55 pada mata pelajaran tertentu atau belum menempuh ujian secara lengkap. UNP akan dilaksanakan dengan ujian berbasis komputer atau <em>computer-based test </em>(CBT). Calon peserta UNP dapat mendaftarkan diri secara daring (online) di laman <a href="http://unp.kemdikbud.go.id/" target="_blank">http://unp.kemdikbud.go.id .</a></p>\n\n<p>Terkait dengan tempat ujian, calon peserta dapat memilih di provinsi sekolah asal atau provinsi domisili saat ini. Jadwal pelaksanaan UNP pada tanggal 22 Februari hingga 5 Maret 2016. Hasil UNP diumumkan tanggal 19 Maret 2016.</p>\n\n<p>&quot;Mengikuti UNP tidak wajib, tapi merupakan pilihan,&quot; kata Ketua Badan Standar Nasional Pendidikan (BSNP), Zainal Arifin Hasibuan di Jakarta beberapa waktu yang lalu. Peserta UN yang nilainya belum memenuhi standar boleh memilih untuk ikut atau tidak, namun sebagai penyelenggara BSNP wajib memenuhi hak peserta didik yang belum mencapai standar untuk mengikuti ujian nasional perbaikan.</p>\n\n<p>Proses pendaftaran, tambah Zainal, dibuat sesederhana mungkin. Calon peserta cukup melakukan registrasi dengan nomor peserta UN 2015 dan tanggal lahir seperti yang tertera pada kartu peserta UN. &quot;Namun tetap ada verifikasi yang disiapkan dalam aplikasi pendaftaran,&quot; kata pria yang juga dosen di Universitas Indonesia tersebut.</p>\n\n<p>Kepala Badan Penelitian dan Pengembangan (Balitbang) Kemendikbud Totok Suprayitno mengatakan UNP yang dilaksanakan dalam bentuk CBT merupakan upaya menuju <em>green assessment.</em> &quot;UNP didesain dalam bentuk CBT karena ingin mengurangi pemakaian kertas dalam UN,&quot; tambah Totok.</p>\n', '2015-11-06 09:14:56', '2015-11-06 09:14:56'),
(6, 'abstract_0015.jpg', 'Buka Rakor Persiapan UN, Mendikbud Tegaskan Pentingnya Kejujuran', '<p><strong>Jakarta, Kemendikbud</strong> --- Kementerian Pendidikan dan Kebudayaan menyelenggarakan Rapat Koordinasi (Rakor) Persiapan Ujian Nasional (UN) Tahun Pelajaran 2015/2016. Saat memberikan sambutan dalam pembukaan rakor, Mendikbud Anies Baswedan kembali menegaskan pentingnya kejujuran dan indeks integritas dalam penyelenggaraan ujian nasional.</p>\n\n<p>&nbsp;</p>\n\n<p>&quot;UN menjadi makna jika nilainya mencerminkan proses kejujuran,&quot; katanya saat pembukaan Rakor Persiapan UN di Graha Utama Kemendikbud, Jakarta, (2/11/2015).</p>\n\n<p>&nbsp;</p>\n\n<p>Mendikbud juga meminta semua pihak untuk memperbanyak sosialisasi tentang pentingnya integritas. Kesadaran tentang pentingnya kejujuran dan integritas itu juga harus disosialisasikan kepada orang tua peserta didik.</p>\n\n<p>&nbsp;</p>\n\n<p>Rakor Persiapan UN dihadiri para pejabat Kemendikbud, perwakilan Dinas Pendidikan Provinsi, Lembaga Penjaminan Mutu Pendidikan (LPMP), serta Pejabat Pembuat Komitmen (PPK) yang nantinya menjadi mitra Balitbang Kemendikbud dalam penyelenggaraan UN, khususnya dalam hal pelelangan.</p>\n\n<p>&nbsp;</p>\n\n<p>Mendikbud mengatakan, evaluasi penyelenggaraan UN merupakan salah satu ikhtiar meningkatkan kualitas layanan pendidikan. Ujian nasional, ujarnya, telah berlangsung bertahun-tahun dengan pengulangan masalah yang sama, sehingga harus diantisipasi sejak awal dengan memprediksi potensi masalah yang akan timbul, sekaligus menentukan langkah-langkah solusinya.</p>\n\n<p>&nbsp;</p>\n\n<p>Sekretaris Balitbang Kemendikbud, Dadang Sudiyarto mengatakan, Rakor Persiapan Ujian Nasional kali ini diselenggarakan lebih awal dibanding tahun-tahun sebelumnya. Biasanya Rakor Persiapan UN berlangsung bulan Januari, tiga bulan sebelum pelaksanaan UN pada bulan April. Dadang menuturkan, Rakor Persiapan UN diselenggarakan lebih awal untuk mengantisipasi lebih awal terhadap potensi masalah yang mungkin terjadi. &quot;Selain itu, diharapkan khususnya untuk UN SMA, akan lebih banyak waktu untuk disampaikan ke perguruan tinggi negeri mengenai pemanfaatan hasil UN,&quot; tuturnya.</p>\n\n<p>&nbsp;</p>\n\n<p>Rakor Persiapan UN juga dilaksanakan lebih awal untuk mengetahui persiapan yang dilakukan semua panitia di pusat (Kemendikbud), provinsi, kabupaten dan kota di seluruh Indonesia, khususnya mengenai pelelangan percetakan dan distribusi naskah UN. &quot;Nanti ada 3-4 orang tiap provinsi harus bersama-sama Balitbang (Kem ndikbud) melakukan pelelangan di Jakarta,&quot; ujarnya.</p>\n', '2015-11-06 09:16:11', '2015-11-06 09:16:11'),
(7, 'abstract_0015.jpg', 'Rerata Nilai UN 2015 Naik', '<p><strong>Jakarta, Kemendikbud </strong>--- Hasil ujian nasional (UN) tahun pelajaran 2014/2015 diumumkan hari ini, Jumat, 15 Mei 2015. Menteri Pendidikan dan Kebudayaan (Mendikbud) Anies Baswedan mengatakan, rerata nilai UN tahun ini naik sebesar 0,29 poin, dari 61,00 pada tahun lalu, menjadi 61,29 pada tahun ini.</p>\n\n<p>Dalam jumpa pers mengenai hasil UN 2015, &nbsp;Mendikbud mengatakan data rerata nilai UN yang naik ini menepis anggapan jika UN tidak lagi menjadi penentu kelulusan, maka motivasi belajar para peserta didik menjadi turun.</p>\n\n<p>&ldquo;Hasil ini membatalkan kecurigaan itu. Kinerja anak-anak tetap baik meskipun ini (UN) tidak dijadikan syarat kelulusan,&rdquo; katanya saat jumpa pers di Gedung Ki Hadjar Dewantara, Jakarta, (15/05/2015).</p>\n\n<p>Ia menjelaskan, ada yang menarik pada hasil UN SMA. Dari tujuh mata pelajaran yang diujikan dalam UN SMA, mata pelajaran yang mengalami kenaikan nilai secara signifikan adalah Bahasa Indonesia. Untuk jurusan IPA, rerata nilai Bahasa Indonesia naik 3,66. Sedangkan untuk jurusan IPS, rerata nilai Bahasa Indonesia naik 3,16.</p>\n\n<p>&ldquo;Kita bersyukur nilai Bahasa Indonesia meningkat, karena ini hal yang mendasar,&rdquo; ujar Mendikbud.</p>\n\n<p>UN tingkat SMA/sederajat tahun 2015 diikuti 19.215 sekolah dengan jumlah peserta mencapai 1.661.832 orang. Dari 758.055 peserta UN program studi IPA, 3,12% memiliki rerata nilai lebih dari 85. Sedangkan untuk program studi IPS, dari 852.870 peserta, hanya 0,24% yang memeperoleh nilai di atas 85.</p>\n', '2015-11-06 09:18:35', '2015-11-06 09:18:35');

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

--
-- Dumping data for table `detail_jadwal`
--

INSERT INTO `detail_jadwal` (`id_detail_jadwal`, `id_jam`, `id_pelajaran`, `id_ruang`, `nik`, `id_jadwal`) VALUES
(12, 2, 6, 3, '567', 5),
(13, 3, 6, 2, '12345678', 5),
(14, 3, 4, 3, '567', 6),
(15, 2, 6, 3, '197012241992032002', 6),
(16, 5, 7, 3, '12345678', 6);

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
('12345678', '12345678', 'Amrullah', 'Laki-laki', '0', '0000-00-00', 'penarik raya', 'amrullah@gmail.com', '', '085267670700', 'abstract_0014.jpg', 'pppppppppppppppppppppp', '2015-11-06 12:14:53', '2015-11-06 12:28:56'),
('197012241992032002', '197012241992032002', 'Tin Sutinah, S. Pd', 'Perempuan', '0', '0000-00-00', 'Simpang Sp 1 Penarik', 'tinsutinah@gmail.com', '', '085273180088', 'abstract_0004.jpg', '', '2015-11-06 09:23:29', '2015-11-06 10:00:48'),
('197512062006042009', '197512062006042009', 'Ina Puji Rahayu, S.Pd', 'Perempuan', '0', '0000-00-00', 'Desa Sidodadi Dusun 4 Kec. Penarik Kab. Mukomuko', 'inapuji@gmail.com', '', '123456789012', 'abstract_0004.jpg', '', '2015-11-06 09:44:18', '2015-11-06 10:00:32'),
('567', '876', 'jkjk', 'Laki-laki', '0', '0000-00-00', '', '', '', '', 'abstract_0004.jpg', '', '2015-11-06 12:12:09', '2015-11-06 12:12:37');

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

--
-- Dumping data for table `informasi`
--

INSERT INTO `informasi` (`id`, `judul`, `isi`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'Pelajaran Tambahan Menghadapi UN', '<p>Karena akan segera diadakannya ujian nasional, diharapkan semua siswa tingkat IX untuk mengikuti kegiatan belajar tambahan pada hari senin hingga kamis pukul 14.00</p>\n', '2015-11-06 10:07:11', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `materi_pelajaran`
--

INSERT INTO `materi_pelajaran` (`id_materi_pelajaran`, `judul`, `file`, `nik`, `id_pelajaran`, `id_kelas`, `id_tahun_ajaran`, `id_semester`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'Soal MID Matematika', 'soal-MTK-MID.docx', '12345678', 5, 3989, 3, 1, '2015-11-06 08:40:40', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `materi_umum`
--

INSERT INTO `materi_umum` (`id_materi_umum`, `judul`, `file`, `nik`, `id_pelajaran`, `tgl_upload`, `tgl_edit`) VALUES
(1, 'kewarganegaraan', 'kewarganegaraan.ppt', '197512062006042009', 2, '2015-11-06 03:31:40', '0000-00-00 00:00:00');

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

--
-- Dumping data for table `nilai`
--

INSERT INTO `nilai` (`id_nilai`, `nilai`, `nis`, `id_pelajaran`, `id_kelas`, `id_semester`, `id_tahun_ajaran`, `tgl_upload`) VALUES
(6, 60, '15.11.0605.1734', 3, 3989, 1, 3, '2015-11-06 06:20:21'),
(7, 89, '12345', 3, 3989, 1, 3, '2015-11-06 06:20:21'),
(8, 78, '15.11.0612.1851', 3, 3989, 1, 3, '2015-11-06 06:20:21'),
(9, 77, '12345', 4, 3989, 1, 3, '2015-11-06 06:45:00'),
(10, 55, '15.11.0605.1734', 4, 3989, 1, 3, '2015-11-06 06:45:00'),
(11, 44, '15.11.0612.1851', 4, 3989, 1, 3, '2015-11-06 06:45:00'),
(12, 98, '12345', 7, 3989, 1, 3, '2015-11-06 06:46:09'),
(13, 89, '15.11.0605.1734', 7, 3989, 1, 3, '2015-11-06 06:46:09'),
(14, 78, '15.11.0612.1851', 7, 3989, 1, 3, '2015-11-06 06:46:09');

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

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nis`, `password`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `alamat`, `tahun_masuk`, `foto`, `no_ktp`, `id_tahun_ajaran`, `id_kelas`, `id_semester`, `tgl_upload`, `tgl_edit`) VALUES
('12345', '123', 'Sandy', 'Laki-laki', 'siut', '23-12-1992', '', '2014/2015', 'abstract_0012.jpg', '', 3, 3989, 1, '0000-00-00 00:00:00', '2015-11-06 08:40:57'),
('15.11.0605.1734', '15.11.0605.1734', 'tes', 'Laki-laki', '', '', '', '2014/2015', 'abstract_0011.jpg', '222', 3, 3989, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
('15.11.0612.1851', 'sdfuy', 'as', 'Laki-laki', '', '', '', '2014/2015', 'abstract_0028.jpg', '222', 3, 3989, 1, '0000-00-00 00:00:00', '2015-11-06 12:30:20');

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
(1, 'animal_0046.jpg'),
(2, 'animal_0034.jpg'),
(3, 'abstract_nko_05.jpg'),
(4, 'abstract_nko_19.jpg'),
(5, 'abstract_nko_03.jpg');

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
-- Dumping data for table `wali`
--

INSERT INTO `wali` (`no_ktp`, `password`, `nama`, `pekerjaan`, `email`, `tlp`, `hp`, `tgl_upload`) VALUES
('', '', '', '', '', '', '', '2015-11-06 12:04:44'),
('222', '555', '', '', '', '', '', '2015-11-06 08:40:57'),
('9893', '9893', '', '', '', '', '', '2015-11-06 05:17:34');

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
