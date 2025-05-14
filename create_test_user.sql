-- SQL to create a test user in the database
-- This uses a BCrypt hash that is compatible with both Symfony and Java
-- Password: Test123!

INSERT INTO `users` (`firstName`, `lastName`, `email`, `password`, `role`, `created_at`, `faceIdEnabled`, `isBanned`) 
VALUES ('Test', 'User', 'test@example.com', '$2a$10$iTWVnlflgfkuWtNaLZhJeOFJNa7KR9ZcUEQVL0IVkLQSMOq6HD3gm', 'USER', CURRENT_TIMESTAMP, 0, 0);

-- Note: The hash value above ($2a$10$iTWVnlflgfkuWtNaLZhJeOFJNa7KR9ZcUEQVL0IVkLQSMOq6HD3gm) is for the password 'Test123!'
-- This hash is in the $2a$ format which is compatible with both Java and Symfony applications

