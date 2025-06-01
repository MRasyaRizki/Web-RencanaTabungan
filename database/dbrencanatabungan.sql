-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jun 01, 2025 at 08:13 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbrencanatabungan`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menabungs`
--

CREATE TABLE `menabungs` (
  `id` bigint UNSIGNED NOT NULL,
  `tabungan_id` bigint UNSIGNED NOT NULL,
  `nominal` bigint UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menabungs`
--

INSERT INTO `menabungs` (`id`, `tabungan_id`, `nominal`, `tanggal`, `created_at`, `updated_at`) VALUES
(10, 19, 10000, '2025-06-01', '2025-06-01 12:18:01', '2025-06-01 12:18:01'),
(11, 19, 490000, '2025-06-01', '2025-06-01 12:19:33', '2025-06-01 12:19:33'),
(12, 27, 2000000, '2025-06-01', '2025-06-01 12:28:11', '2025-06-01 12:28:11'),
(13, 20, 15000000, '2025-06-01', '2025-06-01 12:46:12', '2025-06-01 12:46:12'),
(14, 30, 15000000, '2025-06-01', '2025-06-01 12:52:55', '2025-06-01 12:52:55');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2025_06_01_102137_create_tabungans_table', 1),
(6, '2025_06_01_102143_create_menabungs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tabungans`
--

CREATE TABLE `tabungans` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `target_nominal` bigint UNSIGNED NOT NULL,
  `target_tanggal` date NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tabungans`
--

INSERT INTO `tabungans` (`id`, `user_id`, `judul`, `foto`, `target_nominal`, `target_tanggal`, `status`, `created_at`, `updated_at`) VALUES
(19, 2, 'Ransel NavyClub', 'iDvbNz8yA2jolYVtL1jhXi9vysgW6zWRR77LtcAN.jpg', 500000, '2025-06-10', 0, '2025-06-01 11:07:30', '2025-06-01 11:07:30'),
(20, 2, 'Laptop Asus ROG 2', 'VrkZiO5HT11I7D5y1SbuCqvziAlMt0lqfls4hxNK.jpg', 15000000, '2025-12-10', 0, '2025-06-01 11:07:57', '2025-06-01 12:44:06'),
(21, 2, 'Motor Beat', 'bujSHs9hY6YHqbEqpsGfMp8RUjTAeIg9DiPnanMj.webp', 20000000, '2025-06-18', 0, '2025-06-01 11:08:25', '2025-06-01 11:08:25'),
(22, 2, 'Handphone Samsung S25 Ultra', 'q257HPGDx6ABkMuXdGMIs5I9QAzRCmbAh5UDvrEf.png', 18000000, '2025-10-14', 0, '2025-06-01 11:09:06', '2025-06-01 11:09:06'),
(23, 3, 'Motor beat', NULL, 20000000, '2025-06-09', 0, '2025-06-01 12:21:19', '2025-06-01 12:21:19'),
(24, 3, 'Laptop Asus ROG', NULL, 20000000, '2025-12-24', 0, '2025-06-01 12:26:04', '2025-06-01 12:26:04'),
(25, 3, 'Tabungan Liburan', NULL, 30000000, '2026-06-04', 0, '2025-06-01 12:26:33', '2025-06-01 12:26:33'),
(26, 3, 'Handphone Samsung S25 Ultra', NULL, 15000000, '2025-12-23', 0, '2025-06-01 12:27:05', '2025-06-01 12:27:05'),
(27, 3, 'Sapi kurban', NULL, 12000000, '2025-06-06', 0, '2025-06-01 12:27:49', '2025-06-01 12:27:49'),
(28, 2, 'Sapi kurban', NULL, 150000000, '2025-06-12', 0, '2025-06-01 12:44:53', '2025-06-01 12:44:53'),
(29, 2, 'Handphone', 'lS9iHCPYDyXzgo9Oq43yqOUOmmgU2SY6YZPhqsKi.png', 12000000, '2025-12-23', 0, '2025-06-01 12:47:29', '2025-06-01 12:47:29'),
(30, 4, 'Sapi kurban', '9T4iSKsA9IA1UFb5CTW6QnWJbuzy3fpEX8MBJMyV.jpg', 15000000, '2025-06-06', 0, '2025-06-01 12:50:46', '2025-06-01 12:51:22'),
(31, 4, 'Laptop Asus ROG', 'kV8IYOBTkIjNGQtl5r5FLP95Nv9DAnrDPm3Ih3Qi.jpg', 250000000, '2025-12-24', 0, '2025-06-01 12:52:28', '2025-06-01 12:52:28');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'User', 'User02@gmail.com', NULL, '$2y$10$jlO6Do0V1KrYbfHAVks8muIVcwwe0c01h9Xa2GFfWnO01hLJ/F6yu', NULL, '2025-06-01 03:58:37', '2025-06-01 03:58:37'),
(2, 'Admin', 'Admin@gmail.com', NULL, '$2y$10$6qX9tPGZQkoZ6nwKVuhrnO4f5.rlWzJz7mavE9BZi4vr82WgaBwke', NULL, '2025-06-01 05:20:14', '2025-06-01 05:20:14'),
(3, 'Budi', 'Budi@gmail.com', NULL, '$2y$10$xOr961GR3TmB9eBLNOxwme0Tv1IiyoKrC2tu2wSFaAFevz0f6F/ku', NULL, '2025-06-01 12:20:30', '2025-06-01 12:20:30'),
(4, 'Guest', 'Guest@gmail.com', NULL, '$2y$10$PujsjtoaLiJcqJ1wINHzMuMpOOyocMDrPGrDE.842plzZQjDKhMlW', NULL, '2025-06-01 12:48:50', '2025-06-01 12:48:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `menabungs`
--
ALTER TABLE `menabungs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menabungs_tabungan_id_foreign` (`tabungan_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `tabungans`
--
ALTER TABLE `tabungans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `tabungans_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menabungs`
--
ALTER TABLE `menabungs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tabungans`
--
ALTER TABLE `tabungans`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `menabungs`
--
ALTER TABLE `menabungs`
  ADD CONSTRAINT `menabungs_tabungan_id_foreign` FOREIGN KEY (`tabungan_id`) REFERENCES `tabungans` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `tabungans`
--
ALTER TABLE `tabungans`
  ADD CONSTRAINT `tabungans_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
