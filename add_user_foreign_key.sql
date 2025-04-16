-- First add the column allowing NULL temporarily
ALTER TABLE event_registration 
ADD COLUMN IF NOT EXISTS user_id INT NULL;

-- Add foreign key constraint for event_registration to users
ALTER TABLE event_registration
    ADD CONSTRAINT fk_event_registration_user
    FOREIGN KEY (user_id)
    REFERENCES users(id_user)
    ON DELETE CASCADE;

-- After you've populated any existing records with valid user_ids, 
-- you can make it NOT NULL with:
-- ALTER TABLE event_registration MODIFY user_id INT NOT NULL;

-- Add index on foreign key
CREATE INDEX idx_event_registration_user ON event_registration(user_id);

-- Add id_user column to reservation table
ALTER TABLE `reservation` 
ADD COLUMN `id_user` int(11) NULL;

-- After populating user IDs:
-- ALTER TABLE reservation MODIFY id_user int(11) NOT NULL;

-- Add foreign key constraint
ALTER TABLE `reservation`
ADD CONSTRAINT `FK_reservation_user` 
FOREIGN KEY (`id_user`) REFERENCES `users` (`id_user`);
