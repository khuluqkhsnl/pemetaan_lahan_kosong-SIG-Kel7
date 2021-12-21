-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 21, 2021 at 10:53 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `peta_lahan`
--

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(20) NOT NULL,
  `fasilitas` varchar(200) DEFAULT NULL,
  `id_kelurahan` int(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fasilitas`
--

INSERT INTO `fasilitas` (`id`, `fasilitas`, `id_kelurahan`, `created_at`, `updated_at`) VALUES
(34, 'SMA Negeri 1 Driyorejo', 8, '2021-12-17 14:49:11', '2021-12-17 14:49:11'),
(35, 'Kolam Renang Blumbang Tenaru', 8, '2021-12-17 15:18:48', '2021-12-17 15:18:48'),
(36, 'SMP Negeri 1 Driyorejo', 8, '2021-12-17 15:19:41', '2021-12-17 15:19:41'),
(37, 'SMK Negeri 1 Driyorejo', 18, '2021-12-17 15:38:44', '2021-12-17 15:38:44'),
(38, 'Bank BTN', 18, '2021-12-17 15:39:03', '2021-12-17 15:39:03'),
(39, 'SPBU Pertamina 54.611.34 Driyorejo', 18, '2021-12-17 15:39:40', '2021-12-17 15:39:40'),
(40, 'Apotik K24', 18, '2021-12-19 06:51:03', '2021-12-19 06:51:03'),
(41, 'Indomaret', 18, '2021-12-19 09:30:20', '2021-12-19 09:30:20');

-- --------------------------------------------------------

--
-- Table structure for table `klasifikasi`
--

CREATE TABLE `klasifikasi` (
  `id` int(20) NOT NULL,
  `id_lokasi` int(100) DEFAULT NULL,
  `luas_tanah` float DEFAULT NULL,
  `lahan_terpakai` float DEFAULT NULL,
  `lahan_tersisa` float DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `klasifikasi`
--

INSERT INTO `klasifikasi` (`id`, `id_lokasi`, `luas_tanah`, `lahan_terpakai`, `lahan_tersisa`, `created_at`, `updated_at`) VALUES
(25, 90, 352, 142, 210, '2021-12-17 14:48:17', '2021-12-17 14:48:17'),
(26, 91, 234, 150, 84, '2021-12-17 15:37:56', '2021-12-17 15:37:56'),
(27, 93, 678, 378, 300, '2021-12-19 06:53:06', '2021-12-19 06:53:06'),
(28, 94, 500, 300, 200, '2021-12-19 09:29:09', '2021-12-19 09:29:09');

-- --------------------------------------------------------

--
-- Table structure for table `lahan`
--

CREATE TABLE `lahan` (
  `id` int(20) NOT NULL,
  `nama_lokasi` varchar(255) DEFAULT NULL,
  `id_kelurahan` varchar(255) DEFAULT NULL,
  `id_kecamatan` varchar(255) DEFAULT NULL,
  `latitude` varchar(255) DEFAULT NULL,
  `longitude` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lahan`
--

INSERT INTO `lahan` (`id`, `nama_lokasi`, `id_kelurahan`, `id_kecamatan`, `latitude`, `longitude`, `created_at`, `updated_at`) VALUES
(90, 'Jl. KH Abul Fatah, Dusun Kelampok, Tenaru, Kec. Driyorejo, Kabupaten Gresik', '8', '9', '-7.351312337526237', '112.61917512374053', '2021-12-17 14:46:53', '2021-12-17 14:46:53'),
(91, 'Jl. Granit Nila 3.3 7-31, Paras, Mulung, Kec. Driyorejo, Kabupaten Gresik', '18', '9', '-7.333284548230682', '112.63856166468126', '2021-12-17 15:09:59', '2021-12-17 15:09:59'),
(93, 'Jl. Aquamarin 3 14-22, Paras, Mulung, Kec. Driyorejo', '18', '9', '-7.330152062083542', '112.6365740251783', '2021-12-19 06:52:23', '2021-12-19 06:52:23'),
(94, 'Jl. Granit Kumala 1.9 18, Mulung, Kec. Driyorejo', '18', '9', '-7.336819631306524', '112.63888519041267', '2021-12-19 09:28:15', '2021-12-19 09:28:15');

-- --------------------------------------------------------

--
-- Table structure for table `tempat`
--

CREATE TABLE `tempat` (
  `id` int(20) NOT NULL,
  `nama` text DEFAULT NULL,
  `file` varchar(50) DEFAULT NULL,
  `role` int(100) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tempat`
--

INSERT INTO `tempat` (`id`, `nama`, `file`, `role`, `created_at`, `update_at`) VALUES
(8, 'Tenaru', 'tenaru.geojson', 2, '2021-12-11 13:04:28', '2021-12-11 13:04:28'),
(9, 'Driyorejo', 'driyorejo.geojson', 1, '2021-12-11 13:28:06', '2021-12-11 13:28:06'),
(10, 'Cangkir', 'cangkir.geojson', 2, '2021-12-12 13:36:21', '2021-12-12 13:36:21'),
(11, 'Semambung', 'semambung.geojson', 2, '2021-12-12 13:36:46', '2021-12-12 13:36:46'),
(12, 'Sumput', 'sumput.geojson', 2, '2021-12-12 13:37:07', '2021-12-12 13:37:07'),
(13, 'Krikilan', 'krikilan.geojson', 2, '2021-12-12 13:37:31', '2021-12-12 13:37:31'),
(14, 'Tanjungan', 'tanjungan.geojson', 2, '2021-12-12 13:37:57', '2021-12-12 13:37:57'),
(15, 'Mojosarirejo', 'mojosarirejo.geojson', 2, '2021-12-12 13:38:24', '2021-12-12 13:38:24'),
(16, 'Kesambenwetan', 'kesambenwetan.geojson', 2, '2021-12-12 13:38:41', '2021-12-12 13:38:41'),
(17, 'Petiken', 'petiken.geojson', 2, '2021-12-12 13:38:54', '2021-12-12 13:38:54'),
(18, 'Mulung', 'mulung.geojson', 2, '2021-12-12 13:39:07', '2021-12-12 13:39:07'),
(19, 'Bambe', 'bambe.geojson', 2, '2021-12-12 13:39:21', '2021-12-12 13:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(20) NOT NULL,
  `nama` text DEFAULT NULL,
  `password` varchar(10) NOT NULL,
  `role` int(20) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `update_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `role`, `created_at`, `update_at`) VALUES
(2, 'user', 'password', 1, '2021-12-19 01:28:21', '2021-12-19 00:29:02'),
(3, 'admin', 'password', 2, '2021-12-19 01:28:32', '2021-12-19 01:10:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lahan`
--
ALTER TABLE `lahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tempat`
--
ALTER TABLE `tempat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;

--
-- AUTO_INCREMENT for table `klasifikasi`
--
ALTER TABLE `klasifikasi`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `lahan`
--
ALTER TABLE `lahan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=95;

--
-- AUTO_INCREMENT for table `tempat`
--
ALTER TABLE `tempat`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
