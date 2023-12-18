CREATE TABLE `utilisateur`(
    `id` BIGINT UNSIGNED NOT NULL AUTO_INCREMENT PRIMARY KEY,
    `pseudo` VARCHAR(255) NOT NULL
);
CREATE TABLE `message`(
    `id` INT NOT NULL,
    `user_id` BIGINT NOT NULL,
    `content` VARCHAR(255) NOT NULL,
    `created_at` DATETIME NOT NULL,
    `ip_adress` BIGINT NOT NULL
);
ALTER TABLE
    `message` ADD PRIMARY KEY(`id`);
ALTER TABLE
    `message` ADD CONSTRAINT `message_user_id_foreign` FOREIGN KEY(`user_id`) REFERENCES `utilisateur`(`id`);