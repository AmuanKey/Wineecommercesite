-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 14, 2023 at 03:48 PM
-- Server version: 5.5.20
-- PHP Version: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `wine`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `Name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `Password` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Name`, `Password`) VALUES
('admin', 'admin321');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE IF NOT EXISTS `feedback` (
  `fb_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `message` varchar(255) NOT NULL,
  PRIMARY KEY (`fb_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`fb_id`, `name`, `email`, `message`) VALUES
(1, 'test', 'test@gmail.com', 'This is a test message'),
(2, 'Neon', 'neon@gmail.com', 'I getting to the final stages of the development'),
(3, 'tester', 'test@gmail.com', 'this is just a test'),
(4, 'name', 'email@asdf.sed', 'This is some test feedback');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE IF NOT EXISTS `likes` (
  `pname` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`pname`, `name`) VALUES
('wine-3.jpg', 'Fresh Wine'),
('wine-1.jpg', 'Red Wine'),
('wine-4.jpg', 'Romantic Wine'),
('wine-4.jpg', 'Romantic Wine');

-- --------------------------------------------------------

--
-- Table structure for table `orderlist`
--

CREATE TABLE IF NOT EXISTS `orderlist` (
  `ol_id` int(11) NOT NULL AUTO_INCREMENT,
  `cusname` char(50) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `address` varchar(255) NOT NULL,
  `pname` varchar(100) NOT NULL,
  `price` bigint(20) NOT NULL,
  `o_no` varchar(500) NOT NULL,
  `order_time` datetime NOT NULL,
  `photo` varchar(255) NOT NULL,
  `status` varchar(255) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `ticks` varchar(255) CHARACTER SET armscii8 NOT NULL,
  `sty` varchar(255) CHARACTER SET armscii8 NOT NULL,
  PRIMARY KEY (`ol_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `orderlist`
--

INSERT INTO `orderlist` (`ol_id`, `cusname`, `phone`, `address`, `pname`, `price`, `o_no`, `order_time`, `photo`, `status`, `ticks`, `sty`) VALUES
(1, 'win win', '11223', 'Tamine', 'Romantic Wine', 69000, '139', '2023-10-14 12:07:04', 'wine-4.jpg', '', '', ''),
(2, 'Rin', '44332', 'Sanchaung', 'Red Wine', 500000, '546', '2023-10-14 12:14:48', 'wine-1.jpg', '', '', ''),
(3, 'fd', '432fd', 'fd', 'Red Wine', 500000, '481', '2023-10-14 12:41:07', 'wine-1.jpg', 'DELIVERED', '&#x2713;', ' border border-2 border-success p-2  rounded-circle text-success'),
(4, 'win win', '12345', 'pol', 'Barefoot Wine', 1500, '144', '2023-10-14 13:09:03', 'wine-bottle-1.jpg', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `productupload`
--

CREATE TABLE IF NOT EXISTS `productupload` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `info` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `price` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `likes` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=13 ;

--
-- Dumping data for table `productupload`
--

INSERT INTO `productupload` (`p_id`, `name`, `info`, `price`, `images`, `likes`) VALUES
(3, 'Red Wine', 'Red wine for everyone', '500000', 'wine-1.jpg', '-fill'),
(4, 'Romantic Wine', 'This is a romantic wine and all the wonder it can do', '69000', 'wine-4.jpg', '-fill'),
(5, 'Barefoot Wine', 'Get Barefoot and Have a Great Time', '1500', 'wine-bottle-1.jpg', ''),
(6, 'Silk Merlot', 'Experience the Silky Smoothness of Our Merlot, a Wine of Unmatched Elegance and Comfort, Crafted to Delight Your Palate', '45000', 'wine-bottle-2.jpg', ''),
(7, 'Golden Chardonnay', 'Our Golden Chardonnay Radiates Lusciousness, Offering a Taste as Brilliant as Sunshine in a Bottle, A Truly Buttery Bliss to Uplift Your Senses', '340000', 'wine-bottle-3.jpg', ''),
(8, 'Divine Pinot', 'Sip on Divine Pinot, an Exquisite Expression of Terroir, A Silky Perfection in Your Glass, This Burgundian Treasure is Meant to Be Savored and Cherished', '565000', 'wine-bottle-4.jpg', ''),
(9, 'Enchanted Riesling', 'Take an Enchanting Journey to Crisp Refreshment with Our Riesling, Discover German Elegance in Every Sip, A Sweet Serenity That Transports the Imagination', '750000', 'wine-bottle-6.jpg', ''),
(10, 'Aria Cabernet', 'A Glass of Aria Cabernet is a Harmonious Symphony of Flavor and Aroma, Experience the Powerful Napa Passion That Ignites Your Palate', '800000', 'wine-bottle-7.jpg', ''),
(11, 'Dusk Tempranillo', 'As the Sun Sets, Savor the Sunset-Warmed Elixir of Spanish Soul, Explore an Exquisite and Richly Seductive Journey into Evening Indulgence with Dusk Tempranillo', '770000', 'wine-bottle-9.jpg', ''),
(12, 'Noble Shiraz', 'Discover the Regal Noble Shiraz, a Wine of Robust Grandeur Aged to Perfection for Discerning Palates, A Heritage of Distinction and Excellence Awaits You', '540000', 'wine-bottle-10.jpg', '');

-- --------------------------------------------------------

--
-- Table structure for table `registerlist`
--

CREATE TABLE IF NOT EXISTS `registerlist` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` char(50) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=3 ;

--
-- Dumping data for table `registerlist`
--

INSERT INTO `registerlist` (`p_id`, `name`, `email`, `password`) VALUES
(1, 'admin', 'admin@gmail.com', '321'),
(2, 'amuan', 'amuan@gmail.com', '123');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
