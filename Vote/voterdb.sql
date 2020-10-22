-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Nov 06, 2018 at 02:04 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `voterdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `ballot`
--

CREATE TABLE IF NOT EXISTS `ballot` (
  `president` varchar(60) NOT NULL,
  `governor` varchar(60) NOT NULL,
  `secretarygeneral` varchar(60) NOT NULL,
  `studentaffair_coodinator` varchar(60) NOT NULL,
  `sportschairperson` varchar(60) NOT NULL,
  `treasurer` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ballot`
--

INSERT INTO `ballot` (`president`, `governor`, `secretarygeneral`, `studentaffair_coodinator`, `sportschairperson`, `treasurer`) VALUES
('Kim Adrew', 'Jerr Juma', 'Harnis Wangate', 'john ndegwa', 'Kilo Shangu', 'mwenje david'),
('Kim Adrew', 'lester anindo', 'vincent sankuli', 'john ndegwa', 'mike wanjala', 'mwenje david'),
('kinanjui ogola', 'lester anindo', 'Harnis Wangate', 'samwel mwatate', 'mike wanjala', 'mwenje david'),
('kinanjui ogola', 'lester anindo', 'Harnis Wangate', 'john ndegwa', 'Kilo Shangu', 'mwenje david'),
('Kim Adrew', 'Jerr Juma', 'vincent sankuli', 'john ndegwa', 'Kilo Shangu', 'Ricardo Alejandro'),
('Kim Adrew', 'Jerr Juma', 'Harnis Wangate', 'john ndegwa', 'Kilo Shangu', 'mwenje david'),
('Kim Adrew', 'lester anindo', 'vincent sankuli', 'samwel mwatate', 'mike wanjala', 'Ricardo Alejandro');

-- --------------------------------------------------------

--
-- Table structure for table `candidate`
--

CREATE TABLE IF NOT EXISTS `candidate` (
  `name` varchar(60) NOT NULL,
  `position` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `candidate`
--

INSERT INTO `candidate` (`name`, `position`) VALUES
('Kim Adrew', 'President'),
('Jerr Juma', 'Governor'),
('Harnis Wangate', 'Secretary General'),
(' Kilo Shangu', 'Sports Chairperson'),
('mwenje david', 'Treasurer'),
('john ndegwa', 'Student Affair Coodinator'),
('samwel mwatate', 'Student Affair Coodinator'),
('kinanjui ogola', 'President'),
('lester anindo', 'Governor'),
('vincent sankuli', 'Secretary General'),
('mike wanjala', 'Sports Chairperson'),
('Ricardo Alejandro', 'Treasurer');

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE IF NOT EXISTS `loginform` (
  `user` varchar(60) NOT NULL,
  `pass` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`user`, `pass`) VALUES
('admin', 'admin1234'),
('user', 'user1234');

-- --------------------------------------------------------

--
-- Table structure for table `voter`
--

CREATE TABLE IF NOT EXISTS `voter` (
  `firstname` varchar(60) NOT NULL,
  `lastname` varchar(60) NOT NULL,
  `regNo` varchar(20) NOT NULL,
  `IDNo` int(15) NOT NULL,
  `course` varchar(90) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `voter`
--

INSERT INTO `voter` (`firstname`, `lastname`, `regNo`, `IDNo`, `course`) VALUES
('keriner', 'achieng', '1234', 1234, 'Acturial Science'),
('nickson', 'onyango', '4321', 4321, 'Business Administration'),
('teddy', 'were', '2018', 2017, 'Business Administration');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
