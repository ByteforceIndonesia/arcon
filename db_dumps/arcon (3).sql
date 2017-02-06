-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 06, 2017 at 06:21 PM
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
(1, 'about_text', '                                                                                                                        ARCON INDONESIA is a deluxe brand in interior design, contractor, home furnishings, and construction since 2014. We always serve what client wants, not an usual design but the owner''s design that we made it real. It is about knowing and understanding each of our client’s characters, needs and dreams. Increasing client needs make us also continue to develop our business reach maximal.                                                    ', 'assets/images/about_us/motto.jpg'),
(2, 'motto_text', '                                                                                                                        Designing is not just about the final outcome, the process of designing a beauty on its own. Every great design begins with an even better story                                                            ', 'assets/images/about_us/text.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`) VALUES
(2, 'Jonathan', 'jonathan.hosea@me.com', '$2y$10$RU5vIjS2DB6.5IafMYXX5OrbEVdn/Qhdhu3FyYQfexrOVIse0XMpC');

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
(5, 'page_title', 'Arcon Indonesia', NULL),
(6, 'gallery_banner_comercial', 'assets/images/menu2.jpg', NULL),
(7, 'gallery_banner_residence', 'assets/images/menu1.jpg', NULL),
(8, 'offices', 'Head Office & Studio Jl. Letnan Simanjuntak No.839 RT 14 / RW 06, Kelurahan Pahlawan Palembang 30126, Sumatera Selatan - Indonesia', 'Workshop Jl. Letnan Simanjuntak No.839 RT 14 / RW 06, Kelurahan Pahlawan Palembang 30126, Sumatera Selatan - Indonesia'),
(9, 'contact_us', 'Complete the form so we can better understand your needs.\r\nIf you have questions that require immediate attention,\r\nplease visit us or contact our phone number above:', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(11) NOT NULL,
  `project_uuid` varchar(255) NOT NULL,
  `freatured` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `project_uuid`, `freatured`) VALUES
(1, 'asdawdasd', 1),
(11, '58986625abfc1', 1);

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
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` int(11) NOT NULL,
  `project_uuid` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `datas` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `project_uuid`, `description`, `datas`, `name`, `details`, `images`) VALUES
(1, 'asdawdasd', 'asjnd jklads blajkshdbasjhdnbajhsd', 'assets/images/projects/comercial/asdawdasd', 'Apel', 'comercial', 'assets/images/projects/comercial/asdawdasd/freatured'),
(3, '58986625abfc1', 'Hosea', 'assets/images/projects/residential/58986625abfc1', 'Jonathan', 'residential', 'assets/images/projects/residential/58986625abfc1/freatured');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `images` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `name`, `phone`, `email`, `image`, `images`) VALUES
(1, 'Sidharta Setiawan Japar, S.T. ', '(+62) 812 7811 2800', 'Sidhartasj@arcon.com', 'assets/images/team/1.jpg', ''),
(2, 'Bayu Adi, S.T. ', '(+62) 812 2389 7080', 'Bayuadi@arcon.com', 'assets/images/team/2.jpg\n', ''),
(3, 'Trinti Filiani, S.Ars.', '(+62) 812 7178 7788', 'Trinti@arcon.com', 'assets/images/team/3.jpg\n', ''),
(4, 'Leily ', '(+62) 812 712 9839', 'admininterior@arcon.com', 'assets/images/team/4.jpg', ''),
(5, 'Cindy Coleen, S.T.', '(+62) 823 7289 1268', 'cindycoleen@arcon.com', 'assets/images/team/5.jpg', '');

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
(1, 'construction', '<li>Residence</li>\n                <li>Elite Residence</li>\n                <li>Town House</li>', 'assets/images/10.jpg'),
(2, 'interior', '<li>Intrior space Planning</li>\n                <li>Interior Decoration</li>\n                <li>Furniture Detailing</li>', 'assets/images/10.jpg'),
(3, 'renovation', '<li>Residence</li>\n                <li>Elite Residence</li>\n                <li>Town House</li>\n                <li>Shop</li>', 'assets/images/10.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
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
-- Indexes for table `projects`
--
ALTER TABLE `projects`
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
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `parallax`
--
ALTER TABLE `parallax`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
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
