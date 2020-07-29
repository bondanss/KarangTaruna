-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 08, 2020 at 04:50 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_karangtaruna`
--

-- --------------------------------------------------------

--
-- Table structure for table `anggota`
--

CREATE TABLE `anggota` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(15) COLLATE utf8_unicode_ci NOT NULL,
  `nama_anggota` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `alamat` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `tanggal_lahir` date NOT NULL,
  `jenis_kelamin` enum('L','P') COLLATE utf8_unicode_ci NOT NULL,
  `id_kelurahan` int(10) UNSIGNED NOT NULL,
  `nomor_telepon` varchar(13) COLLATE utf8_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `anggota`
--

INSERT INTO `anggota` (`id`, `nik`, `nama_anggota`, `alamat`, `tanggal_lahir`, `jenis_kelamin`, `id_kelurahan`, `nomor_telepon`, `foto`, `created_at`, `updated_at`) VALUES
(2, '70001', 'bondan satrio', 'Jl. Dukuh V No. 40', '1999-04-20', 'L', 5, '081211053115', '20200706162528.jpg', '2020-07-06 09:25:28', '2020-07-07 19:53:58'),
(3, '70002', 'harianto bari', 'Jl. H. Baping No. 45', '1997-02-28', 'L', 3, '08765378215', NULL, '2020-07-07 19:51:45', '2020-07-07 19:51:45'),
(4, '70003', 'sarfina medina', 'Jl. Suci II No. 13', '1999-11-10', 'P', 4, '08765378213', NULL, '2020-07-07 19:53:38', '2020-07-07 19:53:38'),
(5, '70004', 'tubagus haikal', 'Jl. Bhayangkara No. 1', '2020-07-01', 'L', 4, '08765378218', '20200708123845.jpg', '2020-07-08 05:38:45', '2020-07-08 05:38:45'),
(6, '70005', 'hubbaka ghoyati', 'Jl. Babandungan No. 27', '2000-03-28', 'L', 1, '08765378234', NULL, '2020-07-08 07:12:40', '2020-07-08 07:12:40'),
(7, '70006', 'muhammad fitrah', 'Jl. Arundina No. 52', '2000-02-15', 'L', 6, '08765378267', NULL, '2020-07-08 07:14:09', '2020-07-08 07:14:09'),
(8, '70007', 'iqbal nugroho', 'Jl. Penggilingan Baru No. 17', '1999-06-26', 'L', 7, '08765378123', NULL, '2020-07-08 07:15:22', '2020-07-08 07:15:22'),
(9, '70008', 'amin nugroho', 'Jl. Umar Bakri No. 69', '1998-06-16', 'L', 6, '08765378242', NULL, '2020-07-08 07:16:30', '2020-07-08 07:16:30'),
(10, '70009', 'faradhita nur', 'Jl. Penganten Ali No. 31', '1999-01-01', 'P', 5, '0876537543', NULL, '2020-07-08 07:17:31', '2020-07-08 07:31:56'),
(11, '70010', 'risma dwiyani', 'Jl. Lubang Buaya No. 8', '1998-11-03', 'P', 5, '0876537833', NULL, '2020-07-08 07:19:17', '2020-07-08 07:32:41');

-- --------------------------------------------------------

--
-- Table structure for table `hobi`
--

CREATE TABLE `hobi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_hobi` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hobi`
--

INSERT INTO `hobi` (`id`, `nama_hobi`, `created_at`, `updated_at`) VALUES
(1, 'Futsal', NULL, NULL),
(2, 'Basket', NULL, NULL),
(3, 'Badminton', NULL, NULL),
(4, 'Voli', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hobi_anggota`
--

CREATE TABLE `hobi_anggota` (
  `id_anggota` int(10) UNSIGNED NOT NULL,
  `id_hobi` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hobi_anggota`
--

INSERT INTO `hobi_anggota` (`id_anggota`, `id_hobi`, `created_at`, `updated_at`) VALUES
(2, 1, '2020-07-06 09:25:28', '2020-07-06 09:25:28'),
(2, 3, '2020-07-06 09:25:28', '2020-07-06 09:25:28'),
(3, 2, '2020-07-07 19:51:45', '2020-07-07 19:51:45'),
(3, 4, '2020-07-07 19:51:45', '2020-07-07 19:51:45'),
(4, 2, '2020-07-07 19:53:39', '2020-07-07 19:53:39'),
(4, 3, '2020-07-07 19:53:39', '2020-07-07 19:53:39'),
(4, 4, '2020-07-07 19:53:39', '2020-07-07 19:53:39'),
(5, 2, '2020-07-08 05:38:45', '2020-07-08 05:38:45'),
(5, 3, '2020-07-08 05:38:45', '2020-07-08 05:38:45'),
(6, 1, '2020-07-08 07:12:40', '2020-07-08 07:12:40'),
(6, 2, '2020-07-08 07:12:40', '2020-07-08 07:12:40'),
(7, 1, '2020-07-08 07:14:09', '2020-07-08 07:14:09'),
(8, 3, '2020-07-08 07:15:22', '2020-07-08 07:15:22'),
(9, 1, '2020-07-08 07:16:31', '2020-07-08 07:16:31'),
(9, 3, '2020-07-08 07:16:31', '2020-07-08 07:16:31'),
(10, 3, '2020-07-08 07:17:31', '2020-07-08 07:17:31'),
(10, 4, '2020-07-08 07:17:31', '2020-07-08 07:17:31'),
(11, 3, '2020-07-08 07:19:17', '2020-07-08 07:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `kelurahan`
--

CREATE TABLE `kelurahan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kelurahan` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `kelurahan`
--

INSERT INTO `kelurahan` (`id`, `nama_kelurahan`, `created_at`, `updated_at`) VALUES
(1, 'Kramat Jati', NULL, NULL),
(2, 'Batu Ampar', NULL, NULL),
(3, 'Balekambang', NULL, NULL),
(4, 'Kampung Tengah', NULL, NULL),
(5, 'Dukuh', NULL, NULL),
(6, 'Cawang', NULL, NULL),
(7, 'Cililitan', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(25, '2014_10_12_000000_create_users_table', 1),
(26, '2014_10_12_100000_create_password_resets_table', 1),
(27, '2020_06_25_073456_create_table_anggota', 1),
(28, '2020_06_30_122847_create_table_telepon', 1),
(29, '2020_07_06_150813_create_table_hobi', 2),
(30, '2020_07_06_151631_create_table_hobi_anggota', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `telepon`
--

CREATE TABLE `telepon` (
  `id_anggota` int(10) UNSIGNED NOT NULL,
  `nomor_telepon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `telepon`
--

INSERT INTO `telepon` (`id_anggota`, `nomor_telepon`, `created_at`, `updated_at`) VALUES
(2, '081211053115', '2020-07-06 09:25:28', '2020-07-06 09:25:28'),
(3, '08765378215', '2020-07-07 19:51:45', '2020-07-07 19:51:45'),
(4, '08765378213', '2020-07-07 19:53:39', '2020-07-07 19:53:39'),
(5, '08765378218', '2020-07-08 05:38:45', '2020-07-08 05:38:45'),
(6, '08765378234', '2020-07-08 07:12:40', '2020-07-08 07:12:40'),
(7, '08765378267', '2020-07-08 07:14:09', '2020-07-08 07:14:09'),
(8, '08765378123', '2020-07-08 07:15:22', '2020-07-08 07:15:22'),
(9, '08765378242', '2020-07-08 07:16:30', '2020-07-08 07:16:30'),
(10, '0876537543', '2020-07-08 07:17:31', '2020-07-08 07:17:31'),
(11, '0876537833', '2020-07-08 07:19:17', '2020-07-08 07:19:17');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Bondan Satrio', 'bondansatrio99@gmail.com', NULL, '$2y$10$2hwqoYqPCGymkZFNGe18PO3y0VVrq50TF1JHbZir4Niu78oivagta', NULL, '2020-07-06 08:45:45', '2020-07-06 08:45:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anggota`
--
ALTER TABLE `anggota`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `anggota_nik_unique` (`nik`),
  ADD KEY `id_kelurahan` (`id_kelurahan`);

--
-- Indexes for table `hobi`
--
ALTER TABLE `hobi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hobi_anggota`
--
ALTER TABLE `hobi_anggota`
  ADD PRIMARY KEY (`id_anggota`,`id_hobi`),
  ADD KEY `hobi_anggota_id_anggota_index` (`id_anggota`),
  ADD KEY `hobi_anggota_id_hobi_index` (`id_hobi`);

--
-- Indexes for table `kelurahan`
--
ALTER TABLE `kelurahan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `telepon`
--
ALTER TABLE `telepon`
  ADD PRIMARY KEY (`id_anggota`),
  ADD UNIQUE KEY `telepon_nomor_telepon_unique` (`nomor_telepon`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anggota`
--
ALTER TABLE `anggota`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `hobi`
--
ALTER TABLE `hobi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `kelurahan`
--
ALTER TABLE `kelurahan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `anggota`
--
ALTER TABLE `anggota`
  ADD CONSTRAINT `anggota_ibfk_1` FOREIGN KEY (`id_kelurahan`) REFERENCES `kelurahan` (`id`);

--
-- Constraints for table `hobi_anggota`
--
ALTER TABLE `hobi_anggota`
  ADD CONSTRAINT `hobi_anggota_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `hobi_anggota_id_hobi_foreign` FOREIGN KEY (`id_hobi`) REFERENCES `hobi` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `telepon`
--
ALTER TABLE `telepon`
  ADD CONSTRAINT `telepon_id_anggota_foreign` FOREIGN KEY (`id_anggota`) REFERENCES `anggota` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
