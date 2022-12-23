-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 05, 2021 at 10:15 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `zhra`
--

-- --------------------------------------------------------

--
-- Table structure for table `alltb`
--

CREATE TABLE `alltb` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `firstname` varchar(225) NOT NULL,
  `lastname` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `phone` varchar(225) NOT NULL,
  `department` varchar(111) NOT NULL,
  `date` date NOT NULL,
  `datebr` date NOT NULL,
  `work` varchar(123) NOT NULL,
  `type` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `alltb`
--

INSERT INTO `alltb` (`id`, `username`, `firstname`, `lastname`, `email`, `phone`, `department`, `date`, `datebr`, `work`, `type`, `password`) VALUES
(1234, 'admin', 'alafn', 'aliphonce', 'alfa@gmail.com', '07464546', 'SECRETARY', '2019-12-20', '2017-05-07', 'managements', 'Pamanenty', '827ccb0eea8a706c4c34a16891f84e7b'),
(1237, 'officer', 'maiko juma', 'lema', 'musaalphonce@yahoo.com', '07464546', 'SECRETARY', '2019-12-20', '2015-06-08', 'securty', 'Pamanenty', '827ccb0eea8a706c4c34a16891f84e7b'),
(1250, '13211023/T.19', 'Petro', 'makungu', 'petromakungu@gmail.com', '765432457', 'ICT', '2021-07-08', '1990-09-04', 'teacher', 'Temporary', '827ccb0eea8a706c4c34a16891f84e7b'),
(1251, '1234', 'dickson', 'mushi', 'p@gmail.com', '0765432123', 'ICT', '2021-08-02', '1990-09-05', 'teacher', 'Temporary', '24dc275699fe714dfc36474d376f3c39'),
(1252, '12345', 'Hamis', 'Juma', 'hamis@gmail.com', '0786089765', 'ICT', '2021-08-03', '1990-09-05', 'teacher', 'Temporary', '827ccb0eea8a706c4c34a16891f84e7b');

-- --------------------------------------------------------

--
-- Table structure for table `leavm`
--

CREATE TABLE `leavm` (
  `id` int(225) NOT NULL,
  `username` varchar(225) NOT NULL,
  `type` varchar(225) NOT NULL,
  `fdate` date NOT NULL,
  `tdate` date NOT NULL,
  `leav` varchar(225) NOT NULL,
  `department` varchar(225) NOT NULL,
  `appcation` date NOT NULL,
  `coment` varchar(225) NOT NULL,
  `status` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `leavm`
--

INSERT INTO `leavm` (`id`, `username`, `type`, `fdate`, `tdate`, `leav`, `department`, `appcation`, `coment`, `status`) VALUES
(23, '13211023/T.19', 'ANNUAL LEAVE', '2021-08-02', '2021-08-12', '           please alow me', 'ICT', '2021-08-02', ' ok just go', 'accepted'),
(25, '1234', 'SICK LEAVE LEAVE', '2021-08-02', '2021-08-11', '           please allow me', 'ICT', '2021-08-02', ' ok just go', 'accepted'),
(26, '12345', 'ANNUAL LEAVE', '2021-08-03', '2021-08-20', '           pless help me', 'SECRETARY', '2021-08-03', 'Ok you may go', 'accepted');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alltb`
--
ALTER TABLE `alltb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `leavm`
--
ALTER TABLE `leavm`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `alltb`
--
ALTER TABLE `alltb`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1253;

--
-- AUTO_INCREMENT for table `leavm`
--
ALTER TABLE `leavm`
  MODIFY `id` int(225) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
