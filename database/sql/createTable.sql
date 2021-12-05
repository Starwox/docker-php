create database if not exists `cms`;

USE `cms`;

SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0;

/*Table structure for table `test` */

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL auto_increment,
  `username` varchar(250)  NOT NULL,
  `password`  varchar(250) NOT NULL,
  `admin`  boolean NOT NULL default false,
   PRIMARY KEY  (`id`)
);