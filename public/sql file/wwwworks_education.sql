-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 11, 2022 at 04:37 AM
-- Server version: 5.7.23-23
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wwwworks_education`
--

-- --------------------------------------------------------

--
-- Table structure for table `adddates`
--

CREATE TABLE `adddates` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `signup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `addslot_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `date` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `publish` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adddates`
--

INSERT INTO `adddates` (`id`, `signup_id`, `user_id`, `addslot_id`, `date`, `time1`, `time2`, `url`, `location`, `created_at`, `updated_at`, `publish`) VALUES
(110, '340', '170', '89,90', '2022-03-17', '21:40', '22:40', 'share/MzQw/MTcw', 'Kolkata', '2022-03-16 10:04:42', '2022-03-16 10:07:12', 'done'),
(111, '340', '170', '89,91', '2022-03-17', '15:30', '16:30', 'share/MzQw/MTcw', 'Bidhannagar', '2022-03-16 10:04:42', '2022-03-16 10:07:12', 'done'),
(112, '340', '170', '89', '2022-03-18', '21:40', '22:34', 'share/MzQw/MTcw', 'North 24 Porgona', '2022-03-16 10:04:42', '2022-03-16 10:07:12', 'done'),
(115, '342', '61', '94,96', '2022-03-31', '17:00', '19:00', 'share/MzQy/NjE=', 'San Ramon', '2022-03-24 17:38:19', '2022-03-24 18:12:58', 'done'),
(117, '343', '61', '97,98', '2022-03-31', '17:00', '19:00', 'share/MzQz/NjE=', 'San Ramon', '2022-03-24 18:16:34', '2022-03-24 18:18:19', 'done'),
(118, '344', '1', '100,108', '2022-03-31', '15:48', '18:29', 'share/MzQ0/MQ==', 'Bandle', '2022-03-25 10:19:28', '2022-03-31 10:11:50', 'done'),
(119, '344', '1', '100,108', '2022-03-29', '13:05', '15:49', 'share/MzQ0/MQ==', 'Bardhaman', '2022-03-25 10:19:28', '2022-03-31 10:11:50', 'done'),
(121, '346', '61', '103,104', '2022-04-01', '17:00', '18:00', 'share/MzQ2/NjE=', 'San Ramon', '2022-03-30 17:04:11', '2022-03-30 17:10:59', 'done'),
(123, '346', '61', '103,104', '2022-04-08', '17:00', '18:00', 'share/MzQ2/NjE=', 'San Ramon', '2022-03-30 17:07:47', '2022-03-30 17:10:59', 'done'),
(124, '346', '61', '104,103', '2022-04-22', '17:00', '18:00', 'share/MzQ2/NjE=', 'San Ramon', '2022-03-30 17:10:00', '2022-03-30 17:10:59', 'done'),
(125, '346', '61', '104,103', '2022-04-29', '17:00', '21:00', 'share/MzQ2/NjE=', NULL, '2022-03-30 17:10:00', '2022-03-30 17:10:59', 'done'),
(129, '352', '1', '106,107', '2022-04-01', '16:00', '17:00', 'share/MzUy/MQ==', 'Kolkata', '2022-03-31 07:24:54', '2022-03-31 10:11:54', 'done'),
(132, '352', '1', '106', '2022-04-02', '13:00', '14:00', 'share/MzUy/MQ==', 'Bidhannagar', '2022-03-31 07:29:33', '2022-03-31 10:25:49', 'done'),
(133, '353', '1', '109', '2022-03-31', '17:11', '17:11', NULL, 'Bidhannagar, Kolkata', '2022-03-31 10:40:54', '2022-03-31 10:40:54', NULL),
(134, '3', '1', '110', '2022-04-01', '18:13', '16:17', NULL, 'Bidhannagar, Kolkata', '2022-03-31 10:43:25', '2022-03-31 10:43:25', NULL),
(136, '3', '1', '112', '2022-04-01', '18:17', '18:17', NULL, 'Bidhannagar, Kolkata', '2022-03-31 10:47:23', '2022-03-31 10:47:23', NULL),
(137, '355', '1', '113', '2022-04-01', '18:23', '17:23', 'share/MzU1/MQ==', 'Bidhannagar, Kolkata', '2022-03-31 10:53:48', '2022-03-31 11:30:55', 'done'),
(139, '355', '1', '115', '2022-04-01', '18:42', '21:48', 'share/MzU1/MQ==', 'Bidhannagar, Kolkata', '2022-03-31 11:09:42', '2022-03-31 12:53:28', 'done'),
(142, '356', '1', '118', '2022-04-01', '23:45', '00:48', NULL, 'Bidhannagar, Kolkata', '2022-03-31 14:15:26', '2022-03-31 14:15:26', NULL),
(143, '358', '61', '119', '2022-04-11', '17:00', '19:00', 'share/MzU4/NjE=', 'San Ramon', '2022-04-02 23:24:11', '2022-04-02 23:45:54', 'done'),
(144, '358', '61', '120', '2022-04-12', '17:00', '19:00', 'share/MzU4/NjE=', 'San Ramon', '2022-04-02 23:28:30', '2022-04-02 23:45:54', 'done'),
(145, '359', '1', '121', '2022-04-05', '17:00', '18:00', 'share/MzU5/MQ==', 'DLF', '2022-04-04 11:30:13', '2022-04-04 11:34:37', 'done'),
(146, '360', '61', '122', '2022-04-25', '21:00', '22:00', 'share/MzYw/NjE=', 'San Ramon', '2022-04-18 15:39:35', '2022-04-18 15:41:55', 'done'),
(147, '360', '61', '123', '2022-04-26', '22:00', '23:00', 'share/MzYw/NjE=', NULL, '2022-04-18 15:41:39', '2022-04-18 15:41:55', 'done'),
(148, '360', '61', '124', '2022-04-26', '22:00', '23:00', 'share/MzYw/NjE=', NULL, '2022-04-18 15:41:40', '2022-04-18 15:41:55', 'done'),
(149, '363', '1', '125', '2022-04-21', '17:00', '19:00', 'share/MzYz/MQ==', 'Kolkata', '2022-04-19 13:56:43', '2022-04-19 13:57:24', 'done'),
(150, '363', '1', '126', '2022-04-22', '19:26', '21:27', 'share/MzYz/MQ==', 'Kolkata', '2022-04-19 13:57:06', '2022-04-19 13:57:24', 'done'),
(152, '364', '1', '127', '2022-05-27', '15:02', '15:02', 'share/MzY0/MQ==', 'bnjtf c', '2022-04-27 09:32:32', '2022-04-27 10:38:57', 'done'),
(153, '365', '1', '128', '2022-04-28', '17:28', '19:28', 'share/MzY1/MQ==', 'vvgkjggh', '2022-04-27 10:58:13', '2022-04-27 11:00:44', 'done'),
(154, '365', '1', '129', '2022-04-28', '20:28', '21:28', 'share/MzY1/MQ==', 'hjkhl', '2022-04-27 10:58:41', '2022-04-27 11:00:44', 'done'),
(155, '365', '1', '130', '2022-04-28', '20:30', '21:30', 'share/MzY1/MQ==', 'kolkata', '2022-04-27 11:00:21', '2022-04-27 11:00:44', 'done'),
(156, '366', '175', '131', '2022-04-28', '17:35', '18:35', 'share/MzY2/MTc1', 'kolkata', '2022-04-27 11:05:32', '2022-04-27 11:08:22', 'done'),
(157, '366', '175', '132', '2022-04-29', '17:35', '18:36', 'share/MzY2/MTc1', 'kolkata', '2022-04-27 11:06:06', '2022-04-27 11:08:22', 'done'),
(158, '367', '9', '133,134', '2022-04-28', '23:23', '01:25', 'share/MzY3/OQ==', 'kolkata', '2022-04-27 17:54:35', '2022-04-27 17:58:00', 'done'),
(159, '367', '9', '133', '2022-04-29', '05:29', '12:23', 'share/MzY3/OQ==', 'kolkata', '2022-04-27 17:54:35', '2022-04-27 17:58:00', 'done'),
(160, '367', '9', '133', '2022-04-04', '01:26', '02:27', 'share/MzY3/OQ==', 'kolkata', '2022-04-27 17:55:47', '2022-04-27 17:58:00', 'done'),
(161, '367', '9', '134', '2022-04-28', '03:30', '01:28', 'share/MzY3/OQ==', 'kolkata', '2022-04-27 17:57:00', '2022-04-27 17:58:00', 'done'),
(162, '368', '61', '135', '2022-05-13', '17:00', '20:00', NULL, 'Home Address, San Ramon, CA', '2022-04-29 18:06:36', '2022-04-29 18:06:36', NULL),
(163, '368', '61', '136', '2022-05-13', '17:00', '20:00', NULL, 'Home Address, San Ramon, CA', '2022-04-29 18:07:35', '2022-04-29 18:07:35', NULL),
(164, '373', '9', '137', '2022-05-12', '03:12', '16:05', 'share/Mzcz/OQ==', 'Bidhannagar', '2022-05-03 06:15:22', '2022-05-03 06:31:17', 'done'),
(165, '373', '9', '138', '2022-05-04', '03:12', '15:25', 'share/Mzcz/OQ==', 'Kolkata', '2022-05-03 06:23:31', '2022-05-03 06:31:17', 'done'),
(166, '374', '9', '139', '2022-05-04', '02:04', '17:00', 'share/Mzc0/OQ==', 'Kolkata', '2022-05-03 12:16:28', '2022-05-03 12:22:59', 'done'),
(167, '375', '176', '140', '2022-05-05', '20:00', '21:00', 'share/Mzc1/MTc2', 'Arizona', '2022-05-03 12:34:23', '2022-05-03 12:35:21', 'done'),
(168, '376', '1', '141', '2022-05-04', '23:15', '12:15', 'share/Mzc2/MQ==', 'kolkata', '2022-05-03 12:46:08', '2022-05-03 12:46:49', 'done');

-- --------------------------------------------------------

--
-- Table structure for table `addslots`
--

CREATE TABLE `addslots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `signup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `adddate_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tslot` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `help` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `count_member` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `addslots`
--

INSERT INTO `addslots` (`id`, `signup_id`, `adddate_id`, `user_id`, `tslot`, `help`, `number`, `count_member`, `created_at`, `updated_at`) VALUES
(89, '340', NULL, '170', 'Drinks', 'All party member are invited for the meeting', '5', NULL, '2022-03-16 10:05:43', '2022-03-16 10:05:43'),
(90, '340', NULL, '170', 'Foods', 'All party member are invited for the meeting', '1', NULL, '2022-03-16 10:05:56', '2022-03-16 10:05:56'),
(91, '340', NULL, '170', 'Dance', 'Everyone invited for the meeting', '4', NULL, '2022-03-16 10:06:22', '2022-03-16 10:06:43'),
(92, '341', NULL, '1', 'Drinks', 'All students are invited for the class', '4', NULL, '2022-03-16 13:19:46', '2022-03-16 13:19:46'),
(93, '341', NULL, '1', 'Foods', 'All party member are invited for the meeting', '10', NULL, '2022-03-16 13:20:03', '2022-03-16 13:20:03'),
(94, '342', NULL, '61', 'Set up', NULL, '5', NULL, '2022-03-24 17:40:06', '2022-03-24 17:40:06'),
(95, '342', NULL, '61', 'Set up', NULL, '5', NULL, '2022-03-24 17:40:06', '2022-03-24 17:40:06'),
(96, '342', NULL, '61', 'Clean up', NULL, '5', NULL, '2022-03-24 17:40:32', '2022-03-24 17:40:32'),
(97, '343', NULL, '61', 'Food', NULL, '5', NULL, '2022-03-24 18:16:34', '2022-03-24 18:16:34'),
(98, '343', NULL, '61', 'Drinks', NULL, '5', NULL, '2022-03-24 18:16:52', '2022-03-24 18:17:02'),
(99, '341', NULL, '1', 'Board meeting', 'Everyone must come', '6', NULL, '2022-03-25 10:12:28', '2022-03-25 10:12:28'),
(100, '344', NULL, '1', 'Celebrate', 'Everyone must come', '15', NULL, '2022-03-25 10:19:57', '2022-03-31 07:17:01'),
(101, '345', NULL, '1', 'Drinks', 'Everyone must come to the picnic', '6', NULL, '2022-03-29 08:19:34', '2022-03-29 08:19:34'),
(102, '345', NULL, '1', 'Foods', 'Come and join with us', '10', NULL, '2022-03-29 08:20:15', '2022-03-29 08:20:15'),
(103, '346', NULL, '61', 'Set up', NULL, '1', NULL, '2022-03-30 17:08:42', '2022-03-30 17:08:42'),
(104, '346', NULL, '61', 'Clean up', NULL, '1', NULL, '2022-03-30 17:09:04', '2022-03-30 17:09:04'),
(105, '345', NULL, '1', 'Drinks', 'dfs', '12', NULL, '2022-03-31 07:15:01', '2022-03-31 07:15:24'),
(106, '352', NULL, '1', 'Drinks', 'All students are invited for the class', '5', NULL, '2022-03-31 07:29:47', '2022-03-31 07:29:47'),
(107, '352', NULL, '1', 'Partys', 'All students are invited for the class', '4', NULL, '2022-03-31 07:29:57', '2022-03-31 07:37:21'),
(108, '344', NULL, '1', 'Drinks', 'All students are invited for the class', '10', NULL, '2022-03-31 10:11:50', '2022-03-31 10:11:50'),
(109, '353', NULL, '1', 'Bootstrap Class', 'All party member are invited for the meeting', '5', NULL, '2022-03-31 10:40:54', '2022-03-31 10:40:54'),
(110, '3', NULL, '1', 'Bootstrap Class', 'All students are invited for the class', '6', NULL, '2022-03-31 10:43:25', '2022-03-31 10:43:25'),
(111, '354', NULL, '1', 'Party', 'All students are invited for the class', '5', NULL, '2022-03-31 10:46:43', '2022-03-31 10:46:43'),
(112, '3', NULL, '1', 'Drinks', 'All students are invited for the class', '15', NULL, '2022-03-31 10:47:23', '2022-03-31 10:47:23'),
(113, '355', NULL, '1', 'Bootstrap Class', 'All students are invited for the class', '4', NULL, '2022-03-31 10:53:48', '2022-03-31 10:53:48'),
(114, '355', NULL, '1', 'Drinks', 'All students are invited for the class', '4', NULL, '2022-03-31 11:09:19', '2022-03-31 11:09:19'),
(115, '355', NULL, '1', 'Foods', NULL, '4', NULL, '2022-03-31 11:09:42', '2022-03-31 12:53:39'),
(116, '355', NULL, '1', 'Php Developing', 'All students are invited for the class', '5', NULL, '2022-03-31 11:13:49', '2022-03-31 11:13:49'),
(117, '355', NULL, '1', 'Content Writing', 'All party member are invited for the meeting', '5', NULL, '2022-03-31 11:23:35', '2022-03-31 11:23:35'),
(118, '356', NULL, '1', 'Bootstrap Class', 'All students are invited for the class', '1', NULL, '2022-03-31 14:15:26', '2022-03-31 14:15:26'),
(119, '358', NULL, '61', 'Celebrations', NULL, '25', NULL, '2022-04-02 23:24:11', '2022-04-02 23:24:11'),
(120, '358', NULL, '61', 'Drinks', NULL, '5', NULL, '2022-04-02 23:28:30', '2022-04-02 23:28:30'),
(121, '359', NULL, '1', 'Ceremony Party', 'Every office stuff must be come to the office', '5', NULL, '2022-04-04 11:30:13', '2022-04-04 12:57:06'),
(122, '360', NULL, '61', 'Set up', NULL, '1', NULL, '2022-04-18 15:39:35', '2022-04-18 15:39:35'),
(123, '360', NULL, '61', 'Clean up', NULL, '1', NULL, '2022-04-18 15:41:39', '2022-04-18 15:41:39'),
(124, '360', NULL, '61', 'Clean up', NULL, '1', NULL, '2022-04-18 15:41:40', '2022-04-18 15:41:40'),
(125, '363', NULL, '1', 'slot 1', 'edrs', '4', NULL, '2022-04-19 13:56:43', '2022-04-19 13:56:43'),
(126, '363', NULL, '1', 'slot 2', 'cewsfrwsc', '2', NULL, '2022-04-19 13:57:06', '2022-04-19 13:57:06'),
(127, '364', NULL, '1', 'dxrhj', 'dghdfh', '1', NULL, '2022-04-27 09:32:32', '2022-04-27 09:32:32'),
(128, '365', NULL, '1', 'bjhjuk', 'jfvhgf', '4', NULL, '2022-04-27 10:58:13', '2022-04-27 10:58:13'),
(129, '365', NULL, '1', 'hkh.;l', 'kjlhlk', '6', NULL, '2022-04-27 10:58:41', '2022-04-27 10:58:41'),
(130, '365', NULL, '1', 'title', 'help', '6', NULL, '2022-04-27 11:00:21', '2022-04-27 11:00:21'),
(131, '366', NULL, '175', 'demo', 'help', '5', NULL, '2022-04-27 11:05:32', '2022-04-27 11:05:32'),
(132, '366', NULL, '175', 'title2', 'help2', '4', NULL, '2022-04-27 11:06:06', '2022-04-27 11:06:06'),
(133, '367', NULL, '9', 'Drinks', NULL, '10', NULL, '2022-04-27 17:55:00', '2022-04-27 17:55:00'),
(134, '367', NULL, '9', 'Foods', 'Everyone must be come to below date', '15', NULL, '2022-04-27 17:55:24', '2022-04-27 17:55:24'),
(135, '368', NULL, '61', 'Set up', NULL, '2', NULL, '2022-04-29 18:06:36', '2022-04-29 18:06:36'),
(136, '368', NULL, '61', 'Clean up', NULL, '1', NULL, '2022-04-29 18:07:35', '2022-04-29 18:07:35'),
(137, '373', NULL, '9', 'Foods', 'EveryBody', '5', NULL, '2022-05-03 06:15:22', '2022-05-03 06:15:22'),
(138, '373', NULL, '9', 'Drinks', 'Good Bye RSVP', '5', NULL, '2022-05-03 06:23:31', '2022-05-03 06:23:31'),
(139, '374', NULL, '9', 'Drink', NULL, '5', NULL, '2022-05-03 12:16:28', '2022-05-03 12:16:28'),
(140, '375', NULL, '176', 'Snacks', 'Comment - All must sign up earlier', '2', NULL, '2022-05-03 12:34:23', '2022-05-03 12:34:23'),
(141, '376', NULL, '1', 'dxrhj', 'help', '1', NULL, '2022-05-03 12:46:08', '2022-05-03 12:46:08');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `email_verified_at`, `password`, `user_type`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'neel_alph2000@yahoo.com', 'neel_alph2000@yahoo.com', NULL, '$2y$10$ySEWRWZHGegH0wFhmxOa.ehf.GzvMsot1NpNlyYHuNSlS2lk.SnXa', NULL, 1, NULL, '2022-02-06 21:55:26', '2022-02-15 16:49:25'),
(4, 'neelima.tapata', 'neelima.tapata@gmail.com', NULL, '$2y$10$vPZ9I2pO5rcXLZgjEp/73u0xbvxznd4Aa.ufZzPoi.gUza.SwYgbm', NULL, 1, NULL, '2022-02-06 21:57:26', '2022-02-15 00:03:17'),
(5, 'sakaanil', 'sakaanil@gmail.com', NULL, '$2y$10$pwoRumwtl3AbLAAB7XHZJOEWI5.S6deq4WmcVUdHg1XKwzu.I7Lp2', NULL, 1, NULL, '2022-02-16 05:21:10', '2022-02-16 05:21:22'),
(6, 'Avijit', 'pfavijit@yopmail.com', NULL, '$2y$10$EhsIFLZvT5hss1urObcVh.ypbYWGVYVwKrrAaQdMnVrrAKuZTbD3e', NULL, 1, NULL, '2022-02-22 06:18:39', '2022-02-22 06:18:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(1, 'Kids Talent Uploads', 'Explore-Kids-Talents', '2021-12-07 00:41:17', '2022-02-22 22:17:16'),
(18, 'Craft Ideas', 'ideas', '2022-02-18 03:50:39', '2022-02-22 22:19:23'),
(19, 'Activities for Kids', 'Activites', '2022-02-20 06:35:30', '2022-02-20 08:07:48'),
(25, 'Worksheets', 'Worksheets', '2022-02-21 03:29:57', '2022-02-22 22:18:55');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `question_id` int(11) NOT NULL,
  `question_url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_name` text COLLATE utf8mb4_unicode_ci,
  `comment` text COLLATE utf8mb4_unicode_ci,
  `comment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment_of` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `user_id`, `group`, `created_at`, `updated_at`) VALUES
(2, '1', 'Laravel', '2021-12-13 05:24:43', '2021-12-13 05:24:43'),
(3, '1', 'Laravel Group', '2021-12-13 05:34:17', '2021-12-13 05:34:17'),
(4, '1', 'New Laravel Group', '2021-12-13 06:11:22', '2021-12-13 06:11:22'),
(5, '1', 'Bootstrap Class', '2021-12-13 06:15:15', '2021-12-13 06:15:15'),
(6, '1', 'sand', '2021-12-16 06:08:29', '2021-12-16 06:08:29'),
(7, '1', 'ad', '2021-12-16 06:09:13', '2021-12-16 06:09:13'),
(8, '1', 'dsa', '2021-12-16 06:09:34', '2021-12-16 06:09:34'),
(9, '1', 'Philosophy Content', '2021-12-16 07:28:35', '2021-12-16 07:28:35'),
(10, '1', 'wrftw', '2021-12-16 08:45:56', '2021-12-16 08:45:56'),
(11, '2', 'Web Designing Course', '2021-12-18 00:34:58', '2021-12-18 00:34:58'),
(12, '1', 'demo group', '2021-12-18 05:59:06', '2021-12-18 05:59:06'),
(13, '1', 'Laravel', '2021-12-18 06:14:58', '2021-12-18 06:14:58'),
(14, '1', 'Content Writer Group', '2021-12-20 00:36:16', '2021-12-20 00:36:16'),
(15, '1', 'demo category', '2021-12-22 07:50:22', '2021-12-22 07:50:22'),
(16, '9', 'Laravel', '2021-12-27 08:18:37', '2021-12-27 08:18:37'),
(17, '7', 'try new category', '2021-12-27 13:47:52', '2021-12-27 13:47:52'),
(18, '6', 'Meetup Group', '2022-01-12 18:26:45', '2022-01-12 18:26:45'),
(19, '25', 'New Laravel Group', '2022-01-14 11:27:04', '2022-01-14 11:27:04'),
(20, '25', 'sgfsdfg', '2022-01-17 14:16:30', '2022-01-17 14:16:30');

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
(5, '2021_12_06_123244_create_admins_table', 1),
(6, '2021_12_07_055342_create_categories_table', 1),
(7, '2021_12_07_064318_create_subjects_table', 2),
(8, '2021_12_07_124402_create_user_subjects_table', 3),
(9, '2021_12_11_064920_create_questions_table', 4),
(10, '2021_12_11_071403_create_user_questions_table', 5),
(11, '2021_12_11_134235_create_comments_table', 6),
(12, '2022_01_05_074242_add_social_login_field', 7),
(13, '2022_01_07_093104_create_question_categories_table', 8);

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
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `publishes`
--

CREATE TABLE `publishes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slot_id` int(11) DEFAULT NULL,
  `type_of_sort` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publish` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `timezone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_member` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `publishes`
--

INSERT INTO `publishes` (`id`, `user_id`, `signup_id`, `slot_id`, `type_of_sort`, `tslot`, `lslot`, `help`, `location`, `number`, `time`, `publish`, `timezone`, `count_member`, `created_at`, `updated_at`) VALUES
(149, '25', '298', 175, 'single_date', 'Political power problem', NULL, 'All party member are invited for the meeting', 'Bidhannagar, Kolkata', '20', '2022-01-28T00:55 | 2022-01-28T13:02', 'done', 'Asia/Kolkata', '2', '2022-01-25 14:21:18', '2022-01-25 14:40:19'),
(150, '25', '298', 175, 'single_date', 'Political power problem', NULL, 'All party member are invited for the meeting', 'Bidhannagar, Kolkata', '20', '2022-01-30T00:56 | 2022-02-02T01:57', 'done', 'Asia/Kolkata', '1', '2022-01-25 14:21:18', '2022-01-25 14:40:29'),
(151, '25', '298', 176, 'single_date', 'Politiacl Rally', NULL, NULL, 'Bidhannagar, Kolkata', '1', '2022-01-28T00:55 | 2022-01-28T13:02', 'done', 'Asia/Kolkata', '1', '2022-01-25 14:21:51', '2022-01-25 14:40:38'),
(152, '25', '298', 177, 'single_date', 'Political issue', NULL, NULL, 'Bidhannagar, Kolkata', '1', '2022-01-25T15:52 | 2022-01-25T18:52', 'done', 'Asia/Kolkata', NULL, '2022-01-25 14:22:37', '2022-01-25 14:39:37'),
(153, '25', '299', 178, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '5', '2022-01-21T00:20 | 2022-01-27T01:21', 'done', 'Asia/Kolkata', '1', '2022-01-25 14:46:55', '2022-01-26 09:32:09'),
(154, '25', '299', 178, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '5', '2022-01-30T01:21 | 2022-01-31T20:16', 'done', 'Asia/Kolkata', '3', '2022-01-25 14:46:55', '2022-01-26 11:34:39'),
(155, '25', '299', 179, NULL, 'Php Developing', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '200', '2022-01-21T00:20 | 2022-01-27T01:21', 'done', 'Asia/Kolkata', '2', '2022-01-25 14:47:39', '2022-01-26 09:32:09'),
(156, '48', '300', 180, 'sort_by_date', 'Food', NULL, NULL, 'LC', '3', '2022-02-01T17:00 | 2022-02-01T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:56:18', '2022-01-25 18:28:38'),
(157, '48', '300', 180, 'sort_by_date', 'Food', NULL, NULL, 'LC', '3', '2022-02-08T17:00 | 2022-02-08T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:56:18', '2022-01-25 18:28:38'),
(158, '48', '300', 180, 'sort_by_date', 'Food', NULL, NULL, 'LC', '3', '2022-02-08T18:00 | 2022-02-08T19:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:56:18', '2022-01-25 18:28:38'),
(159, '48', '300', 180, 'sort_by_date', 'Food', NULL, NULL, 'LC', '3', '2022-02-15T17:00 | 2022-02-15T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:56:18', '2022-01-25 18:28:38'),
(160, '48', '300', 180, 'sort_by_date', 'Food', NULL, NULL, 'LC', '3', '2022-02-22T17:00 | 2022-02-22T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:56:18', '2022-01-25 18:28:38'),
(161, '48', '300', 181, 'sort_by_date', 'Drinks', NULL, NULL, 'LC', '3', '2022-02-01T17:00 | 2022-02-01T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:57:54', '2022-01-25 18:28:38'),
(162, '48', '300', 181, 'sort_by_date', 'Drinks', NULL, NULL, 'LC', '3', '2022-02-08T17:00 | 2022-02-08T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-25 17:57:54', '2022-01-25 18:28:38'),
(163, '1', '301', 182, NULL, NULL, NULL, NULL, NULL, '1', '2022-01-14T15:08 | ', 'done', 'Asia/Kolkata', NULL, '2022-01-26 09:38:17', '2022-01-26 09:38:42'),
(164, '25', '307', 183, 'slots_only', 'Css, Bootstrap class for designing', NULL, 'Everyone must be come to below date', 'Kolkata, Bidhannagar', '20', '2022-01-26T22:43 | 2022-01-27T22:43', 'done', 'Asia/Kolkata', NULL, '2022-01-26 13:10:00', '2022-01-26 14:43:47'),
(165, '25', '307', 183, 'slots_only', 'Css, Bootstrap class for designing', NULL, 'Everyone must be come to below date', 'Kolkata, Bidhannagar', '20', '2022-01-28T23:44 | 2022-02-04T21:42', 'done', 'Asia/Kolkata', NULL, '2022-01-26 13:10:00', '2022-01-26 14:43:47'),
(166, '25', '307', 184, 'slots_only', 'Css, Bootstrap class for designing', NULL, 'Everyone must be come to below date', 'Kolkata, Bidhannagar', '1', '2022-01-27', 'done', 'Asia/Kolkata', '1', '2022-01-26 13:29:49', '2022-01-26 14:43:47'),
(167, '25', '307', 185, 'slots_only', NULL, 'Laravel Developer', 'Everyone must be come to below date', 'North 24 Porgona', '10', '2022-01-26T23:11 | 2022-01-26T03:07', 'done', 'Asia/Kolkata', NULL, '2022-01-26 13:38:10', '2022-01-26 14:43:47'),
(168, '25', '307', 185, 'slots_only', NULL, 'Laravel Developer', 'Everyone must be come to below date', 'North 24 Porgona', '10', '2022-01-27T01:13 | 2022-01-26T09:14', 'done', 'Asia/Kolkata', NULL, '2022-01-26 13:38:10', '2022-01-26 14:43:47'),
(169, '25', '307', 186, 'slots_only', 'Full Stack Developer', NULL, 'Everyone must be come to below date', 'Kolkata, Bidhannagar', '5', '2022-01-28', 'done', 'Asia/Kolkata', NULL, '2022-01-26 13:42:04', '2022-01-26 14:43:47'),
(170, '25', '307', 187, 'slots_only', 'Css, Bootstrap class for designing', NULL, 'Everyone must be come to below date', 'Kolkata, Bidhannagar', '1', '2022-02-04', 'done', 'Asia/Kolkata', NULL, '2022-01-26 13:59:23', '2022-01-26 14:43:47'),
(171, '25', '307', 188, NULL, 'Republic Day', NULL, 'Everyone must be come to below date', 'North 24 Porgona', '20', '2022-01-26', 'done', 'Asia/Kolkata', NULL, '2022-01-26 14:43:38', '2022-01-26 14:43:47'),
(172, '46', '308', 189, NULL, 'Drinks', NULL, NULL, 'Las Vegas', '2', '2022-01-28T06:00 | 2022-01-28T06:00', 'done', 'Asia/Kolkata', NULL, '2022-01-26 16:33:15', '2022-01-26 16:45:03'),
(173, '46', '308', 189, NULL, 'Drinks', NULL, NULL, 'Las Vegas', '2', '2022-01-28T03:00 | 2022-01-28T04:00', 'done', 'Asia/Kolkata', NULL, '2022-01-26 16:33:15', '2022-01-26 16:45:03'),
(174, '46', '308', 190, NULL, 'Drinks', NULL, NULL, 'Arizona', '6', '2022-02-04T06:00 | 2022-02-04T07:00', 'done', 'Asia/Kolkata', NULL, '2022-01-26 16:34:59', '2022-01-26 16:45:03'),
(175, '46', '308', 191, NULL, 'Snacks', NULL, NULL, 'Arizona', '10', '2022-02-04T12:05 | 2022-02-04T13:05', 'done', 'Asia/Kolkata', NULL, '2022-01-26 16:40:05', '2022-01-26 16:45:03'),
(176, '46', '308', 191, NULL, 'Snacks', NULL, NULL, 'Arizona', '10', '2022-02-04T22:09 | 2022-02-04T23:09', 'done', 'Asia/Kolkata', NULL, '2022-01-26 16:40:05', '2022-01-26 16:45:03'),
(177, '46', '308', 192, NULL, 'Drinks', NULL, NULL, 'Jacksonville', '5', '2022-01-28T15:30 | 2022-01-28T16:30', 'done', 'Asia/Kolkata', NULL, '2022-01-26 16:42:17', '2022-01-26 16:45:03'),
(178, '46', '309', 193, 'slots_only', 'Set Up', NULL, NULL, 'LC', '1', ' | ', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:46:06', '2022-01-26 18:12:49'),
(179, '46', '309', 194, 'slots_only', 'Clean Up', NULL, NULL, 'LC', '3', '2022-02-02T17:00 | 2022-02-02T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:48:39', '2022-01-26 18:12:49'),
(180, '46', '309', 194, 'slots_only', 'Clean Up', NULL, NULL, 'LC', '3', '2022-02-09T17:00 | 2022-02-09T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:48:39', '2022-01-26 18:12:49'),
(181, '46', '309', 194, 'slots_only', 'Clean Up', NULL, NULL, 'LC', '3', '2022-02-16T17:00 | 2022-02-16T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:48:39', '2022-01-26 18:12:49'),
(182, '46', '309', 194, 'slots_only', 'Clean Up', NULL, NULL, 'LC', '3', '2022-02-23T17:00 | 2022-02-23T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:48:39', '2022-01-26 18:12:49'),
(183, '46', '309', 195, 'slots_only', 'Drinks', NULL, NULL, 'LC', '5', '2022-02-02T17:00 | 2022-02-22T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:50:49', '2022-01-26 18:12:49'),
(184, '46', '309', 195, 'slots_only', 'Drinks', NULL, NULL, 'LC', '5', '2022-02-09T17:00 | 2022-02-09T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:50:49', '2022-01-26 18:12:49'),
(185, '46', '309', 195, 'slots_only', 'Drinks', NULL, NULL, 'LC', '5', '2022-02-16T17:00 | 2022-02-16T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:50:49', '2022-01-26 18:12:49'),
(186, '46', '309', 195, 'slots_only', 'Drinks', NULL, NULL, 'LC', '5', '2022-02-23T17:00 | 2022-02-23T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:50:49', '2022-01-26 18:12:49'),
(187, '46', '309', 196, 'slots_only', 'Food', NULL, NULL, 'LC', '4', '2022-02-02T17:00 | 2022-02-02T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:53:08', '2022-01-26 18:12:49'),
(188, '46', '309', 196, 'slots_only', 'Food', NULL, NULL, 'LC', '4', '2022-02-09T17:00 | 2022-02-09T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:53:08', '2022-01-26 18:12:49'),
(189, '46', '309', 196, 'slots_only', 'Food', NULL, NULL, 'LC', '4', '2022-02-16T17:00 | 2022-02-16T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:53:08', '2022-01-26 18:12:49'),
(190, '46', '309', 196, 'slots_only', 'Food', NULL, NULL, 'LC', '4', '2022-02-23T17:00 | 2022-02-23T18:00', 'done', 'America/Los_Angeles', NULL, '2022-01-26 17:53:08', '2022-01-26 18:12:49'),
(191, '25', '310', 197, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-29T18:21 | ', 'done', 'Asia/Kolkata', NULL, '2022-01-27 07:47:04', '2022-01-27 07:48:49'),
(192, '25', '310', 197, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-28T18:21 | 2022-01-31T19:22', 'done', 'Asia/Kolkata', '1', '2022-01-27 07:47:04', '2022-01-27 08:31:54'),
(193, '25', '310', 198, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '2', '2022-01-29T13:23 | 2022-01-30T18:22', 'done', 'Asia/Kolkata', '1', '2022-01-27 07:47:35', '2022-01-27 10:01:20'),
(194, '25', '310', 199, NULL, 'Political power problem', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-28T18:22 | 2022-01-29T18:22', 'done', 'Asia/Kolkata', NULL, '2022-01-27 07:48:07', '2022-01-27 07:48:49'),
(195, '25', '310', 199, NULL, 'Political power problem', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-31T13:17 | 2022-02-01T13:18', 'done', 'Asia/Kolkata', '1', '2022-01-27 07:48:07', '2022-01-27 10:12:02'),
(196, '25', '310', 200, NULL, 'Political power problem', NULL, 'All party member are invited for the meeting', 'Bidhannagar, Kolkata', '5', '2022-01-29T18:23 | 2022-01-29T18:23', 'done', 'Asia/Kolkata', '1', '2022-01-27 07:48:32', '2022-01-27 10:04:46'),
(197, '25', '310', 200, NULL, 'Political power problem', NULL, 'All party member are invited for the meeting', 'Bidhannagar, Kolkata', '5', '2022-02-05T19:24 | 2022-02-04T19:24', 'done', 'Asia/Kolkata', '1', '2022-01-27 07:48:32', '2022-01-27 10:09:33'),
(198, '25', '311', 201, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-01-28T14:30 | 2022-01-28T16:00', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:33:04', '2022-01-27 10:33:04'),
(199, '25', '311', 201, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-01-30T19:00 | 2022-01-30T18:00', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:33:04', '2022-01-27 10:33:04'),
(200, '25', '311', 201, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-02-02T20:00 | 2022-02-02T21:01', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:33:04', '2022-01-27 10:33:04'),
(201, '25', '311', 201, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-02-02T16:01 | 2022-02-02T17:01', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:33:04', '2022-01-27 10:33:04'),
(202, '25', '311', 201, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-02-11T20:02 | 2022-02-11T21:02', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:33:04', '2022-01-27 10:33:04'),
(203, '25', '311', 201, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-02-11T18:00 | 2022-02-11T20:02', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:33:04', '2022-01-27 10:33:04'),
(204, '25', '311', 202, NULL, 'Food', NULL, NULL, 'BC', '5', '2022-01-28T20:10 | 2022-01-28T21:10', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:39:02', '2022-01-27 10:39:02'),
(205, '25', '311', 202, NULL, 'Food', NULL, NULL, 'BC', '5', '2022-01-30T18:00 | 2022-01-30T19:00', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:39:02', '2022-01-27 10:39:02'),
(206, '25', '311', 202, NULL, 'Food', NULL, NULL, 'BC', '5', '2022-02-02T16:07 | 2022-02-02T17:00', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:39:02', '2022-01-27 10:39:02'),
(207, '25', '311', 202, NULL, 'Food', NULL, NULL, 'BC', '5', '2022-02-02T06:31 | 2022-02-02T07:31', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:39:02', '2022-01-27 10:39:02'),
(208, '25', '311', 202, NULL, 'Food', NULL, NULL, 'BC', '5', '2022-01-31T16:08 | 2022-01-31T17:08', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:39:02', '2022-01-27 10:39:02'),
(209, '25', '311', 202, NULL, 'Food', NULL, NULL, 'BC', '5', '2022-02-11T16:08 | 2022-02-11T17:08', NULL, 'Asia/Kolkata', NULL, '2022-01-27 10:39:02', '2022-01-27 10:39:02'),
(210, '41', '315', 203, NULL, 'Food', NULL, NULL, 'LC', '4', '2022-02-20T17:00 | 2022-02-20T18:00', NULL, 'America/Los_Angeles', NULL, '2022-01-27 18:18:23', '2022-01-27 18:18:23'),
(211, '41', '315', 203, NULL, 'Food', NULL, NULL, 'LC', '4', '2022-02-27T17:00 | 2022-02-27T18:00', NULL, 'America/Los_Angeles', NULL, '2022-01-27 18:18:23', '2022-01-27 18:18:23'),
(212, '41', '315', 204, NULL, 'Food', NULL, NULL, 'LC', '4', '2022-02-20T17:00 | 2022-02-20T18:00', NULL, 'America/Los_Angeles', NULL, '2022-01-27 18:18:24', '2022-01-27 18:18:24'),
(213, '41', '315', 204, NULL, 'Food', NULL, NULL, 'LC', '4', '2022-02-27T17:00 | 2022-02-27T18:00', NULL, 'America/Los_Angeles', NULL, '2022-01-27 18:18:24', '2022-01-27 18:18:24'),
(214, '41', '315', 205, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-02-20T17:00 | 2022-02-20T18:00', NULL, 'America/Los_Angeles', NULL, '2022-01-27 18:20:12', '2022-01-27 18:20:12'),
(215, '41', '315', 205, NULL, 'Drinks', NULL, NULL, 'LC', '4', '2022-02-27T17:00 | 2022-02-27T18:00', NULL, 'America/Los_Angeles', NULL, '2022-01-27 18:20:12', '2022-01-27 18:20:12'),
(216, '25', '316', 206, NULL, 'sadf', NULL, 'dsa', 'sdaf', '1', '2022-01-21T12:57 | 2022-01-30T12:57', NULL, 'Asia/Kolkata', NULL, '2022-01-28 07:27:47', '2022-01-28 07:27:47'),
(217, '25', '317', 207, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-28T18:07 | 2022-01-29T13:02', NULL, 'Asia/Kolkata', NULL, '2022-01-28 07:32:57', '2022-01-28 07:32:57'),
(218, '25', '317', 207, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-30T19:08 | 2022-01-30T21:02', NULL, 'Asia/Kolkata', NULL, '2022-01-28 07:32:57', '2022-01-28 07:32:57'),
(219, '25', '317', 207, NULL, 'Bootstrap Class', NULL, 'All students are invited for the class', 'Bidhannagar, Kolkata', '1', '2022-01-31T13:02 | 2022-01-28T10:02', NULL, 'Asia/Kolkata', NULL, '2022-01-28 07:32:57', '2022-01-28 07:32:57'),
(220, '1', '318', 208, NULL, NULL, NULL, NULL, NULL, '1', '2022-01-18T15:54 | 2022-01-25T15:54', 'done', 'Asia/Kolkata', NULL, '2022-01-28 10:24:22', '2022-01-28 13:38:00');

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE `questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(11) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_question_id` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `user_type`, `user_id`, `user_question_id`, `category`, `question`, `description`, `slug`, `image`, `created_at`, `updated_at`) VALUES
(19, 'user', 52, 36, 'middleschool', 'What is MAP? How does this program look like in SRVUSD?', 'We recently moved to San Ramon and are looking for details to understand math advancement in SRVUSD.', 'What-is-MAP', NULL, '2022-02-02 00:53:28', '2022-03-06 02:48:30'),
(25, 'user', 41, 39, 'general', 'Where can I find study materials for the spelling bee?', NULL, 'Where-can-I-find-study-materials-for-the-spelling-bee', '1643957467-Bee.png', '2022-02-04 06:52:55', '2022-03-06 02:48:39'),
(26, 'user', 41, 40, 'general', 'How to know if our school is enrolled in the Spelling Bee?', NULL, 'How-to-know-if-our-school-is-enrolled-in-the-Spelling-Bee', '1643957738-Bee.png', '2022-02-04 06:58:03', '2022-03-06 02:48:50'),
(27, 'user', 41, 44, 'general', 'Who is eligible to take the AMC10 and the AMC12?', NULL, 'AMC10-and-the-AMC12', NULL, '2022-02-04 07:01:51', '2022-03-06 02:48:59'),
(28, 'user', 41, 43, 'general', 'What is The Scripps National Spelling Bee Contest?', NULL, 'What-is-Scripps-National-Spelling-Bee', NULL, '2022-02-04 07:02:38', '2022-03-06 02:50:02'),
(29, 'user', 41, 42, 'general', 'What is the list of 2022 Words of the Champions for Spelling Bee ?', NULL, '2022-words-of-the-champions', NULL, '2022-02-04 07:03:01', '2022-03-06 02:48:05'),
(30, 'user', 41, 41, 'general', 'How do schools enroll their school in the Spelling Bee?', NULL, 'schools-enrollment-in-spelling-bee', NULL, '2022-02-04 07:03:21', '2022-03-06 02:50:12'),
(32, 'user', 52, 47, 'general', 'When do we get official scores and reports for the AMC 8?', NULL, 'official-scores-AMC8', NULL, '2022-02-04 23:26:01', '2022-03-06 02:50:21'),
(33, 'user', 52, 46, 'general', 'How to prepare for AMC 8?', NULL, 'how-to-prepare-AMC8', NULL, '2022-02-04 23:26:29', '2022-03-06 02:49:40'),
(34, 'user', 52, 45, 'general', 'What material is covered on the AMC 10 and 12?', NULL, 'Material-covered-AMC', NULL, '2022-02-04 23:26:43', '2022-03-06 02:49:08'),
(35, 'user', 55, 49, 'middleschool', 'When will the PSAT scores be available?', NULL, 'When-will-the-PSAT-scores-be-available', NULL, '2022-02-04 23:32:09', '2022-03-06 02:50:34'),
(36, 'user', 55, 48, 'middleschool', 'Are PSAT scores sent to colleges?', NULL, 'PSAT-colleges', NULL, '2022-02-04 23:32:22', '2022-03-06 02:47:44'),
(37, 'user', 56, 51, 'middleschool', 'Can you please share your experience with advancing kids in math in middle school?', NULL, 'experience-advance-math-middle-school', NULL, '2022-02-04 23:36:45', '2022-03-06 02:49:52'),
(38, 'user', 56, 50, 'Elementary', 'What curriculum does RSM follow? Would you recommend enrolling my child in RSM?', NULL, 'RSM-curriclum', NULL, '2022-02-04 23:36:56', '2022-03-06 02:49:30'),
(39, 'user', 52, 52, 'middleschool', 'How are math summer bridge programs for advancement in middle school at SRVUSD?', NULL, 'summer-bridge-srvusd', NULL, '2022-02-04 23:40:23', '2022-03-06 02:47:24'),
(40, 'user', 57, 53, 'middleschool', 'Can my child take PSAT in 8th grade?', NULL, 'PSAT-grade8', NULL, '2022-02-04 23:42:36', '2022-03-06 02:47:35'),
(41, 'user', 57, 54, 'High School', 'What is the scoring for PSAT?', NULL, 'scoring-for-PSAT', NULL, '2022-02-04 23:44:52', '2022-03-06 02:47:12'),
(43, 'user', 52, 56, 'general', 'What are Math Kangaroo levels?', NULL, 'math-kangaroo-levels', NULL, '2022-02-06 18:22:11', '2022-03-06 02:51:23'),
(44, 'user', 58, 55, 'general', 'Are charter schools public schools?', NULL, 'charter-schools-public-schools', NULL, '2022-02-06 18:22:27', '2022-03-06 02:51:14'),
(45, 'user', 58, 58, 'general', 'What is a Charter school?', NULL, 'what-is-charter-school', NULL, '2022-02-06 18:26:00', '2022-03-06 02:51:04'),
(46, 'user', 52, 59, 'general', 'How long is the Math Kangaroo test?', 'Can young children sit through the test and take this test? What is a good age to start this test?', 'math-kangaroo-length', NULL, '2022-02-06 18:31:00', '2022-03-06 02:48:20'),
(47, 'user', 41, 60, 'Elementary', 'What is the minimum age to participate in the AMC program?', NULL, 'minimum-age-amc', NULL, '2022-02-07 03:26:10', '2022-03-06 02:47:54'),
(48, 'user', 41, 61, 'High School', 'How long is the SAT test and how many questions are there on the test?', NULL, 'SAT-test-length', NULL, '2022-02-07 05:08:05', '2022-03-06 02:47:01'),
(49, 'user', 41, 62, 'High School', 'Where can I find a practice test for PSAT 10?', NULL, 'SAT-practice-test', NULL, '2022-02-07 05:09:22', '2022-03-06 02:46:49'),
(51, 'user', 41, 64, 'High School', 'Is there a penalty for guessing in the SAT test?', NULL, 'penalty-SAT', NULL, '2022-02-07 05:13:40', '2022-03-06 02:46:39'),
(53, 'user', 64, 68, 'High School', 'Is digital SAT more stressful? Any good tests online to prepare for digital exam?', NULL, 'digital-SAT', NULL, '2022-02-10 02:16:16', '2022-03-06 02:43:23'),
(54, 'user', 63, 66, 'High School', 'What are the advantages of taking AP classes? Do kids get college credit for taking the AP classes?', NULL, 'advantages-of-APclasses', NULL, '2022-02-10 02:16:38', '2022-03-06 02:46:30'),
(55, 'user', 65, 69, 'Preschool', 'How do I encourage sharing with my toddler? He loves to play but is having difficulty sharing toys.', NULL, 'sharing-for-preschooler', NULL, '2022-02-10 02:16:58', '2022-03-06 02:43:54'),
(56, 'user', 63, 65, 'High School', 'What are AP classes?', NULL, 'what-are-APclasses', NULL, '2022-02-10 02:17:57', '2022-03-06 02:43:42'),
(57, 'user', 63, 67, 'High School', 'What is the difference between honors and AP classes?', NULL, 'difference-between-honors-AP', NULL, '2022-02-10 02:18:41', '2022-03-06 02:46:20'),
(58, 'user', 65, 70, 'Preschool', 'Can you please recommend good preschools in Dublin area?', NULL, 'preschool-recommendation-dublin', NULL, '2022-02-10 02:18:59', '2022-03-06 02:46:08'),
(61, 'user', 59, 74, 'general', 'Anyone aware of Certified/Program oriented  Online Chess Clubs for Kids', 'Chess Clubs', 'chessforkids', NULL, '2022-02-15 23:00:21', '2022-03-06 02:44:25'),
(62, 'user', 130, 75, 'middleschool', 'What books should I use for middle school MAP program?', 'Any recommendations are appreciated.', 'middle-school-books', NULL, '2022-02-17 01:20:14', '2022-03-06 02:44:03'),
(63, 'user', 3, 76, 'High School', 'Hi, we are trying to decide between IB program and AP program for my son. Is one better than the other for colleges? Please moms share your experience.', NULL, 'IB-program-AP-program', NULL, '2022-02-17 02:15:08', '2022-03-06 02:45:50'),
(64, 'user', 3, 77, 'college', 'We are looking for college counselors in Bay area. Any recommendations? We are looking for reasonable priced and good counselors.', NULL, 'bay-area-college-counselors', NULL, '2022-02-17 02:16:03', '2022-03-06 02:45:40'),
(65, 'user', 131, 78, 'college', 'I am looking for good resources where I can find more information about college financial aid. If you have any information that you can share that would be helpful.', NULL, 'college-financial-aid', NULL, '2022-02-18 02:06:41', '2022-03-06 02:44:14'),
(66, 'user', 133, 79, 'Elementary', 'Trying to decide between RSM, Mathnasium and Kumon for my 1st grader. Any suggestions?', NULL, 'RSM-Mathnasium-Kumon', NULL, '2022-02-19 00:51:28', '2022-03-06 02:43:33'),
(67, 'user', 134, 80, 'general', 'I understand private schools are better but is there any difference in curriculum followed between the schools?', NULL, 'public-private-schools', NULL, '2022-02-19 01:13:29', '2022-03-06 02:45:29'),
(68, 'user', 42, 81, 'High School', 'What score is considered a good score for SAT?', NULL, 'good-score-SAT', NULL, '2022-02-20 01:05:24', '2022-03-06 02:45:10'),
(69, 'user', 42, 82, 'High School', 'How the SAT Is Scored?', NULL, 'SAT-Scoring', NULL, '2022-02-20 01:11:11', '2022-03-06 02:44:59'),
(70, 'user', 42, 83, 'college', 'How common is it to change college majors while in college?', NULL, 'changing-college-majors', NULL, '2022-02-20 01:18:43', '2022-03-06 02:43:00'),
(71, 'user', 42, 84, 'college', 'How many college freshmen are undecided?', NULL, 'college-freshman-undecided', NULL, '2022-02-20 01:24:48', '2022-03-06 02:41:55'),
(72, 'user', 42, 85, 'college', 'What are the top 10 majors at UC Davis in 2021?', NULL, 'top-10-majors-UC-Davis', NULL, '2022-02-20 01:29:32', '2022-03-06 02:43:10'),
(73, 'user', 42, 86, 'general', 'What are good sources for finding school ratings?', NULL, 'good-sources-schools', NULL, '2022-02-20 01:36:48', '2022-03-06 02:44:35'),
(74, 'user', 42, 87, 'general', 'Where can I find information about schools in United States?', NULL, 'about-schools-united-states', NULL, '2022-02-20 01:42:25', '2022-03-06 02:42:49'),
(75, 'user', 42, 88, 'general', 'Where can I find information about school districts?', NULL, 'school-district-information', NULL, '2022-02-20 01:45:49', '2022-03-06 02:44:48'),
(76, 'user', 42, 89, 'general', 'How many states in US are following Common Core Standards?', NULL, 'common-core-standards', NULL, '2022-02-20 01:52:33', '2022-03-06 02:42:35'),
(77, 'user', 42, 90, 'Elementary', 'What is the common core?', NULL, 'common-core', NULL, '2022-02-20 01:57:14', '2022-03-06 02:41:41'),
(78, 'user', 42, 91, 'Elementary', 'Where can I find the Common Core State Standards for ELA and mathematics?', NULL, 'common-core-state-standards1', NULL, '2022-02-20 02:01:23', '2022-03-06 02:41:29'),
(79, 'user', 42, 92, 'Elementary', 'Why are the Common Core State Standards only for English language arts and math?', NULL, 'ELA-Math', NULL, '2022-02-20 02:04:38', '2022-03-06 02:41:18'),
(80, 'user', 42, 93, 'Elementary', 'What is CAASPP?', NULL, 'what-is-CAASPP', NULL, '2022-02-20 02:13:24', '2022-03-06 02:41:04'),
(81, 'user', 42, 94, 'Elementary', 'What are the Pros and Cons of sending kids to private school?', NULL, 'pros-cons-private-school', NULL, '2022-02-20 02:20:58', '2022-03-06 02:40:46'),
(82, 'user', 42, 95, 'Elementary', 'Which grade levels participate in smarter balanced summative assessments?', NULL, 'grade-levels-smarter-balanced', NULL, '2022-02-20 02:29:12', '2022-03-06 02:40:35'),
(83, 'user', 137, 96, 'Elementary', 'Can you recommend best basketball classes nearby for a 9 year old?', NULL, 'best-basketball-class', NULL, '2022-02-20 02:51:17', '2022-03-06 02:40:13'),
(86, 'user', 131, 100, 'High School', 'Would skipping AP Calc AB and going to BC after PreCalc okay? How rigorous is AP Calc BC?', NULL, 'Skipping-APCalcAB', NULL, '2022-03-06 02:39:19', '2022-03-06 02:40:04'),
(87, 'user', 131, 99, 'High School', 'When will digital SAT start?', NULL, 'DigitalSAT', NULL, '2022-03-06 02:39:43', '2022-03-06 02:39:43'),
(88, 'user', 142, 101, 'High School', 'For foreign language selection which language is easier to learn and any benefits of learning one language over the other?', NULL, 'learn-language', NULL, '2022-03-06 02:58:24', '2022-03-06 02:58:24'),
(89, 'user', 143, 102, 'college', 'How much does a 4 year college cost in California? What are all the costs that we need to plan for?', NULL, '4-year-college', NULL, '2022-03-06 03:04:58', '2022-03-06 03:04:58'),
(90, 'user', 144, 104, 'Preschool', 'We are trying to figure out if sending our 5 year to after school program is good or have a nanny come home. We want to keep her home if possible so she can stay with her brother and it will help with expenses but we are worried she will miss out learning other things. Any suggestions', NULL, 'nanny-afterschool', NULL, '2022-03-06 03:23:52', '2022-03-06 03:23:52'),
(91, 'user', 144, 103, 'college', 'What are the best Engineering colleges in California?', NULL, 'best-engineering-colleges', NULL, '2022-03-06 03:50:51', '2022-03-06 03:50:51'),
(92, 'user', 145, 105, 'High School', 'How many AP classes should I take? If I take more AP classes will it help with my college admissions?', NULL, 'how-many-AP-classes-should-I-take', NULL, '2022-03-06 03:51:13', '2022-03-06 03:51:13'),
(93, 'user', 147, 106, 'High School', 'How to prepare for AP exam? Any tips or ways to help prepare and ace the test?', NULL, 'How-to-prepare-for-AP', NULL, '2022-03-06 05:56:29', '2022-03-06 05:56:29'),
(94, 'user', 146, 107, 'Preschool', 'Hi.. my daughter is 4 years old and is a slow learner. How can I help her?', NULL, 'slow-learner', NULL, '2022-03-06 06:14:00', '2022-03-06 06:14:00'),
(95, 'user', 146, 108, 'Preschool', 'Can you recommend some books to read for a 4 year old?', NULL, 'books-to-read-4years', NULL, '2022-03-06 06:16:08', '2022-03-06 06:16:08'),
(96, 'user', 148, 109, 'middleschool', 'Is accelerating math in summer and taking Algebra 1 in Grade 7 a good idea for my current sixth grader. Please advice.', NULL, 'math-acceleration', NULL, '2022-03-06 06:35:06', '2022-03-06 06:35:06'),
(97, 'user', 149, 110, 'middleschool', 'Are middle school counselors helpful? What questions can we ask the counselors and how much time will they give for each student?', '-', 'are-middle-school-counselors-helpful', NULL, '2022-03-06 18:45:11', '2022-03-06 18:46:00'),
(98, 'user', 57, 111, 'Elementary', 'Can anyone share how Beast Academy compares to Russian Math?', NULL, 'How-does-beast-academy-compare-to-russian-math', NULL, '2022-03-06 18:52:34', '2022-03-06 18:52:34'),
(99, 'user', 149, 112, 'Elementary', 'What are the best resources for creative writing? I am looking for free or paid resources that can be used at home.', NULL, 'resources-for-creative-writing', NULL, '2022-03-06 18:52:52', '2022-03-06 18:52:52'),
(100, 'user', 55, 113, 'High School', 'Is it good to take SAT or ACT even if applying to test optional schools. Will taking the test be helpful in any way?', NULL, 'SAT-or-ACT-for-test-optional-schools', NULL, '2022-03-06 19:02:12', '2022-03-06 19:02:12'),
(101, 'user', 55, 114, 'college', 'Would test optional mean colleges will not consider SAT or ACT scores at all, or they are just optional to submit?', NULL, 'what-does-test-optional-mean', NULL, '2022-03-06 19:04:20', '2022-03-06 19:04:20'),
(102, 'user', 150, 116, 'Elementary', 'I see many parents preparing their children for gifted program. Can you actually prepare for the program, if so how does it help if you pass the exam?', NULL, 'preparing-for-gifted-programs', NULL, '2022-03-06 19:13:44', '2022-03-06 19:13:44'),
(103, 'user', 150, 115, 'Elementary', 'Any good software to teach typing for kids that they can use at home?', NULL, 'software-to-teach-typing', NULL, '2022-03-06 19:14:02', '2022-03-06 19:14:02'),
(104, 'user', 151, 118, 'general', 'Is testingmom.com helpful? Did any one take membership in testing mom? If so can you share your experience?', NULL, 'is-testing-mom-helpful', NULL, '2022-03-06 19:22:28', '2022-03-06 19:22:28'),
(105, 'user', 151, 117, 'Elementary', 'Can you suggest some good reading books or online reading for my 3rd grader.', NULL, 'good-reading-books-for-3rd-grader', NULL, '2022-03-06 19:22:47', '2022-03-06 19:22:47'),
(106, 'user', 151, 119, 'High School', 'How does algebra 2 compare to advanced algebra 2? Will it be difficult for a freshman to cope up?', NULL, 'algrebra2-vs-advanced-algebra2', NULL, '2022-03-06 19:35:12', '2022-03-06 19:35:12'),
(107, 'user', 152, 120, 'High School', 'How is your experience completing Geometry from BYU?', NULL, 'completing-geometry-BYU', NULL, '2022-03-06 19:46:02', '2022-03-06 19:46:02'),
(108, 'user', 152, 121, 'High School', 'How many years of languages should be completed for applying to UCs. Can we skip world language requirements?', NULL, 'world-languages-UCs', NULL, '2022-03-06 19:51:38', '2022-03-06 19:51:38'),
(109, 'user', 153, 122, 'High School', 'What volunteer opportunities are good to consider for college planning?', '-', 'volunteer-opportunities-college-planning', NULL, '2022-03-06 19:58:24', '2022-03-06 19:58:59'),
(110, 'user', 154, 124, 'High School', 'How much does it cost to apply for each college?', NULL, 'cost-to-apply-for-a-college', NULL, '2022-03-06 20:09:45', '2022-03-06 20:09:45'),
(111, 'user', 154, 123, 'High School', 'How many colleges should we plan to apply for? Is there an optimal number of colleges to apply for?', NULL, 'how-many-colleges-to-apply-for', NULL, '2022-03-06 20:10:01', '2022-03-06 20:10:01'),
(112, 'user', 155, 125, 'college', 'What is Gifted and Talented program? Can someone please help me understand its concept, and what exactly a child does and learns in this program.', NULL, 'what-is-gifted-and-talented-program', NULL, '2022-03-06 20:21:26', '2022-03-06 20:22:17'),
(113, 'user', 56, 126, 'general', 'Can you take gifted test in grade 3? How to get registered for the test? Can it be taken at any time?', NULL, 'gifted-test-in-grade3', NULL, '2022-03-06 20:25:30', '2022-03-06 20:25:30'),
(114, 'user', 155, 127, 'general', 'Any apps or websites that can help a child learn Spanish? I am looking to introduce Spanish to my son to see if he will be interested to learn Spanish.', NULL, 'apps-and-websites-to-learn-spanish', NULL, '2022-03-06 20:28:27', '2022-03-06 20:28:27'),
(115, 'user', 156, 128, 'Preschool', 'What are the best ways to setup play dates for my preschoolers? Are there any apps or do you use facebook groups or nextdoor?', NULL, 'how-to-setup-playdates-for-preschoolers', NULL, '2022-03-06 20:38:40', '2022-03-06 20:38:40'),
(116, 'user', 157, 129, 'general', 'At what age is it good to start college savings program? What are the best investment options to save for colleges?', NULL, 'best-investment-options-to-save-for-colleges', NULL, '2022-03-06 20:47:05', '2022-03-06 20:47:05'),
(117, 'user', 158, 132, 'general', 'Are the Math Kangaroo test books found on Amazon helpful? Please see the attachment.', NULL, 'math-kangaroo-test-books', '1646600631-Screen Shot 2022-03-06 at 1.03.13 PM.png', '2022-03-06 21:10:56', '2022-03-06 21:10:56'),
(118, 'user', 148, 146, 'general', 'Band or Strings.. which one is better?', NULL, 'band-or-strings', NULL, '2022-03-06 21:56:03', '2022-03-06 21:56:03'),
(119, 'user', 157, 137, 'college', 'Can you please suggest what states are good for 529 plans?', NULL, 'good-529-states', NULL, '2022-03-06 21:56:52', '2022-03-06 21:56:52'),
(120, 'admin', 3, NULL, 'High School', 'What is the best way to prepare for AP Chemistry. Below is the course content.', NULL, 'AP-Chemistry-course-content', '1646605754-Screen Shot 2022-03-06 at 2.27.49 PM.png', '2022-03-06 22:29:14', '2022-03-06 22:31:14'),
(121, 'user', 148, 147, 'middleschool', 'Please recommend any good books for reading for my 6th grader.', NULL, 'good-books-for-6th-grader', NULL, '2022-03-06 22:32:49', '2022-03-06 22:32:49'),
(122, 'user', 158, 134, 'Elementary', 'How do Montessori schools compare to public schools? what is the curriculum they follow in Montessori? Is it worth spending money on Montessori school?', NULL, 'how-do-montessori-schools-compare-to-public-schools', NULL, '2022-03-06 22:33:26', '2022-03-06 22:33:26'),
(123, 'user', 159, 150, 'High School', 'How are APs scored? Where can I find AP score table?', NULL, 'How-are-APs-scored', NULL, '2022-03-06 23:02:48', '2022-03-06 23:02:48'),
(124, 'user', 159, 148, 'High School', 'Where can I find AP exam calendar? How to know when the AP exams are scheduled?', NULL, 'Where-can-I-find-AP-exam-Calendar', NULL, '2022-03-06 23:03:18', '2022-03-06 23:03:18'),
(125, 'user', 157, 130, 'college', 'Is investing in a 529 plan good? Are there any other options for college savings? What are the benefits of investing in 529 college savings plan?', NULL, 'is-investing-in-529-plan-good', NULL, '2022-03-06 23:03:45', '2022-03-06 23:03:45'),
(126, 'admin', 3, NULL, 'Elementary', 'What is ELAC?', NULL, 'what-is-ELAC', NULL, '2022-03-06 23:09:26', '2022-03-06 23:09:26'),
(127, 'user', 148, 144, 'general', 'Does Abacus help with US math curriculum?', NULL, 'does-Abacus-help-with-US-math-curriculum', NULL, '2022-03-06 23:10:39', '2022-03-06 23:10:39'),
(128, 'user', 160, 155, 'High School', 'What clubs are good for leadership building?', NULL, 'what-clubs-are-good-for-leadership-building', NULL, '2022-03-06 23:19:17', '2022-03-06 23:19:17'),
(129, 'user', 150, 142, 'Elementary', 'What is abacus method? Are any of your kids learning abacus? Is it useful in the long run or for math advancement?', NULL, 'what-is-abacus-method', NULL, '2022-03-06 23:19:36', '2022-03-06 23:19:36'),
(130, 'user', 158, 135, 'Elementary', 'Please suggest good reading programs and books for first grader.', NULL, 'good-reading-books-for-1st-grader', NULL, '2022-03-06 23:20:00', '2022-03-06 23:20:00'),
(131, 'user', 161, 162, 'High School', 'What does holistic admissions mean?', NULL, 'what-does-holistic-admissions-mean', NULL, '2022-03-07 03:12:27', '2022-03-07 03:12:27'),
(132, 'user', 157, 139, 'High School', 'How many APs are required to get into a good school?', NULL, 'how-many-APs-are-required', NULL, '2022-03-07 03:12:52', '2022-03-07 03:12:52'),
(133, 'user', 160, 153, 'High School', 'My son is more interested in social studies, history and political sciences.. what are good courses to take?', NULL, 'what-are-good-courses-to-take-in-social-studies', NULL, '2022-03-07 03:13:22', '2022-03-07 03:13:22'),
(134, 'user', 161, 161, 'college', 'What are the various volunteer opportunities that high school students can explore?', NULL, 'what-are-various-volunteer-opportunities-for-highschool-students', NULL, '2022-03-07 03:13:55', '2022-03-07 03:13:55'),
(135, 'user', 159, 151, 'High School', 'What are relatively easier AP courses to take?', NULL, 'what-are-relatively-easier-AP-courses-to-take', NULL, '2022-03-07 03:14:37', '2022-03-07 03:14:37'),
(136, 'user', 158, 131, 'Elementary', 'I see a lot of posts about cogat test preparation for first graders. Kindly share how should I start preparing my child and how does it help?', NULL, 'cogat-test-preparation-first-graders', NULL, '2022-03-07 03:15:04', '2022-03-07 03:15:04'),
(137, 'user', 150, 143, 'Elementary', 'How does Abacus compare to Vedic math? Which method is more useful? I am looking for an y recommendations.', NULL, 'how-does-abacus-compare-to-vedic-math', NULL, '2022-03-07 03:15:43', '2022-03-07 03:15:43'),
(138, 'user', 162, 165, 'general', 'What are some places to explore for middle schoolers in bay area?', NULL, 'places-to-explore-in-bay-area', NULL, '2022-03-07 03:23:16', '2022-03-07 03:23:16'),
(139, 'user', 159, 152, 'college', 'Is it good to take AP and get a B or higher grade or try to take honors or regular courses and be more confident to get an A?', NULL, 'AP-honors-which-is-better', NULL, '2022-03-07 03:23:39', '2022-03-07 03:23:39'),
(140, 'user', 150, 141, 'Elementary', 'What is abacus method? Are any of your kids learning abacus? Is it useful in the long run or for math advancement?', NULL, 'what-is-abacus-method-for-kids', NULL, '2022-03-07 03:24:01', '2022-03-07 03:24:01'),
(141, 'user', 158, 133, 'general', 'Is math olympiad available for a first grader? Is math kangaroo better or math olympiad? My kid loves and is very good in math for his age.', NULL, 'is-math-olympiad-available-for-1st-grader', NULL, '2022-03-07 03:24:23', '2022-03-07 03:24:23'),
(142, 'user', 162, 164, 'High School', 'I see a lot of my friends kids stressed out and working so hard taking so many APs\'s. How much weight do APs carry. I don\'t want my child to stress out if possible.', NULL, 'how-much-weight-do-APs-carry', NULL, '2022-03-07 03:25:03', '2022-03-07 03:25:38'),
(143, 'user', 163, 167, 'High School', 'Do colleges have a preference for SAT or ACT? Is taking one test better than the other?', NULL, 'SAT-vs-ACT', NULL, '2022-03-07 03:31:17', '2022-03-07 03:31:17'),
(144, 'user', 157, 138, 'High School', 'Anyone has any recommendations on if AP Art History vs AP US Government?', NULL, 'AP-Art-History-vs-AP-US-Govt', NULL, '2022-03-07 03:31:40', '2022-03-07 03:31:40'),
(145, 'user', 148, 145, 'general', 'Does Russian Math help with advancement?', NULL, 'does-russian-math-help-wth-advancement', NULL, '2022-03-07 03:32:07', '2022-03-07 03:32:07'),
(146, 'user', 160, 154, 'college', 'Any recommendations for colleges. We are interested in Political science majors.', NULL, 'any-recommendations-for-colleges-in-political-sciences', NULL, '2022-03-07 03:32:38', '2022-03-07 03:32:38'),
(147, 'user', 163, 166, 'High School', 'Is SAT better than ACT or ACT better than SAT? How do you compare SAT scores to ACT scores?', NULL, 'is-SAT-better-than-ACT', NULL, '2022-03-07 03:32:55', '2022-03-07 03:32:55'),
(148, 'user', 158, 136, 'general', 'When is a good age to start martial arts for kids?', NULL, 'good-age-for-martial-arts', NULL, '2022-03-07 03:34:07', '2022-03-07 03:34:07'),
(149, 'user', 159, 149, 'High School', 'How many AP courses are available and how to find APs available for each subject type?', NULL, 'how-many-AP-courses-available', NULL, '2022-03-07 03:34:28', '2022-03-07 03:34:28'),
(150, 'user', 161, 157, 'High School', 'What does getting college credit mean? How do you get credits by doing advance placement?', NULL, 'what-does-getting-college-credit-mean', NULL, '2022-03-07 03:34:53', '2022-03-07 03:34:53'),
(151, 'user', 163, 168, 'college', 'How to apply for college financial aid? When will we know if we can receive financial aid?', NULL, 'how-to-apply-for-college-financial-aid', NULL, '2022-03-07 03:37:10', '2022-03-07 03:37:10'),
(152, 'user', 161, 158, 'High School', 'What are the AP courses available in Arts?', NULL, 'AP-courses-available-in-arts', NULL, '2022-03-07 03:37:33', '2022-03-07 03:37:33'),
(153, 'user', 164, 170, 'Elementary', 'Is math or english enrichment classes necessary for elementary school? I see a lot of kids going to several classes? Is that necessary?', NULL, 'math-english-enrichment-classes-for-elementary-school', NULL, '2022-03-07 04:29:15', '2022-03-07 04:29:15'),
(154, 'user', 157, 140, 'High School', 'Any advice on clubs and volunteer work to join in Freshman and Junior years?', NULL, 'clubs-for-volunteering-recommendations', NULL, '2022-03-07 04:29:41', '2022-03-07 04:29:41'),
(155, 'user', 161, 160, 'High School', 'How is the GPA calculated? What are the ways of increasing GPA?', NULL, 'how-is-GPA-calculated', NULL, '2022-03-07 04:29:58', '2022-03-07 04:29:58'),
(156, 'user', 164, 169, 'general', 'What is a good age to introduce coding for kids? Any suggestions for good online coding academy?', NULL, 'what-is-a-good-age-to-start-coding', NULL, '2022-03-07 04:30:17', '2022-03-07 04:30:17'),
(157, 'user', 160, 156, 'High School', 'My high schoolers is interested in Political sciences path. How can I get him volunteer opportunities in this path?', NULL, 'volunteer-opportunities-political-science', NULL, '2022-03-07 04:53:25', '2022-03-07 04:53:25'),
(158, 'user', 166, 173, 'Elementary', 'Are Great Schools rating good? How to know the schools are good? Any other websites to get this information.', NULL, 'Are-great-schools-ratings-good', NULL, '2022-03-07 04:53:43', '2022-03-07 04:53:43'),
(159, 'user', 162, 163, 'High School', 'Are there any prerequisites for taking AP courses? I have a 7th grader and want to know if I need to do anything as a parent to prepare him?', NULL, 'any-prerequisites-for-taking-AP-classes', NULL, '2022-03-07 04:54:07', '2022-03-07 04:54:07'),
(160, 'user', 166, 172, 'Elementary', 'Any good chess classes recommended for elementary kids? I am looking for a coach who can help my kid for the long run.', NULL, 'Good-chess-classes-and-coach', NULL, '2022-03-07 04:54:28', '2022-03-07 04:54:28'),
(161, 'user', 161, 159, 'High School', 'What AP courses are available in history and social sciences?', NULL, 'What-AP-courses-are-available-in-history-and-social-sciences', NULL, '2022-03-07 04:55:10', '2022-03-07 04:55:10'),
(162, 'user', 164, 171, 'general', 'Any suggestions for preschoolers and elementary kids activities in bay area?', NULL, 'preschool-and-elementary-kid-activities', NULL, '2022-03-07 04:55:36', '2022-03-07 04:55:36');

-- --------------------------------------------------------

--
-- Table structure for table `question_categories`
--

CREATE TABLE `question_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `question_categories`
--

INSERT INTO `question_categories` (`id`, `name`, `url`, `created_at`, `updated_at`) VALUES
(26, 'College', 'college', '2022-03-06 02:32:32', '2022-03-06 02:32:32'),
(27, 'High School', 'High School', '2022-03-06 02:32:45', '2022-03-06 02:32:45'),
(28, 'Middle School', 'middleschool', '2022-03-06 02:32:59', '2022-03-06 02:32:59'),
(29, 'Elementary School', 'Elementary', '2022-03-06 02:33:14', '2022-03-06 02:33:14'),
(30, 'Preschool', 'Preschool', '2022-03-06 02:33:43', '2022-03-06 02:33:43'),
(31, 'General', 'general', '2022-03-06 02:42:19', '2022-03-06 02:42:19');

-- --------------------------------------------------------

--
-- Table structure for table `referrals`
--

CREATE TABLE `referrals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `adddate_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addslot_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refer_by` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `refer_by_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `member_firstname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_lastname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `member_phone` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `quantity` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `referrals`
--

INSERT INTO `referrals` (`id`, `adddate_id`, `addslot_id`, `signup_id`, `refer_by`, `refer_by_id`, `member_firstname`, `member_lastname`, `member_email`, `member_phone`, `quantity`, `comment`, `created_at`, `updated_at`) VALUES
(56, '110', '89', '340', 'Puls Private LTD', '170', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', NULL, '1', 'I Want to join your class', '2022-03-16 10:07:34', '2022-03-16 10:07:34'),
(58, '110', '90', '340', 'Puls Private LTD', '170', 'Rohit', 'Das', 'rohit@yopmail.com', NULL, '1', 'Let\'s celebrate', '2022-03-16 10:08:06', '2022-03-16 10:08:06'),
(59, '111', '89', '340', 'Puls Private LTD', '170', 'Priyank', 'Jackson', 'priyank@yopmail.com', NULL, '5', 'I Want to join your class', '2022-03-16 10:08:24', '2022-03-16 10:08:24'),
(60, '112', '89', '340', 'Puls Private LTD', '170', 'Swarnadwip', 'Nath', 'aekaku@yopmail.com', NULL, '1', NULL, '2022-03-16 10:08:37', '2022-03-16 10:08:37'),
(61, '113', '92', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'aekaku@yopmail.com', NULL, '1', 'I Want to join your class', '2022-03-16 13:20:42', '2022-03-16 13:20:42'),
(62, '113', '93', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'aekaku@yopmail.com', NULL, '1', NULL, '2022-03-16 13:20:59', '2022-03-16 13:20:59'),
(63, '114', '92', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', NULL, '1', 'I Want to join your class', '2022-03-16 13:21:12', '2022-03-16 13:21:12'),
(64, '114', '93', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', NULL, '1', NULL, '2022-03-16 13:29:58', '2022-03-16 13:29:58'),
(65, '115', '94', '342', 'Neelima', '61', 'Nancy', 'P', 'nanpal29001@gmail.com', NULL, '1', NULL, '2022-03-24 17:42:39', '2022-03-24 17:42:39'),
(66, '113', '92', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 09:28:59', '2022-03-25 09:28:59'),
(67, '113', '92', '341', 'Puls Private LTD', '1', 'Rohit', 'Das', 'rohit@yopmail.com', NULL, '1', NULL, '2022-03-25 09:30:24', '2022-03-25 09:30:24'),
(68, '118', '100', '344', 'Swarnadwip Nath', '1', 'swarnadwip', 'Nath', 'asbfg@yopmail.com', '7713356784', '1', 'Gggs', '2022-03-25 10:47:15', '2022-03-25 10:47:15'),
(70, '119', '100', '344', 'Swarnadwip Nath', '1', 'swarnadwip', 'Nath', 'asbfg@yopmail.com', '06294567895', '1', 'Ddddd', '2022-03-25 11:01:39', '2022-03-25 11:01:39'),
(71, '119', '100', '344', 'Swarnadwip Nath', '1', 'Subha', 'Malu', 's@yopmail.com', '7431234543', '1', 'Zsss', '2022-03-25 11:05:19', '2022-03-25 11:05:19'),
(72, '119', '100', '344', 'Swarnadwip Nath', '1', 'Valu', 'Da', 'l@yopmail.com', '7123567890', '1', NULL, '2022-03-25 11:33:57', '2022-03-25 11:33:57'),
(73, '119', '100', '344', 'Swarnadwip Nath', '1', 'swarnadwip', 'Nath', 'd@yopmail.com', '06294353360', '1', NULL, '2022-03-25 11:36:50', '2022-03-25 11:36:50'),
(74, '118', '100', '344', 'Swarnadwip Nath', '1', 'Kali', 'Das', 'kk@yopmail.com', '06294357890', '1', NULL, '2022-03-25 11:38:10', '2022-03-25 11:38:10'),
(75, '118', '100', '344', 'Swarnadwip Nath', '1', 'Sk', 'Hossan', 'll@yopmail.com', '06294345678', '1', NULL, '2022-03-25 11:42:15', '2022-03-25 11:42:15'),
(76, '113', '99', '341', 'Puls Private LTD', '1', 'Avijit', 'Sen', 'pfavijit@yopmail.com', '+916789564215', '1', 'asd', '2022-03-25 11:53:03', '2022-03-25 11:53:03'),
(77, '113', '93', '341', 'Puls Private LTD', '1', 'Priyank', 'Jackson', 'priyank@yopmail.com', '11234567894', '1', 'I Want to join your class', '2022-03-25 12:39:09', '2022-03-25 12:39:09'),
(78, '114', '99', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 12:39:51', '2022-03-25 12:39:51'),
(79, '113', '99', '341', 'Puls Private LTD', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 12:46:11', '2022-03-25 12:46:11'),
(80, '114', '93', '341', 'Puls Private LTD', '1', 'Rohit', 'Dawn', 'rohit@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 12:58:34', '2022-03-25 13:10:06'),
(81, '114', '99', '341', 'Puls Private LTD', '1', 'Avijit', 'Das', 'pfavijit@gmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 13:27:07', '2022-03-25 13:28:03'),
(83, '119', '100', '344', 'Swarnadwip Nath', '1', 'Rohit', 'Das', 'rohit@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 13:32:18', '2022-03-25 13:33:52'),
(84, '114', '93', '341', 'Puls Private LTD', '1', 'Maddy', 'Jackson', 'maddy@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 13:42:13', '2022-03-25 13:42:13'),
(85, '118', '100', '344', 'Swarnadwip Nath', '1', 'Swarnadwip', 'Nath', 'aas@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-25 13:50:27', '2022-03-25 13:55:05'),
(86, '118', '100', '344', 'Swarnadwip Nath', '1', 'Swarnadwip', 'Nath', 'aaaa@yopmail.com', '+916789564215', '1', NULL, '2022-03-25 13:57:45', '2022-03-25 13:57:45'),
(87, '123', '103', '346', 'Neel', '61', 'Nancy', 'P', 'nanpal29001@gmail.com', NULL, '1', NULL, '2022-03-30 17:11:49', '2022-03-30 17:11:49'),
(88, '118', '100', '344', 'Swarnadwip Nath', '1', 'dd', 'Das', 'dd@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-31 07:11:55', '2022-03-31 07:11:55'),
(89, '129', '106', '352', 'Monmohon Singh', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-31 07:44:37', '2022-03-31 07:44:37'),
(90, '132', '106', '352', 'Monmohon Singh', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@gmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-31 07:46:23', '2022-03-31 07:46:23'),
(91, '129', '107', '352', 'Monmohon Singh', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@gmail.com', '+916789564215', '1', 'I Want to join your class', '2022-03-31 08:28:47', '2022-03-31 08:28:47'),
(92, '132', '107', '352', 'Monmohon Singh', '1', 'Avijit', 'Sen', 'pfavijit@yopmail.com', '+916789564215', '1', NULL, '2022-03-31 08:30:12', '2022-03-31 08:30:12'),
(93, '132', '107', '352', 'Monmohon Singh', '1', 'Swarnadwip', 'Nath', 'pfswarnadwip@gmail.com', '+916789564215', '1', NULL, '2022-03-31 08:31:19', '2022-03-31 08:31:19'),
(94, '143', '119', '358', 'Sam', '61', 'Nancy', 'P', 'test@test.com', 'test', '1', NULL, '2022-04-02 23:33:25', '2022-04-02 23:33:25'),
(95, '144', '120', '358', 'Sam', '61', 'Nancy', 'Pal', 'nanpal29001@gmail.com', 'test', '0', NULL, '2022-04-02 23:38:31', '2022-04-02 23:39:22'),
(96, '145', '121', '359', 'Pinku Mardi', '1', 'Pinku', 'Das', 'pinku@gmail.com', '7431336965', '2', 'I want to join the party with my friend', '2022-04-04 12:23:45', '2022-04-04 12:23:45'),
(97, '145', '121', '359', 'Pinku Mardi', '1', 'Avisekh', 'Pramanick', 'pfavisekh@gmail.com', '7895689568', '1', 'I want to join the party with my friend', '2022-04-04 12:26:30', '2022-04-04 12:26:30'),
(98, '145', '121', '359', 'Pinku Mardi', '1', 'Daud', 'Ibrahim', 'futuristavisekh@gmail.com', '7431336965', '1', 'I want to join the party with my friend', '2022-04-04 12:27:19', '2022-04-04 12:27:19'),
(99, '146', '122', '360', 'Test25', '61', 'Test 1', 'Test 2', 'nanpal29002@gmail.com', 'Test', '0', 'Testing', '2022-04-18 15:57:04', '2022-04-18 15:59:29'),
(101, '149', '125', '363', 'fcdrce', '1', 'Demo', 'demo', 'demo@yopmail.com', '586453614534', '2', 'csdefvc', '2022-04-19 13:58:04', '2022-04-19 13:58:04'),
(102, '149', '125', '363', 'fcdrce', '1', 'Avi', 'sen', 'pfavijit@gmail.com', NULL, '1', NULL, '2022-04-19 14:00:26', '2022-04-19 14:00:26'),
(103, '164', '137', '373', 'Swarnadwip Nath', '9', 'ljhlk', 'hgfhg', 'ghgh@hgg.com', '6294353360', '1', 'kjh', '2022-05-03 06:55:35', '2022-05-03 06:55:35'),
(104, '166', '139', '374', 'Swarnadwip Nath', '9', 'Swarna', 'Nath', 'swarna@yopmail.com', '6294353360', '1', NULL, '2022-05-03 12:20:48', '2022-05-03 12:20:48'),
(105, '166', '139', '374', 'Swarnadwip Nath', '9', 'Kalu', 'Das', 'kalu@yopmail.com', '6294353360', '1', NULL, '2022-05-03 12:26:54', '2022-05-03 12:26:54'),
(106, '166', '139', '374', 'Swarnadwip Nath', '9', 'ss', 'das', 'ss@yopmail.com', '6294353360', '1', NULL, '2022-05-03 12:27:59', '2022-05-03 12:27:59'),
(107, '166', '139', '374', 'Swarnadwip Nath', '9', 'dd', 'das', 'dd@yopmail.com', '6294353374', '1', NULL, '2022-05-03 12:29:27', '2022-05-03 12:29:27');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `signup_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `signup_id`, `name`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(57, 340, 'Required', 'Optional', 'Required', '2022-03-16 10:07:07', '2022-03-16 10:07:07'),
(58, 341, 'Required', 'Required', 'Optional', '2022-03-16 13:20:17', '2022-03-16 13:20:17'),
(59, 342, 'Required', 'Required', 'Required', '2022-03-24 17:40:46', '2022-03-24 18:12:54'),
(60, 343, 'Required', 'Required', 'Required', '2022-03-24 18:17:27', '2022-03-24 18:17:27'),
(61, 343, 'Required', 'Required', 'Required', '2022-03-24 18:18:11', '2022-03-24 18:18:11'),
(62, 344, 'Required', 'Required', 'Optional', '2022-03-25 10:20:18', '2022-03-25 10:20:18'),
(63, 344, 'Required', 'Required', 'Required', '2022-03-25 11:36:09', '2022-03-25 11:36:09'),
(64, 345, 'Required', 'Optional', 'Required', '2022-03-29 08:30:37', '2022-03-29 08:30:37'),
(65, 346, 'Required', 'Required', 'Optional', '2022-03-30 17:10:33', '2022-03-30 17:10:33'),
(66, 352, 'Required', 'Optional', 'Required', '2022-03-31 07:37:40', '2022-03-31 07:40:06'),
(67, 355, 'Required', 'Required', 'Required', '2022-03-31 11:09:59', '2022-03-31 11:09:59'),
(68, 358, 'Required', 'Required', 'Required', '2022-04-02 23:24:27', '2022-04-02 23:24:27'),
(69, 358, 'Required', 'Required', 'Required', '2022-04-02 23:29:23', '2022-04-02 23:29:23'),
(70, 359, 'Required', 'Optional', 'Required', '2022-04-04 11:32:38', '2022-04-04 11:32:38'),
(71, 360, 'Required', 'Required', 'Required', '2022-04-18 15:40:10', '2022-04-18 15:40:10'),
(72, 363, 'Required', 'Required', 'Required', '2022-04-19 13:57:16', '2022-04-19 13:57:16'),
(73, 364, 'Required', 'Optional', 'Optional', '2022-04-27 09:31:21', '2022-04-27 09:31:21'),
(74, 364, 'Required', 'Required', 'Required', '2022-04-27 09:34:45', '2022-04-27 09:34:45'),
(75, 364, 'Required', 'Optional', 'Optional', '2022-04-27 10:54:40', '2022-04-27 10:54:40'),
(76, 365, 'Required', 'Required', 'Required', '2022-04-27 10:59:14', '2022-04-27 10:59:14'),
(77, 365, 'Required', 'Required', 'Required', '2022-04-27 11:00:33', '2022-04-27 11:00:33'),
(78, 366, 'Required', 'Required', 'Required', '2022-04-27 11:06:26', '2022-04-27 11:06:26'),
(79, 367, 'Required', 'Required', 'Required', '2022-04-27 17:56:04', '2022-04-27 18:03:54'),
(80, 373, 'Required', 'Required', 'Required', '2022-05-03 06:19:10', '2022-05-03 06:19:10'),
(81, 374, 'Required', 'Required', 'Required', '2022-05-03 12:17:56', '2022-05-03 12:17:56'),
(82, 375, 'Required', 'Required', 'Required', '2022-05-03 12:34:41', '2022-05-03 12:34:41'),
(83, 376, 'Required', 'Required', 'Required', '2022-05-03 12:46:24', '2022-05-03 12:46:24');

-- --------------------------------------------------------

--
-- Table structure for table `signups`
--

CREATE TABLE `signups` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `timezone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `group` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `cause` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signups`
--

INSERT INTO `signups` (`id`, `user_id`, `timezone`, `title`, `group`, `category`, `cause`, `image`, `created_at`, `updated_at`) VALUES
(340, '170', 'AKST', 'Valentine\'s Days', 'Everyone must be come.', 'Puls Private LTD', '6789568595', '1647424997-1646153418-pexels-pixabay-2150.jpg', '2022-03-16 10:03:17', '2022-03-16 10:07:01'),
(342, '61', 'America/Los_Angeles', 'Spring Fling', 'Enjoy the spring events with fun games and activities!', 'Neelima', '7689877890', '1648143409-education hub (1).png', '2022-03-24 17:36:49', '2022-03-24 17:40:42'),
(343, '61', 'PST', 'Test', 'Test', 'Test', 'Test', '1648145760-pexels-pixabay-2150.jpg', '2022-03-24 18:16:00', '2022-03-24 18:17:22'),
(344, '1', 'Asia/Kolkata', 'Mother\'s days', 'Everyone must come to celebrate those day', 'Swarnadwip Nath', '7431336789', '1648203498-IMG_20210403_080557.jpg', '2022-03-25 10:18:18', '2022-03-31 07:16:31'),
(346, '61', 'America/Los_Angeles', 'Summer Fun', 'Join the fun event!', 'Neel', '7677890987', '1648659792-pexels-ricardo-esquivel-1926988.jpg', '2022-03-30 17:03:12', '2022-03-30 17:10:13'),
(347, '61', 'America/Los_Angeles', 'test', 'test', 'test', 'test', '1648661591-journal-ge067fe617_640.jpg', '2022-03-30 17:33:11', '2022-03-30 17:33:11'),
(348, '61', 'America/Los_Angeles', 'test', 'test', 'test', 'test', '1648661592-journal-ge067fe617_640.jpg', '2022-03-30 17:33:12', '2022-03-30 17:33:12'),
(351, '1', 'Asia/Kolkata', 'Political Rally', 'Everyone must be come', 'Monmohon Singh', '6294353360', '1648711430-ZiClJf-1920w.jpg', '2022-03-31 07:23:50', '2022-03-31 07:23:50'),
(352, '1', 'Asia/Kolkata', 'Political Rally', 'Everyone must be come', 'Monmohon Singh', '6294353360', '1648711452-ZiClJf-1920w.jpg', '2022-03-31 07:24:12', '2022-03-31 07:32:53'),
(353, '1', 'Asia/Kolkata', 'asdf', 'adsf', 'sfa', '6294353360', '1648723237-ZiClJf-1920w.jpg', '2022-03-31 10:40:37', '2022-03-31 10:41:00'),
(355, '1', 'Asia/Kolkata', 'Marraige Anniversery', 'Everyone must be come', 'Donald Trum', '6789568595', '1648723916-ZiClJf-1920w.jpg', '2022-03-31 10:51:56', '2022-03-31 10:53:55'),
(356, '1', 'Asia/Kolkata', 'Occassions', 'sadf', 'Swarnadwip Nath', '6294353360', '1648736075-ZiClJf-1920w.jpg', '2022-03-31 14:14:35', '2022-03-31 14:14:35'),
(357, '1', 'Asia/Kolkata', 'sgfs', 'dfsg', 'dsgf', 'dfsg', '1648736397-ZiClJf-1920w.jpg', '2022-03-31 14:19:57', '2022-03-31 14:19:57'),
(358, '61', 'America/Los_Angeles', 'Spring Fling', 'For kids Ages 3-12', 'Sam', 'test', '1648941796-Photo1.jpeg', '2022-04-02 23:23:16', '2022-04-02 23:24:23'),
(359, '1', 'Asia/Kolkata', 'Good Friday', 'Everyone must come to the office.', 'Pinku Mardi', '9474586985', '1649071624-stock-photo-142984111-1500x1000.jpg', '2022-04-04 11:27:04', '2022-04-04 11:30:19'),
(360, '61', 'America/Los_Angeles', 'Test20', 'Test20', 'Test25', 'test', '1650296331-Photo1.jpeg', '2022-04-18 15:38:51', '2022-04-18 15:39:50'),
(361, '61', 'America/Los_Angeles', 'Test 30', 'Test 30', 'Test 30', 'Test 30', '1650297310-Cookies-prep.jpeg', '2022-04-18 15:55:10', '2022-04-18 15:55:10'),
(362, '1', 'Asia/Kolkata', 'fvcrefv', 'fredsfvcdsev', 'vfredfv', '498645614', '1650366607-trouser-1.jpeg', '2022-04-19 11:10:07', '2022-04-19 11:10:07'),
(363, '1', 'Asia/Kolkata', 'Demo 4', 'This is a demo', 'fcdrce', '456453646', '1650376569-trouser-1.jpeg', '2022-04-19 13:56:09', '2022-04-19 13:57:12'),
(364, '1', 'Asia/Kolkata', 'xyz', 'zxuy', 'hsakh', '2956295869', '1651051652-Frame 480.png', '2022-04-27 09:27:32', '2022-04-27 09:31:08'),
(365, '1', 'Asia/Kolkata', 'sghhfhr', 'fttyre76yi', 'fhfkhj', '5254547646', '1651057047-smartphone-hand-businessman-holding-mobile-phone-cell-arm-template-app-presentation-flat-vector-internet-application-blank-155035117.jpg', '2022-04-27 10:57:27', '2022-04-27 11:00:30'),
(366, '175', 'Asia/Kolkata', 'dgdhfx', 'dgfhnfg', 'ghjlkjhjjlk', '2956295869', '1651057490-smartphone-hand-businessman-holding-mobile-phone-cell-arm-template-app-presentation-flat-vector-internet-application-blank-155035117.jpg', '2022-04-27 11:04:50', '2022-04-27 11:06:23'),
(367, '9', 'Asia/Kolkata', 'Valentine\'s Day', 'Everyone must be come.', 'Swarnadwip Nath', '6789586532', '1651082027-(13).jpg', '2022-04-27 17:53:47', '2022-04-27 17:55:57'),
(368, '61', 'America/Los_Angeles', 'Birthday Party', 'Welcome to celebrate 8 year party1', 'test', 'Test', '1651255548-pexels-dana-tentis-370799.jpg', '2022-04-29 18:05:48', '2022-04-29 18:05:48'),
(369, '9', 'Asia/Kolkata', 'Good Friday', 'Everyone must be come', 'Swarnadwip Nath', '6789568759', '1651557727-(9).jpg', '2022-05-03 06:02:07', '2022-05-03 06:02:07'),
(370, '9', 'Asia/Kolkata', 'Good Friday', 'Everyone must be come', 'Swarnadwip Nath', '6789568759', '1651558133-(9).jpg', '2022-05-03 06:08:53', '2022-05-03 06:08:53'),
(371, '9', 'Asia/Kolkata', 'Good Friday', 'Everyone must be come', 'Swarnadwip Nath', '6789568759', '1651558252-(9).jpg', '2022-05-03 06:10:52', '2022-05-03 06:10:52'),
(372, '9', 'Asia/Kolkata', 'Good Friday', 'Everyone must be come', 'Swarnadwip Nath', '6789568759', '1651558326-(9).jpg', '2022-05-03 06:12:06', '2022-05-03 06:12:06'),
(373, '9', 'MST', 'Good Friday', 'Everyone must be come', 'Swarnadwip Nath', '6789568759', '1651558802-(12).jpg', '2022-05-03 06:12:47', '2022-05-03 06:20:02'),
(374, '9', 'Asia/Kolkata', 'Good News', 'Everyone must come', 'Swarnadwip Nath', '6789568759', '1651580099-(7).jpg', '2022-05-03 12:14:59', '2022-05-03 12:16:40'),
(375, '176', 'Asia/Kolkata', 'Shyamashree Teachings', 'Web designing class', 'Sh', '8981083112', '1651581213-proof2.jpg', '2022-05-03 12:33:33', '2022-05-03 12:34:35'),
(376, '1', 'Asia/Kolkata', 'class', 'vhjgjh', 'ghjlkjhjjlk', '9836278942', '1651581925-smartphone-hand-businessman-holding-mobile-phone-cell-arm-template-app-presentation-flat-vector-internet-application-blank-155035117.jpg', '2022-05-03 12:45:25', '2022-05-03 12:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `slots`
--

CREATE TABLE `slots` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `signup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_sort` varchar(150) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tslot` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lslot` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `help` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` text COLLATE utf8mb4_unicode_ci,
  `number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `time` text COLLATE utf8mb4_unicode_ci,
  `timezone` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publish` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sorts`
--

CREATE TABLE `sorts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `signup_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type_of_sort` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sorts`
--

INSERT INTO `sorts` (`id`, `signup_id`, `type_of_sort`, `created_at`, `updated_at`) VALUES
(36, '340', 'sort_by_date', '2022-03-16 10:06:51', '2022-03-16 10:06:51'),
(37, '341', 'sort_by_date', '2022-03-16 13:20:10', '2022-03-16 13:20:10'),
(38, '342', 'sort_by_date', '2022-03-24 17:40:42', '2022-03-24 17:40:42'),
(39, '343', 'single_date', '2022-03-24 18:17:22', '2022-03-24 18:18:02'),
(40, '344', 'sort_by_date', '2022-03-25 10:20:07', '2022-03-31 10:27:41'),
(41, '345', 'sort_by_date', '2022-03-29 08:27:08', '2022-03-31 07:14:37'),
(42, '346', 'sort_by_date', '2022-03-30 17:10:12', '2022-03-30 17:10:26'),
(43, '352', 'sort_by_date', '2022-03-31 07:32:53', '2022-03-31 10:23:31'),
(44, '353', 'single_date', '2022-03-31 10:41:00', '2022-03-31 10:41:00'),
(45, '354', 'single_date', '2022-03-31 10:46:54', '2022-03-31 10:46:54'),
(46, '355', 'single_date', '2022-03-31 10:53:55', '2022-03-31 10:53:55'),
(47, '358', 'single_date', '2022-04-02 23:24:23', '2022-04-02 23:29:18'),
(48, '359', 'single_date', '2022-04-04 11:30:19', '2022-04-04 11:30:19'),
(49, '360', 'single_date', '2022-04-18 15:39:50', '2022-04-18 15:39:50'),
(50, '363', 'single_date', '2022-04-19 13:57:12', '2022-04-19 13:57:12'),
(51, '364', 'single_date', '2022-04-27 09:31:08', '2022-04-27 09:34:35'),
(52, '365', 'single_date', '2022-04-27 10:59:09', '2022-04-27 10:59:09'),
(53, '365', 'single_date', '2022-04-27 11:00:30', '2022-04-27 11:00:30'),
(54, '366', 'single_date', '2022-04-27 11:06:15', '2022-04-27 11:06:15'),
(55, '366', 'single_date', '2022-04-27 11:06:23', '2022-04-27 11:06:23'),
(56, '367', 'sort_by_date', '2022-04-27 17:55:57', '2022-04-27 17:55:57'),
(57, '373', 'single_date', '2022-05-03 06:15:44', '2022-05-03 06:15:44'),
(58, '374', 'single_date', '2022-05-03 12:16:40', '2022-05-03 12:16:40'),
(59, '375', 'single_date', '2022-05-03 12:34:35', '2022-05-03 12:34:35'),
(60, '376', 'sort_by_date', '2022-05-03 12:46:20', '2022-05-03 12:46:20');

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE `subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_type` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `user_subject_id` int(11) DEFAULT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `file` text COLLATE utf8mb4_unicode_ci,
  `grade` text COLLATE utf8mb4_unicode_ci,
  `school` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `user_type`, `user_id`, `user_subject_id`, `category`, `name`, `description`, `slug`, `image`, `file`, `grade`, `school`, `created_at`, `updated_at`) VALUES
(47, 'user', 57, 41, 'Explore-Kids-Talents', 'Nathan', 'In grade 3, Nathans thoughts of being a President!', 'Nathan-president12', '1644118365-WhatsApp Image 2022-02-05 at 7.29.50 PM.jpeg', '1644118365-WhatsApp Image 2022-02-05 at 7.29.50 PM.jpeg', 'Grade 3', 'Hidden Hills Elementary', '2022-02-06 03:33:07', '2022-02-20 10:55:40'),
(48, 'admin', 2, NULL, 'Explore-Kids-Talents', 'Jelly Fish', 'With paper plate, yarn, googly eyes', 'Jelly-fish-craft12', '1644120472-Screen Shot 2022-02-05 at 8.05.59 PM.png', '1644120472-Screen Shot 2022-02-05 at 8.05.59 PM.png', NULL, NULL, '2022-02-06 04:07:52', '2022-02-20 10:58:03'),
(49, 'admin', 2, NULL, 'Explore-Kids-Talents', 'Nikhita', 'Baking by Nikhita, Grade 6.', 'nikhita-baking', '1644123456-muffins-2225091_640.jpg', '1644123456-muffins-2225091_640.jpg', NULL, NULL, '2022-02-06 04:57:36', '2022-02-20 10:57:52'),
(50, 'admin', 2, NULL, 'Explore-Kids-Talents', 'Susan', 'Drawing by Susan!', 'susan', '1644123680-Screen Shot 2022-02-05 at 9.00.39 PM.png', '1644123680-Screen Shot 2022-02-05 at 9.00.39 PM.png', NULL, NULL, '2022-02-06 05:01:20', '2022-02-20 10:56:07'),
(51, 'admin', 2, NULL, 'Explore-Kids-Talents', 'Sam', 'Art by Sam! Grade: Kinder', 'Sam-kinder', '1644124671-Screen Shot 2022-02-05 at 9.16.27 PM.png', '1644124671-Screen Shot 2022-02-05 at 9.16.27 PM.png', NULL, NULL, '2022-02-06 05:17:51', '2022-02-20 10:56:21'),
(52, 'admin', 2, NULL, 'Explore-Kids-Talents', 'Cookies', 'Cookies by Sami!', 'cookies-sami', '1644125021-cookies-960898_640.jpg', '1644125021-cookies-960898_640.jpg', NULL, NULL, '2022-02-06 05:23:41', '2022-02-20 10:57:04'),
(53, 'user', 58, 42, 'Explore-Kids-Talents', 'Yashmita', 'My experience planting seeds, by Yashmita', 'plating-seeds-yashmita', '1644175055-Screen Shot 2022-02-06 at 11.15.16 AM.png', '1644175055-Screen Shot 2022-02-06 at 11.15.16 AM.png', '6', 'Valley Public School', '2022-02-06 19:18:02', '2022-02-20 10:56:38'),
(54, 'user', 58, 43, 'Explore-Kids-Talents', 'Susan', 'Mouse coloring by Susan.', 'mouse-drawing', '1644175392-Screen Shot 2022-02-06 at 11.21.06 AM.png', '1644175392-Screen Shot 2022-02-06 at 11.21.06 AM.png', '2', '-', '2022-02-06 19:23:33', '2022-02-20 10:56:51'),
(55, 'user', 58, 46, 'Explore-Kids-Talents', 'Ounathya', 'Coloring by Ounathya!', 'boat-coloring-ounathya', '1644175621-Screen Shot 2022-02-06 at 11.26.13 AM.png', '1644175621-Screen Shot 2022-02-06 at 11.26.13 AM.png', '2', '-', '2022-02-06 19:27:59', '2022-02-20 10:57:41'),
(56, 'user', 41, 47, 'Explore-Kids-Talents', 'Nathan', 'Coloring activity', 'nathan-dino', '1644185077-Screen Shot 2022-02-06 at 2.03.03 PM.png', '1644185077-Screen Shot 2022-02-06 at 2.03.03 PM.png', '5', 'Hidden Hills Elementary', '2022-02-06 22:05:01', '2022-02-20 10:58:16'),
(57, 'user', 41, 48, 'Explore-Kids-Talents', 'Ivan', 'Craft work by Ivan in Grade 3.', 'ivan32', '1644185495-Screen Shot 2022-02-06 at 2.07.05 PM.png', '1644185495-Screen Shot 2022-02-06 at 2.07.05 PM.png', '3', 'Hidden Hills Elementary', '2022-02-06 22:11:55', '2022-02-20 10:58:27'),
(58, 'user', 41, 49, 'Explore-Kids-Talents', 'Ivy', 'Painting by Ivan', 'Ivy33', '1644185624-Screen Shot 2022-02-06 at 2.12.53 PM.png', '1644185624-Screen Shot 2022-02-06 at 2.12.53 PM.png', '3', 'Hidden Hills Elementary', '2022-02-06 22:14:01', '2022-02-20 10:58:53'),
(59, 'user', 41, 50, 'Explore-Kids-Talents', 'Nathan', 'Friends and teachers support!', 'nathan12-friends-teachers', '1644185895-Screen Shot 2022-02-06 at 2.14.44 PM.png', '1644185895-Screen Shot 2022-02-06 at 2.14.44 PM.png', 'Grade 5', 'Hidden Hills Elementary', '2022-02-06 22:18:39', '2022-02-20 10:58:40'),
(60, 'user', 41, 51, 'Explore-Kids-Talents', 'Vijay', 'Not sure what this is!! :)', 'varun12', '1644186037-Screen Shot 2022-02-06 at 2.19.44 PM.png', '1644186037-Screen Shot 2022-02-06 at 2.19.44 PM.png', 'Grade 2', 'Hidden Hills', '2022-02-06 22:21:08', '2022-02-20 10:59:06'),
(61, 'user', 41, 52, 'Explore-Kids-Talents', 'Nathan', 'Pasta Preparation By Nathan.\r\n\r\nPASTA RECIPE\r\n\r\nI used the recipe below to make the pasta.\r\n\r\nhttps://thewanderlustkitchen.com/pasta-for-one-10-minutes/\r\n\r\nThis is a simple recipe and the ingredients I used are:\r\n\r\nPasta\r\nButter\r\nSalt\r\nGrated Parmesan\r\nBlack pepper\r\n\r\nI made the following changes to the recipe. I added a little more butter than the recipe suggested and put very little black pepper as I like my food mild.', 'Nathan-pasta', '1644186392-Screen Shot 2022-02-06 at 2.23.26 PM.png', '1644186392-Screen Shot 2022-02-06 at 2.23.26 PM.png', 'Grade 6', 'Windemere Ranch Middle School', '2022-02-06 22:26:48', '2022-02-20 10:59:30'),
(62, 'user', 41, 53, 'Explore-Kids-Talents', 'Varun', 'Baking Salmon (recipe included)', 'varun-Baking-Salmon', '1644186913-Screen Shot 2022-02-06 at 2.32.57 PM.png', '1644186913-My Observations & Help Out in the Kitchen (for 2+ days).pdf', '6', 'Windemer Ranch', '2022-02-06 22:35:38', '2022-02-20 10:59:18'),
(63, 'admin', 3, NULL, 'Explore-Kids-Talents', 'My List', 'My bucketlist.', 'my-buketlist', '1644187507-Screen Shot 2022-02-06 at 2.44.00 PM.png', '1644187507-Screen Shot 2022-02-06 at 2.44.00 PM.png', NULL, NULL, '2022-02-06 22:45:07', '2022-02-20 10:59:43'),
(64, 'admin', 3, NULL, 'Explore-Kids-Talents', 'In New Year', 'My list of things for new year!', 'my-list-new-year', '1644187672-Screen Shot 2022-02-06 at 2.46.48 PM.png', '1644187672-Screen Shot 2022-02-06 at 2.46.48 PM.png', NULL, NULL, '2022-02-06 22:47:52', '2022-02-20 10:59:59'),
(68, 'user', 41, 56, 'Explore-Kids-Talents', 'Egg Sandwich by Emily', 'Ingredients:\r\n1) Eggs\r\n2) Lettuce\r\n3) Cheese', 'Egg-Sandwich-by-Emily', '1644347511-egg-sandwiches-2422902_640.jpg', '1644347511-egg-sandwiches-2422902_640.jpg', '6', '-', '2022-02-08 19:12:17', '2022-02-20 11:00:25'),
(71, 'user', 41, 60, 'Explore-Kids-Talents', 'Hearts Greeting Card', 'Enjoyed working on this activity. Easy to create:\r\n1) Blue Paper or color of your choice\r\n2) Heart shapes\r\n3) Glue\r\nTime: 1 Hr', 'Hearts-Greeting-Card', '1644381459-hearts-1455498_640.jpg', '1644381459-hearts-1455498_640.jpg', '7', 'Valley School', '2022-02-09 04:39:05', '2022-02-20 11:00:38'),
(73, 'user', 41, 62, 'Explore-Kids-Talents', 'Uploaded by Ritesh', 'The Lion and the Rabbit story for you to enjoy!', 'The-Lion-and-the-Rabbit-story', '1644882952-Screen Shot 2022-02-14 at 3.53.48 PM.png', '1644882952-Screen Shot 2022-02-14 at 3.53.48 PM.png', '4', '-', '2022-02-14 23:56:56', '2022-02-20 11:01:06'),
(76, 'user', 119, 65, 'Explore-Kids-Talents', 'Anika Anne', 'This is a drawing of the genie from the movie Aladdin. I used a blender and a sketching pencil.', 'Alladin-Painting', '1644966331-Anika Anne  — Aladdin — The Genie.png', '1644966331-Anika Anne  — Aladdin — The Genie.png', '6', 'Brinckerhoff Elementary School', '2022-02-15 23:23:54', '2022-02-20 11:00:50'),
(77, 'user', 54, 66, 'Explore-Kids-Talents', 'Vijay', 'After 6 hours of non stop work his build was completed!', 'vijay-legobuild1', '1644983186-WhatsApp Image 2022-02-15 at 7.42.21 PM (6).jpeg', '1644983186-WhatsApp Image 2022-02-15 at 7.42.21 PM (6).jpeg', '4', '-', '2022-02-16 03:46:56', '2022-02-20 11:01:19'),
(78, 'user', 54, 67, 'Explore-Kids-Talents', 'Vijay', 'My boy loves lego building!', 'vijay-legobuild2', '1644983284-WhatsApp Image 2022-02-15 at 7.42.21 PM.jpeg', '1644983284-WhatsApp Image 2022-02-15 at 7.42.21 PM.jpeg', '4', '-', '2022-02-16 03:48:23', '2022-02-20 11:01:33'),
(79, 'user', 54, 68, 'Explore-Kids-Talents', 'Vijay', 'Continuation of the build!', 'vijay-legobuild3', '1644983400-WhatsApp Image 2022-02-15 at 7.42.21 PM (1).jpeg', '1644983400-WhatsApp Image 2022-02-15 at 7.42.21 PM (1).jpeg', '4', '-', '2022-02-16 03:50:21', '2022-02-20 11:01:47'),
(80, 'admin', 3, NULL, 'ideas', 'Flower Craft', 'Simple Craftwork idea: https://www.thebestideasforkids.com/fork-painted-flowers/', 'Flower-craft', '1645156303-Screen Shot 2022-02-17 at 7.48.19 PM.png', '1645156303-Screen Shot 2022-02-17 at 7.48.19 PM.png', NULL, NULL, '2022-02-18 03:51:43', '2022-02-18 03:51:43'),
(81, 'admin', 3, NULL, 'ideas', 'Racing Car Ideas', 'https://www.brightstarkids.com.au/blog/creating/20-diy-toilet-roll-crafts/', 'Paper-roll', '1645157514-Racing cars.jpeg', '1645157514-Racing cars.jpeg', NULL, NULL, '2022-02-18 04:11:54', '2022-02-18 04:11:54'),
(82, 'admin', 3, NULL, 'ideas', 'Caterpillar', 'A good activity for young kids... \r\n\r\nhttps://mommymadethat.com/pom-pom-caterpillar-craft/', 'Caterpillar', '1645158988-Screen Shot 2022-02-17 at 8.35.13 PM.png', '1645158988-Screen Shot 2022-02-17 at 8.35.13 PM.png', NULL, NULL, '2022-02-18 04:36:28', '2022-02-18 04:36:28'),
(83, 'admin', 3, NULL, 'ideas', 'Carrot Egg Craft', 'https://www.anightowlblog.com/diy-carrot-easter-eggs/', 'Egg-Craft', '1645159347-Screen Shot 2022-02-17 at 8.40.05 PM.png', '1645159347-Screen Shot 2022-02-17 at 8.40.05 PM.png', NULL, NULL, '2022-02-18 04:42:27', '2022-02-18 04:42:27'),
(84, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Ananth Statement', 'The pawn is considered the weakest in the game of chess. It moves slowly compared to its peers, but as long as it survives and advances to the other side, it can become whoever it wants to be. For those who think a pawn is insignificant, at times its position is more powerful than a king and without the pawn there is no game of chess. When I apply this idea to my life,  it doesn\'t matter what others think. I matter despite my disabilities and differences. I matter because I believe in my potential to make a difference. I matter because I exist.', 'Ananths-Statement', '1645230238-WhatsApp Image 2022-02-18 at 4.11.28 PM.jpeg', '1645230238-WhatsApp Image 2022-02-18 at 4.11.28 PM.jpeg', NULL, NULL, '2022-02-19 00:23:58', '2022-02-20 11:31:18'),
(85, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Ananth', 'Poetry by Ananth.', 'poetry-by-ananth', '1645232680-WhatsApp Image 2022-02-18 at 4.18.30 PM.jpeg', '1645232680-WhatsApp Image 2022-02-18 at 4.18.30 PM.jpeg', NULL, NULL, '2022-02-19 01:04:40', '2022-02-20 11:02:35'),
(86, 'admin', 3, NULL, 'Activites', 'Spring Flowers', 'Spring Flowers Activity', 'Spring-Flowers-Activity', '1645339025-Screen Shot 2022-02-19 at 10.34.43 PM.png', '1645339025-Spring Flowers Activity.pdf', NULL, NULL, '2022-02-20 06:37:05', '2022-02-20 08:06:05'),
(87, 'admin', 3, NULL, 'Activites', 'Color by Number', 'Color by Number!', 'Color-by-Number', '1645339139-Color by Number.png', '1645339139-Color by Number.pdf', NULL, NULL, '2022-02-20 06:38:59', '2022-02-20 08:06:34'),
(88, 'admin', 3, NULL, 'Activites', 'Farm Animal Coloring', 'Farm Animal Coloring Activity!', 'Farm-Animal-Coloring', '1645339206-Farm Animal Coloring.png', '1645339206-Farm Animal Coloring.pdf', NULL, NULL, '2022-02-20 06:40:06', '2022-02-20 08:05:29'),
(89, 'admin', 3, NULL, 'Activites', 'Easter Basket', 'Easter Basket Activity!', 'Easter-Basket', '1645339271-Easter Basket.png', '1645339271-Easter Basket.pdf', NULL, NULL, '2022-02-20 06:41:11', '2022-02-20 08:05:15'),
(90, 'admin', 3, NULL, 'Activites', 'Happy Easter', 'Happy Easter Coloring Activity!', 'Happy-Easter-Coloring-Activity', '1645339356-Happy Easter Coloring.png', '1645339356-Happy Easter Coloring.pdf', NULL, NULL, '2022-02-20 06:42:36', '2022-02-20 08:05:01'),
(91, 'admin', 3, NULL, 'Activites', 'Cake Coloring', 'Cake Coloring Activity', 'Cake-Coloring-Activity', '1645339427-Cake Coloring.png', '1645339427-Cake Coloring.pdf', NULL, NULL, '2022-02-20 06:43:47', '2022-02-20 08:04:50'),
(92, 'admin', 3, NULL, 'Activites', 'Cat Coloring', 'Cat Coloring', 'Cat-Coloring', '1645339558-Cat Coloring.png', '1645339558-Cat Coloring.pdf', NULL, NULL, '2022-02-20 06:45:58', '2022-02-20 08:04:40'),
(93, 'admin', 3, NULL, 'Activites', 'Cat Coloring', 'Cat Coloring Activity', 'Cat-Coloring1', '1645339674-Cat Coloring1.png', '1645339674-Cat Coloring1.pdf', NULL, NULL, '2022-02-20 06:47:54', '2022-02-20 08:04:29'),
(94, 'admin', 3, NULL, 'Activites', 'Unicorn Coloring', 'Unicorn Coloring!', 'Unicorn-Coloring', '1645339866-Unicorn Coloring.png', '1645339866-Unicorn Coloring.pdf', NULL, NULL, '2022-02-20 06:51:06', '2022-02-20 08:04:19'),
(95, 'admin', 3, NULL, 'Activites', 'Winter Wear', 'Winter Wear Activity', 'Winter-Wear-Activity', '1645340173-Winter Wear.png', '1645340173-Winter Wear.pdf', NULL, NULL, '2022-02-20 06:56:13', '2022-02-20 08:04:07'),
(96, 'admin', 3, NULL, 'Activites', 'Name Colors', 'Name the colors', 'Name-the-colors', '1645340405-Color Naming.png', '1645340405-Color Naming.pdf', NULL, NULL, '2022-02-20 07:00:05', '2022-02-20 08:03:59'),
(97, 'admin', 3, NULL, 'Activites', 'Fruits and Vegetables', 'Fruits and Vegetables Activity', 'Fruits-and-Vegetables', '1645340612-Fruits and Vegetables.png', '1645340612-Fruits and Vegetables.pdf', NULL, NULL, '2022-02-20 07:03:32', '2022-02-20 08:03:44'),
(98, 'admin', 3, NULL, 'Activites', 'Traingles', 'Traingles', 'Triangles', '1645340740-Triangles.png', '1645340740-Triangles.pdf', NULL, NULL, '2022-02-20 07:05:40', '2022-02-20 08:03:31'),
(99, 'admin', 3, NULL, 'Activites', 'Cake Coloring', 'Cake Coloring Activity', 'Cake-coloring-activity1', '1645340925-Cake Coloring (1).png', '1645340925-Cake Coloring (1).pdf', NULL, NULL, '2022-02-20 07:08:45', '2022-02-20 08:03:22'),
(100, 'admin', 3, NULL, 'Activites', 'Naming Fruits', 'Naming Fruits Activity', 'Naming-Fruits-Activity1', '1645341157-Naming Fruits.png', '1645341157-Naming Fruits.pdf', NULL, NULL, '2022-02-20 07:12:37', '2022-02-20 08:03:12'),
(101, 'admin', 3, NULL, 'Activites', 'Count the fruits', 'Counts the fruits!', 'count-the-fruits', '1645341271-Count the fruits.png', '1645341271-Count the fruits.pdf', NULL, NULL, '2022-02-20 07:14:31', '2022-02-20 08:03:01'),
(102, 'admin', 3, NULL, 'Activites', 'Alligator Coloring', 'Coloring Alligator Activity', 'Coloring-Alligator-Activity', '1645341870-Coloring Alligator.png', '1645341870-Coloring Alligator.pdf', NULL, NULL, '2022-02-20 07:24:30', '2022-02-20 08:02:51'),
(103, 'admin', 3, NULL, 'Activites', 'Color the Bear', 'Color the Bear!', 'Color-the-bear', '1645342009-Color the Bear1.png', '1645342009-Color the Bear1.pdf', NULL, NULL, '2022-02-20 07:26:49', '2022-02-20 08:02:42'),
(104, 'admin', 3, NULL, 'Activites', 'Color the Cat', 'Color the Cat!', 'Color-the-Cat', '1645342099-Color the Cat.png', '1645342099-Color the Cat.pdf', NULL, NULL, '2022-02-20 07:28:19', '2022-02-20 08:02:32'),
(105, 'admin', 3, NULL, 'Activites', 'Dolphin Coloring', 'Dolphin Coloring Activity!', 'Dolphin-Coloring-Activity', '1645342197-Color the Dolphin.png', '1645342197-Color the Dolphin.pdf', NULL, NULL, '2022-02-20 07:29:57', '2022-02-20 08:02:23'),
(106, 'admin', 3, NULL, 'Activites', 'Color the Elephant', 'Color the Elephant!', 'Color-the-Elephant', '1645342288-Color the Elephant.png', '1645342288-Color the Elephant.pdf', NULL, NULL, '2022-02-20 07:31:28', '2022-02-20 08:02:13'),
(107, 'admin', 3, NULL, 'Activites', 'Color the Fish', 'Color the Fish!', 'Color-the-Fish', '1645342390-Color the Fish.png', '1645342390-Color the Fish.pdf', NULL, NULL, '2022-02-20 07:33:10', '2022-02-20 08:02:04'),
(108, 'admin', 3, NULL, 'Activites', 'Color the Tiger', 'Color the Tiger!', 'Color-the-Tiger', '1645342710-Color the Tiger.png', '1645342710-Color the Tiger.pdf', NULL, NULL, '2022-02-20 07:38:30', '2022-02-20 08:01:55'),
(109, 'admin', 3, NULL, 'Activites', 'Ocean Animals', 'Ocean Animals!', 'Ocean-Animals', '1645342847-Ocean Animals.png', '1645342847-Ocean Animals.pdf', NULL, NULL, '2022-02-20 07:40:47', '2022-02-20 08:01:46'),
(110, 'admin', 3, NULL, 'Activites', 'Coloring is Fun', 'Coloring is Fun!', 'Coloring-is-Fun', '1645343001-Coloring is Fun.png', '1645343001-Coloring is Fun.pdf', NULL, NULL, '2022-02-20 07:43:21', '2022-02-20 08:01:23'),
(111, 'admin', 3, NULL, 'Activites', 'Coloring is Fun', 'Coloring is Fun Activity2!', 'Coloring-is-Fun-Activity2', '1645343129-Coloring is Fun1.png', '1645343129-Coloring is Fun1.pdf', NULL, NULL, '2022-02-20 07:45:29', '2022-02-20 08:01:14'),
(112, 'admin', 3, NULL, 'Activites', 'Coloring is Fun', 'Coloring is Fun Activity3', 'Coloring-is-Fun-Activity3', '1645343247-Coloring is Fun2.png', '1645343247-Coloring is Fun2.pdf', NULL, NULL, '2022-02-20 07:47:27', '2022-02-20 08:00:46'),
(113, 'admin', 3, NULL, 'Activites', 'Mom is special', 'Mom is special!', 'mom-is-special', '1645343391-Mom is special.png', '1645343391-Mom is special.pdf', NULL, NULL, '2022-02-20 07:49:51', '2022-02-20 08:00:38'),
(114, 'admin', 3, NULL, 'Activites', 'Connect the Dots', 'Connect the Dots!', 'Connect-the-Dots', '1645343650-Connect the Dots.png', '1645343650-Connect the Dots.pdf', NULL, NULL, '2022-02-20 07:54:10', '2022-02-20 08:00:29'),
(115, 'admin', 3, NULL, 'Activites', 'Color the Hippo', 'Color the Hippo!', 'Color-the-Hippo', '1645344438-Color the Hippo.png', '1645344438-Color the Hippo.pdf', NULL, NULL, '2022-02-20 08:07:18', '2022-02-20 08:07:18'),
(116, 'admin', 3, NULL, 'Activites', 'Farm Animal Coloring Activity', 'Farm Animal Coloring Activity!', 'Farm-Animal-Coloring-Activity', '1645345275-Farm Animal Coloring (1).png', '1645345275-Farm Animal Coloring (1).pdf', NULL, NULL, '2022-02-20 08:21:15', '2022-02-20 08:21:15'),
(117, 'admin', 3, NULL, 'Activites', 'Ice Cream Coloring', 'Ice Cream Coloring Activity!', 'Ice-Cream-Coloring-Activity', '1645345498-Ice Cream Coloring.png', '1645345498-Ice Cream Coloring.pdf', NULL, NULL, '2022-02-20 08:24:58', '2022-02-20 08:24:58'),
(118, 'admin', 3, NULL, 'Activites', 'Donut Coloring', 'Donut Coloring Activity', 'Donut-Coloring-Activity', '1645345675-Donut Coloring.png', '1645345675-Donut Coloring.pdf', NULL, NULL, '2022-02-20 08:27:55', '2022-02-20 08:27:55'),
(119, 'admin', 3, NULL, 'Activites', 'Land Animals', 'Land Animals Activity!', 'Land-Animals-Activity', '1645345842-Land Animals.png', '1645345842-Land Animals.pdf', NULL, NULL, '2022-02-20 08:30:42', '2022-02-20 08:30:42'),
(120, 'admin', 3, NULL, 'Activites', 'Lady Bugs', 'Lady Bug Activity!', 'Lady-Bug-Activity', '1645346011-Lady Bugs.png', '1645346011-Lady Bugs.pdf', NULL, NULL, '2022-02-20 08:33:31', '2022-02-20 08:33:31'),
(121, 'admin', 3, NULL, 'Activites', 'Butterflies', 'Butterfly Activity!', 'Butterfly-Activity', '1645346151-Butterflies.png', '1645346151-Butterflies.pdf', NULL, NULL, '2022-02-20 08:35:51', '2022-02-20 08:35:51'),
(122, 'admin', 3, NULL, 'Activites', 'Butterfly Coloring', 'Butterfly Coloring', 'Butterfly-Coloring', '1645346274-Butterfly Coloring.png', '1645346274-Butterfly Coloring.pdf', NULL, NULL, '2022-02-20 08:37:54', '2022-02-20 08:37:54'),
(123, 'admin', 3, NULL, 'Activites', 'Caterpillar Connect the Dots', 'Caterpillar-Connect-the-Dots', 'Caterpillar-Connect-the-Dots', '1645346456-Connect the Dots Caterpillar.png', '1645346456-Connect the Dots Caterpillar.pdf', NULL, NULL, '2022-02-20 08:40:56', '2022-02-20 08:40:56'),
(124, 'admin', 3, NULL, 'Activites', 'Connect the Dots - Frog', 'Connect the Dots Frog Activity', 'Connect-the-Dots-Frog-Activity', '1645346627-Connect the Dots Frog.png', '1645346627-Connect the Dots Frog.pdf', NULL, NULL, '2022-02-20 08:43:47', '2022-02-20 08:43:47'),
(125, 'admin', 3, NULL, 'Activites', 'Monkey Connect the Dots', 'Connect the Dots - Monkey!', 'Monkey-Connect-the-Dots', '1645346780-Connect the Dots Monkey.png', '1645346780-Connect the Dots Monkey.pdf', NULL, NULL, '2022-02-20 08:46:20', '2022-02-20 08:46:20'),
(126, 'admin', 3, NULL, 'Activites', 'Duck Connect the Dots', 'Connect the Dots - Duck', 'Duck-Connect-the-Dots', '1645346912-Connect the Dots Duck.png', '1645346912-Connect the Dots Duck.pdf', NULL, NULL, '2022-02-20 08:48:32', '2022-02-20 08:48:32'),
(127, 'admin', 3, NULL, 'Activites', 'Bear Symmetry Drawing', 'Bear Symmetry Drawing Activity', 'Bear-Symmetry-Drawing', '1645347057-Symmetry Drawing Bear.png', '1645347057-Symmetry Drawing Bear.pdf', NULL, NULL, '2022-02-20 08:50:57', '2022-02-20 08:50:57'),
(128, 'admin', 3, NULL, 'Activites', 'Ladybug Symmetry Drawing', 'Ladybug Symmetry Drawing', 'Ladybug-Symmetry-Drawing', '1645347152-Symmetry Drawing Ladybug.png', '1645347152-Symmetry Drawing Ladybug.pdf', NULL, NULL, '2022-02-20 08:52:32', '2022-02-20 08:52:32'),
(129, 'admin', 3, NULL, 'Activites', 'Elephant Coloring Activity', 'Elephant Coloring Activity', 'Elephant-Coloring-Activity', '1645347472-Elephant Coloring Activity.png', '1645347472-Elephant Coloring Activity.pdf', NULL, NULL, '2022-02-20 08:57:52', '2022-02-20 08:57:52'),
(130, 'admin', 3, NULL, 'Activites', 'Dolphin Coloring Activity', 'Dolphin Coloring Activity', 'Dolphin Coloring Activity1', '1645347576-Dolphin Coloring Activity.png', '1645347576-Dolphin Coloring Activity.pdf', NULL, NULL, '2022-02-20 08:59:36', '2022-02-20 08:59:36'),
(131, 'admin', 3, NULL, 'Activites', 'Lion Coloring Activity', 'Lion Coloring Activity', 'Lion-Coloring-Activity', '1645347699-Lion Coloring Activity.png', '1645347699-Lion Coloring Activity.pdf', NULL, NULL, '2022-02-20 09:01:39', '2022-02-20 09:01:39'),
(132, 'admin', 3, NULL, 'Activites', 'Jellyfish Coloring Activity', 'Jellyfish Coloring Activity', 'Jellyfish-Coloring-Activity', '1645347835-Jellyfish Coloring Activity.png', '1645347835-Jellyfish Coloring Activity.pdf', NULL, NULL, '2022-02-20 09:03:55', '2022-02-20 09:03:55'),
(133, 'admin', 3, NULL, 'Activites', 'Horse Coloring Activity', 'Horse Coloring Activity', 'Horse-Coloring-Activity', '1645347925-Horse Coloring Activity.png', '1645347925-Horse Coloring Activity.pdf', NULL, NULL, '2022-02-20 09:05:25', '2022-02-20 09:05:25'),
(134, 'admin', 3, NULL, 'Activites', 'Tiger Coloring Activity', 'Tiger Coloring Activity', 'Tiger-Coloring-Activity', '1645348006-Tiger Coloring Activity.png', '1645348006-Tiger Coloring Activity.pdf', NULL, NULL, '2022-02-20 09:06:46', '2022-02-20 09:06:46'),
(135, 'admin', 3, NULL, 'Activites', 'Octopus Coloring', 'Octopus Coloring Activity', 'Octopus-Coloring-Activity', '1645348136-Octopus Coloring Activity.png', '1645348136-Octopus Coloring Activity.pdf', NULL, NULL, '2022-02-20 09:08:56', '2022-02-20 09:08:56'),
(136, 'admin', 3, NULL, 'Activites', 'Alphabet Maze A', 'Alphabet Maze A', 'Alphabet-Maze-A', '1645348474-A Alphabet Maze.png', '1645348474-A Alphabet Maze.pdf', NULL, NULL, '2022-02-20 09:14:34', '2022-02-20 09:14:34'),
(137, 'admin', 3, NULL, 'Activites', 'Alphabet Maze Z', 'Alphabet Maze Z', 'Alphabet-Maze-Z', '1645348605-Alphabet Maze - Z.png', '1645348605-Alphabet Maze - Z.pdf', NULL, NULL, '2022-02-20 09:16:45', '2022-02-20 09:16:45'),
(138, 'admin', 3, NULL, 'Activites', 'Easter Egg', 'Easter Egg Coloring and Numbering', 'Easter-Egg-Coloring-and-Numbering', '1645348759-Easter Egg Coloring.png', '1645348759-Easter Egg Coloring.pdf', NULL, NULL, '2022-02-20 09:19:19', '2022-02-20 09:19:19'),
(140, 'admin', 3, NULL, 'ideas', 'Hearts Activity', 'Supplies Needed:\r\nFlour\r\nSalt\r\nWater\r\nHeart Cookie Cutter or Heart Template\r\nLetter Stamps\r\nAcrylic Paint\r\nMod Podge (glossy)\r\nSource: https://www.thebestideasforkids.com/salt-dough-hearts/', 'Hearts-Activity', '1645383699-Salt-Dough-Hearts-Conversation-Hearts.jpeg', '1645383699-Salt-Dough-Hearts-Conversation-Hearts.jpeg', NULL, NULL, '2022-02-20 19:01:39', '2022-02-20 19:01:39'),
(142, 'admin', 3, NULL, 'ideas', 'Play Dough Recipe', 'Ingredients \r\n\r\n2 cups all-purpose flour\r\n3/4 cup salt\r\n4 teaspoons cream of tartar\r\n2 cups lukewarm water\r\n2 Tablespoons vegetable oil (coconut oil works too)\r\nSources: https://www.iheartnaptime.net/play-dough-recipe/', 'Play-Dough-Recipe', '1645385734-Best-play-dough.png', '1645385734-How to Make Homemade Playdough - I Heart Nap Time.pdf', NULL, NULL, '2022-02-20 19:35:34', '2022-02-20 19:35:58'),
(143, 'admin', 3, NULL, 'ideas', 'Paper Plate Dinosaur', 'Supplies Needed:\r\n1) Paper Plates\r\n2) Paint\r\n3) Clothespins\r\n4) Paper\r\n5) Googly Eyes\r\nSource: https://www.madetobeamomma.com/paper-plate-dinosaur/', 'Paper-plate-dinosaur', '1645386844-Screen Shot 2022-02-20 at 11.44.35 AM.png', '1645386844-Screen Shot 2022-02-20 at 11.53.48 AM.png', NULL, NULL, '2022-02-20 19:54:04', '2022-02-20 19:54:04'),
(144, 'admin', 3, NULL, 'ideas', 'Car Craft', 'Materials:\r\n1) Toilet paper tube (or cardboard tube cut in half)\r\n2) White paint\r\n3) Paintbrush\r\n4) Scissors\r\n5) Hot glue/gun\r\n6) 4 lids or pouch caps\r\n7) Markers, stickers, or paint\r\nSource: https://alittlepinchofperfect.com/toilet-paper-roll-car-craf/', 'Car-Craft', '1645387386-ToiletPaperRollCarCraftALittlePinchofPerfect2.png', '1645387386-Craft and Play_ Toilet Paper Roll Car Craft - copy.pdf', NULL, NULL, '2022-02-20 20:03:06', '2022-02-20 20:03:27'),
(145, 'admin', 3, NULL, 'ideas', 'Bridge Building Middle School', 'Materials:\r\n1) Popsicle Sticks\r\n2) Glue\r\n3) Tape\r\n4) Binder Clips\r\n5) Match Box Cars\r\nSource: http://www.pensacolabaybridge.com/wp-content/uploads/2019/04/180829-PBB-Popsicle-Bridge-Lesson-Plans-Unit-Eight-FINAL.pdf', 'Bridge-Building-Middle-School', '1645388042-Screen Shot 2022-02-20 at 12.11.50 PM.png', '1645388042-180829-PBB-Popsicle-Bridge-Lesson-Plans-Unit-Eight-FINAL.pdf', NULL, NULL, '2022-02-20 20:14:02', '2022-02-20 20:14:11'),
(147, 'admin', 3, NULL, 'ideas', 'Homemade Spectroscope', 'Materials for Homemade Spectroscope: 1) Empty paper towel roll 2) Craft knife and/or scissors 3) Blank or old CD 4) Pencil 5) Small piece of cardboard or cardstock 6) Tape 7) Paint (optional) Source: https://buggyandbuddy.com/homemade-spectroscope/', 'Home-made-Spectroscope', '1645389132-Untitled design (2).png', '1645389132-How to Make a Homemade Spectroscope.pdf', NULL, NULL, '2022-02-20 20:32:12', '2022-02-20 20:32:12'),
(148, 'admin', 3, NULL, 'Worksheets', 'Finding Fractions', 'Finding Fractions', 'Finding-Fractions', '1645390295-Finding Fractions.png', '1645390295-Finding Fractions.pdf', NULL, NULL, '2022-02-20 20:51:35', '2022-02-21 04:24:43'),
(149, 'admin', 3, NULL, 'Worksheets', 'Alphabet Practice Alphabet A', 'Alphabet Practice Alphabet A', 'Alphabet-Practice-Alphabet-A', '1645390425-Alphabet Practice Letter A.png', '1645390425-Alphabet Practice Letter A.pdf', NULL, NULL, '2022-02-20 20:53:45', '2022-02-21 04:24:34'),
(150, 'admin', 3, NULL, 'Worksheets', 'Alphabet Practice Letter B', 'Alphabet Practice Letter B', 'Alphabet-Practice-Letter-B', '1645390563-Alphabet Practice Letter B.png', '1645390563-Alphabet Practice Letter B.pdf', NULL, NULL, '2022-02-20 20:56:03', '2022-02-21 04:24:26'),
(151, 'admin', 3, NULL, 'Worksheets', 'Alphabet Practice Letter C', 'Alphabet Practice Letter C', 'Alphabet-Practice-Letter-C', '1645390702-Alphabet Practice Letter C.png', '1645390702-Alphabet Practice Letter C.pdf', NULL, NULL, '2022-02-20 20:58:22', '2022-02-21 04:24:17'),
(152, 'admin', 3, NULL, 'Worksheets', 'Missing Alphabets', 'Missing Alphabets', 'Missing-Alphabets', '1645390933-Missing Alphabet.png', '1645390933-Missing Alphabet.pdf', NULL, NULL, '2022-02-20 21:02:13', '2022-02-21 04:24:08'),
(153, 'admin', 3, NULL, 'Worksheets', 'Practice Numbers 1-50', 'Practice Numbers 1-50', 'Practice-Numbers-1-to-50', '1645391067-Practice Numbers 1-50.png', '1645391067-Practice Numbers 1-50.pdf', NULL, NULL, '2022-02-20 21:04:27', '2022-02-21 04:24:00'),
(154, 'admin', 3, NULL, 'Worksheets', 'Fill the Missing Numbers', 'Fill the Missing Numbers', 'Fill-the-Missing-Numbers', '1645391698-Fill the missing numbers.png', '1645391698-Fill the missing numbers.pdf', NULL, NULL, '2022-02-20 21:14:58', '2022-02-21 04:23:52'),
(155, 'admin', 3, NULL, 'Worksheets', 'Write Numbers', 'Write Numbers', 'Write-Numbers', '1645391864-Write Numbers.png', '1645391864-Write Numbers.pdf', NULL, NULL, '2022-02-20 21:17:44', '2022-02-21 04:23:44'),
(172, 'admin', 3, NULL, 'Worksheets', 'Circle Prime Numbers', 'Circle Prime Numbers', 'Circle-Prime-Numbers', '1645416142-Circle Prime Numbers.png', '1645416142-Circle Prime Numbers.pdf', NULL, NULL, '2022-02-21 04:02:22', '2022-02-21 04:23:36'),
(173, 'admin', 3, NULL, 'Worksheets', 'Days of the Week', 'Days of the Week', 'Days-of-the-Week', '1645417607-Days of the Week Handwriting.png', '1645417607-Days of the Week Handwriting (1).pdf', NULL, NULL, '2022-02-21 04:26:47', '2022-02-21 04:26:47'),
(175, 'admin', 3, NULL, 'school-info', 'Alamo Elementary San Ramon', 'School Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618046005060\r\n\r\nSource: California Department of Education', 'Alamo-Elementary-San-Ramon', '1645419791-Alamo Elementary School - San Ramon.png', '1645419791-Alamo Elementary School - San Ramon.png', NULL, NULL, '2022-02-21 05:03:11', '2022-02-21 05:03:11'),
(176, 'admin', 3, NULL, 'school-info', 'Hidden Hills Elementary School San Ramon', 'School Profile Reference: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618040102566\r\n\r\nSource: California Department of Education', 'Hidden-Hills-Elementary-School-San-Ramon', '1645419890-Hidden Hills Elementary School - San Ramon.png', '1645419890-Hidden Hills Elementary School - San Ramon.png', NULL, NULL, '2022-02-21 05:04:50', '2022-02-21 05:04:50'),
(177, 'admin', 3, NULL, 'school-info', 'Bella Vista Elementary School San Ramon', 'School Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618040132902\r\n\r\nSource: California Department of Education', 'Bella-Vista-Elementary-School-San-Ramon', '1645420073-Bella Vista Elementary School - San Ramon.png', '1645420073-Bella Vista Elementary School - San Ramon.png', NULL, NULL, '2022-02-21 05:07:53', '2022-02-21 05:07:53'),
(178, 'admin', 3, NULL, 'school-info', 'Bollinger Canyon Elementary School', 'School Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618046100952\r\n\r\nSource: California Department of Education', 'Bollinger-Canyon-Elementary-School', '1645421486-Bollinger Canyon Elementary School - San Ramon.png', '1645421486-Bollinger Canyon Elementary School - San Ramon.png', NULL, NULL, '2022-02-21 05:31:26', '2022-02-21 05:31:26'),
(179, 'admin', 3, NULL, 'school-info', 'Country Club Elementary School San ramon', 'School Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618046005086\r\n\r\nSource: California Department of Education', 'Country-Club-Elementary-School-San-Ramon', '1645421862-Country Club Elementary School - San Ramon.png', '1645421862-Country Club Elementary School - San Ramon.png', NULL, NULL, '2022-02-21 05:37:42', '2022-02-21 05:37:42'),
(180, 'admin', 3, NULL, 'school-info', 'Coyote Creek Elementary School San Ramon', 'School Profile Information: \r\nhttps://www.cde.ca.gov/sdprofile/details.aspx?cds=07618046117485\r\n\r\nSource: California Department of Education', 'Coyote-Creek-Elementary-School-San-Ramon', '1645422107-Coyote Creek Elementary School - San Ramon.png', '1645422107-Coyote Creek Elementary School - San Ramon.png', NULL, NULL, '2022-02-21 05:41:47', '2022-02-21 05:41:47'),
(181, 'admin', 3, NULL, 'school-info', 'Creekside Elementary School San Ramon', 'School Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618040119032\r\n\r\nSource: California Department of Education', 'Creekside-Elementary-School-San-Ramon', '1645422365-Creekside Elementary School -San Ramon.png', '1645422365-Creekside Elementary School -San Ramon.png', NULL, NULL, '2022-02-21 05:46:05', '2022-02-21 05:46:05'),
(182, 'admin', 3, NULL, 'school-info', 'San Ramon Valley Unified', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07618040000000\r\n\r\nSource: California Department of Education', 'San-Ramon-Valley-Unified', '1645422671-San Ramon Valley Unified District.png', '1645422671-San Ramon Valley Unified District.png', NULL, NULL, '2022-02-21 05:51:11', '2022-02-21 05:51:11'),
(183, 'admin', 3, NULL, 'school-info', 'Pleasanton Unified - Alameda', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01751010000000\r\n\r\nSource: California Department of Education', 'Pleasanton-Unified-Alameda', '1645423036-Pleasanton Unified District.png', '1645423036-Pleasanton Unified District.png', NULL, NULL, '2022-02-21 05:57:16', '2022-02-21 06:00:38'),
(184, 'admin', 3, NULL, 'school-info', 'Dublin Unified School District', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01750930000000\r\n\r\nSource: California Department of Education', 'Dublin-Unified-School-District', '1645423222-Dublin Unified District.png', '1645423222-Dublin Unified District.png', NULL, NULL, '2022-02-21 06:00:22', '2022-02-21 06:00:22'),
(185, 'admin', 3, NULL, 'school-info', 'Alameda Unified School District', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01611190000000\r\n\r\nSource: California Department of Education', 'Alameda-Unified-School-District', '1645423443-Alameda Unified School District.png', '1645423443-Alameda Unified School District.png', NULL, NULL, '2022-02-21 06:04:03', '2022-02-21 06:04:03'),
(186, 'admin', 3, NULL, 'school-info', 'Albany City Unified School District', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01611270000000\r\n\r\nSource: California Department of Education', 'Albany-City-Unified-School-District', '1645423712-Albany City Unified School District.png', '1645423712-Albany City Unified School District.png', NULL, NULL, '2022-02-21 06:08:32', '2022-02-21 06:08:32'),
(187, 'admin', 3, NULL, 'school-info', 'Canyon Elementary School District', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=07616710000000\r\n\r\nSource: California Department of Education', 'Canyon-Elementary-School-District', '1645424442-Canyon Elementary School District.png', '1645424442-Canyon Elementary School District.png', NULL, NULL, '2022-02-21 06:20:42', '2022-02-21 06:20:42'),
(188, 'admin', 3, NULL, 'school-info', 'Fremont Unified School District', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01611760000000\r\n\r\nSource: California Department of Education', 'Fremont-Unified-School-District', '1645424621-Fremont Unified School District.png', '1645424621-Fremont Unified School District.png', NULL, NULL, '2022-02-21 06:23:41', '2022-02-21 06:23:41'),
(189, 'admin', 3, NULL, 'school-info', 'Livermore Valley Joint Unified', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01612000000000\r\n\r\nSource: California Department of Education', 'Livermore-Valley-Joint-Unified', '1645424761-Livermore Valley Joint Unified School District.png', '1645424761-Livermore Valley Joint Unified School District.png', NULL, NULL, '2022-02-21 06:26:01', '2022-02-21 06:26:01'),
(190, 'admin', 3, NULL, 'school-info', 'Newark Unified School District', 'School Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01612340000000\r\n\r\nSource: California Department of Education', 'Newark-Unified-School-District', '1645424884-Newark Unified School District.png', '1645424884-Newark Unified School District.png', NULL, NULL, '2022-02-21 06:28:04', '2022-02-21 06:28:04'),
(191, 'admin', 3, NULL, 'school-info', 'Piedmont City Unified School', 'District Profile Information: https://www.cde.ca.gov/sdprofile/details.aspx?cds=01612750000000\r\n\r\nSource: California Department of Education', 'Piedmont-City-Unified-School', '1645425502-Piedmont City Unified School District.png', '1645425502-Piedmont City Unified School District.png', NULL, NULL, '2022-02-21 06:38:22', '2022-02-21 06:38:22'),
(192, 'admin', 3, NULL, 'Worksheets', 'Addition of Numbers to 20', 'Addition of Numbers to 20', 'Addition-of-Numbers-to-20', '1645425628-Addition of Numbers to 20 (1).png', '1645425628-Addition of Numbers to 20 (1).png', NULL, NULL, '2022-02-21 06:40:28', '2022-02-21 06:40:28'),
(193, 'admin', 3, NULL, 'Worksheets', 'Addition of Numbers to 10', 'Addition of Numbers to 10', 'Addition-of-Numbers-to-10', '1645425815-Addition of Numbers to 10.png', '1645425815-Addition of Numbers to 10.png', NULL, NULL, '2022-02-21 06:43:35', '2022-02-21 06:43:35'),
(194, 'admin', 3, NULL, 'Worksheets', 'Animals Missing letters', 'Fill the missing letters - Animals Worksheet', 'Animals-Missing-Letters', '1645425925-Missing Letters Worksheet Activity5 (1).png', '1645425925-Missing Letters Worksheet Activity5 (1).png', NULL, NULL, '2022-02-21 06:45:25', '2022-02-21 06:45:25'),
(195, 'admin', 3, NULL, 'Worksheets', 'Wild Animals', 'Wild Animals', 'Wild-Animals', '1645426025-Wild-Animals.png', '1645426025-Wild-Animals.pdf', NULL, NULL, '2022-02-21 06:47:05', '2022-02-21 06:47:05'),
(196, 'admin', 3, NULL, 'Activites', 'Rainy Day Umbrellas Coloring', 'Rainy Day Umbrellas Coloring', 'Rainy-Day-Umbrellas-Coloring', '1645426153-Rainy Day Umbrella Coloring.png', '1645426153-Rainy Day Umbrella Coloring.pdf', NULL, NULL, '2022-02-21 06:49:13', '2022-02-21 06:49:13'),
(197, 'admin', 3, NULL, 'Worksheets', 'Multiplication Arrays', 'Multiplication Arrays', 'Multiplication-Arrays', '1645469252-Multiplication Arrays-Worksheet.png', '1645469252-Multiplication Arrays-Worksheet.pdf', NULL, NULL, '2022-02-21 18:47:32', '2022-02-21 18:47:32'),
(198, 'admin', 3, NULL, 'Worksheets', 'Skip Counting by 10', 'Skip Counting by 10', 'Skip-Counting-by-10', '1645469359-Skip Counting by 10.png', '1645469359-Skip Counting by 10.pdf', NULL, NULL, '2022-02-21 18:49:19', '2022-02-21 18:49:19'),
(199, 'admin', 3, NULL, 'Worksheets', 'Place Value Worksheet', 'Place Value Worksheet', 'Place-Value-Worksheet', '1645469485-Place Value Worksheets.png', '1645469485-Place Value Worksheets.pdf', NULL, NULL, '2022-02-21 18:51:25', '2022-02-22 03:57:47'),
(200, 'admin', 3, NULL, 'Worksheets', 'Number Line Opposites', 'Number Line Opposites', 'Number-Line-Opposites', '1645469603-Numberline Opposites.png', '1645469603-Numberline Opposites (1).pdf', NULL, NULL, '2022-02-21 18:53:23', '2022-02-21 18:53:23'),
(201, 'admin', 3, NULL, 'Worksheets', 'Number Bonds Ten Frames', 'Number Bonds Ten Frames', 'Number-Bonds-Ten-Frames', '1645469731-Number Bonds - Ten Frames.png', '1645469731-Number Bonds - Ten Frames.png', NULL, NULL, '2022-02-21 18:55:31', '2022-02-21 18:55:31'),
(202, 'admin', 3, NULL, 'Worksheets', 'Multiplication Practice Sheet', 'Multiplication Practice Sheet', 'Multiplication Practice Sheet1', '1645469851-Multiplication-Practice - Sheet 3.png', '1645469851-Multiplication-Practice - Sheet 3.pdf', NULL, NULL, '2022-02-21 18:57:31', '2022-02-21 18:57:31'),
(203, 'admin', 3, NULL, 'Worksheets', '1 digit Number Greater than or Less than', '1 digit Number Greater than or Less than', '1-digit-Number-Greater-than-or-Less-than', '1645470104-1 digit  negative numbers Greater or less than.png', '1645470104-1 digit  negative numbers Greater or less than.pdf', NULL, NULL, '2022-02-21 19:01:44', '2022-02-21 19:01:44'),
(204, 'admin', 3, NULL, 'Worksheets', '2 Digit Greater than or Less Than', '2 Digit Greater than or Less Than', '2Digit-Greater-than-or-Less-Than', '1645470217-2 digit Greater or less than.png', '1645470217-2 digit Greater or less than.pdf', NULL, NULL, '2022-02-21 19:03:37', '2022-02-21 19:03:37'),
(205, 'admin', 3, NULL, 'Worksheets', '3 Digit Greater than or Less than', '3 Digit Greater than or Less than', '3Digit-Greater-than-or-Less-than', '1645470299-3 digit Greater or less than.png', '1645470299-3 digit Greater or less than.pdf', NULL, NULL, '2022-02-21 19:04:59', '2022-02-21 19:04:59'),
(206, 'admin', 3, NULL, 'Worksheets', '2 Digit Addition', '2 Digit Addition', '2Digit-Addition', '1645470453-2 digit Addition (2).png', '1645470453-2 digit Addition.pdf', NULL, NULL, '2022-02-21 19:07:33', '2022-02-21 19:07:33'),
(207, 'admin', 3, NULL, 'Worksheets', 'American Money', 'American Money', 'American-Money', '1645470736-American Money.png', '1645470736-American Money.pdf', NULL, NULL, '2022-02-21 19:12:16', '2022-02-21 19:12:16'),
(208, 'admin', 3, NULL, 'Worksheets', 'Arrange from Greatest to Lowest', 'Arrange from Greatest to Lowest', 'Arrange-from-Greatest-to-Lowest', '1645470832-Arranging Greatest to lowest.png', '1645470832-Arranging Greatest to lowest.pdf', NULL, NULL, '2022-02-21 19:13:52', '2022-02-21 19:13:52'),
(209, 'admin', 3, NULL, 'Worksheets', 'Adverb Examples', 'Adverb Examples', 'Adverb-Examples', '1645470945-Adverb Examples.png', '1645470945-Adverb Examples.pdf', NULL, NULL, '2022-02-21 19:15:45', '2022-02-21 19:15:45'),
(210, 'admin', 3, NULL, 'Worksheets', 'Book Review', 'Book Review', 'Book-Review', '1645471099-Book-Review.png', '1645471099-Book-Review.pdf', NULL, NULL, '2022-02-21 19:18:19', '2022-02-21 19:18:19'),
(211, 'admin', 3, NULL, 'Worksheets', 'Divide by 2', 'Divide by 2', 'Divide-by-2', '1645471365-Divide by two.png', '1645471365-Divide by two.pdf', NULL, NULL, '2022-02-21 19:22:45', '2022-02-21 19:22:45'),
(212, 'admin', 3, NULL, 'Worksheets', 'Divide by 3', 'Divide by 3', 'Divide-by-3', '1645471591-Divide by Three.png', '1645471591-Divide by Three.pdf', NULL, NULL, '2022-02-21 19:26:31', '2022-02-21 19:26:31'),
(213, 'admin', 3, NULL, 'Worksheets', 'Times Tables', 'Times Tables', 'Times-Tables', '1645471740-Times Table.png', '1645471740-Times Table.pdf', NULL, NULL, '2022-02-21 19:29:00', '2022-02-21 19:29:00'),
(214, 'admin', 3, NULL, 'Worksheets', 'Times 4 Drills', 'Times 4 Drills', 'Times-4-Drills', '1645471878-Times 4 Drills.png', '1645471878-Times 4 Drills.pdf', NULL, NULL, '2022-02-21 19:31:18', '2022-02-21 19:31:18'),
(215, 'admin', 3, NULL, 'Worksheets', 'Times 9 Drills', 'Times 9 Drills', 'Times-9-Drills', '1645471982-Times 9 Drills.png', '1645471982-Times 9 Drills.pdf', NULL, NULL, '2022-02-21 19:33:02', '2022-02-21 19:33:02'),
(216, 'admin', 3, NULL, 'Worksheets', 'Times 11 Drills', 'Times 11 Drills', 'Times-11-Drills', '1645472075-Times 11 Drills.png', '1645472075-Times 11 Drills.pdf', NULL, NULL, '2022-02-21 19:34:35', '2022-02-21 19:34:35'),
(217, 'admin', 3, NULL, 'Worksheets', 'Times 1 Drill', 'Times 1 Drill', 'Times-1-Drill', '1645472155-Times 1 Drills.png', '1645472155-Times 1 Drills.pdf', NULL, NULL, '2022-02-21 19:35:55', '2022-02-21 19:35:55'),
(218, 'admin', 3, NULL, 'Worksheets', 'Times 5 Drills', 'Times 5 Drills', 'Times-5-Drills', '1645472211-Times 5 Drills.png', '1645472211-Times 5 Drills.pdf', NULL, NULL, '2022-02-21 19:36:51', '2022-02-21 19:36:51'),
(219, 'admin', 3, NULL, 'Worksheets', 'Times 8 Drills', 'Times-8-Drills', 'Times8-Drills', '1645472268-Times 8 Drills.png', '1645472268-Times 8 Drills.pdf', NULL, NULL, '2022-02-21 19:37:48', '2022-02-21 19:37:48'),
(220, 'admin', 3, NULL, 'Worksheets', 'Times 6 Drills', 'Times 6 Drills', 'Times-6-Drills', '1645472325-Times 6 Drills.png', '1645472325-Times 6 Drills.pdf', NULL, NULL, '2022-02-21 19:38:45', '2022-02-21 19:38:45'),
(221, 'admin', 3, NULL, 'Worksheets', 'Times 3 Drills', 'Times 3 Drills', 'Times-3-Drills', '1645472382-Times 3 Drills.png', '1645472382-Times 3 Drills.pdf', NULL, NULL, '2022-02-21 19:39:42', '2022-02-21 19:39:42'),
(222, 'admin', 3, NULL, 'Worksheets', 'Times 12 Table', 'Times 12 Table', 'Times-12-Table', '1645472568-Times 12 Table.png', '1645472568-Times 12 Table.pdf', NULL, NULL, '2022-02-21 19:42:48', '2022-02-21 19:42:48'),
(223, 'admin', 3, NULL, 'Worksheets', 'Times 11 Table', 'Times 11 Table', 'Times-11-Table', '1645472715-Times 11 Table.png', '1645472715-Times 11 Table.pdf', NULL, NULL, '2022-02-21 19:45:15', '2022-02-21 19:45:15'),
(224, 'admin', 3, NULL, 'Worksheets', 'Times 2 Table', 'Times 2 Table', 'Times-2-Table', '1645472838-Times 2 Table.png', '1645472838-Times 2 Table.pdf', NULL, NULL, '2022-02-21 19:47:18', '2022-02-21 19:47:18'),
(225, 'admin', 3, NULL, 'Worksheets', 'Times 7 Table', 'Times 7 Table', 'Times-7-Table', '1645472953-Times 7 Table.png', '1645472953-Times 7 Table.pdf', NULL, NULL, '2022-02-21 19:49:13', '2022-02-21 19:49:13'),
(226, 'admin', 3, NULL, 'Worksheets', 'Times 5 Table', 'Times 5 Table', 'Times-5-Table', '1645473065-Times 5 Table.png', '1645473065-Times 5 Table.pdf', NULL, NULL, '2022-02-21 19:51:05', '2022-02-21 19:51:05'),
(227, 'admin', 3, NULL, 'Worksheets', 'Time 9 Table', 'Time 9 Table', 'Time-9-Table', '1645473185-Times 9 Table.png', '1645473185-Times 9 Table.pdf', NULL, NULL, '2022-02-21 19:53:05', '2022-02-21 19:53:05'),
(228, 'admin', 3, NULL, 'Worksheets', 'Times 3 Table', 'Times 3 Table', 'Times-3-Table', '1645473421-Times 3 Table.png', '1645473421-Times 3 Table.pdf', NULL, NULL, '2022-02-21 19:57:01', '2022-02-21 19:57:01'),
(229, 'admin', 3, NULL, 'Worksheets', 'Times 4 Table', 'Times 4 Table', 'Times-4-Table', '1645473743-Times 4 Tables.png', '1645473743-Times 4 Tables.pdf', NULL, NULL, '2022-02-21 20:02:23', '2022-02-21 20:02:23'),
(230, 'admin', 3, NULL, 'Worksheets', 'Times 6 Table', 'Times 6 Table', 'Times-6-Table', '1645473966-Times 6 Tables.png', '1645473966-Times 6 Tables.pdf', NULL, NULL, '2022-02-21 20:06:06', '2022-02-21 20:06:06'),
(231, 'admin', 3, NULL, 'Worksheets', 'Simple Addition', 'Simple One Digit Addition', 'Simple-One-Digit-Addition', '1645474186-Simple Addition.png', '1645474186-Simple Addition.pdf', NULL, NULL, '2022-02-21 20:09:46', '2022-02-21 20:09:46'),
(232, 'admin', 3, NULL, 'Worksheets', 'Simple Addition', 'Simple one Addition', 'Simple-Addition1', '1645474350-Simple Addition1.png', '1645474350-Simple Addition1.pdf', NULL, NULL, '2022-02-21 20:12:30', '2022-02-21 20:12:30'),
(233, 'admin', 3, NULL, 'Worksheets', 'Two Digit Addition', 'Two Digit Addition', 'Two-Digit-Addition', '1645474456-Two Digit Addition.png', '1645474456-Two Digit Addition.pdf', NULL, NULL, '2022-02-21 20:14:16', '2022-02-21 20:14:16'),
(234, 'admin', 3, NULL, 'Worksheets', 'Addition and Subtraction', 'Addition and Subtraction', 'Addition-and-Subtraction', '1645474601-Addition and Subtraction.png', '1645474601-Addition and Subtraction.pdf', NULL, NULL, '2022-02-21 20:16:41', '2022-02-21 20:16:41'),
(235, 'admin', 3, NULL, 'Worksheets', 'Addition', 'Addition', 'Addition', '1645474722-Addition.png', '1645474722-Addition.pdf', NULL, NULL, '2022-02-21 20:18:42', '2022-02-21 20:18:42'),
(236, 'admin', 3, NULL, 'Worksheets', 'Subtraction', 'Subtraction', 'Subtraction', '1645475145-Subtraction.png', '1645475145-Subtraction.pdf', NULL, NULL, '2022-02-21 20:25:45', '2022-02-21 20:25:45'),
(237, 'admin', 3, NULL, 'Worksheets', 'Subtraction', 'Subtraction', 'Subtraction1', '1645475247-Subtraction1.png', '1645475247-Subtraction1.pdf', NULL, NULL, '2022-02-21 20:27:27', '2022-02-21 20:27:27'),
(238, 'admin', 3, NULL, 'Worksheets', 'Subtraction', 'Subtraction', 'Subtraction3', '1645475358-Subtraction3.png', '1645475358-Subtraction3.pdf', NULL, NULL, '2022-02-21 20:29:18', '2022-02-21 20:29:18'),
(239, 'admin', 3, NULL, 'Worksheets', 'Subtraction', 'Subtraction', 'Subtraction2', '1645475462-Subtraction2.png', '1645475462-Subtraction2.pdf', NULL, NULL, '2022-02-21 20:31:02', '2022-02-21 20:31:02'),
(240, 'admin', 3, NULL, 'Worksheets', 'Unjumble Numbers', 'Unjumble Numbers', 'Unjumble-Numbers', '1645475626-Unjumble Numbers.png', '1645475626-Unjumble Numbers.pdf', NULL, NULL, '2022-02-21 20:33:46', '2022-02-21 20:33:46'),
(241, 'admin', 3, NULL, 'Worksheets', 'Word Jumble and Unjumble', 'Word Jumble', 'unjumble-words', '1645475774-Unjumble Words.png', '1645475774-Unjumble Words.pdf', NULL, NULL, '2022-02-21 20:36:14', '2022-02-22 03:57:07'),
(242, 'admin', 3, NULL, 'Worksheets', 'Sports', 'Sports', 'Sports', '1645476021-Sports.png', '1645476021-Sports.pdf', NULL, NULL, '2022-02-21 20:40:21', '2022-02-21 20:40:21'),
(243, 'admin', 3, NULL, 'Worksheets', 'Word Jumble Unjumble words', 'Unjumble Words', 'Word-Jumble1', '1645476148-Word Jumble.png', '1645476148-Word Jumble.pdf', NULL, NULL, '2022-02-21 20:42:28', '2022-02-21 20:42:28'),
(244, 'admin', 3, NULL, 'Worksheets', 'Matching - Weather', 'Match the weather', 'Match-the-weather', '1645476354-Match Weather.png', '1645476354-Match Weather.pdf', NULL, NULL, '2022-02-21 20:45:54', '2022-02-21 20:45:54'),
(245, 'admin', 3, NULL, 'Activites', 'Cup Cake Coloring', 'Cup Cake Coloring', 'Cup-Cake-Coloring', '1645476470-Cup Cake Coloring.png', '1645476470-Cup Cake Coloring.pdf', NULL, NULL, '2022-02-21 20:47:50', '2022-02-21 20:47:50'),
(246, 'admin', 3, NULL, 'Activites', 'Tracing and Coloring', 'Tracing and Coloring', 'Tracing-and-Coloring', '1645476682-Tracing and Coloring.png', '1645476682-Tracing and Coloring.pdf', NULL, NULL, '2022-02-21 20:51:22', '2022-02-21 21:12:40'),
(247, 'admin', 3, NULL, 'Worksheets', 'Tracing Shapes Triangle', 'Tracing Shapes Triangle', 'Tracing-Shapes-Triangle', '1645476810-Tracing Shapes Traingle.png', '1645476810-Tracing Shapes Traingle.pdf', NULL, NULL, '2022-02-21 20:53:30', '2022-02-21 20:53:30'),
(248, 'admin', 3, NULL, 'Worksheets', 'Tracing Shapes Square', 'Tracing Shapes Square', 'Tracing-Shapes-Square', '1645477556-Tracing Shapes Square.png', '1645477556-Tracing Shapes Square.pdf', NULL, NULL, '2022-02-21 21:05:56', '2022-02-21 21:05:56'),
(249, 'admin', 3, NULL, 'Worksheets', 'Tracing Shapes Circle', 'Tracing Shapes Circle', 'Tracing-Shapes-Circle', '1645477671-Tracing Shapes Circle.png', '1645477671-Tracing Shapes Circle.pdf', NULL, NULL, '2022-02-21 21:07:51', '2022-02-21 21:07:51'),
(250, 'admin', 3, NULL, 'Worksheets', 'Tracing Letters Alphabets', 'Tracing Letters Alphabets', 'Tracing-Letters-Alphabets', '1645477826-Tracing Letters.png', '1645477826-Tracing Letters.pdf', NULL, NULL, '2022-02-21 21:10:26', '2022-02-21 21:10:26'),
(251, 'admin', 3, NULL, 'Activites', 'Tracing and Coloring', 'Tracing and Coloring', 'Tracing-and-Coloring2', '1645477998-Tracing and Coloring 2.png', '1645477998-Tracing and Coloring 2.pdf', NULL, NULL, '2022-02-21 21:13:18', '2022-02-21 21:13:18'),
(252, 'admin', 3, NULL, 'Worksheets', 'Tracing and Coloring Shapes', 'Tracing and Coloring Shapes', 'Tracing-and-Coloring-Shapes1', '1645478149-Tracing and Coloring 2 (1).png', '1645478149-Tracing and Coloring 2 (1).pdf', NULL, NULL, '2022-02-21 21:15:49', '2022-02-21 21:15:49'),
(253, 'admin', 3, NULL, 'Worksheets', 'Months of the Year', 'Months of the Year', 'Months-of-the-Year', '1645478246-Months of the Year (1).png', '1645478246-Months of the Year.pdf', NULL, NULL, '2022-02-21 21:17:26', '2022-02-21 21:17:26');
INSERT INTO `subjects` (`id`, `user_type`, `user_id`, `user_subject_id`, `category`, `name`, `description`, `slug`, `image`, `file`, `grade`, `school`, `created_at`, `updated_at`) VALUES
(254, 'admin', 3, NULL, 'Worksheets', 'My Name is - Writing Worksheet', 'My Name is - Writing Worksheet', 'my-name-is', '1645478384-My Name Is.png', '1645478384-My Name Is.pdf', NULL, NULL, '2022-02-21 21:19:44', '2022-02-21 21:19:44'),
(255, 'admin', 3, NULL, 'Activites', 'Tracing and Coloring Cow', 'Tracing and Coloring Cow', 'Tracing-Cow', '1645478525-Tracing Cow.png', '1645478525-Tracing Cow.pdf', NULL, NULL, '2022-02-21 21:22:05', '2022-02-21 21:22:05'),
(256, 'admin', 3, NULL, 'Activites', 'Tracing and Coloring Rabbit', 'Tracing and Coloring Rabbit', 'Tracing-and-Coloring-Rabbit', '1645478626-Tracing Rabbit.png', '1645478626-Tracing Rabbit.pdf', NULL, NULL, '2022-02-21 21:23:46', '2022-02-21 21:23:46'),
(257, 'admin', 3, NULL, 'Activites', 'Tracing and Coloring Bear', 'Tracing and Coloring Bear', 'Tracing-and-Coloring-Bear', '1645478706-Tracing  Bear.png', '1645478706-Tracing  Bear.pdf', NULL, NULL, '2022-02-21 21:25:06', '2022-02-21 21:25:06'),
(258, 'admin', 3, NULL, 'Activites', 'Tracing and Coloring Hearts', 'Tracing and Coloring Hearts', 'Tracing-and-Coloring-Hearts', '1645478872-Tracing Hearts.png', '1645478872-Tracing Hearts.pdf', NULL, NULL, '2022-02-21 21:27:52', '2022-02-21 21:27:52'),
(259, 'admin', 3, NULL, 'Worksheets', 'American Money Quarter', 'American Money Quarter', 'American-Money-Quarter', '1645479017-Quarter.png', '1645479017-Quarter.pdf', NULL, NULL, '2022-02-21 21:30:17', '2022-02-21 21:30:17'),
(260, 'admin', 3, NULL, 'Worksheets', 'Letters beginning with F', 'Letters beginning with F', 'Letters-beginning-with-F', '1645479243-Letters beginning with F.png', '1645479243-Letters beginning with F.pdf', NULL, NULL, '2022-02-21 21:34:03', '2022-02-21 21:34:03'),
(261, 'admin', 3, NULL, 'Worksheets', 'Numbers Spellings', 'Numbers Spellings', 'Numbers-Spellings', '1645479411-Spellings of Numbers.png', '1645479411-Spellings of Numbers.pdf', NULL, NULL, '2022-02-21 21:36:51', '2022-02-21 21:36:51'),
(262, 'admin', 3, NULL, 'Worksheets', 'Clock Time - Draw hands of the clock', 'Clock Time', 'Clock-Time', '1645479665-Clock-Time.png', '1645479665-Clock-Time.pdf', NULL, NULL, '2022-02-21 21:41:05', '2022-02-21 21:41:05'),
(263, 'admin', 3, NULL, 'Worksheets', 'Clock Time - Draw Hands of the Clock', 'Clock Time - Draw Hands of the Clock', 'Clock-Time1', '1645479778-Clock-Time1.png', '1645479778-Clock-Time1.pdf', NULL, NULL, '2022-02-21 21:42:58', '2022-02-21 21:42:58'),
(264, 'admin', 3, NULL, 'Worksheets', 'Divide by 4', 'Divide by 4', 'Divide-by-4', '1645479913-Divide-by 4.png', '1645479913-Divide-by 4.pdf', NULL, NULL, '2022-02-21 21:45:13', '2022-02-21 21:45:13'),
(265, 'admin', 3, NULL, 'Worksheets', 'Divide by 5', 'Divide by 5', 'Divide-by-5', '1645480008-Divide-by 5.png', '1645480008-Divide-by 5.pdf', NULL, NULL, '2022-02-21 21:46:48', '2022-02-21 21:46:48'),
(266, 'admin', 3, NULL, 'Worksheets', 'Divide by 6', 'Divide by 6', 'Divide-by-6', '1645480074-Divide-by 6.png', '1645480074-Divide-by 6.pdf', NULL, NULL, '2022-02-21 21:47:54', '2022-02-21 21:47:54'),
(267, 'admin', 3, NULL, 'Worksheets', 'Divide by 7', 'Divide by 7', 'Divide-by-7', '1645480148-Divide-by 7.png', '1645480148-Divide-by 7.pdf', NULL, NULL, '2022-02-21 21:49:08', '2022-02-21 21:49:08'),
(268, 'admin', 3, NULL, 'Worksheets', 'Divide by 8', 'Divide by 8', 'Divide-by-8', '1645480243-Divide-by 8.png', '1645480243-Divide-by 8.pdf', NULL, NULL, '2022-02-21 21:50:43', '2022-02-21 21:50:43'),
(269, 'admin', 3, NULL, 'Worksheets', 'Even or Odd', 'Even or Odd', 'Even-or-Odd', '1645480317-Even or Odd.png', '1645480317-Even or Odd.pdf', NULL, NULL, '2022-02-21 21:51:57', '2022-02-21 21:51:57'),
(270, 'admin', 3, NULL, 'Worksheets', 'Even or Odd with Decimals', 'Even or Odd with Decimals', 'Even-or-Odd-with-Decimals', '1645480390-Even or Odd1.png', '1645480390-Even or Odd1.pdf', NULL, NULL, '2022-02-21 21:53:10', '2022-02-21 21:53:10'),
(271, 'admin', 3, NULL, 'Worksheets', 'Even or Odd with Addition and Subtraction', 'Even or Odd with Addition and Subtraction', 'even-odd2', '1645480515-Even or Odd2.png', '1645480515-Even or Odd2.pdf', NULL, NULL, '2022-02-21 21:55:15', '2022-02-21 21:55:15'),
(281, 'admin', 3, NULL, 'Worksheets', 'Fractions Chart', 'Fractions Chart', 'Fractions-Chart', '1645514465-Fraction Chart (1).png', '1645514465-Fraction Chart.pdf', NULL, NULL, '2022-02-22 07:21:05', '2022-02-22 07:21:05'),
(282, 'admin', 3, NULL, 'Worksheets', 'Color the Fractions', 'Color the Fractions', 'Color-the-Fractions', '1645514549-Color the Fractions.png', '1645514549-Color the Fractions.pdf', NULL, NULL, '2022-02-22 07:22:29', '2022-02-22 07:22:29'),
(283, 'admin', 3, NULL, 'Worksheets', 'Multiplication Practice Sheet', 'Multiplication Practice Sheet', 'Multiplication-Practice', '1645514837-Mul Practice.png', '1645514837-Mul Practice.pdf', NULL, NULL, '2022-02-22 07:27:17', '2022-02-22 07:27:17'),
(284, 'admin', 3, NULL, 'Worksheets', 'Multiplication Practice', 'Multiplication Practice Sheet', 'Mult-2', '1645514927-Mul Practice1.png', '1645514927-Mul Practice1.pdf', NULL, NULL, '2022-02-22 07:28:47', '2022-02-22 07:28:47'),
(285, 'admin', 3, NULL, 'Worksheets', 'Multiplication Worksheet', 'Multiplication Worksheet', 'Multiplication-Worksheet2', '1645516234-Mul Practice2.png', '1645516234-Mul Practice2.pdf', NULL, NULL, '2022-02-22 07:50:34', '2022-02-22 07:50:34'),
(286, 'admin', 3, NULL, 'Worksheets', 'Multiplying Fractions', 'Multiplying Fractions', 'Multiplying-Fractions', '1645516326-Mul Fractions.png', '1645516326-Mul Fractions.pdf', NULL, NULL, '2022-02-22 07:52:06', '2022-02-22 07:52:06'),
(287, 'admin', 3, NULL, 'Worksheets', 'Multiplying Fractions', 'Multiplying Fractions Sheet2', 'Multiplying-Fractions-Sheet2', '1645516608-Mul Fractions1.png', '1645516608-Mul Fractions1.pdf', NULL, NULL, '2022-02-22 07:56:48', '2022-02-22 07:56:48'),
(288, 'admin', 3, NULL, 'Worksheets', 'Multiplying Fractions', 'Multiplying Fractions Sheet3', 'Multiplying-Fractions-Sheet3', '1645516685-Mul Fractions3.png', '1645516685-Mul Fractions3.pdf', NULL, NULL, '2022-02-22 07:58:05', '2022-02-22 07:58:05'),
(289, 'admin', 3, NULL, 'Worksheets', 'Fill the Missing Number', 'Fill the Missing Number', 'Fill-the-Missing-Number', '1645516941-Fill the Missing Number.png', '1645516941-Fill the Missing Number.pdf', NULL, NULL, '2022-02-22 08:02:21', '2022-02-22 08:02:21'),
(290, 'admin', 3, NULL, 'Worksheets', 'Opinion Writing Exercise', 'Opinion Writing Exercise', 'Opinion-Writing-Exercise', '1645517072-Opinion Writing Exercise.png', '1645517072-Opinion Writing Exercise.pdf', NULL, NULL, '2022-02-22 08:04:32', '2022-02-22 08:04:32'),
(291, 'admin', 3, NULL, 'Worksheets', 'Opposite Words', 'Opposite Words', 'Opposite-Words', '1645517309-Opposite Words.png', '1645517309-Opposite Words.pdf', NULL, NULL, '2022-02-22 08:08:29', '2022-02-22 08:08:29'),
(293, 'admin', 3, NULL, 'Worksheets', 'Rhyming Words', 'Rhyming Words', 'Rhyming-Words', '1645517701-Rhyming-Words.png', '1645517701-Rhyming-Words.pdf', NULL, NULL, '2022-02-22 08:15:01', '2022-02-22 08:15:01'),
(294, 'admin', 3, NULL, 'Worksheets', 'Rhyming Words', 'Rhyming Words Sheet2', 'Rhyming-Words2', '1645517820-Rhyming-Words1.png', '1645517820-Rhyming-Words1.pdf', NULL, NULL, '2022-02-22 08:17:00', '2022-02-22 08:17:00'),
(295, 'admin', 3, NULL, 'Worksheets', 'Seasons', 'Seasons', 'Seasons', '1645518767-Seasons1.png', '1645518767-Seasons1.pdf', NULL, NULL, '2022-02-22 08:32:47', '2022-02-22 08:32:47'),
(296, 'admin', 3, NULL, 'Worksheets', 'Count and Graph', 'Count and Graph', 'Count-and-Graph', '1645568302-Count and Graph.png', '1645568302-Count and Graph.pdf', NULL, NULL, '2022-02-22 22:18:22', '2022-02-22 22:18:22'),
(297, 'admin', 3, NULL, 'Worksheets', 'Sight Words', 'Sight Words', 'Sight-Words', '1645568530-Sight-words.png', '1645568530-Sight-words.pdf', NULL, NULL, '2022-02-22 22:22:10', '2022-02-22 22:22:10'),
(298, 'admin', 3, NULL, 'Worksheets', 'Nouns and Verbs', 'Nouns and Verbs', 'Nouns-and-Verbs', '1645568610-Nouns & Verbs.png', '1645568610-Nouns & Verbs.pdf', NULL, NULL, '2022-02-22 22:23:30', '2022-02-22 22:23:30'),
(299, 'admin', 3, NULL, 'Worksheets', 'Spellings', 'Spellings', 'Spellings1', '1645568727-Spellings1.png', '1645568727-Spellings1.pdf', NULL, NULL, '2022-02-22 22:25:27', '2022-02-22 22:25:27'),
(300, 'admin', 3, NULL, 'Worksheets', 'Spellings', 'Spellings', 'Spellings2', '1645569335-Spellings2.png', '1645569335-Spellings2.pdf', NULL, NULL, '2022-02-22 22:35:35', '2022-02-22 22:35:35'),
(301, 'user', 140, 74, 'Explore-Kids-Talents', 'Sarosh', 'Multiple creatures in one', 'Sarosh-multiple-creatures', '1645570481-BDBAEB75-67B6-4529-81D1-61CD9C04D636.jpeg', NULL, '7th', 'GVMS', '2022-02-23 00:54:57', '2022-02-23 00:54:57'),
(302, 'user', 140, 73, 'Explore-Kids-Talents', 'Sahale', 'Easter Bunny', 'Sahale-Easter-Bunny', '1645570409-19BC41CC-2D1F-4F25-A02F-C4D30D1D45D4.jpeg', NULL, '5th', 'GVMS', '2022-02-23 00:55:15', '2022-02-23 00:55:15'),
(303, 'user', 140, 72, 'Explore-Kids-Talents', 'Sahale', 'Drawing is my passion', 'Sahale-Drawing-is-my-passion', '1645570358-C5F51B14-225B-4682-9E1F-C533EE26D6EC.jpeg', NULL, '5th', 'Green Valley', '2022-02-23 00:55:39', '2022-02-23 00:55:39'),
(304, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Ananth', 'About Giving', 'About-giving-ananth', '1645577919-WhatsApp Image 2022-02-18 at 4.18.29 PM.jpeg', '1645577919-WhatsApp Image 2022-02-18 at 4.18.29 PM.jpeg', NULL, NULL, '2022-02-23 00:58:39', '2022-02-23 00:58:39'),
(305, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Roll a Turkey', 'Turkey art', 'turkey-art', '1646624899-WhatsApp Image 2022-03-06 at 7.46.57 PM.jpeg', '1646624899-WhatsApp Image 2022-03-06 at 7.46.57 PM.jpeg', NULL, NULL, '2022-03-07 03:48:19', '2022-03-07 03:48:19'),
(306, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Guess the Art', 'What is this art? Guess?', 'guess-the-art', '1646624958-WhatsApp Image 2022-03-06 at 7.46.57 PM (1).jpeg', '1646624958-WhatsApp Image 2022-03-06 at 7.46.57 PM (1).jpeg', NULL, NULL, '2022-03-07 03:49:18', '2022-03-07 03:49:18'),
(307, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Pumpkin Art', 'Pumpkin Art Carving!', 'pumpkin-art-carving', '1646625577-Nathan.jpeg', '1646625577-Nathan.jpeg', NULL, NULL, '2022-03-07 03:59:37', '2022-03-07 03:59:37'),
(308, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Butterfly Picture', 'Beautiful butterfly picture from close up by Nathan!', 'Butterfly-Picture', '1646625682-Photo4.jpeg', '1646625682-Photo4.jpeg', NULL, NULL, '2022-03-07 04:01:22', '2022-03-07 04:01:22'),
(309, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Christmas Cookies Bake', 'Christmas cookies bake!', 'Christmas-cookies-bake', '1646625762-Cookies-prep.jpeg', '1646625762-Cookies-prep.jpeg', NULL, NULL, '2022-03-07 04:02:42', '2022-03-07 04:02:42'),
(310, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Flower Closeup!', 'This is a picture my kid took in his 4th grade!', 'Flower-Closeup', '1646625916-Photography.jpeg', '1646625916-Photography.jpeg', NULL, NULL, '2022-03-07 04:05:16', '2022-03-07 04:05:16'),
(311, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Necklace Art', 'This is the necklace made by my lovely second grader for mothers day!', 'necklace-art', '1646626132-Necklace art.jpeg', '1646626132-Necklace art.jpeg', NULL, NULL, '2022-03-07 04:08:52', '2022-03-07 04:08:52'),
(312, 'admin', 3, NULL, 'Explore-Kids-Talents', 'Lion Closeup', 'This picture is taken when we went to zoo by my older kid!', 'lion-closeup', '1646626240-Photo2.jpeg', '1646626240-Photo2.jpeg', NULL, NULL, '2022-03-07 04:10:40', '2022-03-07 04:11:06');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `firstname` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastname` text COLLATE utf8mb4_unicode_ci,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dp` text COLLATE utf8mb4_unicode_ci,
  `status` int(11) DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `social_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `social_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `email`, `title`, `email_verified_at`, `password`, `dp`, `status`, `remember_token`, `created_at`, `updated_at`, `social_id`, `social_type`) VALUES
(1, 'Uma', 'Parbati', 'uma@yopmail.com', 'student', NULL, '$2y$10$uLdYDZyHCK3tyKioAOd4peip3O0LHUg7kpfYZynPwNyKp6mAWPaGK', '1642145489-bg-title-02.jpg', 1, NULL, '2021-12-07 03:38:41', '2022-02-22 07:33:55', NULL, NULL),
(2, 'Shiba', 'Druti', 'shibadruti@yopmail.com', 'Student', NULL, '$2y$10$wOf/mLfSTPtEuDHV924eR.J.YzgbUzp6IBxwaCFyZWcur44825ui.', '1643964784-mba.jpg', 1, NULL, '2021-12-07 03:47:36', '2022-02-04 08:53:04', NULL, NULL),
(3, 'Navnita', 'M', 'nanpal29004@gmail.com', 'Parent', NULL, '$2y$10$Lg6pufo3j6BxbWLYyxL8PeX4Nota7JbmBcP4TQyc/dAAhJrn0noX.', NULL, 1, NULL, '2021-12-23 19:27:52', '2022-02-17 02:09:12', NULL, NULL),
(4, 'Rimpa', 'Das', 'rimpa@yopmail.com', NULL, NULL, '$2y$10$t0G70eKXJZevjjlbSWo2lOzbYNScqc3iRyT40vGgoPX56fPeBAyla', NULL, 1, NULL, '2021-12-24 12:02:17', '2021-12-24 12:02:17', NULL, NULL),
(5, 'Kalu', 'Da', 'kalu@yopmail.com', NULL, NULL, '$2y$10$xOyzuPWvI6jlPqXFWr2nvee36./5J0tMYg6XIzs9JGnaF6kK5d/TO', NULL, 1, NULL, '2021-12-24 12:06:24', '2021-12-24 12:06:24', NULL, NULL),
(6, 'Jess', 'T', 'nanpal29003@gmail.com', 'Parent', NULL, '$2y$10$hvpPR9QkPpFeECd53ePxAOR4bMYesuEu.K/mmUmPRBNdMIexG2h82', '1642405088-cupcake-gd95eaf03a_640.jpg', 1, NULL, '2021-12-24 21:03:11', '2022-01-17 07:41:40', NULL, NULL),
(7, 'Shruti', 'Lekha', 'shruti@yopmail.com', NULL, NULL, '$2y$10$3BeTeALVaa0lNjUjOfCzrOXA3E4ALLjKDLp6CyZCAqoUaW3sJnyve', NULL, 1, NULL, '2021-12-27 07:41:44', '2021-12-27 08:06:30', NULL, NULL),
(8, 'Basanta', 'Bose', 'basanta@yopmail.com', NULL, NULL, '$2y$10$AekIbEdEwOfxVWsSEpL.Wu7emlXyuNXUc3s1G6erUNqEiT8/Y7HV6', NULL, 1, NULL, '2021-12-27 07:48:47', '2021-12-27 07:54:12', NULL, NULL),
(9, 'Swarnadwip', 'Nath', 'pfswarnadwip@yopmail.com', NULL, NULL, '$2y$10$fC7EMzAt7db7ZE7pdcDSWONLUaDRCJ8Tp9CIJma1MZyPBrMiEF4L2', NULL, 1, NULL, '2021-12-27 08:07:16', '2021-12-27 08:09:02', NULL, NULL),
(10, 'Pakhi', 'Das', 'pakhi@yopmail.com', NULL, NULL, '$2y$10$yN11jut8zuz62yBLtV7eG.D7xcEpWkOXf5F1Q9vYnrFX/.v5dzdje', NULL, 1, NULL, '2022-01-05 06:21:18', '2022-01-05 06:21:42', NULL, NULL),
(26, 'Roshan', 'Khaitan', 'r@yopmail.com', NULL, NULL, '$2y$10$JS3Wew2lKM37aogWb6Bheu2Fm6W7dY8XyYldA5BI3YsvNc9lNFn76', NULL, 0, NULL, '2022-01-13 13:10:00', '2022-01-13 13:10:00', NULL, NULL),
(27, 'Roshan', 'Khaitan', 'rava@yopmail.com', NULL, NULL, '$2y$10$BGWiLqBGKGdBl7LoKhkuuOtBvtnumgV4Jgz8Yn/tYPIwnP8SIBdiK', NULL, 0, NULL, '2022-01-13 13:10:38', '2022-01-13 13:10:38', NULL, NULL),
(29, 'JK', 'Lz', 'jklz@yopmail.com', NULL, NULL, '$2y$10$7uo/jXP3YCsw6UnBgKj.Pupo20gbjmsTVn.OMeS.qq/WAxU.l8iuu', NULL, 0, NULL, '2022-01-13 13:19:08', '2022-01-13 13:19:08', NULL, NULL),
(30, 'Avijit', 'Sen', 'pfavijit@gmail.com', 'Educator', NULL, 'eyJpdiI6IlR4KzlYSm9zV00xQVkrTVpKR1UvMUE9PSIsInZhbHVlIjoiOUhzZFY5SFNib1lZK2sxS0R5eHlSUTVENWdoUk1CYyt3TmtXbnhTV091cz0iLCJtYWMiOiJkZTdiZWNmNTFlMDk0YzczOTg0ZjgyOGM0MmJlYjY1YzE4ODYxZjI3YzAzNTkyYjk2YjU4NDhkNDRkNDUzNjUxIiwidGFnIjoiIn0=', '1643725634-literature.jpg', 1, NULL, '2022-01-14 10:01:38', '2022-02-01 14:27:27', '101166710833994815778', 'google'),
(31, 'Dinga', 'dinga', 'pfdinga@yopmail.com', 'parents', NULL, '$2y$10$QzjVKH0pCXSM3NdN8KSqdOeDBO60amz2m8iZvgTlN2LvCvhIAHlwS', NULL, 1, NULL, '2022-01-14 13:58:22', '2022-01-14 13:59:17', NULL, NULL),
(32, 'Nancy Pal', NULL, 'nanpal29001@gmail.com', NULL, NULL, 'eyJpdiI6InVYN3BJN3RYUG5nSElwaU1Cc3BhN2c9PSIsInZhbHVlIjoiSCtiSzQwZm5hRWJsaDNRUnZ1eUl4OXltS3BXQW1IU3c0a2pDZXBjSnhUZz0iLCJtYWMiOiJiMzM3YmMyMjNkODBjY2E3NmJjNjIzOGMwZjA4NTExYjhkZmZlMTI4ZTcwNmRkMjk4MTAwMDZhYmVmNjI4YmFjIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-01-14 19:55:56', '2022-01-14 19:55:56', '101879488710581157926', 'google'),
(34, 'Partho', 'Sarathi', 'partho@yopmail.com', 'Teacher', NULL, '$2y$10$QfR3s2YzZP4RWz0PVkNisu3kIpwkedpEBP3IZfWpzYWZs7BTnkvzG', '1642486218-avatar-01.jpg', 1, NULL, '2022-01-18 06:02:12', '2022-01-18 06:10:18', NULL, NULL),
(36, 'Jacky', 'Mishra', 'jacky@yopmail.com', 'Privy Solutions', NULL, '$2y$10$C9A4o/Qp9bngtmknwl3F9uBRLxEIt6t6WFJwVtua.ElYm3LGG3JYW', NULL, 1, NULL, '2022-01-19 18:30:28', '2022-01-19 18:31:05', NULL, NULL),
(37, 'nancy', 'pal', 'nanpal29002@gmail.com', 'Parent', NULL, '$2y$10$KfU6jlwEVSPysmOzi4Cz6uyLr7Vse6yEee4BS971gh9m1F.6w49lS', NULL, 1, NULL, '2022-01-19 18:42:47', '2022-01-19 18:47:31', NULL, NULL),
(38, 'Suneetha', 'Koppula', 'nanpal29005@gmail.com', 'Parent', NULL, '$2y$10$QZM7soMDZcfDOXtNyUA0RO3TVFFS.xyZx5PHtkpGZk3XR8QGXvyTe', NULL, 0, NULL, '2022-01-19 18:43:50', '2022-02-17 02:27:00', NULL, NULL),
(39, 'Nil', 'Sharma', 'nil@yopmail.com', 'Student', NULL, '$2y$10$eER49NOPhPax3i.DSxLb2uV5qnhBaI3y1b.AgtF8/mbPVUq5QKdb6', NULL, 0, NULL, '2022-01-19 18:43:56', '2022-01-19 18:43:56', NULL, NULL),
(40, 'Nil', 'Sharmaji', 'nil1@yopmail.com', 'Student', NULL, '$2y$10$YjGcjwf1F1Jmy1lpz.MdLOJr5DVl3TDc8OmjmNxtuSXq357mdnA7y', NULL, 1, NULL, '2022-01-19 18:47:36', '2022-01-19 18:48:11', NULL, NULL),
(41, 'ParentTeacherHub', 'Team', 'neelima.tapata@gmail.com', 'Educator', NULL, '$2y$10$mvgZacWYFCr1oPfwewJVU.uAhZ0e0zI1TWpv9rGLPeYuzHFLDt2Xy', NULL, 1, NULL, '2022-01-19 18:58:30', '2022-02-20 01:01:56', NULL, NULL),
(42, 'Common', 'Questions', 'quickmints@gmail.com', 'Learning', NULL, '$2y$10$xCcl2BBYwSb1w07fzPZaMuxsdPxJ1CaeRQxP9qcDm56tftmp1KRCe', NULL, 0, NULL, '2022-01-19 23:18:26', '2022-02-20 01:05:43', NULL, NULL),
(43, 'Srotosrini', 'Mukharjee', 'srotosrini@yopmail.com', 'Student', NULL, '$2y$10$kRFmoaxrLIhIy8JR4DbSU.SExTQHIhvHosJ9GhBwLhWgbYm7WiI.C', NULL, 1, NULL, '2022-01-20 07:32:37', '2022-01-20 07:34:11', NULL, NULL),
(44, 'QuickMints', 'Team', 'quickmints@yopmail.com', 'Quickmints', NULL, '$2y$10$ASDMR5ej73BUWC6DFpQeOeHS91zUcK9BT8vcQaYs1zRAKsKJ0ANmK', NULL, 1, NULL, '2022-01-20 19:18:45', '2022-01-20 23:55:28', NULL, NULL),
(45, 'Diksha', 'Agarwal', 'diksha@yopmail.com', 'Teacher', NULL, '$2y$10$thNvHnf1HtD78BCeIxXV7.gQyelRqdM/kcEPvVGDEXvJCmSGlCEKC', NULL, 0, NULL, '2022-01-21 18:37:20', '2022-01-21 18:37:20', NULL, NULL),
(46, 'Diksha', 'Agarwal', 'diksha1@yopmail.com', 'Parent', NULL, '$2y$10$sjreoN0yvl6048X4gH6nveYWhP4BiWfCHeMDjlgw4Duf4J2ZJtG8m', '1643306948-IMG-20220127-WA0021.jpg', 1, NULL, '2022-01-21 18:40:03', '2022-01-27 18:09:08', NULL, NULL),
(47, 'Jason', 'u', 'jasonu@yopmail.com', 'Parent', NULL, '$2y$10$tHqsFOfAreP8RpRUKu/2tOpRm4ffueNYvtuvggbxWnWcHT92p1vrS', NULL, 1, NULL, '2022-01-23 06:10:45', '2022-01-23 06:11:15', NULL, NULL),
(48, 'Dasher', 'P', 'dasher@yopmail.com', 'Parent', NULL, '$2y$10$Jmp8P54AmvcczMeOcVhU6.zxrhQ8reLWlNsGq94gCmsQRRXuuqBX2', NULL, 1, NULL, '2022-01-25 17:41:31', '2022-01-25 17:42:00', NULL, NULL),
(49, 'jinki', 'minki', 'jinki@yopmail.com', 'Parent', NULL, '$2y$10$Z8ryQlJcoWdOxCM3cdu/QOdSWF5dTIzfruxSi.L.66.atUY9yLSKi', NULL, 1, NULL, '2022-02-01 13:45:06', '2022-02-01 13:45:33', NULL, NULL),
(50, 'ParentTeacherHub Team', NULL, 'parentteacherhub@gmail.com', NULL, NULL, '$2y$10$bAxwwMnT6ZrriQGitOzQz.mSU13Vmu/ub2FDkkycpSm8YxiVcDYN.', NULL, 1, NULL, '2022-02-01 13:56:48', '2022-02-14 18:57:18', '116862619418942440955', 'google'),
(51, 'Raj', 'T', 'rajt1@yopmail.com', 'Parent', NULL, '$2y$10$7CL7U7yJljSNVxg9EMF5GOIXy.I7oxl9mFX1TzOXjY5OXkbXZA6JC', NULL, 1, NULL, '2022-02-01 17:24:14', '2022-02-01 17:24:42', NULL, NULL),
(52, 'Preeti', 'S', 'Preetis@yopmail.com', 'Parent', NULL, '$2y$10$GjF4MF/gACcj11L2ChkA2eW5A6H6ooWQDR5F7gY0XEWZf1ijrn5Ly', NULL, 1, NULL, '2022-02-01 23:36:42', '2022-02-04 21:54:29', NULL, NULL),
(53, 'QuickMints', 'Team', 'teamquickmints@gmail.com', 'Educator', NULL, '$2y$10$pXrEYhsxt9QlTeKPpoGqvecgDxX9rE7hsrhgqMXICYL1O/8QJh5BK', NULL, 0, NULL, '2022-02-02 01:01:52', '2022-02-02 01:01:52', NULL, NULL),
(54, 'Neelima', 'S', 'saka.neelima@gmail.com', 'Parent', NULL, '$2y$10$lyNFxsPwdORC0AMVjdw4IONVp34uYaIMqRG5NpjybJvPSz/FeqwP6', NULL, 0, NULL, '2022-02-04 21:57:13', '2022-02-15 17:50:13', NULL, NULL),
(55, 'Jyothi', 'Marri', 'Jyothi212@yopmail.com', 'Parent', NULL, '$2y$10$7RWxyKCqAPheb1DM4M5cD.EJOiKlmMOsYES9.AgSRubjBuU2hyumK', NULL, 1, NULL, '2022-02-04 23:29:12', '2022-02-04 23:29:35', NULL, NULL),
(56, 'Ravi', 'P', 'Ravi212@yopmail.com', 'Parent', NULL, '$2y$10$YXxEr.MtHeHD.Rf1RmEmlOWfq.JOdtScMeAUZUe5mpkEoUtv80Bee', NULL, 1, NULL, '2022-02-04 23:33:18', '2022-02-04 23:33:56', NULL, NULL),
(57, 'Rupa', 'Agarwal', 'Rupa212@yopmail.com', 'Parent', NULL, '$2y$10$71H8tl8L6p4cpbZJQjxmeudDqe2XNSALk.iHD/Q4BWSFrKl8A8Nla', NULL, 1, NULL, '2022-02-04 23:39:52', '2022-02-04 23:41:42', NULL, NULL),
(58, 'Nikhita', 'Pulladi', 'Nikhita212@yopmail.com', 'Parent', NULL, '$2y$10$sPotzTQ.y6g0kNqAuk5/3.ilKSiVjU1Qq4d7VUBMILx1T3UxabV3i', NULL, 1, NULL, '2022-02-06 18:14:58', '2022-02-06 18:15:47', NULL, NULL),
(59, 'Anil', 'Sa', 'sakaanil@gmail.com', 'Parent', NULL, '$2y$10$7pMqhe9ipfBcfS3w3KsFp.KkcaSHoTUpiaPk3/51NTa9IykSKzXUC', '1644966117-football.jpeg', 1, NULL, '2022-02-06 23:11:03', '2022-02-15 23:01:57', '108591095531675194722', 'google'),
(60, 'Rahi', 'Sarma', 'rahi@yopmail.com', 'Student', NULL, '$2y$10$OBALzn5ssfuuENYGxcgRV.t3uKdiGUC84yF1OxyYjJzDwp3u0ZudW', NULL, 1, NULL, '2022-02-07 14:07:13', '2022-02-07 14:07:37', NULL, NULL),
(61, 'Neelima', 'T', 'neel_alph2000@yahoo.com', 'Parent', NULL, '$2y$10$XedDF5x0BKkaCuXcVZRWvuFRxGHdjUvAXnQQTwMb23wnCBDsPrORi', NULL, 1, NULL, '2022-02-07 22:54:27', '2022-02-07 22:55:00', NULL, NULL),
(62, 'Neelima', 'T', 'neelimat2022@gmail.com', 'Parent', NULL, '$2y$10$7Oo2ZYeB4Y./4c6J5VUIBuiQpHOfqcyqZAJvSHlzkz8RXb3oXb2Fe', NULL, 0, NULL, '2022-02-07 23:07:48', '2022-02-07 23:07:48', NULL, NULL),
(63, 'Emily', 'M', 'Emily212@yopmail.com', 'Parent', NULL, '$2y$10$B1W4QPVkPdcwAPhuZ11t6eoeFhIvzO/uQlWAAiekeL0VF/XBPN5Lq', NULL, 1, NULL, '2022-02-10 01:58:53', '2022-02-10 01:59:50', NULL, NULL),
(64, 'Joshua', 'K', 'Jashua399@yopmail.com', 'Student', NULL, '$2y$10$LLmnwlOqfcLwE3h5k/vHkuYh4pX5RJVV3LP/jA5Dqi5xgoru0HDzi', NULL, 1, NULL, '2022-02-10 02:03:45', '2022-02-10 02:04:26', NULL, NULL),
(65, 'Supraja', 'L', 'supraja399@yopmail.com', 'Parent', NULL, '$2y$10$1uyYC.YFT.NuZBgf.GZIduH4EkCASfJCrEXbYOXIEx7je5m9hOY3e', NULL, 1, NULL, '2022-02-10 02:12:12', '2022-02-10 02:12:43', NULL, NULL),
(67, 'Kalu Da', NULL, 'pfanushree@gmail.com', NULL, NULL, 'eyJpdiI6InFqZnJyZUNIUnZabitienp1NlJneFE9PSIsInZhbHVlIjoiSElEM2x5L3lScUZBakNCMklCNFBaVUNvZ0FlNGlFTlJTVTRXbkxDZjdaUT0iLCJtYWMiOiIyMWU5MjUxMmVhNTYzZjM2NDcwYzhlYmQwM2QyNmU0NWFmZWE2MDY2YWJmYTg0Mzk3ZjVmMDIyNDMwNTQ1OTRkIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-10 06:47:30', '2022-02-10 06:47:30', '119383753982901', 'facebook'),
(71, 'Rupam', 'Rock', 'rupam@yopmail.com', 'Teacher', NULL, '$2y$10$snzfLqsh8UZpgTLqIkz3V.pRleSqDGmYeGjv5PRP.KYFx0T/VWOpu', NULL, 0, NULL, '2022-02-10 07:26:30', '2022-02-10 07:26:30', NULL, NULL),
(73, 'Anupam', 'Dutta', 'anupam123@yopmail.com', 'Teacher', NULL, '$2y$10$T2tuSQKJ0.KprcjxDkoh6uzfsGTrME2PvkRK2ZNC8M..ttQgWRXsS', NULL, 0, NULL, '2022-02-10 07:42:01', '2022-02-10 07:42:01', NULL, NULL),
(74, 'fctghtgh', 'dftyfghf', 'dftrgctgh@yopmail.com', 'student', NULL, '$2y$10$HE2mGJ7H.Y2jxFrkAWWwiO.SLDNDSQCTOOhuMtBNMQk8N93KrQzd.', NULL, 0, NULL, '2022-02-10 07:48:23', '2022-02-10 07:48:23', NULL, NULL),
(85, 'jinki', 'jinki', 'jinki123@yopmail.com', 'Education', NULL, '$2y$10$byTNxtbYEw6OLSRmSotXYOTosL4iAaKFn07OUPDX3fK2lNFyX72Dq', NULL, 1, NULL, '2022-02-12 07:31:33', '2022-02-12 07:32:01', NULL, NULL),
(92, 'RK', 'RK', 'rahulmakhija988@gmail.com', 'Par', NULL, '$2y$10$VMFFthzkiCvO7yqCTt..AOHSIA6rtLIAnUv17rpWjpY6aW6.N22A.', NULL, 0, NULL, '2022-02-12 08:15:21', '2022-02-12 08:15:21', NULL, NULL),
(95, 'T', 'T', 'team.quickmints@gmail.com', 'P', NULL, '$2y$10$Aggl8lyaDmLUzRchmo.e/e.o6or/a1XKwQ59om1PTa65i0ailUHCy', NULL, 0, NULL, '2022-02-12 08:35:37', '2022-02-12 08:35:37', NULL, NULL),
(96, 'Hfhjk', 'Bjjj', 'uma1@yopmail.com', 'Hhhj', NULL, '$2y$10$H1RUCYZow01GlwQcUnQY6.3jeoeOxbFZEW0.hw2eLEKguLx1WazDu', NULL, 0, NULL, '2022-02-12 09:38:16', '2022-02-12 09:38:16', NULL, NULL),
(97, 'Nathan', 'Saka', 'nathansaka01@gmail.com', 'Student', NULL, '$2y$10$1/gleHQJ90JFt/sHbDqJ3.kyyFccZCQPDclMXVDtkXidhh39doSmy', NULL, 1, NULL, '2022-02-14 19:11:43', '2022-02-14 19:13:03', NULL, NULL),
(98, 'chase tapata', NULL, 'chasetapat1432@gmail.com', NULL, NULL, 'eyJpdiI6IkRZK2ExeDJJQkxBMFRSMUpDc2dDeGc9PSIsInZhbHVlIjoielAvbEJaU2w0Q2ZIQ2VGbmV0SmhlMW1xdW9LdUVhaHpwS1B6QW9adTRVcz0iLCJtYWMiOiI4MDM3MWRjNGFmMGVlNTk3YWZjZTkwNjc5ZjI0MzZkM2E2NDQ3NmIyYzhhNWQ4ZDQ5MDlhNmE2OGRkMDM0YmEyIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-14 23:13:19', '2022-02-14 23:13:19', '113245223085866621808', 'google'),
(104, 'Analysis', 'Astrology', 'analysisastrology@gmail.com', 'astrology', NULL, '$2y$10$n.XvgCynnskTtLP9OWCSV.qbuk.LMtl3lyRBmNolyci42ya2Cs5Dq', NULL, 1, NULL, '2022-02-15 07:59:46', '2022-02-15 08:57:01', NULL, NULL),
(105, 'Nancy', 'Pal', 'nanpal29001@yahoo.com', 'Parent', NULL, '$2y$10$S5FbLwZ54lpEtFodRBChWuzkNuj6gl21hIcp9kVPMiKTYLAsHdnae', NULL, 1, NULL, '2022-02-15 07:59:57', '2022-02-15 08:00:13', NULL, NULL),
(106, 'Nan', 'Pal', 'nanpal29100@gmail.com', 'Educator', NULL, '$2y$10$yfWLkC7v2cXi84KY2wSpxOv9QRv/6ND5wjlFoFP9xdtCQuPdOKGqm', NULL, 1, NULL, '2022-02-15 08:04:47', '2022-02-15 08:05:09', NULL, NULL),
(108, 'Sunita', 'P', 'localdealzforyou@gmail.com', 'Parent', NULL, '$2y$10$l5dQaycbp2jR1eZjS0Ok..hL2X4dbsvL0kjA1iBHvN4qtfiNNVTZe', NULL, 1, NULL, '2022-02-15 17:17:20', '2022-02-15 18:01:55', NULL, NULL),
(109, 'Lakshimi Rani', NULL, 'chaitime00@gmail.com', NULL, NULL, 'eyJpdiI6IjFBaGtDemtKdGRlVlBkb2lPNUl0WGc9PSIsInZhbHVlIjoicEUvZkUwWHZqeHl3aUJnUCtUYm9iWFAzaGVVenUvblpCN2xjZloxL0drRT0iLCJtYWMiOiIyNDM4Yzk4OWM4NTc0MTNiYTdjNWNjYWQwNTE5MGMxNThkNGVkM2M0MGRiYjE2YzY2MTcwNGZmNzU0NTE3ODk1IiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 18:42:31', '2022-02-15 18:42:31', '4756189294418294', 'facebook'),
(110, 'Vineela', 'V', 'vineela_eee@yahoo.com', 'Parent', NULL, '$2y$10$ct1mNo6DmhDTybHn8kFjAuM8mUZCBNyFH3vkvakCsGs4zLwS5ZuSW', NULL, 1, NULL, '2022-02-15 18:58:03', '2022-02-15 18:58:27', NULL, NULL),
(111, 'Vishala Kosaraju', NULL, 'vishalak@gmail.com', NULL, NULL, 'eyJpdiI6IlZjaGtCTzVtb0lGWUNFR0RyRDhvRHc9PSIsInZhbHVlIjoiRW8xMElraXltRGdmU24wN2ozeDZEcWdtNG1qc1o2T3UwcjlLWTZpWURNMD0iLCJtYWMiOiIyZmY3MjM3NWZmOWU1N2ZjMzVkZDFhZTBlYTk2ZjA2NjUzZTEzZDVjNTA3Y2FlYTVjZjQ0YzQwZTFmZGIzYjRmIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 19:20:26', '2022-02-15 19:20:26', '110008544353221676626', 'google'),
(112, 'Preethi', 'Chandrasekhar', 'preethic@gmail.com', 'Parent', NULL, '$2y$10$OgykAXGRo1rrTmCuUVSoF.Wv.1oSS7EFPm7hNR7tvVJqEootQly0O', NULL, 1, NULL, '2022-02-15 21:16:47', '2022-02-15 21:17:22', NULL, NULL),
(113, 'Sreenu Sasubilli', NULL, 'sasubillis@gmail.com', NULL, NULL, 'eyJpdiI6ImJLdEQ2TDEzZlZ1b3hYQkdTWVpxL1E9PSIsInZhbHVlIjoiaHlDWEhvdTZDMFlCbm9ST3FxZzkxaEs1TkdQWVhVWlNmV2V0allJZll5ST0iLCJtYWMiOiIzMzE4NzAyNDgzMTdkMzY2MjFhZTI0YWUxODgzZDkzNTQwZjRiNDg5YTdhZTFmOWU4NTlkZDg0NTViYjM1ZDExIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:12:25', '2022-02-15 22:12:25', '100582136274933379267', 'google'),
(114, 'narayani ramesh', NULL, 'narayaniramesh2006@gmail.com', NULL, NULL, 'eyJpdiI6Ii9TcGh4NjFJT3pHWHVjdEtKZHJGSmc9PSIsInZhbHVlIjoiT0ZLVzhlelFhbGI3TFNpUHg1WnZ0VDg1WFNvanNRcmhiRDZaR0NWckV1Zz0iLCJtYWMiOiI4ZGNiYjc5NTE4OTk2MTg5NTg0ZjJiNDU3MmM3NTU1Y2E2NDc2NDA0Zjc1MmVkNTNhYTk1YjkwMDM4OWZkYTkxIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:16:10', '2022-02-15 22:16:10', '100429525874449474488', 'google'),
(115, 'Archana Balasubramanian', NULL, 'archana.balasubramanian@gmail.com', NULL, NULL, 'eyJpdiI6InEvYitQcS93bVdxQitVSEhDbWNSbXc9PSIsInZhbHVlIjoiNVBBNzg0eGJLWk8rMWpzY2J0SHdsbHVhb2hxaUp6MmVPTTI2bUp2VlAzbz0iLCJtYWMiOiI5ZmE3MTYzMGQzMzQyZDFhMWY4NThlMzJkZDZmYjZlZWFhNWYwNzkwNDIwMzEzNWY3ZjdmZTdkMzRlN2Y4ZGNmIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:17:32', '2022-02-15 22:17:32', '10209982411713062', 'facebook'),
(116, 'Kiruthiga Vasudevan', NULL, 'kiruthiga.vasu@gmail.com', NULL, NULL, 'eyJpdiI6IlFvUEpQblNab3hkV2ViYzJGNG0yT0E9PSIsInZhbHVlIjoiOU9FakgyMm5vYkpIQm5NdS9tUFo2K3AyRk42cEpIR0UxWUdQcG5YQ3dJND0iLCJtYWMiOiI4MDQ4NzI0NzdhYzc0ZWE3Yjc1N2Y3YjkyN2U3YTQxNTRjOTNkY2RjZmVlODVmNDJjZTkxN2ZjM2NjNTFkMTg3IiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:24:49', '2022-02-15 22:24:49', '118271708732788730263', 'google'),
(117, 'Archana', 'Kanala', 'archana.kanala@gmail.com', 'Parent', NULL, '$2y$10$eOzjujfRelDaBw8VdZkCre4YaNQIf3LP5EdPAJRHGFqZkkizUN6KW', NULL, 0, NULL, '2022-02-15 22:26:21', '2022-02-15 22:26:21', NULL, NULL),
(118, 'Christiana Tenali', NULL, 'christiana10ali@gmail.com', NULL, NULL, 'eyJpdiI6IkYwWnozR2tsR1pTSGlvTnNsQ2pvUWc9PSIsInZhbHVlIjoiNlFwbFkvQUxVWUV2VVJhZkR5RXBmWllHTU9HcGE2RmJ3OXlvRFA0N3hvdz0iLCJtYWMiOiJjM2M5OWFiYTI1YmExYjFlMzc5ZWQwNThkY2Y3YmUyZDY1MTcyNTllNDUzYjRmMjQxOWM2YmRjZDBmODU1MzUyIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:46:19', '2022-02-15 22:46:19', '1823663974486249', 'facebook'),
(119, 'Anika A', NULL, 'anikaanne2010pal@gmail.com', NULL, NULL, 'eyJpdiI6Ikx0REtCZXJmejQ4ZG1DNkpoWUVyNXc9PSIsInZhbHVlIjoiUEtYbHRSR0NzWE1VSkg1ZE1ZaExjWEIySmgrVlNvc1l5YVJzT1A0WVlObz0iLCJtYWMiOiIzMDhhMjlmNDdhZTQ3NDcwOGQzYmVhZDAzMjM2MmU4YjZkYjNhNGE0ZDZjYmU2NjE1Mzc5ZGYwYzY2Mzk4YmJhIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:49:16', '2022-02-15 22:49:16', '113219727951344083658', 'google'),
(120, 'Pavitra Anne', NULL, 'gpavitra@yahoo.com', NULL, NULL, 'eyJpdiI6IlNNdmhZQ3VzSElOT3lvQ2w0ZmI4bUE9PSIsInZhbHVlIjoiaFNmVy92bzJvTzAxc3dKcUdPWVRiWWM0OUd0RGRCQkpIaDZud1dMbHVEZz0iLCJtYWMiOiIyMDI0ZTVjY2UyMDU5MDRkYWFkNzM2MmI1ZmU5NmQ5Mjg5MWY2YTE0MjgxYTIyZmJkNmJmYTYzNzI5MmExNzVmIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-15 22:49:55', '2022-02-15 22:49:55', '5238689032829407', 'facebook'),
(121, 'Harika', 'Kanamarlapudi', 'btechit.2010@gmail.com', 'Parent', NULL, '$2y$10$WjfDDTaKZojufuVaAAmTdOW8R69em19GPwNf3zB97aLBYTD2k.2IC', NULL, 0, NULL, '2022-02-15 23:39:29', '2022-02-15 23:39:29', NULL, NULL),
(122, 'Sai Kodali', NULL, 'rbyk2009@gmail.com', NULL, NULL, 'eyJpdiI6InZVcTVEUGNJckpMMFdRTXNCUnVDTmc9PSIsInZhbHVlIjoiTFdySU9sNkpBMDBudjNzeTQ2Rk1uNzlNcmFSekltTm9IUm00eXJUSkRsaz0iLCJtYWMiOiJjMzVkMTM1ZmQ5MTJhNzM3YjkzZDljNmIxMGE3NDRkYzEyMjQ5NGQ2MjZiODExNzliNjJiNDRiOThkNmZkMDFlIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-16 00:06:59', '2022-02-16 00:06:59', '111803135515937171342', 'google'),
(123, 'Suman Goel', NULL, 'sumangoel@gmail.com', NULL, NULL, 'eyJpdiI6IkJUcUN3aWF5dGdqU29WdGVFRFo1bVE9PSIsInZhbHVlIjoiRGVHVWJqRWhOOUtIYWRJTUpreVpFU0lKTG4rNUpXdGlkVlR4N3lCMVY1az0iLCJtYWMiOiJiYWFkMGMzM2ZlOTZmNjk1OTIxYjUwYjBhMzU3NDgzYTU4ZTVhYTJmMTc3ODA5NjU3ODViYzFmODg2OTE0M2FkIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-16 01:32:17', '2022-02-16 01:32:17', '103404755665977860268', 'google'),
(124, 'Sri Ramaswamy', NULL, 'sri3april@gmail.com', NULL, NULL, 'eyJpdiI6InFpeGVWemFUNnBYN2xpKy9Rb1g5akE9PSIsInZhbHVlIjoiYlFFcll5WldLVEcwbEZyNVVOZTI2RHhhMjBGNEN0OFpiekVvYk5KeGkrWT0iLCJtYWMiOiJlZjk3NWQxMDQ3ZTgwMWNlN2I1NWRiYzhlYTU0ZTM3MGRmYzNkZDdiMmFjZWRlY2U5YmU4MDZlYzMzYmJkZGJiIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-16 01:54:49', '2022-02-16 01:54:49', '102700972876176146100', 'google'),
(125, 'Aarthi', 'Senthil', 'aaashini@gmail.com', 'Parent', NULL, '$2y$10$v8n2NwXFLFgiQiTI9QvgP.Aw0OS/4g.0TAsarVoYvh/OfoyIVoLK2', NULL, 0, NULL, '2022-02-16 02:24:45', '2022-02-16 02:24:45', NULL, NULL),
(126, 'Rani Mastey', NULL, 'ranimastey399@gmail.com', NULL, NULL, 'eyJpdiI6InZnVm0zM0tIcDM2YkZjWVZPcWNzckE9PSIsInZhbHVlIjoiMlkvZTBrR0wrZStIZHZMTU1MTWFodDk0RjNock5oUndlUk1JeDdJYnZCbz0iLCJtYWMiOiJhYTY2MTI4ZDA4MTgzNzE2NTVkY2VhMWQyYjBmMzc3YzQ2NGE5MDgwMzBkOWE3NGE2OGEyM2E5ZDljYWI3NDI4IiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-16 06:34:49', '2022-02-16 06:34:49', '108219011702652598109', 'google'),
(127, 'Yasmeen Nasir', NULL, '19.yasmeen@gmail.com', NULL, NULL, 'eyJpdiI6ImtiMHZLTG9lWCtuRk5meXRxOWgwV0E9PSIsInZhbHVlIjoiRmlGTlZaZHhOSlBuRUdNeldZMUJGNEZaa0V0VHd1bUNWMEFIdnVTSlBWaz0iLCJtYWMiOiIyMDlkYmJjODM1Yzg0YWVmMGQxZDAzNjIzMDZhZjM0MGQ2NTk5YjEzMDYyMzgyZTI1ZTMwZTcxYzVlOWU5ZGRmIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-16 18:28:48', '2022-02-16 18:28:48', '106061822603866032745', 'google'),
(128, 'Saijyothi Byreddy', NULL, 'byreddy.saijyothi@gmail.com', NULL, NULL, 'eyJpdiI6ImRPK1QwN3pvN0haUUhxNUgvajM1cXc9PSIsInZhbHVlIjoiL3NqamdKMTZEb1k0SlkyZXQrb3diWnRZaGhrbXg0SUIzelBDZGtQbTJUbz0iLCJtYWMiOiIzNjUzYWNjYmZkOTU4YjFhNmY0MTcxMjkzZjRhMjE1NzYxMWM1MTM0ZmNlODMyZWVmNjc3MDhhOWE4N2NmNzNlIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-16 19:14:54', '2022-02-16 19:14:54', '117564592377733697419', 'google'),
(129, 'Vidhi', 'Parekh', 'vd4sam@gmail.com', 'Parent', NULL, '$2y$10$/CW/8fc2yp9Qk8xKCXU0suqKHZsRff.h4AdMViW/SI6Z9IpdnHfHy', NULL, 0, NULL, '2022-02-16 19:21:19', '2022-02-16 19:21:19', NULL, NULL),
(130, 'Poorna', 'Reddy', 'Poorna301@yopmail.com', 'Parent', NULL, '$2y$10$lSZVYefRtTwEz75fEDH5M.2dJRI6Fr1WZ3n37qxRK/RM5tlJ24LRa', NULL, 1, NULL, '2022-02-17 01:16:43', '2022-02-17 01:16:52', NULL, NULL),
(131, 'Manjula Sekar', NULL, 'manjulasekar902@gmail.com', NULL, NULL, 'eyJpdiI6IkRDbzEvTHBvZURZS0ZDcU53QVFYd2c9PSIsInZhbHVlIjoiOWZLNllZRzZnRFBESTlQb0UyWDRrYmhucXZtZkVGd1hVZy8zT3ozRWwwMD0iLCJtYWMiOiJlYTc5MGI5MzRlNzU5MWRmYjAyMjU3OThlMDZiMzRhY2ZhMzc0ZTczMzFiZDdkNjYzZGE4OTY2NjViYTY4YjhiIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-18 01:54:00', '2022-02-18 01:54:00', '109518443625550828853', 'google'),
(132, 'Pri', 'Ya', 'priyamagesh@gmail.com', 'Parent', NULL, '$2y$10$gzgp6u/vf0LTY7My0sHQKuCqat6kk4doGA4P9VgTidV/Gi/w.gJeG', NULL, 1, NULL, '2022-02-18 22:10:36', '2022-02-18 22:12:46', NULL, NULL),
(133, 'Kusuma kranti', NULL, 'sankrantikusuma2001@gmail.com', NULL, NULL, 'eyJpdiI6IjdHRmY3cVFhN2orLzd3R1g3UTNJOUE9PSIsInZhbHVlIjoiRmdJZDFZbEQyOWFMRVo0WjZxVW0rRGxGY2lCQ2I5V29sR0RsV1pvUm1Mbz0iLCJtYWMiOiI4Y2MxNzljNjc2N2VlOGY5YTc3MDgxY2U1YmY4NmQ5NjI4NDU4ZWM3MDZlOWVhYWQ3ZThjNmMxNjExMWQ2NmVlIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-19 00:49:08', '2022-02-19 00:49:08', '100702233408962410670', 'google'),
(134, 'Preethi Jain', NULL, 'preethijain9870@gmail.com', NULL, NULL, 'eyJpdiI6IjNYV2VYa0djTWdlbTBaV3NRSGJiU0E9PSIsInZhbHVlIjoiK2taUjJOT29DbU9aSGczUWFjeGtSV1UrajIwanA2Z0dsR3puckxNK1dkOD0iLCJtYWMiOiIwMTM1NzI1ZjBkOWRkNDcyYzdmNDUxNTYyNWMxMTRjNmI3YTc5YTNiZWE1NzdkMjU2YzdjYmIxYWVhMTAyNTEyIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-19 01:11:33', '2022-02-19 01:11:33', '101608333421132255563', 'google'),
(135, 'Sudhavani', 'Singavarapu', 'ssudhavani@yahoo.com', 'Parent', NULL, '$2y$10$RhBwj8lszBIVrszbWXHhpOPpoqjX8UoNsGE8l.zUpjpN.5bsKr7wO', NULL, 1, NULL, '2022-02-19 22:57:45', '2022-02-19 22:58:17', NULL, NULL),
(136, 'Jyothi', 'Natarajan', 'jyothinatarajan@yahoo.com', 'Parent', NULL, '$2y$10$mPSjMxf5sGib512.8QHI9e93OvOnQHGVH4aaLhsWIjIqaBrV4n92q', NULL, 1, NULL, '2022-02-20 01:36:41', '2022-02-20 01:38:23', NULL, NULL),
(137, 'Helen T', NULL, 'helent9879@gmail.com', NULL, NULL, 'eyJpdiI6IkxwVnU1Wk9SQVQyRmM1Nk9BaTZuNXc9PSIsInZhbHVlIjoiNEZyaVRVVWVIdEJiYWQ5VTVRakRYZ0lqTzFFdmpzeE01QzkyMnBIdk1OUT0iLCJtYWMiOiI0NmZmM2I5MDhjOTEwODFmZWMwYzA3MWYxY2MwYzM0MDNjNjg5OTUwYzY4NGE4ZThjNDU1NGRiN2E1NjU5Y2MyIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-20 02:48:57', '2022-02-20 02:48:57', '109076122127409938957', 'google'),
(138, 'Ritu Chauhan', NULL, 'ritu.raghu@gmail.com', NULL, NULL, 'eyJpdiI6IlNpWVMxOTBoUG13SWoxc29kSnJnZHc9PSIsInZhbHVlIjoiTWg0UHcwZncvanNDamh4QjdZYWYvWWlwYmZack5sNXpCbVFBYVpzd2QzTT0iLCJtYWMiOiIxYTdiMWE1NjFhNTkwMWZiMDQwNWZjZDkxZGM2ZThhYWU0MmE5ODIzMzc3ZWE1ZDEyZjJjNmQyZDIxZmQ0MTFkIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-20 16:30:10', '2022-02-20 16:30:10', '10223312447693042', 'facebook'),
(139, 'Veena Vulchi', NULL, 'veenaprasad@gmail.com', NULL, NULL, 'eyJpdiI6ImJ5TjRXbXRyZXFwMkhZSC8xeVpTYVE9PSIsInZhbHVlIjoiMU9LRVBLYlJDVzEwZkVMS2F5NGRGUnk1NUh2V3FkTisyUFd3aTJ6aFg2QT0iLCJtYWMiOiJmYTZlZDQ5ZjIzZjAxYTRiYjE5NWFjNzBiZjFlZjIyNzI1YzdiMzU2YTNkYjVhODE2MzBmZDg4OTNjZDI4YTlkIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-22 05:51:43', '2022-02-22 05:51:43', '102983260022807011920', 'google'),
(140, 'Alfrieda Judson', NULL, 'alfrieda@gmail.com', NULL, NULL, 'eyJpdiI6InlJWlBlb1pyYW9BZmNyQkdpUU80amc9PSIsInZhbHVlIjoibklITEsxUU93UksyNjRrb3UxdlBlZklGWnNBT1U2a0Y5b1h1TkhqNW91Zz0iLCJtYWMiOiI5YzNkYzY0ODU4ZjE5ZjhlYjdkMjk4NjBhZTU4YTNhNTY1OTM5NjZjNjY1N2QyODkzN2VkM2NiMmI2OGM5Y2RkIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-02-22 22:50:33', '2022-02-22 22:50:33', '115016694322231201019', 'google'),
(141, 'pthuser2', 'user2', 'pthuser2@yopmail.com', 'Parent', NULL, '$2y$10$NXRquYMCbGGExJaspTdTseTexjg5uvOP05vqffnF4u4vFYyaTF7UG', NULL, 1, NULL, '2022-03-05 19:37:37', '2022-03-05 19:37:47', NULL, NULL),
(142, 'Sami', 'Peter', 'sami1060@yopmail.com', 'Parent', NULL, '$2y$10$OedrurUyEji5BNF.j5Gdu.fKXg/q4TdS.Mk1VzDil3Ep1Dun6KnXu', NULL, 1, NULL, '2022-03-06 02:54:52', '2022-03-06 02:55:01', NULL, NULL),
(143, 'sahiti agarwal', NULL, 'sahitia309@gmail.com', NULL, NULL, 'eyJpdiI6ImRWdW0yQ1ZTV0xXMUNRTlVtKy9UeHc9PSIsInZhbHVlIjoiTzQycUJZNEs4QnFXQ2VCMmRveFA0am0zcE04T0hKZUYxQytLcWZoYWxJND0iLCJtYWMiOiI2NmVhMDViNDljYzg5ZTJiM2FiZjUyYjU3OWU5ZjM2OTJmMGUwODMwNTY0ZWI1OTAyNDZkNTVjY2FiNjU2NTE4IiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-03-06 03:03:29', '2022-03-06 03:03:29', '111254257469396725925', 'google'),
(144, 'Rubin A', NULL, 'rubinandy2050@gmail.com', NULL, NULL, 'eyJpdiI6IkM4SjZMcHUvZUdXUVN0L0w1VkpNK2c9PSIsInZhbHVlIjoiK1R2M3hGRjlLK3p5eXN3SytFV1pSQXhIWkFtYW5pRTBadWs3QjJ1TUpnbz0iLCJtYWMiOiI5NjVjODU0ODMzNTQxM2Y4MWU0YmUzM2I0ZWQyMWFjYzI0MTUzMWM0ZDVlNTJhZWEwYmE2NDU2N2UzYjI5NmNlIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-03-06 03:11:01', '2022-03-06 03:11:01', '117867645044294526872', 'google'),
(145, 'Rajit', 'v', 'rajit2020@yopmail.com', 'Student', NULL, '$2y$10$/I.ZQAxB.H/UHT0qiapRgOz7CVEGss7SHUH7M1yeEF0cHcmYVq/v6', NULL, 1, NULL, '2022-03-06 03:48:01', '2022-03-06 03:48:11', NULL, NULL),
(146, 'Anu', 'Prakash', 'anuprakash@yopmail.com', 'Parent', NULL, '$2y$10$SD4FCAc9xlohJStnI8p37uCGYnDko7jaP..yRvGlN0OcghSZw7iyC', NULL, 1, NULL, '2022-03-06 05:47:33', '2022-03-06 05:47:41', NULL, NULL),
(147, 'Mike', 'Mike', 'mikes@yopmail.com', 'Student', NULL, '$2y$10$Il.Km9Cz94oDw75FE3H8h.rQaQN1kW2VOJnE0dkE2MttVCkybhljG', NULL, 1, NULL, '2022-03-06 05:49:18', '2022-03-06 05:49:46', NULL, NULL),
(148, 'Kalpana', 'Shankar', 'kalpanashankar@yopmail.com', 'Parent', NULL, '$2y$10$39PUt.D8n.itT.sVilZ6.OGa9/k4bORQcMSAnEp3Fg.Sp/0If/3NG', NULL, 1, NULL, '2022-03-06 06:30:55', '2022-03-06 06:31:05', NULL, NULL),
(149, 'soma choudhury', NULL, 'somachoudhury2050@gmail.com', NULL, NULL, 'eyJpdiI6IlNnVUlobTl6NHozdld4dEJLNzEybGc9PSIsInZhbHVlIjoieFhlZVFLdk50WEdUeFYxSkZMUjhRaFdpaldzZkwwOVdKZ2RuL29EOWVtVT0iLCJtYWMiOiI2MGY3OTFmYzM1MmFiMjg2N2ZiZjZkNTM3Nzg4ZWEzNDE1YzIzZGRlYTc1YWZiMTYzYzI4NjNiMDRmMGJiODgzIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-03-06 18:41:24', '2022-03-06 18:41:24', '103438857099435891897', 'google'),
(150, 'Shweta', 'Rao', 'shwetarao9110@yopmail.com', 'Parent', NULL, '$2y$10$pvoq2fuZ7gKohAvzXSJU8.V80qrDaVK6XF04nZgbPSl2AmA0oTLK2', NULL, 1, NULL, '2022-03-06 19:10:00', '2022-03-06 19:10:08', NULL, NULL),
(151, 'Supraja', 'Swamy', 'suprajaswamy@yopmail.com', 'Parent', NULL, '$2y$10$ulHyTrbCyrEe3VghRGvlJOjcAS0KzViIuQ7w2DA4XHM6TCsNO1.jC', NULL, 1, NULL, '2022-03-06 19:19:01', '2022-03-06 19:19:23', NULL, NULL),
(152, 'Amy', 'C', 'amyc@yopmail.com', 'Parent', NULL, '$2y$10$u8qGNWVvnUBJqwDTtGV.o.9MF2J8lBExoHeuJB.gp5Fseg8EC8Ila', NULL, 1, NULL, '2022-03-06 19:40:39', '2022-03-06 19:40:59', NULL, NULL),
(153, 'Lisa', 'R', 'lisar1@yopmail.com', 'Parent', NULL, '$2y$10$4esfvQBnGWyWlfjyrx2mSORAsMP4yScEDN8T/MqKCz7YijtZzphb.', NULL, 1, NULL, '2022-03-06 19:56:45', '2022-03-06 19:56:52', NULL, NULL),
(154, 'Sue', 'W', 'suewallace@yopmail.com', 'Parent', NULL, '$2y$10$3oOI2v2SuldH.9k5RgARr.pepmKNMgaflpdCHej3VK2SG4UsqxFs6', NULL, 1, NULL, '2022-03-06 20:04:55', '2022-03-06 20:05:03', NULL, NULL),
(155, 'Kavitha', 'Palakurthy', 'kavithapalakurthy@yopmail.com', 'Parent', NULL, '$2y$10$pOySPcJEwYlEs/0hewrFee60CJCU62RUXwgHzkxd5YSpcSXgkfFPO', NULL, 1, NULL, '2022-03-06 20:19:21', '2022-03-06 20:19:25', NULL, NULL),
(156, 'Reecha', 'Sharma', 'reechasharma@yopmail.com', 'Parent', NULL, '$2y$10$eSN1njrfMmXZW2fYTQzU6uFy4gpwsiXmsG4Rn13et0LKqRTm16xG.', NULL, 1, NULL, '2022-03-06 20:36:16', '2022-03-06 20:36:31', NULL, NULL),
(157, 'Rachana', 'Reddy', 'rachanareddy@yopmail.com', 'Parent', NULL, '$2y$10$GiFaBq4G80hJop.DIxT8XeRsWOPEx3XFerYCJgVvUPXE3OCtyqxu6', NULL, 1, NULL, '2022-03-06 20:44:35', '2022-03-06 20:44:57', NULL, NULL),
(158, 'Manish', 'Chandra', 'manishchandra@yopmail.com', 'Parent', NULL, '$2y$10$EspDT.oYdTW0sr9FTghCAuCH2Nbq3eszoWn4I/I4DBSTZVvVPC6/C', NULL, 1, NULL, '2022-03-06 20:55:49', '2022-03-06 20:56:14', NULL, NULL),
(159, 'Sunita', 'K', 'sunitak@yopmail.com', 'Parent', NULL, '$2y$10$8xiXzlDw5ohwLj6xjNKTFezYXVPj45tRyOCKgKLih9QP7K1fqN.cq', NULL, 1, NULL, '2022-03-06 22:57:26', '2022-03-06 22:57:33', NULL, NULL),
(160, 'Pragyna', 'Avasarala', 'pragnyaavasarala@yopmail.com', 'Parent', NULL, '$2y$10$ngvZGlh//r8yBcGS7BCniOa7IWov2qkSk753hnIBRcO6XhhIcMzwq', NULL, 1, NULL, '2022-03-06 23:13:30', '2022-03-06 23:13:37', NULL, NULL),
(161, 'Jyothika', 'S', 'jyothikas@yopmail.com', 'Parent', NULL, '$2y$10$Sq3dz4tj9VPGnpTYvicePuakr8zwp24mLHf16eJpekWfZgfzbkcxm', NULL, 1, NULL, '2022-03-07 03:05:30', '2022-03-07 03:05:40', NULL, NULL),
(162, 'Suparna', 'M', 'suparnam@yopmail.com', 'Parent', NULL, '$2y$10$Dq2rnO7Xns5zOPn9W5Z2eenyBMBDYPEfhfcH.k/IegWpEeH81e2I6', NULL, 1, NULL, '2022-03-07 03:18:21', '2022-03-07 03:18:26', NULL, NULL),
(163, 'Faria', 'M', 'fariam@yopmail.com', 'Parent', NULL, '$2y$10$eoGM/3TNo6nzeu81cMfliOsWCM6jWDYhgtV/qZwamGUMvQdxu17gi', NULL, 1, NULL, '2022-03-07 03:28:50', '2022-03-07 03:28:57', NULL, NULL),
(164, 'Janie', 'D', 'Jamiel@yopmail.com', 'Parent', NULL, '$2y$10$gkKzJmairHhul73xQ0.AwO9uHu3/FGhW5yVsyhL/s0tvH3KTCOFEC', NULL, 1, NULL, '2022-03-07 03:39:28', '2022-03-07 03:43:15', NULL, NULL),
(165, 'Paula', 'M', 'paulam@yopmail.com', 'Parent', NULL, '$2y$10$DGz6KLiPRz/TIuvNrKBRHud1tFoDZVcSLx8GkCPJWR8tW2Fu8xPJC', NULL, 0, NULL, '2022-03-07 04:42:28', '2022-03-07 04:42:28', NULL, NULL),
(166, 'Paula', 'S', 'paulas@yopmail.com', 'Parent', NULL, '$2y$10$FezNqTG5em1FHtKTbwdfq.Cy9lJQR4n0JsGaW2ucECb7d8gb4Pfvu', NULL, 1, NULL, '2022-03-07 04:49:41', '2022-03-07 04:49:48', NULL, NULL),
(167, 'Alex', 'Hey', 'Alexhey@yopmail.com', 'Student', NULL, '$2y$10$hMPNiJ/HlK/F5sVKqZQ.C.OoUcr9hpmZbTZOD71CSnZ7K1GuL9/lm', NULL, 1, NULL, '2022-03-07 06:48:22', '2022-03-07 06:48:32', NULL, NULL),
(169, 'cdscs', 'csdcs', 'sacdeaw@bfgf.com', 'dscscssw', NULL, '$2y$10$xvObWJcwaNO3m9XRqX9pD.ZXA/aWjfaiRGqSpJwNFWOL/YVWXDDba', NULL, 0, NULL, '2022-03-09 10:08:10', '2022-03-09 10:08:10', NULL, NULL),
(170, 'Swarnadwip Nath', NULL, 'pfswarnadwip@gmail.com', NULL, NULL, 'eyJpdiI6IlhOVncwQTBiMXlnQ210UEVHdEV2QVE9PSIsInZhbHVlIjoiRzdjUm5RdlIvcGw5T00ycjlsSHFRRXJ5RTBaS3dldEt6bU0wTU5GbXdzRT0iLCJtYWMiOiIxNGNjMzJhZDYyNjEzMTcwOTJjYzM4ZTE5NGQ5YTg0MmI3OWFmMWZkOWFjZDk2Mzc2OWMyNjM2OThlODI3ODJiIiwidGFnIjoiIn0=', NULL, 1, NULL, '2022-03-16 10:01:54', '2022-03-16 10:01:54', '100188141927881424282', 'google'),
(171, 'KK', 'Das', 'kk@yopmail.com', 'Parent', NULL, '$2y$10$AXLlvSqV4h7SMtoEit6fSupO/DzWcQeg56SBzZzkhZECuWz.a3lnu', NULL, 1, NULL, '2022-03-26 07:10:11', '2022-03-26 07:10:45', NULL, NULL),
(172, 'Ram', 'Das', 'ram@yopmail.com', 'Parent', NULL, '$2y$10$BxgKBZW5rwjY9JueB84sZebiH01Lpp2EseZarbpmQGOTTGJfbvyva', NULL, 0, NULL, '2022-03-26 08:01:30', '2022-03-26 08:01:30', NULL, NULL),
(173, 'dd', 'ss', 'salu@yopmail.com', NULL, NULL, '$2y$10$T0gveeAQaRbud5DcKzXCGuH9Rst0fhTC1I6oNeLtrpWOeyvgs/9.m', NULL, 0, NULL, '2022-03-26 08:06:42', '2022-03-26 08:06:42', NULL, NULL),
(174, 'hello', 'hi', 'hello@yopmail.com', 'Student', NULL, '$2y$10$nq7RIy0y/7uWlNEjuxEtauNJ6sbKc.C0MISwjHeB.RL8cdJkMLPf2', NULL, 0, NULL, '2022-04-08 13:53:19', '2022-04-08 13:53:19', NULL, NULL),
(175, 'Shyamashree', 'Raha', 'shyamashree@yopmail.com', 'student', NULL, '$2y$10$1iwXdaqd/1Iwb/wlAQCE9.r4tTpN/VYYRN3UwSRtRv1882R05CIzG', NULL, 1, NULL, '2022-04-27 11:03:15', '2022-04-27 11:03:50', NULL, NULL),
(176, 'Diksha', 'Das', 'diksha123@yopmail.com', 'Parent', NULL, '$2y$10$oCYOCVBWv/j36cOQatlKbu7gDkMyuvezKLlcZuxg2wN8lpzSNwa6m', NULL, 1, NULL, '2022-05-03 12:31:36', '2022-05-03 12:31:52', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_questions`
--

CREATE TABLE `user_questions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `question` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_questions`
--

INSERT INTO `user_questions` (`id`, `user_id`, `user_email`, `category`, `question`, `description`, `slug`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 'shibadruti@yopmail.com', 'first-try-edit', 'what is the purpose of this question upload form user?', 'This is demo question upload from user.', 'what-is-the-purpose-of-this-question-upload-form-user', '1639384379-accounting.webp', 'accept', '2021-12-13 03:02:59', '2021-12-13 04:30:16'),
(3, 1, 'uma@yopmail.com', 'add-new-category', 'cdscefvrtv', 'refreftr4g5465', NULL, '1640290234-(10).jpg', 'accept', '2021-12-23 20:10:34', '2021-12-23 20:18:20'),
(4, 9, 'pfswarnadwip@yopmail.com', 'first-try-edit', 'who are you??', 'jgkg', NULL, '1640614717-letter-s-splash-3D-model_600.jpg', 'accept', '2021-12-27 14:18:37', '2021-12-27 14:19:41'),
(5, 6, 'nanpal29003@gmail.com', 'first-try-edit', 'Test Question2', 'This is test question 2', NULL, '1640626528-Screen Shot 2021-12-27 at 9.32.33 AM.png', 'accept', '2021-12-27 17:35:28', '2022-01-07 01:17:38'),
(6, 6, 'nanpal29003@gmail.com', 'first-try-edit', 'What is PSAT?', 'Need details to understand PSAT', NULL, '1640670230-EXPLORE CLASSES ON.jpg', 'accept', '2021-12-28 05:43:50', '2021-12-28 05:44:33'),
(8, 6, 'nanpal29003@gmail.com', 'High-School-Topics', 'How to make cupcakes?', 'Looking for some good recipies', NULL, '1642131185-cupcake-gd95eaf03a_640.jpg', 'accept', '2022-01-14 03:33:05', '2022-01-14 03:34:25'),
(9, 6, 'nanpal29003@gmail.com', 'High-School-Topics', 'How to prepare for college?', 'I am looking for some College guidance.', NULL, '1642352294-cupcake-gd95eaf03a_640.jpg', 'accept', '2022-01-16 16:58:14', '2022-01-18 10:12:05'),
(10, 6, 'nanpal29003@gmail.com', 'High-School-Topics', 'What s PSAT?', NULL, NULL, NULL, 'accept', '2022-01-17 21:36:47', '2022-01-17 21:37:52'),
(13, 43, 'srotosrini@yopmail.com', 'High-School-Topics', 'xfgxfrgdfgfg', 'tuyfuyhjfgyhgvnhv', NULL, NULL, 'deny', '2022-01-20 07:49:25', '2022-02-01 22:01:18'),
(22, 46, 'diksha1@yopmail.com', 'Middle-School-Topics', 'I need to know how to apply for Foreign University', 'Can you guys please explain me step by step ?', NULL, '1642790647-pexels-photo-674010.jpeg', 'deny', '2022-01-21 18:44:07', '2022-01-21 19:00:59'),
(23, 46, 'diksha1@yopmail.com', 'High-School-Topics', 'Where I can find best B school in Los Angeles?', 'Can you guys recommend me some top\r\nSuggestions', NULL, '1642792997-pexels-photo-674010.jpeg', 'deny', '2022-01-21 19:23:17', '2022-01-21 19:30:19'),
(24, 1, 'uma@yopmail.com', 'college-related-topics', 'Is this for demo upload?', 'Yo', NULL, '1642836950-img3.jpg', 'accept', '2022-01-22 07:35:50', '2022-01-22 07:38:06'),
(25, 1, 'uma@yopmail.com', 'academic', 'This is example question', 'How can you answer ?', NULL, '1642837593-demo.jpg', 'deny', '2022-01-22 07:46:33', '2022-02-01 22:01:15'),
(26, 1, 'uma@yopmail.com', 'college-related-topics', 'nhfghn fty', 'dfnbdctgrhftrt6', NULL, '1642859625-business.jpg', 'accept', '2022-01-22 13:53:45', '2022-01-23 06:17:27'),
(27, 47, 'jasonu@yopmail.com', 'High-School-Topics', 'Test 17', 'Test 17', NULL, NULL, 'deny', '2022-01-23 06:12:29', '2022-01-23 06:16:26'),
(32, 49, 'jinki@yopmail.com', 'academic', 'How to be successful in everything you do?', 'Successful People', NULL, NULL, 'deny', '2022-02-01 13:56:03', '2022-02-01 19:41:20'),
(34, 51, 'rajt1@yopmail.com', 'High-School-Topics', 'Test 17', 'efhgqljwfebasmdfnasmdvnasm.dvnasmdvnas.dmc\r\nasd,fbas,dfmnasd.f,mnasd,f\r\nsdfbas,dfnsa.dm,f\r\ndfbasd.fnasd,f\r\nsdfbsamdfns.d\r\nsdfbas,dmfnsd,f\r\nsdfbsjdfn', NULL, NULL, 'deny', '2022-02-01 19:47:03', '2022-02-01 22:00:49'),
(36, 52, 'Preetis@yopmail.com', 'Middle-School-Topics', 'What is MAP? How does this program look like in SRVUSD?', 'We recently moved to San Ramon and are looking for details to understand math advancement in SRVUSD.', NULL, NULL, 'accept', '2022-02-02 00:52:51', '2022-02-02 00:53:28'),
(37, 1, 'uma@yopmail.com', 'Middle-School-Topics', 'cewsfces', 'vdser', NULL, NULL, 'deny', '2022-02-03 15:22:23', '2022-02-04 01:22:33'),
(39, 41, 'neelima.tapata@gmail.com', 'Competitions', 'Where can I find study materials for the spelling bee?', NULL, NULL, '1643957467-Bee.png', 'accept', '2022-02-04 06:51:07', '2022-02-04 06:52:55'),
(40, 41, 'neelima.tapata@gmail.com', 'Competitions', 'How to know if our school is enrolled in the Spelling Bee?', NULL, NULL, '1643957738-Bee.png', 'accept', '2022-02-04 06:55:38', '2022-02-04 06:58:03'),
(41, 41, 'neelima.tapata@gmail.com', 'Competitions', 'How do schools enroll their school in the Spelling Bee?', NULL, NULL, NULL, 'accept', '2022-02-04 06:59:16', '2022-02-04 07:03:21'),
(42, 41, 'neelima.tapata@gmail.com', 'Competitions', 'What is the list of 2022 Words of the Champions for Spelling Bee ?', NULL, NULL, NULL, 'accept', '2022-02-04 06:59:34', '2022-02-04 07:03:01'),
(43, 41, 'neelima.tapata@gmail.com', 'Competitions', 'What is The Scripps National Spelling Bee Contest?', NULL, NULL, NULL, 'accept', '2022-02-04 06:59:52', '2022-02-04 07:02:38'),
(44, 41, 'neelima.tapata@gmail.com', 'Competitions', 'Who is eligible to take the AMC 10 and the AMC 12?', NULL, NULL, NULL, 'accept', '2022-02-04 07:00:12', '2022-02-04 07:01:51'),
(45, 52, 'Preetis@yopmail.com', 'Competitions', 'What material is covered on the AMC 10 and 12?', NULL, NULL, NULL, 'accept', '2022-02-04 23:24:42', '2022-02-04 23:26:43'),
(46, 52, 'Preetis@yopmail.com', 'Competitions', 'How to prepare for AMC 8?', NULL, NULL, NULL, 'accept', '2022-02-04 23:25:04', '2022-02-04 23:26:29'),
(47, 52, 'Preetis@yopmail.com', 'Competitions', 'When do we get official scores and reports for the AMC 8?', NULL, NULL, NULL, 'accept', '2022-02-04 23:25:24', '2022-02-04 23:26:01'),
(48, 55, 'Jyothi212@yopmail.com', 'High-School-Topics', 'Are PSAT scores sent to colleges?', NULL, NULL, NULL, 'accept', '2022-02-04 23:30:25', '2022-02-04 23:32:22'),
(49, 55, 'Jyothi212@yopmail.com', 'High-School-Topics', 'When will the PSAT scores be available?', NULL, NULL, NULL, 'accept', '2022-02-04 23:31:13', '2022-02-04 23:32:09'),
(50, 56, 'Ravi212@yopmail.com', 'general', 'What curriculum does RSM follow? Would you recommend enrolling my child in RSM?', NULL, NULL, NULL, 'accept', '2022-02-04 23:35:39', '2022-02-04 23:36:56'),
(51, 56, 'Ravi212@yopmail.com', 'Middle-School-Topics', 'Can you please share your experience with advancing kids in math in middle school?', NULL, NULL, NULL, 'accept', '2022-02-04 23:36:05', '2022-02-04 23:36:45'),
(52, 52, 'Preetis@yopmail.com', 'Middle-School-Topics', 'How are math summer bridge programs for advancement in middle school at SRVUSD?', NULL, NULL, NULL, 'accept', '2022-02-04 23:39:10', '2022-02-04 23:40:23'),
(53, 57, 'Rupa212@yopmail.com', 'Middle-School-Topics', 'Can my child take the PSAT in 8th grade?', NULL, NULL, NULL, 'accept', '2022-02-04 23:42:19', '2022-02-04 23:42:36'),
(54, 57, 'Rupa212@yopmail.com', 'High-School-Topics', 'What is the scoring for PSAT?', NULL, NULL, NULL, 'accept', '2022-02-04 23:44:30', '2022-02-04 23:44:52'),
(55, 58, 'Nikhita212@yopmail.com', 'academic', 'Are charter schools public schools?', NULL, NULL, NULL, 'accept', '2022-02-06 18:16:30', '2022-02-06 18:22:27'),
(56, 52, 'Preetis@yopmail.com', 'Competitions', 'What are Math Kangaroo levels?', NULL, NULL, NULL, 'accept', '2022-02-06 18:17:43', '2022-02-06 18:22:11'),
(57, 52, 'Preetis@yopmail.com', 'Recommendations', 'Can you please suggest a good violin teacher for 10 year old beginner?', NULL, NULL, NULL, 'accept', '2022-02-06 18:19:54', '2022-02-06 18:21:56'),
(58, 58, 'Nikhita212@yopmail.com', 'academic', 'What is a Charter school?', NULL, NULL, NULL, 'accept', '2022-02-06 18:24:15', '2022-02-06 18:26:00'),
(59, 52, 'Preetis@yopmail.com', 'Competitions', 'How long is the Math Kangaroo test?', 'Can young children sit through the test and take this test? What is a good age to start this test?', NULL, NULL, 'accept', '2022-02-06 18:30:29', '2022-02-06 18:31:00'),
(60, 41, 'neelima.tapata@gmail.com', 'Competitions', 'What is the minimum age to participate in the AMC program?', NULL, NULL, NULL, 'accept', '2022-02-07 03:25:47', '2022-02-07 03:26:10'),
(61, 41, 'neelima.tapata@gmail.com', 'High-School-Topics', 'How long is the SAT test and how many questions are there on the test?', NULL, NULL, NULL, 'accept', '2022-02-07 04:59:26', '2022-02-07 05:08:05'),
(62, 41, 'neelima.tapata@gmail.com', 'High-School-Topics', 'Where can I find a practice test for PSAT 10?', NULL, NULL, NULL, 'accept', '2022-02-07 05:08:56', '2022-02-07 05:09:22'),
(64, 41, 'neelima.tapata@gmail.com', 'High-School-Topics', 'Is there a penalty for guessing in the SAT test?', NULL, NULL, NULL, 'accept', '2022-02-07 05:13:22', '2022-02-07 05:13:40'),
(65, 63, 'Emily212@yopmail.com', 'High-School-Topics', 'What are AP classes?', NULL, NULL, NULL, 'accept', '2022-02-10 02:00:50', '2022-02-10 02:17:57'),
(66, 63, 'Emily212@yopmail.com', 'High-School-Topics', 'What are the advantages of taking AP classes? Do kids get college credit for taking the AP classes?', NULL, NULL, NULL, 'accept', '2022-02-10 02:01:58', '2022-02-10 02:16:38'),
(67, 63, 'Emily212@yopmail.com', 'High-School-Topics', 'What is the difference between honors and AP classes?', NULL, NULL, NULL, 'accept', '2022-02-10 02:02:18', '2022-02-10 02:18:41'),
(68, 64, 'Jashua399@yopmail.com', 'High-School-Topics', 'Is digital SAT more stressful? Any good tests online to prepare for digital exam?', NULL, NULL, NULL, 'accept', '2022-02-10 02:09:20', '2022-02-10 02:16:16'),
(69, 65, 'supraja399@yopmail.com', 'preschool', 'How do I encourage sharing with my toddler? He loves to play but is having difficulty sharing toys.', NULL, NULL, NULL, 'accept', '2022-02-10 02:14:33', '2022-02-10 02:16:58'),
(70, 65, 'supraja399@yopmail.com', 'preschool', 'Can you please recommend good preschools in Dublin area?', NULL, NULL, NULL, 'accept', '2022-02-10 02:15:01', '2022-02-10 02:18:59'),
(72, 1, 'uma@yopmail.com', 'general', 'Demo upload question for edit', 'This is just demo upload question for checking the edit functionality.', NULL, '1644912972-trouser-3.jpeg', 'accept', '2022-02-15 08:16:12', '2022-02-15 08:17:29'),
(73, 54, 'saka.neelima@gmail.com', 'Elelmentary-School-Topics', 'What is the best time to introduce soccer?', NULL, NULL, NULL, 'deny', '2022-02-15 22:50:59', '2022-02-15 22:51:16'),
(74, 59, 'sakaanil@gmail.com', 'general', 'Anyone aware of Certified/Program oriented  Online Chess Clubs for Kids', 'Chess Clubs', NULL, NULL, 'accept', '2022-02-15 22:56:50', '2022-02-15 23:00:21'),
(75, 130, 'Poorna301@yopmail.com', 'Middle-School-Topics', 'What books should I use for middle school MAP program?', 'Any recommendations are appreciated.', NULL, NULL, 'accept', '2022-02-17 01:19:49', '2022-02-17 01:21:28'),
(76, 3, 'nanpal29004@gmail.com', 'High-School-Topics', 'Hi, we are trying to decide between IB program and AP program for my son. Is one better than the other for colleges? Please moms share your experience.', NULL, NULL, NULL, 'accept', '2022-02-17 02:12:37', '2022-02-17 02:15:08'),
(77, 3, 'nanpal29004@gmail.com', 'High-School-Topics', 'We are looking for college counselors in Bay area. Any recommendations? We are looking for reasonable priced and good counselors.', NULL, NULL, NULL, 'accept', '2022-02-17 02:14:09', '2022-02-17 02:16:03'),
(78, 131, 'manjulasekar902@gmail.com', 'college-related-topics', 'I am looking for good resources where I can find more information about college financial aid. If you have any information that you can share that would be helpful.', NULL, NULL, NULL, 'accept', '2022-02-18 02:05:51', '2022-02-18 02:06:41'),
(79, 133, 'sankrantikusuma2001@gmail.com', 'Elelmentary-School-Topics', 'Trying to decide between RSM, Mathnasium and Kumon for my 1st grader. Any suggestions?', NULL, NULL, NULL, 'accept', '2022-02-19 00:50:30', '2022-02-19 00:51:28'),
(80, 134, 'preethijain9870@gmail.com', 'Elelmentary-School-Topics', 'I understand private schools are better but is there any difference in curriculum followed between the schools?', NULL, NULL, NULL, 'accept', '2022-02-19 01:13:01', '2022-02-19 01:13:29'),
(81, 42, 'quickmints@gmail.com', 'High-School-Topics', 'What score is considered a good score for SAT?', NULL, NULL, NULL, 'accept', '2022-02-20 01:04:58', '2022-02-20 01:05:24'),
(82, 42, 'quickmints@gmail.com', 'High-School-Topics', 'How the SAT Is Scored?', NULL, NULL, NULL, 'accept', '2022-02-20 01:10:51', '2022-02-20 01:11:11'),
(83, 42, 'quickmints@gmail.com', 'college-related-topics', 'How common is it to change college majors while in college?', NULL, NULL, NULL, 'accept', '2022-02-20 01:17:57', '2022-02-20 01:18:43'),
(84, 42, 'quickmints@gmail.com', 'college-related-topics', 'How many college freshmen are undecided?', NULL, NULL, NULL, 'accept', '2022-02-20 01:24:26', '2022-02-20 01:24:48'),
(85, 42, 'quickmints@gmail.com', 'college-related-topics', 'What are the top 10 majors at UC Davis in 2021?', NULL, NULL, NULL, 'accept', '2022-02-20 01:28:53', '2022-02-20 01:29:32'),
(86, 42, 'quickmints@gmail.com', 'Elelmentary-School-Topics', 'What are good sources for finding school ratings?', NULL, NULL, NULL, 'accept', '2022-02-20 01:36:27', '2022-02-20 01:36:48'),
(87, 42, 'quickmints@gmail.com', 'general', 'Where can I find information about schools in United States?', NULL, NULL, NULL, 'accept', '2022-02-20 01:41:48', '2022-02-20 01:42:25'),
(88, 42, 'quickmints@gmail.com', 'general', 'Where can I find information about school districts?', NULL, NULL, NULL, 'accept', '2022-02-20 01:45:30', '2022-02-20 01:45:49'),
(89, 42, 'quickmints@gmail.com', 'general', 'How many states in US are following Common Core Standards?', NULL, NULL, NULL, 'accept', '2022-02-20 01:52:16', '2022-02-20 01:52:33'),
(90, 42, 'quickmints@gmail.com', 'general', 'What is the common core?', NULL, NULL, NULL, 'accept', '2022-02-20 01:56:57', '2022-02-20 01:57:14'),
(91, 42, 'quickmints@gmail.com', 'general', 'Where can I find the Common Core State Standards for ELA and mathematics?', NULL, NULL, NULL, 'accept', '2022-02-20 02:00:11', '2022-02-20 02:01:23'),
(92, 42, 'quickmints@gmail.com', 'general', 'Why are the Common Core State Standards only for English language arts and math?', NULL, NULL, NULL, 'accept', '2022-02-20 02:04:06', '2022-02-20 02:04:38'),
(93, 42, 'quickmints@gmail.com', 'general', 'What is CAASPP?', NULL, NULL, NULL, 'accept', '2022-02-20 02:12:57', '2022-02-20 02:13:24'),
(94, 42, 'quickmints@gmail.com', 'academic', 'What are the Pros and Cons of sending kids to private school?', NULL, NULL, NULL, 'accept', '2022-02-20 02:20:37', '2022-02-20 02:20:58'),
(95, 42, 'quickmints@gmail.com', 'academic', 'Which grade levels participate in smarter balanced summative assessments?', NULL, NULL, NULL, 'accept', '2022-02-20 02:28:39', '2022-02-20 02:29:12'),
(96, 137, 'helent9879@gmail.com', 'Recommendations', 'Can you recommend best basketball classes nearby for a 9 year old?', NULL, NULL, NULL, 'accept', '2022-02-20 02:50:50', '2022-02-20 02:51:17'),
(97, 1, 'uma@yopmail.com', 'Home', 'Demo question for test.', 'yoo', NULL, '1645510623-nginx.png', 'accept', '2022-02-22 06:17:03', '2022-02-22 06:19:59'),
(99, 131, 'manjulasekar902@gmail.com', 'High School', 'When will digital SAT start?', NULL, NULL, NULL, 'accept', '2022-03-06 02:35:08', '2022-03-06 02:39:43'),
(100, 131, 'manjulasekar902@gmail.com', 'college', 'Would skipping AP Calc AB and going to BC after PreCalc okay? How rigorous is AP Calc BC?', NULL, NULL, NULL, 'accept', '2022-03-06 02:37:47', '2022-03-06 02:39:19'),
(101, 142, 'sami1060@yopmail.com', 'High School', 'For foreign language selection which language is easier to learn and any benefits of learning one language over the other?', NULL, NULL, NULL, 'accept', '2022-03-06 02:58:00', '2022-03-06 02:58:24'),
(102, 143, 'sahitia309@gmail.com', 'college', 'How much does a 4 year college cost in California? What are all the costs that we need to plan for?', NULL, NULL, NULL, 'accept', '2022-03-06 03:04:23', '2022-03-06 03:04:58'),
(103, 144, 'rubinandy2050@gmail.com', 'college', 'What are the best Engineering colleges in California?', NULL, NULL, NULL, 'accept', '2022-03-06 03:12:41', '2022-03-06 03:50:51'),
(104, 144, 'rubinandy2050@gmail.com', 'Preschool', 'We are trying to figure out if sending our 5 year to after school program is good or have a nanny come home. We want to keep her home if possible so she can stay with her brother and it will help with expenses but we are worried she will miss out learning other things. Any suggestions', NULL, NULL, NULL, 'accept', '2022-03-06 03:23:16', '2022-03-06 03:23:52'),
(105, 145, 'rajit2020@yopmail.com', 'High School', 'How many AP classes should I take? If I take more AP classes will it help with my college admissions?', NULL, NULL, NULL, 'accept', '2022-03-06 03:50:26', '2022-03-06 03:51:13'),
(106, 147, 'mikes@yopmail.com', 'High School', 'How to prepare for AP exam? Any tips or ways to help prepare and ace the test?', NULL, NULL, NULL, 'accept', '2022-03-06 05:54:22', '2022-03-06 05:56:29'),
(107, 146, 'anuprakash@yopmail.com', 'Preschool', 'Hi.. my daughter is 4 years old and is a slow learner. How can I help her?', NULL, NULL, NULL, 'accept', '2022-03-06 06:13:43', '2022-03-06 06:14:00'),
(108, 146, 'anuprakash@yopmail.com', 'Preschool', 'Can you recommend some books to read for a 4 year old?', NULL, NULL, NULL, 'accept', '2022-03-06 06:15:49', '2022-03-06 06:16:08'),
(109, 148, 'kalpanashankar@yopmail.com', 'middleschool', 'Is accelerating math in summer and taking Algebra 1 in Grade 7 a good idea for my current sixth grader. Please advice.', NULL, NULL, NULL, 'accept', '2022-03-06 06:34:47', '2022-03-06 06:35:06'),
(110, 149, 'somachoudhury2050@gmail.com', 'middleschool', 'Are middle school counselors helpful? What questions can we ask the counselors and how much time will they give for each student?', '-', NULL, NULL, 'accept', '2022-03-06 18:43:35', '2022-03-06 18:46:00'),
(111, 57, 'Rupa212@yopmail.com', 'Elementary', 'Can anyone share how Beast Academy compares to Russian Math?', NULL, NULL, NULL, 'accept', '2022-03-06 18:49:49', '2022-03-06 18:52:34'),
(112, 149, 'somachoudhury2050@gmail.com', 'Elementary', 'What are the best resources for creative writing? I am looking for free or paid resources that can be used at home.', NULL, NULL, NULL, 'accept', '2022-03-06 18:51:47', '2022-03-06 18:52:52'),
(113, 55, 'Jyothi212@yopmail.com', 'High School', 'Is it good to take SAT or ACT even if applying to test optional schools. Will taking the test be helpful in any way?', NULL, NULL, NULL, 'accept', '2022-03-06 19:01:42', '2022-03-06 19:02:12'),
(114, 55, 'Jyothi212@yopmail.com', 'college', 'Would test optional mean colleges will not consider SAT or ACT scores at all, or they are just optional to submit?', NULL, NULL, NULL, 'accept', '2022-03-06 19:03:57', '2022-03-06 19:04:20'),
(115, 150, 'shwetarao9110@yopmail.com', 'Elementary', 'Any good software to teach typing for kids that they can use at home?', NULL, NULL, NULL, 'accept', '2022-03-06 19:11:48', '2022-03-06 19:14:02'),
(116, 150, 'shwetarao9110@yopmail.com', 'Elementary', 'I see many parents preparing their children for gifted program. Can you actually prepare for the program, if so how does it help if you pass the exam?', NULL, NULL, NULL, 'accept', '2022-03-06 19:13:20', '2022-03-06 19:13:44'),
(117, 151, 'suprajaswamy@yopmail.com', 'Elementary', 'Can you suggest some good reading books or online reading for my 3rd grader.', NULL, NULL, NULL, 'accept', '2022-03-06 19:20:36', '2022-03-06 19:22:47'),
(118, 151, 'suprajaswamy@yopmail.com', 'general', 'Is testingmom.com helpful? Did any one take membership in testing mom? If so can you share your experience?', NULL, NULL, NULL, 'accept', '2022-03-06 19:22:01', '2022-03-06 19:22:28'),
(119, 151, 'suprajaswamy@yopmail.com', 'High School', 'How does algebra 2 compare to advanced algebra 2? Will it be difficult for a freshman to cope up?', NULL, NULL, NULL, 'accept', '2022-03-06 19:34:37', '2022-03-06 19:35:12'),
(120, 152, 'amyc@yopmail.com', 'High School', 'How is your experience completing Geometry from BYU?', NULL, NULL, NULL, 'accept', '2022-03-06 19:45:39', '2022-03-06 19:46:02'),
(121, 152, 'amyc@yopmail.com', 'High School', 'How many years of languages should be completed for applying to UCs. Can we skip world language requirements?', NULL, NULL, NULL, 'accept', '2022-03-06 19:51:20', '2022-03-06 19:51:38'),
(122, 153, 'lisar1@yopmail.com', 'High School', 'What volunteer opportunities are good to consider for college planning?', '-', NULL, NULL, 'accept', '2022-03-06 19:57:59', '2022-03-06 19:58:59'),
(123, 154, 'suewallace@yopmail.com', 'High School', 'How many colleges should we plan to apply for? Is there an optimal number of colleges to apply for?', NULL, NULL, NULL, 'accept', '2022-03-06 20:08:58', '2022-03-06 20:10:01'),
(124, 154, 'suewallace@yopmail.com', 'High School', 'How much does it cost to apply for each college?', NULL, NULL, NULL, 'accept', '2022-03-06 20:09:21', '2022-03-06 20:09:45'),
(125, 155, 'kavithapalakurthy@yopmail.com', 'college', 'What is Gifted and Talented program? Can someone please help me understand its concept, and what exactly a child does and learns in this program.', NULL, NULL, NULL, 'accept', '2022-03-06 20:20:43', '2022-03-06 20:22:17'),
(126, 56, 'Ravi212@yopmail.com', 'general', 'Can you take gifted test in grade 3? How to get registered for the test? Can it be taken at any time?', NULL, NULL, NULL, 'accept', '2022-03-06 20:25:00', '2022-03-06 20:25:30'),
(127, 155, 'kavithapalakurthy@yopmail.com', 'general', 'Any apps or websites that can help a child learn Spanish? I am looking to introduce Spanish to my son to see if he will be interested to learn Spanish.', NULL, NULL, NULL, 'accept', '2022-03-06 20:28:03', '2022-03-06 20:28:27'),
(128, 156, 'reechasharma@yopmail.com', 'Preschool', 'What are the best ways to setup play dates for my preschoolers? Are there any apps or do you use facebook groups or nextdoor?', NULL, NULL, NULL, 'accept', '2022-03-06 20:38:11', '2022-03-06 20:38:40'),
(129, 157, 'rachanareddy@yopmail.com', 'general', 'At what age is it good to start college savings program? What are the best investment options to save for colleges?', NULL, NULL, NULL, 'accept', '2022-03-06 20:46:39', '2022-03-06 20:47:05'),
(130, 157, 'rachanareddy@yopmail.com', 'college', 'Is investing in a 529 plan good? Are there any other options for college savings? What are the benefits of investing in 529 college savings plan?', NULL, NULL, NULL, 'accept', '2022-03-06 20:53:25', '2022-03-06 23:03:45'),
(131, 158, 'manishchandra@yopmail.com', 'Elementary', 'I see a lot of posts about cogat test preparation for first graders. Kindly share how should I start preparing my child and how does it help?', NULL, NULL, NULL, 'accept', '2022-03-06 20:59:56', '2022-03-07 03:15:04'),
(132, 158, 'manishchandra@yopmail.com', 'general', 'Are the Math Kangaroo test books found on Amazon helpful? Please see the attachment.', NULL, NULL, '1646600631-Screen Shot 2022-03-06 at 1.03.13 PM.png', 'accept', '2022-03-06 21:03:51', '2022-03-06 21:10:56'),
(133, 158, 'manishchandra@yopmail.com', 'general', 'Is math olympiad available for a first grader? Is math kangaroo better or math olympiad? My kid loves and is very good in math for his age.', NULL, NULL, NULL, 'accept', '2022-03-06 21:05:43', '2022-03-07 03:24:23'),
(134, 158, 'manishchandra@yopmail.com', 'Elementary', 'How do Montessori schools compare to public schools? what is the curriculum they follow in Montessori? Is it worth spending money on Montessori school?', NULL, NULL, NULL, 'accept', '2022-03-06 21:28:20', '2022-03-06 22:33:26'),
(135, 158, 'manishchandra@yopmail.com', 'Elementary', 'Please suggest good reading programs and books for first grader.', NULL, NULL, NULL, 'accept', '2022-03-06 21:29:09', '2022-03-06 23:20:00'),
(136, 158, 'manishchandra@yopmail.com', 'general', 'When is a good age to start martial arts for kids?', NULL, NULL, NULL, 'accept', '2022-03-06 21:29:46', '2022-03-07 03:34:07'),
(137, 157, 'rachanareddy@yopmail.com', 'college', 'Can you please suggest what states are good for 529 plans?', NULL, NULL, NULL, 'accept', '2022-03-06 21:32:35', '2022-03-06 21:56:52'),
(138, 157, 'rachanareddy@yopmail.com', 'High School', 'Anyone has any recommendations on if AP Art History vs AP US Government?', NULL, NULL, NULL, 'accept', '2022-03-06 21:34:08', '2022-03-07 03:31:40'),
(139, 157, 'rachanareddy@yopmail.com', 'High School', 'How many APs are required to get into a good school?', NULL, NULL, NULL, 'accept', '2022-03-06 21:34:54', '2022-03-07 03:12:52'),
(140, 157, 'rachanareddy@yopmail.com', 'High School', 'Any advice on clubs and volunteer work to join in Freshman and Junior years?', NULL, NULL, NULL, 'accept', '2022-03-06 21:36:02', '2022-03-07 04:29:41'),
(141, 150, 'shwetarao9110@yopmail.com', 'Elementary', 'What is abacus method? Are any of your kids learning abacus? Is it useful in the long run or for math advancement?', NULL, NULL, NULL, 'accept', '2022-03-06 21:39:52', '2022-03-07 03:24:01'),
(142, 150, 'shwetarao9110@yopmail.com', 'Elementary', 'What is abacus method? Are any of your kids learning abacus? Is it useful in the long run or for math advancement?', NULL, NULL, NULL, 'accept', '2022-03-06 21:40:02', '2022-03-06 23:19:36'),
(143, 150, 'shwetarao9110@yopmail.com', 'Elementary', 'How does Abacus compare to Vedic math? Which method is more useful? I am looking for an y recommendations.', NULL, NULL, NULL, 'accept', '2022-03-06 21:43:34', '2022-03-07 03:15:43'),
(144, 148, 'kalpanashankar@yopmail.com', 'general', 'Does Abacus help with US math curriculum?', NULL, NULL, NULL, 'accept', '2022-03-06 21:51:42', '2022-03-06 23:10:39'),
(145, 148, 'kalpanashankar@yopmail.com', 'general', 'Does Russian Math help with advancement?', NULL, NULL, NULL, 'accept', '2022-03-06 21:52:14', '2022-03-07 03:32:07'),
(146, 148, 'kalpanashankar@yopmail.com', 'general', 'Band or Strings.. which one is better?', NULL, NULL, NULL, 'accept', '2022-03-06 21:54:19', '2022-03-06 21:56:03'),
(147, 148, 'kalpanashankar@yopmail.com', 'middleschool', 'Please recommend any good books for reading for my 6th grader.', NULL, NULL, NULL, 'accept', '2022-03-06 21:55:35', '2022-03-06 22:32:49'),
(148, 159, 'sunitak@yopmail.com', 'High School', 'Where can I find AP exam calendar? How to know when the AP exams are scheduled?', NULL, NULL, NULL, 'accept', '2022-03-06 22:59:15', '2022-03-06 23:03:18'),
(149, 159, 'sunitak@yopmail.com', 'High School', 'How many AP courses are available and how to find APs available for each subject type?', NULL, NULL, NULL, 'accept', '2022-03-06 23:00:22', '2022-03-07 03:34:28'),
(150, 159, 'sunitak@yopmail.com', 'High School', 'How are APs scored? Where can I find AP score table?', NULL, NULL, NULL, 'accept', '2022-03-06 23:02:20', '2022-03-06 23:02:48'),
(151, 159, 'sunitak@yopmail.com', 'High School', 'What are relatively easier AP courses to take?', NULL, NULL, NULL, 'accept', '2022-03-06 23:05:05', '2022-03-07 03:14:37'),
(152, 159, 'sunitak@yopmail.com', 'college', 'Is it good to take AP and get a B or higher grade or try to take honors or regular courses and be more confident to get an A?', NULL, NULL, NULL, 'accept', '2022-03-06 23:06:02', '2022-03-07 03:23:39'),
(153, 160, 'pragnyaavasarala@yopmail.com', 'High School', 'My son is more interested in social studies, history and political sciences.. what are good courses to take?', NULL, NULL, NULL, 'accept', '2022-03-06 23:15:43', '2022-03-07 03:13:22'),
(154, 160, 'pragnyaavasarala@yopmail.com', 'college', 'Any recommendations for colleges. We are interested in Political science majors.', NULL, NULL, NULL, 'accept', '2022-03-06 23:16:15', '2022-03-07 03:32:38'),
(155, 160, 'pragnyaavasarala@yopmail.com', 'High School', 'What clubs are good for leadership building?', NULL, NULL, NULL, 'accept', '2022-03-06 23:16:46', '2022-03-06 23:19:17'),
(156, 160, 'pragnyaavasarala@yopmail.com', 'High School', 'My high schoolers is interested in Political sciences path. How can I get him volunteer opportunities in this path?', NULL, NULL, NULL, 'accept', '2022-03-06 23:17:44', '2022-03-07 04:53:25'),
(157, 161, 'jyothikas@yopmail.com', 'High School', 'What does getting college credit mean? How do you get credits by doing advance placement?', NULL, NULL, NULL, 'accept', '2022-03-07 03:07:01', '2022-03-07 03:34:53'),
(158, 161, 'jyothikas@yopmail.com', 'High School', 'What are the AP courses available in Arts?', NULL, NULL, NULL, 'accept', '2022-03-07 03:08:00', '2022-03-07 03:37:33'),
(159, 161, 'jyothikas@yopmail.com', 'High School', 'What AP courses are available in history and social sciences?', NULL, NULL, NULL, 'accept', '2022-03-07 03:08:38', '2022-03-07 04:55:10'),
(160, 161, 'jyothikas@yopmail.com', 'High School', 'How is the GPA calculated? What are the ways of increasing GPA?', NULL, NULL, NULL, 'accept', '2022-03-07 03:10:01', '2022-03-07 04:29:58'),
(161, 161, 'jyothikas@yopmail.com', 'college', 'What are the various volunteer opportunities that high school students can explore?', NULL, NULL, NULL, 'accept', '2022-03-07 03:10:28', '2022-03-07 03:13:55'),
(162, 161, 'jyothikas@yopmail.com', 'High School', 'What does holistic admissions mean?', NULL, NULL, NULL, 'accept', '2022-03-07 03:11:51', '2022-03-07 03:12:27'),
(163, 162, 'suparnam@yopmail.com', 'High School', 'Are there any prerequisites for taking AP courses? I have a 7th grader and want to know if I need to do anything as a parent to prepare him?', NULL, NULL, NULL, 'accept', '2022-03-07 03:20:28', '2022-03-07 04:54:07'),
(164, 162, 'suparnam@yopmail.com', 'High School', 'I see a lot of my friends kids stressed out and working so hard taking so many APs\'s. How much weight do APs carry. I don\'t want my child to stress out if possible.', NULL, NULL, NULL, 'accept', '2022-03-07 03:21:45', '2022-03-07 03:25:38'),
(165, 162, 'suparnam@yopmail.com', 'general', 'What are some places to explore for middle schoolers in bay area?', NULL, NULL, NULL, 'accept', '2022-03-07 03:22:51', '2022-03-07 03:23:16'),
(166, 163, 'fariam@yopmail.com', 'High School', 'Is SAT better than ACT or ACT better than SAT? How do you compare SAT scores to ACT scores?', NULL, NULL, NULL, 'accept', '2022-03-07 03:30:23', '2022-03-07 03:32:55'),
(167, 163, 'fariam@yopmail.com', 'High School', 'Do colleges have a preference for SAT or ACT? Is taking one test better than the other?', NULL, NULL, NULL, 'accept', '2022-03-07 03:30:57', '2022-03-07 03:31:17'),
(168, 163, 'fariam@yopmail.com', 'college', 'How to apply for college financial aid? When will we know if we can receive financial aid?', NULL, NULL, NULL, 'accept', '2022-03-07 03:36:48', '2022-03-07 03:37:10'),
(169, 164, 'Jamiel@yopmail.com', 'general', 'What is a good age to introduce coding for kids? Any suggestions for good online coding academy?', NULL, NULL, NULL, 'accept', '2022-03-07 04:27:14', '2022-03-07 04:30:17'),
(170, 164, 'Jamiel@yopmail.com', 'Elementary', 'Is math or english enrichment classes necessary for elementary school? I see a lot of kids going to several classes? Is that necessary?', NULL, NULL, NULL, 'accept', '2022-03-07 04:28:37', '2022-03-07 04:29:15'),
(171, 164, 'Jamiel@yopmail.com', 'general', 'Any suggestions for preschoolers and elementary kids activities in bay area?', NULL, NULL, NULL, 'accept', '2022-03-07 04:32:10', '2022-03-07 04:55:36'),
(172, 166, 'paulas@yopmail.com', 'Elementary', 'Any good chess classes recommended for elementary kids? I am looking for a coach who can help my kid for the long run.', NULL, NULL, NULL, 'accept', '2022-03-07 04:51:30', '2022-03-07 04:54:28'),
(173, 166, 'paulas@yopmail.com', 'Elementary', 'Are Great Schools rating good? How to know the schools are good? Any other websites to get this information.', NULL, NULL, NULL, 'accept', '2022-03-07 04:52:43', '2022-03-07 04:53:43'),
(174, 1, 'uma@yopmail.com', 'middleschool', 'This is question 1', '<p>This is <strong>demo</strong> question.</p>', NULL, '1646810323-Winter-Jacket-Men-Parka-Fashion-Hooded-Jacket-Slim-Cotton-Warm-Jacket-Coat-Men-Solid-Colo-Thick__21141.1609419726.jpg', 'accept', '2022-03-09 07:18:43', '2022-03-09 14:49:50'),
(175, 157, 'rachanareddy@yopmail.com', 'college', 'Test', 'Test', NULL, NULL, 'pending', '2022-03-09 21:31:29', '2022-03-09 21:31:29'),
(176, 157, 'rachanareddy@yopmail.com', 'college', 'Test', 'Test', NULL, NULL, 'pending', '2022-03-10 05:22:05', '2022-03-10 05:22:05'),
(177, 157, 'rachanareddy@yopmail.com', 'college', 'Test', 'Test', NULL, NULL, 'pending', '2022-03-10 05:22:51', '2022-03-10 05:22:51'),
(178, 157, 'rachanareddy@yopmail.com', 'college', 'Test', 'Test', NULL, NULL, 'pending', '2022-03-10 05:23:21', '2022-03-10 05:23:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_subjects`
--

CREATE TABLE `user_subjects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_email` text COLLATE utf8mb4_unicode_ci,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `file` text COLLATE utf8mb4_unicode_ci,
  `grade` text COLLATE utf8mb4_unicode_ci,
  `school` text COLLATE utf8mb4_unicode_ci,
  `upload_style` varchar(11) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_subjects`
--

INSERT INTO `user_subjects` (`id`, `user_id`, `user_email`, `category`, `name`, `description`, `slug`, `image`, `file`, `grade`, `school`, `upload_style`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', 'uma@yopmail.com', 'add-new-category', 'sacsevce', 'dsrebsre', 'hskjaqwdkj', '1638881728-data-mining-assignment-help.jpg', '1638881728-c-programming-assignment-help.jpg', NULL, NULL, NULL, 'accept', '2021-12-07 07:25:28', '2021-12-07 08:08:14'),
(4, '6', 'nanpal29003@gmail.com', 'first-try-edit', 'Finance', 'Finance', 'Finance', '1641496274-money-g8ef5a931c_640.jpg', '1641496274-geometry-gf2c242a28_640.jpg', NULL, NULL, NULL, 'accept', '2022-01-06 19:11:14', '2022-01-06 21:23:52'),
(7, '6', 'nanpal29003@gmail.com', 'crafts', 'Cup Cakes', 'Beautiful cup cakes', NULL, '1642210696-cupcake-gd95eaf03a_640.jpg', '1642210696-cupcake-gd95eaf03a_640.jpg', NULL, NULL, NULL, 'accept', '2022-01-15 01:38:16', '2022-01-15 01:41:53'),
(8, '6', 'nanpal29003@gmail.com', 'crafts', 'Sandwich', 'documents.quickmints.com', NULL, '1642210735-sandwich-g5b9ab0991_640.png', '1642210735-sandwich-g5b9ab0991_640.png', NULL, NULL, NULL, 'accept', '2022-01-15 01:38:55', '2022-01-15 01:41:39'),
(9, '6', 'nanpal29003@gmail.com', 'first-try-edit', 'Pasta', 'Pasta dish ingredients:\r\n1) Pasta\r\n2) Sauce\r\n3) Salt\r\n4) Water', NULL, '1642210796-pasta-gd2d03dbe6_640.jpg', '1642210796-pasta-gd2d03dbe6_640.jpg', NULL, NULL, NULL, 'accept', '2022-01-15 01:39:56', '2022-01-15 01:41:25'),
(10, '6', 'nanpal29003@gmail.com', 'crafts', 'Salad', 'Salad Prperation', NULL, '1642210830-meal-g52fd24dc0_640.jpg', '1642210830-meal-g52fd24dc0_640.jpg', NULL, NULL, NULL, 'accept', '2022-01-15 01:40:30', '2022-01-15 01:41:06'),
(11, '6', 'nanpal29003@gmail.com', 'poems', 'Sam', 'Test', NULL, '1642387200-pexels-steve-johnson-1145720.jpg', '1642387200-pexels-steve-johnson-1145720.jpg', NULL, NULL, NULL, 'accept', '2022-01-17 02:40:00', '2022-01-17 22:36:53'),
(13, '34', 'partho@yopmail.com', 'certificates-honors', 'bdfgtbhfrftgr', 'gdftnbfgntftjyn', NULL, '1642490526-literature.jpg', '1642490526-education.sql', NULL, NULL, 'private', 'accept', '2022-01-18 07:22:06', '2022-01-18 07:34:36'),
(19, '1', 'uma@yopmail.com', 'other', 'Demo Upload for Image', 'vcdfvdbvchjdbvhbfvrkjrnvcbkjnfvc', NULL, '1642667766-img3.jpg', '1642667766-biology.jpg', '11th', 'dfvfdvrgtr', 'public', 'accept', '2022-01-20 08:36:06', '2022-01-20 08:39:53'),
(20, '1', 'uma@yopmail.com', 'other', 'Demo Upload for Image 2', 'resdvgdsrebesbe', NULL, '1642667803-photo-1492562080023-ab3db95bfbce.jpg', '1642667803-photo-1492562080023-ab3db95bfbce.jpg', 'drefvde', 'dfv d b', 'public', 'accept', '2022-01-20 08:36:43', '2022-01-20 08:39:39'),
(21, '1', 'uma@yopmail.com', 'first-try-edit', 'Demo Upload for Image 3', 'dsecds vdfrgv dr', NULL, '1642667841-img2.jpg', '1642667841-dissertation.jpg', 'dewacwe', 'cdsvcsv seed', 'public', 'accept', '2022-01-20 08:37:21', '2022-01-20 08:39:19'),
(22, '1', 'uma@yopmail.com', 'other', 'Demo Upload for Image 4', 'wefcdsaevsvge', NULL, '1642667884-img.jpg', '1642667884-img.jpg', 'saqwdsxaqw', 'cdsvds b', 'public', 'accept', '2022-01-20 08:38:04', '2022-01-20 08:38:52'),
(25, '1', 'uma@yopmail.com', 'certificates-honors', 'Roy', 'This id for demo cache', NULL, '1642775846-photo-1492562080023-ab3db95bfbce.jpg', '1642775846-img.jpg', '11', 'La Marteniars', 'public', 'accept', '2022-01-21 14:37:26', '2022-01-21 16:45:11'),
(27, '1', 'uma@yopmail.com', 'certificates-honors', 'dfvgdfbdth', 'vbdftrgbghfbhfgth', NULL, '1642846974-img3.jpg', '1642846974-img2.jpg', 'tryhg', 'hfrthj', 'public', 'accept', '2022-01-22 10:22:54', '2022-01-23 17:55:12'),
(28, '47', 'jasonu@yopmail.com', 'photography', 'Jason', 'Test', NULL, '1642960350-pexels-pixabay-462030.jpg', '1642960350-pexels-pixabay-462030.jpg', '3', 'PS', 'public', 'accept', '2022-01-23 17:52:30', '2022-01-23 17:54:43'),
(29, '47', 'jasonu@yopmail.com', 'photography', 'Jason', 'Test - Private', NULL, '1642960391-pexels-juraj-masar-253905.jpg', '1642960391-pexels-juraj-masar-253905.jpg', '3', 'PS', 'private', 'accept', '2022-01-23 17:53:11', '2022-01-23 17:54:12'),
(32, '1', 'uma@yopmail.com', 'certificates-honors', 'dewew', 'ewsfswfcw', NULL, '1643361967-logo-bkp.png', '1643361967-education_advance (1).sql', '8648', 'dfbdftgrbrb', 'public', 'accept', '2022-01-28 09:26:07', '2022-02-01 19:42:16'),
(33, '49', 'jinki@yopmail.com', 'art-and-painting', 'Jinki', 'This is my NFT Design collection.', NULL, '1643723470-aa.png', '1643723470-Business Law Syllabus - Spring 2021 - BSADB18-61-31309.pdf', '10', 'Strayer University', 'public', 'accept', '2022-02-01 13:51:10', '2022-02-01 19:41:42'),
(34, '30', 'pfavijit@gmail.com', 'certificates-honors', 'Live Demo Upload', 'This is demo upload', NULL, '1643725708-dissertation.jpg', '1643725708-education_advance (1).sql', '11th', 'cjdsijk', 'public', 'accept', '2022-02-01 14:28:28', '2022-02-01 14:29:17'),
(35, '51', 'rajt1@yopmail.com', 'photography', 'Jan', 'Test 1', NULL, '1643744609-pexels-hitesh-choudhary-693859.jpg', '1643744609-pexels-juraj-masar-253905.jpg', '3', 'HH', 'public', 'accept', '2022-02-01 19:43:29', '2022-02-01 19:45:06'),
(36, '51', 'rajt1@yopmail.com', 'photography', 'Jan', 'Test 2 Private', NULL, '1643744649-pexels-pixabay-462030.jpg', '1643744649-pexels-pixabay-462030.jpg', '3', 'HH', 'private', 'accept', '2022-02-01 19:44:09', '2022-02-01 19:44:48'),
(37, '1', 'uma@yopmail.com', 'riddles', 'cdsevcs', 'v df vbdx', NULL, NULL, NULL, 'dfb df', 'vdfsv', 'public', 'deny', '2022-02-03 15:09:57', '2022-02-06 02:49:43'),
(39, '57', 'Rupa212@yopmail.com', 'photography', 'Savi', 'Bridge Painting', NULL, '1644117433-bridge-19513_640.jpg', '1644117433-bridge-19513_640.jpg', '5', 'HH', 'public', 'accept', '2022-02-06 03:17:13', '2022-02-06 03:17:34'),
(40, '57', 'Rupa212@yopmail.com', 'photography', 'Ayush', 'This painting shows a jar and fruits with natural colors.', NULL, '1644117735-still-life-562357_640.jpg', '1644117735-still-life-562357_640.jpg', '7', 'Stanley School', 'public', 'accept', '2022-02-06 03:22:15', '2022-02-06 03:22:35'),
(41, '57', 'Rupa212@yopmail.com', 'other', 'Nathan', 'In grade 3, Nathans thoughts of being a President!', NULL, '1644118365-WhatsApp Image 2022-02-05 at 7.29.50 PM.jpeg', '1644118365-WhatsApp Image 2022-02-05 at 7.29.50 PM.jpeg', 'Grade 3', 'Hidden Hills Elementary', 'public', 'accept', '2022-02-06 03:32:45', '2022-02-06 03:33:07'),
(42, '58', 'Nikhita212@yopmail.com', 'writing-stories', 'Yashmita', 'My experience planting seeds, by Yashmita', NULL, '1644175055-Screen Shot 2022-02-06 at 11.15.16 AM.png', '1644175055-Screen Shot 2022-02-06 at 11.15.16 AM.png', '6', 'Valley Public School', 'public', 'accept', '2022-02-06 19:17:35', '2022-02-06 19:18:02'),
(43, '58', 'Nikhita212@yopmail.com', 'art-and-painting', 'Susan', 'Mouse coloring by Susan.', NULL, '1644175392-Screen Shot 2022-02-06 at 11.21.06 AM.png', '1644175392-Screen Shot 2022-02-06 at 11.21.06 AM.png', '2', '-', 'public', 'accept', '2022-02-06 19:23:12', '2022-02-06 19:23:33'),
(44, '58', 'Nikhita212@yopmail.com', 'art-and-painting', 'Ounathya', 'Coloring bu Ounathya!', NULL, '1644175615-Screen Shot 2022-02-06 at 11.26.13 AM.png', '1644175615-Screen Shot 2022-02-06 at 11.26.13 AM.png', '2', '-', 'public', 'deny', '2022-02-06 19:26:55', '2022-02-06 19:27:25'),
(45, '58', 'Nikhita212@yopmail.com', 'art-and-painting', 'Ounathya', 'Coloring bu Ounathya!', NULL, '1644175618-Screen Shot 2022-02-06 at 11.26.13 AM.png', '1644175618-Screen Shot 2022-02-06 at 11.26.13 AM.png', '2', '-', 'public', 'deny', '2022-02-06 19:26:58', '2022-02-06 19:27:20'),
(46, '58', 'Nikhita212@yopmail.com', 'art-and-painting', 'Ounathya', 'Coloring bu Ounathya!', NULL, '1644175621-Screen Shot 2022-02-06 at 11.26.13 AM.png', '1644175621-Screen Shot 2022-02-06 at 11.26.13 AM.png', '2', '-', 'public', 'accept', '2022-02-06 19:27:01', '2022-02-06 19:27:59'),
(47, '41', 'neelima.tapata@gmail.com', 'Coloring', 'Nathan', 'Coloring activity', NULL, '1644185077-Screen Shot 2022-02-06 at 2.03.03 PM.png', '1644185077-Screen Shot 2022-02-06 at 2.03.03 PM.png', '5', 'Hidden Hills Elementary', 'public', 'accept', '2022-02-06 22:04:37', '2022-02-06 22:05:01'),
(48, '41', 'neelima.tapata@gmail.com', 'photography', 'Ivan', 'Craft work by Ivan in Grade 3.', NULL, '1644185495-Screen Shot 2022-02-06 at 2.07.05 PM.png', '1644185495-Screen Shot 2022-02-06 at 2.07.05 PM.png', '3', 'Hidden Hills Elementary', 'public', 'accept', '2022-02-06 22:11:35', '2022-02-06 22:11:55'),
(49, '41', 'neelima.tapata@gmail.com', 'art-and-painting', 'Ivy', 'Painting by Ivan', NULL, '1644185624-Screen Shot 2022-02-06 at 2.12.53 PM.png', '1644185624-Screen Shot 2022-02-06 at 2.12.53 PM.png', '3', 'Hidden Hills Elementary', 'public', 'accept', '2022-02-06 22:13:44', '2022-02-06 22:14:01'),
(50, '41', 'neelima.tapata@gmail.com', 'other', 'Nathan', 'Friends and teachers support!', NULL, '1644185895-Screen Shot 2022-02-06 at 2.14.44 PM.png', '1644185895-Screen Shot 2022-02-06 at 2.14.44 PM.png', 'Grade 5', 'Hidden Hills Elementary', 'public', 'accept', '2022-02-06 22:18:15', '2022-02-06 22:18:39'),
(51, '41', 'neelima.tapata@gmail.com', 'art-and-painting', 'Vijay', 'Not sure what this is!! :)', NULL, '1644186037-Screen Shot 2022-02-06 at 2.19.44 PM.png', '1644186037-Screen Shot 2022-02-06 at 2.19.44 PM.png', 'Grade 2', 'Hidden Hills', 'public', 'accept', '2022-02-06 22:20:37', '2022-02-06 22:21:08'),
(52, '41', 'neelima.tapata@gmail.com', 'Food', 'Nathan', 'Pasta Preparation By Nathan.\r\n\r\nPASTA RECIPE\r\n\r\nI used the recipe below to make the pasta.\r\n\r\nhttps://thewanderlustkitchen.com/pasta-for-one-10-minutes/\r\n\r\nThis is a simple recipe and the ingredients I used are:\r\n\r\nPasta\r\nButter\r\nSalt\r\nGrated Parmesan\r\nBlack pepper\r\n\r\nI made the following changes to the recipe. I added a little more butter than the recipe suggested and put very little black pepper as I like my food mild.', NULL, '1644186392-Screen Shot 2022-02-06 at 2.23.26 PM.png', '1644186392-Screen Shot 2022-02-06 at 2.23.26 PM.png', 'Grade 6', 'Windemere Ranch Middle School', 'public', 'accept', '2022-02-06 22:26:32', '2022-02-06 22:26:48'),
(53, '41', 'neelima.tapata@gmail.com', 'Food', 'Varun', 'Baking Salmon', NULL, '1644186913-Screen Shot 2022-02-06 at 2.32.57 PM.png', '1644186913-My Observations & Help Out in the Kitchen (for 2+ days).pdf', '6', 'Windemer Ranch', 'public', 'accept', '2022-02-06 22:35:13', '2022-02-06 22:35:38'),
(54, '41', 'neelima.tapata@gmail.com', 'crafts', 'Ruma', 'Planets craftwork by Ruma', NULL, '1644346582-Screen Shot 2022-02-08 at 10.45.52 AM.png', NULL, 'Grade 3', 'Stanley Elementary', 'public', 'accept', '2022-02-08 18:56:22', '2022-02-08 18:56:49'),
(55, '41', 'neelima.tapata@gmail.com', 'art-and-painting', 'Pierrre', 'Painting by Pierre', NULL, '1644346802-pexels-pierre-blaché-3073668.jpg', '1644346802-pexels-pierre-blaché-3073668.jpg', '-', '-', 'public', 'accept', '2022-02-08 19:00:02', '2022-02-08 19:00:29'),
(56, '41', 'neelima.tapata@gmail.com', 'Food', 'Egg Sandwich by Emily', 'Ingredients:\r\n1) Eggs\r\n2) Lettuce\r\n3) Cheese', NULL, '1644347511-egg-sandwiches-2422902_640.jpg', '1644347511-egg-sandwiches-2422902_640.jpg', '6', '-', 'public', 'accept', '2022-02-08 19:11:51', '2022-02-08 19:12:17'),
(60, '41', 'neelima.tapata@gmail.com', 'crafts', 'Hearts Greeting Card', 'Enjoyed working on this activity. Easy to create:\r\n1) Blue Paper or color of your choice\r\n2) Heart shapes\r\n3) Glue\r\nTime: 1 Hr', NULL, '1644381459-hearts-1455498_640.jpg', '1644381459-hearts-1455498_640.jpg', '7', 'Valley School', 'public', 'accept', '2022-02-09 04:37:39', '2022-02-09 04:39:05'),
(61, '41', 'neelima.tapata@gmail.com', 'photography', 'Tina', 'A great snap shot by Tina.', NULL, '1644381824-blooming-field-5304878_640.jpg', '1644381824-blooming-field-5304878_640.jpg', '-', '-', 'public', 'accept', '2022-02-09 04:43:44', '2022-02-09 04:44:17'),
(62, '41', 'neelima.tapata@gmail.com', 'writing-stories', 'Uploaded by Ritesh', 'The Lion and the Rabbit story for you to enjoy!', NULL, '1644882952-Screen Shot 2022-02-14 at 3.53.48 PM.png', '1644882952-Screen Shot 2022-02-14 at 3.53.48 PM.png', '4', '-', 'public', 'accept', '2022-02-14 23:55:52', '2022-02-14 23:56:56'),
(63, '1', 'uma@yopmail.com', 'certificates-honors', 'Demo Upload for Edit', 'This is demo upload for testing edit option', NULL, '1644912429-trouser-2.jpeg', '1644912429-trouser-1.jpeg', '2nd', 'dsvbawghe', 'public', 'accept', '2022-02-15 08:07:09', '2022-02-15 08:07:55'),
(64, '107', 'diveinskies@gmail.com', 'certificates-honors', 'Demo Project for Edit123', 'This is just demo upload for edit test', NULL, '1644915583-trouser-3.jpeg', '1644915507-ecom5.sql', 'Higher', 'Teacher', 'public', 'accept', '2022-02-15 08:58:27', '2022-02-15 08:59:43'),
(65, '119', 'anikaanne2010pal@gmail.com', 'art-and-painting', 'Anika Anne', 'This is a drawing of the genie from the movie Aladdin. I used a blender and a sketching pencil.', NULL, '1644966331-Anika Anne  — Aladdin — The Genie.png', '1644966331-Anika Anne  — Aladdin — The Genie.png', '6', 'Brinckerhoff Elementary School', 'public', 'accept', '2022-02-15 23:05:31', '2022-02-16 02:30:54'),
(66, '54', 'saka.neelima@gmail.com', 'crafts', 'Vijay', 'After 6 hours of non stop work his build was completed!', NULL, '1644983186-WhatsApp Image 2022-02-15 at 7.42.21 PM (6).jpeg', '1644983186-WhatsApp Image 2022-02-15 at 7.42.21 PM (6).jpeg', '4', '-', 'public', 'accept', '2022-02-16 03:46:26', '2022-02-16 03:46:56'),
(67, '54', 'saka.neelima@gmail.com', 'crafts', 'Vijay', 'My boy loves lego building!', NULL, '1644983284-WhatsApp Image 2022-02-15 at 7.42.21 PM.jpeg', '1644983284-WhatsApp Image 2022-02-15 at 7.42.21 PM.jpeg', '4', '-', 'public', 'accept', '2022-02-16 03:48:04', '2022-02-16 03:48:23'),
(68, '54', 'saka.neelima@gmail.com', 'crafts', 'Vijay', 'Continuation of the build!', NULL, '1644983400-WhatsApp Image 2022-02-15 at 7.42.21 PM (1).jpeg', '1644983400-WhatsApp Image 2022-02-15 at 7.42.21 PM (1).jpeg', '4', '-', 'public', 'accept', '2022-02-16 03:50:00', '2022-02-16 03:50:21'),
(69, '32', 'nanpal29001@gmail.com', 'Explore-Kids-Classes', 'Test', '-', NULL, '1645356957-Easter Egg Coloring.png', '1645356957-Easter Egg Coloring.pdf', '-', '-', 'public', 'accept', '2022-02-20 11:35:57', '2022-02-20 11:36:23'),
(70, '140', 'alfrieda@gmail.com', 'Explore-Kids-Talents', 'Sahale', 'Drawing is my passion', NULL, '1645570355-C5F51B14-225B-4682-9E1F-C533EE26D6EC.jpeg', NULL, '5th', 'Green Valley', 'public', 'pending', '2022-02-22 22:52:35', '2022-02-22 22:52:35'),
(71, '140', 'alfrieda@gmail.com', 'Explore-Kids-Talents', 'Sahale', 'Drawing is my passion', NULL, '1645570357-C5F51B14-225B-4682-9E1F-C533EE26D6EC.jpeg', NULL, '5th', 'Green Valley', 'public', 'pending', '2022-02-22 22:52:37', '2022-02-22 22:52:37'),
(72, '140', 'alfrieda@gmail.com', 'Explore-Kids-Talents', 'Sahale', 'Drawing is my passion', NULL, '1645570358-C5F51B14-225B-4682-9E1F-C533EE26D6EC.jpeg', NULL, '5th', 'Green Valley', 'public', 'accept', '2022-02-22 22:52:38', '2022-02-23 00:55:39'),
(73, '140', 'alfrieda@gmail.com', 'Explore-Kids-Talents', 'Sahale', 'Easter Bunny', NULL, '1645570409-19BC41CC-2D1F-4F25-A02F-C4D30D1D45D4.jpeg', NULL, '5th', 'GVMS', 'public', 'accept', '2022-02-22 22:53:29', '2022-02-23 00:55:15'),
(74, '140', 'alfrieda@gmail.com', 'Explore-Kids-Talents', 'Sarosh', 'Multiple creatures in one', NULL, '1645570481-BDBAEB75-67B6-4529-81D1-61CD9C04D636.jpeg', NULL, '7th', 'GVMS', 'public', 'accept', '2022-02-22 22:54:41', '2022-02-23 00:54:57');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adddates`
--
ALTER TABLE `adddates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `addslots`
--
ALTER TABLE `addslots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `publishes`
--
ALTER TABLE `publishes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question_categories`
--
ALTER TABLE `question_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `referrals`
--
ALTER TABLE `referrals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `signups`
--
ALTER TABLE `signups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slots`
--
ALTER TABLE `slots`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sorts`
--
ALTER TABLE `sorts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_questions`
--
ALTER TABLE `user_questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_subjects`
--
ALTER TABLE `user_subjects`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adddates`
--
ALTER TABLE `adddates`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=169;

--
-- AUTO_INCREMENT for table `addslots`
--
ALTER TABLE `addslots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `publishes`
--
ALTER TABLE `publishes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=221;

--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=163;

--
-- AUTO_INCREMENT for table `question_categories`
--
ALTER TABLE `question_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `referrals`
--
ALTER TABLE `referrals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=108;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=84;

--
-- AUTO_INCREMENT for table `signups`
--
ALTER TABLE `signups`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=377;

--
-- AUTO_INCREMENT for table `slots`
--
ALTER TABLE `slots`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sorts`
--
ALTER TABLE `sorts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=61;

--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=313;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=177;

--
-- AUTO_INCREMENT for table `user_questions`
--
ALTER TABLE `user_questions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=179;

--
-- AUTO_INCREMENT for table `user_subjects`
--
ALTER TABLE `user_subjects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
