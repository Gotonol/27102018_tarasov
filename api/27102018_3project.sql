-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Мар 16 2019 г., 09:27
-- Версия сервера: 10.1.37-MariaDB
-- Версия PHP: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `27102018_3project`
--
CREATE DATABASE IF NOT EXISTS `27102018_3project` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `27102018_3project`;

-- --------------------------------------------------------

--
-- Структура таблицы `products`
--

CREATE TABLE IF NOT EXISTS `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `sku` int(11) NOT NULL,
  `description` text NOT NULL,
  `price` float NOT NULL,
  `photo` varchar(255) NOT NULL,
  `active` tinyint(1) NOT NULL DEFAULT '1',
  `sale` float NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `products`
--

INSERT INTO `products` (`id`, `name`, `sku`, `description`, `price`, `photo`, `active`, `sale`) VALUES
(1, 'Куртка синяя ', 234235, 'Синяя куртка', 5400, '/images/catalog/1.jpg', 1, 0),
(2, 'Куртка с капюшоном', 234236, 'Куртка с капюшоном', 6100, '/images/catalog/2.jpg', 1, 0),
(3, 'Куртка с карманами', 234237, 'Куртка с карманами', 9200, '/images/catalog/3.png', 1, 0),
(4, 'Кожаная куртка', 234238, 'Кожаная куртка', 22500, '/images/catalog/4.jpg', 1, 0),
(5, 'Куртка Casual', 234239, 'Куртка Casual', 8800, '/images/catalog/5.jpg', 1, 0),
(6, 'Стильная кожаная куртка', 234240, 'Стильная кожаная куртка', 12800, '/images/catalog/6.jpg', 1, 0),
(7, 'Кеды серые', 234342, 'Кеды серые', 2900, '/images/catalog/7.jpg', 1, 0),
(8, 'Кеды черные', 234341, 'Кеды черные', 4500, '/images/catalog/8.jpg', 1, 0),
(9, 'Кеды Casual', 234342, 'Кеды Casual', 5900, '/images/catalog/9.jpg', 1, 0),
(10, 'Кеды всепогодные', 234343, 'Кеды всепогодные', 9200, '/images/catalog/10.jpg', 1, 0.15),
(11, 'Джинсы', 234350, 'Джинсы', 4800, '/images/catalog/11.jpg', 1, 0),
(12, 'Джинсы голубые', 234351, 'Джинсы голубые', 4200, '/images/catalog/12.jpg', 1, 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
