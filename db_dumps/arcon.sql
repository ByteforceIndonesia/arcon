-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 26, 2017 at 06:11 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `arcon`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(11) NOT NULL,
  `field` varchar(255) NOT NULL,
  `value` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `field`, `value`, `images`) VALUES
(1, 'about_text', 'ARCON INDONESIA is a deluxe brand in interior design, contractor, home furnishings, and construction since 2014. We always serve what client wants, not an usual design but the owner''s design that we made it real. It is about knowing and understanding each of our client’s characters, needs and dreams. Increasing client needs make us also continue to develop our business reach maximal.', 'assets/images/10.jpg'),
(2, 'motto_text', 'Designing is not just about the final outcome, the process of designing a beauty on its own. Every great design begins with an even better story', 'assets/images/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id` int(20) NOT NULL,
  `config_name` varchar(255) NOT NULL,
  `value_one` varchar(255) DEFAULT NULL,
  `value_two` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id`, `config_name`, `value_one`, `value_two`) VALUES
(1, 'home_slider', 'assets/images/10.jpg', NULL),
(2, 'company_logo', 'assets/images/logo.png', NULL),
(5, 'page_title', 'Arcon Indonesia', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `catagory` varchar(255) NOT NULL,
  `freatured` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `image`, `catagory`, `freatured`) VALUES
(1, 'banner', 'assets/images/10.jpg', 'banner', 0),
(2, 'one', 'assets/images/10.jpg', 'apel', 0);

-- --------------------------------------------------------

--
-- Table structure for table `parallax`
--

CREATE TABLE `parallax` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parallax`
--

INSERT INTO `parallax` (`id`, `name`, `link`) VALUES
(1, 'parallax_one', 'assets/images/10.jpg'),
(2, 'parallax_two', 'assets/images/10.jpg'),
(3, 'parallax_three', 'assets/images/10.jpg\r\n'),
(4, 'parallax_four', 'assets/images/10.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `phone`, `email`, `image`) VALUES
(1, 'Sidharta Setiawan Japar, S.T. ', '(+62) 812 7811 2800', 'Sidhartasj@arcon.com', 'assets/images/team/1.png'),
(2, 'Bayu Adi, S.T. ', '(+62) 812 2389 7080', 'Bayuadi@arcon.com', 'assets/images/team/1.png\r\n'),
(3, 'Trinti Filiani, S.Ars.', '(+62) 812 7178 7788', 'Trinti@arcon.com', 'assets/images/team/1.png\r\n'),
(4, 'Leily ', '(+62) 812 712 9839', 'admininterior@arcon.com\r\n\r\nCindy Coleen, S.T.\r\n(+62) 823 7289 1268\r\n', 'assets/images/team/1.png'),
(5, 'Cindy Coleen, S.T.', '(+62) 823 7289 1268', 'cindycoleen@arcon.com', 'assets/images/team/1.png');

-- --------------------------------------------------------

--
-- Table structure for table `whatwedo`
--

CREATE TABLE `whatwedo` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `text` text NOT NULL,
  `link` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `whatwedo`
--

INSERT INTO `whatwedo` (`id`, `name`, `text`, `link`) VALUES
(1, 'construction', '-', 'assets/images/10.jpg'),
(2, 'interior', '-', 'assets/images/10.jpg'),
(3, 'renovation', '-', 'assets/images/10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parallax`
--
ALTER TABLE `parallax`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `whatwedo`
--
ALTER TABLE `whatwedo`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `parallax`
--
ALTER TABLE `parallax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `whatwedo`
--
ALTER TABLE `whatwedo`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
