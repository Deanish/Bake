-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2014 at 05:05 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bake`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `candidates`
--
CREATE TABLE IF NOT EXISTS `candidates` (
`id` int(11)
,`user_id` int(11)
,`title` varchar(50)
,`skills` varchar(50)
,`qualification` varchar(50)
,`vacancies` varchar(50)
,`description` text
,`experience` varchar(50)
,`salary` varchar(50)
,`location` varchar(50)
,`industryType` varchar(50)
,`companyName` varchar(50)
,`profile` text
,`photo` varchar(100)
,`photo_dir` varchar(100)
,`url` varchar(50)
,`person` varchar(50)
,`contact` varchar(50)
,`visible` tinyint(2)
,`created` datetime
,`modified` datetime
);
-- --------------------------------------------------------

--
-- Table structure for table `desires`
--

CREATE TABLE IF NOT EXISTS `desires` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` varchar(50) DEFAULT NULL,
  `location` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `industryType` varchar(50) NOT NULL,
  `jobType` varchar(50) NOT NULL,
  `shiftType` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `desires`
--

INSERT INTO `desires` (`id`, `user_id`, `location`, `skills`, `qualification`, `experience`, `industryType`, `jobType`, `shiftType`, `created`, `modified`) VALUES
(1, '1', 'Bangalore', 'PHP', 'MCA', '0-2 Years', 'IT Jobs', 'Software', 'Full Time', '2014-11-07 08:52:59', '2014-11-13 12:38:58'),
(2, '2', 'Delhi', 'a', '', '', 'Accounts Jobs', 'Software', 'Full Time', '2014-11-07 08:55:57', '2014-11-07 08:55:57');

-- --------------------------------------------------------

--
-- Table structure for table `educations`
--

CREATE TABLE IF NOT EXISTS `educations` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `specialization` varchar(50) NOT NULL,
  `institute` varchar(50) NOT NULL,
  `university` varchar(50) NOT NULL,
  `marks` varchar(50) NOT NULL,
  `yop` varchar(50) NOT NULL,
  `courseType` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `educations`
--

INSERT INTO `educations` (`id`, `user_id`, `qualification`, `specialization`, `institute`, `university`, `marks`, `yop`, `courseType`, `created`, `modified`) VALUES
(1, 1, 'MCA', 'Computer Application', 'CMRIT', 'VTU', '79%', '2014', 'Full Time', '2014-11-07 08:51:49', '2014-11-07 08:51:49'),
(2, 2, 'BSc', 'Computer Application', 'aq', 'q', 'q', 'q', 'Full Time', '2014-11-07 08:55:38', '2014-11-07 09:02:07');

-- --------------------------------------------------------

--
-- Table structure for table `featuredcompanies`
--

CREATE TABLE IF NOT EXISTS `featuredcompanies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `created` int(11) NOT NULL,
  `modified` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `featuredjobs`
--

CREATE TABLE IF NOT EXISTS `featuredjobs` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `interests`
--

CREATE TABLE IF NOT EXISTS `interests` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post_id` int(11) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=11 ;

--
-- Dumping data for table `interests`
--

INSERT INTO `interests` (`id`, `user_id`, `post_id`, `created`, `modified`) VALUES
(7, 1, 24, '2014-11-15 09:33:00', '2014-11-15 09:33:00'),
(8, 3, 24, '2014-11-15 09:33:24', '2014-11-15 09:33:24'),
(9, 1, 26, '2014-11-15 09:50:10', '2014-11-15 09:50:10');

-- --------------------------------------------------------

--
-- Table structure for table `personals`
--

CREATE TABLE IF NOT EXISTS `personals` (
  `id` int(11) NOT NULL,
  `user_id` varchar(50) DEFAULT NULL,
  `mobile` varchar(20) NOT NULL,
  `nationality` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` date NOT NULL,
  `resume` varchar(100) NOT NULL DEFAULT 'default.pdf',
  `resume_dir` varchar(100) NOT NULL DEFAULT '0',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personals`
--

INSERT INTO `personals` (`id`, `user_id`, `mobile`, `nationality`, `location`, `gender`, `dob`, `resume`, `resume_dir`, `created`, `modified`) VALUES
(1, '1', '4564565464', 'India', 'Bangalore', 'male', '2014-12-31', '2008-BMW-X6-Sports-Activity-Coupe-011-1024.jpg', '1', '2014-11-07 07:05:46', '2014-11-07 08:40:19'),
(2, '2', '7777777777', 'Others', 'Kolkata', 'female', '2014-11-07', '1920x1200-bmw-logo.jpg', '2', '2014-11-07 08:55:19', '2014-11-07 09:00:27');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE IF NOT EXISTS `posts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `vacancies` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `experience` varchar(50) NOT NULL,
  `salary` varchar(50) NOT NULL,
  `location` varchar(50) NOT NULL,
  `industryType` varchar(50) NOT NULL,
  `companyName` varchar(50) NOT NULL,
  `profile` text NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `photo_dir` varchar(100) NOT NULL DEFAULT '0',
  `url` varchar(50) NOT NULL,
  `person` varchar(50) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `visible` tinyint(2) NOT NULL COMMENT '1 = Hidden, 2 = visible ',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=31 ;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `title`, `skills`, `qualification`, `vacancies`, `description`, `experience`, `salary`, `location`, `industryType`, `companyName`, `profile`, `photo`, `photo_dir`, `url`, `person`, `contact`, `visible`, `created`, `modified`) VALUES
(24, 1, 'Software developer', 'PHP, Ruby on Rails', 'BCA, MCA', '2', 'Software Developer', '0-2 Years', '1,00,000 / Year', 'Bangalore', 'IT Jobs', 'SkyLabs Inc', 'Located @ Yelahanka', '1920x1200-bmw-logo.jpg', '24', 'http://skylabsinc.in/', 'Mithun Kumar Muddan', '4444444442', 1, '2014-11-06 06:50:06', '2014-11-15 16:10:16'),
(26, 2, 'z', 'z', 'z', 'z', 'z', '0-2 Years', 'z', 'Bangalore', 'IT Jobs', 'z', 'z', 'SOCIAL2.png', '26', 'z', 'z', '1111111111', 1, '2014-11-06 07:44:53', '2014-11-06 07:44:53'),
(30, 1, 'Tester', 'Java', 'BCA', '2', 'Testing', '2-5 Years', '100000/year', 'Delhi', 'Accounts Jobs', 'ABCC', 'Adasdas', '1-bmw-x6 copy.jpg', '30', 'asds', 'dsad', '7454123346', 1, '2014-11-13 10:50:14', '2014-11-13 10:50:14');

-- --------------------------------------------------------

--
-- Table structure for table `professionals`
--

CREATE TABLE IF NOT EXISTS `professionals` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `status` varchar(50) NOT NULL,
  `years` varchar(50) NOT NULL,
  `months` varchar(50) NOT NULL,
  `ctc` varchar(50) NOT NULL,
  `company` varchar(50) NOT NULL,
  `designation` varchar(50) NOT NULL,
  `skills` varchar(50) NOT NULL,
  `notice` varchar(50) NOT NULL,
  `prevCompanies` varchar(50) NOT NULL,
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `professionals`
--

INSERT INTO `professionals` (`id`, `user_id`, `status`, `years`, `months`, `ctc`, `company`, `designation`, `skills`, `notice`, `prevCompanies`, `created`, `modified`) VALUES
(1, 1, 'Fresher', '0', '0', '0', '', '', 'PHP', '', '', '2014-11-07 08:50:02', '2014-11-07 08:50:02'),
(2, 2, 'Fresher', 'Null', 'Null', '', 'w', '', 'w', '', '', '2014-11-07 08:55:47', '2014-11-07 09:02:51');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL COMMENT 'email id',
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `photo` varchar(100) NOT NULL DEFAULT 'default.jpg',
  `photo_dir` varchar(100) NOT NULL DEFAULT '0',
  `role` tinyint(2) NOT NULL COMMENT '1 = job seeker, 2 = recruiter, 3 = admin ',
  `created` datetime NOT NULL,
  `modified` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `photo`, `photo_dir`, `role`, `created`, `modified`) VALUES
(1, 'admin@vspell.com', 'Admin', 'VSpell Consultancy', '718a7ce50e6a12e547738c869630f515efc3e413', '1789409.jpg', '1', 3, '2014-11-05 10:08:39', '2014-11-07 07:47:53'),
(2, 'test@vspell.com', 'Test', 'VSpell', '718a7ce50e6a12e547738c869630f515efc3e413', 'Need-for-Speed-MOST-WANTED-Ana-Konu-IKTI-.jpg', '22', 1, '2014-11-05 11:39:42', '2014-11-05 11:39:42'),
(3, 'blah@vspell.com', 'Blah', 'VSpell', '718a7ce50e6a12e547738c869630f515efc3e413', 'default.jpg', '0', 2, '2014-11-05 11:45:56', '2014-11-05 11:45:56');

-- --------------------------------------------------------

--
-- Structure for view `candidates`
--
DROP TABLE IF EXISTS `candidates`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `candidates` AS select `posts`.`id` AS `id`,`posts`.`user_id` AS `user_id`,`posts`.`title` AS `title`,`posts`.`skills` AS `skills`,`posts`.`qualification` AS `qualification`,`posts`.`vacancies` AS `vacancies`,`posts`.`description` AS `description`,`posts`.`experience` AS `experience`,`posts`.`salary` AS `salary`,`posts`.`location` AS `location`,`posts`.`industryType` AS `industryType`,`posts`.`companyName` AS `companyName`,`posts`.`profile` AS `profile`,`posts`.`photo` AS `photo`,`posts`.`photo_dir` AS `photo_dir`,`posts`.`url` AS `url`,`posts`.`person` AS `person`,`posts`.`contact` AS `contact`,`posts`.`visible` AS `visible`,`posts`.`created` AS `created`,`posts`.`modified` AS `modified` from `posts`;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
