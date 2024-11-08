-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 08, 2024 at 11:44 AM
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
-- Database: `car`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `adminID` int(50) NOT NULL,
  `adminuser` varchar(50) NOT NULL,
  `adminpass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminID`, `adminuser`, `adminpass`) VALUES
(1, 'autovista', 'autovista'),
(2, '123', '123');

-- --------------------------------------------------------

--
-- Table structure for table `carstocks`
--

CREATE TABLE `carstocks` (
  `CarID` int(50) NOT NULL,
  `CarName` varchar(50) NOT NULL,
  `CarType` varchar(50) NOT NULL,
  `LicensePlate` varchar(50) NOT NULL,
  `CarStatus` varchar(50) NOT NULL DEFAULT 'Available',
  `RentID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `carstocks`
--

INSERT INTO `carstocks` (`CarID`, `CarName`, `CarType`, `LicensePlate`, `CarStatus`, `RentID`) VALUES
(9, 'Mitsubishi Mirage', 'Economy', 'FGY-554', 'Rented', 96),
(10, 'Honda City', 'Economy', 'FGY-553', 'Available', 0),
(12, 'Toyota Vios', 'Economy', 'FGY-555', 'Rented', 98),
(13, 'Suzuki Alto', 'Economy', 'FGY-556', 'Available', 0),
(14, 'Suzuki Swift', 'Compact', 'FGY-557', 'Available', 0),
(15, 'Hyundai Accent', 'Compact', 'FGY-558', 'Available', 0),
(16, 'Kia Rio', 'Compact', 'FGY-559', 'Available', 0),
(17, 'Nissan Almera', 'Compact', 'FGY-560', 'Available', 0),
(18, 'Hyundai Accent', 'Compact', 'FGY-561', 'Available', 0),
(19, 'Toyota Camry', 'Full-Size', 'FGY-563', 'Available', 0),
(20, 'Honda Accord', 'Full-Size', 'FGY-564', 'Available', 0),
(21, 'Hyundai Sonata', 'Full-Size', 'BMI-101', 'Available', 0),
(22, 'Kia Optima', 'Full-Size', 'BMI-102', 'Available', 0),
(23, 'BMW 3-Series', 'Luxury', 'BMI-103', 'Available', 0),
(24, 'Mercedes-Benz C-Class', 'Luxury', 'BMI-104', 'Available', 0),
(25, 'Audi A4', 'Luxury', 'BMI-105', 'Available', 0),
(26, 'Jaguar XJ', 'Luxury', 'BMI-106', 'Available', 0),
(27, 'Toyota Fortuner', 'SUV', 'LGU-889', 'Available', 0),
(28, 'Mitsubishi Montero Sport', 'SUV', 'LGU-890', 'Available', 0),
(29, 'Ford Everest', 'SUV', 'LGU-891', 'Available', 0),
(30, 'Nissan Terra', 'SUV', 'LGU-892', 'Available', 0),
(31, 'Mitsubishi L300', 'Van', 'LGU-893', 'Available', 0),
(32, 'Toyota Hiace', 'Van', 'AMX-222', 'Available', 0),
(33, 'Hyundai Starex 2007', 'Van', 'AMX-223', 'Available', 0),
(34, 'Kia Grand Carnival', 'Van', 'AMX-224', 'Available', 0),
(35, 'Mazda MX-5 Miata', 'Sports', 'YUT-441', 'Available', 0),
(36, 'Ford Mustang GT', 'Sports', 'YUT-442', 'Available', 0),
(37, 'Toyota 86', 'Sports', 'YUT-443', 'Available', 0),
(38, 'Subaru BRZ', 'Sports', 'YUT-444', 'Available', 0),
(39, 'Isuzu N-Series NHR', 'Truck', 'RFE-721', 'Available', 0),
(40, 'Mitsubishi Fuso Canter', 'Truck', 'RFE-722', 'Available', 0),
(41, 'Hyundai H-100', 'Truck', 'RFE-723', 'Available', 0),
(42, 'Foton Tornado', 'Truck', 'RFE-724', 'Available', 0),
(43, 'Toyota Vios', 'Economy', 'LGU-961', 'Available', 0);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `UserID` int(50) NOT NULL,
  `RentID` int(50) NOT NULL,
  `CarName` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Pickup` varchar(50) NOT NULL,
  `dropoff` varchar(50) NOT NULL,
  `Total` varchar(50) NOT NULL,
  `RentStatus` varchar(50) NOT NULL,
  `DateRequested` varchar(50) NOT NULL,
  `DateRented` varchar(50) NOT NULL,
  `ReturnDate` varchar(50) NOT NULL,
  `CarID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`UserID`, `RentID`, `CarName`, `Duration`, `Pickup`, `dropoff`, `Total`, `RentStatus`, `DateRequested`, `DateRented`, `ReturnDate`, `CarID`) VALUES
(13, 38, 'Toyota Vios', '3', 'davao', 'tagum', '2250', 'Rented', '', '2023-05-07', '2023-05-10', 0),
(1, 39, 'Toyota Vios', '2', 'davao', 'tagum', '1500', 'Returned', '', '2023-05-07', '2023-05-09', 0),
(1, 40, 'Mitsubishi Mirage', '2', 'davao', 'tagum', '1000', 'Rented', '', '2023-05-07', '2023-05-09', 0),
(13, 77, 'Toyota Vios', '1', 'Matina branch', 'Matina branch', '750', 'Rented', '', '2023-05-11', '2023-05-12', 1),
(13, 78, 'Toyota Vios', '3', 'Agdao branch', 'Tagum branch', '2250', 'Rented', '0', '2023-05-12', '2023-05-15', 2),
(13, 79, 'Toyota Vios', '2', 'Agdao branch', 'Tagum branch', '1500', 'Rented', '0', '2023-05-12', '2023-05-14', 4),
(13, 80, 'Toyota Vios', '3', 'Agdao branch', 'Agdao branch', '2250', 'Rented', '', '2023-05-11', '2023-05-14', 1),
(13, 81, 'Mitsubishi Mirage', '2', '', '', '1000', 'Rented', '', '2023-05-11', '2023-05-13', 3),
(13, 82, 'Mitsubishi Mirage', '2', 'Tagum branch', 'Tagum branch', '1000', 'Rented', '0', '2023-05-12', '2023-05-14', 3),
(13, 83, 'Toyota Vios', '3', 'Tagum branch', 'Tagum branch', '2250', 'Rented', '2023-05-12', '2023-05-12', '2023-05-15', 1),
(13, 84, 'Mitsubishi Mirage', '1', 'Agdao branch', 'Agdao branch', '500', 'Rented', '2023-05-12', '2023-05-12', '2023-05-13', 3),
(13, 85, 'Mitsubishi Mirage', '3', 'Agdao branch', 'Matina branch', '1500', 'Rented', '2023-05-12', '2023-05-12', '2023-05-15', 6),
(13, 86, 'Toyota Vios', '2', 'Tagum branch', 'Tagum branch', '1500', 'Rented', '2023-05-12', '2023-05-12', '2023-05-14', 12),
(13, 87, 'Mitsubishi Mirage', '2', 'Tagum branch', 'Agdao branch', '1000', 'Rented', '2023-05-12', '2024-05-15', '2024-05-17', 9),
(1, 88, 'Honda City', '1', '', '', '700', 'Rented', '2023-05-14', '2023-05-14', '2023-05-15', 10),
(1, 89, 'Honda City', '2', 'Agdao branch', 'Tagum branch', '1400', 'Rented', '2023-05-14', '2024-11-08', '2024-11-10', 10),
(1, 90, 'Suzuki Alto', '2', 'Tagum branch', 'Tagum branch', '800', 'Rented', '2023-05-14', '2024-11-08', '2024-11-10', 13),
(1, 91, 'Suzuki Swift', '1', 'Tagum branch', 'Tagum branch', '500', 'Rented', '2023-05-14', '2024-11-06', '2024-11-07', 14),
(13, 93, 'Hyundai Accent', '3', 'Tagum branch', 'Tagum branch', '1800', 'Rented', '2023-12-20', '2023-12-20', '2023-12-23', 15);

-- --------------------------------------------------------

--
-- Table structure for table `rents`
--

CREATE TABLE `rents` (
  `UserID` int(50) NOT NULL,
  `RentID` int(50) NOT NULL,
  `CarName` varchar(50) NOT NULL,
  `Duration` varchar(50) NOT NULL,
  `Pickup` varchar(50) NOT NULL,
  `dropoff` varchar(50) NOT NULL,
  `Total` varchar(50) NOT NULL,
  `RentStatus` varchar(50) NOT NULL,
  `DateRequested` varchar(50) NOT NULL,
  `DateRented` varchar(50) NOT NULL,
  `ReturnDate` varchar(50) NOT NULL,
  `CarID` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rents`
--

INSERT INTO `rents` (`UserID`, `RentID`, `CarName`, `Duration`, `Pickup`, `dropoff`, `Total`, `RentStatus`, `DateRequested`, `DateRented`, `ReturnDate`, `CarID`) VALUES
(1, 96, 'Mitsubishi Mirage', '1', 'Tagum branch', 'Tagum branch', '500', 'Pending', '2024-06-20', '', '', 9),
(1, 98, 'Toyota Vios', '1', 'Agdao branch', 'Tagum branch', '750', 'Pending', '2024-11-08', '', '', 12);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `User_id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `license_id` varchar(50) NOT NULL,
  `Gender` varchar(50) NOT NULL,
  `Age` int(50) NOT NULL,
  `Contact` int(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`User_id`, `username`, `pass`, `first_name`, `last_name`, `license_id`, `Gender`, `Age`, `Contact`, `email`, `address`) VALUES
(1, 'test', '123', 'asd', 'asd', '123', 'asd', 123, 123, 'asd@asd', 'asd'),
(12, 'Nathaniel', '123', 'Nat', 'Nazareno', '69', 'Male', 19, 9564, '231@asda', 'asdsadwasd'),
(13, 'adrian', '123', 'adrian', 'Villasis', '6969', '', 23, 9265848, 'adrian@gmail.com', ''),
(32, 'Dabbi', '123', 'asdas', 'asdas', '54654', 'default_value', 123, 123123, 'asdasd@asdas', 'asdsa'),
(33, 'Rambutan', '123', 'asd', 'asd', '123', 'default_value', 21, 213, 'asd2@54as', 'asdas'),
(34, 'Rambutan2', '321', 'asd', 'asd', '123', 'default_value', 21, 213, 'asd2@54as', 'asdas'),
(35, 'Aprille', '123', 'Aprille', 'Villasis', '456456', 'default_value', 19, 2147483647, 'Aprille@gmail.com', 'Davao city');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`adminID`);

--
-- Indexes for table `carstocks`
--
ALTER TABLE `carstocks`
  ADD PRIMARY KEY (`CarID`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`RentID`);

--
-- Indexes for table `rents`
--
ALTER TABLE `rents`
  ADD PRIMARY KEY (`RentID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `adminID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `carstocks`
--
ALTER TABLE `carstocks`
  MODIFY `CarID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `RentID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=94;

--
-- AUTO_INCREMENT for table `rents`
--
ALTER TABLE `rents`
  MODIFY `RentID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `User_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
