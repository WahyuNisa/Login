-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Aug 03, 2009 at 11:10 PM
-- Server version: 5.0.41
-- PHP Version: 4.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `endemikdb`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `admin`
-- 

CREATE TABLE `admin` (
  `id` int(3) NOT NULL auto_increment,
  `nama` varchar(255) collate latin1_general_ci NOT NULL,
  `email` varchar(255) collate latin1_general_ci NOT NULL,
  `kelamin` varchar(8) collate latin1_general_ci NOT NULL,
  `user` varchar(25) collate latin1_general_ci NOT NULL,
  `password` varchar(255) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `admin`
-- 

INSERT INTO `admin` VALUES (1, 'Agus Sumarna', 'sumarna@yahoo.com', 'pria', 'agus', 'fdf169558242ee051cca1479770ebac3');
INSERT INTO `admin` VALUES (2, 'Siera Nevada', 'siera@yahoo.com', 'Wanita', 'siera', '47c0abc24dd9c450577173afdd173d64');
