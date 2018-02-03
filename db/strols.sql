-- phpMyAdmin SQL Dump
-- version 4.0.10.18
-- https://www.phpmyadmin.net
--
-- Host: localhost:3306
-- Generation Time: Feb 02, 2018 at 09:07 PM
-- Server version: 5.6.36-cll-lve
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `strol`
--

-- --------------------------------------------------------

--
-- Table structure for table `strols`
--

CREATE TABLE IF NOT EXISTS `strols` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) NOT NULL,
  `distance` int(3) NOT NULL,
  `weight` int(3) NOT NULL,
  `calories` int(5) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `strols`
--

INSERT INTO `strols` (`id`, `user`, `distance`, `weight`, `calories`) VALUES
(1, 'Brandon', 10, 200, 1000),
(2, 'Michael', 26, 145, 3500),
(3, 'Rufus', 10, 130, 1000),
(4, 'Stacey', 6, 110, 487),
(5, 'Ron', 13, 167, 1103),
(6, 'Molly', 17, 134, 1457),
(7, 'Richard', 3, 220, 346),
(8, 'Richard', 4, 220, 456),
(9, 'Ricky', 23, 120, 2108),
(10, 'Bertha', 2, 330, 546),
(11, 'Marge', 6, 145, 768),
(12, 'Dexter', 11, 186, 1297),
(13, 'Ahmed', 5, 163, 498),
(14, 'Bill', 13, 261, 2134);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
