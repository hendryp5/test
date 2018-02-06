-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 05, 2017 at 06:10 AM
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
(22, 'adul', 'f970e2767d0cfe75876ea857f92e319b', 'member', 'Y', '123'),
(23, 'api', 'c20ad4d76fe97759aa27a0c99bff6710', 'member', 'Y', '41412414'),
(30, 'adis12', 'f970e2767d0cfe75876ea857f92e319b', 'member', 'Y', '7886'),
(31, 'agia', 'f970e2767d0cfe75876ea857f92e319b', 'member', 'Y', '12421424');

-- --------------------------------------------------------

--
-- Table structure for table `tberkas`
--

CREATE TABLE `tberkas` (
  `id_berkas` int(11) NOT NULL,
  `nisn` int(20) NOT NULL,
  `pas_foto` text NOT NULL,
  `ijazah` text NOT NULL,
  `rapor` text NOT NULL,
  `akta` text NOT NULL,
  `kk` text NOT NULL,
  `ktp_orangtua` text NOT NULL,
  `listrik` text NOT NULL,
  `gaji` text NOT NULL,
  `skm` text NOT NULL,
  `kip` text NOT NULL,
  `sertifikat` text NOT NULL,
  `ket_pas_foto` varchar(3) NOT NULL,
  `ket_ijazah` varchar(3) NOT NULL,
  `ket_rapor` varchar(3) NOT NULL,
  `ket_akta` varchar(3) NOT NULL,
  `ket_kk` text NOT NULL,
  `ket_ktp_orangtua` text NOT NULL,
  `ket_listrik` text NOT NULL,
  `ket_gaji` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tberkas`
--

INSERT INTO `tberkas` (`id_berkas`, `nisn`, `pas_foto`, `ijazah`, `rapor`, `akta`, `kk`, `ktp_orangtua`, `listrik`, `gaji`, `skm`, `kip`, `sertifikat`, `ket_pas_foto`, `ket_ijazah`, `ket_rapor`, `ket_akta`, `ket_kk`, `ket_ktp_orangtua`, `ket_listrik`, `ket_gaji`) VALUES
(7, 123, 'c4dfe2c043834dca599b81fde4232da2.jpg', '5ecde1be7b4dc01dbd212f579be94064.png', '63666461da03eea4d45228065d6a171a.pdf', 'f029edf1b8316df09f1f38f567fb70c2.png', '5bdf8c617a8e371497816d830daa05fe.pdf', '432fbd0887d1c44c4e8caa2801a2c031.jpg', '1ecf085016c468c47aa0608cf113b32c.jpg', '583e82e7503a844c483ef2ee0f9ab380.jpg', '', '', '', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y'),
(8, 41412414, 'de8fd0caed9c450a3cdd6c6e269cf162.png', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(9, 7886, '49db4ca48fa90ab0df1a11e113109825.jpg', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(10, 12421424, '801ad55945d4eaa912af93f62e9c6904.jpg', '2e3e5a0b07a6a2db5da919fc4084272e.jpg', '953fd7b3dfdc437f0c7f42490634ede6.jpg', '5f5939c8728eb28acecdffbd3792bb57.jpg', '7979c73862e52e000679fba5506d8fa1.jpg', '94f9581ac17d179d00d4214104a84e63.jpg', 'f147c2e480ef9f0e812426eeeffda337.jpg', 'ec90b240e1411bf694001ec19e807059.jpg', '', '', '', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y', 'Y');

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
  `id_provinsi` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL,
  `id_kecamatan` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `telepon_rumah` int(13) NOT NULL,
  `telepon_pribadi` int(13) NOT NULL,
  `id_sekolah` int(11) NOT NULL,
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
  `lomba1` text NOT NULL,
  `lomba2` text NOT NULL,
  `lomba3` text NOT NULL,
  `lomba4` text NOT NULL,
  `skala1` varchar(32) NOT NULL,
  `skala2` varchar(32) NOT NULL,
  `skala3` varchar(32) NOT NULL,
  `skala4` varchar(32) NOT NULL,
  `jenis1` text NOT NULL,
  `jenis2` text NOT NULL,
  `jenis3` text NOT NULL,
  `jenis4` text NOT NULL,
  `juara1` int(11) NOT NULL,
  `juara2` int(11) NOT NULL,
  `juara3` int(11) NOT NULL,
  `juara4` int(11) NOT NULL,
  `tahune1` int(11) NOT NULL,
  `tahune2` int(11) NOT NULL,
  `tahune3` int(11) NOT NULL,
  `tahune4` int(11) NOT NULL,
  `nama_ayah` varchar(32) NOT NULL,
  `status_ayah` varchar(32) NOT NULL,
  `hubungan_ayah` varchar(32) NOT NULL,
  `pendidikan_ayah` varchar(32) NOT NULL,
  `pekerjaan_ayah` text NOT NULL,
  `pendapat_ayah` varchar(12) NOT NULL,
  `nama_ibu` varchar(32) NOT NULL,
  `status_ibu` varchar(32) NOT NULL,
  `hubungan_ibu` varchar(32) NOT NULL,
  `pendidikan_ibu` varchar(32) NOT NULL,
  `pekerjaan_ibu` text NOT NULL,
  `pendapat_ibu` varchar(12) NOT NULL,
  `nomer_ortu` varchar(13) NOT NULL,
  `jmlh_tanggungan` int(3) NOT NULL,
  `jmlh_tabungan` int(11) NOT NULL,
  `pilihan1` int(11) NOT NULL,
  `pilihan2` int(11) NOT NULL,
  `sudah` varchar(5) NOT NULL,
  `id_tahun` int(11) NOT NULL,
  `lulus` varchar(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tformulirpendaftaran`
--

INSERT INTO `tformulirpendaftaran` (`id_formulir`, `no_registrasi`, `nama_mahasiswa`, `nik`, `nisn`, `siswa_ekselarasi`, `jenis_kelamin`, `agama`, `tlahir`, `tgllahir`, `alamat`, `id_provinsi`, `id_kabupaten`, `id_kecamatan`, `email`, `telepon_rumah`, `telepon_pribadi`, `id_sekolah`, `jurusan`, `tahun_lulus`, `peringkat1`, `peringkat2`, `peringkat3`, `peringkat4`, `peringkat5`, `jml1`, `jml2`, `jml3`, `jml4`, `jml5`, `rata1`, `rata2`, `rata3`, `rata4`, `rata5`, `mtk1`, `mtk2`, `mtk3`, `mtk4`, `mtk5`, `bi1`, `bi2`, `bi3`, `bi4`, `bi5`, `bing1`, `bing2`, `bing3`, `bing4`, `bing5`, `lomba1`, `lomba2`, `lomba3`, `lomba4`, `skala1`, `skala2`, `skala3`, `skala4`, `jenis1`, `jenis2`, `jenis3`, `jenis4`, `juara1`, `juara2`, `juara3`, `juara4`, `tahune1`, `tahune2`, `tahune3`, `tahune4`, `nama_ayah`, `status_ayah`, `hubungan_ayah`, `pendidikan_ayah`, `pekerjaan_ayah`, `pendapat_ayah`, `nama_ibu`, `status_ibu`, `hubungan_ibu`, `pendidikan_ibu`, `pekerjaan_ibu`, `pendapat_ibu`, `nomer_ortu`, `jmlh_tanggungan`, `jmlh_tabungan`, `pilihan1`, `pilihan2`, `sudah`, `id_tahun`, `lulus`) VALUES
(13, '1/POLITEKNIK/2017', 'Andri', '123', '123', 'tidak', 'Laki-laki', 'Islam', 'Pelaihari', '2017-09-15', 'Samudra', 2, 6, 1, 'andri@ymail.com', 0, 90812, 2, 'IPA', '2014', '1', '1', '1', '1', '1', 23, 23, 23, 23, 23, '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '7', '', '7', '7', '7', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 2, 2, 0, 0, 2018, 2012, 0, 0, 'adul', '', '', '', '', '', 'idil', '', '', '', '', '', '', 0, 0, 3, 4, 'sudah', 3, 'T'),
(14, '2/POLITEKNIK/2017', 'adil', '1323', '41412414', 'tidak', 'Laki-laki', 'Islam', 'Pelaihari', '2014-01-31', 'Ptp', 2, 6, 1, 'abdulazisppp720@gmail.com', 0, 192, 2, 'IPA', '2017', '1', '1', '1', '1', '1', 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', '0', 0, 0, 0, 0, 0, 0, 0, 0, 'qwe', 'qw', 'qw', 'qw', 'qw', '12', 'weq', 'qw', 'wq', 'wqw', 'qw', '12', '1312', 0, 12, 3, 0, 'sudah', 3, ''),
(20, '4/POLITEKNIK/2017', 'adis', '34', '7886', 'tidak', 'Perempuan', 'Islam', 'pelaihari', '0000-00-00', 'Ptp', 2, 6, 1, 'andri@ymail.com', 0, 989, 3, 'TKJ', '2016', '1', '1', '1', '1', '', 1, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '11', '1', '1', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 'ajaha', 'jaj', 'jaja', 'ajja', 'ajja', '9929', 'aksak', 'ask', 'ask', 'ask', 'asa', '90', '09', 0, 0, 3, 4, 'sudah', 3, 'Y'),
(21, '4/POLITEKNIK/2017', 'andri pebriyan', '34112244', '12421424', 'ya', 'Laki-laki', 'islam', 'pelaihari', '2017-09-03', 'jln.samuda', 2, 6, 1, 'ansharipoltek@gmail.com', 0, 2147483647, 3, 'IPA', '2017', '1', '11', '1', '1', '1', 11, 1, 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', '', '1', '1', '1', '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0, 0, 'adul', 'HIDUP', 'KANDUNG', 'SMA', 'SUPIR', '1.000.000', 'INA', 'HIDUP', 'KANDUNG', 'SMK', 'KATERING', '1.0000.000', 'INA', 0, 50000, 3, 4, 'sudah', 3, '');

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
(6, ' Akutansi'),
(7, ' Administrasi');

-- --------------------------------------------------------

--
-- Table structure for table `tkabupaten`
--

CREATE TABLE `tkabupaten` (
  `id_kabupaten` int(11) NOT NULL,
  `nama_kabupaten` varchar(32) NOT NULL,
  `id_provinsi` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkabupaten`
--

INSERT INTO `tkabupaten` (`id_kabupaten`, `nama_kabupaten`, `id_provinsi`) VALUES
(6, ' Tanah Laut 2', 2),
(7, ' banjar', 3);

-- --------------------------------------------------------

--
-- Table structure for table `tkecamatan`
--

CREATE TABLE `tkecamatan` (
  `id_kecamatan` int(11) NOT NULL,
  `nama_kecamatan` varchar(32) NOT NULL,
  `id_kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tkecamatan`
--

INSERT INTO `tkecamatan` (`id_kecamatan`, `nama_kecamatan`, `id_kabupaten`) VALUES
(1, ' Pelaiahari', 6);

-- --------------------------------------------------------

--
-- Table structure for table `tprovinsi`
--

CREATE TABLE `tprovinsi` (
  `id_provinsi` int(11) NOT NULL,
  `nama_provinsi` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tprovinsi`
--

INSERT INTO `tprovinsi` (`id_provinsi`, `nama_provinsi`) VALUES
(2, ' Kalimantan Selatan'),
(3, ' Kalimantan Timur');

-- --------------------------------------------------------

--
-- Table structure for table `tsekolah`
--

CREATE TABLE `tsekolah` (
  `id_sekolah` int(11) NOT NULL,
  `nama_sekolah` varchar(50) NOT NULL,
  `id_provinsi` int(11) NOT NULL,
  `id_kabupaten` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tsekolah`
--

INSERT INTO `tsekolah` (`id_sekolah`, `nama_sekolah`, `id_provinsi`, `id_kabupaten`) VALUES
(2, 'SMAN 2 Pelaihari', 2, 6),
(3, ' smkn 1 pelaihari', 2, 6),
(4, ' sma 2 tabalong', 2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `ttahun`
--

CREATE TABLE `ttahun` (
  `id_tahun` int(11) NOT NULL,
  `tahun` varchar(5) NOT NULL,
  `aktif` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ttahun`
--

INSERT INTO `ttahun` (`id_tahun`, `tahun`, `aktif`) VALUES
(2, ' 2016', 'T'),
(3, ' 2017', 'Y'),
(4, ' 2018', 'T');

-- --------------------------------------------------------

--
-- Table structure for table `twaktu`
--

CREATE TABLE `twaktu` (
  `id_waktu` int(11) NOT NULL,
  `hari` varchar(10) NOT NULL,
  `tanggal` varchar(12) NOT NULL,
  `awal` varchar(12) NOT NULL,
  `akhir` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `twaktu`
--

INSERT INTO `twaktu` (`id_waktu`, `hari`, `tanggal`, `awal`, `akhir`) VALUES
(5, ' Kamis    ', '09/20/2017  ', '09/01/2017  ', '09/30/2017');

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
-- Indexes for table `tkabupaten`
--
ALTER TABLE `tkabupaten`
  ADD PRIMARY KEY (`id_kabupaten`);

--
-- Indexes for table `tkecamatan`
--
ALTER TABLE `tkecamatan`
  ADD PRIMARY KEY (`id_kecamatan`);

--
-- Indexes for table `tprovinsi`
--
ALTER TABLE `tprovinsi`
  ADD PRIMARY KEY (`id_provinsi`);

--
-- Indexes for table `tsekolah`
--
ALTER TABLE `tsekolah`
  ADD PRIMARY KEY (`id_sekolah`);

--
-- Indexes for table `ttahun`
--
ALTER TABLE `ttahun`
  ADD PRIMARY KEY (`id_tahun`);

--
-- Indexes for table `twaktu`
--
ALTER TABLE `twaktu`
  ADD PRIMARY KEY (`id_waktu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `tberkas`
--
ALTER TABLE `tberkas`
  MODIFY `id_berkas` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `tformulirpendaftaran`
--
ALTER TABLE `tformulirpendaftaran`
  MODIFY `id_formulir` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `tjurusan`
--
ALTER TABLE `tjurusan`
  MODIFY `id_jurusan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tkabupaten`
--
ALTER TABLE `tkabupaten`
  MODIFY `id_kabupaten` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `tkecamatan`
--
ALTER TABLE `tkecamatan`
  MODIFY `id_kecamatan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tprovinsi`
--
ALTER TABLE `tprovinsi`
  MODIFY `id_provinsi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tsekolah`
--
ALTER TABLE `tsekolah`
  MODIFY `id_sekolah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `ttahun`
--
ALTER TABLE `ttahun`
  MODIFY `id_tahun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `twaktu`
--
ALTER TABLE `twaktu`
  MODIFY `id_waktu` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
