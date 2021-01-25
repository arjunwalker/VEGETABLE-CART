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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminprice`
--
ALTER TABLE `adminprice`
  ADD UNIQUE KEY `id` (`id`),
  ADD UNIQUE KEY `vegetablename` (`vegetablename`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
