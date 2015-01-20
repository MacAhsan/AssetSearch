-- phpMyAdmin SQL Dump
-- version 4.0.10.7
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2015 at 08:59 AM
-- Server version: 5.5.40-MariaDB
-- PHP Version: 5.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aasolbiz_tool`
--

-- --------------------------------------------------------

--
-- Table structure for table `tools`
--

CREATE TABLE IF NOT EXISTS `tools` (
  `id` int(50) NOT NULL AUTO_INCREMENT,
  `tool_no` varchar(255) NOT NULL,
  `job_number` int(50) NOT NULL,
  `run_time` int(50) NOT NULL,
  `run_numb` varchar(255) NOT NULL,
  `component_no` varchar(255) NOT NULL,
  `equip_type` varchar(255) NOT NULL,
  `inspected_by` varchar(255) NOT NULL,
  `date_inspected` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `tools_count`
--

CREATE TABLE IF NOT EXISTS `tools_count` (
  `tool_no` varchar(50) NOT NULL DEFAULT 'tool1',
  `inspected_by` varchar(255) NOT NULL,
  `job_number` int(50) NOT NULL,
  `run_time` int(50) NOT NULL,
  `run_numb` varchar(255) NOT NULL,
  `date_inspected` varchar(255) NOT NULL,
  `comments` varchar(255) NOT NULL,
  `links` varchar(255) NOT NULL,
  UNIQUE KEY `links` (`links`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_table`
--

CREATE TABLE IF NOT EXISTS `user_table` (
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
