-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 17, 2017 at 12:20 PM
-- Server version: 10.2.3-MariaDB-log
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `perpustakaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(10) UNSIGNED NOT NULL,
  `kd_booking` varchar(15) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `visitor_id` int(10) UNSIGNED NOT NULL,
  `paket_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `kd_booking`, `visitor_id`, `paket_id`, `created_at`, `updated_at`) VALUES
(1, '06201764', 4, 1, '2017-06-02 09:05:59', '2017-06-02 09:05:59'),
(2, '062017381', 6, 1, '2017-06-02 09:14:54', '2017-06-02 09:14:54'),
(3, '062017829', 7, 1, '2017-06-02 09:25:35', '2017-06-02 09:25:35'),
(4, '062017436', 8, 1, '2017-06-02 09:32:52', '2017-06-02 09:32:52'),
(5, '06201787', 9, 1, '2017-06-02 09:33:35', '2017-06-02 09:33:35'),
(6, '06201737', 10, 1, '2017-06-02 09:33:48', '2017-06-02 09:33:48'),
(7, '062017347', 11, 1, '2017-06-02 09:34:33', '2017-06-02 09:34:33'),
(8, '062017680', 12, 1, '2017-06-02 09:34:53', '2017-06-02 09:34:53'),
(9, '0620176', 13, 1, '2017-06-02 09:35:00', '2017-06-02 09:35:00'),
(10, '062017916', 14, 1, '2017-06-02 09:35:13', '2017-06-02 09:35:13'),
(11, '062017152', 15, 1, '2017-06-02 09:35:20', '2017-06-02 09:35:20'),
(12, '062017712', 16, 1, '2017-06-02 09:35:29', '2017-06-02 09:35:29'),
(13, '062017108', 17, 1, '2017-06-02 09:35:45', '2017-06-02 09:35:45'),
(14, '062017802', 18, 1, '2017-06-02 09:36:13', '2017-06-02 09:36:13'),
(15, '062017423', 19, 1, '2017-06-02 09:36:44', '2017-06-02 09:36:44'),
(16, '062017479', 20, 1, '2017-06-02 09:37:22', '2017-06-02 09:37:22'),
(17, '062017900', 21, 1, '2017-06-02 09:37:50', '2017-06-02 09:37:50'),
(18, '062017724', 22, 1, '2017-06-02 09:38:16', '2017-06-02 09:38:16'),
(19, '062017992', 23, 1, '2017-06-02 09:38:24', '2017-06-02 09:38:24'),
(20, '062017441', 24, 1, '2017-06-02 09:38:39', '2017-06-02 09:38:39'),
(21, '062017312', 25, 1, '2017-06-02 09:39:09', '2017-06-02 09:39:09'),
(22, '062017271', 26, 1, '2017-06-02 09:39:33', '2017-06-02 09:39:33'),
(23, '062017533', 27, 1, '2017-06-02 09:39:39', '2017-06-02 09:39:39');

-- --------------------------------------------------------

--
-- Table structure for table `bukus`
--

CREATE TABLE `bukus` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `slug` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` enum('download','external-link') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `pages` int(11) DEFAULT NULL,
  `filesize` int(20) DEFAULT NULL,
  `mime` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bukus`
--

INSERT INTO `bukus` (`id`, `title`, `user_id`, `slug`, `type`, `description`, `cover`, `url`, `pages`, `filesize`, `mime`, `created_at`, `updated_at`) VALUES
(9, 'Sejarah Sukaregang', 1, 'sejarah-sukaregang', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', '12 April 2017 - Belajar PHP.docx', NULL, 14490, 'application/vnd.openxmlformats-officedocument.wordprocessingml.document', '2017-06-08 02:51:08', '2017-06-08 02:51:08'),
(10, 'File HTML Contoh', 1, 'file-html-contoh', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'content-slider.html', NULL, 38754, 'text/html', '2017-06-08 03:04:19', '2017-06-08 03:04:19'),
(11, 'Menyelam Samudra PHP', 1, 'menyelam-samudra-php', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', NULL, 8573592, 'application/pdf', '2017-06-08 03:21:07', '2017-06-08 03:21:07'),
(12, 'testtest', 1, 'testtest', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Zyxel-Firmware-Upgrade-Procedure.pdf', 0, 754873, 'application/pdf', '2017-06-08 13:19:34', '2017-06-08 13:19:34'),
(13, 'baru baru', 1, 'baru-baru', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 0, 8573592, 'application/pdf', '2017-06-08 13:21:02', '2017-06-08 13:21:02'),
(14, 'Tentang Jaket Julitsss asdas', 1, 'tentang-jaket-julitsss-asdas8', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'ISG50-ISDN_1.pdf', NULL, 2101330, 'application/pdf', '2017-06-10 10:40:36', '2017-06-10 10:40:36'),
(15, 'test deuii', 1, 'test-deuii7', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Zyxel-Firmware-Upgrade-Procedure_2.pdf', NULL, 754873, 'application/pdf', '2017-06-10 10:51:27', '2017-06-10 10:51:27'),
(16, 'test deuii', 1, 'test-deuii6', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Zyxel-Firmware-Upgrade-Procedure_2.pdf', NULL, 754873, 'application/pdf', '2017-06-10 10:51:45', '2017-06-10 10:51:45'),
(17, 'test deasda', 2, 'test-deasda9', NULL, 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Ebook PHP - Menyelam dan Menaklukan Samudra PHP - Loka Dwiartara_2.pdf', 'Support_FREAK_vulnerability_2nd_release_steps.pdf', NULL, 757251, 'application/pdf', '2017-06-10 10:52:35', '2017-06-10 10:52:35');

-- --------------------------------------------------------

--
-- Table structure for table `buku_categories`
--

CREATE TABLE `buku_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `buku_id` int(10) UNSIGNED NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Sistem Informasi', 'Sistem Informasi asjdkas jdaks daskdjas', '2017-06-07 18:21:24', '2017-06-07 18:21:24'),
(2, 'Buku Teks', 'Buku teks askjdkasldjasl\'dj as', '2017-06-07 18:21:28', '2017-06-07 18:21:29'),
(3, 'Jaringan Komputer', 'adasjfh sajkf haskdjf hsadkfhasd kfs', '2017-06-08 00:13:31', '2017-06-08 00:13:31'),
(4, 'Artifical Intelligence', NULL, '2017-06-08 00:14:41', '2017-06-08 00:14:41');

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `url`, `created_at`, `updated_at`) VALUES
(1, 'http://taratourtravel.com/wp-content/uploads/2017/04/paket-tour-paris.jpg', NULL, NULL),
(2, 'http://www.macwallhd.com/wp-content/Wallpapers/20121114/Full%20HD%20Apple%20Backgorund%20HD%20View103.jpg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `information`
--

CREATE TABLE `information` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `information`
--

INSERT INTO `information` (`id`, `title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.', '2017-06-11 13:31:27', '2017-06-11 13:31:28'),
(2, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.', '2017-04-18 13:31:27', '2017-06-11 13:31:28'),
(3, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.', '2017-05-11 13:31:27', '2017-06-11 13:31:28'),
(4, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.', '2017-06-11 13:31:27', '2017-06-11 13:31:28'),
(5, 'Lorem Ipsum', 'Lorem ipsum dolor sit amet, nam ex sumo justo officiis, ut viderer invidunt apeirian quo. Sea aeque petentium ne, vim diam sint scripta ad. Tractatos democritum sit eu, ea pro sapientem voluptatibus. Eos ad audire prodesset, phaedrum splendide democritum at vix.', '2017-06-11 13:31:27', '2017-06-11 13:31:28');

-- --------------------------------------------------------

--
-- Table structure for table `infos`
--

CREATE TABLE `infos` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infos`
--

INSERT INTO `infos` (`id`, `name`, `description`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Perpustakaan Online', 'kjaskldjsak', 'info@gmail.co', '2017-06-08 07:34:34', '2017-06-09 22:12:10');

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
(3, '2017_05_24_022124_create_pakets_table', 2),
(4, '2017_06_02_155721_create_visitors_table', 3),
(5, '2017_06_02_160217_create_bookings_table', 4),
(6, '2017_06_11_131115_create_information_table', 5),
(7, '2017_06_11_133808_create_galleries_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pakets`
--

CREATE TABLE `pakets` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pakets`
--

INSERT INTO `pakets` (`id`, `title`, `content`, `price`, `created_at`, `updated_at`) VALUES
(1, 'Paket Hemat', 'Lorem ipsum ashdklasdkasjdas', 5000000, NULL, NULL),
(2, 'Paket VIP', 'Lorem ipsum ashdklasdkasjdas', 5000000, NULL, NULL),
(3, 'Paket Segar', 'Lorem ipsum ashdklasdkasjdas', 5000000, NULL, NULL),
(4, 'Paket Paket Plus', 'Lorem ipsum ashdklasdkasjdas', 5000000, NULL, NULL);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Antonio Saiful Islam', 'antoniosai', 'finallyantonio@gmail.com', '$2y$10$H1QBAp2gIk3DbZU2fzmnG.NTaaYF5Z0GCn2upMGK/oBgwPmY8bMsW', NULL, '2017-06-19 03:34:16', '2017-06-19 03:34:16');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE `visitors` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Antonio Saiful Islam', 'antoniosaiful10@gmail.com', 'antoniosaiful10@gmail.com', '2017-06-02 09:01:51', '2017-06-02 09:01:51'),
(4, 'Antonio Saiful Islam', 'dikyanggara@gmail.com', '081412312123', '2017-06-02 09:05:59', '2017-06-02 09:05:59'),
(6, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:14:54', '2017-06-02 09:14:54'),
(7, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:25:35', '2017-06-02 09:25:35'),
(8, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:32:52', '2017-06-02 09:32:52'),
(9, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:33:35', '2017-06-02 09:33:35'),
(10, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:33:48', '2017-06-02 09:33:48'),
(11, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:34:32', '2017-06-02 09:34:32'),
(12, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:34:52', '2017-06-02 09:34:52'),
(13, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:35:00', '2017-06-02 09:35:00'),
(14, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:35:13', '2017-06-02 09:35:13'),
(15, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:35:20', '2017-06-02 09:35:20'),
(16, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:35:29', '2017-06-02 09:35:29'),
(17, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:35:45', '2017-06-02 09:35:45'),
(18, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:36:13', '2017-06-02 09:36:13'),
(19, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:36:44', '2017-06-02 09:36:44'),
(20, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:37:22', '2017-06-02 09:37:22'),
(21, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:37:50', '2017-06-02 09:37:50'),
(22, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:38:15', '2017-06-02 09:38:15'),
(23, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:38:24', '2017-06-02 09:38:24'),
(24, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:38:39', '2017-06-02 09:38:39'),
(25, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:39:09', '2017-06-02 09:39:09'),
(26, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:39:32', '2017-06-02 09:39:32'),
(27, 'Antonio Saiful Islam', 'dikyanggara1@gmail.com', '081412312123', '2017-06-02 09:39:39', '2017-06-02 09:39:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bukus`
--
ALTER TABLE `bukus`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_bukus_users` (`user_id`);

--
-- Indexes for table `buku_categories`
--
ALTER TABLE `buku_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `FK_buku_categories_bukus` (`buku_id`),
  ADD KEY `FK_buku_categories_categories` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `information`
--
ALTER TABLE `information`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infos`
--
ALTER TABLE `infos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pakets`
--
ALTER TABLE `pakets`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `bukus`
--
ALTER TABLE `bukus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `buku_categories`
--
ALTER TABLE `buku_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `information`
--
ALTER TABLE `information`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `infos`
--
ALTER TABLE `infos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `pakets`
--
ALTER TABLE `pakets`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `bukus`
--
ALTER TABLE `bukus`
  ADD CONSTRAINT `FK_bukus_users` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `buku_categories`
--
ALTER TABLE `buku_categories`
  ADD CONSTRAINT `FK_buku_categories_bukus` FOREIGN KEY (`buku_id`) REFERENCES `bukus` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `FK_buku_categories_categories` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
