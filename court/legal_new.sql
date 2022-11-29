-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 16, 2020 at 08:08 AM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `legal_new`
--

-- --------------------------------------------------------

--
-- Table structure for table `cases`
--

CREATE TABLE IF NOT EXISTS `cases` (
  `case_year` varchar(100) NOT NULL,
  `case_type` varchar(100) NOT NULL,
  `case_number` varchar(30) NOT NULL,
  `Petitioner_name` varchar(1000) NOT NULL,
  `versus` varchar(1000) NOT NULL,
  `Advocate_name` varchar(1000) NOT NULL,
  `Officer_name` varchar(1000) NOT NULL,
  `Chapter_from` varchar(10000) NOT NULL,
  `latest_Chapter_date` varchar(100) NOT NULL,
  `Liability_date` varchar(20) NOT NULL,
  `Other_information` varchar(100) NOT NULL,
  `case_status` varchar(100) NOT NULL,
  `Decision_date` varchar(100) NOT NULL,
  `favour` varchar(100) NOT NULL,
  `compliance_period` int(100) NOT NULL,
  `compliance_from_date` varchar(100) NOT NULL,
  `compliance_against_dept` varchar(1000) NOT NULL,
  `appeal` varchar(100) NOT NULL,
  PRIMARY KEY (`case_number`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cases`
--

INSERT INTO `cases` (`case_year`, `case_type`, `case_number`, `Petitioner_name`, `versus`, `Advocate_name`, `Officer_name`, `Chapter_from`, `latest_Chapter_date`, `Liability_date`, `Other_information`, `case_status`, `Decision_date`, `favour`, `compliance_period`, `compliance_from_date`, `compliance_against_dept`, `appeal`)

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(55) NOT NULL,
  `password` varchar(55) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `password`) VALUES
('admin', 'admin'),
('say', 'jake');
