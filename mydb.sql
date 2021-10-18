-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2021 at 05:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mydb`
--

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

DROP TABLE IF EXISTS `course`;
CREATE TABLE `course` (
  `courseID` int(10) NOT NULL,
  `courseName` varchar(60) NOT NULL,
  `section` varchar(10) NOT NULL,
  `time` varchar(60) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`courseID`, `courseName`, `section`, `time`) VALUES
(101, 'Algorithm', 'A', 'S 8-10 AM and T 8-11 AM'),
(102, 'Data Structure', 'A', 'S 8-10 AM and T 8-11 AM'),
(103, 'Operating System', 'A', 'S 8-10 AM and T 8-11 AM'),
(104, 'Thory Of Computation', 'A', 'S 8-10 AM and T 8-10 AM'),
(105, 'WebTech', 'A', 'S 8-10 AM and T 8-11 AM'),
(106, 'Computer Networks', 'A', 'S 8-10 AM and T 8-11 AM'),
(107, 'Economics', 'A', 'S 8-9:30 AM and T 8-9:30 AM'),
(112, 'Advanced Webtech', 'A', 'S 8-10 AM and T 8-11 AM'),
(113, 'Advanced Computer Networks', 'A', 'S 8-10 AM and T 8-11 AM');

-- --------------------------------------------------------

--
-- Table structure for table `coursebysemester`
--

DROP TABLE IF EXISTS `coursebysemester`;
CREATE TABLE `coursebysemester` (
  `semesterID` varchar(20) NOT NULL,
  `courseID` int(10) NOT NULL,
  `courseName` varchar(60) NOT NULL,
  `grade` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `coursebysemester`
--

INSERT INTO `coursebysemester` (`semesterID`, `courseID`, `courseName`, `grade`) VALUES
('Summer 19-20', 101, 'Algorithm', 'A+'),
('Summer 19-20', 102, 'Data Sturcture', 'A+'),
('Summer 19-20', 101, ' INTRODUCTION TO DATABASE', 'A'),
('Summer 19-20', 104, 'PROGRAMMING LANGUAGE 2', 'A'),
('Fall 20-21', 105, 'Theory Of Computation', 'A'),
('Fall 20-21', 106, 'Operating System', 'A+'),
('Fall 20-21', 106, 'Economics', 'A'),
('Spring 20-21', 107, 'Compiler Design', 'A+'),
('Spring 20-21', 108, 'Webtech', 'A+'),
('Spring 20-21', 110, 'Operating System', 'A'),
('Fall 20-21', 112, 'Blockchain', 'A+');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(6) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `dob` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `username`, `password`, `name`, `email`, `gender`, `dob`) VALUES
(4, 'mehedi', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'Male', '1997-12-13'),
(5, 'sirskitzo', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-07'),
(6, 'mehedi', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-01'),
(7, 'newuser123', '123456123@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-13'),
(8, 'user123456', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-05'),
(9, 'user123456', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-05'),
(10, 'mehedihassan', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-03-30'),
(11, 'mehedihassan', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-03-30'),
(12, 'mehedihassan', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-03-30'),
(13, 'ee', '123456789@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-05'),
(14, 'ee', '123456789@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-05'),
(15, 'ee', '123456789@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-05'),
(16, 'ee', '123456789@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-05'),
(17, 'ee', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-05'),
(18, 'ee', '12345678@', 'Md. Mehedi Hassan Himel', 'mehedihassan5676@gmail.com', 'male', '2021-04-05'),
(19, 'mehedi', '123456789@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-21'),
(20, 'mehedi', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-14'),
(21, 'mehedi', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-14'),
(22, 'mehedi', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-14'),
(23, 'mehedi', '12345678@', 'Md. Mehedi Hassan Himel', 'sirskitzo767@gmail.com', 'male', '2021-04-14'),
(24, 'mehedi555', '12345678@', 'mehedi', 'mehedihassan5676@gmail.com', 'male', '2021-04-29'),
(25, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '1997-12-13'),
(26, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '1997-12-13'),
(27, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '1997-12-13'),
(28, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '1997-12-13'),
(29, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '1997-12-13'),
(30, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '1997-12-13'),
(31, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '2021-04-28'),
(32, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '2021-04-28'),
(33, 'mehedi', '12345aA!', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '2021-04-28'),
(34, 'mehedi', '123456a@A', 'Mehedi Hassan', 'mehedihassan5676@gmail.com', 'male', '2021-03-31'),
(35, 'mehedi', '12345678@', 'Mehedi', 'mehedi@gmail.com', 'male', '2021-04-22'),
(36, 'jsdkjsq', '12345678@', 'mhdfdkq', 'mdjdj@gmail.com', 'male', '2021-04-07'),
(37, 'ffddds', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-22'),
(38, 'mehedi', '12345678@', 'Mehedi', 'mehedi@gmail.com', 'male', '2021-04-29'),
(39, 'mehedi', '@Aasdf1234', 'Mehedi Hassan', 'mehedi@gmail.com', 'male', '2021-04-21'),
(40, 'mehedi', '@Aasdf1234', 'jkjk', 'kjk@gmail.com', 'male', '2021-04-07'),
(41, 'ksfjlasjdl', '12345678Aa@', 'mkdsfjdsklj', 'dsjkldsjflk@gmail.com', 'male', '2021-05-05'),
(42, 'ksfjlasjdl', '12345678Aa@', 'mkdsfjdsklj', 'dsjkldsjflk@gmail.com', 'male', '2021-05-05'),
(43, 'ksfjlasjdl', '12345678Aa@', 'mkdsfjdsklj', 'dsjkldsjflk@gmail.com', 'male', '2021-05-05'),
(44, 'ksfjlasjdl', '12345678Aa@', 'mkdsfjdsklj', 'dsjkldsjflk@gmail.com', 'male', '2021-05-05'),
(45, 'ksfjlasjdl', '12345678Aa@', 'mkdsfjdsklj', 'dsjkldsjflk@gmail.com', 'male', '2021-05-05'),
(46, 'mehedi', '123456aA@', 'mehedihassan', 'mehedi@gmail.com', 'male', '2021-04-21'),
(47, 'mehedi', '123456aA@', 'mehedihassan', 'mehedi@gmail.com', 'male', '2021-04-21'),
(48, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-01'),
(49, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-01'),
(50, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-01'),
(51, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-01'),
(52, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-28'),
(53, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-28'),
(54, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-28'),
(55, 'mehedii', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-22'),
(56, 'mehedii', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-22'),
(57, 'mehedii', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-21'),
(58, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-28'),
(59, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-28'),
(60, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(61, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(62, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(63, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(64, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(65, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(66, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(67, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(68, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(69, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(70, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(71, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(72, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(73, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-03-31'),
(74, 'mehedi', '12345678@', 'jkjfksjfkl', 'mehedihassan5676@gmail.com', 'male', '2021-04-28'),
(75, 'dfjsklfj', '12345678@', 'jsjfkldjklfdfdf', 'skjflsjdflfdf@gmail.com', 'male', '2021-04-01'),
(76, 'jsksjdk', '12345678@', 'dsfds', 'dsfdsdf@gmail.com', 'male', '2021-04-30'),
(77, 'sdkjskdj', '12345678@', 'dsfs', 'fsfds@gmail.com', 'male', '2021-04-20'),
(78, 'jfldsjfkll', '123456789@', 'gdgfg', 'dffsjdflj@gmail.com', 'male', '2021-04-21'),
(79, 'klsdfjslfj', '123456789@', 'lsdkfjsldfj', 'dsjflsjfl@gmail.com', 'male', '2021-04-29'),
(80, 'jslkfjkd', '123456789@', 'ldjlskjflsk', 'dklsfjdls@gmail.com', 'male', '2021-04-28'),
(81, 'dklsfjdksj', '12345678@', 'fjlkdsjflj', 'slfjslkdkj@gmail.com', 'male', '2021-04-08'),
(82, 'lkajdfkksd', '12345678@', 'kjfksjfkls', 'dkfsklj@gmail.com', 'male', '2021-04-01'),
(83, 'lkajdfkksd', '12345678@', 'kjfksjfkls', 'dkfsklj@gmail.com', 'male', '2021-04-01'),
(84, 'slkfjks', '12345678@', 'dfdsfs', 'dsfdsf@gmail.com', 'male', '2021-04-28'),
(85, 'kkjklj', '12345678@', 'fsflksjl', 'sdlfjdsklfj@gmail.com', 'male', '2021-04-13'),
(86, 'kkjklj', '12345678@', 'fsflksjl', 'sdlfjdsklfj@gmail.com', 'male', '2021-04-13'),
(87, 'hjhjjoj', '123456789@', 'sdfjslfj', 'lkfjdksfjk@gmail.com', 'male', '2021-04-07'),
(88, 'hjhjjoj', '123456789@', 'sdfjslfj', 'lkfjdksfjk@gmail.com', 'male', '2021-04-07'),
(89, 'sdfds', '12345678@', 'dsfds', 'dsfsd@gmail.com', 'male', '2021-04-05'),
(90, 'jskjdk', '123456789@', 'shfdjhj', 'dlkfjdk@gmail.com', 'male', '2021-04-13'),
(91, 'mehedi', '123456aA@', 'mehedi hassan', 'mehedi@gmail.com', 'male', '2021-04-22'),
(92, 'mehedi', '123456aA@', 'mehedi hassan', 'mehedi@gmail.com', 'male', '2021-04-22'),
(93, 'sfdsf', '12345678@', 'mehedi', 'mehedi5@gmail.com', 'male', '2021-04-27'),
(94, 'mehedi', '123456aA@', 'mehedi hassan', 'mehedi@gmail.com', 'male', '2021-04-21'),
(95, 'mehedi', '123456aA@', 'mehedi hassan', 'mehedi@gmail.com', 'male', '2021-04-21'),
(96, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmai.com', 'male', '2021-04-27'),
(97, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmai.com', 'male', '2021-04-27'),
(98, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-20'),
(99, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-20'),
(100, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-20'),
(101, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-20'),
(102, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-20'),
(103, '', '', 'm', '', '', '2021-04-13'),
(104, '', '', 'jgh', '', '', '2021-04-22'),
(105, '', '', 'dsfs', '', '', '2021-04-21'),
(106, 'sjdfkldjk', '123456789@', 'jkjkl', 'kjgdjk@gmail.com', 'male', '2021-04-07'),
(107, 'sjdfkldjk', '123456789@', 'jkjkl', 'kjgdjk@gmail.com', 'male', '2021-04-07'),
(108, 'mehedi', '12345678@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-22'),
(109, 'mehedi', 'dgfgdf', '', 'mehedihassan5676@gmail.com', 'Male', '2010-12-16'),
(110, 'mehedi', '123456aA@', 'mehedi', 'mehedi@gmail.com', 'male', '2021-04-28'),
(111, 'angrypic', '123456aA@', 'AngryPicnic', 'angrypicnic@gmail.com', 'male', '2021-04-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`courseID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `courseID` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=114;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
