-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2021 at 01:36 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `home`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) NOT NULL,
  `username` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`, `status`) VALUES
(1, 'admin', 'admin123', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Cntid` int(10) NOT NULL,
  `FullName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Message` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Cntid`, `FullName`, `Email`, `Message`) VALUES
(1, 'kanani', 'fulgence44@gmail.com', 'hello hello hello'),
(2, 'kanani', 'fulgence44@gmail.com', 'hello hello hello'),
(3, 'kabanda', 'derrick@gmail.com', 'dcvdahkkcavdcavhdkcvacvahkcv'),
(13, 'derrick', 'kaka@gmail.com', 'ldvjbdjl/vjdsbjv;svbasj;vsbj;fb sfjlbvsfjlbvfjbvfsjlbvfjbvsfjl/vfsjl/sfjl/bfjlbvfjl/vfj/vbsflbvsflj/'),
(16, 'utkdgdtdg', 'hddth@fjyg', 'jhhcgjkckgjcgkjcg'),
(18, 'gjldfj,jg', 'dkdddg@ggjcgj', 'gjcjgcjgckgdg,cdkujg,cgjcgjcg'),
(20, '', '', ''),
(21, '', '', ''),
(22, 'dede', 'dede@frf', 'fvfbdgbgbdbdgbfgb'),
(23, '', '', ''),
(24, '', '', ''),
(25, '', '', ''),
(26, 'fsrts', 'sse@hkbhkbh', 'tesstsexst\r\n'),
(27, '', '', ''),
(28, 'chxhvnxv', 'kssxcscs@gfghbv.bpn', ' xn xxsxnsx snx sxk');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `Id` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telephone` varchar(30) NOT NULL,
  `Address` varchar(30) NOT NULL,
  `CategoryName` varchar(30) NOT NULL,
  `Description` varchar(30) NOT NULL,
  `Date` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`Id`, `FirstName`, `LastName`, `Email`, `Telephone`, `Address`, `CategoryName`, `Description`, `Date`) VALUES
(30, 'dede', 'keke', 'dede@keke', '0783177672', 'musanze', 'Bed Room Designs', 'good', '2021-07-14'),
(31, 'dede', 'keke', 'dede@keke', '0783177672', 'kigali', 'Kids Room Designs ', 'hhhhhhhhhh', '2021-07-15');

-- --------------------------------------------------------

--
-- Table structure for table `design`
--

CREATE TABLE `design` (
  `Cid` int(11) NOT NULL,
  `CategoryName` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `design`
--

INSERT INTO `design` (`Cid`, `CategoryName`) VALUES
(6, ' Bathroom Designs'),
(2, ' Kitchen Designs '),
(5, 'Bed Room Designs'),
(4, 'Dining Room Designs '),
(3, 'Kids Room Designs '),
(1, 'Living Room Designs');

-- --------------------------------------------------------

--
-- Table structure for table `ordert`
--

CREATE TABLE `ordert` (
  `Oid` int(10) NOT NULL,
  `user_email` varchar(30) NOT NULL,
  `desgnType` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ordert`
--

INSERT INTO `ordert` (`Oid`, `user_email`, `desgnType`) VALUES
(19, 'dede@keke', 'Bed Room Designs'),
(20, 'dede@keke', 'Kids Room Designs ');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `Uid` int(10) NOT NULL,
  `FirstName` varchar(30) NOT NULL,
  `LastName` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Telephone` varchar(30) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`Uid`, `FirstName`, `LastName`, `Email`, `Telephone`, `Password`, `status`) VALUES
(1, 'admin', 'admin', 'admin', '0780256982', '12345', 'admin'),
(2, 'dede', 'keke', 'dede@keke', '0783177672', '123', 'client');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Cntid`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `design`
--
ALTER TABLE `design`
  ADD PRIMARY KEY (`CategoryName`);

--
-- Indexes for table `ordert`
--
ALTER TABLE `ordert`
  ADD PRIMARY KEY (`Oid`),
  ADD KEY `user_email` (`user_email`),
  ADD KEY `desgnType` (`desgnType`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`Email`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Uid` (`Uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Cntid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `Id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `ordert`
--
ALTER TABLE `ordert`
  MODIFY `Oid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `Uid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ordert`
--
ALTER TABLE `ordert`
  ADD CONSTRAINT `ordert_ibfk_1` FOREIGN KEY (`desgnType`) REFERENCES `design` (`CategoryName`),
  ADD CONSTRAINT `ordert_ibfk_2` FOREIGN KEY (`user_email`) REFERENCES `user` (`Email`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
