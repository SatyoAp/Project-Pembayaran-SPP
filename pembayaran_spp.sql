-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2022 at 06:05 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pembayaran_spp`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbpembayaran`
--

CREATE TABLE `tbpembayaran` (
  `nofaktur` int(30) NOT NULL,
  `nama_siswa` varchar(30) NOT NULL,
  `id_petugas` varchar(30) NOT NULL,
  `nis` int(30) NOT NULL,
  `tanggal` date NOT NULL,
  `bulan` varchar(30) NOT NULL,
  `total_bayar` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpembayaran`
--

INSERT INTO `tbpembayaran` (`nofaktur`, `nama_siswa`, `id_petugas`, `nis`, `tanggal`, `bulan`, `total_bayar`) VALUES
(14523, 'Intan', 'AA001', 214576, '2022-07-09', 'Juli', 200000),
(160722, 'Agus', 'AA001', 214574, '2022-07-16', 'Agustus', 200000),
(214568, 'Fajar', 'P0045', 214568, '2020-12-17', 'Januari', 200000),
(214573, 'Bambang', 'P0090', 214573, '2021-01-01', 'Januari', 200000),
(907001, 'Farah Nur Zahra', 'AA001', 219080, '2022-07-17', 'September', 200000),
(908071, 'Farah Nur Zahra', 'AA001', 219080, '2022-07-17', 'November', 200000),
(221100888, 'tanti', 'AA001', 221155, '2022-07-19', 'Januari', 200000);

-- --------------------------------------------------------

--
-- Table structure for table `tbpetugas`
--

CREATE TABLE `tbpetugas` (
  `id_petugas` varchar(20) NOT NULL,
  `nama_petugas` varchar(35) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `email` varchar(25) NOT NULL,
  `notlp` int(30) NOT NULL,
  `username` varchar(30) DEFAULT NULL,
  `sandi` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbpetugas`
--

INSERT INTO `tbpetugas` (`id_petugas`, `nama_petugas`, `alamat`, `email`, `notlp`, `username`, `sandi`) VALUES
('AA001', 'Mr Bean', 'Inggris', 'bean@gmail.com', 25871578, 'bean', 'bean123'),
('P0013', 'yanto', 'kebumen', 'yanto@gmail.com', 897675677, 'yanto', 'yanto123'),
('P0023', 'Nadelyne ', 'Purwokerto Utara', 'nadelyne@gmail.com', 858388607, 'nadelyne', 'nadelyne123'),
('P0045', 'Tanti Putri', 'Purwokerto ', 'Tanti@gmail.com', 838388607, 'tanti', 'tanti123'),
('P0070', 'Gisela Alma', 'Wangon', 'gisela@gmail.com', 858388607, 'gisela', 'gisela123'),
('P0090', 'Aji Saputro', 'sumbang', 'aji@gmail.com', 2147483647, 'aji', 'aji123');

-- --------------------------------------------------------

--
-- Table structure for table `tbsiswa`
--

CREATE TABLE `tbsiswa` (
  `nis` int(30) NOT NULL,
  `nama_siswa` varchar(35) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(30) NOT NULL,
  `kelas` varchar(20) NOT NULL,
  `email` varchar(35) NOT NULL,
  `no_tlp` varchar(15) NOT NULL,
  `tahun_masuk` year(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbsiswa`
--

INSERT INTO `tbsiswa` (`nis`, `nama_siswa`, `alamat`, `jenis_kelamin`, `kelas`, `email`, `no_tlp`, `tahun_masuk`) VALUES
(71324, 'Sekar', 'Sampang', 'Perempuan', 'SA21A', 'ada@gmail', '089538193', 2021),
(214567, 'Abid', 'Purwokerto', 'Laki-laki', 'SS21C', 'abid@gmail.com', '083625116', 2021),
(214568, 'Fajar', 'Banjar', 'Laki-Laki', 'SS21A', 'fajar@gmail.com', '086364229', 2021),
(214569, 'Satrio', 'Purwokerto', 'Laki-Laki', 'SS21A', 'satrio@gmail.com', '087605077', 2021),
(214570, 'Doni', 'Purwokerto', 'Laki-Laki', 'SS21A', 'doni@gmail.com', '089265426', 2021),
(214571, 'Rski', 'Kebocoran', 'Laki-Laki', 'SS21A', 'rski@gmail.com', '089576555', 2021),
(214572, 'Riska', 'Rempoah', 'Perempuan', 'SS21A', 'riska@gmail.com', '085686783', 2021),
(214573, 'Bambang', 'Pandak', 'Laki-Laki', 'SN21B', 'bambang@gmail.com', '086456674', 2021),
(214574, 'Agus', 'Kemutug Kidul', 'Laki-Laki', 'SN21B', 'agus@gmail.com', '085789323', 2021),
(214575, 'Putri', 'Kemutug Lor', 'Perempuan', 'SN21B', 'putri@gmail.com', '087648594', 2021),
(214576, 'Intan', 'Karang salam', 'Perempuan', 'SN21B', 'intan@gmail.com', '087567833', 2021),
(214577, 'Fitri', 'Kotayasa', 'Perempuan', 'SN21B', 'fitri@gmail.com', '082748384', 2021),
(214578, 'Prima', 'Karangmangu', 'Perempuan', 'SN21B', 'prima@gmail.com', '085678384', 2021),
(214579, 'Eka', 'Ketenger', 'Perempuan', 'SP21C', 'eka@gmail.com', '087537483', 2021),
(214580, 'Siti', 'Pamijen', 'Perempuan', 'SP21C', 'siti@gmail.com', '084638484', 2021),
(214581, 'Adelia', 'Bumen', 'Perempuan', 'SP21C', 'adelia@gmail.com', '087893648', 2021),
(219080, 'Farah Nur Zahra', 'Cipayung', 'Perempuan', 'XI TKJ 3', 'Farah22@gmail.com', '089787434', 2021),
(221155, 'tanti', 'cilacap', 'Perempuan', 'SS21B', 'tanti@gmail.com', '086893784', 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD PRIMARY KEY (`nofaktur`),
  ADD KEY `id_petugas` (`id_petugas`),
  ADD KEY `nis` (`nis`);

--
-- Indexes for table `tbpetugas`
--
ALTER TABLE `tbpetugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  ADD PRIMARY KEY (`nis`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  MODIFY `nofaktur` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221100889;

--
-- AUTO_INCREMENT for table `tbsiswa`
--
ALTER TABLE `tbsiswa`
  MODIFY `nis` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221156;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbpembayaran`
--
ALTER TABLE `tbpembayaran`
  ADD CONSTRAINT `tbpembayaran_ibfk_1` FOREIGN KEY (`id_petugas`) REFERENCES `tbpetugas` (`id_petugas`),
  ADD CONSTRAINT `tbpembayaran_ibfk_2` FOREIGN KEY (`nis`) REFERENCES `tbsiswa` (`nis`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
