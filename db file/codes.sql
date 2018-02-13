-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2016 at 03:46 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `codes`
--

-- --------------------------------------------------------

--
-- Table structure for table `adtable`
--

CREATE TABLE `adtable` (
  `ad_id` int(10) NOT NULL,
  `ad_title` text CHARACTER SET latin1 NOT NULL,
  `category` int(11) NOT NULL,
  `price` int(11) NOT NULL,
  `description` varchar(240) CHARACTER SET latin1 NOT NULL,
  `pics` longtext CHARACTER SET latin1 NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  `contact` bigint(13) NOT NULL,
  `fb` text CHARACTER SET latin1 NOT NULL,
  `ad_entry` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `ad_token` varchar(64) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `adtable`
--

INSERT INTO `adtable` (`ad_id`, `ad_title`, `category`, `price`, `description`, `pics`, `name`, `contact`, `fb`, `ad_entry`, `ad_token`) VALUES
(1, 'books', 1, 3453, 'sdggsfd', '582989aa6c420.png', 'sgfd', 34634653, 'dnbg', '2016-11-14 09:53:46', '582989aa6c403'),
(2, 'hizxuizx', 3, 65656, 'ZXHGhzxgh', '58298a036931d.jpg', 'Anirudh', 2166241421, 'sbgxs', '2016-11-14 09:55:15', '58298a0369301'),
(3, 'Vlc media player', 4, 100, 'this is a good working software', '5829a26ac8a4f.jpg', 'sadhvi', 9956867191, 'www.facebook.com', '2016-11-14 11:39:22', '5829a26ac8a2f'),
(6, 'learn code', 1, 500, 'best book for learning', '5829b42224ce0.jpg', 'Harshul Agarwal', 7237985634, 'www.facebook.com', '2016-11-14 12:54:58', '5829b402151dc'),
(7, 'notes of resonance', 3, 3400, 'Notes by highly expert teacher R.K. kushwaha', '5829bb165a5cc.jpg', 'Tanya Agarwal', 9586749586, 'www.facebook.com', '2016-11-14 13:24:38', '5829bb165a5b5'),
(8, 'coding books', 1, 3453, 'BEst books for coding', '582acf18b2d73.jpg', 'Hukum', 718525867199, 'www.facebook.com', '2016-11-15 09:02:16', '582acf18b2d4d'),
(9, 'bvvb', 1, 65656, 'jffdd', '582acf9509344.jpg', 'sgfd', 9956867191, 'www.facebook.com', '2016-11-15 09:04:21', '582acf95092f2'),
(10, 'photostate', 1, 5454, 'sdf fdf dff', '582acff91b053.jpg', 'Brately', 34634653, 'www.facebook.com', '2016-11-15 09:06:01', '582acff91b034'),
(11, 'hizxuizx sahgd', 1, 1050, 'asdhgdhasgd', '582b007d931d4.jpg', 'Ramkhilawan babu', 9956867191, 'www.facebook.com/ramukaka.10.96', '2016-11-15 12:33:01', '582b007d931bd'),
(12, 'books wffjghgdhg', 3, 7673466, 'hjdhdf jdfsj', '582ea3bb22cf7.png', 'anirudh', 9956867191, 'www.facebook.com', '2016-11-18 06:46:19', '582ea3bb1fc67'),
(13, 'photostate', 2, 5354, 'ysdsdg sshgg', '5837de1af244a.jpg', 'anirudh', 99567191, 'www.facebook.com', '2016-11-25 06:45:46', '5837de1af2437'),
(14, 'photostate', 2, 3563, 'sahgashdg', '5839346bd647d.jpg', 'honey', 3767634, 'www.facebook.com', '2016-11-26 07:06:19', '5839346bc139c');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Books'),
(2, 'Photostates'),
(3, 'Notes'),
(4, 'Softwares');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `name` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(40) COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` int(50) NOT NULL,
  `password` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`name`, `email`, `contact`, `password`) VALUES
('Anirudh Gangwar gang', 'anirudhgangwar444@gm', 0, 'd41d8cd98f00b204e980'),
('Anirudh Gangwar gang', 'anirudhgangwar444@gm', 0, 'd41d8cd98f00b204e980'),
('Anirudh Gangwar gang', 'anirudhgangwar444@gm', 0, 'd41d8cd98f00b204e980'),
('Anirudh gangwar', 'anirudhgangwar444@gm', 0, 'd41d8cd98f00b204e980'),
('Anirudh gangwar', 'anirudhgangwar444@gm', 0, 'd41d8cd98f00b204e980'),
('Anirudh', 'anirudh@gmail.com', 2147483647, 'd41d8cd98f00b204e980'),
('tanya', 'tanya@gmail.com', 2147483647, ''),
('tn', 'abc', 2147483647, 'd41d8cd98f00b204e980'),
('a', 'a', 123, ''),
('t', 't', 123456, ''),
('s', 's', 456, 'd41d8cd98f00b204e980'),
('r', 'r', 4321, ''),
('m', 'm', 90, ''),
('o', 'o', 987, 'o'),
('Anirudh Gangwar gang', 'anirudhgangwar444@gm', 2147483647, '1234'),
('ani', 'anirudh@gmail.com', 2147483647, '123'),
('sadhvi', 'sadhvi@gmail.com', 2147483647, '123'),
('anirudh gangwar', '9956867191', 0, '123'),
('anirudh gangwar', 'anirudhgangwar@gmail', 2147483647, '123'),
('harshul', 'aggarwal@gmail.com', 95412368, '123'),
('anirudh', 'anidfshhfdhghfghgsdfh', 887476764, '1234'),
('anirudh', 'anirudhgangwar4', 2147483647, '12345'),
('Anirudh Gangwar gang', 'anirudhgangwar444@gmail.com', 4553654, '1234');

-- --------------------------------------------------------

--
-- Table structure for table `suggest`
--

CREATE TABLE `suggest` (
  `id` int(10) NOT NULL,
  `sug_name` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `sug_desc` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `contact` bigint(13) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `suggest`
--

INSERT INTO `suggest` (`id`, `sug_name`, `sug_desc`, `contact`) VALUES
(2, 'Anirudh gangwar', 'Hii, please update your site further', 0),
(5, 'Anirudh gangwar', 'hii plss care abt your ad section', 9956867191),
(12, 'Anirudh gangwar', 'ggffgfgf', 0),
(13, 'Anirudh gangwar', 'sdhdhGGHD', 0),
(14, 'Anirudh ', 'hii this is anirudh. i will see u', 0),
(15, 'arihant jain', 'upgrad ur site!!', 995686191),
(16, 'bnn ', 'c x x', 0),
(17, 'harshul', 'chbhcz upgrade ur site', 995686191),
(18, 'Anirudh gangwar', 'upgrade your site', 995686191);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adtable`
--
ALTER TABLE `adtable`
  ADD PRIMARY KEY (`ad_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `suggest`
--
ALTER TABLE `suggest`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adtable`
--
ALTER TABLE `adtable`
  MODIFY `ad_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `suggest`
--
ALTER TABLE `suggest`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
