-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2024 at 01:28 PM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pic_inv`
--

-- --------------------------------------------------------

--
-- Table structure for table `list`
--

DROP TABLE IF EXISTS `list`;
CREATE TABLE IF NOT EXISTS `list` (
  `no_id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  PRIMARY KEY (`no_id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `list`
--

INSERT INTO `list` (`no_id`, `nama`) VALUES
(1, 'Makmal Komputer 2'),
(2, 'Makmal Komputer 3'),
(3, 'Makmal Komputer 4');

-- --------------------------------------------------------

--
-- Table structure for table `mk2`
--

DROP TABLE IF EXISTS `mk2`;
CREATE TABLE IF NOT EXISTS `mk2` (
  `item_id` varchar(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk2`
--

INSERT INTO `mk2` (`item_id`, `item_name`, `status`) VALUES
('WJ45/124/11', 'Mouse', 'OK'),
('WJ98/634/15', 'Mouse', ' OK');

-- --------------------------------------------------------

--
-- Table structure for table `mk3`
--

DROP TABLE IF EXISTS `mk3`;
CREATE TABLE IF NOT EXISTS `mk3` (
  `item_id` varchar(11) NOT NULL,
  `item_name` varchar(30) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk3`
--

INSERT INTO `mk3` (`item_id`, `item_name`, `status`) VALUES
('K5P4/44/EY', 'Keyboard', 'OK'),
('P12/11/34G', 'Printer', ' OK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
