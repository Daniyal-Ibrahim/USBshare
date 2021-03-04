-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2021 at 09:08 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospitals_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `passcode`) VALUES
('sara', '123'),
('Dan', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `doctorinfo`
--

CREATE TABLE `doctorinfo` (
  `DoctorId` int(11) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctorinfo`
--

INSERT INTO `doctorinfo` (`DoctorId`, `PhoneNo`) VALUES
(1, '90078601'),
(2, '0335534999'),
(3, '90078603'),
(4, '90078604'),
(5, '90078605'),
(6, '1231231');

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `DoctorId` int(11) NOT NULL,
  `DoctorName` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`DoctorId`, `DoctorName`, `Qualification`, `Experience`) VALUES
(1, 'Dan', 'MBBS', 4),
(2, 'Ali', 'MBBS', 6),
(3, 'Wali', 'MBBS', 2),
(4, 'Mani', 'MBBS', 4),
(5, 'kali', 'MBBS', 5),
(6, 'TestDoc', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nurse`
--

CREATE TABLE `nurse` (
  `NurseId` int(11) NOT NULL,
  `NurseName` varchar(255) NOT NULL,
  `Qualification` varchar(255) NOT NULL,
  `Experience` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurse`
--

INSERT INTO `nurse` (`NurseId`, `NurseName`, `Qualification`, `Experience`) VALUES
(1, 'sara', 'MBBS', 1),
(2, 'Nida', 'BA', 1),
(3, 'fara', 'matric', 5),
(4, 'zara', 'matric', 5),
(5, 'kara', 'matric', 5),
(6, 'Test', 'test', 2);

-- --------------------------------------------------------

--
-- Table structure for table `nurseinfo`
--

CREATE TABLE `nurseinfo` (
  `NurseId` int(11) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nurseinfo`
--

INSERT INTO `nurseinfo` (`NurseId`, `PhoneNo`) VALUES
(1, '90078601'),
(2, '90078602'),
(3, '90078603'),
(4, '90078604'),
(5, '90078605'),
(6, '16541315');

-- --------------------------------------------------------

--
-- Table structure for table `patientinfo`
--

CREATE TABLE `patientinfo` (
  `PatientId` int(11) NOT NULL,
  `PhoneNo` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientinfo`
--

INSERT INTO `patientinfo` (`PatientId`, `PhoneNo`) VALUES
(1, '0335534558'),
(2, '16541315'),
(3, '90078603'),
(4, '90078604'),
(5, '16541315'),
(6, '16541315');

-- --------------------------------------------------------

--
-- Table structure for table `patientlogin`
--

CREATE TABLE `patientlogin` (
  `username` varchar(255) NOT NULL,
  `passcode` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patientlogin`
--

INSERT INTO `patientlogin` (`username`, `passcode`) VALUES
('sara', '123');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `PatientId` int(11) NOT NULL,
  `PatientName` varchar(255) NOT NULL,
  `Age` int(11) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `Sickness` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`PatientId`, `PatientName`, `Age`, `Gender`, `Sickness`) VALUES
(1, 'Nida', 3, 'F', 'fever'),
(2, 'sara', 4, 'F', 'flue'),
(3, 'Dan', 22, 'Male', 'Depression'),
(4, 'Ali', 26, 'Male', 'Compression'),
(5, 'Kal', 12, 'Male', 'Stomach Ache'),
(6, 'Dan', 21, 'Male', 'test');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD PRIMARY KEY (`DoctorId`,`PhoneNo`),
  ADD KEY `DoctorId` (`DoctorId`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`DoctorId`);

--
-- Indexes for table `nurse`
--
ALTER TABLE `nurse`
  ADD PRIMARY KEY (`NurseId`);

--
-- Indexes for table `nurseinfo`
--
ALTER TABLE `nurseinfo`
  ADD PRIMARY KEY (`NurseId`,`PhoneNo`),
  ADD KEY `NurseId` (`NurseId`);

--
-- Indexes for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD PRIMARY KEY (`PatientId`,`PhoneNo`),
  ADD KEY `PatientId` (`PatientId`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`PatientId`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `doctorinfo`
--
ALTER TABLE `doctorinfo`
  ADD CONSTRAINT `doctorinfo_ibfk_1` FOREIGN KEY (`DoctorId`) REFERENCES `doctors` (`DoctorId`);

--
-- Constraints for table `nurseinfo`
--
ALTER TABLE `nurseinfo`
  ADD CONSTRAINT `nurseinfo_ibfk_1` FOREIGN KEY (`NurseId`) REFERENCES `nurse` (`NurseId`);

--
-- Constraints for table `patientinfo`
--
ALTER TABLE `patientinfo`
  ADD CONSTRAINT `patientinfo_ibfk_1` FOREIGN KEY (`PatientId`) REFERENCES `patients` (`PatientId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
