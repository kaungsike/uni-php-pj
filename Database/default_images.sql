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
-- Table structure for table `default_images`
--

CREATE TABLE `default_images` (
  `id` int NOT NULL,
  `type` enum('profile','cover') COLLATE utf8mb4_unicode_ci NOT NULL,
  `image_url` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `gender` enum('male','female') COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `default_images`
--

INSERT INTO `default_images` (`id`, `type`, `image_url`, `created_at`, `gender`) VALUES
(1, 'profile', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSUI0MDHc_6afL-cBSebkLkKA5Yi6eahaZYsQU65f60_sNn9Yr9A7Omjxw1i4Ky8VmPNyw&usqp=CAU', '2025-03-10 14:39:47', 'female'),
(2, 'profile', 'https://miro.medium.com/v2/resize:fit:2400/1*lVnKFJEqmSQSURbca6swww@2x.jpeg', '2025-03-10 14:42:21', 'male'),
(3, 'profile', 'https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcQPbjXXLuwTJ_GonLf9xkxHUr3GNTgoU6BulO_ata054E88L1Af', '2025-03-10 14:43:55', 'male'),
(4, 'profile', 'https://thumbs.dreamstime.com/b/hand-drawn-person-face-black-white-portrait-charming-smiling-teenage-boy-doodle-icon-avatar-social-media-profile-315909208.jpg', '2025-03-10 14:50:49', 'male'),
(5, 'profile', 'https://png.pngtree.com/png-clipart/20210520/ourlarge/pngtree-close-eye-cute-girl-colorless-character-avatar-png-image_3286583.png\n', '2025-03-10 14:52:05', 'female'),
(6, 'profile', 'https://png.pngtree.com/png-clipart/20210710/ourlarge/pngtree-cute-pap-head-colorless-character-avatar-png-image_3551575.jpg', '2025-03-10 14:55:42', 'female');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `default_images`
--
ALTER TABLE `default_images`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `default_images`
--
ALTER TABLE `default_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
