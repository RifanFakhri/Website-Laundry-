-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 22, 2021 at 01:55 PM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 5.6.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom_laundry`
--

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail` int(11) NOT NULL,
  `transaksi_id` int(11) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `qty` double DEFAULT NULL,
  `total_harga` double DEFAULT NULL,
  `keterangan` text,
  `total_bayar` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail`, `transaksi_id`, `paket_id`, `qty`, `total_harga`, `keterangan`, `total_bayar`) VALUES
(9, 33, 4, 10, 150000, NULL, 200000),
(10, 34, 5, 2, 20000, NULL, NULL),
(11, 35, 5, 2, 20000, NULL, NULL),
(12, 36, 5, 4, 40000, NULL, NULL),
(13, 37, 5, 3, 30000, NULL, NULL),
(14, 38, 5, 1, 15000, NULL, NULL),
(15, 44, 5, 1, 10000, NULL, NULL),
(16, 47, 5, 1, 12500, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(11) NOT NULL,
  `nama_member` varchar(100) DEFAULT NULL,
  `alamat_member` text,
  `jenis_kelamin` enum('L','P') DEFAULT NULL,
  `telp_member` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat_member`, `jenis_kelamin`, `telp_member`) VALUES
(1, 'Marissa', 'bekasi', 'P', '323232'),
(6, 'rifan', 'jakarta', 'L', '08958833');

-- --------------------------------------------------------

--
-- Table structure for table `outlet`
--

CREATE TABLE `outlet` (
  `id_outlet` int(11) NOT NULL,
  `nama_outlet` varchar(100) DEFAULT NULL,
  `alamat_outlet` text,
  `telp_outlet` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `outlet`
--

INSERT INTO `outlet` (`id_outlet`, `nama_outlet`, `alamat_outlet`, `telp_outlet`) VALUES
(2, 'outlet b', 'Tambun', '023923'),
(3, 'outlet a', 'Bekasi', '081299008899');

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id_paket` int(11) NOT NULL,
  `jenis_paket` enum('kiloan','selimut','bedcover','kaos','lain') DEFAULT NULL,
  `nama_paket` varchar(100) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `outlet_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id_paket`, `jenis_paket`, `nama_paket`, `harga`, `outlet_id`) VALUES
(5, 'bedcover', 'wangi', 10000, 3);

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(11) NOT NULL,
  `outlet_id` int(11) DEFAULT NULL,
  `kode_invoice` varchar(100) DEFAULT NULL,
  `member_id` int(11) DEFAULT NULL,
  `tgl` datetime DEFAULT NULL,
  `batas_waktu` datetime DEFAULT NULL,
  `tgl_pembayaran` datetime DEFAULT NULL,
  `biaya_tambahan` int(11) DEFAULT NULL,
  `diskon` double DEFAULT NULL,
  `pajak` int(11) DEFAULT NULL,
  `status` enum('baru','proses','selesai','diambil') DEFAULT NULL,
  `status_bayar` enum('dibayar','belum') DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `outlet_id`, `kode_invoice`, `member_id`, `tgl`, `batas_waktu`, `tgl_pembayaran`, `biaya_tambahan`, `diskon`, `pajak`, `status`, `status_bayar`, `user_id`) VALUES
(33, 26, 'DRY202003213927', 5, '2020-03-21 02:27:48', '2020-03-28 12:00:00', '2020-03-21 02:28:03', 0, 0, 0, 'proses', 'dibayar', 11),
(34, 3, 'SPLY202104221515', 1, '2021-04-22 09:15:35', '2021-04-29 12:00:00', NULL, 2000, 20, 500, 'baru', 'belum', 3),
(35, 3, 'SPLY202104220021', 1, '2021-04-22 09:22:18', '2021-04-29 12:00:00', NULL, 2000, 10, 500, 'baru', 'belum', 3),
(36, 13, 'SPLY202104225232', 1, '2021-04-22 09:35:43', '2021-04-29 12:00:00', NULL, 7000, 10, 3000, 'baru', 'belum', 2),
(37, 13, 'SPLY202104222836', 6, '2021-04-22 09:36:51', '2021-04-29 12:00:00', NULL, 10000, 10, 5000, 'baru', 'belum', 2),
(38, 13, 'SPLY202104223200', 6, '2021-04-22 11:01:19', '2021-04-29 12:00:00', NULL, 5000, 50, 5000, 'baru', 'belum', 2),
(39, 13, 'SPLY202104222404', 1, '2021-04-22 11:04:37', '2021-04-29 12:00:00', NULL, 5000, 5000, 50, 'baru', 'belum', 2),
(40, 13, 'SPLY202104222404', 1, '2021-04-22 11:04:51', '2021-04-29 12:00:00', NULL, 5000, 5000, 50, 'baru', 'belum', 2),
(41, 13, 'SPLY202104222404', 1, '2021-04-22 11:04:56', '2021-04-29 12:00:00', NULL, 5000, 5000, 50, 'baru', 'belum', 2),
(42, 13, 'SPLY202104220405', 1, '2021-04-22 11:05:12', '2021-04-29 12:00:00', NULL, 5000, 5000, 50, 'baru', 'belum', 2),
(43, 13, 'SPLY202104220405', 1, '2021-04-22 11:05:22', '2021-04-29 12:00:00', NULL, 5000, 5000, 50, 'baru', 'belum', 2),
(44, 13, 'SPLY202104223305', 1, '2021-04-22 11:05:48', '2021-04-29 12:00:00', NULL, 5000, 50, 5000, 'baru', 'belum', 2),
(45, 13, 'SPLY202104223305', 1, '2021-04-22 11:05:55', '2021-04-29 12:00:00', NULL, 5000, 50, 5000, 'baru', 'belum', 2),
(46, 13, 'SPLY202104223305', 1, '2021-04-22 11:06:02', '2021-04-29 12:00:00', NULL, 5000, 50, 5000, 'baru', 'belum', 2),
(47, 13, 'SPLY202104222406', 6, '2021-04-22 11:07:10', '2021-04-29 12:00:00', NULL, 10000, 50, 5000, 'baru', 'belum', 2);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `nama_user` varchar(100) NOT NULL,
  `username` varchar(32) NOT NULL,
  `password` varchar(150) NOT NULL,
  `outlet_id` int(11) NOT NULL,
  `role` enum('admin','kasir','owner','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `username`, `password`, `outlet_id`, `role`) VALUES
(2, 'fakhri', 'admin', 'e00cf25ad42683b3df678c61f42c6bda', 13, 'admin'),
(3, 'mawar', 'kasir', 'c7911af3adbd12a035b289556d96470a', 3, 'kasir'),
(4, 'melati', 'owner', '72122ce96bfec66e2396d2e25225d70a', 0, 'owner');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail`),
  ADD KEY `transaksi_id` (`transaksi_id`),
  ADD KEY `paket_id` (`paket_id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `outlet`
--
ALTER TABLE `outlet`
  ADD PRIMARY KEY (`id_outlet`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id_paket`),
  ADD KEY `outlet_id` (`outlet_id`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`),
  ADD KEY `outlet_id` (`outlet_id`),
  ADD KEY `member_id` (`member_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `outlet`
--
ALTER TABLE `outlet`
  MODIFY `id_outlet` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id_paket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
