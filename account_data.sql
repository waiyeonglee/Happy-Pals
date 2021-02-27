-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 27, 2021 at 02:46 PM
-- Server version: 5.7.24
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `happy_pals`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_data`
--

CREATE TABLE `account_data` (
  `user_id` int(11) NOT NULL,
  `hashed_username` varchar(255) DEFAULT NULL,
  `hashed_password` varchar(255) DEFAULT NULL,
  `gift1_bool` tinyint(1) DEFAULT '0',
  `gift2_bool` tinyint(1) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `account_data`
--

INSERT INTO `account_data` (`user_id`, `hashed_username`, `hashed_password`, `gift1_bool`, `gift2_bool`) VALUES
(3, '65e82339fef3c8b46f199f481f73cdcb', '3ba24a25a45c403120d6f5c72bc0c4b5', 0, 0),
(4, '3ba24a25a45c403120d6f5c72bc0c4b5', '3ba24a25a45c403120d6f5c72bc0c4b5', 0, 0),
(5, '4e5be9cf2fab4cbe83bf5787cd3cb931', '12ba0b21c41eea5a44cb966cdf87a554', 0, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account_data`
--
ALTER TABLE `account_data`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account_data`
--
ALTER TABLE `account_data`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
