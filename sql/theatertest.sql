-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2021 at 05:38 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `theatertest`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_ID` int(11) NOT NULL,
  `b_address` varchar(100) DEFAULT NULL,
  `b_name` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `c_id` int(11) NOT NULL,
  `c_fname` varchar(50) NOT NULL,
  `c_lname` varchar(50) NOT NULL,
  `c_birthday` date NOT NULL,
  `c_sex` varchar(6) NOT NULL,
  `c_address` varchar(100) DEFAULT NULL,
  `c_MStatus` tinyint(1) NOT NULL,
  `c_email` varchar(20) NOT NULL,
  `c_password` varchar(100) NOT NULL,
  `c_phone` int(15) NOT NULL,
  `m_ID` int(11) DEFAULT NULL,
  `fd_ID` int(11) DEFAULT NULL,
  `se_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`c_id`, `c_fname`, `c_lname`, `c_birthday`, `c_sex`, `c_address`, `c_MStatus`, `c_email`, `c_password`, `c_phone`, `m_ID`, `fd_ID`, `se_ID`) VALUES
(1, 'Customer', 'Test', '2010-10-10', 'm', 'adsfasdf', 0, 'test01@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 21114, NULL, NULL, NULL),
(2, 'Phanupong', 'Fake Headphone', '2010-10-10', 'dunkno', 'Anime world', 0, 'test02@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 899999999, NULL, NULL, NULL),
(4, 'T3', 'T3', '2010-10-10', 'm', 'adsfasdf', 0, 'test03@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 21114, NULL, NULL, NULL),
(5, 'T4', 'T1', '2010-10-10', 'm', '1154asd', 0, 'test04@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 215164, NULL, NULL, NULL),
(6, 'T5', 'T5', '2010-10-10', 'm', 'asdads', 0, 'test05@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 3254545, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `food_drink`
--

CREATE TABLE `food_drink` (
  `fd_ID` int(11) NOT NULL,
  `fd_name` varchar(100) DEFAULT NULL,
  `fd_type` varchar(20) DEFAULT NULL,
  `fd_size` varchar(20) DEFAULT NULL,
  `fd_price` float DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `food_drink`
--

INSERT INTO `food_drink` (`fd_ID`, `fd_name`, `fd_type`, `fd_size`, `fd_price`, `c_id`) VALUES
(1, 'Pepsi', 'Drink', 's', 17, NULL),
(2, 'Popcorn', 'Food', 'M', 75, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `m_ID` int(11) NOT NULL,
  `m_Name` varchar(50) NOT NULL,
  `m_Rate` varchar(10) NOT NULL,
  `m_Type` varchar(100) NOT NULL,
  `m_Language` varchar(100) NOT NULL,
  `m_Time` varchar(10) DEFAULT NULL,
  `m_System` varchar(50) DEFAULT NULL,
  `sht_ID` int(11) DEFAULT NULL,
  `th_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`m_ID`, `m_Name`, `m_Rate`, `m_Type`, `m_Language`, `m_Time`, `m_System`, `sht_ID`, `th_ID`) VALUES
(1, 'Venom', '18', 'Action', 'ENG', '120min', 'Digital', NULL, NULL),
(2, 'Aquaman', '18', 'Action', 'ENG', '120min', 'Digital', NULL, NULL),
(3, 'Godzilla', '18', 'Action', 'ENG', '120min', 'Digital', NULL, NULL),
(4, 'Iron man 3', '18', 'Action', 'ENG', '115min', 'Digital', NULL, NULL),
(5, 'Fantastic beasts and where to find them', '18', 'Fantacy', 'ENG', '120min', 'Digital', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `seat`
--

CREATE TABLE `seat` (
  `se_ID` int(11) NOT NULL,
  `se_price` int(11) NOT NULL,
  `se_name` varchar(50) NOT NULL,
  `se_type` varchar(50) NOT NULL,
  `se_status` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `seat`
--

INSERT INTO `seat` (`se_ID`, `se_price`, `se_name`, `se_type`, `se_status`) VALUES
(1, 150, 'A1', 'default', 1),
(2, 150, 'A2', 'default', 1),
(3, 150, 'A3', 'default', 1),
(4, 150, 'A4', 'default', 1),
(5, 150, 'A5', 'default', 1),
(6, 150, 'B1', 'default', 1),
(7, 150, 'B2', 'default', 1),
(8, 150, 'B3', 'default', 1),
(9, 150, 'B4', 'default', 1),
(10, 150, 'B5', 'default', 1),
(11, 150, 'C1', 'default', 1),
(12, 150, 'C2', 'default', 1),
(13, 150, 'C3', 'default', 1),
(14, 150, 'C4', 'default', 1),
(15, 150, 'C5', 'default', 1),
(16, 150, 'D1', 'default', 1),
(17, 150, 'D2', 'default', 1),
(18, 150, 'D3', 'default', 1),
(19, 150, 'D4', 'default', 1),
(20, 150, 'D5', 'default', 1),
(21, 150, 'E1', 'default', 1),
(22, 150, 'E2', 'default', 1),
(23, 150, 'E3', 'default', 1),
(24, 150, 'E4', 'default', 1),
(25, 150, 'E5', 'default', 1),
(27, 1, '150', '', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `showtime`
--

CREATE TABLE `showtime` (
  `sht_ID` int(11) NOT NULL,
  `sht_start` varchar(10) DEFAULT NULL,
  `sht_end` varchar(10) DEFAULT NULL,
  `m_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_ID` int(11) NOT NULL,
  `s_Fname` varchar(50) DEFAULT NULL,
  `s_Lname` varchar(50) DEFAULT NULL,
  `s_email` varchar(50) DEFAULT NULL,
  `s_password` varchar(100) DEFAULT NULL,
  `s_address` varchar(100) NOT NULL,
  `s_position` varchar(50) DEFAULT NULL,
  `s_Wtime` float NOT NULL,
  `s_salary` int(11) DEFAULT NULL,
  `b_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_ID`, `s_Fname`, `s_Lname`, `s_email`, `s_password`, `s_address`, `s_position`, `s_Wtime`, `s_salary`, `b_ID`) VALUES
(1, 'Test', 'Staff', '$taff01@db.com', '81dc9bdb52d04dc20036dbd8313ed055', 'aaasdasd', 'head', 24, 12000, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `theater`
--

CREATE TABLE `theater` (
  `th_ID` int(11) NOT NULL,
  `th_seatType` varchar(100) NOT NULL,
  `b_ID` int(11) DEFAULT NULL,
  `m_ID` int(11) DEFAULT NULL,
  `se_ID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_ID`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`c_id`),
  ADD KEY `m_ID` (`m_ID`),
  ADD KEY `customer_ibfk_2` (`fd_ID`),
  ADD KEY `customer_ibfk_3` (`se_ID`);

--
-- Indexes for table `food_drink`
--
ALTER TABLE `food_drink`
  ADD PRIMARY KEY (`fd_ID`),
  ADD KEY `c_id` (`c_id`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`m_ID`),
  ADD KEY `sht_ID` (`sht_ID`),
  ADD KEY `th_ID` (`th_ID`);

--
-- Indexes for table `seat`
--
ALTER TABLE `seat`
  ADD PRIMARY KEY (`se_ID`);

--
-- Indexes for table `showtime`
--
ALTER TABLE `showtime`
  ADD PRIMARY KEY (`sht_ID`),
  ADD KEY `m_ID` (`m_ID`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_ID`),
  ADD KEY `b_ID` (`b_ID`);

--
-- Indexes for table `theater`
--
ALTER TABLE `theater`
  ADD PRIMARY KEY (`th_ID`),
  ADD KEY `b_ID` (`b_ID`),
  ADD KEY `theater_ibfk_2` (`m_ID`),
  ADD KEY `se_ID` (`se_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `b_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `c_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `food_drink`
--
ALTER TABLE `food_drink`
  MODIFY `fd_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `m_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seat`
--
ALTER TABLE `seat`
  MODIFY `se_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `showtime`
--
ALTER TABLE `showtime`
  MODIFY `sht_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theater`
--
ALTER TABLE `theater`
  MODIFY `th_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `branch_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`m_ID`) REFERENCES `movie` (`m_ID`),
  ADD CONSTRAINT `customer_ibfk_2` FOREIGN KEY (`fd_ID`) REFERENCES `food_drink` (`fd_ID`),
  ADD CONSTRAINT `customer_ibfk_3` FOREIGN KEY (`se_ID`) REFERENCES `seat` (`se_ID`);

--
-- Constraints for table `food_drink`
--
ALTER TABLE `food_drink`
  ADD CONSTRAINT `food_drink_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `customer` (`c_id`);

--
-- Constraints for table `movie`
--
ALTER TABLE `movie`
  ADD CONSTRAINT `movie_ibfk_1` FOREIGN KEY (`sht_ID`) REFERENCES `showtime` (`sht_ID`),
  ADD CONSTRAINT `movie_ibfk_2` FOREIGN KEY (`th_ID`) REFERENCES `theater` (`th_ID`);

--
-- Constraints for table `showtime`
--
ALTER TABLE `showtime`
  ADD CONSTRAINT `showtime_ibfk_1` FOREIGN KEY (`m_ID`) REFERENCES `movie` (`m_ID`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`b_ID`) REFERENCES `branch` (`b_ID`);

--
-- Constraints for table `theater`
--
ALTER TABLE `theater`
  ADD CONSTRAINT `theater_ibfk_1` FOREIGN KEY (`b_ID`) REFERENCES `branch` (`b_ID`),
  ADD CONSTRAINT `theater_ibfk_2` FOREIGN KEY (`m_ID`) REFERENCES `movie` (`m_ID`),
  ADD CONSTRAINT `theater_ibfk_3` FOREIGN KEY (`se_ID`) REFERENCES `seat` (`se_ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
