-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 19, 2022 at 12:09 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hospital`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctorsinfo`
--

CREATE TABLE `doctorsinfo` (
  `ID` varchar(10) NOT NULL,
  `name` varchar(150) NOT NULL,
  `address` varchar(150) NOT NULL,
  `Phone` int(15) NOT NULL,
  `Degree` varchar(180) NOT NULL,
  `Designation` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctorsinfo`
--

INSERT INTO `doctorsinfo` (`ID`, `name`, `address`, `Phone`, `Degree`, `Designation`) VALUES
('D-101', 'Dr. Md. Nurul Islam', 'Chapainawabganj', 1736458791, 'MD (Medicine)', 'Assistant Professor'),
('D-102', 'Dr. Md. Tarek Aziz', 'Chapainawabganj', 178454698, 'MBBS', 'Medical Officer');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `EmpID` varchar(10) NOT NULL,
  `EmpName` varchar(140) NOT NULL,
  `Empaddress` varchar(180) NOT NULL,
  `Emprole` varchar(40) NOT NULL,
  `Empphone` int(15) NOT NULL,
  `Eusername` varchar(20) NOT NULL,
  `Epassword` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`EmpID`, `EmpName`, `Empaddress`, `Emprole`, `Empphone`, `Eusername`, `Epassword`) VALUES
('', 'Sony', 'Bashundhara', 'Manager', 178454547, 'sonym', '1'),
('E-101', 'Mr. Sony', 'Bashundhara', 'Admin', 1786193272, 'sony', '123'),
('E-102', 'Md. Mehedi Hasan', 'Bashundhara #204', 'Manager', 1791949535, 'nion', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `examinfo`
--

CREATE TABLE `examinfo` (
  `ItemID` varchar(10) NOT NULL,
  `ItemName` varchar(80) NOT NULL,
  `Rate` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `examinfo`
--

INSERT INTO `examinfo` (`ItemID`, `ItemName`, `Rate`) VALUES
('E-101', 'CBC', 300),
('E-102', 'Blood Group', 100),
('E-103', 'T4', 1000);

-- --------------------------------------------------------

--
-- Table structure for table `material`
--

CREATE TABLE `material` (
  `ItemID` varchar(15) NOT NULL,
  `ItemName` varchar(80) NOT NULL,
  `ItemDescription` varchar(180) NOT NULL,
  `QtyInStock` int(11) NOT NULL,
  `Price` float NOT NULL,
  `TotalPrice` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `patient`
--

CREATE TABLE `patient` (
  `patientname` varchar(150) NOT NULL,
  `fathername` varchar(150) NOT NULL,
  `mothername` varchar(150) NOT NULL,
  `gender` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `bloodgroup` varchar(10) NOT NULL,
  `address` varchar(150) NOT NULL,
  `phone` int(15) NOT NULL,
  `regid` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `patient`
--

INSERT INTO `patient` (`patientname`, `fathername`, `mothername`, `gender`, `dob`, `bloodgroup`, `address`, `phone`, `regid`) VALUES
('Nion', 'Motiur', 'Bilkis', 'Male', '2022-04-07', 'B+', 'Chapainawabganj', 1734717100, 'R-101'),
('Nion', 'Motiur', 'Bilkis', 'Male', '2022-04-07', 'B+', 'Chapainawabganj', 1734717100, 'R-101'),
('Nion', 'Motiur', 'Bilkis', 'Male', '2022-04-07', 'B+', '', 0, 'R-101'),
('Mehedi', 'Belal', 'Fatima', 'Male', '2022-04-12', 'A+', 'Chapainawabganj', 1734717100, 'R-102');

-- --------------------------------------------------------

--
-- Table structure for table `userinfo`
--

CREATE TABLE `userinfo` (
  `firstname` varchar(80) NOT NULL,
  `lastname` varchar(80) NOT NULL,
  `gender` varchar(20) NOT NULL,
  `doB` date NOT NULL,
  `religion` varchar(20) NOT NULL,
  `phone` int(15) NOT NULL,
  `presentAddress` varchar(150) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `recoveryEmail` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userinfo`
--

INSERT INTO `userinfo` (`firstname`, `lastname`, `gender`, `doB`, `religion`, `phone`, `presentAddress`, `email`, `username`, `password`, `recoveryEmail`) VALUES
('Md. Aktarul', 'Islam', 'Male', '2022-04-15', 'Islam', 1786193272, 'Dhaka', 'sonylab97@gmail.com', 'sony', '11', 'sonylab97@gmail.com'),
('Md. Aktarul', 'Islam', 'Male', '2022-04-14', 'Islam', 1786193272, 'Chapainawabganj', 'sonylab97@gmail.com', 'noman', '12', 'sonylab97@gmail.com'),
('Md. Mahmudul', 'Hasan', 'Male', '2022-04-06', 'Islam', 1311664181, 'Mirpur, Dhaka', 'aktarul.ce72@gmail.com', 'nion', '123', 'aktarul.ce72@gmail.com'),
('Md. Aktarul', 'Islam', 'Male', '2022-04-13', 'Islam', 1786193272, 'Chapainawabganj', 'sonylab97@gmail.com', 'sony12', '1234', 'sonylab97@gmail.com'),
('Md. Aktarul', 'Islam', 'Male', '2022-04-13', 'Islam', 1786193272, 'Chapainawabganj', 'sonylab97@gmail.com', 'sony2', '123', 'sonylab97@gmail.com'),
('Md. Aktarul', 'Islam', 'Male', '2022-04-09', 'Islam', 1786193272, 'Chapainawabganj', 'sonylab97@gmail.com', 'sony123', '12345', 'sonylab97@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `firstname` varchar(40) NOT NULL,
  `lastname` varchar(40) NOT NULL,
  `dob` date NOT NULL,
  `gender` varchar(10) NOT NULL,
  `religion` varchar(15) NOT NULL,
  `address` varchar(80) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `email` varchar(60) NOT NULL,
  `username` varchar(15) NOT NULL,
  `password` varchar(15) NOT NULL,
  `confirmpassword` varchar(15) NOT NULL,
  `recoveryemail` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`firstname`, `lastname`, `dob`, `gender`, `religion`, `address`, `phone`, `email`, `username`, `password`, `confirmpassword`, `recoveryemail`) VALUES
('Md. Aktarul', 'Islam', '2022-03-02', 'male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sony', '123', ' 123', ''),
('Md. Abdullah-Al', 'Noman', '2022-03-11', 'male', 'Islam', 'Sirajganj', '0178664428', 'noman@example.com', 'noman', '1234', ' 1234', ''),
('', '', '0000-00-00', 'Male', 'Islam', '', '', 'sonylab97@gmail.com', 'sony123', '1234', ' 1234', ''),
('', '', '0000-00-00', 'Male', 'Islam', '', '', 'sonylab97@gmail.com', 'sony123', '1234', ' 1234', ''),
('', '', '2022-04-08', 'Male', 'Islam', '', '', 'sonylab97@gmail.com', 'sony123', '1234', ' 1234', ''),
('', '', '2022-04-09', 'Male', 'Islam', '', '', 'sonylab97@gmail.com', 'sony123', 'asd', ' asd', ''),
('', '', '2022-04-09', 'Male', 'Islam', '', '01786193272', 'sonylab97@gmail.com', 'sony123', 'asd', ' asd', ''),
('', '', '2022-04-09', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sony123', 'asd', ' asd', ''),
('Md. Aktarul', 'Islam', '2022-04-09', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sony123', 'asd', ' asd', ''),
('Md. Aktarul', 'Islam', '2022-04-07', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sony123', 'asd', ' asd', ''),
('Md. Aktarul', 'Islam', '2022-04-02', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sa', '1122', ' 1122', ''),
('Md. Aktarul', 'Islam', '2022-03-31', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'nion', '123', ' 123', ''),
('Md. Mehedi', 'Hasan', '2022-04-13', 'Male', 'Islam', 'Chapainawabganj', '01791949535', 'mahadi.nion@gmail.com', 'nion12', '123', ' 123', ''),
('Md. Aktarul', 'Islam', '2022-03-29', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sonyl', '10', ' 10', ''),
('Md. Aktarul', 'Islam', '2022-04-15', 'Male', 'Islam', 'Chapainawabganj', '01786193272', 'sonylab97@gmail.com', 'sony_', '11', ' 11', 'sonylab97@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `doctorsinfo`
--
ALTER TABLE `doctorsinfo`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`EmpID`);

--
-- Indexes for table `examinfo`
--
ALTER TABLE `examinfo`
  ADD PRIMARY KEY (`ItemID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
