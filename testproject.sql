-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3308
-- Generation Time: Nov 24, 2020 at 04:19 PM
-- Server version: 8.0.18
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `testproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

DROP TABLE IF EXISTS `students`;
CREATE TABLE IF NOT EXISTS `students` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `Phone` varchar(15) NOT NULL,
  `address` varchar(200) NOT NULL,
  `status` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `Phone`, `address`, `status`) VALUES
(21, 'vinelyz@mailinator.com', 'huzibe@mailinator.com', 'qebenihul@maili', 'culokil@mailinator.com', 0),
(20, 'kodulufyj@mailinator.com', 'pesoradem@mailinator.com', 'fudyc@mailinato', 'zokyjebuje@mailinator.com', 0),
(18, 'bahulu@mailinator.com', 'tocan@mailinator.com', 'kubys@mailinato', 'jucivowub@mailinator.com', 0),
(19, 'nywefavu@mailinator.com', 'kysanedin@mailinator.com', 'neqan@mailinato', 'wihocivu@mailinator.com', 0),
(17, 'zeqexyxose@mailinator.com', 'vydydeqo@mailinator.com', '', 'cojatypin@mailinator.com', 0),
(16, 'fuzicucicu@mailinator.com', 'xogec@mailinator.com', '', 'xobysoz@mailinator.com', 0),
(10, 'qerul@mailinator.com', 'vekygi@mailinator.com', 'gelod@mailinato', 'huqul@mailinator.com', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
