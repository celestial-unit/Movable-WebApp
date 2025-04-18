-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 18, 2025 at 02:05 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pidevfinal`
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
  `phone` int(255) NOT NULL,
  `birthdate` date NOT NULL,
  `pictureP` varchar(500) NOT NULL,
  `office_Id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `agent`
--

INSERT INTO `agent` (`id`, `name`, `email`, `type`, `phone`, `birthdate`, `pictureP`, `office_Id`) VALUES
(10, 'Imen Dridi', 'imen.dridi@esprit.tn', 'female', 95124222, '2003-08-08', 'uploads/agents/imen2-67f1d236332b2.jpg', 2),
(15, 'islem dridi', 'islem.dridi@gmail.com', 'male', 95123512, '1999-11-29', 'uploads\\agents\\islem.jpg', 7),
(20, 'nour dridi', 'nour.dridi@gmail.com', 'female', 95123513, '2025-04-08', 'uploads\\agents\\assistant.jpg', 7);

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
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `destination`
--

INSERT INTO `destination` (`id_destination`, `name`, `location`, `category`, `status`, `routes`, `contact_information`, `image`, `rating`, `description`) VALUES
(4, 'Central', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 0, 'Main train station in the city.'),
(5, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(6, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(7, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(8, 'Central Station', 'Downtown', 'Train Stations', 'Open', 'Route A, Route B', '+1234567890, info@central.com', 'central_station.jpg', 4, 'Main train station in the city.'),
(48, 'fifififii', 'centre urbain', 'g', 's', 'ty', '12356789', '680045cfd642a.jpg', 2, 'hv'),
(49, 'faryoula', 'centre urbain', 'egypt', 'df', 'f', '12356789', '6800464975676.jpg', 5, 'dgd');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `licence_number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `drivers`
--

INSERT INTO `drivers` (`id`, `name`, `licence_number`) VALUES
(10, 'samy', '123456'),
(11, 'azert', '9888'),
(12, 'Mo', '12345678'),
(13, 'Mohamed', '000999887'),
(16, 'azer', '1123456'),
(19, 'aa', '0'),
(20, 'test', '0123'),
(21, 'ttt', '012345');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `duration`, `type`, `status`, `dateevent`, `startEvent`) VALUES
(166, 'marketingg', 'this edited marketing', 36, 50, 'Siliana', '2025-05-08', '18:18:00'),
(167, 'travelling in a bus', 'trip to ben arous', 36, 30, 'Ben Arous', '2025-04-07', '18:18:00'),
(170, 'ayoub', 'aaaaaaaaaaaaaa', 37, 50, 'Sfax', '2025-03-10', '18:18:00'),
(182, 'ayoub yhb yakra barcha', 'aaaaaaaaaaaaa', 44, 150, 'Kasserine', '2025-04-04', NULL),
(185, 'baslatna', 'aaaaaaaaaaaaa', 44, 100, 'Sfax', '2025-05-08', '19:14:00'),
(186, 'travelling in a car', 'aaaaaaaaaaaaaaaaaaa', 36, 150, 'Sousse', '2025-07-08', '20:20:00'),
(187, 'ayoub yhb yakra chwaya', '****111', 35, 100, 'Siliana', '2025-05-10', '19:23:00');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `registration_date` varchar(255) DEFAULT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`id`, `event_id`, `registration_date`, `status`, `user_id`) VALUES
(238, 179, '2025-04-16 06:55:17', 'Cancelled', 1),
(240, 179, '2025-04-16', 'Pending', 19),
(241, 178, '2025-04-16', 'Pending', 75),
(242, 178, '2025-04-16', 'Pending', 78),
(243, 179, '2025-04-16', 'Pending', 78),
(245, 178, '2025-04-17', 'Pending', 1),
(246, 178, '2025-04-17', 'Pending', 1),
(247, 178, '2025-04-17', 'Confirmed', 1),
(257, 166, '2025-04-18', 'Pending', 79),
(258, 166, NULL, 'Pending', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `messenger_messages`
--

CREATE TABLE `messenger_messages` (
  `id` bigint(20) NOT NULL,
  `body` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `headers` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue_name` varchar(190) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `location` varchar(500) NOT NULL,
  `agents` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `office`
--

INSERT INTO `office` (`id`, `name`, `location`, `agents`, `phone`) VALUES
(2, 'office2', 'nouvelle medina3', 2, 95124222),
(7, 'office3', 'ben arous', 2, 95124221);

-- --------------------------------------------------------

--
-- Table structure for table `parkingspot`
--

CREATE TABLE `parkingspot` (
  `id_parking` int(11) NOT NULL,
  `is_accessible` varchar(255) NOT NULL,
  `is_available` varchar(255) NOT NULL,
  `spot_number` varchar(255) NOT NULL,
  `parking_fees` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `notes` text NOT NULL,
  `id_destination` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `parkingspot`
--

INSERT INTO `parkingspot` (`id_parking`, `is_accessible`, `is_available`, `spot_number`, `parking_fees`, `size`, `notes`, `id_destination`) VALUES
(7, 'yes', 'no', 'A4', '5', '2', 'Close to elevator', 4),
(10, '1', '1', 'A2', '5', '2', 'Close to elevator', 5),
(12, '1', '0', 'A2', '5', '2', 'Reserved for VIPs', 6),
(13, '1', '1', 'A2', '5', '2', 'Close to elevator', 7),
(14, '1', '0', 'A2', '5', '2', 'hhhhhhhh', 8),
(27, '1', '1', 'A4', '5', '2', 'Close to elevator', 7);

-- --------------------------------------------------------

--
-- Table structure for table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `idagent` int(11) NOT NULL,
  `rating` double NOT NULL,
  `comment` varchar(600) NOT NULL,
  `sentiment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rates`
--

INSERT INTO `rates` (`id`, `idagent`, `rating`, `comment`, `sentiment`) VALUES
(1, 10, 3, 'okay', 'Angry'),
(2, 10, 3, 'professional', 'Angry'),
(3, 10, 5, 'good', 'Angry'),
(4, 10, 1, 'the agent was rude', 'Angry'),
(6, 10, 2, 'good', 'Angry'),
(7, 15, 5, 'Good job miss', 'Happy'),
(8, 15, 1, 'bad experience', 'Happy'),
(9, 15, 1, 'bad experience', 'Happy'),
(10, 15, 3, 'average experience', 'Happy'),
(11, 10, 1, 'didn\'t like the behavior', 'Angry'),
(12, 10, 3, 'good service', 'Angry'),
(14, 15, 4, 'thank you', 'Happy'),
(15, 10, 1, 'bad', 'Angry');

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
-- Stand-in structure for view `reclamation_monthly_trends`
-- (See below for the actual view)
--
CREATE TABLE `reclamation_monthly_trends` (
`month` varchar(7)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `firstName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `seats` int(11) NOT NULL,
  `agentType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paymentMode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `TransportType` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `age` int(11) NOT NULL,
  `lastName` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `DriverName` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
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
  `paymentMode` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `transport` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double NOT NULL,
  `destination` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `role`, `created_at`, `faceIdEnabled`, `isBanned`, `banReason`, `banExpiryDate`, `lastLogin`) VALUES
(1, 'aziz', 'Ghadhoun', 'azizghadhoun1@gmail.com', '$2y$13$5osiQVPXvVbL23kGbBe.i.JvCvy4qB9GU8QM2YCcg/iT4ANYaGUn.', 'ADMIN', '2025-03-05 00:26:08', 0, 0, NULL, NULL, '2025-04-18 00:54:06'),
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
(77, 'balha', 'balha', 'ayoub.frikha225@gmail.com', '$2y$13$/NPwO9676DinXJuR6Gbrm.xXTrDF4VJ.ncCigJWhuhjcm1bG8HynG', 'USER', '2025-04-16 06:26:48', 0, 0, NULL, NULL, NULL),
(78, 'ayoub', 'frikha', 'ayoub.frikha@esprit.tn', '$2y$13$CAdVk3QQDNVA2b.vkXUcLeNJItJTsOc1P1dqNcmt9nc/kfmwiqJqm', 'USER', '2025-04-16 22:56:28', 0, 0, NULL, NULL, '2025-04-17 14:10:10'),
(79, 'ayoub', 'frikha', 'frikhaayoub95@gmail.com', '$2y$13$WWx9rkrBOf1Bs5A6OyqWGe9x6QIAIpdx2anv31YKjq8J3e2vhevV2', 'USER', '2025-04-16 22:58:17', 0, 0, NULL, NULL, '2025-04-18 00:51:58'),
(80, 'ayoub2', 'frikha', 'frikhaayoub950@gmail.com', '$2y$13$VC.DOdl/zPY/3kIa4teUoOvxcAEIu6IG3U1LqXbeq1j4AqJmIe/2q', 'USER', '2025-04-17 13:59:03', 0, 0, NULL, NULL, '2025-04-17 15:05:42'),
(81, 'ayoub2', 'frikha', 'frikhaayoub951@gmail.com', '$2y$13$Y/sKkc/ikK2Cj.ryeKJcWeipuM.UDNolk5rmgL3DumK1GoPvZS.xW', 'USER', '2025-04-17 13:59:55', 0, 0, NULL, NULL, '2025-04-17 14:00:10'),
(82, 'ayoub2', 'frikha', 'frikhaayoub9561@gmail.com', '$2y$13$lPxVbG1KQExYgca90awN2.mq8.cJdcy7qq1EtP23r.NdzMtvplck.', 'USER', '2025-04-17 14:14:42', 0, 0, NULL, NULL, NULL),
(83, 'ayoub', 'frikha', 'ayoub.frikha0@esprit.tn', '$2y$13$yyZC2.JZMik3iKIPdHi03uffziiJ4fxWaTXWdVzbT8mcHcVrh0D.u', 'USER', '2025-04-17 14:55:44', 0, 0, NULL, NULL, NULL),
(84, 'ayoub', 'frikha', 'ayoub.frikha011@gmail.com', '$2y$13$.W8IJiNvbp4v0L6U8mKyje19Hdb8vUbED6UjhMjGoyT6zvf/RhD9i', 'USER', '2025-04-17 14:57:39', 0, 0, NULL, NULL, '2025-04-17 14:58:00');

-- --------------------------------------------------------

--
-- Structure for view `reclamation_monthly_trends`
--
DROP TABLE IF EXISTS `reclamation_monthly_trends`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_monthly_trends`  AS SELECT date_format(`reclamations`.`creation_date`,'%Y-%m') AS `month`, count(0) AS `count` FROM `reclamations` WHERE `reclamations`.`creation_date` >= curdate() - interval 12 month GROUP BY date_format(`reclamations`.`creation_date`,'%Y-%m') ORDER BY date_format(`reclamations`.`creation_date`,'%Y-%m') ASC  ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_agent_fk` (`office_Id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destination`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `parkingspot`
--
ALTER TABLE `parkingspot`
  ADD PRIMARY KEY (`id_parking`),
  ADD KEY `IDX_67E0B2C126D4F35D` (`id_destination`);

--
-- Indexes for table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idagent_rate_fk` (`idagent`);

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destination` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=188;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=259;

--
-- AUTO_INCREMENT for table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `parkingspot`
--
ALTER TABLE `parkingspot`
  MODIFY `id_parking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
