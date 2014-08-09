-- phpMyAdmin SQL Dump
-- version 3.5.5
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Oct 15, 2013 at 12:48 PM
-- Server version: 5.1.69
-- PHP Version: 5.3.17

SET 

SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET 

@OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: 

`phonewar_website`
--

-- --------------------------------------------------------

--
-- Table structure for table `mobile`
--

CREATE TABLE IF NOT EXISTS `mobile2` (
  `m_id` int(11) NOT NULL AUTO_INCREMENT,
  `img` 

varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `brand` varchar(100) NOT NULL,
  `os` varchar(100) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `resolution` varchar(100) NOT NULL,
  `storage` 

varchar(100) NOT NULL,
  `processor` varchar(100) NOT NULL,
  `camera` varchar(100) NOT NULL,
  `price` varchar(100) NOT NULL,
  `b_life` varchar(100) NOT NULL,
  `vcamera` varchar(100) NOT NULL,
  

`dimension` varchar(100) NOT NULL,
  PRIMARY KEY (`m_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `mobile`
--

INSERT INTO `mobile` (`m_id`, `img`, 

`name`, `brand`, `os`, `weight`, `resolution`, `storage`, `processor`, `camera`, `price`, `b_life`, `vcamera`, `dimension`) VALUES
(7, '', 'Nokia E71', 'Nokia', 'Symbian (9.2) S60 3rd Edition, Feature Pack 1', '127 

g', '320 x 240 pixels', '0.11 GB', 'Single core, 369 MHz, ARM11', '3.2 Megapixels', '10,000', '1500 mAh', 'Yes', '4.49 x 2.24 x 0.39 inches'),
(8, '', 'Nokia Lumia 925', 'Nokia', 'Windows Phone 8', '139 g', '768 x 

1280 pixels', '16 GB', 'Dual core, 1500 MHz, Krait', '8.7 Megapixels', '25,999', '2000 mAh', 'Yes', '5.08 x 2.78 x 0.33 inches'),
(9, '', 'Samsung Galaxy S II', 'Samsung', 'Android (4.1.2, 4.0.4, 4.0, 2.3)', '116 g', 

'480 x 800 pixels', '32 GB', 'Dual core, 1200 MHz, ARM Cortex-A9', '8 Megapixels', '25,000', '1650 mAh', 'Yes', '4.93 x 2.60 x 0.33 inches'),
(10, '', 'Samsung Galaxy S III', 'Samsung', 'Android (4.1.2, 4.1.1, 

4.0.4)', '133 g', '720 x 1280 pixels', '32 GB', 'Quad core, 1400 MHz, ARM Cortex-A9', '8 Megapixels', '32,000', '2100 mAh', 'Yes', '5.38 x 2.78 x 0.34 inches'),
(11, '', 'Xolo X1000', 'Xolo', 'Android (4.1.2, 4.1.1, 

4.0.4)', '140 g', '720x1280 pixels', '8 GB', 'Intel Atom Processor Z2480', '8 Megapixels', '19,999', '1900 mAh', 'Yes', '5.27 x 2.66 x 0.36 inches'),
(12, '', 'Xolo Play', 'Xolo', 'Android (4.1.2, 4.1.1, 4.0.4)', '167 g', 

'720 x 1280 pixels', '4 GB', 'Nvidia Tegra 3', '8 Megapixels', '13,000', '2000 mAh', 'Yes', '5.45 x 2.76 x 0.41 inches'),
(13, '', 'LG Optimus G Sprint', 'LG', 'Android (4.1.2, 4.0.4)', '145 g', '768 x 1280 pixels', '32 

GB', 'Qualcomm Snapdragon S4 Pro APQ8064', '13 Megapixels', '26,000', '2100 mAh', 'Yes', '5.19 x 2.71 x 0.33 inches'),
(14, '', 'Google Nexus 4', 'LG', 'Android (4.3, 4.2.2, 4.2.1, 4.2)', '139 g', '768 x 1280 

pixels', '8 GB', 'Qualcomm Snapdragon S4 Pro APQ8064', '8 Megapixels', '24,000', '2100 mAh', 'Yes', '5.27 x 2.70 x 0.36 inches'),
(15, '', 'Apple iPhone 5', 'Apple', 'iOS (7, 6.1, 6)', '112 g', '640 x 1136 pixels', 

'16 GB', 'Dual core, 1300 MHz, Apple Swift', '8 Megapixels', '39,999', '1440 mAh', 'Yes', '4.87 x 2.31 x 0.30 inches'),
(16, '', 'Apple iPhone 4', 'Apple', 'iOS (7, 6.1, 6, 5.1, 5, 4.x)', '13t g', '640 x 960 pixels', '32 

GB', 'Single core, 1000 MHz, ARM Cortex-A8', '5 Megapixels', '20,000', '1420 mAh', 'Yes', '4.50 x 2.31 x 0.37 inches'),
(17, '', 'BlackBerry Curve 9315', 'Blackberry', 'BlackBerry (7.1)', '104 g', '320 x 240 

pixels', 'up to 32 GB', 'Single core, 800 MHz', '3.2 Megapixels', '11,000', '1450 mAh', 'Yes', '4.29 x 2.36 x 0.50 inches'),
(18, '', 'BlackBerry Z10', 'Blackberry', 'BlackBerry (10)', '138 g', '768 x 1280 pixels', '16 

GB', 'Qualcomm Snapdragon S4 Plus MSM8960', '8 Megapixels', '21,000', '1800 mAh', 'Yes', '5.12 x 2.58 x 0.35 inches'),
(19, '', 'HTC One X', 'HTC', 'Android (4.2.2, 4.1, 4.0.4, 4.0.3)', '130 g', '720 x 1280 

pixels', '32 GB', 'NVIDIA Tegra 3 T30', '8 Megapixels', '27,999', '1800 mAh', 'Yes', '5.29 x 2.75 x 0.35 inches'),
(20, '', 'HTC Butterfly', 'HTC', 'Android (4.2.2, 4.1, 4.0.4, 4.0.3)', '140 g', '1080 x 1920 pixels', '16 

GB', 'Qualcomm APQ8064 Snapdragon', '8 Megapixels', '35,000', '2020 mAh', 'Yes', '5.63 x 2.78 x 0.36 inches');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET 

CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
