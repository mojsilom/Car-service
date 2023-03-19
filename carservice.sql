-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 06, 2022 at 04:20 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `carservice`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `CustomerID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `Phone` varchar(16) NOT NULL,
  `Address` varchar(32) NOT NULL,
  `Email` varchar(64) NOT NULL,
  `Notify` tinyint(1) NOT NULL,
  PRIMARY KEY (`CustomerID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`CustomerID`, `FirstName`, `LastName`, `Phone`, `Address`, `Email`, `Notify`) VALUES
(1, 'Milos', 'Milosevic', '066123456', 'Spasovdanska 22', 'milosmilosevic@gmail.com', 0),
(2, 'Vasilije', 'Cabarkapa', '065443567', 'Visegradska 10', 'vascab@gmail.com', 1),
(3, 'Miljan', 'Bodiroga', '066781232', 'Focanska 10', 'miljanbodiroga@gmail.com', 0),
(4, 'Miljan', 'Bodiroga', '066781232', 'Focanska 10', 'miljanbodiroga99@gmail.com', 1),
(5, 'Marko', 'Mojsilovic', '066542864', 'Besarovica 49', 'maceigrice@gmail.com', 0),
(6, 'Nikola', 'Tesanovic', '065123325', 'Nikole Tesle 250', 'nikolatesanovic@gmail.com', 1),
(7, 'Miljan', 'Bodiroga', '057375555', 'Focanska 10', 'miljanbodiroga99@gmail.com', 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `FirstName` varchar(32) NOT NULL,
  `LastName` varchar(32) NOT NULL,
  `UserName` varchar(32) NOT NULL,
  `PasswordHash` varchar(64) NOT NULL,
  `Type` enum('Mechanic','Clerk') NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `FirstName`, `LastName`, `UserName`, `PasswordHash`, `Type`) VALUES
(1, 'Marko', 'Markovic', 'mmarkovic', 'c3552d88acaa2e2bb70291175f7e0328', 'Mechanic'),
(2, 'Pero', 'Peric', 'pperic', 'f687d79fcd226e3480cf2f34c95a1bb3', 'Clerk'),
(3, 'Janko', 'Jankovic', 'jjankovic', '71b1cdc4512814b72dec7b64762027b8', 'Mechanic');

-- --------------------------------------------------------

--
-- Table structure for table `vehicle`
--

DROP TABLE IF EXISTS `vehicle`;
CREATE TABLE IF NOT EXISTS `vehicle` (
  `VehicleID` int(11) NOT NULL AUTO_INCREMENT,
  `Manufacturer` varchar(32) NOT NULL,
  `Model` varchar(32) NOT NULL,
  `Year` int(11) NOT NULL,
  `Fuel` varchar(32) NOT NULL,
  `EnginePower` double NOT NULL,
  `Mileage` varchar(32) NOT NULL,
  `ChassisNumber` varchar(32) NOT NULL,
  `Description` text NOT NULL,
  `FK_CustomerID` int(11) NOT NULL,
  `DateAndTime` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `Status` enum('New','In progress','Completed','Discharged') NOT NULL,
  `MechanicID` int(11) DEFAULT NULL,
  `DateAndTimeCompleted` timestamp NULL DEFAULT NULL,
  `MechanicComment` text,
  `ClerkComment` text,
  `Price` double DEFAULT NULL,
  `DateAndTimeDischarged` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`VehicleID`),
  KEY `FK_Cust` (`FK_CustomerID`),
  KEY `FK_MechanicID` (`MechanicID`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `vehicle`
--

INSERT INTO `vehicle` (`VehicleID`, `Manufacturer`, `Model`, `Year`, `Fuel`, `EnginePower`, `Mileage`, `ChassisNumber`, `Description`, `FK_CustomerID`, `DateAndTime`, `Status`, `MechanicID`, `DateAndTimeCompleted`, `MechanicComment`, `ClerkComment`, `Price`, `DateAndTimeDischarged`) VALUES
(1, 'BMW', 'M30', 1990, 'Petrol', 135, '50000km', '1M8GDM9AKP042788', 'Potrebno je odraditi mali servis na vozilu.', 1, '2022-03-14 09:30:17', 'Discharged', 1, '2022-03-30 16:57:24', 'Mali servis na vozilu odradjen. Problem je bio sa filterom ulja u motoru. Potrebno ga je bilo zamijeniti.', 'Kupac je zadovoljan.', 250, '2022-04-06 13:54:09'),
(2, 'Renault', 'Megan', 2012, 'Petrol', 180, '175000', 'GHLERTE123DFGR54M', 'Kvar motora.', 2, '2022-03-29 07:58:01', 'Discharged', 3, '2022-04-06 15:42:50', 'Motor je bio sav od rdje, potrebno je bilo zamijeniti citav motor.', 'Kupac je zadovoljan odradjenim.', 850, '2022-04-06 16:00:28'),
(3, 'Golf', '5', 2004, 'Diesel', 150, '288000', 'JKLEPRT231FMS400K', 'Problem sa alternatorom.', 3, '2022-03-29 07:58:57', 'Discharged', 1, '2022-04-06 13:44:39', 'Kupljen je polovan alternator. Pojavio se i problem sa akumulatorom.', 'Kupac je nezadovoljan, trazio je nov alternator.', 250, '2022-04-06 16:13:40'),
(4, 'Golf', '5', 2004, 'Diesel', 150, '300000', 'JKLEPRT231FMS400K', 'Srediti limariju na vozacevim vratima.', 4, '2022-03-30 15:29:21', 'Discharged', 3, '2022-04-01 16:31:56', 'Limarija na vratima je ispravljena i ofarbana.', 'Vozilo preuzeto. Kupac zadovoljan i prijatan.', 330, '2022-04-06 13:52:39'),
(5, 'Skoda', 'Fabia', 2004, 'Petrol', 140, '167843', 'TYODE34MNG-945MGS', 'Potrebno je zamijeniti limariju sa prednje strane.', 5, '2022-03-30 17:15:44', 'Discharged', 1, '2022-04-02 15:37:20', 'Limarija je zamijenjena i ofarbana u boji auta.', 'Kupac zadovoljan.', 255, '2022-04-06 13:49:28'),
(6, 'Audi', 'A3', 2010, 'Petrol', 150, '123350', 'GHRJ1425MFLAPFMGT', 'Mali servis.', 6, '2022-04-06 16:16:31', 'New', NULL, NULL, NULL, NULL, NULL, NULL),
(7, 'Golf', '5', 2004, 'Diesel', 150, '310000', 'JKLEPRT231FMS400K', 'Reklamacija alternatora.', 7, '2022-04-06 16:18:39', 'New', NULL, NULL, NULL, NULL, NULL, NULL);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
