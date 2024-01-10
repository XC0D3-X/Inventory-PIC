-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2024 at 03:36 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

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
('WJ98/634/15', 'Mouse', ' OK'),
('WJ45/124/12', 'mouse', 'ok'),
('WJ45/124/13', 'mouse', 'ok'),
('WJ45/124/14', 'mouse', 'ok'),
('WJ45/124/15', 'mouse', 'ok'),
('WJ45/124/16', 'mouse', 'ok'),
('WJ45/124/17', 'mouse', 'ok'),
('WJ45/124/18', 'mouse', 'ok'),
('WJ45/124/19', 'mouse', 'ok'),
('WJ98/634/16', 'meja', 'ok'),
('WJ98/634/17', 'meja', 'ok'),
('WJ98/634/18', 'meja', 'ok'),
('WJ98/634/19', 'meja', 'ok'),
('WJ98/634/25', 'meja', 'ok'),
('WJ98/634/20', 'meja', 'ok'),
('WJ98/634/21', 'meja', 'ok'),
('WJ98/634/22', 'meja', 'ok'),
('WJ98/634/23', 'meja', 'ok'),
('WJ98/634/24', 'meja', 'ok'),
('WJ69/101/01', 'monitor', 'ok'),
('WJ69/101/02', 'monitor', 'ok'),
('WJ69/101/03', 'monitor', 'ok'),
('WJ69/101/04', 'monitor', 'ok'),
('WJ69/101/05', 'monitor', 'ok'),
('WJ69/101/06', 'monitor', 'ok'),
('WJ69/101/07', 'monitor', 'ok'),
('WJ69/101/08', 'monitor', 'ok'),
('WJ69/101/09', 'monitor', 'ok'),
('WJ69/101/10', 'monitor', 'ok'),
('WJ321/55/01', 'keyboard', 'ok'),
('WJ321/55/02', 'keyboard', 'ok'),
('WJ321/55/03', 'keyboard', 'ok'),
('WJ321/55/04', 'keyboard', 'ok'),
('WJ321/55/05', 'keyboard', 'ok'),
('WJ321/55/06', 'keyboard', 'ok'),
('WJ321/55/07', 'keyboard', 'ok'),
('WJ321/55/08', 'keyboard', 'ok'),
('WJ321/55/09', 'keyboard', 'ok'),
('WJ321/55/10', 'keyboard', 'ok'),
('WJ10/111/01', 'pc', 'ok'),
('WJ10/111/02', 'pc', 'ok'),
('WJ10/111/03', 'pc', 'ok'),
('WJ10/111/04', 'pc', 'ok'),
('WJ10/111/05', 'pc', 'ok'),
('WJ10/111/06', 'pc', 'ok'),
('WJ10/111/07', 'pc', 'ok'),
('WJ10/111/08', 'pc', 'ok'),
('WJ10/111/09', 'pc', 'ok'),
('WJ10/111/10', 'pc', 'ok'),
('WJ33/202/01', 'projector', 'ok');

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

-- --------------------------------------------------------

--
-- Table structure for table `mk4`
--

DROP TABLE IF EXISTS `mk4`;
CREATE TABLE IF NOT EXISTS `mk4` (
  `item_id` varchar(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk4`
--

INSERT INTO `mk4` (`item_id`, `item_name`, `status`) VALUES
('K5P4/44/EY', 'Keyboard', 'OK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
