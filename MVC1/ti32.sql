# Host: localhost  (Version 5.6.16)
# Date: 2017-06-27 15:03:44
# Generator: MySQL-Front 6.0  (Build 2.20)
CREATE DATABASE TI32;

USE TI32;

#
# Structure for table "alumno"
#

DROP TABLE IF EXISTS `alumno`;
CREATE TABLE `alumno` (
  `matricula` int(11) NOT NULL AUTO_INCREMENT,
  `nombre` varchar(255) DEFAULT NULL,
  `fecha_nac` date DEFAULT NULL,
  `sexo` enum('m','h') DEFAULT NULL,
  `carrera` enum('tic','tu','ga','te','ad') DEFAULT NULL,
  PRIMARY KEY (`matricula`)
) ENGINE=InnoDB AUTO_INCREMENT=5152 DEFAULT CHARSET=utf8;

#
# Data for table "alumno"
#

INSERT INTO `alumno` VALUES (333,'miguel lopez','1987-01-25','h','ad'),(1060,'felipe cruz','1996-03-03','h','te'),(1133,'daniel solano','1996-06-26','h','tic'),(1285,'gary arellano','1989-05-30','h','tu'),(2408,'Maria Dominguez','1999-10-12','m','te'),(4546,'daniela torres','1996-07-05','m','te'),(5151,'gustavo chay','1995-03-31','h','ad');
