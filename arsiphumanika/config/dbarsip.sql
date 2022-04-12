-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2020 at 01:49 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbarsip`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_departemen`
--

CREATE TABLE `tbl_departemen` (
  `id_departemen` int(11) NOT NULL,
  `nama_departemen` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_departemen`
--

INSERT INTO `tbl_departemen` (`id_departemen`, `nama_departemen`) VALUES
(1, 'INTI'),
(2, 'KESAMA'),
(3, 'Litbang'),
(4, 'Infokom'),
(6, 'JASROH'),
(16, 'WB');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_inventaris`
--

CREATE TABLE `tbl_inventaris` (
  `id_inventaris` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `kondisi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_inventaris`
--

INSERT INTO `tbl_inventaris` (`id_inventaris`, `nama_barang`, `jumlah`, `kondisi`, `keterangan`) VALUES
(0, 'Lemari Rak Kayu', '1', 'Baik', 'Ada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lpj`
--

CREATE TABLE `tbl_lpj` (
  `id_lpj` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_kegiatann` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lpj`
--

INSERT INTO `tbl_lpj` (`id_lpj`, `id_departemen`, `nama_kegiatann`, `file`) VALUES
(8, 4, 'lpj desain kaos', '5f54da1bc0f59.pdf'),
(9, 1, 'dsfd', '5f5b02edca5b1.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_penjadwalan`
--

CREATE TABLE `tbl_penjadwalan` (
  `id_penjadwalan` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `tanggal_kegiatan` date NOT NULL,
  `keterangan` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_penjadwalan`
--

INSERT INTO `tbl_penjadwalan` (`id_penjadwalan`, `id_departemen`, `nama_kegiatan`, `tanggal_kegiatan`, `keterangan`) VALUES
(1, 4, 'i care', '2020-08-11', 'Belum Terlaksana');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposal`
--

CREATE TABLE `tbl_proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_proposal`
--

INSERT INTO `tbl_proposal` (`id_proposal`, `id_departemen`, `nama_kegiatan`, `file`) VALUES
(2, 6, 'proposal ldkm', '5f5b07417706a.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_keluar`
--

CREATE TABLE `tbl_surat_keluar` (
  `id_surat_keluar` int(11) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `tujuan` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_surat_keluar`
--

INSERT INTO `tbl_surat_keluar` (`id_surat_keluar`, `no_surat`, `tanggal_surat`, `perihal`, `tujuan`, `file`) VALUES
(1, '2019/V/009', '2020-08-27', 'Ulang Tahun Humanika ke-26', 'SISKOM', '5f4f72161e9c8.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_surat_masuk`
--

CREATE TABLE `tbl_surat_masuk` (
  `id_surat_masuk` int(11) NOT NULL,
  `no_surat` varchar(30) NOT NULL,
  `tanggal_surat` date NOT NULL,
  `tanggal_diterima` date NOT NULL,
  `perihal` varchar(100) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_instansi` varchar(50) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_surat_masuk`
--

INSERT INTO `tbl_surat_masuk` (`id_surat_masuk`, `no_surat`, `tanggal_surat`, `tanggal_diterima`, `perihal`, `id_departemen`, `nama_instansi`, `file`) VALUES
(2, '2020/IX/010', '2020-08-25', '2020-08-26', 'RAPAT KORWIL PERMIKOMNAS xx', 2, 'PERMIKOMNAS', '5f4f504feb863.jpg'),
(3, '2020/X/003', '2020-08-04', '2020-09-03', 'UNDANGAN RAPAT PORISTA', 6, 'BEM IST AKPRIND', '5f4f49c5c6042.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `level` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id_user`, `username`, `password`, `level`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'aldo', 'septi', 'user'),
(4, 'anggy', 'humanika', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tbl_lpj`
--
ALTER TABLE `tbl_lpj`
  ADD PRIMARY KEY (`id_lpj`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tbl_penjadwalan`
--
ALTER TABLE `tbl_penjadwalan`
  ADD PRIMARY KEY (`id_penjadwalan`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  ADD PRIMARY KEY (`id_proposal`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  ADD PRIMARY KEY (`id_surat_keluar`);

--
-- Indexes for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD PRIMARY KEY (`id_surat_masuk`),
  ADD KEY `id_departemen` (`id_departemen`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `tbl_lpj`
--
ALTER TABLE `tbl_lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tbl_penjadwalan`
--
ALTER TABLE `tbl_penjadwalan`
  MODIFY `id_penjadwalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_lpj`
--
ALTER TABLE `tbl_lpj`
  ADD CONSTRAINT `tbl_lpj_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tbl_departemen` (`id_departemen`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_penjadwalan`
--
ALTER TABLE `tbl_penjadwalan`
  ADD CONSTRAINT `tbl_penjadwalan_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tbl_departemen` (`id_departemen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  ADD CONSTRAINT `tbl_proposal_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tbl_departemen` (`id_departemen`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  ADD CONSTRAINT `tbl_surat_masuk_ibfk_1` FOREIGN KEY (`id_departemen`) REFERENCES `tbl_departemen` (`id_departemen`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
