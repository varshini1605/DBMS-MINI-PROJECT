-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2020 at 12:18 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.1.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `college event`
--

DELIMITER $$
--
-- Procedures
--
CREATE DEFINER=`root`@`localhost` PROCEDURE `count` (IN `Total` INT)  NO SQL
SELECT count(*) FROM event WHERE event.EVENT_CODE$$

DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `coordinator`
--

CREATE TABLE `coordinator` (
  `Coordinator_name` varchar(20) NOT NULL,
  `Coordinator_usn` varchar(20) NOT NULL,
  `Phone_no` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `coordinator`
--

INSERT INTO `coordinator` (`Coordinator_name`, `Coordinator_usn`, `Phone_no`) VALUES
('Disha', '1CG17CS001', 990027433),
('Bhavana', '1SI17CS002', 965874236);

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `Event_name` varchar(20) NOT NULL,
  `EVENT_CODE` varchar(20) NOT NULL,
  `Date` date DEFAULT NULL,
  `Time` time DEFAULT NULL,
  `University_code` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`Event_name`, `EVENT_CODE`, `Date`, `Time`, `University_code`) VALUES
('Quiz', '100', '2019-12-04', '10:30:00', 'cit123'),
('Hackthon', '200', '2019-12-05', '09:00:00', 'sit123'),
('fest', '300', '2019-12-05', '11:00:00', 'cit123'),
('quiz1', '500', '2019-12-26', '11:00:00', 'vtu500');

-- --------------------------------------------------------

--
-- Table structure for table `event_head`
--

CREATE TABLE `event_head` (
  `Eventhead_name` varchar(100) NOT NULL,
  `Eventhead_code` varchar(100) NOT NULL,
  `Eventhead_phno` int(20) DEFAULT NULL,
  `Coordinator_usn` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `event_head`
--

INSERT INTO `event_head` (`Eventhead_name`, `Eventhead_code`, `Eventhead_phno`, `Coordinator_usn`) VALUES
('Chetan Balaji', 'CB001', 888476654, '1CG17CS001'),
('hemanth', 'hem105', 541236547, '17cs106'),
('Jyothi', 'JK002', 725950843, '1SI17CS002');

-- --------------------------------------------------------

--
-- Table structure for table `participant`
--

CREATE TABLE `participant` (
  `Student_Name` varchar(100) NOT NULL,
  `USN` varchar(100) NOT NULL,
  `STUDENT_UNIVERSITY` varchar(20) DEFAULT NULL,
  `PHONE_NO` int(11) DEFAULT NULL,
  `EVENT_CODE` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant`
--

INSERT INTO `participant` (`Student_Name`, `USN`, `STUDENT_UNIVERSITY`, `PHONE_NO`, `EVENT_CODE`) VALUES
('Bhavana', '1cg17cs013', 'CIT', 965874123, '100'),
('Supriya', '1cg17cs103', 'SIT', 965214789, '200');

--
-- Triggers `participant`
--
DELIMITER $$
CREATE TRIGGER `Backup` AFTER INSERT ON `participant` FOR EACH ROW BEGIN
INSERT INTO participant_backup
VALUES(new.Student_Name,new.USN,new.STUDENT_UNIVERSITY,new.PHONE_NO,new.EVENT_CODE);
END
$$
DELIMITER ;

-- --------------------------------------------------------

--
-- Table structure for table `participant_backup`
--

CREATE TABLE `participant_backup` (
  `Student_Name` varchar(255) NOT NULL,
  `USN` varchar(255) NOT NULL,
  `STUDENT_UNIVERSITY` varchar(255) NOT NULL,
  `PHONE_NO` varchar(255) NOT NULL,
  `EVENT_CODE` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `participant_backup`
--

INSERT INTO `participant_backup` (`Student_Name`, `USN`, `STUDENT_UNIVERSITY`, `PHONE_NO`, `EVENT_CODE`) VALUES
('supriya', '1cs17cs103', 'sit', '968547123', 200),
('Supriya', '1cg17cs103', 'SIT', '965214789', 200),
('Varsha', '1cg17is040', 'CIT', '884756321', 200),
('', '656', '', '0', 100),
('', '665', '', '0', 100),
('ijljkj', '6454', 'jkjk', '546666', 200),
('', '959jjk', '', '0', 0),
('', 'kjl6', '', '0', 200),
('', 'kjl6', '', '0', 200),
('', 'hh', '', '0', 0),
('', '', '', '0', 0),
('', '', '', '0', 0),
('kushi', '1234', 'sit', '55555', 100);

-- --------------------------------------------------------

--
-- Table structure for table `university`
--

CREATE TABLE `university` (
  `University_name` varchar(100) NOT NULL,
  `University_code` varchar(100) NOT NULL,
  `University_phno` int(11) DEFAULT NULL,
  `University_address` varchar(100) NOT NULL,
  `Eventhead_code` varchar(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `university`
--

INSERT INTO `university` (`University_name`, `University_code`, `University_phno`, `University_address`, `Eventhead_code`) VALUES
('CIT', 'cit123', 990027433, 'Tumkur', 'CB001'),
('SIT', 'sit123', 948140788, 'Tumkur', 'JK002'),
('vtu', 'vtu456', 985412368, 'tumkur', '500');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coordinator`
--
ALTER TABLE `coordinator`
  ADD PRIMARY KEY (`Coordinator_usn`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`EVENT_CODE`);

--
-- Indexes for table `event_head`
--
ALTER TABLE `event_head`
  ADD PRIMARY KEY (`Eventhead_code`);

--
-- Indexes for table `participant`
--
ALTER TABLE `participant`
  ADD PRIMARY KEY (`USN`);

--
-- Indexes for table `university`
--
ALTER TABLE `university`
  ADD PRIMARY KEY (`University_code`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
