# ************************************************************
# Sequel Pro SQL dump
# Version 3348
#
# http://www.sequelpro.com/
# http://code.google.com/p/sequel-pro/
#
# Host: 127.0.0.1 (MySQL 5.1.57)
# Database: elawyersonline
# Generation Time: 2011-07-12 22:01:38 +0800
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table acos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `acos`;

CREATE TABLE `acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=257 DEFAULT CHARSET=latin1;

LOCK TABLES `acos` WRITE;
/*!40000 ALTER TABLE `acos` DISABLE KEYS */;

INSERT INTO `acos` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`)
VALUES
	(1,NULL,NULL,NULL,'controllers',1,512),
	(2,1,NULL,NULL,'Pages',2,17),
	(3,2,NULL,NULL,'display',3,4),
	(4,2,NULL,NULL,'add',5,6),
	(5,2,NULL,NULL,'edit',7,8),
	(6,2,NULL,NULL,'index',9,10),
	(7,2,NULL,NULL,'view',11,12),
	(8,2,NULL,NULL,'delete',13,14),
	(9,1,NULL,NULL,'Groups',18,33),
	(10,9,NULL,NULL,'index',19,20),
	(11,9,NULL,NULL,'view',21,22),
	(12,9,NULL,NULL,'add',23,24),
	(13,9,NULL,NULL,'edit',25,26),
	(14,9,NULL,NULL,'delete',27,28),
	(15,1,NULL,NULL,'Posts',34,47),
	(16,15,NULL,NULL,'index',35,36),
	(17,15,NULL,NULL,'view',37,38),
	(18,15,NULL,NULL,'add',39,40),
	(19,15,NULL,NULL,'edit',41,42),
	(20,15,NULL,NULL,'delete',43,44),
	(21,1,NULL,NULL,'Users',48,109),
	(22,21,NULL,NULL,'index',49,50),
	(23,21,NULL,NULL,'view',51,52),
	(24,21,NULL,NULL,'add',53,54),
	(25,21,NULL,NULL,'edit',55,56),
	(26,21,NULL,NULL,'delete',57,58),
	(27,21,NULL,NULL,'login',59,60),
	(28,21,NULL,NULL,'logout',61,62),
	(29,21,NULL,NULL,'initDB',63,64),
	(30,1,NULL,NULL,'Widgets',110,123),
	(31,30,NULL,NULL,'index',111,112),
	(32,30,NULL,NULL,'view',113,114),
	(33,30,NULL,NULL,'add',115,116),
	(34,30,NULL,NULL,'edit',117,118),
	(35,30,NULL,NULL,'delete',119,120),
	(36,1,NULL,NULL,'Dashboard',124,169),
	(37,36,NULL,NULL,'admin_index',125,126),
	(38,36,NULL,NULL,'add',127,128),
	(39,36,NULL,NULL,'edit',129,130),
	(40,36,NULL,NULL,'index',131,132),
	(41,36,NULL,NULL,'view',133,134),
	(42,36,NULL,NULL,'delete',135,136),
	(43,21,NULL,NULL,'admin_index',65,66),
	(44,21,NULL,NULL,'admin_add',67,68),
	(45,21,NULL,NULL,'register',69,70),
	(46,21,NULL,NULL,'admin_edit',71,72),
	(47,21,NULL,NULL,'admin_delete',73,74),
	(48,21,NULL,NULL,'admin_login',75,76),
	(49,21,NULL,NULL,'test_mailer',77,78),
	(50,9,NULL,NULL,'admin_index',29,30),
	(51,1,NULL,NULL,'Dashboards',170,185),
	(52,51,NULL,NULL,'admin_index',171,172),
	(53,51,NULL,NULL,'add',173,174),
	(54,51,NULL,NULL,'edit',175,176),
	(55,51,NULL,NULL,'index',177,178),
	(56,51,NULL,NULL,'view',179,180),
	(57,51,NULL,NULL,'delete',181,182),
	(58,21,NULL,NULL,'admin_logout',79,80),
	(59,2,NULL,NULL,'redirect_to_admin_index',15,16),
	(60,51,NULL,NULL,'redirect_to_admin_index',183,184),
	(61,9,NULL,NULL,'redirect_to_admin_index',31,32),
	(62,15,NULL,NULL,'redirect_to_admin_index',45,46),
	(63,21,NULL,NULL,'admin_view',81,82),
	(64,21,NULL,NULL,'redirect_to_admin_index',83,84),
	(65,30,NULL,NULL,'redirect_to_admin_index',121,122),
	(66,36,NULL,NULL,'redirect_to_admin_index',137,138),
	(67,1,NULL,NULL,'Home',186,199),
	(68,67,NULL,NULL,'index',187,188),
	(69,67,NULL,NULL,'redirect_to_admin_index',189,190),
	(70,67,NULL,NULL,'add',191,192),
	(71,67,NULL,NULL,'edit',193,194),
	(72,67,NULL,NULL,'view',195,196),
	(73,67,NULL,NULL,'delete',197,198),
	(74,21,NULL,NULL,'forgot_password',85,86),
	(75,21,NULL,NULL,'generatePassword',87,88),
	(76,21,NULL,NULL,'verification',89,90),
	(77,21,NULL,NULL,'password_reset',91,92),
	(78,21,NULL,NULL,'personalinfo',93,94),
	(79,21,NULL,NULL,'personal_info',95,96),
	(80,21,NULL,NULL,'spouse_info',97,98),
	(81,21,NULL,NULL,'children_info',99,100),
	(82,1,NULL,NULL,'Cases',200,231),
	(83,82,NULL,NULL,'index',201,202),
	(84,82,NULL,NULL,'admin_index',203,204),
	(85,82,NULL,NULL,'redirect_to_admin_index',205,206),
	(86,82,NULL,NULL,'add',207,208),
	(87,82,NULL,NULL,'edit',209,210),
	(88,82,NULL,NULL,'view',211,212),
	(89,82,NULL,NULL,'delete',213,214),
	(90,82,NULL,NULL,'legal_problem',215,216),
	(91,21,NULL,NULL,'corporate_info',101,102),
	(92,82,NULL,NULL,'summary_of_facts',217,218),
	(93,82,NULL,NULL,'questions_objectives',219,220),
	(94,82,NULL,NULL,'objectives_questions',221,222),
	(95,82,NULL,NULL,'summary_of_information',223,224),
	(96,82,NULL,NULL,'online_legal_consultation_agreement',225,226),
	(97,1,NULL,NULL,'Payments',232,275),
	(98,97,NULL,NULL,'index',233,234),
	(99,97,NULL,NULL,'select_option',235,236),
	(100,97,NULL,NULL,'redirect_to_admin_index',237,238),
	(101,97,NULL,NULL,'add',239,240),
	(102,97,NULL,NULL,'edit',241,242),
	(103,97,NULL,NULL,'view',243,244),
	(104,97,NULL,NULL,'delete',245,246),
	(105,82,NULL,NULL,'letter_of_intent',227,228),
	(106,21,NULL,NULL,'letter_of_intent',103,104),
	(107,82,NULL,NULL,'online_legal_consultation',229,230),
	(108,1,NULL,NULL,'Legalcases',276,323),
	(109,108,NULL,NULL,'index',277,278),
	(110,108,NULL,NULL,'admin_index',279,280),
	(111,108,NULL,NULL,'online_legal_consultation',281,282),
	(112,108,NULL,NULL,'letter_of_intent',283,284),
	(113,108,NULL,NULL,'legal_problem',285,286),
	(114,108,NULL,NULL,'summary_of_facts',287,288),
	(115,108,NULL,NULL,'objectives_questions',289,290),
	(116,108,NULL,NULL,'summary_of_information',291,292),
	(117,108,NULL,NULL,'online_legal_consultation_agreement',293,294),
	(118,108,NULL,NULL,'redirect_to_admin_index',295,296),
	(119,108,NULL,NULL,'add',297,298),
	(120,108,NULL,NULL,'edit',299,300),
	(121,108,NULL,NULL,'view',301,302),
	(122,108,NULL,NULL,'delete',303,304),
	(123,97,NULL,NULL,'mode_of_payment',247,248),
	(124,97,NULL,NULL,'bank_deposit',249,250),
	(125,97,NULL,NULL,'bank_deposit_summary',251,252),
	(126,97,NULL,NULL,'bank_deposit_confirmation',253,254),
	(127,108,NULL,NULL,'admin_view',305,306),
	(128,108,NULL,NULL,'review_case',307,308),
	(129,108,NULL,NULL,'admin_edit',309,310),
	(130,108,NULL,NULL,'admin_delete',311,312),
	(131,1,NULL,NULL,'Legalcasedetails',324,347),
	(132,131,NULL,NULL,'index',325,326),
	(133,131,NULL,NULL,'admin_index',327,328),
	(134,131,NULL,NULL,'admin_view',329,330),
	(135,131,NULL,NULL,'admin_edit',331,332),
	(136,131,NULL,NULL,'admin_delete',333,334),
	(137,131,NULL,NULL,'redirect_to_admin_index',335,336),
	(138,131,NULL,NULL,'add',337,338),
	(139,131,NULL,NULL,'edit',339,340),
	(140,131,NULL,NULL,'view',341,342),
	(141,131,NULL,NULL,'delete',343,344),
	(142,108,NULL,NULL,'show_uploaded_files',313,314),
	(143,108,NULL,NULL,'remove_file',315,316),
	(144,97,NULL,NULL,'gcash',255,256),
	(145,97,NULL,NULL,'payment_confirmation',257,258),
	(146,97,NULL,NULL,'smartmoney',259,260),
	(147,97,NULL,NULL,'create_paypal_payment',261,262),
	(148,97,NULL,NULL,'admin_index',263,264),
	(149,97,NULL,NULL,'admin_view',265,266),
	(150,97,NULL,NULL,'admin_edit',267,268),
	(151,97,NULL,NULL,'admin_delete',269,270),
	(152,1,NULL,NULL,'Personalinfo',348,349),
	(153,1,NULL,NULL,'Personalinfos',350,369),
	(154,153,NULL,NULL,'admin_index',351,352),
	(155,153,NULL,NULL,'redirect_to_admin_index',353,354),
	(156,153,NULL,NULL,'add',355,356),
	(157,153,NULL,NULL,'edit',357,358),
	(158,153,NULL,NULL,'index',359,360),
	(159,153,NULL,NULL,'view',361,362),
	(160,153,NULL,NULL,'delete',363,364),
	(161,153,NULL,NULL,'admin_view',365,366),
	(162,153,NULL,NULL,'admin_edit',367,368),
	(163,1,NULL,NULL,'Spouseinfo',370,371),
	(164,1,NULL,NULL,'Spouseinfos',372,389),
	(165,164,NULL,NULL,'admin_view',373,374),
	(166,164,NULL,NULL,'admin_edit',375,376),
	(167,164,NULL,NULL,'redirect_to_admin_index',377,378),
	(168,164,NULL,NULL,'add',379,380),
	(169,164,NULL,NULL,'edit',381,382),
	(170,164,NULL,NULL,'index',383,384),
	(171,164,NULL,NULL,'view',385,386),
	(172,164,NULL,NULL,'delete',387,388),
	(173,1,NULL,NULL,'Admin',390,403),
	(174,173,NULL,NULL,'index',391,392),
	(175,173,NULL,NULL,'redirect_to_admin_index',393,394),
	(176,173,NULL,NULL,'add',395,396),
	(177,173,NULL,NULL,'edit',397,398),
	(178,173,NULL,NULL,'view',399,400),
	(179,173,NULL,NULL,'delete',401,402),
	(180,36,NULL,NULL,'export_xls',139,140),
	(181,36,NULL,NULL,'admin_export_xls',141,142),
	(182,36,NULL,NULL,'admin_case_export_xls',143,144),
	(183,36,NULL,NULL,'admin_user_export_xls',145,146),
	(184,36,NULL,NULL,'admin_hide_case',147,148),
	(185,36,NULL,NULL,'admin_unhide_cases',149,150),
	(186,36,NULL,NULL,'admin_personalinfo_export_xls',151,152),
	(187,36,NULL,NULL,'admin_spouseinfo_export_xls',153,154),
	(188,36,NULL,NULL,'admin_childreninfo_export_xls',155,156),
	(189,1,NULL,NULL,'Childreninfo',404,405),
	(190,1,NULL,NULL,'Childreninfos',406,425),
	(191,190,NULL,NULL,'admin_index',407,408),
	(192,190,NULL,NULL,'admin_view',409,410),
	(193,190,NULL,NULL,'admin_edit',411,412),
	(194,190,NULL,NULL,'redirect_to_admin_index',413,414),
	(195,190,NULL,NULL,'add',415,416),
	(196,190,NULL,NULL,'edit',417,418),
	(197,190,NULL,NULL,'index',419,420),
	(198,190,NULL,NULL,'view',421,422),
	(199,190,NULL,NULL,'delete',423,424),
	(200,1,NULL,NULL,'Childrenlists',426,445),
	(201,200,NULL,NULL,'admin_index',427,428),
	(202,200,NULL,NULL,'admin_view',429,430),
	(203,200,NULL,NULL,'admin_edit',431,432),
	(204,200,NULL,NULL,'redirect_to_admin_index',433,434),
	(205,200,NULL,NULL,'add',435,436),
	(206,200,NULL,NULL,'edit',437,438),
	(207,200,NULL,NULL,'index',439,440),
	(208,200,NULL,NULL,'view',441,442),
	(209,200,NULL,NULL,'delete',443,444),
	(210,36,NULL,NULL,'admin_count_hidden_case',157,158),
	(211,36,NULL,NULL,'admin_download_attachments',159,160),
	(212,21,NULL,NULL,'corporate_partnership_representative_info',105,106),
	(213,21,NULL,NULL,'corporate_partnership_info',107,108),
	(214,1,NULL,NULL,'Events',446,511),
	(215,214,NULL,NULL,'feed',447,448),
	(216,214,NULL,NULL,'redirect_to_admin_index',449,450),
	(217,214,NULL,NULL,'add',451,452),
	(218,214,NULL,NULL,'edit',453,454),
	(219,214,NULL,NULL,'index',455,456),
	(220,214,NULL,NULL,'view',457,458),
	(221,214,NULL,NULL,'delete',459,460),
	(222,214,NULL,NULL,'test_index',461,462),
	(223,214,NULL,NULL,'get_feed',463,464),
	(224,214,NULL,NULL,'calendar_dialog',465,466),
	(225,214,NULL,NULL,'check_lock',467,468),
	(226,214,NULL,NULL,'get_info',469,470),
	(227,36,NULL,NULL,'admin_corprepinfo_export_xls',161,162),
	(228,36,NULL,NULL,'admin_corpinfo_export_xls',163,164),
	(229,36,NULL,NULL,'admin_bod_export_xls',165,166),
	(230,36,NULL,NULL,'admin_stockholders_export_xls',167,168),
	(231,214,NULL,NULL,'admin_index',471,472),
	(232,214,NULL,NULL,'verify_event',473,474),
	(233,214,NULL,NULL,'add_event',475,476),
	(234,97,NULL,NULL,'admin_on_time_payment',271,272),
	(235,97,NULL,NULL,'admin_late_payment',273,274),
	(236,214,NULL,NULL,'pending_payment_feed',477,478),
	(237,108,NULL,NULL,'reschedule_conference',317,318),
	(238,214,NULL,NULL,'not_active_feed',479,480),
	(239,214,NULL,NULL,'admin_delete',481,482),
	(240,214,NULL,NULL,'admin_on_time_payment',483,484),
	(241,214,NULL,NULL,'admin_late_payment',485,486),
	(242,214,NULL,NULL,'admin_available',487,488),
	(243,214,NULL,NULL,'admin_not_available',489,490),
	(244,214,NULL,NULL,'add_reschedule_event',491,492),
	(245,214,NULL,NULL,'no_payment_status_feed',493,494),
	(246,214,NULL,NULL,'confirmed_payment_feed',495,496),
	(247,214,NULL,NULL,'reschedule_event',497,498),
	(248,108,NULL,NULL,'reschedule_conference_request',319,320),
	(249,108,NULL,NULL,'request_reschedule_conference',321,322),
	(250,214,NULL,NULL,'admin_request_reschedule_conference',499,500),
	(251,214,NULL,NULL,'admin_delete_request_reschedule_conference',501,502),
	(252,214,NULL,NULL,'admin_late_payments',503,504),
	(253,214,NULL,NULL,'admin_on_time_payment_list',505,506),
	(254,214,NULL,NULL,'admin_on_time_payments_list',507,508),
	(255,214,NULL,NULL,'admin_delete_event',509,510),
	(256,131,NULL,NULL,'admin_incomplete',345,346);

/*!40000 ALTER TABLE `acos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aros
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aros`;

CREATE TABLE `aros` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `parent_id` int(10) DEFAULT NULL,
  `model` varchar(255) DEFAULT NULL,
  `foreign_key` int(10) DEFAULT NULL,
  `alias` varchar(255) DEFAULT NULL,
  `lft` int(10) DEFAULT NULL,
  `rght` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=77 DEFAULT CHARSET=latin1;

LOCK TABLES `aros` WRITE;
/*!40000 ALTER TABLE `aros` DISABLE KEYS */;

INSERT INTO `aros` (`id`, `parent_id`, `model`, `foreign_key`, `alias`, `lft`, `rght`)
VALUES
	(1,NULL,'Group',1,NULL,1,6),
	(2,NULL,'Group',2,NULL,7,8),
	(3,NULL,'Group',3,NULL,9,18),
	(4,1,'User',1,NULL,2,3),
	(5,3,'User',2,NULL,10,11),
	(6,3,'User',3,NULL,12,13),
	(7,1,'User',4,NULL,4,5),
	(30,3,'User',9,NULL,16,17),
	(27,3,'User',6,NULL,14,15),
	(76,NULL,'User',1003,NULL,19,20);

/*!40000 ALTER TABLE `aros` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table aros_acos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `aros_acos`;

CREATE TABLE `aros_acos` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `aro_id` int(10) NOT NULL,
  `aco_id` int(10) NOT NULL,
  `_create` varchar(2) NOT NULL DEFAULT '0',
  `_read` varchar(2) NOT NULL DEFAULT '0',
  `_update` varchar(2) NOT NULL DEFAULT '0',
  `_delete` varchar(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `ARO_ACO_KEY` (`aro_id`,`aco_id`)
) ENGINE=MyISAM AUTO_INCREMENT=49 DEFAULT CHARSET=latin1;

LOCK TABLES `aros_acos` WRITE;
/*!40000 ALTER TABLE `aros_acos` DISABLE KEYS */;

INSERT INTO `aros_acos` (`id`, `aro_id`, `aco_id`, `_create`, `_read`, `_update`, `_delete`)
VALUES
	(1,1,1,'1','1','1','1'),
	(2,2,1,'-1','-1','-1','-1'),
	(3,2,15,'1','1','1','1'),
	(4,2,30,'1','1','1','1'),
	(5,3,1,'-1','-1','-1','-1'),
	(6,3,18,'1','1','1','1'),
	(7,3,19,'1','1','1','1'),
	(8,3,33,'1','1','1','1'),
	(9,3,34,'1','1','1','1'),
	(10,3,51,'1','1','1','1'),
	(11,3,36,'1','1','1','1'),
	(12,3,25,'1','1','1','1'),
	(13,3,78,'1','1','1','1'),
	(14,3,79,'1','1','1','1'),
	(15,3,80,'1','1','1','1'),
	(16,3,81,'1','1','1','1'),
	(17,3,82,'1','1','1','1'),
	(18,3,90,'1','1','1','1'),
	(19,3,92,'1','1','1','1'),
	(20,3,94,'1','1','1','1'),
	(21,3,95,'1','1','1','1'),
	(22,3,96,'1','1','1','1'),
	(23,3,99,'1','1','1','1'),
	(24,3,105,'1','1','1','1'),
	(25,3,106,'1','1','1','1'),
	(26,3,107,'1','1','1','1'),
	(27,3,108,'1','1','1','1'),
	(28,3,113,'1','1','1','1'),
	(29,3,114,'1','1','1','1'),
	(30,3,115,'1','1','1','1'),
	(31,3,116,'1','1','1','1'),
	(32,3,117,'1','1','1','1'),
	(33,3,111,'1','1','1','1'),
	(34,3,112,'1','1','1','1'),
	(35,3,123,'1','1','1','1'),
	(36,3,124,'1','1','1','1'),
	(37,3,125,'1','1','1','1'),
	(38,3,126,'1','1','1','1'),
	(39,3,142,'1','1','1','1'),
	(40,3,144,'1','1','1','1'),
	(41,3,145,'1','1','1','1'),
	(42,3,146,'1','1','1','1'),
	(43,3,147,'1','1','1','1'),
	(44,3,212,'1','1','1','1'),
	(45,3,213,'1','1','1','1'),
	(46,3,215,'1','1','1','1'),
	(47,3,217,'1','1','1','1'),
	(48,3,214,'1','1','1','1');

/*!40000 ALTER TABLE `aros_acos` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table board_of_directors
# ------------------------------------------------------------

DROP TABLE IF EXISTS `board_of_directors`;

CREATE TABLE `board_of_directors` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `corporate_partnership_info_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `address` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;



# Dump of table children_infos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `children_infos`;

CREATE TABLE `children_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `no_of_children` int(11) DEFAULT NULL,
  `custody` enum('with us','with you','with spouse','with relative') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table children_lists
# ------------------------------------------------------------

DROP TABLE IF EXISTS `children_lists`;

CREATE TABLE `children_lists` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `children_info_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `sex` enum('Male','Female') DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `grade_year` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;



# Dump of table corporate_partnership_infos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `corporate_partnership_infos`;

CREATE TABLE `corporate_partnership_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `company_name` varchar(255) DEFAULT NULL,
  `type` enum('Stock Corporation','Non-Stock','General Partnership','Limited Partnership') DEFAULT NULL,
  `principal_office_address` varchar(255) DEFAULT NULL,
  `business_address` varchar(255) DEFAULT NULL,
  `line_of_business` varchar(255) DEFAULT NULL,
  `attach_fill_out` enum('attach','fill out') DEFAULT NULL,
  `authorized_capital_stock_partnership_capital` varchar(255) DEFAULT NULL,
  `no_of_shares` int(11) DEFAULT NULL,
  `par_value` decimal(10,2) DEFAULT NULL,
  `no_of_shares_subscribed` int(11) DEFAULT NULL,
  `subscribed_capital` varchar(255) DEFAULT NULL,
  `paid_up_capital` varchar(255) DEFAULT NULL,
  `fiscal_calendar_year` varchar(255) DEFAULT NULL,
  `annual_meeting` varchar(255) DEFAULT NULL,
  `president` varchar(255) DEFAULT NULL,
  `treasurer` varchar(255) DEFAULT NULL,
  `secretary` varchar(255) DEFAULT NULL,
  `general_manager` varchar(255) DEFAULT NULL,
  `managing_partners` text,
  `stockholder_type` enum('Publicly Listed','Not Publicly Listed') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



# Dump of table events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `events`;

CREATE TABLE `events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `case_detail_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `allday` tinyint(1) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `is_locked` int(11) DEFAULT NULL,
  `calendar_id` int(20) DEFAULT NULL,
  `conference` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `messenger_type` varchar(255) DEFAULT NULL,
  `messenger_username` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1045 DEFAULT CHARSET=latin1;



# Dump of table groups
# ------------------------------------------------------------

DROP TABLE IF EXISTS `groups`;

CREATE TABLE `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`, `created`, `modified`)
VALUES
	(1,'administrators','2011-01-13 04:56:48','2011-01-13 04:56:48'),
	(2,'managers','2011-01-13 04:57:11','2011-01-13 04:57:11'),
	(3,'users','2011-01-13 04:57:49','2011-01-13 04:57:49');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table legal_case_details
# ------------------------------------------------------------

DROP TABLE IF EXISTS `legal_case_details`;

CREATE TABLE `legal_case_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `legal_service` enum('Per Query','Video Conference','Office Conference','Monthly Retainer','Case/Project Retainter') DEFAULT NULL,
  `summary` text,
  `objectives` text,
  `questions` text,
  `status` enum('Pending','For Review','Incomplete','Closed') DEFAULT 'Pending',
  `is_hidden` int(11) DEFAULT '0',
  `closed` enum('0','1') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1045 DEFAULT CHARSET=latin1;



# Dump of table legal_cases
# ------------------------------------------------------------

DROP TABLE IF EXISTS `legal_cases`;

CREATE TABLE `legal_cases` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `legal_problem` varchar(255) DEFAULT NULL,
  `confirmed` enum('yes','no') DEFAULT 'no',
  `status` enum('active','not active') DEFAULT 'not active',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=1059 DEFAULT CHARSET=latin1;



# Dump of table legal_services
# ------------------------------------------------------------

DROP TABLE IF EXISTS `legal_services`;

CREATE TABLE `legal_services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `fee` decimal(10,2) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

LOCK TABLES `legal_services` WRITE;
/*!40000 ALTER TABLE `legal_services` DISABLE KEYS */;

INSERT INTO `legal_services` (`id`, `name`, `fee`, `created`, `modified`)
VALUES
	(1,'Per Query',1500.00,NULL,NULL),
	(2,'Video Conference',2000.00,NULL,NULL),
	(3,'Office Conference',2000.00,NULL,NULL),
	(4,'Monthly Retainer',0.00,NULL,NULL),
	(5,'Case/Project Retainer',0.00,NULL,NULL);

/*!40000 ALTER TABLE `legal_services` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table payments
# ------------------------------------------------------------

DROP TABLE IF EXISTS `payments`;

CREATE TABLE `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `case_detail_id` int(11) DEFAULT NULL,
  `option` enum('Bank Deposit','Paypal','GCash','SmartMoney') DEFAULT NULL,
  `bank_name` varchar(255) DEFAULT NULL,
  `bank_date_deposited` date DEFAULT NULL,
  `bank_branch` varchar(255) DEFAULT NULL,
  `bank_country` varchar(255) DEFAULT NULL,
  `amount` varchar(255) DEFAULT NULL,
  `reference_no` varchar(255) DEFAULT NULL,
  `cellphone_no` varchar(255) DEFAULT NULL,
  `gcash_type` enum('GCash Mobile','GCash Online','GCash Remit') DEFAULT NULL,
  `smartmoney_type` enum('Over-the-Counter','Wallet-to-Wallet','Mobile Banking Service','Smart Padala') DEFAULT NULL,
  `status` enum('Pending','Overdue','Confirmed') DEFAULT 'Pending',
  `confirmed` enum('0','1') DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `case_detail_id` (`case_detail_id`)
) ENGINE=MyISAM AUTO_INCREMENT=1036 DEFAULT CHARSET=latin1;



# Dump of table personal_infos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `personal_infos`;

CREATE TABLE `personal_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(155) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `address_ph` varchar(255) DEFAULT NULL,
  `address_abroad` varchar(255) DEFAULT NULL,
  `telephone_no` varchar(255) DEFAULT NULL,
  `cellphone_no` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `education_attained` enum('Grade School','High School','Vocational/Short Course','Bachelor''s/College Degree','Post Graduate Diploma/Master''s Degree','Professional License','Docotrate Degree') DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `company_work` varchar(255) DEFAULT NULL,
  `nature_of_business` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `work_position` varchar(255) DEFAULT NULL,
  `work_duration` varchar(255) DEFAULT NULL,
  `work_status` enum('Regular','Probationary','Casual','Project','Other') DEFAULT NULL,
  `civil_status` enum('Single','Married','Divorced/Annulled','Living In') DEFAULT NULL,
  `marriage_date` date DEFAULT NULL,
  `marriage_place` varchar(255) DEFAULT NULL,
  `mothers_name` varchar(255) DEFAULT NULL,
  `mothers_age` int(11) DEFAULT NULL,
  `mothers_citizenship` varchar(255) DEFAULT NULL,
  `mothers_address` varchar(255) DEFAULT NULL,
  `fathers_name` varchar(255) DEFAULT NULL,
  `fathers_age` int(11) DEFAULT NULL,
  `fathers_citizenship` varchar(255) DEFAULT NULL,
  `fathers_address` varchar(255) DEFAULT NULL,
  `alternate_email` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;



# Dump of table posts
# ------------------------------------------------------------

DROP TABLE IF EXISTS `posts`;

CREATE TABLE `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `body` text,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table request_reschedules
# ------------------------------------------------------------

DROP TABLE IF EXISTS `request_reschedules`;

CREATE TABLE `request_reschedules` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `case_detail_id` int(11) DEFAULT NULL,
  `event_id` int(11) DEFAULT NULL,
  `conference` varchar(255) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `start` varchar(255) DEFAULT NULL,
  `end` varchar(255) DEFAULT NULL,
  `notes` text,
  `created` timestamp NULL DEFAULT NULL,
  `modified` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table spouse_infos
# ------------------------------------------------------------

DROP TABLE IF EXISTS `spouse_infos`;

CREATE TABLE `spouse_infos` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `middle_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `gender` enum('Male','Female') DEFAULT NULL,
  `birth_date` date DEFAULT NULL,
  `birth_place` varchar(255) DEFAULT NULL,
  `address_ph` varchar(255) DEFAULT NULL,
  `address_abroad` varchar(255) DEFAULT NULL,
  `telephone_no` varchar(255) DEFAULT NULL,
  `cellphone_no` varchar(255) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `citizenship` varchar(255) DEFAULT NULL,
  `education_attained` varchar(255) DEFAULT NULL,
  `school` varchar(255) DEFAULT NULL,
  `company_work` varchar(255) DEFAULT NULL,
  `nature_of_business` varchar(255) DEFAULT NULL,
  `company_address` varchar(255) DEFAULT NULL,
  `work_position` varchar(255) DEFAULT NULL,
  `work_duration` varchar(255) DEFAULT NULL,
  `work_status` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`),
  UNIQUE KEY `user_id` (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;



# Dump of table stockholders
# ------------------------------------------------------------

DROP TABLE IF EXISTS `stockholders`;

CREATE TABLE `stockholders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `corporate_partnership_info_id` int(11) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `no_of_share` int(11) DEFAULT NULL,
  `subscribed_capital` varchar(255) DEFAULT NULL,
  `paid_up_capital` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=270 DEFAULT CHARSET=latin1;



# Dump of table temp_events
# ------------------------------------------------------------

DROP TABLE IF EXISTS `temp_events`;

CREATE TABLE `temp_events` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `case_id` int(11) DEFAULT NULL,
  `case_detail_id` int(11) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `allday` tinyint(1) DEFAULT NULL,
  `start` datetime DEFAULT NULL,
  `end` datetime DEFAULT NULL,
  `editable` tinyint(1) DEFAULT NULL,
  `is_locked` int(11) DEFAULT NULL,
  `calendar_id` int(20) DEFAULT NULL,
  `conference` varchar(255) DEFAULT NULL,
  `color` varchar(255) DEFAULT NULL,
  `messenger_type` varchar(255) DEFAULT NULL,
  `messenger_username` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;



# Dump of table users
# ------------------------------------------------------------

DROP TABLE IF EXISTS `users`;

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` char(40) NOT NULL,
  `group_id` int(11) NOT NULL,
  `type` enum('personal','corporation') DEFAULT NULL,
  `activated` enum('yes','no') DEFAULT 'yes',
  `verified` enum('yes','no') DEFAULT 'no',
  `referred_by` varchar(255) DEFAULT NULL,
  `profile_complete` tinyint(4) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=InnoDB AUTO_INCREMENT=1003 DEFAULT CHARSET=latin1;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `username`, `password`, `group_id`, `type`, `activated`, `verified`, `referred_by`, `profile_complete`, `created`, `modified`)
VALUES
	(4,'gino.carlo.cortez@gmail.com','4ae8cbef321f24e3b49f3485ca7d7934468fb120',1,NULL,'yes',NULL,NULL,NULL,'2011-01-15 04:56:09','2011-01-15 08:31:07');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table widgets
# ------------------------------------------------------------

DROP TABLE IF EXISTS `widgets`;

CREATE TABLE `widgets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `part_no` varchar(12) DEFAULT NULL,
  `quantity` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;




/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
