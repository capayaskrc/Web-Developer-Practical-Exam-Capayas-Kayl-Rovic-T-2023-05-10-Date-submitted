/*
 Navicat MySQL Data Transfer

 Source Server         : autopaint
 Source Server Type    : MySQL
 Source Server Version : 100428 (10.4.28-MariaDB)
 Source Host           : localhost:3306
 Source Schema         : cars

 Target Server Type    : MySQL
 Target Server Version : 100428 (10.4.28-MariaDB)
 File Encoding         : 65001

 Date: 10/05/2023 23:49:40
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for queue_paint
-- ----------------------------
DROP TABLE IF EXISTS `queue_paint`;
CREATE TABLE `queue_paint`  (
  `plate_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `current_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `target_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`plate_no`) USING BTREE
) ENGINE = InnoDB CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of queue_paint
-- ----------------------------
INSERT INTO `queue_paint` VALUES ('HJR 279', 'red', 'blue');
INSERT INTO `queue_paint` VALUES ('KKL 989', 'blue', 'green');

SET FOREIGN_KEY_CHECKS = 1;
