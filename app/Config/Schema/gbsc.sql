-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 16, 2013 at 07:28 PM
-- Server version: 5.5.28
-- PHP Version: 5.3.10-1ubuntu3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `gbsc`
--

-- --------------------------------------------------------

--
-- Table structure for table `behaviorevaluationcriterias`
--

CREATE TABLE IF NOT EXISTS `behaviorevaluationcriterias` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `criteria_name` varchar(255) NOT NULL,
  `criteria_weight` decimal(10,0) NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `behaviorevaluations`
--

CREATE TABLE IF NOT EXISTS `behaviorevaluations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `behaviorevaluationcriteria_id` int(11) NOT NULL,
  `evaluationtype_id` int(11) NOT NULL,
  `evaluationrank_id` int(11) NOT NULL,
  `remark` text NOT NULL,
  `period_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `evaluator_id` (`user_id`),
  KEY `criteria_id` (`behaviorevaluationcriteria_id`),
  KEY `rank_id` (`evaluationrank_id`),
  KEY `period_id` (`period_id`),
  KEY `evaluationtype_id` (`evaluationtype_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluationranks`
--

CREATE TABLE IF NOT EXISTS `evaluationranks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank_value` decimal(10,0) NOT NULL,
  `rank_description` text NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `evaluationtypes`
--

CREATE TABLE IF NOT EXISTS `evaluationtypes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `evaluation_name` varchar(255) NOT NULL,
  `evaluation_value` decimal(10,0) NOT NULL,
  `evaluation_description` text NOT NULL,
  `year` year(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `frequencies`
--

CREATE TABLE IF NOT EXISTS `frequencies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `frequency_name` varchar(100) DEFAULT NULL,
  `number_of_days` int(11) DEFAULT NULL,
  `description` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `frequencies`
--

INSERT INTO `frequencies` (`id`, `created`, `modified`, `frequency_name`, `number_of_days`, `description`) VALUES
(1, '2013-03-02 07:04:25', '2013-03-02 10:05:43', 'Anualy', 365, ''),
(2, '2013-03-02 10:06:19', '2013-03-02 10:06:19', 'Bi Anualy', 180, ''),
(3, '2013-03-02 10:06:38', '2013-03-02 10:06:38', 'Quarterly', 90, ''),
(4, '2013-03-02 10:06:53', '2013-03-02 10:06:53', 'Monthly', 30, ''),
(5, '2013-03-02 10:07:11', '2013-03-02 10:07:11', 'Weakly ', 7, '');

-- --------------------------------------------------------

--
-- Table structure for table `initiatives`
--

CREATE TABLE IF NOT EXISTS `initiatives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `initiative_name` varchar(200) DEFAULT NULL,
  `initiative_description` mediumtext,
  `initiative_importance` mediumtext,
  `deliverable` mediumtext,
  `budget` decimal(10,0) DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `initiatives`
--

INSERT INTO `initiatives` (`id`, `created`, `modified`, `initiative_name`, `initiative_description`, `initiative_importance`, `deliverable`, `budget`, `start_date`, `end_date`) VALUES
(3, '2013-03-22 16:18:46', '2013-03-22 17:01:06', 'initiative one', 'ggdd', 'gdsgdsg', 'fsdfsd', 32434, '2013-03-22', '2013-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `initiatives_implimenters`
--

CREATE TABLE IF NOT EXISTS `initiatives_implimenters` (
  `initiative_id` int(11) NOT NULL,
  `implimenter_id` int(11) NOT NULL,
  KEY `initiative_id` (`initiative_id`),
  KEY `implimenter_id` (`implimenter_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `initiatives_objectives`
--

CREATE TABLE IF NOT EXISTS `initiatives_objectives` (
  `initiative_id` int(11) DEFAULT NULL,
  `objective_id` int(11) DEFAULT NULL,
  UNIQUE KEY `initiative_id` (`initiative_id`,`objective_id`),
  KEY `objective_id` (`objective_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `initiatives_owners`
--

CREATE TABLE IF NOT EXISTS `initiatives_owners` (
  `initiative_id` int(11) NOT NULL,
  `owner_id` int(11) NOT NULL,
  KEY `initiative_id` (`initiative_id`),
  KEY `owner_id` (`owner_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `initiatives_owners`
--

INSERT INTO `initiatives_owners` (`initiative_id`, `owner_id`) VALUES
(3, 6),
(3, 8);

-- --------------------------------------------------------

--
-- Table structure for table `login_tokens`
--

CREATE TABLE IF NOT EXISTS `login_tokens` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `token` char(32) NOT NULL,
  `duration` varchar(32) NOT NULL,
  `used` tinyint(1) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `expires` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=162 ;

--
-- Dumping data for table `login_tokens`
--

INSERT INTO `login_tokens` (`id`, `user_id`, `token`, `duration`, `used`, `created`, `expires`) VALUES
(1, 2, 'f904999625d57843620e5c3f605302de', '2 weeks', 1, '2013-03-01 14:19:47', '2013-03-15 14:19:47'),
(2, 2, '7d025783b4233c8d36a6f816a059f623', '2 weeks', 1, '2013-03-01 14:24:49', '2013-03-15 14:24:49'),
(3, 2, '6ceebc998fc5988123021c4cd4d3e1e7', '2 weeks', 0, '2013-03-01 21:31:47', '2013-03-15 21:31:47'),
(4, 2, '76bfe91bebdfd82162f49c53490976f8', '2 weeks', 0, '2013-03-01 21:34:48', '2013-03-15 21:34:48'),
(5, 2, '7d8abbd62d7adfd0b175170d878fbf04', '2 weeks', 1, '2013-03-02 01:38:26', '2013-03-16 01:38:26'),
(6, 2, '9fb0739a1cbee62e5dc89cd8c9ff5d42', '2 weeks', 1, '2013-03-02 02:11:37', '2013-03-16 02:11:37'),
(7, 2, '25c77f6c44349ed404d943cf6acf9801', '2 weeks', 1, '2013-03-02 04:23:08', '2013-03-16 04:23:08'),
(8, 2, '434f5c873c269e698587304d252e1102', '2 weeks', 0, '2013-03-02 06:32:16', '2013-03-16 06:32:16'),
(9, 2, '90b0a985ff7d00a0614d83bc2aa7eef9', '2 weeks', 0, '2013-03-02 07:49:09', '2013-03-16 07:49:09'),
(10, 2, '978c127bcc0aba8cbc89e7d6a2b516dd', '2 weeks', 0, '2013-03-02 08:27:10', '2013-03-16 08:27:10'),
(11, 2, '0d5c025c41df8f940c3d4b9379b39399', '2 weeks', 0, '2013-03-02 08:46:55', '2013-03-16 08:46:55'),
(16, 2, '51fa7775e64ce7973baa9cf23b645e88', '2 weeks', 0, '2013-03-03 03:10:26', '2013-03-17 03:10:26'),
(17, 2, '5d7f21939438cdca1fedad45d9035db3', '2 weeks', 0, '2013-03-03 03:35:08', '2013-03-17 03:35:08'),
(23, 4, '8799c3e1265bc10b757742b3f8e7f2cc', '2 weeks', 0, '2013-03-03 16:03:43', '2013-03-17 16:03:43'),
(27, 2, '4f9ba2c28efa3cc8c71a525ceec5bc81', '2 weeks', 0, '2013-03-03 17:43:45', '2013-03-17 17:43:45'),
(28, 2, '2226169fbb2009a8bc994dd43213a726', '2 weeks', 0, '2013-03-03 18:41:06', '2013-03-17 18:41:06'),
(161, 3, '88eee21a5f68904c70c68bae564de045', '2 hours', 0, '2013-04-16 04:35:03', '2013-04-16 06:35:03'),
(160, 3, '613237cdd2b6cd6e4eaabab2e0cfb220', '2 hours', 1, '2013-04-16 02:39:50', '2013-04-16 04:39:50'),
(159, 3, 'a0ba9914848128ca7e252cc56090465a', '2 hours', 0, '2013-04-15 09:14:02', '2013-04-15 11:14:02'),
(158, 3, '58eca0043949564df386f1cab1596a22', '2 hours', 1, '2013-04-15 07:20:22', '2013-04-15 09:20:22'),
(157, 3, 'bcb5d5927ad75551c9bc563bfb5c1cd4', '2 hours', 0, '2013-04-15 05:09:42', '2013-04-15 07:09:42'),
(156, 3, 'b801bc4ef6d41e296cbe461d55ae68e0', '2 hours', 1, '2013-04-15 04:03:36', '2013-04-15 06:03:36'),
(155, 4, 'cc26941680c48965a3d74adcd7b61233', '2 hours', 0, '2013-04-13 11:41:47', '2013-04-13 13:41:47'),
(154, 4, '9acb7e0d6f3dd766bf632181661ccd48', '2 hours', 0, '2013-04-13 11:41:01', '2013-04-13 13:41:01'),
(153, 4, '905f06230a22420f16bb4a2cf31e9114', '2 hours', 0, '2013-04-13 11:30:53', '2013-04-13 13:30:53'),
(152, 3, 'a5777d1ba53e4b5d1029cac2f2391e05', '2 hours', 0, '2013-04-13 11:30:17', '2013-04-13 13:30:17'),
(151, 3, '0188aaa8aa49dfa3538607d715d46d80', '2 hours', 0, '2013-04-12 03:16:42', '2013-04-12 05:16:42'),
(40, 2, 'd9060a3447946fc4ffd35927e31b8a9f', '2 weeks', 0, '2013-03-05 02:47:29', '2013-03-19 02:47:29'),
(41, 2, '2dd791cc9515dc8a2f2076ff84980465', '2 weeks', 0, '2013-03-05 03:02:08', '2013-03-19 03:02:08'),
(42, 2, '7f2523d3c6d7028d037236de039f0513', '2 weeks', 1, '2013-03-05 03:15:48', '2013-03-19 03:15:48'),
(43, 2, '7b0fd245241573d735e001f0020a9762', '2 weeks', 0, '2013-03-05 03:43:23', '2013-03-19 03:43:23'),
(44, 2, '6fdf92f5d67d1617a94d0c77a951dd9e', '2 weeks', 1, '2013-03-05 03:53:31', '2013-03-19 03:53:31'),
(150, 3, 'eff082d1c1bde8057818b2210e02bc87', '2 hours', 1, '2013-04-12 02:21:44', '2013-04-12 04:21:44'),
(46, 2, '6436fe36026633d02e1e4df5f7fedde7', '2 weeks', 0, '2013-03-05 06:17:58', '2013-03-19 06:17:58'),
(149, 3, 'ac15548d711cf072f20403279ebd84ff', '2 hours', 1, '2013-04-12 00:47:35', '2013-04-12 02:47:35'),
(148, 4, '00856d78761e95d346e92ee7c5399d45', '2 hours', 0, '2013-04-11 12:15:45', '2013-04-11 14:15:45'),
(49, 2, '500053182686f690b5e36389300f277f', '2 weeks', 0, '2013-03-05 06:47:08', '2013-03-19 06:47:08'),
(147, 3, 'c126e5c60881502865cfa5c5f6c11f94', '2 hours', 0, '2013-04-11 09:37:45', '2013-04-11 11:37:45'),
(146, 2, '5d180c7b66651ad4c3baa41257121832', '2 hours', 0, '2013-04-11 09:30:39', '2013-04-11 11:30:39'),
(145, 2, 'ebeea294ac70efdb20438c5be8dcffd9', '2 hours', 1, '2013-04-11 08:32:30', '2013-04-11 10:32:30'),
(144, 3, 'c4a424f70b49966e6c46db73ffa3de46', '2 hours', 0, '2013-04-11 08:23:26', '2013-04-11 10:23:26'),
(143, 3, '9674544e0e78c08f76bb8be40f7ecea1', '2 hours', 1, '2013-04-11 07:36:08', '2013-04-11 09:36:08'),
(142, 3, '95a164b059f14962539e2000c93f20a8', '2 hours', 0, '2013-04-11 06:32:21', '2013-04-11 08:32:21'),
(141, 3, 'ffd82d0ff03966046528916746802503', '2 hours', 0, '2013-04-11 05:09:07', '2013-04-11 07:09:07'),
(140, 3, '60df28047d1570859b41d432e6d36a73', '2 hours', 0, '2013-04-11 03:16:43', '2013-04-11 05:16:43'),
(139, 3, '11f67e18689ab1a2e702104ad7ded721', '2 hours', 1, '2013-04-11 02:20:50', '2013-04-11 04:20:50'),
(138, 3, 'b5f2b1c163665f57b8bbcd7b412c9d08', '2 hours', 0, '2013-04-10 03:16:24', '2013-04-10 05:16:24'),
(137, 3, '220ead35530d4bb3d1d16b16137d82dc', '2 hours', 1, '2013-04-10 03:04:47', '2013-04-10 05:04:47'),
(136, 4, '74b21b82f7d244d6008a1c658e5c3912', '2 hours', 0, '2013-04-10 02:50:10', '2013-04-10 04:50:10'),
(135, 5, 'ab5bd880a51c37e81b44b057a18067ff', '2 hours', 0, '2013-04-10 02:43:47', '2013-04-10 04:43:47'),
(134, 3, '0ad0194f72d4fd6c420567c008a1ee59', '2 hours', 0, '2013-04-08 10:11:08', '2013-04-08 12:11:08'),
(133, 3, '645045b98c2dd555f25297a85b500e08', '2 hours', 0, '2013-03-28 00:44:50', '2013-03-28 02:44:50'),
(132, 3, '89a2818fb7a8d1974750470dee61a91b', '2 hours', 1, '2013-03-28 00:14:28', '2013-03-28 02:14:28'),
(131, 3, 'd5d8bbc6ea39e1ebc7f625362412862b', '2 hours', 0, '2013-03-27 04:14:20', '2013-03-27 06:14:20'),
(130, 3, '8bb16ff40ff18fab7f4c89bcaa3d75a9', '2 hours', 0, '2013-03-27 03:58:41', '2013-03-27 05:58:41'),
(129, 3, '55b47993ce69e6e390e9a956c8ea7a46', '2 hours', 0, '2013-03-26 09:07:04', '2013-03-26 11:07:04'),
(128, 3, '6d4d3af2bc3d1dd1c291323a89bc5492', '2 hours', 0, '2013-03-26 09:06:55', '2013-03-26 11:06:55'),
(127, 3, 'eebde695dba8901dafb14b8cd0c2897a', '2 hours', 1, '2013-03-26 07:22:28', '2013-03-26 09:22:28'),
(126, 3, '32c80ada22ed21df9c66c32e2c57b0a0', '2 hours', 0, '2013-03-26 04:23:57', '2013-03-26 06:23:57'),
(125, 3, '094c42d272a14ec538f6483115d21046', '2 hours', 0, '2013-03-26 03:23:55', '2013-03-26 05:23:55'),
(124, 3, '1aaaae3c6170862f98cab44f75662b8d', '2 hours', 0, '2013-03-26 03:19:47', '2013-03-26 05:19:47'),
(123, 3, 'bcf21c468e439bbc528f2aa1abcfd300', '2 hours', 0, '2013-03-26 02:26:12', '2013-03-26 04:26:12'),
(122, 3, '94a9c1ffa701dd4deb9b098086996027', '2 hours', 0, '2013-03-25 19:57:48', '2013-03-25 21:57:48'),
(121, 3, 'fd2805a540146b6cb9a84c57630c7209', '2 hours', 0, '2013-03-25 03:56:14', '2013-03-25 05:56:14'),
(120, 3, '24065e05fa5512f26b5e94c538f29010', '2 hours', 0, '2013-03-24 14:50:22', '2013-03-24 16:50:22'),
(119, 3, 'e6fd99540dccd2ad732b0289b8b26875', '2 weeks', 0, '2013-03-22 14:59:51', '2013-04-05 14:59:51'),
(118, 3, 'ff38356c7a8951cd7417ec866c80981d', '2 weeks', 0, '2013-03-22 09:57:49', '2013-04-05 09:57:49'),
(117, 3, '6aa8721082d68cc49322e5ae2f0200bf', '2 weeks', 1, '2013-03-22 03:48:02', '2013-04-05 03:48:02'),
(116, 3, 'a04fdbb5892319b54b062665025e302b', '2 weeks', 1, '2013-03-22 03:01:41', '2013-04-05 03:01:41'),
(115, 3, '64e0902fc8e61ddd0d5497ce515832de', '2 weeks', 1, '2013-03-21 09:34:12', '2013-04-04 09:34:12'),
(114, 3, 'd9c4bee404cb224ea65192285ce6267e', '2 weeks', 1, '2013-03-21 08:02:21', '2013-04-04 08:02:21'),
(113, 3, '3d299a5bffb427d7d1ce1a6433809d7a', '2 weeks', 1, '2013-03-21 07:32:53', '2013-04-04 07:32:53'),
(112, 3, '1a6c767396eeae256dcc15eea2c95670', '2 weeks', 1, '2013-03-21 04:00:20', '2013-04-04 04:00:20'),
(111, 3, '6011541d02a19dc9c7d7b88cd54d865d', '2 weeks', 1, '2013-03-20 23:04:30', '2013-04-03 23:04:30'),
(110, 3, 'e35be8a1800139af3e1933baf16484a4', '2 weeks', 1, '2013-03-20 13:37:18', '2013-04-03 13:37:18'),
(109, 3, '30dcf34bede943640b892333559721f3', '2 weeks', 1, '2013-03-20 12:44:59', '2013-04-03 12:44:59'),
(108, 3, '4f09dbfe841f92e3b79575be1bab5361', '2 weeks', 1, '2013-03-20 03:39:44', '2013-04-03 03:39:44'),
(107, 3, 'b6d5ee4d249d4d40d36b4b058c45be3e', '2 weeks', 0, '2013-03-19 19:43:36', '2013-04-02 19:43:36'),
(106, 3, '5425c762fd69b16a1b2155f21fac434e', '2 weeks', 1, '2013-03-19 11:50:24', '2013-04-02 11:50:24'),
(105, 3, '061fcca96de82db7e7c5fef66e39298d', '2 weeks', 0, '2013-03-19 11:49:13', '2013-04-02 11:49:13'),
(104, 3, '1d8e9089beb75ba80dace96c6cc8dd44', '2 weeks', 0, '2013-03-19 11:29:59', '2013-04-02 11:29:59'),
(103, 3, '359fac95118607698480c7a936f8ff1b', '2 weeks', 0, '2013-03-19 11:25:43', '2013-04-02 11:25:43'),
(102, 4, '7e63ab64842c5f6b679d019bb60a2cc1', '2 weeks', 0, '2013-03-19 10:42:11', '2013-04-02 10:42:11'),
(101, 3, '22425be2b296bd61c4efa763930b9dfa', '2 weeks', 0, '2013-03-19 10:30:41', '2013-04-02 10:30:41'),
(100, 4, '885b3242742ae2fbff722caab33efe23', '2 weeks', 1, '2013-03-19 09:52:51', '2013-04-02 09:52:51'),
(99, 3, 'c55a2d5fb3007e15de3b0c05bc22f4cb', '2 weeks', 0, '2013-03-19 09:52:21', '2013-04-02 09:52:21');

-- --------------------------------------------------------

--
-- Table structure for table `majoractivities`
--

CREATE TABLE IF NOT EXISTS `majoractivities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `activity_name` varchar(100) DEFAULT NULL,
  `activity_weight` decimal(10,0) DEFAULT NULL,
  `baseline` decimal(10,0) NOT NULL,
  `target` decimal(10,0) NOT NULL,
  `measure_id` int(11) DEFAULT NULL,
  `objective_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `period_id` int(11) NOT NULL,
  `in_quality` int(11) NOT NULL,
  `in_quntity` int(11) NOT NULL,
  `in_time` int(11) NOT NULL,
  `in_cost` int(11) NOT NULL,
  `ac_in_quality` int(11) NOT NULL,
  `ac_in_quntity` int(11) NOT NULL,
  `ac_in_time` int(11) NOT NULL,
  `ac_in_cost` int(11) NOT NULL,
  `acomplishment` decimal(10,0) NOT NULL,
  `office_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_approved` binary(1) NOT NULL,
  `remark` text NOT NULL,
  PRIMARY KEY (`id`),
  KEY `majoractivities_ibfk_1` (`measure_id`),
  KEY `objective_id` (`objective_id`),
  KEY `office_id` (`office_id`),
  KEY `user_id` (`user_id`),
  KEY `period_id` (`period_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `majoractivities`
--

INSERT INTO `majoractivities` (`id`, `created`, `modified`, `activity_name`, `activity_weight`, `baseline`, `target`, `measure_id`, `objective_id`, `year`, `period_id`, `in_quality`, `in_quntity`, `in_time`, `in_cost`, `ac_in_quality`, `ac_in_quntity`, `ac_in_time`, `ac_in_cost`, `acomplishment`, `office_id`, `user_id`, `is_approved`, `remark`) VALUES
(1, '2013-04-15 05:21:32', '2013-04-15 05:37:50', 'acitivit one', 90, 34, 43, 1, 3, 2005, 1, 43, 34, 434, 40, 0, 0, 0, 0, 0, 6, 3, '\0', ''),
(2, '2013-04-15 05:38:22', '2013-04-15 05:38:22', 'activity two', 10, 34, 43, 1, 3, 2005, 1, 43, 34, 434, 43, 0, 0, 0, 0, 0, 6, 3, '\0', '');

-- --------------------------------------------------------

--
-- Table structure for table `majoractivities_users`
--

CREATE TABLE IF NOT EXISTS `majoractivities_users` (
  `activity_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  UNIQUE KEY `activity_id` (`activity_id`,`user_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `measures`
--

CREATE TABLE IF NOT EXISTS `measures` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `objective_id` int(11) DEFAULT NULL,
  `measure_name` varchar(100) DEFAULT NULL,
  `description` mediumtext,
  `measure_type` varchar(100) DEFAULT NULL,
  `unit_id` int(11) DEFAULT NULL,
  `polarity` tinytext,
  `measure_weight` decimal(10,0) DEFAULT NULL,
  `frequency_id` int(11) DEFAULT NULL,
  `formula` mediumtext,
  `data_source` text,
  `data_quality` text,
  `data_collector` varchar(200) DEFAULT NULL,
  `rationalie` mediumtext,
  `baseline` decimal(10,0) DEFAULT NULL,
  `threshold_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `objective_id` (`objective_id`),
  KEY `unit_id` (`unit_id`),
  KEY `threshold_id` (`threshold_id`),
  KEY `measures_ibfk_4` (`frequency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `measures`
--

INSERT INTO `measures` (`id`, `created`, `modified`, `objective_id`, `measure_name`, `description`, `measure_type`, `unit_id`, `polarity`, `measure_weight`, `frequency_id`, `formula`, `data_source`, `data_quality`, `data_collector`, `rationalie`, `baseline`, `threshold_id`) VALUES
(1, '2013-04-15 04:35:58', '2013-04-15 08:38:49', 3, 'measure one', 'sdfdsf', 'fdfd', 1, 'fd', 10, 1, 'dsd', 'fsdfs', 'efdsf', 'fdsfs', 'fdsfsdf', 344, NULL),
(2, '2013-04-15 04:36:34', '2013-04-15 04:36:34', 3, 'measure two', 'fd', 'fdfd', 1, 'fd', 10, 1, 'dfsd', 'dfd', 'fdfd', 'fdsfs', 'dfd', 344, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `datail` mediumtext,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `title`, `created`, `modified`, `datail`) VALUES
(1, 'Bsc software were complited about 80% of the required progress', '2013-03-16 05:01:46', '2013-03-16 13:14:46', 'The BSC software was starteds The BSC software was starteds The BThe BSC software was starteds The BSC software was starteds The BSC software was starteds SC software was starteds The BSC software was starteds The BSC software was starteds The BSC software was starteds The BSC software was starteds The BSC software was starteds '),
(2, 'To day is the day', '2013-03-16 13:15:49', '2013-03-16 13:15:49', 'As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we knAs we know to day is the day As we know to day is the day As we know to day is the dayow to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day As we know to day is the day ');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE IF NOT EXISTS `notifications` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `objectives`
--

CREATE TABLE IF NOT EXISTS `objectives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `objective_name` varchar(100) DEFAULT NULL,
  `objective_weight` decimal(10,0) DEFAULT NULL,
  `objective_description` mediumtext,
  `perspective_id` int(11) DEFAULT NULL,
  `organization_id` int(11) DEFAULT NULL,
  `outcome` text,
  PRIMARY KEY (`id`),
  KEY `organization_id` (`organization_id`),
  KEY `perspective_id` (`perspective_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`id`, `created`, `modified`, `objective_name`, `objective_weight`, `objective_description`, `perspective_id`, `organization_id`, `outcome`) VALUES
(3, '2013-04-15 04:15:24', '2013-04-15 08:25:15', 'objective one', 20, 'cxc', 4, NULL, 'vcxv'),
(4, '2013-04-15 08:25:27', '2013-04-15 08:25:49', 'objective two', 20, 'dsfsd', 4, NULL, 'fdfds');

-- --------------------------------------------------------

--
-- Table structure for table `objectives_offices`
--

CREATE TABLE IF NOT EXISTS `objectives_offices` (
  `office_id` int(11) DEFAULT NULL,
  `objective_id` int(11) DEFAULT NULL,
  UNIQUE KEY `office_id` (`office_id`,`objective_id`),
  KEY `objective_id` (`objective_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `offices`
--

CREATE TABLE IF NOT EXISTS `offices` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `office_name` mediumtext,
  `office_id` int(11) NOT NULL,
  `organization_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `organization_id` (`organization_id`),
  KEY `reports_to_id` (`office_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `offices`
--

INSERT INTO `offices` (`id`, `created`, `modified`, `office_name`, `office_id`, `organization_id`) VALUES
(6, '2013-03-02 02:11:53', '2013-04-11 23:37:55', 'president', 0, 2),
(8, '2013-03-02 02:15:42', '2013-04-10 00:54:28', 'Academic vice president', 6, 2),
(9, '2013-04-10 02:37:59', '2013-04-10 02:37:59', 'Institutional transformation', 6, 2);

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE IF NOT EXISTS `organizations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `organization_name` varchar(100) DEFAULT NULL,
  `mission` mediumtext,
  `vision` mediumtext,
  `value` mediumtext,
  `motto` varchar(100) DEFAULT NULL,
  `logo` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`id`, `created`, `modified`, `organization_name`, `mission`, `vision`, `value`, `motto`, `logo`) VALUES
(2, '2013-03-01 16:31:02', '2013-03-03 19:19:30', 'Jimma University', 'Jimma University is committed to training high calibre professionals, undertaking quality and problem solving research and serving the society    through its cherished and innovative Community Based Education (CBE).', 'Jimma University aspires to be a leading public higher learning institution in the country, renowned in Africa and recognized in the world.', '1. Excellence and quality in teaching, research and service\r\n2. Diversity, tolerance and inclusiveness in the ethnicity, religion, culture and gender\r\n3. Equity and access  in teaching , research and public services \r\n4. Gender sensitivity to rectify the prevailing gender inequity and imbalance \r\n5. Honesty and integrity in carrying out intellectual endeavors  \r\n6. Transparency and accountability in decision making \r\n7. Community involvement and empowerment\r\n8. Networking for collaboration and partnership\r\n9. Mutual respect, collegiality and team spirit in transforming the university', 'We are in the community', 'ju logo');

-- --------------------------------------------------------

--
-- Table structure for table `periods`
--

CREATE TABLE IF NOT EXISTS `periods` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `period_name` varchar(100) DEFAULT NULL,
  `frequency_id` int(11) DEFAULT NULL,
  `starting_day` date DEFAULT NULL,
  `ending_day` date DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `frequency_id` (`frequency_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `periods`
--

INSERT INTO `periods` (`id`, `created`, `modified`, `period_name`, `frequency_id`, `starting_day`, `ending_day`) VALUES
(1, '2013-03-12 08:13:31', '2013-03-12 08:13:31', 'Quarter one', 3, '2013-03-12', '2013-03-12'),
(2, '2013-03-17 06:01:53', '2013-03-17 06:01:53', 'Anual', 1, '2013-03-17', '2013-03-17');

-- --------------------------------------------------------

--
-- Table structure for table `perspectives`
--

CREATE TABLE IF NOT EXISTS `perspectives` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `perspective_name` varchar(100) DEFAULT NULL,
  `perspective_weight` decimal(10,0) DEFAULT NULL,
  `perspective_description` mediumtext,
  `org_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `perspectives`
--

INSERT INTO `perspectives` (`id`, `created`, `modified`, `perspective_name`, `perspective_weight`, `perspective_description`, `org_id`) VALUES
(4, '2013-04-13 11:59:06', '2013-04-13 11:59:06', 'perspective one', 40, 'gdfgdf', 1),
(5, '2013-04-13 11:59:22', '2013-04-15 08:32:30', 'perspective onef', 20, 'nvnv', 1),
(6, '2013-04-13 12:02:18', '2013-04-13 12:02:18', 'perspective one4', 20, 'rsffs', 1),
(7, '2013-04-13 12:02:35', '2013-04-13 12:02:35', 'perspective oneew', 20, 'ewwe', 1);

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE IF NOT EXISTS `projects` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `project_name` varchar(100) DEFAULT NULL,
  `initiative_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `initiative_id` (`initiative_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created`, `modified`, `project_name`, `initiative_id`) VALUES
(8, '2013-03-25 21:17:38', '2013-03-25 21:17:38', 'project one', 3);

-- --------------------------------------------------------

--
-- Table structure for table `projects_tasks`
--

CREATE TABLE IF NOT EXISTS `projects_tasks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `task_name` varchar(100) DEFAULT NULL,
  `project_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `subactivities`
--

CREATE TABLE IF NOT EXISTS `subactivities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `majoractivity_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `subactivity_name` varchar(255) DEFAULT NULL,
  `subactivity_weight` decimal(10,0) NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `is_approved` binary(1) NOT NULL DEFAULT '0',
  `remark` text,
  `office_id` int(11) DEFAULT '1',
  `user_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `majoractivity_id` (`majoractivity_id`),
  KEY `period_id` (`period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `targets`
--

CREATE TABLE IF NOT EXISTS `targets` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `year` year(4) DEFAULT NULL,
  `baseline` decimal(10,0) DEFAULT NULL,
  `target` decimal(10,0) DEFAULT NULL,
  `actual_value` decimal(10,0) NOT NULL,
  `objective_id` int(11) NOT NULL,
  `measure_id` int(11) DEFAULT NULL,
  `period_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `measure_id` (`measure_id`),
  KEY `objective_id` (`objective_id`),
  KEY `office_id` (`office_id`),
  KEY `period_id` (`period_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `stategic_theme` text NOT NULL,
  `description` text NOT NULL,
  `result` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`id`, `stategic_theme`, `description`, `result`) VALUES
(1, ' Academic excellence ', 'Sustaining  an environment in which student centered teaching-learning  is fostered in and outside classrooms through a persistent atmosphere of high expectations ', 'Outstanding professionals who would play  major roles in the socio-economic development of the nation '),
(2, ' Excellence in research and technology transfer ', 'Adoption, adaptation, generation and dissemination of need-based and problem solving research, knowledge  and technology transfer  ', 'Cutting  edge research outputs which  address the challenging issues of the country '),
(3, 'Excellence in service', 'The provision and management of health, consultancy and all other community engagement services ', 'Healthy and productive society, fine-tuned social and economic problems  '),
(4, 'Institutional Transformation and Good governance ', 'A participatory, transparent and accountable management system that enhances the realization of  the universityâ€™s mission ', 'Democratic  management with efficient decision making  and rule of law in place  ');

-- --------------------------------------------------------

--
-- Table structure for table `themes_objectives`
--

CREATE TABLE IF NOT EXISTS `themes_objectives` (
  `theme_id` int(11) NOT NULL,
  `objective_id` int(11) NOT NULL,
  KEY `theme_id` (`theme_id`),
  KEY `objective_id` (`objective_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `thresholds`
--

CREATE TABLE IF NOT EXISTS `thresholds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `threshold_name` varchar(200) DEFAULT NULL,
  `lower` decimal(10,0) DEFAULT NULL,
  `upper` decimal(10,0) DEFAULT NULL,
  `colour` varchar(20) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE IF NOT EXISTS `units` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `name` varchar(200) DEFAULT NULL,
  `description` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`id`, `created`, `modified`, `name`, `description`) VALUES
(1, '2013-03-02 09:51:44', '2013-03-02 09:51:44', 'Number', 'This is number measure'),
(2, '2013-03-02 09:52:41', '2013-03-02 09:52:41', 'Persent ', 'This is persent measure'),
(3, '2013-03-02 09:53:31', '2013-03-02 09:53:31', 'Ratio', 'This is ratio measur');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_group_id` int(11) unsigned DEFAULT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `salt` text,
  `email` varchar(100) DEFAULT NULL,
  `first_name` varchar(100) DEFAULT NULL,
  `last_name` varchar(100) DEFAULT NULL,
  `email_verified` int(1) DEFAULT '0',
  `active` int(1) NOT NULL DEFAULT '0',
  `ip_address` varchar(50) DEFAULT NULL,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `office_id` int(11) DEFAULT '1',
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`, `office_id`) VALUES
(2, 1, 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', 1, 1, '', '2013-03-01 22:11:08', '2013-03-01 22:11:08', 1),
(3, 1, 'ifrem', '5df7e01ccfaf3072df4e9fa5380fca5b', '3720430e5d05a4d30e2e019edc086b39', 'if@if.if', 'Ifrem', 'Nanecha', 1, 1, NULL, '2013-03-02 09:33:41', '2013-03-19 09:44:24', 6),
(4, 5, 'vifrem', '0a860e784e7d6d1ed877d07347213010', '0d7ce4bdbfd09b7e2d260b18a8c60649', 'vv@nn.vbv', 'Vice ', 'President', 1, 1, NULL, '2013-03-03 16:03:22', '2013-03-27 04:14:38', 8),
(5, 9, 'yohannes', '99a36f3f106c40937eaf8d48c2523c85', 'c76c372d5f41771e0f18f21b6ede8470', 'yohatef@yahoo.com', 'yohannes', 'tefera', 1, 1, NULL, '2013-04-10 02:41:52', '2013-04-10 02:41:52', 9),
(6, 6, 'ephrem', '87565922bf6c0ebbd36142bd646830ce', 'd2eee6c472a1d8f4df3a410875f3af00', 'ifremict@gmail.com', 'Ephrem', 'Nanecha', 1, 1, NULL, '2013-04-10 12:54:56', '2013-04-10 12:54:56', 6);

-- --------------------------------------------------------

--
-- Table structure for table `user_groups`
--

CREATE TABLE IF NOT EXISTS `user_groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) DEFAULT NULL,
  `alias_name` varchar(100) DEFAULT NULL,
  `allowRegistration` int(1) NOT NULL DEFAULT '1',
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `user_groups`
--

INSERT INTO `user_groups` (`id`, `name`, `alias_name`, `allowRegistration`, `created`, `modified`) VALUES
(1, 'Admin', 'Admin', 0, '2013-03-01 22:11:08', '2013-03-01 22:11:08'),
(2, 'User', 'User', 1, '2013-03-01 22:11:08', '2013-03-01 22:11:08'),
(3, 'Guest', 'Guest', 0, '2013-03-01 22:11:08', '2013-03-01 22:11:08'),
(4, 'President', 'president', 1, '2013-03-02 09:06:59', '2013-03-02 09:06:59'),
(5, 'Vice President', 'vicepresident', 1, '2013-03-02 09:07:23', '2013-04-10 00:58:57'),
(6, 'Dean', 'dean', 1, '2013-03-02 09:08:47', '2013-03-02 09:08:47'),
(7, 'Department head', 'departmenthead', 1, '2013-03-02 09:09:15', '2013-03-02 09:09:15'),
(8, 'Staff', 'staff', 1, '2013-03-02 09:09:40', '2013-03-02 09:09:40'),
(9, 'Director', 'director', 1, '2013-04-10 02:40:02', '2013-04-10 02:40:02');

-- --------------------------------------------------------

--
-- Table structure for table `user_group_permissions`
--

CREATE TABLE IF NOT EXISTS `user_group_permissions` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_group_id` int(10) unsigned NOT NULL,
  `controller` varchar(50) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `action` varchar(100) CHARACTER SET latin1 COLLATE latin1_general_ci NOT NULL,
  `allowed` tinyint(1) unsigned NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=375 ;

--
-- Dumping data for table `user_group_permissions`
--

INSERT INTO `user_group_permissions` (`id`, `user_group_id`, `controller`, `action`, `allowed`) VALUES
(1, 1, 'Pages', 'display', 1),
(2, 2, 'Pages', 'display', 1),
(3, 3, 'Pages', 'display', 1),
(4, 1, 'UserGroupPermissions', 'index', 1),
(5, 2, 'UserGroupPermissions', 'index', 0),
(6, 3, 'UserGroupPermissions', 'index', 0),
(7, 1, 'UserGroupPermissions', 'update', 1),
(8, 2, 'UserGroupPermissions', 'update', 0),
(9, 3, 'UserGroupPermissions', 'update', 0),
(10, 1, 'UserGroups', 'index', 1),
(11, 2, 'UserGroups', 'index', 0),
(12, 3, 'UserGroups', 'index', 0),
(13, 1, 'UserGroups', 'addGroup', 1),
(14, 2, 'UserGroups', 'addGroup', 0),
(15, 3, 'UserGroups', 'addGroup', 0),
(16, 1, 'UserGroups', 'editGroup', 1),
(17, 2, 'UserGroups', 'editGroup', 0),
(18, 3, 'UserGroups', 'editGroup', 0),
(19, 1, 'UserGroups', 'deleteGroup', 1),
(20, 2, 'UserGroups', 'deleteGroup', 0),
(21, 3, 'UserGroups', 'deleteGroup', 0),
(22, 1, 'Users', 'index', 1),
(23, 2, 'Users', 'index', 0),
(24, 3, 'Users', 'index', 0),
(25, 1, 'Users', 'viewUser', 1),
(26, 2, 'Users', 'viewUser', 0),
(27, 3, 'Users', 'viewUser', 0),
(28, 1, 'Users', 'myprofile', 1),
(29, 2, 'Users', 'myprofile', 1),
(30, 3, 'Users', 'myprofile', 0),
(31, 1, 'Users', 'login', 1),
(32, 2, 'Users', 'login', 1),
(33, 3, 'Users', 'login', 1),
(34, 1, 'Users', 'logout', 1),
(35, 2, 'Users', 'logout', 1),
(36, 3, 'Users', 'logout', 1),
(37, 1, 'Users', 'register', 1),
(38, 2, 'Users', 'register', 1),
(39, 3, 'Users', 'register', 1),
(40, 1, 'Users', 'changePassword', 1),
(41, 2, 'Users', 'changePassword', 1),
(42, 3, 'Users', 'changePassword', 0),
(43, 1, 'Users', 'changeUserPassword', 1),
(44, 2, 'Users', 'changeUserPassword', 0),
(45, 3, 'Users', 'changeUserPassword', 0),
(46, 1, 'Users', 'addUser', 1),
(47, 2, 'Users', 'addUser', 0),
(48, 3, 'Users', 'addUser', 0),
(49, 1, 'Users', 'editUser', 1),
(50, 2, 'Users', 'editUser', 0),
(51, 3, 'Users', 'editUser', 0),
(52, 1, 'Users', 'dashboard', 1),
(53, 2, 'Users', 'dashboard', 1),
(54, 3, 'Users', 'dashboard', 0),
(55, 1, 'Users', 'deleteUser', 1),
(56, 2, 'Users', 'deleteUser', 0),
(57, 3, 'Users', 'deleteUser', 0),
(58, 1, 'Users', 'makeActive', 1),
(59, 2, 'Users', 'makeActive', 0),
(60, 3, 'Users', 'makeActive', 0),
(61, 1, 'Users', 'accessDenied', 1),
(62, 2, 'Users', 'accessDenied', 1),
(63, 3, 'Users', 'accessDenied', 1),
(64, 1, 'Users', 'userVerification', 1),
(65, 2, 'Users', 'userVerification', 1),
(66, 3, 'Users', 'userVerification', 1),
(67, 1, 'Users', 'forgotPassword', 1),
(68, 2, 'Users', 'forgotPassword', 1),
(69, 3, 'Users', 'forgotPassword', 1),
(70, 1, 'Users', 'makeActiveInactive', 1),
(71, 2, 'Users', 'makeActiveInactive', 0),
(72, 3, 'Users', 'makeActiveInactive', 0),
(73, 1, 'Users', 'verifyEmail', 1),
(74, 2, 'Users', 'verifyEmail', 0),
(75, 3, 'Users', 'verifyEmail', 0),
(76, 1, 'Users', 'activatePassword', 1),
(77, 2, 'Users', 'activatePassword', 1),
(78, 3, 'Users', 'activatePassword', 1),
(79, 1, 'Majoractivities', 'index', 1),
(80, 2, 'Majoractivities', 'index', 1),
(81, 3, 'Majoractivities', 'index', 1),
(82, 4, 'Majoractivities', 'index', 1),
(83, 5, 'Majoractivities', 'index', 1),
(84, 6, 'Majoractivities', 'index', 1),
(85, 7, 'Majoractivities', 'index', 1),
(86, 8, 'Majoractivities', 'index', 1),
(87, 1, 'Majoractivities', 'view', 1),
(88, 2, 'Majoractivities', 'view', 1),
(89, 3, 'Majoractivities', 'view', 1),
(90, 4, 'Majoractivities', 'view', 1),
(91, 5, 'Majoractivities', 'view', 1),
(92, 6, 'Majoractivities', 'view', 1),
(93, 7, 'Majoractivities', 'view', 1),
(94, 8, 'Majoractivities', 'view', 1),
(95, 1, 'Majoractivities', 'add', 1),
(96, 2, 'Majoractivities', 'add', 0),
(97, 3, 'Majoractivities', 'add', 0),
(98, 4, 'Majoractivities', 'add', 1),
(99, 5, 'Majoractivities', 'add', 1),
(100, 6, 'Majoractivities', 'add', 1),
(101, 7, 'Majoractivities', 'add', 1),
(102, 8, 'Majoractivities', 'add', 0),
(103, 1, 'Majoractivities', 'approve', 0),
(104, 2, 'Majoractivities', 'approve', 0),
(105, 3, 'Majoractivities', 'approve', 0),
(106, 4, 'Majoractivities', 'approve', 1),
(107, 5, 'Majoractivities', 'approve', 1),
(108, 6, 'Majoractivities', 'approve', 1),
(109, 7, 'Majoractivities', 'approve', 0),
(110, 8, 'Majoractivities', 'approve', 0),
(111, 1, 'Majoractivities', 'makeAproveDisAprove', 0),
(112, 2, 'Majoractivities', 'makeAproveDisAprove', 0),
(113, 3, 'Majoractivities', 'makeAproveDisAprove', 0),
(114, 4, 'Majoractivities', 'makeAproveDisAprove', 1),
(115, 5, 'Majoractivities', 'makeAproveDisAprove', 1),
(116, 6, 'Majoractivities', 'makeAproveDisAprove', 1),
(117, 7, 'Majoractivities', 'makeAproveDisAprove', 0),
(118, 8, 'Majoractivities', 'makeAproveDisAprove', 0),
(119, 1, 'Majoractivities', 'remark', 0),
(120, 2, 'Majoractivities', 'remark', 0),
(121, 3, 'Majoractivities', 'remark', 0),
(122, 4, 'Majoractivities', 'remark', 1),
(123, 5, 'Majoractivities', 'remark', 1),
(124, 6, 'Majoractivities', 'remark', 1),
(125, 7, 'Majoractivities', 'remark', 0),
(126, 8, 'Majoractivities', 'remark', 0),
(127, 1, 'Majoractivities', 'getRelatedSubactivities', 0),
(128, 2, 'Majoractivities', 'getRelatedSubactivities', 0),
(129, 3, 'Majoractivities', 'getRelatedSubactivities', 0),
(130, 4, 'Majoractivities', 'getRelatedSubactivities', 1),
(131, 5, 'Majoractivities', 'getRelatedSubactivities', 1),
(132, 6, 'Majoractivities', 'getRelatedSubactivities', 1),
(133, 7, 'Majoractivities', 'getRelatedSubactivities', 0),
(134, 8, 'Majoractivities', 'getRelatedSubactivities', 0),
(135, 1, 'Majoractivities', 'edit', 0),
(136, 2, 'Majoractivities', 'edit', 0),
(137, 3, 'Majoractivities', 'edit', 0),
(138, 4, 'Majoractivities', 'edit', 1),
(139, 5, 'Majoractivities', 'edit', 1),
(140, 6, 'Majoractivities', 'edit', 1),
(141, 7, 'Majoractivities', 'edit', 0),
(142, 8, 'Majoractivities', 'edit', 0),
(143, 1, 'Majoractivities', 'accomplishment', 0),
(144, 2, 'Majoractivities', 'accomplishment', 0),
(145, 3, 'Majoractivities', 'accomplishment', 0),
(146, 4, 'Majoractivities', 'accomplishment', 1),
(147, 5, 'Majoractivities', 'accomplishment', 1),
(148, 6, 'Majoractivities', 'accomplishment', 1),
(149, 7, 'Majoractivities', 'accomplishment', 1),
(150, 8, 'Majoractivities', 'accomplishment', 0),
(151, 1, 'Majoractivities', 'delete', 0),
(152, 2, 'Majoractivities', 'delete', 0),
(153, 3, 'Majoractivities', 'delete', 0),
(154, 4, 'Majoractivities', 'delete', 0),
(155, 5, 'Majoractivities', 'delete', 0),
(156, 6, 'Majoractivities', 'delete', 0),
(157, 7, 'Majoractivities', 'delete', 0),
(158, 8, 'Majoractivities', 'delete', 0),
(159, 1, 'Objectives', 'add', 1),
(160, 2, 'Objectives', 'add', 1),
(161, 3, 'Objectives', 'add', 1),
(162, 4, 'Objectives', 'add', 1),
(163, 5, 'Objectives', 'add', 1),
(164, 6, 'Objectives', 'add', 1),
(165, 7, 'Objectives', 'add', 1),
(166, 8, 'Objectives', 'add', 1),
(167, 1, 'Reports', 'report', 1),
(168, 2, 'Reports', 'report', 1),
(169, 3, 'Reports', 'report', 1),
(170, 4, 'Reports', 'report', 1),
(171, 5, 'Reports', 'report', 1),
(172, 6, 'Reports', 'report', 1),
(173, 7, 'Reports', 'report', 1),
(174, 8, 'Reports', 'report', 1),
(175, 1, 'Reports', 'download', 1),
(176, 2, 'Reports', 'download', 1),
(177, 3, 'Reports', 'download', 1),
(178, 4, 'Reports', 'download', 1),
(179, 5, 'Reports', 'download', 1),
(180, 6, 'Reports', 'download', 1),
(181, 7, 'Reports', 'download', 1),
(182, 8, 'Reports', 'download', 1),
(183, 1, 'Targets', 'delete', 0),
(184, 2, 'Targets', 'delete', 0),
(185, 3, 'Targets', 'delete', 0),
(186, 4, 'Targets', 'delete', 0),
(187, 5, 'Targets', 'delete', 1),
(188, 6, 'Targets', 'delete', 0),
(189, 7, 'Targets', 'delete', 0),
(190, 8, 'Targets', 'delete', 0),
(191, 1, 'Targets', 'actual', 0),
(192, 2, 'Targets', 'actual', 0),
(193, 3, 'Targets', 'actual', 0),
(194, 4, 'Targets', 'actual', 1),
(195, 5, 'Targets', 'actual', 1),
(196, 6, 'Targets', 'actual', 1),
(197, 7, 'Targets', 'actual', 1),
(198, 8, 'Targets', 'actual', 0),
(199, 1, 'Targets', 'edit', 0),
(200, 2, 'Targets', 'edit', 0),
(201, 3, 'Targets', 'edit', 0),
(202, 4, 'Targets', 'edit', 1),
(203, 5, 'Targets', 'edit', 1),
(204, 6, 'Targets', 'edit', 1),
(205, 7, 'Targets', 'edit', 1),
(206, 8, 'Targets', 'edit', 0),
(207, 1, 'Targets', 'add', 0),
(208, 2, 'Targets', 'add', 0),
(209, 3, 'Targets', 'add', 0),
(210, 4, 'Targets', 'add', 1),
(211, 5, 'Targets', 'add', 1),
(212, 6, 'Targets', 'add', 1),
(213, 7, 'Targets', 'add', 1),
(214, 8, 'Targets', 'add', 0),
(215, 1, 'Targets', 'view', 1),
(216, 2, 'Targets', 'view', 1),
(217, 3, 'Targets', 'view', 1),
(218, 4, 'Targets', 'view', 1),
(219, 5, 'Targets', 'view', 1),
(220, 6, 'Targets', 'view', 1),
(221, 7, 'Targets', 'view', 1),
(222, 8, 'Targets', 'view', 1),
(223, 1, 'Targets', 'index', 1),
(224, 2, 'Targets', 'index', 1),
(225, 3, 'Targets', 'index', 1),
(226, 4, 'Targets', 'index', 1),
(227, 5, 'Targets', 'index', 1),
(228, 6, 'Targets', 'index', 1),
(229, 7, 'Targets', 'index', 1),
(230, 8, 'Targets', 'index', 1),
(231, 1, 'News', 'view', 1),
(232, 2, 'News', 'view', 1),
(233, 3, 'News', 'view', 1),
(234, 4, 'News', 'view', 1),
(235, 5, 'News', 'view', 1),
(236, 6, 'News', 'view', 1),
(237, 7, 'News', 'view', 1),
(238, 8, 'News', 'view', 1),
(239, 1, 'News', 'index', 1),
(240, 2, 'News', 'index', 1),
(241, 3, 'News', 'index', 1),
(242, 4, 'News', 'index', 1),
(243, 5, 'News', 'index', 1),
(244, 6, 'News', 'index', 1),
(245, 7, 'News', 'index', 1),
(246, 8, 'News', 'index', 1),
(247, 1, 'Notifications', 'view', 1),
(248, 2, 'Notifications', 'view', 1),
(249, 3, 'Notifications', 'view', 1),
(250, 4, 'Notifications', 'view', 1),
(251, 5, 'Notifications', 'view', 1),
(252, 6, 'Notifications', 'view', 1),
(253, 7, 'Notifications', 'view', 1),
(254, 8, 'Notifications', 'view', 1),
(255, 1, 'Notifications', 'index', 1),
(256, 2, 'Notifications', 'index', 1),
(257, 3, 'Notifications', 'index', 1),
(258, 4, 'Notifications', 'index', 1),
(259, 5, 'Notifications', 'index', 1),
(260, 6, 'Notifications', 'index', 1),
(261, 7, 'Notifications', 'index', 1),
(262, 8, 'Notifications', 'index', 1),
(263, 1, 'Offices', 'cascadeObjective', 0),
(264, 2, 'Offices', 'cascadeObjective', 0),
(265, 3, 'Offices', 'cascadeObjective', 0),
(266, 4, 'Offices', 'cascadeObjective', 1),
(267, 5, 'Offices', 'cascadeObjective', 1),
(268, 6, 'Offices', 'cascadeObjective', 1),
(269, 7, 'Offices', 'cascadeObjective', 0),
(270, 8, 'Offices', 'cascadeObjective', 0),
(271, 1, 'Organizations', 'index', 0),
(272, 2, 'Organizations', 'index', 0),
(273, 3, 'Organizations', 'index', 0),
(274, 4, 'Organizations', 'index', 1),
(275, 5, 'Organizations', 'index', 1),
(276, 6, 'Organizations', 'index', 1),
(277, 7, 'Organizations', 'index', 1),
(278, 8, 'Organizations', 'index', 1),
(279, 1, 'Organizations', 'view', 0),
(280, 2, 'Organizations', 'view', 0),
(281, 3, 'Organizations', 'view', 0),
(282, 4, 'Organizations', 'view', 1),
(283, 5, 'Organizations', 'view', 1),
(284, 6, 'Organizations', 'view', 1),
(285, 7, 'Organizations', 'view', 1),
(286, 8, 'Organizations', 'view', 1),
(287, 1, 'Subactivities', 'edit', 0),
(288, 2, 'Subactivities', 'edit', 0),
(289, 3, 'Subactivities', 'edit', 0),
(290, 4, 'Subactivities', 'edit', 1),
(291, 5, 'Subactivities', 'edit', 1),
(292, 6, 'Subactivities', 'edit', 1),
(293, 7, 'Subactivities', 'edit', 1),
(294, 8, 'Subactivities', 'edit', 1),
(295, 1, 'Subactivities', 'remark', 0),
(296, 2, 'Subactivities', 'remark', 0),
(297, 3, 'Subactivities', 'remark', 0),
(298, 4, 'Subactivities', 'remark', 1),
(299, 5, 'Subactivities', 'remark', 1),
(300, 6, 'Subactivities', 'remark', 1),
(301, 7, 'Subactivities', 'remark', 1),
(302, 8, 'Subactivities', 'remark', 0),
(303, 1, 'Subactivities', 'makeAproveDisAprove', 0),
(304, 2, 'Subactivities', 'makeAproveDisAprove', 0),
(305, 3, 'Subactivities', 'makeAproveDisAprove', 0),
(306, 4, 'Subactivities', 'makeAproveDisAprove', 1),
(307, 5, 'Subactivities', 'makeAproveDisAprove', 1),
(308, 6, 'Subactivities', 'makeAproveDisAprove', 1),
(309, 7, 'Subactivities', 'makeAproveDisAprove', 1),
(310, 8, 'Subactivities', 'makeAproveDisAprove', 0),
(311, 1, 'Subactivities', 'approve', 0),
(312, 2, 'Subactivities', 'approve', 0),
(313, 3, 'Subactivities', 'approve', 0),
(314, 4, 'Subactivities', 'approve', 1),
(315, 5, 'Subactivities', 'approve', 1),
(316, 6, 'Subactivities', 'approve', 1),
(317, 7, 'Subactivities', 'approve', 1),
(318, 8, 'Subactivities', 'approve', 0),
(319, 1, 'Subactivities', 'add', 1),
(320, 2, 'Subactivities', 'add', 1),
(321, 3, 'Subactivities', 'add', 1),
(322, 4, 'Subactivities', 'add', 1),
(323, 5, 'Subactivities', 'add', 1),
(324, 6, 'Subactivities', 'add', 1),
(325, 7, 'Subactivities', 'add', 1),
(326, 8, 'Subactivities', 'add', 1),
(327, 1, 'Subactivities', 'view', 1),
(328, 2, 'Subactivities', 'view', 1),
(329, 3, 'Subactivities', 'view', 1),
(330, 4, 'Subactivities', 'view', 1),
(331, 5, 'Subactivities', 'view', 1),
(332, 6, 'Subactivities', 'view', 1),
(333, 7, 'Subactivities', 'view', 1),
(334, 8, 'Subactivities', 'view', 1),
(335, 1, 'Subactivities', 'index', 1),
(336, 2, 'Subactivities', 'index', 1),
(337, 3, 'Subactivities', 'index', 1),
(338, 4, 'Subactivities', 'index', 1),
(339, 5, 'Subactivities', 'index', 1),
(340, 6, 'Subactivities', 'index', 1),
(341, 7, 'Subactivities', 'index', 1),
(342, 8, 'Subactivities', 'index', 1),
(343, 1, 'Majoractivities', 'exportxls', 1),
(344, 2, 'Majoractivities', 'exportxls', 1),
(345, 3, 'Majoractivities', 'exportxls', 1),
(346, 4, 'Majoractivities', 'exportxls', 1),
(347, 5, 'Majoractivities', 'exportxls', 1),
(348, 6, 'Majoractivities', 'exportxls', 1),
(349, 7, 'Majoractivities', 'exportxls', 1),
(350, 8, 'Majoractivities', 'exportxls', 1),
(351, 4, 'Pages', 'display', 1),
(352, 5, 'Pages', 'display', 1),
(353, 6, 'Pages', 'display', 1),
(354, 7, 'Pages', 'display', 1),
(355, 8, 'Pages', 'display', 1),
(356, 1, 'Objectives', 'exportxls', 1),
(357, 2, 'Objectives', 'exportxls', 1),
(358, 3, 'Objectives', 'exportxls', 1),
(359, 4, 'Objectives', 'exportxls', 1),
(360, 5, 'Objectives', 'exportxls', 1),
(361, 6, 'Objectives', 'exportxls', 1),
(362, 7, 'Objectives', 'exportxls', 1),
(363, 8, 'Objectives', 'exportxls', 1),
(364, 9, 'Offices', 'cascadeObjective', 1),
(365, 9, 'Pages', 'display', 1),
(366, 1, 'Periods', 'index', 1),
(367, 2, 'Periods', 'index', 1),
(368, 3, 'Periods', 'index', 1),
(369, 4, 'Periods', 'index', 1),
(370, 5, 'Periods', 'index', 1),
(371, 6, 'Periods', 'index', 1),
(372, 7, 'Periods', 'index', 1),
(373, 8, 'Periods', 'index', 1),
(374, 9, 'Periods', 'index', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `behaviorevaluations`
--
ALTER TABLE `behaviorevaluations`
  ADD CONSTRAINT `behaviorevaluations_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `behaviorevaluations_ibfk_2` FOREIGN KEY (`behaviorevaluationcriteria_id`) REFERENCES `behaviorevaluationcriterias` (`id`),
  ADD CONSTRAINT `behaviorevaluations_ibfk_3` FOREIGN KEY (`evaluationtype_id`) REFERENCES `evaluationtypes` (`id`),
  ADD CONSTRAINT `behaviorevaluations_ibfk_4` FOREIGN KEY (`evaluationrank_id`) REFERENCES `evaluationranks` (`id`),
  ADD CONSTRAINT `behaviorevaluations_ibfk_5` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`);

--
-- Constraints for table `initiatives_implimenters`
--
ALTER TABLE `initiatives_implimenters`
  ADD CONSTRAINT `initiatives_implimenters_ibfk_1` FOREIGN KEY (`initiative_id`) REFERENCES `initiatives` (`id`),
  ADD CONSTRAINT `initiatives_implimenters_ibfk_2` FOREIGN KEY (`implimenter_id`) REFERENCES `offices` (`id`);

--
-- Constraints for table `initiatives_objectives`
--
ALTER TABLE `initiatives_objectives`
  ADD CONSTRAINT `initiatives_objectives_ibfk_1` FOREIGN KEY (`initiative_id`) REFERENCES `initiatives` (`id`),
  ADD CONSTRAINT `initiatives_objectives_ibfk_2` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`);

--
-- Constraints for table `majoractivities`
--
ALTER TABLE `majoractivities`
  ADD CONSTRAINT `majoractivities_ibfk_1` FOREIGN KEY (`measure_id`) REFERENCES `measures` (`id`),
  ADD CONSTRAINT `majoractivities_ibfk_2` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`);

--
-- Constraints for table `majoractivities_users`
--
ALTER TABLE `majoractivities_users`
  ADD CONSTRAINT `majoractivities_users_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `majoractivities` (`id`),
  ADD CONSTRAINT `majoractivities_users_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `measures`
--
ALTER TABLE `measures`
  ADD CONSTRAINT `measures_ibfk_1` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`),
  ADD CONSTRAINT `measures_ibfk_2` FOREIGN KEY (`unit_id`) REFERENCES `units` (`id`),
  ADD CONSTRAINT `measures_ibfk_3` FOREIGN KEY (`threshold_id`) REFERENCES `thresholds` (`id`),
  ADD CONSTRAINT `measures_ibfk_4` FOREIGN KEY (`frequency_id`) REFERENCES `frequencies` (`id`);

--
-- Constraints for table `objectives`
--
ALTER TABLE `objectives`
  ADD CONSTRAINT `objectives_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`),
  ADD CONSTRAINT `objectives_ibfk_2` FOREIGN KEY (`perspective_id`) REFERENCES `perspectives` (`id`);

--
-- Constraints for table `objectives_offices`
--
ALTER TABLE `objectives_offices`
  ADD CONSTRAINT `objectives_offices_ibfk_2` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`),
  ADD CONSTRAINT `objectives_offices_ibfk_3` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`);

--
-- Constraints for table `offices`
--
ALTER TABLE `offices`
  ADD CONSTRAINT `offices_ibfk_1` FOREIGN KEY (`organization_id`) REFERENCES `organizations` (`id`);

--
-- Constraints for table `periods`
--
ALTER TABLE `periods`
  ADD CONSTRAINT `periods_ibfk_1` FOREIGN KEY (`frequency_id`) REFERENCES `frequencies` (`id`);

--
-- Constraints for table `projects_tasks`
--
ALTER TABLE `projects_tasks`
  ADD CONSTRAINT `projects_tasks_ibfk_1` FOREIGN KEY (`project_id`) REFERENCES `projects` (`id`);

--
-- Constraints for table `subactivities`
--
ALTER TABLE `subactivities`
  ADD CONSTRAINT `subactivities_ibfk_1` FOREIGN KEY (`majoractivity_id`) REFERENCES `majoractivities` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `subactivities_ibfk_2` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`) ON DELETE NO ACTION ON UPDATE CASCADE;

--
-- Constraints for table `targets`
--
ALTER TABLE `targets`
  ADD CONSTRAINT `targets_ibfk_1` FOREIGN KEY (`measure_id`) REFERENCES `measures` (`id`),
  ADD CONSTRAINT `targets_ibfk_2` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`),
  ADD CONSTRAINT `targets_ibfk_3` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `targets_ibfk_4` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`);

--
-- Constraints for table `themes_objectives`
--
ALTER TABLE `themes_objectives`
  ADD CONSTRAINT `themes_objectives_ibfk_3` FOREIGN KEY (`theme_id`) REFERENCES `themes` (`id`) ON UPDATE NO ACTION,
  ADD CONSTRAINT `themes_objectives_ibfk_4` FOREIGN KEY (`objective_id`) REFERENCES `objectives` (`id`) ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
