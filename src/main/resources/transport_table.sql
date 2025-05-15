-- Verify if the transport table exists, and create it if it doesn't
-- For MySQL/MariaDB

-- Check if the table exists, and if not, create it
CREATE TABLE IF NOT EXISTS `transport` (
  `id` INT AUTO_INCREMENT PRIMARY KEY,
  `type` VARCHAR(50) NOT NULL,
  `capacity` INT NOT NULL,
  `disponibility` BOOLEAN NOT NULL DEFAULT TRUE,
  `destination` VARCHAR(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- Verify if any sample data exists, if not add some sample data
INSERT INTO `transport` (`type`, `capacity`, `disponibility`, `destination`)
SELECT 'Bus', 50, TRUE, 'Paris'
WHERE NOT EXISTS (SELECT 1 FROM `transport` LIMIT 1);

INSERT INTO `transport` (`type`, `capacity`, `disponibility`, `destination`)
SELECT 'Car', 4, TRUE, 'London'
WHERE NOT EXISTS (SELECT 2 FROM `transport` WHERE `type` = 'Car');

INSERT INTO `transport` (`type`, `capacity`, `disponibility`, `destination`)
SELECT 'Bus', 40, FALSE, 'Berlin'
WHERE NOT EXISTS (SELECT 3 FROM `transport` WHERE `destination` = 'Berlin');

-- Just to verify the table structure and content
-- SELECT * FROM transport;

