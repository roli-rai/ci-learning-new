-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 30, 2023 at 07:44 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.3.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ci-learning`
--

-- --------------------------------------------------------

--
 
 

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Id` int(11) NOT NULL,
  `FirstName` varchar(100) NOT NULL,
  `LastName` varchar(100) NOT NULL,
  `Email` varchar(255) NOT NULL,
  `Password` varchar(60) NOT NULL,
  `Active` tinyint(1) NOT NULL DEFAULT 1,
  `InsertTime` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdateTime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Id`, `FirstName`, `LastName`, `Email`, `Password`, `Active`, `InsertTime`, `UpdateTime`) VALUES
(5, 'Roli', 'Rai', 'roli@gmail.com', 'roli', 0, '2023-08-02 09:43:27', '2023-08-02 11:42:56'),
(8, 'Aman', 'Gupta', 'aman@mistpl.com', 'aman', 1, '2023-09-23 01:29:09', NULL),
(10, 'soli', 'rai', 'soli@gmail.com', 'soli', 1, '2023-10-12 10:29:12', NULL),
(11, 'aman', 'gupta', 'a@gmail.com', 'aman', 1, '2023-10-12 10:29:56', NULL),
(12, 'mmma', 'mmmaa', 'mmaa@gmail.com', 'mama', 1, '2023-10-12 10:31:56', NULL);

--
-- Triggers `users`
--
DELIMITER $$
CREATE TRIGGER `StoreUserEmail` BEFORE UPDATE ON `users` FOR EACH ROW INSERT INTO user_emails (UserId, Email) VALUES (NEW.Id, OLD.Email)
$$
DELIMITER ;

--
-- Indexes for dumped tables
--

- 
--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
 

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
