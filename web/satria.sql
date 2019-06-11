-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 11, 2019 at 03:13 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `satria`
--

-- --------------------------------------------------------

--
-- Table structure for table `log`
--

CREATE TABLE `log` (
  `ID` int(20) NOT NULL,
  `RFID` int(30) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Waktu` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `log`
--

INSERT INTO `log` (`ID`, `RFID`, `Nama`, `Waktu`) VALUES
(165, -2055688630, 'Kartu Belum Terdaftar', '2019-06-11 12:41:37'),
(166, 0, 'Kartu Belum Terdaftar', '2019-06-11 12:41:59'),
(167, 187, 'Satria', '2019-06-11 12:42:17'),
(168, 187, 'Satria', '2019-06-11 12:44:38'),
(169, 187, 'Satria', '2019-06-11 12:44:43'),
(170, 27, 'Kartu Belum Terdaftar', '2019-06-11 12:48:17'),
(171, 187, 'Satria', '2019-06-11 12:48:32'),
(172, 187, 'Satria', '2019-06-11 12:49:25'),
(173, 27, 'Kartu Belum Terdaftar', '2019-06-11 12:49:54'),
(174, 27, 'Kartu Belum Terdaftar', '2019-06-11 12:50:07'),
(175, 187, 'Satria', '2019-06-11 12:57:32'),
(176, 187, 'Satria', '2019-06-11 12:57:55'),
(177, 27, 'Kartu Belum Terdaftar', '2019-06-11 12:57:57'),
(178, 187, 'Satria', '2019-06-11 12:58:02'),
(179, 0, 'Kartu Belum Terdaftar', '2019-06-11 12:59:13'),
(180, 187, 'Satria', '2019-06-11 12:59:38'),
(181, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:00:00'),
(182, 187, 'Satria', '2019-06-11 13:00:04'),
(183, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:00:44'),
(184, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:01:52'),
(185, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:02:06'),
(186, 187, 'Satria', '2019-06-11 13:02:20'),
(187, 187, 'Satria', '2019-06-11 13:03:15'),
(188, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:04:04'),
(189, 187, 'Satria', '2019-06-11 13:04:10'),
(190, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:04:16'),
(191, 248, 'Fahmi', '2019-06-11 13:05:38'),
(192, 248, 'Fahmi', '2019-06-11 13:06:54'),
(193, 248, 'Fahmi', '2019-06-11 13:07:04'),
(194, 187, 'Satria', '2019-06-11 13:07:12'),
(195, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:07:21'),
(196, 27, 'Kartu Belum Terdaftar', '2019-06-11 13:07:37'),
(197, 187, 'Satria', '2019-06-11 13:08:05'),
(198, 248, 'Fahmi', '2019-06-11 13:08:09');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `ID` int(30) NOT NULL,
  `RFID` int(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Saldo` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`ID`, `RFID`, `Nama`, `Saldo`) VALUES
(12, 248, 'Fahmi', 10000),
(13, 187, 'Satria', 10000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `log`
--
ALTER TABLE `log`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `log`
--
ALTER TABLE `log`
  MODIFY `ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=199;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
