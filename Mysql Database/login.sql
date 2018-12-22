-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2018 at 11:19 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `login`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `details` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `details`) VALUES
(1, 'admin', 'adminpass', 'detail'),
(2, 'admin1', 'adminpass1', 'detail1'),
(3, 'admin2', 'adminpass2', 'detail2'),
(4, 'admin3', 'adminpass3', 'detail3');

-- --------------------------------------------------------

--
-- Table structure for table `competition`
--

CREATE TABLE `competition` (
  `id` int(11) NOT NULL,
  `name` int(11) NOT NULL,
  `des` int(11) NOT NULL,
  `img` int(11) NOT NULL,
  `pdf` int(11) NOT NULL,
  `video` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `msg` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(355) NOT NULL,
  `img` varchar(355) NOT NULL,
  `pdf` varchar(355) NOT NULL,
  `video` varchar(355) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `name`, `des`, `img`, `pdf`, `video`) VALUES
(7, 'Bridge it', '', 'resourse/event/img/', 'resourse/event/pdf/', 'resourse/event/video/'),
(8, 'Bridge it', 'wdacwe', 'resourse/event/img/Pass-the-hash attacks_ Tools and Mitigation.pdf', 'resourse/event/pdf/Pass-the-hash attacks_ Tools and Mitigation.pdf', 'resourse/event/video/Pass-the-hash attacks_ Tools and Mitigation.pdf'),
(9, 'Bridge it', 'Xerrrrrrrrrrrrrrrrrrrrrrrrrrrrr', 'resourse/event/img/bridgeit.jpg', 'resourse/event/pdf/bridgeit.jpg', 'resourse/event/video/bridgeit.jpg'),
(10, 'Bridge it', 'evevbqvbjq', 'resourse/event/img/FTP Exploits By Ankit Fadia.pdf', 'resourse/event/pdf/FTP Exploits By Ankit Fadia.pdf', 'resourse/event/video/FTP Exploits By Ankit Fadia.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `des` varchar(500) NOT NULL,
  `img` varchar(255) NOT NULL,
  `pdf` varchar(255) NOT NULL,
  `video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id`, `name`, `des`, `img`, `pdf`, `video`) VALUES
(66, 'RANKIN PUMPKIN', 'sfdw aaaaaaaaaaaaaaaaaaa', 'resourse/project/img/braille.jpg', 'resourse/project/pdf/FTP Exploits By Ankit Fadia.pdf', 'resourse/project/video/braille.jpg'),
(67, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(68, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(69, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(70, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(71, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(72, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'resourse/project/video/'),
(73, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'resourse/project/video/'),
(74, 'RANKIN PUMPKIN', 'Insert ProjectInsert Project', 'resourse/project/img/braille.jpg', 'resourse/project/pdf/braille.jpg', 'resourse/project/video/braille.jpg'),
(75, 'RANKIN PUMPKIN', 'Insert ProjectInsert ProjectInsert ProjectInsert ProjectInsert ProjectInsert ProjectInsert ProjectInsert Project', 'resourse/project/img/braille.jpg', 'resourse/project/pdf/FTP Exploits By Ankit Fadia.pdf', 'resourse/project/video/braille.jpg'),
(76, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'resourse/project/video/'),
(77, 'ROVER', 'https://www.youtube.com/embed/Xe8Lxy9PKhk', 'resourse/project/img/braille.jpg', 'resourse/project/pdf/FTP Exploits By Ankit Fadia.pdf', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(78, '', 'https://www.youtube.com/embed/Xe8Lxy9PKhk', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk'),
(79, '', '', 'resourse/project/img/', 'resourse/project/pdf/', 'https://www.youtube.com/embed/Xe8Lxy9PKhk');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `branch` varchar(50) NOT NULL,
  `img` varchar(255) NOT NULL,
  `linkf` varchar(100) NOT NULL,
  `linke` varchar(100) NOT NULL,
  `linkt` varchar(100) NOT NULL,
  `linkl` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `branch`, `img`, `linkf`, `linke`, `linkt`, `linkl`) VALUES
(14, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'window.location.assign(\"team_insert_form.php\");', 'window.location.assign(\"team_insert_form.php\");', 'window.location.assign(\"team_insert_form.php\");', 'window.location.assign(\"team_insert_form.php\");'),
(15, 'Vijay 1', 'mechanical', 'resourse/team/img/Hero.jpg', 'window.location.assign(\"team_insert_form.php\");', 'window.location.assign(\"team_insert_form.php\");', 'window.location.assign(\"team_insert_form.php\");', 'window.location.assign(\"team_insert_form.php\");'),
(16, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(17, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(18, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(19, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(20, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(21, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(22, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(23, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(24, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(25, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(26, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(27, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(28, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(29, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(30, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(31, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(32, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(33, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(34, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(35, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(36, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(37, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(38, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(39, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(40, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(41, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(42, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com'),
(43, 'Vijay', 'mechanical', 'resourse/team/img/Hero.jpg', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com', 'www.facebook.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
