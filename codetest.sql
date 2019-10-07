-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2019 at 06:31 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codetest`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_barang` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `stok` int(11) NOT NULL,
  `harga_jual` int(11) NOT NULL,
  `harga_beli` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `nama_barang`, `stok`, `harga_jual`, `harga_beli`, `created_at`, `updated_at`) VALUES
(1, 'Kalung Emas', 11, 140000, 100000, '2019-10-05 05:26:39', '2019-10-05 05:26:39'),
(2, 'Kalung Enom', 4, 140000, 120000, '2019-10-05 13:55:19', '2019-10-05 13:55:19'),
(3, 'Kalung Silver', 2, 150000, 100000, '2019-10-06 16:56:14', '2019-10-06 16:56:14'),
(4, 'Kalung Perunggu', 3, 150000, 120000, '2019-10-06 16:57:13', '2019-10-06 16:57:13'),
(5, 'Kalung putih', 3, 120000, 100000, '2019-10-06 16:57:51', '2019-10-06 16:57:51'),
(14, 'Gesper', 4, 120000, 100000, '2019-10-07 05:49:08', '2019-10-07 05:49:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2019_10_05_003314_create_barang_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`, `name`, `type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aprayitno084@gmail.com', '$2y$10$GoLdJJua.1UhjJMO8HUUJuTQd0w7JkVqrxLKXQhgxZdCUiJHtJOPy', 'Bagas Adi Prayitno', 'Owner', '7PWUzm5cmfNCtPOSnyuloa1uS6tqgI19BR83KmjLsNqV3Yt8W7GvYsBHpA71', '2019-10-05 01:12:47', '2019-10-05 01:12:47'),
(2, 'bagasunknown@gmail.com', '$2y$10$2nWwzgmW/Uc160HgDBXhEegZmoPpSETyhPfqyozHLzGHYk6ORo23i', 'Budi', 'Staff', 'kK3hJ0yOFn8IerZoI0JfBjFpRJ9Eonz1b5abo9Q5atEp3dk12Cbd0K6sl5df', '2019-10-05 01:50:44', '2019-10-05 01:50:44'),
(4, 'adi@gmail.com', '$2y$10$XAKmtK66zw9i9WIJYYwMqugU68f6QEL8JEsw.ehQjQivdfsSNX65.', 'Bagus', 'Admin', 'YbCgpt2ZuM0djvVwbCoOQfIartQQTmDYg5cpo4heMKTx4iwWFSRWjWGguxVd', '2019-10-05 05:32:23', '2019-10-05 05:32:23'),
(5, 'budi@gmail.com', '$2y$10$BeBa4V44AOIHiUT06IQeDeLCH113fep74I/2jYx7bhNoXT764jGSe', 'Bagong', 'Admin', 'euk6vNQDcCxIoYSMS3yPOrcS3t24h5bBiHJDkOPzvpCTtifgXc1l2EJVefeX', '2019-10-05 05:45:43', '2019-10-05 05:45:43');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
