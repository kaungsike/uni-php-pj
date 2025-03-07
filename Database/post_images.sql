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
-- Table structure for table `post_images`
--

CREATE TABLE `post_images` (
  `id` int NOT NULL,
  `post_id` int NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `post_images`
--

INSERT INTO `post_images` (`id`, `post_id`, `image_path`) VALUES
(1, 30, 'uploads/67c60398453a6_delete.jpg'),
(2, 30, 'uploads/67c6039845709_monad.jpg'),
(3, 2, 'https://i0.wp.com/picjumbo.com/wp-content/uploads/golden-gate-bridge-free-photo.jpg?h=800&quality=80'),
(4, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgewX5GozN2128Wo5lUCmDhbCl2u9RTKqpmnLwHy_4NyHlvXREhygoEfonMN0FViberCY&usqp=CAU'),
(5, 12, 'https://pixlr.com/images/index/photo-filter-effect-one.jpg'),
(6, 2, 'https://plus.unsplash.com/premium_photo-1673002094407-a72547fa791a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGJyaWRnZXxlbnwwfHwwfHx8MA%3D%3D'),
(7, 2, 'https://images.unsplash.com/photo-1516473344662-e3a32406ecad?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fGJyaWRnZXxlbnwwfHwwfHx8MA%3D%3D'),
(8, 2, 'https://images.unsplash.com/photo-1510883327084-b48fb14fc7cf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjZ8fGJyaWRnZXxlbnwwfHwwfHx8MA%3D%3D');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `post_images`
--
ALTER TABLE `post_images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `post_id` (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `post_images`
--
ALTER TABLE `post_images`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `post_images`
--
ALTER TABLE `post_images`
  ADD CONSTRAINT `post_images_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `posts` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
