-- phpMyAdmin SQL Dump
-- version 4.2.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 24, 2022 at 05:26 PM
-- Server version: 5.6.21
-- PHP Version: 5.6.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `geoparks`
--

-- --------------------------------------------------------

--
-- Table structure for table `article`
--

CREATE TABLE IF NOT EXISTS `article` (
  `id_article` varchar(128) NOT NULL,
  `title` varchar(128) NOT NULL,
  `content` longtext NOT NULL,
  `article_image` text NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `category_id` varchar(5) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_published` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE IF NOT EXISTS `categories` (
  `id_category` varchar(4) NOT NULL,
  `category_name` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id_category`, `category_name`) VALUES
('AC1', 'News'),
('AC2', 'Information'),
('AC3', 'Opinion');

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id_comment` varchar(5) NOT NULL,
  `comment_text` longtext NOT NULL,
  `article_id` varchar(10) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `id_country` varchar(10) NOT NULL,
  `iso` char(2) NOT NULL,
  `nicename` varchar(30) NOT NULL,
  `region_id` varchar(5) NOT NULL,
  `logo` text NOT NULL,
  `country_desc` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id_country`, `iso`, `nicename`, `region_id`, `logo`, `country_desc`) VALUES
('CT8REG1', 'CN', 'China', 'REG1', 'default.png', ''),
('CT1REG1', 'ID', 'Indonesia', 'REG1', 'default.png', 'plerplerpler<p></p>'),
('CT2REG1', 'IR', 'Iran', 'REG1', 'default.png', ''),
('CT3REG1', 'JP', 'Japan', 'REG1', 'default.png', ''),
('CT5REG1', 'KR', 'Korea, Republic of', 'REG1', 'default.png', ''),
('CT4REG1', 'MY', 'Malaysia', 'REG1', 'default.png', ''),
('CT6REG1', 'TH', 'Thailand', 'REG1', 'default.png', ''),
('CT7REG1', 'VN', 'Vietnam', 'REG1', 'default.png', ''),
('CT9REG2', 'BE', 'Belgium', 'REG2', 'default.png', ''),
('CT10REG2', 'HR', 'Croatia', 'REG2', 'default.png', ''),
('CT11REG2', 'CY', 'Cyprus', 'REG2', 'default.png', ''),
('CT12REG2', 'DK', 'Denmark', 'REG2', 'default.png', ''),
('CT13REG2', 'CZ', 'Czech Republic', 'REG2', 'default.png', ''),
('CT14REG2', 'FI', 'Finland', 'REG2', 'default.png', ''),
('CT15REG2', 'FR', 'France', 'REG2', 'default.png', ''),
('CT16REG2', 'DE', 'Germany', 'REG2', 'default.png', ''),
('CT17REG2', 'GR', 'Greece', 'REG2', 'default.png', ''),
('CT18REG2', 'HU', 'Hungary', 'REG2', 'default.png', ''),
('CT19REG2', 'IS', 'Iceland', 'REG2', 'default.png', ''),
('CT20REG2', 'IE', 'Ireland', 'REG2', 'default.png', ''),
('CT21REG2', 'GB', 'Ireland, Republic Of & Norther', 'REG2', 'default.png', ''),
('CT22REG2', 'IT', 'Italy', 'REG2', 'default.png', ''),
('CT23REG2', 'NL', 'Netherlands', 'REG2', 'default.png', ''),
('CT24REG2', 'MX', 'Mexico', 'REG3', 'default.png', ''),
('CT25REG2', 'NO', 'Norway', 'REG2', 'default.png', ''),
('CT26REG2', 'PL', 'Poland', 'REG2', 'default.png', ''),
('CT27REG2', 'RO', 'Romania', 'REG2', 'default.png', ''),
('CT28REG2', 'RU', 'Russian Federation', 'REG2', 'default.png', ''),
('CT29REG2', 'RS', 'Serbia', 'REG2', 'default.png', ''),
('CT30REG2', 'SK', 'Slovakia', 'REG2', 'default.png', ''),
('CT31REG2', 'SI', 'Slovenia', 'REG2', 'default.png', ''),
('CT32REG2', 'ES', 'Spain', 'REG2', 'default.png', ''),
('CT33REG2', 'TR', 'Turkey', 'REG2', 'default.png', ''),
('CT34REG2', 'GB', 'United Kingdom', 'REG2', 'default.png', ''),
('CT35REG3', 'AT', 'Austria', 'REG2', 'default.png', ''),
('CT36REG3', 'BR', 'Brazil', 'REG3', 'default.png', ''),
('CT37REG3', 'CA', 'Canada', 'REG3', 'default.png', ''),
('CT38REG3', 'CL', 'Chile', 'REG3', 'default.png', ''),
('CT39REG3', 'EC', 'Ecuador', 'REG3', 'default.png', ''),
('CT40REG3', 'NI', 'Nicaragua', 'REG3', 'default.png', ''),
('CT41REG3', 'PE', 'Peru', 'REG3', 'default.png', ''),
('CT42REG3', 'UY', 'Uruguay', 'REG3', 'default.png', ''),
('CT43REG4', 'MA', 'Morocco', 'REG4', 'default.png', ''),
('CT44REG4', 'TZ', 'Tanzania', 'REG4', 'default.png', '');

-- --------------------------------------------------------

--
-- Table structure for table `geoname`
--

CREATE TABLE IF NOT EXISTS `geoname` (
  `id_geoname` varchar(20) NOT NULL,
  `geotype_id` varchar(128) NOT NULL,
  `country_id` varchar(10) NOT NULL,
  `geoname` varchar(128) NOT NULL,
  `image` longtext NOT NULL,
  `lat` text NOT NULL,
  `long` text NOT NULL,
  `geo_insta` varchar(30) NOT NULL,
  `geo_link` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geoname`
--

INSERT INTO `geoname` (`id_geoname`, `geotype_id`, `country_id`, `geoname`, `image`, `lat`, `long`, `geo_insta`, `geo_link`) VALUES
('GP1CT1REG1', 'GT1', 'CT1REG1', 'Batur', 'default.png', '-8.239777903822924', '115.38605690002443', '', ''),
('GP2CT1REG1', 'GT1', 'CT1REG1', 'Belitong', 'default.png', '63.23362741232569', '-265.78125000000006', '', ''),
('GP3CT1REG1', 'GT1', 'CT1REG1', 'Ciletuh-Palabuhanratu', 'default.png', '', '', '', ''),
('GP4CT1REG1', 'GT1', 'CT1REG1', 'Gunung Sewu', 'default.png', '', '', '', ''),
('GP5CT1REG1', 'GT1', 'CT1REG1', 'Rinjani-Lombok', 'default.png', '', '', '', ''),
('GP6CT1REG1', 'GT1', 'CT1REG1', 'Toba Caldera', 'default.png', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `geotype`
--

CREATE TABLE IF NOT EXISTS `geotype` (
  `id_geotype` varchar(5) NOT NULL,
  `geotype_name` varchar(30) NOT NULL,
  `geotype_color` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `geotype`
--

INSERT INTO `geotype` (`id_geotype`, `geotype_name`, `geotype_color`) VALUES
('GT1', 'UNESCO Global Geopark (UGGp)', 'success'),
('GT2', 'National Geopark', 'primary'),
('GT3', 'Aspiring Geopark', 'info');

-- --------------------------------------------------------

--
-- Table structure for table `jobtype`
--

CREATE TABLE IF NOT EXISTS `jobtype` (
  `id_jobtype` varchar(4) NOT NULL,
  `jobtype_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `jobtype`
--

INSERT INTO `jobtype` (`id_jobtype`, `jobtype_name`) VALUES
('JT1', 'Full Time'),
('JT2', 'Part Time'),
('JT3', 'Freelance'),
('JT4', 'Internship');

-- --------------------------------------------------------

--
-- Table structure for table `jobvacancy`
--

CREATE TABLE IF NOT EXISTS `jobvacancy` (
  `id_job` varchar(10) NOT NULL,
  `job_position` varchar(128) NOT NULL,
  `job_company` varchar(128) NOT NULL,
  `location` varchar(256) NOT NULL,
  `type_id` varchar(5) NOT NULL,
  `description` longtext NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_published` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
`id_notification` int(5) NOT NULL,
  `text` varchar(256) NOT NULL,
  `type` varchar(128) NOT NULL,
  `type_color` varchar(128) NOT NULL,
  `type_icon` varchar(128) NOT NULL,
  `user_id` varchar(10) NOT NULL,
  `time_created` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_read` int(1) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE IF NOT EXISTS `pages` (
  `id_pages` varchar(10) NOT NULL,
  `idx_pages` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `type` int(11) NOT NULL,
  `link` text NOT NULL,
  `content` longtext NOT NULL,
  `pageparent_id` varchar(5) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id_pages`, `idx_pages`, `title`, `type`, `link`, `content`, `pageparent_id`, `image`) VALUES
('PG1', 2, 'Geoparks Youth Hub', 1, '', '<p></p><p></p><p></p><p style="text-align: justify; ">Geoparks Youth Hub is a platform to connect youths around the world for sustaining the Geoparks. It is powered by the Ministry of National Development Planning/National Development Planning Agency of Republic of Indonesia (Bappenas) in collaboration with Indonesian Maritime Youths (Maritim Muda Nusantara), UNESCO Global Geoparks Youth Forum, and Indonesia Geopark Youth Forum. This platform provides a digital communication media for Geoparks youth across countries, also provide information of Geoparks youth activities, events, and job vacancies.<br></p><p></p><p></p><p></p>', 'PP1', 'toba.jpg'),
('PG2', 4, 'Geopark', 1, '', '<p></p><p style="text-align: justify; line-height: 1.8;">Geopark is a single or combined geographic area which has Geosite and valuable landscape related to Geoheritage, Geodiversity, Biodiversity and Cultural Diversity, also managed for conservation, education and economic development sustainably with active involvement of society and government, so can be used for improving the understanding and raising the awareness of communities to the earth and their environment.</p><p style="text-align: justify; line-height: 1.8;">UNESCO Global Geoparks are single, unified geographical areas where sites and landscapes of international geological significance are managed with a holistic concept of protection, education and sustainable development.</p><p style="text-align: justify; line-height: 1.8;">A UNESCO Global Geopark uses its geological heritage, in connection with all other aspects of the area’s natural and cultural heritage, to enhance awareness and understanding of key issues facing society in the context of the dynamic planet we all live on, mitigating the effects of climate change and reducing the impact of natural disasters. By raising awareness of the importance of the area’s geological heritage in history and society today, UNESCO Global Geoparks give local people a sense of pride in their region and strengthen their identification with the area. The creation of innovative local enterprises, new jobs and high quality training courses is stimulated as new sources of revenue are generated through sustainable geotourism, while the geological resources of the area are protected.</p><p></p>', 'PP1', 'rinjani.jpg'),
('PG3', 1, 'Global Geopark Network', 1, '', '<p></p><p style="text-align: justify; line-height: 1.8;">Geopark is a single or combined geographic area which has Geosite and valuable landscape related to Geoheritage, Geodiversity, Biodiversity and Cultural Diversity, also managed for conservation, education and economic development sustainably with active involvement of society and government, so can be used for improving the understanding and raising the awareness of communities to the earth and their environment.</p><p style="text-align: justify; line-height: 1.8;">UNESCO Global Geoparks are single, unified geographical areas where sites and landscapes of international geological significance are managed with a holistic concept of protection, education and sustainable development.</p><p style="text-align: justify; line-height: 1.8;">A UNESCO Global Geopark uses its geological heritage, in connection with all other aspects of the area’s natural and cultural heritage, to enhance awareness and understanding of key issues facing society in the context of the dynamic planet we all live on, mitigating the effects of climate change and reducing the impact of natural disasters. By raising awareness of the importance of the area’s geological heritage in history and society today, UNESCO Global Geoparks give local people a sense of pride in their region and strengthen their identification with the area. The creation of innovative local enterprises, new jobs and high quality training courses is stimulated as new sources of revenue are generated through sustainable geotourism, while the geological resources of the area are protected.</p><p></p>', 'PP1', 'batur.jpg'),
('PG4', 5, 'Indonesia Geopark Action Plan Secretariat', 2, 'https://rangeopark.bappenas.go.id', '<p><p><p><p><p style="line-height: 1.8;">Geopark is a single or combined geographic area which has Geosite and valuable landscape related to Geoheritage, Geodiversity, Biodiversity and Cultural Diversity, also managed for conservation, education and economic development sustainably with active involvement of society and government, so can be used for improving the understanding and raising the awareness of communities to the earth and their environment.</p><p style="line-height: 1.8;">UNESCO Global Geoparks are single, unified geographical areas where sites and landscapes of international geological significance are managed with a holistic concept of protection, education and sustainable development.</p><p style="line-height: 1.8;">A UNESCO Global Geopark uses its geological heritage, in connection with all other aspects of the area’s natural and cultural heritage, to enhance awareness and understanding of key issues facing society in the context of the dynamic planet we all live on, mitigating the effects of climate change and reducing the impact of natural disasters. By raising awareness of the importance of the area’s geological heritage in history and society today, UNESCO Global Geoparks give local people a sense of pride in their region and strengthen their identification with the area. The creation of innovative local enterprises, new jobs and high quality training courses is stimulated as new sources of revenue are generated through sustainable geotourism, while the geological resources of the area are protected.</p></p></p></p></p>', 'PP1', 'ciletuh.jpg'),
('PG5', 3, 'Maritim Muda Nusantara', 1, '', '<p></p><p style="text-align: justify; line-height: 1.8;">Maritim Muda Nusantara (Indonesian Maritime Youths), commonly known as Maritim Muda, is a national youth organization in maritime affairs. Maritim Muda was formed on December 13, 2018 to coincide with Nusantara Day in Jakarta by 6 young Indonesians who were called to serve their homeland and nation through sustainable maritime development, namely Kaisae Akhir, Antonius Rio Sandi Sirait, Imanda Hikmat Pradana, Ranitya Nurlita, Denny Suwarso Putra, and Bondan Bhaskara.</p><p style="text-align: justify; line-height: 1.8;">With ideologies and ideas to encourage the young generation to realize their role in developing Indonesia''s maritime as the global maritime fulcrum, these young people unite to establish Maritim Muda. This organization operates on an academic background, maritime science, and refers to Indonesia various maritime policies and current conditions. Maritim Muda Nusantara has been approved as a Legal Entity of the Association of Maritim Muda Nusantara through the Decree of the Minister of Law and Human Rights of the Republic of Indonesia No. AHU-0001244.AH.01.07.Tahun 2019 on February 14, 2019.</p><p style="text-align: justify; line-height: 1.8;">Maritim Muda ventured to be able to directly communicate and cooperate with various elements, both government and private institution. In result, Maritim Muda received a positive response in its movement in the maritime affairs. Maritim Muda is accepted as a maritime youth organization that is expert in maritime intellectuality and is quite critical in responding to maritime strategic issues as well as participating in real actions in education, research, and community service activities. Then, Maritim Muda started to fill the empty space of maritime youth, which still lacked contributions and ideas.</p><p style="text-align: justify; line-height: 1.8;">Apart from the Central Board, Maritim Muda Nusantara also has 34 provincial organizations and 45 local organizations (district/city/regional level).</p><p style="text-align: justify; line-height: 1.8;">Visit&nbsp;<a href="https://maritimmuda.com/" rel="noopener noreferrer" target="_blank" style="cursor: pointer; transition-duration: 0.2s;">Maritim Muda Nusantara''s Website</a></p><p></p>', 'PP1', 'belitong.jpg'),
('PG6', 1, 'UNESCO Global Geoparks Youth Forum', 1, '', '<p></p><p></p><p></p><p style="text-align: justify; line-height: 1.8;">The 1st UNESCO Global Geoparks Youth Forum was organized during the 9th Conference on UNESCO Global Geopark in December 2021.<br></p><p style="text-align: justify; line-height: 1.8;">The main purpose of the UNESCO GLOBAL GEOPARKS YOUTH FORUM is to offer young people an opportunity to engage more concretely in the preparation of the philosophy mandate and activities of the UNESCO Global Geoparks, elaborate their contribution to the debates of the 9th International Conference on UNESCO Global Geoparks and foster their commitment to the realization of the future they want, being actors of change in their territories. They elaborated their proposal for actions contributing to the UNESCO Global Geoparks strategic framework for action 2021-2025, to address heritage protection, natural hazards mitigation, climate change and sustainable development in general.</p><p style="text-align: justify; line-height: 1.8;">Each Country hosting UNESCO Global Geoparks was represented in the YOUTH FORUM with youth delegates engaged with UNESCO Global Geoparks that believe in their power of making changes and aim to become influential within their communities.</p><p style="text-align: justify; line-height: 1.8;">The 1st Assembly of the YOUTH FORUM took place in parallel with the 9th International Conference on UNESCO Global Geoparks which took place in Jeju island, Republic of Korea in December 2021.</p><p style="text-align: justify; line-height: 1.8;">Participants need to be aged from 18 to 24 years (according to UN/UNESCO Youth designation), showing their engagement with UNESCO Global Geoparks:</p><p style="line-height: 1.8;"></p><ul style="margin-right: 0px; margin-bottom: 0px; margin-left: -20px; list-style-type: circle; line-height: 30px;"><li style="text-align: justify;">in their respective living/working contexts – territories and communities already included in the UNESCO Global Geoparks</li><li style="text-align: justify;">on issues related to Geological Heritage conservation, climate change adaptation, natural disaster mitigation, geo-tourism and sustainable territorial development.</li></ul><p style="line-height: 1.8;"></p><p style="text-align: justify; line-height: 1.8;">Participants were Geopark staff, Geopark partners, University researchers, phd candidates, university students or school students with clear engagement through their research or educational activity. Observers may include Youths from Countries hosting aspiring UNESCO Global Geoparks.</p><p style="text-align: justify; line-height: 1.8;">GGN – National Geopark Fora or Committees are responsible to nominate the representative of each country in the UNESCO Global Geoparks YOUTH FORUM and shall cover the expenses for their participation in the UNESCO Global Geoparks YOUTH FORUM meetings.</p><p style="text-align: justify; line-height: 1.8;">If a country wishes to nominate more representatives for the UNESCO Geoparks Youth Hub then the youth representatives of a country consist a country team with one vote at the UNESCO Geoparks Youth Hub meetings.</p><p style="line-height: 1.8;"></p><p style="line-height: 1.8;"></p><div style="text-align: justify;">Chairperson:&nbsp;Immanuel Deo Juvente Hasian Silalahi (Indonesia)</div><div style="text-align: justify;">Vice-Chairperson:&nbsp;Thu Trang Le (Cao Bang UGGp, Vietnam)</div><div style="text-align: justify;">Rapporteur:&nbsp;Fais Jindewha (Satun UGGp, Thailand)</div><p></p><p></p><p></p><p></p>', 'PP2', 'gunung-sewu.jpg'),
('PG7', 2, 'List per Country', 2, '/gyh/home/countries', '<p><p><p><p><p><p><p><p></p></p></p></p></p></p></p></p>', 'PP2', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_images`
--

CREATE TABLE IF NOT EXISTS `page_images` (
  `id_pageimage` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `page_id` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `file` longtext COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_parent`
--

CREATE TABLE IF NOT EXISTS `page_parent` (
  `id_pageparent` varchar(4) NOT NULL,
  `pageparent_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_parent`
--

INSERT INTO `page_parent` (`id_pageparent`, `pageparent_name`) VALUES
('PP1', 'About'),
('PP2', 'Youth Forum');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE IF NOT EXISTS `region` (
  `id_region` varchar(5) NOT NULL,
  `region_abbr` varchar(10) NOT NULL,
  `region_name` varchar(128) NOT NULL,
  `region_email` varchar(128) NOT NULL,
  `region_website` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id_region`, `region_abbr`, `region_name`, `region_email`, `region_website`) VALUES
('REG1', 'APGN', 'Asia - Pacific', 'apgn.office@gmail.com', 'http://asiapacificgeoparks.org/'),
('REG2', 'EGN', 'Europe', 'egncoordinator@hotmail.com', 'http://www.europeangeoparks.org/'),
('REG3', 'LACGN', 'Latin America and Carribean', 'geolacgeoparques@gmail.com', 'http://www.redgeolac.org/'),
('REG4', 'AUGGN', 'Africa', 'dgs.rbk@gmail.com', 'https://www.visitgeoparks.org/african-geopark-network');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE IF NOT EXISTS `role` (
`id` int(11) NOT NULL,
  `role_name` varchar(10) NOT NULL,
  `color` varchar(10) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `role_name`, `color`) VALUES
(1, 'Admin', 'secondary'),
(2, 'User', 'success'),
(3, 'Staff', 'primary');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE IF NOT EXISTS `site_settings` (
`id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `about_us` longtext NOT NULL,
  `logo` longtext NOT NULL,
  `instagram` text NOT NULL,
  `facebook` text NOT NULL,
  `footer_text` longtext NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `description`, `about_us`, `logo`, `instagram`, `facebook`, `footer_text`) VALUES
(1, 'Geoparks Youth Hub', 'Connecting Youths for Sustaining Geoparks', '<p class="font-secondary paragraph-lg text-dark"><b>Geoparks Youth Hub</b> is a platform to connect youths around the world for sustaining the Geoparks. It is powered by the Ministry of National Development Planning/National Development Planning Agency of Republic of Indonesia (Bappenas) in collaboration with Indonesian Maritime Youths (Maritim Muda Nusantara), UNESCO Global Geoparks Youth Forum, and Indonesia Geopark Youth Forum. This platform provides a digital communication media for Geoparks youth across countries, also provide information of Geoparks youth activities, events, and job vacancies.</p>', '766fa0aa31d7aa06e847c7f37312c142.png', 'geoparkyouth', 'geoparkyouth', '© 2022 Ministry of National Development Planning/National Development Planning Agency of Republic of Indonesia (Bappenas)');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`id` int(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `profile_picture` varchar(256) NOT NULL,
  `password` varchar(256) NOT NULL,
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `geoname_id` varchar(15) DEFAULT NULL,
  `position` varchar(128) NOT NULL,
  `company` varchar(128) NOT NULL,
  `about` varchar(256) NOT NULL,
  `twitter` varchar(128) NOT NULL,
  `instagram` varchar(128) NOT NULL,
  `linkedin` varchar(128) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `profile_picture`, `password`, `gender`, `dob`, `geoname_id`, `position`, `company`, `about`, `twitter`, `instagram`, `linkedin`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'Admin', 'pravdam329@gmail.com', 'def_0.png', '$2y$10$lVVh4IXkEjRdYVj1JGmiYuWe/7mg.l1U1DvmiTYGir9MEVCNEkWEK', 'M', '1999-03-02', 'GP2CT1REG1', 'Student', 'Institut Teknologi Indonesia', '<p>Informatics Engineering Student | Geoparks Youth Hub Developer</p>', 'pravdam', 'pravdam', 'pravdam', 1, 1, 1626859548);

-- --------------------------------------------------------

--
-- Table structure for table `user_access_menu`
--

CREATE TABLE IF NOT EXISTS `user_access_menu` (
`id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=64 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_access_menu`
--

INSERT INTO `user_access_menu` (`id`, `role_id`, `menu_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 1, 5),
(6, 1, 6),
(7, 1, 7),
(8, 1, 8),
(20, 1, 9),
(21, 1, 10),
(22, 1, 11),
(23, 1, 12),
(24, 1, 13),
(25, 1, 14),
(29, 2, 1),
(30, 2, 2),
(31, 2, 3),
(32, 2, 4),
(33, 2, 5),
(34, 2, 6),
(35, 2, 7),
(36, 2, 8),
(37, 2, 9),
(38, 2, 10),
(39, 2, 11),
(40, 2, 12),
(41, 2, 13),
(42, 2, 14),
(43, 3, 1),
(44, 3, 2),
(46, 3, 4),
(47, 3, 5),
(48, 3, 6),
(49, 3, 7),
(50, 3, 8),
(51, 3, 9),
(52, 3, 10),
(53, 3, 11),
(54, 3, 12),
(55, 3, 13),
(56, 3, 14),
(57, 1, 15),
(58, 1, 16),
(59, 1, 17),
(60, 3, 11),
(61, 3, 10),
(62, 3, 17),
(63, 1, 18);

-- --------------------------------------------------------

--
-- Table structure for table `user_menu`
--

CREATE TABLE IF NOT EXISTS `user_menu` (
`id` int(11) NOT NULL,
  `menu` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=19 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_menu`
--

INSERT INTO `user_menu` (`id`, `menu`) VALUES
(1, 'Admin'),
(2, 'Article'),
(3, 'Categories'),
(4, 'Country'),
(5, 'Dist'),
(6, 'InactiveUser'),
(7, 'Jobvacancy'),
(8, 'Pageparent'),
(9, 'Pages'),
(10, 'Region'),
(11, 'User'),
(12, 'Account'),
(13, 'Dashboard'),
(14, 'Notifications'),
(15, 'Message'),
(16, 'Jobtype'),
(17, 'Geoparks'),
(18, 'Pageimage');

-- --------------------------------------------------------

--
-- Table structure for table `user_messages`
--

CREATE TABLE IF NOT EXISTS `user_messages` (
  `time` datetime(6) NOT NULL,
  `sender_message_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `receiver_message_id` varchar(20) CHARACTER SET latin1 NOT NULL,
  `message` varchar(500) CHARACTER SET latin1 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_bin;

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE IF NOT EXISTS `user_role` (
`id` int(11) NOT NULL,
  `role` varchar(128) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_role`
--

INSERT INTO `user_role` (`id`, `role`) VALUES
(1, 'Administrator'),
(2, 'User'),
(3, 'Staff');

-- --------------------------------------------------------

--
-- Table structure for table `user_sub_menu`
--

CREATE TABLE IF NOT EXISTS `user_sub_menu` (
`id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `url` varchar(128) NOT NULL,
  `icon` varchar(128) NOT NULL,
  `is_active` int(11) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;

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

CREATE TABLE IF NOT EXISTS `user_token` (
`id` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `token` varchar(128) NOT NULL,
  `date_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `article`
--
ALTER TABLE `article`
 ADD PRIMARY KEY (`id_article`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
 ADD PRIMARY KEY (`id_category`);

--
-- Indexes for table `comment`
--
ALTER TABLE `comment`
 ADD PRIMARY KEY (`id_comment`);

--
-- Indexes for table `country`
--
ALTER TABLE `country`
 ADD PRIMARY KEY (`id_country`);

--
-- Indexes for table `geoname`
--
ALTER TABLE `geoname`
 ADD PRIMARY KEY (`id_geoname`);

--
-- Indexes for table `geotype`
--
ALTER TABLE `geotype`
 ADD PRIMARY KEY (`id_geotype`);

--
-- Indexes for table `jobtype`
--
ALTER TABLE `jobtype`
 ADD PRIMARY KEY (`id_jobtype`);

--
-- Indexes for table `jobvacancy`
--
ALTER TABLE `jobvacancy`
 ADD PRIMARY KEY (`id_job`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
 ADD PRIMARY KEY (`id_notification`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
 ADD PRIMARY KEY (`id_pages`);

--
-- Indexes for table `page_images`
--
ALTER TABLE `page_images`
 ADD PRIMARY KEY (`id_pageimage`);

--
-- Indexes for table `page_parent`
--
ALTER TABLE `page_parent`
 ADD PRIMARY KEY (`id_pageparent`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
 ADD PRIMARY KEY (`id_region`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `site_settings`
--
ALTER TABLE `site_settings`
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
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
MODIFY `id_notification` int(5) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `id` int(10) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=33;
--
-- AUTO_INCREMENT for table `user_access_menu`
--
ALTER TABLE `user_access_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=64;
--
-- AUTO_INCREMENT for table `user_menu`
--
ALTER TABLE `user_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user_sub_menu`
--
ALTER TABLE `user_sub_menu`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `user_token`
--
ALTER TABLE `user_token`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;