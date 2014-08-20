-- phpMyAdmin SQL Dump
-- version 2.8.0.1
-- http://www.phpmyadmin.net
-- 
-- Host: custsql-nf01.eigbox.net
-- Generation Time: Jan 28, 2013 at 06:33 PM
-- Server version: 5.0.91
-- PHP Version: 4.4.9
-- 
-- Database: 'db_redwoodvalley'
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table 'gallery'
-- 

CREATE TABLE gallery (
  gallery_id smallint(4) NOT NULL auto_increment,
  gallery_largeimage varchar(100) NOT NULL,
  gallery_thumb varchar(100) NOT NULL,
  gallery_name varchar(200) default NULL,
  gallery_type varchar(50) NOT NULL,
  PRIMARY KEY  (gallery_id)
) ENGINE=MyISAM AUTO_INCREMENT=23 DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table 'gallery'
-- 

INSERT INTO gallery VALUES (1, 'lrgimg1.png', 'thumb1.jpg', NULL, 'deck');
INSERT INTO gallery VALUES (2, 'lrgimg2.png', 'thumb2.jpg', NULL, 'deck');
INSERT INTO gallery VALUES (3, 'lrgimg3.png', 'thumb3.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (4, 'lrgimg4.png', 'thumb4.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (7, 'lrgimg7.png', 'thumb7.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (8, 'lrgimg8.png', 'thumb8.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (10, 'lrgimg10.png', 'thumb10.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (11, 'lrgimg11.png', 'thumb11.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (12, 'lrgimg12.png', 'thumb12.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (13, 'lrgimg13.png', 'thumb13.jpg', NULL, 'other');
INSERT INTO gallery VALUES (16, 'lrgimg14.png', 'thumb14.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (15, 'lrgimg15.png', 'thumb15.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (17, 'lrgimg16.png', 'thumb16.jpg', NULL, 'deck');
INSERT INTO gallery VALUES (18, 'lrgimg17.png', 'thumb17.jpg', NULL, 'deck');
INSERT INTO gallery VALUES (19, 'lrgimg18.png', 'thumb18.jpg', NULL, 'deck');
INSERT INTO gallery VALUES (22, 'lrgimg20.png', 'thumb20.jpg', NULL, 'shed');
INSERT INTO gallery VALUES (20, 'lrgimg19.png', 'thumb19.jpg', NULL, 'shed');
