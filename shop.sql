/*
 Navicat Premium Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50718
 Source Host           : 127.0.0.1
 Source Database       : pt12312-mvc

 Target Server Type    : MySQL
 Target Server Version : 50718
 File Encoding         : utf-8

 Date: 09/29/2017 10:32:40 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `products`
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `price` decimal(10,0) NOT NULL,
  `detail` text,
  `feature_image` varchar(255) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `products`
-- ----------------------------
BEGIN;
INSERT INTO `products` VALUES ('1', 'iphoneX', '1500', '1 quả thận', null, '1'), ('2', 'Samsung s8', '1700', '1 quả rưỡi thận', null, '2'), ('3', 'Vertu xyz', '6000', '4 qủa thận								', '', '3'), ('14', 'cô cô', '123123', 'sdfsdfsdf', null, '1');
COMMIT;

-- ----------------------------
--  Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(255) DEFAULT NULL,
  `avatar` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `users`
-- ----------------------------
BEGIN;
INSERT INTO `users` VALUES ('1', 'admin', 'admin@gmail.com', '123456', null, null), ('2', 'member', 'member@gmail.com', '123456', null, null), ('3', 'hieuvm', 'hieuvm-hoc-dot@gmail.com', '6fb42da0e32e07b61c9f0251fe627a9c', null, null);
COMMIT;

SET FOREIGN_KEY_CHECKS = 1;
