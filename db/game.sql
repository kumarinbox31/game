-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2023 at 04:34 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `game`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblamin`
--

CREATE TABLE `tblamin` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblamin`
--

INSERT INTO `tblamin` (`id`, `username`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', 'admin', '2023-10-03 04:40:35', '2023-10-03 04:40:35');

-- --------------------------------------------------------

--
-- Table structure for table `tblbettings`
--

CREATE TABLE `tblbettings` (
  `id` int(11) NOT NULL,
  `gamid` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `color` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `won` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblgames`
--

CREATE TABLE `tblgames` (
  `id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `period` int(11) NOT NULL COMMENT 'in minute',
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblgames`
--

INSERT INTO `tblgames` (`id`, `title`, `period`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Partiy', 3, '1', '2023-10-03 04:38:33', '2023-10-03 04:38:33');

-- --------------------------------------------------------

--
-- Table structure for table `tblperiods`
--

CREATE TABLE `tblperiods` (
  `id` int(11) NOT NULL,
  `gameid` int(11) NOT NULL,
  `result_color` int(11) DEFAULT NULL,
  `result_number` int(11) NOT NULL,
  `period` int(11) NOT NULL,
  `commission` int(11) DEFAULT NULL,
  `status` enum('0','1') NOT NULL COMMENT '0=started,1=completed',
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tblusers`
--

CREATE TABLE `tblusers` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `mobile` varchar(23) NOT NULL,
  `email` varchar(100) NOT NULL,
  `status` enum('0','1') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tblusers`
--

INSERT INTO `tblusers` (`id`, `username`, `password`, `name`, `mobile`, `email`, `status`, `created_at`, `updated_at`) VALUES
(1, '1234567890', '1234', 'Suraj Yadav', '1234567890', 'test@gmail.com', '1', '2023-10-03 04:39:57', '2023-10-03 04:40:07');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblamin`
--
ALTER TABLE `tblamin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblbettings`
--
ALTER TABLE `tblbettings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblgames`
--
ALTER TABLE `tblgames`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblperiods`
--
ALTER TABLE `tblperiods`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblusers`
--
ALTER TABLE `tblusers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblamin`
--
ALTER TABLE `tblamin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblbettings`
--
ALTER TABLE `tblbettings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblgames`
--
ALTER TABLE `tblgames`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tblperiods`
--
ALTER TABLE `tblperiods`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tblusers`
--
ALTER TABLE `tblusers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
