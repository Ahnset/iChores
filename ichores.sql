-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2017 at 02:49 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ichores`
--

-- --------------------------------------------------------

--
-- Table structure for table `deals`
--

CREATE TABLE `deals` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  `service_id` int(10) UNSIGNED NOT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `service_date` date NOT NULL,
  `payment_method` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `deals`
--

INSERT INTO `deals` (`id`, `user_id`, `service_id`, `phone`, `address`, `service_date`, `payment_method`, `created_at`, `updated_at`) VALUES
(1, 3, 2, '0243456789', 'Circle, Accra', '2017-04-26', 'electronic', '2017-04-24 22:34:26', '2017-04-24 22:34:26');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE `messages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `status` varchar(20) COLLATE utf8_unicode_ci DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `name`, `email`, `message`, `created_at`, `updated_at`, `status`) VALUES
(1, 'John Doe', 'jDoe@mail.com', 'Hi there, this is awesome test.\r\nSUCCESS!', '2017-01-08 23:04:09', '2017-10-30 12:05:02', 'dealt with'),
(2, 'asd', 'admin@test.mail', 'hbgf4rdbhgrvfe', '2017-04-20 10:18:51', '2017-10-30 12:04:59', 'dealt with'),
(3, 'jerome', 'jerome@test.com', 'test', '2017-10-30 11:18:06', '2017-10-30 12:04:34', 'dealt with'),
(4, 'Jake Mike', 'JM@gmail.test', 'Hey guys, love your work, you are awesome :)', '2017-10-30 12:07:03', '2017-11-13 14:56:15', 'dealt with'),
(5, 'mTester', 'mtester@test.com', 'Hi, there! I love your platform; it makes it easy for me to get my stuffs done. Great job!', '2017-11-13 14:53:53', '2017-11-13 14:57:25', 'dealt with'),
(6, 'John Doe', 'admin@mail.com', 'Hi Bixbi!', '2017-12-24 00:16:36', '2017-12-24 00:16:36', 'pending');

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2017_01_06_005117_create_messages_table', 1),
(4, '2017_01_07_150112_create_services_table', 1),
(5, '2017_01_08_014257_add_services_tweaks', 1),
(6, '2017_01_08_020246_add_services_color', 1),
(7, '2017_04_11_200620_add_usertype', 2),
(8, '2017_04_11_201352_add_service_price', 3),
(10, '2017_04_24_212533_create_deals_table', 4);

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
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ionicon` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `animation_effect` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `animation_duration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `animation_offset` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `ionicon`, `created_at`, `updated_at`, `animation_effect`, `animation_duration`, `animation_offset`, `color`, `price`) VALUES
(1, 'Garden Maintenance', 'ion-leaf', NULL, NULL, 'fadeInLeft', '.5s', '0s', '#8BC34A', '80'),
(2, 'House Cleaning', 'ion-settings', NULL, NULL, 'fadeInUp', '.5s', '.25s', '#607D8B', '100'),
(3, 'Laundry Service', 'ion-disc', NULL, NULL, 'fadeInUp', '.5s', '.5s', '#9575CD', '70'),
(4, 'Dog Walking', 'ion-arrow-graph-up-right', NULL, NULL, 'fadeInUp', '.5s', '.75s', '#00B0FF', '50'),
(5, 'Car Was', 'ion-aperture', NULL, NULL, 'fadeInUp', '.5s', '1s', '#FF1744', '40'),
(6, 'Custom Service', 'ion-nuclear', NULL, NULL, 'fadeInRight', '.5s', '1.25s', '#FFC400', '');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` int(11) NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) DEFAULT NULL,
  `telephone` varchar(50) DEFAULT NULL,
  `address` varchar(100) DEFAULT NULL,
  `service_date` date DEFAULT NULL,
  `payment_method` varchar(50) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `transac_id` varchar(50) DEFAULT NULL,
  `pay_token` varchar(50) DEFAULT NULL,
  `cust_ref` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rate` int(11) DEFAULT NULL,
  `admin_status` varchar(20) DEFAULT 'pending'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`id`, `user_id`, `service_id`, `telephone`, `address`, `service_date`, `payment_method`, `status`, `transac_id`, `pay_token`, `cust_ref`, `created_at`, `updated_at`, `rate`, `admin_status`) VALUES
(1, 7, 1, '123453423', 'dsfsdx', '2017-11-07', 'physical', NULL, NULL, NULL, NULL, '2017-10-30 11:26:21', '2017-11-13 14:57:53', NULL, 'dealt with'),
(2, 7, 1, '123453423', 'dsfsdx', '2017-11-07', 'physical', NULL, NULL, NULL, NULL, '2017-10-30 11:26:46', '2017-10-30 12:05:19', NULL, 'dealt with'),
(3, 7, 5, '4323122435', 'qwwesda', '2017-10-31', 'physical', NULL, NULL, NULL, NULL, '2017-10-30 11:31:14', '2017-10-30 12:04:06', NULL, 'dealt with'),
(4, 10, 1, '4323122435', 'vbcvxcdsadsfdgf', '2017-11-22', 'physical', NULL, NULL, NULL, NULL, '2017-11-13 14:50:33', '2017-11-13 14:57:58', 4, 'dealt with'),
(5, 10, 2, '4323122435', 'vbcvxcdsadsfdgf', '2017-11-13', 'physical', NULL, NULL, NULL, NULL, '2017-11-13 14:51:11', '2017-11-13 14:58:00', 5, 'dealt with'),
(6, 10, 5, '4323122435', 'vbcvxcdsadsfdgf', '2017-11-30', 'electronic', '0', '3493-455454-EEEE', 'd5ea9db1-0754-42a0-a729-3f5d6d5f4280', '10_1510586243', '2017-11-13 15:17:44', '2017-11-13 15:18:32', 4, 'dealt with'),
(7, 1, 1, '4323122435', 'dsfsdx', '2017-11-27', 'physical', NULL, NULL, NULL, NULL, '2017-11-24 16:02:25', '2017-12-24 00:10:23', 4, 'dealt with'),
(8, 11, 1, '12345678', 'Cocody, Abidjan, Ivory Coast', '2017-12-28', 'physical', NULL, NULL, NULL, NULL, '2017-12-24 00:16:00', '2017-12-24 00:16:19', 3, 'pending'),
(9, 11, 5, '12345678', 'Cocody, Abidjan, Ivory Coast', '2017-12-30', 'electronic', '0', '3493-455454-EEEE', '9c421b9f-188e-4a3d-9c66-fd21cc98d1b8', '11_1514074754', '2017-12-24 00:25:27', '2017-12-24 00:25:53', 5, 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `usertype` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`, `usertype`) VALUES
(1, 'admin', 'admin@test.mail', '$2y$10$lz5ZGAZE2amRDP2/6ujjKOCHOevifP.drvTcpvJ.Gt8Bd35Hz6/xS', 'ofVTPgHvEpVwjfeHw521NGZWqakFeUXLzQDmElEdU8v63ErWnDBKh3qBXWfl', '2017-04-11 20:24:27', '2017-11-24 16:02:39', 'user'),
(2, 'Steve A', 'steve@gmail.com', '$2y$10$R/CncOFmZ4R5yIcHtKksAu5p3/a8NkSOlwNh982qDj3elOLaTma..', 'JqauAUHYCTBGlhA6H0lwKf10pNxU3mT5GEXJiVl1ER9ZcLBA2H3jUzbJiNGN', '2017-04-12 10:11:35', '2017-04-12 10:36:43', 'user'),
(3, 'Jade Doe', 'Jade@doe.io', '$2y$10$fnF3LBPGorUlspXuqnr2w.AtH5P8YmiEyFFkNLY07FuocGJYTgszy', 'JU65cVXGnDOLb7WlqLNVsB6u2JtdJbtA2DhD3GXwa4tYjaCsm5JvVqOKgw68', '2017-04-14 00:34:35', '2017-04-25 19:30:59', 'user'),
(4, 'test', 'testing@email.com', '$2y$10$q8L1w4S.LpIqvEPSFHZGFeh7cm/BHGRuO53CyV6/9e7I.Riw6pTTS', 's3196CT8w3ByZUZf1zAo49y9ltnoyULAOZYqQEXWFsXydZUt3v9JzOl0tsm3', '2017-04-25 14:25:16', '2017-04-25 14:31:54', 'user'),
(5, 'Jack Doe', 'jack@test.com', '$2y$10$ECfh0u2KUTkB8RGze96G3ufJLf.avVK5cCTwZbxWT3YMQb.SbdBWG', NULL, '2017-07-31 20:33:54', '2017-07-31 20:33:54', 'user'),
(6, 'test00', 'test@test.com', '$2y$10$7CgI/YWICqKZyhNLMONiFOa4pzSy7FNFfi4onJ9aD1/EikApOgNSq', NULL, '2017-10-30 09:17:42', '2017-10-30 09:17:42', 'user'),
(7, 'jerome', 'jerome@test.com', '$2y$10$laUDCMSHqOd9LNpU4sMk1ukZvwbWIsGpc9MRu7D14pdFEk4HTE10G', 'FIIAL84R9WsJCm2yJmB0PPZMNWVRTLaiMOSeSW4ffqPquf92mharMv68lvEY', '2017-10-30 09:33:31', '2017-10-30 11:51:07', 'user'),
(8, 'new admin', 'myadmin@test.com', '$2y$10$lRUGh75wjPfP2A3Co/a69uyOnAg8uvY.XvI24hC9xzAwmp7lmRi9u', 'IGfvvk5xhX9SytuhZq28AyxFIiWoowhM1gi1o8IGWW2QVB1PxL7tqQ4hhwMv', '2017-10-30 11:51:59', '2017-10-30 12:07:23', 'admin'),
(9, 'fname lname', 'admin@test.com', '$2y$10$dQe2D7JGJei0tz0yY1cfueLW12iBUQcXeNB6IWHDrxdEDlqE7GgUW', 'FcWGfXD2zBDarVDlsJaZrFG5USJ1C8goazXSuQGvaU35GjBYAgZJflieHUXi', '2017-11-08 21:54:40', '2017-11-08 21:58:02', 'user'),
(10, 'mTester', 'mtester@test.com', '$2y$10$vDrawhte6T2/v9JEsLqOUuL6/CkUPQakhHdWLTCSgDuIdwsXUdAhq', 'wvd5yT0977pSAlTeKGCMSBlX9e4eXLnKS34ldSacQqFTVplyvToQ3fchqYHN', '2017-11-13 14:50:05', '2017-11-13 15:18:07', 'user'),
(11, 'John Doe', 'admin@mail.com', '$2y$10$w7WfX5ysS07q9BIgBgKBve8yMFY6GGsqsdWPOXqrMpjDE7zNlJcvm', 'Y6Flqx2xzQrcPUIF7w6oPgy8P6IrEVO3t1Yodc51Q3PCOLgzC1zAsjl7GhYl', '2017-12-24 00:04:59', '2017-12-24 00:07:34', 'user'),
(12, 'Dave Doe', 'super@mail.com', '$2y$10$n9ycjSjbnj3Ey8BRQi45hOENY/NzIAPZmTdDHmY3WLaEEvgOKnYMi', '9bAF6CkJAgWlNJcEmI4ig9ZQrY60uicwCQMKDzmjSupcobrNW1Ub4wChDKA5', '2017-12-24 00:08:11', '2017-12-24 00:16:54', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `deals`
--
ALTER TABLE `deals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `service_id` (`service_id`);

--
-- Indexes for table `messages`
--
ALTER TABLE `messages`
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
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
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
-- AUTO_INCREMENT for table `deals`
--
ALTER TABLE `deals`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `messages`
--
ALTER TABLE `messages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `deals`
--
ALTER TABLE `deals`
  ADD CONSTRAINT `deals_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `deals_ibfk_2` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
