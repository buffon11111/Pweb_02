-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 02, 2023 at 06:12 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.3.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `me`
--

-- --------------------------------------------------------

--
-- Table structure for table `jenis_produk`
--

CREATE TABLE `jenis_produk` (
  `id` int(11) NOT NULL,
  `nama` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_produk`
--

INSERT INTO `jenis_produk` (`id`, `nama`) VALUES
(1, 'makanan '),
(2, 'minuman'),
(3, 'Makanan Berat');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `nama_produk` varchar(55) NOT NULL,
  `tanggal` date NOT NULL,
  `qty` int(11) NOT NULL,
  `total_harga` double NOT NULL,
  `nama_pemesan` varchar(55) NOT NULL,
  `alamat_pemesan` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `nama_produk`, `tanggal`, `qty`, `total_harga`, `nama_pemesan`, `alamat_pemesan`) VALUES
(2, 'ayam geprek', '2023-05-04', 4, 40000, 'fatkhur', 'Jakarta');

-- --------------------------------------------------------

--
-- Table structure for table `produk`
--

CREATE TABLE `produk` (
  `id` int(11) NOT NULL,
  `kode` varchar(45) NOT NULL,
  `nama` varchar(45) NOT NULL,
  `harga` double NOT NULL,
  `stok` int(11) NOT NULL,
  `jenis_produk` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `produk`
--

INSERT INTO `produk` (`id`, `kode`, `nama`, `harga`, `stok`, `jenis_produk`) VALUES
(2, 'C5', 'Kacang mede patahan pecah murah 1kg Mentah', 45000, 7, '3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `produk`
--
ALTER TABLE `produk`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `jenis_produk`
--
ALTER TABLE `jenis_produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `produk`
--
ALTER TABLE `produk`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
