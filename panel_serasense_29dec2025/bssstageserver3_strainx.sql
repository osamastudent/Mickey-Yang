-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 10, 2026 at 09:19 PM
-- Server version: 10.6.24-MariaDB
-- PHP Version: 8.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bssstageserver3_strainx`
--

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('laravel-cache-saad@email.com|119.73.96.153', 'i:1;', 1767191371),
('laravel-cache-saad@email.com|119.73.96.153:timer', 'i:1767191371;', 1767191371),
('laravel-cache-saad@email.com|119.73.96.204', 'i:1;', 1767271298),
('laravel-cache-saad@email.com|119.73.96.204:timer', 'i:1767271298;', 1767271298),
('strainx-cache-saad@email.com|39.34.131.200', 'i:1;', 1768060843),
('strainx-cache-saad@email.com|39.34.131.200:timer', 'i:1768060843;', 1768060843),
('strainx-cache-saad@email.com|39.34.135.90', 'i:1;', 1767449734),
('strainx-cache-saad@email.com|39.34.135.90:timer', 'i:1767449734;', 1767449734);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('bisharatali45@gmail.com', '$2y$12$oA30Xwdb8LpbTmGBy5w7q.3ShdVlMzUPfqMEW5REK2FsvRNUyY.RO', '2026-01-02 12:48:17');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('jLJwnzOs2qi5eOEpNTFeCmVe2X1nw2djnkcuxDWn', NULL, '54.183.231.156', 'Mozilla/5.0 (Macintosh; Intel Mac OS X 11_7_1) AppleWebKit/537.32 (KHTML, like Gecko) Chrome/29.0.1393.35 Safari/535.24', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiaWF0bHZ5NDAzdHg3Nk1zTmpnSUU3RmlKODJYSkZtMzZKMzZCdlZDaSI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDI6Imh0dHA6Ly9zdHJhaW54LmJzc3N0YWdlc2VydmVyZm9ycGFuZWxzLnh5eiI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1767253226),
('W3v1wAszrCjU9F9jxP3zajVL8UDMqaSgyxshIXnq', NULL, '119.73.96.204', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/143.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoidjBxN21kOXhGRTJwbG1TMkpRbnp4MldaRlJWOGJJTUFOY0lzOXVPMyI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6NDk6Imh0dHBzOi8vc3RyYWlueC5ic3NzdGFnZXNlcnZlcmZvcnBhbmVscy54eXovbG9naW4iO3M6NToicm91dGUiO3M6NToibG9naW4iO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjUxOiJodHRwczovL3N0cmFpbnguYnNzc3RhZ2VzZXJ2ZXJmb3JwYW5lbHMueHl6L3Byb2ZpbGUiO319', 1767257843);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` varchar(255) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `height` decimal(5,2) DEFAULT NULL COMMENT 'Height in cm',
  `weight` decimal(5,2) DEFAULT NULL COMMENT 'Weight in kg',
  `activity_level` enum('Sedentary','Lightly active','Moderately active','Highly active') DEFAULT NULL,
  `sleep_goals` int(11) DEFAULT NULL COMMENT 'Sleep goal in hours',
  `wake_up_time` time DEFAULT NULL,
  `bedtime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `name`, `email`, `role`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `age`, `height`, `weight`, `activity_level`, `sleep_goals`, `wake_up_time`, `bedtime`) VALUES
(1, 'Gavin Weiss', 'Gavin Weiss', 'sokowec@mailinator.com', 'admin', NULL, '$2y$12$PEVZ1WINUtbIasN4wlUio.zZjEuqij.ERbFN4DQynYPaA0kQrrbQK', NULL, '2025-12-31 14:04:50', '2026-01-02 14:03:47', 34, NULL, NULL, NULL, NULL, NULL, NULL),
(5, '', 'Lars Spears', 'jocywexyg@mailinator.com', 'admin', NULL, '$2y$12$KrP.fyurgAh41WH5nwQV0.nDOSjVpclgZ64mTrQHS95aLinvijtVK', NULL, '2026-01-01 12:41:00', '2026-01-01 12:41:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(7, '', 'Alexander Wyatt', 'qehyp@mailinator.com', 'admin', NULL, '$2y$12$pb6gzva9mBAIKWuiOZSI.egdqLwQ/HaGdvjapMLjJQONBPsxwIf3e', NULL, '2026-01-01 12:51:50', '2026-01-01 12:51:50', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(8, '', 'Callum Townsend76', 'saqiqaq@mailinator.com', 'admin', NULL, '$2y$12$EKYEZZGJJmuBBPI1J0IYruPWq9FSKOgZVfL2lfEuau.iwcwBdOXr.', NULL, '2026-01-01 13:53:02', '2026-01-01 14:03:24', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(9, '', 'Kaye Joseph', 'lezoguveza@mailinator.com', 'admin', NULL, '$2y$12$3pRC1Z8CYnK403xwu4oiQufneT/NLOd7QPsf9djmiXmDhkCFKOf9.', NULL, '2026-01-01 14:12:53', '2026-01-01 14:12:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(11, '', 'Usama Tariq', 'cssaadhashmi@gmail.com', 'admin', NULL, '$2y$12$H6r4Cs8ulo/4e1Uy5OwAf.FHZoBms7lIKudNxlAQug20qONtoFeDa', NULL, '2026-01-01 14:28:14', '2026-01-01 14:28:14', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(13, 'Bisharat Ali', 'Bisharat Ali', 'bisharatali45@gmail.com', 'admin', NULL, '$2y$12$2YAcEnI.havAugfktbxPnuCRB6Y.mwS6zfBQsvOmmPLjdOUfSH37W', NULL, '2026-01-02 10:29:15', '2026-01-10 16:34:00', 43, 34.00, 34.00, 'Sedentary', 5, '07:00:00', NULL),
(14, NULL, 'Walter Whitley', 'gafyku@mailinator.com', 'admin', NULL, '$2y$12$wmHP9rIfBvT6jV2N9YXho.B17lojmV69WIi61HJqUnUbkuU4OSogC', NULL, '2026-01-02 13:31:00', '2026-01-02 13:31:00', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(15, 'Stephen Chavez', 'Constance Palmer', 'nunatamyx@mailinator.com', 'admin', NULL, '$2y$12$TUOpyqza6.1A40nGOpd5.uZ9VcBq0b/c7aM3emflAhds9O19pzo8a', NULL, '2026-01-02 13:40:54', '2026-01-02 13:40:54', 53, 61.00, 99.00, 'Lightly active', 7, '00:08:00', NULL),
(16, NULL, 'Rooney Travis', 'hyxotug@mailinator.com', 'admin', NULL, '$2y$12$bqv.xnqV7Oq.fWZq9Puyuu5cpI1ok4aSlkG71WNU0C.31/feM5ccu', NULL, '2026-01-03 14:14:45', '2026-01-03 14:14:45', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(17, NULL, 'Aslam', 'aslam@gmail.com', 'admin', NULL, '$2y$12$YaJSyWihU/upCBzCNYbQSeffPGy.hi2PYRBMx88D9YG6eCRSuWVbm', NULL, '2026-01-09 10:03:11', '2026-01-09 10:03:11', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(18, 'Bisharat Ali', 'Bisharat Ali', 'bisharatali55@gmail.com', 'admin', NULL, '$2y$12$tlyH9yx7ttRJPwaVzylJLukYTN29pGY5HTrCWtdY8z2AVU1tsuBD.', NULL, '2026-01-09 10:24:42', '2026-01-09 10:24:42', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(19, NULL, 'Wing Boyle', 'xicekaqo@mailinator.com', 'admin', NULL, '$2y$12$zErjevNuLKEj5Dq7GJZw6ORMbO3kQv5UL4gFeheQzlrOJcovO1fyO', NULL, '2026-01-10 15:59:34', '2026-01-10 15:59:34', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(20, NULL, 'Maya Mcneil', 'vubagu@mailinator.com', 'admin', NULL, '$2y$12$UawarPi.U.0Qkvq9./YwI.kGE2/zXAgE.2cqeKEsJ2zyCMrzqmE0.', NULL, '2026-01-10 15:59:53', '2026-01-10 15:59:53', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(21, NULL, 'Mari Rosa', 'nuhy@mailinator.com', 'admin', NULL, '$2y$12$ga7VVAqzxbKMtYZi3B03k.nDRog0WqMtqX0VujDFC43qEBRLpPMYu', NULL, '2026-01-10 16:00:26', '2026-01-10 16:00:26', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(22, NULL, 'Selma Savage', 'cykonoru@mailinator.com', 'admin', NULL, '$2y$12$XJ5Yv/TMvukrDVZ1EQiKbO02PcGJGLSf0ox7p4Ktxsoz0MpV59S2i', NULL, '2026-01-10 16:18:21', '2026-01-10 16:18:21', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(23, 'Bisharat Ali', 'Bisharat Ali', 'bisharatali453@gmail.com', 'admin', NULL, '$2y$12$25E8loFRYcuphcZ3heu3ruOIdgtXltxaNvajnIwi/67iDkkG30Kde', NULL, '2026-01-10 16:31:12', '2026-01-10 16:31:12', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(24, NULL, 'Admin', 'admin@gmail.com', 'admin', NULL, '$2y$12$vo/GmQqB2fpM.W134Wah5ez0Br/X6x8M29WB6wilY1hmb27EU3NG6', NULL, '2026-01-10 16:52:39', '2026-01-10 16:52:39', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(25, 'Bisharat Ali', 'Bisharat Ali', 'bisharatali453@gmail.com4', 'admin', NULL, '$2y$12$6k05.mf4A9xU/XZl.gSmc.7y9Ts7obYBnqHBY/nfaMTYkPzZS857e', NULL, '2026-01-10 16:57:30', '2026-01-10 16:57:30', NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(26, 'Bisharat Ali', 'Bisharat Ali', 'bisharatali453@gmail.com43', NULL, NULL, '$2y$12$G5Qjx.Wf9.IgkX78Z4jQQONxp6BSp1r/PAhbPLCAiQQCzSz83mcoC', NULL, '2026-01-10 16:58:16', '2026-01-10 16:58:16', NULL, NULL, NULL, NULL, NULL, NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
