-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 10, 2024 at 05:08 PM
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
('110', 'Monitor', 'OK'),
('P12/11/34G', 'Printer', ' OK'),
('111', 'Meja', 'OK'),
('112', 'Meja', 'OK'),
('113', 'Meja', 'OK'),
('114', 'Meja', 'OK'),
('115', 'Meja', 'OK'),
('002', 'Keyboard', 'OK'),
('003', 'Keyboard', 'OK'),
('004', 'Keyboard', 'OK'),
('005', 'Keyboard', 'OK'),
('011', 'Komputer', 'OK'),
('022', 'Komputer', 'OK'),
('033', 'Komputer', 'OK'),
('044', 'Komputer', 'OK'),
('055', 'Komputer', 'OK'),
('11', 'Kerusi', 'OK'),
('12', 'Kerusi', 'OK'),
('01', 'Kerusi', 'OK'),
('02', 'Kerusi', 'OK'),
('03', 'Kerusi', 'OK'),
('04', 'Kerusi', 'OK'),
('05', 'Kerusi', 'OK'),
('021', 'mouse', 'OK'),
('121', 'mouse', 'OK'),
('122', 'Monitor', 'OK'),
('123', 'Monitor', 'OK'),
('124', 'Monitor', 'OK'),
('125', 'Monitor', 'OK'),
('120', 'Monitor', 'OK'),
('130', 'Monitor', 'OK'),
('140', 'Monitor', 'OK'),
('150', 'Monitor', 'OK');

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
('211', 'Mouse', 'OK'),
('001', 'Komputer', 'OK'),
('002', 'Komputer', 'OK'),
('003', 'Komputer', 'OK'),
('004', 'Komputer', 'OK'),
('005', 'Komputer', 'OK'),
('011', 'Meja', 'OK'),
('022', 'Meja', 'OK'),
('033', 'Meja', 'OK'),
('044', 'Meja', 'OK'),
('055', 'Meja', 'OK'),
('111', 'Kerusi', 'OK'),
('112', 'Kerusi', 'OK'),
('113', 'Kerusi', 'OK'),
('114', 'Kerusi', 'OK'),
('115', 'Kerusi', 'OK'),
('021', 'Keyboard', 'OK'),
('031', 'Keyboard', 'OK'),
('032', 'Keyboard', 'OK'),
('10', 'Keyboard', 'OK'),
('20', 'Keyboard', 'OK'),
('30', 'Keyboard', 'OK'),
('40', 'Keyboard', 'OK'),
('50', 'Keyboard', 'OK'),
('11', 'Monitor', 'OK'),
('12', 'Monitor', 'OK'),
('13', 'Monitor', 'OK'),
('14', 'Monitor', 'OK'),
('15', 'Monitor', 'OK'),
('212', 'Mouse', 'OK'),
('213', 'Mouse', 'OK'),
('214', 'Mouse', 'OK'),
('215', 'Mouse', 'OK'),
('000', 'projector', 'OK'),
('999', 'Pc', 'OK'),
('888', 'Pc', 'OK'),
('777', 'Pc', 'OK'),
('666', 'Pc', 'OK'),
('555', 'Pc', 'OK'),
('skp/00', 'Priter', 'OK'),
('skp/11', 'Printer', 'OK');

-- --------------------------------------------------------

--
-- Table structure for table `mk5`
--

DROP TABLE IF EXISTS `mk5`;
CREATE TABLE IF NOT EXISTS `mk5` (
  `item_id` varchar(11) NOT NULL,
  `item_name` varchar(50) NOT NULL,
  `status` varchar(15) NOT NULL,
  PRIMARY KEY (`item_id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `mk5`
--

INSERT INTO `mk5` (`item_id`, `item_name`, `status`) VALUES
('K5P4/75/EY', 'Keyboard', 'OK'),
('K5P4/76/EY', 'Keyboard', 'OK'),
('K5P4/79/EY', 'Keyboard', 'OK'),
('K5P4/77/EY', 'Keyboard', 'OK'),
('K5P4/78/EY', 'Keyboard', 'OK'),
('K5P4/55/EY', 'Meja', 'OK'),
('K5P4/56/EY', 'Meja', 'OK'),
('K5P4/57/EY', 'Meja', 'OK'),
('K5P4/58/EY', 'Meja', 'OK'),
('K5P4/59/EY', 'Meja', 'OK'),
('K5P4/65/EY', 'Komputer', 'OK'),
('K5P4/66/EY', 'Komputer', 'OK'),
('K5P4/67/EY', 'Komputer', 'OK'),
('K5P4/68/EY', 'Komputer', 'OK'),
('K5P4/69/EY', 'Komputer', 'OK'),
('K5P4/45/EY', 'Kerusi', 'OK'),
('K5P4/46/EY', 'Kerusi', 'OK'),
('K5P4/47/EY', 'Kerusi', 'OK'),
('K5P4/48/EY', 'Kerusi', 'OK'),
('K5P4/49/EY', 'Kerusi', 'OK'),
('K5P4/35/EY', 'Monitor', 'OK'),
('K5P4/36/EY', 'Monitor', 'OK'),
('K5P4/37/EY', 'Monitor', 'OK'),
('K5P4/39/EY', 'Monitor', 'OK'),
('K5P4/34/EY', 'Monitor', 'OK'),
('K5P4/25/EY', 'Monitor', 'OK'),
('K5P4/26/EY', 'Monitor', 'OK'),
('K5P4/27/EY', 'Monitor', 'OK'),
('K5P4/28/EY', 'Monitor', 'OK'),
('K5P4/29/EY', 'Monitor', 'OK'),
('K5P4/15/EY', 'mouse', 'OK'),
('K5P4/16/EY', 'Mouse', 'OK'),
('K5P4/17/EY', 'Mouse', 'OK'),
('K5P4/18/EY', 'Mouse', ''),
('K5P4/19/EY', 'Mouse', 'OK');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
