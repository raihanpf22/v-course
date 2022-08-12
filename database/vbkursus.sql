-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 13, 2022 at 01:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vbkursus`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(10) UNSIGNED NOT NULL,
  `admin_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admin_telp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_nama`, `admin_email`, `admin_telp`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin1', 'raihanpf22@student.gunadarma.ac.id', '081380209380', '$2y$10$rEzZVFEk6W0V5V7FhDlrbu148xRVaT4ywihMermDe97K1FoLGOOwq', NULL, '2022-08-11 03:57:24', '2022-08-11 03:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jadwal`
--

CREATE TABLE `jadwal` (
  `jadwal_id` int(10) UNSIGNED NOT NULL,
  `jadwal_kursus_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_kursus_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jadwal_waktu` date NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kursus`
--

CREATE TABLE `kursus` (
  `kursus_id` int(10) UNSIGNED NOT NULL,
  `kursus_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursus_keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `kursus_durasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kursus`
--

INSERT INTO `kursus` (`kursus_id`, `kursus_nama`, `kursus_keterangan`, `kursus_durasi`, `created_at`, `updated_at`) VALUES
(1, 'Kursus JavaScript Dasar', 'Daasar - Dasar JavaScript, Konsep OOP, Dan Pengenalan Manpulasi Data dengan DOM dan BOM', '5 Hari', '2022-08-11 04:49:34', '2022-08-10 22:54:20'),
(2, 'Kursus Front End Dasar', 'Pengenalan CSS, HTML, Dan JS Untuk Membangun Tampilan Interface', '5 Hari', '2022-08-11 04:51:27', '2022-08-11 04:51:27'),
(3, 'Kursus Teknisi Jaringan', 'Konfigurasi Jaringan Internal dan Jaringan Eksternal', '5 Hari', '2022-08-10 22:37:21', '2022-08-10 22:37:21');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_08_10_152058_create_admin_table', 1),
(6, '2022_08_10_152730_create_kursus_table', 2),
(7, '2022_08_10_153055_create_jadwal_table', 2),
(8, '2022_08_10_153343_create_verifikasi_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `mahasiswa_id` int(10) UNSIGNED NOT NULL,
  `mahasiswa_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahasiswa_npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `mahasiswa_kelas` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`mahasiswa_id`, `mahasiswa_nama`, `mahasiswa_npm`, `mahasiswa_kelas`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ulya Sudiati M.Ak', '46804067', '4IA22', '$2y$10$kx5LqijBZGPTB.8dFq7JFOkAGzZ8oaq/KIqpz65IFV/9wnREsp3/y', NULL, '2009-03-22 12:35:40', '2003-06-23 13:37:49'),
(2, 'Cayadi Rajata', '84823146', '4IA22', '$2y$10$/U8mXkRjLjaAWjzoGzYS2ui0lv.s6OmCYHUBNOMmtj8vkMR104XCO', NULL, '2010-08-25 09:18:42', '2015-05-22 10:31:55'),
(3, 'Karsana Cawisono Damanik M.Farm', '20587556', '4IA22', '$2y$10$9wlLQQzViBqEhVhZmTm4N.rsH/Q1bTCORfqFN1D/4fBwIXuRmdwOy', NULL, '1979-09-06 23:39:07', '1996-10-06 22:46:42'),
(4, 'Muni Garda Hidayanto', '53744190', '4IA22', '$2y$10$PZSrXbnsWE0/trQWAcDS2.yHo7RUUzB6.7vZnMRR5nik1tQ2uMpwC', NULL, '1976-03-12 18:08:35', '2013-05-31 13:21:33'),
(5, 'Wawan Adriansyah', '17349894', '4IA22', '$2y$10$0XLZN2Ih3vci305a9K0TW.jGJdoihct6ve4C3iWL9cmv848fK29l2', NULL, '2014-01-27 15:35:48', '1978-08-03 11:40:47'),
(6, 'Kartika Eva Mulyani M.M.', '55657779', '4IA22', '$2y$10$FAMZ8PUoHfz.2yLuIjDDZOdwv0vTI5j9TaxgxlDzUFtwI2asQqm3u', NULL, '2017-04-18 13:40:38', '2010-01-02 04:14:47'),
(7, 'Ganep Wasita', '48806821', '4IA22', '$2y$10$SMLXpWMuugtezO0cPipjsOsw6pE8DJv30DSUMPR28ecoXkMGTrRsu', NULL, '2018-08-03 20:15:07', '1997-05-13 15:31:12'),
(8, 'Salwa Janet Uyainah', '45139958', '4IA22', '$2y$10$7kmbFIjJvLFjxroGpFy1Iu3iPaeUouLNit3XDpemRYoCXPgC7tcVm', NULL, '2018-04-20 12:17:38', '2017-04-08 06:32:08'),
(9, 'Yuni Haryanti', '41103999', '4IA22', '$2y$10$lnyPAtCo60fBV8RT58NGvOIJ7qVfd/jw5G7JnLJ4OFcW.jLkJ4UNK', NULL, '2013-11-26 20:40:46', '1987-07-27 18:40:08'),
(10, 'Karen Uyainah', '91166002', '4IA22', '$2y$10$lOpZ/ESasIzdHWgIMGirHOl2AWG3PCd..tTefx3Iwt7t6MS5SuVf.', NULL, '1984-07-23 04:27:39', '1988-07-04 03:47:52'),
(14, 'Raihan Pambagyo Fadhila', '55418842', '4IA21', '$2y$10$5s3VhuMwOXJeZX.ZshroxegcYvmYEdtwlG/gRo8RRHm0t6Pupfxwu', NULL, '2022-08-10 20:46:34', '2022-08-11 04:25:45');

-- --------------------------------------------------------

--
-- Table structure for table `verifikasi`
--

CREATE TABLE `verifikasi` (
  `verifikasi_id` int(10) UNSIGNED NOT NULL,
  `verifikasi_mahasiswa_nama` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT 'text',
  `verifikasi_npm` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifikasi_kursus_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifikasi_jadwal_waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jadwal`
--
ALTER TABLE `jadwal`
  ADD PRIMARY KEY (`jadwal_id`);

--
-- Indexes for table `kursus`
--
ALTER TABLE `kursus`
  ADD PRIMARY KEY (`kursus_id`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`mahasiswa_id`),
  ADD UNIQUE KEY `users_mahasiswa_npm_unique` (`mahasiswa_npm`);

--
-- Indexes for table `verifikasi`
--
ALTER TABLE `verifikasi`
  ADD PRIMARY KEY (`verifikasi_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jadwal`
--
ALTER TABLE `jadwal`
  MODIFY `jadwal_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kursus`
--
ALTER TABLE `kursus`
  MODIFY `kursus_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `mahasiswa_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `verifikasi`
--
ALTER TABLE `verifikasi`
  MODIFY `verifikasi_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
