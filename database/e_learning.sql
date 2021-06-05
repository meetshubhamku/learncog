-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2021 at 07:47 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e_learning`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_category`
--

CREATE TABLE `course_category` (
  `course_id` int(11) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `course_description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_category`
--

INSERT INTO `course_category` (`course_id`, `course_name`, `course_description`) VALUES
(1, 'PYTHON', 'Category for python courses'),
(2, 'REACT', 'For react courses'),
(3, 'ANGULAR', 'Angular course for beginners.'),
(4, 'WEB DEVELOPMENT', 'Web development course for begginners.'),
(5, 'DOCKER', 'Category for docker cources'),
(6, 'LOAD BALANCERS', 'Get an understanding of load balancers.'),
(7, 'SQL', 'Learn all SQL-related concepts.');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(20) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `user_password` varchar(32) NOT NULL,
  `user_role` smallint(6) NOT NULL DEFAULT 0,
  `is_block` tinyint(1) DEFAULT 0
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_email`, `user_password`, `user_role`, `is_block`) VALUES
(1, 'Shubham Kumar', 'shubham@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 1, 0),
(2, 'Neha Joshi', 'neha@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 1),
(3, 'Arush Mathew', 'arush@gmail.com', 'e10adc3949ba59abbe56e057f20f883e', 0, 0),
(4, 'Kanchan Rajput', 'kanchanrajput11097@gmail.com', '45dc094d13e6e0ee7f8d0e794a318eea', 0, 0),
(5, 'KANCHAN RAJPUT', 'kanchanrajput@gmail.com', '3b2f1ce2b91267414acd510e4b6a7bdd', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `videos`
--

CREATE TABLE `videos` (
  `video_id` int(11) NOT NULL,
  `video_title` varchar(50) NOT NULL,
  `video_link` varchar(50) NOT NULL,
  `video_description` varchar(300) DEFAULT NULL,
  `video_category` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `videos`
--

INSERT INTO `videos` (`video_id`, `video_title`, `video_link`, `video_description`, `video_category`) VALUES
(1, 'Complete python course', 'https://www.youtube.com/embed/_uQrJ0TkZlc', 'Complete python course for beginners. A 5hr tutorial.', 1),
(2, 'Basic React Course', 'https://www.youtube.com/embed/Ke90Tje7VS0', 'Basic react course for beginners.', 2),
(3, 'Angular for beginners', 'https://www.youtube.com/embed/k5E2AVpwsko', 'Basic angular for beginners to start with.', 3),
(4, 'HTML', 'https://www.youtube.com/embed/qz0aGYrrlhU', 'Basic html course for beginners.', 4),
(5, 'Advance python course', 'https://www.youtube.com/embed/WGJJIrtnfpk', 'Advance python course for intermediate to basic level', 1),
(6, 'Docker Introduction', 'https://www.youtube.com/embed/vCcdpuP6xEI', 'Get the introduction to docker', 5),
(7, 'What is Nginx', 'https://www.youtube.com/embed/WuH0T9FHDZ4', 'Get an understanding of what is nginx.', 6),
(8, 'Python course', 'https://www.youtube.com/embed/T936yTchDck', 'Python tutorial by intellipath. COlplete 10 hr tutorial', 1),
(9, 'Python tutorial', 'https://www.youtube.com/embed/rfscVS0vtbw', 'Python tutorial by freecodecamp. Complete 4hr tutorial', 1),
(10, 'SQL for Beginners', 'https://www.youtube.com/embed/7S_tz1z_5bA', 'Learn the basics of SQL in just 3hrs. Get started today.', 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_category`
--
ALTER TABLE `course_category`
  ADD PRIMARY KEY (`course_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `user_email` (`user_email`);

--
-- Indexes for table `videos`
--
ALTER TABLE `videos`
  ADD PRIMARY KEY (`video_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_category`
--
ALTER TABLE `course_category`
  MODIFY `course_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `videos`
--
ALTER TABLE `videos`
  MODIFY `video_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
