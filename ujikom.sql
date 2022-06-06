-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 05, 2022 at 02:48 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ujikom`
--

-- --------------------------------------------------------

--
-- Table structure for table `bangun_datar`
--

CREATE TABLE `bangun_datar` (
  `id` int(11) NOT NULL,
  `nm_bangundatar` varchar(20) NOT NULL,
  `hasil` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bangun_datar`
--

INSERT INTO `bangun_datar` (`id`, `nm_bangundatar`, `hasil`) VALUES
(1, 'segitiga', 8),
(2, 'lingkaran', 46),
(3, 'persegi', 13);

-- --------------------------------------------------------

--
-- Table structure for table `lingkaran`
--

CREATE TABLE `lingkaran` (
  `id` int(11) NOT NULL,
  `jari` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `time` time NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `persegi`
--

CREATE TABLE `persegi` (
  `id` int(11) NOT NULL,
  `sisi` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `segitiga`
--

CREATE TABLE `segitiga` (
  `id` int(11) NOT NULL,
  `alas` int(11) NOT NULL,
  `tinggi` int(11) NOT NULL,
  `hasil` int(11) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bangun_datar`
--
ALTER TABLE `bangun_datar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lingkaran`
--
ALTER TABLE `lingkaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `persegi`
--
ALTER TABLE `persegi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `segitiga`
--
ALTER TABLE `segitiga`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bangun_datar`
--
ALTER TABLE `bangun_datar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `lingkaran`
--
ALTER TABLE `lingkaran`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `persegi`
--
ALTER TABLE `persegi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `segitiga`
--
ALTER TABLE `segitiga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
