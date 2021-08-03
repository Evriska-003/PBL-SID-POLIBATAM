-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2021 at 09:03 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sidpolbat`
--

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nidn` bigint(50) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `notelp` bigint(50) NOT NULL,
  `role` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nidn`, `nama`, `email`, `notelp`, `role`) VALUES
(115143, 'Ahmad Hamim Thohari, S.Tr., M.', '', 1234567890, 'HT'),
(117192, 'Maidel Fani, S.Pd., M.Kom', '', 0, 'MF'),
(119222, 'Dodi Prima Resda, S.Pd., M.Kom', '', 0, 'DP'),
(119224, 'Swono Sibagariang, S.Kom., M.K', '', 0, 'SS');

-- --------------------------------------------------------

--
-- Table structure for table `jadwal_matkul`
--

CREATE TABLE `jadwal_matkul` (
  `id_jadwal` int(11) NOT NULL,
  `kode_matkul` varchar(11) NOT NULL,
  `matkul` varchar(40) NOT NULL,
  `semester` int(11) NOT NULL,
  `tahun_kurikulum` int(11) NOT NULL,
  `ambil` int(11) NOT NULL,
  `max` int(11) NOT NULL,
  `kul_gab` int(11) NOT NULL,
  `dosen` varchar(50) NOT NULL,
  `laboran` varchar(50) NOT NULL,
  `plp_labor` varchar(50) NOT NULL,
  `hari` varchar(50) NOT NULL,
  `jam_awal` int(11) NOT NULL,
  `jam` int(11) NOT NULL,
  `ruangan` varchar(100) NOT NULL,
  `dosen_dua` varchar(100) NOT NULL,
  `haridua` varchar(100) NOT NULL,
  `jamdua_awal` int(100) NOT NULL,
  `jamdua_akhir` int(100) NOT NULL,
  `ruangdua` varchar(100) NOT NULL,
  `sesi_teori` int(100) NOT NULL,
  `sesi_prak` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jadwal_matkul`
--

INSERT INTO `jadwal_matkul` (`id_jadwal`, `kode_matkul`, `matkul`, `semester`, `tahun_kurikulum`, `ambil`, `max`, `kul_gab`, `dosen`, `laboran`, `plp_labor`, `hari`, `jam_awal`, `jam`, `ruangan`, `dosen_dua`, `haridua`, `jamdua_awal`, `jamdua_akhir`, `ruangdua`, `sesi_teori`, `sesi_prak`) VALUES
(1, 'IF101', 'DASAR PEMROGRAMAN', 1, 2019, 4, 8, 0, 'Metta Santiputri, S.T., M.Sc., Ph.D', 'Festy Winda Sari, S.Tr', '', 'senin', 13, 15, 'Lab 608', 'Ahmad Hamim Thohari, S.Tr., M.T', 'rabu', 8, 9, 'Kelas 606', 3, 4);

-- --------------------------------------------------------

--
-- Table structure for table `matkul`
--

CREATE TABLE `matkul` (
  `id_matkul` int(100) NOT NULL,
  `kode` varchar(10) NOT NULL,
  `jenjang` varchar(30) CHARACTER SET latin1 NOT NULL,
  `prodi` varchar(50) CHARACTER SET latin1 NOT NULL,
  `tahun` int(30) NOT NULL,
  `matkul` varchar(50) CHARACTER SET latin1 NOT NULL,
  `matkul_ing` varchar(50) CHARACTER SET latin1 NOT NULL,
  `sesi_teori` int(10) NOT NULL,
  `sesi_prak` int(10) NOT NULL,
  `sesi_total` int(10) NOT NULL,
  `sks_teori` int(10) NOT NULL,
  `sks_prak` int(10) NOT NULL,
  `sks_total` int(10) NOT NULL,
  `semester` int(10) NOT NULL,
  `jenis` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `matkul`
--

INSERT INTO `matkul` (`id_matkul`, `kode`, `jenjang`, `prodi`, `tahun`, `matkul`, `matkul_ing`, `sesi_teori`, `sesi_prak`, `sesi_total`, `sks_teori`, `sks_prak`, `sks_total`, `semester`, `jenis`, `role`) VALUES
(1, 'IF101', 'D3', 'Teknik Informatika', 2019, 'DASAR PEMROGRAMAN', 'FUNDAMENTAL PROGRAMMING', 3, 4, 7, 3, 1, 4, 1, 'Matakuliah Teori - Keahlian', 'IF'),
(2, 'IF206', 'D3', 'Teknik Informatika', 2019, 'REKAYASA PERANGKAT LUNAK', 'SOFTWARE ENGINEERING', 2, 4, 6, 1, 2, 3, 2, 'Matakuliah Praktek - Keahlian', 'IF'),
(3, 'MJ502', 'D4', 'Multimedia', 2019, 'PERANCANGAN WEB', 'WEB DESIGN', 0, 4, 4, 0, 1, 1, 1, 'Matakuliah Praktek - Keahlian', 'IF'),
(4, 'EL100', 'D3', 'Teknik Elektronika', 2019, 'MATEMATIKA DASAR', 'BASIC MATHEMATIC', 4, 0, 4, 4, 0, 3, 1, 'Matakuliah Teori - MKDU', 'EL'),
(5, 'EL200', 'D3', 'Teknik Elektronika', 2019, 'KALKULUS', 'CALCULUS', 2, 1, 3, 2, 1, 3, 2, 'Matakuliah Teori - Keahlian', 'EL'),
(6, 'IF418', 'D3', 'Teknik Informatika', 2019, 'PROYEK AKHIR I', 'FINAL PROJECT I', 4, 0, 4, 4, 0, 4, 4, 'Matakuliah Teori - Keahlian', 'IF');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_mahasiswa`
--

CREATE TABLE `tbl_mahasiswa` (
  `id_mhs` int(50) NOT NULL,
  `nim` bigint(100) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `kelas` varchar(30) NOT NULL,
  `jenjang` varchar(30) NOT NULL,
  `prodi` varchar(30) NOT NULL,
  `tingkat` varchar(30) NOT NULL,
  `paralel` varchar(10) NOT NULL,
  `dosen_wali` varchar(30) NOT NULL,
  `status` varchar(10) NOT NULL,
  `tgllahir` date NOT NULL,
  `tmptlahir` varchar(10) NOT NULL,
  `tglmasuk` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `warga` varchar(10) NOT NULL,
  `agama` varchar(10) NOT NULL,
  `goldar` varchar(10) NOT NULL,
  `status_marital` varchar(50) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  `notelp` bigint(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `anak_ke` bigint(10) NOT NULL,
  `sma/smk` varchar(20) NOT NULL,
  `beasiswa` varchar(30) NOT NULL,
  `ayah` varchar(30) NOT NULL,
  `kerja_ayah` varchar(30) NOT NULL,
  `hasil_ayah` bigint(20) NOT NULL,
  `ketayah` varchar(50) NOT NULL,
  `ibu` varchar(30) NOT NULL,
  `kerja_ibu` varchar(20) NOT NULL,
  `hasil_ibu` bigint(20) NOT NULL,
  `ketibu` varchar(50) NOT NULL,
  `alamat_ortu` varchar(30) NOT NULL,
  `notelp_ortu` bigint(20) NOT NULL,
  `no_ijazah` bigint(20) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `tgllulus` date NOT NULL,
  `lulus_sma` int(20) NOT NULL,
  `jalur_penerimaan` varchar(30) NOT NULL,
  `nik` bigint(20) NOT NULL,
  `tahunlhr_ayah` int(10) NOT NULL,
  `tahunlhr_ibu` int(10) NOT NULL,
  `pend_ayah` varchar(10) NOT NULL,
  `pend_ibu` varchar(10) NOT NULL,
  `nisn` bigint(30) NOT NULL,
  `nik_ayah` bigint(30) NOT NULL,
  `nik_ibu` bigint(30) NOT NULL,
  `jenis_daftar` varchar(30) NOT NULL,
  `angkatan` int(10) NOT NULL,
  `role` varchar(50) NOT NULL,
  `kelurahan` varchar(100) NOT NULL,
  `kecamatan` varchar(50) NOT NULL,
  `pos` bigint(50) NOT NULL,
  `jmlh_anak` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_mahasiswa`
--

INSERT INTO `tbl_mahasiswa` (`id_mhs`, `nim`, `nama`, `kelas`, `jenjang`, `prodi`, `tingkat`, `paralel`, `dosen_wali`, `status`, `tgllahir`, `tmptlahir`, `tglmasuk`, `gender`, `warga`, `agama`, `goldar`, `status_marital`, `alamat`, `notelp`, `email`, `anak_ke`, `sma/smk`, `beasiswa`, `ayah`, `kerja_ayah`, `hasil_ayah`, `ketayah`, `ibu`, `kerja_ibu`, `hasil_ibu`, `ketibu`, `alamat_ortu`, `notelp_ortu`, `no_ijazah`, `username`, `password`, `tgllulus`, `lulus_sma`, `jalur_penerimaan`, `nik`, `tahunlhr_ayah`, `tahunlhr_ibu`, `pend_ayah`, `pend_ibu`, `nisn`, `nik_ayah`, `nik_ibu`, `jenis_daftar`, `angkatan`, `role`, `kelurahan`, `kecamatan`, `pos`, `jmlh_anak`) VALUES
(1, 3311901003, 'Evriska Dayanti', '', 'D3', 'Teknik Informatika', 'Reguler Pagi', 'A', 'Swono Sibagariang', 'Aktif', '2001-06-18', '  Batam  ', '2019-06-18', 'perempuan', 'WNI', 'Islam', 'A', 'Belum Kawin', 'Bengkong Kolam', 895612915501, 'evriska@gmail.com', 1, 'SMAN 8 Batam', 'Beasiswa Bank Indonesia', 'M.rino', 'kerja', 4000000, 'hidup', 'Evi', 'IRT', 0, 'hidup', 'Bengkong kolam', 89735726352, 0, '', '', '0000-00-00', 2019, 'UMPB', 217109263572, 1972, 1975, 'SMA', 'SMA', 0, 0, 0, 'Peserta Didik Baru', 2019, 'EV', 'Sadai', 'Bengkong', 29432, 3),
(3, 3311901019, 'Ayusda Renjani', '', 'D3', 'Teknik Informatika', 'Reguler Pagi', 'A', 'Swono Sibagariang', 'Aktif', '0000-00-00', '', '2019-03-18', '', '', '', 'B', '', '', 0, '', 0, '', '', '', '', 0, '', '', '', 0, '', '', 0, 0, '3311901019', '3311901019', '0000-00-00', 0, 'UMPB', 0, 0, 0, '', '', 0, 0, 0, 'Peserta Didik Baru', 2019, 'AY', '', '', 0, 0),
(4, 3311901006, 'Risma Ananda', '', 'D3', 'Teknik Informatika', 'Reguler Pagi', 'A', 'Swono Sibagariang', 'Aktif', '0000-00-00', '', '2019-03-16', '', '', '', '', '', '', 0, '', 0, '', '', '', '', 0, '', '', '', 0, '', '', 0, 0, '', '', '0000-00-00', 0, '', 0, 0, 0, '', '', 0, 0, 0, 'Peserta Didik Baru', 0, '', '', '', 0, 0),
(5, 4311901005, 'Samudra Abriliawan', '', 'D4', 'Multimedia', 'Reguler Pagi', 'A', 'Agung Riyadi', 'Tidak Akti', '0000-00-00', '', '2019-03-16', '', '', '', '', '', '', 0, '', 0, '', '', '', '', 0, '', '', '', 0, '', '', 0, 0, '', '', '0000-00-00', 0, '', 0, 0, 0, '', '', 0, 0, 0, 'Peserta Didik Baru', 0, '', '', '', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id_user` int(10) NOT NULL,
  `username` varchar(30) CHARACTER SET latin1 NOT NULL,
  `password` varchar(30) CHARACTER SET latin1 NOT NULL,
  `nama_lengkap` varchar(30) CHARACTER SET latin1 NOT NULL,
  `role` varchar(50) NOT NULL,
  `jurusan` varchar(50) NOT NULL,
  `inisial` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id_user`, `username`, `password`, `nama_lengkap`, `role`, `jurusan`, `inisial`) VALUES
(1, 'admin', 'Admin12345', 'admin', 'admin', '', ''),
(2, 'IF119224', '12345', 'Swono Sibagariang, S.Kom., M.K', 'dosen', 'IF', 'SS'),
(3, 'IF115143', '12345', 'Ahmad Hamim Thohari, S.Tr., M.', 'dosen', 'IF', 'HT'),
(4, '097643', '12345', 'Joice', 'dosen', 'MB', ''),
(5, '3311901019', '3311901019', 'Ayusda', 'mahasiswa', 'IF', 'AY'),
(6, '3311901003', '3311901003', 'Evriska', 'mahasiswa', 'IF', 'EV'),
(7, '3311901006', '3311901006', 'risma ananda harby', 'mahasiswa', 'IF', 'RA'),
(8, 'adminIF', 'IF12345', 'adminIF', 'admin', 'IF', ''),
(9, 'adminEL', 'EL12345', 'adminEL', 'admin', 'EL', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nidn`);

--
-- Indexes for table `jadwal_matkul`
--
ALTER TABLE `jadwal_matkul`
  ADD PRIMARY KEY (`id_jadwal`);

--
-- Indexes for table `matkul`
--
ALTER TABLE `matkul`
  ADD PRIMARY KEY (`id_matkul`);

--
-- Indexes for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dosen`
--
ALTER TABLE `dosen`
  MODIFY `nidn` bigint(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=119225;

--
-- AUTO_INCREMENT for table `matkul`
--
ALTER TABLE `matkul`
  MODIFY `id_matkul` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_mahasiswa`
--
ALTER TABLE `tbl_mahasiswa`
  MODIFY `id_mhs` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id_user` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
