-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2021 at 06:50 PM
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
-- Database: `geopark`
--

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `code` varchar(2) NOT NULL,
  `name` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`code`, `name`) VALUES
('AF', 'Afghanistan'),
('AL', 'Albania'),
('DZ', 'Algeria'),
('DS', 'American Samoa'),
('AD', 'Andorra'),
('AO', 'Angola'),
('AI', 'Anguilla'),
('AQ', 'Antarctica'),
('AG', 'Antigua and Barbuda'),
('AR', 'Argentina'),
('AM', 'Armenia'),
('AW', 'Aruba'),
('AU', 'Australia'),
('AT', 'Austria'),
('AZ', 'Azerbaijan'),
('BS', 'Bahamas'),
('BH', 'Bahrain'),
('BD', 'Bangladesh'),
('BB', 'Barbados'),
('BY', 'Belarus'),
('BE', 'Belgium'),
('BZ', 'Belize'),
('BJ', 'Benin'),
('BM', 'Bermuda'),
('BT', 'Bhutan'),
('BO', 'Bolivia'),
('BA', 'Bosnia and Herzegovina'),
('BW', 'Botswana'),
('BV', 'Bouvet Island'),
('BR', 'Brazil'),
('IO', 'British Indian Ocean Territory'),
('BN', 'Brunei Darussalam'),
('BG', 'Bulgaria'),
('BF', 'Burkina Faso'),
('BI', 'Burundi'),
('KH', 'Cambodia'),
('CM', 'Cameroon'),
('CA', 'Canada'),
('CV', 'Cape Verde'),
('KY', 'Cayman Islands'),
('CF', 'Central African Republic'),
('TD', 'Chad'),
('CL', 'Chile'),
('CN', 'China'),
('CX', 'Christmas Island'),
('CC', 'Cocos (Keeling) Islands'),
('CO', 'Colombia'),
('KM', 'Comoros'),
('CD', 'Democratic Republic of the Congo'),
('CG', 'Republic of Congo'),
('CK', 'Cook Islands'),
('CR', 'Costa Rica'),
('HR', 'Croatia (Hrvatska)'),
('CU', 'Cuba'),
('CY', 'Cyprus'),
('CZ', 'Czech Republic'),
('DK', 'Denmark'),
('DJ', 'Djibouti'),
('DM', 'Dominica'),
('DO', 'Dominican Republic'),
('TP', 'East Timor'),
('EC', 'Ecuador'),
('EG', 'Egypt'),
('SV', 'El Salvador'),
('GQ', 'Equatorial Guinea'),
('ER', 'Eritrea'),
('EE', 'Estonia'),
('ET', 'Ethiopia'),
('FK', 'Falkland Islands (Malvinas)'),
('FO', 'Faroe Islands'),
('FJ', 'Fiji'),
('FI', 'Finland'),
('FR', 'France'),
('FX', 'France, Metropolitan'),
('GF', 'French Guiana'),
('PF', 'French Polynesia'),
('TF', 'French Southern Territories'),
('GA', 'Gabon'),
('GM', 'Gambia'),
('GE', 'Georgia'),
('DE', 'Germany'),
('GH', 'Ghana'),
('GI', 'Gibraltar'),
('GK', 'Guernsey'),
('GR', 'Greece'),
('GL', 'Greenland'),
('GD', 'Grenada'),
('GP', 'Guadeloupe'),
('GU', 'Guam'),
('GT', 'Guatemala'),
('GN', 'Guinea'),
('GW', 'Guinea-Bissau'),
('GY', 'Guyana'),
('HT', 'Haiti'),
('HM', 'Heard and Mc Donald Islands'),
('HN', 'Honduras'),
('HK', 'Hong Kong'),
('HU', 'Hungary'),
('IS', 'Iceland'),
('IN', 'India'),
('IM', 'Isle of Man'),
('ID', 'Indonesia'),
('IR', 'Iran (Islamic Republic of)'),
('IQ', 'Iraq'),
('IE', 'Ireland'),
('IL', 'Israel'),
('IT', 'Italy'),
('CI', 'Ivory Coast'),
('JE', 'Jersey'),
('JM', 'Jamaica'),
('JP', 'Japan'),
('JO', 'Jordan'),
('KZ', 'Kazakhstan'),
('KE', 'Kenya'),
('KI', 'Kiribati'),
('KP', 'Korea, Democratic People\'s Republic of'),
('KR', 'Korea, Republic of'),
('XK', 'Kosovo'),
('KW', 'Kuwait'),
('KG', 'Kyrgyzstan'),
('LA', 'Lao People\'s Democratic Republic'),
('LV', 'Latvia'),
('LB', 'Lebanon'),
('LS', 'Lesotho'),
('LR', 'Liberia'),
('LY', 'Libyan Arab Jamahiriya'),
('LI', 'Liechtenstein'),
('LT', 'Lithuania'),
('LU', 'Luxembourg'),
('MO', 'Macau'),
('MK', 'North Macedonia'),
('MG', 'Madagascar'),
('MW', 'Malawi'),
('MY', 'Malaysia'),
('MV', 'Maldives'),
('ML', 'Mali'),
('MT', 'Malta'),
('MH', 'Marshall Islands'),
('MQ', 'Martinique'),
('MR', 'Mauritania'),
('MU', 'Mauritius'),
('TY', 'Mayotte'),
('MX', 'Mexico'),
('FM', 'Micronesia, Federated States of'),
('MD', 'Moldova, Republic of'),
('MC', 'Monaco'),
('MN', 'Mongolia'),
('ME', 'Montenegro'),
('MS', 'Montserrat'),
('MA', 'Morocco'),
('MZ', 'Mozambique'),
('MM', 'Myanmar'),
('NA', 'Namibia'),
('NR', 'Nauru'),
('NP', 'Nepal'),
('NL', 'Netherlands'),
('AN', 'Netherlands Antilles'),
('NC', 'New Caledonia'),
('NZ', 'New Zealand'),
('NI', 'Nicaragua'),
('NE', 'Niger'),
('NG', 'Nigeria'),
('NU', 'Niue'),
('NF', 'Norfolk Island'),
('MP', 'Northern Mariana Islands'),
('NO', 'Norway'),
('OM', 'Oman'),
('PK', 'Pakistan'),
('PW', 'Palau'),
('PS', 'Palestine'),
('PA', 'Panama'),
('PG', 'Papua New Guinea'),
('PY', 'Paraguay'),
('PE', 'Peru'),
('PH', 'Philippines'),
('PN', 'Pitcairn'),
('PL', 'Poland'),
('PT', 'Portugal'),
('PR', 'Puerto Rico'),
('QA', 'Qatar'),
('RE', 'Reunion'),
('RO', 'Romania'),
('RU', 'Russian Federation'),
('RW', 'Rwanda'),
('KN', 'Saint Kitts and Nevis'),
('LC', 'Saint Lucia'),
('VC', 'Saint Vincent and the Grenadines'),
('WS', 'Samoa'),
('SM', 'San Marino'),
('ST', 'Sao Tome and Principe'),
('SA', 'Saudi Arabia'),
('SN', 'Senegal'),
('RS', 'Serbia'),
('SC', 'Seychelles'),
('SL', 'Sierra Leone'),
('SG', 'Singapore'),
('SK', 'Slovakia'),
('SI', 'Slovenia'),
('SB', 'Solomon Islands'),
('SO', 'Somalia'),
('ZA', 'South Africa'),
('GS', 'South Georgia South Sandwich Islands'),
('SS', 'South Sudan'),
('ES', 'Spain'),
('LK', 'Sri Lanka'),
('SH', 'St. Helena'),
('PM', 'St. Pierre and Miquelon'),
('SD', 'Sudan'),
('SR', 'Suriname'),
('SJ', 'Svalbard and Jan Mayen Islands'),
('SZ', 'Swaziland'),
('SE', 'Sweden'),
('CH', 'Switzerland'),
('SY', 'Syrian Arab Republic'),
('TW', 'Taiwan'),
('TJ', 'Tajikistan'),
('TZ', 'Tanzania, United Republic of'),
('TH', 'Thailand'),
('TG', 'Togo'),
('TK', 'Tokelau'),
('TO', 'Tonga'),
('TT', 'Trinidad and Tobago'),
('TN', 'Tunisia'),
('TR', 'Turkey'),
('TM', 'Turkmenistan'),
('TC', 'Turks and Caicos Islands'),
('TV', 'Tuvalu'),
('UG', 'Uganda'),
('UA', 'Ukraine'),
('AE', 'United Arab Emirates'),
('GB', 'United Kingdom'),
('US', 'United States'),
('UM', 'United States minor outlying islands'),
('UY', 'Uruguay'),
('UZ', 'Uzbekistan'),
('VU', 'Vanuatu'),
('VA', 'Vatican City State'),
('VE', 'Venezuela'),
('VN', 'Vietnam'),
('VG', 'Virgin Islands (British)'),
('VI', 'Virgin Islands (U.S.)'),
('WF', 'Wallis and Futuna Islands'),
('EH', 'Western Sahara'),
('YE', 'Yemen'),
('ZM', 'Zambia'),
('ZW', 'Zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `position` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `details` longtext NOT NULL,
  `location` varchar(128) NOT NULL,
  `created_date` date NOT NULL,
  `published` int(1) NOT NULL,
  `author_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `position`, `company`, `details`, `location`, `created_date`, `published`, `author_id`) VALUES
(1, 'Social Media Manager', 'NUADU Lte', '', 'Jakarta', '2021-07-13', 1, 16),
(2, 'Social Media Dev', 'NUADU ASIA', '', 'Palangkaraya', '2021-07-27', 1, 16);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` longtext NOT NULL,
  `image` varchar(256) NOT NULL,
  `author_id` int(11) NOT NULL,
  `created_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `content`, `image`, `author_id`, `created_date`) VALUES
(1, 'News Testing 1', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed consectetur urna facilisis, euismod ipsum vel, lacinia turpis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; In mollis, tortor vel pulvinar faucibus, metus odio tempus neque, congue ultrices nisi est non risus. Etiam consectetur purus eu nibh molestie ornare. Nam sit amet orci nisl. Praesent imperdiet vestibulum sem, et feugiat tellus posuere vitae. Donec iaculis efficitur arcu id gravida. Integer nec vehicula orci. Etiam ut purus a leo consectetur lobortis. Donec efficitur velit eu quam volutpat lobortis. Quisque congue tellus a ullamcorper consequat.\n\nSed venenatis, erat non rutrum rhoncus, nulla lorem venenatis libero, ut rutrum diam libero non lacus. Suspendisse potenti. Donec porta turpis quis metus egestas luctus. Mauris faucibus nec sem eu pharetra. Maecenas sit amet bibendum libero. Proin tortor nisl, lobortis nec condimentum nec, dignissim quis lorem. Nunc ac mauris et augue bibendum eleifend in ut dui. Nulla at sodales risus. Vestibulum vel erat eros. Nunc gravida tellus lorem.\n\nCurabitur eros magna, tincidunt consectetur neque in, pulvinar fringilla lorem. In a eros mauris. Aenean vulputate massa eget elit efficitur aliquam. Quisque gravida suscipit sem, et bibendum nunc fringilla ut. Donec non interdum libero. Mauris molestie dictum odio, quis facilisis enim lobortis sit amet. Suspendisse felis elit, varius vel placerat eu, vestibulum at magna.\n\nSuspendisse potenti. Donec interdum, sem a pharetra accumsan, sem massa aliquet mi, ut facilisis elit eros vitae enim. Proin at ultricies quam. Nulla ut ante at orci suscipit porta quis sed nisl. Maecenas tempor eu lectus ut tincidunt. Vivamus felis lectus, iaculis ut pellentesque eget, blandit id nisl. Nullam placerat turpis et dui dignissim pretium. Curabitur non condimentum odio. Nullam dictum scelerisque sem, nec lobortis diam dapibus varius. In vulputate tincidunt mi.\n\nCurabitur fermentum sollicitudin massa, quis eleifend sapien lacinia pulvinar. Nulla at congue neque. Nulla vel dapibus ipsum, ac blandit augue. Fusce cursus dignissim arcu, nec tristique quam accumsan et. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Pellentesque iaculis ipsum ligula, non tincidunt enim pharetra sit amet. Aliquam quam libero, ultrices id bibendum quis, condimentum vitae dui. Sed scelerisque ultricies mollis. Mauris id erat mollis, suscipit erat vitae, congue nulla. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Curabitur rhoncus libero sapien, at laoreet urna volutpat eu. In hac habitasse platea dictumst. Aenean et orci vitae elit viverra elementum. Duis quis augue magna. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.', '', 18, '2021-07-02'),
(2, 'New Testing 2', 'Vestibulum interdum nibh mauris, ut rutrum justo congue non. Aenean et ipsum lobortis, sodales arcu quis, condimentum urna. Integer vel ornare purus. Praesent ac dolor quis quam vulputate tristique at at eros. Sed pretium rhoncus efficitur. Proin lectus risus, laoreet porttitor lectus vitae, blandit faucibus tortor. Cras pellentesque felis elit, sed malesuada est condimentum sit amet. Proin sem dui, gravida non ultricies vitae, rutrum non erat. Integer mattis tincidunt mi eget rhoncus. Quisque pharetra tempor nunc, a malesuada felis. Aliquam eget ullamcorper ipsum. Phasellus eleifend, arcu nec feugiat ullamcorper, lectus neque vestibulum lorem, eu interdum nulla enim sed diam. Vestibulum posuere est sit amet congue sagittis. Donec mattis quis nisl vitae scelerisque. Ut a dignissim mi. Aenean maximus nec est in rutrum.', '', 18, '2021-07-30');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile_picture` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `city` varchar(128) NOT NULL,
  `country_code` varchar(2) NOT NULL,
  `position` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `about` varchar(128) NOT NULL,
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

INSERT INTO `user` (`id`, `name`, `email`, `profile_picture`, `password`, `city`, `country_code`, `position`, `company`, `about`, `twitter`, `instagram`, `linkedin`, `role_id`, `is_active`, `date_created`) VALUES
(18, 'Pravda Mohammed', 'hasyim@hasyim.com', 'Koala.jpg', '$2y$10$g/mntjTKY8Qv7Y.cHQI1wuw2GKJfoS5udmSgUt7ZjwvKHU1YsDDrm', 'South Jakarta', 'ID', 'Junior Web Developer', 'NUADU ASIA Lte', 'I\'m Pravda\r\n', 'vunhalen', 'pravdam', '', 2, 1, 1626192997);

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
(8, 1, 2),
(9, 2, 4),
(11, 2, 5);

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
(5, 'Jobs');

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
(13, 'pravdam329@gmail.com', 'ueK2mwewuqtmK2RHfI/TkEF/ipy33GDc1EH/oC6CKH4=', 1625189715),
(14, 'pravdam329@gmail.com', '0f1AXG6Yv4BXios9F95+CwSw3RUDtE6s7fzeLyQtFvA=', 1626010781),
(15, 'pravdam329@gmail.com', 'kJifWW0jKeF36erRA1EjKlX1PtjcLxAdBO6/RzIOSwM=', 1626103158),
(16, 'theweeknd@parampaa.com', 'gv3Nm0SqeuXb1SN5e52mnWEUZndiL3VrI7rmezgT364=', 1626103328),
(17, 'hasyim@hasyim.com', 'zXkzjtWIsM8RO7ZNG3m+whw/4uSzt1oNcG7N25AO3Gk=', 1626192997);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`),
  ADD KEY `author_id` (`author_id`) USING BTREE;

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
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
