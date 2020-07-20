# SQL Manager 2007 for MySQL 4.2.0.2
# ---------------------------------------
# Host     : localhost
# Port     : 3306
# Database : traveling


SET FOREIGN_KEY_CHECKS=0;

DROP DATABASE IF EXISTS `traveling`;

CREATE DATABASE `traveling`
    CHARACTER SET 'latin1'
    COLLATE 'latin1_swedish_ci';

USE `traveling`;

#
# Structure for the `langs` table : 
#

DROP TABLE IF EXISTS `langs`;

CREATE TABLE `langs` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `villes` table : 
#

DROP TABLE IF EXISTS `villes`;

CREATE TABLE `villes` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `types` table : 
#

DROP TABLE IF EXISTS `types`;

CREATE TABLE `types` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

#
# Structure for the `activites` table : 
#

DROP TABLE IF EXISTS `activites`;

CREATE TABLE `activites` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `price` double NOT NULL,
  `ville_id` int(10) unsigned NOT NULL,
  `active` tinyint(4) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `types_id` int(11) unsigned NOT NULL,
  `destination` text COLLATE utf8mb4_unicode_ci,
  `lieu_depart` text COLLATE utf8mb4_unicode_ci,
  `lieu_arriver` text COLLATE utf8mb4_unicode_ci,
  `heur_depart` time DEFAULT NULL,
  `heur_arriver` time DEFAULT NULL,
  `duree` int(11) DEFAULT NULL,
  `map_url` text COLLATE utf8mb4_unicode_ci,
  `aPrograme` tinyint(4) DEFAULT '0',
  PRIMARY KEY (`id`),
  KEY `activites_fk` (`ville_id`),
  KEY `types_id` (`types_id`),
  CONSTRAINT `activites_fk` FOREIGN KEY (`ville_id`) REFERENCES `villes` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `activites_fk1` FOREIGN KEY (`types_id`) REFERENCES `types` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=136 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `activite_details` table : 
#

DROP TABLE IF EXISTS `activite_details`;

CREATE TABLE `activite_details` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `activite_id` int(10) unsigned NOT NULL,
  `lang_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activite_details_fk` (`lang_id`),
  KEY `activite_details_fk1` (`activite_id`),
  CONSTRAINT `activite_details_fk` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `activite_details_fk1` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `activity_days` table : 
#

DROP TABLE IF EXISTS `activity_days`;

CREATE TABLE `activity_days` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `activite_id` int(10) unsigned NOT NULL,
  `lang_id` int(11) unsigned NOT NULL,
  `title` text,
  `desc` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `activite_id` (`activite_id`),
  KEY `lang_id` (`lang_id`),
  CONSTRAINT `activity_days_fk` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  CONSTRAINT `activity_days_fk1` FOREIGN KEY (`lang_id`) REFERENCES `langs` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=latin1 AVG_ROW_LENGTH=4096;

#
# Structure for the `media` table : 
#

DROP TABLE IF EXISTS `media`;

CREATE TABLE `media` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activite_id` int(10) unsigned NOT NULL,
  `url` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `media_fk` (`activite_id`),
  CONSTRAINT `medias_fk` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `messages` table : 
#

DROP TABLE IF EXISTS `messages`;

CREATE TABLE `messages` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `object` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `migrations` table : 
#

DROP TABLE IF EXISTS `migrations`;

CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `password_resets` table : 
#

DROP TABLE IF EXISTS `password_resets`;

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `reservations` table : 
#

DROP TABLE IF EXISTS `reservations`;

CREATE TABLE `reservations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `activite_id` int(10) unsigned NOT NULL,
  `firstName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lastName` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `number` int(11) NOT NULL,
  `start` date NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `pays` text COLLATE utf8mb4_unicode_ci,
  `villes` text COLLATE utf8mb4_unicode_ci,
  PRIMARY KEY (`id`),
  KEY `reservations_fk` (`activite_id`),
  CONSTRAINT `reservations_fk` FOREIGN KEY (`activite_id`) REFERENCES `activites` (`id`) ON DELETE CASCADE ON UPDATE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Structure for the `users` table : 
#

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

#
# Data for the `langs` table  (LIMIT 0,500)
#

INSERT INTO `langs` (`id`, `name`, `code`, `created_at`, `updated_at`) VALUES 
  (1,'Francais','fr',NULL,'2020-03-14 14:04:02'),
  (2,'Arabic','ar','2020-03-14 13:40:30','2020-03-14 13:40:30'),
  (4,'Anglais','en','2020-03-14 14:06:57','2020-03-14 14:07:07');

COMMIT;

#
# Data for the `villes` table  (LIMIT 0,500)
#

INSERT INTO `villes` (`id`, `name`, `created_at`, `updated_at`) VALUES 
  (4,'Agadir','2020-03-14 09:10:23','2020-03-14 09:10:23'),
  (7,'marrakech','2020-03-17 21:18:27','2020-03-17 21:18:27'),
  (8,'rabat','2020-03-18 19:56:15','2020-03-18 19:56:15');

COMMIT;

#
# Data for the `types` table  (LIMIT 0,500)
#

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES 
  (1,'Circuit','2020-03-14 15:17:37','2020-03-14 23:31:47'),
  (3,'Excursion','2020-03-14 23:32:56','2020-03-14 23:32:56');

COMMIT;

#
# Data for the `activites` table  (LIMIT 0,500)
#

INSERT INTO `activites` (`id`, `price`, `ville_id`, `active`, `created_at`, `updated_at`, `types_id`, `destination`, `lieu_depart`, `lieu_arriver`, `heur_depart`, `heur_arriver`, `duree`, `map_url`, `aPrograme`) VALUES 
  (125,555,7,1,'2020-03-19 21:03:00','2020-03-19 21:04:35',1,'agadir','marrakech','agadir adrar',NULL,NULL,2,'<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1lOTu5qCcGfUooIoGKRN31CPtoLhIRsLW\" width=\"640\" height=\"480\"></iframe>',1),
  (126,654654,7,1,'2020-03-19 21:23:11','2020-03-19 21:23:26',3,'54654','TEMARA jyh','marrakech',NULL,NULL,2,'5454',NULL),
  (127,44,7,1,'2020-03-19 21:57:06','2020-03-19 21:59:35',1,'merzouga','geliz','merzouga',NULL,NULL,2,'<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1lOTu5qCcGfUooIoGKRN31CPtoLhIRsLW\" width=\"640\" height=\"480\"></iframe>',1),
  (128,44,4,1,'2020-03-19 22:08:49','2020-03-19 22:08:49',1,'444','uityeroîj','fghfgh',NULL,NULL,4,'fghfgh',0),
  (129,2,4,1,'2020-03-20 17:19:52','2020-03-20 17:21:39',1,'fdgfdg','agadir tarasste','ouarzazate massira',NULL,NULL,2,'odifhgpodf',1),
  (132,55,8,1,'2020-03-20 22:09:59','2020-03-20 22:10:22',1,'marrakech','TEMARA massira 1','marrakech',NULL,NULL,1,'<iframe src=\"https://www.google.com/maps/d/u/0/embed?mid=1P79j6mwBwLrij2UR-Bcvi5G32sc9Cztp\" width=\"640\" height=\"480\"></iframe>',1),
  (134,2222,4,1,'2020-03-30 11:20:13','2020-03-30 11:21:16',3,'22222222','sa','sa',NULL,NULL,2,'2222222222',1),
  (135,4,4,1,'2020-03-30 11:23:30','2020-03-30 11:24:53',1,'4','temara massira 1','marrakech',NULL,NULL,2,'4',1);

COMMIT;

#
# Data for the `activite_details` table  (LIMIT 0,500)
#

INSERT INTO `activite_details` (`id`, `title`, `description`, `activite_id`, `lang_id`, `created_at`, `updated_at`) VALUES 
  (1,'Titre Francais','Decription Francais',125,1,'2020-03-19 21:04:35','2020-03-19 21:04:35'),
  (2,'Titre Arabic','Decription Arabic',125,2,'2020-03-19 21:04:35','2020-03-19 21:04:35'),
  (3,'kjhkjh','kjhkjh',126,2,'2020-03-19 21:23:26','2020-03-19 21:23:26'),
  (4,'Titre Francais','Decription Francais',127,1,'2020-03-19 21:59:35','2020-03-19 21:59:35'),
  (5,'Titre Arabic','Decription Arabic',127,2,'2020-03-19 21:59:35','2020-03-19 21:59:35'),
  (6,'agadir','agadir',129,1,'2020-03-20 17:21:39','2020-03-20 17:21:39'),
  (7,'ouarzazate','ouarzazate',129,2,'2020-03-20 17:21:39','2020-03-20 17:21:39'),
  (8,'Titre Francais','Decription Francais',132,1,'2020-03-20 22:10:22','2020-03-20 22:10:22'),
  (9,'qsd','qsfd',134,1,'2020-03-30 11:21:15','2020-03-30 11:21:15'),
  (10,'qsdf','qsd',134,2,'2020-03-30 11:21:15','2020-03-30 11:21:15'),
  (11,'az','az',135,1,'2020-03-30 11:24:53','2020-03-30 11:24:53'),
  (12,'az','az',135,4,'2020-03-30 11:24:53','2020-03-30 11:24:53');

COMMIT;

#
# Data for the `activity_days` table  (LIMIT 0,500)
#

INSERT INTO `activity_days` (`id`, `activite_id`, `lang_id`, `title`, `desc`, `created_at`, `updated_at`) VALUES 
  (1,125,1,NULL,'Francais Decription 1','2020-03-19 21:04:35','2020-03-19 21:04:35'),
  (2,125,1,NULL,'Francais Decription 2','2020-03-19 21:04:35','2020-03-19 21:04:35'),
  (3,125,2,NULL,'Arabic Decription1','2020-03-19 21:04:35','2020-03-19 21:04:35'),
  (4,125,2,NULL,'Arabic Decription 2','2020-03-19 21:04:35','2020-03-19 21:04:35'),
  (5,126,2,NULL,NULL,'2020-03-19 21:23:26','2020-03-19 21:23:26'),
  (6,126,2,NULL,NULL,'2020-03-19 21:23:26','2020-03-19 21:23:26'),
  (7,127,1,NULL,'Decription programme fr','2020-03-19 21:59:35','2020-03-19 21:59:35'),
  (8,127,1,NULL,'Decription 2 programme fr','2020-03-19 21:59:35','2020-03-19 21:59:35'),
  (9,127,2,NULL,'Decription programme ar','2020-03-19 21:59:35','2020-03-19 21:59:35'),
  (10,127,2,NULL,'Decription 2 programme ar','2020-03-19 21:59:35','2020-03-19 21:59:35'),
  (11,129,1,NULL,'mlhj','2020-03-20 17:21:39','2020-03-20 17:21:39'),
  (12,129,1,NULL,'fsh','2020-03-20 17:21:39','2020-03-20 17:21:39'),
  (13,129,2,NULL,'sdfh','2020-03-20 17:21:39','2020-03-20 17:21:39'),
  (14,129,2,NULL,'fgjh','2020-03-20 17:21:39','2020-03-20 17:21:39'),
  (15,132,1,'Francais Titre du Jour 1','Decription du Jour 1','2020-03-20 22:10:22','2020-03-20 22:10:22'),
  (16,134,1,'Titre du Jour 1','Decription du Jour 1','2020-03-30 11:21:16','2020-03-30 11:21:16'),
  (17,134,1,'Francais\r\nTitre du Jour 2','Decription du Jour 2','2020-03-30 11:21:16','2020-03-30 11:21:16'),
  (18,134,2,'Titre du Jour 1 Arabic','Decription du Jour 1','2020-03-30 11:21:16','2020-03-30 11:21:16'),
  (19,134,2,'Arabic\r\nTitre du Jour 2','Decription du Jour 2','2020-03-30 11:21:16','2020-03-30 11:21:16'),
  (20,135,1,'Francais Titre du Jour 1','Francais Decription du Jour 1','2020-03-30 11:24:53','2020-03-30 11:24:53'),
  (21,135,4,'Anglais Titre du Jour 1','Anglais Decription  du Jour 1','2020-03-30 11:24:54','2020-03-30 11:24:54'),
  (22,135,1,'Francais Titre du Jour 2','Francais Decription  du Jour 2','2020-03-30 11:24:54','2020-03-30 11:24:54'),
  (23,135,4,'Anglais Titre du Jour 2','Anglais Decription  du Jour 2','2020-03-30 11:24:54','2020-03-30 11:24:54');

COMMIT;

#
# Data for the `media` table  (LIMIT 0,500)
#

INSERT INTO `media` (`id`, `activite_id`, `url`, `created_at`, `updated_at`) VALUES 
  (1,125,'125_1584651885.jpg','2020-03-19 21:04:45','2020-03-19 21:04:45'),
  (2,126,'126_1584653019.png','2020-03-19 21:23:39','2020-03-19 21:23:39'),
  (3,126,'126_1584653019.jpg','2020-03-19 21:23:39','2020-03-19 21:23:39'),
  (4,127,'127_1584655204.jpg','2020-03-19 22:00:04','2020-03-19 22:00:04'),
  (5,127,'127_1584655204.jpg','2020-03-19 22:00:05','2020-03-19 22:00:05'),
  (6,127,'127_1584655205.png','2020-03-19 22:00:05','2020-03-19 22:00:05'),
  (7,129,'129_1584724919.png','2020-03-20 17:21:59','2020-03-20 17:21:59'),
  (8,129,'129_1584724919.jpg','2020-03-20 17:21:59','2020-03-20 17:21:59'),
  (9,132,'132_1584742235.jpg','2020-03-20 22:10:35','2020-03-20 22:10:35'),
  (10,134,'134_1585567296.jpg','2020-03-30 11:21:36','2020-03-30 11:21:36'),
  (11,134,'123.png','2020-04-07','2020-04-07');

COMMIT;

#
# Data for the `migrations` table  (LIMIT 0,500)
#

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES 
  (1,'2014_10_12_000000_create_users_table',1),
  (2,'2014_10_12_100000_create_password_resets_table',1),
  (3,'2020_01_28_162832_create_media_table',1),
  (4,'2020_01_28_162904_create_langs_table',1),
  (5,'2020_01_28_162916_create_villes_table',1),
  (6,'2020_01_28_163012_create_activites_table',1),
  (7,'2020_01_28_163027_create_activite_details_table',1),
  (8,'2020_01_28_163045_create_reservations_table',1),
  (9,'2020_01_28_163057_create_messages_table',1);

COMMIT;

#
# Data for the `reservations` table  (LIMIT 0,500)
#

INSERT INTO `reservations` (`id`, `activite_id`, `firstName`, `lastName`, `number`, `start`, `email`, `phone`, `created_at`, `updated_at`, `pays`, `villes`) VALUES 
  (3,127,'lahyani','mounir',4,'2020-04-09','lahyani.mo@gmail.com','0650943764','2020-04-04','2020-04-04','maroc','ouarzazate');

COMMIT;

