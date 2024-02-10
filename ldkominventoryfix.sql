-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2024 at 03:45 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ldkominventoryfix`
--

-- --------------------------------------------------------

--
-- Table structure for table `databarang`
--

CREATE TABLE `databarang` (
  `kode` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `kat` varchar(255) NOT NULL,
  `tbm` date NOT NULL,
  `kond` varchar(255) NOT NULL,
  `jml` int(11) NOT NULL,
  `Gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `databarang`
--

INSERT INTO `databarang` (`kode`, `nama`, `kat`, `tbm`, `kond`, `jml`, `Gambar`) VALUES
(21, 'Proyektor', '2', '2024-02-01', '3', 3, '1.webp'),
(22, 'baju', '', '2024-02-01', '4', 1, 'fotonabil.png'),
(23, 'buku', '', '2024-02-05', '3', 3, 'image5.jpg'),
(24, 'biji', '2', '2024-02-01', '2', 3, 'image5.jpg'),
(25, 'buah', '', '2024-02-03', '3', 4, 'nfs-5k-mi-1920x1080.jpg'),
(26, 'pakcik', '2', '2024-02-01', '2', 2, 'circle-g.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `email`, `password`) VALUES
(1, 'icikiwir', 'icikiwir@gmail.com', '$2y$10$TyPNdFe1heJxkcWQWJPIK.bx7/FqqDQQoXpP6pSJ2FfJLy4ckAocy'),
(2, 'alamak', 'alamak@gmail.com', '$2y$10$36LpIkKVC0ffD2qhF011Ae37u/rCj56AuPfYshv.GzffyCgVIyy5q'),
(3, 'nabil', 'nabil@gmail.com', '$2y$10$4mRSuw1oPGiQlwP29gRn8Oh74FpvrqYZQRqu/YhQVx0dkwOlV0VPm'),
(12, 'khalied', 'khalied@gmail.com', '$2y$10$b3gc0n8MY0.WS4YzGd1gyOltb0oRa1F5NVJyaiFA9QgqDowOyvB7S'),
(14, 'alex', 'alex@gmail.com', '$2y$10$kHoIJY2BAgFIHSZH3746heRjY4FoxT9dh19uLCUOpJIMbeQs4vfQ.'),
(15, 'bjir', 'bjir@gmail.com', '$2y$10$DnRkluF14potNXlOu4egcOs.FVWq.3PCpKKqmCflMadmwfUBQnxFa'),
(16, 'apik', 'apik@gmai.com', '$2y$10$DSALOc/Caa5uTx/hXKJy8uYLYiz6RwN/bbPcC2S8mnwKyjniqHMJ6'),
(17, 'jia', 'jia@gmail.com', '$2y$10$ySjUFmiWYcVARKPdnDTLPeQkd2AD1tEq2QOztB/VxBdizRoOA/U0m'),
(18, 'alifa', 'alifa@gmail.com', '$2y$10$e3eukFfV8fXDRfr5HJ2yRuFfWyz5kpFmPbNeiu38m7Pqy17Sz7.SG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `databarang`
--
ALTER TABLE `databarang`
  ADD PRIMARY KEY (`kode`) USING HASH;

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `databarang`
--
ALTER TABLE `databarang`
  MODIFY `kode` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
