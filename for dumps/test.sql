-- phpMyAdmin SQL Dump
-- version 4.0.10.6
-- http://www.phpmyadmin.net
--
-- Хост: 127.0.0.1:3306
-- Время создания: Сен 17 2015 г., 17:20
-- Версия сервера: 5.5.41-log
-- Версия PHP: 5.3.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `test`
--

-- --------------------------------------------------------

--
-- Структура таблицы `images`
--

CREATE TABLE IF NOT EXISTS `images` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `image` blob NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `login` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `photo` blob NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_2` (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=28 ;

-- --------------------------------------------------------

--
-- Структура таблицы `users_settings`
--

CREATE TABLE IF NOT EXISTS `users_settings` (
  `id` int(11) NOT NULL,
  `nick` varchar(20) NOT NULL,
  `age` int(150) NOT NULL,
  `sex` int(1) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='All users settings will be here';

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
