-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 08, 2022 at 11:07 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `studmgsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
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
(1, 3, '123', '123', 'true'),
(2, 1, 'devika@gmail.com', 'devika123', 'true'),
(3, 3, 'student1@gmail.com', 'student12', 'true'),
(2, 3, 'student2@gmail.com', 'student2123', 'true'),
(3, 3, '234', 'student2123', 'true'),
(4, 3, '13309', 'abcd', 'true'),
(4, 1, 'ann@gmail.com', '12345678', 'true'),
(5, 1, 'anamika@gmail.com', 'anamika123', 'true'),
(5, 3, '1234', 'b11d9c475665d68b5aa30d2330fd917ef7a199f61c6d0cc348372403152d58ad', 'true'),
(6, 3, '13314', 'b41576e8264fbe6b1676d3457012074bc844828d4ae7f0499a6f91398f6456d4', 'true'),
(6, 3, 'silivia@gmail.com', 'silvia123', 'true'),
(7, 3, 'siliviathomas@gmail.com', 'silvia12', 'true'),
(7, 3, '13315', '6d717fc6da7404e002aa08acae78f6efcd536c388ab3d035ecc396b4432c636d', 'true'),
(8, 1, 'shamjad@gmail.com', 'sham123', 'true'),
(8, 3, '456', 'f34478a0e5185b4b1d99c377a60515a01eea6b4fd0d4abc6db8edad6bb74996b', 'true'),
(9, 3, '13300', '9193283c0d37340f14cfe7d6168268df506c88f1bbebfad3a1b0e1c1ab3a4895', 'true'),
(9, 3, 'varsha@gmail.com', 'varsha123', 'true'),
(10, 1, 'sruthy@gmail.com', 'sruthy123', 'true'),
(11, 3, 'newstud@gmail.com', 'newstud123', 'true'),
(10, 3, '6000', '88d4266fd4e6338d13b845fcf289579d209c897823b9217da3e161936f031589', 'true'),
(11, 3, '7000', 'a75945cc4476edc7532e758c82beabcbf23c5e6bd9a4cf4dfafdaca27c312503', 'true');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_studreg`
--

CREATE TABLE `tbl_studreg` (
  `stud_id` int(50) NOT NULL,
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
  `father_name` varchar(100) NOT NULL,
  `mother_name` varchar(100) NOT NULL,
  `Father_occupation` varchar(100) NOT NULL,
  `mother_occupation` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `gphone` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`stud_id`, `admno`, `First_name`, `Middle_nam`, `Last_name`, `dob`, `gender`, `Address`, `district`, `state`, `religion`, `bloodgroup`, `father_name`, `mother_name`, `Father_occupation`, `mother_occupation`, `image`, `gphone`) VALUES
(1, 123, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(2, 0, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(3, 234, 'devika', 'f', 'j', '2022-10-19', 'F', 'dfgh', 'fghj', 'fgh', 'dfghj', 'o+ve', 'sahadevan', 'sheeja', 'buisiness', 'house wife', 'spicuploads/avatarfigma.jpg', 2147483647),
(4, 13309, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(5, 1234, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(6, 13314, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(7, 13315, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(8, 456, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(9, 13300, 'Varsha', 'jj', 'jose', '2022-10-04', 'F', 'fgh', 'jh', 'tygdu', 'fgh', 'O+ve', 'yghj', 'ghj', 'sdrfgh', 'sdfgh', 'spicuploads/calfigma.webp', 2147483647),
(10, 6000, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0),
(11, 7000, '', '', '', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachreg`
--

CREATE TABLE `tbl_teachreg` (
  `teach_id` int(50) NOT NULL,
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
  `Experience_certificate` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_teachreg`
--

INSERT INTO `tbl_teachreg` (`teach_id`, `staff_id`, `firstname`, `lastname`, `email`, `dob`, `gender`, `address`, `district`, `state`, `religion`, `phno`, `bloodgroup`, `image`, `qualification`, `position`, `Subject`, `Maritial_status`, `Experience`, `Experience_certificate`) VALUES
(1, 0, '', '', 'xcv@xcv.xcv', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(2, 123, 'devika', 's', 'devika@gmail.com', '2004-10-06', 'F', 'abc house', 'alappuzha', 'kerala', 'hindu', '9876543210', 'O+ve', 'picuploads/avatarfigma.jpg', 'bca', 'lect', 'ds', 'no', 5, 'cuploads/dropdownfigma.png'),
(3, 0, '', '', 'student1@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(4, 0, '', '', 'ann@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(5, 0, '', '', 'anamika@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(6, 0, '', '', 'silivia@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(7, 0, '', '', 'siliviathomas@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(8, 0, '', '', 'shamjad@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(9, 0, '', '', 'varsha@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(10, 800, 'sruthy', 'mol', 'sruthy@gmail.com', '2004-09-30', 'F', 'ert', 'gfty', 'tfdyt', 'gfxy', '7689654367', 'A-ve', 'picuploads/leavefigma.jpg', 'fgh', 'tfryt', 'gfdr', 'fdt', 7, 'cuploads/profigma.png'),
(11, 0, '', '', 'newstud@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_usertype`
--

CREATE TABLE `tbl_usertype` (
  `usertype_id` int(50) NOT NULL,
  `usertype_name` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_usertype`
--

INSERT INTO `tbl_usertype` (`usertype_id`, `usertype_name`, `status`) VALUES
(1, 'teacher', 'true'),
(3, 'student', 'true');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `tbl_teachreg`
--
ALTER TABLE `tbl_teachreg`
  ADD PRIMARY KEY (`teach_id`);

--
-- Indexes for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  ADD PRIMARY KEY (`usertype_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_studreg`
--
ALTER TABLE `tbl_studreg`
  MODIFY `stud_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_teachreg`
--
ALTER TABLE `tbl_teachreg`
  MODIFY `teach_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
