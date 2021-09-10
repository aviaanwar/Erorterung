-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 10, 2021 at 07:38 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `catagories`
--

CREATE TABLE `catagories` (
  `cat_id` int(5) NOT NULL,
  `cat_name` varchar(255) NOT NULL,
  `cat_description` varchar(2555) NOT NULL,
  `create_date` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `catagories`
--

INSERT INTO `catagories` (`cat_id`, `cat_name`, `cat_description`, `create_date`) VALUES
(1, 'Entertainment', ' Performances of plays and films, and activities such as reading and watching television, that give people pleasure', '0000-00-00'),
(2, 'Sports', ' Athletic activity, skill or physical process like racing, baseball, tennis, golf, bowling, wrestling, boxing, hunting, fishing, etc.', '0000-00-00'),
(3, 'politics', 'Actions or activities concerned with achieving and using power in a country or society', '0000-00-00'),
(4, 'Music', 'songs', '0000-00-00'),
(5, 'Celebrities', 'sth', '0000-00-00');

-- --------------------------------------------------------

--
-- Table structure for table `cmt`
--

CREATE TABLE `cmt` (
  `comment_id` int(5) NOT NULL,
  `comment_body` text NOT NULL,
  `post_id` int(5) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cmt`
--

INSERT INTO `cmt` (`comment_id`, `comment_body`, `post_id`, `comment_by`, `comment_time`) VALUES
(1, 'test comment', 1, 'avia', '2021-09-10 14:40:13'),
(2, 'comment', 1, 'avia', '2021-09-10 14:57:21'),
(3, 'super computer', 34, 'avia', '2021-09-10 15:07:18'),
(4, 'that sounds great', 3, 'Avia Anwar', '2021-09-10 18:21:43'),
(5, 'thats sad!', 4, 'Avia Anwar', '2021-09-10 18:23:40'),
(6, 'that made me upset', 5, 'Avia Anwar', '2021-09-10 18:24:53'),
(7, 'comment 1', 39, 'avia', '2021-09-10 20:35:30');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE `comment` (
  `comment_id` int(5) DEFAULT NULL,
  `comment_body` text NOT NULL,
  `post_id` int(5) NOT NULL,
  `comment_by` varchar(255) NOT NULL,
  `comment_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`comment_id`, `comment_body`, `post_id`, `comment_by`, `comment_time`) VALUES
(1, 'comment1', 1, 'avia', '2021-09-08 02:12:02'),
(NULL, 'hiiiii', 7, 'avi@gmail.com', '2021-09-08 02:22:41'),
(NULL, 'hello', 7, 'avi@gmail.com', '2021-09-08 02:24:21'),
(NULL, 'ki?', 10, 'avia', '2021-09-08 02:26:28'),
(NULL, 'hello', 11, 'avia', '2021-09-08 02:30:16'),
(NULL, 'gehh', 11, 'avia', '2021-09-08 02:31:35'),
(NULL, 'gehh', 11, 'avia', '2021-09-08 02:32:32'),
(NULL, 'gehh', 11, 'avia', '2021-09-08 02:33:38'),
(NULL, 'fafa', 11, 'avia', '2021-09-08 02:33:57'),
(NULL, 'fafa', 11, 'avia', '2021-09-08 02:34:46'),
(NULL, 'gsgsgwg', 11, 'avia', '2021-09-08 02:34:52'),
(NULL, 'heey', 11, 'avia', '2021-09-08 02:36:03'),
(NULL, 'heey', 11, 'avia', '2021-09-08 02:36:34'),
(NULL, 'afafaf', 11, 'avia', '2021-09-08 02:37:42'),
(NULL, 'wegwg', 12, 'avi@gmail.com', '2021-09-08 02:42:55'),
(NULL, 'hi', 13, 'avia', '2021-09-08 02:44:37'),
(NULL, 'hi', 16, 'avia', '2021-09-08 03:54:02'),
(NULL, 'gghghgh', 17, 'avia', '2021-09-08 03:55:58'),
(NULL, 'bye', 19, 'avia', '2021-09-08 20:57:49'),
(NULL, 'hehe', 1, 'avia', '2021-09-09 17:51:09'),
(NULL, 'ami mach diye vat khai', 28, 'Nishan', '2021-09-10 01:59:14');

-- --------------------------------------------------------

--
-- Table structure for table `info`
--

CREATE TABLE `info` (
  `mail` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `sex` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `info`
--

INSERT INTO `info` (`mail`, `name`, `pass`, `sex`, `type`) VALUES
('ani@gmail.com', 'ani', '202cb962ac59075b964b07152d234b70', 'male', 'admin'),
('Anu@gmail.com', 'anu', '202cb962ac59075b964b07152d234b70', 'female', 'user'),
('avi@gmail.com', 'avia', '202cb962ac59075b964b07152d234b70', 'female', 'admin'),
('avvi@gmail.com', 'avia', '202cb962ac59075b964b07152d234b70', 'female', 'user'),
('nishan@gmail.com', 'Nishan', '202cb962ac59075b964b07152d234b70', 'male', 'user'),
('ria@gmail.com', 'Ria', '202cb962ac59075b964b07152d234b70', 'female', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `post_id` int(5) NOT NULL,
  `post_titile` varchar(255) NOT NULL,
  `post_desc` text NOT NULL,
  `post_cat_id` int(5) NOT NULL,
  `post_user_id` varchar(255) NOT NULL,
  `create_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`post_id`, `post_titile`, `post_desc`, `post_cat_id`, `post_user_id`, `create_time`) VALUES
(1, 'zero', 'Bangladeshi film in Cannes', 1, 'avi@gmail.com', '2021-09-07 23:53:09'),
(2, 'zero', 'T20 WC team selection', 2, 'avi@gmail.com', '2021-09-07 23:54:01'),
(3, 'zero', 'GM Quader wants to crackdown on illegal arms', 3, 'avi@gmail.com', '2021-09-07 23:54:53'),
(4, 'zero', 'Four more k-pop idols tests positive', 4, 'avi@gmail.com', '2021-09-07 23:55:55'),
(5, 'zero', 'Big Boss 13 winner sidhart sukhla died', 5, 'avi@gmail.com', '2021-09-07 23:56:57'),
(7, 'zero', 'Robindronath ekhne khete asenni went popular', 1, 'avi@gmail.com', '2021-09-08 00:01:49'),
(10, 'zero', 'huu', 1, 'avia', '2021-09-08 02:26:18'),
(11, 'zero', 'anika', 2, 'avia', '2021-09-08 02:29:50'),
(22, 'zero', 'A master stroke’: MS Dhoni’s return big talking point after India announces T20 WC squad', 2, 'avi@gmail.com', '2021-09-08 23:25:05'),
(23, 'zero', 'musib Music Playlist on Gaana.com. Listen to musib and download musib songs on Gaana.com.', 4, 'avi@gmail.com', '2021-09-08 23:58:40'),
(24, 'zero', 'music latest', 4, 'Anu@gmail.com', '2021-09-08 23:59:36'),
(25, 'zero', 'test entertainment', 1, 'Anu@gmail.com', '2021-09-09 00:07:48'),
(27, 'zero', 'post2', 2, 'Anu@gmail.com', '2021-09-09 01:07:35'),
(30, 'zero', 'ggagag', 1, 'avi@gmail.com', '2021-09-10 14:59:55'),
(31, 'zero', 'Warner Bros has unveiled the long-awaited full', 1, 'avi@gmail.com', '2021-09-10 15:00:14'),
(32, '', 'agaagdggaggagag', 1, 'avi@gmail.com', '2021-09-10 15:03:20'),
(33, '', 'agaagdggaggagag', 1, 'avi@gmail.com', '2021-09-10 15:05:44'),
(34, 'zero', 'computer', 1, 'avi@gmail.com', '2021-09-10 15:07:05'),
(35, 'zero', 'Zendaya reveals why she will not be attending the 2021 Met Gala', 5, 'avi@gmail.com', '2021-09-10 15:08:45'),
(36, 'zero', 'post 2', 2, 'othoi@gmail.com', '2021-09-10 18:25:59'),
(37, 'zero', 'did you got notification?', 2, 'Anu@gmail.com', '2021-09-10 18:28:36'),
(38, 'zero', 'got this too?', 2, 'avi@gmail.com', '2021-09-10 18:33:46'),
(39, 'zero', 'entertainment', 1, 'avi@gmail.com', '2021-09-10 20:35:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `catagories`
--
ALTER TABLE `catagories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `cmt`
--
ALTER TABLE `cmt`
  ADD PRIMARY KEY (`comment_id`);

--
-- Indexes for table `info`
--
ALTER TABLE `info`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`post_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cmt`
--
ALTER TABLE `cmt`
  MODIFY `comment_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `post_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
