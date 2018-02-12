/*
Navicat MySQL Data Transfer

Source Server         : mysql
Source Server Version : 50637
Source Host           : localhost:3306
Source Database       : practica

Target Server Type    : MYSQL
Target Server Version : 50637
File Encoding         : 65001

Date: 2018-02-12 16:31:13
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `articles`
-- ----------------------------
DROP TABLE IF EXISTS `articles`;
CREATE TABLE `articles` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alias` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `img` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of articles
-- ----------------------------
INSERT INTO `articles` VALUES ('2', 'post 2', 'p2', 'тут 2й пост', 'тут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й пост', 'https://i1.wp.com/netobserver.ru/wp-content/uploads/2016/10/7-adme-test-mind.jpg?resize=443%2C401&ssl=1', '1', null, null);
INSERT INTO `articles` VALUES ('3', 'post 3', 'p3', 'тут 3й пост', 'тут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й посттут 2й пост', 'https://files.adme.ru/files/news/part_130/1301115/10515915-9-650-a542d8629a-1484149820.jpg', '1', null, null);
INSERT INTO `articles` VALUES ('4', 'post 4', 'p4', 'ТУТ 4й ПОСТ', 'ПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОНПОСТ 4 ТУТ ВОТ ОН', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSVBBDf4v1zFOAo7kuoNJRkZefsxZRz5XyWzBP6k0zMEDnrMn_JVw', '1', null, null);

-- ----------------------------
-- Table structure for `article_tag`
-- ----------------------------
DROP TABLE IF EXISTS `article_tag`;
CREATE TABLE `article_tag` (
  `article_id` int(10) unsigned NOT NULL,
  `tag_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  KEY `article_tag_article_id_index` (`article_id`),
  KEY `article_tag_tag_id_index` (`tag_id`),
  CONSTRAINT `article_tag_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `article_tag_tag_id_foreign` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of article_tag
-- ----------------------------

-- ----------------------------
-- Table structure for `categories`
-- ----------------------------
DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` int(10) unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `categories_category_id_foreign` (`category_id`),
  CONSTRAINT `categories_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of categories
-- ----------------------------

-- ----------------------------
-- Table structure for `comments`
-- ----------------------------
DROP TABLE IF EXISTS `comments`;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `comment` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `article_id` int(10) unsigned DEFAULT NULL,
  `user_id` int(10) unsigned DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `comments_article_id_foreign` (`article_id`),
  KEY `comments_user_id_foreign` (`user_id`),
  CONSTRAINT `comments_article_id_foreign` FOREIGN KEY (`article_id`) REFERENCES `articles` (`id`) ON DELETE CASCADE,
  CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of comments
-- ----------------------------

-- ----------------------------
-- Table structure for `migrations`
-- ----------------------------
DROP TABLE IF EXISTS `migrations`;
CREATE TABLE `migrations` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of migrations
-- ----------------------------
INSERT INTO `migrations` VALUES ('1', '2018_02_06_110744_create_atricles_table', '1');
INSERT INTO `migrations` VALUES ('2', '2018_02_06_110837_create_categories_table', '1');
INSERT INTO `migrations` VALUES ('3', '2018_02_06_110905_create_tags_table', '1');
INSERT INTO `migrations` VALUES ('4', '2018_02_06_110907_create_article_tag_table', '1');
INSERT INTO `migrations` VALUES ('5', '2018_02_06_110939_create_users_table', '1');
INSERT INTO `migrations` VALUES ('6', '2018_02_06_111000_create_comments_table', '1');
INSERT INTO `migrations` VALUES ('7', '2018_02_06_113350_create_password_resets_table', '1');

-- ----------------------------
-- Table structure for `password_resets;`
-- ----------------------------
DROP TABLE IF EXISTS `password_resets;`;
CREATE TABLE `password_resets;` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of password_resets;
-- ----------------------------

-- ----------------------------
-- Table structure for `tags`
-- ----------------------------
DROP TABLE IF EXISTS `tags`;
CREATE TABLE `tags` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of tags
-- ----------------------------

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_admin` bigint(20) NOT NULL DEFAULT '0',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'Denis', 'den@den.den', '$2y$10$FhtILWYDEFPXgVOjO5C7L.U1of10MVZgUeqWH34ksCEFHEMMSIx16', '1', 'ALhRquRXfvjyE7vM4tzRd7qPJaLLHyJrE0g9GQA2PwOQhagR0RYFzhy4BWkx', '2018-02-09 13:46:10', '2018-02-09 13:46:10');
INSERT INTO `users` VALUES ('2', 'Not admin', 'neAdmin@loh.on', '$2y$10$fpmsNcQwxgB0jcxuZG2t0.bq5rdsZX.69rT6yURAM8CvABsN9FMWq', '0', 'GoGD8nYAxomFfOcqUPWrnwJ8ZeR51yY9R0LmhLg2STJDp1Ih6x75Aa4d4Y4H', '2018-02-12 14:28:15', '2018-02-12 14:28:15');
