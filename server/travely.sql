-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 13, 2022 at 09:09 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 5.6.40

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travely`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `id_booking` int(11) NOT NULL,
  `nama_pemesan` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `jml_orang` int(11) DEFAULT NULL,
  `id_destinasi` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`id_booking`, `nama_pemesan`, `tanggal`, `jml_orang`, `id_destinasi`) VALUES
(6, 'Cipung', '2022-12-21', 4, 2),
(8, 'fta', '2022-12-12', 2, 1),
(11, 'ffffffff', '2022-12-12', 2, 1),
(15, 'heri', '2022-12-28', 1, 2),
(16, 'heris', '2022-12-12', 1, 1),
(19, 'heri', '2022-12-02', 3, 3),
(21, 'Heri Susanti', '2022-12-02', 3, 2);

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id_destinasi` int(11) NOT NULL,
  `nm_destinasi` varchar(50) DEFAULT NULL,
  `harga` varchar(15) DEFAULT NULL,
  `kapasitas` int(11) DEFAULT NULL,
  `harga_hotel` varchar(15) DEFAULT NULL,
  `harga_transport` varchar(15) DEFAULT NULL,
  `harga_turquid` varchar(15) DEFAULT NULL,
  `harga_tempatwisata` varchar(15) DEFAULT NULL,
  `img_1` varchar(50) NOT NULL,
  `img_2` varchar(50) NOT NULL,
  `img_3` varchar(50) NOT NULL,
  `lokasi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id_destinasi`, `nm_destinasi`, `harga`, `kapasitas`, `harga_hotel`, `harga_transport`, `harga_turquid`, `harga_tempatwisata`, `img_1`, `img_2`, `img_3`, `lokasi`) VALUES
(1, 'Pantai Kuta', '10.000.000', 5, '3.000.000', '3.000.000', '2.000.000', '2.000.000', 'kuta-1.jpg', 'kuta-2.jpg', 'kuta-3.jpg', 'Bali, Indonesia'),
(2, 'Borobudur', '5.000.000', 5, '1.000.000', '1.500.000', '1.000.000', '1.500.000', 'borobudur-1.jpg', 'borobudur-2.jpg', 'borobudur-3.jpg', 'Magelang, Indonesia'),
(3, 'Pantai Gili Iyang', '5.000.000', 5, '1.500.000', '1.500.000', '1.000.000', '1.000.000', 'gili-1.jpg', 'gili-2.jpg', 'gili-3.jpg', 'Sumenep, Indonesia');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`id_booking`),
  ADD KEY `fk_destinasi` (`id_destinasi`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destinasi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `id_booking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destinasi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `booking`
--
ALTER TABLE `booking`
  ADD CONSTRAINT `fk_destinasi` FOREIGN KEY (`id_destinasi`) REFERENCES `destination` (`id_destinasi`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
