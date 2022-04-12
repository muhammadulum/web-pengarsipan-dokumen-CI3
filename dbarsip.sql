-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Nov 30, 2020 at 09:26 PM
-- Server version: 10.3.25-MariaDB-0+deb10u1
-- PHP Version: 7.4.12

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
(3, 'Litbangong'),
(4, 'Infokom'),
(6, 'JASROHoh'),
(16, 'WB'),
(22, 'tarika'),
(23, 'sis');

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
(12, 'buku', '1', 'ad', 'sad'),
(23, 'bbb', '13', 'fsd', 'sqdqw'),
(25, 'as', '1', 'ads', 'as'),
(26, 'kuncia', '1', 'baik', 'hehe');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_lpj`
--

CREATE TABLE `tbl_lpj` (
  `id_lpj` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `file` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_lpj`
--

INSERT INTO `tbl_lpj` (`id_lpj`, `id_departemen`, `nama_kegiatan`, `file`) VALUES
(8, 1, 'lpj desain kaos', '5f54da1bc0f59.pdf'),
(9, 3, 'dsfd', '5f5b02edca5b1.jpg'),
(10, 2, 'faacad', 'asdasd.jpg'),
(11, 1, 'aa', 'bibmom2.png'),
(12, 3, 'a', '5f58de6cc8ff22.doc');

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
(1, 1, 'i care', '2020-08-11', 'Belum Terlaksana'),
(2, 16, 'da', '2020-10-14', 'ya'),
(3, 6, 'as', '2020-10-15', 'da'),
(5, 2, 'ads', '2020-10-07', 'das'),
(6, 2, 'as', '2020-10-15', 'da'),
(11, 1, 'dsf', '2020-10-14', 'dfs'),
(16, 1, 'd', '2020-12-03', 'sa');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_proposal`
--

CREATE TABLE `tbl_proposal` (
  `id_proposal` int(11) NOT NULL,
  `id_departemen` int(11) NOT NULL,
  `nama_kegiatan` varchar(100) NOT NULL,
  `file` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_proposal`
--

INSERT INTO `tbl_proposal` (`id_proposal`, `id_departemen`, `nama_kegiatan`, `file`) VALUES
(9, 1, 'a', 'RXH0PS1.png'),
(36, 2, 's', 'default.jpg'),
(37, 2, 'sa', 'default.jpg'),
(39, 2, 'ad', 'bitung.png'),
(48, 2, 'bukuaa', 'bitung2.png'),
(51, 2, 'qs', 'anak12.jpg'),
(52, 1, 'mancing', 'bitung4.png'),
(54, 2, 'asass', 'RXH0PS.png'),
(56, 1, 'ajaj', '5f58de3abe7aa11.pdf');

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
(1, '2019/V/001', '2018-08-27', 'Ulang Tahun Humanika ke-26', 'SISKOMa', '5f4f72161e9c8.jpeg'),
(4, '2020/IX/011', '2020-11-16', 'asa', 'a', 'default1.jpg');

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
(2, '2020/IX/01', '2020-08-25', '2020-08-26', 'RAPAT KORWIL PERMIKOMNAS xx', 2, 'PERMIKOMNAS', '5f4f504feb863.jpg'),
(9, '2020/X/069', '2020-11-09', '2020-11-12', 'd', 1, 'd', '5f50cab5790be1.png'),
(10, '2020/IX/04', '2020-11-28', '0000-00-00', 'ads', 1, 'das', '5f58dc740f78d4.doc');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(125) NOT NULL,
  `email` varchar(128) NOT NULL,
  `image` varchar(128) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `image`, `password`, `role_id`, `is_active`, `date_created`) VALUES
(15, 'admin', 'admin@gmail.com', 'default.jpg', '$2y$10$wiLcvNTtqc5KFQrJ2qc6/ebfyFDhreSBLaoLXhQET3BNOT0pZNHTa', 1, 1, 1606746270),
(16, 'anggy', 'anggy@gmail.com', 'default.jpg', '$2y$10$Rnpm87y49/TTy8GVJAVFaukDJjQw3trezLaODBCtbpJyloMGKVH1i', 2, 1, 1606746306);

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `role_id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`role_id`, `role`) VALUES
(1, 'Admin'),
(2, 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  ADD PRIMARY KEY (`id_departemen`);

--
-- Indexes for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

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
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_departemen`
--
ALTER TABLE `tbl_departemen`
  MODIFY `id_departemen` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_inventaris`
--
ALTER TABLE `tbl_inventaris`
  MODIFY `id_inventaris` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `tbl_lpj`
--
ALTER TABLE `tbl_lpj`
  MODIFY `id_lpj` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbl_penjadwalan`
--
ALTER TABLE `tbl_penjadwalan`
  MODIFY `id_penjadwalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `tbl_proposal`
--
ALTER TABLE `tbl_proposal`
  MODIFY `id_proposal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `tbl_surat_keluar`
--
ALTER TABLE `tbl_surat_keluar`
  MODIFY `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_surat_masuk`
--
ALTER TABLE `tbl_surat_masuk`
  MODIFY `id_surat_masuk` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `role_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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

--
-- Constraints for table `user`
--
ALTER TABLE `user`
  ADD CONSTRAINT `user_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `user_role` (`role_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
