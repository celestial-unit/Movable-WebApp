-- SQL Script to add user_id column to event_registration table
-- This script checks if the column already exists before adding it

-- Step 1: Check if user_id column exists, and add it if it doesn't
ALTER TABLE event_registration ADD COLUMN IF NOT EXISTS user_id INT NOT NULL DEFAULT 1;

-- Step 2: Add foreign key constraint referencing users table
-- First remove any existing constraint to avoid errors
-- Note: This assumes there's a "users" table with an "id" primary key
ALTER TABLE event_registration DROP CONSTRAINT IF EXISTS fk_event_registration_user;
ALTER TABLE event_registration ADD CONSTRAINT fk_event_registration_user 
    FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE;

-- Step 3: Update any existing records to associate with a default user
-- This ensures all existing records have a valid user_id (adjust as needed)
UPDATE event_registration SET user_id = 1 WHERE user_id = 0 OR user_id IS NULL;

-- Step 4: Create an index for improved query performance when searching by user_id
CREATE INDEX IF NOT EXISTS idx_event_registration_user_id ON event_registration(user_id);
