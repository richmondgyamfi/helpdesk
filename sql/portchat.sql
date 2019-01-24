-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 23, 2019 at 12:08 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.1.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portchat`
--

-- --------------------------------------------------------

--
-- Table structure for table `academicdb`
--

CREATE TABLE `academicdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `academicdb`
--

INSERT INTO `academicdb` (`id`, `studid`, `message`, `activity`) VALUES
(1, '0004', 'hii', '2018-12-15 04:26:57'),
(2, 'admin', 'hello ', '2018-12-15 04:26:57'),
(3, '0004', 'wassup', '2018-12-15 04:28:44'),
(4, 'admin', 'cool oo\r\nu?', '2018-12-15 04:28:44');

-- --------------------------------------------------------

--
-- Table structure for table `chatdb`
--

CREATE TABLE `chatdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(25) NOT NULL,
  `subject` char(40) NOT NULL,
  `message_sent` text NOT NULL,
  `message_reply_id` int(11) NOT NULL DEFAULT '0',
  `topic` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatdb`
--

INSERT INTO `chatdb` (`id`, `studid`, `subject`, `message_sent`, `message_reply_id`, `topic`, `activity`) VALUES
(1, 'ps/csc/14', 'Residential', 'my room widow is destroyed\r\n', 0, 'My room', '2018-11-23 08:56:55'),
(2, 'ps/csc/14', 'Financial Aid', 'I need a student Loan\r\n', 0, 'Loan', '2018-11-23 09:02:14'),
(3, 'ps/csc/14', 'Residential', 'Need money for Hostel', 0, 'hostel', '2018-11-24 02:42:57'),
(4, 'ps/csc/14', 'Student Leader and Governance', 'leaders need to step down', 0, 'Leaders', '2018-11-24 03:27:57'),
(5, 'ps/csc/14', 'Residential', 'People no dey flash', 0, 'Hall Issue', '2018-11-24 03:29:34'),
(6, 'ps/csc/14', 'Counselling and Carrier Services', 'I want to increase my CGPA\r\n', 0, 'GPA issue', '2018-11-28 01:44:52'),
(46, 'ps/csc/14', 'Student Leader and Governance', 'leaders are not doing what they should do\r\n', 0, 'leaders', '2018-11-29 00:40:13'),
(47, 'ps/csc/12', 'Residential', 'class not in process', 0, 'academic', '2019-01-15 13:37:08'),
(48, 'ps/csc/11', 'Residential', 'class not going on', 0, 'class', '2019-01-15 14:17:17'),
(49, 'ps/csc/14', 'Residential', 'No one is in the hall atm', 0, 'hall issue', '2019-01-17 15:23:54'),
(51, 'ps/csc/14', 'Academics', 'The calculation for my cgpa is wrong', 0, 'CGPA issue', '2019-01-19 22:24:33');

-- --------------------------------------------------------

--
-- Table structure for table `counsellingdb`
--

CREATE TABLE `counsellingdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `counsellingdb`
--

INSERT INTO `counsellingdb` (`id`, `studid`, `message`, `activity`) VALUES
(1, '0004', 'hii', '2018-12-15 04:26:20'),
(2, 'admin', 'hello ', '2018-12-15 04:26:20'),
(3, '0004', 'wassup', '2018-12-15 04:29:59'),
(4, 'admin', 'natin much', '2018-12-15 04:29:59');

-- --------------------------------------------------------

--
-- Table structure for table `financialdb`
--

CREATE TABLE `financialdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `financialdb`
--

INSERT INTO `financialdb` (`id`, `studid`, `message`, `activity`) VALUES
(1, '0004', 'hii', '2018-12-15 04:25:24'),
(2, 'admin', 'hello ', '2018-12-15 04:25:24'),
(3, '0004', 'wassup', '2018-12-15 04:31:06'),
(4, 'admin', 'natin much /r/nu?', '2018-12-15 04:31:06');

-- --------------------------------------------------------

--
-- Table structure for table `residentialdb`
--

CREATE TABLE `residentialdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `topic` text NOT NULL,
  `message` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `residentialdb`
--

INSERT INTO `residentialdb` (`id`, `studid`, `topic`, `message`, `activity`) VALUES
(1, '0004', '', 'hii', '2018-12-15 04:22:24'),
(2, 'admin', '', 'hello ', '2018-12-15 04:22:24'),
(3, '0004', '', 'how are you', '2018-12-15 04:23:36'),
(4, 'admin', '', 'am fine u? ', '2018-12-15 04:23:36');

-- --------------------------------------------------------

--
-- Table structure for table `stuleaderdb`
--

CREATE TABLE `stuleaderdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(20) NOT NULL,
  `message` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stuleaderdb`
--

INSERT INTO `stuleaderdb` (`id`, `studid`, `message`, `activity`) VALUES
(1, '0004', 'hii', '2018-12-15 04:24:29'),
(2, 'admin', 'hello ', '2018-12-15 04:24:29'),
(3, '0004', 'wassup', '2018-12-15 04:32:26'),
(4, 'admin', 'natin much wats ur p', '2018-12-15 04:32:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `academicdb`
--
ALTER TABLE `academicdb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chatdb`
--
ALTER TABLE `chatdb`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatdb`
--
ALTER TABLE `chatdb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
