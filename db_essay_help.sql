-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2024 at 09:44 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_essay_help`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_password` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id`, `admin_name`, `admin_password`, `admin_email`) VALUES
(1, 'Superadmin', '5N~T}zni^xZk', 'essay@writing.com');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contact`
--

CREATE TABLE `tbl_contact` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `name` varchar(50) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `message` varchar(400) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_contact`
--

INSERT INTO `tbl_contact` (`id`, `email`, `name`, `phone`, `message`, `time_stamp`) VALUES
(1, 'masumbinshaukat@gmail.com', 'masum binshaukat', '+92888888888', 'Just Testing', '2024-11-17 16:04:14'),
(2, 'huzaifa@gmail.com', 'huzaifa', '9999999999999', 'Testing 123', '2024-11-17 16:10:56');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE `tbl_user` (
  `id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `user_number` varchar(20) NOT NULL,
  `time_stamp` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`id`, `user_name`, `user_email`, `user_password`, `user_number`, `time_stamp`) VALUES
(1, 'Test 1', 'test1@gmail.com', 'hello123', '123456789', '2024-11-24 15:49:11'),
(2, 'Test 2', 'test2@gmail.com', 'Hello123', '123456789', '2024-11-25 00:16:16'),
(3, 'Test 3', 'test3@gmail.com', 'hello123', '1234567890', '2024-11-25 00:25:51'),
(4, 'Test 4', 'test4@gmail.com', 'hello123', '123456789', '2024-11-25 00:27:30'),
(5, 'Test 5', 'test5@gmail.com', 'hello123', '12345678910', '2024-11-25 00:29:02'),
(6, 'Test 6 ', 'test6@gmail.com', 'hello123', '123456789', '2024-11-25 00:30:24'),
(7, 'Test 7', 'test7@gmail.com', 'hello123', '1223333333333', '2024-11-25 00:32:08'),
(8, 'Test 8', 'test8@gmail.com', 'hello123', '111111111111', '2024-11-25 00:32:54'),
(9, 'Test 9', 'test9@gmail.com', 'hello123', '5555559999999', '2024-11-25 00:34:44'),
(10, 'Test 10', 'test10@gmail.com', 'hello123', '19484888888', '2024-11-25 00:36:57'),
(11, 'Test 11', 'test11@gmail.com', 'hello123', '84784788888', '2024-11-25 00:40:33'),
(12, 'Test 12', 'test12@gmail.com', 'hello123', '1234567890', '2024-11-25 00:42:08'),
(13, 'Test 13', 'test13@gmail.com', 'hello123', '81282727777', '2024-11-25 00:43:49'),
(14, 'Test 14', 'test14@gmail.com', 'hello123', '617368766', '2024-11-25 00:46:23'),
(15, 'Test 15', 'test15@gmail.com', 'hello123', '1234567677', '2024-11-25 00:50:33'),
(16, 'Test 16', 'test16@gmail.com', 'jhhiohip', '333333333', '2024-11-25 00:56:22'),
(17, 'Test 17', 'test17@gmail.com', 'hello123', '2767368', '2024-11-25 00:57:37'),
(18, 'Test 18', 'test18@gmail.com', 'hello123', '267778687675', '2024-11-25 00:58:47'),
(19, 'Test 19', 'test19@gmail.com', 'hello123', '76856546758', '2024-11-25 01:00:52'),
(20, 'Test 20', 'test20@gmail.com', 'hello123', '726786786', '2024-11-25 01:01:59');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email` (`admin_email`);

--
-- Indexes for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`user_email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_contact`
--
ALTER TABLE `tbl_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
