-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2018 at 07:05 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.0.32

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
-- Table structure for table `chatdb`
--

CREATE TABLE `chatdb` (
  `id` int(11) NOT NULL,
  `studid` varchar(25) NOT NULL,
  `subject` char(40) NOT NULL,
  `message_sent` text NOT NULL,
  `message_reply` text NOT NULL,
  `topic` text NOT NULL,
  `activity` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatdb`
--

INSERT INTO `chatdb` (`id`, `studid`, `subject`, `message_sent`, `message_reply`, `topic`, `activity`) VALUES
(1, 'ps/csc/14', 'Residential', 'my room widow is destroyed\r\n', 'Check the thing', 'My room', '2018-11-23 08:56:55'),
(2, 'ps/csc/14', 'Financial Aid', 'I need a student Loan\r\n', 'Sell stuffs', 'Loan', '2018-11-23 09:02:14'),
(3, 'ps/csc/14', 'Resident', 'Need money for Hostel', 'Go to Bank of Ghana', 'hostel', '2018-11-24 02:42:57'),
(4, 'ps/csc/14', 'Student Leader and Governance', 'leaders need to step down', 'Go remove them', 'Leaders', '2018-11-24 03:27:57'),
(5, 'ps/csc/14', 'Residential', 'People no dey flash', 'mash it err', 'Hall Issue', '2018-11-24 03:29:34'),
(6, 'ps/csc/14', 'Counselling and Carrier Services', 'I want to increase my CGPA\r\n', 'Come see me', 'GPA issue', '2018-11-28 01:44:52'),
(46, 'ps/csc/14', 'Student Leader and Governance', 'leaders are not doing what they should do\r\n', '', 'leaders', '2018-11-29 00:40:13');

--
-- Indexes for dumped tables
--

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
