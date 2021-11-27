-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 27, 2021 at 12:58 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `geopark`
--

-- --------------------------------------------------------

--
-- Table structure for table `geoname`
--

CREATE TABLE `geoname` (
  `iso` varchar(128) NOT NULL,
  `geotype_id` varchar(128) NOT NULL,
  `country_id` varchar(3) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geoname`
--

INSERT INTO `geoname` (`iso`, `geotype_id`, `country_id`, `name`) VALUES
('batur', 'unescoglobalgeopark', 'ID', 'Batur UNESCO Global Geopark'),
('belitong', 'unescoglobalgeopark', 'ID', 'Belitong UNESCO Global Geopark'),
('bojonegoro', 'nationalgeopark', 'ID', 'Bojonegoro National Geopark'),
('ciletuhpalabuhanratu', 'unescoglobalgeopark', 'ID', 'Ciletuh-Palabuhanratu UNESCO Global Geopark'),
('gunungsewu', 'unescoglobalgeopark', 'ID', 'Gunung Sewu UNESCO Global Geopark'),
('ijen', 'nationalgeopark', 'ID', 'Ijen National Geopark'),
('karangsambungkarangbolong', 'nationalgeopark', 'ID', 'Karangsambung Karangbolong'),
('marospangkep', 'nationalgeopark', 'ID', 'Maros Pangkep National Geopark'),
('merangin', 'nationalgeopark', 'ID', 'Merangin National Geopark'),
('meratus', 'nationalgeopark', 'ID', 'Meratus National Geopark'),
('natuna', 'nationalgeopark', 'ID', 'Natuna National Geopark'),
('ngaraisianokmaninjau', 'nationalgeopark', 'ID', 'Ngarai Sianok-Maninjau National Geopark'),
('pongkor', 'nationalgeopark', 'ID', 'Pongkor National Geopark'),
('rajaampat', 'nationalgeopark', 'ID', 'Raja Ampat National Geopark'),
('ranahminangsilokek', 'nationalgeopark', 'ID', 'Ranah Minang Silokek National Geopark'),
('rinjanilombok', 'unescoglobalgeopark', 'ID', 'Rinjani-Lombok UNESCO Global Geopark'),
('sawahlunto', 'nationalgeopark', 'ID', 'Sawahlunto National Geopark'),
('tambora', 'nationalgeopark', 'ID', 'Tambora National Geopark'),
('tobacaldera', 'unescoglobalgeopark', 'ID', 'Toba Caldera UNESCO Global Geopark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `geoname`
--
ALTER TABLE `geoname`
  ADD PRIMARY KEY (`iso`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
