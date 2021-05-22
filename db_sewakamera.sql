-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 22, 2021 at 08:35 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_sewakamera`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `pangkat_akun` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `no_produk` int(11) NOT NULL,
  `rating_produk` int(1) NOT NULL,
  `gambar_produk` varchar(200) NOT NULL,
  `nama_produk` varchar(200) NOT NULL,
  `detail_produk` text NOT NULL,
  `harga_produk` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`no_produk`, `rating_produk`, `gambar_produk`, `nama_produk`, `detail_produk`, `harga_produk`) VALUES
(1161, 3, 'kamera1.png', 'Cannon 650D', 'No Minus, Lensa Bersih', 250000),
(1162, 4, 'kamera1.png', 'Cannon 660D', 'No Minus, Lensa Debu', 230000),
(1163, 5, 'kamera1.png', 'Cannon 670D', 'Minus Lecet, Lensa Bersih', 200000),
(1164, 2, 'kamera1.png', 'NIKON 7200DD', 'Cuil Dikit, Lensa Mantap', 150000),
(1165, 5, 'kamera1.png', 'NIKON 6000F', 'Body Mulus, Lensa Bersih', 300000),
(1166, 3, 'kamera1.png', 'NIKON 11000D', 'Mulus, Lensa Debu', 200000),
(1167, 4, 'kamera1.png', 'NIKON 6F', 'Body Mulus , Lensa Bersih', 450000);

-- --------------------------------------------------------

--
-- Table structure for table `user_order`
--

CREATE TABLE `user_order` (
  `id_transaksi` varchar(10) NOT NULL,
  `nomor_produk` int(30) NOT NULL,
  `email_user` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`no_produk`);

--
-- Indexes for table `user_order`
--
ALTER TABLE `user_order`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(30) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
