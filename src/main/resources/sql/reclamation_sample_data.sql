-- Sample data for reclamations table
-- This file contains sample records with different statuses, users, and creation dates
-- Use this data to test reclamations statistics functionality

-- First, create the directory structure and table if it doesn't exist
CREATE TABLE IF NOT EXISTS reclamations (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    description TEXT NOT NULL,
    status VARCHAR(20) NOT NULL, -- 'NEW', 'IN_PROGRESS', 'RESOLVED', 'REJECTED'
    userId INT NOT NULL,
    creationDate DATETIME DEFAULT CURRENT_TIMESTAMP
);

-- Clear existing data if needed for clean testing
-- DELETE FROM reclamations;

-- Insert sample data with various statuses, users, and dates

-- NEW status reclamationss - recent
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('App Crashes on Startup', 'The application crashes immediately when I try to open it on my iPhone 13', 'NEW', 1, '2025-03-01 10:15:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Missing Payment Option', 'I cannot find the PayPal payment option that was available last week', 'NEW', 2, '2025-03-02 14:30:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Wrong Delivery Address', 'My order #45678 was delivered to the wrong address', 'NEW', 3, '2025-03-03 09:45:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Account Access Issue', 'I cannot reset my password using the "Forgot Password" feature', 'NEW', 4, '2025-03-04 16:20:00');

-- IN_PROGRESS status reclamationss - mix of recent and older
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Slow Performance', 'The application becomes extremely slow after 30 minutes of use', 'IN_PROGRESS', 2, '2025-02-25 11:10:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Incorrect Pricing', 'The final price does not match the advertised price for item #ABC123', 'IN_PROGRESS', 5, '2025-03-01 08:30:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Login Verification Issue', 'I never receive the SMS verification code when logging in', 'IN_PROGRESS', 1, '2025-02-28 13:45:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Damaged Product', 'My order arrived with significant damage to the packaging and product', 'IN_PROGRESS', 3, '2025-02-20 15:15:00');

-- RESOLVED status reclamationss - mostly older
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Missing Attachment', 'Cannot upload PDF attachments when submitting a support ticket', 'RESOLVED', 6, '2025-01-15 09:20:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Refund Not Processed', 'My refund for order #34567 has not been processed after 10 days', 'RESOLVED', 7, '2025-01-20 14:30:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Feature Request', 'Please add dark mode to the mobile application', 'RESOLVED', 8, '2025-02-01 10:45:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Account Merger', 'I have two accounts and would like to merge them', 'RESOLVED', 9, '2025-01-25 16:50:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Missing Order History', 'My order history for the past 3 months is not showing up', 'RESOLVED', 5, '2025-02-10 08:15:00');

-- REJECTED status reclamationss - various dates
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Coupon Not Applied', 'The SUMMER2025 coupon code was not applied to my order', 'REJECTED', 10, '2025-02-15 11:30:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Missing Features', 'Several advertised features are not available in my subscription plan', 'REJECTED', 11, '2025-01-10 13:20:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Late Delivery Compensation', 'My order was delivered 2 days late and I want compensation', 'REJECTED', 12, '2025-02-05 15:40:00');

-- More reclamationss by the same users (for testing user-specific statistics)
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Second Damaged Product', 'This is the second time I received a damaged product this month', 'NEW', 3, '2025-03-05 10:25:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Billing Discrepancy', 'I was charged twice for my monthly subscription', 'IN_PROGRESS', 1, '2025-02-27 09:15:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Missing Documentation', 'Product manual is not available for download', 'RESOLVED', 5, '2025-01-30 14:50:00');

-- More recent reclamationss (for testing date-based statistics)
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Website Navigation Issue', 'Cannot access my profile from the main menu', 'NEW', 7, '2025-03-04 17:10:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Product Availability', 'Product shows as in stock but cannot be added to cart', 'NEW', 8, '2025-03-05 08:30:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Subscription Cancellation', 'Unable to cancel my subscription through the website', 'IN_PROGRESS', 9, '2025-03-02 13:20:00');

-- Add some reclamationss from the same day (for testing daily statistics)
INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Payment Declined', 'My credit card was declined but the amount was still held', 'NEW', 10, '2025-03-05 09:40:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Account Locked', 'My account was locked after three login attempts', 'NEW', 11, '2025-03-05 11:15:00');

INSERT INTO reclamations (title, description, status, user_id, creationDate)
VALUES ('Missing Order Confirmation', 'Did not receive email confirmation for order #56789', 'NEW', 12, '2025-03-05 14:25:00');

