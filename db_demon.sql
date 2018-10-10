-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2018 at 11:30 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_demon`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_admin`
--

CREATE TABLE `tb_admin` (
  `adm_id` int(11) NOT NULL,
  `adm_usr` varchar(10) NOT NULL,
  `adm_pass` varchar(50) NOT NULL,
  `adm_name` varchar(50) NOT NULL,
  `adm_email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_admin`
--

INSERT INTO `tb_admin` (`adm_id`, `adm_usr`, `adm_pass`, `adm_name`, `adm_email`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3', 'Admin', 'admin1@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tb_devices`
--

CREATE TABLE `tb_devices` (
  `dvc_id` int(11) NOT NULL,
  `dvc_name` varchar(50) NOT NULL,
  `dvc_rak` varchar(10) NOT NULL,
  `dvc_date_add` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_rent`
--

CREATE TABLE `tb_rent` (
  `rent_id` int(11) NOT NULL,
  `dvc_id` int(11) NOT NULL,
  `usr_nrp` varchar(50) NOT NULL,
  `rent_date_pickup` datetime NOT NULL,
  `rent_date_return` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `usr_id` int(11) NOT NULL,
  `usr_name` varchar(10) NOT NULL,
  `usr_pass` varchar(50) NOT NULL,
  `usr_nrp` varchar(15) NOT NULL,
  `usr_fullname` varchar(50) NOT NULL,
  `usr_prodi` varchar(30) NOT NULL,
  `usr_email` varchar(50) NOT NULL,
  `usr_address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`usr_id`, `usr_name`, `usr_pass`, `usr_nrp`, `usr_fullname`, `usr_prodi`, `usr_email`, `usr_address`) VALUES
(1, 'alanyukero', '62cc2d8b4bf2d8728120d052163a77df', '2210171059', 'M. Alan Nur', 'D4 Teknik Komputer B', 'alanyukero@gmail.com', 'PENS'),
(2, 'caraka16', '62cc2d8b4bf2d8728120d052163a77df', '2210171038', 'Pravasta Caraka B', 'D4 Teknik Komputer B', 'proraka@gmail.com', 'PENS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_admin`
--
ALTER TABLE `tb_admin`
  ADD PRIMARY KEY (`adm_id`);

--
-- Indexes for table `tb_devices`
--
ALTER TABLE `tb_devices`
  ADD PRIMARY KEY (`dvc_id`);

--
-- Indexes for table `tb_rent`
--
ALTER TABLE `tb_rent`
  ADD PRIMARY KEY (`rent_id`),
  ADD KEY `dvc_id` (`dvc_id`),
  ADD KEY `usr_nrp` (`usr_nrp`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`usr_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_admin`
--
ALTER TABLE `tb_admin`
  MODIFY `adm_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tb_devices`
--
ALTER TABLE `tb_devices`
  MODIFY `dvc_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_rent`
--
ALTER TABLE `tb_rent`
  MODIFY `rent_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `usr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
