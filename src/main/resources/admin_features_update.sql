-- Admin Features Update SQL Script
-- Adds ban functionality, reclamation tracking and statistics support

-- 1. User Ban System - Add ban related columns to the users table
ALTER TABLE users 
ADD COLUMN is_banned BOOLEAN DEFAULT FALSE,
ADD COLUMN ban_reason VARCHAR(255),
ADD COLUMN ban_expiry TIMESTAMP NULL,
ADD COLUMN last_login TIMESTAMP NULL;

-- 2. Reclamation Tracking - Add creation_date and category for better analytics
ALTER TABLE reclamation
ADD COLUMN creation_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
ADD COLUMN category VARCHAR(50) DEFAULT 'General',
ADD COLUMN resolution_date TIMESTAMP NULL;

-- 3. Indexes for improved query performance
CREATE INDEX idx_users_ban_status ON users(is_banned, ban_expiry);
CREATE INDEX idx_reclamation_status ON reclamation(status);
CREATE INDEX idx_reclamation_date ON reclamation(creation_date);
CREATE INDEX idx_reclamation_category ON reclamation(category);

-- 4. Create reclamation statistics view for faster dashboard loading
CREATE OR REPLACE VIEW reclamation_statistics AS
SELECT
    COUNT(*) AS total_reclamations,
    SUM(CASE WHEN status = 'Pending' THEN 1 ELSE 0 END) AS pending_reclamations,
    SUM(CASE WHEN status = 'Resolved' THEN 1 ELSE 0 END) AS resolved_reclamations,
    DATE_FORMAT(CURRENT_DATE, '%Y-%m-%d') AS statistics_date
FROM reclamation;

-- 5. Create monthly reclamation trends view
CREATE OR REPLACE VIEW reclamation_monthly_trends AS
SELECT 
    DATE_FORMAT(creation_date, '%Y-%m') AS month,
    COUNT(*) AS count
FROM reclamation
WHERE creation_date >= DATE_SUB(CURRENT_DATE, INTERVAL 12 MONTH)
GROUP BY DATE_FORMAT(creation_date, '%Y-%m')
ORDER BY month;

-- 6. Create category distribution view
CREATE OR REPLACE VIEW reclamation_category_distribution AS
SELECT 
    category, 
    COUNT(*) AS count,
    ROUND((COUNT(*) / (SELECT COUNT(*) FROM reclamation)) * 100, 2) AS percentage
FROM reclamation
GROUP BY category
ORDER BY count DESC;

-- 7. Add audit log table for admin actions
CREATE TABLE IF NOT EXISTS admin_audit_log (
    id INT AUTO_INCREMENT PRIMARY KEY,
    admin_id INT NOT NULL,
    action_type VARCHAR(50) NOT NULL,
    action_details TEXT,
    target_user_id INT,
    target_entity VARCHAR(50),
    target_entity_id INT,
    timestamp TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (admin_id) REFERENCES users(id)
);

-- 8. Create procedure for banning users
DELIMITER //
CREATE PROCEDURE ban_user(
    IN p_user_id INT,
    IN p_reason VARCHAR(255),
    IN p_ban_expiry TIMESTAMP,
    IN p_admin_id INT
)
BEGIN
    -- Ban the user
    UPDATE users
    SET 
        is_banned = TRUE,
        ban_reason = p_reason,
        ban_expiry = p_ban_expiry
    WHERE id = p_user_id;
    
    -- Log the action
    INSERT INTO admin_audit_log (admin_id, action_type, action_details, target_user_id, target_entity, target_entity_id)
    VALUES (p_admin_id, 'BAN_USER', p_reason, p_user_id, 'users', p_user_id);
END //
DELIMITER ;

-- 9. Create procedure for unbanning users
DELIMITER //
CREATE PROCEDURE unban_user(
    IN p_user_id INT,
    IN p_admin_id INT
)
BEGIN
    -- Unban the user
    UPDATE users
    SET 
        is_banned = FALSE,
        ban_reason = NULL,
        ban_expiry = NULL
    WHERE id = p_user_id;
    
    -- Log the action
    INSERT INTO admin_audit_log (admin_id, action_type, action_details, target_user_id, target_entity, target_entity_id)
    VALUES (p_admin_id, 'UNBAN_USER', 'User unbanned', p_user_id, 'users', p_user_id);
END //
DELIMITER ;

