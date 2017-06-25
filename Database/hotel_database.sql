-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2014 at 06:42 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `hotel_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admingym`
--

CREATE TABLE IF NOT EXISTS `admingym` (
  `gym_ID` int(11) NOT NULL DEFAULT '0',
  `status` varchar(100) DEFAULT NULL,
  `max_allow` int(11) DEFAULT NULL,
  `max_no_of_hours` int(11) DEFAULT NULL,
  `pending` varchar(100) DEFAULT NULL,
  `complete` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`gym_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admingym`
--

INSERT INTO `admingym` (`gym_ID`, `status`, `max_allow`, `max_no_of_hours`, `pending`, `complete`) VALUES
(1, 'Available', 50, 5, 'Orbitrek Machines,Cleaning Kit', 'Gym Kit,Gym Instrutor, Water Bottles'),
(101, 'Available', 50, 5, 'Orbitrek Machines,Cleaning Kit', 'Gym Kit,Gym Instrutor, Water Bottles');

-- --------------------------------------------------------

--
-- Table structure for table `adminhall`
--

CREATE TABLE IF NOT EXISTS `adminhall` (
  `hall_ID` int(11) NOT NULL DEFAULT '0',
  `type` varchar(50) DEFAULT NULL,
  `name` varchar(50) DEFAULT NULL,
  `acc` int(11) DEFAULT NULL,
  `status` varchar(50) DEFAULT NULL,
  `max_hours` int(11) DEFAULT NULL,
  `pending` varchar(100) DEFAULT NULL,
  `complete` varchar(100) DEFAULT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`hall_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminhall`
--

INSERT INTO `adminhall` (`hall_ID`, `type`, `name`, `acc`, `status`, `max_hours`, `pending`, `complete`, `price`) VALUES
(102, 'Wedding', 'Cecilia', 300, 'Reserved', 5, 'Floral Arrangements, Carpet', 'Aisle,Cleaning Kit', 5000000),
(103, 'Wedding', 'Charlotte', 400, 'Not Reserved', 7, 'Aisle, Carpet, Cleaning Kit', 'Floral Arrangements', 5600000),
(104, 'Wedding', 'Neon Light', 500, 'Not Reserved', 6, 'Retinue Table, Cake structure ingredients', 'Aisle, Carpet, Cleaning Kit', 4500000),
(105, 'Wedding', 'Flora', 300, 'Reserved', 5, 'Tent,Tables,Table Cloths', 'Glass Sculpture,Buffet Table', 3400000),
(106, 'Conference Hall', 'Room A', 40, 'Reserved', 4, 'Projector,Flat screen monitor', 'Skype Facilities', 100000),
(107, 'Conference Hall', 'Room B', 50, 'Not Reserved', 6, 'Microphones', 'Round Tables,Projector', 250000),
(108, 'Conference Hall', 'Room C', 40, 'Not Reserved', 5, 'Podium', 'Cleaning Kit', 100000),
(109, 'Workshop Hall', 'Rider', 100, 'Reserved', 6, 'Row Seats, Stage Lighting', 'Cleaning Kit, Mops', 120000),
(110, 'Workshop Hall', 'Zephyr', 80, 'Not Reserved', 6, 'Microphone,Projector', 'Laser Pointers, Stationery', 130000),
(111, 'Workshop Hall', 'Escort', 60, 'Reserved', 6, 'Cleaning Kit,Sound System', 'Flat Screen Monitor, Projectors', 140000);

-- --------------------------------------------------------

--
-- Table structure for table `adminpool`
--

CREATE TABLE IF NOT EXISTS `adminpool` (
  `pool_ID` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `max_allow` int(11) DEFAULT NULL,
  `max_no_of_hours` int(11) DEFAULT NULL,
  `pending` varchar(100) DEFAULT NULL,
  `complete` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`pool_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminpool`
--

INSERT INTO `adminpool` (`pool_ID`, `name`, `status`, `max_allow`, `max_no_of_hours`, `pending`, `complete`) VALUES
(112, 'Partier', 'Reserved', 30, 5, 'Cleaning Kit, Pool Decorations', 'Purifiers'),
(113, 'Spiral', 'Not Reserved', 80, 7, 'Tube Cleaners, Cleaning Kit', 'Purifiers, Decorations');

-- --------------------------------------------------------

--
-- Table structure for table `adminroom`
--

CREATE TABLE IF NOT EXISTS `adminroom` (
  `room_ID` int(11) NOT NULL DEFAULT '0',
  `room_name` varchar(50) DEFAULT NULL,
  `available_room` int(11) DEFAULT NULL,
  `charge` double DEFAULT NULL,
  `pending` varchar(100) DEFAULT NULL,
  `complete` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminroom`
--

INSERT INTO `adminroom` (`room_ID`, `room_name`, `available_room`, `charge`, `pending`, `complete`) VALUES
(114, 'Deluxe Courtyard Room', 20, 45000, 'Cleaning Kit, Trolly', 'Towels, Butler Service'),
(115, 'Honeymoon Suite', 10, 58000, 'Decorations', 'Cleaning Kit'),
(116, 'Royal Suite', 40, 57000, 'Cleaning Kit', 'Butler Service'),
(117, 'Petite Lux Suite', 30, 60000, 'Cleaning Kit', 'Trolly'),
(118, 'Terrace Suite', 30, 59000, 'Trolly', 'Room Service');

-- --------------------------------------------------------

--
-- Table structure for table `adminspa`
--

CREATE TABLE IF NOT EXISTS `adminspa` (
  `spa_ID` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `max_allow` int(11) DEFAULT NULL,
  `max_no_of_hours` int(11) DEFAULT NULL,
  `pending` varchar(100) DEFAULT NULL,
  `complete` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`spa_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminspa`
--

INSERT INTO `adminspa` (`spa_ID`, `name`, `status`, `max_allow`, `max_no_of_hours`, `pending`, `complete`) VALUES
(120, 'Ayurvedic Spa', 'Reserved', 30, 6, 'Cleaning kit', 'Oils');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE IF NOT EXISTS `contact_us` (
  `first_name` varchar(20) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `e_mail` varchar(40) NOT NULL DEFAULT '',
  `telephone` int(11) DEFAULT NULL,
  `comment` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`e_mail`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE IF NOT EXISTS `customers` (
  `customer_ID` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(6) DEFAULT NULL,
  `first_Name` varchar(50) DEFAULT NULL,
  `last` varchar(50) DEFAULT NULL,
  `phone` varchar(30) DEFAULT NULL,
  `address_1` varchar(20) DEFAULT NULL,
  `address_2` varchar(20) DEFAULT NULL,
  `city` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `state` varchar(10) DEFAULT NULL,
  `zip_code` int(11) DEFAULT NULL,
  `country` varchar(20) DEFAULT NULL,
  `special_req` text,
  `password` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`customer_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_ID`, `title`, `first_Name`, `last`, `phone`, `address_1`, `address_2`, `city`, `email`, `state`, `zip_code`, `country`, `special_req`, `password`) VALUES
(1, 'Mr.', 'Robert', 'Wiiliam', '0049792275969', '23T', 'Private Drive', 'West Minster', 'robert@gmail.com', 'London', 50, 'England', 'Need a lifeguard', '123abc'),
(2, 'Ms.', 'Hermonie', 'Ronald', '0049796985969', '51G', 'Public Drive', 'Eest Minster', 'hermonie@yahoo.com', 'London', 49, 'England', 'Need a hair drier', '456dcf'),
(3, 'Mrs.', 'Ginny', 'Potter', '0051792275969', '45H', 'Waverly Drive', 'NewYork', 'ginny@gmail.com', 'States', 51, 'America', 'Need a fridge', '789ghi'),
(4, 'Mr.', 'Jhon', 'Legend', '004177892269', '2Y', 'St.Erhard', 'Sursee', 'jhon@gmail.com', 'Luzern', 41, 'Switzerland', 'Need a DVD player', '014jkl'),
(5, 'Ms.', 'Bella', 'Edward', '0091792876269', '89U', 'Ghandi Lane', 'Alvarpeddai', 'bella@gmail.com', 'TamilNadhu', 91, 'India', 'Need a Internet Access', '258mno'),
(6, 'Mrs.', 'Shareefa', 'Moahamed', '0078792876269', '14E', 'Madheena Lane', 'Mecca', 'sharrifa@gmail.com', 'Jidha', 78, 'Arabia', 'Need a iron & iron table', '369pqr'),
(7, 'Mr.', 'Pirashanth', 'Subramaium', '0085792876269', '787', 'Lalu srteet', 'Colalambur', 'pirashanth@yahoo.com', 'Colalamur', 85, 'Malasia', 'Need a Modem', '741stu'),
(8, 'Mr.', 'Sahan', 'DeSilva', '0054792894569', '45', 'Waterfall Lane', 'Sydney', 'sahan@gmail.com', 'Sydney', 54, 'Ausralia', 'Need a Heater', '852vwx'),
(9, 'Mr', 'Admin', 'Admin', '1234567', '12', 'Galle', 'Colombo', 'admin@gmail.com', 'Western', 12500, 'Sri Lanka', NULL, '123abc'),
(10, 'dexedc', '3dededc', 'frvbgtb', '9876543212', 'decedc', 'fcgtv', 'edcedc', 'edr@yahoo.com', 'decedc', 3578, 'dectgv', '', 'hdjyhgfj57675'),
(12, 'Mr.', 'kamal', 'silva', '774201736', 'no 8', 'asgiriya', 'gampaha', 'chamal@gmail.com', 'gam', 3124, 'Sri Lanka', 'none', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `dining`
--

CREATE TABLE IF NOT EXISTS `dining` (
  `no` int(11) NOT NULL DEFAULT '0',
  `food_type` varchar(20) DEFAULT NULL,
  `price_per_type` double DEFAULT NULL,
  PRIMARY KEY (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dining`
--

INSERT INTO `dining` (`no`, `food_type`, `price_per_type`) VALUES
(1, 'Japanese cuisine', 450),
(2, 'Western Cuisine', 725),
(3, 'Chinese Cuisine', 700),
(4, 'Srilankan Cuisine', 650),
(5, 'Indian Local Cuisine', 550),
(6, 'Italian cuisine', 750);

-- --------------------------------------------------------

--
-- Table structure for table `eventreservation`
--

CREATE TABLE IF NOT EXISTS `eventreservation` (
  `event_no` int(11) NOT NULL DEFAULT '0',
  `no_guest` int(11) DEFAULT NULL,
  `fixture` varchar(30) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `session` varchar(20) DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`event_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventreservation`
--

INSERT INTO `eventreservation` (`event_no`, `no_guest`, `fixture`, `dates`, `session`, `hours`, `price`) VALUES
(0, 200, 'Conference', '2014-09-30', 'Morning', 4, 2000000),
(1, 500, 'conference', '2014-09-30', 'morning', 4, 3500),
(2, 400, 'u shape', '2014-09-23', 'eveing', 7, 5000);

-- --------------------------------------------------------

--
-- Table structure for table `hall`
--

CREATE TABLE IF NOT EXISTS `hall` (
  `hall_no` int(11) NOT NULL DEFAULT '0',
  `customer_ID` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `pool` varchar(15) DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`hall_no`),
  KEY `fk_h_56` (`customer_ID`),
  KEY `fk_ha_56` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall`
--

INSERT INTO `hall` (`hall_no`, `customer_ID`, `type`, `name`, `pool`, `no`, `price`) VALUES
(1, 1, 'Wedding', 'Neon Light', 'Reserved', 1, 500000),
(2, 6, 'Wedding', 'Flora', 'Reserved', 2, 600000),
(3, 8, 'Wedding', 'Golden', 'Not Reserved', 3, 700000),
(4, 5, 'Wedding', 'Silver', 'Reserved', 4, 550000),
(5, 1, 'Event', 'Theatre', 'Reserved', 3, 200000),
(6, 2, 'Event', 'Workshop', 'Not Reserved', 2, 25000),
(7, 3, 'Event', 'Confernce', 'Not Reserved', 1, 75000),
(8, 4, 'Wedding', 'Flora', 'Reserved', 2, 600000);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE IF NOT EXISTS `payment` (
  `receipt_ID` int(11) NOT NULL DEFAULT '0',
  `customer_ID` int(11) DEFAULT NULL,
  `total_price` double DEFAULT NULL,
  PRIMARY KEY (`receipt_ID`),
  KEY `fk_r_56` (`customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`receipt_ID`, `customer_ID`, `total_price`) VALUES
(5, 5, 890000),
(101, 1, 630000),
(102, 2, 950000),
(103, 3, 1200000),
(104, 4, 520000),
(106, 6, 4600000),
(107, 7, 890000),
(108, 8, 960000);

-- --------------------------------------------------------

--
-- Table structure for table `room`
--

CREATE TABLE IF NOT EXISTS `room` (
  `room_no` int(11) NOT NULL DEFAULT '0',
  `name` varchar(50) DEFAULT NULL,
  `bed_type` varchar(20) DEFAULT NULL,
  `customer_ID` int(11) DEFAULT NULL,
  `pool` varchar(30) DEFAULT NULL,
  `charge_per_night` double DEFAULT NULL,
  `no` int(11) DEFAULT NULL,
  PRIMARY KEY (`room_no`),
  KEY `fk_u_56` (`customer_ID`),
  KEY `fk_b_56` (`no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `room`
--

INSERT INTO `room` (`room_no`, `name`, `bed_type`, `customer_ID`, `pool`, `charge_per_night`, `no`) VALUES
(1, 'Deluxe Courtyard Room', 'KingSize', 2, 'Reserved', 42750, 2),
(2, 'Honeymoon Suite', 'KingSize', 1, 'Not Reserved', 45550, 1),
(3, 'Royal Suite', 'Large', 6, 'Reserved', 54650, 4),
(4, 'Petite Lux Suite', 'King Zise', 5, 'Not Reserved', 51250, 3),
(5, 'Terrace Suite', 'Medium', 4, 'Not Reserved', 40750, 5),
(6, 'Honeymoon Suite', 'KingSize', 2, 'Reserved', 45550, 6),
(7, 'Deluxe Courtyard Room', 'KingSize', 3, 'Reserved', 42750, 2),
(8, 'Honeymoon Suite', 'KingSize', 7, 'Not Reserved', 45550, 1),
(9, 'Royal Suite', 'Large', 8, 'Reserved', 54650, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roomreservation`
--

CREATE TABLE IF NOT EXISTS `roomreservation` (
  `Selected_Room` varchar(50) NOT NULL DEFAULT '',
  `Customer_ID` int(11) DEFAULT NULL,
  `No_of_Rooms` int(11) DEFAULT NULL,
  `Checkin_Date` date DEFAULT NULL,
  `Checkout_Date` date DEFAULT NULL,
  `Adults` int(11) DEFAULT NULL,
  `Children` int(11) DEFAULT NULL,
  `price` double DEFAULT NULL,
  PRIMARY KEY (`Selected_Room`),
  KEY `fk_I` (`Customer_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `roomreservation`
--

INSERT INTO `roomreservation` (`Selected_Room`, `Customer_ID`, `No_of_Rooms`, `Checkin_Date`, `Checkout_Date`, `Adults`, `Children`, `price`) VALUES
('delux', 3, 1, '2014-09-24', '2014-09-27', 2, 0, 54500);

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE IF NOT EXISTS `service` (
  `service_ID` int(11) NOT NULL DEFAULT '0',
  `room_ID` int(11) DEFAULT NULL,
  `spa` varchar(30) DEFAULT NULL,
  `gym` varchar(30) DEFAULT NULL,
  `pool` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`service_ID`),
  KEY `fk_s_56` (`room_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`service_ID`, `room_ID`, `spa`, `gym`, `pool`) VALUES
(1, 1, 'reserved', 'reserved', 'reserved'),
(2, 2, 'Not reserved', 'reserved', 'Not reserved'),
(3, 3, 'reserved', 'NOT reserved', 'Not reserved'),
(4, 4, 'Not reserved', 'Not reserved', 'reserved'),
(5, 5, 'Not reserved', 'Not reserved', 'Not reserved'),
(6, 9, 'Not reserved', 'reserved', 'Not reserved'),
(7, 8, 'reserved', 'reserved', 'reserved');

-- --------------------------------------------------------

--
-- Table structure for table `weddingreservation`
--

CREATE TABLE IF NOT EXISTS `weddingreservation` (
  `hall_ID` int(11) NOT NULL DEFAULT '0',
  `noOfHalls` int(11) DEFAULT NULL,
  `dates` date DEFAULT NULL,
  `sessions` varchar(20) DEFAULT NULL,
  `hours` int(11) DEFAULT NULL,
  `price` double NOT NULL,
  PRIMARY KEY (`hall_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `weddingreservation`
--

INSERT INTO `weddingreservation` (`hall_ID`, `noOfHalls`, `dates`, `sessions`, `hours`, `price`) VALUES
(1, 1, '2014-09-24', 'Morning', 12, 4500),
(2, 4, '2014-09-27', 'evening', 6, 2000),
(6, 1, '2014-09-03', 'Morning', 4, 18000);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `hall`
--
ALTER TABLE `hall`
  ADD CONSTRAINT `fk_h_56` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_ha_56` FOREIGN KEY (`no`) REFERENCES `dining` (`no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `fk_r_56` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `room`
--
ALTER TABLE `room`
  ADD CONSTRAINT `fk_b_56` FOREIGN KEY (`no`) REFERENCES `dining` (`no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_u_56` FOREIGN KEY (`customer_ID`) REFERENCES `customers` (`customer_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `roomreservation`
--
ALTER TABLE `roomreservation`
  ADD CONSTRAINT `fk_I` FOREIGN KEY (`Customer_ID`) REFERENCES `customers` (`customer_ID`);

--
-- Constraints for table `service`
--
ALTER TABLE `service`
  ADD CONSTRAINT `fk_s_56` FOREIGN KEY (`room_ID`) REFERENCES `room` (`room_no`) ON DELETE SET NULL ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
