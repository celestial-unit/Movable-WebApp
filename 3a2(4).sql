-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 16, 2025 at 11:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3a2`
--

-- --------------------------------------------------------

--
-- Table structure for table `agent`
--

CREATE TABLE `agent` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `destination`
--

CREATE TABLE `destination` (
  `id_destination` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `routes` longtext DEFAULT NULL,
  `contact_information` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `description` longtext DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id_destination`, `name`, `location`, `category`, `status`, `routes`, `contact_information`, `image`, `rating`, `description`) VALUES
(4, 'Central', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 0, 'Main train station in the city.'),
(5, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(6, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(7, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(8, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(9, 'dd', 'dd', 'ddd', 'dd', 'd', 'd', '', 1, 'ff'),
(11, 'SDL', 'image', 'e', 'e', 'ze', '123345564', 'file:/C:/Users/USER/Pictures/1x/PNG/Fichier%201.png', 1, 'image'),
(12, 'ZZ', 'A', 'Z', 'Z', 'Z', '111111111', '', 1, '1'),
(13, 'e', 'raa', 'e', 'R', 'eee', '122345566', '', 66, ''),
(14, 'hj', 'ranim', 'jj', 'j', 'j', '123333333', '', 2, ''),
(15, 'LOCATION', 'EEE', 'CATEGORY', 'STATUS', 'ROUTES', '11111111', '', 22, ''),
(16, 'xx', 'x', 'x', 'x', 'x', '11111111', '', 3, ''),
(17, 'yes', 'yes', 'yes', 'y', 'y', '11111111', '', 1, ''),
(18, 's', 's', 's', 'ss', 's', '222222222', '', 2, ''),
(19, 'f', 'f', 'f', 'f', 'f', '1234567', '', 2, ''),
(20, 'FORR', 'FINAL', 'FINAL', 'F', 'F', '11111111111', '', 1, ''),
(22, 'ad', 'd', 'ddd', 'dd', 'd', '12345678', '', 1, 'D'),
(23, 'DONE', 'DD', 'D', 'DDD', 'DDDD', '123456789', '', 4, 'F'),
(25, 'You get this ', 'here', 'station', 'ESPRIT', 'j', '123456789', '', 3, 'NEAR'),
(27, 'can', 'do', 'it', 'g', 'f', '12345678', '', 3, 'F'),
(28, 'G', 'H', 'J', 'L', 'M', '12345678', '', 3, 'G'),
(41, 'STATIPON', 'G', 'GG', 'G', 'G', '12345678', '', 4, 'GH'),
(42, 'H', 'Tunisia', 'Hopital', 'd', 'd', '123456788', 'file:/C:/Users/USER/Pictures/1x/bouton%20exit.png', 4, 'U45'),
(43, 'ARIANA', '33.65121,9.86572', 'HOP', 'F', 'F', '12345678', 'file:/C:/Users/USER/Pictures/5.jpg', 4, 'F'),
(44, 'THIS', '34.26630,9.66248', 'F', 'D', 'D', '12345678', 'file:/C:/Users/USER/Pictures/Calque%201.png', 5, '5'),
(45, 'ARIANASOGHRA', '36.85160,10.19154', 'A', 'A', 'A', '12345678', '', 3, ''),
(46, 'ARIANASOGHRA', '36.85160,10.19154', 'A', 'A', 'A', '12345678', 'file:/home/fsociety/MovableFInal/images/Jeff%20Bezoz.jpg', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `event`
--

CREATE TABLE `event` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `duration` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `status` varchar(255) NOT NULL,
  `dateevent` varchar(255) NOT NULL,
  `startEvent` time DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `duration`, `type`, `status`, `dateevent`, `startEvent`) VALUES
(170, 'ayouba', 'aaaaaaaaaaaaaa', 37, 50, 'Sfax', '2025-03-10', '18:18:00'),
(175, 'aoaoda', 'lm,dalmpdpapof,efkp,emf,epkg,epg,mkeg,mek,g', 80, 50, 'Sfax', '2025-07-21', '00:01:00'),
(178, 'blabla', 'aaaaaaaaaaaaaaa', 58, 100, 'Siliana', '2025-06-12', '23:25:00'),
(179, 'pleaseno', '****555555', 35, 30, 'Sousse', '2025-06-12', '23:25:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `registration_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`id`, `event_id`, `registration_date`, `status`, `user_id`) VALUES
(236, 178, '2025-04-16 05:49:42', 'Cancelled', 1),
(237, 178, '2025-04-16 06:25:27', 'Confirmed', 19),
(238, 179, '2025-04-16 06:55:17', 'Pending', 1),
(240, 179, '2025-04-16', 'Pending', 19),
(241, 178, '2025-04-16', 'Pending', 75);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext NOT NULL,
  `headers` longtext NOT NULL,
  `queue_name` varchar(190) NOT NULL,
  `created_at` datetime NOT NULL,
  `available_at` datetime NOT NULL,
  `delivered_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `rate`
--

CREATE TABLE `rate` (
  `id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `comment` longtext DEFAULT NULL,
  `rate_date` datetime NOT NULL,
  `agent_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reclamations`
--

CREATE TABLE `reclamations` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `status` varchar(50) NOT NULL CHECK (`status` in ('Pending','Resolved','Rejected')),
  `user_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `creation_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `category` varchar(50) DEFAULT 'General',
  `resolution_date` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reclamations`
--

INSERT INTO `reclamations` (`id`, `title`, `description`, `status`, `user_id`, `created_at`, `creation_date`, `category`, `resolution_date`) VALUES
(1, 'salemou alaykom', 'barcha claims', 'Resolved', 8, '2025-03-05 16:53:13', '2025-03-05 16:53:13', 'General', '2025-04-15 14:06:34'),
(3, 'RANIM JET', 'AKEK', 'Rejected', 8, '2025-03-05 21:52:50', '2025-03-05 21:52:50', 'General', NULL),
(4, 'rrbonjou', 'bonjour', 'Resolved', 16, '2025-03-07 08:42:07', '2025-03-07 08:42:07', 'General', '2025-04-15 14:05:29'),
(5, 'aslema', 'Contact from: aziz\nEmail: azizghadhoun1@gmail.com\n\nMessage:\njawek behy', 'Resolved', 19, '2025-04-15 14:23:38', '2025-04-15 14:23:38', 'Contact', '2025-04-15 18:01:27'),
(6, 'wazaaaap', 'jawna behy', 'Resolved', 19, '2025-04-15 14:53:50', '2025-04-15 14:53:50', 'Billing', '2025-04-16 06:27:26'),
(7, 'aslema', 'Contact from: aziz\nEmail: azizghadhoun1@gmail.com\n\nMessage:\naslema jawna ahla jao', 'Pending', 1, '2025-04-15 18:00:36', '2025-04-15 18:00:36', 'Contact', NULL),
(8, 'ty chnowa tw', 'ty chnowa tw chbik', 'Pending', 19, '2025-04-16 09:36:53', '2025-04-16 09:36:53', 'Billing', NULL);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reclamation_category_distribution`
-- (See below for the actual view)
--
CREATE TABLE `reclamation_category_distribution` (
`category` varchar(50)
,`count` bigint(21)
,`percentage` decimal(26,2)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reclamation_monthly_trends`
-- (See below for the actual view)
--
CREATE TABLE `reclamation_monthly_trends` (
`month` varchar(7)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Stand-in structure for view `reclamation_statistics`
-- (See below for the actual view)
--
CREATE TABLE `reclamation_statistics` (
`total_reclamations` bigint(21)
,`pending_reclamations` decimal(22,0)
,`resolved_reclamations` decimal(22,0)
,`statistics_date` varchar(10)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `date` datetime NOT NULL,
  `location` varchar(255) DEFAULT NULL,
  `seats` int(11) NOT NULL,
  `agentType` varchar(255) DEFAULT NULL,
  `paymentMode` varchar(255) NOT NULL,
  `TransportType` varchar(255) DEFAULT NULL,
  `age` int(11) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `status` varchar(20) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `DriverName` varchar(55) DEFAULT NULL,
  `transport_id` int(11) DEFAULT NULL,
  `driver_id` int(11) DEFAULT NULL,
  `agent_id` int(11) DEFAULT NULL,
  `destination_id` int(11) DEFAULT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `firstName`, `email`, `date`, `location`, `seats`, `agentType`, `paymentMode`, `TransportType`, `age`, `lastName`, `status`, `created_at`, `updated_at`, `DriverName`, `transport_id`, `driver_id`, `agent_id`, `destination_id`, `id_user`) VALUES
(1, 'ridha', 'brmariem7@gmail.com', '2025-04-10 00:00:00', 'nabeul', 3, 'medical assistance agent', 'cash', 'car', 11, 'Brik', 'approved', NULL, '2025-04-10 22:11:22', NULL, NULL, NULL, NULL, NULL, 0),
(2, 'Maryem', 'brmariem7@gmail.com', '2025-04-14 00:00:00', 'nabeul', 3, 'medical assistance agent', 'cash', 'car', 11, 'Brik', 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'mouna', 'b@gmail.com', '2025-04-23 00:00:00', 'Downtown', 7, 'female', 'cash', 'Bus', 40, 'Brik', NULL, NULL, NULL, 'azert', 20, 7, 10, 6, 0),
(5, 'ridha', 'brridha@gmail.com', '2025-04-24 00:00:00', 'EEE', 3, 'male', 'mobile_payment', 'Car', 50, 'Brik', NULL, NULL, '2025-04-14 16:37:17', 'Mohamed', 21, 13, 15, 15, 0);

-- --------------------------------------------------------

--
-- Table structure for table `ticket`
--

CREATE TABLE `ticket` (
  `id` int(11) NOT NULL,
  `paymentMode` varchar(255) NOT NULL,
  `transport` varchar(255) NOT NULL,
  `price` double NOT NULL,
  `destination` varchar(255) NOT NULL,
  `bookingDate` datetime NOT NULL,
  `reservation_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `disponibility` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `transport`
--

INSERT INTO `transport` (`id`, `type`, `capacity`, `disponibility`, `destination`) VALUES
(11, 'Car', 22, '0', 'Paris'),
(12, 'bus', 12, '0', 'London'),
(13, 'Bus', 12, '1', 'London'),
(14, 'Car', 19, '1', 'London'),
(17, 'Bus', 1, '0', 'Paris'),
(18, 'Bus', 35, '1', 'Rome'),
(20, 'Bus', 22, '0', 'Berlin'),
(21, 'Car', 12, '0', 'London'),
(22, 'car', 1, '1', 'Tunisie'),
(23, 'car', 22, '1', 'Tunisie');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('USER','ADMIN','DRIVER') DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `faceIdEnabled` tinyint(1) NOT NULL DEFAULT 0,
  `isBanned` tinyint(1) NOT NULL DEFAULT 0,
  `banReason` varchar(255) DEFAULT NULL,
  `banExpiryDate` timestamp NULL DEFAULT NULL,
  `lastLogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `role`, `created_at`, `faceIdEnabled`, `isBanned`, `banReason`, `banExpiryDate`, `lastLogin`) VALUES
(1, 'aziz', 'Ghadhoun', 'azizghadhoun1@gmail.com', '$2y$13$5osiQVPXvVbL23kGbBe.i.JvCvy4qB9GU8QM2YCcg/iT4ANYaGUn.', 'ADMIN', '2025-03-05 00:26:08', 0, 0, NULL, NULL, '2025-04-16 09:33:32'),
(3, 'aziz', 'ghadhoun', 'aziz@gmail.com', '$2a$10$kVV2x2flxnmmIkJk2nOqguaH8nurJ2C8cG8rlUuTO6JwkA612CoYq', 'USER', '2025-03-05 00:41:16', 0, 0, NULL, NULL, NULL),
(4, 'Google', 'User', 'aziz.7mimouna@gmail.com', '$2a$10$dzFj74v1I1jhw53GTDXXxeO9bGvRp2n6Rm0rtepdtYjwYDC9dL7.e', 'USER', '2025-03-05 00:41:45', 0, 0, NULL, NULL, NULL),
(5, 'aziz', 'ghadhoun', 'aziz1@gmail.com', '$2a$10$/2puXe6QwP.A3NU37PxnPuLIR/B36INJVGGPn3YXGs3lEn/Yh5mzC', 'USER', '2025-03-05 01:09:33', 0, 1, NULL, NULL, NULL),
(6, 'aziz', 'ghadhoun', 'zizou@gmail.Com', '$2a$10$gZaBPoeqjBMXwH1/eiVcYeMG8X6UT4q1i8ld2ZfaOWHZv1Hr45wmq', 'USER', '2025-03-05 01:33:20', 1, 0, NULL, NULL, NULL),
(7, 'aziz', 'ghadhoun', 'ziwziw@gmail.com', '$2a$10$htQ1pVnEdlGTueoCUvKMGe5HbR8wTa1ZW0ILgtkjR5XsJ/w37js.6', 'USER', '2025-03-05 02:01:33', 1, 0, NULL, NULL, NULL),
(8, 'aziz', 'ghaadhoun', 'samir@gmail.com', '$2a$10$b6EVRDS2YWiMejBAQtx6BegUc42qUR.1pyaFVwAl01iA3IICLKVaO', 'USER', '2025-03-05 02:07:40', 0, 0, NULL, NULL, NULL),
(9, 'ayoub', 'frikha', 'ayoub@gmail.com', '$2a$10$jS6f4LaNauLFA0moag3B4OwXLntv8WIagOB0Xt90kAf0pHuvdqXIu', 'USER', '2025-03-05 03:34:46', 1, 1, 'ban ala khouya', NULL, NULL),
(10, 'aziz', 'mimouna', 'mimouna@gmail.com', '$2a$10$BacgQQ93Ehdc8kz4fkzxceGjdFNQtrFbl8hFsoTQQOJ1pt3SHl9wq', 'USER', '2025-03-07 04:44:44', 0, 0, NULL, NULL, NULL),
(11, 'aziz', 'mimouna', 'mimouna1@gmail.com', '$2a$10$kORET4OA1vgOQ0U9C58vgeZ4sQivLIpOrvModNcuM1OaiK3Nd.aBm', 'USER', '2025-03-07 04:45:07', 1, 0, NULL, NULL, NULL),
(12, 'mimouna', 'aziz', 'azizmimou@gmail.com', '$2a$10$vWlgWYoIx81.RvWI.AARCOPY0iM6GSXVuLiSnPS6.D1nmgMgM08Qy', 'USER', '2025-03-07 04:49:54', 1, 0, NULL, NULL, NULL),
(13, 'ayoub', 'frikha', 'frikha@gmail.com', '$2a$10$ILcUJ9fDKPRb5vRr/J1w.eTxY.Q8B43myWXwF3hCYhMIiYBOxyj1m', 'USER', '2025-03-07 04:57:52', 1, 0, NULL, NULL, NULL),
(14, 'admin', 'behy', 'adminmrygel@gmail.com', '$2a$10$WUcinI/4OyUaCaHX32SWyOtAl4yylv0C539VkaL3NRAmizg.Rys6a', 'ADMIN', '2025-03-07 05:03:55', 1, 0, NULL, NULL, NULL),
(15, 'ranim', 'aziz', 'ranim@gmail.Com', '$2a$10$A97c.GvkgY7G89qh0TphsuSbTdV5P5dX53NlI9EFuOftmOQZMqRv.', 'USER', '2025-03-07 07:59:57', 1, 0, NULL, NULL, NULL),
(16, 'farid', 'latrash', 'farid@gmail.com', '$2a$10$fj5GCh2mI1YvAmiVM8i.VOTSrQP/jeJUvZe9dg4mLQk8ml2MZBEXK', 'USER', '2025-03-07 08:31:56', 1, 0, NULL, NULL, NULL),
(17, 'mourad', 'ghadhoun', 'mourad@gmail.com', '$2a$10$ZIVFlkDL9Tb3S.EofCffS.6G1AFc3US9Z4M2fM1VR5Vc8LZc33JSO', 'USER', '2025-03-07 08:40:07', 0, 0, NULL, NULL, NULL),
(18, 'aziz', 'samir', 'azizsamir@gmail.com', '$2y$13$w.2ycixl3hVIRxjKmfTq.OTol0iT5qzLmekOzc.XsdINzwkw3VlWS', 'DRIVER', '2025-04-15 13:29:52', 0, 0, NULL, NULL, NULL),
(19, 'aziz', 'lem3i', 'azuzgde@gmail.Com', '$2y$13$dKIuSrbnOaPe7BNMc/nupue9H.0YEkQduiN90LAeKrxxQqvNmej6e', 'USER', '2025-04-15 14:16:04', 0, 0, NULL, NULL, '2025-04-16 09:38:24'),
(20, 'ayoub', 'frikha', 'ayoub.frikha22@gmail.com', '$2y$13$5osiQVPXvVbL23kGbBe.i.JvCvy4qB9GU8QM2YCcg/i...', 'USER', '2025-04-15 22:33:59', 0, 0, NULL, NULL, NULL),
(75, 'AYOUBA', 'AYOUBA', 'ayoub.frikha23@gmail.com', '$2y$13$xys.nQPwe/bupsy3NilXbestW749D/vx4QwDt/9tCc0bO7B8jC4Ze', 'USER', '2025-04-15 21:39:56', 0, 0, NULL, NULL, '2025-04-16 06:12:11'),
(76, 'aslema', 'ghadhoun', 'aslemaghadhoun@gmail.com', '$2y$13$7fo.d44qQsTTJ.rTAIy5heSRKIQ61tJS5EsZKRVKn9rm5JVhROKDa', 'DRIVER', '2025-04-16 02:04:45', 0, 0, NULL, NULL, '2025-04-16 06:27:47'),
(77, 'balha', 'balha', 'ayoub.frikha225@gmail.com', '$2y$13$/NPwO9676DinXJuR6Gbrm.xXTrDF4VJ.ncCigJWhuhjcm1bG8HynG', 'USER', '2025-04-16 06:26:48', 0, 0, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Structure for view `reclamation_category_distribution`
--
DROP TABLE IF EXISTS `reclamation_category_distribution`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_category_distribution`  AS SELECT `reclamations`.`category` AS `category`, count(0) AS `count`, round(count(0) / (select count(0) from `reclamations`) * 100,2) AS `percentage` FROM `reclamations` GROUP BY `reclamations`.`category` ORDER BY count(0) DESC ;

-- --------------------------------------------------------

--
-- Structure for view `reclamation_monthly_trends`
--
DROP TABLE IF EXISTS `reclamation_monthly_trends`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_monthly_trends`  AS SELECT date_format(`reclamations`.`creation_date`,'%Y-%m') AS `month`, count(0) AS `count` FROM `reclamations` WHERE `reclamations`.`creation_date` >= curdate() - interval 12 month GROUP BY date_format(`reclamations`.`creation_date`,'%Y-%m') ORDER BY date_format(`reclamations`.`creation_date`,'%Y-%m') ASC ;

-- --------------------------------------------------------

--
-- Structure for view `reclamation_statistics`
--
DROP TABLE IF EXISTS `reclamation_statistics`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_statistics`  AS SELECT count(0) AS `total_reclamations`, sum(case when `reclamations`.`status` = 'Pending' then 1 else 0 end) AS `pending_reclamations`, sum(case when `reclamations`.`status` = 'Resolved' then 1 else 0 end) AS `resolved_reclamations`, date_format(curdate(),'%Y-%m-%d') AS `statistics_date` FROM `reclamations` ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_268B9C9DFFA0C224` (`office_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destination`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8FBBAD5471F7E88B` (`event_id`);

--
-- Indexes for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Indexes for table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rate`
--
ALTER TABLE `rate`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_DFEC3F393414710B` (`agent_id`);

--
-- Indexes for table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_97A0ADA3B83297E7` (`reservation_id`);

--
-- Indexes for table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destination` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT for table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `rate`
--
ALTER TABLE `rate`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=78;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `agent`
--
ALTER TABLE `agent`
  ADD CONSTRAINT `FK_268B9C9DFFA0C224` FOREIGN KEY (`office_id`) REFERENCES `office` (`id`);

--
-- Constraints for table `rate`
--
ALTER TABLE `rate`
  ADD CONSTRAINT `FK_DFEC3F393414710B` FOREIGN KEY (`agent_id`) REFERENCES `agent` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
