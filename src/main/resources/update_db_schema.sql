-- Add faceIdEnabled column to users table
ALTER TABLE users ADD COLUMN faceIdEnabled BOOLEAN DEFAULT FALSE;

-- Update existing users to have faceIdEnabled set to FALSE
UPDATE users SET faceIdEnabled = FALSE WHERE faceIdEnabled IS NULL;

-- Ensure the column is not nullable for future records
ALTER TABLE users ALTER COLUMN faceIdEnabled SET NOT NULL;

