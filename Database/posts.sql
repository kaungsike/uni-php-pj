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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int NOT NULL,
  `user_id` int NOT NULL,
  `content` varchar(500) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `is_anonymous` tinyint(1) DEFAULT '0',
  `status` enum('pending','approved','refused') COLLATE utf8mb4_unicode_ci DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `content`, `is_anonymous`, `status`, `created_at`) VALUES
(1, 1, 'Hello, this is a test post.', 0, 'refused', '2025-02-13 13:41:45'),
(2, 2, 'This is another approved post.', 0, 'approved', '2025-02-13 13:43:26'),
(6, 4, 'This is just a test and hello again.\r\nIs this work?\r\nreally?\r\n                    ', 0, 'refused', '2025-02-16 20:15:00'),
(9, 4, 'This is justy a test\r\nthist is just a test...\r\nAgain \r\n                    ', 0, 'approved', '2025-02-16 20:34:03'),
(10, 4, 'This is justy a test\r\nthist is just a test...\r\nAgain\r\n                    ', 0, 'approved', '2025-02-16 20:38:42'),
(11, 4, 'This is justy a test\r\nthist is just a test...\r\nAgain\r\n                    ', 1, 'refused', '2025-02-16 20:41:39'),
(12, 2, 'one more test\r\n                    ', 0, 'approved', '2025-02-16 20:54:58'),
(13, 4, 'Monitor Careate New Post\r\nThis is about University Rules\r\n                    ', 0, 'approved', '2025-02-18 03:04:31'),
(14, 4, 'As A teser\r\n                    ', 0, 'refused', '2025-02-18 17:11:25'),
(15, 4, 'asc\r\n                    ', 1, 'approved', '2025-02-18 17:14:45'),
(16, 4, 'Again made\n                    ', 1, 'approved', '2025-02-18 18:31:12'),
(17, 4, 'yggb\r\n                    ', 1, 'approved', '2025-02-18 18:33:14'),
(18, 4, 'One more due!\n                    ', 0, 'refused', '2025-02-18 18:39:01'),
(20, 4, 'Is the modal close?\n                    ', 0, 'refused', '2025-02-19 13:03:59'),
(22, 2, 'It should work this time\n                    ', 0, 'refused', '2025-02-19 14:10:18'),
(23, 2, 'Added animation\n                    ', 0, 'approved', '2025-02-21 21:06:46'),
(24, 4, 'Animation testing\n                    ', 0, 'refused', '2025-02-21 21:12:25'),
(25, 4, 'Animation\n                    ', 0, 'approved', '2025-02-21 21:13:14'),
(102, 4, 'asdf\r\n                    ', 0, 'approved', '2025-03-10 03:29:04'),
(103, 4, 'Hello\r\n                    ', 0, 'approved', '2025-03-10 03:30:20'),
(104, 4, 'asdasfasf\r\n                    ', 0, 'pending', '2025-03-10 03:31:44'),
(105, 2, 'adwafdw\r\n                    ', 0, 'approved', '2025-03-10 03:43:28'),
(106, 4, 'This is testing monitor side for multiple image\r\n                    ', 0, 'refused', '2025-03-10 11:10:48'),
(107, 4, 'Why not again?\r\n                    ', 1, 'refused', '2025-03-10 11:22:34'),
(108, 4, 'Let\'s post new one again\r\n                    ', 0, 'refused', '2025-03-10 18:58:49'),
(109, 4, 'Testing Final boss                ', 0, 'approved', '2025-03-13 04:32:27'),
(110, 4, '   Hello             ', 0, 'approved', '2025-03-13 05:04:46'),
(111, 2, 'Waht about making new post             ', 1, 'approved', '2025-03-13 06:24:04'),
(112, 2, 'Oh okay                ', 0, 'approved', '2025-03-13 06:26:18'),
(113, 4, 'Testing monitor                ', 0, 'approved', '2025-03-16 08:03:31'),
(114, 2, 'San gyi dr pr                ', 0, 'approved', '2025-03-17 03:32:36'),
(115, 4, '  Hi cat!              ', 0, 'approved', '2025-04-03 14:07:48'),
(116, 2, 'Hello cat              ', 0, 'pending', '2025-04-05 04:41:46'),
(117, 4, ' hi               ', 1, 'pending', '2025-04-05 08:04:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `student_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=118;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `posts`
--
ALTER TABLE `posts`
  ADD CONSTRAINT `posts_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
