# phpMyAdmin SQL Dump
# version 2.5.5
# http://www.phpmyadmin.net
#
# Host: localhost
# Generation Time: Mar 23, 2004 at 02:10 PM
# Server version: 4.0.18
# PHP Version: 4.3.4
# 
# Database : `volunteers`
# 

# --------------------------------------------------------

#
# Table structure for table `vlist`
#

CREATE TABLE `vlist` (
  `id` int(3) NOT NULL auto_increment,
  `first` varchar(30) NOT NULL default '',
  `last` varchar(40) NOT NULL default '',
  `email` varchar(40) NOT NULL default '',
  `country` varchar(40) NOT NULL default '',
  `skill` varchar(50) NOT NULL default '',
  PRIMARY KEY  (`id`)
) TYPE=MyISAM COMMENT='list of Habitat volunteers' AUTO_INCREMENT=13 ;

#
# Dumping data for table `vlist`
#

INSERT INTO `vlist` VALUES (1, 'firstname', 'lastname', 'test@test.com', 'usa', 'carpentry');
INSERT INTO `vlist` VALUES (2, 'firstname', 'lastname', 'quiz@quiz.com', 'mexico', 'electrical');
