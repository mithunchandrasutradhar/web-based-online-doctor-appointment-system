-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2020 at 09:57 AM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `doctors`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminregisterform`
--

CREATE TABLE IF NOT EXISTS `adminregisterform` (
`ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `national_id` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `adminregisterform`
--

INSERT INTO `adminregisterform` (`ID`, `name`, `gender`, `age`, `contact_number`, `national_id`, `email`, `password`) VALUES
(1, 'Mithun Chandra Sutradhar', 'male', '18', '01785320533', '5553276774', 'mithunchandra40@gmail.com', 'mithunchandra');

-- --------------------------------------------------------

--
-- Table structure for table `appointmentform`
--

CREATE TABLE IF NOT EXISTS `appointmentform` (
`ID` int(100) NOT NULL,
  `doctor_name` varchar(100) NOT NULL,
  `patient_name` varchar(100) NOT NULL,
  `blood_group` varchar(10) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `age` varchar(10) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(20) NOT NULL,
  `serial_no` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentform`
--

INSERT INTO `appointmentform` (`ID`, `doctor_name`, `patient_name`, `blood_group`, `gender`, `age`, `address`, `contact_number`, `serial_no`) VALUES
(17, 'Dr. Nasim Bin Hasan', 'Nahidul Islam Nahid', 'B+', 'male', '22', 'Shibganj', '01722334466', ''),
(11, 'Dr. Nasir Hossain', 'Mithun Chandra Sutradhar', 'B-', 'male', '14', 'Bogura', '01739909819', '1'),
(12, 'Dr. Kabir Mia', 'Alo', 'A-', 'male', '13', 'fghjklkjhgfghjf;lsjkfrweoiroiweuroewur', '0987654323456789', ''),
(13, 'Dr. Manik Chandra', 'Afrina', 'AB+', 'male', '21', '3er', '12345', ''),
(16, 'Dr. Manik Chandra', 'Afrina', 'AB+', 'male', '21', '3ertyu', '1234567898765432', ''),
(15, 'Dr. Manik Chandra', 'wertyuio', 'fghj', 'fgh', '34', 'sdfghj', '23456543456', '');

-- --------------------------------------------------------

--
-- Table structure for table `doctorregisterform`
--

CREATE TABLE IF NOT EXISTS `doctorregisterform` (
`ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `place` varchar(100) NOT NULL,
  `day` varchar(100) NOT NULL,
  `time` varchar(100) NOT NULL,
  `designation` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorregisterform`
--

INSERT INTO `doctorregisterform` (`ID`, `name`, `place`, `day`, `time`, `designation`, `email`, `password`) VALUES
(9, 'Dr. Abul Kalam', 'SZMCH', 'EveryDay', '10am - 4pm', 'ENT Specialist', 'abul@gmail.com', 'abul'),
(2, 'Dr. Gaffar Faruk', 'Popular Diagnostic Centre', 'Friday', '10am - 4pm', 'ENT Specialist', 'gaffarfaruk@gmail.com', 'gaffarfaruk'),
(12, 'Dr. Horidash Paul', 'SZMCH', 'Everyday', '9am - 3pm', 'Child Specialist', 'horidash@gmail.com', 'horidash'),
(5, 'Dr. Kabir Mia', 'IBNASINA', 'Monday - Wednessday', '10am-8pm', 'ENT Specialist', 'kabir@gmail.com', 'kabir'),
(4, 'Dr. Manik Chandra', 'Popular Diagnostic Centre', 'Saturday', '10am-10pm', 'Child Specialist', 'manik@gmail.com', 'manik'),
(14, 'Dr. Mithun Chandra Sutradhar', 'SZMCH', 'Everyday', '10am - 4pm', 'ENT Specialist', 'mithun@gmail.com', 'mithun'),
(15, 'Dr. Nasim Bin Hasan', 'IBNASINA', 'Monday - Friday', '10am - 4pm', 'ENT Specialist', 'nasim@gmail.com', 'nasim'),
(1, 'Dr. Nasir Hossain', 'Popular Diagnostic Centre', 'Saturday- Wednesday', '11am - 7pm', 'Heart Specialist', 'nasirhossain@gmail.com', 'nasirhossain'),
(8, 'Dr. Nirmolendu Gun', 'IBNASINA', 'Friday', '9am - 5pm', 'Heart Specialist', 'nirmol@gmail.com', 'nirmol'),
(6, 'Dr. Sabbir Hossain', 'IBNASINA', 'Monday - Wednessday', '10am-8pm', 'Eye Specialist', 'sabbir@gmail.com', 'sabbir'),
(10, 'Dr. Shafiqul Hossain', 'SZMCH', 'Tuesday', '3pm - 9pm', 'Eye Specialist', 'shafiq@gmail.com', 'shafiq'),
(11, 'Dr. Shatish Chandra', 'SZMCH', 'Monday - Friday', '10am - 8pm', 'Heart Specialist', 'shatish@gmail.com', 'shatish'),
(7, 'Dr. Sumon Kumar', 'IBNASINA', 'Saturday', '5pm - 8pm', 'Child Specialist', 'sumon@gmail.com', 'sumon');

-- --------------------------------------------------------

--
-- Table structure for table `registerform`
--

CREATE TABLE IF NOT EXISTS `registerform` (
`ID` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `blood_group` varchar(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `age` varchar(100) NOT NULL,
  `address` varchar(100) NOT NULL,
  `contact_number` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registerform`
--

INSERT INTO `registerform` (`ID`, `name`, `blood_group`, `gender`, `age`, `address`, `contact_number`, `email`, `password`) VALUES
(3, 'Mithun Chandra Sutradhar', 'B-', 'male', '27', 'Birkedar Miyapara, Kahaloo, Bogura', '01739909819', 'mithunchandra40@gmail.com', 'sdfghjkjhgfdsdfhj'),
(9, 'Sagor', 'B+', 'male', '19', 'Dhaka', '01743536373', 'sagor@gmail.com', 'sagor'),
(8, 'Udoy Sarkar', 'B+', 'male', '26', 'Adamdighi', '01748372623', 'udoy@gmail.com', 'udoy'),
(7, 'Sumon kumar', 'B+', 'male', '30', 'Shirajgong', '01775357057', 'sumonkumar@gmail.com', 'sumonkumar'),
(6, 'SUJIT KUMAR PRAMANIK', 'AB-', 'male', '25', 'Nandigram', '01785320533', 'sujitkumar@gmail.com', 'sujitkumar'),
(4, 'Sohag', 'AB+', 'male', '20', 'Bogura', '01790987987', 'sohag@gmail.com', 'sohag');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminregisterform`
--
ALTER TABLE `adminregisterform`
 ADD PRIMARY KEY (`national_id`), ADD KEY `ID` (`ID`);

--
-- Indexes for table `appointmentform`
--
ALTER TABLE `appointmentform`
 ADD PRIMARY KEY (`contact_number`), ADD UNIQUE KEY `ID` (`ID`), ADD KEY `ID_2` (`ID`), ADD KEY `address` (`address`);

--
-- Indexes for table `doctorregisterform`
--
ALTER TABLE `doctorregisterform`
 ADD PRIMARY KEY (`email`), ADD KEY `ID` (`ID`);

--
-- Indexes for table `registerform`
--
ALTER TABLE `registerform`
 ADD PRIMARY KEY (`contact_number`), ADD UNIQUE KEY `email` (`email`), ADD KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminregisterform`
--
ALTER TABLE `adminregisterform`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `appointmentform`
--
ALTER TABLE `appointmentform`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `doctorregisterform`
--
ALTER TABLE `doctorregisterform`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `registerform`
--
ALTER TABLE `registerform`
MODIFY `ID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
