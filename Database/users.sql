-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 07, 2025 at 02:29 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `student_id` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('student','monitor','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'student'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `name`, `email`, `password`, `profile_photo`, `created_at`, `role`) VALUES
(1, 'S1001', 'John Doe', 'john.doe@example.com', 'testing', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn-f3huXl7k7Y4kZAGo4kHtZdfIhdCRDb_AA&s', '2025-02-12 13:52:07', 'student'),
(2, '22-23 CST-100', 'Test', 'me@gmail.com', 'asdffdsa', 'https://i.pinimg.com/736x/58/7b/57/587b57f888b1cdcc0e895cbdcfde1c1e.jpg', '2025-02-12 17:04:40', 'student'),
(3, '22-23 CST-899', 'Just A Test', 'kopwee9@gmail.com', 'asdffdsa', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy9VnQa3U_lsnMQTQAopI8_BS53yOtxmC2Rg&s', '2025-02-15 06:55:47', 'student'),
(4, '2223 CS-212', 'Monitor Tester', 'monitor_role9@gmail.com', 'iammonitor212', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSn0emXyYH7ZnW5CTjLPDX_o3pEA_IEQr9IAg&s', '2025-02-15 23:03:10', 'monitor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `student_id` (`student_id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
