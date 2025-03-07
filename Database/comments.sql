-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2025 at 02:30 PM
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
(35, 2, 2, 4, 'Hello', '2025-03-02 03:29:48');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

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
