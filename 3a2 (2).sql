-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Hôte : 127.0.0.1
-- Généré le : jeu. 17 avr. 2025 à 05:28
-- Version du serveur : 10.4.32-MariaDB
-- Version de PHP : 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `3a2`
--

-- --------------------------------------------------------

--
-- Structure de la table `agent`
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
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `agent`
--

INSERT INTO `agent` (`id`, `name`, `email`, `type`, `phone`, `birthdate`, `pictureP`, `office_Id`) VALUES
(10, 'Imen Dridi', 'imen.dridi@esprit.tn', 'female', 95124222, '2003-08-08', 'uploads/agents/imen2-67f1d236332b2.jpg', 2),
(15, 'islem dridi', 'islem.dridi@gmail.com', 'male', 95123512, '1999-11-29', 'uploads\\agents\\islem.jpg', 7),
(20, 'nour dridi', 'nour.dridi@gmail.com', 'female', 95123513, '2025-04-08', 'uploads\\agents\\assistant.jpg', 7);

-- --------------------------------------------------------

--
-- Structure de la table `destination`
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
-- Déchargement des données de la table `destination`
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
-- Structure de la table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `licence_number` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `drivers`
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
-- Structure de la table `event`
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
-- Déchargement des données de la table `event`
--

INSERT INTO `event` (`id`, `title`, `description`, `duration`, `type`, `status`, `dateevent`, `startEvent`) VALUES
(170, 'ayouba', 'aaaaaaaaaaaaaa', 37, 50, 'Sfax', '2025-03-10', '18:18:00'),
(175, 'aoaoda', 'lm,dalmpdpapof,efkp,emf,epkg,epg,mkeg,mek,g', 80, 50, 'Sfax', '2025-07-21', '00:01:00'),
(178, 'blabla', 'aaaaaaaaaaaaaaa', 58, 100, 'Siliana', '2025-06-12', '23:25:00'),
(179, 'pleaseno', '****555555', 35, 30, 'Sousse', '2025-06-12', '23:25:00');

-- --------------------------------------------------------

--
-- Structure de la table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(11) NOT NULL,
  `event_id` int(11) DEFAULT NULL,
  `registration_date` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `event_registration`
--

INSERT INTO `event_registration` (`id`, `event_id`, `registration_date`, `status`, `user_id`) VALUES
(236, 178, '2025-04-16 05:49:42', 'Cancelled', 1),
(237, 178, '2025-04-16 06:25:27', 'Confirmed', 19),
(238, 179, '2025-04-16 06:55:17', 'Pending', 1),
(240, 179, '2025-04-16', 'Pending', 19),
(241, 178, '2025-04-16', 'Pending', 75);

-- --------------------------------------------------------

--
-- Structure de la table `messenger_messages`
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
-- Structure de la table `office`
--

CREATE TABLE `office` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `location` varchar(500) NOT NULL,
  `agents` int(11) DEFAULT NULL,
  `phone` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `office`
--

INSERT INTO `office` (`id`, `name`, `location`, `agents`, `phone`) VALUES
(2, 'office2', 'nouvelle medina3', 2, 95124222),
(7, 'office3', 'ben arous', 2, 95124221);

-- --------------------------------------------------------

--
-- Structure de la table `parkingspot`
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
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Déchargement des données de la table `parkingspot`
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
-- Structure de la table `rates`
--

CREATE TABLE `rates` (
  `id` int(11) NOT NULL,
  `idagent` int(11) NOT NULL,
  `rating` double NOT NULL,
  `comment` varchar(600) NOT NULL,
  `sentiment` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `rates`
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
-- Structure de la table `reclamations`
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
-- Déchargement des données de la table `reclamations`
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
-- Doublure de structure pour la vue `reclamation_category_distribution`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `reclamation_category_distribution` (
`category` varchar(50)
,`count` bigint(21)
,`percentage` decimal(26,2)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `reclamation_monthly_trends`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `reclamation_monthly_trends` (
`month` varchar(7)
,`count` bigint(21)
);

-- --------------------------------------------------------

--
-- Doublure de structure pour la vue `reclamation_statistics`
-- (Voir ci-dessous la vue réelle)
--
CREATE TABLE `reclamation_statistics` (
`total_reclamations` bigint(21)
,`pending_reclamations` decimal(22,0)
,`resolved_reclamations` decimal(22,0)
,`statistics_date` varchar(10)
);

-- --------------------------------------------------------

--
-- Structure de la table `reservation`
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
-- Déchargement des données de la table `reservation`
--

INSERT INTO `reservation` (`id`, `firstName`, `email`, `date`, `location`, `seats`, `agentType`, `paymentMode`, `TransportType`, `age`, `lastName`, `status`, `created_at`, `updated_at`, `DriverName`, `transport_id`, `driver_id`, `agent_id`, `destination_id`, `id_user`) VALUES
(1, 'ridha', 'brmariem7@gmail.com', '2025-04-10 00:00:00', 'nabeul', 3, 'medical assistance agent', 'cash', 'car', 11, 'Brik', 'approved', NULL, '2025-04-10 22:11:22', NULL, NULL, NULL, NULL, NULL, 0),
(2, 'Maryem', 'brmariem7@gmail.com', '2025-04-14 00:00:00', 'nabeul', 3, 'medical assistance agent', 'cash', 'car', 11, 'Brik', 'approved', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(4, 'mouna', 'b@gmail.com', '2025-04-23 00:00:00', 'Downtown', 7, 'female', 'cash', 'Bus', 40, 'Brik', NULL, NULL, NULL, 'azert', 20, 7, 10, 6, 0),
(5, 'ridha', 'brridha@gmail.com', '2025-04-24 00:00:00', 'EEE', 3, 'male', 'mobile_payment', 'Car', 50, 'Brik', NULL, NULL, '2025-04-14 16:37:17', 'Mohamed', 21, 13, 15, 15, 0);

-- --------------------------------------------------------

--
-- Structure de la table `ticket`
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
-- Structure de la table `transport`
--

CREATE TABLE `transport` (
  `id` int(11) NOT NULL,
  `type` varchar(255) NOT NULL,
  `capacity` int(11) NOT NULL,
  `disponibility` varchar(255) NOT NULL,
  `destination` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Déchargement des données de la table `transport`
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
(23, 'car', 22, '1', 'Tunisie'),
(25, 'Car', 6, '0', 'Tu'),
(26, 'Bus', 4, '0', 'Ni'),
(27, 'bus', 4, '1', 'Tu'),
(28, 'bus', 6, '0', 'Ni'),
(29, 'bus', 6, '0', 'Ni');

-- --------------------------------------------------------

--
-- Structure de la table `users`
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
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `role`, `created_at`, `faceIdEnabled`, `isBanned`, `banReason`, `banExpiryDate`, `lastLogin`) VALUES
(1, 'aziz', 'Ghadhoun', 'azizghadhoun1@gmail.com', '$2y$13$5osiQVPXvVbL23kGbBe.i.JvCvy4qB9GU8QM2YCcg/iT4ANYaGUn.', 'ADMIN', '2025-03-05 00:26:08', 0, 0, NULL, NULL, '2025-04-17 02:22:07'),
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
(78, 'r', 'g', 'ranimghanmi100@gmail.com', '$2y$13$nkGchyVZIn0n8Qf2R9/YNewe7.Y1neDG61uWX8y/8ZfKrD/FEzFLm', 'USER', '2025-04-16 22:44:24', 0, 0, NULL, NULL, '2025-04-16 22:44:52'),
(79, 'R', 'GH', 'ranimghanmi@gmail.com', '$2y$13$U22E3bsgYv0/P/urjt/rJ.bJRBvoK.IrVKecHOV/mpaFTSeJIV3pa', 'USER', '2025-04-17 00:23:09', 0, 0, NULL, NULL, '2025-04-17 04:19:58');

-- --------------------------------------------------------

--
-- Structure de la vue `reclamation_category_distribution`
--
DROP TABLE IF EXISTS `reclamation_category_distribution`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_category_distribution`  AS SELECT `reclamations`.`category` AS `category`, count(0) AS `count`, round(count(0) / (select count(0) from `reclamations`) * 100,2) AS `percentage` FROM `reclamations` GROUP BY `reclamations`.`category` ORDER BY count(0) DESC ;

-- --------------------------------------------------------

--
-- Structure de la vue `reclamation_monthly_trends`
--
DROP TABLE IF EXISTS `reclamation_monthly_trends`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_monthly_trends`  AS SELECT date_format(`reclamations`.`creation_date`,'%Y-%m') AS `month`, count(0) AS `count` FROM `reclamations` WHERE `reclamations`.`creation_date` >= curdate() - interval 12 month GROUP BY date_format(`reclamations`.`creation_date`,'%Y-%m') ORDER BY date_format(`reclamations`.`creation_date`,'%Y-%m') ASC ;

-- --------------------------------------------------------

--
-- Structure de la vue `reclamation_statistics`
--
DROP TABLE IF EXISTS `reclamation_statistics`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `reclamation_statistics`  AS SELECT count(0) AS `total_reclamations`, sum(case when `reclamations`.`status` = 'Pending' then 1 else 0 end) AS `pending_reclamations`, sum(case when `reclamations`.`status` = 'Resolved' then 1 else 0 end) AS `resolved_reclamations`, date_format(curdate(),'%Y-%m-%d') AS `statistics_date` FROM `reclamations` ;

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `agent`
--
ALTER TABLE `agent`
  ADD PRIMARY KEY (`id`),
  ADD KEY `office_agent_fk` (`office_Id`);

--
-- Index pour la table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destination`);

--
-- Index pour la table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `event_registration`
--
ALTER TABLE `event_registration`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_8FBBAD5471F7E88B` (`event_id`);

--
-- Index pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_75EA56E0FB7336F0` (`queue_name`),
  ADD KEY `IDX_75EA56E0E3BD61CE` (`available_at`),
  ADD KEY `IDX_75EA56E016BA31DB` (`delivered_at`);

--
-- Index pour la table `office`
--
ALTER TABLE `office`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `parkingspot`
--
ALTER TABLE `parkingspot`
  ADD PRIMARY KEY (`id_parking`),
  ADD KEY `IDX_67E0B2C126D4F35D` (`id_destination`);

--
-- Index pour la table `rates`
--
ALTER TABLE `rates`
  ADD PRIMARY KEY (`id`),
  ADD KEY `idagent_rate_fk` (`idagent`);

--
-- Index pour la table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- Index pour la table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `ticket`
--
ALTER TABLE `ticket`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_97A0ADA3B83297E7` (`reservation_id`);

--
-- Index pour la table `transport`
--
ALTER TABLE `transport`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_1483A5E9E7927C74` (`email`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `agent`
--
ALTER TABLE `agent`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT pour la table `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destination` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT pour la table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT pour la table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=181;

--
-- AUTO_INCREMENT pour la table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=242;

--
-- AUTO_INCREMENT pour la table `messenger_messages`
--
ALTER TABLE `messenger_messages`
  MODIFY `id` bigint(20) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT pour la table `office`
--
ALTER TABLE `office`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT pour la table `parkingspot`
--
ALTER TABLE `parkingspot`
  MODIFY `id_parking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `rates`
--
ALTER TABLE `rates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT pour la table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT pour la table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT pour la table `ticket`
--
ALTER TABLE `ticket`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT pour la table `transport`
--
ALTER TABLE `transport`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=80;

--
-- Contraintes pour les tables déchargées
--

--
-- Contraintes pour la table `parkingspot`
--
ALTER TABLE `parkingspot`
  ADD CONSTRAINT `fk_destination` FOREIGN KEY (`id_destination`) REFERENCES `destination` (`id_destination`);

--
-- Contraintes pour la table `rates`
--
ALTER TABLE `rates`
  ADD CONSTRAINT `idagent_rate_fk` FOREIGN KEY (`idagent`) REFERENCES `agent` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
