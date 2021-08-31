-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2021 at 05:13 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `studentlogin`
--

CREATE TABLE `studentlogin` (
  `id` bigint(11) NOT NULL,
  `sid` bigint(20) NOT NULL,
  `sname` varchar(50) NOT NULL,
  `sroll` int(11) NOT NULL,
  `semail` varchar(50) NOT NULL,
  `sphone` varchar(10) NOT NULL,
  `scourse` varchar(30) NOT NULL,
  `ssem` varchar(50) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `sid`, `sname`, `sroll`, `semail`, `sphone`, `scourse`, `ssem`, `spassword`, `date`) VALUES
(16, 67929, 'Sukanta', 2020, 'paulsukanta440@gmail.com', '7523682140', 'BCA', '3rd Year(5th Semester/6th Semester)', '123', '2021-08-31 14:50:21');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`sroll`),
  ADD KEY `uid` (`sid`),
  ADD KEY `sname` (`sname`),
  ADD KEY `date` (`date`),
  ADD KEY `course` (`scourse`),
  ADD KEY `sem` (`ssem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
