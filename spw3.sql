-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 03, 2014 at 05:37 PM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `spw3`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `fname` varchar(20) NOT NULL,
  `sname` varchar(20) NOT NULL,
  `user` varchar(20) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `bday` date NOT NULL,
  `email` varchar(50) NOT NULL,
  `ghub` varchar(50) DEFAULT NULL,
  `sex` varchar(10) NOT NULL,
  `dept` varchar(20) NOT NULL,
  `int` varchar(100) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  UNIQUE KEY `user` (`user`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`fname`, `sname`, `user`, `pass`, `bday`, `email`, `ghub`, `sex`, `dept`, `int`, `pic`) VALUES
('Asd', 'Asd', 'asd', '85136c79cbf9fe36bb9d05d0639c70c265c18d37', '2000-01-10', 'asd@asd.com', '', 'Female', 'CIV', '', 'C:/xampp/htdocs/spw3/pics/def.png'),
('Gokul', 'Srinivas', 'gsrinivas', '877eb3df2ed5537eef0c5d39dae5a5985be9c282', '2000-01-10', 'g@g.com', 'github.com/gokulsrinivas', 'Male', 'CSE', 'coding and stuff man.', 'C:/xampp/htdocs/spw3/pics/sm.png');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
