-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 08, 2016 at 04:42 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mu`
--

-- --------------------------------------------------------

--
-- Table structure for table `attended_complaints`
--

CREATE TABLE IF NOT EXISTS `attended_complaints` (
  `complaint_no` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `semester` int(2) NOT NULL,
  `seat_no` int(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `year` int(5) NOT NULL,
  `month` int(5) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `reply` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `attended_complaints`
--

INSERT INTO `attended_complaints` (`complaint_no`, `username`, `semester`, `seat_no`, `course`, `year`, `month`, `complaint`, `reply`) VALUES
(7, 'root', 1, 12345, 'Technology', 0, 0, 'Revaluation results not received', 'yjhdqw'),
(19, 'varsha', 6, 123456, 'Technology', 0, 0, 'Revaluation results not received', 'fhg'),
(6, 'varsha', 3, 3, 'Arts', 0, 0, 'RST', 'wefce'),
(2, 'varsha', 2, 334, 'Technology', 0, 0, 'Revaluation results not received', 'q'),
(3, 'varsha', 1, 1, 'Technology', 0, 0, 'ABC', 'jvjhk;.'),
(5, 'varsha', 1, 1, 'Technology', 0, 0, 'Revaluation results not received', 'gtyjkl'),
(4, 'varsha', 1, 1, 'Technology', 0, 0, 'Revaluation results not received', 'hkml'),
(129, 'varsha', 2, 12, 'Arts', 0, 0, 'Revaluation results not received', 'rfgrg'),
(422, 'varsha', 3, 1223, 'Arts', 0, 0, 'Revaluation results not received', 'vgfcdx');

-- --------------------------------------------------------

--
-- Table structure for table `complaints`
--

CREATE TABLE IF NOT EXISTS `complaints` (
  `username` varchar(40) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `time_comp` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `attended` int(11) NOT NULL,
  `status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `complaints`
--

INSERT INTO `complaints` (`username`, `complaint`, `time_comp`, `attended`, `status`) VALUES
('varsha', 'ABC', '0000-00-00 00:00:00', 0, 'AR'),
('varsha', 'ABC', '0000-00-00 00:00:00', 0, 'AR'),
('varsha', 'ABC', '0000-00-00 00:00:00', 0, 'AR'),
('varsha', 'RST', '0000-00-00 00:00:00', 0, 'AR'),
('varsha', 'XYZ', '0000-00-00 00:00:00', 0, 'AR'),
('varsha', 'XYZ', '0000-00-00 00:00:00', 0, 'AR');

-- --------------------------------------------------------

--
-- Table structure for table `pending_complaints`
--

CREATE TABLE IF NOT EXISTS `pending_complaints` (
  `complaint_no` int(10) NOT NULL,
  `username` varchar(30) NOT NULL,
  `semester` int(2) NOT NULL,
  `seat_no` int(10) NOT NULL,
  `course` varchar(30) NOT NULL,
  `complaint` varchar(255) NOT NULL,
  `category` varchar(10) NOT NULL,
  `startdate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `year` int(5) NOT NULL,
  `month` int(5) NOT NULL,
  `time` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=929 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pending_complaints`
--

INSERT INTO `pending_complaints` (`complaint_no`, `username`, `semester`, `seat_no`, `course`, `complaint`, `category`, `startdate`, `year`, `month`, `time`, `status`) VALUES
(78, 'varsha', 2, 568, 'Commerce', 'RLE papers given but results not amended', '', '2016-02-19 13:57:06', 2016, 0, '2016-03-02 18:07:00', 'AR'),
(81, 'varsha', 7, 122, 'Arts', 'RLE amended but current results not declared', 'cat2', '2016-02-28 18:14:01', 2016, 2, '2016-02-28 18:14:01', 'DR'),
(133, 'varsha', 7, 1990, 'Technology', 'Receipt not generated (Form filled / Payment Paid)', 'cat1', '2016-02-28 17:06:17', 2016, 2, '2016-02-28 17:06:17', 'DR'),
(249, 'varsha', 5, 12229, 'Select course', 'My Results not declared - Commerce Faculty', 'cat3', '2016-03-02 23:01:25', 2016, 3, '2016-03-02 23:01:25', 'AR Results,Commerce'),
(294, 'varsha', 6, 1254, 'Technology', 'RLE amended but current results not declared', '', '2016-02-28 16:41:41', 2016, 0, '2016-02-28 16:41:41', 'DR'),
(377, 'varsha', 2, 568, 'Commerce', 'RLE papers given but results not amended', '', '2016-02-19 13:55:33', 2016, 2, '2016-03-02 17:50:47', 'DR'),
(485, 'varsha', 4, 1221, 'Arts', 'Receipt not generated (Form filled / Payment Paid)', '', '2016-02-19 15:29:27', 2016, 0, '2016-03-02 18:07:02', 'AR'),
(535, 'varsha', 4, 1221, 'Arts', 'Receipt not generated (Form filled / Payment Paid)', 'cat1', '2016-02-19 15:28:02', 2016, 0, '2016-03-02 23:05:13', 'AR Results,Pre Exam'),
(545, 'varsha', 4, 56, 'Arts', 'RLE amended but current results not declared', '', '2016-02-19 13:48:43', 2016, 0, '2016-03-02 18:07:06', 'AR'),
(674, 'varsha', 4, 156, 'Technology', 'My Results not declared - Arts and Fine Arts Faculty', 'cat2', '2016-02-28 16:05:52', 2016, 0, '2016-02-28 16:05:52', 'DR'),
(680, 'varsha', 4, 56, 'Commerce', 'RLE papers given but results not amended', 'cat1', '2016-02-19 13:52:22', 2016, 0, '2016-03-02 23:09:03', 'AR Results,Pre Exam'),
(802, 'varsha', 3, 9999, 'Arts', 'Revaluation Result not declared', 'cat9', '2016-03-02 23:08:00', 2016, 3, '2016-03-02 23:08:00', 'AR-Revaluations'),
(928, 'varsha', 4, 1008, 'Commerce', 'My Results not declared - Arts and Fine Arts Faculty', '', '2016-02-28 17:39:53', 2016, 2, '2016-02-28 17:39:53', 'DR');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `college` varchar(50) NOT NULL,
  `contact` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`, `email`, `name`, `branch`, `college`, `contact`) VALUES
('root', 'varsha', 'x@gmail.com', 'x', 'Computer Engineering', 'SPIT', 1234567890),
('AR', 'ar', 'ar@gmail.com', 'xyz', '', '', 1234096785),
('varsha', 'varsha', 'var@gmail.com', 'Varsha', 'Computer Engineering', 'SPIT', 2147483647),
('DR', 'dr', 'dr@gmail.com', 'ABC', '', '', 1209348756),
('AR Results,Pre Exam', 'arpreexam', '', '', '', '', 1111111111),
('AR Results,Arts', 'ararts', '', '', '', '', 2222),
('AR Results,Commerce', 'arcommerce', '', '', '', '', 3333),
('AR Results,Science & Engg.', 'artech', '', '', '', '', 4444),
('AR Results,Law & Mgmt.', 'arlaw', '', '', '', '', 5555),
('AR–Marks & certificates', 'armarks', '', '', '', '', 6666),
('AR-UMIC', 'arumic', '', '', '', '', 7777),
('AR-Photocopy', 'arphotocopy', '', '', '', '', 8888),
('AR-Revaluations', 'arrevaluations', '', '', '', '', 9999),
('CC', 'cc', '', '', '', '', 9999),
('VC', 'vc', '', '', '', '', 8888),
('trial', 'trial', 'naikwiser@gmail.com', 'XYZ', 'Comps', 'SPIT', 123456);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pending_complaints`
--
ALTER TABLE `pending_complaints`
  ADD PRIMARY KEY (`complaint_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pending_complaints`
--
ALTER TABLE `pending_complaints`
  MODIFY `complaint_no` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=929;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
