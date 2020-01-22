-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 22, 2020 at 02:58 AM
-- Server version: 5.7.26
-- PHP Version: 7.2.18

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `donate`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `admin_id` int(50) NOT NULL AUTO_INCREMENT,
  `admin_email` varchar(100) NOT NULL,
  `admin_password` varchar(100) NOT NULL,
  `admin_fullname` varchar(100) NOT NULL,
  PRIMARY KEY (`admin_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_email`, `admin_password`, `admin_fullname`) VALUES
(2, 'rawan@gmail.com', '123123', 'rawan awwad'),
(3, 'manalhaddad@gmail.com', '123123', 'Manal Haddad');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `cat_id` int(50) NOT NULL AUTO_INCREMENT,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(250) NOT NULL,
  `cat_desc` text NOT NULL,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`, `cat_desc`) VALUES
(2, 'Food', 'restaurant.svg', 'Donate Food Please'),
(3, 'Education', 'books-stack-of-three.svg', 'Donate to Education Please'),
(4, 'Elderly', 'help-the-elderly.svg', 'Donate to Elderly  Please'),
(5, 'Clothes', 'jacket.svg', 'Donate Clothes Please'),
(6, 'Furniture', 'livingroom-black-double-sofa.svg', 'Donate Furniture Please'),
(9, 'Electronic', 'television.svg', 'Donate Electronic Please');

-- --------------------------------------------------------

--
-- Table structure for table `charity`
--

DROP TABLE IF EXISTS `charity`;
CREATE TABLE IF NOT EXISTS `charity` (
  `user_id` int(3) NOT NULL,
  `id` int(3) NOT NULL,
  `charity_id` int(3) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`charity_id`)
) ENGINE=MyISAM AUTO_INCREMENT=191 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `charity`
--

INSERT INTO `charity` (`user_id`, `id`, `charity_id`) VALUES
(1, 74, 1),
(1, 74, 2),
(1, 74, 3),
(1, 74, 4),
(1, 74, 5),
(1, 61, 6),
(1, 61, 7),
(1, 61, 8),
(1, 61, 9),
(1, 74, 10),
(1, 61, 11),
(1, 61, 12),
(1, 61, 13),
(1, 61, 14),
(1, 61, 15),
(1, 61, 16),
(1, 61, 17),
(1, 61, 18),
(1, 74, 19),
(1, 74, 20),
(1, 75, 21),
(1, 76, 22),
(1, 77, 23),
(1, 78, 24),
(1, 78, 25),
(1, 80, 26),
(1, 80, 27),
(1, 82, 28),
(1, 83, 29),
(1, 84, 30),
(1, 84, 31),
(1, 85, 32),
(1, 85, 33),
(1, 85, 34),
(1, 85, 35),
(1, 86, 43),
(1, 86, 41),
(1, 87, 44),
(1, 86, 42),
(1, 88, 45),
(1, 89, 46),
(1, 89, 47),
(1, 92, 48),
(1, 91, 49),
(1, 92, 50),
(1, 91, 51),
(1, 91, 52),
(1, 92, 53),
(1, 92, 54),
(1, 92, 55),
(1, 92, 56),
(1, 91, 57),
(1, 91, 58),
(1, 91, 59),
(1, 93, 60),
(1, 93, 61),
(1, 93, 62),
(1, 93, 63),
(1, 93, 64),
(1, 94, 65),
(1, 94, 66),
(1, 94, 67),
(1, 107, 68),
(1, 96, 69),
(1, 96, 70),
(1, 95, 71),
(1, 101, 72),
(1, 101, 73),
(1, 102, 74),
(1, 109, 75),
(1, 109, 76),
(1, 109, 77),
(1, 106, 78),
(1, 106, 79),
(1, 110, 80),
(1, 110, 81),
(1, 110, 82),
(1, 112, 83),
(1, 112, 84),
(1, 100, 85),
(1, 113, 86),
(1, 113, 87),
(1, 113, 88),
(1, 116, 89),
(1, 116, 90),
(1, 122, 91),
(1, 122, 92),
(1, 122, 93),
(1, 122, 94),
(1, 132, 95),
(1, 132, 96),
(1, 132, 97),
(1, 132, 98),
(1, 139, 99),
(1, 139, 100),
(1, 139, 101),
(1, 139, 102),
(1, 139, 103),
(1, 139, 104),
(1, 142, 105),
(1, 142, 106),
(1, 142, 107),
(1, 142, 108),
(1, 142, 109),
(1, 142, 110),
(1, 125, 111),
(1, 125, 112),
(1, 125, 113),
(1, 147, 114),
(1, 147, 115),
(1, 147, 116),
(1, 147, 117),
(1, 147, 118),
(1, 148, 119),
(1, 148, 120),
(9, 151, 121),
(9, 151, 122),
(9, 151, 123),
(9, 153, 124),
(9, 153, 125),
(9, 153, 126),
(9, 153, 127),
(9, 153, 128),
(9, 154, 129),
(9, 154, 130),
(9, 154, 131),
(9, 154, 132),
(9, 154, 133),
(9, 155, 134),
(9, 155, 135),
(9, 155, 136),
(9, 155, 137),
(9, 155, 138),
(9, 157, 139),
(9, 157, 140),
(9, 157, 141),
(9, 157, 142),
(9, 157, 143),
(9, 157, 144),
(9, 156, 145),
(9, 156, 146),
(9, 156, 147),
(9, 156, 148),
(9, 156, 149),
(9, 120, 150),
(9, 120, 151),
(9, 120, 152),
(9, 120, 153),
(11, 158, 154),
(11, 158, 155),
(11, 158, 156),
(11, 158, 157),
(11, 128, 158),
(11, 128, 159),
(11, 128, 160),
(11, 145, 161),
(11, 145, 162),
(11, 145, 163),
(9, 160, 164),
(9, 160, 165),
(9, 160, 166),
(9, 160, 167),
(9, 161, 168),
(9, 161, 169),
(9, 161, 170),
(9, 161, 171),
(9, 138, 172),
(9, 138, 173),
(9, 138, 174),
(9, 138, 175),
(12, 164, 176),
(12, 164, 177),
(12, 164, 178),
(12, 164, 179),
(12, 164, 180),
(12, 165, 181),
(12, 165, 182),
(12, 165, 183),
(12, 165, 184),
(12, 165, 185),
(12, 166, 186),
(12, 166, 187),
(12, 166, 188),
(12, 166, 189),
(12, 166, 190);

-- --------------------------------------------------------

--
-- Table structure for table `descriptiondonate`
--

DROP TABLE IF EXISTS `descriptiondonate`;
CREATE TABLE IF NOT EXISTS `descriptiondonate` (
  `desc_img` varchar(255) NOT NULL,
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `description` varchar(200) NOT NULL,
  `cat_id` int(3) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=167 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `descriptiondonate`
--

INSERT INTO `descriptiondonate` (`desc_img`, `id`, `description`, `cat_id`) VALUES
('fooddonation.jpg', 162, 'Oil,spagitti', 2),
('babybag.jpg', 129, 'Baby Bag', 5),
('shirt.jpg', 130, 'Shirt', 5),
('babyshoes.jpg', 131, 'Baby Shoes', 5),
('flour.jpg', 119, 'Flour', 2),
('carrots.webp', 121, 'Carrots', 2),
('3kazeh.jpg', 150, 'Crutch', 4),
('chair.jpg', 152, 'Wheel Chair', 4),
('womenbag2.jpg', 133, 'Women Bag', 5),
('livingroom.jpg', 134, 'Sofa', 6),
('table3.jpeg', 135, 'Table', 6),
('mobile3.webp', 136, 'Mobile', 9),
('pencils.jpg', 159, 'Pencils', 3),
('oil.jpg_480Wx480H', 163, 'Oil', 2),
('nootbook.jpg', 146, 'Nootbooks', 3),
('pen.jpg', 144, 'Pen', 3),
('laptop2.webp', 149, 'Laptop', 9);

-- --------------------------------------------------------

--
-- Table structure for table `donates`
--

DROP TABLE IF EXISTS `donates`;
CREATE TABLE IF NOT EXISTS `donates` (
  `user_id` int(50) NOT NULL,
  `donate_id` int(50) NOT NULL,
  `quantity` varchar(100) NOT NULL,
  `note` varchar(300) NOT NULL,
  `donate_name` varchar(300) NOT NULL,
  `address` varchar(300) NOT NULL,
  `date` date NOT NULL,
  `phone` int(100) NOT NULL,
  `cat_id` int(100) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`cat_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `persontakedonation`
--

DROP TABLE IF EXISTS `persontakedonation`;
CREATE TABLE IF NOT EXISTS `persontakedonation` (
  `name` varchar(100) NOT NULL,
  `phone` int(20) NOT NULL,
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `address` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `persontakedonation`
--

INSERT INTO `persontakedonation` (`name`, `phone`, `id`, `address`) VALUES
('rawan', 797428178, 3, 'amman'),
('Rawan Ahmad Hasan Awwad ', 797428178, 17, 'jubaiha amman jordan'),
('nairouz', 797428178, 5, 'jordan/amman/jubaiha'),
('razan', 797428178, 15, 'jordan'),
('yousef', 797428178, 8, 'jubaiha amman jordan'),
('saif', 797255455, 9, 'jubaiha amman jordan'),
('jameleh', 797428178, 10, 'jordan/amman/jubaiha'),
('mohammad', 797428178, 11, 'jubaiha amman jordan'),
('jamal', 797428178, 12, 'jubaiha'),
('rawan', 797428178, 16, 'abu nsair'),
('Rawan Ahmad Hasan Awwad ', 797428178, 18, 'jubaiha amman jordan'),
('rawan', 797428178, 19, 'jubaiha'),
('Rawan Ahmad Hasan Awwad ', 797428178, 20, 'jubaiha amman jordan'),
('hussein', 785214963, 21, 'sahab'),
('Ghufran Awwad ', 797428178, 22, 'swelih jordan'),
('mostafa', 782541369, 23, '8 circle amman'),
('Rawan Ahmad Hasan Awwad ', 797428178, 24, 'jubaiha amman jordan'),
('saif ', 797428178, 25, 'jubaiha'),
('yousef ', 797428178, 26, 'amman'),
('manal haddad', 797428178, 27, 'jubaiha'),
('rawan', 797428178, 28, 'jubaiha'),
('Rawan Ahmad Hasan Awwad ', 797428178, 29, 'jubaiha');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(50) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_password` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` int(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `user_name`, `user_email`, `user_password`, `address`, `phone`) VALUES
(9, 'manal', 'manal@gmail.com', '123123', 'amman', 797428178),
(10, 'rawan awwad', 'rawan@gmail.com', 'rawan', 'amman', 797428178),
(11, 'yasmeen nemer', 'yasmeen@gmail.com', '123123', 'amman jordan', 797428178),
(12, 'rawan awwad', 'rawan@gmail.com', '123123', 'jubaiha amman jordan', 797428178);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
