-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2019 at 05:28 AM
-- Server version: 10.1.13-MariaDB
-- PHP Version: 7.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `result`
--

-- --------------------------------------------------------

--
-- Table structure for table `courses`
--

CREATE TABLE `courses` (
  `id` int(11) NOT NULL,
  `roll_no` varchar(20) NOT NULL,
  `course_name` varchar(45) NOT NULL,
  `course_code` varchar(45) NOT NULL,
  `Unit` varchar(50) NOT NULL,
  `department` varchar(45) NOT NULL,
  `Ca` varchar(3) NOT NULL,
  `Exam` varchar(3) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `courses`
--

INSERT INTO `courses` (`id`, `roll_no`, `course_name`, `course_code`, `Unit`, `department`, `Ca`, `Exam`) VALUES
(4, 'P/ND/14/3210111', 'Maths', 'MTH111', '2', 'Computer Science', '17', '59'),
(7, 'P/ND/14/3210111', 'English', 'GNS102', '2', 'Computer Science ', '29', '70'),
(9, 'P/ND/14/3210123', 'Maths', 'MTH111', '2', 'Commerce', '22', '65'),
(11, 'P/ND/14/321012', 'English', 'GNS102', '2', 'Art', '25', '62'),
(14, 'P/ND/14/3210111', 'Internet', 'Com111', '3', 'Computer Science', '23', '33'),
(15, 'P/ND/14/3210111', 'Accounting', 'Acc123', '3', 'Accounting', '30', '30'),
(17, 'P/ND/14/3210111', 'Economic', 'Ecom111', '3', 'Accounting', '23', '65'),
(18, 'P/ND/14/3210111', 'System Troubleshooting', 'COM212', '3', 'Computer Science', '20', '40'),
(20, 'P/ND/14/3210111', 'Unified Model Language', 'COM213', '3', 'Computer Science', '25', '48');

-- --------------------------------------------------------

--
-- Table structure for table `new_student`
--

CREATE TABLE `new_student` (
  `id` int(45) NOT NULL,
  `Last Name` varchar(25) NOT NULL,
  `First Name` varchar(30) NOT NULL,
  `gender` varchar(6) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `Email` varchar(45) NOT NULL,
  `Dept` varchar(30) NOT NULL,
  `username` varchar(45) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `new_student`
--

INSERT INTO `new_student` (`id`, `Last Name`, `First Name`, `gender`, `Phone`, `Email`, `Dept`, `username`, `password`) VALUES
(1, 'Jones', 'Jason', 'Male', '+234 8145551212', 'jjones@hvsd.org', 'Science', '', ''),
(2, 'Jones', 'Rick', 'Male', '814-555-1212', 'rjones@hvsd.org', 'Science', '', ''),
(3, 'Smith', 'Anne', 'Female', '814-555-1212', 'asmith@hvsd.org', 'Science ', '', ''),
(4, 'Frank', 'Franker', 'Male', '08109843284', 'olamilek@gmail.com', 'Science', '', ''),
(5, 'Frank', 'Riley', 'Female', '123-456-7890', 'friley@kanab.org', 'Art', '', ''),
(6, 'Steve', 'Anne', 'Female', '090231256734', 'laasmith@hvsd.org', 'Commerces', '', ''),
(7, 'Steve', 'Brannigan', 'Male', '123-456-7890', 'sbrannigan@kanab.org', 'Science', '', ''),
(8, 'Marie', 'Ambrose', 'Female', '123-456-7890', 'mambrose@kanab.org', 'Commerce', '', ''),
(9, 'Sarah ', 'Smith', 'Female', '23444455546456', 'sarah@gmail.com', 'Science', '', ''),
(10, 'John ', 'Deo', 'Male', '444543564', 'Hopesmith@hvsd.org', 'Commerce', '', ''),
(11, 'Jay ', 'Soni', 'Male', '23444455546456', 'Olamilekan@lek.com', 'Art', '', ''),
(12, 'Jay ', 'Soni', 'Male', '444543564 ', 'kenh@gmail.com', 'Arts', '', ''),
(13, 'Jacob ', 'Ryan', 'Male', '444543564', 'johnson@gmail.com', 'Music', '', ''),
(14, 'Megha ', 'Trivedi', 'Female', '444543564', 'megha@gmail.com', 'Commerce', '', ''),
(15, 'Rajesh', 'Rajesh', 'Male', '4444565756', 'rajesh@gmail.com', 'Civil', '', ''),
(16, 'Jens ', 'Brincker', 'Female', '+234 8140231212', 'paullive@me.com', 'Commerce', '', ''),
(17, 'Mark ', 'Hay', 'Male', '0902301564', 'Samsongo@gmail.com', 'Art', '', ''),
(18, 'Anthony ', 'Davie', 'Female', '070 231 6751', 'oludare@gmail.com', 'Arts', '', ''),
(19, 'Sue', ' Woodger', 'Male', '123-456-7890', 'olirajesh@gmail.com', 'Science ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `professor`
--

CREATE TABLE `professor` (
  `id` int(11) NOT NULL,
  `first_name` varchar(11) NOT NULL,
  `last_name` varchar(11) NOT NULL,
  `email` varchar(45) NOT NULL,
  `joiningdate` varchar(45) NOT NULL,
  `password` varchar(11) NOT NULL,
  `Designation` varchar(11) NOT NULL,
  `Department` varchar(45) NOT NULL,
  `Gender` varchar(45) NOT NULL,
  `Mobile_no` varchar(20) NOT NULL,
  `birth_date` varchar(11) NOT NULL,
  `Address` varchar(50) NOT NULL,
  `education` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professor`
--

INSERT INTO `professor` (`id`, `first_name`, `last_name`, `email`, `joiningdate`, `password`, `Designation`, `Department`, `Gender`, `Mobile_no`, `birth_date`, `Address`, `education`) VALUES
(1, 'Oladipe', 'Eniola', 'oladipeolaniyan28@gmail.com', '02 october 1999', 'akanbiakanb', 'CITM', 'Category 1', 'Category 1', '09023419036', '02 October ', '12, Great Valley Avenue Oke Aro Ogun State', 'MBA'),
(2, 'Oladipe', 'John Mikel', 'johnmikel118@gmail.com', '', 'akanbiakanb', 'CITM', 'Category 2', 'Category 1', '09023419036', '02 October ', '', ''),
(3, 'Oladipe', 'John Mikel', 'johnmikel118@gmail.com', '', '', 'CITM', 'Category 1', 'Category 1', '09023419036', '02 October ', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `stud_id` int(11) NOT NULL,
  `first_name` varchar(12) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `roll_no` varchar(15) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `registration_date` varchar(50) DEFAULT NULL,
  `class` varchar(50) DEFAULT NULL,
  `gender` varchar(7) DEFAULT NULL,
  `mobile_no` varchar(20) DEFAULT NULL,
  `parent_name` varchar(50) NOT NULL,
  `parent_no` varchar(20) NOT NULL,
  `d_o_b` varchar(15) NOT NULL,
  `address` text NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`stud_id`, `first_name`, `last_name`, `roll_no`, `email`, `registration_date`, `class`, `gender`, `mobile_no`, `parent_name`, `parent_no`, `d_o_b`, `address`, `image`) VALUES
(1, 'Paul', 'Mike', 'P/ND/14/3210111', 'estherhelen298@gmail.com', '1 Dec 2018', 'Computer', 'Male', ' 01 295 2086', ' Bashiru', '07060931803', '03 October 1995', '12, palm Avenue Association drive', '"../assets/img/std/std1.jpg"'),
(2, 'Omonimofe', 'Ugwu', 'P/ND/14/3210101', 'olusojin298@gmail.com', '17 Octo 2017', 'Computer', 'Male', ' 01 295 2086', 'Omonimofe Bashiru', '07060931803', '03 October 1995', '12, palm Avenue Association drive', '"../assets/img/std/std2.jpg"'),
(3, 'Mikel', 'john', 'P/ND/14/3210119', 'oladipeolaniyan28@gmail.com', '5 October 2017', 'Mechanical', 'Female', '09023419036', 'Mikel Kudirat', '07089931803', '02 October 1993', 'Drive 7 lukoya close marathon road ikeja lagos', '../assets/img/std/std3.jpg'),
(4, 'olootu', 'Babalola', 'P/ND/14/3210125', 'oladipeolaniyan28@gmail.com', '19 October 2017', 'Mechanical', 'Female', '09023419036', 'Ollotu Kudirat', '07089931803', '02 October 1993', 'Drive 7 lukoya close marathon road ikeja lagos', '../assets/img/std/std4.jpg'),
(5, 'Bassy', 'Oluwakemi', 'P/ND/14/321012', 'oladipeoyan28@gmail.com', '5 june 2018', 'Mechanical', 'Female', '09023419036', 'Bassy Kudirat', '07089931803', '02 October 1993', 'Drive 7 lukoya close marathon road ikeja lagos', '../assets/img/std/std5.jpg'),
(6, 'Obasi', 'Job', 'P/ND/14/321013', 'ola28@gmail.com', '7 October 2017', 'Mechanical', 'Female', '09023419036', 'Obasi Kudirat', '07089931803', '02 October 1993', 'Drive 7 lukoya close marathon road ikeja lagos', '../assets/img/std/std6.jpg'),
(7, 'Oladipe', 'Oluwakemi olu', 'P/ND/14/3210112', 'pes98@gmail.com', '17 Nov 2018', 'Mathematics', 'Male', ' 01 295 2086', 'Oladipe Kudirat', '07089931803', '02 October 1994', '', '../assets/img/std/std7.jpg'),
(8, 'Oladipe', 'Oluwakemi oluwa', 'P/ND/14/3210123', 'esther298@gmail.com', '17 October  2017', 'Mathematics', 'Male', ' 01 295 2086', 'Oladipe Kudirat', '07089931803', '02 October 1994', '', '../assets/img/std/std8.jpg'),
(9, 'nora', 'obiekwu', 'P/ND/14/3210132', 'noraobiekwu@yahoo.com', '15 october 2018', 'Computer', 'Female', '09092477228', 'john obiekwu', '09067691958', '02 October 1993', 'no 6 ademola street adeba bustop ajah lagos', ''),
(10, 'funmi', 'ayomide', 'P/ND/14/3210123', 'funmiayomide@gmail.com', '17 October 2018', 'Mathematics', 'Female', '09089771426', 'hassan', '08089729236', '27 October 2018', 'hsadg jsdbv', ''),
(11, 'Tosin', 'Soyinka', 'P/ND/14/3210122', 'ndipmonganiefiok@gmail.com', '01 October 2016', 'Mathematics', 'Male', '090234183345', 'Halla Hassan', '08089729236', '27 October 2018', '118b, association way dolphin estate\r\n', ''),
(14, 'Bashiru', 'kehinde', 'P/ND/14/3210234', 'lekan@krystalng.com', '03 November 2009', 'Computer', 'Male', '09089771426', 'Halla Hassan', '08089729236', '12 May 1989', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `Username` varchar(45) NOT NULL,
  `password` varchar(60) NOT NULL,
  `Fullname` varchar(45) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `Username`, `password`, `Fullname`, `image`) VALUES
(1, 'Hollami', '$2y$10$hniSaihELEfcu5UWnqhuCe.5wYyckTEce.8VOJUlbgq8.WOEVvWie', 'Codelex', 'dp.jpg'),
(2, 'Olami000', '$2y$10$hniSaihELEfcu5UWnqhuCe.5wYyckTEce.8VOJUlbgq8.WOEVvWie', 'CodeHolla', '../assets/img/flags/gb.png'),
(4, 'Norasweet', '$2y$10$rquqrv.4BDeXk73HoQPxe.2Rgv21ren2rX1d/BJehcyfIv2aalPIy', 'Nora obiekwu', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `courses`
--
ALTER TABLE `courses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `new_student`
--
ALTER TABLE `new_student`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `professor`
--
ALTER TABLE `professor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`stud_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `courses`
--
ALTER TABLE `courses`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `new_student`
--
ALTER TABLE `new_student`
  MODIFY `id` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `professor`
--
ALTER TABLE `professor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `stud_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
