/*
SQLyog Ultimate v11.11 (64 bit)
MySQL - 5.6.22-log : Database - aimstonal
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`aimstonal` /*!40100 DEFAULT CHARACTER SET utf8 */;

USE `aimstonal`;

/*Table structure for table `aims_answers` */

DROP TABLE IF EXISTS `aims_answers`;

CREATE TABLE `aims_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` int(11) NOT NULL,
  `optionid` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questionid` (`questionid`),
  KEY `optionid` (`optionid`),
  CONSTRAINT `aims_answers_ibfk_1` FOREIGN KEY (`questionid`) REFERENCES `aims_questions` (`id`),
  CONSTRAINT `aims_answers_ibfk_2` FOREIGN KEY (`optionid`) REFERENCES `aims_question_options` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `aims_employees` */

DROP TABLE IF EXISTS `aims_employees`;

CREATE TABLE `aims_employees` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(25) NOT NULL,
  `lastname` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `passwd` varchar(50) NOT NULL,
  `avathar` varchar(100) DEFAULT NULL,
  `addeddate` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

/*Table structure for table `aims_question_options` */

DROP TABLE IF EXISTS `aims_question_options`;

CREATE TABLE `aims_question_options` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questionid` int(11) NOT NULL,
  `option` varchar(255) NOT NULL,
  `option_path` varchar(255) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `questionid` (`questionid`),
  CONSTRAINT `aims_question_options_ibfk_1` FOREIGN KEY (`questionid`) REFERENCES `aims_questions` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `aims_questions` */

DROP TABLE IF EXISTS `aims_questions`;

CREATE TABLE `aims_questions` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `questioncode` varchar(15) NOT NULL,
  `questionname` varchar(100) NOT NULL,
  `questiondesc` varchar(255) NOT NULL,
  `audiopath` varchar(255) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`),
  UNIQUE KEY `questioncode` (`questioncode`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `aims_user_answers` */

DROP TABLE IF EXISTS `aims_user_answers`;

CREATE TABLE `aims_user_answers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `userid` int(11) NOT NULL,
  `questionid` int(11) NOT NULL,
  `optionid` int(11) NOT NULL,
  `addeddate` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `userid` (`userid`),
  KEY `questionid` (`questionid`),
  KEY `optionid` (`optionid`),
  CONSTRAINT `aims_user_answers_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `aims_users` (`id`),
  CONSTRAINT `aims_user_answers_ibfk_2` FOREIGN KEY (`questionid`) REFERENCES `aims_questions` (`id`),
  CONSTRAINT `aims_user_answers_ibfk_3` FOREIGN KEY (`optionid`) REFERENCES `aims_question_options` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*Table structure for table `aims_users` */

DROP TABLE IF EXISTS `aims_users`;

CREATE TABLE `aims_users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `age` int(3) NOT NULL,
  `gender` varchar(4) NOT NULL,
  `filenumber` varchar(30) NOT NULL,
  `addeddate` datetime NOT NULL,
  `active` tinyint(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) unsigned NOT NULL DEFAULT '0',
  `data` blob NOT NULL,
  KEY `ci_sessions_timestamp` (`timestamp`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
