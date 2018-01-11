-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2018-01-11 08:37:11
-- 服务器版本： 10.1.29-MariaDB
-- PHP Version: 7.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tmp`
--

-- --------------------------------------------------------

--
-- 表的结构 `login_info`
--

CREATE TABLE `login_info` (
  `user` varchar(32) NOT NULL,
  `name` varchar(32) NOT NULL,
  `id` int(32) NOT NULL,
  `password` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `login_info`
--

INSERT INTO `login_info` (`user`, `name`, `id`, `password`) VALUES
('admin', 'tom', 1, 123),
('teacher', 'belen', 2, 2),
('student', 'donte', 15, 17);

-- --------------------------------------------------------

--
-- 表的结构 `student_score`
--

CREATE TABLE `student_score` (
  `name` varchar(32) NOT NULL,
  `subject` varchar(32) NOT NULL,
  `score` int(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `student_score`
--

INSERT INTO `student_score` (`name`, `subject`, `score`) VALUES
('donte', 'chinese', 90),
('donte', 'math', 80),
('tom', 'math', 59),
('tom', 'chinese', 70);

-- --------------------------------------------------------

--
-- 表的结构 `test_subject`
--

CREATE TABLE `test_subject` (
  `subject` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `test_subject`
--

INSERT INTO `test_subject` (`subject`) VALUES
('math'),
('chinese'),
(''),
('English');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login_info`
--
ALTER TABLE `login_info`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
