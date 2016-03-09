-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2016 at 08:07 PM
-- Server version: 5.6.25
-- PHP Version: 5.6.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studentadmin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Uid` varchar(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `ph_no` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Uid`, `Name`, `Email`, `Password`, `ph_no`) VALUES
('admin007', 'Admin', 'admin41@gmail.com', 'admin', '9851561800');

-- --------------------------------------------------------

--
-- Table structure for table `image_upload`
--

CREATE TABLE IF NOT EXISTS `image_upload` (
  `Slno` int(11) NOT NULL,
  `Uid` varchar(200) NOT NULL,
  `image` varchar(2000) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `image_upload`
--

INSERT INTO `image_upload` (`Slno`, `Uid`, `image`) VALUES
(13, 'student418', 'images/15-02-2016-1455519100'),
(14, 'student208', 'images/16-02-2016-1455606911.jpg'),
(15, 'student438', 'images/16-02-2016-1455615837.jpg'),
(16, 'student665', 'images/16-02-2016-1455622458.jpg'),
(17, 'student62', 'images/16-02-2016-1455628592.jpg'),
(18, 'student810', 'images/17-02-2016-1455681547.jpg'),
(19, 'student780', 'images/17-02-2016-1455733174.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `Slno` int(12) NOT NULL,
  `Uid` varchar(30) NOT NULL,
  `message` varchar(2000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `studentinfo`
--

CREATE TABLE IF NOT EXISTS `studentinfo` (
  `Name` varchar(80) NOT NULL,
  `DOB` varchar(20) NOT NULL,
  `Age` varchar(20) NOT NULL,
  `Gender` varchar(20) NOT NULL,
  `Program` varchar(20) NOT NULL,
  `Registration_no` varchar(30) NOT NULL,
  `Dept` varchar(50) NOT NULL,
  `Roll_no` varchar(20) NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `Uid` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `valid` varchar(10) NOT NULL DEFAULT '0',
  `image_valid` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `studentinfo`
--

INSERT INTO `studentinfo` (`Name`, `DOB`, `Age`, `Gender`, `Program`, `Registration_no`, `Dept`, `Roll_no`, `Sem`, `Email`, `Mobile_no`, `Uid`, `Password`, `valid`, `image_valid`) VALUES
('Ranganath Kundu', '12/10/1994', '22', 'female', 'M.tech', '20130340', 'Mechanical Engineering', '13/ME/12', 'Second Sem', 'ranganath@gmail.com', '9851561800', 'student418', 'riki', '1', 1),
('Mohit Shaw', '12/09/1994', '22', 'Male', 'B.Tech', '20130999', 'Information Technology', '13/IT/19', 'Forth Sem', 'mohit@gmail.com', '908765432', 'student438', '12345', '1', 1),
('priyal', '12/02/1995', '21', 'female', 'B.Tech', '20130059', 'Information Technology', '13/IT/02', 'Sixth Sem', 'priyal@gmail.com', '9474211606', 'student665', 'asdfg', '1', 1),
('Srinath Sheet', '10/07/1994', '22', 'Male', 'B.Tech', '20130564', 'Information Technology', '13/IT/40', 'Sixth Sem', 'srinath@gmail.com', '9046962544', 'student62', '123456789', '1', 1),
('Riki Mondal', '12/01/1994', '22', 'Male', 'B.Tech', '20130401', 'Information Technology', '13/IT/12', 'Fifth Sem', 'rkmondal@gmail.com', '9851561800', 'student810', 'riki', '1', 1),
('Rohit Ghosh', '12/01/1995', '21', 'female', 'B.Tech', '20130340', 'Electronics And Communication Engi', '13/ECE/12', 'Fifth Sem', 'riki@gmail.com', '12345678', 'student780', '12', '1', 1),
('Riki Mondal', '12/02/1995', '21', 'Male', 'M.tech', '20130340', 'Computer Science Engineering', '13/CSE/90', 'Second Sem', 'rkmondal41@gmail.com', '986578990', 'student175', '12345', '0', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `image_upload`
--
ALTER TABLE `image_upload`
  ADD PRIMARY KEY (`Slno`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`Slno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `image_upload`
--
ALTER TABLE `image_upload`
  MODIFY `Slno` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `Slno` int(12) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
