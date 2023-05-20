-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 17, 2023 at 08:44 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rating`
--

-- --------------------------------------------------------

--
-- Table structure for table `cook`
--

CREATE TABLE `cook` (
  `cook_id` int(255) NOT NULL,
  `hostel_id` int(255) NOT NULL,
  `cook_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cook`
--

INSERT INTO `cook` (`cook_id`, `hostel_id`, `cook_name`) VALUES
(1, 1, 'cook-1'),
(2, 3, 'cook-3\r\n'),
(3, 2, 'cook-2'),
(4, 4, 'cook-4'),
(5, 5, 'cook-5');

-- --------------------------------------------------------

--
-- Table structure for table `desc_rating`
--

CREATE TABLE `desc_rating` (
  `desc_id` int(255) NOT NULL,
  `rating_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `food_id` int(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `desc_rating`
--

INSERT INTO `desc_rating` (`desc_id`, `rating_id`, `user_id`, `food_id`, `description`) VALUES
(52, 205, 32, 112, 'nothing');

-- --------------------------------------------------------

--
-- Table structure for table `food`
--

CREATE TABLE `food` (
  `food_id` int(255) NOT NULL,
  `hostel_id` int(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `food_item` varchar(255) NOT NULL,
  `status` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `food`
--

INSERT INTO `food` (`food_id`, `hostel_id`, `category`, `food_item`, `status`) VALUES
(112, 1, 'Breakfast', 'maggie', 0);

-- --------------------------------------------------------

--
-- Table structure for table `hostel`
--

CREATE TABLE `hostel` (
  `hostel_id` int(255) NOT NULL,
  `hostel_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `hostel`
--

INSERT INTO `hostel` (`hostel_id`, `hostel_name`) VALUES
(1, 'IT-Girls'),
(2, 'IT-Boys'),
(3, 'Dhemanth'),
(4, 'Dhemayi'),
(5, 'Mithri'),
(6, 'all');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(11) NOT NULL,
  `food_id` int(200) NOT NULL,
  `item` varchar(100) NOT NULL,
  `hostel_id` int(50) NOT NULL,
  `category` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `cook_id` int(100) NOT NULL,
  `Created_time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `food_id`, `item`, `hostel_id`, `category`, `day`, `cook_id`, `Created_time`) VALUES
(81, 112, 'maggie', 1, 'Breakfast', 'Tuesday', 1, '2023-01-17 03:19:10');

-- --------------------------------------------------------

--
-- Table structure for table `rating`
--

CREATE TABLE `rating` (
  `rating_id` int(255) NOT NULL,
  `hostel_id` int(255) NOT NULL,
  `user_id` int(255) NOT NULL,
  `food_id` int(255) NOT NULL,
  `rating` int(255) NOT NULL,
  `timestamp` timestamp(6) NOT NULL DEFAULT current_timestamp(6) ON UPDATE current_timestamp(6),
  `cook_id` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rating`
--

INSERT INTO `rating` (`rating_id`, `hostel_id`, `user_id`, `food_id`, `rating`, `timestamp`, `cook_id`) VALUES
(205, 1, 32, 112, 2, '2023-01-17 03:20:24.886574', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(255) NOT NULL,
  `name` int(255) NOT NULL,
  `hostel_id` int(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `name`, `hostel_id`, `role`, `password`) VALUES
(6, 123456, 6, 'management', '123'),
(8, 555, 5, 'admin', '555'),
(11, 111, 1, 'admin', '111'),
(12, 222, 2, 'admin', '222'),
(14, 444, 4, 'admin', '444'),
(32, 100, 1, 'Student', '100'),
(33, 200, 2, 'Student', '200'),
(34, 400, 4, 'Student', '400'),
(35, 500, 5, 'Student', '500'),
(36, 333, 3, 'admin', '333'),
(37, 300, 3, 'Student', '300');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cook`
--
ALTER TABLE `cook`
  ADD PRIMARY KEY (`cook_id`),
  ADD KEY `hj` (`hostel_id`);

--
-- Indexes for table `desc_rating`
--
ALTER TABLE `desc_rating`
  ADD PRIMARY KEY (`desc_id`),
  ADD KEY `neet` (`user_id`),
  ADD KEY `byy` (`food_id`);

--
-- Indexes for table `food`
--
ALTER TABLE `food`
  ADD PRIMARY KEY (`food_id`),
  ADD KEY `food` (`hostel_id`);

--
-- Indexes for table `hostel`
--
ALTER TABLE `hostel`
  ADD PRIMARY KEY (`hostel_id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD KEY `menu_ibfk_1` (`cook_id`);

--
-- Indexes for table `rating`
--
ALTER TABLE `rating`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `new_user` (`user_id`),
  ADD KEY `new_food` (`food_id`),
  ADD KEY `new_cook` (`cook_id`),
  ADD KEY `new_hostel` (`hostel_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`),
  ADD UNIQUE KEY `name_2` (`name`),
  ADD KEY `user` (`hostel_id`),
  ADD KEY `name` (`name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cook`
--
ALTER TABLE `cook`
  MODIFY `cook_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `desc_rating`
--
ALTER TABLE `desc_rating`
  MODIFY `desc_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `food`
--
ALTER TABLE `food`
  MODIFY `food_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=113;

--
-- AUTO_INCREMENT for table `hostel`
--
ALTER TABLE `hostel`
  MODIFY `hostel_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `rating`
--
ALTER TABLE `rating`
  MODIFY `rating_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cook`
--
ALTER TABLE `cook`
  ADD CONSTRAINT `cook_ibfk_1` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`);

--
-- Constraints for table `desc_rating`
--
ALTER TABLE `desc_rating`
  ADD CONSTRAINT `byy` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`),
  ADD CONSTRAINT `desc_rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `food`
--
ALTER TABLE `food`
  ADD CONSTRAINT `food` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`);

--
-- Constraints for table `menu`
--
ALTER TABLE `menu`
  ADD CONSTRAINT `menu_ibfk_1` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`) ON DELETE NO ACTION;

--
-- Constraints for table `rating`
--
ALTER TABLE `rating`
  ADD CONSTRAINT `new_cook` FOREIGN KEY (`cook_id`) REFERENCES `cook` (`cook_id`) ON DELETE NO ACTION,
  ADD CONSTRAINT `new_food` FOREIGN KEY (`food_id`) REFERENCES `food` (`food_id`),
  ADD CONSTRAINT `new_hostel` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`),
  ADD CONSTRAINT `rating_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `user` FOREIGN KEY (`hostel_id`) REFERENCES `hostel` (`hostel_id`);

DELIMITER $$
--
-- Events
--
CREATE DEFINER=`root`@`localhost` EVENT `my_dayly_event` ON SCHEDULE EVERY 1 DAY STARTS '2023-01-02 09:49:09' ON COMPLETION NOT PRESERVE ENABLE COMMENT 'delete old values.' DO DELETE FROM menu WHERE Created_time<DATE_SUB(NOW(),INTERVAL 7 DAY)$$

DELIMITER ;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
