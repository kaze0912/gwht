-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2019-02-14 17:46:32
-- 服务器版本： 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gwht`
--

-- --------------------------------------------------------

--
-- 表的结构 `gwhtno`
--

CREATE TABLE `gwhtno` (
  `no` int(11) NOT NULL,
  `name` varchar(11) NOT NULL,
  `score` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `gwhtno`
--

INSERT INTO `gwhtno` (`no`, `name`, `score`) VALUES
(1, 'admin', 91),
(2, 'bomb', 92),
(3, 'chris', 93),
(4, 'dog', 94),
(5, 'eve', 95),
(6, 'finger', 96),
(7, 'goods', 97),
(8, 'hulk', 98),
(9, 'ice', 99),
(10, 'jean', 100);

-- --------------------------------------------------------

--
-- 表的结构 `gwhts`
--

CREATE TABLE `gwhts` (
  `keyss` varchar(50) NOT NULL,
  `val` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `gwhts`
--

INSERT INTO `gwhts` (`keyss`, `val`) VALUES
('gwht', 'this isn''t flag'),
('flag', 'GWHT{k0tor1_w4_tot3mo_k4wa11_d3su}'),
('0', '0'),
('1', '1'),
('2', '2'),
('3', '3'),
('4', '4'),
('5', '5'),
('6', '6'),
('7', '7'),
('8', '8'),
('9', '9');

-- --------------------------------------------------------

--
-- 表的结构 `gwusers`
--

CREATE TABLE `gwusers` (
  `username` varchar(11) NOT NULL,
  `password` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- 转存表中的数据 `gwusers`
--

INSERT INTO `gwusers` (`username`, `password`) VALUES
('admin', '11c7c083dcf7bc84d656e189b749bacc');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
