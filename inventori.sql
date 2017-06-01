/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50621
Source Host           : 127.0.0.1:3306
Source Database       : inventori

Target Server Type    : MYSQL
Target Server Version : 50621
File Encoding         : 65001

Date: 2017-06-01 16:55:01
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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of dict_bahan
-- ----------------------------
INSERT INTO `dict_bahan` VALUES ('1', 'Tepung');
INSERT INTO `dict_bahan` VALUES ('3', 'Bawang');

-- ----------------------------
-- Table structure for `inventori_bahan`
-- ----------------------------
DROP TABLE IF EXISTS `inventori_bahan`;
CREATE TABLE `inventori_bahan` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `bahan_id` int(11) DEFAULT NULL,
  `amaun` decimal(7,2) DEFAULT NULL,
  `tarikh` datetime DEFAULT NULL,
  `user_add` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of inventori_bahan
-- ----------------------------
INSERT INTO `inventori_bahan` VALUES ('5', '1', '100.00', '2017-06-01 00:00:00', null);
INSERT INTO `inventori_bahan` VALUES ('6', '1', '100.00', '2017-06-01 00:00:00', null);
INSERT INTO `inventori_bahan` VALUES ('7', '3', '100.00', '2017-06-01 00:00:00', null);

-- ----------------------------
-- Table structure for `pesanan`
-- ----------------------------
DROP TABLE IF EXISTS `pesanan`;
CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resepi_id` int(11) DEFAULT NULL,
  `tarikh` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of pesanan
-- ----------------------------
INSERT INTO `pesanan` VALUES ('1', '2', '2017-06-01 00:00:00');
INSERT INTO `pesanan` VALUES ('2', '3', '2017-06-02 00:00:00');

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
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of resepi
-- ----------------------------
INSERT INTO `resepi` VALUES ('2', 'Kek Bawang', null, null);
INSERT INTO `resepi` VALUES ('3', 'Pizza', null, null);

-- ----------------------------
-- Table structure for `resepi_bahan`
-- ----------------------------
DROP TABLE IF EXISTS `resepi_bahan`;
CREATE TABLE `resepi_bahan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `resepi_id` int(11) DEFAULT NULL,
  `bahan_id` int(11) DEFAULT NULL,
  `amaun` float(7,2) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of resepi_bahan
-- ----------------------------
INSERT INTO `resepi_bahan` VALUES ('1', '2', '1', '10.00');
INSERT INTO `resepi_bahan` VALUES ('3', '2', '3', '10.00');
INSERT INTO `resepi_bahan` VALUES ('4', '3', '1', '50.00');
INSERT INTO `resepi_bahan` VALUES ('5', '3', '3', '80.00');

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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES ('1', 'admin', 'f92737245cffb5c36625cbd3d970ca217da69a6a6401280d0032e3ab747df437bbfbf89b7dc226d21264c840ccef81748612cdcfd86fc672264afb8b77063fcfMyA6xICKY0FRJ1bWn7uDYqv74A7G/vTFzp4K/80mWL8=');

-- ----------------------------
-- Table structure for `user_roles`
-- ----------------------------
DROP TABLE IF EXISTS `user_roles`;
CREATE TABLE `user_roles` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of user_roles
-- ----------------------------
INSERT INTO `user_roles` VALUES ('1', '1', '1');
