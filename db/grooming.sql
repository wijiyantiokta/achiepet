-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 23, 2021 at 04:53 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grooming`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(60) NOT NULL,
  `jenis_kelamin` enum('L','P','','') NOT NULL,
  `foto` text NOT NULL,
  `alamat` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `nama`, `username`, `password`, `jenis_kelamin`, `foto`, `alamat`, `tanggal_update`) VALUES
(4, 'Wiji', 'wiji', '356a192b7913b04c54574d18c28d46e6395428ab', 'P', 'avatar2.png', 'Jalan Kebon Agung', '2020-12-19 20:05:16'),
(5, 'Lala', 'lala', '1755e89c38c89d2b9d5c322c9d3a17f6e77db7d3', 'P', '72543074_13341940-34cd-422e-9296-1f0227d0f393_688_688.jpg', 'Jl. Magelang', '2020-09-15 12:44:19');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `id_jenis_grooming` int(11) NOT NULL,
  `id_pelanggan` varchar(50) NOT NULL,
  `kode_booking` varchar(50) NOT NULL,
  `token` varchar(50) NOT NULL,
  `hewan` varchar(50) NOT NULL,
  `tanggal` date NOT NULL,
  `jam` time NOT NULL,
  `status` varchar(30) NOT NULL,
  `created` datetime NOT NULL DEFAULT current_timestamp(),
  `deadline` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `groomer`
--

CREATE TABLE `groomer` (
  `id_groomer` int(11) NOT NULL,
  `nama_groomer` varchar(50) NOT NULL,
  `jk_groomer` enum('L','P','','') NOT NULL,
  `telepon_groomer` varchar(15) NOT NULL,
  `alamat_groomer` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `groomer`
--

INSERT INTO `groomer` (`id_groomer`, `nama_groomer`, `jk_groomer`, `telepon_groomer`, `alamat_groomer`, `tanggal_update`) VALUES
(4, 'Indah', 'P', '081923123221', 'Jl. Magelang', '2020-09-15 10:57:14'),
(5, 'Rama', 'L', '081527312131', 'Jl. Monjali', '2020-09-15 10:57:41'),
(6, 'Andi', 'L', '081242132422', 'Jl. Kaliurang', '2020-09-15 10:58:21');

-- --------------------------------------------------------

--
-- Table structure for table `instansi`
--

CREATE TABLE `instansi` (
  `id_instansi` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `pimpinan` varchar(50) NOT NULL,
  `telepon` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `site` varchar(150) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `instansi`
--

INSERT INTO `instansi` (`id_instansi`, `nama`, `pimpinan`, `telepon`, `email`, `site`, `alamat`) VALUES
(1, 'Praktik Dokter Hewan dan Achie Petshop', 'drs. Asri Emelia Lubis', '085253587600', 'asriemelia@yahoo.com', '-', 'Jl. Monjali No.40 D, Gemangan, Sinduadi, Mlati, Sleman, Daerah Istimewa Yogyakarta 55284');

-- --------------------------------------------------------

--
-- Table structure for table `jenis_grooming`
--

CREATE TABLE `jenis_grooming` (
  `id_jenis_grooming` int(11) NOT NULL,
  `jenis_grooming` varchar(100) NOT NULL,
  `harga_grooming` int(11) NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jenis_grooming`
--

INSERT INTO `jenis_grooming` (`id_jenis_grooming`, `jenis_grooming`, `harga_grooming`, `tanggal_update`) VALUES
(1, 'Grooming Sehat', 40000, '2020-09-10 07:48:26'),
(2, 'Grooming Antikutu', 45000, '2020-09-10 07:48:54'),
(3, 'Grooming Antijamur', 45000, '2020-09-10 07:49:08'),
(4, 'Grooming Antikutu & Antijamur', 50000, '2020-09-10 07:49:39');

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id_pelanggan` varchar(50) NOT NULL,
  `nama_pelanggan` varchar(20) NOT NULL,
  `username_pelanggan` varchar(20) NOT NULL,
  `email_pelanggan` varchar(50) NOT NULL,
  `password_pelanggan` varchar(60) NOT NULL,
  `jk_pelanggan` enum('L','P','','') NOT NULL,
  `telepon_pelanggan` varchar(15) NOT NULL,
  `alamat_pelanggan` text NOT NULL,
  `tanggal_update` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id_pelanggan`, `nama_pelanggan`, `username_pelanggan`, `email_pelanggan`, `password_pelanggan`, `jk_pelanggan`, `telepon_pelanggan`, `alamat_pelanggan`, `tanggal_update`) VALUES
('AC0210202', 'lia', 'lia', 'lia@gmail.com', 'b986415c93241513d33d01fcf532a6c47ac4f3ee', 'P', '089654352', 'JL.Kebon', '2021-02-21 20:42:35'),
('AC0210223', 'Prima', 'prima', 'prima@gmail.com', 'b986415c93241513d33d01fcf532a6c47ac4f3ee', 'L', '089787675545', 'JL.Kebon', '2021-02-21 20:47:52'),
('AC0210296', 'wiji', 'wiji', 'wiji@gmail.com', 'b986415c93241513d33d01fcf532a6c47ac4f3ee', 'L', '08578435', 'Jalan Kebon Agung', '2021-02-21 20:18:17'),
('AC0210298', 'tyas', 'tyas', 'tyas@gmail.com', 'b986415c93241513d33d01fcf532a6c47ac4f3ee', 'P', '0895251413', 'Jl. Kebon Agung', '2021-02-21 20:32:44');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `id_jenis_grooming` (`id_jenis_grooming`),
  ADD KEY `id_pelanggan` (`id_pelanggan`);

--
-- Indexes for table `groomer`
--
ALTER TABLE `groomer`
  ADD PRIMARY KEY (`id_groomer`);

--
-- Indexes for table `instansi`
--
ALTER TABLE `instansi`
  ADD PRIMARY KEY (`id_instansi`);

--
-- Indexes for table `jenis_grooming`
--
ALTER TABLE `jenis_grooming`
  ADD PRIMARY KEY (`id_jenis_grooming`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id_pelanggan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `groomer`
--
ALTER TABLE `groomer`
  MODIFY `id_groomer` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `instansi`
--
ALTER TABLE `instansi`
  MODIFY `id_instansi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `jenis_grooming`
--
ALTER TABLE `jenis_grooming`
  MODIFY `id_jenis_grooming` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `booking_ibfk_1` FOREIGN KEY (`id_jenis_grooming`) REFERENCES `jenis_grooming` (`id_jenis_grooming`),
  ADD CONSTRAINT `booking_ibfk_2` FOREIGN KEY (`id_pelanggan`) REFERENCES `pelanggan` (`id_pelanggan`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
