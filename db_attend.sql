-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 04:23 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_attend`
--

-- --------------------------------------------------------

--
-- Table structure for table `employee_info`
--

CREATE TABLE `employee_info` (
  `Salutation` varchar(255) DEFAULT current_timestamp(),
  `Employee_Code` varchar(255) DEFAULT NULL,
  `First_Name` varchar(255) DEFAULT NULL,
  `Middle_Name` varchar(255) DEFAULT NULL,
  `Last_Name` varchar(255) DEFAULT NULL,
  `Gender` varchar(255) DEFAULT NULL,
  `Marital_Status` varchar(255) DEFAULT NULL,
  `Position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employee_info`
--

INSERT INTO `employee_info` (`Salutation`, `Employee_Code`, `First_Name`, `Middle_Name`, `Last_Name`, `Gender`, `Marital_Status`, `Position`) VALUES
('Mr.', '12345', 'Sameer', 'Bhat', 'Chhetri', 'Male', 'unmarried', 'Manager'),
('Prof.', '777', 'Mausam', 'Bam', 'Pokhrel', 'Male', 'married', 'Officer'),
('Dr.', '123', 'amit', '', 'lama', 'Male', 'unmarried', 'Officer');

-- --------------------------------------------------------

--
-- Table structure for table `intern_info`
--

CREATE TABLE `intern_info` (
  `id` int(11) NOT NULL,
  `employeecode` varchar(255) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `institution` varchar(255) DEFAULT NULL,
  `academic_qualification` varchar(255) DEFAULT NULL,
  `address` varchar(255) DEFAULT NULL,
  `phone_no` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intern_info`
--

INSERT INTO `intern_info` (`id`, `employeecode`, `name`, `institution`, `academic_qualification`, `address`, `phone_no`) VALUES
(38, 'EMP-1690345457', 'lama', 'ncit', '+2', 'sadhabtao', '9860626023'),
(39, 'EMP-1690552842', 'kapil123', 'ncit', '+2', 'lalitpuir', '9860626023');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `content` varchar(255) DEFAULT NULL,
  `sender` varchar(255) DEFAULT NULL,
  `receiver` varchar(255) DEFAULT NULL,
  `sent_date` date DEFAULT NULL,
  `sent_time` time DEFAULT NULL,
  `entrydate` datetime DEFAULT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `content`, `sender`, `receiver`, `sent_date`, `sent_time`, `entrydate`, `name`) VALUES
(5, 'hello', NULL, NULL, NULL, '03:27:06', '2023-10-19 00:00:00', 'samer cheetri'),
(6, 'heelo\r\n', NULL, NULL, NULL, '03:42:57', '2024-11-19 00:00:00', 'samer cheetri'),
(7, 'l,kk', NULL, NULL, NULL, '06:07:11', '2024-12-20 00:00:00', 'samer cheetri'),
(8, 'hi hellow', NULL, NULL, NULL, '08:38:22', '2023-06-07 00:00:00', 'amit'),
(9, 'hiiii', NULL, NULL, NULL, '02:14:51', '2023-12-09 00:00:00', 'amit');

-- --------------------------------------------------------

--
-- Table structure for table `user_attendance`
--

CREATE TABLE `user_attendance` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `logindate` date NOT NULL,
  `logintime` time NOT NULL,
  `usertype` varchar(50) NOT NULL,
  `logouttime` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `user_attendance`
--

INSERT INTO `user_attendance` (`id`, `username`, `logindate`, `logintime`, `usertype`, `logouttime`) VALUES
(1, 'help', '2023-07-20', '02:50:34', 'User', NULL),
(2, 'help', '2023-07-20', '02:54:52', 'User', NULL),
(3, 'help', '2023-07-20', '03:00:32', 'User', '06:45:39'),
(4, 'help', '2023-07-20', '03:02:33', 'User', '06:47:39'),
(5, 'help', '2023-07-20', '03:02:56', 'User', NULL),
(6, 'help', '2023-07-20', '03:07:52', 'User', '06:52:59'),
(7, 'help', '2023-07-20', '03:08:17', 'User', NULL),
(8, 'schhetri', '2023-07-20', '03:14:40', 'Admin', '19:11:46'),
(9, 'help', '2023-07-20', '03:27:26', 'User', NULL),
(10, 'help', '2023-07-20', '03:31:29', 'User', NULL),
(11, 'help', '2023-07-20', '03:34:10', 'User', NULL),
(12, 'help', '2023-07-20', '03:45:25', 'User', NULL),
(13, 'help', '2023-07-20', '03:48:22', 'User', NULL),
(14, 'help', '2023-07-20', '03:51:54', 'User', NULL),
(15, 'help', '2023-07-20', '03:54:23', 'User', NULL),
(16, 'help', '2023-07-20', '03:55:03', 'User', NULL),
(17, 'help', '2023-07-20', '03:58:52', 'User', '08:23:29'),
(18, 'help', '2023-07-20', '04:39:00', 'User', '08:53:17'),
(19, 'test', '2023-07-20', '05:09:18', 'Admin', NULL),
(20, 'help', '2023-07-20', '07:55:40', 'User', '11:46:03'),
(21, 'help', '2023-07-20', '08:01:15', 'User', NULL),
(22, 'help', '2023-07-20', '08:32:54', 'User', NULL),
(23, 'help', '2023-07-23', '05:38:40', 'User', '09:24:32'),
(24, 'test', '2023-07-23', '05:40:17', 'Admin', '09:27:05'),
(25, 'test', '2023-07-23', '03:34:12', 'Admin', NULL),
(26, 'help', '2023-07-23', '03:39:48', 'User', '07:25:19'),
(27, 'test', '2023-07-23', '03:40:29', 'Admin', '21:10:58'),
(28, 'help', '2023-07-23', '05:28:10', 'User', '09:39:45'),
(29, 'test', '2023-07-23', '05:54:54', 'Admin', '22:01:45'),
(30, 'help', '2023-07-23', '06:16:55', 'User', '10:02:37'),
(31, 'test', '2023-07-23', '06:17:46', 'Admin', '22:11:08'),
(32, 'test', '2023-07-23', '06:27:47', 'Admin', '22:13:15'),
(33, 'schhetri', '2023-07-23', '06:34:12', 'Admin', '22:20:09'),
(34, 'schhetri', '2023-07-23', '06:35:21', 'Admin', '23:00:47'),
(35, 'help', '2023-07-23', '07:16:16', 'User', NULL),
(36, 'help', '2023-07-23', '07:18:22', 'User', NULL),
(37, 'test', '2023-07-23', '07:23:26', 'Admin', NULL),
(38, 'test', '2023-07-24', '05:52:12', 'Admin', NULL),
(39, 'help', '2023-07-24', '06:18:13', 'User', '10:04:25'),
(40, 'schhetri', '2023-07-24', '06:20:36', 'Admin', '10:10:53'),
(41, 'help', '2023-07-24', '06:26:13', 'User', NULL),
(42, 'test', '2023-07-24', '06:27:10', 'Admin', '10:13:32'),
(43, 'help', '2023-07-24', '06:28:45', 'User', '10:14:57'),
(44, 'schhetri', '2023-07-24', '06:30:08', 'Admin', '10:18:34'),
(45, 'help', '2023-07-24', '06:34:06', 'User', '10:19:20'),
(46, 'schhetri', '2023-07-24', '11:35:14', 'Admin', '15:22:42'),
(47, 'help', '2023-07-24', '11:37:51', 'User', '03:23:18'),
(48, 'schhetri', '2023-07-24', '12:20:53', 'Admin', '16:16:31'),
(49, 'schhetri', '2023-07-24', '05:39:19', 'Admin', '21:28:44'),
(50, 'help', '2023-07-24', '05:43:51', 'User', '09:29:31'),
(51, 'schhetri', '2023-07-25', '05:01:01', 'Admin', '08:59:41'),
(52, 'help', '2023-07-25', '05:15:06', 'User', '09:18:29'),
(53, 'schhetri', '2023-07-25', '05:37:01', 'Admin', '09:22:54'),
(54, 'help', '2023-07-25', '05:37:59', 'User', '09:37:42'),
(55, 'schhetri', '2023-07-25', '06:14:07', 'Admin', '10:13:50'),
(56, 'schhetri', '2023-07-25', '06:29:04', 'Admin', NULL),
(57, 'schhetri', '2023-07-25', '06:32:11', 'Admin', '10:19:46'),
(58, 'schhetri', '2023-07-25', '06:57:43', 'Admin', '10:44:52'),
(59, 'help', '2023-07-25', '07:00:03', 'User', '10:46:15'),
(60, 'schhetri', '2023-07-25', '07:02:44', 'Admin', NULL),
(61, 'help', '2023-07-25', '04:41:12', 'User', '08:26:24'),
(62, 'schhetri', '2023-07-26', '04:56:49', 'Admin', '09:14:09'),
(63, 'schhetri', '2023-07-26', '05:39:08', 'Admin', '09:40:53'),
(64, 'schhetri', '2023-07-26', '06:23:26', 'Admin', '05:29:14'),
(65, 'schhetri', '2023-07-28', '03:57:34', 'Admin', NULL),
(66, 'schhetri', '2023-08-05', '03:23:35', 'Admin', '02:23:44'),
(67, 'schhetri', '2023-08-05', '03:24:11', 'Admin', '02:25:54'),
(68, 'help', '2023-08-05', '03:26:10', 'User', '07:12:10'),
(69, 'schhetri', '2023-08-05', '03:27:21', 'Admin', '02:27:41'),
(70, 'help', '2023-08-05', '03:27:55', 'User', '07:15:26'),
(71, 'schhetri', '2023-08-05', '03:30:57', 'Admin', '02:36:41'),
(72, 'help', '2023-08-05', '03:36:51', 'User', '07:27:27'),
(73, 'help', '2023-08-05', '03:42:36', 'User', '07:28:00'),
(74, 'schhetri', '2023-08-05', '03:43:06', 'Admin', '02:50:49'),
(75, 'schhetri', '2023-08-05', '04:09:22', 'Admin', NULL),
(76, 'schhetri', '2023-08-05', '04:21:46', 'Admin', '03:29:18'),
(77, 'schhetri', '2023-08-05', '04:29:38', 'Admin', '03:35:18'),
(78, 'schhetri', '2023-08-05', '04:35:39', 'Admin', NULL),
(79, 'schhetri', '2023-08-05', '04:39:19', 'Admin', '03:41:41'),
(80, 'schhetri', '2023-08-05', '04:41:56', 'Admin', NULL),
(81, 'schhetri', '2023-08-05', '04:49:02', 'Admin', NULL),
(82, 'schhetri', '2023-08-05', '05:14:03', 'Admin', '04:23:58'),
(83, 'help', '2023-08-05', '05:24:51', 'User', '09:10:40'),
(84, 'schhetri', '2023-08-05', '05:25:47', 'Admin', '04:26:06'),
(85, 'schhetri', '2023-08-05', '05:26:18', 'Admin', '04:26:19'),
(86, 'help', '2023-08-05', '05:26:30', 'User', '09:14:43'),
(87, 'help', '2023-08-05', '05:40:22', 'User', '09:26:01'),
(88, 'schhetri', '2023-08-05', '05:42:07', 'Admin', '04:50:10'),
(89, 'schhetri', '2023-08-15', '05:22:38', 'Admin', '16:24:07'),
(90, 'help', '2023-08-15', '05:24:13', 'User', '09:09:22'),
(91, 'schhetri', '2023-08-15', '05:24:33', 'Admin', NULL),
(92, 'schhetri', '2023-08-15', '05:31:10', 'Admin', NULL),
(93, 'schhetri', '2023-09-24', '06:05:30', 'Admin', '05:06:39'),
(94, 'help', '2023-09-24', '06:06:46', 'User', '09:52:15'),
(95, 'schhetri', '2023-09-24', '06:07:20', 'Admin', NULL),
(96, 'schhetri', '2023-11-13', '03:05:02', 'Admin', NULL),
(97, 'schhetri', '2023-11-13', '03:13:54', 'Admin', NULL),
(98, 'kapil12', '2023-11-13', '03:16:12', 'Admin', NULL),
(99, 'kapil12', '2023-11-15', '04:43:26', 'Admin', '15:43:40'),
(100, 'help', '2023-11-15', '04:43:57', 'User', '09:29:01'),
(101, 'amit121', '2023-12-10', '08:04:36', 'Admin', '07:07:48'),
(102, 'amit', '2023-12-10', '08:08:10', 'User', NULL),
(103, 'amit', '2023-12-10', '08:37:04', 'User', '01:28:01'),
(104, 'amit121', '2023-12-10', '08:46:13', 'Admin', '07:46:51'),
(105, 'ronish', '2023-12-10', '08:47:03', 'User', '01:32:07'),
(106, 'amit121', '2023-12-10', '08:47:33', 'Admin', '07:47:54'),
(107, 'amitdon', '2023-12-10', '08:48:08', 'User', NULL),
(108, 'amit121', '2023-12-12', '02:09:58', 'Admin', '01:12:37'),
(109, 'amit121', '2023-12-12', '02:13:01', 'Admin', '01:13:08'),
(110, 'amit', '2023-12-12', '02:13:35', 'User', '07:00:01'),
(111, 'amit121', '2023-12-12', '02:15:11', 'Admin', '01:17:13'),
(112, 'amit', '2023-12-12', '02:17:24', 'User', '07:02:42'),
(113, 'amit121', '2023-12-12', '02:17:49', 'Admin', '01:18:01'),
(114, 'amit121', '2023-12-12', '02:18:19', 'Admin', '01:18:55'),
(115, 'amit', '2023-12-12', '02:19:18', 'User', '07:04:25'),
(116, 'amit121', '2023-12-12', '02:19:35', 'Admin', '01:20:21'),
(117, 'amit', '2023-12-12', '02:22:39', 'User', '07:08:42'),
(118, 'amit121', '2023-12-12', '02:26:56', 'Admin', '01:27:22'),
(119, 'amit', '2023-12-12', '02:31:52', 'User', '07:17:23'),
(120, 'amit121', '2023-12-12', '02:32:30', 'Admin', '01:33:22'),
(121, 'ramesh', '2023-12-12', '02:33:36', 'User', '07:20:31');

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE `user_table` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `userpassword` varchar(50) NOT NULL,
  `usertype` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_table`
--

INSERT INTO `user_table` (`id`, `username`, `userpassword`, `usertype`) VALUES
(4, 'amit121', 'amit123', 'admin'),
(5, 'amit121', 'amit123', 'admin'),
(22, 'schhetri', 'admin', 'admin'),
(24, 'help', 'user', 'user'),
(35, 'kapil12', 'kapil12', 'admin'),
(36, 'amit', '123', 'user'),
(37, 'kapil', '123', 'user'),
(38, 'ronish', '000', 'user'),
(39, 'amitdon', '0000', 'user'),
(40, 'kapil24', '123', 'user'),
(41, 'kapil234', '1234', 'user'),
(42, 'ramesh', '242', 'user'),
(43, 'amit121', 'amit123', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intern_info`
--
ALTER TABLE `intern_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_attendance`
--
ALTER TABLE `user_attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_table`
--
ALTER TABLE `user_table`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intern_info`
--
ALTER TABLE `intern_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `user_attendance`
--
ALTER TABLE `user_attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=122;

--
-- AUTO_INCREMENT for table `user_table`
--
ALTER TABLE `user_table`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
