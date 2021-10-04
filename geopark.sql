-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 04, 2021 at 06:01 AM
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
-- Table structure for table `articles`
--

CREATE TABLE `articles` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(256) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_published` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `attr` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `attr`) VALUES
(1, 'news', 'News'),
(2, 'information', 'Information'),
(3, 'opinion', 'Opinion');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE `country` (
  `iso` char(2) NOT NULL,
  `nicename` varchar(80) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`iso`, `nicename`) VALUES
('AU', 'Austria'),
('AX', 'Austria & Slovenia'),
('BE', 'Belgium'),
('BR', 'Brazil'),
('CA', 'Canada'),
('CL', 'Chile'),
('CN', 'China'),
('CR', 'Croatia'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DN', 'Denmark'),
('EC', 'Ecuador'),
('FI', 'Finland'),
('FR', 'France'),
('DE', 'Germany'),
('GX', 'Germany & Poland'),
('GR', 'Greece'),
('HU', 'Hungary'),
('HX', 'Hungary & Slovakia'),
('IS', 'Iceland'),
('ID', 'Indonesia'),
('IR', 'Iran'),
('IE', 'Ireland'),
('IX', 'Ireland, Republic of & Northern Ireland'),
('IT', 'Italy'),
('JA', 'Japan'),
('MY', 'Malaysia'),
('MX', 'Mexico'),
('MA', 'Morocco'),
('NL', 'Netherlands'),
('NI', 'Nicaragua'),
('NO', 'Norway'),
('PE', 'Peru'),
('PL', 'Poland'),
('KR', 'Korea, Republic of'),
('RO', 'Romania'),
('RU', 'Russian Federation'),
('CS', 'Serbia'),
('SK', 'Slovakia'),
('SI', 'Slovenia'),
('ES', 'Spain'),
('TZ', 'Tanzania'),
('TH', 'Thailand'),
('TR', 'Turkey'),
('GB', 'United Kingdom'),
('UY', 'Uruguay'),
('VN', 'Vietnam');

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

-- --------------------------------------------------------

--
-- Table structure for table `geotype`
--

CREATE TABLE `geotype` (
  `iso` varchar(128) NOT NULL,
  `country_id` varchar(3) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geotype`
--

INSERT INTO `geotype` (`iso`, `country_id`, `name`) VALUES
('aspiringgeopark', 'ID', 'Aspiring Geopark'),
('nationalgeopark', 'ID', 'National Geopark'),
('unescoglobalgeopark', 'ID', 'UNESCO Global Geopark');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `position` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `location` varchar(256) NOT NULL,
  `type` varchar(128) NOT NULL,
  `description` longtext NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_published` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `id` int(11) NOT NULL,
  `text` varchar(256) NOT NULL,
  `type` varchar(128) NOT NULL,
  `type_color` varchar(128) NOT NULL,
  `type_icon` varchar(128) NOT NULL,
  `receiver_id` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `is_read` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `notifications`
--

INSERT INTO `notifications` (`id`, `text`, `type`, `type_color`, `type_icon`, `receiver_id`, `time`, `is_read`) VALUES
(20, 'Your article <b>Test Artikel</b> has been posted. Waiting for the administrator\'s approval.', 'articles', 'primary', 'newspaper', 988, '2021-09-27 13:37:14', 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `member_code` varchar(11) DEFAULT NULL,
  `email` varchar(128) NOT NULL,
  `profile_picture` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(128) NOT NULL,
  `geotype` varchar(128) DEFAULT NULL,
  `geoname` varchar(128) DEFAULT NULL,
  `position` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `about` varchar(256) NOT NULL,
  `twitter` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `linkedin` varchar(128) NOT NULL,
  `role_id` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `member_code`, `email`, `profile_picture`, `password`, `gender`, `dob`, `country`, `geotype`, `geoname`, `position`, `company`, `about`, `twitter`, `instagram`, `linkedin`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Geopark Youth Forum', '', 'admin@admin.com', '42350c9fb84b7f15e1792308760944ba.jpg', '$2y$10$5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1999-02-03', 'ID', '', '', '', '', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'geopark', 'geopark', 'geopark', 1, 1, 1626859548),
(989, 'PRaVdA MuHmAmMaD', NULL, 'pravdam329@gmail.com', 'def_male.png', '$2y$10$Ne0nFMR4aHmOy3o5xPeVu.NMwIut0G3POlWT56nmiu5ctviOcrQ1K', 'O', '0000-00-00', 'HU', NULL, NULL, '', '', '', '', '', '', 2, 1, 1632807847);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE `user_access_menu` (
  `id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(3, 2, 2),
(7, 1, 3),
(9, 2, 5),
(13, 1, 5),
(17, 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE `user_menu` (
  `id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'User'),
(3, 'Menu'),
(4, 'News'),
(5, 'Articles');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'Member');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE `user_sub_menu` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_sub_menu`
--

INSERT INTO `user_sub_menu` (`id`, `menu_id`, `title`, `url`, `icon`, `is_active`) VALUES
(1, 1, 'Dashboard', 'admin', 'fas fa-fw fa-tachometer-alt', 1),
(2, 2, 'My Profile', 'user', 'fas fa-fw fa-user', 1),
(3, 2, 'Edit Profile', 'user/edit', 'fas fa-fw fa-user-edit', 1),
(4, 3, 'Menu Management', 'menu', 'fas fa-fw fa-folder', 1),
(5, 3, 'Submenu Management', 'menu/submenu', 'fas fa-fw fa-folder-open', 1),
(7, 1, 'Role', 'admin/role', 'fas fa-fw fa-user-tie', 1),
(8, 2, 'Change Password', 'user/changepassword', 'fas fa-fw fa-key', 1);

-- --------------------------------------------------------

--
-- Table structure for table `user_token`
--

CREATE TABLE `user_token` (
  `id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_token`
--

INSERT INTO `user_token` (`id`, `email`, `token`, `date_created`) VALUES
(9, 'susanti.putriani@yahoo.com', 'qEBpQrm0SQRCIhEx9Dw37JApYI1Q3OTsIwV95wv4C7M=', 1625185867),
(10, 'qw@nuauua.com', 'aQKldyTJBjLcDFKR2kiEiQxhdvbrSCpjrUSc5hnE5Uo=', 1625187649),
(16, 'theweeknd@parampaa.com', 'gv3Nm0SqeuXb1SN5e52mnWEUZndiL3VrI7rmezgT364=', 1626103328),
(17, 'hasyim@hasyim.com', 'zXkzjtWIsM8RO7ZNG3m+whw/4uSzt1oNcG7N25AO3Gk=', 1626192997),
(18, 'gunsnros3s@gmail.com', 'TR9z3utu2CqV+yKc0RvL/DOVUvEYgjwD+0YNHLUAZsA=', 1626337886),
(19, 'fredericomacheda@gmail.com', '6ZKuBXQMbVabnLOxY5Uy/S/DrxD1SVCXH8yN8igyo3Q=', 1626573178),
(20, 'david@degea.com', '0B1H6k6+JOVj9rzOv5lOjTSH9XPGFpFQLFUc3rccOFw=', 1626573413),
(22, 'zidane@zidane.com', '6q/f1Ao1cY2hH4mZ4KjmBiAh2aXfS9XbYaorgOmiTUo=', 1628082403),
(23, 'zinedine@zidane.com', '1YGJgeXlP7AJlq/HHCq1TbJSmlv8cm2khwNXzEhEyjU=', 1628082459),
(24, 'user@geopark.com', 'QmJFVl9n3EnV8wG1jmY/5UB3W32tbTbrvU5PoYRX53U=', 1628404507),
(26, 'aceng@gmail.com', 'uHJ2vvu+dErREut8G5HUiioLreZ65FFUbeXC5K57V+s=', 1629774315),
(27, 'guyana@guyana.com', 'JOtyG7KjTT0/akwxGnCqKti/a7zGvWlvVPz30245CDo=', 1629775296),
(28, 'jasndja@andjk.com', 'DLLbvYOcYg8Y9MozKwlSPm29gLRBgM96qVRFp+Kr85c=', 1629775435),
(29, 'jdij@asdd.cs', 'BUNUozZBXbKbp0G8sspYQDMLZupshrU+Z573T0ngdMI=', 1629775662),
(30, 'asd@adc.com', 'pO6U2iCCXQQHx5kYrxvPXrkjgCKuqGkCtwaKqFFyVhE=', 1629776658),
(31, 'admin@adminqa.com', 'UFNY3Y0o26iHzFAUGokBxMFkjWI7zJz9ydKHrQ80RzQ=', 1629776821),
(32, 'asda@asd.com', 'oS0Tnq5HzCCqIfb0qRznuWTCVv9DeBPhtcJXYwatvTM=', 1629782064),
(33, 'USER@USER.COM', 'Bgi75HisafunVseQ022pth1YBEbGq3DPO0l9ZK4m+58=', 1629801382),
(34, 'user@user.com', 'TQgmoTdxSr+GVQeODfouVHR67CsyloLT/iYGfmMe3Sc=', 1629891154),
(36, 'haha@asjdbhcj.com', '/cwbA2Qtk3y2DBEGkLthu3/cI+RH3XaTxGQxl693WFM=', 1630036194),
(37, 'asdasd@gmail.com', 'wfnJXhXrVlZ8TSHvPf7dMVwULBilQFGqt7ve2LoiKrs=', 1630036462),
(38, 'aksncdaks@akndc.com', 'QxFS8QZmqBNMTh5Azvb6GfZJD2mKqbmUbaUdPPKVJEw=', 1630037352),
(39, '123@as.com', 'KIwGHDjjCLWoecvBxYwpuO84uYcSeQfzIkLLO0WhQhw=', 1630043555),
(40, 'has@amkdc.com', 'ZWxZa/EqxVJJ1bFb8Q1ZzPKyDzs3aVDPitiGtG2tg7Q=', 1630045650),
(41, 'aksjd@aksmd.com', 'LfT2qkTL1KjGyrqdKjpOW8QI21DuANO4vHStLAWQ+XU=', 1631521585),
(42, 'aasdAS@asddc.com', 'VxdVfbGm8lbs3ueA+zczfjPi9pMj6qan5sZmRVJc3H0=', 1631521634),
(43, 'pravdam329@gmail.com', '9Wtl2uzIJ4RGjPVWO+1nIyEnDWrwJfxsCgAeuPnPDNQ=', 1632749776),
(44, 'PRAVDAM329@GMAIL.COM', '/HMVFHhHUymiYkgAjtrtz5gKkb604YtCWRTlhJqqczA=', 1632807847);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `articles`
--
ALTER TABLE `articles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `geoname`
--
ALTER TABLE `geoname`
  ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `geotype`
--
ALTER TABLE `geotype`
  ADD PRIMARY KEY (`iso`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_menu`
--
ALTER TABLE `user_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_token`
--
ALTER TABLE `user_token`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=82;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=72;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=990;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
