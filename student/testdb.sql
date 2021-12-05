-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 04:23 PM
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
-- Table structure for table `ans_set`
--

CREATE TABLE `ans_set` (
  `nos` int(100) NOT NULL,
  `e_id` varchar(255) NOT NULL,
  `s_id` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `marks` int(255) NOT NULL,
  `f_mark` int(255) NOT NULL,
  `p_mark` int(255) NOT NULL,
  `s_name` varchar(255) NOT NULL,
  `ck` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ans_set`
--

INSERT INTO `ans_set` (`nos`, `e_id`, `s_id`, `status`, `time`, `marks`, `f_mark`, `p_mark`, `s_name`, `ck`) VALUES
(46, 'EID-PASS3RD196361', '211', 1, '2021-10-02 03:17:18', 3, 23, 23, 'Abhishek Das', 1),
(47, 'EID-PASS3RD196361', '321', 1, '2021-10-02 03:18:55', 3, 23, 23, 'rahul gu khawra', 0),
(48, 'EID-PASS3RD912485', '211', 1, '2021-10-02 03:29:05', 3, 122, 33, 'Abhishek Das', 0),
(50, 'EID-PASS3RD776789', '211', 1, '2021-10-02 03:41:39', 6, 123, 232, 'Abhishek Das', 0),
(51, 'EID-HONS3RD125213', '211', 1, '2021-10-02 03:59:48', 1, 123, 2, 'Abhishek Das', 0),
(53, 'EID-PASS3RD912485', '321', 1, '2021-10-02 04:01:26', 3, 122, 33, 'rahul gu khawra', 0),
(54, 'EID-PASS3RD716482', '321', 1, '2021-10-02 04:03:38', 4, 100, 30, 'rahul gu khawra', 0),
(55, 'EID-PASS3RD794262', '211', 1, '2021-10-03 00:07:12', 6, 2, 12, 'Abhishek Das', 1),
(56, 'EID-PASS2ND754501', '40739', 1, '2021-10-04 13:48:46', 0, 200, 100, 'Sukanta Paul', 0),
(57, 'EID-PASS3RD371261', '40739', 1, '2021-10-04 15:18:26', 0, 100, 30, 'Sukanta Paul', 0);

-- --------------------------------------------------------

--
-- Table structure for table `dept`
--

CREATE TABLE `dept` (
  `nos` int(255) NOT NULL,
  `t_dept` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `subs` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dept`
--

INSERT INTO `dept` (`nos`, `t_dept`, `type`, `name`, `subs`) VALUES
(1, 'alteng', 'HONS', 'TDC Honours ', ''),
(2, 'alteng', 'PASS', 'TDC Pass', ''),
(3, 'compsca', 'compa', '', ''),
(4, 'compsca', 'compsc', '', ''),
(5, '', '', '', ''),
(6, '', '', '', 'asd');

-- --------------------------------------------------------

--
-- Table structure for table `qs`
--

CREATE TABLE `qs` (
  `nos` int(255) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `e_id` varchar(255) NOT NULL,
  `question` varchar(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `marks` int(100) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `oa` varchar(255) NOT NULL,
  `ob` varchar(255) NOT NULL,
  `oc` varchar(255) NOT NULL,
  `od` varchar(255) NOT NULL,
  `q_desc` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qs`
--

INSERT INTO `qs` (`nos`, `unique_id`, `e_id`, `question`, `ans`, `marks`, `time`, `oa`, `ob`, `oc`, `od`, `q_desc`) VALUES
(433, 'ab12', 'EID-PASS2ND354020', 'asd', '', 0, '2021-09-05 15:55:58', '', '', '', '', '0'),
(434, 'ab12', 'EID-PASS2ND354020', 'asd', '', 0, '2021-09-05 15:55:58', '', '', '', '', '0'),
(435, 'ab12', 'EID-PASS2ND354020', 'asd', '', 0, '2021-09-05 15:56:00', '', '', '', '', '0'),
(436, 'ab12', 'EID-PASS2ND354020', 'asd', '', 0, '2021-09-05 15:56:00', '', '', '', '', '0'),
(437, 'ab12', 'EID-PASS2ND354020', 'asd', '', 0, '2021-09-05 15:56:02', '', '', '', '', '0'),
(438, 'ab12', 'EID-PASS2ND354020', 'asd', '', 0, '2021-09-05 15:56:02', '', '', '', '', '0'),
(439, 'ab12', 'EID-HONS2ND130580', 'ad', '', 0, '2021-09-05 15:56:15', '', '', '', '', '0'),
(440, 'ab12', 'EID-HONS2ND130580', 'ads', '', 0, '2021-09-05 15:56:15', '', '', '', '', '0'),
(441, 'ab12', 'EID-HONS1ST729420', 'asd', '', 0, '2021-09-05 15:57:15', '', '', '', '', '0'),
(442, 'ab12', 'EID-HONS1ST729420', 'asd', '', 0, '2021-09-05 15:57:15', '', '', '', '', '0'),
(443, 'ab12', 'EID-HONS2ND952447', 'hi', '', 0, '2021-09-05 15:58:50', '', '', '', '', '0'),
(444, 'ab12', 'EID-HONS2ND952447', 'hi', '', 0, '2021-09-05 15:58:50', '', '', '', '', '0'),
(445, 'ab12', 'EID-PASS2ND560861', 'sada', '', 0, '2021-09-05 16:00:30', '', '', '', '', '0'),
(446, 'ab12', 'EID-PASS2ND560861', 'dasda', '', 0, '2021-09-05 16:00:30', '', '', '', '', '0'),
(447, 'ab12', 'EID-PASS2ND285554', 'dasd', '', 0, '2021-09-05 16:21:27', '', '', '', '', '0'),
(448, 'ab12', 'EID-PASS2ND285554', 'asdasd', '', 0, '2021-09-05 16:21:27', '', '', '', '', '0'),
(449, 'ab12', 'EID-HONS1ST484272', 'this is a question', '', 0, '2021-09-06 01:34:40', '', '', '', '', '0'),
(450, 'ab12', 'EID-HONS1ST484272', 'i know r9ght', '', 0, '2021-09-06 01:34:40', '', '', '', '', '0'),
(451, 'ab12', 'EID-HONS1ST350040', 'hi', '', 0, '2021-09-06 01:36:21', '', '', '', '', '0'),
(452, 'ab12', 'EID-HONS1ST350040', 'fail', '', 0, '2021-09-06 01:36:21', '', '', '', '', '0'),
(453, 'ab12', 'EID-HONS825181', 'asdasd', '', 0, '2021-09-06 03:21:37', '', '', '', '', '0'),
(454, 'ab12', 'EID-HONS825181', 'asd', '', 0, '2021-09-06 03:21:37', '', '', '', '', '0'),
(455, 'ab12', 'EID-HONS1ST126115', 'Qsdad', '', 0, '2021-09-06 19:35:55', '', '', '', '', '0'),
(456, 'ab12', 'EID-HONS1ST126115', 'asda', '', 0, '2021-09-06 19:35:55', '', '', '', '', '0'),
(457, 'ab12', 'EID-HONS1ST126115', 'sdasda', '', 0, '2021-09-06 19:35:55', '', '', '', '', '0'),
(468, 'ab12', 'EID-PASS3RD091132', 'What is capital of India', 'A', 0, '2021-09-06 20:47:07', 'Delhi', 'Assam', 'Tamilnadu', 'Mumbai', '0'),
(469, 'ab12', 'EID-PASS3RD091132', 'What is DBMS', 'D', 0, '2021-09-06 20:48:46', 'Data Base Manipulation System', 'Dadur Bari Muri Sas', 'Delta Board Multi System', 'Data Base Management System', '0'),
(470, 'ab12', 'EID-PASS3RD091132', 'How are u?', 'C', 0, '2021-09-06 20:49:04', 'Fine', 'Good', 'Not well ', 'I dont Care', '0'),
(471, 'ab12', 'EID-PASS3RD091132', 'What is computer?', 'D', 0, '2021-09-06 20:49:34', 'Jani na', 'Comute jaty kore', 'Tumar Dady', 'YEeet', '0'),
(473, 'ab12', 'EID-PASS3RD596784', 'who are u bitch', 'A', 0, '2021-09-06 23:53:25', 'i m abhi', 'u r gand', 'u fuck ', 'suck bitch', '0'),
(474, 'ab12', 'EID-PASS3RD174231', 'How is Ur Day?', '', 0, '2021-09-07 01:32:05', '', '', '', '', '0'),
(475, 'ab12', 'EID-PASS3RD174231', 'Why Sky is blue?', '', 0, '2021-09-07 01:32:05', '', '', '', '', '0'),
(476, 'ab12', 'EID-PASS3RD174231', 'How Life is Formed', '', 0, '2021-09-07 01:32:05', '', '', '', '', '0'),
(477, 'ab12', 'EID-PASS3RD174231', 'What is capital of India', 'A', 0, '2021-09-07 01:32:52', 'Assam', 'Delhi', 'Gangtak', 'Mumbai', '0'),
(478, 'ab12', 'EID-PASS3RD174231', 'What is ur name', 'A', 0, '2021-09-07 01:33:24', 'Recker', 'Abhi', 'Sukanta', 'Kritidipto', '0'),
(479, 'ab12', 'EID-PASS3RD174231', 'Do u like songs?', 'D', 0, '2021-09-07 01:33:56', 'Yes, I make Them.', 'nah', 'aahhaa', 'NOthing else matters', '0'),
(481, 'ab12', 'EID-PASS3RD306952', 'asdasd', '', 0, '2021-09-07 01:53:50', '', '', '', '', '0'),
(482, 'ab12', 'EID-PASS3RD306952', 'asdasd', '', 0, '2021-09-07 01:53:50', '', '', '', '', '0'),
(483, 'ab12', 'EID-PASS2ND724705', 'how are u', '', 0, '2021-09-07 02:22:38', '', '', '', '', '0'),
(484, 'ab12', 'EID-PASS2ND724705', 'hey', '', 0, '2021-09-07 02:22:38', '', '', '', '', '0'),
(485, 'ab12', 'EID-PASS3RD196361', 'What is capital of Indiasss', 'D', 0, '2021-09-07 03:20:13', 'Assamsss', 'Delhisss', 'Abhiss', 'Pakistanss', '0'),
(487, 'ab12', 'EID-PASS3RD196361', 'What is capital of India', 'C', 0, '2021-09-07 03:23:23', 'asd', 'asddas', 'Delhi', 'Mumbai', '0'),
(491, 'ab12', 'EID-PASS3RD794262', 'dasd', '', 1, '2021-09-07 20:51:34', '', '', '', '', '0'),
(492, 'ab12', 'EID-PASS3RD794262', 'asdasda', '', 2, '2021-09-07 20:51:34', '', '', '', '', '0'),
(493, 'ab12', 'EID-PASS3RD794262', 'asda', '', 3, '2021-09-07 20:51:42', '', '', '', '', '0'),
(494, 'ab12', 'EID-PASS3RD794262', 'sdas', '', 3, '2021-09-07 20:51:42', '', '', '', '', '0'),
(499, 'ab12', 'EID-HONS3RD125213', 'asdasd', '', 0, '2021-09-08 18:55:27', '', '', '', '', '0'),
(500, 'ab12', 'EID-HONS3RD125213', 'asd', '', 0, '2021-09-08 18:55:27', '', '', '', '', '0'),
(501, 'ab12', 'EID-HONS3RD125213', 'dasd', '', 0, '2021-09-08 18:55:27', '', '', '', '', '0'),
(502, 'ab12', 'EID-HONS3RD125213', 'What is capital of India', 'B', 0, '2021-09-08 18:55:34', '1', 'asd', 'asd', '4', '0'),
(503, 'ab12', 'EID-HONS3RD119586', 'asd', '', 0, '2021-09-09 02:19:12', '', '', '', '', '0'),
(504, 'ab12', 'EID-HONS3RD119586', 'asdasd', '', 0, '2021-09-09 02:19:15', '', '', '', '', '0'),
(505, 'ab12', 'EID-HONS3RD119586', 'asda', '', 0, '2021-09-09 02:19:16', '', '', '', '', '0'),
(506, 'ab12', 'EID-PASS3RD776789', 'HEY HEY?', '', 0, '2021-09-10 03:19:43', '', '', '', '', ''),
(507, 'ab12', 'EID-PASS3RD776789', 'HELLO?', '', 0, '2021-09-10 03:19:43', '', '', '', '', ''),
(508, 'ab12', 'EID-PASS3RD776789', 'HI JI', '', 0, '2021-09-10 03:19:43', '', '', '', '', ''),
(509, 'ab12', 'EID-PASS3RD776789', 'What is capital of India', 'B', 0, '2021-09-10 03:19:55', 'Assam', 'Delhi', 'GRAPE', 'Mumbai', ''),
(510, 'ab12', 'EID-PASS3RD776789', 'THIS IS A MCQ QUESTION', 'D', 0, '2021-09-10 03:20:09', 'sad', 'asd', '3', 'YES', ''),
(512, 'ab12', 'EID-PASS3RD716482', 'Testing for marks entering?2', '', 2, '2021-09-10 20:58:22', '', '', '', '', ''),
(513, 'ab12', 'EID-HONS1ST132591', 'HOW are u?', '', 3, '2021-09-10 21:42:14', '', '', '', '', ''),
(514, 'ab12', 'EID-HONS1ST132591', 'where are u from?', '', 3, '2021-09-10 21:42:14', '', '', '', '', ''),
(515, 'ab12', 'EID-HONS1ST786608', 'Why sky is blue?', '', 2, '2021-09-11 00:59:27', '', '', '', '', ''),
(516, 'ab12', 'EID-HONS1ST786608', 'Why Earth Rotates Around the sun?', '', 2, '2021-09-11 00:59:27', '', '', '', '', ''),
(517, 'ab12', 'EID-HONS1ST786608', 'Why we see colours?', '', 2, '2021-09-11 00:59:27', '', '', '', '', ''),
(518, 'ab12', 'EID-HONS1ST786608', 'What is capital of India', 'B', 0, '2021-09-11 00:59:38', 'Assam', 'Delhi', 'GRAPE', 'Mumbai', ''),
(519, 'ab12', 'EID-HONS1ST786608', 'why sun is hot', 'D', 0, '2021-09-11 01:00:34', 'i dont know', 'He gets its hottness from me', 'Coz its Red', 'nuclear go boom boom!!', ''),
(520, 'ab12', 'EID-HONS1ST786608', 'Why deathsamck is chutoluk?', 'B', 0, '2021-09-11 01:01:43', 'He is gay.?', 'He likes Guuu ar putki?', 'He has smol dick', 'No, he has pussy?', ''),
(522, 'ab12', 'EID-HONS3RD419942', 'What is session?', '', 2, '2021-09-30 12:48:21', '', '', '', '', ''),
(523, 'ab12', 'EID-HONS3RD419942', 'What is cookie?', '', 2, '2021-09-30 12:48:21', '', '', '', '', ''),
(524, 'ab12', 'EID-HONS3RD419942', 'OSI full form', 'A', 0, '2021-09-30 12:49:31', 'Open System Intercommunication', 'Open system service', 'open sula internel', 'None of the above', ''),
(525, 'ab12', 'EID-HONS3RD419942', 'what protocol services', 'D', 0, '2021-09-30 12:50:12', 'HTTP', 'DHCP', 'DNS', 'All of the above', ''),
(526, 'ab12', 'EID-PASS3RD912485', 'THIS IS A MCQ QUESTION', 'A', 0, '2021-10-02 03:28:19', 'dasd', 'qwe', 'GRAPE', 'qweq', ''),
(527, 'ab12', 'EID-PASS3RD912485', 'why sun is hot', 'A', 0, '2021-10-02 03:28:27', 'Assam', '2', 'qwe', 'qwe', ''),
(528, 'ab12', 'EID-PASS3RD912485', 'why sun is hotqweqweqwe', 'A', 0, '2021-10-02 03:28:35', 'Assam', 'qweqwe', 'eDQWD', 'qwEFWER', ''),
(531, 'ab12', 'EID-PASS3RD059443', 'zzzzzzzzzzzz', 'A', 0, '2021-10-02 15:50:02', '1', 'cc', 'c', '4', ''),
(532, 'ab12', 'EID-PASS3RD059443', 'xxxxxxxxxxxxx', 'D', 0, '2021-10-02 15:50:02', 'xx', 'asd', 'x', 'asdwe1q', ''),
(533, 'ab12', 'EID-PASS3RD059443', 'xcaxc', 'A', 0, '2021-10-02 16:04:22', 'ca', 'ac', 'ca', 'ca', ''),
(534, 'ab12', 'EID-PASS3RD059443', 'cacaszxx', 'D', 0, '2021-10-02 16:04:22', 'xxxx', 's', 's', 's', ''),
(535, 'ab12', 'EID-PASS2ND997255', 'w1', 'A', 0, '2021-10-02 16:59:43', 'w1', 'w wd', 'd', 'd', ''),
(536, 'ab12', 'EID-PASS2ND997255', 'w1we', 'B', 0, '2021-10-02 16:59:43', '1w', 'dw', 'wd', 'wd1', ''),
(537, 'ab12', 'EID-PASS2ND997255', 'asdasdw111', 'A', 0, '2021-10-02 17:02:03', '', '', '1', '', ''),
(538, 'ab12', 'EID-PASS2ND997255', '1dwwd', 'A', 0, '2021-10-02 17:02:03', '2', '1', '', '', ''),
(539, 'ab12', 'EID-PASS2ND830065', 'complete', 'A', 0, '2021-10-02 17:41:29', 'dasd', 'asd', 'asdasd', 'asd', ''),
(540, 'ab12', 'EID-PASS2ND830065', 'Combine 2', 'D', 0, '2021-10-02 17:41:29', 'wdasd', 'asd', 'dasd', 'asd', ''),
(545, 'ab12', 'EID-HONS3RD908008', 'hi', 'B', 0, '2021-10-02 17:48:56', '1', '2', '3', '4', ''),
(546, 'ab12', 'EID-HONS3RD908008', 'hiu2', '', 5, '2021-10-02 17:49:03', '', '', '', '', ''),
(547, 'ab12', 'EID-HONS3RD908008', 'guj4', '', 5, '2021-10-02 17:49:03', '', '', '', '', ''),
(549, 'ab12', 'EID-PASS2ND072361', 'how are u?', 'C', 0, '2021-10-02 19:11:01', 'asd', 'd', 'd', 'das', ''),
(550, 'ab12', 'EID-PASS2ND072361', '2d1', '', 2, '2021-10-02 19:11:06', '', '', '', '', ''),
(551, 'ab12', 'EID-PASS2ND072361', 'd231', '', 2, '2021-10-02 19:11:06', '', '', '', '', ''),
(552, 'ab12', 'EID-PASS2ND072361', 'sdasd', 'C', 0, '2021-10-02 19:21:02', 'da', 'asd', 'sd', 'asd', ''),
(553, 'ab12', 'EID-PASS2ND072361', 'asd', 'A', 0, '2021-10-02 19:21:02', 'ads', 'asd', 'asd', 'asd', ''),
(554, 'ab12', 'EID-PASS2ND072361', 'ASDasd1231', '', 2, '2021-10-02 19:42:50', '', '', '', '', ''),
(555, 'ab12', 'EID-PASS2ND072361', 'awdqwd123', '', 2, '2021-10-02 19:42:50', '', '', '', '', ''),
(556, 'ab12', 'EID-PASS2ND072361', 'sdasdasd', 'C', 0, '2021-10-02 19:43:25', 'daasd', 'asdasd', 'sdsd', 'asdasd', ''),
(557, 'ab12', 'EID-PASS2ND072361', 'asdsda', 'B', 0, '2021-10-02 19:43:25', 'ads', 'asd', 'asdsd', 'asd', ''),
(558, 'ab12', 'EID-PASS2ND072361', '123sdasdasdascwq231', 'A', 0, '2021-10-02 19:54:22', 'daasdasdasd', 'asdasd', 'sdsd', 'asdasd', ''),
(559, 'ab12', 'EID-PASS2ND072361', 'asdsdaqw31d123', 'B', 0, '2021-10-02 19:54:22', 'ads', 'asd123', 'asdsd', 'asd', ''),
(560, 'ab12', 'EID-PASS2ND072361', 'daw131d12', '', 2, '2021-10-02 19:54:27', '', '', '', '', ''),
(561, 'ab12', 'EID-PASS2ND072361', '1231d213412d', '', 2, '2021-10-02 19:54:27', '', '', '', '', ''),
(563, 'ab12', 'EID-HONS2ND564178', 'qweqweqwdqwd1d', 'A', 0, '2021-10-02 21:21:16', 'asda', 'wdasas', 'asdsdasda', 'wda21323', ''),
(566, 'ab12', 'EID-PASS2ND754501', 'hewrsdf432dddd', 'A', 0, '2021-10-03 02:09:44', 'ser23rww', 'sd12', 'adw131', 'e123', ''),
(567, 'ab12', 'EID-PASS2ND754501', 'dwd1d24123d2 sadw', '', 2, '2021-10-03 02:09:48', '', '', '', '', ''),
(568, 'ab12', 'EID-HONS3RD157435', '234sd1', 'B', 0, '2021-10-03 02:28:01', 'dddd', 'd', '1d1ddw', 'd1', ''),
(569, 'ab12', 'EID-HONS3RD157435', 'dasd12d34w34', '', 3, '2021-10-03 02:28:07', '', '', '', '', ''),
(570, 'ab12', 'EID-HONS3RD157435', 'Abhi', '', 3, '2021-10-03 02:28:07', '', '', '', '', ''),
(571, 'ab12', 'EID-HONS3RD157435', 'd12d12d', '', 3, '2021-10-03 02:28:07', '', '', '', '', ''),
(580, 'ab12', 'EID-HONS2ND876032', 'ASDw12', 'B', 0, '2021-10-03 02:48:50', '321', 'e12', 'e', '12e', ''),
(581, 'ab12', 'EID-HONS2ND876032', '2e12', 'C', 0, '2021-10-03 02:48:50', 'e12e', '12e', 'e1', 'e12', ''),
(582, 'ab12', 'EID-HONS2ND876032', 'ASDw12', 'B', 0, '2021-10-03 02:49:45', '321', 'e12', 'e', '12e', ''),
(583, 'ab12', 'EID-HONS2ND876032', '2e12', 'C', 0, '2021-10-03 02:49:45', 'e12e', '12e', 'e1', 'e12', ''),
(584, 'ab12', 'EID-HONS2ND876032', 'ASDw12', 'B', 0, '2021-10-03 02:50:06', '321', 'e12', 'e', '12e', ''),
(585, 'ab12', 'EID-HONS2ND876032', '2e12', 'C', 0, '2021-10-03 02:50:06', 'e12e', '12e', 'e1', 'e12', ''),
(586, 'ab12', 'EID-PASS2ND957165', '12d', 'C', 0, '2021-10-03 02:55:27', '12d', '12d', '12d', '12d', ''),
(587, 'ab12', 'EID-PASS2ND957165', 'wd1d2', 'C', 0, '2021-10-03 02:56:52', '312d', 'd', '2d1', '2d', ''),
(588, 'ab12', 'EID-PASS3RD436229', 'sd12d', 'B', 0, '2021-10-03 02:58:45', 'd12312d', '2312d', 'd12d', '1d2', ''),
(589, 'ab12', 'EID-PASS3RD436229', 'd12312d', '', 1, '2021-10-03 02:58:49', '', '', '', '', ''),
(590, 'ab12', 'EID-PASS3RD436229', 'd12ed2312d', '', 1, '2021-10-03 02:58:49', '', '', '', '', ''),
(591, 'ab12', 'EID-PASS2ND119258', 'hi bitchdw1', 'A', 0, '2021-10-03 03:08:02', '2d12d d12d', 'd12dd', 'asdddwdqw', '312', ''),
(594, 'ab12', 'EID-PASS2ND510491', '23', 'B', 0, '2021-10-03 14:32:32', 'sd', 'ds', 'd', 's', ''),
(595, 'ab12', 'EID-PASS2ND510491', 'da2w', 'B', 0, '2021-10-03 14:34:31', '12d', 'ad', '2', 'd2', ''),
(596, 'ab12', 'EID-PASS2ND510491', 'd12dasd2', '', 1, '2021-10-03 14:34:33', '', '', '', '', ''),
(597, 'ab12', 'EID-HONS1ST209613', 'das', 'C', 0, '2021-10-03 14:35:53', 'asd', 'asd', 'asd', 'asd', ''),
(598, 'ab12', 'EID-PASS1ST532236', 'sd21dasd', '', 5, '2021-10-03 14:36:10', '', '', '', '', ''),
(605, 'ab12', 'EID-PASS2ND109085', 'dres', 'C', 0, '2021-10-03 16:44:07', 'dw', 'das', 'd', 'asd', ''),
(606, 'ab12', 'EID-PASS2ND109085', 'dw1dad11111', '', 3, '2021-10-03 16:44:11', '', '', '', '', ''),
(607, 'ab12', 'EID-PASS2ND109085', '1d2', 'B', 0, '2021-10-03 16:48:15', 'dwd1', 'das', 'dd', 'asdd2', ''),
(608, 'ab12', 'EID-PASS2ND109085', 'd21dsada', '', 3, '2021-10-03 16:48:18', '', '', '', '', ''),
(609, 'ab12', 'EID-HONS2ND265095', 'test', 'B', 0, '2021-10-03 16:48:44', ' d123', 'd21', 'd2131d', 'd213', ''),
(610, 'ab12', 'EID-HONS2ND265095', '1111111111', '', 4, '2021-10-03 16:48:49', '', '', '', '', ''),
(611, 'ab12', 'EID-HONS2ND265095', 'test', 'B', 0, '2021-10-03 16:49:41', ' d123', 'd21', 'd2131d', 'd213', ''),
(612, 'ab12', 'EID-HONS2ND265095', 'test', 'B', 0, '2021-10-03 16:50:17', ' d123', 'd21', 'd2131d', 'd213', ''),
(613, 'ab12', 'EID-HONS2ND265095', 'd12dd2', '', 4, '2021-10-03 16:50:20', '', '', '', '', ''),
(614, 'ab12', 'EID-HONS2ND265095', 'd12dd2', '', 4, '2021-10-03 16:51:21', '', '', '', '', ''),
(615, 'ab12', 'EID-PASS2ND754501', '2d2d12', 'B', 0, '2021-10-03 16:51:43', 'd1', 'd2', 'd2', '', ''),
(616, 'ab12', 'EID-PASS2ND754501', '2d12d', '', 2, '2021-10-03 16:51:46', '', '', '', '', ''),
(617, 'ab12', 'EID-PASS2ND754501', 'wd1', 'B', 0, '2021-10-03 16:59:17', 'd12', 'd2', 'd2', 'd2', ''),
(618, 'ab12', 'EID-PASS2ND754501', 'dasd21', '', 2, '2021-10-03 16:59:20', '', '', '', '', ''),
(619, 'ab12', 'EID-PASS2ND754501', 'wd1d1', 'C', 0, '2021-10-03 16:59:39', 'd122d', 'd2d2', 'd2d2', 'd2d2', ''),
(620, 'ab12', 'EID-PASS2ND754501', 'd212d', '', 2, '2021-10-03 16:59:47', '', '', '', '', ''),
(621, 'ab12', 'EID-PASS2ND754501', 'd212d', '', 2, '2021-10-03 17:00:08', '', '', '', '', ''),
(625, 'ab12', 'EID-HONS3RD244563', 'd1', 'A', 0, '2021-10-03 17:01:33', '2d', '2', '2d', '2d', ''),
(626, 'ab12', 'EID-HONS3RD244563', 'ssssssdwa1d21d', '', 3, '2021-10-03 17:01:50', '', '', '', '', ''),
(627, 'ab12', 'EID-HONS3RD244563', 'ssd12', 'B', 0, '2021-10-03 17:02:02', 'd12d', '12', 's', 's', ''),
(628, 'ab12', 'EID-HONS3RD244563', 'sdss', '', 3, '2021-10-03 17:02:04', '', '', '', '', ''),
(629, 'ab12', 'EID-HONS3RD244563', 'd12', 'B', 0, '2021-10-03 17:02:31', 'd12', 'd12', '2', 'd2', ''),
(630, 'ab12', 'EID-HONS3RD244563', 'd21', '', 3, '2021-10-03 17:02:33', '', '', '', '', ''),
(631, 'ab12', 'EID-HONS3RD244563', '2d', 'C', 0, '2021-10-03 17:03:41', 'd2', '2', '2', '2', ''),
(632, 'ab12', 'EID-HONS3RD244563', '2d', '', 3, '2021-10-03 17:03:43', '', '', '', '', ''),
(633, 'ab12', 'EID-HONS3RD244563', 'das', 'B', 0, '2021-10-03 17:04:24', 's', '2', 'c', 'asd', ''),
(634, 'ab12', 'EID-HONS3RD244563', 's', '', 3, '2021-10-03 17:04:25', '', '', '', '', ''),
(635, 'ab12', 'EID-HONS3RD244563', 's', '', 3, '2021-10-03 17:04:36', '', '', '', '', ''),
(636, 'ab12', 'EID-HONS3RD244563', 'sd', '', 2, '2021-10-03 17:05:12', '', '', '', '', ''),
(637, 'ab12', 'EID-HONS3RD244563', 'ef', '', 3, '2021-10-03 17:10:23', '', '', '', '', ''),
(638, 'ab12', 'EID-HONS3RD244563', '12', 'B', 0, '2021-10-03 17:10:37', '2d', '2d', 'd2', '2', ''),
(639, 'ab12', 'EID-HONS3RD244563', 'sd', 'C', 0, '2021-10-03 17:10:47', 's', 'asd', '3', 'asd', ''),
(640, 'ab12', 'EID-HONS3RD244563', '2wd', '', 2, '2021-10-03 17:10:50', '', '', '', '', ''),
(641, 'ab12', 'EID-HONS3RD244563', 'fe', 'B', 0, '2021-10-03 17:11:18', 'asd', '2', 'c', 'e', ''),
(642, 'ab12', 'EID-HONS3RD244563', 'ef', '', 2, '2021-10-03 17:11:20', '', '', '', '', ''),
(643, 'ab12', 'EID-HONS3RD244563', '2', 'B', 0, '2021-10-03 17:12:25', '2', '2', '2', '2', ''),
(644, 'ab12', 'EID-HONS3RD244563', 'd2', '', 2, '2021-10-03 17:12:27', '', '', '', '', ''),
(645, 'ab12', 'EID-HONS3RD244563', 'd2', 'C', 0, '2021-10-03 17:12:42', 'd2', '2d', '2d', 'd2', ''),
(646, 'ab12', 'EID-HONS3RD244563', 'd2', '', 2, '2021-10-03 17:12:44', '', '', '', '', ''),
(647, 'ab12', 'EID-HONS3RD244563', 'dw', 'A', 0, '2021-10-03 17:13:37', 'wd', 'wd', 'wd', 'w', ''),
(648, 'ab12', 'EID-HONS3RD244563', 'dw', '', 2, '2021-10-03 17:13:38', '', '', '', '', ''),
(649, 'ab12', 'EID-HONS3RD244563', '2d', 'B', 0, '2021-10-03 17:13:54', '2d', '2d', '2d', '2d', ''),
(650, 'ab12', 'EID-HONS3RD244563', 'd2', '', 2, '2021-10-03 17:13:55', '', '', '', '', ''),
(651, 'ab12', 'EID-HONS3RD244563', '2d', 'B', 0, '2021-10-03 17:14:10', '2d', '2d', '2d', '2d', ''),
(652, 'ab12', 'EID-HONS3RD244563', 'wd', '', 2, '2021-10-03 17:14:11', '', '', '', '', ''),
(653, 'ab12', 'EID-HONS3RD244563', 'wd', 'C', 0, '2021-10-03 17:14:33', 'wd', 'wd', 'wd', 'wd', ''),
(654, 'ab12', 'EID-HONS3RD244563', '23123', 'B', 0, '2021-10-03 20:12:51', '123', '12', '2d', 'd2', ''),
(655, 'ab12', 'EID-HONS3RD244563', 'd21', '', 2, '2021-10-03 20:12:53', '', '', '', '', ''),
(656, 'ab12', 'EID-HONS3RD244563', 'sd', 'B', 0, '2021-10-03 20:13:33', 'asd', 'asd', 'asd', 'asd', ''),
(657, 'ab12', 'EID-HONS3RD244563', 'wdq', '', 2, '2021-10-03 20:13:37', '', '', '', '', ''),
(658, 'ab12', 'EID-HONS3RD244563', 'wd', 'D', 0, '2021-10-03 20:14:03', 'asd', 'asd', 'asd', 'asd', ''),
(659, 'ab12', 'EID-HONS3RD244563', 'asdw1qdasd', '', 2, '2021-10-03 20:14:06', '', '', '', '', ''),
(660, 'ab12', 'EID-HONS3RD244563', 'adw', '', 2, '2021-10-03 20:14:23', '', '', '', '', ''),
(661, 'ab12', 'EID-HONS3RD244563', 'ad', 'C', 0, '2021-10-03 20:15:34', 'asd', 'sd', 's', 's', ''),
(662, 'ab12', 'EID-HONS3RD244563', 'dw1', '', 2, '2021-10-03 20:15:36', '', '', '', '', ''),
(663, 'ab12', 'EID-HONS3RD244563', 'dsw2', '', 2, '2021-10-03 20:15:43', '', '', '', '', ''),
(665, 'ab12', 'EID-HONS3RD244563', 'as', '', 0, '2021-10-03 20:28:08', '', '', '', '', ''),
(666, 'ab12', 'EID-HONS3RD244563', 'sdas', '', 1, '2021-10-03 20:28:39', '', '', '', '', ''),
(667, 'ab12', 'EID-HONS3RD244563', 'sd12', 'B', 0, '2021-10-03 20:28:56', 'das', 's', 'sd', 'sd', ''),
(668, 'ab12', 'EID-HONS3RD244563', 'dwad', '', 1, '2021-10-03 20:29:18', '', '', '', '', ''),
(669, 'ab12', 'EID-HONS3RD244563', 'sd', 'B', 0, '2021-10-03 20:47:52', 'asd', 'sd', 'sd', 'sd', ''),
(670, 'ab12', 'EID-HONS3RD244563', 'sd', '', 2, '2021-10-03 20:47:54', '', '', '', '', ''),
(671, 'ab12', 'EID-HONS3RD244563', 'sd', 'C', 0, '2021-10-03 20:49:29', 's', 's', 'c', '4', ''),
(672, 'ab12', 'EID-HONS3RD244563', 'sd', '', 2, '2021-10-03 20:49:31', '', '', '', '', ''),
(673, 'ab12', 'EID-HONS3RD244563', 'dw', 'B', 0, '2021-10-03 20:50:00', 'wd', 'wd', 'wd', 'wd', ''),
(674, 'ab12', 'EID-HONS3RD244563', 'dw', '', 2, '2021-10-03 20:50:02', '', '', '', '', ''),
(675, 'ab12', 'EID-HONS3RD244563', 'asd', 'C', 0, '2021-10-03 21:17:42', 'asd', 'asd', 'asd', 'asd', ''),
(676, 'ab12', 'EID-HONS3RD244563', 'dwd1', '', 2, '2021-10-03 21:17:44', '', '', '', '', ''),
(677, 'ab12', 'EID-HONS3RD244563', 'asda', 'B', 0, '2021-10-03 21:17:55', 'sasd', 's', 'sd', 'asd', ''),
(678, 'ab12', 'EID-HONS3RD244563', 'asd', 'B', 0, '2021-10-03 21:21:20', 'asd', 'asd', 'asd', 'asd', ''),
(679, 'ab12', 'EID-HONS3RD244563', 'asd', '', 2, '2021-10-03 21:21:28', '', '', '', '', ''),
(680, 'ab12', 'EID-HONS3RD244563', 'sdfsdf', '', 2, '2021-10-03 21:22:10', '', '', '', '', ''),
(681, 'ab12', 'EID-HONS3RD244563', 'sdas', 'C', 0, '2021-10-03 21:22:21', 'asd', 'sd', 'sd', 'sd', ''),
(682, 'ab12', 'EID-HONS3RD244563', 'dasd', '', 2, '2021-10-03 21:22:23', '', '', '', '', ''),
(683, 'ab12', 'EID-HONS3RD244563', 'dasd', 'B', 0, '2021-10-03 21:24:16', 'asd', 'asd', 'asd', 'asd', ''),
(684, 'ab12', 'EID-HONS3RD244563', 'asd', '', 2, '2021-10-03 21:24:18', '', '', '', '', ''),
(685, 'ab12', 'EID-HONS3RD244563', 'wd', 'B', 0, '2021-10-03 21:25:01', 'asd', 'asd', 'asd', 'asd', ''),
(686, 'ab12', 'EID-HONS3RD244563', 'sdasda', '', 2, '2021-10-03 21:25:03', '', '', '', '', ''),
(687, 'ab12', 'EID-HONS3RD244563', 'sdas', 'C', 0, '2021-10-03 21:27:04', 'das', 'dasd', 'asd', 'asd', ''),
(688, 'ab12', 'EID-HONS3RD244563', 'asd', '', 2, '2021-10-03 21:27:06', '', '', '', '', ''),
(689, 'ab12', 'EID-HONS3RD244563', 'sdas', 'C', 0, '2021-10-03 21:27:24', 'dasd', 'asd', 'asd', 'asd', ''),
(690, 'ab12', 'EID-HONS3RD244563', 'sdasd', '', 2, '2021-10-03 21:27:54', '', '', '', '', ''),
(691, 'ab12', 'EID-HONS3RD244563', 'sdas', 'B', 0, '2021-10-03 21:28:15', 'dasd', 'asd', 'asd', 'asd', ''),
(692, 'ab12', 'EID-HONS3RD244563', 'sd', '', 2, '2021-10-03 21:28:17', '', '', '', '', ''),
(693, 'ab12', 'EID-HONS3RD244563', 'sdas', 'B', 0, '2021-10-03 21:28:31', 'dasd', 'asd', 'asd', 'asd', ''),
(694, 'ab12', 'EID-HONS3RD244563', 'sd', '', 2, '2021-10-03 21:28:33', '', '', '', '', ''),
(695, 'ab12', 'EID-HONS3RD244563', 'asd', 'B', 0, '2021-10-03 21:31:01', 'asd', 'asd', 'asd', 'asd', ''),
(696, 'ab12', 'EID-HONS3RD244563', 'asd', '', 1, '2021-10-03 21:31:06', '', '', '', '', ''),
(697, 'ab12', 'EID-HONS3RD244563', 'asd', 'C', 0, '2021-10-03 21:31:37', 'asd', 'asd', 'asd', 'asd', ''),
(698, 'ab12', 'EID-HONS3RD244563', 'das', '', 1, '2021-10-03 21:31:38', '', '', '', '', ''),
(699, 'ab12', 'EID-HONS3RD244563', 'asd', 'A', 0, '2021-10-03 21:32:06', 'asd', 'asd', 'asd', 'asd', ''),
(700, 'ab12', 'EID-HONS3RD244563', 'asd', 'A', 0, '2021-10-03 21:32:28', 'asd', 'asd', 'asd', 'asd', ''),
(701, 'ab12', 'EID-HONS3RD244563', 'sda', '', 1, '2021-10-03 21:32:31', '', '', '', '', ''),
(702, 'ab12', 'EID-HONS3RD244563', 'sd', 'C', 0, '2021-10-03 21:32:48', 's', 'd', 'd', 'd', ''),
(706, 'ab12', 'EID-HONS3RD244563                                                                                                                                                                                                                                              ', 'adsdddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddddd', '', 10, '2021-10-03 21:40:51', '', '', '', '', ''),
(707, 'ab12', 'EID-PASS3RD371261', 'what is capital of india', 'A', 0, '2021-10-04 15:13:48', 'delhi', 'assam', 'karntaka', 'mumbai', ''),
(708, 'ab12', 'EID-PASS3RD371261', 'what is php', '', 3, '2021-10-04 15:14:02', '', '', '', '', ''),
(709, 'ab12', 'EID-PASS3RD371261', 'what is html', '', 3, '2021-10-04 15:14:02', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `q_set`
--

CREATE TABLE `q_set` (
  `nos` int(100) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `sem` varchar(255) NOT NULL,
  `course` varchar(255) NOT NULL,
  `e_name` varchar(255) NOT NULL,
  `f_mark` int(100) NOT NULL,
  `p_mark` int(100) NOT NULL,
  `e_duration` int(100) NOT NULL,
  `e_id` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp(),
  `t_dept` varchar(255) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `session` varchar(255) NOT NULL,
  `t_qs` int(100) NOT NULL,
  `t_mcq` int(100) NOT NULL,
  `t_des` int(100) NOT NULL,
  `des_mark` int(100) NOT NULL,
  `e_title` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `q_set`
--

INSERT INTO `q_set` (`nos`, `unique_id`, `sem`, `course`, `e_name`, `f_mark`, `p_mark`, `e_duration`, `e_id`, `date`, `t_dept`, `status`, `session`, `t_qs`, `t_mcq`, `t_des`, `des_mark`, `e_title`) VALUES
(20, 'ab12', '1st', 'Hons', 'English', 50, 30, 120, 'EID-HONS1ST484272', '2021-09-06 01:34:25', 'compa', 0, '', 0, 0, 0, 0, ''),
(28, 'ab12', '1st', 'Hons', 'CACCC201T - Introduction to Programming', 100, 30, 120, 'EID-HONS1ST126115', '2021-09-06 19:35:48', 'compa', 0, '2020-2021', 3, 3, 3, 2, ''),
(29, 'ab12', '3rd', 'Pass', 'CACCC303T - Computer Network', 100, 30, 120, 'EID-PASS3RD701924', '2021-09-06 19:40:59', 'compsc', 0, '2020-2021', 10, 5, 5, 2, ''),
(31, 'ab12', '3rd', 'Pass', 'CACDSE601T - PHP Programming', 123, 3, 2, 'EID-PASS3RD596784', '2021-09-06 23:53:02', 'compsc', 0, '2020-2021', 1, 1, 0, 0, ''),
(32, 'ab12', '3rd', 'Pass', 'CACCC302T - Operating System', 50, 28, 120, 'EID-PASS3RD174231', '2021-09-07 01:31:12', 'compsc', 0, '2020-2021', 6, 3, 3, 2, ''),
(33, 'ab12', '3rd', 'Pass', 'CACCC301T - Data Structure', 23, 33, 3, 'EID-PASS3RD306952', '2021-09-07 01:43:32', 'compsc', 0, '2020-2021', 5, 2, 3, 2, ''),
(35, 'ab12', '3rd', 'Pass', 'CACCC301T - Data Structure', 23, 23, 23, 'EID-PASS3RD196361', '2021-09-07 03:18:34', 'compsc', 1, '2020-2021', 23, 4, 0, 0, ''),
(36, 'ab12', '3rd', 'Pass', 'CACCC302T - Operating System', 2, 12, 2, 'EID-PASS3RD794262', '2021-09-07 20:51:17', 'compsc', 1, '2020-2021', 3, 3, 4, 2, ''),
(37, 'ab12', '3rd', 'Pass', 'CACCC401T - Design & Analysis of Algorithms', 123, 2, 3, 'EID-HONS3RD125213', '2021-09-08 18:55:23', 'compsc', 1, '2020-2021', 5, 2, 3, 2, ''),
(39, 'ab12', '3rd', 'Pass', 'CACCC102T - Discrete Structure', 123, 232, 123, 'EID-PASS3RD776789', '2021-09-10 03:19:30', 'compsc', 1, '2020-2021', 5, 2, 3, 2, ''),
(40, 'ab12', '3rd', 'Pass', 'CACCC202T - Computer System Architecture', 100, 30, 120, 'EID-PASS3RD716482', '2021-09-10 20:57:59', 'compsc', 1, '2020-2021', 4, 2, 2, 2, ''),
(41, 'ab12', '1st', 'Hons', 'CACCC302T - Operating System', 23, 23, 2, 'EID-HONS1ST132591', '2021-09-10 21:41:51', 'compa', 1, '2020-2021', 4, 0, 2, 3, ''),
(43, 'ab12', '3rd', 'Hons', 'CACCC301T - Data Structure', 70, 30, 180, 'EID-HONS3RD419942', '2021-09-30 12:47:46', 'compa', 0, '2020-2021', 5, 2, 3, 2, ''),
(44, 'ab12', '3rd', 'Pass', 'CACDSE601T - PHP Programming', 122, 33, 123, 'EID-PASS3RD912485', '2021-10-02 03:28:07', 'compsc', 1, '2020-2021', 3, 3, 0, 0, ''),
(56, 'ab12', '3rd', 'Hons', 'CACCC201T - Introduction to Programming', 123, 213, 123, 'EID-HONS3RD908008', '2021-10-02 17:48:47', 'compsc', 1, '2020-2021', 3, 1, 2, 5, ''),
(58, 'ab12', '3rd', 'Pass', 'CACCC202T - Computer System Architecture', 120, 40, 120, 'EID-HONS2ND564178', '2021-10-02 21:21:01', 'compa', 1, '2021-2022', 4, 1, 3, 2, ''),
(62, 'ab12', '3rd', 'Hons', 'CACCC202T - Computer System Architecture', 200, 100, 300, 'EID-PASS2ND754501', '2021-10-03 02:09:33', 'compa', 1, '2020-2021', 1, 1, 1, 3, 'asdw31'),
(63, 'ab12', '6th', 'Pass', 'CACCC201T - Introduction to Programming ', 211, 5511, 231, 'EID-HONS3RD157435', '2021-10-03 02:27:54', 'compa', 0, '2020-2021', 52, 22, 32, 32, 'THIS IS A TEST222!23'),
(71, 'ab12', '2nd', 'Pass', 'CACCC201T - Introduction to Programming', 123, 3, 2, 'EID-PASS2ND019648', '2021-10-03 03:06:25', 'compa', 1, '2021-2022', 2, 0, 2, 2, '1'),
(73, 'ab12', '3rd', 'Hons', 'CACCC201T - Introduction to Programming', 100, 30, 120, 'EID-HONS3RD244563', '2021-10-03 14:28:32', 'compsc', 1, '2021-2022', 2, 1, 1, 5, 'dfsdf'),
(80, 'ab12', '3rd', 'Hons', 'CACCC101T - Computer Fundamentals ', 100, 30, 120, 'EID-PASS3RD371261', '2021-10-04 15:12:47', 'compa', 1, '2017-2018', 3, 1, 2, 3, 'test');

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
  `sstream` varchar(15) NOT NULL,
  `scourse` varchar(10) NOT NULL,
  `ssem` varchar(15) NOT NULL,
  `score` varchar(60) DEFAULT NULL,
  `spass2` varchar(60) DEFAULT NULL,
  `spass3` varchar(60) DEFAULT NULL,
  `sgec` varchar(20) DEFAULT NULL,
  `ssec` varchar(60) DEFAULT NULL,
  `saecc` varchar(60) DEFAULT NULL,
  `spic` varchar(60) NOT NULL,
  `spassword` varchar(30) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentlogin`
--

INSERT INTO `studentlogin` (`id`, `sid`, `sname`, `sroll`, `semail`, `sphone`, `sstream`, `scourse`, `ssem`, `score`, `spass2`, `spass3`, `sgec`, `ssec`, `saecc`, `spic`, `spassword`, `date`, `status`) VALUES
(61, 40739, 'Sukanta Paul', 2030, 'sukanta.paul.777@gmail.com', '2587410369', 'Science', 'Hons', '3rd', 'compa', NULL, NULL, '', '', '', 'picture/.profile.png', '12345', '2021-09-13 16:40:04', 0),
(62, 572, 'Blah Blah', 5687, 'paulsukanta440@gmail.com', '9876543210', 'Science', 'Pass', '1st', 'biotech', 'bot', 'math', NULL, NULL, 'eng', 'image/.person.png', '123', '2021-09-13 07:38:57', 0);

-- --------------------------------------------------------

--
-- Table structure for table `sub`
--

CREATE TABLE `sub` (
  `nos` int(11) NOT NULL,
  `compsca` varchar(255) NOT NULL,
  `course` int(11) NOT NULL,
  `sem` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sub`
--

INSERT INTO `sub` (`nos`, `compsca`, `course`, `sem`) VALUES
(1, 'CACCC101T - Computer Fundamentals', 0, ''),
(2, 'CACCC103L - Practical on Computer Fundamentals', 0, ''),
(3, 'CACCC102T - Discrete Structure', 0, ''),
(4, 'CACCC201T - Introduction to Programming', 0, ''),
(5, 'CACCC203L - Programming using C & C++', 0, ''),
(6, 'CACCC202T - Computer System Architecture', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `s_answers`
--

CREATE TABLE `s_answers` (
  `nos` int(100) NOT NULL,
  `s_unique_id` varchar(100) NOT NULL,
  `e_id` varchar(100) NOT NULL,
  `question` int(255) NOT NULL,
  `ans` varchar(255) NOT NULL,
  `oa` varchar(50) NOT NULL,
  `ob` varchar(50) NOT NULL,
  `oc` varchar(50) NOT NULL,
  `od` varchar(50) NOT NULL,
  `ca` varchar(50) NOT NULL,
  `marks` int(100) NOT NULL,
  `time_taken` time NOT NULL DEFAULT current_timestamp(),
  `time` datetime NOT NULL DEFAULT current_timestamp(),
  `q_desc` varchar(255) NOT NULL,
  `omark` int(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `s_answers`
--

INSERT INTO `s_answers` (`nos`, `s_unique_id`, `e_id`, `question`, `ans`, `oa`, `ob`, `oc`, `od`, `ca`, `marks`, `time_taken`, `time`, `q_desc`, `omark`) VALUES
(819, '211', 'EID-PASS3RD716482', 511, 'IS IT WORKING I THINK SO', '', '', '', '', '', 3, '03:17:05', '2021-10-02 03:17:05', 'Testing for marks Entering?1', 0),
(820, '211', 'EID-PASS3RD716482', 512, 'PLEASE WOKKKKKKKKYYYYY.', '', '', '', '', '', 4, '03:17:05', '2021-10-02 03:17:05', 'Testing for marks entering?2', 0),
(825, '211', 'EID-PASS3RD196361', 485, '', '', '', '', '', 'A', 0, '03:17:18', '2021-10-02 03:17:18', 'What is capital of Indiasss', 0),
(826, '211', 'EID-PASS3RD196361', 486, '', '', '', '', '', 'A', 1, '03:17:18', '2021-10-02 03:17:18', 'Where are u from?', 0),
(827, '211', 'EID-PASS3RD196361', 487, '', '', '', '', '', 'C', 1, '03:17:18', '2021-10-02 03:17:18', 'What is capital of India', 0),
(828, '211', 'EID-PASS3RD196361', 488, '', '', '', '', '', 'A', 1, '03:17:18', '2021-10-02 03:17:18', 'mcq test 2nd', 0),
(829, '321', 'EID-PASS3RD196361', 485, '', '', '', '', '', 'A', 0, '03:18:55', '2021-10-02 03:18:55', 'What is capital of Indiasss', 0),
(830, '321', 'EID-PASS3RD196361', 486, '', '', '', '', '', 'A', 1, '03:18:55', '2021-10-02 03:18:55', 'Where are u from?', 0),
(831, '321', 'EID-PASS3RD196361', 487, '', '', '', '', '', 'B', 1, '03:18:55', '2021-10-02 03:18:55', 'What is capital of India', 0),
(832, '321', 'EID-PASS3RD196361', 488, '', '', '', '', '', 'B', 1, '03:18:55', '2021-10-02 03:18:55', 'mcq test 2nd', 0),
(833, '211', 'EID-PASS3RD912485', 526, '', '', '', '', '', 'A', 1, '03:29:05', '2021-10-02 03:29:05', 'THIS IS A MCQ QUESTION', 0),
(834, '211', 'EID-PASS3RD912485', 527, '', '', '', '', '', 'A', 1, '03:29:05', '2021-10-02 03:29:05', 'why sun is hot', 0),
(835, '211', 'EID-PASS3RD912485', 528, '', '', '', '', '', 'A', 1, '03:29:05', '2021-10-02 03:29:05', 'why sun is hotqweqweqwe', 0),
(840, '211', 'EID-PASS3RD776789', 506, 'IS IT WORKING I THINK SO', '', '', '', '', '', 2, '03:41:39', '2021-10-02 03:41:39', 'HEY HEY?', 0),
(841, '211', 'EID-PASS3RD776789', 507, 'PLEASE WOKKKKKKKKYYYYY.', '', '', '', '', '', 2, '03:41:39', '2021-10-02 03:41:39', 'HELLO?', 0),
(842, '211', 'EID-PASS3RD776789', 508, 'eyes goo tip tip', '', '', '', '', '', 2, '03:41:39', '2021-10-02 03:41:39', 'HI JI', 0),
(843, '211', 'EID-PASS3RD776789', 509, '', '', '', '', '', 'A', 0, '03:41:39', '2021-10-02 03:41:39', 'What is capital of India', 0),
(844, '211', 'EID-PASS3RD776789', 510, '', '', '', '', '', 'B', 0, '03:41:39', '2021-10-02 03:41:39', 'THIS IS A MCQ QUESTION', 0),
(845, '211', 'EID-HONS3RD125213', 499, 'sdd', '', '', '', '', '', 0, '03:59:48', '2021-10-02 03:59:48', 'asdasd', 0),
(846, '211', 'EID-HONS3RD125213', 500, 'sd', '', '', '', '', '', 0, '03:59:48', '2021-10-02 03:59:48', 'asd', 0),
(847, '211', 'EID-HONS3RD125213', 501, 'hi3', '', '', '', '', '', 0, '03:59:48', '2021-10-02 03:59:48', 'dasd', 0),
(848, '211', 'EID-HONS3RD125213', 502, '', '', '', '', '', 'B', 1, '03:59:48', '2021-10-02 03:59:48', 'What is capital of India', 0),
(853, '321', 'EID-PASS3RD912485', 526, '', '', '', '', '', 'A', 1, '04:01:26', '2021-10-02 04:01:26', 'THIS IS A MCQ QUESTION', 0),
(854, '321', 'EID-PASS3RD912485', 527, '', '', '', '', '', 'A', 1, '04:01:26', '2021-10-02 04:01:26', 'why sun is hot', 0),
(855, '321', 'EID-PASS3RD912485', 528, '', '', '', '', '', 'A', 1, '04:01:26', '2021-10-02 04:01:26', 'why sun is hotqweqweqwe', 0),
(856, '321', 'EID-PASS3RD716482', 511, 'IS IT WORKING I THINK SO', '', '', '', '', '', 2, '04:03:38', '2021-10-02 04:03:38', 'Testing for marks Entering?1', 0),
(857, '321', 'EID-PASS3RD716482', 512, 'PLEASE WOKKKKKKKKYYYYY.', '', '', '', '', '', 2, '04:03:38', '2021-10-02 04:03:38', 'Testing for marks entering?2', 0),
(858, '211', 'EID-PASS3RD794262', 491, 'rohim', '', '', '', '', '', 1, '00:07:12', '2021-10-03 00:07:12', 'dasd', 0),
(859, '211', 'EID-PASS3RD794262', 492, 'suknta', '', '', '', '', '', 2, '00:07:12', '2021-10-03 00:07:12', 'asdasda', 0),
(860, '211', 'EID-PASS3RD794262', 493, 'kriti', '', '', '', '', '', 2, '00:07:12', '2021-10-03 00:07:12', 'asda', 0),
(861, '211', 'EID-PASS3RD794262', 494, 'recker', '', '', '', '', '', 1, '00:07:12', '2021-10-03 00:07:12', 'sdas', 0),
(862, '40739', 'EID-PASS2ND754501', 566, '', '', '', '', '', 'A', 1, '13:48:45', '2021-10-04 13:48:45', 'hewrsdf432dddd', 0),
(863, '40739', 'EID-PASS2ND754501', 567, 'sd777777', '', '', '', '', '', 0, '13:48:45', '2021-10-04 13:48:45', 'dwd1d24123d2 sadw', 0),
(864, '40739', 'EID-PASS2ND754501', 615, '', '', '', '', '', 'A', 0, '13:48:45', '2021-10-04 13:48:45', '2d2d12', 0),
(865, '40739', 'EID-PASS2ND754501', 616, '7s777', '', '', '', '', '', 0, '13:48:45', '2021-10-04 13:48:45', '2d12d', 0),
(866, '40739', 'EID-PASS2ND754501', 617, '', '', '', '', '', 'C', 0, '13:48:45', '2021-10-04 13:48:45', 'wd1', 0),
(867, '40739', 'EID-PASS2ND754501', 618, 's', '', '', '', '', '', 0, '13:48:45', '2021-10-04 13:48:45', 'dasd21', 0),
(868, '40739', 'EID-PASS2ND754501', 619, '', '', '', '', '', 'B', 0, '13:48:45', '2021-10-04 13:48:45', 'wd1d1', 0),
(869, '40739', 'EID-PASS2ND754501', 620, 's', '', '', '', '', '', 0, '13:48:45', '2021-10-04 13:48:45', 'd212d', 0),
(870, '40739', 'EID-PASS2ND754501', 621, 's', '', '', '', '', '', 0, '13:48:45', '2021-10-04 13:48:45', 'd212d', 0),
(871, '40739', 'EID-PASS3RD371261', 707, '', '', '', '', '', 'A', 1, '15:18:25', '2021-10-04 15:18:25', 'what is capital of india', 0),
(872, '40739', 'EID-PASS3RD371261', 708, 'PHP', '', '', '', '', '', 2, '15:18:25', '2021-10-04 15:18:25', 'what is php', 0),
(873, '40739', 'EID-PASS3RD371261', 709, 'html', '', '', '', '', '', 2, '15:18:25', '2021-10-04 15:18:25', 'what is html', 0);

-- --------------------------------------------------------

--
-- Table structure for table `t_registered`
--

CREATE TABLE `t_registered` (
  `nos` int(100) NOT NULL,
  `unique_id` varchar(255) NOT NULL,
  `t_pass` varchar(255) NOT NULL,
  `t_name` varchar(255) NOT NULL,
  `t_dept` varchar(255) NOT NULL,
  `t_email` varchar(255) NOT NULL,
  `date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `t_registered`
--

INSERT INTO `t_registered` (`nos`, `unique_id`, `t_pass`, `t_name`, `t_dept`, `t_email`, `date`) VALUES
(1, 'ab12', '123', 'Abhishek Das', 'comp', 'Ab@q1', '2021-08-25 14:14:51'),
(2, 'kb1', '123', 'kamla', 'chem', 'S@S', '2021-08-25 14:32:20'),
(3, 'rr12', '123', 'rohim', 'ComScince', 'r@e', '2021-08-25 17:55:36'),
(5, 'e12', '123', 'rrasd', 'comscience', 'W@r', '2021-08-25 17:58:28'),
(9, 'eqw', '123', 'asdasd', 'chem', 'asd@ee', '2021-08-27 12:21:15'),
(10, 'as12', '123', 'Abfgu', 'chem', 'A@EE', '2021-08-27 12:22:52'),
(11, 'ass', '123', 'phy', 'phy', 'y@er', '2021-08-27 12:23:44'),
(12, 'aw32', '123', 'phy', 'comscience', 'AE@sd', '2021-08-27 12:24:18'),
(13, 'asd', '123', 'Abhishek Das', 'phy', 'homsweethome252@gmail.com', '2021-08-27 12:29:14'),
(14, 'aa12334', '123', 'ASdASd', 'comscience', 'AS@31d', '2021-08-27 12:30:37'),
(15, 'aaw2', '123', 'rahul', 'phy', 'A@eewq', '2021-08-27 12:33:28'),
(16, 'zx1', '123', 'suraj', 'phy', 'A@ggggh', '2021-08-27 12:49:53'),
(17, 'jk12', '123', 'Abhishek Das', 'phy', 'asa@fsjk', '2021-08-27 12:53:09'),
(18, 'sdaweq', '123', 'suraj roy', 'chem', 'A2@ad', '2021-08-27 22:35:47'),
(19, 'gu12', '123', 'deathsmack', 'comscience', 'a@dwe', '2021-08-27 23:17:56'),
(20, 'putki12', '123', 'deathsmack CHUTLUK', 'phy', 'a@dew', '2021-08-28 01:43:50'),
(21, 'ps12', '123', 'pallabi sarma', 'comscience', 'p@gh', '2021-08-30 00:23:43'),
(22, 'sk12', '123', 'skanta', 'phy', 'A@er', '2021-08-30 01:02:01'),
(23, 'kr12', '123', 'kriti', 'comscience', 'a@ewe', '2021-08-31 00:19:29'),
(24, 'avbdsdw', '123', 'nw12', 'bio', 'a@err', '2021-08-31 01:40:44'),
(25, 'nw12', '123', 'asdasd', 'hist', 'a@ddf', '2021-08-31 01:41:03'),
(26, 're12', '123', 'RECKER', 'compsca', 'r@da', '2021-08-31 02:10:48'),
(27, 'nww12', '123', 'test', 'alteng', 'asd@e', '2021-08-31 02:32:03'),
(28, 'bs12', '123', 'asdasd', 'compsca', 'a@de', '2021-08-31 02:41:12'),
(29, 'qw12', '123', 'krity', 'compsca', 'a@dff', '2021-08-31 22:01:28'),
(32, 'dd12', '123', 'asd', 'compsca', 'asdd@gmail.com', '2021-09-04 00:58:24'),
(33, 'qwe12', '123', 'new design', 'compsca', 'asdasd@ew', '2021-09-04 02:27:49');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ans_set`
--
ALTER TABLE `ans_set`
  ADD PRIMARY KEY (`nos`);

--
-- Indexes for table `dept`
--
ALTER TABLE `dept`
  ADD PRIMARY KEY (`nos`);

--
-- Indexes for table `qs`
--
ALTER TABLE `qs`
  ADD PRIMARY KEY (`nos`);

--
-- Indexes for table `q_set`
--
ALTER TABLE `q_set`
  ADD PRIMARY KEY (`nos`),
  ADD UNIQUE KEY `e_id` (`e_id`);

--
-- Indexes for table `studentlogin`
--
ALTER TABLE `studentlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `roll` (`sroll`),
  ADD KEY `uid` (`sid`),
  ADD KEY `sname` (`sname`),
  ADD KEY `date` (`date`),
  ADD KEY `course` (`sstream`),
  ADD KEY `sem` (`ssem`),
  ADD KEY `score` (`score`),
  ADD KEY `sgec` (`sgec`),
  ADD KEY `ssec` (`ssec`),
  ADD KEY `saecc` (`saecc`),
  ADD KEY `scourse` (`scourse`),
  ADD KEY `status` (`status`);

--
-- Indexes for table `sub`
--
ALTER TABLE `sub`
  ADD PRIMARY KEY (`nos`);

--
-- Indexes for table `s_answers`
--
ALTER TABLE `s_answers`
  ADD PRIMARY KEY (`nos`),
  ADD UNIQUE KEY `nos` (`nos`);

--
-- Indexes for table `t_registered`
--
ALTER TABLE `t_registered`
  ADD PRIMARY KEY (`nos`),
  ADD UNIQUE KEY `unique_id` (`unique_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ans_set`
--
ALTER TABLE `ans_set`
  MODIFY `nos` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

--
-- AUTO_INCREMENT for table `dept`
--
ALTER TABLE `dept`
  MODIFY `nos` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `qs`
--
ALTER TABLE `qs`
  MODIFY `nos` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=710;

--
-- AUTO_INCREMENT for table `q_set`
--
ALTER TABLE `q_set`
  MODIFY `nos` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=81;

--
-- AUTO_INCREMENT for table `studentlogin`
--
ALTER TABLE `studentlogin`
  MODIFY `id` bigint(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=63;

--
-- AUTO_INCREMENT for table `sub`
--
ALTER TABLE `sub`
  MODIFY `nos` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `s_answers`
--
ALTER TABLE `s_answers`
  MODIFY `nos` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=874;

--
-- AUTO_INCREMENT for table `t_registered`
--
ALTER TABLE `t_registered`
  MODIFY `nos` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
