-- phpMyAdmin SQL Dump
-- version 2.10.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Dec 15, 2015 at 11:59 AM
-- Server version: 5.0.41
-- PHP Version: 5.2.3

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- Database: `ict`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `available`
-- 

CREATE TABLE `available` (
  `isbn` varchar(5) NOT NULL,
  `type` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `year` varchar(5) NOT NULL,
  `date_av` timestamp NOT NULL default CURRENT_TIMESTAMP,
  PRIMARY KEY  (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `available`
-- 

INSERT INTO `available` (`isbn`, `type`, `title`, `author`, `year`, `date_av`) VALUES 
('B455', 'ICT', 'blaise', 'Helen', '1998', '0000-00-00 00:00:00'),
('egrh', 'ICT', 'rytu', 'fyyu', 'rhyyu', '0000-00-00 00:00:00'),
('bhhg', 'ECONOMICS', 'kjj', 'mn', '5678', '0000-00-00 00:00:00'),
('LUKA', 'ICT', 'CUU', 'ME', 'TWO', '0000-00-00 00:00:00');

-- --------------------------------------------------------

-- 
-- Table structure for table `books`
-- 

CREATE TABLE `books` (
  `reg` varchar(40) NOT NULL,
  `isbn` varchar(5) NOT NULL,
  `type` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `year` int(5) NOT NULL,
  `date_av` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `books`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `borrow`
-- 

CREATE TABLE `borrow` (
  `reg` varchar(40) NOT NULL,
  `isbn` varchar(5) NOT NULL,
  `type` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `year` int(5) NOT NULL,
  `date_av` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `borrow`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `come`
-- 

CREATE TABLE `come` (
  `reg` varchar(40) NOT NULL,
  `isbn` varchar(5) NOT NULL,
  `type` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `year` varchar(5) NOT NULL,
  `date_av` date NOT NULL,
  PRIMARY KEY  (`reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `come`
-- 

INSERT INTO `come` (`reg`, `isbn`, `type`, `title`, `author`, `year`, `date_av`) VALUES 
('ytuy', 'egrh', 'ICT', 'rytu', 'fyyu', 'rhyyu', '0000-00-00'),
('BAIT\\14D\\SU\\A1217', 'LUKA', 'ICT', 'CUU', 'ME', 'TWO', '0000-00-00');

-- --------------------------------------------------------

-- 
-- Table structure for table `log`
-- 

CREATE TABLE `log` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `log`
-- 

INSERT INTO `log` (`username`, `password`) VALUES 
('admin', 'admin');

-- --------------------------------------------------------

-- 
-- Table structure for table `login`
-- 

CREATE TABLE `login` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`username`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `login`
-- 

INSERT INTO `login` (`username`, `password`) VALUES 
('librarian', 'librarian');

-- --------------------------------------------------------

-- 
-- Table structure for table `students`
-- 

CREATE TABLE `students` (
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `reg` varchar(40) NOT NULL,
  `faculty` varchar(40) NOT NULL,
  `year` varchar(5) NOT NULL,
  `semester` varchar(5) NOT NULL,
  `phone` varchar(40) NOT NULL,
  `address` varchar(40) NOT NULL,
  `date_av` timestamp NOT NULL default CURRENT_TIMESTAMP on update CURRENT_TIMESTAMP,
  PRIMARY KEY  (`reg`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `students`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `transaction`
-- 

CREATE TABLE `transaction` (
  `reg` varchar(40) NOT NULL,
  `isbn` varchar(5) NOT NULL,
  `type` varchar(40) NOT NULL,
  `title` varchar(40) NOT NULL,
  `author` varchar(40) NOT NULL,
  `year` varchar(5) NOT NULL,
  `date_av` timestamp NOT NULL default CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- 
-- Dumping data for table `transaction`
-- 

INSERT INTO `transaction` (`reg`, `isbn`, `type`, `title`, `author`, `year`, `date_av`) VALUES 
('BAIT/11/DB/J0238', 'B455', 'ICT', 'blaise', 'Helen', '1998', '0000-00-00 00:00:00'),
('ytuy', 'egrh', 'ICT', 'rytu', 'fyyu', 'rhyyu', '0000-00-00 00:00:00'),
('BAIT\\14D\\SU\\A1217', 'LUKA', 'ICT', 'CUU', 'ME', 'TWO', '0000-00-00 00:00:00'),
('BAIT\\14D\\SU\\A1217', 'LUKA', 'ICT', 'CUU', 'ME', 'TWO', '0000-00-00 00:00:00');
