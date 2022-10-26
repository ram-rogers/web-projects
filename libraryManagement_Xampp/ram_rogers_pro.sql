-- Adminer 4.8.1 MySQL 8.0.27 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin`;
CREATE TABLE `admin` (
  `aid` int NOT NULL AUTO_INCREMENT,
  `aname` varchar(50) NOT NULL,
  `apassword` varchar(50) NOT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `admin` (`aid`, `aname`, `apassword`) VALUES
(1,	'admin',	'1234');

DROP TABLE IF EXISTS `book`;
CREATE TABLE `book` (
  `bid` int NOT NULL AUTO_INCREMENT,
  `btitle` varchar(150) NOT NULL,
  `keywords` varchar(150) NOT NULL,
  `file` varchar(150) NOT NULL,
  PRIMARY KEY (`bid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `book` (`bid`, `btitle`, `keywords`, `file`) VALUES
(2,	'PHP Tutorials',	'PHP',	'upload/lib.pdf');

DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `cid` int NOT NULL AUTO_INCREMENT,
  `bid` int NOT NULL,
  `sid` int NOT NULL,
  `comm` varchar(150) NOT NULL,
  `logs` date NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `comment` (`cid`, `bid`, `sid`, `comm`, `logs`) VALUES
(1,	1,	1,	'good',	'2022-08-21'),
(2,	2,	2,	'Very Excellent',	'2022-08-21');

DROP TABLE IF EXISTS `request`;
CREATE TABLE `request` (
  `rid` int NOT NULL AUTO_INCREMENT,
  `id` int NOT NULL,
  `mes` varchar(150) NOT NULL,
  `logs` datetime NOT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `request` (`rid`, `id`, `mes`, `logs`) VALUES
(1,	1,	'Need C++ Books',	'2022-08-21 17:51:11');

DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int NOT NULL AUTO_INCREMENT,
  `name` varchar(150) NOT NULL,
  `pass` varchar(150) NOT NULL,
  `mail` varchar(150) NOT NULL,
  `dep` varchar(150) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

INSERT INTO `student` (`id`, `name`, `pass`, `mail`, `dep`) VALUES
(1,	'Rahuram',	'1234',	'ram@gmail.com',	'IT'),
(2,	'kumar',	'2334',	'kumar@gmail.com',	'CSE');

-- 2022-08-22 07:23:12
