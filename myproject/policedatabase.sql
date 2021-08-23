-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 23, 2021 at 07:02 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `policedatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `,userprofile`
--

CREATE TABLE `,userprofile` (
  `ID` int(220) NOT NULL,
  `F_NAME` char(13) NOT NULL,
  `L_NAME` char(12) NOT NULL,
  `DOB` varchar(13) NOT NULL,
  `ID_NO` int(23) NOT NULL,
  `ID_NAME` varchar(30) NOT NULL,
  `LOST_ID` varchar(16) NOT NULL,
  `GENDER` char(6) NOT NULL,
  `PROVENCE` int(7) NOT NULL,
  `DISTRICT` char(9) NOT NULL,
  `SECTOR` char(8) NOT NULL,
  `CELL` char(9) NOT NULL,
  `VILLAGE` char(12) NOT NULL,
  `E_MAIL` varchar(30) NOT NULL,
  `PHONE_NO` int(12) NOT NULL,
  `OTHER` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admincheck`
--

CREATE TABLE `admincheck` (
  `id` int(11) NOT NULL,
  `username` varchar(12) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admincheck`
--

INSERT INTO `admincheck` (`id`, `username`, `password`) VALUES
(1, 'admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(220) NOT NULL,
  `date` varchar(20) NOT NULL,
  `phone_no` int(12) NOT NULL,
  `email` varchar(30) NOT NULL,
  `message` varchar(2200) NOT NULL,
  `names` varchar(40) NOT NULL,
  `district` char(20) NOT NULL,
  `sector` char(12) NOT NULL,
  `cell` char(10) NOT NULL,
  `village` char(20) NOT NULL,
  `provence` char(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `date`, `phone_no`, `email`, `message`, `names`, `district`, `sector`, `cell`, `village`, `provence`) VALUES
(1, '2021-08-20', 786543222, 'grew@gmail.com', 'murahoneza', '', '', '', '', '', ''),
(2, '2021-08-20', 786543222, 'hafashimanagermain@gmail.com', 'we need your services', '', '', '', '', '', ''),
(3, '2021-08-20', 786543222, 'hafashimanagermain@gmail.com', 'dukeneye services zanyu', '', '', '', '', '', ''),
(4, '2021-08-20', 786066690, 'hafashimanagermain@gmail.com', 'provides services', 'GERMAIN HAFASHIMANA', 'kayonza', 'Mukarange', 'Bwiza', 'Karambarara', 'eastern'),
(5, '2021-08-20', 786066690, 'hafashimanagermain@gmail.com', 'student', 'GERMAIN HAFASHIMANA', 'ngororero', 'kavumu', 'tetero', 'gatsibo', 'western'),
(6, '2021-08-20', 786066690, 'hafashimanagermain@gmail.com', 'THANK YOU I WAS SEEN THat my id is available in your database ', 'GERMAIN HAFASHIMANA', '', '', '', '', ''),
(7, '2021-08-20', 786066690, 'hafashimanagermain@gmail.com', 'THANK YOU I WAS SEEN THat my id is available in your database ', 'GERMAIN HAFASHIMANA', 'kayonza', 'Mukarange', 'Bwiza', 'Kinyemera', 'eastern');

-- --------------------------------------------------------

--
-- Table structure for table `messagereply`
--

CREATE TABLE `messagereply` (
  `id` int(20) NOT NULL,
  `date` varchar(18) NOT NULL,
  `message` varchar(4556) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `messagereply`
--

INSERT INTO `messagereply` (`id`, `date`, `message`) VALUES
(1, '2021-08-20', 'wer4t5y6u7i8');

-- --------------------------------------------------------

--
-- Table structure for table `pofficer`
--

CREATE TABLE `pofficer` (
  `ID` int(11) NOT NULL,
  `date` varchar(13) NOT NULL,
  `pname` char(30) NOT NULL,
  `pcode` char(30) NOT NULL,
  `location` char(30) NOT NULL,
  `idname` varchar(31) NOT NULL,
  `idno` varchar(30) NOT NULL,
  `email` varchar(36) NOT NULL,
  `pno` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pofficer`
--

INSERT INTO `pofficer` (`ID`, `date`, `pname`, `pcode`, `location`, `idname`, `idno`, `email`, `pno`) VALUES
(10, '2021-08-20', 'POLICE STATION OFFICER', '120', 'KAYONZA-RUKARA', 'Land Certificate', 'UPI:103', 'rukarapolice@gmail.com', 788699532),
(13, '2021-08-21', 'MARKET REPRESENTER', '200', 'NYARUGENGE', 'ID card', '1199880145459117', 'hafashimanagermain@gmail.com', 786543222),
(16, '2021-08-22', 'POLICE STATION OFFICER', 'MWIZERWA James', 'KAYONZA-RUKARA', 'ID card', '1199780145459112', 'rukarapolice@gmail.com', 788699532);

-- --------------------------------------------------------

--
-- Table structure for table `usercheck`
--

CREATE TABLE `usercheck` (
  `id` int(11) NOT NULL,
  `username` varchar(6) NOT NULL,
  `user_code` int(6) NOT NULL,
  `institution` char(30) NOT NULL,
  `location` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usercheck`
--

INSERT INTO `usercheck` (`id`, `username`, `user_code`, `institution`, `location`, `email`) VALUES
(1, 'user1', 1234, '', '', ''),
(0, '', 12346, 'bus station', 'huye', 'huye@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `userprofile`
--

CREATE TABLE `userprofile` (
  `ID` int(23) NOT NULL,
  `F_NAME` char(13) NOT NULL,
  `L_NAME` char(13) NOT NULL,
  `DOB` varchar(16) NOT NULL,
  `ID_NO` varchar(25) NOT NULL,
  `ID_NAME` varchar(36) NOT NULL,
  `LOST_ID` varchar(26) NOT NULL,
  `GENDER` char(6) NOT NULL,
  `PROVENCE` char(24) NOT NULL,
  `DISTRICT` char(20) NOT NULL,
  `SECTOR` char(14) NOT NULL,
  `CELL` char(16) NOT NULL,
  `VILLAGE` char(23) NOT NULL,
  `E_MAIL` varchar(33) NOT NULL,
  `PHONE_NO` int(12) NOT NULL,
  `OTHER_NO` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `userprofile`
--

INSERT INTO `userprofile` (`ID`, `F_NAME`, `L_NAME`, `DOB`, `ID_NO`, `ID_NAME`, `LOST_ID`, `GENDER`, `PROVENCE`, `DISTRICT`, `SECTOR`, `CELL`, `VILLAGE`, `E_MAIL`, `PHONE_NO`, `OTHER_NO`) VALUES
(11, 'Thierry', 'HAFASHIMANA', '2021-08-02', '1234567890', 'ID card', '12222222345455565677', 'MALE', 'western', 'ngororero', 'kavumu', 'rugeshi', 'karunda', 'NIYOGISUBIZO@GMAIL.COM', 2147483647, 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admincheck`
--
ALTER TABLE `admincheck`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `messagereply`
--
ALTER TABLE `messagereply`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pofficer`
--
ALTER TABLE `pofficer`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `usercheck`
--
ALTER TABLE `usercheck`
  ADD PRIMARY KEY (`user_code`);

--
-- Indexes for table `userprofile`
--
ALTER TABLE `userprofile`
  ADD PRIMARY KEY (`ID`),
  ADD UNIQUE KEY `ID` (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admincheck`
--
ALTER TABLE `admincheck`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(220) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `messagereply`
--
ALTER TABLE `messagereply`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pofficer`
--
ALTER TABLE `pofficer`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `usercheck`
--
ALTER TABLE `usercheck`
  MODIFY `user_code` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12347;

--
-- AUTO_INCREMENT for table `userprofile`
--
ALTER TABLE `userprofile`
  MODIFY `ID` int(23) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admincheck`
--
ALTER TABLE `admincheck`
  ADD CONSTRAINT `admincheck_ibfk_1` FOREIGN KEY (`id`) REFERENCES `message` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
