/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : 127.0.0.1
 Source Database       : pt12311_php2

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : utf-8

 Date: 09/22/2017 13:38:40 PM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `detail` text COLLATE utf8_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `products`
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES ('1', 'iphonex', '1000.00', '1 qua than', '1'), ('2', 'iphone8', '800.00', 'gan 1 qua than', '1'), ('3', 'samsung s8', '1000.00', '1 qua than', '2'), ('4', 'oppo F1', '500.00', 'nua qua than', '2'), ('5', 'Huawei', '600.00', 'etst', '1'), ('6', 'Nokia 6', '1200.00', 'hon 1 qua than', '1');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'admin@gmail.com', 'admin', '123456'), ('2', 'mod@gmai.com', 'moderator', '123456'), ('3', 'thienth32@gmail.com', 'tran huu thien', 'testsomething'), ('4', 'giap.nguyen@gmail.com', 'nguyen van giap', '4266bf8d3dc65bc84fd3badf2edfdbe7'), ('5', 'tripv@gmail.com', 'phi van tri', '6fb42da0e32e07b61c9f0251fe627a9c');
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
