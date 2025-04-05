-- phpMyAdmin SQL Dump
-- version 5.2.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 05, 2025 at 01:23 PM
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
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `profile_photo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `role` enum('student','monitor','admin') COLLATE utf8mb4_unicode_ci DEFAULT 'student',
  `bio` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `student_id`, `name`, `gender`, `email`, `password`, `profile_photo`, `created_at`, `role`, `bio`) VALUES
(1, 'S1001', 'John Doe', 'male', 'john.doe@example.com', 'testing', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRn-f3huXl7k7Y4kZAGo4kHtZdfIhdCRDb_AA&s', '2025-02-12 13:52:07', 'student', ''),
(2, '22-23 CST-100', 'Student Tester 1', 'male', 'me@gmail.com', 'asdffdsa', 'https://png.pngtree.com/png-clipart/20210710/ourlarge/pngtree-cute-pap-head-colorless-character-avatar-png-image_3551575.jpg', '2025-02-12 17:04:40', 'student', 'Gm'),
(3, '22-23 CST-89', 'Tester 39', 'male', 'kopwee99@gmail.com', 'asdffdsa', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTy9VnQa3U_lsnMQTQAopI8_BS53yOtxmC2Rg&s', '2025-02-15 06:55:47', 'student', ''),
(4, '2223 CS-212', 'Admin Tester', 'male', 'monitor_role9@gmail.com', 'iammonitor212', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUI0MDHc_6afL-cBSebkLkKA5Yi6eahaZYsQU65f60_sNn9Yr9A7Omjxw1i4Ky8VmPNyw&usqp=CAU', '2025-02-15 23:03:10', 'monitor', 'Hello sir');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
