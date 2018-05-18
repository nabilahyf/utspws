# Host: localhost  (Version 5.5.5-10.1.10-MariaDB)
# Date: 2018-05-18 16:43:09
# Generator: MySQL-Front 6.0  (Build 2.20)


#
# Structure for table "books"
#

DROP TABLE IF EXISTS `books`;
CREATE TABLE `books` (
  `id_book` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `judul` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `pengarang` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id_book`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "books"
#

INSERT INTO `books` VALUES (1,'dilan','haha','2018-05-18 16:11:31','2018-05-18 16:11:31');

#
# Structure for table "categories"
#

DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `ket` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "categories"
#

INSERT INTO `categories` VALUES (2,'novel','','2018-05-18 14:56:40','2018-05-18 14:56:40'),(3,'novel','','2018-05-18 14:57:24','2018-05-18 14:57:24'),(4,'novel','','2018-05-18 15:06:33','2018-05-18 15:06:33'),(5,'demokrasi','','2018-05-18 15:27:13','2018-05-18 15:27:13');

#
# Structure for table "migrations"
#

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

#
# Data for table "migrations"
#

INSERT INTO `migrations` VALUES (1,'2018_05_18_062348_categories',1),(2,'2018_05_18_063503_books',2);
