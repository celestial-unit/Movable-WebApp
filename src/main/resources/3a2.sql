-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 06, 2025 at 03:02 AM
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
-- Table structure for table `admin_audit_log`
--

---------------------------------------------------

--
-- Table structure for table `destination`
--

--CREATE TABLE `destination` (
  --`id_destination` int(11) NOT NULL,
  --`name` varchar(255) NOT NULL,
  --`location` varchar(255) NOT NULL,
  --`category` varchar(255) NOT NULL,
 -- `status` varchar(255) NOT NULL,
  --`routes` text DEFAULT NULL,
  --`contact_information` varchar(255) DEFAULT NULL,
 -- `image` varchar(255) DEFAULT NULL,
  --`rating` int(11) DEFAULT NULL,
  --`description` text DEFAULT NULL
--) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

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
(45, 'ARIANASOGHRA', '36.85160,10.19154', 'A', 'A', 'A', '12345678', '', 3, '');

-- --------------------------------------------------------

--
-- Table structure for table `drivers`
--

CREATE TABLE `drivers` (
  `id` int(11) NOT NULL,
  `userId` int(11) NOT NULL,
  `vehicleType` varchar(100) NOT NULL,
  `licenseNumber` varchar(50) NOT NULL,
  `availableStatus` tinyint(1) DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

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
(123, 'hello', 'hellohellohello', 31, 50, 'Jendouba', '2025-03-21', '01:30:00'),
(128, 'waywaaa', 'blaaaaaaaaaaaaaaaaaaaa', 31, 200, 'Sfax', '2025-03-09', '04:00:00'),
(129, 'waywaaaa', 'blaaaaaaaaaaaaaaaaaaaa', 31, 200, 'Sfax', '2025-03-02', '04:00:00'),
(133, 'aaaaaaaaaa', 'aaaaaaaaaaaaaa', 31, 150, 'Gabès', '2025-03-08', '04:00:00'),
(134, 'bAAAAAa', 'AAAACCCCCCCCCCCCCCCCCCCCC', 31, 200, 'Sfax', '2025-03-16', '04:30:00'),
(136, 'aaaaaaaaaaK', 'aaaaaaaaaaaaaa', 31, 150, 'Ariana', '2025-03-08', '04:00:00'),
(137, 'dance', 'aaaaaaaaaaaaaaaaaaaaa', 31, 50, 'Bizerte', '2025-03-21', '03:00:00'),
(138, 'helloa', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa', 31, 50, 'Ben Arous', '2025-03-22', '04:00:00'),
(140, 'waywaaaa&&', 'blaaaaaaaaaaaaaaaaaaaa', 31, 200, 'Sfax', '2025-04-06', '04:00:00'),
(141, 'aaaaaaa', 'aaaaaaaaaaaaaaaaa', 31, 100, 'Gafsa', '2025-03-21', '04:30:00'),
(142, 'vaaaaaaaaaaaaaaaaa', 'aaaaaaaaaaaaaaaaaaaaaaaa', 31, 50, 'Kairouan', '2025-03-13', '04:30:00'),
(143, 'Tech Conference', 'Annual tech event', 3, 1, 'Scheduled', '2025-05-10', '00:00:02'),
(144, 'Tech Conference', 'Annual tech event', 3, 1, 'Scheduled', '2025-05-10', '00:00:02');

-- --------------------------------------------------------

--
-- Table structure for table `event_registration`
--

CREATE TABLE `event_registration` (
  `id` int(11) NOT NULL,
  `event_id` int(11) NOT NULL,
  `registration_date` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` enum('Pending','Confirmed','Canceled') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `event_registration`
--

INSERT INTO `event_registration` (`id`, `event_id`, `registration_date`, `status`) VALUES
(77, 123, '2025-03-05 00:45:20', 'Canceled'),
(78, 140, '2025-02-28 09:33:18', 'Pending');

-- --------------------------------------------------------

--
-- Table structure for table `favorite`
--

CREATE TABLE `favorite` (
  `id_favorite` int(11) NOT NULL,
  `id_destination` int(11) NOT NULL,
  `id_user` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `favorite`
--

INSERT INTO `favorite` (`id_favorite`, `id_destination`, `id_user`) VALUES
(3, 28, 1),
(4, 27, 1),
(5, 42, 1),
(10, 4, 1),
(11, 9, 1);

-- --------------------------------------------------------

--
-- Table structure for table `parkingspot`
--

CREATE TABLE `parkingspot` (
  `id_parking` int(11) NOT NULL,
  `is_accessible` tinyint(1) NOT NULL,
  `is_available` tinyint(1) NOT NULL,
  `spot_number` varchar(255) NOT NULL,
  `parking_fees` float DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `notes` text NOT NULL,
  `id_destination` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `parkingspot`
--

INSERT INTO `parkingspot` (`id_parking`, `is_accessible`, `is_available`, `spot_number`, `parking_fees`, `size`, `notes`, `id_destination`) VALUES
(7, 1, 1, 'A2', 5, 2, 'Close to elevator', 4),
(10, 1, 1, 'A2', 5, 2, 'Close to elevator', 5),
(12, 1, 0, 'A2', 5, 2, 'Reserved for VIPs', 6),
(13, 1, 1, 'A2', 5, 2, 'Close to elevator', 7),
(14, 1, 0, 'A2', 5, 2, 'hhhhhhhh', 8),
(15, 1, 1, 'F', 12, 1, 'F', 17),
(17, 1, 1, 'a', 12, 12, 'a', 12),
(21, 0, 0, 'A', 2, 12, 's', 12),
(22, 0, 0, 'A', 33, 3, 'F', 23),
(24, 0, 0, 'A2', 2, 2, 'R', 27),
(26, 0, 0, 'AAAA', 45, 4, 'N', 28),
(27, 1, 1, 'A4', 5, 2, 'Close to elevator', 7);

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
(1, 'salemou alaykom', 'barcha claims', 'Rejected', 8, '2025-03-05 16:53:13', '2025-03-05 16:53:13', 'General', NULL),
(3, 'RANIM JET', 'AKEK', 'Pending', 8, '2025-03-05 21:52:50', '2025-03-05 21:52:50', 'General', NULL);

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) NOT NULL,
  `lastName` varchar(100) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` enum('USER','ADMIN','DRIVER') NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `faceIdEnabled` tinyint(1) DEFAULT 0,
  `isBanned` tinyint(1) DEFAULT 0,
  `banReason` varchar(255) DEFAULT NULL,
  `banExpiryDate` timestamp NULL DEFAULT NULL,
  `lastLogin` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstName`, `lastName`, `email`, `password`, `role`, `created_at`, `faceIdEnabled`, `isBanned`, `banReason`, `banExpiryDate`, `lastLogin`) VALUES
(1, 'aziz', 'Ghadhoun', 'azizghadhoun1@gmail.com', '$2a$10$moYT/i8Q1aiVnJS8J5aVX.QEks.cs3M6vYygrvZU6nDWHmkweP/Qy', 'ADMIN', '2025-03-05 00:26:08', 0, 0, NULL, NULL, NULL),
(3, 'aziz', 'ghadhoun', 'aziz@gmail.com', '$2a$10$kVV2x2flxnmmIkJk2nOqguaH8nurJ2C8cG8rlUuTO6JwkA612CoYq', 'USER', '2025-03-05 00:41:16', 0, 0, NULL, NULL, NULL),
(4, 'Google', 'User', 'aziz.7mimouna@gmail.com', '$2a$10$dzFj74v1I1jhw53GTDXXxeO9bGvRp2n6Rm0rtepdtYjwYDC9dL7.e', 'USER', '2025-03-05 00:41:45', 0, 0, NULL, NULL, NULL),
(5, 'aziz', 'ghadhoun', 'aziz1@gmail.com', '$2a$10$/2puXe6QwP.A3NU37PxnPuLIR/B36INJVGGPn3YXGs3lEn/Yh5mzC', 'USER', '2025-03-05 01:09:33', 0, 0, NULL, NULL, NULL),
(6, 'aziz', 'ghadhoun', 'zizou@gmail.Com', '$2a$10$gZaBPoeqjBMXwH1/eiVcYeMG8X6UT4q1i8ld2ZfaOWHZv1Hr45wmq', 'USER', '2025-03-05 01:33:20', 1, 0, NULL, NULL, NULL),
(7, 'aziz', 'ghadhoun', 'ziwziw@gmail.com', '$2a$10$htQ1pVnEdlGTueoCUvKMGe5HbR8wTa1ZW0ILgtkjR5XsJ/w37js.6', 'USER', '2025-03-05 02:01:33', 1, 0, NULL, NULL, NULL),
(8, 'aziz', 'ghaadhoun', 'samir@gmail.com', '$2a$10$b6EVRDS2YWiMejBAQtx6BegUc42qUR.1pyaFVwAl01iA3IICLKVaO', 'USER', '2025-03-05 02:07:40', 1, 1, 'akeka', '2025-03-06 20:06:58', NULL),
(9, 'ayoub', 'frikha', 'ayoub@gmail.com', '$2a$10$jS6f4LaNauLFA0moag3B4OwXLntv8WIagOB0Xt90kAf0pHuvdqXIu', 'USER', '2025-03-05 03:34:46', 1, 0, NULL, NULL, NULL);

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
-- Indexes for table `admin_audit_log`
--
ALTER TABLE `admin_audit_log`
  ADD PRIMARY KEY (`id`),
  ADD KEY `admin_id` (`admin_id`);

--
-- Indexes for table `destination`
--
ALTER TABLE `destination`
  ADD PRIMARY KEY (`id_destination`);

--
-- Indexes for table `drivers`
--
ALTER TABLE `drivers`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userId` (`userId`);

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
  ADD KEY `event_id` (`event_id`);

--
-- Indexes for table `favorite`
--
ALTER TABLE `favorite`
  ADD PRIMARY KEY (`id_favorite`),
  ADD KEY `id_destination` (`id_destination`);

--
-- Indexes for table `parkingspot`
--
ALTER TABLE `parkingspot`
  ADD PRIMARY KEY (`id_parking`),
  ADD KEY `fk_destination` (`id_destination`);

--
-- Indexes for table `reclamations`
--
ALTER TABLE `reclamations`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `idx_reclamations_status` (`status`),
  ADD KEY `idx_reclamations_date` (`creation_date`),
  ADD KEY `idx_reclamations_category` (`category`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `idx_users_ban_status` (`isBanned`,`banExpiryDate`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_audit_log`
--
ALTER TABLE `admin_audit_log`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `destination`
--
ALTER TABLE `destination`
  MODIFY `id_destination` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `drivers`
--
ALTER TABLE `drivers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=145;

--
-- AUTO_INCREMENT for table `event_registration`
--
ALTER TABLE `event_registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `favorite`
--
ALTER TABLE `favorite`
  MODIFY `id_favorite` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `parkingspot`
--
ALTER TABLE `parkingspot`
  MODIFY `id_parking` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `reclamations`
--
ALTER TABLE `reclamations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `admin_audit_log`
--
ALTER TABLE `admin_audit_log`
  ADD CONSTRAINT `admin_audit_log_ibfk_1` FOREIGN KEY (`admin_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `drivers`
--
ALTER TABLE `drivers`
  ADD CONSTRAINT `drivers_ibfk_1` FOREIGN KEY (`userId`) REFERENCES `users` (`id`);

--
-- Constraints for table `event_registration`
--
ALTER TABLE `event_registration`
  ADD CONSTRAINT `event_registration_ibfk_1` FOREIGN KEY (`event_id`) REFERENCES `event` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `favorite`
--
ALTER TABLE `favorite`
  ADD CONSTRAINT `id_destination` FOREIGN KEY (`id_destination`) REFERENCES `destination` (`id_destination`);

--
-- Constraints for table `parkingspot`
--
ALTER TABLE `parkingspot`
  ADD CONSTRAINT `fk_destination` FOREIGN KEY (`id_destination`) REFERENCES `destination` (`id_destination`);

--
-- Constraints for table `reclamations`
--
ALTER TABLE `reclamations`
  ADD CONSTRAINT `reclamations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
