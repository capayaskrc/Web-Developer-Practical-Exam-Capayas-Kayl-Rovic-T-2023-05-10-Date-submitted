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

 Date: 10/05/2023 23:49:19
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for cars
-- ----------------------------
DROP TABLE IF EXISTS `cars`;
CREATE TABLE `cars`  (
  `plate_no` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `current_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `target_color` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `status` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL,
  `idno` int NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`idno`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 8 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of cars
-- ----------------------------
INSERT INTO `cars` VALUES ('LNX52', 'red', 'blue', 'Mark as Completed', 1);
INSERT INTO `cars` VALUES ('LNX36', 'blue', 'green', 'Mark as Completed', 2);
INSERT INTO `cars` VALUES ('LNX64', 'green', 'blue', 'Mark as Completed', 3);
INSERT INTO `cars` VALUES ('LK265', 'blue', 'red', 'Mark as Completed', 4);
INSERT INTO `cars` VALUES ('LNX23', 'red', 'green', 'Mark as Completed', 5);
INSERT INTO `cars` VALUES ('LNX 647', 'Blue', 'Green', 'Mark as Completed', 6);
INSERT INTO `cars` VALUES ('LNX 646', 'Green', 'Blue', 'Mark as Completed', 7);

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
