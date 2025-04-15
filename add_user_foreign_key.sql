-- Add id_user column to reservation table
ALTER TABLE `reservation` 
ADD COLUMN `id_user` int(11) NOT NULL;

-- Add foreign key constraint
ALTER TABLE `reservation`
ADD CONSTRAINT `FK_reservation_user` 
FOREIGN KEY (`id_user`) REFERENCES `users` (`id`);
