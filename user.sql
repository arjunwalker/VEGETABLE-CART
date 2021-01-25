-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 15, 2021 at 07:26 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `user`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminprice`
--

CREATE TABLE `adminprice` (
  `id` varchar(50) NOT NULL,
  `vegetablename` varchar(50) NOT NULL,
  `price` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminprice`
--

INSERT INTO `adminprice` (`id`, `vegetablename`, `price`) VALUES
('0', 'Artichoke', '23Rs/kg'),
('1', 'Ash-gourd', '30Rs/kg'),
('10', 'cabbage', '37Rs/kg'),
('11', 'capsicum', '49Rs/kg'),
('12', 'carrot', '55Rs/kg'),
('13', 'cauliflower', '35Rs/kg'),
('14', 'celeryroot', '15Rs/kg'),
('15', 'chilli', '17Rs/kg'),
('16', 'cucumber', '38Rs/kg'),
('17', 'drumstick', '69Rs/kg'),
('18', 'garlic', '65Rs/kg'),
('19', 'ginger', '25Rs/kg'),
('2', 'asparagus', '33Rs/kg'),
('20', 'ladyfinger', '42Rs/kg'),
('21', 'mushroom', '36Rs/kg'),
('22', 'onion', '65Rs/kg'),
('23', 'peas', '60Rs/kg'),
('24', 'potato', '25Rs/kg'),
('25', 'pumpkin', '33Rs/kg'),
('26', 'radish', '52Rs/kg'),
('27', 'ratalu', '41Rs/kg'),
('28', 'redcabbage', '39Rs/kg'),
('29', 'snakegourd', '49Rs/kg'),
('3', 'beans', '25Rs/kg'),
('30', 'sweetpotato', '15Rs/kg'),
('31', 'tomato', '30Rs/kg'),
('32', 'turnip', '66Rs/kg'),
('33', 'yams', '52Rs/kg'),
('4', 'beetroot', '22Rs/kg'),
('5', 'bittergourd', '20Rs/kg'),
('6', 'bottlegourd', '33Rs/kg'),
('7', 'brinjal', '50Rs/kg'),
('8', 'broccoli', '44Rs/kg'),
('9', 'butternutsquash', '42Rs/kg');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(100) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `firstname`, `lastname`, `username`, `password`) VALUES
(1, '', '', 'abh', 'pass'),
(2, '', '', 'abhi', 'pass'),
(3, '', '', 'elliot', 'fsociety'),
(4, 'abhy', 'aa', 'emma.watson@gmail.com', 'emma'),
(5, 'asd', 'sad', 'dsa', 'dsa'),
(6, 'f', 'f', 'f', 'f'),
(8, 'a', 'a', 'a', 'a'),
(9, '', '', '3', ''),
(10, 'rohit', 'last', 'rohit', '123');

-- --------------------------------------------------------

--
-- Table structure for table `person`
--

CREATE TABLE `person` (
  `first_name` varchar(20) NOT NULL,
  `last_name` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `person`
--

INSERT INTO `person` (`first_name`, `last_name`, `email`) VALUES
('aaa', 'aa', 'kkaa@email.com'),
('aaa', 'aa', 'kkaa@email.com'),
('aaa', 'aa', 'kkaa@email.com'),
('abh', 'tale', 'ab@email.vcomm'),
('', '', ''),
('sdfsd', 'sdf', 'sdf@email.com');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('abhi', 'pass'),
('elliot', 'pass');

--
-- Triggers `user`
--
DELIMITER $$
CREATE TRIGGER `usercreated` AFTER INSERT ON `user` FOR EACH ROW INSERT INTO log VALUES(null,NEW.UserName,'usercreated',NOW())
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprice`
--
ALTER TABLE `adminprice`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `vegetablename` (`vegetablename`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- Indexes for table `person`
--
ALTER TABLE `person`
  ADD KEY `first_name` (`first_name`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD UNIQUE KEY `username` (`username`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
