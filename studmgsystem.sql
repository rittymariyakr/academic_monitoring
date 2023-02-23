-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2022 at 03:45 PM
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
  `usertype` varchar(50) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(500) NOT NULL,
  `status` varchar(100) NOT NULL,
  `reset_code` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`login_id`, `usertype`, `username`, `password`, `status`, `reset_code`) VALUES
(1, 'teacher', 'xcv@xcv.xcv', 'xcvxcvxcv', 'true', ''),
(0, 'admin', 'admin@gmail.com', '21232f297a57a5a743894a0e4a801fc3', 'true', ''),
(1, 'student', '123', '123', 'true', ''),
(2, 'teacher', 'asd@asd.asd', 'asdasd', 'true', ''),
(3, 'teacher', 'qwe@qwe.qwe', 'qweqweqwe', 'true', ''),
(2, 'teacher', 'asd@asd.asd', 'asdasd', 'true', ''),
(3, 'teacher', 'ritty@gmail.com', 'ritty@1234', 'true', 'af2e82b053'),
(17, 'student', '9249', '599f15df2eee805d0e9ee6445bc2da91', 'true', ''),
(18, 'student', '7558', '', 'true', ''),
(19, 'student', '222', 'riyamol123', 'true', ''),
(6, 'teacher', 'vismaya@gmail.com', 'vismaya123', 'true', ''),
(20, 'student', '223', 'new2000', 'true', ''),
(21, 'student', '800', '98a562b5b3161c94399ded8b136e3262', 'true', ''),
(7, 'teacher', 'sanioluke00@gmail.com', '9ad19232b29726a771a5a92ace45cce4', 'true', ''),
(8, 'teacher', 'rittymariya@gmail.com', '9608c54a9dd4ae88ce4f301af226b3af', 'true', ''),
(9, 'teacher', 'vijay@gmail.com', '1048a5d40968bdf9c05193f13309197d', 'true', ''),
(22, 'student', '13243', '3db61eca39c3a99e344f9b043fecd554', 'true', ''),
(10, 'teacher', 'teacher@gmail.com', 'a426dcf72ba25d046591f81a5495eab7', 'true', ''),
(11, 'teacher', 'athul@gmail.com', '6eb4605be13e4e718a49a69919a7ee84', 'true', ''),
(12, 'teacher', 'soorya@gmail.com', 'f5d5dc3782f224229f41d28f94a643b8', 'true', ''),
(13, 'teacher', 'rittymariyakr@gmail.com', '5a74f4ffb1531f53c6120bbac26295b5', 'true', 'f45dda3b03'),
(14, 'teacher', 'shamjad.nazar.20@gmail.com', '8e43c1a10c1f545a274776024279e6cf', 'true', 'd560400b0b'),
(15, 'teacher', 'athulvinayakumar123@gmail.com', 'a3bbdbaaa51a4c510db41200d1caa5af', 'true', '156a031513'),
(16, 'teacher', 'amil@gmail.com', '8325a2a4d26074e04199f868049e87dd', 'true', ''),
(17, 'teacher', 'hima@gmail.com', 'cfdb1bfeed8a8b1f54f07e2abc417e0d', 'true', ''),
(18, 'teacher', 'athulvinayakumar2023b@mca.ajce.in', 'fe2cf38cc4e0985bb3fb4aa3977b58ab', 'true', ''),
(19, 'teacher', 'amal@gmail.com', '505439c2c93b1f7c35f77386d25365ab', 'true', ''),
(20, 'teacher', 'athulvinayakumar123@gmail.com', 'fe2cf38cc4e0985bb3fb4aa3977b58ab', 'true', ''),
(23, 'student', '401', '5639888e680ddfbf04715595cbd24783', 'true', '');

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
  `gphone` varchar(15) DEFAULT NULL,
  `bloodgroup` varchar(100) NOT NULL,
  `fathername` varchar(100) NOT NULL,
  `mothername` varchar(100) NOT NULL,
  `fatherocc` varchar(100) NOT NULL,
  `motherocc` varchar(100) NOT NULL,
  `image` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_studreg`
--

INSERT INTO `tbl_studreg` (`stud_id`, `admno`, `First_name`, `Middle_nam`, `Last_name`, `dob`, `gender`, `Address`, `district`, `state`, `religion`, `gphone`, `bloodgroup`, `fathername`, `mothername`, `fatherocc`, `motherocc`, `image`) VALUES
(1, 123, 'Arav', 'K', 'krishna', '2000-02-20', 'M', 'abc', 'ekm', 'kerala', 'christian', '9876543211', 'B+', 'qw', 'we', 'buisiness', 'qwe', 'spicuploads/d1.jpg'),
(2, 0, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(3, 134, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(4, 13309, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(5, 13314, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(6, 1000, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(7, 300, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(8, 132, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(9, 567, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(10, 13265, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(11, 900, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(12, 200, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(13, 201, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(14, 3364, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(15, 13333, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(17, 9249, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(18, 7558, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(19, 222, 'Rojan', 'Joseph', 'V J', '0000-00-00', 'M', 'ABC House', 'Ekm', 'kerala', 'christian', '5678907654', 'O+ve', 'Joseph', 'Anna', 'Driver', 'Teacher', 'spicuploads/attendance.png'),
(20, 223, 'Amitha', 'Mohan', 'S', '2022-10-05', 'F', 'Amitha villa', 'kottayam', 'Kerala', 'hindu', '6789089876', 'A+ve', 'Chandran', 'Amala', 'buisiness', 'house wife', 'spicuploads/riya.jpg'),
(21, 800, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(22, 13243, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', ''),
(23, 401, '', '', '', '0000-00-00', '', '', '', '', '', NULL, '', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_teachreg`
--

CREATE TABLE `tbl_teachreg` (
  `teach_id` int(50) NOT NULL,
  `staff_id` varchar(11) NOT NULL,
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
(1, 'S1', 'xcv', 'xcv', 'xcv@xcv.xcv', '2004-10-08', 'F', 'sd', 'sdf', 'sdf', 'qaew', '9876543211', 'B+', 'picuploads/d1.jpg', 'asd', 'wqe', 'Maths', 'Single', 4, 'cuploads/d1.jpg'),
(2, 'S2', 'Ananya', 'Nandakumar', 'asd@asd.asd', '1993-11-02', 'M', 'Rose Villa', 'Ernakulam', 'Kerala', 'Hindu', '7689543678', 'B+ve', 'picuploads/avatarfigma.jpg', 'MTech', 'Teacher', 'Maths', 'Married', 4, 'cuploads/2022-02-01.png'),
(3, 'S3', 'Rittymariya', 'K R', 'ritty@gmail.com', '2000-03-15', 'F', 'Kattakkayam pattanakkad P.O Cherthala', 'Alappuzha', 'kerala', 'Christian', '6238419650', 'O+ve', 'picuploads/PSHB0487 copy.JPG', 'MCA', 'Teacher', 'Maths', 'Single', 0, 'cuploads/RITTYMARIYA K R_RESUME.pdf'),
(4, 'S4', '', '', 'riya@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(5, 'S5', 'Riya', 'Jacey', 'riya1@gmail.com', '2000-11-06', 'F', 'Riyajacecy Villa', 'kottayam', 'Kerala', 'Christian', '9876567456', 'B-ve', 'picuploads/riya.jpg', 'MCa', 'Teacher', 'Maths', 'Single', 2, 'cuploads/calfigma.webp'),
(6, 'S6', '', '', 'vismaya@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(7, 'S7', '', '', 'sanioluke00@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(8, 'S8', '', '', 'rittymariya@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(9, 'S9', '', '', 'vijay@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(10, 'S10', 'Ritty', 'mariya', 'teacher@gmail.com', '2004-10-06', 'F', 'ghhj', 'tyyui', 'dfgh', 'dfgh', '1234567890', 'O+ve', 'picuploads/avatarfigma.jpg', 'ghjh', 'jhg', 'Maths', 'Single', 7, 'cuploads/attendance.png'),
(11, 'S11', '', '', 'athul@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(12, 'S12', '', '', 'soorya@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(13, 'S13', '', '', 'rittymariyakr@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(14, 'S14', '', '', 'shamjad.nazar.20@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(16, 'S16', '', '', 'amil@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(17, 'S17', '', '', 'hima@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(18, 'S18', '', '', 'athulvinayakumar2023b@mca.ajce.in', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(19, 'S19', '', '', 'amal@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, ''),
(20, 'S20', '', '', 'athulvinayakumar123@gmail.com', '0000-00-00', '', '', '', '', '', '', '', '', '', '', '', '', 0, '');

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
  MODIFY `stud_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_teachreg`
--
ALTER TABLE `tbl_teachreg`
  MODIFY `teach_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `tbl_usertype`
--
ALTER TABLE `tbl_usertype`
  MODIFY `usertype_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
