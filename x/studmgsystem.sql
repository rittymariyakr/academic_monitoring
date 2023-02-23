-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 29, 2022 at 11:04 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `studmgsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE IF NOT EXISTS `tbl_login` (
  `login_id` int(50) NOT NULL,
  `usertype_id` int(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `usertype_id`, `username`, `password`, `status`) VALUES
(1, 1, 'xcv@xcv.xcv', 'xcvxcv', 'true'),
(0, 0, 'admin@gmail.com', 'admin', 'true'),
(1, 3, '123', '234', 'true'),
(2, 3, '1234', 'asd', 'true'),
(3, 3, '121', 'cd580841fcb3dfc417397df2605365910396ecff91b197a5d34b20afd2acfc3e', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studreg`
--

CREATE TABLE IF NOT EXISTS `tbl_studreg` (
  `stud_id` int(50) NOT NULL AUTO_INCREMENT,
  `admno` int(50) NOT NULL,
  `First_name` varchar(100) NOT NULL,
  `Middle_nam` varchar(100) NOT NULL,
  `Last_name` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(100) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `district` varchar(100) NOT NULL,
  `state` varchar(100) NOT NULL,
  `religion` varchar(100) NOT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `father's_name` varchar(100) NOT NULL,
  `mother's_name` varchar(100) NOT NULL,
  `Father's_occupation` varchar(100) NOT NULL,
  `mother's_occupation` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  PRIMARY KEY (`stud_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`stud_id`, `admno`, `First_name`, `Middle_nam`, `Last_name`, `dob`, `gender`, `Address`, `district`, `state`, `religion`, `bloodgroup`, `father's_name`, `mother's_name`, `Father's_occupation`, `mother's_occupation`, `image`) VALUES
(1, 123, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(2, 1234, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', ''),
(3, 121, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachreg`
--

CREATE TABLE IF NOT EXISTS `tbl_teachreg` (
  `teach_id` int(50) NOT NULL AUTO_INCREMENT,
  `staff_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `district` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `phno` varchar(20) NOT NULL,
  `bloodgroup` varchar(20) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `qualification` varchar(100) NOT NULL,
  `position` varchar(100) NOT NULL,
  `Subject` varchar(100) NOT NULL,
  `Maritial_status` varchar(100) NOT NULL,
  `Experience` int(11) NOT NULL,
  `Experience_certificate` varchar(1000) NOT NULL,
  PRIMARY KEY (`teach_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tbl_teachreg`
--

INSERT INTO `tbl_teachreg` (`teach_id`, `staff_id`, `firstname`, `lastname`, `email`, `dob`, `gender`, `address`, `district`, `state`, `religion`, `phno`, `bloodgroup`, `image`, `qualification`, `position`, `Subject`, `Maritial_status`, `Experience`, `Experience_certificate`) VALUES
(1, 0, '', '', 'xcv@xcv.xcv', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE IF NOT EXISTS `tbl_usertype` (
  `usertype_id` int(50) NOT NULL AUTO_INCREMENT,
  `usertype_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  PRIMARY KEY (`usertype_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`usertype_id`, `usertype_name`, `status`) VALUES
(1, 'teacher', 'true'),
(3, 'student', 'true');
