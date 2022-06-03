-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: sql205.epizy.com
-- Generation Time: Jun 03, 2022 at 10:10 AM
-- Server version: 10.3.27-MariaDB
-- PHP Version: 7.2.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `epiz_29157152_Flowweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `user` varchar(250) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `name`, `user`, `password`) VALUES
(1, 'Amit Kumar', 'sonu@gmail.com', '12345'),
(2, 'Tushar Anand', 'tushar@123', 'tushar'),
(3, 'Amarjeet kumar', 'amarjeet', 'amar@123');

-- --------------------------------------------------------

--
-- Table structure for table `capgemini`
--

CREATE TABLE `capgemini` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `clients`
--

CREATE TABLE `clients` (
  `sno` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `clients`
--

INSERT INTO `clients` (`sno`, `name`, `phon`, `email`, `type`, `address`) VALUES
(1, 'Test', '9898989898', 'test@gmail.com', 'Dynamic webiste', 'Test'),
(3, 'Taniya', '7667570800', 'kdelip@123', 'School webiste', 'Madhukam'),
(4, 'Suryateja', '7396643765', 'suryatejavemakoti@gmail.com', 'Dynamic webiste', 'Panda veedhi, parvathipuram'),
(5, 'Kavita Sharma', '9523546770', 'kavitasharma70@gmail.com', 'Dynamic webiste with admin', 'Ranchi');

-- --------------------------------------------------------

--
-- Table structure for table `cognizant`
--

CREATE TABLE `cognizant` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cognizant`
--

INSERT INTO `cognizant` (`id`, `title`, `content`, `link`) VALUES
(1, 'Cognizant GenC next', 'Cognizant Hiring GenC NEXT | 6.75LPA | 2022 Batch | B.E M.Tech MCA M.Sc', 'http://app.joinsuperset.com/company/cognizant/genc-next.html');

-- --------------------------------------------------------

--
-- Table structure for table `infosys`
--

CREATE TABLE `infosys` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `jobadmin`
--

CREATE TABLE `jobadmin` (
  `id` int(255) NOT NULL,
  `admin` varchar(11) NOT NULL,
  `password` varchar(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobadmin`
--

INSERT INTO `jobadmin` (`id`, `admin`, `password`) VALUES
(1, 'flowadmin', 'flow@123f'),
(2, 'Placement', 'Sir@123');

-- --------------------------------------------------------

--
-- Table structure for table `other`
--

CREATE TABLE `other` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `other`
--

INSERT INTO `other` (`id`, `title`, `content`, `link`) VALUES
(1, 'DECOS ', 'DECOS Off-Campus Drive | 3.7LPA | 2021 Batch\r\n\r\n', 'http://bit.ly/3ibJfRX');

-- --------------------------------------------------------

--
-- Table structure for table `studentdata`
--

CREATE TABLE `studentdata` (
  `id` int(255) NOT NULL,
  `studentname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(255) NOT NULL,
  `college` varchar(255) NOT NULL,
  `project` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `payment` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `studentdata`
--

INSERT INTO `studentdata` (`id`, `studentname`, `email`, `number`, `college`, `project`, `password`, `payment`) VALUES
(1, 'Jagdish Kumar surin ', 'jagdishsurin6266@gmail.com', '8340494098', 'Marwari College ranchi', 'E-commerce ', '1234567qwerty', 'a'),
(2, 'Amit Kumar', 'amitkumardob1999@gmail.com', '8271459326', 'Marwari College ranchi', 'Next gen. Online shop', 'amit@321', 'a'),
(3, 'amit kumar', 'osms@gmail.com', '7493820347', 'Marwari College ranchi', 'Ticketing System', '12345', 'a'),
(4, 'Amit kumar', 'sonu@gmail.com', '7493820347', 'Marwari College ranchi', 'Ticketing System', '12345', 'a'),
(5, 'Priyanka Pathak', 'priyankapathak27@gmail.com', '6209876530', 'Ranchi Womens College', 'Personal website with Personal admin panel', 'Rishavlove@123', 'a'),
(6, 'Saroj', 'saroj@gmail.com', '8569463871', 'DSPMU', 'Hotel management', '1111', 'b'),
(7, 'GARIMA', 'GARIMA@GMAIL.COM', '876787654368', 'Marwari College ranchi', 'AI BASED CAR SYSTEM', '11111', 'b'),
(8, 'tushar', 'tushar@123', '6666765688', 'Marwari College ranchi', 'python', 'tt', 'b'),
(9, 'ashish', 'a@gmail.com', '6578876548', 'Marwari College ranchi', 'python', 'aa', 'a');

-- --------------------------------------------------------

--
-- Table structure for table `tcs`
--

CREATE TABLE `tcs` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tcs`
--

INSERT INTO `tcs` (`id`, `title`, `content`, `link`) VALUES
(1, 'TCS Hiring Ninja', '3.5LPA| 2022 Batch| \r\nEligiblity Criteria: B.E/B.Tech/M.Tech/MCA/M.Sc|\r\nEnd Date: 15 August 2021', 'http://tcs.com/careers/TCSNinjaHiringYoP2022');

-- --------------------------------------------------------

--
-- Table structure for table `wipro`
--

CREATE TABLE `wipro` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `content` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wipro`
--

INSERT INTO `wipro` (`id`, `title`, `content`, `link`) VALUES
(1, 'Wipro Service Desk Hiring', ' BBA, BBM, B.Com, BMS, BA and BSc economics Only', 'http://careers.wipro.com/dwsd');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `capgemini`
--
ALTER TABLE `capgemini`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `clients`
--
ALTER TABLE `clients`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `cognizant`
--
ALTER TABLE `cognizant`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infosys`
--
ALTER TABLE `infosys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobadmin`
--
ALTER TABLE `jobadmin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `other`
--
ALTER TABLE `other`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `studentdata`
--
ALTER TABLE `studentdata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tcs`
--
ALTER TABLE `tcs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `wipro`
--
ALTER TABLE `wipro`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `capgemini`
--
ALTER TABLE `capgemini`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `clients`
--
ALTER TABLE `clients`
  MODIFY `sno` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `cognizant`
--
ALTER TABLE `cognizant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infosys`
--
ALTER TABLE `infosys`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobadmin`
--
ALTER TABLE `jobadmin`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `other`
--
ALTER TABLE `other`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `studentdata`
--
ALTER TABLE `studentdata`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tcs`
--
ALTER TABLE `tcs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `wipro`
--
ALTER TABLE `wipro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
