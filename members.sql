-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 11, 2021 at 01:51 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `send_mail`
--

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE `members` (
  `from_1` varchar(50) NOT NULL,
  `to_1` varchar(50) NOT NULL,
  `message_1` text NOT NULL,
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`from_1`, `to_1`, `message_1`, `id`) VALUES
('doniashwahne@gmail.com', 'areeg@gmail', 'areej', 0),
('doniashwahne@gmail.com', 'noorshanteer@gmail.com', 'hi noor,,our quiz in 13/12 on sunday ', 1),
('doniashwahne@gmail.com', 'shatha_haj@gmail.com', 'Hello doctor, can you download the software slides for us?', 2),
('noorshanteer@gmail.com', 'doniashwahne@gmail.com', 'ok donia,,thanks ', 3),
('doniashwahne@gmail.com', 'Israa_hinnawi@gmail.com', 'hello mis,, when final of micro lab ?', 4),
('doniashwahne@gmail.com', 'shatha_haj@gmail.com', 'hello', 5),
('doniashwahne@gmail.com', 'noorshanteer@gmail.com', 'hi nooor', 6),
('doniashwahne@gmail.com', 'noorshanteer@gmail.com', 'noor can i talk with tou if yoy have time?', 8),
('doniashwahne@gmail.com', 'noorshanteer@gmail.com', 'noor can i talk with tou if yoy have time?', 9);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `members`
--
ALTER TABLE `members`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `members`
--
ALTER TABLE `members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
