-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2023 at 11:36 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `konnichiwoah`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE `article` (
  `ArticleID` int(11) NOT NULL,
  `Title` varchar(255) NOT NULL,
  `Body` text NOT NULL,
  `Author` varchar(255) NOT NULL,
  `Date` date NOT NULL,
  `Image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `certificateverification`
--

CREATE TABLE `certificateverification` (
  `VerifyID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `PhoneNumber` varchar(20) NOT NULL,
  `Gender` varchar(255) NOT NULL,
  `DOB` date NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Certificate` varchar(255) NOT NULL,
  `Verified` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `days`
--

CREATE TABLE `days` (
  `DaysID` int(11) NOT NULL,
  `TeacherID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `flashcard`
--

CREATE TABLE `flashcard` (
  `FlashcardID` int(11) NOT NULL,
  `JapanChars` varchar(255) NOT NULL,
  `Romaji` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `PaymentID` int(11) NOT NULL,
  `Evidance` varchar(20) NOT NULL,
  `Date` date NOT NULL,
  `Verified` tinyint(1) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `progressstep`
--

CREATE TABLE `progressstep` (
  `StudentID` int(11) DEFAULT NULL,
  `PageID` int(11) DEFAULT NULL,
  `Correct` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shift`
--

CREATE TABLE `shift` (
  `ShiftID` int(11) NOT NULL,
  `DaysID` int(11) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `TeacherID` int(11) DEFAULT NULL,
  `TimeStart` time NOT NULL,
  `TimeEnd` time NOT NULL,
  `Booked` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `step`
--

CREATE TABLE `step` (
  `StepID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `steppage`
--

CREATE TABLE `steppage` (
  `PageID` int(11) NOT NULL,
  `StepID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `StudentID` int(11) NOT NULL,
  `Subscribe` tinyint(1) DEFAULT NULL,
  `PointXP` int(11) DEFAULT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `subscribe`
--

CREATE TABLE `subscribe` (
  `SubscribeID` int(11) NOT NULL,
  `Accepted` tinyint(1) DEFAULT NULL,
  `Finished` tinyint(1) DEFAULT NULL,
  `StudentID` int(11) DEFAULT NULL,
  `TeacherID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `teacher`
--

CREATE TABLE `teacher` (
  `TeacherID` int(11) NOT NULL,
  `Description` text NOT NULL,
  `Fee` int(11) NOT NULL,
  `Certificate` varchar(20) NOT NULL,
  `UserID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `UserID` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `UserType` varchar(8) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `Password` varchar(10) NOT NULL,
  `PhoneNumber` varchar(14) DEFAULT NULL,
  `Gender` varchar(8) DEFAULT NULL,
  `DOB` date DEFAULT NULL,
  `Photo` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
  ADD PRIMARY KEY (`ArticleID`);

--
-- Indexes for table `certificateverification`
--
ALTER TABLE `certificateverification`
  ADD PRIMARY KEY (`VerifyID`);

--
-- Indexes for table `days`
--
ALTER TABLE `days`
  ADD PRIMARY KEY (`DaysID`),
  ADD KEY `TeacherID` (`TeacherID`);

--
-- Indexes for table `flashcard`
--
ALTER TABLE `flashcard`
  ADD PRIMARY KEY (`FlashcardID`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`PaymentID`),
  ADD KEY `StudentID` (`StudentID`);

--
-- Indexes for table `progressstep`
--
ALTER TABLE `progressstep`
  ADD KEY `FK_ProgressStep_StudentID` (`StudentID`),
  ADD KEY `FK_ProgressStep_PageID` (`PageID`);

--
-- Indexes for table `shift`
--
ALTER TABLE `shift`
  ADD PRIMARY KEY (`ShiftID`),
  ADD KEY `DaysID` (`DaysID`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `TeacherID` (`TeacherID`);

--
-- Indexes for table `step`
--
ALTER TABLE `step`
  ADD PRIMARY KEY (`StepID`);

--
-- Indexes for table `steppage`
--
ALTER TABLE `steppage`
  ADD PRIMARY KEY (`PageID`),
  ADD KEY `StepID` (`StepID`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`StudentID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD PRIMARY KEY (`SubscribeID`),
  ADD KEY `StudentID` (`StudentID`),
  ADD KEY `TeacherID` (`TeacherID`);

--
-- Indexes for table `teacher`
--
ALTER TABLE `teacher`
  ADD PRIMARY KEY (`TeacherID`),
  ADD KEY `UserID` (`UserID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `article`
--
ALTER TABLE `article`
  MODIFY `ArticleID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `certificateverification`
--
ALTER TABLE `certificateverification`
  MODIFY `VerifyID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `days`
--
ALTER TABLE `days`
  MODIFY `DaysID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `flashcard`
--
ALTER TABLE `flashcard`
  MODIFY `FlashcardID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `PaymentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shift`
--
ALTER TABLE `shift`
  MODIFY `ShiftID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `step`
--
ALTER TABLE `step`
  MODIFY `StepID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `steppage`
--
ALTER TABLE `steppage`
  MODIFY `PageID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `StudentID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subscribe`
--
ALTER TABLE `subscribe`
  MODIFY `SubscribeID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `teacher`
--
ALTER TABLE `teacher`
  MODIFY `TeacherID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `days`
--
ALTER TABLE `days`
  ADD CONSTRAINT `days_ibfk_1` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);

--
-- Constraints for table `progressstep`
--
ALTER TABLE `progressstep`
  ADD CONSTRAINT `FK_ProgressStep_PageID` FOREIGN KEY (`PageID`) REFERENCES `steppage` (`PageID`),
  ADD CONSTRAINT `FK_ProgressStep_StudentID` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`);

--
-- Constraints for table `shift`
--
ALTER TABLE `shift`
  ADD CONSTRAINT `shift_ibfk_1` FOREIGN KEY (`DaysID`) REFERENCES `days` (`DaysID`),
  ADD CONSTRAINT `shift_ibfk_2` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`),
  ADD CONSTRAINT `shift_ibfk_3` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`);

--
-- Constraints for table `steppage`
--
ALTER TABLE `steppage`
  ADD CONSTRAINT `steppage_ibfk_1` FOREIGN KEY (`StepID`) REFERENCES `step` (`StepID`);

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);

--
-- Constraints for table `subscribe`
--
ALTER TABLE `subscribe`
  ADD CONSTRAINT `subscribe_ibfk_1` FOREIGN KEY (`StudentID`) REFERENCES `student` (`StudentID`),
  ADD CONSTRAINT `subscribe_ibfk_2` FOREIGN KEY (`TeacherID`) REFERENCES `teacher` (`TeacherID`);

--
-- Constraints for table `teacher`
--
ALTER TABLE `teacher`
  ADD CONSTRAINT `teacher_ibfk_1` FOREIGN KEY (`UserID`) REFERENCES `user` (`UserID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
