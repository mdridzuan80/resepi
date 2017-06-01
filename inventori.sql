/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : 127.0.0.1:3306
Source Database       : inventori

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-05-31 18:19:57
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `dict_bahan`
-- ----------------------------
DROP TABLE IF EXISTS `dict_bahan`;
CREATE TABLE `dict_bahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bahan` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dict_bahan
-- ----------------------------

-- ----------------------------
-- Table structure for `inventori_bahan`
-- ----------------------------
DROP TABLE IF EXISTS `inventori_bahan`;
CREATE TABLE `inventori_bahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bahan_id` int(11) DEFAULT NULL,
  `amaun` float(7,5) DEFAULT NULL,
  `tarikh` datetime DEFAULT NULL,
  `user_add` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inventori_bahan
-- ----------------------------

-- ----------------------------
-- Table structure for `pesanan`
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resepi_id` int(11) DEFAULT NULL,
  `tarikh` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pesanan
-- ----------------------------

-- ----------------------------
-- Table structure for `resepi`
-- ----------------------------
DROP TABLE IF EXISTS `resepi`;
CREATE TABLE `resepi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  `keterangan` text,
  `harga` float(7,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of resepi
-- ----------------------------

-- ----------------------------
-- Table structure for `resepi_bahan`
-- ----------------------------
DROP TABLE IF EXISTS `resepi_bahan`;
CREATE TABLE `resepi_bahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resepi_id` int(11) DEFAULT NULL,
  `bahan_id` int(11) DEFAULT NULL,
  `amaun` float(7,5) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of resepi_bahan
-- ----------------------------

-- ----------------------------
-- Table structure for `roles`
-- ----------------------------
DROP TABLE IF EXISTS `roles`;
CREATE TABLE `roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of roles
-- ----------------------------
INSERT INTO `roles` VALUES ('1', 'Administrator');
INSERT INTO `roles` VALUES ('2', 'Member');

-- ----------------------------
-- Table structure for `users`
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------

-- ----------------------------
-- Table structure for `user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_roles
-- ----------------------------
