-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2021 at 02:45 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mogolo`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `name` varchar(200) NOT NULL,
  `checka` varchar(400) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `stream` varchar(20) NOT NULL,
  `pasword` varchar(200) NOT NULL,
  `dateon` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`name`, `checka`, `surname`, `stream`, `pasword`, `dateon`) VALUES
('Ayanda', 'Ayanda.Molopo', 'Molopo', 'Science', '', ''),
('Tecia', 'Tecia.Nyoni', 'Nyoni', 'Science', '', ''),
('Sidwell', 'Sidwell.Riba', 'Riba', 'Science', '', ''),
('Lelo', 'Lelo.Molopo', 'Molopo', 'Science', '', ''),
('Lerato', 'Lerato.Mohlala', 'Mohlala', 'Science', '', ''),
('Khomotso', 'Khomotso.Molopo', 'Molopo', 'Science', '', ''),
('Merriam', 'Merriam.Moloto', 'Moloto', 'Science', '', ''),
('Emprey', 'Emprey.Molopo', 'Molopo', 'Science', '', ''),
('Mogau', 'Mogau.Moropa', 'Moropa', 'Science', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `fb_accounts`
--

CREATE TABLE `fb_accounts` (
  `username` varchar(200) NOT NULL,
  `pasword` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fb_accounts`
--

INSERT INTO `fb_accounts` (`username`, `pasword`) VALUES
('0728108533', 'bbbbbb'),
('0728108533', 'bertA66'),
('0728108533', 'testing'),
('0728108533', 'lasttest'),
('0728108533', 'last test'),
('0728108533', 'testnow'),
('014965463', 'efee'),
('026545589', 'efwwerggw'),
('0782154565', 'nownow'),
('0222222222222', 'mkmmmmmmmmmmm'),
('hhjkjjjjj', 'hhhhjhjhjhj');

-- --------------------------------------------------------

--
-- Table structure for table `likes`
--

CREATE TABLE `likes` (
  `like1` varchar(3) NOT NULL,
  `id` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `likes`
--

INSERT INTO `likes` (`like1`, `id`) VALUES
('1', 1),
('1', 2),
('1', 3);

-- --------------------------------------------------------

--
-- Table structure for table `post_comments`
--

CREATE TABLE `post_comments` (
  `heading` varchar(2000) NOT NULL,
  `message1` text NOT NULL,
  `likes` varchar(500) NOT NULL,
  `id` int(10) UNSIGNED NOT NULL,
  `dateT` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_comments`
--

INSERT INTO `post_comments` (`heading`, `message1`, `likes`, `id`, `dateT`) VALUES
('School meeting', 'You are all requested', '4', 15, 'Wednesday 10th of November 2021 06:54 PM');

-- --------------------------------------------------------

--
-- Table structure for table `sgbmembers`
--

CREATE TABLE `sgbmembers` (
  `name` varchar(200) NOT NULL,
  `surname` varchar(200) NOT NULL,
  `title` varchar(50) NOT NULL,
  `dateon` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `weball`
--

CREATE TABLE `weball` (
  `email1` varchar(200) NOT NULL,
  `message1` varchar(300) NOT NULL,
  `id` int(6) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weball`
--

INSERT INTO `weball` (`email1`, `message1`, `id`) VALUES
('belmiromohlala34@gmail.com', 'Hello is fine      ', 11),
('belmiromohlala34@gmail.com', 'Hello there      ', 20),
('belmiromohlala34@gmail.com', '    Hi you  ', 21),
('belmiromohlala34@gmail.com', '   I\'m here\r\n   ', 23),
('belmiromohlala@gmail.com', 'bel      ', 26),
('belmiromohlala34@gmail.com', ' Hello its working     ', 27),
('belmiromohlala34@gmail.com', 'Hello      ', 34),
('belmiromohlala34@gmail.com', ' Hell     ', 40),
('belmiromohlala12@gmail.com', '  Hell the Sam     ', 41),
('belmiromohlala@gmail.com', '   Hell The Time   ', 42),
('belmiromohlala@gmail.com', '      hi thwew', 43),
('belmiromohlala34@gmail.com', '      it\'s Belmiro           again', 44),
('belmiromohlala34@gmail.com', 'behjhX      ', 46),
('belmiromohlala34@gmail.com', '      gjhjajvnh', 48),
('belmiromohlala@gmail.com', '      hkausdfkasdgfuy', 50),
('belmiromohlala@gmail.com', '      Hi there', 56);

-- --------------------------------------------------------

--
-- Table structure for table `weball1`
--

CREATE TABLE `weball1` (
  `id_user` varchar(100) NOT NULL,
  `item_number` varchar(200) NOT NULL,
  `date1` varchar(100) NOT NULL,
  `item_price` float(100,2) DEFAULT NULL,
  `item_n` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weball1`
--

INSERT INTO `weball1` (`id_user`, `item_number`, `date1`, `item_price`, `item_n`) VALUES
('Belmiro', '1004', 'Tuesday 27th of July 2021 04:54 PM', 349.99, 'Women dress'),
('::1', '0004', 'Wednesday 28th of July 2021 08:08 AM', 339.99, 'T-shirt'),
('Alex', '0002', 'Friday 13th of August 2021 02:51 PM', 450.00, 'Trouser'),
('Alex', '1004', 'Friday 13th of August 2021 02:52 PM', 349.99, 'Women dress'),
('Belmiro', '0003', 'Tuesday 12th of October 2021 06:12 PM', 229.99, 'Jacket'),
('Belmiro', '1003', 'Tuesday 12th of October 2021 06:13 PM', 499.99, 'Women dress'),
('Bel', '0002', 'Tuesday 14th of December 2021 05:10 PM', 450.00, 'Trouser');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `likes`
--
ALTER TABLE `likes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_comments`
--
ALTER TABLE `post_comments`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `heading` (`heading`) USING HASH;

--
-- Indexes for table `weball`
--
ALTER TABLE `weball`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `message1` (`message1`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `likes`
--
ALTER TABLE `likes`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `post_comments`
--
ALTER TABLE `post_comments`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `weball`
--
ALTER TABLE `weball`
  MODIFY `id` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
