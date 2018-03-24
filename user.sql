-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2016 at 10:36 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srishti`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `uid` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(40) DEFAULT NULL,
  `password` text,
  `email` varchar(200) DEFAULT NULL,
  `downloaded` varchar(2) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`uid`, `username`, `password`, `email`, `downloaded`) VALUES
(1, 'admin', 'admin', 'admin', 'y'),
(6, 'harmitjasani', '74bc032b4da1dd01d8d6854fa65567e6ef23808654f872e46ef533555722e5f656a3a5386dfd5989817cd955d45a52766a8d25d227c6ba8d007c75bae85fba02', 'harmitjasani@gmail.com', NULL),
(7, 'batmanbegins', 'b0764cc4338824db3a72ec1b002ad962641173753eb84e8c38eaad81fbbf04fc17094a1be880c9a1ba84ecaacb38e3539e4a2910d17571ffb5abaa6af1c5622f', 'batman@gmail.com', 'y'),
(8, 'harmitsrishti', '8ee8f04e73f2d2a6a69699aa4b882cca259b0b7ba8aad80b3eceec4f668ce8a5b81d8a0607ac7355f26a2b03ec400ac9b5a383ad61435ea84f7309bfbde7915f', 'harmit@gmail.com', 'y');
