-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 
-- Версия на сървъра: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `store`
--

-- --------------------------------------------------------

--
-- Структура на таблица `brands`
--

CREATE TABLE IF NOT EXISTS `brands` (
  `brands_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  PRIMARY KEY (`brands_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `brands`
--

INSERT INTO `brands` (`brands_id`, `name`) VALUES
(1, 'Opel'),
(2, 'BMW'),
(3, 'vw');

-- --------------------------------------------------------

--
-- Структура на таблица `cars`
--

CREATE TABLE IF NOT EXISTS `cars` (
  `cars_id` int(11) NOT NULL AUTO_INCREMENT,
  `color` varchar(100) NOT NULL,
  `year` varchar(100) CHARACTER SET utf8mb4 NOT NULL,
  `brands_id` int(11) NOT NULL,
  `regions_id` int(11) NOT NULL,
  PRIMARY KEY (`cars_id`),
  KEY `regions_id` (`regions_id`),
  KEY `brands_id` (`brands_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `cars`
--

INSERT INTO `cars` (`cars_id`, `color`, `year`, `brands_id`, `regions_id`) VALUES
(1, 'зелен', '2001', 1, 1),
(2, 'жълт', '2007', 2, 2),
(3, 'червен', '2010', 3, 3);

-- --------------------------------------------------------

--
-- Структура на таблица `regions`
--

CREATE TABLE IF NOT EXISTS `regions` (
  `regions_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `country` varchar(100) NOT NULL,
  PRIMARY KEY (`regions_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- Схема на данните от таблица `regions`
--

INSERT INTO `regions` (`regions_id`, `name`, `country`) VALUES
(1, 'Варна', 'BG'),
(2, 'София', 'BG'),
(3, 'Пловдив', 'BG');

--
-- Ограничения за дъмпнати таблици
--

--
-- Ограничения за таблица `cars`
--
ALTER TABLE `cars`
  ADD CONSTRAINT `cars_ibfk_5` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`brands_id`),
  ADD CONSTRAINT `cars_ibfk_1` FOREIGN KEY (`regions_id`) REFERENCES `regions` (`regions_id`),
  ADD CONSTRAINT `cars_ibfk_2` FOREIGN KEY (`regions_id`) REFERENCES `regions` (`regions_id`),
  ADD CONSTRAINT `cars_ibfk_3` FOREIGN KEY (`brands_id`) REFERENCES `brands` (`brands_id`),
  ADD CONSTRAINT `cars_ibfk_4` FOREIGN KEY (`regions_id`) REFERENCES `regions` (`regions_id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
