/*
 Navicat Premium Data Transfer

 Source Server         : Server
 Source Server Type    : MySQL
 Source Server Version : 100417
 Source Host           : localhost:3306
 Source Schema         : webcast

 Target Server Type    : MySQL
 Target Server Version : 100417
 File Encoding         : 65001

 Date: 17/04/2021 23:36:18
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for usuarios
-- ----------------------------
DROP TABLE IF EXISTS `usuarios`;
CREATE TABLE `usuarios`  (
  `id_usuario` int NOT NULL AUTO_INCREMENT,
  `nombre` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `institucion_salud` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `correo` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NOT NULL,
  PRIMARY KEY (`id_usuario`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 7 CHARACTER SET = utf8mb4 COLLATE = utf8mb4_general_ci ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of usuarios
-- ----------------------------
INSERT INTO `usuarios` VALUES (1, 'Dadne Cruz', 'IMSS', 'dadnehuerta@gmail.com', '$2y$04$BDdtyKh9CoTZK.c203txSuSLnsYy2y44urpVYXRNtiXYW/BRcJYre');
INSERT INTO `usuarios` VALUES (2, 'Dadne Cruz', 'IMSS', 'dadnehuerta@gmail.com', '$2y$04$IBVClkjsfO4g5muNufehiOeN5t4xCJJGMJ52eXlCrhsX/V/j5O/Si');
INSERT INTO `usuarios` VALUES (3, 'Dadne Cruz', 'IMSS', 'dadnehuerta@gmail.com', '$2y$04$T7KfFzaJTGDW4Q5F.P1HV.R7OXc6HdSeG0bPyCqzQ4DhgWFNAisGO');
INSERT INTO `usuarios` VALUES (4, 'Dadne Cruz', 'IMSS', 'dadnehuerta@gmail.com', '$2y$04$hq2d5NmJB15VAOp49YuKD.dj2ouME71oIoSOA0OuuNGhHUDOzXX1u');
INSERT INTO `usuarios` VALUES (5, 'Dadne Cruz', 'IMSS', 'fernanda.cruz@carbe.mx', '$2y$04$UGRK7qVgDVK8KdRilDq8Qe4n0rLtU6jkXyRYQA46jyQ4N2uAKN.dG');
INSERT INTO `usuarios` VALUES (6, 'PRUEBA', 'IMSS', 'dadne@carbe.mx', '$2y$04$S5nYiaRm8H2lRxDqmpVlEOpyjUm9EwuQ9Dmf7fMk/wg5j/04WOer.');

SET FOREIGN_KEY_CHECKS = 1;
