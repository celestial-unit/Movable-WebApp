-- Create the transport table if it doesn't exist
CREATE TABLE IF NOT EXISTS transport (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(50) NOT NULL,
    capacity INT NOT NULL,
    disponibility BOOLEAN NOT NULL,
    destination VARCHAR(100) NOT NULL
);

-- Add some sample data for testing
INSERT INTO transport (type, capacity, disponibility, destination) 
VALUES 
('Bus', 30, true, 'Paris'),
('Car', 4, true, 'London'),
('Bus', 40, false, 'Berlin'),
('Car', 5, true, 'Rome');

-- Transport Table Creation Script

CREATE TABLE IF NOT EXISTS transport (
    id INT PRIMARY KEY AUTO_INCREMENT,
    type VARCHAR(50) NOT NULL,
    capacity INT NOT NULL,
    disponibility BOOLEAN NOT NULL,
    destination VARCHAR(100) NOT NULL
);

-- Sample data for testing
INSERT INTO transport (type, capacity, disponibility, destination) 
VALUES 
('Bus', 30, true, 'Paris'),
('Car', 4, true, 'London'),
('Bus', 40, false, 'Berlin'),
('Car', 5, true, 'Rome');

