-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 20, 2015 at 12:07 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alpha`
--

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

CREATE TABLE IF NOT EXISTS `answers` (
  `id` int(11) NOT NULL,
  `qid` int(11) NOT NULL,
  `answer` varchar(255) NOT NULL,
  `correct` enum('0','1') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `id` int(10) NOT NULL,
  `cat_name` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `cat_name`) VALUES
(3, 'UTME');

-- --------------------------------------------------------

--
-- Table structure for table `cat_item`
--

CREATE TABLE IF NOT EXISTS `cat_item` (
  `id` int(250) NOT NULL,
  `title` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE IF NOT EXISTS `comments` (
  `id` int(10) NOT NULL,
  `postkey` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `comment` text NOT NULL,
  `time` varchar(20) NOT NULL,
  `commentid` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `postkey`, `username`, `comment`, `time`, `commentid`) VALUES
(1, '', 'chuksCUgB', 'I am the forst comment for this question', '1447954610', 'comUE07vgTkvEeqx'),
(2, '', 'chuksCUgB', 'I am going to be the second comment', '1447954780', 'comtGzUwJTu1qPnn'),
(3, '', 'chuksCUgB', 'I am the third comment and i have a key defined', '1447954829', 'comFFXHwrxMzjFIM'),
(4, '', 'chuksCUgB', 'I am the third comment and i have a key defined', '1447954829', 'comHPCO3dyQcCqAT');

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE IF NOT EXISTS `config` (
  `id` int(250) NOT NULL,
  `name` varchar(255) NOT NULL,
  `option` varchar(255) NOT NULL,
  `editable` int(11) NOT NULL,
  `help` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `examresults`
--

CREATE TABLE IF NOT EXISTS `examresults` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `subjects` varchar(255) NOT NULL,
  `totalscore` varchar(50) NOT NULL,
  `totalquestion` int(50) NOT NULL,
  `percentage` varchar(50) NOT NULL,
  `grade` varchar(50) NOT NULL,
  `timetaken` varchar(50) NOT NULL,
  `examdate` int(50) NOT NULL,
  `totalq` int(11) NOT NULL,
  `canswer` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `examresults`
--

INSERT INTO `examresults` (`id`, `username`, `email`, `cat`, `subjects`, `totalscore`, `totalquestion`, `percentage`, `grade`, `timetaken`, `examdate`, `totalq`, `canswer`) VALUES
(1, 'chuksCUgB', '', 'waec', 'Biology', '2', 3, '66.7', 'D<br/>', '', 1447912335, 0, 0),
(2, 'chuksCUgB', '', 'waec', 'Mathematics', '2', 3, '66.7', 'D', '', 1447912369, 0, 0),
(3, 'chuksCUgB', '', 'waec', 'Mathematics', '1', 0, '33.3%', 'F', '', 1447923161, 3, 0),
(4, '', '', 'waec', 'English Language', '1', 0, '33.3%', 'F', '', 1447923397, 3, 0),
(5, 'chuksCUgB', '', 'waec', 'Chemistry', '4', 5, '90%', 'F', '', 1447923689, 3, 0),
(6, 'chuksCUgB', '', 'waec', 'Mathematics', '1', 3, '33.3%', 'F', '', 1447923821, 0, 0),
(7, 'chuksCUgB', '', 'waec', 'Mathematics', '1', 3, '33.3%', 'F', '', 1447928663, 0, 0),
(8, 'chuksCUgB', '', 'waec', 'Mathematics', '1', 3, '33.3%', 'F', '', 1447928743, 0, 0),
(9, 'chuksCUgB', '', 'waec', 'Maths', '0', 3, '0%', 'F', '', 1448014054, 0, 0),
(10, 'chuksCUgB', '', 'waec', 'Maths', '0', 3, '0%', 'F', '', 1448015567, 0, 0),
(11, 'chuksCUgB', '', 'waec', 'Maths', '0', 3, '0%', 'F', '', 1448016290, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `inbox`
--

CREATE TABLE IF NOT EXISTS `inbox` (
  `id` bigint(255) NOT NULL,
  `msg_subject` varchar(255) NOT NULL,
  `msg_to` varchar(255) NOT NULL,
  `msg_from` varchar(255) NOT NULL,
  `msg_body` text NOT NULL,
  `msg_dt` varchar(255) NOT NULL,
  `msg_status` tinyint(11) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `questions`
--

CREATE TABLE IF NOT EXISTS `questions` (
  `id` int(11) NOT NULL,
  `uniqueid` varchar(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `question` text NOT NULL,
  `username` varchar(50) NOT NULL,
  `time` int(50) NOT NULL,
  `status` int(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `questions`
--

INSERT INTO `questions` (`id`, `uniqueid`, `title`, `question`, `username`, `time`, `status`) VALUES
(1, 'queZZ5QkGC', 'this is the title', '', 'chuksCUgB', 1447944612, 1),
(2, 'queBmqlH6R', 'this is the title', '', 'chuksCUgB', 1447944648, 1),
(3, 'quetH6jax0', 'this is the title', '', 'chuksCUgB', 1447944674, 1),
(4, 'qued8IFn19', 'I am the first question', '', 'chuksCUgB', 1447944720, 1),
(5, 'queoOuxvHT', 'I am just a test question', '', 'chuksCUgB', 1447944785, 1);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE IF NOT EXISTS `socials` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `content` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

CREATE TABLE IF NOT EXISTS `subjects` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cat` varchar(255) NOT NULL,
  `path` varchar(100) NOT NULL,
  `duration` int(11) NOT NULL,
  `status` int(10) NOT NULL,
  `time` int(50) NOT NULL,
  `answerpath` varchar(50) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`id`, `title`, `cat`, `path`, `duration`, `status`, `time`, `answerpath`) VALUES
(10, 'Mathematics', 'UTME', 'questions/mathematicsutmequestions.txt', 10, 0, 1448014486, 'answers/mathematicsutmeanswers.txt'),
(11, 'English', 'UTME', 'questions/englishutmequestions.txt', 10, 0, 1448015817, 'answers/englishutmeanswers.txt'),
(12, 'Chemistry', 'UTME', 'questions/chemistryutmequestions.txt', 10, 0, 1448015888, 'answers/chemistryutmeanswers.txt'),
(13, 'Physics', 'UTME', 'questions/physicsutmequestions.txt', 10, 0, 1448015904, 'answers/physicsutmeanswers.txt');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `gender` char(2) NOT NULL,
  `tel` varchar(255) NOT NULL,
  `state` varchar(15) NOT NULL,
  `country` varchar(15) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `level` tinyint(4) NOT NULL DEFAULT '1',
  `last_login` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `timeofreg` int(50) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `email`, `firstname`, `lastname`, `gender`, `tel`, `state`, `country`, `avatar`, `level`, `last_login`, `timeofreg`, `status`) VALUES
(3, 'chuksCUgB', 'www', 'zinani@shsi.com', 'zinani', 'chuks', 'ma', '0930993', 'guys', 'bana', 'path to the avatar', 1, '2015-11-18 13:19:20', 1447844517, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_item`
--
ALTER TABLE `cat_item`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `examresults`
--
ALTER TABLE `examresults`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inbox`
--
ALTER TABLE `inbox`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `questions`
--
ALTER TABLE `questions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `subjects`
--
ALTER TABLE `subjects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `cat_item`
--
ALTER TABLE `cat_item`
  MODIFY `id` int(250) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `examresults`
--
ALTER TABLE `examresults`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `inbox`
--
ALTER TABLE `inbox`
  MODIFY `id` bigint(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `questions`
--
ALTER TABLE `questions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `subjects`
--
ALTER TABLE `subjects`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
