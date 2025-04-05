-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2025 at 01:22 PM
-- Server version: 8.0.41-0ubuntu0.24.04.1
-- PHP Version: 8.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uni_feedback`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `post_id` int NOT NULL,
  `parent_id` int DEFAULT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `parent_id`, `content`, `created_at`) VALUES
(3, 1, 1, NULL, 'This is my first comment!', '2025-02-22 22:36:07'),
(4, 3, 2, NULL, 'This is comment test.', '2025-02-22 22:52:07'),
(5, 2, 2, NULL, 'Me again', '2025-02-23 03:46:30'),
(6, 4, 12, NULL, 'Is this work?', '2025-02-24 23:00:48'),
(7, 3, 25, NULL, 'Ok I like it', '2025-02-26 00:37:53'),
(8, 4, 2, NULL, 'hello sir', '2025-02-26 07:11:38'),
(9, 4, 12, NULL, 'Yeah it work due', '2025-02-26 07:30:33'),
(10, 4, 23, NULL, 'let comment one more time', '2025-02-28 12:02:58'),
(11, 4, 23, NULL, 'again?', '2025-02-28 12:16:58'),
(12, 4, 9, NULL, 'Yes sir.Again', '2025-02-28 12:18:19'),
(13, 4, 9, NULL, 'So why more?', '2025-02-28 12:18:55'),
(14, 3, 2, 5, 'Yes', '2025-03-01 06:53:56'),
(15, 4, 2, 8, 'hello bro', '2025-03-01 12:23:38'),
(16, 4, 23, NULL, 'what if not reply?', '2025-03-01 12:26:04'),
(17, 4, 12, NULL, 'Hi', '2025-03-01 12:30:14'),
(20, 4, 9, 12, 'what abount now?', '2025-03-01 12:43:07'),
(21, 4, 9, 12, 'why not?', '2025-03-01 12:44:45'),
(22, 4, 10, NULL, 'hello sir', '2025-03-01 12:46:37'),
(23, 4, 10, 22, 'again sir', '2025-03-01 12:51:07'),
(24, 4, 10, 22, 'why not again sir', '2025-03-01 12:51:51'),
(25, 4, 10, 22, 'lfg', '2025-03-01 12:53:58'),
(26, 4, 10, NULL, 'hello', '2025-03-01 12:55:09'),
(27, 4, 2, 5, 'hello', '2025-03-01 12:58:45'),
(28, 4, 23, 10, 'yeah why not', '2025-03-01 13:00:08'),
(29, 4, 12, 17, 'hello sir', '2025-03-02 02:40:32'),
(30, 4, 12, 17, 'hi sir', '2025-03-02 02:40:45'),
(31, 4, 12, 9, 'hello tester', '2025-03-02 02:41:01'),
(32, 4, 2, 4, 'I know', '2025-03-02 03:22:14'),
(33, 2, 2, 4, 'from ', '2025-03-02 03:28:51'),
(34, 4, 2, 4, 'hello', '2025-03-02 03:29:41'),
(35, 2, 2, 4, 'Hello', '2025-03-02 03:29:48'),
(36, 4, 13, NULL, 'hello', '2025-03-08 06:31:18'),
(37, 4, 13, 36, 'yes', '2025-03-08 06:31:42'),
(39, 4, 15, NULL, 'hello', '2025-03-10 03:05:43'),
(40, 4, 15, NULL, '2', '2025-03-10 03:05:52'),
(41, 4, 15, NULL, '4', '2025-03-10 03:05:56'),
(42, 4, 15, 40, 'hello', '2025-03-10 03:08:07'),
(43, 4, 103, NULL, 'hello', '2025-03-10 03:30:46'),
(44, 2, 2, 4, 'let comment one more time', '2025-03-13 06:28:25'),
(45, 2, 112, NULL, 'hi', '2025-03-13 06:38:22'),
(46, 2, 112, 45, 'hello tester', '2025-03-13 06:39:09'),
(47, 2, 112, 45, 'let comment one more time', '2025-03-13 06:42:45'),
(48, 2, 2, 4, 'hi', '2025-03-14 11:19:57'),
(49, 4, 103, 43, 'hi', '2025-03-14 11:20:56'),
(50, 4, 12, 9, 'hello sir', '2025-03-14 11:21:08'),
(51, 4, 10, 22, 'yo', '2025-03-14 11:32:20'),
(52, 2, 2, 4, 'yo', '2025-03-14 11:32:54'),
(53, 4, 13, NULL, 'hi', '2025-03-14 11:40:44'),
(54, 4, 25, NULL, 'oh great', '2025-03-14 11:42:13'),
(55, 4, 13, NULL, 'yo', '2025-03-14 11:42:52'),
(56, 4, 110, NULL, 'hi', '2025-03-14 11:48:15'),
(57, 4, 110, NULL, 'let comment one more time', '2025-03-14 11:49:32'),
(58, 4, 110, 56, 'what if a reply?', '2025-03-14 11:50:02'),
(59, 4, 110, 56, 'hello sir', '2025-03-14 11:51:05'),
(60, 4, 110, 57, 'hello', '2025-03-14 11:51:13'),
(61, 4, 106, NULL, 'hello', '2025-03-14 11:51:41'),
(62, 4, 106, 61, 'it should work now', '2025-03-14 11:52:17'),
(63, 2, 9, NULL, 'hello', '2025-03-14 11:53:31'),
(64, 2, 113, NULL, 'hi', '2025-03-16 08:05:04'),
(65, 2, 113, NULL, 'hi again', '2025-03-16 08:06:05'),
(66, 2, 113, 64, 'hi for reply', '2025-03-16 08:06:44'),
(67, 2, 114, NULL, 'Hello ', '2025-03-17 03:33:58'),
(68, 2, 114, 67, 'Hello ', '2025-03-17 03:34:40'),
(69, 2, 114, 67, 'let comment one more time', '2025-03-17 03:34:57'),
(70, 2, 2, NULL, 'hi', '2025-04-05 04:40:09'),
(71, 2, 9, NULL, 'hello sir', '2025-04-05 04:40:20'),
(72, 2, 10, NULL, 'Hello ', '2025-04-05 04:41:00'),
(73, 4, 9, NULL, 'yo', '2025-04-05 04:44:35'),
(74, 4, 12, NULL, 'let comment one more time', '2025-04-05 04:45:49'),
(75, 4, 15, NULL, 'hello sir', '2025-04-05 04:52:47'),
(76, 4, 10, NULL, 'yo', '2025-04-05 04:53:47'),
(77, 4, 25, NULL, 'Hello ', '2025-04-05 05:00:07'),
(78, 4, 9, 71, 'hi again', '2025-04-05 05:00:47'),
(79, 4, 17, NULL, 'Hello ', '2025-04-05 05:01:49'),
(80, 4, 16, NULL, 'hi', '2025-04-05 05:04:10'),
(81, 4, 102, NULL, 'let comment one more time', '2025-04-05 05:04:39'),
(82, 4, 102, NULL, 'hello sir', '2025-04-05 05:04:45'),
(83, 4, 105, NULL, 'hi', '2025-04-05 05:06:03'),
(84, 2, 111, NULL, 'gMonad', '2025-04-05 05:07:47'),
(85, 2, 115, NULL, 'Gmeow', '2025-04-05 05:08:30'),
(86, 2, 114, NULL, 'hello sir', '2025-04-05 05:09:04'),
(87, 2, 113, 65, 'why', '2025-04-05 05:09:37');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `parent_id` (`parent_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`parent_id`) REFERENCES `comments` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
