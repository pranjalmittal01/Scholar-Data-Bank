-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 20, 2023 at 07:34 AM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `student_data`
--

CREATE TABLE `student_data` (
  `ID` int(11) NOT NULL,
  `FullName` varchar(100) COLLATE latin1_general_cs NOT NULL,
  `City` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `StudentContact` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `AlternateNumber` int(15) NOT NULL,
  `School` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `Gender` varchar(10) COLLATE latin1_general_cs NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `Course` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `Branch` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `Category` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `State` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `FatherName` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `FatherEmail` varchar(50) COLLATE latin1_general_cs NOT NULL,
  `FatherContact` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `FatherOccu` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `MotherName` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `MotherContact` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `LocalAdd` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `PermanentAdd` varchar(40) COLLATE latin1_general_cs NOT NULL,
  `AdmissionYear` year(4) NOT NULL,
  `AdmissionDate` date NOT NULL,
  `AdmissionCategory` varchar(20) COLLATE latin1_general_cs NOT NULL,
  `TotalFee` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `BusFee` varchar(30) COLLATE latin1_general_cs NOT NULL,
  `10THMarksheet` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `12THMarksheet` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `AadharCard` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `PanCard` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `CasteCertificate` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `IncomeCertificate` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `TC` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `Migration` varchar(200) COLLATE latin1_general_cs NOT NULL,
  `Photo` varchar(200) COLLATE latin1_general_cs NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_general_cs;

--
-- Dumping data for table `student_data`
--

INSERT INTO `student_data` (`ID`, `FullName`, `City`, `StudentContact`, `AlternateNumber`, `School`, `Gender`, `DOB`, `Email`, `Course`, `Branch`, `Category`, `State`, `FatherName`, `FatherEmail`, `FatherContact`, `FatherOccu`, `MotherName`, `MotherContact`, `LocalAdd`, `PermanentAdd`, `AdmissionYear`, `AdmissionDate`, `AdmissionCategory`, `TotalFee`, `BusFee`, `10THMarksheet`, `12THMarksheet`, `AadharCard`, `PanCard`, `CasteCertificate`, `IncomeCertificate`, `TC`, `Migration`, `Photo`) VALUES
(22, 'iuorgf', 'morena ', '1234567895', 0, 'jgyfhik', 'Male', '2002-11-11', 'pqr@gmail.com', 'B.Tech', 'CSE', 'General', 'MP', 'ewjkkjg', 'pqr@gmail.com', '21345678990', 'yuykdcfjv,h', 'hjyfiy', '1234567878', 'futkfcyktc ', 'jkfhsdkgfhgd', 2023, '2023-11-11', 'REGULAR', '100000', '20000', '', '', '', '', '', '', '', '', 'Photo/u.jpg'),
(23, 'anuj', 'joura', '1234567890', 0, 'ksfjgvkdfahbfda', 'Male', '2004-12-18', 'pqr@gmail.com', 'B.Tech', 'CSE', 'General', 'MP', 'adsfjlksd', 'abc@gmail.com', '1234567890', 'jlhdafsugvdsbjf', 'dskavgdakfjv', 'sdajgviadafkjvdafav', '23 jhvdfsagkewjfg', 'nmsnadmbchbsalv', 2023, '2023-02-02', 'REGULAR', '100000', '30000', '10thMarksheet/anuj.pdf', '12thMarksheet/choice.pdf', 'AadharCard/choice_umang.pdf', 'PanCard/umag.pdf', 'Caste/anuj.pdf', 'Income/choice.pdf', 'TC/choice_umang.pdf', 'Migration/umag.pdf', 'Photo/aph.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_data`
--
ALTER TABLE `student_data`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_data`
--
ALTER TABLE `student_data`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
