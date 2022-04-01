-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 01, 2022 at 10:03 PM
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
-- Database: `profileskeuangan`
--

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `NamaDepan` varchar(30) NOT NULL,
  `NamaTengah` varchar(30) NOT NULL,
  `NamaBelakang` varchar(30) NOT NULL,
  `TempatLahir` varchar(30) NOT NULL,
  `TglLahir` date NOT NULL,
  `NIK` bigint(18) NOT NULL,
  `WargaNegara` varchar(30) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `NoHP` bigint(20) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `KodePos` int(11) NOT NULL,
  `NamaFoto` varchar(30) NOT NULL,
  `Username` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`NamaDepan`, `NamaTengah`, `NamaBelakang`, `TempatLahir`, `TglLahir`, `NIK`, `WargaNegara`, `Email`, `NoHP`, `Alamat`, `KodePos`, `NamaFoto`, `Username`, `Password`) VALUES
('Rafa', 'Rich', 'P', 'Jakarta', '2022-04-27', 1234567890098755, 'Indone', '123@gmail.com', 12389763991, 'jkhdsjkh', 12346, 'tab aurora bells.png', '2', '123'),
('hai', 'nama', 'aku', 'Jakarta', '2022-04-18', 1234567890123465, 'Jakarta', 'no@gmail.com', 12345678901236789, 'Binus', 12345, '38.png', '1', '123'),
('Rafaelle', 'Richel', 'Pearl', 'Jakarta', '2022-04-18', 1234567890987654, 'Indonesia', 'yes@gmail.com', 123456789056, 'Binus', 12345, 'totebag design ari.png', 'raf', '123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`NIK`),
  ADD UNIQUE KEY `Username` (`Username`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `NoHP` (`NoHP`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
