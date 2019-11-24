-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 24, 2019 at 06:25 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.3.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `rsvp`
--

-- --------------------------------------------------------

--
-- Table structure for table `eventdetails`
--

CREATE TABLE `eventdetails` (
  `TemplateId` int(11) NOT NULL,
  `HostId` int(11) NOT NULL,
  `EventId` int(11) NOT NULL,
  `EventName` varchar(50) DEFAULT NULL,
  `EventVenue` varchar(50) DEFAULT NULL,
  `EventAttire` varchar(50) DEFAULT NULL,
  `EventDescription` varchar(50) DEFAULT NULL,
  `EventStart` date NOT NULL,
  `EventEnd` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `eventgallery`
--

CREATE TABLE `eventgallery` (
  `EventId` int(11) DEFAULT NULL,
  `EventGallery` int(11) NOT NULL,
  `FileName` varchar(50) DEFAULT NULL,
  `Photos` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `primaryguestlist`
--

CREATE TABLE `primaryguestlist` (
  `EventId` int(11) DEFAULT NULL,
  `GuestId` int(11) NOT NULL,
  `GuestFirstName` varchar(50) DEFAULT NULL,
  `GuestLastName` varchar(50) DEFAULT NULL,
  `GuestResponse` tinyint(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `registeredhost`
--

CREATE TABLE `registeredhost` (
  `HostId` int(11) NOT NULL,
  `UserName` varchar(50) DEFAULT NULL,
  `FirstName` varchar(50) DEFAULT NULL,
  `MiddleName` varchar(50) DEFAULT NULL,
  `LastName` varchar(50) DEFAULT NULL,
  `Dates` datetime DEFAULT NULL,
  `EmailAddress` varchar(50) DEFAULT NULL,
  `Passwords` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registeredhost`
--

INSERT INTO `registeredhost` (`HostId`, `UserName`, `FirstName`, `MiddleName`, `LastName`, `Dates`, `EmailAddress`, `Passwords`) VALUES
(19, 'den', 'Denmark', 'V', 'Romo', '0000-00-00 00:00:00', 'example@example.com', '$2y$10$GIXRS4.aRn5sdlqxsFqiiOePmysqVO8OsHeXRD4R9b2IpwK5M6d16');

-- --------------------------------------------------------

--
-- Table structure for table `secondaryguestlist`
--

CREATE TABLE `secondaryguestlist` (
  `GuestId` int(11) DEFAULT NULL,
  `SecGuestId` int(11) NOT NULL,
  `SecGuestFirstName` varchar(50) DEFAULT NULL,
  `SecLastName` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `selecttemplate`
--

CREATE TABLE `selecttemplate` (
  `TemplateName` varchar(50) DEFAULT NULL,
  `TemplateId` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `sendmessage`
--

CREATE TABLE `sendmessage` (
  `EventId` int(11) DEFAULT NULL,
  `GuestId` int(11) DEFAULT NULL,
  `MessageId` int(11) NOT NULL,
  `MessageDetails` varchar(5000) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD PRIMARY KEY (`EventId`),
  ADD KEY `pk_HostId` (`HostId`),
  ADD KEY `pk_TemplateId` (`TemplateId`);

--
-- Indexes for table `eventgallery`
--
ALTER TABLE `eventgallery`
  ADD PRIMARY KEY (`EventGallery`),
  ADD KEY `pk_EventId` (`EventId`);

--
-- Indexes for table `primaryguestlist`
--
ALTER TABLE `primaryguestlist`
  ADD PRIMARY KEY (`GuestId`),
  ADD KEY `pg_EventId` (`EventId`);

--
-- Indexes for table `registeredhost`
--
ALTER TABLE `registeredhost`
  ADD PRIMARY KEY (`HostId`);

--
-- Indexes for table `secondaryguestlist`
--
ALTER TABLE `secondaryguestlist`
  ADD PRIMARY KEY (`SecGuestId`),
  ADD KEY `sg_GuestId` (`GuestId`);

--
-- Indexes for table `selecttemplate`
--
ALTER TABLE `selecttemplate`
  ADD PRIMARY KEY (`TemplateId`);

--
-- Indexes for table `sendmessage`
--
ALTER TABLE `sendmessage`
  ADD PRIMARY KEY (`MessageId`),
  ADD KEY `sm_EventId` (`EventId`),
  ADD KEY `GuestId` (`GuestId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `eventdetails`
--
ALTER TABLE `eventdetails`
  MODIFY `EventId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `eventgallery`
--
ALTER TABLE `eventgallery`
  MODIFY `EventGallery` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `primaryguestlist`
--
ALTER TABLE `primaryguestlist`
  MODIFY `GuestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `registeredhost`
--
ALTER TABLE `registeredhost`
  MODIFY `HostId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `secondaryguestlist`
--
ALTER TABLE `secondaryguestlist`
  MODIFY `SecGuestId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `selecttemplate`
--
ALTER TABLE `selecttemplate`
  MODIFY `TemplateId` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `sendmessage`
--
ALTER TABLE `sendmessage`
  MODIFY `MessageId` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `eventdetails`
--
ALTER TABLE `eventdetails`
  ADD CONSTRAINT `pk_HostId` FOREIGN KEY (`HostId`) REFERENCES `registeredhost` (`HostId`),
  ADD CONSTRAINT `pk_TemplateId` FOREIGN KEY (`TemplateId`) REFERENCES `selecttemplate` (`TemplateId`);

--
-- Constraints for table `eventgallery`
--
ALTER TABLE `eventgallery`
  ADD CONSTRAINT `pk_EventId` FOREIGN KEY (`EventId`) REFERENCES `eventdetails` (`EventId`);

--
-- Constraints for table `primaryguestlist`
--
ALTER TABLE `primaryguestlist`
  ADD CONSTRAINT `pg_EventId` FOREIGN KEY (`EventId`) REFERENCES `eventdetails` (`EventId`);

--
-- Constraints for table `secondaryguestlist`
--
ALTER TABLE `secondaryguestlist`
  ADD CONSTRAINT `sg_GuestId` FOREIGN KEY (`GuestId`) REFERENCES `primaryguestlist` (`GuestId`);

--
-- Constraints for table `sendmessage`
--
ALTER TABLE `sendmessage`
  ADD CONSTRAINT `sendmessage_ibfk_1` FOREIGN KEY (`GuestId`) REFERENCES `primaryguestlist` (`GuestId`) ON UPDATE CASCADE,
  ADD CONSTRAINT `sm_EventId` FOREIGN KEY (`EventId`) REFERENCES `eventdetails` (`EventId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
