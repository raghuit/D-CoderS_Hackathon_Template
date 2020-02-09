-- phpMyAdmin SQL Dump
-- version 4.6.6deb5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 09, 2020 at 03:18 PM
-- Server version: 5.7.29-0ubuntu0.18.04.1
-- PHP Version: 7.2.24-0ubuntu0.18.04.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `news_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `c_name` text NOT NULL,
  `added_by` text NOT NULL,
  `active` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `c_name`, `added_by`, `active`) VALUES
(1, 'Announcement', 'Admin', 1),
(2, 'Department', 'Admin', 1);

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

CREATE TABLE `events` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `author` text NOT NULL,
  `publish_time` text NOT NULL,
  `event_date` text NOT NULL,
  `photo_path` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `events`
--

INSERT INTO `events` (`id`, `title`, `body`, `author`, `publish_time`, `event_date`, `photo_path`, `category_id`) VALUES
(2, 'ECHLEON', 'THE ECE DEPARTMENT IS HERE WITH ITS REMARKABLE FEST ECHLEON.', 'RAGHU', '09:02:2020:02:40:09pm', '2020-02-17', '1581239409.png', 1),
(3, 'FASHION SHOW', 'TIME TO IMPRESS ALL WITH YOUR APPEALING PERSONALITY. \r\nVENUE-AMPHITHEATRE\r\nTIME AND DATE-7 PM ,18TH FEB 2020', 'NILESH', '09:02:2020:02:42:57pm', '2020-02-17', '1581239577.png', 1),
(4, 'SMIT-MARATHON', 'A HEALTHY BODY IS A DIVINE SOUL. \r\nPARTICIPATE!!\r\n10KMS -MARATHON', 'NILESH', '09:02:2020:02:44:47pm', '2020-02-21', '1581239687.png', 1);

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `user` text NOT NULL,
  `pass` text NOT NULL,
  `atype` int(11) NOT NULL,
  `email` text NOT NULL,
  `registered_from` text NOT NULL,
  `name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `user`, `pass`, `atype`, `email`, `registered_from`, `name`) VALUES
(1, 'admin', '83fe374b531acc087ca01b2c65845389', 1, 'rahullraz@gmail.com', 'SuperAdmin', 'Super Admin '),
(2, 'raghu', '425b961f5750da865d28782a7e15258c', 0, 'raghu@raz.com', 'admin', 'Raghu');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `publish_time` text NOT NULL,
  `news_date` text NOT NULL,
  `photo_path` text NOT NULL,
  `author` text NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `body`, `publish_time`, `news_date`, `photo_path`, `author`, `category_id`) VALUES
(2, 'HACKATHON', 'THE DECODER\'S CLUB OF SMIT BRINGS THE PLATFORM TO INNOVATE AND BUILD FOR ALL TECH ENTHUSIASTS.', '09:02:2020:02:29:48pm', '2020-02-10', '1581238789.png', 'RAGHU', 1),
(3, 'WORKSHOP -ETHICAL HACKING', 'A TWO DAY WORKSHOP ON ETHICAL HACKING!\r\nDATE-12 FEB,2020', '09:02:2020:02:32:34pm', '2020-02-09', '1581238955.png', 'NILESH', 1),
(4, 'WORKSHOP -PYTHON', 'A ONE DAY WORKSHOP ON PYTHON PROGRAMMING IS BEING ORGANISED\r\nON 15TH FEB,2020.', '09:02:2020:02:34:30pm', '2020-02-12', '1581239071.png', 'SHASWAT', 1),
(5, 'AUTOCAD COMPETITION', 'PARTICIPATE TO BUILD AND DESIGN -AUTOCAD (CIVIL ENGINEERING)', '09:02:2020:02:36:19pm', '2020-02-14', '1581239180.png', 'RAGHU', 2),
(6, 'ALERT:CORONAVIRUS', 'ALL PEOPLE ARE REQUESTED TO TAKE ADEQUATE PRECAUTIONS.\r\nSOME PEOPLE HAVE BEEN AFFECTED .', '09:02:2020:02:38:22pm', '2020-02-16', '1581239303.png', 'RAGHU', 1);

-- --------------------------------------------------------

--
-- Table structure for table `views`
--

CREATE TABLE `views` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `event_views` int(11) NOT NULL,
  `news_id` int(11) NOT NULL,
  `news_views` int(11) NOT NULL,
  `login_news` int(11) NOT NULL,
  `login_id` int(11) NOT NULL,
  `login_events` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `events`
--
ALTER TABLE `events`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `views`
--
ALTER TABLE `views`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `event_id` (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `events`
--
ALTER TABLE `events`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `views`
--
ALTER TABLE `views`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
