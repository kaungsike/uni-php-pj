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
(3, 2, 'https://i0.wp.com/picjumbo.com/wp-content/uploads/golden-gate-bridge-free-photo.jpg?h=800&quality=80'),
(4, 2, 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRgewX5GozN2128Wo5lUCmDhbCl2u9RTKqpmnLwHy_4NyHlvXREhygoEfonMN0FViberCY&usqp=CAU'),
(5, 12, 'https://pixlr.com/images/index/photo-filter-effect-one.jpg'),
(6, 2, 'https://plus.unsplash.com/premium_photo-1673002094407-a72547fa791a?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTd8fGJyaWRnZXxlbnwwfHwwfHx8MA%3D%3D'),
(7, 2, 'https://images.unsplash.com/photo-1516473344662-e3a32406ecad?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NDJ8fGJyaWRnZXxlbnwwfHwwfHx8MA%3D%3D'),
(8, 2, 'https://images.unsplash.com/photo-1510883327084-b48fb14fc7cf?w=500&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NjZ8fGJyaWRnZXxlbnwwfHwwfHx8MA%3D%3D'),
(120, 102, 'uploads/67ce5c807a29d_image1.jpg'),
(121, 102, 'uploads/67ce5c807a92e_image2.jpg'),
(122, 103, 'uploads/67ce5ccc5d384_image1.jpg'),
(123, 104, 'uploads/67ce5d20e5706_image1.jpg'),
(124, 104, 'uploads/67ce5d20e5b85_image2.jpg'),
(125, 104, 'uploads/67ce5d20e5d1e_image3.jpg'),
(126, 105, 'uploads/67ce5fe0144b6_image1.jpg'),
(127, 105, 'uploads/67ce5fe014fcc_image2.jpg'),
(128, 106, 'uploads/67cec8b843586_image1.jpg'),
(129, 106, 'uploads/67cec8b843ba3_image2.jpg'),
(130, 106, 'uploads/67cec8b843d2d_image3.jpg'),
(131, 106, 'uploads/67cec8b843dd4_image4.jpg'),
(132, 106, 'uploads/67cec8b843ed7_image5.jpg'),
(133, 107, 'uploads/67cecb7a476aa_image1.jpg'),
(134, 107, 'uploads/67cecb7a47b16_image2.jpg'),
(135, 107, 'uploads/67cecb7a47c67_image3.jpg'),
(136, 107, 'uploads/67cecb7a47e3f_image4.jpg'),
(137, 108, 'uploads/67cf3669b0def_image1.jpg'),
(138, 108, 'uploads/67cf3669b1485_image2.jpg'),
(139, 108, 'uploads/67cf3669b16cd_image3.jpg'),
(140, 109, 'uploads/67d25fdbe3ff6_image1.jpg'),
(141, 109, 'uploads/67d25fdbe4aa4_image2.jpg'),
(142, 110, 'uploads/67d2676e8f131_image1.jpg'),
(143, 111, 'uploads/67d27a04b7537_image1.jpg'),
(144, 111, 'uploads/67d27a04b7e50_image2.jpg'),
(145, 112, 'uploads/67d27a8ad1285_image1.jpg'),
(146, 113, 'uploads/67d685d3e43db_image1.jpg'),
(147, 114, 'uploads/67d797d46ee09_image1.jpg'),
(148, 114, 'uploads/67d797d46f378_image2.jpg'),
(149, 115, 'uploads/67ee9634066d8_image1.jpg'),
(150, 116, 'uploads/67f0b48ab39b3_image1.jpg'),
(151, 117, 'uploads/67f0e40640a84_image1.jpg');

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
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

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
