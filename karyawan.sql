-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 08, 2022 at 06:53 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `karyawan`
--

-- --------------------------------------------------------

--
-- Table structure for table `datakaryawan`
--

CREATE TABLE `datakaryawan` (
  `id` int(11) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `nik` varchar(100) NOT NULL,
  `jabatan` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `datakaryawan`
--

INSERT INTO `datakaryawan` (`id`, `nama`, `nik`, `jabatan`, `email`, `foto`) VALUES
(1, 'Wahyu Aprilliandhika', '21.11.3869', 'Software Engineer', 'wahyuandhika910@gmail.com', 'network.jpg'),
(2, 'Sakti Adnan Magani', '21.11.3884', 'Networking', 'sakti@gmail.com', 'wahyupro.jpg'),
(11, 'Zaki Fadhil Alfarizil', '11.09.1234', 'UI/UX', 'zaki@gmail.com', 'mouse.jpeg'),
(16, 'Yudi Boy', '31.11.4567', 'Office Boy', 'yudiboy@gmail.com', 'wahyupro.jpg'),
(17, 'Ika', '19.89,4321', 'PROGRAMMER', 'bunda.wahyu@gmail.com', 'mouse.jpeg'),
(18, 'Anto', '15.43.2345', 'CTO', 'anto@gmail.com', 'network.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(1, 'wahyu', '$2y$10$SPMglVYJfKlU3W3ACLukhusSdb0goGAX5Y2d7PWv.Uc5LcHsvi6/a'),
(2, 'sakti', '$2y$10$MHCxOOzP7jjjYL4nokxOiu8edfohLZH/nfLgAiZY3RoZr0LccGG.K'),
(4, 'zaki', '$2y$10$HQqE549uMNDzaLw6.X694.8kRWN2A27.mr7n1AAwX.GbngvAcUZJi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datakaryawan`
--
ALTER TABLE `datakaryawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
