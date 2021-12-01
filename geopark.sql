-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 02:09 PM
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

--
-- Dumping data for table `articles`
--

INSERT INTO `articles` (`id`, `title`, `content`, `image`, `author_id`, `category_id`, `date`, `is_published`) VALUES
(136, 'Brain Donors', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1028, 3, '2021-05-30 17:00:00', 0),
(137, 'Flamingo Road', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'default.jpg', 1041, 2, '2021-04-21 17:00:00', 1),
(138, 'Blast', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'default.jpg', 1009, 3, '2020-12-16 17:00:00', 1),
(139, 'Outfit, The', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'default.jpg', 1021, 2, '2021-10-01 17:00:00', 0),
(140, 'Day Lincoln Was Shot, The', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'default.jpg', 1030, 1, '2021-11-13 17:00:00', 1),
(141, 'Penguin Pool Murder', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'default.jpg', 1032, 2, '2021-01-29 17:00:00', 1),
(142, 'Peter Pan', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'default.jpg', 1037, 3, '2021-05-06 17:00:00', 0),
(143, 'Kill Me Again', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'default.jpg', 1037, 2, '2021-10-23 17:00:00', 0),
(144, 'Holy Girl, The (Niña santa, La)', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1025, 2, '2021-09-17 17:00:00', 1),
(145, 'Blade Runner', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'default.jpg', 1001, 3, '2021-08-12 17:00:00', 0),
(146, 'Stratton Story, The', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'default.jpg', 1026, 3, '2021-06-28 17:00:00', 0),
(147, 'Consequences of Love, The (Conseguenze dell\'amore, Le)', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'default.jpg', 1031, 1, '2021-11-10 17:00:00', 0),
(148, 'Captive, The', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'default.jpg', 1035, 3, '2021-10-02 17:00:00', 1),
(149, 'Confidential Agent', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'default.jpg', 1000, 3, '2021-11-21 17:00:00', 0),
(150, 'Brother Bear 2', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'default.jpg', 1009, 3, '2021-01-15 17:00:00', 1),
(151, 'One to Another (Chacun sa nuit)', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'default.jpg', 1026, 2, '2021-05-05 17:00:00', 0),
(152, 'In Crowd, The', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'default.jpg', 1022, 1, '2020-12-02 17:00:00', 0),
(153, 'Tell Them Willie Boy is Here', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1030, 2, '2021-06-24 17:00:00', 0),
(154, 'New Adventures of Pippi Longstocking, The', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'default.jpg', 1012, 3, '2021-08-29 17:00:00', 1),
(155, 'Strul', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1004, 1, '2021-01-25 17:00:00', 0),
(156, 'Big Game', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'default.jpg', 1019, 1, '2021-01-12 17:00:00', 0),
(157, 'Destiny (Al-massir)', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'default.jpg', 996, 1, '2021-08-18 17:00:00', 1),
(158, 'Fast & Furious 6 (Fast and the Furious 6, The)', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1010, 2, '2021-09-22 17:00:00', 0),
(159, 'Guarding Tess', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1034, 1, '2021-04-29 17:00:00', 0),
(160, 'Not Safe for Work', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 997, 2, '2021-06-24 17:00:00', 0),
(161, 'The Day I Saw Your Heart', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'default.jpg', 1032, 3, '2021-08-29 17:00:00', 0),
(162, 'Footnote (Hearat Shulayim)', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'default.jpg', 1024, 2, '2021-11-04 17:00:00', 0),
(163, 'Three Stooges Meet Hercules, The', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'default.jpg', 998, 3, '2021-06-14 17:00:00', 1),
(164, 'Summer of the Monkeys', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1030, 2, '2021-05-26 17:00:00', 0),
(165, 'Bent', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'default.jpg', 998, 1, '2021-04-22 17:00:00', 0),
(166, 'Love in Another Language (Baska Dilde Ask)', 'Donec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1034, 3, '2021-04-01 17:00:00', 1),
(167, 'Journey to the Center of the Earth', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'default.jpg', 1024, 1, '2021-07-02 17:00:00', 0),
(168, 'Initiation, The', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'default.jpg', 996, 3, '2021-05-06 17:00:00', 1),
(169, 'Sexual Life of the Belgians, The (Vie sexuelle des Belges 1950-1978, La)', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'default.jpg', 1014, 3, '2021-01-11 17:00:00', 1),
(170, 'The Losers', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.', 'default.jpg', 999, 3, '2021-09-09 17:00:00', 1),
(171, 'Agnes of God', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'default.jpg', 1038, 3, '2021-10-14 17:00:00', 1),
(172, '61*', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 1001, 3, '2021-03-04 17:00:00', 1),
(173, 'Whispering Corridors (Yeogo Goedam)', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1010, 2, '2021-05-27 17:00:00', 1),
(174, 'Inconvenient Truth, An', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', 'default.jpg', 1021, 1, '2021-01-26 17:00:00', 1),
(175, 'Sunday Bloody Sunday', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 'default.jpg', 1018, 1, '2021-07-05 17:00:00', 1),
(176, 'Watch, The', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'default.jpg', 1016, 2, '2021-05-30 17:00:00', 1),
(177, 'Cleo from 5 to 7 (Cléo de 5 à 7)', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'default.jpg', 1017, 2, '2021-10-01 17:00:00', 0),
(178, 'Broken Wings (Knafayim Shvurot)', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\r\n\r\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'default.jpg', 1006, 2, '2021-10-27 17:00:00', 1),
(179, 'Flodder in Amerika!', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'default.jpg', 998, 2, '2021-03-21 17:00:00', 0),
(180, 'Verdict, The', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'default.jpg', 1026, 3, '2021-07-11 17:00:00', 0),
(181, 'My Brother the Devil', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'default.jpg', 1018, 3, '2021-01-26 17:00:00', 1),
(182, 'Phantom (O Fantasma)', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'default.jpg', 1000, 2, '2021-01-12 17:00:00', 0),
(183, 'All About the Feathers (Por Las Plumas)', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'default.jpg', 1035, 2, '2021-06-02 17:00:00', 1),
(184, 'Exit to Eden', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1022, 3, '2021-03-21 17:00:00', 1),
(185, 'Camouflage (Barwy ochronne)', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'default.jpg', 1034, 1, '2021-01-17 17:00:00', 0),
(186, 'Big Stampede, The', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'default.jpg', 1042, 1, '2021-02-03 17:00:00', 0),
(187, 'Lourdes', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1009, 2, '2021-02-14 17:00:00', 0),
(188, 'Fish Tank', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'default.jpg', 1027, 1, '2021-05-09 17:00:00', 0),
(189, 'Comanche Moon', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'default.jpg', 1043, 3, '2021-09-21 17:00:00', 0),
(190, 'The Fearmakers', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 1011, 1, '2021-07-11 17:00:00', 1),
(191, 'Beverly Hills Chihuahua', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1003, 1, '2021-05-28 17:00:00', 1),
(192, 'Ed\'s Next Move', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1038, 2, '2021-10-13 17:00:00', 1),
(193, 'Aftermath', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 'default.jpg', 1038, 2, '2021-02-09 17:00:00', 1),
(194, 'Trial of the Incredible Hulk, The', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'default.jpg', 1034, 1, '2021-11-19 17:00:00', 0),
(195, 'Million Ways to Die in the West, A', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'default.jpg', 1000, 1, '2021-03-06 17:00:00', 0),
(196, 'Gates of Heaven', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'default.jpg', 1011, 1, '2020-12-07 17:00:00', 1),
(197, 'Day After Tomorrow, The', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'default.jpg', 1011, 2, '2021-11-15 17:00:00', 1),
(198, 'Cocktail', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'default.jpg', 996, 1, '2021-07-04 17:00:00', 1),
(199, 'Love Bites', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'default.jpg', 1001, 3, '2021-08-11 17:00:00', 0),
(200, 'Mr. Nice Guy (Yat goh ho yan)', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1001, 2, '2021-03-07 17:00:00', 0),
(201, 'G.B.F.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'default.jpg', 1033, 1, '2021-02-27 17:00:00', 1),
(202, 'Assault on Precinct 13', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'default.jpg', 1013, 1, '2020-12-05 17:00:00', 0),
(203, 'Western Union', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'default.jpg', 1018, 1, '2021-03-18 17:00:00', 0),
(204, 'Paulie', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'default.jpg', 1006, 2, '2021-01-02 17:00:00', 0),
(205, 'Commitments, The', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'default.jpg', 1021, 2, '2021-04-23 17:00:00', 1),
(206, 'Numbskull Emptybrook in the Army (Uuno Turhapuro armeijan leivissä)', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'default.jpg', 1037, 1, '2021-03-01 17:00:00', 1),
(207, 'Mystery (Fu cheng mi shi)', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'default.jpg', 1013, 3, '2021-06-08 17:00:00', 1),
(208, 'Three Musketeers, The', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'default.jpg', 1012, 2, '2021-09-22 17:00:00', 1),
(209, 'Misérables, Les', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'default.jpg', 996, 1, '2021-03-30 17:00:00', 1),
(210, 'Paperman', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'default.jpg', 1026, 1, '2021-08-23 17:00:00', 1),
(211, 'Wicked Lady, The', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.\r\n\r\nVestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 'default.jpg', 997, 1, '2021-04-06 17:00:00', 1),
(212, 'Unmade Beds', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1007, 3, '2021-04-23 17:00:00', 0),
(213, '7th Floor', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'default.jpg', 1040, 1, '2021-03-20 17:00:00', 1),
(214, 'Human Touch', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'default.jpg', 1020, 3, '2021-05-28 17:00:00', 0),
(215, 'My Summer of Love', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 'default.jpg', 1034, 2, '2021-10-04 17:00:00', 1),
(216, '20 Seconds of Joy', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'default.jpg', 1013, 2, '2021-04-01 17:00:00', 0),
(217, 'Equinox', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\r\n\r\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'default.jpg', 1011, 3, '2021-05-02 17:00:00', 0),
(218, 'Panama Hattie', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'default.jpg', 996, 2, '2021-07-15 17:00:00', 1),
(219, 'Half Life of Timofey Berezin, The (PU-239)', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'default.jpg', 1008, 2, '2021-09-07 17:00:00', 0);
INSERT INTO `articles` (`id`, `title`, `content`, `image`, `author_id`, `category_id`, `date`, `is_published`) VALUES
(220, 'Gabby Douglas Story, The', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1006, 2, '2021-01-03 17:00:00', 1),
(221, 'To Do List, The', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'default.jpg', 997, 3, '2021-11-09 17:00:00', 1),
(222, 'Pistol Opera (Pisutoru opera)', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'default.jpg', 1024, 1, '2020-12-16 17:00:00', 0),
(223, 'North (Nord)', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'default.jpg', 1010, 3, '2021-01-10 17:00:00', 0),
(224, 'Geronimo: An American Legend', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'default.jpg', 1015, 1, '2021-02-07 17:00:00', 0),
(225, 'Lifeguard, The', 'Fusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'default.jpg', 1026, 3, '2021-04-28 17:00:00', 0),
(226, 'For the Love of Benji', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'default.jpg', 1031, 2, '2020-12-31 17:00:00', 0),
(227, 'Tulpan', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'default.jpg', 995, 1, '2021-11-01 17:00:00', 0),
(228, 'Chattahoochee', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1035, 3, '2021-04-02 17:00:00', 0),
(229, 'Mourning Forest, The (Mogari no mori)', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'default.jpg', 1018, 3, '2021-07-06 17:00:00', 0),
(230, 'Skin Game, The', 'In congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'default.jpg', 1027, 1, '2021-10-02 17:00:00', 1),
(231, 'Make Like a Thief (Juokse kuin varas)', 'Fusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'default.jpg', 999, 3, '2021-11-09 17:00:00', 0),
(232, 'Mega Shark vs. Giant Octopus', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'default.jpg', 1021, 1, '2021-08-22 17:00:00', 0),
(233, 'Too Tough to Die: A Tribute to Johnny Ramone', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'default.jpg', 995, 3, '2021-01-29 17:00:00', 1),
(234, 'Milky Way, The (Voie lactée, La)', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'default.jpg', 994, 1, '2021-11-26 17:00:00', 1),
(235, 'Kivski Freski', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1042, 3, '2021-04-15 17:00:00', 1),
(236, 'Beware of Mr. Baker', 'Fusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'default.jpg', 1015, 2, '2021-09-14 17:00:00', 0),
(237, 'Last Broadcast, The', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'default.jpg', 997, 1, '2021-08-15 17:00:00', 0),
(238, 'Jumpin\' Jack Flash', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'default.jpg', 1016, 2, '2021-08-22 17:00:00', 1),
(239, 'Pearls of the Crown, The (Les perles de la couronne)', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1041, 3, '2021-04-27 17:00:00', 0),
(240, 'Pete \'n\' Tillie', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1012, 1, '2021-10-31 17:00:00', 0),
(241, 'Duellists, The', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1020, 2, '2021-07-14 17:00:00', 1),
(242, 'Miss and the Doctors (Tirez la langue, mademoiselle)', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'default.jpg', 997, 1, '2021-10-31 17:00:00', 0),
(243, 'Monsieur Lazhar', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'default.jpg', 1000, 2, '2021-03-10 17:00:00', 0),
(244, 'Highwaymen', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'default.jpg', 1027, 3, '2021-01-27 17:00:00', 1),
(245, 'To Faro (Mein Freund aus Faro)', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 995, 3, '2021-09-19 17:00:00', 1),
(246, 'Raisin in the Sun, A', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.', 'default.jpg', 1011, 2, '2021-10-10 17:00:00', 1),
(247, 'How I Got Into College', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'default.jpg', 1009, 3, '2020-12-11 17:00:00', 1),
(248, 'Atragon (Kaitei Gunkan)', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'default.jpg', 1036, 3, '2021-07-14 17:00:00', 0),
(249, 'Come Back to Me', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'default.jpg', 1022, 1, '2021-05-13 17:00:00', 1),
(250, 'Eye In The Sky (Gun chung)', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'default.jpg', 1016, 1, '2021-05-20 17:00:00', 1),
(251, 'Hurricane, The', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'default.jpg', 1036, 1, '2021-02-01 17:00:00', 0),
(252, 'Babylon 5: The Gathering', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'default.jpg', 1021, 3, '2021-07-26 17:00:00', 0),
(253, 'Shorts', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1009, 3, '2021-02-02 17:00:00', 1),
(254, 'Code Name: The Cleaner', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'default.jpg', 1015, 1, '2021-02-17 17:00:00', 0),
(255, 'Mask of Zorro, The', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'default.jpg', 1021, 1, '2021-07-14 17:00:00', 1),
(256, 'Pyramid of Triboulet, The (La pyramide de Triboulet)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.\r\n\r\nVestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 'default.jpg', 1039, 2, '2021-09-27 17:00:00', 0),
(257, 'La guerre des tuques', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\r\n\r\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'default.jpg', 1040, 2, '2021-09-08 17:00:00', 1),
(258, 'Rules of Engagement', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'default.jpg', 1008, 2, '2020-12-20 17:00:00', 0),
(259, 'Come and Get It', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'default.jpg', 1035, 1, '2021-10-16 17:00:00', 0),
(260, 'Chuck Norris vs Communism', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'default.jpg', 999, 1, '2021-01-05 17:00:00', 1),
(261, 'Aftermath', 'Fusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'default.jpg', 1039, 1, '2021-03-26 17:00:00', 0),
(262, 'A.C.O.D.', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1016, 2, '2021-05-16 17:00:00', 1),
(263, 'Manolito Four Eyes', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'default.jpg', 1013, 3, '2021-08-18 17:00:00', 0),
(264, 'Clockstoppers', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'default.jpg', 1022, 3, '2021-09-03 17:00:00', 1),
(265, 'Purely Belter', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'default.jpg', 1032, 1, '2021-07-13 17:00:00', 1),
(266, 'Man from Snowy River, The', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'default.jpg', 1007, 3, '2021-07-18 17:00:00', 1),
(267, 'Dog Run', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1013, 1, '2021-02-12 17:00:00', 1),
(268, 'House of 1000 Corpses', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'default.jpg', 1014, 1, '2021-07-31 17:00:00', 1),
(269, 'U.S. Seals', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1010, 2, '2021-01-03 17:00:00', 0),
(270, 'Turner & Hooch', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 1043, 3, '2021-03-26 17:00:00', 1),
(271, 'Haunting, The', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 999, 2, '2021-02-22 17:00:00', 1),
(272, 'Momma\'s Man', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1015, 3, '2021-08-11 17:00:00', 1),
(273, 'Cat from Outer Space, The', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\r\n\r\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'default.jpg', 1029, 3, '2021-04-29 17:00:00', 1),
(274, 'Good Woman, A', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1000, 2, '2021-06-22 17:00:00', 0),
(275, 'Texas Chainsaw Massacre: The Next Generation (a.k.a. The Return of the Texas Chainsaw Massacre)', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 997, 1, '2021-11-21 17:00:00', 1),
(276, 'Wing and a Prayer', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'default.jpg', 1026, 2, '2021-03-27 17:00:00', 1),
(277, 'Red Baron, The (Der rote Baron)', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1000, 1, '2021-10-30 17:00:00', 1),
(278, 'Beautician and the Beast, The', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'default.jpg', 1007, 2, '2021-10-09 17:00:00', 1),
(279, 'Hoax, The', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'default.jpg', 1021, 1, '2021-04-19 17:00:00', 0),
(280, 'Crimson Petal and the White, The', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'default.jpg', 1003, 2, '2021-02-09 17:00:00', 0),
(281, 'Big Bang Love, Juvenile A (46-okunen no koi)', 'In congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'default.jpg', 1005, 2, '2021-10-05 17:00:00', 1),
(282, 'Twin Sitters', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 1028, 3, '2021-05-14 17:00:00', 0),
(283, 'Chinese Coffee', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'default.jpg', 1010, 3, '2021-11-01 17:00:00', 0),
(284, 'By the People: The Election of Barack Obama', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 1021, 1, '2021-04-01 17:00:00', 0),
(285, 'Jab We Met', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'default.jpg', 1041, 1, '2021-10-11 17:00:00', 0),
(286, 'Wall, The (Die Wand)', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'default.jpg', 1006, 3, '2021-08-27 17:00:00', 1),
(287, 'Escape from L.A.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'default.jpg', 1003, 3, '2021-02-08 17:00:00', 1),
(288, 'Eye of God', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1000, 3, '2020-11-29 17:00:00', 0),
(289, 'Andrew Dice Clay: Indestructible', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'default.jpg', 1024, 3, '2021-06-10 17:00:00', 1),
(290, 'Doorway to Hell, The', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'default.jpg', 1013, 3, '2021-01-29 17:00:00', 0),
(291, 'Ju-on: The Beginning of the End (Ju-on: Owari no hajimari)', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.', 'default.jpg', 1027, 2, '2021-07-29 17:00:00', 0),
(292, 'Gay Divorcee, The', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'default.jpg', 1018, 1, '2021-08-23 17:00:00', 0),
(293, '¡Alambrista! (Illegal, The)', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\r\n\r\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'default.jpg', 1004, 1, '2021-05-08 17:00:00', 1),
(294, 'Closure', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\r\n\r\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'default.jpg', 1027, 1, '2021-06-15 17:00:00', 1),
(295, 'Motherhood', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'default.jpg', 1043, 1, '2021-03-20 17:00:00', 1),
(296, 'Interstellar', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1037, 2, '2021-11-05 17:00:00', 1),
(297, 'Mikado, The', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'default.jpg', 1014, 3, '2021-06-12 17:00:00', 0),
(298, 'Bubba Ho-tep', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'default.jpg', 1001, 2, '2021-01-02 17:00:00', 1),
(299, 'Robot & Frank', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', 'default.jpg', 1028, 3, '2021-03-09 17:00:00', 0),
(300, 'Parade', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'default.jpg', 1029, 2, '2021-05-24 17:00:00', 0);
INSERT INTO `articles` (`id`, `title`, `content`, `image`, `author_id`, `category_id`, `date`, `is_published`) VALUES
(301, 'New Police Story (Xin jing cha gu shi)', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\r\n\r\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'default.jpg', 999, 2, '2021-06-07 17:00:00', 1),
(302, 'Funny Man, A (Dirch)', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\r\n\r\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.', 'default.jpg', 1022, 2, '2020-12-12 17:00:00', 0),
(303, 'Big Lebowski, The', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'default.jpg', 1008, 1, '2021-03-24 17:00:00', 1),
(304, 'Executive Protection (Livvakterna)', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'default.jpg', 1001, 1, '2021-08-10 17:00:00', 1),
(305, 'Border Feud', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1023, 2, '2021-03-15 17:00:00', 0),
(306, 'Glass Menagerie, The', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\r\n\r\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'default.jpg', 996, 1, '2021-09-14 17:00:00', 0),
(307, 'Adventures of Milo and Otis, The (Koneko monogatari)', 'Fusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\r\n\r\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\r\n\r\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'default.jpg', 1010, 2, '2021-02-25 17:00:00', 0),
(308, 'Rage in Heaven', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'default.jpg', 1019, 2, '2021-11-25 17:00:00', 1),
(309, 'Skinwalkers', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 1000, 2, '2021-08-05 17:00:00', 0),
(310, 'Revolution Will Not Be Televised, The (a.k.a. Chavez: Inside the Coup)', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'default.jpg', 1007, 3, '2021-07-06 17:00:00', 0),
(311, 'In the Name of the King III', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\r\n\r\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'default.jpg', 1031, 3, '2021-08-21 17:00:00', 0),
(312, 'Boy of the Streets', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\r\n\r\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'default.jpg', 1016, 2, '2021-05-03 17:00:00', 0),
(313, 'False as Water (Falsk som vatten)', 'In congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\r\n\r\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', 'default.jpg', 997, 2, '2021-06-06 17:00:00', 0),
(314, 'Blue Car', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\r\n\r\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\r\n\r\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'default.jpg', 997, 3, '2021-06-09 17:00:00', 1),
(315, 'George & A.J.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\r\n\r\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\r\n\r\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'default.jpg', 1021, 2, '2021-02-28 17:00:00', 0),
(316, 'Horror of the Zombies', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\r\n\r\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'default.jpg', 1015, 2, '2021-04-30 17:00:00', 0),
(317, 'Chained for Life', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\r\n\r\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\r\n\r\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\r\n\r\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'default.jpg', 1032, 1, '2021-05-12 17:00:00', 1),
(318, 'Ay, Carmela! (¡Ay, Carmela!)', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.\r\n\r\nVestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 'default.jpg', 1039, 3, '2021-03-15 17:00:00', 1),
(319, 'Last Play at Shea, The', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 999, 2, '2021-02-03 17:00:00', 1),
(320, 'Cowards Bend the Knee (a.k.a. The Blue Hands)', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\r\n\r\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\r\n\r\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'default.jpg', 1004, 1, '2021-06-06 17:00:00', 1),
(321, 'Chimes at Midnight (Campanadas a medianoche)', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\r\n\r\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\r\n\r\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'default.jpg', 1017, 3, '2021-03-20 17:00:00', 0),
(322, 'Glass Slipper, The', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1023, 1, '2021-09-13 17:00:00', 1),
(323, 'Spring Breakers', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.\r\n\r\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'default.jpg', 1028, 2, '2021-06-05 17:00:00', 0),
(324, 'Alien Space Avenger', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'default.jpg', 1001, 2, '2021-03-01 17:00:00', 1),
(325, 'Mass Transit', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'default.jpg', 1041, 2, '2021-06-21 17:00:00', 1),
(326, 'St. George Shoots the Dragon (Sveti Georgije ubiva azdahu)', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\r\n\r\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\r\n\r\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'default.jpg', 1032, 1, '2021-11-16 17:00:00', 1),
(327, 'Love Bites', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\r\n\r\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\r\n\r\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', 'default.jpg', 1014, 1, '2021-05-02 17:00:00', 1),
(328, 'Alan & Naomi', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\r\n\r\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\r\n\r\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'default.jpg', 1015, 1, '2021-06-01 17:00:00', 0),
(329, '180° South (180 Degrees South) (180° South: Conquerors of the Useless)', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\r\n\r\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\r\n\r\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\r\n\r\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\r\n\r\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'default.jpg', 1005, 3, '2021-06-01 17:00:00', 1),
(330, 'Way Home, The (Jibeuro)', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\r\n\r\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.', 'default.jpg', 999, 3, '2021-05-27 17:00:00', 1),
(331, 'A Merry Friggin\' Christmas', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\r\n\r\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\r\n\r\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'default.jpg', 1029, 1, '2021-04-27 17:00:00', 0),
(332, 'Angel and the Badman', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\r\n\r\nPhasellus in felis. Donec semper sapien a libero. Nam dui.\r\n\r\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'default.jpg', 996, 3, '2021-05-01 17:00:00', 1),
(333, 'Cobra Woman', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\r\n\r\nFusce consequat. Nulla nisl. Nunc nisl.\r\n\r\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'default.jpg', 1023, 3, '2020-12-14 17:00:00', 1),
(334, 'Story of Marie and Julien, The (Histoire de Marie et Julien)', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\r\n\r\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\r\n\r\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'default.jpg', 1006, 2, '2021-04-26 17:00:00', 1),
(335, 'All the Light in the Sky', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\r\n\r\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\r\n\r\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\r\n\r\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\r\n\r\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'default.jpg', 1025, 1, '2021-01-20 17:00:00', 0);

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
  `id` int(11) NOT NULL,
  `iso` char(2) NOT NULL,
  `nicename` varchar(80) NOT NULL,
  `region` varchar(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`id`, `iso`, `nicename`, `region`) VALUES
(1, 'AT', 'Austria', 'EGN'),
(2, 'BE', 'Belgium', 'EGN'),
(3, 'BR', 'Brazil', 'LACGN'),
(4, 'CA', 'Canada', 'LACGN'),
(5, 'CL', 'Chile', 'LACGN'),
(6, 'CN', 'China', 'APGN'),
(7, 'CR', 'Croatia', 'EGN'),
(8, 'CY', 'Cyprus', 'EGN'),
(9, 'CZ', 'Czech Republic', 'EGN'),
(10, 'DK', 'Denmark', 'EGN'),
(11, 'EC', 'Ecuador', 'LACGN'),
(12, 'FI', 'Finland', 'EGN'),
(13, 'FR', 'France', 'EGN'),
(14, 'DE', 'Germany', 'EGN'),
(15, 'GR', 'Greece', 'EGN'),
(16, 'HU', 'Hungary', 'EGN'),
(17, 'IS', 'Iceland', 'EGN'),
(18, 'ID', 'Indonesia', 'APGN'),
(19, 'IR', 'Iran', 'APGN'),
(20, 'IE', 'Ireland', 'EGN'),
(21, 'IX', 'Ireland, Republic of & Northern Ireland', 'EGN'),
(22, 'IT', 'Italy', 'EGN'),
(23, 'JP', 'Japan', 'APGN'),
(24, 'MY', 'Malaysia', 'APGN'),
(25, 'MX', 'Mexico', 'EGN'),
(26, 'MA', 'Morocco', 'AUGGN'),
(27, 'NL', 'Netherlands', 'EGN'),
(28, 'NI', 'Nicaragua', 'LACGN'),
(29, 'NO', 'Norway', 'EGN'),
(30, 'PE', 'Peru', 'LACGN'),
(31, 'PL', 'Poland', 'EGN'),
(32, 'KR', 'Korea, Republic of', 'APGN'),
(33, 'RO', 'Romania', 'EGN'),
(34, 'RU', 'Russian Federation', 'EGN'),
(35, 'RS', 'Serbia', 'EGN'),
(36, 'SK', 'Slovakia', 'EGN'),
(37, 'SI', 'Slovenia', 'EGN'),
(38, 'ES', 'Spain', 'EGN'),
(39, 'TZ', 'Tanzania', 'AUGGN'),
(40, 'TH', 'Thailand', 'APGN'),
(41, 'TR', 'Turkey', 'EGN'),
(42, 'GB', 'United Kingdom', 'EGN'),
(43, 'UY', 'Uruguay', 'LACGN'),
(44, 'VN', 'Vietnam', 'APGN');

-- --------------------------------------------------------

--
-- Table structure for table `geoname`
--

CREATE TABLE `geoname` (
  `iso` varchar(128) NOT NULL,
  `geotype_id` varchar(128) NOT NULL,
  `country_id` varchar(3) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `geoname`
--

INSERT INTO `geoname` (`iso`, `geotype_id`, `country_id`, `name`, `image`) VALUES
('alxadesertuggp', 'unescoglobalgeopark', 'CN', 'Alxa Desert UGGp', 'default.jpg'),
('araripeuggp', 'unescoglobalgeopark', 'BR', 'Araripe UGGp', 'default.jpg'),
('arxan', 'unescoglobalgeopark', 'CN', 'Arxan UGGp', 'default.jpg'),
('bakonybalatonuggp', 'unescoglobalgeopark', 'HU', 'Bakony - Balaton UGGp', 'default.jpg'),
('batur', 'unescoglobalgeopark', 'ID', 'Batur UNESCO Global Geopark', 'batur.jpg'),
('beaujolaisuggp', 'unescoglobalgeopark', 'FR', 'Beaujolais UGGp', 'default.jpg'),
('belitong', 'unescoglobalgeopark', 'ID', 'Belitong UNESCO Global Geopark', 'belitong.jpeg'),
('bergstraßeodenwalduggp', 'unescoglobalgeopark', 'DE', 'Bergstraße UGGp', 'default.jpg'),
('bohemianparadiseuggp', 'unescoglobalgeopark', 'CZ', 'Bohemian Paradise UGGp', 'default.jpg'),
('bojonegoro', 'nationalgeopark', 'ID', 'Bojonegoro National Geopark', 'bojonegoro.jpg'),
('caussesduquercyuggp', 'unescoglobalgeopark', 'FR', 'Causses du Quercy UGGp', 'default.jpg'),
('chablaisuggp', 'unescoglobalgeopark', 'FR', 'Chablais UGGp', 'default.jpg'),
('chelmosvouraikosuggp', 'unescoglobalgeopark', 'GR', 'Chelmos Vouraikos UGGp', 'default.jpg'),
('ciletuhpalabuhanratu', 'unescoglobalgeopark', 'ID', 'Ciletuh-Palabuhanratu UNESCO Global Geopark', 'ciletuh.jpg'),
('cliffsoffundyuggp', 'unescoglobalgeopark', 'CA', 'Cliffs of Fundy UGGp', 'default.jpg'),
('dalicangshanuggp', 'unescoglobalgeopark', 'CN', 'Dali-Cangshan UGGp', 'default.jpg'),
('danxiashanuggp', 'unescoglobalgeopark', 'CN', 'Danxiashan UGGp', 'default.jpg'),
('discoveryuggp', 'unescoglobalgeopark', 'CA', 'Discovery UGGp', 'default.jpg'),
('dunhuanguggp', 'unescoglobalgeopark', 'CN', 'Dunhuang UGGp', 'default.jpg'),
('famenneardenneuggp', 'unescoglobalgeopark', 'BE', 'Famenne-Ardenne UGGp', 'default.jpg'),
('fangshanuggp', 'unescoglobalgeopark', 'CN', 'Fangshan UGGp', 'default.jpg'),
('funiushanuggp', 'unescoglobalgeopark', 'CN', 'Funiushan UGGp', 'default.jpg'),
('grevenakozaniuggp', 'unescoglobalgeopark', 'GR', 'Grevena - kozani UGGp', 'default.jpg'),
('guangwushannuoshuiheuggp', 'unescoglobalgeopark', 'CN', 'Guangwushan-Nuoshuihe UGGp', 'default.jpg'),
('gunungsewu', 'unescoglobalgeopark', 'ID', 'Gunung Sewu UNESCO Global Geopark', 'sewu.jpg'),
('harzbraunschweigerlanduggp', 'unescoglobalgeopark', 'DE', 'Harz Braunschweiger Land UGGp', 'default.jpg'),
('hauteprovenceuggp', 'unescoglobalgeopark', 'FR', 'Haute-Provence UGGp', 'default.jpg'),
('hexigtenuggp', 'unescoglobalgeopark', 'CN', 'Hexigten UGGp', 'default.jpg'),
('hongkonguggp', 'unescoglobalgeopark', 'CN', 'Hong Kong UGGp', 'default.jpg'),
('huanggangdableshanuggp', 'unescoglobalgeopark', 'CN', 'Huanggang Dableshan UGGp', 'default.jpg'),
('huangshanuggp', 'unescoglobalgeopark', 'CN', 'Huangshan UGGp', 'default.jpg'),
('ijen', 'nationalgeopark', 'ID', 'Ijen National Geopark', 'ijen.jpg'),
('imbaburauggp', 'unescoglobalgeopark', 'EC', 'Imbabura UGGp', 'default.jpg'),
('jingpohuuggp', 'unescoglobalgeopark', 'CN', 'Jingpohu UGGp', 'default.jpg'),
('jiuhuashanuggp', 'unescoglobalgeopark', 'CN', 'Jiuhuashan UGGp', 'default.jpg'),
('karangsambungkarangbolong', 'nationalgeopark', 'ID', 'Karangsambung Karangbolong National Geopark', 'karangsambung.jpg'),
('karawankenkaravankeuggp', 'unescoglobalgeopark', 'AT', 'Karawanken / Karavanke UGGp', 'default.jpg'),
('katlauggp', 'unescoglobalgeopark', 'IS', 'Katla UGGp', 'default.jpg'),
('keketuohaiuggp', 'unescoglobalgeopark', 'CN', 'Keketuohai UGGp', 'default.jpg'),
('kutralkurauggp', 'unescoglobalgeopark', 'CL', 'Kutralkura UGGp', 'default.jpg'),
('lauhanvuorihaemeenkangasuggp', 'unescoglobalgeopark', 'FI', 'Lauhanvuori Haemeenkangas UGGp', 'default.jpg'),
('leiqionguggp', 'unescoglobalgeopark', 'CN', 'Leiqiong UGGp', 'default.jpg'),
('lesvosislanduggp', 'unescoglobalgeopark', 'GR', 'Lesvos Island UGGp', 'default.jpg'),
('leyefengshanuggp', 'unescoglobalgeopark', 'CN', 'Leye Fengshan UGGp', 'default.jpg'),
('longhushanuggp', 'unescoglobalgeopark', 'CN', 'Longhushan UGGp', 'default.jpg'),
('luberonuggp', 'unescoglobalgeopark', 'FR', 'Luberon UGGp', 'default.jpg'),
('lushanuggp', 'unescoglobalgeopark', 'CN', 'Lushan UGGp', 'default.jpg'),
('marospangkep', 'nationalgeopark', 'ID', 'Maros Pangkep National Geopark', 'maros.jpeg'),
('massifdesbaugesuggp', 'unescoglobalgeopark', 'FR', 'Massif des Bauges UGGp', 'default.jpg'),
('merangin', 'nationalgeopark', 'ID', 'Merangin National Geopark', 'merangin.jpg'),
('meratus', 'nationalgeopark', 'ID', 'Meratus National Geopark', 'meratus.jpg'),
('montsdardecheuggp', 'unescoglobalgeopark', 'FR', 'Monts d`Ardeche UGGp', 'default.jpg'),
('mountkunlunuggp', 'unescoglobalgeopark', 'CN', 'Mount Kunlun UGGp', 'default.jpg'),
('muskauerfaltenbogenlukmuzakowauggp', 'unescoglobalgeopark', 'DE', 'Muskauer Faltenbogen / Luk Muzakowa UGGp', 'default.jpg'),
('natuna', 'nationalgeopark', 'ID', 'Natuna National Geopark', 'natuna.jpg'),
('ngaraisianokmaninjau', 'nationalgeopark', 'ID', 'Ngarai Sianok-Maninjau National Geopark', 'ngarai.jpg'),
('ningdeuggp', 'unescoglobalgeopark', 'CN', 'Ningde UGGp', 'default.jpg'),
('novohradnograduggp', 'unescoglobalgeopark', 'HU', 'Novohrad - Nograd UGGp', 'default.jpg'),
('odsherreduggp', 'unescoglobalgeopark', 'DK', 'Odsherred UGGp', 'default.jpg'),
('oreoftheaplsugg', 'unescoglobalgeopark', 'AT', 'Ore of The Apls UGGp', 'default.jpg'),
('papukuggp', 'unescoglobalgeopark', 'CR', 'Papuk UGGp', 'default.jpg'),
('perceuggp', 'unescoglobalgeopark', 'CA', 'Perce UGGp', 'default.jpg'),
('pongkor', 'nationalgeopark', 'ID', 'Pongkor National Geopark', 'pongkor.jpg'),
('psiloritisuggp', 'unescoglobalgeopark', 'GR', 'Psiloritis UGGp', 'default.jpg'),
('qinlingzhongnanshanuggp', 'unescoglobalgeopark', 'CN', 'Qinling Zhongnanshan UGGp', 'default.jpg'),
('queshmislanduggp', 'unescoglobalgeopark', 'IR', 'Queshm Island UGGp', 'default.jpg'),
('rajaampat', 'nationalgeopark', 'ID', 'Raja Ampat National Geopark', 'rajaampat.jpg'),
('ranahminangsilokek', 'nationalgeopark', 'ID', 'Ranah Minang Silokek National Geopark', 'ranah.jpg'),
('reykjanesuggp', 'unescoglobalgeopark', 'IS', 'Reykjanes UGGp', 'default.jpg'),
('rinjanilombok', 'unescoglobalgeopark', 'ID', 'Rinjani-Lombok UNESCO Global Geopark', 'rinjani.jpg'),
('rokuauggp', 'unescoglobalgeopark', 'FI', 'Rokua UGGp', 'default.jpg'),
('saimaauggp', 'unescoglobalgeopark', 'FI', 'Saimaa UGGp', 'default.jpg'),
('sanqingshanuggp', 'unescoglobalgeopark', 'CN', 'Sanqingshan UGGp', 'default.jpg'),
('sawahlunto', 'nationalgeopark', 'ID', 'Sawahlunto National Geopark', 'sawahlunto.jpg'),
('shennongjiauggp', 'unescoglobalgeopark', 'CN', 'Shennongjia UGGp', 'default.jpg'),
('shilinuggp', 'unescoglobalgeopark', 'CN', 'Shilin UGGp', 'default.jpg'),
('sitiauggp', 'unescoglobalgeopark', 'GR', 'Sitia UGGp', 'default.jpg'),
('songshanuggp', 'unescoglobalgeopark', 'CN', 'Songshan UGGp', 'default.jpg'),
('stonehammeruggp', 'unescoglobalgeopark', 'CA', 'Stonehammer UGGp', 'default.jpg'),
('styrianeisenwurzenuggp', 'unescoglobalgeopark', 'AT', 'Styrian Eisenwurzen UGGp', 'default.jpg'),
('swabianalbuggp', 'unescoglobalgeopark', 'DE', 'Swabian Alb UGGp', 'default.jpg'),
('taininguggp', 'unescoglobalgeopark', 'CN', 'Taining UGGp', 'default.jpg'),
('taishanuggp', 'unescoglobalgeopark', 'CN', 'Taishan UGGp', 'default.jpg'),
('tambora', 'nationalgeopark', 'ID', 'Tambora National Geopark', 'tambora.jpg'),
('terravitauggp', 'unescoglobalgeopark', 'DE', 'Terra Vita UGGp', 'default.jpg'),
('thuringiainselsbergdreigleichenuggp', 'unescoglobalgeopark', 'DE', 'Thuringia Inselsberg-Drei Gleichen UGGp', 'default.jpg'),
('tianzhushanuggp', 'unescoglobalgeopark', 'CN', 'Tianzhushan UGGp', 'default.jpg'),
('tobacaldera', 'unescoglobalgeopark', 'ID', 'Toba Caldera UNESCO Global Geopark', 'toba.jpeg'),
('troodosuggp', 'unescoglobalgeopark', 'CY', 'Troodos UGGp', 'default.jpg'),
('tumblerridgeuggp', 'unescoglobalgeopark', 'CA', 'Tumbler Ridge UGGp', 'default.jpg'),
('vestjillanduggp', 'unescoglobalgeopark', 'DK', 'Vestjilland UGGp', 'default.jpg'),
('vikosaoosuggp', 'unescoglobalgeopark', 'GR', 'Vikos - Aoos UGGp', 'default.jpg'),
('visarchipelagouggp', 'unescoglobalgeopark', 'CR', 'Vis Archipelago UGGp', 'default.jpg'),
('vulkaneifeluggp', 'unescoglobalgeopark', 'DE', 'Vulkaneifel UGGp', 'default.jpg'),
('wangwushandaimeishanuggp', 'unescoglobalgeopark', 'CN', 'Wangwushan=Daimeishan UGGp', 'default.jpg'),
('wudalianchiuggp', 'unescoglobalgeopark', 'CN', 'Wudalianchi UGGp', 'default.jpg'),
('xiangsiuggp', 'unescoglobalgeopark', 'CN', 'Xiangxi UGGp', 'default.jpg'),
('xingwenuggp', 'unescoglobalgeopark', 'CN', 'Xingwen UGGp', 'default.jpg'),
('yandangshanuggp', 'unescoglobalgeopark', 'CN', 'Yandangshan UGGp', 'default.jpg'),
('yanqinguggp', 'unescoglobalgeopark', 'CN', 'Yanqing UGGp', 'default.jpg'),
('yimengshanuggp', 'unescoglobalgeopark', 'CN', 'Yimengshan UGGp', 'default.jpg'),
('yuntaishanuggp', 'unescoglobalgeopark', 'CN', 'Yuntaishan UGGp', 'default.jpg'),
('zhangjiajieuggp', 'unescoglobalgeopark', 'CN', 'Zhangjiajie UGGp', 'default.jpg'),
('zhangyeuggp', 'unescoglobalgeopark', 'CN', 'Zhangye UGGp', 'default.jpg'),
('zhijindonguggp', 'unescoglobalgeopark', 'CN', 'Zhijindong UGGp', 'default.jpg'),
('zigonguggp', 'unescoglobalgeopark', 'CN', 'Zigong UGGp', 'default.jpg'),
('burren&cliffsofmotheruggp', 'unescoglobalgeopark', 'IE', 'Burren & Cliffs of Mother UGGp', 'default.jpg'),
('coppercoastuggp', 'unescoglobalgeopark', 'IE', 'Copper Coast UGGp', 'default.jpg'),
('marblearchcavesuggp', 'unescoglobalgeopark', 'IE', 'Marble Arch Caves UGGp', 'default.jpg'),
('adamellobrentauggp', 'unescoglobalgeopark', 'IT', 'Adamello - Brenta UGGp', 'default.jpg'),
('alpiapuaneuggp', 'unescoglobalgeopark', 'IT', 'Alpi Apuane UGGp', 'default.jpg'),
('beiguauggp', 'unescoglobalgeopark', 'IT', 'Beigua UGGp', 'default.jpg'),
('cilentovallodidianiealburniuggp', 'unescoglobalgeopark', 'IT', 'Cilento, Vallo di Diano e Alburni UGGp', 'default.jpg'),
('madonieuggp', 'unescoglobalgeopark', 'IT', 'Madonie UGGp', 'default.jpg'),
('pollinouggp', 'unescoglobalgeopark', 'IT', 'Pollino UGGp', 'default.jpg'),
('sesiavalgrandeuggp', 'unescoglobalgeopark', 'IT', 'Sesia Val Grande UGGp', 'default.jpg'),
('roccadicerereuggp', 'unescoglobalgeopark', 'IT', 'Rocca di Cerere UGGp', 'default.jpg'),
('tuscanminingparkuggp', 'unescoglobalgeopark', 'IT', 'Tuscan Mining Park UGGp', 'default.jpg'),
('aspromonteuggp', 'unescoglobalgeopark', 'IT', 'Aspromonte UGGp', 'default.jpg'),
('maiella', 'unescoglobalgeopark', 'IT', 'Maiella UGGp', 'default.jpg'),
('asouggp', 'unescoglobalgeopark', 'JP', 'Aso UGGp', 'default.jpg'),
('itoigawauggp', 'unescoglobalgeopark', 'JP', 'Itoigawa UGGp', 'default.jpg'),
('izupeninsulauggp', 'unescoglobalgeopark', 'JP', 'Izu Peninsula UGGp', 'default.jpg'),
('mtapoiuggp', 'unescoglobalgeopark', 'JP', 'Mt. Apoi UGGp', 'default.jpg'),
('murotouggp', 'unescoglobalgeopark', 'JP', 'Muroto UGGp', 'default.jpg'),
('okiislanduggp', 'unescoglobalgeopark', 'JP', 'Oki Island UGGp', 'default.jpg'),
('saninkaiganuggp', 'unescoglobalgeopark', 'JP', 'San`in Kaigan UGGp', 'default.jpg'),
('toyauggp', 'unescoglobalgeopark', 'JP', 'Toya UGGp', 'default.jpg'),
('unzenvolcanicareauggp', 'unescoglobalgeopark', 'JP', 'Unzen Volcanic Area UGGp', 'default.jpg'),
('langkawiuggp', 'unescoglobalgeopark', 'MY', 'Langkawi UGGp', 'default.jpg'),
('comarcaminerahidalgouggp', 'unescoglobalgeopark', 'MX', 'Comara Minera, Hidalgo UGGp', 'default.jpg'),
('mixtecaaltaoaxacauggp', 'unescoglobalgeopark', 'MX', 'Mixteca Alta, Oaxaca UGGp', 'default.jpg'),
('mgounuggp', 'unescoglobalgeopark', 'MA', 'M`Goun UGGp', 'default.jpg'),
('dehondsruguggp', 'unescoglobalgeopark', 'NL', 'De Hondsrug UGGp', 'default.jpg'),
('geanorvegicauggp', 'unescoglobalgeopark', 'NO', 'Gea Norvegica UGGp', 'default.jpg'),
('magmauggp', 'unescoglobalgeopark', 'NO', 'Magma UGGp', 'default.jpg'),
('trollfjelluggp', 'unescoglobalgeopark', 'NO', 'Trollfjell UGGp', 'default.jpg'),
('riococouggp', 'unescoglobalgeopark', 'NI', 'Rio Coco UGGp', 'default.jpg'),
('colcayvolcanesdeandaguauggp', 'unescoglobalgeopark', 'PE', 'Colca y Volcanes de Andagua UGGp', 'default.jpg'),
('muskauerfaltenbogenlukmuzakowauggp', 'unescoglobalgeopark', 'PL', 'Muskauer Faltenbogen / Luk Muzakowa UGGp', 'default.jpg'),
('holycrossmountainsuggp', 'unescoglobalgeopark', 'PL', 'Holy Cross Mountains UGGp', 'default.jpg'),
('acoresuggp', 'unescoglobalgeopark', 'PT', 'Acores UGGp', 'default.jpg'),
('aroucauggp', 'unescoglobalgeopark', 'PT', 'Arouca UGGp', 'default.jpg'),
('estrellauggp', 'unescoglobalgeopark', 'PT', 'Estrella UGGp', 'default.jpg'),
('naturtejodamesetameridionaluggp', 'unescoglobalgeopark', 'PT', 'Naturtejo da Meseta Meridional UGGp', 'default.jpg'),
('terrasdecavaleirosuggp', 'unescoglobalgeopark', 'PT', 'Terras de Cavaleiros UGGp', 'default.jpg'),
('cheongsonguggp', 'unescoglobalgeopark', 'KR', 'Cheongsong UGGp', 'default.jpg'),
('jejuislanduggp', 'unescoglobalgeopark', 'KR', 'Jeju Island UGGp', 'default.jpg'),
('hantanganguggp', 'unescoglobalgeopark', 'KR', 'Hantangang UGGp', 'default.jpg'),
('mudeungsanuggp', 'unescoglobalgeopark', 'KR', 'Mudeungsan UGGp', 'default.jpg'),
('hateguggp', 'unescoglobalgeopark', 'RO', 'Hateg UGGp', 'default.jpg'),
('yangantauuggp', 'unescoglobalgeopark', 'RU', 'Yangan - Tau UGGp', 'default.jpg'),
('djerdapuggp', 'unescoglobalgeopark', 'RS', 'Djerdap UGGp', 'default.jpg'),
('novohradnograduggp', 'unescoglobalgeopark', 'SK', 'Novohrad Nograd UGGp', 'default.jpg'),
('idrijauggp', 'unescoglobalgeopark', 'SI', 'Idrija UGGp', 'default.jpg'),
('karawankenkaravankenuggp', 'unescoglobalgeopark', 'SI', 'Karawanken - Karavanken UGGp', 'default.jpg'),
('basquecoastuggp', 'unescoglobalgeopark', 'ES', 'Basque Coast UGGp', 'default.jpg'),
('cabodegatanijaruggp', 'unescoglobalgeopark', 'ES', 'Cabo de Gata-Nijar UGGp', 'default.jpg'),
('centralcataloniauggp', 'unescoglobalgeopark', 'ES', 'Central Catalonia UGGp', 'default.jpg'),
('origensuggp', 'unescoglobalgeopark', 'ES', 'Origens UGGp', 'default.jpg'),
('courelmountainsuggp', 'unescoglobalgeopark', 'ES', 'Courel Mountains UGGp', 'default.jpg'),
('elhierrouggp', 'unescoglobalgeopark', 'ES', 'El Hierro UGGp', 'default.jpg'),
('granadauggp', 'unescoglobalgeopark', 'ES', 'Granada UGGp', 'default.jpg'),
('lanzaroteandchinijoislanduggp', 'unescoglobalgeopark', 'ES', 'Lanzarote and Chinijo Island UGGp', 'default.jpg'),
('laslorasuggp', 'unescoglobalgeopark', 'ES', 'Las Loras UGGp', 'default.jpg'),
('maestrazgouggp', 'unescoglobalgeopark', 'ES', 'Maestrazgo UGGp', 'default.jpg'),
('molina&allotajouggp', 'unescoglobalgeopark', 'ES', 'Malina and Allo Tajo UGGp', 'default.jpg'),
('sierranortedesevillauggp', 'unescoglobalgeopark', 'ES', 'Sierra Norte de Sevilla UGGp', 'default.jpg'),
('sierrassubbeticasuggp', 'unescoglobalgeopark', 'ES', 'Sierras Subbeticas UGGp', 'default.jpg'),
('sobrarbepirineosuggp', 'unescoglobalgeopark', 'ES', 'Sobrarbe - Pirineos UGGp', 'default.jpg'),
('villuercasiboresjarauggp', 'unescoglobalgeopark', 'ES', 'Villuercas Ibores Jara UGGp', 'default.jpg'),
('ngorongorolengaiuggp', 'unescoglobalgeopark', 'TZ', 'Ngorongoro Lengai UGGp', 'default.jpg'),
('satunuggp', 'unescoglobalgeopark', 'TH', 'Satun UGGp', 'default.jpg'),
('kulasalihliuggp', 'unescoglobalgeopark', 'TR', 'Kula - Salihli UGGp', 'default.jpg'),
('blackcountryuggp', 'unescoglobalgeopark', 'GB', 'Black Country UGGp', 'default.jpg'),
('englishrivierauggp', 'unescoglobalgeopark', 'GB', 'English Riviera UGGp', 'default.jpg'),
('forestfawruggp', 'unescoglobalgeopark', 'GB', 'Forest Fawr UGGp', 'default.jpg'),
('geomonuggp', 'unescoglobalgeopark', 'GB', 'GeoMon UGGp', 'default.jpg'),
('northpenninesaonbuggp', 'unescoglobalgeopark', 'GB', 'North Pennines AONB UGGp', 'default.jpg'),
('northwesthighlandsuggp', 'unescoglobalgeopark', 'GB', 'North-West Highlands UGGp', 'default.jpg'),
('shetlanduggp', 'unescoglobalgeopark', 'GB', 'Shetland UGGp', 'default.jpg'),
('marblearchcavesuggp', 'unescoglobalgeopark', 'GB', 'Marble Arch Caves UGGp', 'default.jpg'),
('grutasuggp', 'unescoglobalgeopark', 'UY', 'Grutas UGGp', 'default.jpg'),
('daknonguggp', 'unescoglobalgeopark', 'VN', 'Dak Nong UGGp', 'default.jpg'),
('dongvankarstplateauuggp', 'unescoglobalgeopark', 'VN', 'Dong Van Karst Plateau UGGp', 'default.jpg'),
('nonnuoccaobanguggp', 'unescoglobalgeopark', 'VN', 'Non nuoc Cao Bang UGGp', 'default.jpg');

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
('unescoglobalgeopark', 'ID', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'AT', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'BE', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'BR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'CA', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'CL', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'CN', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'CR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'CY', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'CZ', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'DK', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'EC', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'FI', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'FR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'DE', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'GR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'HU', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'IS', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'IR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'IE', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'IT', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'JP', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'MY', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'MX', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'MA', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'NL', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'NO', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'NI', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'PE', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'PL', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'PT', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'KR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'RO', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'RU', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'RS', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'SK', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'SI', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'ES', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'TZ', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'TH', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'TR', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'GB', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'UY', 'UNESCO Global Geopark'),
('unescoglobalgeopark', 'VN', 'UNESCO Global Geopark');

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

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `content` longtext NOT NULL,
  `parent_id` int(11) NOT NULL,
  `image` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `content`, `parent_id`, `image`) VALUES
(9, 'Geoparks Youth Hub', 'Geoparks-Youth-Hub', '<p>Geoparks Youth Hub is a platform to connect youths around the world for sustaining the Geoparks. It is powered by Indonesian Maritime Youths (Maritim Muda Nusantara) in collaboration with the Ministry of National Development Planning/National Development Planning Agency of Republic of Indonesia. We provide a digital communication portal for Geoparks youth across countries. We also provide information of Geoparks youth activities, events, and job vacancy.<br></p>', 1, 'logo.png'),
(10, 'Geopark', 'Geopark', '<p style=\"line-height: 1.8;\">Geopark is a single or combined geographic area which has Geosite and valuable landscape related to Geoheritage, Geodiversity, Biodiversity and Cultural Diversity, also managed for conservation, education and economic development sustainably with active involvement of society and government, so can be used for improving the understanding and raising the awareness of communities to the earth and their environment.</p><p style=\"line-height: 1.8;\">UNESCO Global Geoparks are single, unified geographical areas where sites and landscapes of international geological significance are managed with a holistic concept of protection, education and sustainable development.</p><p style=\"line-height: 1.8;\">A UNESCO Global Geopark uses its geological heritage, in connection with all other aspects of the area’s natural and cultural heritage, to enhance awareness and understanding of key issues facing society in the context of the dynamic planet we all live on, mitigating the effects of climate change and reducing the impact of natural disasters. By raising awareness of the importance of the area’s geological heritage in history and society today, UNESCO Global Geoparks give local people a sense of pride in their region and strengthen their identification with the area. The creation of innovative local enterprises, new jobs and high quality training courses is stimulated as new sources of revenue are generated through sustainable geotourism, while the geological resources of the area are protected.</p>', 1, 'geopark.jpg'),
(11, 'Global Geoparks Network', 'Global-Geoparks-Network', '<p style=\"line-height: 1.8;\"><b>GLOBAL GEOPARKS NETWORK</b><br>International Association</p><p style=\"line-height: 1.8;\">The Global Geoparks Network (GGN), is a non-profit International Association officially established in 2014 subject to French legislation. The Global Geoparks Network is the official partner of UNESCO for the operation of the UNESCO Global Geoparks.</p><p style=\"line-height: 1.8;\">The GGN was initially founded in 2004 as an international partnership developed under the umbrella of UNESCO and serves to develop models of best practice and set quality-standards for territories that integrate the protection preservation of Earth heritage sites in a strategy for regional sustainable economic development.</p><p style=\"line-height: 1.8;\">The bottom-up approach is becoming increasingly popular through the positive and effective running of the GGN under UNESCO’s ad hoc support with individual Member States as appropriate.</p><p style=\"line-height: 1.8;\">Networking and collaboration among Global Geoparks is an important component of the Global Geoparks Network. The Global Geoparks Network promotes networking on a regional basis. The GGN prioritizes the creation of similar Regional Networks, reflecting local conditions, elsewhere in the world.</p><p style=\"line-height: 1.8;\"></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: -20px; list-style-type: circle; line-height: 30px;\"><li>For Global Geoparks in Asia – Pacific the Asia-Pacific Geoparks Network (APGN) acts as the Regional Network of the GGN.</li><li>For Global Geoparks in Europe, the European Geoparks Network (EGN) acts as the Regional Network of the GGN.</li><li>For Global Geoparks in Latin America and Caribbean, the Latin American and Caribbean Geoparks Network acts as the as the Regional Network of the GGN.</li></ul><p style=\"line-height: 1.8;\"></p><p>The objectives of the Global Geoparks Network are:</p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: -20px; list-style-type: circle; line-height: 30px;\"><li>to promote the equitable geographical establishment, development and professional management of Global Geoparks,</li><li>to advance knowledge and understanding of the nature, function and role of Global Geoparks;</li><li>to assist local communities to value their natural and cultural heritage;</li><li>to preserve Earth heritage for present and future generations;</li><li>to educate and teach the broad public about issues in geo-sciences and their relation with environmental matters and natural hazards.</li><li>to ensure sustainable socio-economic and cultural development based on the natural (or geological) system</li><li>to foster multi-cultural links between heritage and conservation and the maintenance of geological and cultural diversity, using participatory schemes of partnership and management;</li><li>to promote joint initiatives between Global Geoparks (e.g. communication, publications, exchange of information, twinning).</li></ul><p><br style=\"\">The Global Geoparks Network:<br style=\"\"></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: -20px; list-style-type: circle; line-height: 30px;\"><li>establishes ethical standards which must be adopted and respected by Global Geoparks and Global Geopark professionals;</li><li>organizes co-operation and mutual assistance between Global Geoparks and between Global Geopark professionals;</li><li>initiates and co-ordinates thematic Working Groups which will foster international co-operation is a variety of issues related with Geopark operation and activities;</li><li>represents, advances, and disseminates knowledge in Geodiversity management and other disciplines related to studies in Geo-conservation, Geo-tourism, Geo-education and/or the management and activities of Global Geoparks.</li></ul><p style=\"line-height: 1.8;\"></p><p>The 6th International UNESCO Conference on Global Geoparks was held from September 19 to 22, 2014 in Saint John, Stonehammer Global Geopark, Canada, and attended by 500 delegates from 30 countries and had agreed the declaration.&nbsp;<a href=\"http://www.globalgeopark.org/aboutGGN/8894.htm\" style=\"cursor: pointer; transition-duration: 0.2s;\">Read here</a></p><p><a href=\"https://globalgeoparksnetwork.org/\" style=\"cursor: pointer; transition-duration: 0.2s;\">Visit Global Geoparks Network Website</a><br></p>', 1, '84-842395_round-the-world-in-a-unique-worldwide-partnership.png'),
(12, 'Maritim Muda Nusantara', 'Maritim-Muda-Nusantara', '<p>Maritim Muda Nusantara (Indonesian Maritime Youths), commonly known as Maritim Muda, is a national youth organization in the maritime sector in the form of associations. Maritim Muda was formed on December 13, 2018 to coincide with Nusantara Day in Jakarta by 6 young Indonesians who were called to serve their homeland and nation through sustainable maritime development, namely Kaisae Akhir, Antonius Rio Sandi Sirait, Imanda Hikmat Pradana, Ranitya Nurlita, Denny Suwarso Putra, and Bondan Bhaskara.</p>\r\n<p>With ideologies and ideas to encourage the younger generation to realize their role in developing Indonesia&apos;s maritime as the world&apos;s maritime axis, these young people unite to establish Maritim Muda. This organization operates on an academic background, maritime science, and refers to various policies and current conditions and Indonesian maritime conditions. Maritim Muda Nusantara has been approved as a Legal Entity of the Association of Maritim Muda Nusantara through the Decree of the Minister of Law and Human Rights of the Republic of Indonesia No. AHU-0001244.AH.01.07.Tahun 2019 on February 14, 2019.</p>\r\n<p>Maritim Muda ventured to be able to directly communicate and cooperate with various elements, both government and private institution. As the result, Maritim Muda received a positive response in its movement in the maritime sector. Maritim Muda is accepted as a maritime youth organization that is expert in maritime intellectuality and is quite critical in responding to maritime strategic issues as well as participating in real actions in education, research, and community service activities. Then, Maritim Muda started to fill the empty space of maritime youth, which still lacked contributions and ideas.</p>\r\n<p>Apart from the Central Board, Maritim Muda Nusantara also has 34 regional organizations (provincial level) and 45 branch organizations (district/city/regional level).</p>\r\n<p><a href=\"https://maritimmuda.com/\" rel=\"noopener noreferrer\" target=\"_blank\">Visit Maritim Muda Nusantara</a></p>', 1, 'maritimmuda.png'),
(13, 'UNESCO Global Geoparks Youth Forum', 'UNESCO-Global-Geoparks-Youth-Forum', '<p style=\"line-height: 1.8;\">The 1st UNESCO Global Geoparks Youth Forum will be organized during the 9th Conference on UNESCO Global Geopark in December 2021.</p><p style=\"line-height: 1.8;\">The main purpose of the UNESCO GLOBAL GEOPARKS YOUTH FORUM is to offer young people an opportunity to engage more concretely in the preparation of the philosophy mandate and activities of the UNESCO Global Geoparks, elaborate their contribution to the debates of the 9th International Conference on UNESCO Global Geoparks and foster their commitment to the realization of the future they want, being actors of change in their territories. They will elaborate their proposal for actions contributing to the UNESCO Global Geoparks strategic framework for action 2021-2025, to address heritage protection, natural hazards mitigation, climate change and sustainable development in general.</p><p style=\"line-height: 1.8;\">Each Country hosting UNESCO Global Geoparks will be represented in the YOUTH FORUM with youth delegates engaged with UNESCO Global Geoparks that believe in their power of making changes and aim to become influential within their communities.</p><p style=\"line-height: 1.8;\">The 1st Assembly of the YOUTH FORUM will take place in parallel with the 9th International Conference on UNESCO Global Geoparks which will take place in Jeju island, Republic of Korea in September 2021.</p><p style=\"line-height: 1.8;\">Participants need to be aged from 18 to 24 years (according to UN/UNESCO Youth designation), showing their engagement with UNESCO Global Geoparks:</p><p style=\"line-height: 1.8;\"></p><ul style=\"margin-right: 0px; margin-bottom: 0px; margin-left: -20px; list-style-type: circle; line-height: 30px;\"><li>in their respective living/working contexts – territories and communities already included in the UNESCO Global Geoparks</li><li>on issues related to Geological Heritage conservation, climate change adaptation, natural disaster mitigation, geo-tourism and sustainable territorial development.</li></ul><p style=\"line-height: 1.8;\"></p><p style=\"line-height: 1.8;\">Participants can be Geopark staff, Geopark partners, University researchers, phd candidates, university students or school students with clear engagement through their research or educational activity. Observers may include Youths from Countries hosting aspiring UNESCO Global Geoparks.</p><p style=\"line-height: 1.8;\">GGN – National Geopark Fora or Committees are responsible to nominate the representative of each country in the UNESCO Global Geoparks YOUTH FORUM and shall cover the expenses for their participation in the UNESCO Global Geoparks YOUTH FORUM meetings.</p><p style=\"line-height: 1.8;\">If a country wishes to nominate more representatives for the UNESCO Geoparks Youth Hub then the youth representatives of a country consist a country team with one vote at the UNESCO Geoparks Youth Hub meetings.</p><p style=\"line-height: 1.8;\">In case that a country (especially those with one Geopark) has difficulty to cover the expenses of the youth participation in the GGN YOUTH FORUM, can use the grant policy of the Conference or ask for support from GGN. The Operational Guidelines of the 1st YOUTH FORUM have been agreed at the 64th GGN ExB meeting on December 10th, 2019.</p><p style=\"line-height: 1.8;\"><a href=\"https://globalgeoparksnetwork.org/?p=4473\" style=\"cursor: pointer; transition-duration: 0.2s;\">Visit UNESCO Global Geoparks Youth Forum Website</a></p>\r\n\r\n<h6> Representatives of UNESCO Global Youth Forum </h6>\r\n<p>\r\n<ul>\r\n<li> Indonesia: </li>\r\n</ul\r\n</p>', 2, 'FB_YOUTH_FESTIVAL_OK_DECEMBER_2021-1024x853.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `page_parent`
--

CREATE TABLE `page_parent` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_parent`
--

INSERT INTO `page_parent` (`id`, `name`) VALUES
(1, 'About'),
(2, 'Youth Forum');

-- --------------------------------------------------------

--
-- Table structure for table `region`
--

CREATE TABLE `region` (
  `id` int(11) NOT NULL,
  `abbr` varchar(10) NOT NULL,
  `name` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `website` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `region`
--

INSERT INTO `region` (`id`, `abbr`, `name`, `email`, `website`) VALUES
(1, 'APGN', 'Asia - Pacific', 'apgn.office@gmail.com', 'http://asiapacificgeoparks.org/'),
(2, 'EGN', 'Europe', 'egncoordinator@hotmail.com', 'http://www.europeangeoparks.org/'),
(3, 'LACGN', 'Latin America and Carribean', 'geolacgeoparques@gmail.com', 'http://www.redgeolac.org/'),
(4, 'AUGGN', 'Africa', 'https://www.visitgeoparks.org/african-geopark-network', 'dgs.rbk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `site_settings`
--

CREATE TABLE `site_settings` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `description` varchar(128) NOT NULL,
  `logo` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `site_settings`
--

INSERT INTO `site_settings` (`id`, `title`, `description`, `logo`) VALUES
(1, 'Geoparks Youth Hub', 'Connecting Youths for Sustaining Geoparks', 'ab58873c9b135d497f427e43b5399fd2.svg');

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
  `gender` char(1) NOT NULL,
  `dob` date NOT NULL,
  `country` varchar(128) NOT NULL,
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

INSERT INTO `user` (`id`, `name`, `email`, `profile_picture`, `password`, `gender`, `dob`, `country`, `geoname`, `position`, `company`, `about`, `twitter`, `instagram`, `linkedin`, `role_id`, `is_active`, `date_created`) VALUES
(1, 'GYH Admin', 'admin@admin.com', 'def_0.png', '$2y$10$5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1999-02-03', 'ID', 'rinjanilombok', 'Administrator', 'Geoparks Youth Hub', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in', 'twitter', 'instagram', 'pravdam', 1, 1, 1626859548),
(994, 'Rozina Rogan', 'rrogan0@apple.com', 'def_female.png', '$2y$10$5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1997-02-21', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(995, 'Vicky Prott', 'vprott1@mashable.com', 'def_female.png', 'u2yd1025FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-01-13', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(996, 'Udall Maud', 'umaud2@github.com', 'def_male.png', '62yb10q5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1992-10-29', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(997, 'Melessa Fogel', 'mfogel3@vistaprint.com', 'def_female.png', 'l2y210v5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1997-12-18', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(998, 'Cole Circuitt', 'ccircuitt4@howstuffworks.com', 'def_male.png', '82yk10j5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1994-09-07', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(999, 'Drusie McGuiness', 'dmcguiness5@hatena.ne.jp', 'def_female.png', 'k2yf10k5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-09-08', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1000, 'Earvin Dyzart', 'edyzart6@squidoo.com', 'def_male.png', 'j2yd1025FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1992-04-24', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1001, 'Cathlene Dyers', 'cdyers7@reverbnation.com', 'def_female.png', 'j2yb10r5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1992-07-14', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1002, 'Pru Geeson', 'pgeeson8@europa.eu', 'def_female.png', 'j2yb1075FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1998-02-09', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1003, 'Merill Awmack', 'mawmack9@rambler.ru', 'def_male.png', '52y310x5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1995-07-31', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1004, 'Rosaleen Woofenden', 'rwoofendena@xinhuanet.com', 'def_female.png', '22yd10a5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-02-05', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1005, 'Hodge Kas', 'hkasb@4shared.com', 'def_male.png', '52ye10k5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1991-11-25', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1006, 'Raimund Wagstaff', 'rwagstaffc@china.com.cn', 'def_male.png', 'a2y110r5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1995-11-01', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1007, 'Dot Izaac', 'dizaacd@npr.org', 'def_female.png', '72y410i5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-01-08', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1008, 'Brear Mardell', 'bmardelle@economist.com', 'def_female.png', '32y710g5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1999-11-09', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1009, 'Clarissa Depport', 'cdepportf@alibaba.com', 'def_female.png', '62yb1045FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1991-01-08', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1010, 'Ambrosi Baggott', 'abaggottg@state.gov', 'def_male.png', 'r2yb1025FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1995-10-18', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1011, 'Ambrosi Jiroutek', 'ajiroutekh@nps.gov', 'def_male.png', 'j2y91065FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1992-03-30', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1012, 'Abel Painten', 'apainteni@drupal.org', 'def_male.png', 'z2yn1085FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1995-06-15', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1013, 'Karlyn MacGebenay', 'kmacgebenayj@prlog.org', 'def_female.png', '32y510h5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-09-11', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1014, 'Trisha Till', 'ttillk@xinhuanet.com', 'def_female.png', '12yc10t5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1992-11-09', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1015, 'Eleanor Clapperton', 'eclappertonl@dedecms.com', 'def_female.png', 'l2yi10l5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1999-02-10', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1016, 'Jonas Raffin', 'jraffinm@pinterest.com', 'def_male.png', '82y71055FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1996-11-10', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1017, 'Luigi Chalder', 'lchaldern@examiner.com', 'def_male.png', 'r2yj1065FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1999-03-11', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1018, 'Massimiliano Ryde', 'mrydeo@devhub.com', 'def_male.png', '82yz1095FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1993-10-15', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1019, 'Danita Radband', 'dradbandp@indiegogo.com', 'def_female.png', 'y2yo10t5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1998-09-24', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1020, 'Max Nickless', 'mnicklessq@imageshack.us', 'def_male.png', 'd2yo10t5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1995-07-11', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1021, 'Sydelle Lucey', 'sluceyr@si.edu', 'def_female.png', 'k2yi10e5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1996-08-20', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1022, 'Fidelio Ochterlony', 'fochterlonys@blogger.com', 'def_male.png', '32y110o5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1997-06-25', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1023, 'Fairfax Brookbank', 'fbrookbankt@123-reg.co.uk', 'def_male.png', 'u2y010i5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1997-12-17', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1024, 'Robinia Iannello', 'riannellou@deliciousdays.com', 'def_female.png', 't2yn10q5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1993-03-28', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1025, 'Dynah Mincini', 'dminciniv@flickr.com', 'def_female.png', 'q2yp10c5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1995-01-04', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1026, 'Conrad Scattergood', 'cscattergoodw@dailymotion.com', 'def_male.png', 'p2ye10v5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1998-10-02', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1027, 'Cayla Ormond', 'cormondx@slashdot.org', 'def_female.png', '42yq10n5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1995-08-26', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1028, 'Shanon MacPeice', 'smacpeicey@paypal.com', 'def_female.png', 'u2y81065FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1991-02-18', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1029, 'Cissiee Van Velde', 'cvanz@dmoz.org', 'def_female.png', 'r2y010r5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1991-04-29', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1030, 'Sheila D\'Oyley', 'sdoyley10@wikimedia.org', 'def_female.png', 'p2y210t5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1991-01-30', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1031, 'Paulita Yockley', 'pyockley11@ocn.ne.jp', 'def_female.png', '42yg10a5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1991-07-24', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1032, 'Rabi Tolchar', 'rtolchar12@wufoo.com', 'def_male.png', 's2yj1035FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1997-09-20', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1033, 'Davy Peggrem', 'dpeggrem13@goodreads.com', 'def_male.png', '12yr10b5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1991-09-15', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1034, 'Robinett Dabbes', 'rdabbes14@sun.com', 'def_female.png', '62yu10c5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1996-08-29', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1035, 'Martguerita Gotling', 'mgotling15@uiuc.edu', 'def_female.png', '22y810w5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1998-11-10', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1036, 'Katlin McCrann', 'kmccrann16@xing.com', 'def_female.png', 'p2yg10y5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1992-03-21', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1037, 'Atlante Kiss', 'akiss17@umn.edu', 'def_female.png', '52yu10w5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1995-08-17', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1038, 'Kellby Cremen', 'kcremen18@soup.io', 'def_male.png', 'h2yq10e5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1994-12-28', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1039, 'Enrika Hedin', 'ehedin19@wunderground.com', 'def_female.png', 'u2y210t5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-04-09', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1040, 'Earlie Riccio', 'ericcio1a@thetimes.co.uk', 'def_male.png', 'z2yj10y5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1991-02-21', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1041, 'Kim Chinge', 'kchinge1b@intel.com', 'def_male.png', 'r2yk10h5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1994-02-11', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1042, 'Myrtia Cribbott', 'mcribbott1c@diigo.com', 'def_female.png', '02yy10i5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'F', '1994-03-09', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548),
(1043, 'Coop Maciejewski', 'cmaciejewski1d@ning.com', 'def_male.png', '62yb10a5FNftn6jLXBUq35eeC8AP.xH7MwvGgwpskyl9h2c1XTApLW23VZ4a', 'M', '1997-01-28', 'ID', 'rinjanilombok', '', '', '', 'twitter', 'instagram', '', 2, 1, 1626859548);

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
(44, 'PRAVDAM329@GMAIL.COM', '/HMVFHhHUymiYkgAjtrtz5gKkb604YtCWRTlhJqqczA=', 1632807847),
(45, 'pravdam329@gmail.com', 'sk0I/2RFEZg1oPYazbuybyIfYVw7eTGJZrgpaOsM4MU=', 1633338287),
(46, 'pravdam329@gmail.com', 'EhTrkdvvmNwBdXzCmwm/MUQKKy7stwB5gLfv3vICGKg=', 1633338336),
(47, 'user@user.com', 'hB3LoFMyHibm9EEcLkcFlV0bdDElQgfArrmx0oEdv14=', 1633338459),
(48, 'asjdas@amd.com', 'cMbgTujv6g5QJ7mjI1XA1PTHG52xPEei6wliPkkdnPk=', 1633933080);

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
-- Indexes for table `country`
--
ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_parent`
--
ALTER TABLE `page_parent`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `region`
--
ALTER TABLE `region`
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
-- AUTO_INCREMENT for table `articles`
--
ALTER TABLE `articles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=336;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=75;

--
-- AUTO_INCREMENT for table `country`
--
ALTER TABLE `country`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `page_parent`
--
ALTER TABLE `page_parent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `region`
--
ALTER TABLE `region`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `site_settings`
--
ALTER TABLE `site_settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1044;

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
