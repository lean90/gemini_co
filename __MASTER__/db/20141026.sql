/*
SQLyog Ultimate v11.3 (64 bit)
MySQL - 5.6.20 : Database - gemini
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`gemini` /*!40100 DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci */;

USE `gemini`;

/*Table structure for table `ci_sessions` */

DROP TABLE IF EXISTS `ci_sessions`;

CREATE TABLE `ci_sessions` (
  `session_id` varchar(40) COLLATE utf8_unicode_ci NOT NULL,
  `ip_address` varchar(16) COLLATE utf8_unicode_ci NOT NULL,
  `user_agent` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL,
  `user_data` text COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`session_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `ci_sessions` */

insert  into `ci_sessions`(`session_id`,`ip_address`,`user_agent`,`last_activity`,`user_data`) values ('93aec9ea52bb6835536fc61e744c026c','127.0.0.1','Mozilla/5.0 (Windows NT 6.3; WOW64) AppleWebKit/53',1414944338,'a:2:{s:9:\"user_data\";s:0:\"\";s:7:\"USER_ID\";i:109;}');

/*Table structure for table `room` */

DROP TABLE IF EXISTS `room`;

CREATE TABLE `room` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `room_name` longtext COLLATE utf8_unicode_ci,
  `room_location` longtext COLLATE utf8_unicode_ci,
  `duration` int(11) DEFAULT NULL,
  `factor_tai` decimal(10,2) DEFAULT NULL,
  `factor_xiu` decimal(10,2) DEFAULT NULL,
  `factor_tong810` decimal(10,2) DEFAULT NULL,
  `factor_le` decimal(10,2) DEFAULT NULL,
  `factor_chan` decimal(10,2) DEFAULT NULL,
  `factor_cac_so_chan` decimal(10,2) DEFAULT NULL,
  `factor_cac_so_le` decimal(10,2) DEFAULT NULL,
  `factor_cac_so_hoa` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_tai_le` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_xiu_le` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_tai_chan` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_xiu_chan` decimal(10,2) DEFAULT NULL,
  `factor_tren` decimal(10,2) DEFAULT NULL,
  `factor_duoi` decimal(10,2) DEFAULT NULL,
  `factor_hoa` decimal(10,2) DEFAULT NULL,
  `factor_nh_kim` decimal(10,2) DEFAULT NULL,
  `factor_nh_moc` decimal(10,2) DEFAULT NULL,
  `factor_nh_thuy` decimal(10,2) DEFAULT NULL,
  `factor_nh_hoa` decimal(10,2) DEFAULT NULL,
  `factor_ng_tho` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `max_value` int(11) NOT NULL,
  `min_value` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `room` */

insert  into `room`(`id`,`room_name`,`room_location`,`duration`,`factor_tai`,`factor_xiu`,`factor_tong810`,`factor_le`,`factor_chan`,`factor_cac_so_chan`,`factor_cac_so_le`,`factor_cac_so_hoa`,`factor_lien_hoan_tai_le`,`factor_lien_hoan_xiu_le`,`factor_lien_hoan_tai_chan`,`factor_lien_hoan_xiu_chan`,`factor_tren`,`factor_duoi`,`factor_hoa`,`factor_nh_kim`,`factor_nh_moc`,`factor_nh_thuy`,`factor_nh_hoa`,`factor_ng_tho`,`created_at`,`deleted_at`,`updated_at`,`deleted`,`max_value`,`min_value`) values (1,'Phòng Hà Nôi','HA NOI, VIET NAM',120,'1.95','1.95','108.00','1.95','1.95','2.30','2.30','4.30','3.70','3.70','3.70','3.70','2.30','2.30','4.30','9.20','4.60','2.40','4.60','9.20','2014-10-22 17:38:11',NULL,NULL,0,15000000,15000),(2,'Phòng Đà Nằng','HA NOI, VIET NAM',120,'1.95','1.95','108.00','1.95','1.95','2.30','2.30','4.30','3.70','3.70','3.70','3.70','2.30','2.30','4.30','9.20','4.60','2.40','4.60','9.20','2014-10-22 17:38:11',NULL,NULL,0,15000000,15000),(3,'Phòng Sài Gòn','HA NOI, VIET NAM',120,'1.95','1.95','108.00','1.95','1.95','2.30','2.30','4.30','3.70','3.70','3.70','3.70','2.30','2.30','4.30','9.20','4.60','2.40','4.60','9.20','2014-10-22 17:38:11',NULL,NULL,0,15000000,15000);

/*Table structure for table `sys` */

DROP TABLE IF EXISTS `sys`;

CREATE TABLE `sys` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sys_key` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `sys_value` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `sys` */

/*Table structure for table `turn` */

DROP TABLE IF EXISTS `turn`;

CREATE TABLE `turn` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fk_room` int(11) DEFAULT NULL,
  `started_at` datetime DEFAULT NULL,
  `completed_at` datetime DEFAULT NULL,
  `pick_number_collection` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `factor_tai` decimal(10,2) DEFAULT NULL,
  `factor_xiu` decimal(10,2) DEFAULT NULL,
  `factor_tong810` decimal(10,2) DEFAULT NULL,
  `factor_le` decimal(10,2) DEFAULT NULL,
  `factor_chan` decimal(10,2) DEFAULT NULL,
  `factor_cac_so_chan` decimal(10,2) DEFAULT NULL,
  `factor_cac_so_le` decimal(10,2) DEFAULT NULL,
  `factor_cac_so_hoa` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_tai_le` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_xiu_le` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_tai_chan` decimal(10,2) DEFAULT NULL,
  `factor_lien_hoan_xiu_chan` decimal(10,2) DEFAULT NULL,
  `factor_tren` decimal(10,2) DEFAULT NULL,
  `factor_duoi` decimal(10,2) DEFAULT NULL,
  `factor_hoa` decimal(10,2) DEFAULT NULL,
  `factor_nh_kim` decimal(10,2) DEFAULT NULL,
  `factor_nh_moc` decimal(10,2) DEFAULT NULL,
  `factor_nh_thuy` decimal(10,2) DEFAULT NULL,
  `factor_nh_hoa` decimal(10,2) DEFAULT NULL,
  `factor_nh_tho` decimal(10,2) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  `turn_status` varchar(25) COLLATE utf8_unicode_ci DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `min_value` int(11) NOT NULL,
  `max_value` int(11) NOT NULL,
  `turn_number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_20201547FEA18FA5` (`fk_room`),
  CONSTRAINT `FK_20201547FEA18FA5` FOREIGN KEY (`fk_room`) REFERENCES `room` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `turn` */

/*Table structure for table `user` */

DROP TABLE IF EXISTS `user`;

CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `user_role` varchar(20) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=121 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user` */

insert  into `user`(`id`,`username`,`password`,`user_role`,`created_at`,`deleted_at`,`updated_at`,`deleted`) values (109,'user1','24c9e15e52afc47c225b757e7bee1f9d','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(110,'user2','7e58d63b60197ceb55a1c487989a3720','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(111,'user3','92877af70a45fd6a2ed7fe81e1236b78','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(112,'user4','3f02ebe3d7929b091e3d8ccfde2f3bc6','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(113,'user5','0a791842f52a0acfbb3a783378c066b8','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(114,'user6','affec3b64cf90492377a8114c86fc093','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(115,'user7','3e0469fb134991f8f75a2760e409c6ed','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(116,'user8','7668f673d5669995175ef91b5d171945','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(117,'user9','8808a13b854c2563da1a5f6cb2130868','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(118,'user10','990d67a9f94696b1abe2dccf06900322','USER','2014-10-22 11:11:41',NULL,NULL,NULL),(119,'admin','21232f297a57a5a743894a0e4a801fc3','ADMIN','2014-10-22 11:11:41',NULL,NULL,NULL),(120,'sys','36bcbb801f5052739af8220c6ea51434','SYS','2014-10-22 11:11:41',NULL,NULL,NULL);

/*Table structure for table `user_turn` */

DROP TABLE IF EXISTS `user_turn`;

CREATE TABLE `user_turn` (
  `id` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `fk_turn` int(11) DEFAULT NULL,
  `fk_user` int(11) DEFAULT NULL,
  `pick_type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_value` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `pick_collection` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `deleted_at` datetime DEFAULT NULL,
  `deleted` tinyint(1) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `IDX_5AA1598EAC1ECB79` (`fk_turn`),
  KEY `IDX_5AA1598E1AD0877` (`fk_user`),
  CONSTRAINT `FK_5AA1598E1AD0877` FOREIGN KEY (`fk_user`) REFERENCES `user` (`id`),
  CONSTRAINT `FK_5AA1598EAC1ECB79` FOREIGN KEY (`fk_turn`) REFERENCES `turn` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

/*Data for the table `user_turn` */

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
