-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2022 at 06:14 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.0.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `audit`
--

-- --------------------------------------------------------

--
-- Table structure for table `audit_main1`
--

CREATE TABLE `audit_main1` (
  `AuditorID` mediumtext NOT NULL,
  `AuditType` mediumtext NOT NULL,
  `AuditDate` date NOT NULL,
  `StoreName` mediumtext NOT NULL,
  `StoreOpTime` datetime NOT NULL,
  `StoreOpImg` blob NOT NULL,
  `ScanningStartTime` datetime NOT NULL,
  `ScanningEndTime` datetime NOT NULL,
  `BackroomEndTime` datetime NOT NULL,
  `UntagGarmentQty` decimal(10,0) NOT NULL,
  `UnscanGarmentQty` decimal(10,0) NOT NULL,
  `ObservationImg` blob NOT NULL,
  `ObservationText` mediumtext NOT NULL,
  `Annexture1` blob NOT NULL,
  `Annexture2` blob NOT NULL,
  `Annexture3` blob NOT NULL,
  `Annexture4` blob NOT NULL,
  `Annexture5` blob NOT NULL,
  `Annexture6` blob NOT NULL,
  `Annexture7` blob NOT NULL,
  `Annexture8` blob NOT NULL,
  `Annexture9` blob NOT NULL,
  `Annexture10` blob NOT NULL,
  `Declaration` blob NOT NULL,
  `DeclarationText` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `audit_main1`
--

INSERT INTO `audit_main1` (`AuditorID`, `AuditType`, `AuditDate`, `StoreName`, `StoreOpTime`, `StoreOpImg`, `ScanningStartTime`, `ScanningEndTime`, `BackroomEndTime`, `UntagGarmentQty`, `UnscanGarmentQty`, `ObservationImg`, `ObservationText`, `Annexture1`, `Annexture2`, `Annexture3`, `Annexture4`, `Annexture5`, `Annexture6`, `Annexture7`, `Annexture8`, `Annexture9`, `Annexture10`, `Declaration`, `DeclarationText`) VALUES
('HB3333', 'Cash', '2022-07-14', 'FCJ Bandra', '2022-07-14 21:34:00', 0x35346262643566652d303061362d343639372d613631632d3061346237393762616538312e6a7067, '2022-07-14 21:36:00', '2022-07-14 21:37:00', '2022-07-14 21:38:00', '20', '30', 0x3131312e6a7067, 'Good', '', '', '', '', '', '', '', '', '', '', 0x323330342e6a7067, 'Niceeee'),
('HB2222', 'Statutory Compliance', '2022-07-16', 'Allen Solly', '2022-07-14 21:44:00', 0x31312e706e67, '2022-07-14 21:44:00', '2022-07-14 21:45:00', '2022-07-14 21:46:00', '33', '44', 0x3131312e6a7067, 'Gggg', 0x434e312e6a7067, '', '', '', '', '', '', '', '', '', 0x737368322d76732d737368312d6c2e6a7067, 'Nnnnn');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
