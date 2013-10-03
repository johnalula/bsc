-- phpMyAdmin SQL Dump
-- version 3.4.10.1deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jun 20, 2013 at 06:38 PM
-- Server version: 5.5.31
-- PHP Version: 5.3.10-1ubuntu3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ambo`
--

-- --------------------------------------------------------

--
-- Table structure for table `activities`
--

CREATE TABLE IF NOT EXISTS `activities` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity` tinytext NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `ways_of_evaluation` tinytext NOT NULL,
  `precondition_from_office` tinytext NOT NULL,
  `perspective_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `objective_id` int(11) DEFAULT NULL,
  `measure_id` int(11) DEFAULT NULL,
  `office_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `perspective_id` (`perspective_id`),
  KEY `period_id` (`period_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `activities`
--

INSERT INTO `activities` (`id`, `activity`, `weight`, `ways_of_evaluation`, `precondition_from_office`, `perspective_id`, `period_id`, `year`, `objective_id`, `measure_id`, `office_id`) VALUES
(5, 'á‰ á‰°áˆˆá‹«á‹© áˆµáˆ« áŠ­ááˆŽá‰½ á‹¨áˆšá‹˜áŒ‹áŒ á•áˆ®áŒ€áŠ­á‰¶á‰½ áŠ¨á‹©áŠ’á‰¨áˆ­áˆ²á‰²á‹‰ ááˆ‹áŒŽá‰µ áŠ áŠ•áŒ»áˆ­ áˆ˜áˆ†áŠ“á‰¸á‹‰áŠ• áŠ­á‰µá‰µáˆ áˆ›á‹µáˆ¨áŒ á¢', 16, '-á‰ áŠ áŠ«áˆ á‰ áˆ˜áŒˆáŠ˜á‰µ\r\n-á‰ áˆµáˆáŠ­ \r\n-á‰ á‹°á‰¥á‹³á‰¤', '- áˆˆáˆµáˆ«á‹‰ á‹¨áˆšá‹«áˆµáˆáˆáŒ‰á‰µáŠ• áŒá‰¥áŠ á‰¶á‰½ áˆ›áˆŸáˆ‹á‰µ\r\n- áŠ¨áŠ á‰…áˆ á‰ áˆ‹á‹­ áˆ†áŠá‹‰áŠ• á‰½áŒáˆ­ áˆ˜áá‰³á‰µ\r\n- áŠ­á‰µá‰µáˆáŠ“ á‹µáŒ‹á áˆ˜á‹µáˆ¨áŒ\r\n-áˆµáˆáŒ ', 4, 1, 2005, 6, 7, 6),
(6, 'áŠ­á‰µá‰µáˆ á‹¨á‰°á‹°áˆ¨áŒˆá‰£á‰¸á‹‰áŠ• á•áˆ®áŒ€áŠ­á‰¶á‰½ áˆ˜áŒˆáˆáŒˆáˆáŠ“ áˆªá–áˆ­á‰µ áˆ›á‹µáˆ¨áŒ á¢', 14, '- áŠ¨áˆšáˆ˜áˆˆáŠ¨á‰³á‰¸á‹‰ áŠ áŠ«áˆ‹á‰µ áŒ‹áˆ­ á‰ áˆ˜á‹ˆá‹«á‹¨á‰µ\r\n-á‹¨á‰°á‹˜áŒ‹áŒ€á‹‰áŠ• á‹¨á•áˆ®áŒ€áŠ­á‰¶á‰½ áˆ°áŠá‹µ á‰ áˆ˜áˆ˜áˆáŠ¨á‰µ\r\n', '- áˆˆáˆµáˆ«á‹‰ á‹¨áˆšá‹«áˆµáˆáˆáŒ‰á‰µáŠ• áŒá‰¥áŠ á‰¶á‰½ áˆ›áˆŸáˆ‹á‰µ\r\n- áŠ­á‰µá‰µáˆáŠ“ á‹µáŒ‹á áˆ˜á‹µáˆ¨áŒ\r\n- áŠ¨áŠ á‰…áˆ á‰ áˆ‹á‹­ áˆ†áŠá‹‰áŠ• á‰½áŒáˆ­ áˆ˜áá‰³á‰µ\r\n-áˆµáˆáŒ áŠ“', 4, 1, 2005, 6, 7, 6),
(7, 'conduct need assessement', 25, '-document produced', '-bedget allocation\r\n-man power ', 4, 0, 0000, 6, 10, 7),
(9, 'activity one', 33, 'evaluations', 'preconditions', 4, 1, 2005, 5, 3, 9),
(10, 'activity two', 22, 'evaluations', 'preconditions', 4, 1, 2005, 5, 3, 9);

-- --------------------------------------------------------

--
-- Table structure for table `activitievaluations`
--

CREATE TABLE IF NOT EXISTS `activitievaluations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `rank` int(11) NOT NULL,
  `in_quality` tinytext NOT NULL,
  `in_time` tinytext NOT NULL,
  `in_quntity` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `activitievaluations`
--

INSERT INTO `activitievaluations` (`id`, `activity_id`, `rank`, `in_quality`, `in_time`, `in_quntity`) VALUES
(1, 5, 4, 'á‹¨áˆšá‰€áˆ­á‰ á‹‰ á‹¨áŠ­á‰µá‰µáˆ áˆªá–áˆ­á‰µ áŠ áŠ•á‹µ áŠ¥áˆ­áˆ›á‰µ áŠ«áˆˆá‹‰', 'á‰ áˆ³áˆáŠ•á‰³á‹Š á‹¨áˆµáˆ« áŠ¥á‰…á‹µ áˆ˜áˆ°áˆ¨á‰µ', 'á‰ áˆ³áˆáŠ•á‰³á‹Š á‹¨áŠ­á‰µá‰µáˆ á‹•á‰…á‹µ á‹¨á‰°áŠ«á‰°á‰±á‰µ á‰ áˆ™áˆ‰'),
(2, 5, 3, 'áŠ­á‰µá‰µáˆ áˆªá–áˆ­á‰± á‰ áˆáˆˆá‰µ áŠ¥áˆ­áˆ›á‰µ áŠ«áˆˆáˆ', 'áŠ¨áˆ³áˆáŠ•á‰³á‹Š á‹•á‰…á‹µ áŠ áŠ•á‹µ á‰€áŠ• áŠ«áˆˆáˆ', 'á‰ áˆ³áˆáŠ•á‰³á‹Š á‹¨áŠ­á‰µá‰µáˆ á‹•á‰…á‹µ áŠ¨á‰°áŠ«á‰°á‰±á‰µ 90% áŠ¨áˆ¸áˆáŠ'),
(3, 5, 2, 'áŠ­á‰µá‰µáˆ áˆªá–áˆ­á‰± á‰ áˆ¶áˆµá‰µ áŠ¥áˆ­áˆ›á‰µ áŠ«áˆˆáˆ\r\n', 'áŠ¨áˆ³áˆáŠ•á‰³á‹Š á‹•á‰…á‹µ áˆáˆˆá‰µ á‰€áŠ• áŠ«áˆˆáˆ', 'á‰ áˆ³áˆáŠ•á‰³á‹Š á‹¨áŠ­á‰µá‰µáˆ á‹•á‰…á‹µ áŠ¨á‰°áŠ«á‰°á‰±á‰µ 80% áŠ¨áˆ¸áˆáŠ'),
(4, 5, 1, 'áŠ­á‰µá‰µáˆ áˆªá–áˆ­á‰± á‰ áŠ áˆ«á‰µ áŠ¥áˆ­áˆ›á‰µ áŠ«áˆˆáˆ', 'áŠ¨áˆ³áˆáŠ•á‰³á‹Š á‹•á‰…á‹µ áˆ¶áˆµá‰µ á‰€áŠ• áŠ«áˆˆáˆ', 'á‰ áˆ³áˆáŠ•á‰³á‹Š á‹¨áŠ­á‰µá‰µáˆ á‹•á‰…á‹µ áŠ¨á‰°áŠ«á‰°á‰±á‰µ 70% áŠ¨áˆ¸áˆáŠ'),
(5, 6, 4, 'á‹¨á‰€áˆ¨á‰ á‹‰ á‹¨áŒáˆáŒˆáˆ› á‹¶áŠ­áˆ˜áŠ•á‰µ áˆˆáŠ áŠ•á‹µ áŒŠá‹œ áŠ¥áˆ­áˆ›á‰µ á‹¨áˆšáˆµáˆáˆáŒˆá‹‰ áŠ¨áˆ†áŠ ', 'á‹¨áŒáˆáŒˆáˆ›á‹‰ áˆªá–áˆ­á‰µ áŠ¥áŠ•á‹²á‰€áˆ­á‰¥ á‰ á‹°á‰¥á‹³á‰¤ á‰ á‰°áŒ á‹¨á‰€á‰ á‰µ áŒŠá‹œ á‹‰áˆµáŒ¥', 'áŒáˆáŒˆáˆ›á‹‰ á‰ á‰°áˆˆá‹«á‹© á‹¨áˆµáˆ« áŠ­ááˆŽá‰½ áŠ¥á‹¨á‰°áŠ«áˆ„á‹± á‹«áˆ‰á‰µáŠ• á‰ áˆ™áˆ‰ á‹«áŠ«á‰³á‰° áŠ¨áˆ†áŠ'),
(6, 6, 3, 'á‹¨á‰€áˆ¨á‰ á‹‰ á‹¨áŒáˆáŒˆáˆ› á‹¶áŠ­áˆ˜áŠ•á‰µ áˆˆáˆáˆˆá‰µ áŒŠá‹œ áŠ¥áˆ­áˆ›á‰µ á‹¨áˆšáˆµáˆáˆáŒˆá‹‰ áŠ¨áˆ†áŠ ', 'á‹¨áŒáˆáŒˆáˆ›á‹‰ áˆªá–áˆ­á‰µ áŠ¥áŠ•á‹²á‰€áˆ­á‰¥ á‰ á‹°á‰¥á‹³á‰¤ áŠ¨á‰°áŒ á‹¨á‰€á‰ á‰µ 3á‰€áŠ• áŠ«áˆˆáˆ', 'áŒáˆáŒˆáˆ›á‹‰ á‰ á‰°áˆˆá‹«á‹© á‹¨áˆµáˆ« áŠ­ááˆŽá‰½ áŠ¥á‹¨á‰°áŠ«áˆ„á‹± áŠ«áˆ‰á‰µ 90%á‹«áŠ«á‰³á‰° áŠ¨áˆ†áŠ'),
(7, 6, 2, 'á‹¨á‰€áˆ¨á‰ á‹‰ á‹¨áŒáˆáŒˆáˆ› á‹¶áŠ­áˆ˜áŠ•á‰µ áˆˆáˆ¶áˆµá‰µ áŒŠá‹œ áŠ¥áˆ­áˆ›á‰µ á‹¨áˆšáˆµáˆáˆáŒˆá‹‰ áŠ¨áˆ†áŠ \r\n', 'á‹¨áŒáˆáŒˆáˆ›á‹‰ áˆªá–áˆ­á‰µ áŠ¥áŠ•á‹²á‰€áˆ­á‰¥ á‰ á‹°á‰¥á‹³á‰¤ áŠ¨á‰°áŒ á‹¨á‰€á‰ á‰µ 5á‰€áŠ• áŠ«áˆˆáˆ', 'áŒáˆáŒˆáˆ›á‹‰ á‰ á‰°áˆˆá‹«á‹© á‹¨áˆµáˆ« áŠ­ááˆŽá‰½ áŠ¥á‹¨á‰°áŠ«áˆ„á‹± áŠ«áˆ‰á‰µ 80%á‹«áŠ«á‰³á‰° áŠ¨áˆ†áŠ'),
(8, 6, 1, 'á‹¨á‰€áˆ¨á‰ á‹‰ á‹¨áŒáˆáŒˆáˆ› á‹¶áŠ­áˆ˜áŠ•á‰µ áˆˆáŠ áˆ«á‰µ áŒŠá‹œ áŠ¥áˆ­áˆ›á‰µ á‹¨áˆšáˆµáˆáˆáŒˆá‹‰ áŠ¨áˆ†áŠ \r\n', 'á‹¨áŒáˆáŒˆáˆ›á‹‰ áˆªá–áˆ­á‰µ áŠ¥áŠ•á‹²á‰€áˆ­á‰¥ á‰ á‹°á‰¥á‹³á‰¤ áŠ¨á‰°áŒ á‹¨á‰€á‰ á‰µ 7á‰€áŠ• áŠ«áˆˆáˆ', 'áŒáˆáŒˆáˆ›á‹‰ á‰ á‰°áˆˆá‹«á‹© á‹¨áˆµáˆ« áŠ­ááˆŽá‰½ áŠ¥á‹¨á‰°áŠ«áˆ„á‹± áŠ«áˆ‰á‰µ 70%á‹«áŠ«á‰³á‰° áŠ¨áˆ†áŠ'),
(9, 7, 4, '-error free document', '-on time accomplishement', 'a bove 90%'),
(10, 7, 3, 'minore revission ', 'submission after a weak dead line', 'b/n 80%-89%'),
(11, 7, 2, 'major revission', '2 weaks leat', '65%-79%'),
(12, 7, 1, 'poor quality', 'after 3 weaks', 'below 65%');

-- --------------------------------------------------------

--
-- Table structure for table `activityevaluationvalues`
--

CREATE TABLE IF NOT EXISTS `activityevaluationvalues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `activity_id` int(11) NOT NULL,
  `office_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `period_id` int(11) NOT NULL,
  `self` float NOT NULL,
  `pear` float NOT NULL,
  `head` float NOT NULL,
  `student` float NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `office_id` (`office_id`),
  KEY `user_id` (`user_id`),
  KEY `period_id` (`period_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `activityevaluationvalues`
--

INSERT INTO `activityevaluationvalues` (`id`, `activity_id`, `office_id`, `user_id`, `year`, `period_id`, `self`, `pear`, `head`, `student`) VALUES
(3, 5, 6, 3, 2005, 1, 3, 2, 2, 0),
(4, 6, 6, 3, 2005, 1, 2, 3, 4, 0),
(5, 7, 6, 3, 2005, 1, 3, 3, 3, 0),
(6, 10, 9, 8, 2005, 1, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `acts`
--

CREATE TABLE IF NOT EXISTS `acts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `perspective_id` int(11) NOT NULL,
  `activity` tinytext NOT NULL,
  `weight` decimal(10,0) NOT NULL,
  `ways_of_evaluation` tinytext NOT NULL,
  `precondition_from_office` tinytext NOT NULL,
  `objective_id` int(11) DEFAULT NULL,
  `measure_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `perspective_id` (`perspective_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `behaveiorevaluations`
--

CREATE TABLE IF NOT EXISTS `behaveiorevaluations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `office_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `self` int(11) NOT NULL,
  `pear` int(11) NOT NULL,
  `head` int(11) NOT NULL,
  `student` int(11) NOT NULL,
  `year` year(4) NOT NULL,
  `period_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `office_id` (`office_id`),
  KEY `period_id` (`period_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `behaveiorevaluations`
--

INSERT INTO `behaveiorevaluations` (`id`, `office_id`, `user_id`, `self`, `pear`, `head`, `student`, `year`, `period_id`) VALUES
(4, 6, 3, 2, 4, 3, 0, 2005, 1);

-- --------------------------------------------------------

--
-- Table structure for table `evaluationranks`
--

CREATE TABLE IF NOT EXISTS `evaluationranks` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `rank` int(11) NOT NULL,
  `value` int(11) NOT NULL,
  `description` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `evaluationranks`
--

INSERT INTO `evaluationranks` (`id`, `rank`, `value`, `description`) VALUES
(1, 1, 23, 'rwer');

-- --------------------------------------------------------

--
-- Table structure for table `evaluationvalues`
--

CREATE TABLE IF NOT EXISTS `evaluationvalues` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `is_acadamic` int(11) NOT NULL,
  `type` varchar(11) NOT NULL,
  `value` int(11) NOT NULL,
  `remark` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `evaluationvalues`
--

INSERT INTO `evaluationvalues` (`id`, `is_acadamic`, `type`, `value`, `remark`) VALUES
(1, 0, 'self', 25, 'this is self'),
(2, 0, 'pear', 38, 'this is pear'),
(3, 0, '0', 38, 'this is head');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `initiatives`
--

INSERT INTO `initiatives` (`id`, `created`, `modified`, `initiative_name`, `initiative_description`, `initiative_importance`, `deliverable`, `budget`, `start_date`, `end_date`) VALUES
(3, '2013-03-22 16:18:46', '2013-03-22 17:01:06', 'initiative one', 'ggdd', 'gdsgdsg', 'fsdfsd', 32434, '2013-03-22', '2013-03-22'),
(4, '2013-04-27 18:15:31', '2013-04-27 18:15:31', 'initiative two', 'dfd', 'dfdf', 'dfd', 33, '2013-04-27', '2013-04-27');

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
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=287 ;

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
(155, 4, 'cc26941680c48965a3d74adcd7b61233', '2 hours', 0, '2013-04-13 11:41:47', '2013-04-13 13:41:47'),
(154, 4, '9acb7e0d6f3dd766bf632181661ccd48', '2 hours', 0, '2013-04-13 11:41:01', '2013-04-13 13:41:01'),
(153, 4, '905f06230a22420f16bb4a2cf31e9114', '2 hours', 0, '2013-04-13 11:30:53', '2013-04-13 13:30:53'),
(40, 2, 'd9060a3447946fc4ffd35927e31b8a9f', '2 weeks', 0, '2013-03-05 02:47:29', '2013-03-19 02:47:29'),
(41, 2, '2dd791cc9515dc8a2f2076ff84980465', '2 weeks', 0, '2013-03-05 03:02:08', '2013-03-19 03:02:08'),
(42, 2, '7f2523d3c6d7028d037236de039f0513', '2 weeks', 1, '2013-03-05 03:15:48', '2013-03-19 03:15:48'),
(43, 2, '7b0fd245241573d735e001f0020a9762', '2 weeks', 0, '2013-03-05 03:43:23', '2013-03-19 03:43:23'),
(44, 2, '6fdf92f5d67d1617a94d0c77a951dd9e', '2 weeks', 1, '2013-03-05 03:53:31', '2013-03-19 03:53:31'),
(46, 2, '6436fe36026633d02e1e4df5f7fedde7', '2 weeks', 0, '2013-03-05 06:17:58', '2013-03-19 06:17:58'),
(148, 4, '00856d78761e95d346e92ee7c5399d45', '2 hours', 0, '2013-04-11 12:15:45', '2013-04-11 14:15:45'),
(49, 2, '500053182686f690b5e36389300f277f', '2 weeks', 0, '2013-03-05 06:47:08', '2013-03-19 06:47:08'),
(146, 2, '5d180c7b66651ad4c3baa41257121832', '2 hours', 0, '2013-04-11 09:30:39', '2013-04-11 11:30:39'),
(145, 2, 'ebeea294ac70efdb20438c5be8dcffd9', '2 hours', 1, '2013-04-11 08:32:30', '2013-04-11 10:32:30'),
(136, 4, '74b21b82f7d244d6008a1c658e5c3912', '2 hours', 0, '2013-04-10 02:50:10', '2013-04-10 04:50:10'),
(135, 5, 'ab5bd880a51c37e81b44b057a18067ff', '2 hours', 0, '2013-04-10 02:43:47', '2013-04-10 04:43:47'),
(286, 3, 'da2e7d327f4d371bca9e3dc814874232', '2 hours', 0, '2013-06-20 11:29:41', '2013-06-20 13:29:41'),
(285, 3, 'b0db6d98b240e53f0dafdf8a5dfc882d', '2 hours', 0, '2013-06-20 11:28:07', '2013-06-20 13:28:07'),
(284, 3, 'ac7e7138ef0348f3a181434b24ffe776', '2 hours', 1, '2013-06-20 10:42:17', '2013-06-20 12:42:17'),
(283, 3, '6e81000997dec4cae62f981125b094a4', '2 hours', 0, '2013-06-20 08:25:29', '2013-06-20 10:25:29'),
(282, 3, 'ebd288ee9cbe0e5dfeae989fbd208c5a', '2 hours', 1, '2013-06-20 07:12:32', '2013-06-20 09:12:32'),
(281, 3, '0eb68e9f4343722eb9a2e9a68aa1a314', '2 hours', 0, '2013-06-20 05:06:58', '2013-06-20 07:06:58'),
(280, 3, 'ba2d288482305644901cc583fc8d9c1e', '2 hours', 0, '2013-06-20 04:50:25', '2013-06-20 06:50:25'),
(279, 3, 'ee498b83ca6fb1055acbc1eca273f93f', '2 hours', 0, '2013-06-20 02:28:22', '2013-06-20 04:28:22'),
(278, 9, 'f212439be336b004ada9cafcb660d481', '2 hours', 0, '2013-06-20 02:26:08', '2013-06-20 04:26:08'),
(277, 3, 'e79e25f763a475e9b308845fbc5dff80', '2 hours', 0, '2013-06-20 02:25:33', '2013-06-20 04:25:33'),
(276, 3, '039f5c9971c26cb2ccd437f8ec714c69', '2 hours', 0, '2013-06-20 02:23:55', '2013-06-20 04:23:55'),
(275, 3, 'a8a48bff931917cf02598c88b8f5facf', '2 hours', 0, '2013-06-20 02:20:35', '2013-06-20 04:20:35'),
(274, 3, '52d818284105006508d8f63e305d9e28', '2 hours', 0, '2013-06-19 10:34:01', '2013-06-19 12:34:01'),
(273, 3, '54ebb5b515c4b4b8c088cfe1e18633ca', '2 hours', 0, '2013-06-19 10:27:01', '2013-06-19 12:27:01'),
(272, 3, 'ec71c455c99ad09200fd0d0e7ed28570', '2 hours', 0, '2013-06-19 09:57:06', '2013-06-19 11:57:06'),
(271, 3, '9e84ec5ccce8f42c1ed76d45acab0c91', '2 hours', 1, '2013-06-19 08:35:49', '2013-06-19 10:35:49'),
(270, 3, '4d68a4062f3141f027996b024b38796d', '2 hours', 1, '2013-06-19 08:34:13', '2013-06-19 10:34:13'),
(269, 3, '444859510b043f2e9f37327f4be080fa', '2 hours', 0, '2013-06-19 05:43:12', '2013-06-19 07:43:12'),
(268, 3, 'b1b8f41ab50b8ca325d0cda091fa75a9', '2 hours', 1, '2013-06-19 04:40:43', '2013-06-19 06:40:43'),
(267, 3, '3b544137b76665ab21e70685c0406811', '2 hours', 0, '2013-06-19 04:39:10', '2013-06-19 06:39:10'),
(266, 3, '8870ae4142700e45dd97ded0d58b5b40', '2 hours', 1, '2013-06-19 03:17:38', '2013-06-19 05:17:38'),
(102, 4, '7e63ab64842c5f6b679d019bb60a2cc1', '2 weeks', 0, '2013-03-19 10:42:11', '2013-04-02 10:42:11'),
(265, 3, '28781155bb4938546720a7538c21c799', '2 hours', 1, '2013-06-19 03:17:04', '2013-06-19 05:17:04'),
(100, 4, '885b3242742ae2fbff722caab33efe23', '2 weeks', 1, '2013-03-19 09:52:51', '2013-04-02 09:52:51'),
(264, 3, '80d9e824263d5d5aa7d85758e5321b16', '2 hours', 0, '2013-06-18 11:29:11', '2013-06-18 13:29:11'),
(263, 3, 'c25483bfdd4a3d147e984321c5532eac', '2 hours', 0, '2013-06-18 11:21:36', '2013-06-18 13:21:36'),
(262, 3, '41faaa2c00cc9ea847cdfba062e227f3', '2 hours', 1, '2013-06-18 10:21:35', '2013-06-18 12:21:35'),
(261, 3, '1272d08b441856133f37fe1e9194424a', '2 hours', 0, '2013-06-18 09:51:47', '2013-06-18 11:51:47'),
(260, 3, '1b23c8fe9708017c7abde74a79abd58a', '2 hours', 0, '2013-06-18 05:45:39', '2013-06-18 07:45:39'),
(259, 3, '3dc0f16a93ffab02ceb084e13934fb65', '2 hours', 0, '2013-06-18 05:16:00', '2013-06-18 07:16:00'),
(258, 3, '278149f7acdb5d48679ab6ba0031454e', '2 hours', 0, '2013-06-18 05:09:50', '2013-06-18 07:09:50'),
(257, 3, 'a4a3f53e99b7e9e9f0e4b6939d49ec10', '2 hours', 0, '2013-06-18 03:34:22', '2013-06-18 05:34:22'),
(256, 3, '879ebcf93e502a39569219a760e8851d', '2 hours', 1, '2013-06-18 03:34:09', '2013-06-18 05:34:09'),
(255, 3, '8bd5f325a76ca37bd2addb44f88909f0', '2 hours', 0, '2013-06-17 11:30:34', '2013-06-17 13:30:34'),
(254, 3, '45e59117db4ee62a2210ffd121f6f13f', '2 hours', 1, '2013-06-17 11:16:28', '2013-06-17 13:16:28'),
(253, 3, 'b42a97e7a81427a03358afa908e9e089', '2 hours', 0, '2013-06-17 11:10:08', '2013-06-17 13:10:08'),
(252, 3, 'f177b99e3134e5c504b909fdba66bb76', '2 hours', 0, '2013-06-17 09:12:23', '2013-06-17 11:12:23'),
(251, 3, '39e76270cc8d96b8955d8c104df7fb14', '2 hours', 0, '2013-06-17 08:45:07', '2013-06-17 10:45:07'),
(250, 3, '20c4cba56d86369f75582b3daf38f198', '2 hours', 1, '2013-06-17 07:34:23', '2013-06-17 09:34:23'),
(249, 3, '431b8c88ecf5a51e7639c03629930881', '2 hours', 1, '2013-06-17 07:26:33', '2013-06-17 09:26:33'),
(248, 3, 'ce6453d0f059343d866340d13614dae6', '2 hours', 0, '2013-06-16 02:16:54', '2013-06-16 04:16:54'),
(247, 3, 'bbb59fd62daf9e5489a67bf9b186b413', '2 hours', 0, '2013-06-15 21:25:33', '2013-06-15 23:25:33'),
(246, 3, '4e019519af84743f5e8252baf931a72e', '2 hours', 0, '2013-06-15 12:31:56', '2013-06-15 14:31:56'),
(245, 3, 'f3e2cdc15a83ef581dbe5847333478d3', '2 hours', 0, '2013-06-15 09:16:02', '2013-06-15 11:16:02'),
(244, 3, '28fcd9f284906d6a8e2b69b553c7b88c', '2 hours', 1, '2013-06-15 08:22:26', '2013-06-15 10:22:26'),
(243, 3, '341a8a1fd75b5e79b09c68855597c21f', '2 hours', 1, '2013-06-15 06:51:38', '2013-06-15 08:51:38'),
(224, 6, '41dc25678c945a8027ba0548c0d9bc94', '2 hours', 0, '2013-06-06 01:56:51', '2013-06-06 03:56:51'),
(242, 3, '81d5ac3f69109764e9c581bdf6e5d4f2', '2 hours', 0, '2013-06-15 04:22:51', '2013-06-15 06:22:51'),
(241, 3, 'ec32a714956da24f6d09e0e0c58e5703', '2 hours', 0, '2013-06-14 16:40:29', '2013-06-14 18:40:29'),
(221, 6, '5cfdc861e917a956951448996fbb1f11', '2 hours', 0, '2013-06-05 06:58:16', '2013-06-05 08:58:16'),
(240, 3, '93cb436644bafcd2f50f04b770d598a2', '2 hours', 1, '2013-06-14 15:17:33', '2013-06-14 17:17:33'),
(219, 2, '6a56755aaaa97e0cc15cfa1bb1e8c6aa', '2 hours', 0, '2013-06-03 04:17:38', '2013-06-03 06:17:38'),
(239, 3, '6c44654b469aade871c090f702884a3e', '2 hours', 0, '2013-06-14 12:47:17', '2013-06-14 14:47:17'),
(238, 3, '7f9fee0d4be74a7c547e5899ffe1bebf', '2 hours', 1, '2013-06-14 11:15:09', '2013-06-14 13:15:09'),
(237, 3, '0c9975c1b782ac6104821121359b78be', '2 hours', 0, '2013-06-13 14:53:02', '2013-06-13 16:53:02'),
(236, 3, '57ce2579f0993490e25f8b642af6eaa0', '2 hours', 1, '2013-06-13 13:54:01', '2013-06-13 15:54:01'),
(235, 3, 'f42bc5234343fe61e1630f1ab5aa989d', '2 hours', 0, '2013-06-13 10:53:09', '2013-06-13 12:53:09'),
(234, 3, 'b9a164d316c197ce6e50183ca6c759e8', '2 hours', 0, '2013-06-13 05:04:21', '2013-06-13 07:04:21'),
(233, 3, '66afde24e5f7b019f451c5eac95b9794', '2 hours', 0, '2013-06-11 17:07:46', '2013-06-11 19:07:46'),
(196, 7, 'b5043097234d47456fb6a0dae4b9dce5', '2 hours', 0, '2013-05-21 05:17:25', '2013-05-21 07:17:25'),
(211, 4, 'a212fd79830f516803255cc1812cdc57', '2 hours', 0, '2013-05-23 05:11:11', '2013-05-23 07:11:11'),
(210, 4, '6eca879d666c549b47f3449c20d997b8', '2 hours', 0, '2013-05-23 05:06:36', '2013-05-23 07:06:36'),
(199, 7, '1298d6669578e4a21490140d0b11db59', '2 hours', 1, '2013-05-21 07:24:45', '2013-05-21 09:24:45'),
(200, 7, '4aacc686e0e11123dfa33c9cfea0f29d', '2 hours', 1, '2013-05-21 09:05:29', '2013-05-21 11:05:29'),
(201, 7, '2066c67113f062b8e1a7e8401a1ad9f1', '2 hours', 0, '2013-05-21 09:31:16', '2013-05-21 11:31:16'),
(202, 7, 'f99c0cd1b28f848160e1c6ca792b2dd0', '2 hours', 0, '2013-05-21 12:44:25', '2013-05-21 14:44:25'),
(203, 6, '403184342071a834ac04e8833e1934d8', '2 hours', 0, '2013-05-21 12:49:02', '2013-05-21 14:49:02'),
(209, 4, 'd18b548abc5a8e7abd76c6d3f0664d0a', '2 hours', 1, '2013-05-23 03:58:33', '2013-05-23 05:58:33'),
(232, 3, 'e1a38773b5303a650794aca01f6f675a', '2 hours', 0, '2013-06-11 12:25:31', '2013-06-11 14:25:31'),
(206, 7, '62b1a943819161bd334c4167949113e4', '2 hours', 0, '2013-05-23 02:54:33', '2013-05-23 04:54:33'),
(207, 7, '314d83f3b150cb8a73bb86fdd3de068c', '2 hours', 0, '2013-05-23 03:40:08', '2013-05-23 05:40:08');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `majoractivities`
--

INSERT INTO `majoractivities` (`id`, `created`, `modified`, `activity_name`, `activity_weight`, `baseline`, `target`, `measure_id`, `objective_id`, `year`, `period_id`, `in_quality`, `in_quntity`, `in_time`, `in_cost`, `ac_in_quality`, `ac_in_quntity`, `ac_in_time`, `ac_in_cost`, `acomplishment`, `office_id`, `user_id`, `is_approved`, `remark`) VALUES
(1, '2013-04-30 12:44:50', '2013-05-20 00:26:48', 'activity one', 4, 4, 4, 3, 5, 2005, 1, 4, 4, 4, 4, 4, 4, 1, 2, 66, 6, 3, '\0', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `measures`
--

INSERT INTO `measures` (`id`, `created`, `modified`, `objective_id`, `measure_name`, `description`, `measure_type`, `unit_id`, `polarity`, `measure_weight`, `frequency_id`, `formula`, `data_source`, `data_quality`, `data_collector`, `rationalie`, `baseline`, `threshold_id`) VALUES
(3, '2013-04-21 03:45:07', '2013-04-26 17:14:26', 5, '% increase in  customer satisfaction', ' Satisfaction  level of our students(ss), patients(ps), partner(Prs) and  research output users (Cs)', 'Measure Type', 2, '', 8, 1, '{SS+PS+PrS+CS} over {4}', 'Survey from students, clients /patients, partners and community', '', '', 'RO', 0, NULL),
(4, '2013-04-21 03:46:53', '2013-04-21 03:50:46', 5, ' % increase of customer preference of JU', 'Annual growth in number of  students(s), patients(P) and community /partners(c) who choose JU  ', 'Measure Type', 2, '', 4, 1, 'left ({( {S + P + C )} rsub {t} - ( {S + P + C )} rsub {t-1}} over {( {S + P + C )} rsub {t-1}} right ) x100', 'MOE\r\nPatients\r\nPartners ', '', '', 'PRC', 0, NULL),
(5, '2013-04-21 03:50:06', '2013-04-26 17:14:44', 5, 'Growth in  number of customers served for Student / Pesient', 'Annual Size of students(s) served', 'Measure Type', 1, '', 5, 3, 'Annual Size of students(s) served', 'Colleges \r\nInstitutes\r\nHospitals \r\nRPO ', '', '', 'pps', 0, NULL),
(7, '2013-04-21 04:01:45', '2013-04-21 04:19:27', 6, ' Growth in newly created services/programs UG', 'Number', 'Measure Type', 1, '', 1, 1, 'Number', 'Colleges  Hospitals \r\nRPO', '', '', 'APQA PPS', 0, NULL),
(8, '2013-04-21 04:21:54', '2013-04-21 04:21:54', 6, 'Growth in newly created services/programs PG', 'Number', 'Measure Type', 1, '', 1, 1, 'Number', 'Colleges ', '', '', 'APQA PPS', 0, NULL),
(9, '2013-04-21 04:24:25', '2013-04-21 04:28:35', 6, 'Growth in newly created services/programs Phd', 'Number', 'Measure Type', 1, '', 1, 1, 'Number', 'RPO', '', '', 'APQA PPS', 0, NULL),
(10, '2013-04-21 04:28:15', '2013-04-26 17:17:50', 6, 'Expansion  in   service delivery points ', 'Annual expansion of  SDP calculated by the increase in number of service delivery points of two consecutive years  ', 'Measure Type', 2, '', 3, 1, 'left ({{Sdp} rsub {t} - {Sdp} rsub {t-1}} over {{Sdp} rsub {t-1}} right ) x100', 'Colleges \r\nHospitals \r\nRPO\r\nCDE', '', '', 'APQA PPS', 0, NULL),
(11, '2013-04-21 04:30:27', '2013-04-26 17:18:43', 6, 'Increase female completion rate', 'Growth in female students completion rate (CR) of two consecutive years. The study duration  differs according to disciplines ', 'Measure Type', 2, '', 5, 1, 'left ({{CR} rsub {t} - {CR} rsub {t-1}} over {{CR} rsub {t-1}} right ) x100', 'Registrar and student affairs ', '', '', 'AVP', 0, NULL),
(12, '2013-04-21 04:35:38', '2013-04-27 17:29:44', 6, 'Increase  in  number of facilities for disabled students', 'Number', 'Measure Type', 1, '', 2, 1, 'Number', 'Student dean', '', '', 'PPS', 0, NULL),
(13, '2013-04-21 04:41:38', '2013-04-26 17:24:05', 7, '% reduction in   resource wastage', 'Cost/value of resources kept beyond expiry/ delivery date in consecutive years as a ratio of recurrent budget   ', 'Measure Type', 2, '', 4, 1, 'left ({{W} rsub {t} - {W} rsub {t-1}} over {{W} rsub {t-1}} right ) x100\r\n  where {W} rsub {t} is wastage at time t and\r\n\r\n given by \r\n      {W} rsub {t} = {Value   of   resource   misused} over {Total   Recurrent   Budget}\r\n', 'Audit \r\nFinance \r\nAdmin Director', '', '', 'ADVP', 0, NULL),
(14, '2013-04-21 04:46:54', '2013-04-26 17:24:21', 7, 'Income  from non-treasury resources', 'Increase in resources from non-treasury sources  over consecutive years ', 'Measure Type', 2, '', 6, 1, 'left ({{RNT} rsub {t} - {RNT} rsub {t-1}} over {{RNT} rsub {t-1}} right ) x100\r\n   where  {RNT} rsub {t} is share of   non treasury  re from sources total budget   at time t and given by \r\n\r\n   {% RNT} rsub {t} = {income   from   non   treasury   source  } over {Total    Budget}\r\n', 'IG and INV\r\nGrant and Consultancy \r\nHospital ', '', '', 'AdVP\r\nFinance', 0, NULL),
(15, '2013-04-26 17:33:06', '2013-04-27 03:26:08', 8, 'Student to learning resource ratio', 'The ratio of total number of students (NS) to the available learning/teaching resources (R). Where resources refer to computer & teaching lab., lib space and instructors.', 'Measure type', 3, '', 2, 1, '{NS} over {R}', 'Library \r\nHR\r\nColleges \r\nRegistrar', '', '', '', 0, NULL),
(16, '2013-04-26 17:35:02', '2013-04-27 03:27:25', 8, 'Number of academic programs reviewed', 'The number of  curricula reviewed and  revised per year ', 'Measure type', 1, '', 2, 1, 'The number of  curricula reviewed and  revised per year ', 'Colleges', '', '', '', 0, NULL),
(17, '2013-04-26 17:36:05', '2013-04-27 03:28:27', 8, 'Number of competitive grants won', 'Number', 'Measure type', 1, '', 3, 1, 'Number', 'GCO', '', '', '', 0, NULL),
(18, '2013-04-26 17:37:27', '2013-04-26 17:37:27', 8, '%increase in research', 'description', 'Measure type', 2, '', 3, 1, 'formula', '', '', '', '', 0, NULL),
(19, '2013-04-26 17:38:49', '2013-04-26 17:38:49', 8, '%increase in quality clinical service', 'description', 'Measure type', 1, '', 3, 1, 'formula', '', '', '', '', 0, NULL),
(20, '2013-04-26 17:40:55', '2013-04-26 17:40:55', 9, 'Need based trainiucngs conducted', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(21, '2013-04-26 17:42:11', '2013-04-26 17:42:11', 9, 'Consultancy service rendered', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(22, '2013-04-26 17:43:52', '2013-04-26 17:43:52', 9, 'Number of staff benefited from relationship created', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(23, '2013-04-26 17:44:52', '2013-04-26 17:44:52', 9, 'Increase customer awareness on JU activity in session', 'description', 'Measure type', 1, '', 1, 1, 'formul', '', '', '', '', 0, NULL),
(24, '2013-04-26 17:49:01', '2013-04-26 17:49:01', 10, 'No of collaborative community developmental intervention', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(25, '2013-04-26 17:50:02', '2013-04-26 17:50:02', 10, 'No of model villages established', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(26, '2013-04-26 17:50:56', '2013-04-26 17:50:56', 10, 'No of forums conducted on CBE', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(27, '2013-04-26 17:52:08', '2013-04-26 17:52:08', 10, 'No of best practices identified and disseminated/impliented', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(28, '2013-04-26 17:53:47', '2013-04-26 17:53:47', 11, '%reduce in customer/ community complaints due to ethical/legal practice violations', 'description', 'Measure type', 2, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(29, '2013-04-26 17:54:53', '2013-04-26 17:54:53', 11, '% of waste disposed untreated ', 'description', 'Measure type', 2, '', 3, 1, 'formula', '', '', '', '', 0, NULL),
(30, '2013-04-26 17:56:56', '2013-04-26 17:56:56', 12, 'Number of reform implementation appraisals', 'description', 'Measure type', 1, '', 3, 1, 'formula', '', '', '', '', 0, NULL),
(31, '2013-04-26 17:58:11', '2013-04-26 17:58:11', 12, 'Frequency of organizational fitness assessment conducted', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(32, '2013-04-26 17:59:31', '2013-04-26 17:59:31', 13, 'Number of staff trained on anti corruption activites', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(33, '2013-04-26 18:00:55', '2013-04-26 18:01:40', 13, 'Proportion of corrective measures taken to malpractices identified', 'description', 'Measure type', 3, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(34, '2013-04-26 18:02:47', '2013-04-26 18:02:47', 14, 'Staff profile Mix', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(35, '2013-04-26 18:03:51', '2013-04-26 18:03:51', 14, '% of staff engaged in research activity', 'descriiption', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(36, '2013-04-26 18:05:21', '2013-04-26 18:05:21', 14, 'Proportion of leaders trained on a minimum of two leadership development programs', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(37, '2013-04-26 18:06:06', '2013-04-26 18:06:06', 14, 'Employee productivity', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(38, '2013-04-26 18:08:20', '2013-04-26 18:08:20', 15, 'Work enviroment quality index', 'description', 'Measure type', 1, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(39, '2013-04-26 18:09:30', '2013-04-26 18:09:30', 15, '% of employees who know mission, vission and value statements', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(40, '2013-04-26 18:10:11', '2013-04-26 18:10:11', 15, 'turnover rate', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(41, '2013-04-26 18:11:05', '2013-04-26 18:11:05', 15, '% increase in staff satisfaction', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(42, '2013-04-26 18:12:10', '2013-04-26 18:12:10', 16, 'Number of ICT Serivices', 'description', 'Measure type', 1, '', 3, 1, 'formlula', '', '', '', '', 0, NULL),
(43, '2013-04-26 18:13:09', '2013-04-26 18:13:09', 16, 'Proportion of capital expenditure on ICT', 'description', 'Measure type', 1, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(44, '2013-04-26 18:14:20', '2013-04-26 18:14:20', 16, 'Proportion of capital expenditure on physical facilities', 'description', 'Measure type', 3, '', 1, 1, 'formula', '', '', '', '', 0, NULL),
(45, '2013-04-26 18:15:30', '2013-04-26 18:15:30', 17, 'Proportion of female employees in managerial position', 'description', 'Measure type', 3, '', 2, 1, 'formula', '', '', '', '', 0, NULL),
(46, '2013-04-26 18:16:25', '2013-04-26 18:16:25', 17, 'Proportion of professional women hired', 'description', 'Measure type', 3, '', 2, 1, 'formula', '', '', '', '', 0, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `objectives`
--

INSERT INTO `objectives` (`id`, `created`, `modified`, `objective_name`, `objective_weight`, `objective_description`, `perspective_id`, `organization_id`, `outcome`) VALUES
(5, '2013-04-20 22:07:57', '2013-04-26 17:04:29', 'Increase customer/stakeholder   satisfaction, trust and benefit ', 17, 'Through the delivery of quality education and training, providing the society with need-based and problem solving research, improving the delivery of quality services and  making decisions more transparent and  ensuring accountability,  JU will sustain and  build trust and a good public image', 4, NULL, 'Preferred higher  learning institution for quality education, research and service'),
(6, '2013-04-20 22:10:15', '2013-04-26 17:04:48', 'Increase access  and  equity', 13, 'JU will ensure access to education and training programs, service delivery and the dissemination of research output   to all citizens in an equitable manner through on and off campus arrangements and by  expanding  non-treasury income sources', 4, NULL, '-Wider educational, research outputs  and service opportunities .\r\n-Increased benefit to society'),
(7, '2013-04-20 22:12:31', '2013-04-21 08:04:46', 'Diversify  source  of  fund and optimize resource utilization', 10, 'By establishing a state-of-the-art financial management system, strengthening collaborative research projects, implementing cost sharing, cost recovery and commercializing various services, JU optimizes use of available resources for teaching/learning, research and service delivery.  In addition, JU will boost   non-treasury income sources by creating viable commercial units, identifying profitable ventures and expanding existing initiatives.', 5, NULL, '-Adequate resources \r\n-Efficient and effective  utilization of resources    \r\n-Increased proportion of non-treasury revenue'),
(8, '2013-04-20 22:15:45', '2013-04-26 17:06:47', 'Maximize   quality of   teaching / learning, research and service', 13, 'JU heightens the standards of research and its impact  by undertaking  problem solving and need-based research  and converting the  outputs  to a user-friendly mode, ensuring the quality of education by making  educational delivery methods student-centered and problem solving and  maximizing its quality of service delivery and guidelines and harmonizing service delivery points.', 6, NULL, '-Competent and accomplished graduates\r\n-Increased research outputs of high  quality and impact \r\n-Quality service'),
(9, '2013-04-20 22:20:23', '2013-04-26 17:07:06', 'Improve customer/ stakeholder  relationship ', 7, 'Jimma  University  will strive  to   create  a platform  for mutually beneficial relationship by  ensuring  sustainable participation and involvement, providing  counseling and  economic support  services. It will also forge effective collaboration and partnerships with different stakeholders by fostering the culture of working towards shared goals, promoting a culture of diversity and tolerance among staff and students. Besides this, it will enhance collaborative partnership and linkages by improving means of communication, providing quality education, research output and user-friendly services in response to the needs of community/citizens.\r\n', 6, NULL, 'Mutually  beneficial and cooperative relationship'),
(10, '2013-04-20 22:22:17', '2013-04-26 17:07:49', ' Strengthen innovative  CBE and scale up best practices ', 7, 'JU will strengthen CBE and minimize community fatigue by reviewing and updating CBE strategy, mobilizing resources, ensuring linkage and partnerships and providing need-based and essential services (health education, gender awareness, environment protection, agricultural extension, development interventions etc) to the community and other target groups. It will also enhance creativity, innovation and benchmarking best practices.', 6, NULL, '-Strong innovative educational programs and improved university-community   relationship . \r\n-Enhanced  quality services'),
(11, '2013-04-20 22:23:52', '2013-04-26 17:09:25', 'Enhance environmental and legal consideration', 5, 'JU ensures that all relevant legal and social issues are entertained by complying with norms of conducting research and abiding by ethical code of conducts. It also  ensures harmony with environment by improving waste disposal management system, complying with minimal standards  of  safety  regulations and through involvement in community development ', 6, NULL, '-Legally bound research    \r\n-Reduced community complaints \r\n-Environmentally and societally friendly service'),
(12, '2013-04-20 22:25:22', '2013-04-20 22:25:22', 'Enhance reform implementation and expedite use of scientific management system', 4, 'By assessing the organizational fitness of the university (based on taking situational requirements into account), designing and implementing institutional policy and procedures for recognition of outstanding leadership/management performance, putting monitoring and evaluation mechanisms in place,  decentralizing power and delegating authority to the lowest possible level where leaders are encouraged and aspire towards maximum achievements,   JU will champion organizational change taking innovative actions.', 6, NULL, 'Transformed institution'),
(13, '2013-04-20 22:28:14', '2013-04-26 17:09:04', 'Enhance  grievance handling and anticorruption activities ', 4, 'Using awareness raising forum, ensuring implementation of rules and regulations, facilitating complaint  handling procedures and  taking timely  corrective actions, JU strengthens the culture of transparency and accountability.   ', 6, NULL, 'No tolerance of corruption and malpractices'),
(14, '2013-04-20 22:30:52', '2013-04-27 03:39:38', 'Enhance staff and leadership capacity ', 5, 'JU will attain highly qualified staff by improving mechanisms of recruiting and retaining outstanding staff, upgrading their academic status and providing continuous professional training programs; it will boost the research capacity of the staff by continuous training on research methodology, analytical and soft skills and fostering collaborations   to undertake multidisciplinary research. It will  also   facilitate the realization of the vision of the university by providing  management and development training and empowering  every office bearer (to set clear direction,  create specific achievable goals and initiate actions to mobilize staff).', 7, NULL, '-highly qualified staff and capable leaders \r\n-Sound  staff mix'),
(15, '2013-04-20 22:32:57', '2013-04-20 22:32:57', 'Improve working  environment and culture', 6, 'JU will develop a good   working culture and strengthen a motivating working environment where team spirit is enhanced by designing incentive mechanisms, rewarding outstanding performances, organizing awareness raising forums, making use of transformational leadership and knowledge management. Besides this, it will instill the culture of research undertaking through enforcing the staff to spend 25% of their time on research', 7, NULL, '-Reduced staff turnover \r\n-Motivated staff  and desirable place to work'),
(16, '2013-04-20 22:35:10', '2013-04-26 17:11:55', 'Improve infrastructure and  ICT utilization', 5, 'JU will  offer technology-supported  quality teaching/learning, research  and services by constructing, upgrading, modernizing and equipping  physical facilities, availing  high quality information resources and developing world class ICT  structure. Furthermore, JU will establish MIS and automate the working systems that can support strategic decision making at all levels. ', 7, NULL, '-Conducive research settings \r\n-Accelerated  teaching and learning\r\n-Technologically supported  quality services  \r\n-Improved quality of decisions '),
(17, '2013-04-20 22:36:26', '2013-04-26 17:12:41', 'Reduce gender imbalance', 4, 'JU will improve gender equity, awareness and sensitivity in all aspects of the university operations and activities so as to address the prevailing gender imbalance', 7, NULL, 'Model university for gender sensitivity ');

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

--
-- Dumping data for table `objectives_offices`
--

INSERT INTO `objectives_offices` (`office_id`, `objective_id`) VALUES
(6, 5),
(6, 6),
(6, 7),
(6, 8),
(9, 6),
(9, 7);

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
(6, '2013-03-02 02:11:53', '2013-06-06 02:40:07', 'president', 0, 2),
(8, '2013-03-02 02:15:42', '2013-04-19 07:52:58', 'Academic vice president', 6, 2),
(9, '2013-04-10 02:37:59', '2013-05-23 11:04:13', 'Institutional transformation', 6, 2);

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
(2, '2013-03-01 16:31:02', '2013-04-27 03:19:37', 'Jimma University', 'Jimma University is committed to training high calibre professionals, undertaking quality and problem solving research and serving the society    through its cherished and innovative Community Based Education (CBE).', 'Jimma University aspires to be a leading public higher learning institution in the country, renowned in Africa and recognized in the world.', '-. Excellence and quality in teaching, research and service\r\n-. Diversity, tolerance and inclusiveness in the ethnicity, religion, culture and gender\r\n-. Equity and access  in teaching , research and public services \r\n-. Gender sensitivity to rectify the prevailing gender inequity and imbalance \r\n-. Honesty and integrity in carrying out intellectual endeavors  \r\n-. Transparency and accountability in decision making \r\n-. Community involvement and empowerment\r\n-. Networking for collaboration and partnership\r\n-. Mutual respect, collegiality and team spirit in transforming the university', 'We are in the community', 'ju logo');

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
(4, '2013-04-13 11:59:06', '2013-04-21 07:57:28', 'Customer/Citizenry Perspective ', 30, 'Jimma University will provide its customers with outstanding educational programs that enable them to attain their fullest potential intellectually, ethically, morally and socially through equipping them with critical, analytical and imaginative skills. It is also entrusted with the advancement of research and scholarly undertakings that address current and future needs/problems of its customers. JU is further dedicated to serving the society at large through capacity building endeavors and providing professional and standard healthcare services. ', 1),
(5, '2013-04-13 11:59:22', '2013-04-21 07:57:10', 'Financial perspectives', 10, 'By establishing an effective financial management system, JU will ensure that public resources are responsibly utilized and value for money is given due attention. ', 1),
(6, '2013-04-13 12:02:18', '2013-04-21 07:58:20', 'Internal business process (IBP) perspective ', 40, 'JU will produce qualified professionals, undertake need-based research and provide quality and timely services in an efficient and effective, environmental friendly and ethically acceptable, customer focused manner through its cherished innovative CBE philosophy. ', 1),
(7, '2013-04-13 12:02:35', '2013-04-21 07:57:59', 'Learning and growth perspective', 20, 'JU, via its visionary leadership, creates common goals, a shared vision and an improved work culture. It hires and retains highly qualified, motivated and committed employees and makes use of state of the art ICT.  Measures in this perspective are lead indicators for improvements in the internal processes, financial and customer perspectives.   ', 1);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `created`, `modified`, `project_name`, `initiative_id`) VALUES
(8, '2013-03-25 21:17:38', '2013-03-25 21:17:38', 'project one', 3),
(9, '2013-04-27 18:14:41', '2013-04-27 18:14:41', 'project two', 3),
(10, '2013-04-27 18:14:58', '2013-04-27 18:14:58', 'project three', 3),
(11, '2013-04-27 18:15:52', '2013-04-27 18:15:52', 'the two one', 4),
(12, '2013-04-27 18:16:03', '2013-04-27 18:16:03', 'the two two', 4);

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
  `initiative_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `project_id` (`project_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `projects_tasks`
--

INSERT INTO `projects_tasks` (`id`, `created`, `modified`, `task_name`, `project_id`, `initiative_id`) VALUES
(1, '2013-04-27 18:16:35', '2013-04-27 18:16:35', 'task twwo', 11, 4);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `subactivities`
--

INSERT INTO `subactivities` (`id`, `created`, `modified`, `year`, `majoractivity_id`, `period_id`, `subactivity_name`, `subactivity_weight`, `starting_date`, `ending_date`, `is_approved`, `remark`, `office_id`, `user_id`) VALUES
(1, '2013-04-30 12:45:02', '2013-04-30 12:54:24', 2005, 1, 1, 'dfdf', 0, '2013-04-30', '2013-04-30', '0', NULL, 6, 3);

-- --------------------------------------------------------

--
-- Table structure for table `subs`
--

CREATE TABLE IF NOT EXISTS `subs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `year` year(4) NOT NULL,
  `activity_id` int(11) NOT NULL,
  `period_id` int(11) NOT NULL,
  `sub_activity` text NOT NULL,
  `starting_date` date NOT NULL,
  `ending_date` date NOT NULL,
  `office_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `is_approved` int(1) NOT NULL,
  `remark` tinytext NOT NULL,
  PRIMARY KEY (`id`),
  KEY `activity_id` (`activity_id`),
  KEY `period_id` (`period_id`),
  KEY `office_id` (`office_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `subs`
--

INSERT INTO `subs` (`id`, `year`, `activity_id`, `period_id`, `sub_activity`, `starting_date`, `ending_date`, `office_id`, `user_id`, `is_approved`, `remark`) VALUES
(2, 2005, 5, 1, 'sub activity one', '2013-05-21', '2013-05-21', 6, 3, 1, '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `targets`
--

INSERT INTO `targets` (`id`, `created`, `modified`, `year`, `baseline`, `target`, `actual_value`, `objective_id`, `measure_id`, `period_id`, `office_id`) VALUES
(1, '2013-04-27 11:46:28', '2013-04-27 11:49:59', 2005, 44, 49, 48, 5, 3, 1, 6),
(2, '2013-05-20 08:37:38', '2013-05-20 08:46:09', 2005, 40, 48, 46, 6, 12, 1, 6),
(3, '2013-06-05 07:11:01', '2013-06-14 11:17:07', 2005, 40, 60, 50, 5, 3, 1, 6);

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

--
-- Dumping data for table `themes_objectives`
--

INSERT INTO `themes_objectives` (`theme_id`, `objective_id`) VALUES
(1, 5),
(1, 6),
(2, 6),
(2, 5),
(1, 8),
(1, 9),
(1, 10),
(1, 14),
(1, 15),
(1, 16),
(2, 7),
(2, 8),
(2, 9),
(2, 11),
(3, 5),
(3, 6),
(3, 7),
(3, 8),
(3, 9),
(3, 11),
(3, 15),
(3, 16),
(4, 5),
(4, 6),
(4, 7),
(4, 12),
(4, 13),
(4, 14),
(4, 15),
(4, 16),
(4, 17);

-- --------------------------------------------------------

--
-- Table structure for table `thresholds`
--

CREATE TABLE IF NOT EXISTS `thresholds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `created` datetime DEFAULT NULL,
  `modified` datetime DEFAULT NULL,
  `performance` varchar(200) DEFAULT NULL,
  `lower` decimal(10,0) DEFAULT NULL,
  `upper` decimal(10,0) DEFAULT NULL,
  `background` tinytext NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=21 ;

--
-- Dumping data for table `thresholds`
--

INSERT INTO `thresholds` (`id`, `created`, `modified`, `performance`, `lower`, `upper`, `background`) VALUES
(16, '2013-06-11 10:47:22', '2013-06-11 10:47:22', 'Exelent', 95, 100, '13709620421.png'),
(17, '2013-06-11 10:47:45', '2013-06-11 10:47:45', 'Very Good', 80, 94, '1370962065greenRule.gif'),
(18, '2013-06-11 10:48:59', '2013-06-11 10:48:59', 'Good', 70, 89, '13709621393.png'),
(19, '2013-06-11 10:50:17', '2013-06-11 10:50:17', 'warning', 50, 69, '1370962217error.png'),
(20, '2013-06-11 10:51:02', '2013-06-11 10:51:02', 'Not Good', -1000, 49, '13709622612.png');

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
  `user_img` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `user` (`username`),
  KEY `mail` (`email`),
  KEY `users_FKIndex1` (`user_group_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `user_group_id`, `username`, `password`, `salt`, `email`, `first_name`, `last_name`, `email_verified`, `active`, `ip_address`, `created`, `modified`, `office_id`, `user_img`) VALUES
(2, 1, 'admin', '365caef7fccbdb1ee711f084be9317a7', '1e6d99570a4d37cc29b18c4a6b06e6ed', 'admin@admin.com', 'Admin', '', 1, 1, '', '2013-03-01 22:11:08', '2013-03-01 22:11:08', 1, NULL),
(3, 1, 'ifrem', 'cd6a293be8a6af6b3d026bc5df4b422b', 'ddff30ec8f5b00d1e6c93bf134876da5', 'if@if.if', 'Ifrem', 'Nanecha', 1, 1, NULL, '2013-03-02 09:33:41', '2013-06-11 12:25:45', 6, '13709679451.png'),
(4, 5, 'vifrem', '0a860e784e7d6d1ed877d07347213010', '0d7ce4bdbfd09b7e2d260b18a8c60649', 'vv@nn.vbv', 'Vice ', 'President', 1, 1, NULL, '2013-03-03 16:03:22', '2013-04-30 13:20:36', 8, NULL),
(5, 9, 'yohannes', '99a36f3f106c40937eaf8d48c2523c85', 'c76c372d5f41771e0f18f21b6ede8470', 'yohatef@yahoo.com', 'yohannes', 'tefera', 1, 1, NULL, '2013-04-10 02:41:52', '2013-04-30 13:20:57', 9, NULL),
(6, 6, 'ephrem', '87565922bf6c0ebbd36142bd646830ce', 'd2eee6c472a1d8f4df3a410875f3af00', 'ifremict@gmail.com', 'Ephrem', 'Nanecha', 1, 1, NULL, '2013-04-10 12:54:56', '2013-05-01 12:58:13', 6, NULL),
(7, 8, 'staff', 'e10e78f94daf3f53c96f72d4178da1d3', '15a0046ba8d479656e7d2275b48f76e2', 'staff@ju.edu', 'Ifrem', 'Nanecha', 1, 1, NULL, '2013-05-21 05:17:01', '2013-05-21 05:17:01', 6, NULL),
(8, 6, 'ephaman', '2a948ef694e0ece99db311e612926cf9', '16b2edbeb14c306d8ef0e31cc22edfee', 'ephaman@gmail.com', 'Ephrem', 'Nanecha', 1, 1, NULL, '2013-05-23 05:24:56', '2013-05-23 05:24:56', 9, NULL),
(9, 9, 'antenehe', 'f50e2f161adb7f6b56e5ecafa4073285', '2d7bd01658ef64b81d18e9108306233d', 'ant@ju.edu', 'Anteneh', 'Fantahun', 1, 1, '127.0.0.1', '2013-06-20 02:25:09', '2013-06-20 02:25:50', 1, NULL);

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1090 ;

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
(263, 1, 'Offices', 'cascadeObjective', 1),
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
(374, 9, 'Periods', 'index', 1),
(375, 1, 'Activities', 'index', 1),
(376, 2, 'Activities', 'index', 1),
(377, 3, 'Activities', 'index', 1),
(378, 4, 'Activities', 'index', 1),
(379, 5, 'Activities', 'index', 1),
(380, 6, 'Activities', 'index', 1),
(381, 7, 'Activities', 'index', 1),
(382, 8, 'Activities', 'index', 1),
(383, 9, 'Activities', 'index', 1),
(384, 1, 'Activities', 'view', 1),
(385, 2, 'Activities', 'view', 1),
(386, 3, 'Activities', 'view', 1),
(387, 4, 'Activities', 'view', 1),
(388, 5, 'Activities', 'view', 1),
(389, 6, 'Activities', 'view', 1),
(390, 7, 'Activities', 'view', 1),
(391, 8, 'Activities', 'view', 0),
(392, 9, 'Activities', 'view', 1),
(393, 1, 'Activities', 'add', 1),
(394, 2, 'Activities', 'add', 0),
(395, 3, 'Activities', 'add', 0),
(396, 4, 'Activities', 'add', 1),
(397, 5, 'Activities', 'add', 1),
(398, 6, 'Activities', 'add', 1),
(399, 7, 'Activities', 'add', 1),
(400, 8, 'Activities', 'add', 0),
(401, 9, 'Activities', 'add', 1),
(402, 1, 'Activitievaluations', 'show', 1),
(403, 2, 'Activitievaluations', 'show', 1),
(404, 3, 'Activitievaluations', 'show', 1),
(405, 4, 'Activitievaluations', 'show', 1),
(406, 5, 'Activitievaluations', 'show', 1),
(407, 6, 'Activitievaluations', 'show', 1),
(408, 7, 'Activitievaluations', 'show', 1),
(409, 8, 'Activitievaluations', 'show', 1),
(410, 9, 'Activitievaluations', 'show', 1),
(411, 1, 'Activities', 'edit', 1),
(412, 2, 'Activities', 'edit', 0),
(413, 3, 'Activities', 'edit', 0),
(414, 4, 'Activities', 'edit', 1),
(415, 5, 'Activities', 'edit', 1),
(416, 6, 'Activities', 'edit', 1),
(417, 7, 'Activities', 'edit', 1),
(418, 8, 'Activities', 'edit', 0),
(419, 9, 'Activities', 'edit', 1),
(420, 1, 'Activities', 'delete', 1),
(421, 2, 'Activities', 'delete', 0),
(422, 3, 'Activities', 'delete', 0),
(423, 4, 'Activities', 'delete', 1),
(424, 5, 'Activities', 'delete', 1),
(425, 6, 'Activities', 'delete', 1),
(426, 7, 'Activities', 'delete', 1),
(427, 8, 'Activities', 'delete', 0),
(428, 9, 'Activities', 'delete', 1),
(429, 1, 'Activitievaluations', 'index', 1),
(430, 2, 'Activitievaluations', 'index', 1),
(431, 3, 'Activitievaluations', 'index', 1),
(432, 4, 'Activitievaluations', 'index', 1),
(433, 5, 'Activitievaluations', 'index', 1),
(434, 6, 'Activitievaluations', 'index', 1),
(435, 7, 'Activitievaluations', 'index', 1),
(436, 8, 'Activitievaluations', 'index', 1),
(437, 9, 'Activitievaluations', 'index', 1),
(438, 1, 'Activitievaluations', 'view', 1),
(439, 2, 'Activitievaluations', 'view', 0),
(440, 3, 'Activitievaluations', 'view', 0),
(441, 4, 'Activitievaluations', 'view', 1),
(442, 5, 'Activitievaluations', 'view', 1),
(443, 6, 'Activitievaluations', 'view', 1),
(444, 7, 'Activitievaluations', 'view', 1),
(445, 8, 'Activitievaluations', 'view', 0),
(446, 9, 'Activitievaluations', 'view', 1),
(447, 1, 'Activitievaluations', 'add', 1),
(448, 2, 'Activitievaluations', 'add', 0),
(449, 3, 'Activitievaluations', 'add', 0),
(450, 4, 'Activitievaluations', 'add', 1),
(451, 5, 'Activitievaluations', 'add', 1),
(452, 6, 'Activitievaluations', 'add', 1),
(453, 7, 'Activitievaluations', 'add', 1),
(454, 8, 'Activitievaluations', 'add', 0),
(455, 9, 'Activitievaluations', 'add', 1),
(456, 1, 'Activitievaluations', 'edit', 1),
(457, 2, 'Activitievaluations', 'edit', 0),
(458, 3, 'Activitievaluations', 'edit', 0),
(459, 4, 'Activitievaluations', 'edit', 1),
(460, 5, 'Activitievaluations', 'edit', 1),
(461, 6, 'Activitievaluations', 'edit', 1),
(462, 7, 'Activitievaluations', 'edit', 1),
(463, 8, 'Activitievaluations', 'edit', 0),
(464, 9, 'Activitievaluations', 'edit', 1),
(465, 1, 'Activitievaluations', 'delete', 1),
(466, 2, 'Activitievaluations', 'delete', 1),
(467, 3, 'Activitievaluations', 'delete', 1),
(468, 4, 'Activitievaluations', 'delete', 1),
(469, 5, 'Activitievaluations', 'delete', 1),
(470, 6, 'Activitievaluations', 'delete', 1),
(471, 7, 'Activitievaluations', 'delete', 1),
(472, 8, 'Activitievaluations', 'delete', 0),
(473, 9, 'Activitievaluations', 'delete', 1),
(474, 1, 'Activityevaluationvalues', 'index', 1),
(475, 2, 'Activityevaluationvalues', 'index', 0),
(476, 3, 'Activityevaluationvalues', 'index', 0),
(477, 4, 'Activityevaluationvalues', 'index', 1),
(478, 5, 'Activityevaluationvalues', 'index', 1),
(479, 6, 'Activityevaluationvalues', 'index', 1),
(480, 7, 'Activityevaluationvalues', 'index', 1),
(481, 8, 'Activityevaluationvalues', 'index', 1),
(482, 9, 'Activityevaluationvalues', 'index', 1),
(483, 1, 'Activityevaluationvalues', 'show', 1),
(484, 2, 'Activityevaluationvalues', 'show', 1),
(485, 3, 'Activityevaluationvalues', 'show', 1),
(486, 4, 'Activityevaluationvalues', 'show', 1),
(487, 5, 'Activityevaluationvalues', 'show', 1),
(488, 6, 'Activityevaluationvalues', 'show', 1),
(489, 7, 'Activityevaluationvalues', 'show', 1),
(490, 8, 'Activityevaluationvalues', 'show', 1),
(491, 9, 'Activityevaluationvalues', 'show', 1),
(492, 1, 'Activityevaluationvalues', 'addself', 1),
(493, 2, 'Activityevaluationvalues', 'addself', 1),
(494, 3, 'Activityevaluationvalues', 'addself', 1),
(495, 4, 'Activityevaluationvalues', 'addself', 1),
(496, 5, 'Activityevaluationvalues', 'addself', 1),
(497, 6, 'Activityevaluationvalues', 'addself', 1),
(498, 7, 'Activityevaluationvalues', 'addself', 1),
(499, 8, 'Activityevaluationvalues', 'addself', 1),
(500, 9, 'Activityevaluationvalues', 'addself', 1),
(501, 1, 'Activityevaluationvalues', 'addpear', 1),
(502, 2, 'Activityevaluationvalues', 'addpear', 0),
(503, 3, 'Activityevaluationvalues', 'addpear', 0),
(504, 4, 'Activityevaluationvalues', 'addpear', 1),
(505, 5, 'Activityevaluationvalues', 'addpear', 1),
(506, 6, 'Activityevaluationvalues', 'addpear', 1),
(507, 7, 'Activityevaluationvalues', 'addpear', 1),
(508, 8, 'Activityevaluationvalues', 'addpear', 0),
(509, 9, 'Activityevaluationvalues', 'addpear', 1),
(510, 1, 'Activityevaluationvalues', 'addhead', 1),
(511, 2, 'Activityevaluationvalues', 'addhead', 0),
(512, 3, 'Activityevaluationvalues', 'addhead', 0),
(513, 4, 'Activityevaluationvalues', 'addhead', 1),
(514, 5, 'Activityevaluationvalues', 'addhead', 1),
(515, 6, 'Activityevaluationvalues', 'addhead', 1),
(516, 7, 'Activityevaluationvalues', 'addhead', 1),
(517, 8, 'Activityevaluationvalues', 'addhead', 0),
(518, 9, 'Activityevaluationvalues', 'addhead', 1),
(519, 1, 'Activityevaluationvalues', 'self', 1),
(520, 2, 'Activityevaluationvalues', 'self', 0),
(521, 3, 'Activityevaluationvalues', 'self', 0),
(522, 4, 'Activityevaluationvalues', 'self', 1),
(523, 5, 'Activityevaluationvalues', 'self', 1),
(524, 6, 'Activityevaluationvalues', 'self', 1),
(525, 7, 'Activityevaluationvalues', 'self', 1),
(526, 8, 'Activityevaluationvalues', 'self', 1),
(527, 9, 'Activityevaluationvalues', 'self', 1),
(528, 1, 'Activityevaluationvalues', 'pear', 1),
(529, 2, 'Activityevaluationvalues', 'pear', 0),
(530, 3, 'Activityevaluationvalues', 'pear', 0),
(531, 4, 'Activityevaluationvalues', 'pear', 1),
(532, 5, 'Activityevaluationvalues', 'pear', 1),
(533, 6, 'Activityevaluationvalues', 'pear', 1),
(534, 7, 'Activityevaluationvalues', 'pear', 1),
(535, 8, 'Activityevaluationvalues', 'pear', 0),
(536, 9, 'Activityevaluationvalues', 'pear', 1),
(537, 1, 'Activityevaluationvalues', 'head', 1),
(538, 2, 'Activityevaluationvalues', 'head', 0),
(539, 3, 'Activityevaluationvalues', 'head', 0),
(540, 4, 'Activityevaluationvalues', 'head', 1),
(541, 5, 'Activityevaluationvalues', 'head', 1),
(542, 6, 'Activityevaluationvalues', 'head', 1),
(543, 7, 'Activityevaluationvalues', 'head', 1),
(544, 8, 'Activityevaluationvalues', 'head', 0),
(545, 9, 'Activityevaluationvalues', 'head', 1),
(546, 1, 'Activityevaluationvalues', 'view', 1),
(547, 2, 'Activityevaluationvalues', 'view', 0),
(548, 3, 'Activityevaluationvalues', 'view', 0),
(549, 4, 'Activityevaluationvalues', 'view', 1),
(550, 5, 'Activityevaluationvalues', 'view', 1),
(551, 6, 'Activityevaluationvalues', 'view', 1),
(552, 7, 'Activityevaluationvalues', 'view', 1),
(553, 8, 'Activityevaluationvalues', 'view', 0),
(554, 9, 'Activityevaluationvalues', 'view', 1),
(555, 1, 'Activityevaluationvalues', 'add', 1),
(556, 2, 'Activityevaluationvalues', 'add', 0),
(557, 3, 'Activityevaluationvalues', 'add', 0),
(558, 4, 'Activityevaluationvalues', 'add', 1),
(559, 5, 'Activityevaluationvalues', 'add', 1),
(560, 6, 'Activityevaluationvalues', 'add', 1),
(561, 7, 'Activityevaluationvalues', 'add', 1),
(562, 8, 'Activityevaluationvalues', 'add', 0),
(563, 9, 'Activityevaluationvalues', 'add', 1),
(564, 1, 'Activityevaluationvalues', 'edit', 1),
(565, 2, 'Activityevaluationvalues', 'edit', 0),
(566, 3, 'Activityevaluationvalues', 'edit', 0),
(567, 4, 'Activityevaluationvalues', 'edit', 1),
(568, 5, 'Activityevaluationvalues', 'edit', 1),
(569, 6, 'Activityevaluationvalues', 'edit', 1),
(570, 7, 'Activityevaluationvalues', 'edit', 1),
(571, 8, 'Activityevaluationvalues', 'edit', 0),
(572, 9, 'Activityevaluationvalues', 'edit', 1),
(573, 1, 'Activityevaluationvalues', 'delete', 1),
(574, 2, 'Activityevaluationvalues', 'delete', 0),
(575, 3, 'Activityevaluationvalues', 'delete', 0),
(576, 4, 'Activityevaluationvalues', 'delete', 1),
(577, 5, 'Activityevaluationvalues', 'delete', 1),
(578, 6, 'Activityevaluationvalues', 'delete', 1),
(579, 7, 'Activityevaluationvalues', 'delete', 1),
(580, 8, 'Activityevaluationvalues', 'delete', 0),
(581, 9, 'Activityevaluationvalues', 'delete', 1),
(582, 1, 'Behaveiorevaluations', 'activateByOffice', 1),
(583, 2, 'Behaveiorevaluations', 'activateByOffice', 0),
(584, 3, 'Behaveiorevaluations', 'activateByOffice', 0),
(585, 4, 'Behaveiorevaluations', 'activateByOffice', 1),
(586, 5, 'Behaveiorevaluations', 'activateByOffice', 1),
(587, 6, 'Behaveiorevaluations', 'activateByOffice', 1),
(588, 7, 'Behaveiorevaluations', 'activateByOffice', 1),
(589, 8, 'Behaveiorevaluations', 'activateByOffice', 1),
(590, 9, 'Behaveiorevaluations', 'activateByOffice', 1),
(591, 1, 'Behaveiorevaluations', 'index', 1),
(592, 2, 'Behaveiorevaluations', 'index', 1),
(593, 3, 'Behaveiorevaluations', 'index', 1),
(594, 4, 'Behaveiorevaluations', 'index', 1),
(595, 5, 'Behaveiorevaluations', 'index', 1),
(596, 6, 'Behaveiorevaluations', 'index', 1),
(597, 7, 'Behaveiorevaluations', 'index', 1),
(598, 8, 'Behaveiorevaluations', 'index', 1),
(599, 9, 'Behaveiorevaluations', 'index', 1),
(600, 1, 'Behaveiorevaluations', 'show', 1),
(601, 2, 'Behaveiorevaluations', 'show', 1),
(602, 3, 'Behaveiorevaluations', 'show', 1),
(603, 4, 'Behaveiorevaluations', 'show', 1),
(604, 5, 'Behaveiorevaluations', 'show', 1),
(605, 6, 'Behaveiorevaluations', 'show', 1),
(606, 7, 'Behaveiorevaluations', 'show', 1),
(607, 8, 'Behaveiorevaluations', 'show', 1),
(608, 9, 'Behaveiorevaluations', 'show', 1),
(609, 1, 'Behaveiorevaluations', 'view', 1),
(610, 2, 'Behaveiorevaluations', 'view', 0),
(611, 3, 'Behaveiorevaluations', 'view', 0),
(612, 4, 'Behaveiorevaluations', 'view', 1),
(613, 5, 'Behaveiorevaluations', 'view', 1),
(614, 6, 'Behaveiorevaluations', 'view', 1),
(615, 7, 'Behaveiorevaluations', 'view', 1),
(616, 8, 'Behaveiorevaluations', 'view', 1),
(617, 9, 'Behaveiorevaluations', 'view', 1),
(618, 1, 'Behaveiorevaluations', 'add', 1),
(619, 2, 'Behaveiorevaluations', 'add', 0),
(620, 3, 'Behaveiorevaluations', 'add', 0),
(621, 4, 'Behaveiorevaluations', 'add', 1),
(622, 5, 'Behaveiorevaluations', 'add', 1),
(623, 6, 'Behaveiorevaluations', 'add', 1),
(624, 7, 'Behaveiorevaluations', 'add', 1),
(625, 8, 'Behaveiorevaluations', 'add', 0),
(626, 9, 'Behaveiorevaluations', 'add', 1),
(627, 1, 'Behaveiorevaluations', 'addself', 1),
(628, 2, 'Behaveiorevaluations', 'addself', 0),
(629, 3, 'Behaveiorevaluations', 'addself', 0),
(630, 4, 'Behaveiorevaluations', 'addself', 1),
(631, 5, 'Behaveiorevaluations', 'addself', 1),
(632, 6, 'Behaveiorevaluations', 'addself', 1),
(633, 7, 'Behaveiorevaluations', 'addself', 1),
(634, 8, 'Behaveiorevaluations', 'addself', 1),
(635, 9, 'Behaveiorevaluations', 'addself', 1),
(636, 1, 'Behaveiorevaluations', 'addhead', 1),
(637, 2, 'Behaveiorevaluations', 'addhead', 1),
(638, 3, 'Behaveiorevaluations', 'addhead', 1),
(639, 4, 'Behaveiorevaluations', 'addhead', 1),
(640, 5, 'Behaveiorevaluations', 'addhead', 1),
(641, 6, 'Behaveiorevaluations', 'addhead', 1),
(642, 7, 'Behaveiorevaluations', 'addhead', 1),
(643, 8, 'Behaveiorevaluations', 'addhead', 1),
(644, 9, 'Behaveiorevaluations', 'addhead', 1),
(645, 1, 'Behaveiorevaluations', 'addpear', 1),
(646, 2, 'Behaveiorevaluations', 'addpear', 0),
(647, 3, 'Behaveiorevaluations', 'addpear', 0),
(648, 4, 'Behaveiorevaluations', 'addpear', 1),
(649, 5, 'Behaveiorevaluations', 'addpear', 1),
(650, 6, 'Behaveiorevaluations', 'addpear', 1),
(651, 7, 'Behaveiorevaluations', 'addpear', 1),
(652, 8, 'Behaveiorevaluations', 'addpear', 1),
(653, 9, 'Behaveiorevaluations', 'addpear', 1),
(654, 1, 'Behaveiorevaluations', 'pear', 1),
(655, 2, 'Behaveiorevaluations', 'pear', 0),
(656, 3, 'Behaveiorevaluations', 'pear', 0),
(657, 4, 'Behaveiorevaluations', 'pear', 1),
(658, 5, 'Behaveiorevaluations', 'pear', 1),
(659, 6, 'Behaveiorevaluations', 'pear', 1),
(660, 7, 'Behaveiorevaluations', 'pear', 1),
(661, 8, 'Behaveiorevaluations', 'pear', 1),
(662, 9, 'Behaveiorevaluations', 'pear', 1),
(663, 1, 'Behaveiorevaluations', 'self', 1),
(664, 2, 'Behaveiorevaluations', 'self', 0),
(665, 3, 'Behaveiorevaluations', 'self', 0),
(666, 4, 'Behaveiorevaluations', 'self', 1),
(667, 5, 'Behaveiorevaluations', 'self', 1),
(668, 6, 'Behaveiorevaluations', 'self', 1),
(669, 7, 'Behaveiorevaluations', 'self', 1),
(670, 8, 'Behaveiorevaluations', 'self', 1),
(671, 9, 'Behaveiorevaluations', 'self', 1),
(672, 1, 'Behaveiorevaluations', 'head', 1),
(673, 2, 'Behaveiorevaluations', 'head', 0),
(674, 3, 'Behaveiorevaluations', 'head', 0),
(675, 4, 'Behaveiorevaluations', 'head', 1),
(676, 5, 'Behaveiorevaluations', 'head', 1),
(677, 6, 'Behaveiorevaluations', 'head', 1),
(678, 7, 'Behaveiorevaluations', 'head', 1),
(679, 8, 'Behaveiorevaluations', 'head', 0),
(680, 9, 'Behaveiorevaluations', 'head', 1),
(681, 1, 'Evaluationvalues', 'index', 1),
(682, 2, 'Evaluationvalues', 'index', 0),
(683, 3, 'Evaluationvalues', 'index', 0),
(684, 4, 'Evaluationvalues', 'index', 1),
(685, 5, 'Evaluationvalues', 'index', 1),
(686, 6, 'Evaluationvalues', 'index', 1),
(687, 7, 'Evaluationvalues', 'index', 1),
(688, 8, 'Evaluationvalues', 'index', 1),
(689, 9, 'Evaluationvalues', 'index', 1),
(690, 1, 'Evaluationvalues', 'view', 1),
(691, 2, 'Evaluationvalues', 'view', 0),
(692, 3, 'Evaluationvalues', 'view', 1),
(693, 4, 'Evaluationvalues', 'view', 1),
(694, 5, 'Evaluationvalues', 'view', 1),
(695, 6, 'Evaluationvalues', 'view', 1),
(696, 7, 'Evaluationvalues', 'view', 1),
(697, 8, 'Evaluationvalues', 'view', 1),
(698, 9, 'Evaluationvalues', 'view', 1),
(699, 1, 'Evaluationvalues', 'add', 1),
(700, 2, 'Evaluationvalues', 'add', 1),
(701, 3, 'Evaluationvalues', 'add', 1),
(702, 4, 'Evaluationvalues', 'add', 1),
(703, 5, 'Evaluationvalues', 'add', 1),
(704, 6, 'Evaluationvalues', 'add', 1),
(705, 7, 'Evaluationvalues', 'add', 1),
(706, 8, 'Evaluationvalues', 'add', 1),
(707, 9, 'Evaluationvalues', 'add', 1),
(708, 1, 'Evaluationvalues', 'edit', 1),
(709, 2, 'Evaluationvalues', 'edit', 1),
(710, 3, 'Evaluationvalues', 'edit', 1),
(711, 4, 'Evaluationvalues', 'edit', 1),
(712, 5, 'Evaluationvalues', 'edit', 1),
(713, 6, 'Evaluationvalues', 'edit', 1),
(714, 7, 'Evaluationvalues', 'edit', 1),
(715, 8, 'Evaluationvalues', 'edit', 1),
(716, 9, 'Evaluationvalues', 'edit', 1),
(717, 1, 'Evaluationvalues', 'delete', 1),
(718, 2, 'Evaluationvalues', 'delete', 0),
(719, 3, 'Evaluationvalues', 'delete', 0),
(720, 4, 'Evaluationvalues', 'delete', 1),
(721, 5, 'Evaluationvalues', 'delete', 1),
(722, 6, 'Evaluationvalues', 'delete', 1),
(723, 7, 'Evaluationvalues', 'delete', 1),
(724, 8, 'Evaluationvalues', 'delete', 0),
(725, 9, 'Evaluationvalues', 'delete', 1),
(726, 1, 'Initiatives', 'show', 1),
(727, 2, 'Initiatives', 'show', 1),
(728, 3, 'Initiatives', 'show', 1),
(729, 4, 'Initiatives', 'show', 1),
(730, 5, 'Initiatives', 'show', 1),
(731, 6, 'Initiatives', 'show', 1),
(732, 7, 'Initiatives', 'show', 1),
(733, 8, 'Initiatives', 'show', 1),
(734, 9, 'Initiatives', 'show', 1),
(735, 1, 'Initiatives', 'showrelated', 1),
(736, 2, 'Initiatives', 'showrelated', 1),
(737, 3, 'Initiatives', 'showrelated', 1),
(738, 4, 'Initiatives', 'showrelated', 1),
(739, 5, 'Initiatives', 'showrelated', 1),
(740, 6, 'Initiatives', 'showrelated', 1),
(741, 7, 'Initiatives', 'showrelated', 1),
(742, 8, 'Initiatives', 'showrelated', 1),
(743, 9, 'Initiatives', 'showrelated', 1),
(744, 1, 'Measures', 'show', 1),
(745, 2, 'Measures', 'show', 1),
(746, 3, 'Measures', 'show', 1),
(747, 4, 'Measures', 'show', 1),
(748, 5, 'Measures', 'show', 1),
(749, 6, 'Measures', 'show', 1),
(750, 7, 'Measures', 'show', 1),
(751, 8, 'Measures', 'show', 1),
(752, 9, 'Measures', 'show', 1),
(753, 1, 'Measures', 'showrelated', 1),
(754, 2, 'Measures', 'showrelated', 1),
(755, 3, 'Measures', 'showrelated', 1),
(756, 4, 'Measures', 'showrelated', 1),
(757, 5, 'Measures', 'showrelated', 1),
(758, 6, 'Measures', 'showrelated', 1),
(759, 7, 'Measures', 'showrelated', 1),
(760, 8, 'Measures', 'showrelated', 1),
(761, 9, 'Measures', 'showrelated', 1),
(762, 1, 'Objectives', 'show', 1),
(763, 2, 'Objectives', 'show', 1),
(764, 3, 'Objectives', 'show', 1),
(765, 4, 'Objectives', 'show', 1),
(766, 5, 'Objectives', 'show', 1),
(767, 6, 'Objectives', 'show', 1),
(768, 7, 'Objectives', 'show', 1),
(769, 8, 'Objectives', 'show', 1),
(770, 9, 'Objectives', 'show', 1),
(771, 1, 'Objectives', 'showrelated', 1),
(772, 2, 'Objectives', 'showrelated', 1),
(773, 3, 'Objectives', 'showrelated', 1),
(774, 4, 'Objectives', 'showrelated', 1),
(775, 5, 'Objectives', 'showrelated', 1),
(776, 6, 'Objectives', 'showrelated', 1),
(777, 7, 'Objectives', 'showrelated', 1),
(778, 8, 'Objectives', 'showrelated', 1),
(779, 9, 'Objectives', 'showrelated', 1),
(780, 1, 'Offices', 'index', 1),
(781, 2, 'Offices', 'index', 1),
(782, 3, 'Offices', 'index', 1),
(783, 4, 'Offices', 'index', 1),
(784, 5, 'Offices', 'index', 1),
(785, 6, 'Offices', 'index', 1),
(786, 7, 'Offices', 'index', 1),
(787, 8, 'Offices', 'index', 1),
(788, 9, 'Offices', 'index', 1),
(789, 1, 'Perspectives', 'show', 1),
(790, 2, 'Perspectives', 'show', 1),
(791, 3, 'Perspectives', 'show', 1),
(792, 4, 'Perspectives', 'show', 1),
(793, 5, 'Perspectives', 'show', 1),
(794, 6, 'Perspectives', 'show', 1),
(795, 7, 'Perspectives', 'show', 1),
(796, 8, 'Perspectives', 'show', 1),
(797, 9, 'Perspectives', 'show', 1),
(798, 1, 'Perspectives', 'showrelated', 1),
(799, 2, 'Perspectives', 'showrelated', 1),
(800, 3, 'Perspectives', 'showrelated', 1),
(801, 4, 'Perspectives', 'showrelated', 1),
(802, 5, 'Perspectives', 'showrelated', 1),
(803, 6, 'Perspectives', 'showrelated', 1),
(804, 7, 'Perspectives', 'showrelated', 1),
(805, 8, 'Perspectives', 'showrelated', 1),
(806, 9, 'Perspectives', 'showrelated', 1),
(807, 1, 'Projects', 'index', 1),
(808, 2, 'Projects', 'index', 0),
(809, 3, 'Projects', 'index', 0),
(810, 4, 'Projects', 'index', 1),
(811, 5, 'Projects', 'index', 1),
(812, 6, 'Projects', 'index', 1),
(813, 7, 'Projects', 'index', 1),
(814, 8, 'Projects', 'index', 0),
(815, 9, 'Projects', 'index', 1),
(816, 1, 'Projects', 'view', 1),
(817, 2, 'Projects', 'view', 0),
(818, 3, 'Projects', 'view', 1),
(819, 4, 'Projects', 'view', 1),
(820, 5, 'Projects', 'view', 1),
(821, 6, 'Projects', 'view', 1),
(822, 7, 'Projects', 'view', 1),
(823, 8, 'Projects', 'view', 0),
(824, 9, 'Projects', 'view', 1),
(825, 1, 'Projects', 'add', 1),
(826, 2, 'Projects', 'add', 0),
(827, 3, 'Projects', 'add', 0),
(828, 4, 'Projects', 'add', 1),
(829, 5, 'Projects', 'add', 1),
(830, 6, 'Projects', 'add', 1),
(831, 7, 'Projects', 'add', 1),
(832, 8, 'Projects', 'add', 0),
(833, 9, 'Projects', 'add', 1),
(834, 1, 'Projects', 'edit', 1),
(835, 2, 'Projects', 'edit', 0),
(836, 3, 'Projects', 'edit', 0),
(837, 4, 'Projects', 'edit', 1),
(838, 5, 'Projects', 'edit', 1),
(839, 6, 'Projects', 'edit', 1),
(840, 7, 'Projects', 'edit', 1),
(841, 8, 'Projects', 'edit', 1),
(842, 9, 'Projects', 'edit', 1),
(843, 1, 'Projects', 'delete', 1),
(844, 2, 'Projects', 'delete', 0),
(845, 3, 'Projects', 'delete', 0),
(846, 4, 'Projects', 'delete', 1),
(847, 5, 'Projects', 'delete', 1),
(848, 6, 'Projects', 'delete', 1),
(849, 7, 'Projects', 'delete', 1),
(850, 8, 'Projects', 'delete', 1),
(851, 9, 'Projects', 'delete', 1),
(852, 1, 'ProjectsTasks', 'index', 1),
(853, 2, 'ProjectsTasks', 'index', 0),
(854, 3, 'ProjectsTasks', 'index', 0),
(855, 4, 'ProjectsTasks', 'index', 1),
(856, 5, 'ProjectsTasks', 'index', 1),
(857, 6, 'ProjectsTasks', 'index', 1),
(858, 7, 'ProjectsTasks', 'index', 1),
(859, 8, 'ProjectsTasks', 'index', 0),
(860, 9, 'ProjectsTasks', 'index', 1),
(861, 1, 'ProjectsTasks', 'view', 1),
(862, 2, 'ProjectsTasks', 'view', 0),
(863, 3, 'ProjectsTasks', 'view', 0),
(864, 4, 'ProjectsTasks', 'view', 1),
(865, 5, 'ProjectsTasks', 'view', 1),
(866, 6, 'ProjectsTasks', 'view', 1),
(867, 7, 'ProjectsTasks', 'view', 1),
(868, 8, 'ProjectsTasks', 'view', 0),
(869, 9, 'ProjectsTasks', 'view', 1),
(870, 1, 'ProjectsTasks', 'add', 1),
(871, 2, 'ProjectsTasks', 'add', 0),
(872, 3, 'ProjectsTasks', 'add', 0),
(873, 4, 'ProjectsTasks', 'add', 1),
(874, 5, 'ProjectsTasks', 'add', 1),
(875, 6, 'ProjectsTasks', 'add', 1),
(876, 7, 'ProjectsTasks', 'add', 1),
(877, 8, 'ProjectsTasks', 'add', 0),
(878, 9, 'ProjectsTasks', 'add', 1),
(879, 1, 'ProjectsTasks', 'edit', 1),
(880, 2, 'ProjectsTasks', 'edit', 0),
(881, 3, 'ProjectsTasks', 'edit', 0),
(882, 4, 'ProjectsTasks', 'edit', 1),
(883, 5, 'ProjectsTasks', 'edit', 1),
(884, 6, 'ProjectsTasks', 'edit', 1),
(885, 7, 'ProjectsTasks', 'edit', 1),
(886, 8, 'ProjectsTasks', 'edit', 0),
(887, 9, 'ProjectsTasks', 'edit', 1),
(888, 1, 'ProjectsTasks', 'delete', 1),
(889, 2, 'ProjectsTasks', 'delete', 0),
(890, 3, 'ProjectsTasks', 'delete', 0),
(891, 4, 'ProjectsTasks', 'delete', 1),
(892, 5, 'ProjectsTasks', 'delete', 1),
(893, 6, 'ProjectsTasks', 'delete', 1),
(894, 7, 'ProjectsTasks', 'delete', 1),
(895, 8, 'ProjectsTasks', 'delete', 1),
(896, 9, 'ProjectsTasks', 'delete', 1),
(897, 1, 'Reports', 'index', 1),
(898, 2, 'Reports', 'index', 1),
(899, 3, 'Reports', 'index', 1),
(900, 4, 'Reports', 'index', 1),
(901, 5, 'Reports', 'index', 1),
(902, 6, 'Reports', 'index', 1),
(903, 7, 'Reports', 'index', 1),
(904, 8, 'Reports', 'index', 1),
(905, 9, 'Reports', 'index', 1),
(906, 9, 'Reports', 'report', 1),
(907, 1, 'Reports', 'predefined', 1),
(908, 2, 'Reports', 'predefined', 0),
(909, 3, 'Reports', 'predefined', 0),
(910, 4, 'Reports', 'predefined', 1),
(911, 5, 'Reports', 'predefined', 1),
(912, 6, 'Reports', 'predefined', 1),
(913, 7, 'Reports', 'predefined', 1),
(914, 8, 'Reports', 'predefined', 0),
(915, 9, 'Reports', 'predefined', 1),
(916, 1, 'Reports', 'office', 1),
(917, 2, 'Reports', 'office', 1),
(918, 3, 'Reports', 'office', 1),
(919, 4, 'Reports', 'office', 1),
(920, 5, 'Reports', 'office', 1),
(921, 6, 'Reports', 'office', 1),
(922, 7, 'Reports', 'office', 1),
(923, 8, 'Reports', 'office', 1),
(924, 9, 'Reports', 'office', 1),
(925, 1, 'Reports', 'personala', 1),
(926, 2, 'Reports', 'personala', 1),
(927, 3, 'Reports', 'personala', 1),
(928, 4, 'Reports', 'personala', 1),
(929, 5, 'Reports', 'personala', 1),
(930, 6, 'Reports', 'personala', 1),
(931, 7, 'Reports', 'personala', 1),
(932, 8, 'Reports', 'personala', 1),
(933, 9, 'Reports', 'personala', 1),
(934, 9, 'Reports', 'download', 1),
(935, 9, 'Subactivities', 'view', 1),
(936, 9, 'Subactivities', 'add', 1),
(937, 9, 'Subactivities', 'approve', 1),
(938, 9, 'Subactivities', 'makeAproveDisAprove', 1),
(939, 9, 'Subactivities', 'remark', 1),
(940, 9, 'Subactivities', 'edit', 1),
(941, 1, 'Subs', 'index', 1),
(942, 2, 'Subs', 'index', 1),
(943, 3, 'Subs', 'index', 1),
(944, 4, 'Subs', 'index', 1),
(945, 5, 'Subs', 'index', 1),
(946, 6, 'Subs', 'index', 1),
(947, 7, 'Subs', 'index', 1),
(948, 8, 'Subs', 'index', 1),
(949, 9, 'Subs', 'index', 1),
(950, 1, 'Subs', 'view', 1),
(951, 2, 'Subs', 'view', 1),
(952, 3, 'Subs', 'view', 1),
(953, 4, 'Subs', 'view', 1),
(954, 5, 'Subs', 'view', 1),
(955, 6, 'Subs', 'view', 1),
(956, 7, 'Subs', 'view', 1),
(957, 8, 'Subs', 'view', 1),
(958, 9, 'Subs', 'view', 1),
(959, 1, 'Subs', 'add', 1),
(960, 2, 'Subs', 'add', 0),
(961, 3, 'Subs', 'add', 0),
(962, 4, 'Subs', 'add', 1),
(963, 5, 'Subs', 'add', 1),
(964, 6, 'Subs', 'add', 1),
(965, 7, 'Subs', 'add', 1),
(966, 8, 'Subs', 'add', 1),
(967, 9, 'Subs', 'add', 1),
(968, 1, 'Subs', 'approve', 0),
(969, 2, 'Subs', 'approve', 0),
(970, 3, 'Subs', 'approve', 0),
(971, 4, 'Subs', 'approve', 1),
(972, 5, 'Subs', 'approve', 1),
(973, 6, 'Subs', 'approve', 1),
(974, 7, 'Subs', 'approve', 1),
(975, 8, 'Subs', 'approve', 0),
(976, 9, 'Subs', 'approve', 1),
(977, 1, 'Subs', 'makeAproveDisAprove', 0),
(978, 2, 'Subs', 'makeAproveDisAprove', 0),
(979, 3, 'Subs', 'makeAproveDisAprove', 0),
(980, 4, 'Subs', 'makeAproveDisAprove', 1),
(981, 5, 'Subs', 'makeAproveDisAprove', 1),
(982, 6, 'Subs', 'makeAproveDisAprove', 1),
(983, 7, 'Subs', 'makeAproveDisAprove', 1),
(984, 8, 'Subs', 'makeAproveDisAprove', 0),
(985, 9, 'Subs', 'makeAproveDisAprove', 1),
(986, 1, 'Subs', 'remark', 0),
(987, 2, 'Subs', 'remark', 0),
(988, 3, 'Subs', 'remark', 0),
(989, 4, 'Subs', 'remark', 1),
(990, 5, 'Subs', 'remark', 1),
(991, 6, 'Subs', 'remark', 1),
(992, 7, 'Subs', 'remark', 1),
(993, 8, 'Subs', 'remark', 0),
(994, 9, 'Subs', 'remark', 1),
(995, 1, 'Subs', 'edit', 0),
(996, 2, 'Subs', 'edit', 0),
(997, 3, 'Subs', 'edit', 0),
(998, 4, 'Subs', 'edit', 1),
(999, 5, 'Subs', 'edit', 1),
(1000, 6, 'Subs', 'edit', 1),
(1001, 7, 'Subs', 'edit', 1),
(1002, 8, 'Subs', 'edit', 1),
(1003, 9, 'Subs', 'edit', 1),
(1004, 9, 'Targets', 'index', 1),
(1005, 9, 'Targets', 'view', 1),
(1006, 9, 'Targets', 'add', 1),
(1007, 9, 'Targets', 'edit', 1),
(1008, 9, 'Targets', 'actual', 1),
(1009, 1, 'Themes', 'show', 0),
(1010, 2, 'Themes', 'show', 1),
(1011, 3, 'Themes', 'show', 1),
(1012, 4, 'Themes', 'show', 1),
(1013, 5, 'Themes', 'show', 1),
(1014, 6, 'Themes', 'show', 1),
(1015, 7, 'Themes', 'show', 1),
(1016, 8, 'Themes', 'show', 1),
(1017, 9, 'Themes', 'show', 1),
(1018, 1, 'Themes', 'showrelated', 0),
(1019, 2, 'Themes', 'showrelated', 1),
(1020, 3, 'Themes', 'showrelated', 1),
(1021, 4, 'Themes', 'showrelated', 1),
(1022, 5, 'Themes', 'showrelated', 1),
(1023, 6, 'Themes', 'showrelated', 1),
(1024, 7, 'Themes', 'showrelated', 1),
(1025, 8, 'Themes', 'showrelated', 1),
(1026, 9, 'Themes', 'showrelated', 1),
(1027, 1, 'Offices', 'cascadedObjective', 1),
(1028, 2, 'Offices', 'cascadedObjective', 1),
(1029, 3, 'Offices', 'cascadedObjective', 1),
(1030, 4, 'Offices', 'cascadedObjective', 1),
(1031, 5, 'Offices', 'cascadedObjective', 1),
(1032, 6, 'Offices', 'cascadedObjective', 1),
(1033, 7, 'Offices', 'cascadedObjective', 1),
(1034, 8, 'Offices', 'cascadedObjective', 1),
(1035, 9, 'Offices', 'cascadedObjective', 1),
(1036, 1, 'Activities', 'getRelatedSubactivities', 1),
(1037, 2, 'Activities', 'getRelatedSubactivities', 1),
(1038, 3, 'Activities', 'getRelatedSubactivities', 1),
(1039, 4, 'Activities', 'getRelatedSubactivities', 1),
(1040, 5, 'Activities', 'getRelatedSubactivities', 1),
(1041, 6, 'Activities', 'getRelatedSubactivities', 1),
(1042, 7, 'Activities', 'getRelatedSubactivities', 1),
(1043, 8, 'Activities', 'getRelatedSubactivities', 1),
(1044, 9, 'Activities', 'getRelatedSubactivities', 1),
(1045, 1, 'Activities', 'getRelatedActivityevaluations', 1),
(1046, 2, 'Activities', 'getRelatedActivityevaluations', 1),
(1047, 3, 'Activities', 'getRelatedActivityevaluations', 1),
(1048, 4, 'Activities', 'getRelatedActivityevaluations', 1),
(1049, 5, 'Activities', 'getRelatedActivityevaluations', 1),
(1050, 6, 'Activities', 'getRelatedActivityevaluations', 1),
(1051, 7, 'Activities', 'getRelatedActivityevaluations', 1),
(1052, 8, 'Activities', 'getRelatedActivityevaluations', 1),
(1053, 9, 'Activities', 'getRelatedActivityevaluations', 1),
(1054, 1, 'Objectives', 'getByPerspective', 1),
(1055, 2, 'Objectives', 'getByPerspective', 1),
(1056, 3, 'Objectives', 'getByPerspective', 1),
(1057, 4, 'Objectives', 'getByPerspective', 1),
(1058, 5, 'Objectives', 'getByPerspective', 1),
(1059, 6, 'Objectives', 'getByPerspective', 1),
(1060, 7, 'Objectives', 'getByPerspective', 1),
(1061, 8, 'Objectives', 'getByPerspective', 1),
(1062, 9, 'Objectives', 'getByPerspective', 1),
(1063, 1, 'Objectives', 'getRelatedMeasures', 1),
(1064, 2, 'Objectives', 'getRelatedMeasures', 1),
(1065, 3, 'Objectives', 'getRelatedMeasures', 1),
(1066, 4, 'Objectives', 'getRelatedMeasures', 1),
(1067, 5, 'Objectives', 'getRelatedMeasures', 1),
(1068, 6, 'Objectives', 'getRelatedMeasures', 1),
(1069, 7, 'Objectives', 'getRelatedMeasures', 1),
(1070, 8, 'Objectives', 'getRelatedMeasures', 1),
(1071, 9, 'Objectives', 'getRelatedMeasures', 1),
(1072, 1, 'Measures', 'getByObjective', 1),
(1073, 2, 'Measures', 'getByObjective', 1),
(1074, 3, 'Measures', 'getByObjective', 1),
(1075, 4, 'Measures', 'getByObjective', 1),
(1076, 5, 'Measures', 'getByObjective', 1),
(1077, 6, 'Measures', 'getByObjective', 1),
(1078, 7, 'Measures', 'getByObjective', 1),
(1079, 8, 'Measures', 'getByObjective', 1),
(1080, 9, 'Measures', 'getByObjective', 1),
(1081, 1, 'Measures', 'getByObjectivea', 1),
(1082, 2, 'Measures', 'getByObjectivea', 1),
(1083, 3, 'Measures', 'getByObjectivea', 1),
(1084, 4, 'Measures', 'getByObjectivea', 1),
(1085, 5, 'Measures', 'getByObjectivea', 1),
(1086, 6, 'Measures', 'getByObjectivea', 1),
(1087, 7, 'Measures', 'getByObjectivea', 1),
(1088, 8, 'Measures', 'getByObjectivea', 1),
(1089, 9, 'Measures', 'getByObjectivea', 1);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `activities`
--
ALTER TABLE `activities`
  ADD CONSTRAINT `activities_ibfk_1` FOREIGN KEY (`perspective_id`) REFERENCES `perspectives` (`id`);

--
-- Constraints for table `activitievaluations`
--
ALTER TABLE `activitievaluations`
  ADD CONSTRAINT `activitievaluations_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`);

--
-- Constraints for table `activityevaluationvalues`
--
ALTER TABLE `activityevaluationvalues`
  ADD CONSTRAINT `activityevaluationvalues_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `activityevaluationvalues_ibfk_2` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `activityevaluationvalues_ibfk_3` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `activityevaluationvalues_ibfk_4` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`);

--
-- Constraints for table `behaveiorevaluations`
--
ALTER TABLE `behaveiorevaluations`
  ADD CONSTRAINT `behaveiorevaluations_ibfk_1` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `behaveiorevaluations_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`),
  ADD CONSTRAINT `behaveiorevaluations_ibfk_3` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`);

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
-- Constraints for table `subs`
--
ALTER TABLE `subs`
  ADD CONSTRAINT `subs_ibfk_1` FOREIGN KEY (`activity_id`) REFERENCES `activities` (`id`),
  ADD CONSTRAINT `subs_ibfk_2` FOREIGN KEY (`period_id`) REFERENCES `periods` (`id`),
  ADD CONSTRAINT `subs_ibfk_3` FOREIGN KEY (`office_id`) REFERENCES `offices` (`id`),
  ADD CONSTRAINT `subs_ibfk_4` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

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
