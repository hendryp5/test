-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2017 at 03:59 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pmbjm`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id_user` int(11) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(32) NOT NULL,
  `level` varchar(10) NOT NULL,
  `aktifasi` varchar(5) NOT NULL,
  `nisn` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id_user`, `username`, `password`, `level`, `aktifasi`, `nisn`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin', 'Y', '0'),
(2, 'superadmin', 'c20ad4d76fe97759aa27a0c99bff6710', 'superadmin', 'Y', '0'),
(17, 'uzumaki', 'c20ad4d76fe97759aa27a0c99bff6710', 'member', 'Y', '121313'),
(18, 'adul', '202cb962ac59075b964b07152d234b70', 'member', 'Y', '1241241252');

-- --------------------------------------------------------

--
-- Table structure for table `tberkas`
--

CREATE TABLE `tberkas` (
  `id_berkas` int(11) NOT NULL,
  `nisn` int(20) NOT NULL,
  `formulir_pendaftaran` text NOT NULL,
  `pas_foto` text NOT NULL,
  `ijazah` text NOT NULL,
  `rapor` text NOT NULL,
  `akta` text NOT NULL,
  `ket_formulir_pendaftaran` varchar(3) NOT NULL,
  `ket_pas_foto` varchar(3) NOT NULL,
  `ket_ijazah` varchar(3) NOT NULL,
  `ket_rapor` varchar(3) NOT NULL,
  `ket_akta` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tberkas`
--

INSERT INTO `tberkas` (`id_berkas`, `nisn`, `formulir_pendaftaran`, `pas_foto`, `ijazah`, `rapor`, `akta`, `ket_formulir_pendaftaran`, `ket_pas_foto`, `ket_ijazah`, `ket_rapor`, `ket_akta`) VALUES
(3, 12341, '94a9d423350479bac3197a2395a471cd.jpg', '9cc4046a509007969376b102f3bd965b.jpg', '99b651f3cd27ba668d0dcdb5856b9bee.pdf', 'aae7ab79d4ca81722ed96fc43ec02565.pdf', 'eceb56edde7ccce4377c6465d8a82005.png', 'Y', 'Y', 'Y', 'Y', 'Y');

-- --------------------------------------------------------

--
-- Table structure for table `tformulirpendaftaran`
--

CREATE TABLE `tformulirpendaftaran` (
  `id_formulir` int(11) NOT NULL,
  `no_registrasi` varchar(20) NOT NULL,
  `nama_mahasiswa` varchar(32) NOT NULL,
  `nik` varchar(32) NOT NULL,
  `nisn` varchar(32) NOT NULL,
  `siswa_ekselarasi` varchar(5) NOT NULL,
  `jenis_kelamin` varchar(12) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `tlahir` varchar(20) NOT NULL,
  `tgllahir` date NOT NULL,
  `alamat` text NOT NULL,
  `provinsi` text NOT NULL,
  `kabupaten` text NOT NULL,
  `kecamatan` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon_rumah` int(13) NOT NULL,
  `telepon_pribadi` int(13) NOT NULL,
  `sekolah` varchar(32) NOT NULL,
  `jurusan` varchar(32) NOT NULL,
  `tahun_lulus` varchar(4) NOT NULL,
  `peringkat1` varchar(3) NOT NULL,
  `peringkat2` varchar(3) NOT NULL,
  `peringkat3` varchar(3) NOT NULL,
  `peringkat4` varchar(3) NOT NULL,
  `peringkat5` varchar(3) NOT NULL,
  `jml1` int(3) NOT NULL,
  `jml2` int(3) NOT NULL,
  `jml3` int(3) NOT NULL,
  `jml4` int(3) NOT NULL,
  `jml5` int(3) NOT NULL,
  `rata1` varchar(5) NOT NULL,
  `rata2` varchar(5) NOT NULL,
  `rata3` varchar(5) NOT NULL,
  `rata4` varchar(5) NOT NULL,
  `rata5` varchar(5) NOT NULL,
  `mtk1` varchar(5) NOT NULL,
  `mtk2` varchar(5) NOT NULL,
  `mtk3` varchar(5) NOT NULL,
  `mtk4` varchar(5) NOT NULL,
  `mtk5` varchar(5) NOT NULL,
  `bi1` varchar(5) NOT NULL,
  `bi2` varchar(5) NOT NULL,
  `bi3` varchar(5) NOT NULL,
  `bi4` varchar(5) NOT NULL,
  `bi5` varchar(5) NOT NULL,
  `bing1` varchar(5) NOT NULL,
  `bing2` varchar(5) NOT NULL,
  `bing3` varchar(5) NOT NULL,
  `bing4` varchar(5) NOT NULL,
  `bing5` varchar(5) NOT NULL,
  `lomba1` int(11) NOT NULL,
  `lomba2` int(11) NOT NULL,
  `lomba3` int(11) NOT NULL,
  `lomba4` int(11) NOT NULL,
  `skala1` int(11) NOT NULL,
  `skala2` int(11) NOT NULL,
  `skala3` int(11) NOT NULL,
  `skala4` int(11) NOT NULL,
  `jenis1` int(11) NOT NULL,
  `jenis2` int(11) NOT NULL,
  `jenis3` int(11) NOT NULL,
  `jenis4` int(11) NOT NULL,
  `juara1` int(11) NOT NULL,
  `juara2` int(11) NOT NULL,
  `juara3` int(11) NOT NULL,
  `juara4` int(11) NOT NULL,
  `tahune1` int(11) NOT NULL,
  `tahune2` int(11) NOT NULL,
  `tahune3` int(11) NOT NULL,
  `tahune4` int(11) NOT NULL,
  `nama_ayah` varchar(32) NOT NULL,
  `nama_ibu` varchar(32) NOT NULL,
  `pilihan1` varchar(32) NOT NULL,
  `pilihan2` varchar(32) NOT NULL,
  `sudah` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tformulirpendaftaran`
--

INSERT INTO `tformulirpendaftaran` (`id_formulir`, `no_registrasi`, `nama_mahasiswa`, `nik`, `nisn`, `siswa_ekselarasi`, `jenis_kelamin`, `agama`, `tlahir`, `tgllahir`, `alamat`, `provinsi`, `kabupaten`, `kecamatan`, `email`, `telepon_rumah`, `telepon_pribadi`, `sekolah`, `jurusan`, `tahun_lulus`, `peringkat1`, `peringkat2`, `peringkat3`, `peringkat4`, `peringkat5`, `jml1`, `jml2`, `jml3`, `jml4`, `jml5`, `rata1`, `rata2`, `rata3`, `rata4`, `rata5`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `bi1`, `bi2`, `bi3`, `bi4`, `bi5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `lomba1`, `lomba2`, `lomba3`, `lomba4`, `skala1`, `skala2`, `skala3`, `skala4`, `jenis1`, `jenis2`, `jenis3`, `jenis4`, `juara1`, `juara2`, `juara3`, `juara4`, `tahune1`, `tahune2`, `tahune3`, `tahune4`, `nama_ayah`, `nama_ibu`, `pilihan1`, `pilihan2`, `sudah`) VALUES
(8, '1/POLITEKNIK/2017', 'Hendry Uzumaki', '131212', '121313', '', '', '', '', '0000-00-00', '', '', '', '', 'hendry_ptp@yahoo.co.id', 0, 0, '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, '', '', '', '', 'belum'),
(9, '1/POLITEKNIK/2017', 'andri', '2312414141', '1241241252', 'ya', 'Laki-laki', 'islam', 'pelaihari', '0000-00-00', 'pelaihari', 'kalimantan selatan', 'pelaihari', 'pelaihari', 'andri@ymail.com', 0, 2147483647, 'smkn 1 plh', 'ipa', '2014', '1', '2', '1', '1', '1', 12, 13, 12, 12, 12, '7', '7', '7', '7', '7', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 'ADUL', 'IMAH', 'Teknik Informatika', 'Teknologi Industri Pertanian', 'sudah');

-- --------------------------------------------------------

--
-- Table structure for table `tjurusan`
--

CREATE TABLE `tjurusan` (
  `id_jurusan` int(11) NOT NULL,
  `nama_jurusan` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tjurusan`
--

INSERT INTO `tjurusan` (`id_jurusan`, `nama_jurusan`) VALUES
(3, ' Teknik Informatika'),
(4, ' Mesin dan Otomotif'),
(5, ' Teknik Industri Pertanian'),
(6, ' Akutansi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `tberkas`
--
ALTER TABLE `tberkas`
  ADD PRIMARY KEY (`id_berkas`);

--
-- Indexes for table `tformulirpendaftaran`
--
ALTER TABLE `tformulirpendaftaran`
  ADD PRIMARY KEY (`id_formulir`);

--
-- Indexes for table `tjurusan`
--
ALTER TABLE `tjurusan`
  ADD PRIMARY KEY (`id_jurusan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `tberkas`
--
ALTER TABLE `tberkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tformulirpendaftaran`
--
ALTER TABLE `tformulirpendaftaran`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `tjurusan`
--
ALTER TABLE `tjurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
