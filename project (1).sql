-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 23, 2024 at 11:29 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `alsoqualifiedteamsplay`
--

CREATE TABLE `alsoqualifiedteamsplay` (
  `ContestID` int(11) NOT NULL,
  `OnlineContestID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `alsoqualifiedteamsplay`
--

INSERT INTO `alsoqualifiedteamsplay` (`ContestID`, `OnlineContestID`) VALUES
(1, 1),
(2, 2),
(2, 3),
(3, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `coach`
--

CREATE TABLE `coach` (
  `CoachID` int(11) NOT NULL,
  `CoachName` varchar(255) DEFAULT NULL,
  `TeamID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `coach`
--

INSERT INTO `coach` (`CoachID`, `CoachName`, `TeamID`) VALUES
(1, 'Manoj', NULL),
(2, 'kn ,', NULL),
(3, 'ghkghgjc', NULL),
(4, 'ghkghgjc', NULL),
(5, 'ghkghgjc', NULL),
(6, 'cbnm', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enters`
--

CREATE TABLE `enters` (
  `OnlineContestID` int(11) NOT NULL,
  `TeamID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enters`
--

INSERT INTO `enters` (`OnlineContestID`, `TeamID`) VALUES
(1, 1),
(1, 2),
(2, 3),
(3, 4),
(4, 5);

-- --------------------------------------------------------

--
-- Table structure for table `halloffame`
--

CREATE TABLE `halloffame` (
  `HallofameID` int(11) NOT NULL,
  `Rank` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `halloffame`
--

INSERT INTO `halloffame` (`HallofameID`, `Rank`) VALUES
(1, 10),
(2, 15),
(3, 5),
(4, 8),
(5, 12),
(6, 5),
(7, 23),
(8, 55),
(9, 100);

-- --------------------------------------------------------

--
-- Table structure for table `online_contest`
--

CREATE TABLE `online_contest` (
  `OnlineContestID` int(11) NOT NULL,
  `ContestName` varchar(255) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `online_contest`
--

INSERT INTO `online_contest` (`OnlineContestID`, `ContestName`, `StartDateTime`, `EndDateTime`, `marks`) VALUES
(1, 'Contest A', '2023-11-01 09:00:00', '2023-11-01 12:00:00', 29),
(2, 'Contest B', '2023-11-02 10:00:00', '2023-11-02 13:00:00', NULL),
(3, 'Contest C', '2023-11-03 11:00:00', '2023-11-03 14:00:00', NULL),
(4, 'Contest D', '2023-11-04 12:00:00', '2023-11-04 15:00:00', NULL),
(5, 'Contest E', '2023-11-05 13:00:00', '2023-11-05 16:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `onsitecontest`
--

CREATE TABLE `onsitecontest` (
  `ContestID` int(11) NOT NULL,
  `ContestName` varchar(255) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `onsitecontest`
--

INSERT INTO `onsitecontest` (`ContestID`, `ContestName`, `StartDateTime`, `EndDateTime`, `Location`, `marks`) VALUES
(1, 'Contest 1', '2023-11-10 09:00:00', '2023-11-10 12:00:00', 'New York', 30),
(2, 'Contest 2', '2023-11-11 10:00:00', '2023-11-11 13:00:00', 'London', NULL),
(3, 'Contest 3', '2023-11-12 11:00:00', '2023-11-12 14:00:00', 'Tokyo', NULL),
(4, 'Contest 4', '2023-11-13 12:00:00', '2023-11-13 15:00:00', 'Sydney', 27),
(5, 'Contest 5', '2023-11-14 13:00:00', '2023-11-14 16:00:00', 'Berlin', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `ParticipantID` int(11) NOT NULL,
  `ParticipantName` varchar(255) DEFAULT NULL,
  `TeamID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`ParticipantID`, `ParticipantName`, `TeamID`) VALUES
(1, 'Shyam', 1),
(2, 'Pranav', 1),
(3, 'Janga', 1),
(4, 'Shyam Kolisetty', 2),
(5, 'Kolisetty', 2),
(6, 'Shyam ', 2),
(7, 'Shyam Kolisetty', 3),
(8, ' Kolisetty', 3),
(9, 'Shyam ', 3),
(10, 'Shyam Kolisetty', 4),
(11, ' Kolisetty', 4),
(12, 'Shyam ', 4),
(13, 'Shyam Kolisetty', 5),
(14, 'Shyam Kolisetty', 5),
(15, 'Shyam Kolisetty', 5),
(16, 'Shyam Kolisetty', 6),
(17, 'Shyam Kolisetty', 6),
(18, 'Shyam Kolisetty', 6);

-- --------------------------------------------------------

--
-- Table structure for table `pdf_files`
--

CREATE TABLE `pdf_files` (
  `id` int(11) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL,
  `file_data` longblob DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `qualifiedteamsplay`
--

CREATE TABLE `qualifiedteamsplay` (
  `WorldfinalsID` int(11) NOT NULL,
  `ContestID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `qualifiedteamsplay`
--

INSERT INTO `qualifiedteamsplay` (`WorldfinalsID`, `ContestID`) VALUES
(1, 1),
(1, 2),
(2, 2),
(3, 3),
(4, 4);

-- --------------------------------------------------------

--
-- Table structure for table `registereddata`
--

CREATE TABLE `registereddata` (
  `id` int(11) NOT NULL,
  `name1` varchar(50) NOT NULL,
  `name2` varchar(50) NOT NULL,
  `name3` varchar(50) NOT NULL,
  `mobile_number` varchar(15) NOT NULL,
  `password` varchar(50) NOT NULL,
  `team_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `coach` varchar(50) NOT NULL,
  `country` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registereddata`
--

INSERT INTO `registereddata` (`id`, `name1`, `name2`, `name3`, `mobile_number`, `password`, `team_name`, `email`, `coach`, `country`) VALUES
(1, 'Shyam', 'Pranav', 'Janga', '8712282181', 'ttt', 'Pranav Weakers', 'shyamkolisetty@gmail.com', 'Manoj', 'India'),
(18, 'Shyam Kolisetty', 'Kolisetty', 'Shyam ', '8712282181', '12345', 'thala for a reason', 'kundubhaskar39@gmail.com', 'kn ,', 'India'),
(19, 'Shyam Kolisetty', ' Kolisetty', 'Shyam ', '8712282181', 'kkk', 'iii', 'shyamkolisetty@gmail.com', 'ghkghgjc', 'India'),
(20, 'Shyam Kolisetty', ' Kolisetty', 'Shyam ', '8712282181', 'kkk', 'iii', 'shyamkolisetty@gmail.com', 'ghkghgjc', 'India'),
(21, 'Shyam Kolisetty', 'Shyam Kolisetty', 'Shyam Kolisetty', '8712282181', 'kkk', 'iii', 'shyamkolisetty@gmail.com', 'ghkghgjc', 'India'),
(22, 'Shyam Kolisetty', 'Shyam Kolisetty', 'Shyam Kolisetty', '8712282181', 'kkk', 'iii', 'shyamkolisetty@gmail.com', 'cbnm', 'Russia');

-- --------------------------------------------------------

--
-- Table structure for table `results`
--

CREATE TABLE `results` (
  `ResultID` int(11) NOT NULL,
  `Score` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `results`
--

INSERT INTO `results` (`ResultID`, `Score`) VALUES
(1, 95),
(2, 88),
(3, 75),
(4, 92),
(5, 80);

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `TeamID` int(11) NOT NULL,
  `TeamName` varchar(255) DEFAULT NULL,
  `Country` varchar(255) DEFAULT NULL,
  `HallofFameID` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`TeamID`, `TeamName`, `Country`, `HallofFameID`) VALUES
(1, 'Team Alpha', 'USA', 1),
(2, 'Team Beta', 'Canada', 2),
(3, 'Team Gamma', 'UK', 3),
(4, 'Team Delta', 'Australia', 4),
(5, 'Team Epsilon', 'Germany', 5),
(6, 'Team kutharampp', 'INDIA', 6),
(7, 'Team acheivers', 'India', 7),
(8, 'Team ', 'India', 8),
(9, 'Team lapaki', 'India', 9);

-- --------------------------------------------------------

--
-- Table structure for table `worldfinals`
--

CREATE TABLE `worldfinals` (
  `WorldfinalsID` int(11) NOT NULL,
  `Location` varchar(255) DEFAULT NULL,
  `StartDateTime` datetime DEFAULT NULL,
  `EndDateTime` datetime DEFAULT NULL,
  `HallofFameID` int(11) DEFAULT NULL,
  `marks` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `worldfinals`
--

INSERT INTO `worldfinals` (`WorldfinalsID`, `Location`, `StartDateTime`, `EndDateTime`, `HallofFameID`, `marks`) VALUES
(1, 'New York', '2023-11-10 09:00:00', '2023-11-12 12:00:00', 1, NULL),
(2, 'London', '2023-11-15 10:00:00', '2023-11-17 13:00:00', 2, NULL),
(3, 'Tokyo', '2023-11-20 11:00:00', '2023-11-22 14:00:00', 3, NULL),
(4, 'Sydney', '2023-11-25 12:00:00', '2023-11-27 15:00:00', 4, NULL),
(5, 'Berlin', '2023-11-30 13:00:00', '2023-12-02 16:00:00', 5, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alsoqualifiedteamsplay`
--
ALTER TABLE `alsoqualifiedteamsplay`
  ADD PRIMARY KEY (`ContestID`,`OnlineContestID`),
  ADD KEY `OnlineContestID` (`OnlineContestID`);

--
-- Indexes for table `coach`
--
ALTER TABLE `coach`
  ADD PRIMARY KEY (`CoachID`),
  ADD KEY `TeamID` (`TeamID`);

--
-- Indexes for table `enters`
--
ALTER TABLE `enters`
  ADD PRIMARY KEY (`OnlineContestID`,`TeamID`),
  ADD KEY `TeamID` (`TeamID`);

--
-- Indexes for table `halloffame`
--
ALTER TABLE `halloffame`
  ADD PRIMARY KEY (`HallofameID`);

--
-- Indexes for table `online_contest`
--
ALTER TABLE `online_contest`
  ADD PRIMARY KEY (`OnlineContestID`);

--
-- Indexes for table `onsitecontest`
--
ALTER TABLE `onsitecontest`
  ADD PRIMARY KEY (`ContestID`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`ParticipantID`);

--
-- Indexes for table `pdf_files`
--
ALTER TABLE `pdf_files`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qualifiedteamsplay`
--
ALTER TABLE `qualifiedteamsplay`
  ADD PRIMARY KEY (`WorldfinalsID`,`ContestID`),
  ADD KEY `ContestID` (`ContestID`);

--
-- Indexes for table `registereddata`
--
ALTER TABLE `registereddata`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `results`
--
ALTER TABLE `results`
  ADD PRIMARY KEY (`ResultID`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`TeamID`),
  ADD KEY `HallofFameID` (`HallofFameID`);

--
-- Indexes for table `worldfinals`
--
ALTER TABLE `worldfinals`
  ADD PRIMARY KEY (`WorldfinalsID`),
  ADD KEY `HallofFameID` (`HallofFameID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `coach`
--
ALTER TABLE `coach`
  MODIFY `CoachID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `participant`
--
ALTER TABLE `participant`
  MODIFY `ParticipantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pdf_files`
--
ALTER TABLE `pdf_files`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registereddata`
--
ALTER TABLE `registereddata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alsoqualifiedteamsplay`
--
ALTER TABLE `alsoqualifiedteamsplay`
  ADD CONSTRAINT `alsoqualifiedteamsplay_ibfk_1` FOREIGN KEY (`ContestID`) REFERENCES `onsitecontest` (`ContestID`),
  ADD CONSTRAINT `alsoqualifiedteamsplay_ibfk_2` FOREIGN KEY (`OnlineContestID`) REFERENCES `online_contest` (`OnlineContestID`);

--
-- Constraints for table `coach`
--
ALTER TABLE `coach`
  ADD CONSTRAINT `coach_ibfk_1` FOREIGN KEY (`TeamID`) REFERENCES `team` (`TeamID`);

--
-- Constraints for table `enters`
--
ALTER TABLE `enters`
  ADD CONSTRAINT `enters_ibfk_1` FOREIGN KEY (`OnlineContestID`) REFERENCES `online_contest` (`OnlineContestID`),
  ADD CONSTRAINT `enters_ibfk_2` FOREIGN KEY (`TeamID`) REFERENCES `team` (`TeamID`);

--
-- Constraints for table `qualifiedteamsplay`
--
ALTER TABLE `qualifiedteamsplay`
  ADD CONSTRAINT `qualifiedteamsplay_ibfk_1` FOREIGN KEY (`WorldfinalsID`) REFERENCES `worldfinals` (`WorldfinalsID`),
  ADD CONSTRAINT `qualifiedteamsplay_ibfk_2` FOREIGN KEY (`ContestID`) REFERENCES `onsitecontest` (`ContestID`);

--
-- Constraints for table `team`
--
ALTER TABLE `team`
  ADD CONSTRAINT `team_ibfk_1` FOREIGN KEY (`HallofFameID`) REFERENCES `halloffame` (`HallofameID`);

--
-- Constraints for table `worldfinals`
--
ALTER TABLE `worldfinals`
  ADD CONSTRAINT `worldfinals_ibfk_1` FOREIGN KEY (`HallofFameID`) REFERENCES `halloffame` (`HallofameID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
