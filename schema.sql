CREATE DATABASE IF NOT EXISTS php_facebook_stream_countdown
  CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

USE php_facebook_stream_countdown;

CREATE TABLE IF NOT EXISTS admin (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  username VARCHAR(191) NOT NULL,
  password VARCHAR(255) NOT NULL,
  PRIMARY KEY (id),
  UNIQUE KEY uq_admin_username (username)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;

CREATE TABLE IF NOT EXISTS campaigns (
  id INT UNSIGNED NOT NULL AUTO_INCREMENT,
  heading VARCHAR(255) NOT NULL,
  datetimee DATETIME NOT NULL,
  background VARCHAR(255) NOT NULL,
  `option` ENUM('down', 'up') NOT NULL DEFAULT 'down',
  PRIMARY KEY (id)
) ENGINE=InnoDB
  DEFAULT CHARACTER SET utf8mb4
  COLLATE utf8mb4_unicode_ci;